<x-front-layout>
<main class="max-w-6xl min-h-screen mx-auto mt-6">
    <section class="p-2 mt-4 bg-gray-200 rounded dark:text-white dark:bg-gray-900">
        <div class="p-2 m-2 text-2xl font-bold text-indigo-600 dark:text-indigo-300">
            <h1>Movies</h1>
        </div>
        <div class="grid grid-cols-2 gap-4 rounded sm:grid-cols-3 md:grid-cols-4">
            @foreach ($movies as $movie)
            <x-movie-card>
                <x-slot name='image'>
                   <a href="">
                    <div class="aspect-w-2 aspect-h-3">
                        <img src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{$movie->poster_path}}" alt="" class="object-cover">
                        <div class="absolute top-0 left-0 w-12 h-8 font-bold text-center text-blue-400 bg-gray-800">New</div>
                    </div>
                   </a>
                </x-slot>
                <a href="/">
                    <div class="font-bold dark:text-white group-hover:text-blue-400">{{$movie->title}}</div>
                </a>
            </x-movie-card>
            @endforeach
        </div>
    </section>
    <section class="p-2 mt-4 bg-gray-200 rounded dark:text-white dark:bg-gray-900">
        <div class="p-2 m-2 text-2xl font-bold text-indigo-600 dark:text-indigo-300">
            <h1>Episodes</h1>
        </div>
        <div class="grid grid-cols-2 gap-4 rounded sm:grid-cols-3 md:grid-cols-4">
            @foreach ($episodes as $episode)
            <x-movie-card>
                <x-slot name='image'>
                   <a href="">
                    <div class="aspect-w-2 aspect-h-3">
                        <img src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{$episode->season->poster_path}}" alt="" class="object-cover">
                        <div class="absolute top-0 left-0 w-12 h-8 font-bold text-center text-blue-400 bg-gray-800">New</div>
                    </div>
                   </a>
                </x-slot>
                <a href="/">
                    <div class="font-bold dark:text-white group-hover:text-blue-400">{{$episode->name}}</div>
                </a>
            </x-movie-card>
            @endforeach
        </div>
    </section>
    <section class="p-2 mt-4 bg-gray-200 rounded dark:text-white dark:bg-gray-900">
        <div class="p-2 m-2 text-2xl font-bold text-indigo-600 dark:text-indigo-300">
            <h1>Series</h1>
        </div>
        <div class="grid grid-cols-2 gap-4 rounded sm:grid-cols-3 md:grid-cols-4">
            @foreach ($series as $serie)
            <x-movie-card>
                <x-slot name='image'>
                   <a href="">
                    <div class="aspect-w-2 aspect-h-3">
                        <img src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{$serie->poster_path}}" alt="" class="object-cover">
                        <div class="absolute top-0 left-0 w-12 h-8 font-bold text-center text-blue-400 bg-gray-800">New</div>
                    </div>
                   </a>
                </x-slot>
                <a href="/">
                    <div class="font-bold dark:text-white group-hover:text-blue-400">{{$serie->name}}</div>
                </a>
            </x-movie-card>
            @endforeach
        </div>
    </section>
</main>
</x-front-layout>
