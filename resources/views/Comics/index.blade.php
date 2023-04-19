@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-auto ms-auto text-primary my-5">
            Nuovo comic
            <a class="btn btn-primary mx-5" href="{{ route('comics.create') }}">Aggiungi</a>
        </div>
    </div>
    <table>
        <tr>
            <th>Cover</th>
            <th>Titolo</th>
            <th>Prezzo</th>
            <th>Serie</th>
            <th>Tipo</th>
            <th>Descrizione</th>
            <th>Uscita nelle sale</th>
        </tr>
        @foreach($comics as $comic)
        <tr>
            <td>
                <img src="{{ $comic->thumb }}" alt="" height="120" width="100">
            </td>
            <td>{{$comic->title}}</td>
            <td>€ {{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->type}}</td>
            <td>{{$comic->description}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>
                <a class="btn btn-primary mx-5" href="{{ route('comics.edit', $comic) }}">Modifica</a>
            </td>
            <td>
                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection