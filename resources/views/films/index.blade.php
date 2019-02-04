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
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <td>Номер</td>
                <td>Названия фильмов</td>
                <td>Категория</td>
                <td>Описание</td>
                <td colspan="2">Действия</td>
            </tr>
            </thead>
            <tbody>
            @foreach($films as $film)
                <tr>
                    <td>{{$film->id}}</td>
                    <td>{{$film->film_name}}</td>
                    <td>{{$film->film_category}}</td>
                    <td>{{$film->film_desciption}}</td>
                    <td><a href="{{ route('films.edit',$film->id)}}" class="btn btn-primary">Редактировать</a></td>
                    <td>
                        <form action="{{ route('films.destroy', $film->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection