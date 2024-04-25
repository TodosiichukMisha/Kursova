@extends('layouts.default')

@section('title-block')
    {{$course->name}}
@endsection

@section('content')
    <div class="main-wrapper container d-flex flex-wrap">
        <main style="width: 70%">
            <div class="block article_block">
                <div class="presentation-block">
                    <div class="presentation-block">
                        <div class="img-presentation mt-3">
                            <img src="{{$course->image}}"
                                 alt="{{$course->name}}"
                                 title="{{$course->name}}">
                        </div>
                        <div class="lesson-name-text">
                            <h2>{{$course->name}}</h2>
                            <div class="tags">
                                <a href="#" class="btn btn-outline-dark">
                                    {{$course->tag}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-block">
                {{$course->intro_text}}
            </div>
            <div class="main-video">
                <h3 class="head-text">Відеоурок</h3>
                <iframe width="560" height="315" src="{{$course->video_lesson}}"
                        frameborder="0" allowfullscreen="" style="height: 315.014px;"></iframe>
            </div>
            <div class="main-text">
                <h2>{{$course->title_description}}</h2>
                <p>{{$course->description}}</p>
                <p><br></p>
                <p><br></p>
            </div>
            <div class="nav_uroki">
                <div class="next">
                    <a href="#" class="btn btn-danger">
                        Наступний <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </main>
        <aside style="width: 27%;">
            <p class="heading mt-2 ">Також рекомендуєм</p>
            <p class="heading mt-2">Тести</p>
            <div class="allTests container">
                @foreach($test as $data)
                    <div>
                        <h4>{{$data->title}}</h4>
                        <div class="text">
                            @if($data->start_lvl)
                                <a href="{{ route('tests.show', $data->id) }}" title="{{ $data->title }}">
                                    <span>Початковий рівень</span>
                                </a>
                            @endif
                            <div style="clear:both"></div>
                            @if($data->middle_lvl)
                                <a href="{{ route('tests.show', $data->id) }}" title="{{ $data->title }}">
                                    <span>Середній рівень</span>
                                </a>
                            @endif
                            <div style="clear:both"></div>
                            @if($data->hard_lvl)
                                <a href="{{ route('tests.show', $data->id) }}" title="{{ $data->title }}">
                                    <span>Складний рівень</span>
                                </a>
                            @endif
                        </div>
                        <div>
                            <img src="{{$data->image}}" alt="$data->title" title="$data->title">
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{route('news.index')}}" class="btn btn-danger">
                Всі новини
            </a>
        </aside>
    </div>
@endsection


