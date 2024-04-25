@extends('layouts.default')

@section('content')
    <section class="d-flex flex-wrap">
        <main style="width: 55%; margin-left: 5%;" class="container">
            {{--<div class="d-flex mt-2 justify-content-center">
                <div>
                    <a href="{{ route('news.create', $news->id) }}" class="btn btn-outline-success">Змінити</a>
                </div>
                <div style="margin-left: 10px">
                    <a href="{{ route('news.edit', $news->id) }}" class="btn btn-outline-primary">Змінити</a>
                </div>
                <div style="margin-left: 10px">
                    <form action="{{ route('news.destroy', $news->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-outline-danger" value="Видалити">
                    </form>
                </div>
                <div style="margin-left: 10px">
                    <a href="{{ route('news.index') }}" class="btn btn-outline-secondary">Назад</a>
                </div>
            </div>--}}
            <div style="width: 100%;">
                <div style="width: 100% ; margin-top: 15px;">
                    <img src="{{ $news->image }}">
                </div>
                <div class="features d-flex mt-3">
                    <div style="margin-left: 10px;">
                        <i class="fas fa-eye"></i> {{ $news->count_views }}
                    </div>
                    <div style="margin-left: 12%;">
                        <i class="far fa-clock"></i> {{ $news->updated_at }}
                    </div>
                    <div style="margin-left: 12%;">
                        <a href="#comments-block" title="Коментарі">
                            <i class="fas fa-comments" style="color: #ee6e6e;"></i>
                        </a>
                    </div>
                </div>
                <div style="margin-top: 10px">
                    <p class="fs-3 fw-bold">{{ $news->title }}</p>
                </div>
            </div>
            <div style="width: 100%; margin-top: 10px">
                <p class="fs-5">{{ $news->content }}</p>
            </div>
            <div class="comments">
                <b>Коментарі {{$news->total}}</b>
                <form id="comment-form" action="{{route('reviews.create')}}">
                    <textarea placeholder="Введіть тут коментар..." id="message_comment"></textarea>
                    <div class="reply-block" id="0"></div>
                    <span class="form-button pre_code"><i class="fas fa-code"></i></span>
                    <input type="text" placeholder="Вкажіть ваше ім'я" value="" id="username_comment">
                    <div style="clear: both"></div>
                    <div id="send_comment" class="btn btn-danger">
                        Додати коментар
                    </div>
                    <hr>
                    <div style="clear: both"></div>
                    <div class="all-comments">
                        @foreach($reviews as $data)
                            <div class="comment">
                                <p class="user-name "><b>{{$data->user_id}}</b> {{$data->updated_at}}</p>
                                <div class="main-block">{{$data->content}}</div>
                            </div>
                            <hr>
                        @endforeach
                    </div>

                </form>
            </div>
        </main>
        <aside style="width: 30%; margin-right: 5%">
            <p class="heading mt-2 ">Програма навчання</p>
            <p class="heading mt-2">Відеокурси</p>
            @foreach($courses as $data)
                <div class="course" style="width: 90%; justify-content: center">
                    <div class="course-img">
                        <a href="{{ route('courses.show', $data->id) }}" title="{{ $data->name }}">
                            <img src="{{$data->image}}" alt="{{$data->name}}"
                                 title="{{$data->title}}">
                        </a>
                        <a href="{{$data->tag}}">
                            <div class="button-tag bg-dark"># {{$data->tag}}</div>
                        </a>
                        <div class="button-on-course"><i class="fas fa-play"></i></div>
                    </div>
                    <span class="title_course">{{$data->name}}</span>
                    <span class="time-start">{{$data->updated_at}} <br> {{$data->count_lessons}} Уроків</span>
                </div>
            @endforeach
            <a href="{{route('courses.index')}}" class="btn btn-danger">
                Всі відеокурси
            </a>
        </aside>
    </section>
@endsection


