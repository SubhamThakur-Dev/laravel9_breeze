@extends('layouts.header')
   @section('content')
    <?php $bkgroundImg =  url('/').'/imgs/banner-img.jpg'; ?>
    <header class="py-5 bg-light border-bottom mb-4 background" style="background-image: url(<?php echo $bkgroundImg; ?>);">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Homepage!</h1>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <?php $totalPosts = count($posts); ?>
                    @if($totalPosts != '0')
                        @foreach($posts as $post)
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    @if(empty($post->image))
                                    <img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." />
                                    @else
                                    <img class="card-img-top" src="images/posts/{{ $post->image }}" alt="..." />
                                    @endif
                                    <div class="card-body">
                                        <div class="small text-muted">{{ $post->created_at }}</div>
                                        <h2 class="card-title h4">{{ $post->title }}</h2>
                                        <p class="card-text">{{ $post->description }}</p>
                                        <a class="btn btn-primary" href="{{ route('post.show',$post->id)}}">Read more →</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach  
                    @else
                    <p>No Posts found !</p>
                    @endif
                </div>                
                <div class="d-flex hidden-extra-pagination">
                    {{ $posts->links() }}
                </div> 
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-unstyled mb-0">
                                    <?php $totalCategories = count($categories); ?>
                                    @if($totalCategories != '0')
                                        @foreach($categories as $category) 
                                        <li><a href="{{ route('home') }}?category_id={{ $category->id }}">{{ $category->category }}</a></li>
                                        @endforeach
                                        @else
                                        <p>No Categories Found !</p>
                                    @endif    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection 