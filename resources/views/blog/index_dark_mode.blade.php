@extends('blog.partials.main_dark')
@section('title','Home')

@section('content')

    <!-- Banner section -->
    <section class="banner-section">
        <div class="main-banner">
            <div class="container">
                <div class="banner-bg">
                    <div class="banner-bg-left">
                    </div>
                    <div class="banner-bg-right">
                        <div class="banner-carousel">
                            @foreach($posts as $post)
                            <div class="banner-item">
                                <div class="banner-img">
                                    <a href="{{url('single_post/'.$post->id)}}"> <img src="assets/images/image-1.jpg" alt=""></a>
                                </div>
                                <div class="banner-text">
                                    <ul class="category-tag-list">
                                        <li class="category-tag-name">
                                            <a href="#">Sports</a>
                                        </li>
                                    </ul>
                                    <div class="title-font">
                                        <a href="single-layout-one.html">{{$post->metaTitle}}</a>
                                    </div>
                                    <p class="mb-3">
                                        {{$post->summary}}
                                    </p>
                                    <a href="single-layout-one.html" class="btn btn-solid btn-read">Read More</a>
                                </div>
                            </div>
                            @endforeach
{{--                            <div class="banner-item">--}}

{{--                                <div class="banner-img">--}}
{{--                                    <a href="single-layout-one.html">--}}
{{--                                        <img src="assets/images/image-2.jpg" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                                <div class="banner-text">--}}
{{--                                    <ul class="category-tag-list">--}}

{{--                                        <li class="category-tag-name">--}}
{{--                                            <a href="#">Sports</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="title-font">--}}
{{--                                        <a href="single-layout-one.html">Get ready for December Adventures</a>--}}
{{--                                    </div>--}}
{{--                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quo sequi--}}
{{--                                        quibusdam--}}
{{--                                        similique exercitationem ratione consequuntur ipsa quas? Fugiat illum cupiditate voluptates,--}}
{{--                                        nulla--}}
{{--                                        quis--}}
{{--                                        doloremque officia ex placeat in ratione!</p>--}}

{{--                                    <a href="single-layout-one.html" class="btn btn-solid btn-read">Read More</a>--}}


{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="banner-item">--}}

{{--                                <div class="banner-img">--}}
{{--                                    <a href="single-layout-one.html">--}}
{{--                                        <img src="assets/images/image-3.jpg" alt="">--}}

{{--                                    </a>--}}
{{--                                </div>--}}

{{--                                <div class="banner-text">--}}
{{--                                    <ul class="category-tag-list">--}}

{{--                                        <li class="category-tag-name">--}}
{{--                                            <a href="#">Travel</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <div class="title-font">--}}
{{--                                        <a href="#">5 Workouts To Build Your Muscles Fast</a>--}}
{{--                                    </div>--}}
{{--                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt vel numquam eveniet--}}
{{--                                        nisi iure aliquid. Ea mollitia optio nostrum ut.</p>--}}

{{--                                    <a href="single-layout-one.html" class="btn btn-solid btn-read">Read More</a>--}}

{{--                                </div>--}}
{{--                            </div>--}}


                        </div>
                    </div>
                </div>


            </div>

        </div>
        <div class="container">
            <div class="more-content-grid py-30">
                <div class="row">
                    @foreach($bannerposts as $post)
                    <div class="col-md-4">
                        <div class="card">
                            <a href="single-layout-one.html">
                                <img src="assets/images/image-4.jpg" class="card-img-top " alt="" />
                            </a>
                            <div class="card-body px-0">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font">
                                    <a href="single-layout-one.html">
                                        {{$post->metaTitle}}
                                    </a>
                                </h5>
                                <div class="author-date">
                                    <a class="author" href="#">
                                        <img src="assets/images/writer.jpg" alt="" class="rounded-circle" />
                                        <span class="writer-name-small">{{$post->author_id}}</span>
                                    </a>
                                    <a class="date" href="#">
                                        <span>{{\Carbon\Carbon::parse($post->publishedAt)->day}} {{ date('M',strtotime($post->publishedAt))}},
                                            {{\Carbon\Carbon::parse($post->publishedAt)->year}}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
{{--                    <div class="col-md-4">--}}
{{--                        <div class="card">--}}
{{--                            <a href="single-layout-one.html">--}}
{{--                                <img src="assets/images/image-6.jpg" class="card-img-top " alt="" />--}}
{{--                            </a>--}}

{{--                            <div class="card-body px-0">--}}
{{--                                <ul class="category-tag-list">--}}
{{--                                    <li class="category-tag-name">--}}
{{--                                        <a href="#">Workout</a>--}}
{{--                                    </li>--}}

{{--                                </ul>--}}

{{--                                <h5 class="card-title title-font">--}}
{{--                                    <a href="single-layout-one.html">--}}
{{--                                        Easy Workouts To Lose Weight In One Month</a>--}}
{{--                                </h5>--}}
{{--                                <div class="author-date">--}}
{{--                                    <a class="author" href="#">--}}
{{--                                        <img src="assets/images/writer.jpg" alt="" class="rounded-circle" />--}}
{{--                                        <span class="writer-name-small">Julie</span>--}}
{{--                                    </a>--}}
{{--                                    <a class="date" href="#">--}}
{{--                                        <span>21 Dec, 2019</span>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <div class="card">--}}
{{--                            <a href="single-layout-one.html">--}}
{{--                                <img src="assets/images/image-7.jpg" class="card-img-top " alt="" />--}}
{{--                            </a>--}}

{{--                            <div class="card-body px-0">--}}
{{--                                <ul class="category-tag-list">--}}
{{--                                    <li class="category-tag-name">--}}
{{--                                        <a href="#">Lifestyle</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}

{{--                                <h5 class="card-title title-font">--}}
{{--                                    <a href="single-layout-one.html">Children Learn From Their Parents</a>--}}
{{--                                </h5>--}}
{{--                                <div class="author-date">--}}
{{--                                    <a class="author" href="#">--}}
{{--                                        <img src="assets/images/writer.jpg" alt="" class="rounded-circle" />--}}
{{--                                        <span class="writer-name-small">Julie</span>--}}
{{--                                    </a>--}}
{{--                                    <a class="date" href="#">--}}
{{--                                        <span>21 Dec, 2019</span>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- Banner section end -->

    <!-- Featured posts -->
    <section class="featured-posts">
        <div class="container">
            <div class="section-title">
                <h2>Featured posts</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-7">
                    <div class="featured-left">
                        @if(count($parentfeaturedpost))
                            @foreach($parentfeaturedpost as $post)
                        <div class="card">
                            <a href="single-layout-one.html"><img src="assets/images/image-8.jpg" class="card-img " alt="" /></a>
                            <div class="card-img-overlay">
                                <ul class="category-tag-list">

                                    <li class="category-tag-name">
                                        <a href="#">Fitness</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font">
                                    <a href="#">{{$post->metaTitle}}</a>
                                </h5>
                                <p class="card-text mb-3">
                                    {{substr($post->content,0,200)}}{{strlen($post->content) > 100 ? "..." : ""}}
                                </p>
                                <a href="single-layout-one.html" class="btn btn-solid btn-read">Read More</a>
                            </div>
                        </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="featured-right">
                        @if(count($childfeaturedposts))
                            @foreach($childfeaturedposts as $post)
                        <div class="card">
                            <a href="single-layout-one.html">
                                <img src="assets/images/image-10.jpg" class="card-img-top " alt="">
                            </a>
                            <div class="card-body">
                                <ul class="category-tag-list">

                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font"><a href="single-layout-one.html">{{$post->metaTitle}}</a>
                                </h5>
                                <div class="author-date">
                                    <a class="author" href="#">
                                        <img src="assets/images/writer.jpg" alt="" class="rounded-circle" />
                                        <span class="writer-name-small">{{$post->author_id}}</span>
                                    </a>
                                    <a class="date" href="#">
                                        <span>{{\Carbon\Carbon::parse($post->publishedAt)->day}} {{ date('M',strtotime($post->publishedAt))}},
                                            {{\Carbon\Carbon::parse($post->publishedAt)->year}}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @endif
{{--                        <div class="card">--}}
{{--                            <a href="single-layout-one.html">--}}
{{--                                <img src="assets/images/image-9.jpg" class="card-img-top " alt="">--}}

{{--                            </a>--}}
{{--                            <div class="card-body">--}}
{{--                                <ul class="category-tag-list">--}}
{{--                                    <li class="category-tag-name">--}}
{{--                                        <a href="#">Lifestyle</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="category-tag-name">--}}
{{--                                        <a href="#">Travel</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <h5 class="card-title title-font"><a href="single-layout-one.html">Why College Students Love BasketBall</a>--}}
{{--                                </h5>--}}
{{--                                <div class="author-date">--}}
{{--                                    <a class="author" href="#">--}}
{{--                                        <img src="assets/images/writer.jpg" alt="" class="rounded-circle" />--}}
{{--                                        <span class="writer-name-small">Julie</span>--}}
{{--                                    </a>--}}
{{--                                    <a class="date" href="#">--}}
{{--                                        <span>21 Dec, 2019</span>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured post end -->

    <!-- Popular posts -->
    <section class="popular-posts section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Popular posts</h2>
            </div>
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    @foreach($popularposts as $post)
                    <div class="card mb-4">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <a href="single-layout-one.html">
                                    <img src="assets/images/image-11.jpg" class="card-img " alt="">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <ul class="category-tag-list">
                                        <li class="category-tag-name">
                                            <a href="#">Sports</a>
                                        </li>
                                    </ul>
                                    <h5 class="card-title title-font"><a href="single-layout-one.html">{{$post->metaTitle}}</a>
                                    </h5>
                                    <p class="card-text">{{substr($post->content,0,200)}}{{strlen($post->content) > 200 ? "..." : ""}}<p>
                                    <div class="author-date">
                                        <a class="author" href="#">
                                            <img src="assets/images/writer.jpg" alt="" class="rounded-circle" />
                                            <span class="writer-name-small">{{$post->author_id}}</span>
                                        </a>
                                        <a class="date" href="#">
                                            <span>{{\Carbon\Carbon::parse($post->publishedAt)->day}} {{ date('M',strtotime($post->publishedAt))}},
                                            {{\Carbon\Carbon::parse($post->publishedAt)->year}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
{{--                    <div class="card mb-4">--}}
{{--                        <div class="row no-gutters align-items-center">--}}
{{--                            <div class="col-md-4">--}}
{{--                                <a href="single-layout-one.html"> <img src="assets/images/image-5.jpg" class="card-img " alt=""></a>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-8">--}}
{{--                                <div class="card-body">--}}
{{--                                    <ul class="category-tag-list">--}}
{{--                                        <li class="category-tag-name">--}}
{{--                                            <a href="#">Sports</a>--}}
{{--                                        </li>--}}

{{--                                    </ul>--}}
{{--                                    <h5 class="card-title title-font"><a href="single-layout-one.html">5 Tricks To Defend In Boxing</a></h5>--}}
{{--                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ipsum rem, delectus--}}
{{--                                        deserunt consectetur saepe? Expedita sapiente rerum nostrum fuga non iure minima sunt inventore.<p>--}}
{{--                                    <div class="author-date">--}}
{{--                                        <a class="author" href="#">--}}
{{--                                            <img src="assets/images/writer.jpg" alt="" class="rounded-circle" />--}}
{{--                                            <span class="writer-name-small">Julie</span>--}}
{{--                                        </a>--}}
{{--                                        <a class="date" href="#">--}}
{{--                                            <span>21 Dec, 2019</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="card mb-4">--}}
{{--                        <div class="row no-gutters align-items-center">--}}
{{--                            <div class="col-md-4">--}}
{{--                                <a href="single-layout-one.html"><img src="assets/images/image-12.jpg" class="card-img " alt=""></a>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-8">--}}
{{--                                <div class="card-body">--}}
{{--                                    <ul class="category-tag-list">--}}
{{--                                        <li class="category-tag-name">--}}
{{--                                            <a href="#">Sports</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <h5 class="card-title title-font"><a href="single-layout-one.html">Marathon For A Social Cause</a></h5>--}}
{{--                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ipsum rem, delectus--}}
{{--                                        deserunt consectetur saepe? <p>--}}
{{--                                    <div class="author-date">--}}
{{--                                        <a class="author" href="#">--}}
{{--                                            <img src="assets/images/writer.jpg" alt="" class="rounded-circle" />--}}
{{--                                            <span class="writer-name-small">Julie</span>--}}
{{--                                        </a>--}}
{{--                                        <a class="date" href="#">--}}
{{--                                            <span>21 Dec, 2019</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="card mb-4">--}}
{{--                        <div class="row no-gutters align-items-center">--}}
{{--                            <div class="col-md-4">--}}
{{--                                <a href="single-layout-one.html"><img src="assets/images/image-13.jpg" class="card-img " alt=""></a>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-8">--}}
{{--                                <div class="card-body">--}}
{{--                                    <ul class="category-tag-list">--}}
{{--                                        <li class="category-tag-name">--}}
{{--                                            <a href="#">Sports</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <h5 class="card-title title-font"><a href="single-layout-one.html"> Amazing Performance Of Our Team In Football</a></h5>--}}
{{--                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ipsum rem, delectus--}}
{{--                                        deserunt consectetur saepe? <p>--}}
{{--                                    <div class="author-date">--}}
{{--                                        <a class="author" href="#">--}}
{{--                                            <img src="assets/images/writer.jpg" alt="" class="rounded-circle" />--}}
{{--                                            <span class="writer-name-small">Julie</span>--}}
{{--                                        </a>--}}
{{--                                        <a class="date" href="#">--}}
{{--                                            <span>21 Dec, 2019</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="recent-posts">
                        <div class="sidebar-title">
                            <h5><i class="fas fa-circle"></i>Trending this week</h5>
                        </div>
                        <div class="sidebar-content">
                            <ul class="sidebar-list">
                                <li class="sidebar-item">
                                    <div class="num-left">
                                        1
                                    </div>
                                    <div class="content-right">
                                        <a href="single-layout-one.html">Healthy Dieting Habits for any age</a>

                                    </div>
                                </li>
                                <li class="sidebar-item">
                                    <div class="num-left">
                                        2
                                    </div>
                                    <div class="content-right">
                                        <a href="single-layout-one.html"> 10 foods you should try in Kathmandu</a>
                                    </div>
                                </li>
                                <li class="sidebar-item">
                                    <div class="num-left">
                                        3
                                    </div>
                                    <div class="content-right">
                                        <a href="single-layout-one.html">Everything You Wanted to Know About Love Life</a>
                                    </div>
                                </li>
                                <li class="sidebar-item">
                                    <div class="num-left">
                                        4
                                    </div>
                                    <div class="content-right">
                                        <a href="single-layout-one.html">Yoga works only under these conditions</a>
                                    </div>
                                </li>
                                <li class="sidebar-item">
                                    <div class="num-left">
                                        5
                                    </div>
                                    <div class="content-right">
                                        <a href="single-layout-one.html">Top 10 mysterious places you didn't know</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-posts mt-4">
                        <div class="sidebar-title">
                            <h5><i class="fas fa-circle"></i>Categories</h5>
                        </div>
                        <div class="sidebar-content">
                            <div class="category-name-list">
                                <div class="card small-card">
                                    <a href="single-layout-one.html"><img src="assets/images/shoes.jpg" class="card-img" alt="" /></a>
                                    <div class="card-img-overlay">
                                        <h5 class="card-title title-font mb-0">
                                            <a href="#">Travel</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="card small-card">
                                    <a href="single-layout-one.html"><img src="assets/images/photography.jpg" class="card-img"
                                                                          alt="" /></a>
                                    <div class="card-img-overlay">
                                        <h5 class="card-title title-font mb-0">
                                            <a href="#">Photography</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="card small-card">
                                    <a href="single-layout-one.html"><img src="assets/images/fashion.jpg" class="card-img" alt="" /></a>
                                    <div class="card-img-overlay">
                                        <h5 class="card-title title-font mb-0">
                                            <a href="#">Fashion</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular posts end -->

    <!-- Recommended Posts -->
    <section class="recommended-posts">
        <div class="container">
            <div class="section-title">
                <h2>Recommended posts</h2>
            </div>
            <div class="more-content-grid ">
                <div class="row">
                    @foreach($recommendedposts as $post)
                    <div class="col-md-4">
                        <div class="card">
                            <a href="single-layout-one.html">
                                <img src="assets/images/image-14.jpg" class="card-img-top" alt="" />
                            </a>
                            <div class="card-body px-0">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">Lifestyle</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font">
                                    <a href="single-layout-one.html">
                                        {{$post->metaTitle}}</a>
                                </h5>
                                <div class="author-date">
                                    <a class="author" href="#">
                                        <img src="assets/images/writer.jpg" alt="" class="rounded-circle" />
                                        <span class="writer-name-small">{{$post->author_id}}</span>
                                    </a>
                                    <a class="date" href="#">
                                        <span>{{\Carbon\Carbon::parse($post->publishedAt)->day}} {{ date('M',strtotime($post->publishedAt))}},
                                            {{\Carbon\Carbon::parse($post->publishedAt)->year}}</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
{{--                    <div class="col-md-4">--}}
{{--                        <div class="card">--}}
{{--                            <a href="single-layout-one.html">--}}
{{--                                <img src="assets/images/image-3.jpg" class="card-img-top" alt="" />--}}
{{--                            </a>--}}
{{--                            <div class="card-body px-0">--}}
{{--                                <ul class="category-tag-list">--}}
{{--                                    <li class="category-tag-name">--}}
{{--                                        <a href="#">Workout</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <h5 class="card-title title-font">--}}
{{--                                    <a href="single-layout-one.html">--}}
{{--                                        5 Workouts To Build Your Muscles Fast</a>--}}
{{--                                </h5>--}}
{{--                                <div class="author-date">--}}
{{--                                    <a class="author" href="#">--}}
{{--                                        <img src="assets/images/writer.jpg" alt="" class="rounded-circle" />--}}
{{--                                        <span class="writer-name-small">Julie</span>--}}
{{--                                    </a>--}}
{{--                                    <a class="date" href="#">--}}
{{--                                        <span>21 Dec, 2019</span>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <div class="card">--}}
{{--                            <a href="single-layout-one.html">--}}
{{--                                <img src="assets/images/image-15.jpg" class="card-img-top" alt="" />--}}
{{--                            </a>--}}
{{--                            <div class="card-body px-0">--}}
{{--                                <ul class="category-tag-list">--}}
{{--                                    <li class="category-tag-name">--}}
{{--                                        <a href="#">Fitness</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <h5 class="card-title title-font">--}}
{{--                                    <a href="single-layout-one.html">Essential Gears Before Going To The Gym</a>--}}
{{--                                </h5>--}}
{{--                                <div class="author-date">--}}
{{--                                    <a class="author" href="#">--}}
{{--                                        <img src="assets/images/writer.jpg" alt="" class="rounded-circle" />--}}
{{--                                        <span class="writer-name-small">Julie</span>--}}
{{--                                    </a>--}}
{{--                                    <a class="date" href="#">--}}
{{--                                        <span>21 Dec, 2019</span>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- Recommended posts end -->

    <!-- Instagram Posts -->
    <section class="insta-posts">
        <div class="container">
            <div class="insta-title">
                <img src="assets/images/instagram.svg" alt="">
                <h2>Follow us on Instagram</h2>
            </div>

            <div class="image-item-grid insta-slider">

                <div class="image-item">
                    <a href="#">
                        <img src="assets/images/beautiful-girl.jpg" alt="">
                    </a>
                    <a href="#">
                        <div class="image-hover">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>
                <div class="image-item image-item-margin">
                    <a href="#">
                        <img src="assets/images/colors.jpg" alt="">
                    </a>
                    <a href="#">
                        <div class="image-hover">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>
                <div class="image-item">
                    <a href="#">
                        <img src="assets/images/city-pink.jpg" alt="">
                    </a>
                    <a href="#">
                        <div class="image-hover">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>
                <div class="image-item image-item-margin">
                    <a href="#">
                        <img src="assets/images/sea-lighthouse.jpg" alt="">
                    </a>
                    <a href="#">
                        <div class="image-hover">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>
                <div class="image-item">
                    <a href="#">
                        <img src="assets/images/boat.jpg" alt="">
                    </a>
                    <a href="#">
                        <div class="image-hover">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>
                <div class="image-item">
                    <a href="#">
                        <img src="assets/images/beach-sea.jpg" alt="">
                    </a>
                    <a href="#">
                        <div class="image-hover">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>
                <div class="image-item">
                    <a href="#">
                        <img src="assets/images/orange-bus.jpg" alt="">
                    </a>
                    <a href="#">
                        <div class="image-hover">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>
                <div class="image-item">
                    <a href="#">
                        <img src="assets/images/tall.jpg" alt="">
                    </a>
                    <a href="#">
                        <div class="image-hover">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram posts end -->

@stop
