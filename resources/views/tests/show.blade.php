@extends('layouts.default')

@section('content')
    <div class="main-wrapper container ">
        <main class="left">
            <div id="test_info">
                <div class="separete img">
                    <img src="{{$test->image}}" alt="{{$test->title}}" title="{{$test->title}}">
                </div>
                <div class="separete">
                    <h2>{{$test->title}}</h2>
                    <span class="hardness">Складність:
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </span>
                    <span class="lessons_count">
                        <i class="fas fa-hourglass-half"></i> Час: <b>5 минут</b>
                    </span>
                </div>
            </div>
            <div id="navigation">
                <h2>Інші тести</h2>
                <ul>
                    <li class="active">Початковий рівень</li>
                    <a href="#">
                        <li>Середній рівень</li>
                    </a>
                    <a href="#">
                        <li>Складний рівень</li>
                    </a>
                </ul>
            </div>
        </main>
        <aside style="width: 56%">
            <div>
                <h1><b>Тест на знання основ {{$test->title}}</b></h1>
                <p class="mt-3">
                    Тут ви можете пройти тест із рівнем «Початковий» на тему Linux.
                    На тест виділяється невеликий проміжок часу, а також після закінчення
                    тесту ви зможете переглянути результати та ознайомитися з вірними та
                    невірними відповідями.
                </p>
                <button class="btn btn-danger btn-lg">Почати тестування</button>
            </div>
            <div class="comments mt-5">
                <h3><b>Коментарі {{$test->total}}</b></h3>
                <form id="comment-form">
                    <textarea placeholder="Введіть тут коментар..." id="message_comment"></textarea>
                    <div class="reply-block" id="0"></div>
                    <span class="form-button pre_code"><i class="fas fa-code"></i></span>
                    <input type="text" placeholder="Вкажіть ваше ім'я" value="" id="username_comment">
                    <div style="clear: both"></div>
                    <div id="send_comment" class="btn btn-danger">
                        Додати коментар
                    </div>
                    <hr>
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
        </aside>
    </div>
@endsection

