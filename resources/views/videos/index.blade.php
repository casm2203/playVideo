@extends('layouts.plantilla')

@section ('title','Inicio')

@section('content')
<div class="container mt-5">    
       
        <div class="flex flex-row justify-end">

            <div class="flex headerTable">
                <a href="{{route('videos.index')}}"><i class="fas fa-list"></i></a>
            </div>

            <div class="flex headerTable">
                <a href="{{route('videos.showgrid')}}"><i class="fas fa-th"></i></a>
            </div>
        </div>
         <div class=" justify-start headerTable">
            <h1><i class="fas fa-play mr-2"></i> Listado de videos</h1>

        </div>
    <div class="flex justify-center ">
        <table class="table-fixed shadow-xl">
            <thead>
                <tr>
                    <th class="px-4 py-2">Id</th>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Descripción</th>
                    <th class="px-4 py-2">Categoria</th>
                    <th class="px-4 py-2">Fecha de creación</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videos as $video)
                <tr>
                    <td class="border px-4 py-2">{{$video->id}}</td>
                    <td class="border px-4 py-2"><a href="{{route('videos.show',$video)}}">{{$video->name}}</a></td>
                    <td class="border px-4 py-2">{{$video->descripcion}}</td>
                    <td class="border px-4 py-2">{{$video->categoria}}</td>
                    <td class="border px-4 py-2">{{Str::substr($video->created_at, 0,-8)}}</td>
                    <td class="border px-4 py-2">
                        <div class="inline-flex">
                            <a class=" aView hover:text-white  hover:bg-blue-500 hover:border-transparent rounded-l-lg"
                                href="{{route('videos.show',$video)}}">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a class=" aEdit hover:text-white hover:bg-yellow-500 hover:border-transparent rounded-1"
                                href="{{route('videos.edit', $video)}}">
                                <i class="fas fa-pen"></i>
                            </a>
                            <form action="{{route('videos.destroy', $video)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class=" aDelet hover:text-white hover:bg-red-500 hover:border-transparent rounded-r-lg">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </div>
</div>
@endsection
