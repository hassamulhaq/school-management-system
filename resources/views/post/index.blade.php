<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ __('Posts') }}
            <a href="{{ route('post.create') }}" class="mr-2 btn btn-xs btn-primary btn-outline">Add New</a>
        </div>
    </header>

    <div class="mt-4"></div>
    <div class="container mx-auto">
        <div class="md:w-full flex gap-2">
            <div>{{ __('All') }} (16)</div>
            <span>|</span>
            <div>{{ __('Published') }} (16)</div>
            <span>|</span>
            <div>{{ __('Draft') }} (2)</div>
            <span>|</span>
            <div>{{ __('Trash') }} (0)</div>
            <span>|</span>
        </div>
        <div class="flex">
            <div class="md:w-full">
                <div class="overflow-x-auto bg-white p-2">
                    <table class="table table-compact w-full rounded-0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Categories</th>
                            <th>Tags</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <label>
                                    <input type="checkbox" class="checkbox" />
                                </label>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
