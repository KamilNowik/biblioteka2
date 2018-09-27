@extends('master')
@section('content')
<h1>Edycja</h1>
<div class="edit">
    
    {!! Form::model($book,['method'=>'PATCH', 'action' => ['BooksController@update', $book->id]]) !!}
    
       @include('books.form', ['buttonText' => 'Zapisz zmiany'])
        @include('books.form_errors')

    {!! Form::close()!!}
</div>
 <br>	
<a href="http://biblioteka2.test">Powrót</a>     
@stop     