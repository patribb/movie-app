<section class="container mx-auto p-6 font-mono">
    <div class="w-full flex mb-4 p-2 justify-end">
        <x-jet-button wire:click="showCreateModal">Create Tag</x-jet-button>
    </div>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full shadow p-5 bg-white">
            <div class="relative">
                <div class="absolute flex items-center ml-2 h-full">
                    <svg class="w-4 h-4 fill-current text-primary-gray-dark" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z">
                        </path>
                    </svg>
                </div>

                <input wire:model="search" type="text" placeholder="Search by title"
                    class="px-8 py-3 w-full md:w-2/6 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm" />
            </div>

            <div class="flex justify-between mt-4">
                <p class="font-medium">Filters</p>

                <button wire:click="resetFilters"
                    class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium rounded-md">Reset
                    Filter</button>
            </div>

            <div>
                <div class="flex justify-between space-x-4 mt-4">
                    <select wire:model="sort"
                        class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                        <option value="asc">Asc</option>
                        <option value="desc">Desc</option>
                    </select>

                    <select wire:model="perPage"
                        class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                        <option value="5">5 Per Page</option>
                        <option value="10">10 Per Page</option>
                        <option value="15">15 Per Page</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr
                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Slug</th>
                        <th class="px-4 py-3">Manage</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($tags as $tag)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                {{ $tag->tag_name }}
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">{{ $tag->slug }}</td>

                            <td class="px-4 py-3 text-sm border">
                                <x-m-button wire:click="showEditModal({{ $tag->id }})"
                                    class="bg-green-500 hover:bg-green-700 text-white">Edit</x-m-button>
                                <x-m-button wire:click="deleteTag({{ $tag->id }})"
                                    class="bg-red-500 hover:bg-red-700 text-white">Delete</x-m-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="m-2 p-2">
                {{ $tags->links() }}
            </div>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="showTagModal">
        @if ($tagId)
            <x-slot name="title">Update Tag</x-slot>
        @else
            <x-slot name="title">Create Tag</x-slot>
        @endif
        <x-slot name="content">
            <div class="mt-10 sm:mt-0">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form>
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">Tag
                                            name</label>
                                        <input wire:model="tagName" type="text" autocomplete="given-name"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-m-button wire:click="closeTagModal" class="bg-gray-600 hover:bg-gray-800 text-white">Cancel</x-m-button>
            @if ($tagId)
                <x-m-button wire:click="updateTag">Update</x-m-button>
            @else
                <x-m-button wire:click="createTag">Create</x-m-button>
            @endif
        </x-slot>
    </x-jet-dialog-modal>
</section>
