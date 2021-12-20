<x-front-layout>
<main class="max-w-6xl min-h-screen mx-auto mt-6">
    <section class="p-2 mt-4 bg-gray-200 rounded dark:text-white dark:bg-gray-900">
        <div class="p-2 m-2 text-2xl font-bold text-center text-indigo-600 dark:text-indigo-300">
            <h1>Movies</h1>
        </div>
        <div class="grid grid-cols-2 gap-4 rounded sm:grid-cols-3 md:grid-cols-4">
            <x-movie-card>
                <x-slot name='image'>
                    <div class="aspect-w-2 aspect-h-3">
                        <img src="https://cdn.pixabay.com/photo/2019/10/17/21/17/joker-4557864_960_720.jpg" alt="" class="object-cover">
                        <div class="absolute top-0 left-0 w-12 h-8 font-bold text-center text-blue-400 bg-gray-800">New</div>
                    </div>
                </x-slot>
                <a href="/">
                    <div class="font-bold dark:text-white group-hover:text-blue-400">Movie Title</div>
                </a>
            </x-movie-card>
            <x-movie-card>
                <x-slot name='image'>
                    <div class="aspect-w-2 aspect-h-3">
                        <img src="https://cdn.pixabay.com/photo/2019/10/17/21/17/joker-4557864_960_720.jpg" alt="" class="object-cover">
                        <div class="absolute top-0 left-0 w-12 h-8 font-bold text-center text-blue-400 bg-gray-800">New</div>
                    </div>
                </x-slot>
                <a href="/">
                    <div class="font-bold dark:text-white group-hover:text-blue-400">Movie Title</div>
                </a>
            </x-movie-card>
            <x-movie-card>
                <x-slot name='image'>
                    <div class="aspect-w-2 aspect-h-3">
                        <img src="https://cdn.pixabay.com/photo/2019/10/17/21/17/joker-4557864_960_720.jpg" alt="" class="object-cover">
                        <div class="absolute top-0 left-0 w-12 h-8 font-bold text-center text-blue-400 bg-gray-800">New</div>
                    </div>
                </x-slot>
                <a href="/">
                    <div class="font-bold dark:text-white group-hover:text-blue-400">Movie Title</div>
                </a>
            </x-movie-card>
            <x-movie-card>
                <x-slot name='image'>
                    <div class="aspect-w-2 aspect-h-3">
                        <img src="https://cdn.pixabay.com/photo/2019/10/17/21/17/joker-4557864_960_720.jpg" alt="" class="object-cover">
                        <div class="absolute top-0 left-0 w-12 h-8 font-bold text-center text-blue-400 bg-gray-800">New</div>
                    </div>
                </x-slot>
                <a href="/">
                    <div class="font-bold dark:text-white group-hover:text-blue-400">Movie Title</div>
                </a>
            </x-movie-card>
            <x-movie-card>
                <x-slot name='image'>
                    <div class="aspect-w-2 aspect-h-3">
                        <img src="https://cdn.pixabay.com/photo/2019/10/17/21/17/joker-4557864_960_720.jpg" alt="" class="object-cover">
                        <div class="absolute top-0 left-0 w-12 h-8 font-bold text-center text-blue-400 bg-gray-800">New</div>
                    </div>
                </x-slot>
                <a href="/">
                    <div class="font-bold dark:text-white group-hover:text-blue-400">Movie Title</div>
                </a>
            </x-movie-card>
            <x-movie-card>
                <x-slot name='image'>
                    <div class="aspect-w-2 aspect-h-3">
                        <img src="https://cdn.pixabay.com/photo/2019/10/17/21/17/joker-4557864_960_720.jpg" alt="" class="object-cover">
                        <div class="absolute top-0 left-0 w-12 h-8 font-bold text-center text-blue-400 bg-gray-800">New</div>
                    </div>
                </x-slot>
                <a href="/">
                    <div class="font-bold dark:text-white group-hover:text-blue-400">Movie Title</div>
                </a>
            </x-movie-card>
            <x-movie-card>
                <x-slot name='image'>
                    <div class="aspect-w-2 aspect-h-3">
                        <img src="https://cdn.pixabay.com/photo/2019/10/17/21/17/joker-4557864_960_720.jpg" alt="" class="object-cover">
                        <div class="absolute top-0 left-0 w-12 h-8 font-bold text-center text-blue-400 bg-gray-800">New</div>
                    </div>
                </x-slot>
                <a href="/">
                    <div class="font-bold dark:text-white group-hover:text-blue-400">Movie Title</div>
                </a>
            </x-movie-card>
            <x-movie-card>
                <x-slot name='image'>
                    <div class="aspect-w-2 aspect-h-3">
                        <img src="https://cdn.pixabay.com/photo/2019/10/17/21/17/joker-4557864_960_720.jpg" alt="" class="object-cover">
                        <div class="absolute top-0 left-0 w-12 h-8 font-bold text-center text-blue-400 bg-gray-800">New</div>
                    </div>
                </x-slot>
                <a href="/">
                    <div class="font-bold dark:text-white group-hover:text-blue-400">Movie Title</div>
                </a>
            </x-movie-card>
        </div>
    </section>
    <section class="p-2 mt-4 bg-gray-200 rounded dark:text-white dark:bg-gray-900">
        <div class="p-2 m-2 text-2xl font-bold text-center text-indigo-600 dark:text-indigo-300">
            <h1>Episodes</h1>
        </div>
        <div class="grid grid-cols-2 gap-4 rounded sm:grid-cols-3 md:grid-cols-4">
            Episode Card
        </div>
    </section>
    <section class="p-2 mt-4 bg-gray-200 rounded dark:text-white dark:bg-gray-900">
        <div class="p-2 m-2 text-2xl font-bold text-center text-indigo-600 dark:text-indigo-300">
            <h1>Series</h1>
        </div>
        <div class="grid grid-cols-2 gap-4 rounded sm:grid-cols-3 md:grid-cols-4">
            Serie Card
        </div>
    </section>
</main>
</x-front-layout>
