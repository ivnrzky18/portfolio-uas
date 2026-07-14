<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderByDesc('id')->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $iconPath = $request->file('icon')->store('icons', 'public');

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'icon' => $iconPath,
        ]);

        return redirect()->route('admin.categories.index')
                         ->with('success', 'Category berhasil ditambahkan!');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $iconPath = $category->icon;

        if ($request->hasFile('icon')) {
            Storage::disk('public')->delete($iconPath);
            $iconPath = $request->file('icon')->store('icons', 'public');
        }

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'icon' => $iconPath,
        ]);

        return redirect()->route('admin.categories.index')
                         ->with('success', 'Category berhasil diupdate!');
    }

    public function destroy(Category $category)
    {
        Storage::disk('public')->delete($category->icon);
        $category->delete();

        return redirect()->route('admin.categories.index')
                         ->with('success', 'Category berhasil dihapus!');
    }
}