@extends('layouts.header')
    @section('content')
        <?php $bkgroundImg =  url('/').'/imgs/banner-img.jpg'; ?>
        <header class="py-5 bg-light border-bottom mb-4 background" style="background-image: url(<?php echo $bkgroundImg; ?>);">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">{{ $post->title }}</h1>
                </div>
            </div>
        </header>
        <div class="container content-center">
            <div class="row">
                <div class="col-lg-12">
                <img class="card-img-top post-img" src="<?php echo url('/'); ?>/images/posts/{{ $post->image }}" alt="..." />
                </div>
                <div class="col-lg-12">
                    <p>{{ $post->description}}</p>
                </div>
            </div>
        </div>
    @endsection    