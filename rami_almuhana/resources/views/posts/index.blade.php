<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('posts.create') }}" class="btn-link btn-lg mb-2">+ New Post</a>
        @foreach ($posts as $post)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h1 class="font-bold text-2xl">
                        <a href="{{ route('posts.show', $post) }}">{{ Auth::user()->name }}</a>
                    </h1>

                    <h2 class="font-bold text-2x1">
                        {{ $post->title }}
                    </h2>
                    <p class="mt-2">
                        {{ Str::limit( $post->text, 200 ) }}
                    </p>
                    <span>
                        {{ $post->updated_at->diffForHumans() }}
                    </span>
                </div>
            @endforeach
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
