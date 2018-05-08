@extends('layouts.app')

@section('content')
    <h1>Галерия</h1>
    <div class="row">
        <div class="col">
            <p>Форма за добавяне на снимки към Галерия</p>
            {!! Form::open(['action'=>'ImageController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::file('gallery_image')}}
                </div>
                <div class="form-group">
                    {{Form::label('title', 'Заглавие на снимка')}}
                    {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Заглавие на снимка'])}}
                </div>
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection