@extends('layouts.header')
    @section('content')
        <?php $bkgroundImg =  url('/').'/imgs/banner-img.jpg'; ?>
        <header class="py-5 bg-light border-bottom mb-4 background" style="background-image: url(<?php echo $bkgroundImg; ?>);">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Contact Us!</h1>
                </div>
            </div>
        </header>
        <div class="container contact-form">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact container">
                        <div class="form">
                            <div class="form-txt">
                                <h1>Contact Us</h1>
                                <span>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                </span>
                                <h3>USA</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                <h3>India</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            </div>
                            <form method="post" action="{{ route('addcontact.insert')}}">
                                @csrf
                                <div class="form-details">
                                    <input type="text" name="name" id="name" placeholder="Name" class="@error('name') is-invalid @enderror">
                                    <br/>
                                    @error('name')
                                        <p class="error" style="color:red;margin:0;">{{ $message }}</p>
                                    @enderror
                                    <input type="email" name="email" id="email" placeholder="Email" class="@error('email') is-invalid @enderror">
                                    <br/>
                                    @error('email')
                                        <p class="error" style="color:red;margin:0;">{{ $message }}</p>
                                    @enderror
                                    <br/>
                                    <textarea  name="message" placeholder="Message"  cols="52" rows="7" class="@error('message') is-invalid @enderror"></textarea>
                                    <br/>
                                    @error('message')
                                        <p class="error" style="color:red;margin:0;">{{ $message }}</p>
                                    @enderror
                                    <button type="submit">SEND MESSAGE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection    