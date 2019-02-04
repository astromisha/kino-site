@extends('layout')

@section('content')
    @if(!Auth::user())
        <script>window.location="/login";</script>
    @endif
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Добавить фильм
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('films.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">Название фильма:</label>
                    <input type="text" class="form-control" name="film_name"/>
                </div>
                <div class="form-group">
                    <label for="price">Категория:</label>
                    <input type="text" class="form-control" name="film_category"/>
                </div>
                <div class="form-group">
                    <label for="quantity">Описание:</label>
                    <input type="text" class="form-control" name="film_description"/>
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
@endsection