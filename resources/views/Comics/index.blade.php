@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-auto ms-auto">
            Nuovo comic
            <a class="btn btn-primary mx-5" href="{{ route('comics.create') }}">Aggiungi</a>
        </div>
    </div>
    <table>
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
                <img src="{{ $comic->thumb }}" alt="" height="100">
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
        </tr>
        @endforeach
    </table>
</div>
@endsection