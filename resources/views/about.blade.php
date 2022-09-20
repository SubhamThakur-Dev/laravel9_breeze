@extends('layouts.header')
@section('content')
    <!-- Page header with logo and tagline-->
    <?php $bkgroundImg =  url('/').'/imgs/banner-img.jpg'; ?>
    <header class="py-5 bg-light border-bottom mb-4 background" style="background-image: url(<?php echo $bkgroundImg; ?>);">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to About Us!</h1>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="circles"></div>
                <div class="details-container">
                    <div class="avatar">
                        <img src="https://i.suar.me/l3zYA/l" class="img-fluid aboutImg" alt="">
                    </div>
                    <div class="about">
                        <div class="name">
                            <p>Hello There!</p>
                            <h1>I'm Subham Thakur</h1>
                        </div>
                        <div class="about-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt architecto ut accusamus maxime laborum vel et consectetur, eveniet nobis, iure aperiam. Fuga illo impedit hic possimus tempora asperiores. Dicta, esse!</p>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
@endsection    