@extends('layouts.app')

@section('content')
<div class="container">
    <table>
        <tr>
            <th>Titolo</th>
            <th>Prezzo</th>
            <th>Serie</th>
            <th>Tipo</th>
            <th>Descrizione</th>
            <th>Uscita nelle sale</th>
        </tr>
        @foreach($comics as $comic)
        <tr>
            <td>{{$comic->title}}</td>
            <td>€ {{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->type}}</td>
            <td>{{$comic->description}}</td>
            <td>{{$comic->sale_date}}</td>
        </tr>
        @endforeach
        <tr>
            <a href="{{route('comics.show', $comic->id)}}"></a>
        </tr>
    </table>
</div>
@endsection