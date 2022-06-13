@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Copertina</th>
            <th scope="col">Anno</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                <th>{{$book->id}}</th>
                <td>{{$book->title}}</td>
                <td>
                    <img src="{{$book->image}}" alt="{{$book->title}}" width="80">
                </td>
                <td>{{$book->creation_year}}</td>
                <td>{{$book->description}}</td>
                <td>
                    <a href="" class="btn btn-primary">Vedi</a>
                </td>
                </tr>
            @empty
                <h2>Lista vuota</h2>
            @endforelse
        </tbody>
    </table>
</div>
@endsection