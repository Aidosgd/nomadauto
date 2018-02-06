@extends('layouts.app')

@section('content')
    <div class="contacts pages">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">{{ $post->node->title }}</a></li>
                </ol>

                <h2>{{ $post->node->title }}</h2>

                <div class="row">
                    <div class="col-md-6">
                        <div id="map" style="width: 100%; height: 400px"></div>
                    </div>
                    <div class="col-md-6">
                        {!! $post->node->teaser !!}

                        {{--<a href="" class="btn btn-blue">Позвонить</a>--}}
                    </div>
                </div>

                <div class="clearfix"></div>

                {!! $post->node->content !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript">
        ymaps.ready(init);
        var myMap,
            myPlacemark;

        function init(){
            myMap = new ymaps.Map("map", {
                center: [47.115575, 51.897794],
                zoom: 15
            });

            myPlacemark = new ymaps.Placemark([47.115575, 51.897794], {
                hintContent: 'NomadAuto',
                balloonContent: 'NomadAuto'
            });

            myMap.geoObjects.add(myPlacemark);
        }
    </script>
@endsection
