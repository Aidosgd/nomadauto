@extends('layouts.app')

@section('content')
    <div class="control pages">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">{{ $post->node->title }}</a></li>
                </ol>

                <h2>{!! $post->node->teaser !!}</h2>

                {!! $post->node->content !!}
            </div>
        </div>
    </div>
@endsection
