@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto text-center">
  <div class="py-15 border-b border-gray-200">
     <h1 class="text-6xl m-auto text-center ">
       Blog posts
     </h1>
  </div>

  @if(Auth::check())
  <div class="pt-15 w-4/5 m-auto">
     <a href="/blog/create"
     class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
      create post
     </a>
  </div>
  @endif

  @foreach($post as $post)
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
          <div>
              <img src="/img/images (2).jpg" width="700"  alt="">
          </div>

            <div>
              <h2 class="text-gray-700 font-bold text-5xl pb-4">
               {{$post->title}}
              </h2>

              <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{$post->user->name}}</span>, created on {{ date('JS M Y', strtotime($post->updated_at)) }}
              </span>

              <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
              {{$post->description}}
              </p>

              <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading
              </a>
            </div>
        </div> 
  @endforeach 
@endsection