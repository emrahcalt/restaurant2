<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant Tema</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Dosis&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
    {{ Html::style('resources/views/pages/css/bootstrap.min.css')}}
    {{ Html::style('resources/views/pages/css/style.css') }}
    {{ Html::style('resources/views/pages/css/font_awesome.css') }}


</head>
<body>

<!! UstBar !!>
<nav class="navbar navbar-fixed-top" style="z-index: 100">
    <div class="col-lg-12 ustBar1 navbar-fixed-top">
        <div class="container">
            <div class="pull-left">
                <div class="ustMenu">
                    {{ HTML::link('/', 'ANASAYFA')}} &nbsp;&nbsp;
                    {{ HTML::link('#', 'ÜRÜNLER')}} &nbsp;&nbsp;
                    {{ HTML::link('/pages/restoranlar', 'ŞUBELER')}} &nbsp;&nbsp;
                    {{ HTML::link('#', 'KAMPANYALAR')}} &nbsp;&nbsp;
                    {{ HTML::link('#', 'HAKKIMIZDA')}} &nbsp;&nbsp;
                    {{ HTML::link('#', 'İLETİŞİM')}} &nbsp;&nbsp;
                </div>
            </div>
            <div class="pull-right">
                <i class="fa fa-phone"> &nbsp; 444 44 44 </i>
            </div>
        </div>
    </div>
    <div class="col-lg-12 menu">
        <div class="container">
            <div class="pull-left">
                <div class="logo"></div>
            </div>
            <div class="pull-right">
                <div class="mainMenu">

                    <div id="navbar" class="navbar-collapse collapse"  style="color: #F59700; padding-bottom: 0px">
                        <ul class="nav navbar-nav" style="color: #F59700; padding-bottom: 0px">
                            <?php
                                 $results = DB::select('select * from kategoriler where ustkategori= ?', array(1));
                                foreach($results as $value) {
                                    $ustKategori=$value->id;
                                    $kategoriAdi=$value->kategoriadi;


                            ?>
                            <li class="dropdown" style="padding-bottom:0px">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #f59700; padding-bottom: 7px"><?php echo $kategoriAdi;?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <?php
                                    $resultss=DB::select('select * from urunler where kategori= ?', array($ustKategori));
                                        foreach($resultss as $urunler) {
                                        $klasor=$urunler->ingilizcekarakter;
                                        $urunadi=$urunler->urunadi

                                        ?>
                                    <li>{{ HTML::link('urunler/'.$klasor, $urunadi)}}</li>
                                        <?php
                                            }
                                            ?>




                                </ul>
                            </li>
                                <?php
                                    }
                                ?>



                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!! / UstBar !!>
<div class="col-lg-12 dikeyBosluk"></div>
<div class="col-lg-12 dikeyBosluk"></div>
<div class="col-lg-12 dikeyBosluk"></div>
<div class="col-lg-12 dikeyBosluk"></div>
<div class="col-lg-12 dikeyBosluk"></div>
<div class="col-lg-12 dikeyBosluk"></div>
<!! Content !!>


@yield('content')

<div class="row" style="background:#adadad">

    <div class="container" style="padding-top: 15px">

        <div class="col-lg-3">
            <h4> Diğer </h4>
            <hr>
            <ul class="list-group">
                <li class="list-group-item"> Besin Değerleri </li>
                <li class="list-group-item"> Bilgi Toplumu Hizmetleri </li>
            </ul>

        </div>
        <div class="col-lg-3">

            <h4> Haber & Blog </h4>
            <hr>
            <div class="row">
                <div class="col-lg-5">
                    {{ Html::image('resources/views/pages/images/blog.png', '', array('width'=>100, 'height'=>50))}}

                </div>
                <div class="col-lg-7">
                    <div style="font-size: 10px; padding-top: 15px"> <p>Firmamızdan haberler için tıklayınız </p></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5">
                    {{ Html::image('resources/views/pages/images/haber.png', '', array('width'=>100, 'height'=>50))}}
                </div>
                <div class="col-lg-7">
                    <div style="font-size: 10px; padding-top: 15px">Firmamızdan haberler için tıklayınız </div>
                </div>
            </div>



        </div>
        <div class="col-lg-3">
            <h4> Sosyal medya </h4>
            <hr>
            <i class="fa fa-facebook fa-3x"></i> &nbsp;&nbsp; <i class="fa fa-youtube fa-3x"></i> &nbsp;&nbsp; <i class="fa fa-twitter fa-3x"></i> &nbsp;&nbsp; <i class="fa fa-google-plus fa-3x"></i> &nbsp;&nbsp; <i class="fa fa-instagram fa-3x"></i>

        </div>
        <div class="col-lg-3">
            <h4> Diğer </h4>
            <hr>
            <ul class="list-group">
                <li class="list-group-item"> Besin Değerleri </li>
                <li class="list-group-item"> Bilgi Toplumu Hizmetleri </li>
            </ul>

        </div>
        <div class="col-lg-12 dikeyBosluk">&nbsp;</div>
        <hr>
        <div style="padding-top: 15px; padding-bottom: 15px; font-size: 10px; color: #888a85">Copyright firma adı </div>
    </div>

</div>

<!!/Content !!>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
{{ Html::script('resources/views/pages/js/drslider.js') }}
{{ Html::script('resources/views/pages/js/jquery.contenthover.min.js') }}
{{ Html::script('resources/views/pages/js/bootstrap.min.js') }}
<script>

    $(document).ready(function(){
        $('.example-animation').DrSlider({
            'showProgress': false,
            'showNavigation': false
        });
    });

    $('#d1').contenthover({
        overlay_background:'#000',
        overlay_opacity:0.8
    });
    $('#d2').contenthover({
        overlay_background:'#000',
        overlay_opacity:0.8
    });
    $('#d3').contenthover({
        overlay_background:'#000',
        overlay_opacity:0.8
    });
    $('#d4').contenthover({
        overlay_background:'#000',
        overlay_opacity:0.8
    });
    $('#d5').contenthover({
        overlay_background:'#000',
        overlay_opacity:0.8
    });
</script>
</body>
</html>