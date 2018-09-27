 <div>
    {!! Form::label('title', 'Tytuł:') !!}
</div>

<div>
    {!!Form::text('title', null)!!}
</div>    

<div>
    {!! Form::label('author', 'Autor:') !!}
</div>

<div>
     {!!Form::text('author', null)!!}
</div>      

<div>
    {!! Form::submit($buttonText) !!}
</div>