@section('title','Authors')
@extends('blog.partials.branch')

@section('content')

    <!-- Author section -->
    <section class="author-section">
        <div class="container">
            <h2>Meet our authors</h2>
            <div class="row">
                @foreach($authors as $author)
                <div class="col-md-6 col-lg-3">
                    <div class="card author-card">
                        <div class="card-img">
                            <img src="assets/images/writer.jpg" alt="">
                        </div>
                        <h5><a href="{{url('single_author/'.$author->id)}}">{{$author->firstName}} {{$author->middleName}}</a></h5>
                        <small>{{substr($author->profile,0,16)}}{{strlen($author->profile) > 16 ? "." : ""}}</small>
                        <p class="card-text">{{substr($author->intro,0,200)}}{{strlen($author->intro) > 200 ? "..." : ""}}</p>

                        <div class="social-links circular-icons">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
{{--                <div class="col-md-6 col-lg-3">--}}
{{--                    <div class="card author-card">--}}
{{--                        <div class="card-img">--}}
{{--                            <img src="assets/images/author.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <h5><a href="#">Lidia Greig</a></h5>--}}
{{--                        <small>Chief author</small>--}}
{{--                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A ipsum labore quaerat magni--}}
{{--                            non saepe. Lorem ipsum dolor sit amet.</p>--}}

{{--                        <div class="social-links circular-icons">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-3">--}}
{{--                    <div class="card author-card">--}}
{{--                        <div class="card-img">--}}
{{--                            <img src="assets/images/person3.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <h5><a href="#">Ross Walton--}}
{{--                            </a></h5>--}}
{{--                        <small>Chief author</small>--}}
{{--                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A ipsum labore quaerat magni--}}
{{--                            non saepe. Lorem ipsum dolor sit amet.</p>--}}

{{--                        <div class="social-links circular-icons">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-3">--}}
{{--                    <div class="card author-card">--}}
{{--                        <div class="card-img">--}}
{{--                            <img src="assets/images/person2.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <h5><a href="#">Eden Shannon--}}
{{--                            </a></h5>--}}
{{--                        <small>Chief author</small>--}}
{{--                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A ipsum labore quaerat magni--}}
{{--                            non saepe. Lorem ipsum dolor sit amet.</p>--}}
{{--                        <div class="social-links circular-icons">--}}
{{--                            <ul>--}}
{{--                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!-- About section -->
@endsection
