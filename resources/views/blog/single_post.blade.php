@extends('blog.partials.main')
@section('title','View Post')

@section('content')

    <!-- single layout blog content -->
    <section class="single-layout">
        @foreach($singlepost as $post)
        <div class="container">
            <div class="blog-img-main">
                <img src="{{asset('assets/images/december.jpg')}}" alt="">
            </div>
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="blog-content-wrap">
                        <div class="blog-title-wrap">
                            <div class="author-date">
                                <a class="author" href="#">
                                    <img src="{{asset('assets/images/writer.jpg')}}" alt="" class="rounded-circle" />
                                    <span class="">{{$post->author_id}}</span>
                                </a>
                                <a class="date" href="#">
                                    <span>Posted on {{\Carbon\Carbon::parse($post->publishedAt)->day}} {{ date('M',strtotime($post->publishedAt))}},
                                        {{\Carbon\Carbon::parse($post->publishedAt)->year}}</span>
                                </a>
                            </div>
                            <ul class="category-tag-list mb-0">
                                <li class="category-tag-name">
                                    <a href="#">Featured</a>
                                </li>
                                <li class="category-tag-name">
                                    <a href="#">Lifestyle</a>
                                </li>
                            </ul>
                            <h1 class="title-font">{{$post->metaTitle}}</h1>
                        </div>

                        <div class="blog-desc">
                            <p>{{substr($post->content,0,800)}}{{strlen($post->content) > 800 ? "..." : ""}}</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse molestiae distinctio
                                aliquam sunt dolorem architecto incidunt natus sit et excepturi! Quidem expedita
                                accusantium reiciendis iure magnam possimus excepturi accusamus aut perspiciatis ad
                                ex rem, explicabo, consequuntur ipsum eveniet tenetur aliquid molestias veniam
                                dolores harum adipisci? Enim eaque libero voluptate perspiciatis rem. Unde
                                recusandae, deserunt quo ipsam aliquid sunt cupiditate vero distinctio labore id
                                blanditiis corporis inventore assumenda non, nisi voluptatem aperiam libero officia
                                beatae dignissimos earum ratione explicabo? Adipisci, dolor!</p>
                            <blockquote>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et ex quas aliquam est
                                excepturi molestiae non dolor voluptatem voluptatum saepe?
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse molestiae distinctio
                                aliquam sunt dolorem architecto incidunt natus sit et excepturi! Quidem expedita
                                accusantium reiciendis iure magnam possimus excepturi accusamus aut perspiciatis ad
                                ex rem, explicabo, consequuntur ipsum eveniet tenetur aliquid molestias veniam
                                dolores harum adipisci? Enim eaque libero voluptate perspiciatis rem. Unde
                                recusandae, deserunt quo ipsam aliquid sunt cupiditate vero distinctio labore id
                                blanditiis corporis inventore assumenda non, nisi voluptatem aperiam libero officia
                                beatae dignissimos earum ratione explicabo? Adipisci, dolor!</p>
                            <img src="{{asset('assets/images/winter.jpg')}}" alt="">

                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis dicta repellendus
                                similique deleniti aperiam totam expedita quo eaque itaque saepe aliquid adipisci,
                                voluptates tenetur ab dolorem enim iusto doloremque, possimus quae aliquam? Saepe
                                debitis at officia sunt voluptas beatae molestias quis amet tempora? Autem rerum
                                inventore, excepturi nisi magni, eligendi, saepe nulla corrupti fuga eius deserunt
                                rem labore consectetur repellendus.</p>
                        </div>
                        <div class="tags-wrap">
                            <div class="blog-tags">
                                <p>Tags:</p>
                                <ul class="sidebar-list tags-list">
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">December</a></li>
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Fun</a></li>
                                </ul>
                            </div>
                            <div class="share-buttons">
                                <p>Share Now:</p>
                                <ul class="share-list">
                                    <li><a href="#"><img src="{{asset('assets/images/facebook.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets/images/twitter.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets/images/pinterest.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets/images/messenger.png')}}" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-author-info">
                            <div class="author-img">
                                <img src="{{asset('assets/images/writer.jpg')}}" alt="">
                            </div>
                            <div class="author-desc">
                                <small>written by</small>
                                <h5>{{$post->author_id}}</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum magni ipsa
                                    fugiat pariatur! </p>
                            </div>
                        </div>
                        <div class="comment-section">
                            <div class="all-response">
                                <a class="btn view-all-btn" data-toggle="collapse" href="#collapseExample" role="button"
                                   aria-expanded="false" aria-controls="collapseExample">
                                    View all comments ( 3 )
                                </a>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card comment-card">
                                    <div class="card-body">
                                        <div class="author-date">
                                            <div class="author">
                                                <img src="{{asset('assets/images/person1.jpg')}}" alt="" class="rounded-circle" />
                                            </div>
                                            <div class="inner-author-date">
                                                <div class="author">
                                                    <span class="">Ana Grainger</span>
                                                </div>
                                                <div class="date"><span>1 Feb, 2019</span></div>
                                            </div>
                                        </div>
                                        <div class="comment-text mt-2">
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos quos optio
                                                ab numquam excepturi commodi nam omnis eaque, culpa earum!</p>
                                        </div>
                                    </div>

                                    <div class="card comment-card">
                                        <div class="card-body">
                                            <div class="author-date">
                                                <div class="author">
                                                    <img src="{{asset('assets/images/writer.jpg')}}" alt="" class="rounded-circle" />
                                                </div>
                                                <div class="inner-author-date">
                                                    <div class="author">
                                                        <span>Julie Perry</span>
                                                    </div>
                                                    <div class="date"><span>1 Feb, 2019</span></div>
                                                </div>
                                            </div>
                                            <div class="comment-text mt-2">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos quos optio
                                                    ab numquam excepturi commodi nam omnis eaque, culpa earum!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card comment-card">
                                    <div class="card-body">
                                        <div class="author-date">
                                            <div class="author">
                                                <img src="{{asset('assets/images/person2.jpg')}}" alt="" class="rounded-circle" />
                                            </div>
                                            <div class="inner-author-date">
                                                <div class="author">
                                                    <span class="">Iman Lindsay</span>
                                                </div>
                                                <div class="date"><span>1 Feb, 2019</span></div>
                                            </div>
                                        </div>
                                        <div class="comment-text mt-2">
                                            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ipsum voluptatum suscipit
                                                ipsam, dolorem quas animi magnam repellendus. Quidem unde maxime fugit, cupiditate veritatis
                                                maiores dolor corporis consequuntur pariatur quo culpa ipsum! Eos aliquid deserunt incidunt
                                                ratione ullam eaque. Ducimus?</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card comment-card">
                                    <div class="card-body">
                                        <div class="author-date">
                                            <div class="author">
                                                <img src="{{asset('assets/images/person3.jpg')}}" alt="" class="rounded-circle" />
                                            </div>
                                            <div class="inner-author-date">
                                                <div class="author">
                                                    <span class="">Simone Bob</span>
                                                </div>
                                                <div class="date"><span>1 Feb, 2019</span></div>
                                            </div>
                                        </div>
                                        <div class="comment-text mt-2">
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos quos optio
                                                ab numquam excepturi commodi nam omnis eaque, culpa earum!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form class="comment-form">
                                <h5>Leave a comment</h5>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-4">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                    <div class="col-12 col-md-6 mb-4">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <textarea rows="7" class="form-control" placeholder="Comment"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-solid">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <!-- Single Layout Blog content end -->

    <!-- Related posts -->
    <section class="related-posts">
        <div class="container">
            <div class="related-title">
                <h3>Related posts</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card small-card simple-overlay-card">
                        <a href="#"><img src="{{asset('assets/images/town-street.jpg')}}" class="card-img" alt="" /></a>
                        <div class="card-img-overlay">
                            <ul class="category-tag-list mb-0">
                                <li class="category-tag-name">
                                    <a href="#">Travel</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="#">Why I love to travel in Spring</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card small-card simple-overlay-card">
                        <a href="#"><img src="{{asset('assets/images/camera.jpg')}}" class="card-img" alt="" /></a>
                        <div class="card-img-overlay">
                            <ul class="category-tag-list mb-0">
                                <li class="category-tag-name">
                                    <a href="#">Photography</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="#">Photography tips and tricks</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card small-card simple-overlay-card">
                        <a href="#"><img src="{{asset('assets/images/winter-house.jpg')}}" class="card-img" alt="" /></a>
                        <div class="card-img-overlay">
                            <ul class="category-tag-list mb-0">
                                <li class="category-tag-name">
                                    <a href="#">Lifestyle</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="#">Living in a beach house</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card small-card simple-overlay-card">
                        <a href="#"><img src="{{asset('assets/images/shoes.jpg')}}" class="card-img" alt="" /></a>
                        <div class="card-img-overlay">
                            <ul class="category-tag-list mb-0">
                                <li class="category-tag-name">
                                    <a href="#">Travel</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="#">The next travel destination</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related posts end -->

@stop
