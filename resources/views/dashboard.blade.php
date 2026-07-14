<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-3xl text-gray-900 leading-tight">
                @role('owner')
                    Owner Dashboard
                @else
                    Teacher Dashboard
                @endrole
            </h2>
        </div>
    </x-slot>

    <div class="py-10 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-xl shadow-sm p-10">

                <div class="flex flex-row justify-between items-center w-full">

                    <!-- Courses -->
                    <div class="flex flex-col items-center w-1/5">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-10 h-10 text-gray-700 mb-2"
                             fill="currentColor"
                             viewBox="0 0 20 20">
                            <path d="M2 6a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"/>
                        </svg>

                        <p class="text-gray-500 text-sm">Courses</p>

                        <h2 class="text-3xl font-bold text-gray-900">
                            {{ $courses }}
                        </h2>
                    </div>

                    @role('owner')

                    <!-- Transactions -->
                    <div class="flex flex-col items-center w-1/5">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-10 h-10 text-gray-700 mb-2"
                             fill="currentColor"
                             viewBox="0 0 20 20">
                            <path d="M4 4h12a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2z"/>
                        </svg>

                        <p class="text-gray-500 text-sm">Transactions</p>

                        <h2 class="text-3xl font-bold text-gray-900">
                            {{ $transactions }}
                        </h2>
                    </div>

                    @endrole

                    <!-- Students -->
                    <div class="flex flex-col items-center w-1/5">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-10 h-10 text-gray-700 mb-2"
                             fill="currentColor"
                             viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zm8 0a3 3 0 11-6 0 3 3 0 016 0zM6 11c3.314 0 6 2.239 6 5v1H0v-1c0-2.761 2.686-5 6-5zm8 0c3.314 0 6 2.239 6 5v1h-6v-1c0-1.216-.355-2.352-.965-3.309A8.948 8.948 0 0114 11z"/>
                        </svg>

                        <p class="text-gray-500 text-sm">Students</p>

                        <h2 class="text-3xl font-bold text-gray-900">
                            {{ $students }}
                        </h2>
                    </div>

                    @role('owner')

                    <!-- Teachers -->
                    <div class="flex flex-col items-center w-1/5">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-10 h-10 text-gray-700 mb-2"
                             fill="currentColor"
                             viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M18 10A8 8 0 112 10a8 8 0 0116 0zM10 8a2 2 0 100-4 2 2 0 000 4zm-3 6a3 3 0 116 0H7z"
                                  clip-rule="evenodd"/>
                        </svg>

                        <p class="text-gray-500 text-sm">Teachers</p>

                        <h2 class="text-3xl font-bold text-gray-900">
                            {{ $teachers }}
                        </h2>
                    </div>

                    <!-- Categories -->
                    <div class="flex flex-col items-center w-1/5">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-10 h-10 text-gray-700 mb-2"
                             fill="currentColor"
                             viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6z"
                                  clip-rule="evenodd"/>
                        </svg>

                        <p class="text-gray-500 text-sm">Categories</p>

                        <h2 class="text-3xl font-bold text-gray-900">
                            {{ $categories }}
                        </h2>
                    </div>

                    @endrole

                </div>

            </div>

        </div>
    </div>
</x-app-layout>