@extends('layouts.app')

@section('content')
    <h1>За мен</h1>
    <p class="jumbotron">Казвам се...</p>
    <div class="row">
    @if (count($images) > 0)
        @foreach($images as $image)
            <div class="col-sm-6 col-lg-4">
                <a href="/storage/gallery_images/{{$image->gallery_image}}" data-rel="lightcase:galleryCollection"><img src="/storage/gallery_images/{{$image->gallery_image}}" alt="{{$image->title}}"></a>
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