@extends('layouts.plantilla')

@section ('title','Video '.$video->name)

@section('content')
<div class="container justify-center mt-5 shadow-xl p-5">
    <div>
        <h1 class="font-sans text-3xl font-semibold">{{$video->name}}</h1>
    </div>
    <div>
        
    <iframe class="mi-iframe" src="https://www.youtube.com/embed/{{Str::substr($video->video, 17)}}" 
            frameborder="1"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
            
    </div>
    <br>
    <div>
        <p class="font-sans"><strong>Descripcion: </strong></p>
         <p class="font-sans">{{$video->descripcion}}</p> 
        
    </div>
    <br>
    <div>
        <p class="font-sans"><strong>Categoria: </strong>{{$video->categoria}}</p>
    </div>
    
    <div class="mt-5 ">
        <a class="font-sans bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            href="{{route('videos.index')}}">Volver</a>
    </div>
</div>
@endsection
