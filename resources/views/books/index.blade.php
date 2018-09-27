@extends('master')
@section('content')

<h1>Biblioteka - Kamil Nowik</h1>
<div class="newbook"><a href="http://biblioteka2.test/books/create">Dodaj nową książkę!</a></div>

@foreach($books as $book)

<div class="book">
	@if(strlen($book->title)<=10)
		<div class="title">{{$book->title}}</div>
	@endif
	@if(strlen($book->title)>10)
		<div class="title">{{substr ($book->title, 0, 10).'...' }}</div>
	@endif
	<div class="author">{{$book->author}}</div>
	<br>

	<div class="buttons">
		<a href="{{action('BooksController@edit', $book->id)}}">Edytuj</a>
	</div>
	<div class="buttons">
		{!! Form::open(['method'=>'DELETE', 'action' => ['BooksController@destroy', $book->id]]) !!}

       <div>
           {!! Form::submit('Usuń') !!}
       </div>

    {!! Form::close()!!}
	</div>
	
	<br><br>
</div>
@endforeach
@stop