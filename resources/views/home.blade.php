@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-3">
        <h1
            class="mt-20 text-center text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
            Welcome to The Blog
        </h1>

        <div class="mx-auto mt-20">
            @foreach (\App\Models\Post::all() as $post)
                <div class="mb-5 border-b border-gray-200 pb-5">
                    <p class="mb-2 text-2xl font-bold">{{ $post->title }}</p>
                    <p>{{ Str::limit($post->body, 100) }}</p>
                    <a class="text-green-800" href="{{ route('post-slug', $post->slug) }}"> show</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
