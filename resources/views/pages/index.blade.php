@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-12">

        <div class="example-animation" style="font-family: 'Dosis', sans-serif;">
            <div data-lazy-background="resources/views/pages/images/f5image.jpg" class="sliderBackImage">
                <div data-pos="['23%', '110%', '3%', '3%']" data-duration="700" data-effect="move">
                    <img data-lazy-src="resources/views/pages/images/coilcleaner-kampanya.png"/>
                </div>
                <div data-pos="['-15%', '110%', '2%', '75%']" data-duration="100" data-effect="move" class="btn btn-danger" style="font-size: 34px">
                    18,90 TL
                </div>
                <div data-pos="['-15%', '110%', '10%', '25%']" data-duration="700" data-effect="move">
                    DELUXE BURGER
                </div>
                <div data-pos="['15%', '25%', '20%', '25%']" data-duration="700" data-effect="move">
                    TAVUK BARBEKU
                </div>
                <h3 data-pos="['56%', '-40%', '30%', '25%']" data-duration="700" data-effect="move">
                    10 Farklı seçenek içinden birini seçin !!!
                </h3>


            </div>
            <div data-lazy-background="resources/views/pages/images/f6image.jpg" class="sliderBackImage">
                <div data-pos="['23%', '110%', '3%', '3%']" data-duration="700" data-effect="move">
                    <img data-lazy-src="resources/views/pages/images/yuzde-10-indirim.png" width="150" height="150"/>
                </div>
                <div data-pos="['-15%', '110%', '2%', '75%']" data-duration="100" data-effect="move" class="btn btn-danger" style="font-size: 34px">
                    18,90 TL
                </div>
                <div data-pos="['-15%', '110%', '10%', '25%']" data-duration="700" data-effect="move">
                    DELUXE BURGER
                </div>
                <div data-pos="['15%', '25%', '20%', '25%']" data-duration="700" data-effect="move">
                    TAVUK BARBEKU
                </div>
                <h3 data-pos="['56%', '-40%', '30%', '25%']" data-duration="700" data-effect="move">
                    10 Farklı seçenek içinden birini seçin !!!
                </h3>

            </div>



        </div>

    </div>
</div>

<div class="row" style="background: #FFFFFF; z-index: 200">
    <div class="container" style="margin-top: -140px">

        <div class="kampanyaBoxes">
            <img id="d1" src="resources/views/pages/images/k1.png" width="200" height="130" />
            <div class="contenthover">
                <h4>Kampanya başlığı</h4>
                <p>Kampanya açıklaması gelecek. </p>
                <p><a href="#" class="mybutton">Detay</a></p>
            </div>

        </div>
        <div class="kampanyaBoxes">

            <img id="d2" src="resources/views/pages/images/k2.png" width="200" height="130" />
            <div class="contenthover">
                <h4>Kampanya başlığı</h4>
                <p>Kampanya açıklaması gelecek. </p>
                <p><a href="#" class="mybutton">Detay</a></p>
            </div>
        </div>
        <div class="kampanyaBoxes">
            <img id="d3" src="resources/views/pages/images/k3.png" width="200" height="130" />
            <div class="contenthover">
                <h4>Kampanya başlığı</h4>
                <p>Kampanya açıklaması gelecek. </p>
                <p><a href="#" class="mybutton">Detay</a></p>
            </div>
        </div>
        <div class="kampanyaBoxes">
            <img id="d4" src="resources/views/pages/images/k1.png" width="200" height="130" />
            <div class="contenthover">
                <h4>Kampanya başlığı</h4>
                <p>Kampanya açıklaması gelecek. </p>
                <p><a href="#" class="mybutton">Detay</a></p>
            </div>
        </div>
        <div class="kampanyaBoxes">

            <img id="d5" src="resources/views/pages/images/k2.png" width="200" height="130" />
            <div class="contenthover">
                <h4>Kampanya başlığı</h4>
                <p>Kampanya açıklaması gelecek. </p>
                <p><a href="#" class="mybutton">Detay</a></p>
            </div>
        </div>

        <div class="col-lg-12 dikeybosluk"> &nbsp;</div>
        <div class="altkampanya" style="background: #d58512">KAMPANYA ALANI</div>
        <div class="altkampanya" style="background: #1b6d85">KAMPANYA ALANI</div>
        <div class="altkampanya" style="background: #2ca02c">KAMPANYA ALANI</div>

        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading" style="border-bottom: 1px solid #f2dede"><h3><i class="fa fa-info-circle"> </i> BİZDEN HABERLER</h3></div>

                <div class="panel-body">
                    <a href="#"> <h4>Haber 1 Başlık </h4></a>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; içerik buraya gelecek </p>
                    <p>&nbsp;</p>
                    <a href="#"> <h4>Haber 2 Başlık </h4></a>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; içerik buraya gelecek </p>
                    <p>&nbsp;</p>
                    <a href="#"> <h4>Haber 3 Başlık </h4></a>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; içerik buraya gelecek </p>
                    <p>&nbsp;</p>
                </div>


            </div>
        </div>

        <div class="col-lg-6">
            <div class="col-lg-12 dikeyBosluk">&nbsp</div>
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-youtube fa-3x"></i>  </a></li>
                <li><a data-toggle="tab" href="#menu1"><i class="fa fa-twitter fa-3x"></i> </a></li>
                <li><a data-toggle="tab" href="#menu2"><i class="fa fa-instagram fa-3x"></i></a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="col-lg-12 dikeyBosluk">&nbsp;</div>
                    <div class="col-lg-8" style="margin: 0px; padding: 0px" >
                        <div class="youToubeBig"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/XraYSuMM_S0" frameborder="0" allowfullscreen></iframe></div>
                        <div class="youTubeThumb"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/kgyJjIYlMOY" frameborder="0" allowfullscreen></iframe></div>
                        <div class="youTubeThumb"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/XraYSuMM_S0" frameborder="0" allowfullscreen></iframe></div>
                    </div>
                    <div class="col-lg-4" style="margin: 0px; padding: 0px">
                        <div class="youTubeThumb"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/kgyJjIYlMOY" frameborder="0" allowfullscreen></iframe></div>
                        <div class="youTubeThumb"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/-YiSr1fajiA" frameborder="0" allowfullscreen></iframe></div>
                        <div class="youTubeThumb"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/L-TKoqZg-Rg" frameborder="0" allowfullscreen></iframe></div>
                    </div>


                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>Twitter Paylaşımları</h3>
                    <p>Twitter paylaşımları gelecek</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Instagram Paylaşımları</h3>
                    <p>Instaram paylaşımları gelecek</p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop