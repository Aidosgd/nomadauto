@extends('layouts.app')

@section('content')
    <div class="contacts">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">Контакты</a></li>
                </ol>

                <h2>Контакты</h2>

                <div class="row">
                    <div class="col-md-6">
                        <div id="map" style="width: 100%; height: 400px"></div>
                    </div>
                    <div class="col-md-6">
                        <p>г. Алматы, ул. Рыскулова 57В;</p>
                        <p>Тел.: +7 (727) 3-122-133</p>

                        <a href="" class="btn btn-blue">Позвонить</a>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="block">
                            <h4>Подсеваткин Евгений</h4>
                            <p>"Отдел продаж"</p>
                            <hr>
                            <p>+7 (727) 3-122-133, вн. 5235</p>
                            <p>+7 (777) 736-00-10</p>
                            <p>podsevatkin.evgeniy@cbc-group.kz</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="block">
                            <h4>Подсеваткин Евгений</h4>
                            <p>"Отдел продаж"</p>
                            <hr>
                            <p>+7 (727) 3-122-133, вн. 5235</p>
                            <p>+7 (777) 736-00-10</p>
                            <p>podsevatkin.evgeniy@cbc-group.kz</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="block">
                            <h4>Подсеваткин Евгений</h4>
                            <p>"Отдел продаж"</p>
                            <hr>
                            <p>+7 (727) 3-122-133, вн. 5235</p>
                            <p>+7 (777) 736-00-10</p>
                            <p>podsevatkin.evgeniy@cbc-group.kz</p>
                        </div>
                    </div>
                </div>
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
                center: [43.287189, 76.921220],
                zoom: 15
            });

            myPlacemark = new ymaps.Placemark([43.287189, 76.921220], {
                hintContent: 'NomadAuto',
                balloonContent: 'NomadAuto'
            });

            myMap.geoObjects.add(myPlacemark);
        }
    </script>
@endsection