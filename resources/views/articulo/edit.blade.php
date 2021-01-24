@extends('layouts.plantillabase')

@section('contenido')
    <h1 class="">EDITAR REGISTRO</h1>

    <form action="/articulos/{{ $articulo->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input id="codigo" type="text" name="codigo" class="form-control" value="{{ $articulo->codigo }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Descipcion</label>
            <input id="description" type="text" name="description" class="form-control" value="{{ $articulo->description }}">
        </div>


        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input id="cantidad" type="number" name="cantidad" class="form-control" value="{{ $articulo->cantidad }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="price" type="number" name="price" class="form-control" value="{{ $articulo->price }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Categoria </label>
            <input id="category" type="text" name="category" class="form-control" value="{{ $articulo->category }}">
        </div>

        <a href="/articulos" class="btn btn-secondary" tabindex="7">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>

    </form>

@endsection
