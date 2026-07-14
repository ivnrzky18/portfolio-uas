<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm rounded-lg p-6">

                <form method="POST"
                      action="{{ route('admin.categories.update', $category->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block font-medium mb-2">
                            Category Name
                        </label>

                        <input type="text"
                               name="name"
                               value="{{ $category->name }}"
                               class="w-full border rounded-lg p-3">
                    </div>

                    <button type="submit"
                            class="bg-indigo-700 text-white px-6 py-3 rounded-full">
                        Update Category
                    </button>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>