@extends('layouts.plantilla')

@section ('title','Editar Video')

@section('content')
<div class="container flex justify-center mt-5">
    <div class="w-full max-w-xs">
        <form class="formCr" action="{{route('videos.update',$video)}}" method="POST">
          @csrf
          @method('put')

            <div class=" justify-center flex-shrink-0 text-blue-400 mr-6 mb-4">
                <i class="fas fa-play mr-2"></i>
                <span class="font-semibold text-xl tracking-tight">Editar Video</span>
            </div>

            <div class="mb-4">
                <label class="lbForm">
                    Nombre Video
                </label>
                <input
                    class="inpForm focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Nombre" name="name" value="{{old('name',$video->name)}}">
                @error('name')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
            </div>

            <div class="mb-4">
                <label class="lbForm">
                    Enlace Video
                </label>
                <input
                    class="inpForm focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Enlace Video" name="video" value="{{old('video',$video->video)}}">
                @error('video')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
            </div>

            <div class="mb-4">
                <label class="lbForm">
                    Categoria
                </label>
                <input
                    class="inpForm focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Categoria" name="categoria" value="{{old('video',$video->categoria)}}">
                @error('categoria')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
            </div>
            <div class="mb-4">
                <label class="lbForm">
                    Descripción
                </label>
                <textarea
                    class="inpForm focus:outline-none focus:shadow-outline"
                    cols="30" rows="10" placeholder="Descripción" name="descripcion">{{old('descripcion',$video->descripcion)}}</textarea>
                @error('descripcion')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
            </div>

            <div class="flex items-center justify-center">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Enviar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection