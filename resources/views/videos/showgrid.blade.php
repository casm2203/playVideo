@extends('layouts.plantilla')

@section('title','Inicio')

@section('content')
<div class="container mt-5 ">

    <div class="flex flex-row justify-end ">

        <div class="flex headerTable">
            <a href="{{ route('videos.index') }}"><i class="fas fa-list"></i></a>
        </div>

        <div class="flex headerTable">
            <a href="{{ route('videos.showgrid') }}"><i class="fas fa-th"></i></a>
        </div>
    </div>
    <div class=" headerTable">
        <h1><i class="fas fa-play mr-2"></i> Videos</h1>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 ">
        @foreach($videos as $video)
            <div class="max-w-xs flex  flex-col  rounded overflow-hidden shadow-lg ">
                <div class=" flex justify-center mt-5">
                    <iframe src="https://www.youtube.com/embed/{{ Str::substr($video->video, 17) }}"
                        frameborder="1"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>

                <div class="px-6 py-4 h-64">
                    <div class="font-bold text-xl mb-2 h-auto"><a
                            href="{{ route('videos.show',$video) }}">{{ $video->name }}</a>
                    </div>
                    <div class="h-auto">
                        <p class="text-gray-700 text-base">
                            {{ $video->descripcion }}
                        </p>
                    </div>
                    <div class="mt-2 h-auto">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $video->categoria }}</span>
                    </div>
                </div>

                 <div class="inline-flex p-2 rounded">
                    <a class=" aView hover:text-white  hover:bg-blue-500 hover:border-transparent rounded-l-lg"
                        href="{{ route('videos.show',$video) }}">
                        <i class="fas fa-eye"></i><span>Ver</span>
                    </a>
                    <a class=" aEdit hover:text-white hover:bg-yellow-500 hover:border-transparent rounded-1"
                        href="{{ route('videos.edit', $video) }}">
                        <i class="fas fa-pen"></i><span>Editar</span>
                    </a>
                    <form action="{{ route('videos.destroy', $video) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit"
                            class=" aDelet hover:text-white hover:bg-red-500 hover:border-transparent rounded-r-lg">
                            <i class="fas fa-trash"></i><span>Eliminar</span>
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
