<section class="container p-6 mx-auto font-mono">
    <div class="flex justify-end w-full p-2 mb-4">
        <form class="flex p-2 m-2 space-x-4 bg-white rounded-md shadow">
            <div class="flex items-center p-1">
                <label for="tmdb_id_g" class="block mr-4 text-sm font-medium text-gray-700">Tmdb ID</label>
                <div class="relative rounded-md shadow-sm">
                    <input wire:model="tmdbId" id="tmdb_id_g" name="tmdb_id_g"
                        class="px-3 py-2 border border-gray-300 rounded" placeholder="Tmdb ID" />
                </div>
            </div>
            <div class="p-1">
                <button type="button" wire:click="generateMovie"
                    class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md hover:bg-green-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-green-700 disabled:opacity-50">
                    <span>Generate Movie</span>
                </button>
            </div>
        </form>
    </div>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full p-5 bg-white shadow">
            <div>
                <div class="flex justify-between">
                    <div class="flex-1">
                        <div class="relative">
                            <div class="absolute flex items-center h-full ml-2">
                                <svg class="w-4 h-4 fill-current text-primary-gray-dark" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z">
                                    </path>
                                </svg>
                            </div>

                            <input wire:model="search" type="text" placeholder="Search by title"
                                class="w-full px-8 py-3 text-sm bg-gray-100 border-transparent rounded-md md:w-2/6 focus:border-gray-500 focus:bg-white focus:ring-0" />
                        </div>
                    </div>
                    <div class="flex">
                        <select wire:model="perPage"
                            class="w-full px-4 py-3 text-sm bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:bg-white focus:ring-0">
                            <option value="5">5 Per Page</option>
                            <option value="10">10 Per Page</option>
                            <option value="15">15 Per Page</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr
                        class="font-semibold tracking-wide text-left text-gray-900 uppercase bg-gray-100 border-b border-gray-600 text-md">
                        <th class="px-4 py-3 cursor-pointer" wire:click="sortByColumn('title')">
                            <div class="flex content-center space-x-4">
                                <span>Title</span>
                                @if ($sortColumn == 'title' && $sortDirection == 'desc')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-700" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                    </svg>
                                @elseif ($sortColumn == 'title' && $sortDirection == 'asc')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-700" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                @endif
                            </div>
                        </th>
                        <th class="px-4 py-3 cursor-pointer" wire:click="sortByColumn('rating')">
                            <div class="flex content-center space-x-4">
                                <span>Rating</span>
                                @if ($sortColumn == 'rating' && $sortDirection == 'desc')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-700" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                    </svg>
                                @elseif ($sortColumn == 'rating' && $sortDirection == 'asc')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-700" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                @endif
                            </div>
                        </th>
                        <th class="px-4 py-3 cursor-pointer" wire:click="sortByColumn('visits')">
                            <div class="flex content-center space-x-4">
                                <span>Visits</span>
                                @if ($sortColumn == 'visits' && $sortDirection == 'desc')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-700" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                    </svg>
                                @elseif ($sortColumn == 'visits' && $sortDirection == 'asc')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-700" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                @endif
                            </div>
                        </th>
                        <th class="px-4 py-3">Runtime</th>
                        <th class="px-4 py-3">Published</th>
                        <th class="px-4 py-3">Poster</th>
                        <th class="px-4 py-3">Manage</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($movies as $table_movie)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <span wire:click="showMovieDeatil({{ $table_movie->id }})"
                                    class="text-blue-500 cursor-pointer hover:text-blue-700">{{ $table_movie->title }}</span>
                            </td>
                            <td class="px-4 py-3 border">
                                {{ $table_movie->rating }}
                            </td>
                            <td class="px-4 py-3 border">
                                {{ $table_movie->visits }}
                            </td>
                            <td class="px-4 py-3 font-semibold border text-ms">
                                {{ date('H:i', mktime(0, $table_movie->runtime)) }}</td>
                            <td class="px-4 py-3 font-semibold border text-ms">
                                @if ($table_movie->is_public)
                                    <span
                                        class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                        Published
                                    </span>
                                @else
                                    <span
                                        class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                        UnPublished
                                    </span>

                                @endif
                            </td>
                            <td class="px-4 py-3 font-semibold border text-ms">
                                <img class="w-12 h-12 rounded-full"
                                    src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{ $table_movie->poster_path }}">
                            </td>

                            <td class="px-4 py-3 text-sm border">
                                <x-m-button wire:click="showTrailerModal({{ $table_movie->id }})"
                                    class="text-white bg-indigo-500 hover:bg-indigo-700">Trailer</x-m-button>
                                <x-m-button wire:click="showEditModal({{ $table_movie->id }})"
                                    class="text-white bg-green-500 hover:bg-green-700">Edit</x-m-button>
                                <x-m-button wire:click="deleteMovie({{ $table_movie->id }})"
                                    class="text-white bg-red-500 hover:bg-red-700">Delete</x-m-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="p-2 m-2">
                {{ $movies->links() }}
            </div>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="showMovieModal">
        <x-slot name="title">Update Movie</x-slot>
        <x-slot name="content">
            <div class="mt-10 sm:mt-0">
                <div class="mt-5 md:mt-0 md:col-span-2" x-data="{tab: 0}">
                    <div class="flex overflow-hidden border border-black">
                        <button class="w-full px-4 py-2" x-on:click.prevent="tab = 0">Form</button>
                        <button class="w-full px-4 py-2" x-on:click.prevent="tab = 1">Tags</button>
                        <button class="w-full px-4 py-2" x-on:click.prevent="tab = 2">Casts</button>
                    </div>
                    <div>
                        <div class="p-4 space-x-2" x-show="tab === 0">
                            <form>
                                <div class="overflow-hidden shadow sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="flex flex-col">
                                            <label for="first-name"
                                                class="block mr-4 text-sm font-medium text-gray-700">Title</label>
                                            <input wire:model="title" type="text"
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                            @error('title')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="first-name"
                                                class="block mr-4 text-sm font-medium text-gray-700">Runtime</label>
                                            <input wire:model="runtime" type="text"
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                            @error('runtime')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="first-name"
                                                class="block mr-4 text-sm font-medium text-gray-700">Language</label>
                                            <input wire:model="lang" type="text"
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                            @error('lang')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="first-name"
                                                class="block mr-4 text-sm font-medium text-gray-700">Format</label>
                                            <input wire:model="videoFormat" type="text"
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                            @error('videoFormat')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="first-name"
                                                class="block mr-4 text-sm font-medium text-gray-700">Rating</label>
                                            <input wire:model="rating" type="text"
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                            @error('rating')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="first-name"
                                                class="block mr-4 text-sm font-medium text-gray-700">Poster</label>
                                            <input wire:model="posterPath" type="text"
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                            @error('posterPath')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="flex flex-col">
                                            <label for="first-name"
                                                class="block mr-4 text-sm font-medium text-gray-700">Backdrop</label>
                                            <input wire:model="backdropPath" type="text"
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                            @error('backdropPath')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="overview"
                                                class="block mr-4 text-sm font-medium text-gray-700">Overview</label>
                                            <textarea
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $overview }}</textarea>
                                            @error('overview')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col">
                                            <div class="flex items-center px-2 py-6">
                                                <input wire:model="isPublic" type="checkbox"
                                                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                <label for="remember-me" class="block ml-2 text-sm text-gray-900">
                                                    Published
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="p-4 space-x-2" x-show="tab === 1">
                            @if ($movie)
                                <livewire:movie-tag :movie="$movie" />
                            @endif
                        </div>
                        <div class="p-4 space-x-2" x-show="tab === 2">
                            @if ($movie)
                                <livewire:movie-cast :movie="$movie" />
                            @endif
                        </div>
                    </div>

                </div>
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-m-button wire:click="closeMovieModal" class="text-white bg-gray-600 hover:bg-gray-800">Cancel
            </x-m-button>
            <x-m-button wire:click="updateMovie">Update</x-m-button>
        </x-slot>
    </x-jet-dialog-modal>
    <x-jet-dialog-modal wire:model="showTrailer">
        <x-slot name="title">Trailer Movie</x-slot>
        <x-slot name="content">
            @if ($movie)
                <div class="flex m-2 space-x-4 space-y-2">
                    @foreach ($movie->trailers as $trailer)
                        <x-jet-button wire:click="deleteTrailer({{ $trailer->id }})" class="hover:bg-red-500">
                            {{ $trailer->name }}</x-jet-button>
                    @endforeach
                </div>
            @endif
            <div class="mt-10 sm:mt-0">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form>
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="flex flex-col">
                                    <label for="first-name"
                                        class="block mr-4 text-sm font-medium text-gray-700">Name</label>
                                    <input wire:model="trailerName" type="text"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    @error('trailerName')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex flex-col">
                                    <label for="embedHtml" class="block mr-4 text-sm font-medium text-gray-700">Embed
                                        Html</label>
                                    <textarea wire:model="embedHtml"
                                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                                    @error('embedHtml')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-m-button wire:click="closeMovieModal" class="text-white bg-gray-600 hover:bg-gray-800">Cancel
            </x-m-button>
            <x-m-button wire:click="addTrailer">Add Trailer</x-m-button>
        </x-slot>
    </x-jet-dialog-modal>
    <x-jet-dialog-modal wire:model="showMovieDetailModal">
        <x-slot name="title">Movie Details</x-slot>
        <x-slot name="content">
            <div class="mt-10 sm:mt-0">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    @if ($movie)
                        {{ $movie->title }}
                    @endif
                </div>
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-m-button wire:click="closeMovieModal" class="text-white bg-gray-600 hover:bg-gray-800">Cancel
            </x-m-button>
        </x-slot>
    </x-jet-dialog-modal>
</section>
