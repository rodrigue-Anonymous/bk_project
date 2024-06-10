@extends('layout.master')
@section('title','Accueil')
@section('content')
<body id="home">

    <div class="scroll-up-btn">
        <i class="bx bx-up-arrow-alt bx-sm"></i>
    </div>


    <!-- Services / Goal Section  -->

    <section id="services" class="bg-light py-3">
        <div class="wrapper">
            <div class="items">
                <div class="item">
                    <i class="bx bxs-badge-dollar bx-lg"></i>
                    <h3>Financial Services</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, blanditiis.</p>
                </div>
                <div class="item">
                    <i class="bx bxs-building-house bx-lg"></i>
                    <h3>Government Services</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, blanditiis.</p>
                </div>
                <div class="item">
                    <i class="bx bxs-credit-card-front bx-lg"></i>
                    <h3>Customer Products</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, blanditiis.</p>
                </div>
                <div class="item">
                    <i class="bx bxs-plane-alt bx-lg"></i>
                    <h3>Airlines & Transport</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, blanditiis.</p>
                </div>
            </div>
            <div id="goal" class="goal">
                <div class="goal-img">
                    <img src="assets_1/images/photo1.jpg">
                </div>
                <div class="goal-text">
                    <a href="#">Our Priorities</a>
                    <h2>Investment Banking & <br> Capital Market</h2>
                    <div class="contents">
                        <div class="content p-4">
                            <i class="bx bx-check bx-sm"></i>
                        </div>
                        <div class="content p-4">
                            <h3>Investment Management</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Nam ipsa vero accusantium enim culpa iure aspernatur ?</p>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="content p-4">
                            <i class="bx bx-check bx-sm"></i>
                        </div>
                        <div class="content p-4">
                            <h3>Private Credit & Equity</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Nam ipsa vero accusantium enim culpa iure aspernatur ?</p>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="content p-4">
                            <i class="bx bx-check bx-sm"></i>
                        </div>
                        <div class="content p-4">
                            <h3>Business Multi Solutions</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Nam ipsa vero accusantium enim culpa iure aspernatur ?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio py-3">
        <h3 class="text-center">Company Portfolio</h3>
        <h2 class="text-center">Our Latest <span class="text-secondary">Case Studies</span> </h2>
        <p class="text-center">We help you see the world differently, discover opportunities you may never have <br> imagined and achieve results that bridge what is with what can be</p>
        <div class="owl-carousel">
            <div class="item"><img src="assets_1/images/photo2.jpg"></div>
            <div class="item"><img src="assets_1/images/photo3.jpg"></div>
            <div class="item"><img src="assets_1/images/photo4.jpg"></div>
            <div class="item"><img src="assets_1/images/photo5.jpg"></div>
            <div class="item"><img src="assets_1/images/photo6.jpg"></div>
            <div class="item"><img src="assets_1/images/photo7.jpg"></div>
            <div class="item"><img src="assets_1/images/photo8.jpg"></div>
            <div class="item"><img src="assets_1/images/photo9.jpg"></div>
            <div class="item"><img src="assets_1/images/photo10.jpg"></div>
            <div class="item"><img src="assets_1/images/photo11.jpg"></div>
            <div class="item"><img src="assets_1/images/photo12.jpg"></div>
            assets_1        </div>
    </section>

    <!-- Team Section -->
    <section id="teams" class="teams bg-light py-3">
        <h3 class="text-center">We are there for you</h3>
        <h2 class="text-center">Meet Our <span class="text-secondary">Professional Team</span></h2>
        <p class="text-center">We help you see the world differently, discover opportunities you may never have <br> imagined and achieve results that bridge what is with what can be</p>
        <div class="wrapper">
            <div class="card-items">
                <div class="card">
                    <div class="card-header">
                        <img src="assets/images/cynthia.jpg">
                    </div>
                    <div class="card-body">
                        <h3>Cynthia Spears</h3>
                        <h4>Chief Communication Officer</h4>
                        <ul>
                            <li><a href="#"><i class="bx bxl-twitter bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-pinterest-alt bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-facebook bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt bx-xs"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="assets_1/images/vera.jpg">
                    </div>
                    <div class="card-body">
                        <h3>Vera Monica</h3>
                        <h4>Chief Business Project</h4>
                        <ul>
                            <li><a href="#"><i class="bx bxl-twitter bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-pinterest-alt bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-facebook bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt bx-xs"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="assets_1/images/kevin.jpg">
                    </div>
                    <div class="card-body">
                        <h3>Kevin Philips</h3>
                        <h4>International Consultant</h4>
                        <ul>
                            <li><a href="#"><i class="bx bxl-twitter bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-pinterest-alt bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-facebook bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt bx-xs"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="assets_1/images/augusta.jpg">
                    </div>
                    <div class="card-body">
                        <h3>Augusta Brian</h3>
                        <h4>Co-Founder of Company</h4>
                        <ul>
                            <li><a href="#"><i class="bx bxl-twitter bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-pinterest-alt bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-facebook bx-xs"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt bx-xs"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="blog py-3">
        <div class="wrapper">
            <div class="header">
                <span></span>
                <h4>Business Blog</h4>
            </div>
            <div class="blog-info">
                <h2>Read Our <span class="text-secondary">Latest Insights</span></h2>
                <a href="#">view all</a>
            </div>
            <div class="blog-card">
                <div class="card">
                    <div class="card-header">
                        <img src="assets_1/images/blog1.jpg">
                    </div>
                    <div class="card-body">
                        <span class="tag tag-yellow">Business</span>
                        <h4>Contactless Payments' <br> Time has come</h4>
                        <div class="footer">
                            <small>April 7, 2022 / 5 comments</small>
                            <a href="#"><i class="bx bx-right-arrow-alt bx-sm"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="assets_1/images/blog2.jpg">
                    </div>
                    <div class="card-body">
                        <span class="tag tag-purple">Finance</span>
                        <h4>The Future of Retail: <br> Europe's Ecosystems</h4>
                        <div class="footer">
                            <small>April 11, 2022 / 20 comments</small>
                            <a href="#"><i class="bx bx-right-arrow-alt bx-sm"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="assets_1/images/blog3.jpg">
                    </div>
                    <div class="card-body">
                        <span class="tag tag-pink">Marketiing</span>
                        <h4>Digital Transformation <br> Roadmap: Enablers</h4>
                        <div class="footer">
                            <small>April 30, 2022 / 10 comments</small>
                            <a href="#"><i class="bx bx-right-arrow-alt bx-sm"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="contact" class="contact bg-secondary py-3">
        <h2 class="text-center">Subscribe To Our Newsletter</h2>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio,<br> quam asperiores qui illum tenetur atque.</p>
        <div class="wrapper">
            <form class="text-center">
                <input type="email" name="email" id="email" placeholder="Enter Email Address">
                <button class="button">Submit</button>
            </form>
        </div>
    </section>




</body>
@endsection










