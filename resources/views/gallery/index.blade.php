@extends('layouts.app')

@section('content')
    <h1>Галерия</h1>
    <div class="row">
        <div class="col-12">
            <a href="/gallery/create" class="btn btn-primary">Добави снимки в Галерия</a>
        </div>
    @if (count($images) > 0)
        @foreach($images as $image)
            <div class="col-md-4">
                <img class="admin-gallery-image" src="/storage/gallery_images/{{$image->gallery_image}}" alt="{{$image->title}}">
                {{$image->title}}
                <a href="/gallery/{{$image->id}}/edit" class="d-block btn btn-primary">Редактирай</a>

                {!!Form::open(['action'=>['ImageController@destroy', $image->id], 'method'=>'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Изтрий', ['class'=>'btn btn-danger d-block btn-delete'])}}
                {!!Form::close()!!}
            </div>
        @endforeach
    @else
        <div class="col">
            <p>Не са открити снимки.</p>
        </div>
    @endif
    </div>
    <div class="row">
        <div class="col">
            {{$images->links()}}
        </div>
    </div>
@endsection