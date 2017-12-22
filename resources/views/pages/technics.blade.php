@extends('layouts.app')

@section('content')
    <div class="pages">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">Техника и оборудование</a></li>
                </ol>

                <ul class="innerMenu">
                  @foreach($catTechnics->children as $item)
                    <li class="{{ (app()['request']->url() == url('/technics/'.$item->node->slug)) ? 'active' : ''}}">
                      <a href="/technics/{{ $item->node->slug }}">{{ $item->node->title }}</a>
                    </li>
                  @endforeach
                </ul>

                <div class="technics">
                  @foreach($technics as $item)
                    <div class="technic">
                      <div class="img">
                        <img src="{{ $item->images->first()->path }}">
                      </div>
                      <div class="desc">
                        <h3>{{ $item->node->title }}</h3>
                        <p>{{ strip_tags($item->node->content) }}</p>
                        <a href="#" class="btn btn-blue pull-right">Заказать</a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
