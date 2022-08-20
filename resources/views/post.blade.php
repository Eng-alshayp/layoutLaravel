


<x-layout>
    <x-slot name="content">
        <article>
            <h1>
                {{ $post_content->title }}
            </h1>
            <img src="{{ $post_content->image }}" alt="">
            <p>
                {!! $post_content->body !!}
            </p>
        </article>

        <a href="/">Go Back</a>
    </x-slot>
</x-layout>

