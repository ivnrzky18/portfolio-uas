<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            New Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">

                <form action="{{ route('admin.categories.store') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Name
                        </label>

                        <input type="text"
                               name="name"
                               class="w-full rounded-lg border-gray-300"
                               placeholder="Enter category name">
                    </div>

                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Icon
                        </label>

                        <input type="file"
                               name="icon"
                               class="w-full rounded-lg border-gray-300">
                    </div>

                    <div style="margin-top:30px; text-align:right;">
    <button type="submit"
            style="background:#4338ca;color:white;padding:15px 30px;border:none;border-radius:9999px;font-weight:bold;font-size:16px;">
        Add New Category
    </button>
</div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>