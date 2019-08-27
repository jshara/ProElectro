@extends('layout.app')

@section('content')
<section id="main-slider" class="no-margin" data-ride="carousel">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="item active" style="background-image: url(Users/josephsharma/Pictures/lunch.jpg)">
                <div class="container">
                    <div class="row slide-margin">

                        <div class="col-sm-12">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services1.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">SEO Marketing</h3>
                                    <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->


        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->


@endsection