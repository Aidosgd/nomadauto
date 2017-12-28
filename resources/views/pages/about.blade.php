@extends('layouts.app')

@section('content')
    <div class="contacts pages">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">О компании</a></li>
                </ol>

                <!-- <h2>Контакты</h2> -->
                <ul class="innerMenu">
                  @foreach($about as $item)
                    <li class="{{ (app()['request']->url() == url('/about/'.$item->node->slug)) ? 'active' : ''}}">
                      <a href="/about/{{ $item->node->slug }}">{{ $item->node->title }}</a>
                    </li>
                  @endforeach
                </ul>

                <h1 class="text-left {{ $post->node->slug == 'istoriya' ? 'hidden' : '' }}" style="font-size: 50px; margin-bottom: 30px;">{{ $post->node->title }}</h1>

                {!! $post->node->content !!}
            </div>
        </div>
    </div>
@endsection
