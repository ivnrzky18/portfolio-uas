<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\SubscribeTransaction; 
use App\Models\User;
use App\Models\Category;
use App\Models\CourseStudent; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Inisialisasi variabel awal
        $courses = 0;
        $transactions = 0; 
        $students = 0;
        $teachers = 0;
        $categories = 0;

        if ($user && $user->hasRole('owner')) {
            
            $courses = Course::count();
            $transactions = SubscribeTransaction::count(); 
            $students = User::whereHas('roles', function($q){ $q->where('name', 'student'); })->count();
            $teachers = User::whereHas('roles', function($q){ $q->where('name', 'teacher'); })->count();
            $categories = Category::count();
            
        } elseif ($user && $user->hasRole('teacher')) {
            
            $coursesQuery = Course::query();
            $coursesQuery->whereHas('teacher', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            });
            
            $courses = $coursesQuery->count();
            
            $students = CourseStudent::whereIn('course_id', $coursesQuery->select('id'))
                ->distinct('user_id')
                ->count('user_id');
        }

        return view('dashboard', compact(
            'courses', 
            'transactions', 
            'students', 
            'teachers', 
            'categories'
        ));
    }
}