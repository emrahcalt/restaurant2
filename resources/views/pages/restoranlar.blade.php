@extends('master')
@section('content')

    <div class="row" style="background: #FFFFFF;">
        <div class="col-lg-12 dikeyBosluk"></div>
        <div class="col-lg-12 dikeyBosluk"></div>
            <div style="position: relative; z-index: 1; background: rgba(255, 255, 255, 0.7); position: relative; border-bottom: 1px solid #adadad">
                    <div class="container" style="background: none">
                        
                        <ol class="breadcrumb col-lg-3" style="background: none; float: left;">
                            <li>{{ Html::link('/', 'ANASAYFA')}}</li>

                            <li class="active">Restoranlar</li>

                        </ol>


                            <div class="col-lg-3">
                                <div id="imaginary_container">
                                    <div class="input-group stylish-input-group">
                                        <input type="text" class="form-control"  placeholder="Şube ara" >
                                            <span class="input-group-addon">
                                                <button type="submit">
                                                    <span class="fa fa-search"></span>
                                                </button>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn btn-success btn-lg sinif col-lg-3 pull-right">{{ Html::link('/enyakin', 'En yakın şubeyi göster')}}
                            </div>


                    </div>
            </div>
        <div id="map" style="z-index: 0;">


        </div>

        <script src="https://maps.googleapis.com/maps/api/js"></script>

    </div>

    <script>
        var enlem =39.950;
        var boylam=32.860;
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);

            } else {
                alert("Kullancığınız browser konum belirlemeyi desteklemiyor");
            }
        }
        function showPosition(position) {
            enlem = position.coords.latitude;
            boylam = position.coords.longitude;
            var mapDiv = document.getElementById('map');
            var map = new google.maps.Map(mapDiv, {
                center: {lat: enlem, lng: boylam},

                zoom: 16
            });
            // Add the circle for this city to the map.
            var circle = new google.maps.Circle({
                strokeColor: '#FF0000',
                strokeOpacity: 0.8,
                strokeWeight: 1,
                fillColor: '#FF0000',
                fillOpacity: 0.35,
                map: map,
                center: {lat: enlem, lng: boylam},
                radius:  20,

            });
            var circle2 = new google.maps.Circle({
                strokeColor: '#FF0000',
                strokeOpacity: 0.8,
                strokeWeight: 1,
                fillColor: '#FF0000',
                fillOpacity: 0.35,
                map: map,
                center: {lat: enlem, lng: boylam},
                radius:  40,

            });
            <?php
            $results=DB::select('select * from subeler where aktif = ?', array(1));
                    foreach($results as $sube) {
                        $enlem=$sube->enlem;
                        $boylam=$sube->boylam;
                        ?>
                    var myCenter = {lat: <?php echo $enlem ?>, lng: <?php echo $boylam;?>};
            var marker=new google.maps.Marker({
                position:myCenter,
            });

            marker.setMap(map);
            <?php
                    }
            ?>
            var direction = 1;
            var rMin = 150, rMax = 300;
            setInterval(function() {
                var radius = circle.getRadius();
                if ((radius > rMax) || (radius < rMin)) {
                    direction *= -1;
                }
                circle.setRadius(radius + direction * 8);
            }, 400);

            //cityCircle.setMap(map);
        }
        getLocation();



    </script>
@stop