@section('title','Contact')
@extends('blog.partials.branch')

@section('content')
<section class="contact-section">
    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-md-6 col-lg-7">
                <div class="contact-info">
                    <h3>Contact Us</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis illum quasi nisi, repellat temporibus
                        doloribus quo impedit laborum mollitia, incidunt laboriosam sed quod reprehenderit corrupti debitis dolore
                        eligendi, a dignissimos.</p>
                    <ul class="contact-list">
                        <li><i class="fas fa-envelope"></i> <a href="mailto:abc@example.com.com">abc@example.com</a> </li>
                        <li><i class="fas fa-phone fa-flip-horizontal"></i><a href="tel:1234567890">1234567890</a>
                        </li>
                        <li><i class="fas fa-map-marker-alt"></i>XYZ, Street 102</li>
                    </ul>
                    <div class="circular-icons social-links">
                        <ul>
                            <li><a href="https://demo.codevibrant.com/html/kavya/contact.html#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://demo.codevibrant.com/html/kavya/contact.html#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://demo.codevibrant.com/html/kavya/contact.html#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="https://demo.codevibrant.com/html/kavya/contact.html#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <form class="contact-form">
                    <h3>Get in touch</h3>
                    <p>Feel free to drop us a message</p>

                    <input type="text" class="form-control" placeholder="Your Name">

                    <input type="email" class="form-control" placeholder="Your Email">

                    <textarea rows="7" class="form-control" placeholder="Type your message here"></textarea>

                    <button class="btn btn-solid">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
