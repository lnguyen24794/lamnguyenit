
 <?php get_header(); ?> 
    
 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1176 981" style="enable-background:new 0 0 1176 981;" xml:space="preserve">
            <style type="text/css">
                .st0 {
                    opacity: 0.25;
                    clip-path: url(#SVGID_2_);
                    fill: #4FACFE;
                }
            </style>
            <g>
                <defs>
                    <path id="SVGID_1_" d="M1176,0v653.7L653.6,961.6c-47.6,28-108.9,12.2-136.9-35.4L27.9,96.9C9.7,66.1,10,29.5,25.3,0H1176z" /> </defs>
                <clipPath id="SVGID_2_">
                    <use xlink:href="#SVGID_1_" style="overflow:visible;" /> </clipPath>
                <g transform="matrix(1 0 0 1 0 2.384186e-07)" style="clip-path:url(#SVGID_2_);">
                    <image style="overflow:visible;" width="1920" height="1281" xlink:href="<?=get_template_directory_uri()?>/img/background/1.jpg" transform="matrix(0.7675 0 0 0.7675 -168.1944 -3.8398)"> </image>
                </g>
                <path class="st0" d="M1176,0v653.7L653.6,961.6c-47.6,28-108.9,12.2-136.9-35.4L27.9,96.9C9.7,66.1,10,29.5,25.3,0H1176z" /> </g>
        </svg>
        <div class="header-img">
            <div class="overlay"></div>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                        <?php 
                            $content = get_field('content');
                            if($content):
                        ?>
                        <div class="header-text">
                            <h1><?=$content['header-text']?></h1>
                            <p><?=$content['header-p']?></p>
                        </div>
                        <div class="button"> <a class="btn-main" href="<?=$content['header-url']?>">Bắt đầu</a> </div>
                        <div class="play"> <a class="play-i" href="https://www.youtube.com/watch?v=WBAhElwHNNk&amp;t=2s" data-lity><i class="fas fa-play"></i></a> </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="social">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
    </header>
    <section class="about section-padding">
        <div class="container">
            <div class="about-text">
                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
            </div>
            <div class="about-items">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="about-item">
                            <div class="item-icon"> <span class="icon icon-nature"></span> </div>
                            <div class="text">
                                <h3>Flexibility</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="about-item">
                            <div class="item-icon"> <span class="icon icon-user"></span> </div>
                            <div class="text">
                                <h3>Transparency</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="about-item">
                            <div class="item-icon"> <span class="icon icon-mobile"></span> </div>
                            <div class="text">
                                <h3>Fully Responsive</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="services-items col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="#">
                                <div class="item">
                                    <div class="item-icon"> <span class="icon icon-browser"></span> </div>
                                    <div class="item-text">
                                        <h3>Web Devlopment</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="item-link"> <span><i class="fas fa-chevron-right"></i></span> </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="item">
                                    <div class="item-icon"> <span class="icon icon-cartridge"></span> </div>
                                    <div class="item-text">
                                        <h3>Digital Marketing</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="item-link"> <span><i class="fas fa-chevron-right"></i></span> </div>
                                </div>
                            </a>
                        </div>
                        <div class="item-right col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="#">
                                <div class="item">
                                    <div class="item-icon"> <span class="icon icon-rating"></span> </div>
                                    <div class="item-text">
                                        <h3>Growth Strategy</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="item-link"> <span><i class="fas fa-chevron-right"></i></span> </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="item">
                                    <div class="item-icon"> <span class="icon icon-diamond"></span> </div>
                                    <div class="item-text">
                                        <h3>Usable Product</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="item-link"> <span><i class="fas fa-chevron-right"></i></span> </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="services-text-top col-lg-6 col-md-6 col-md-12 col-xs-12">
                    <div class="services-text clearfix">
                        <div class="title"> <span>Services</span>
                            <h2>We Provide Awesome Services</h2> </div>
                        <div class="text-p">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="button"> <a class="btn-main" href="#">Get Started</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="what-we-do section-padding clearfix">
        <div class="what-we-do-img col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix">
            <div class="what-img"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="what-we-do-text-top col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix">
                    <div class="title"> <span>What we do</span>
                        <h2>Let’s Build Something Great. Together</h2> </div>
                    <div class="text-p">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="option">
                        <ul>
                            <li><i class="far fa-check-circle"></i>
                                <p>We provide free initial consultation and support.</p>
                            </li>
                            <li><i class="far fa-check-circle"></i>
                                <p>We work with some of the most successful businesses</p>
                            </li>
                            <li><i class="far fa-check-circle"></i>
                                <p>We Are Entrepreneurs & Innovators of Website Building</p>
                            </li>
                            <li><i class="far fa-check-circle"></i>
                                <p>We’d love to hear from you to discuss web design.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="state section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="state-items">
                        <div class="item-icon"> <span class="icon icon-user"></span> </div>
                        <div class="state-text">
                            <p>Our Client</p><span class="stat-count" data-count="300" data-speed="9000">0</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="state-items">
                        <div class="item-icon"> <span class="icon icon-cup"></span> </div>
                        <div class="state-text">
                            <p>Awards</p><span class="stat-count" data-count="113" data-speed="9000">0</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="state-items">
                        <div class="item-icon"> <span class="icon icon-slider"></span> </div>
                        <div class="state-text">
                            <p>Projects</p><span class="stat-count" data-count="630" data-speed="9000">0</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="state-items">
                        <div class="item-icon"> <span class="icon icon-document"></span> </div>
                        <div class="state-text">
                            <p>Our Blog</p><span class="stat-count" data-count="920" data-speed="9000">0</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="pricing section-padding">
        <div class="container">
            <div class="title">
                <h2>Our Pricing Plan</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="item">
                        <div class="text-top">
                            <h3>Basic User</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="price">
                            <p>00</p><span>/Year</span> </div>
                        <div class="options">
                            <ul>
                                <li>
                                    <p class="not">Real time data<span><i class="far fa-check-circle"></i></span></p>
                                </li>
                                <li>
                                    <p class="not">Full pollutant data<span><i class="far fa-check-circle"></i></span></p>
                                </li>
                                <li>
                                    <p>Insights</p>
                                </li>
                                <li>
                                    <p>Geolocation search</p>
                                </li>
                                <li>
                                    <p>Web widget</p>
                                </li>
                            </ul>
                        </div>
                        <div class="button"> <a class="btn-main" href="#">Get Started</a> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="item premium">
                        <div class="text-top">
                            <h3>Premium User</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="price">
                            <p>29</p><span>/Year</span> </div>
                        <div class="options">
                            <ul>
                                <li>
                                    <p class="not">Real time data<span><i class="far fa-check-circle"></i></span></p>
                                </li>
                                <li>
                                    <p class="not">Full pollutant data<span><i class="far fa-check-circle"></i></span></p>
                                </li>
                                <li>
                                    <p class="not">Insights<span><i class="far fa-check-circle"></i></span></p>
                                </li>
                                <li>
                                    <p>Geolocation search</p>
                                </li>
                                <li>
                                    <p>Web widget</p>
                                </li>
                            </ul>
                        </div>
                        <div class="button"> <a class="btn-main" href="#">Get Started</a> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="item">
                        <div class="text-top">
                            <h3>Business User</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="price">
                            <p>47</p><span>/Year</span> </div>
                        <div class="options">
                            <ul>
                                <li>
                                    <p class="not">Real time data<span><i class="far fa-check-circle"></i></span></p>
                                </li>
                                <li>
                                    <p class="not">Full pollutant data<span><i class="far fa-check-circle"></i></span></p>
                                </li>
                                <li>
                                    <p class="not">Insights<span><i class="far fa-check-circle"></i></span></p>
                                </li>
                                <li>
                                    <p class="not">Geolocation search<span><i class="far fa-check-circle"></i></span></p>
                                </li>
                                <li>
                                    <p class="not">Web widget<span><i class="far fa-check-circle"></i></span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="button"> <a class="btn-main" href="#">Get Started</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials section-padding">
        <div class="carousel-right col-lg-7 col-md-7 col-sm-6 col-xs-12">
            <div class="owl-carousel">
                <div class="testimonials-item">
                    <div class="testimonials-text-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                    </div>
                    <div class="testimonials-title clearfix">
                        <div class="title-img"> <img src="<?=get_template_directory_uri()?>/img/testimonials/1.png" alt="testimonials"> </div>
                        <div class="title-text">
                            <h3>John Doe</h3>
                            <p>Lorem Ipsum is simply</p>
                        </div>
                    </div>
                </div>
                <div class="testimonials-item">
                    <div class="testimonials-text-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                    </div>
                    <div class="testimonials-title clearfix">
                        <div class="title-img"> <img src="<?=get_template_directory_uri()?>/img/testimonials/2.png" alt="testimonials"> </div>
                        <div class="title-text">
                            <h3>John Doe</h3>
                            <p>Lorem Ipsum is simply</p>
                        </div>
                    </div>
                </div>
                <div class="testimonials-item">
                    <div class="testimonials-text-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                    </div>
                    <div class="testimonials-title clearfix">
                        <div class="title-img"> <img src="<?=get_template_directory_uri()?>/img/testimonials/3.png" alt="testimonials"> </div>
                        <div class="title-text">
                            <h3>John Doe</h3>
                            <p>Lorem Ipsum is simply</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    <div class="testimonials-text clearfix">
                        <div class="title"> <span>Testimonials</span>
                            <h2>Cheack What’s our client say about Anfang</h2> </div>
                        <div class="text-p">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog section-padding">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h2>Latest News</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="blog-items clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="blog-item">
                            <div class="blog-img-1"></div>
                            <div class="blog-text">
                                <div class="text-up">
                                    <p>Aug 13, 2018</p><span>News</span> </div>
                                <div class="text-title">
                                    <a href="blog-single.html">
                                        <h3>How subscription business with user analytics</h3> </a>
                                    <p>Will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                                <div class="item-link"> <span><i class="fas fa-chevron-right"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="blog-item">
                            <div class="blog-img-2"></div>
                            <div class="blog-text">
                                <div class="text-up">
                                    <p>Aug 13, 2018</p><span>Business</span> </div>
                                <div class="text-title">
                                    <a href="blog-single.html">
                                        <h3>The benefits of a DevOps Approach</h3> </a>
                                    <p>Will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                                <div class="item-link"> <span><i class="fas fa-chevron-right"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="blog-item">
                            <div class="blog-img-3"></div>
                            <div class="blog-text">
                                <div class="text-up">
                                    <p>Aug 13, 2018</p><span>Technology</span> </div>
                                <div class="text-title">
                                    <a href="blog-single.html">
                                        <h3>What is DevOps and why does it matter?</h3> </a>
                                    <p>Will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                                <div class="item-link"> <span><i class="fas fa-chevron-right"></i></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button"> <a class="btn-main" href="#">View more</a> </div>
            </div>
        </div>
    </section>
    <section class="subscribe section-padding">
        <div class="container subscribe-content">
            <div class="col-lg-5 col-md-5 col-sm-8 col-xs-12">
                <div class="footer-title">
                    <h3>Subscribe to our Newsletter</h3> </div>
                <form action="#">
                    <div class="email">
                        <input type="email" name="email" placeholder="Your email address">
                        <button type="submit"><i class="fas fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <div class="scroll-top"> <span class="animated fadeIn"><i class="fas fa-chevron-up"></i></span> </div>
    <?php get_footer(); ?>
    