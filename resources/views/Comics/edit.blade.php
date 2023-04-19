@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-primary py-5">Modifica comic</h1>
    <div class="py-4">
        <a href="{{ route('comics.index') }}">Torna alla home</a>
    </div>
    <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="thumb" class="form-label">Cover</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb',$comic->thumb) }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title',$comic->title) }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price',$comic->price) }}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series"value="{{ old('series',$comic->series) }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old('type',$comic->type) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description',$comic->description) }}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Uscita nelle sale</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date',$comic->sale_date) }}">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection