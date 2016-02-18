@extends('master')
@section('content')
<?php

$results=DB::select('select * from urunler where ingilizcekarakter= ?', array($urunAdi));
        $urunIsmi="";
        $urunAciklama="";
        $urunKategori=0;
        foreach($results as $result){
            $urunIsmi=$result->urunadi;
            $urunAciklama=$result->aciklama;
            $urunKategori=$result->kategori;
        }

?>

    <div class="row" style="background: #FFFFFF;">
        <div class="col-lg-12 dikeyBosluk"></div>
        <div class="col-lg-12 dikeyBosluk"></div>


        <div class="container">
            <ol class="breadcrumb" style="background: none">
                <li>{{ Html::link('/', 'ANASAYFA')}}</li>
                <li><a href="#">Ürünler</a></li>
                <li class="active">{{$urunIsmi}}</li>
            </ol>
            <div class="col-lg-8">
                <div class="panel panel-collapse">
                    <div class="panel-heading">
                        <h2 style="color: #682F1C; border-bottom: 1px solid #681F1C">{{$urunIsmi}}</h2>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-7">
                            {{Html::image('resources/views/pages/urungorselleri/whopper-menu-1.png', '', array('width'=>'100%', 'height'=>'auto'))}}
                        </div>
                        <div class="col-lg-5" style="padding-top: 15px">
                            <p>
                                &nbsp;&nbsp;&nbsp; {{$urunAciklama}}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-collapse">
                    <div class="panel-heading">
                        <h2 style="color: #682F1C; border-bottom: 1px solid #681F1C">Benzer ürünler</h2>
                    </div>
                    <div class="panel-body">
                        <?php
                             $benzerler=DB::select('select * from urunler where kategori= ? limit 10', array($urunKategori));
                            foreach($benzerler as $benzer) {

                            if($benzer->ingilizcekarakter<>$urunAdi) {
                        ?>
                        <div class="row">
                        <div class="col-lg-4">
                            {{Html::image('resources/views/pages/urungorselleri/'.$benzer->gorsel, '', array('width'=>'100%', 'height'=>'auto'))}}
                        </div>
                        <div class="col-lg-8" style="padding-top: 10px">
                            <p>
                                {{ HTML::link('urunler/'.$benzer->ingilizcekarakter, $benzer->urunadi)}}

                            </p>

                        </div>
                        </div>
                            <?php
                            }}
                            ?>

                    </div>
                </div>
            </div>
        </div>

        
    </div>


@stop