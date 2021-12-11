<section class="container mx-auto p-6 font-mono">
    <div class="w-full mb-4 p-2 flex justify-end">
        <div class="mt-10 sm:mt-0">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form>
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">Cast TMDB ID</label>
                                    <input wire:model="castTMDBId" type="text" autocomplete="given-name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <x-jet-button wire:click="generateCast">Generate Cast</x-jet-button>
    </div>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">Name</th>
              <th class="px-4 py-3">Slug</th>
              <th class="px-4 py-3">Poster</th>
              <th class="px-4 py-3">Manage</th>
            </tr>
          </thead>
          <tbody class="bg-white">
              @foreach ($casts as $cast)
              <tr class="text-gray-700">
                <td class="px-4 py-3 border">
                  {{$cast->name}}
                </td>
                <td class="px-4 py-3 text-ms font-semibold border">{{$cast->slug}}</td>
                <td class="px-4 py-3 text-xs border">
                  {{$cast->poster_path}}
                </td>
                <td class="px-4 py-3 text-sm border">
                    Edit \ Delete
                </td>
              </tr>
              @endforeach
          </tbody>
          {{$casts->links()}}
        </table>
      </div>
    </div>
  </section>

