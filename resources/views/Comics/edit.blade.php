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
            <input type="text" class="form-control @error('thumb') is-invalid @enderror"" id="thumb" name="thumb" value="{{ old('thumb',$comic->thumb) }}">
            @error('thumb')
                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror"" id="title" name="title" value="{{ old('title',$comic->title) }}">
            @error('title')
                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror"" id="price" name="price" value="{{ old('price',$comic->price) }}">
            @error('price')
                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror"" id="series" name="series"value="{{ old('series',$comic->series) }}">
            @error('series')
                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror"" id="type" name="type" value="{{ old('type',$comic->type) }}">
            @error('type')
                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror"" id="description" name="description" value="{{ old('description',$comic->description) }}">
            @error('description')
                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Uscita nelle sale</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror"" id="sale_date" name="sale_date" value="{{ old('sale_date',$comic->sale_date) }}">
            @error('sale_date')
                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
    <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->
</div>
@endsection