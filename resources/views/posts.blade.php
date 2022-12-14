


<x-layout>
    <x-slot name="content">
        @foreach($posts as $post)
            <article>
                <h1>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h1>

                <p>
                    {{ $post->excerpt }}
                </p>
            </article>
        @endforeach
    </x-slot>

</x-layout>
