<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800">
                Manage Categories
            </h2>

            <a href="{{ route('admin.categories.create') }}"
               style="background:#4338ca;color:white;padding:12px 24px;border-radius:999px;text-decoration:none;font-weight:bold;">
                Add New
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm rounded-lg p-6">

                <div class="flex items-center justify-between">

                    <div class="flex items-center gap-4">

                        <img src="https://cdn.pixabay.com/photo/2015/12/04/14/05/code-1076536_1280.jpg"
                             alt=""
                             style="width:80px;height:80px;border-radius:12px;object-fit:cover;">

                        <div>
                            <h3 style="font-size:20px;font-weight:bold;">
                                Software Development
                            </h3>

                            <p style="color:gray;">
                                9 Juni 2026
                            </p>
                        </div>

                    </div>

                    <div style="display:flex;gap:10px;">

                        <a href="{{ route('admin.categories.edit', 1) }}"
                           style="background:#4338ca;color:white;padding:12px 24px;border-radius:999px;text-decoration:none;font-weight:bold;">
                            Edit
                        </a>

                        <button
                            style="background:#b91c1c;color:white;padding:12px 24px;border-radius:999px;border:none;font-weight:bold;">
                            Delete
                        </button>

                    </div>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>