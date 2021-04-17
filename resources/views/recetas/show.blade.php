@extends('layouts.app')

@section('botones')
    <div><a href="{{route('recetas.index')}}" class="btn btn-primary mr-2">Regresar </a></div>
    <div>
        <br>
        <a href="{{route('recetas.edit', ['receta' => $receta->id])}}" class="btn btn-dark  mb-2">Editar</a>
    </div>
@endsection

@section('content')


    <article class="contenido-receta">
        
        <h1 class="text-center mb-4">{{$receta->Titulo}}</h1>
        <div class="imagen-receta" align="center">
            <img src="/storage/{{$receta->imagen}}"  style="width: 600px">
        </div>
        <div class="receta-meta mt-2">
            <p>
                <span class="font-weight-bold text-primary">Escrito en:</span>
                {{$receta->categoria->nombre}}
            </p>
            <p>
                <span class="font-weight-bold text-primary">Autor:</span>
                {{-- TODO: mostrar el usuario --}}
                {{$receta->autor->name}}
            </p>
            <p>
                <span class="font-weight-bold text-primary">Fecha de creacion:</span>
                @php
                    $fecha = $receta->created_at
                @endphp
                <fecha-receta fecha="{{$fecha}}"></fecha-receta>

            </p>

            <div class="ingredientes">
                <h2 class="my-3 text-primary">Preparacion</h2>
                {!! $receta->Preparacion !!}
            </div>

            <div class="ingredientes">
                <h2 class="my-3 text-primary">Ingredientes</h2>
                {!! $receta->Ingredientes !!}
            </div>
        </div>
    </article>
@endsection