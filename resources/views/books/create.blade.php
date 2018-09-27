@extends('master')
@section('content')

<h1>Dodaj nową książkę</h1>
<div class="edit">
    
    {!! Form::open(['url' => 'books']) !!}
    
        @include('books.form', ['buttonText' => 'Dodaj książkę'])
        @include('books.form_errors')

    {!! Form::close()!!}
</div>
<br>
<a href="http://biblioteka2.test">Powrót</a>  
@stop        