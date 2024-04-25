@extends('layouts.admin')

@section('searchRouteAdmin')
    {{route('admin.courses.search')}}
@endsection

@section('content')
    <a href="{{route('courses.create')}}" class="btn btn-success mt-3 w-25">Додати</a>
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Назва</th>
            <th scope="col">Тег</th>
            <th scope="col">Зображення</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Опис</th>
            <th scope="col">Відеоролик</th>
            <th scope="col">Оновлення</th>
            <th scope="col">Видалення</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->tag}}</td>
                <td>{{$data->image}}</td>
                <td>{{$data->title_description}}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->video_lesson}}</td>
                <td><a href="{{ route('courses.edit', $data->id) }}" class="btn btn-primary">Змінити</a></td>
                <td>
                    <form action="{{ route('courses.destroy', $data->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Видалити">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
