@extends('layouts.app')

@section('content')
    <div class="contacts pages">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">Сертификаты</a></li>
                </ol>

                <h2>Отзывы клиентов </h1>

                  <div class="certificates">
                    @foreach($certificates as $item)
                    <div class="certificate" data-toggle="modal" data-target="#{{ $item->id }}">
                      <div class="date">{{ $item->display_date->format('d-m-Y') }}</div>
                      <h3>Благодарственное письмо</h3>
                      <div class="title">{{ $item->node->title }}</div>
                    </div>
                    <div class="modal fade" id="{{ $item->id }}">
                      <div class="modal-dialog" role="document">
                        <img src="{{ $item->images->first()->path }}" alt="">
                      </div>
                    </div>
                    @endforeach
                  </div>
            </div>
        </div>
    </div>
@endsection
