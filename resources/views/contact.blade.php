@extends('layouts.header')
    @section('content')
    <?php $bkgroundImg =  url('/').'/imgs/banner-img.jpg'; ?>
        <header class="py-5 bg-light border-bottom mb-4 background" style="background-image: url(<?php echo $bkgroundImg; ?>);">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Get in Touch</h1>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 outer">
                    @if(Session::has('send'))
                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('send') }}</p>
                    @endif
                    <form method="post" action="{{ route('addcontact.insert')}}">
                    @csrf
                        <div class="form-group ace">
                            <input type="text" class="form-control"  name="name" placeholder="Your name" tabindex="1" class="@error('name') is-invalid @enderror">
                            <br/>
                            @error('name')
                                <p class="error" style="color:red;margin:0;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group ace">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2" class="@error('email') is-invalid @enderror">
                            <br/>
                            @error('email')
                                <p class="error" style="color:red;margin:0;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group ace">
                            <textarea rows="6" cols="60" name="message" class="form-control" id="message" placeholder="Your message" tabindex="4"></textarea>                                 
                            <br/>
                            @error('message')
                                <p class="error" style="color:red;margin:0;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="text-center margin-top-25">
                            <button type="submit" class="btn btn-mod btn-border btn-large mybtn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection