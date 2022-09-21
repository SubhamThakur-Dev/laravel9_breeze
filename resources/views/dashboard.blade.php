<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="sidebar">
            @include('layouts.adminSidebar')            
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <main class="container-fluid">
                        <div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm border-left px-4">
                            <div class="container">
                                <article class="p-4 rounded shadow-sm border-left mb-4 article-border">
                                    <h3 class="logged-in_heading">You're logged in! <br>Go to <a href="<?php echo url('/'); ?>" class="homelink" target="_blank">Website</a></h3>
                                </article>
                            </div>
                        </div>                    
                        <section class="row">
                            <div class="col-md-6 col-lg-4">
                                <article class="p-4 rounded shadow-sm border-left mb-4 article-border">
                                    <a href="{{route('categories.index')}}" class="d-flex align-items-center links">
                                        <span class="bi bi-box h5"></span>
                                        <h5 class="ml-2">Categories</h5>
                                    </a>
                                </article>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <article class="p-4 rounded shadow-sm border-left mb-4 article-border">
                                    <a href="{{route('contacts.index')}}" class="d-flex align-items-center links">
                                        <span class="bi bi-person h5"></span>
                                        <h5 class="ml-2">Contacts</h5>
                                    </a>
                                </article>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <article class="p-4 rounded shadow-sm border-left mb-4 article-border">
                                    <a href="{{route('posts.index')}}" class="d-flex align-items-center links">
                                        <span class="bi bi-person-check h5"></span>
                                        <h5 class="ml-2">Posts</h5>
                                    </a>
                                </article>
                            </div>
                        </section>
                    </main>                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
