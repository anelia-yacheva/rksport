@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Администрация</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="/gallery/create" class="btn btn-primary">Добави снимки в Галерия</a>
                        </li>
                        <li class="list-group-item">
                            <a href="/gallery" class="btn btn-secondary">Редактирай Галерия</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
