@extends('layouts.main')
@section('title', 'Home')
@section('content')

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <body>

        @include('layouts.inc.main-header')

        <main class="container">
            <div class="card  text-white rounded bg-dark mb-3">
                <img src="{{ asset('front/images/Blog/Rectangle 5-4.png') }}" class="card-img" alt="">
                <div class="card-img-overlay col-md-6 p-4 p-md-5 mb-4">
                    <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                    <p class="lead my-3" style="color: #d63384;">Multiple lines of text that form the lede, informing new
                        readers quickly and
                        efficiently about what’s most interesting in this post’s contents.</p>
                    <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-6">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">Featured post</h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                                lead-in to additional content.</p>
                            <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="{{ asset('front/images/small-posts/image.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">Design</strong>
                            <h3 class="mb-0">Post title</h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                                additional content.</p>
                            <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="{{ asset('front/images/small-posts/image-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-md-8">
                    <h3 class="pb-4 mb-4 fst-italic border-bottom">
                        From the Firehose
                    </h3>

                    <article class="blog-post">
                        <div class="post-card py-3">
                            <img class="card-img-top" src="{{ asset('front/images/Blog/Rectangle 5.png') }}" alt="">
                            <h2>How to code with PHP</h2>
                            <ul class="meta-data">
                                <li><i class="fas fa-calendar"></i> <a href="#">15 June 2023</a></li>
                                <li><i class="fas fa-user"></i> <a href="#">Posted by John Doe</a></li>
                                <li><i class="fas fa-tag"></i>
                                    <a href="#">PHP</a>,
                                    <a href="#">Laravel</a>,
                                    <a href="#">Livewire</a>
                                </li>
                                <li><i class="fas fa-comments"></i> 12</li>
                            </ul>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet consectetur. Vitae et eget mattis augue tortor. Nisi duis
                                    proin molestie a
                                    id quis varius. Habitant aenean sit cras ac nibh. Sit in aliquet pretium magna. Purus
                                    magna ac dui
                                    lobortis habitant eget. Justo duis fermentum nunc nulla ullamcorper velit massa
                                    turpis.Sit in aliquet
                                    pretium magna. Purus magna ac dui lobortis habitant eget. Justo duis fermentum nunc
                                    nulla ullamcorper
                                    velit massa turpis.</p>
                            </div>
                            <a href="single-post.html" class="btn-main">Continue reading</a>
                        </div>
                    </article>

                    <article class="blog-post">
                        <div class="post-card py-3">
                            <img class="card-img-top" src="{{ asset('front/images/Blog/Rectangle 5-2.png') }}"
                                alt="">
                            <h2>How to code with PHP</h2>
                            <ul class="meta-data">
                                <li><i class="fas fa-calendar"></i> <a href="#">15 June 2023</a></li>
                                <li><i class="fas fa-user"></i> <a href="#">Posted by John Doe</a></li>
                                <li><i class="fas fa-tag"></i>
                                    <a href="#">PHP</a>,
                                    <a href="#">Laravel</a>,
                                    <a href="#">Livewire</a>
                                </li>
                                <li><i class="fas fa-comments"></i> 12</li>
                            </ul>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet consectetur. Vitae et eget mattis augue tortor. Nisi duis
                                    proin molestie a
                                    id quis varius. Habitant aenean sit cras ac nibh. Sit in aliquet pretium magna. Purus
                                    magna ac dui
                                    lobortis habitant eget. Justo duis fermentum nunc nulla ullamcorper velit massa
                                    turpis.Sit in aliquet
                                    pretium magna. Purus magna ac dui lobortis habitant eget. Justo duis fermentum nunc
                                    nulla ullamcorper
                                    velit massa turpis.</p>
                            </div>
                            <a href="single-post.html" class="btn-main">Continue reading</a>
                        </div>
                    </article>

                    <article class="blog-post">
                        <div class="post-card py-3">
                            <img class="card-img-top" src="{{ asset('front/images/Blog/Rectangle 5-3.png') }}"
                                alt="">
                            <h2>How to code with PHP</h2>
                            <ul class="meta-data">
                                <li><i class="fas fa-calendar"></i> <a href="#">15 June 2023</a></li>
                                <li><i class="fas fa-user"></i> <a href="#">Posted by John Doe</a></li>
                                <li><i class="fas fa-tag"></i>
                                    <a href="#">PHP</a>,
                                    <a href="#">Laravel</a>,
                                    <a href="#">Livewire</a>
                                </li>
                                <li><i class="fas fa-comments"></i> 12</li>
                            </ul>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet consectetur. Vitae et eget mattis augue tortor. Nisi duis
                                    proin molestie a
                                    id quis varius. Habitant aenean sit cras ac nibh. Sit in aliquet pretium magna. Purus
                                    magna ac dui
                                    lobortis habitant eget. Justo duis fermentum nunc nulla ullamcorper velit massa
                                    turpis.Sit in aliquet
                                    pretium magna. Purus magna ac dui lobortis habitant eget. Justo duis fermentum nunc
                                    nulla ullamcorper
                                    velit massa turpis.</p>
                            </div>
                            <a href="single-post.html" class="btn-main">Continue reading</a>
                        </div>
                    </article>
                    <style>

                    </style>
                    <nav class="my-5">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>

                </div>

               @include('layouts.inc.main-sidebar')
            </div>

        </main>

       @include('layouts.inc.main-footer')

    @endsection
