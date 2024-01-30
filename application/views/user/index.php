<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from html.onertheme.com/tronix/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Dec 2023 00:36:16 GMT -->

<?php
    $this->load->view('user/head');
?>
<body>
    <div class="preloader"><button class="ot-btn preloaderCls style3">Cancel Preloader</button>
        <div class="preloader-inner"><span class="loader"></span></div>
    </div>
    <?php
        $this->load->view('user/menu');
    ?>

    <?php //echo date('Y-m-d h:m:s'); ?>

    <!-- thakorji -->

    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12 ">
                <div class="">
                    <img src="<?php echo base_url(); ?>user-assets/img/hero/hero_bg_3_1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- thakorji -->

    <!-- recent event -->
    <div class="overflow-hidden space-bottom pt-5">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-lg">
                    <div class="title-area text-center text-lg-start"><span class="sub-title"><span
                                class=""></span></span>
                        <h2 class="sec-title">Recent Event</h2>
                    </div>
                </div>
                <div class="col-lg-auto d-none d-lg-block">
                    <div class="sec-btn">
                        <div class="icon-box"><button data-slider-prev="#gallerySlider1" class="slider-arrow default"><i
                                    class="far fa-arrow-left"></i></button> <button data-slider-next="#gallerySlider1"
                                class="slider-arrow default"><i class="far fa-arrow-right"></i></button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="swiper ot-slider has-shadow" id="gallerySlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="gallery-card">
                            <div class="box-img" style="height: 400px;"><img src="<?php echo base_url(); ?>user-assets/img/gallery/1.jpg"
                                    alt="gallery image"> <a href="<?php echo base_url(); ?>user-assets/img/gallery/1.jpg"
                                    class="icon-btn popup-image"><i class="far fa-search-plus"></i></a></div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="gallery-card">
                            <div class="box-img" style="height: 400px;"><img src="<?php echo base_url(); ?>user-assets/img/gallery/2.jpg"
                                    alt="gallery image"> <a href="<?php echo base_url(); ?>user-assets/img/gallery/2.jpg"
                                    class="icon-btn popup-image"><i class="far fa-search-plus"></i></a></div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="gallery-card">
                            <div class="box-img" style="height: 400px;"><img src="<?php echo base_url(); ?>user-assets/img/gallery/3.jpg"
                                    alt="gallery image"> <a href="<?php echo base_url(); ?>user-assets/img/gallery/3.jpg"
                                    class="icon-btn popup-image"><i class="far fa-search-plus"></i></a></div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="gallery-card">
                            <div class="box-img" style="height: 400px;"><img src="<?php echo base_url(); ?>user-assets/img/gallery/4.jpg"
                                    alt="gallery image"> <a href="<?php echo base_url(); ?>user-assets/img/gallery/4.jpg"
                                    class="icon-btn popup-image"><i class="far fa-search-plus"></i></a></div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="gallery-card">
                            <div class="box-img" style="height: 400px;"><img src="<?php echo base_url(); ?>user-assets/img/gallery/5.jpg"
                                    alt="gallery image"> <a href="<?php echo base_url(); ?>user-assets/img/gallery/5.jpg"
                                    class="icon-btn popup-image"><i class="far fa-search-plus"></i></a></div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="gallery-card">
                            <div class="box-img" style="height: 400px;"><img src="<?php echo base_url(); ?>user-assets/img/gallery/6.jpg"
                                    alt="gallery image"> <a href="<?php echo base_url(); ?>user-assets/img/gallery/6.jpg"
                                    class="icon-btn popup-image"><i class="far fa-search-plus"></i></a></div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="gallery-card">
                            <div class="box-img" style="height: 400px;"><img src="<?php echo base_url(); ?>user-assets/img/gallery/7.jpg"
                                    alt="gallery image"> <a href="<?php echo base_url(); ?>user-assets/img/gallery/7.jpg"
                                    class="icon-btn popup-image"><i class="far fa-search-plus"></i></a></div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="gallery-card">
                            <div class="box-img" style="height: 400px;"><img src="<?php echo base_url(); ?>user-assets/img/gallery/8.jpg"
                                    alt="gallery image"> <a href="<?php echo base_url(); ?>user-assets/img/gallery/8.jpg"
                                    class="icon-btn popup-image"><i class="far fa-search-plus"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-lg-none mt-40 text-center">
                <div class="icon-box"><button data-slider-prev="#gallerySlider1" class="slider-arrow default"><i
                            class="far fa-arrow-left"></i></button> <button data-slider-next="#gallerySlider1"
                        class="slider-arrow default"><i class="far fa-arrow-right"></i></button></div>
            </div>
        </div>
    </div>
    <!-- end recent event -->

    <!-- Start Sabha Center -->
    <section class="space" id="testi-sec" data-bg-src="<?php echo base_url(); ?>user-assets/img/bg/testi_bg_1.jpg">
        <div class="container">
            <div class="title-area"><span class="sub-title text-white"></span>
                <h2 class="sec-title text-white">Our Sabha Center</h2>
            </div>
            <div class="swiper ot-slider has-shadow" id="testiSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div style="padding: 20px 25px;">
                                <h4 class="sabha-loc">North London</h4>
                                <h5 class="sabha-place">Harisumiran</h5>
                                <b>Parivaar Sabha</b> (Atmiya Mandir Hall) <br />
                                <b>Baalika Sabha</b> (Dasanudas Hall) <br />
                                <b>Baal Sabha</b> (Parabhakti Hall) <br />
                                Every Sunday
                                5:30pm – 7:00pm<br />
                                <br />
                                <b>"Harisumiran" </b><br />
                                63 Woodcock Hill <br />
                                Harrow <br />
                                HA3 0JH <br /><br />

                                Contact email: <br />
                                mandir.sabha@ydsuk.org <br />
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div style="padding: 20px 25px;">
                                <h4 class="sabha-loc">Glasgow</h4>
                                <!-- <h5 class="sabha-place">Harisumiran</h5> -->
                                3/3 121 West George Street <br />
                                Glasgow <br />
                                G2 1QR <br />
                                <br />
                                Every Saturday<br />
                                8:30pm – 9:30pm<br />
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div style="padding: 20px 25px;">
                                <h4 class="sabha-loc">East London</h4>
                                <h5 class="sabha-place">Ramgharia Community Centre</h5>
                                <b>Parivaar Sabha</b><br />
                                Every Wednesday<br />
                                8:15pm – 10:15pm<br />

                                <b>"Ramgharia Community Centre"</b><br />
                                274 neville road<br />
                                London<br />
                                E7 9QN<br />
                                (Entrance is on plashet road, beside Barclays bank.)<br />
                                <br />
                                Contact email:<br />
                                east.sabha@ydsuk.org <br />
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div style="padding: 20px 25px;">
                                <h4 class="sabha-loc">South London</h4>
                                <h5 class="sabha-place">Croydon</h5>
                                <b>Parivaar Sabha</b><br />
                                <b>Baal Sabha</b><br />
                                Every Saturday<br />
                                6:30pm – 8:00pm<br />
                                <br />
                                <b>"Vishwa Hindu Parishad Hall"</b>
                                10, Thornton Row<br />
                                Thornton Heath<br />
                                Surrey<br />
                                CR7 6JN<br />
                                <br />
                                Contact email:<br />
                                croydon.sabha@ydsuk.org<br />
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div style="padding: 20px 25px;">
                                <h4 class="sabha-loc">Midlands</h4>
                                <h5 class="sabha-place">Leicester</h5>
                                <b>Parivaar Sabha</b><br />
                                <b>Baal Sabha</b><br />
                                Every Sunday<br />
                                11:00am – 1:00pm <br />
                                <br />
                                "Belgrave Neighbourhood Centre"<br />
                                Rothley Street, Leicester<br />
                                LE4 6LF<br />
                                <br />
                                Contact email :<br />
                                leicester.sabha@ydsuk.org<br />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End Sabha Center -->

    <!-- swami ni vato -->
    <br />
    <br />
    <section class="cta-sec2">
        <div class="container">
            <div class="row gy-30 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <div class="title-area mb-37">
                        <h2 class="sec-title"><span class="text-theme">Gadhadã I – 3 </span><br>Remembering The Leelãs Of Bhagvãn </h2>
                        <p class="sec-text">In the Samvat year 1876, on the night of Mãgshar sud 6 [22nd November, 1819], Shreeji Mahãrãj was sitting in Dãdã Khãchar’s darbãr in Gadhadã. He was dressed entirely in white clothes. A sabhã of munis, as well as haribhaktas from various places, had gathered before Him.</p>
                    </div><a href="<?php echo base_url('vachanamrut') ?>" class="ot-btn style4">Learn More</a>
                </div>
                <div class="col-lg-6">
                    <div class="img-box2"><img src="<?php echo base_url(); ?>user-assets/img/vachnamrut.jpg" alt="cta"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end swami ni vato -->

    <section class="service-sec1" id="service-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <div class="title-area text-center"><span class="sub-title"><span class="text">Our
                                services</span></span>
                        <h2 class="sec-title">Service We Provide</h2>
                        <p class="sec-text">Website and mobile sit amet, consectetur adipiscing elit. Morbi obortis
                            ligula euismod sededesty am augue nisl.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-3 col-md-6">
                    <div class="service-card">
                        <div class="box-icon"><img src="<?php echo base_url(); ?>user-assets/img/icon/service_card_1.svg" alt="Icon"></div>
                        <h3 class="box-title"><a href="service-details.html">Technology Solution</a></h3>
                        <p class="box-text">Risus turpis id mauris tellus ultricies cras nulla.</p><a
                            href="service-details.html" class="box-btn"><i class="fas fa-arrow-up-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card">
                        <div class="box-icon"><img src="<?php echo base_url(); ?>user-assets/img/icon/service_card_2.svg" alt="Icon"></div>
                        <h3 class="box-title"><a href="service-details.html">IT Management Service</a></h3>
                        <p class="box-text">Developing a comprehense IT strategy that aligns.</p><a
                            href="service-details.html" class="box-btn"><i class="fas fa-arrow-up-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card">
                        <div class="box-icon"><img src="<?php echo base_url(); ?>user-assets/img/icon/service_card_3.svg" alt="Icon"></div>
                        <h3 class="box-title"><a href="service-details.html">Website & Mobile App Design</a></h3>
                        <p class="box-text">Website and mobile apps design are critical.</p><a
                            href="service-details.html" class="box-btn"><i class="fas fa-arrow-up-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card">
                        <div class="box-icon"><img src="<?php echo base_url(); ?>user-assets/img/icon/service_card_4.svg" alt="Icon"></div>
                        <h3 class="box-title"><a href="service-details.html">Data Tracking Security</a></h3>
                        <p class="box-text">Encryption is a method of converting sensitive.</p><a
                            href="service-details.html" class="box-btn"><i class="fas fa-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="about-sec1" id="about-sec">
        <div class="container space">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="title-area mb-37"><span class="sub-title"><span class="text">Welcome To Our
                                Company</span></span>
                        <h2 class="sec-title">We Are Increasing Business Success With Technology</h2>
                        <p class="sec-text">An IT solution service company may serve clients from various industries
                            such as healthcare, finance, education, and manufacturing. They may work on a project basis,
                            providing services for a specific project or on a long-term basis...</p>
                    </div>
                    <div class="dot-list">
                        <ul>
                            <li>Amazing communication.</li>
                            <li>Best trending designing experience.</li>
                            <li>Email & Live chat.</li>
                        </ul>
                    </div>
                    <div class="mt-45"><a href="about.html" class="ot-btn">Discover More</a></div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="img-box1">
                        <div class="img1"><img src="<?php echo base_url(); ?>user-assets/img/normal/about_1_1.jpg" alt="About"></div>
                        <div class="img2"><img src="<?php echo base_url(); ?>user-assets/img/normal/about_1_2.jpg" alt="Image"></div>
                        <div class="shape1 jump-reverse"><img src="<?php echo base_url(); ?>user-assets/img/normal/about_1_3.png" alt="Image"></div>
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="space" data-bg-src="<?php echo base_url(); ?>user-assets/img/bg/cta_bg_1.jpg">
        <div class="container">
            <div class="row gy-30 align-items-center justify-content-center justify-content-md-between">
                <div class="col-md-auto">
                    <div class="title-area mb-0 text-center text-md-start"><span class="sub-title text-white">We are
                            here to answer your questions 24/7</span>
                        <h2 class="sec-title text-white">Need A Consultation?</h2>
                    </div>
                </div>
                <div class="col-md-auto text-center"><a href="shop-details.html" class="ot-btn style3">Let’s Get
                        Started</a></div>
            </div>
        </div>
    </section>
    <div class="space">
        <div class="shape-mockup spin" data-top="40%" data-left="4%"><img src="<?php echo base_url(); ?>user-assets/img/shape/shape_1.png"
                alt="shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 text-center text-lg-start">
                    <div class="pe-xxl-5">
                        <div class="title-area"><span class="sub-title"><span class="text">Work With Us</span></span>
                            <h2 class="sec-title">We Make Awesome IT Services For Your Newly Business</h2>
                        </div>
                        <div class="btn-group"><a href="contact.html" class="ot-btn">Start A Projects</a>
                            <div class="call-text">
                                <h4 class="box-title">Call Us: 258-3258 235</h4><span class="box-text">For any
                                    question</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="text-center mt-40 mt-lg-0"><img src="<?php echo base_url(); ?>user-assets/img/normal/vector_1.png" alt="vector"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container">
            <div class="counter-card-wrap">
                <div class="counter-card">
                    <div class="box-icon"><img src="<?php echo base_url(); ?>user-assets/img/icon/counter_1_1.svg" alt="Icon"></div>
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">44.8</span>K</h2><span class="box-text">JOBS
                            COMPLETED</span>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="box-icon"><img src="<?php echo base_url(); ?>user-assets/img/icon/counter_1_2.svg" alt="Icon"></div>
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">325</span></h2><span class="box-text">MEDIA
                            ACTIVITIES</span>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="box-icon"><img src="<?php echo base_url(); ?>user-assets/img/icon/counter_1_3.svg" alt="Icon"></div>
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">498</span></h2><span
                            class="box-text">SKILLED EXPERTS</span>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="box-icon"><img src="<?php echo base_url(); ?>user-assets/img/icon/counter_1_4.svg" alt="Icon"></div>
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">42.8</span>K</h2><span
                            class="box-text">HAPPY CLIENTS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container z-index-common">
            <div class="title-area text-center"><span class="sub-title"><span class="text">Team Members</span></span>
                <h2 class="sec-title">Our Top Skilled Experts</h2>
            </div>
            <div class="swiper ot-slider has-shadow" id="teamSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ot-team team-card">
                            <div class="box-img"><img src="<?php echo base_url(); ?>user-assets/img/team/team_1_1.jpg" alt="Team"></div>
                            <div class="box-content">
                                <h3 class="box-title"><a href="team-details.html">Rocky Morgan</a></h3><span
                                    class="box-desig">CEO Founder</span>
                                <div class="ot-social"><a target="_blank" href="https://facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a> <a target="_blank"
                                        href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                        target="_blank" href="https://instagram.com/"><i
                                            class="fab fa-instagram"></i></a> <a target="_blank"
                                        href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ot-team team-card">
                            <div class="box-img"><img src="<?php echo base_url(); ?>user-assets/img/team/team_1_2.jpg" alt="Team"></div>
                            <div class="box-content">
                                <h3 class="box-title"><a href="team-details.html">Eliana Bellin</a></h3><span
                                    class="box-desig">Marketer</span>
                                <div class="ot-social"><a target="_blank" href="https://facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a> <a target="_blank"
                                        href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                        target="_blank" href="https://instagram.com/"><i
                                            class="fab fa-instagram"></i></a> <a target="_blank"
                                        href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ot-team team-card">
                            <div class="box-img"><img src="<?php echo base_url(); ?>user-assets/img/team/team_1_3.jpg" alt="Team"></div>
                            <div class="box-content">
                                <h3 class="box-title"><a href="team-details.html">Emanuel Macu</a></h3><span
                                    class="box-desig">Designer</span>
                                <div class="ot-social"><a target="_blank" href="https://facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a> <a target="_blank"
                                        href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                        target="_blank" href="https://instagram.com/"><i
                                            class="fab fa-instagram"></i></a> <a target="_blank"
                                        href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ot-team team-card">
                            <div class="box-img"><img src="<?php echo base_url(); ?>user-assets/img/team/team_1_4.jpg" alt="Team"></div>
                            <div class="box-content">
                                <h3 class="box-title"><a href="team-details.html">Donne Joanne</a></h3><span
                                    class="box-desig">Developer</span>
                                <div class="ot-social"><a target="_blank" href="https://facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a> <a target="_blank"
                                        href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                        target="_blank" href="https://instagram.com/"><i
                                            class="fab fa-instagram"></i></a> <a target="_blank"
                                        href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-sec2" data-bg-src="<?php echo base_url(); ?>user-assets/img/bg/cta_bg_2.jpg">
        <div class="container">
            <div class="row gy-30 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <div class="title-area mb-37"><span class="sub-title"><span class="text">Start Work With
                                Us</span></span>
                        <h2 class="sec-title">The Best <span class="text-theme">IT Service</span><br>Provider.</h2>
                        <p class="sec-text">Managed IT services can help you outsource your IT needs to a third-party
                            provider. This includes IT support, network monitoring, and maintenance, and disaster
                            recovery and business continuity planning</p>
                    </div><a href="about.html" class="ot-btn style4">Take Support</a>
                </div>
                <div class="col-lg-6">
                    <div class="img-box2"><img src="<?php echo base_url(); ?>user-assets/img/normal/cta_1.png" alt="cta"></div>
                </div>
            </div>
        </div>
        <div class="cta-texts"><span class="text">Fast 24/7 Customer Service</span>
            <div class="line"></div><span class="text">Save time & valuable money</span>
        </div>
    </section>
    <section class="overflow-hidden space" id="blog-sec">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title"><span class="text">News Posts</span></span>
                <h2 class="sec-title">Latest Blog Updates</h2>
            </div>
            <div class="row gx-44 gy-30">
                <div class="col-lg-6">
                    <div class="blog-box">
                        <div class="blog-img"><img src="<?php echo base_url(); ?>user-assets/img/blog/blog_2_1.jpg" alt="blog image"></div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="blog.html"><i class="far fa-calendar"></i>15 Mar, 2023</a>
                                <a class="author" href="blog.html"><i class="far fa-user"></i>By Tronix</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">Start building amazing tech business</a>
                            </h3>
                            <p class="box-text">As a small business owner, you know that having reliable IT solutions is
                                essential for the success</p><a href="blog-details.html" class="ot-btn btn-sm">Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-box">
                        <div class="blog-img"><img src="<?php echo base_url(); ?>user-assets/img/blog/blog_2_2.jpg" alt="blog image"></div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="blog.html"><i class="far fa-calendar"></i>16 Mar, 2023</a>
                                <a class="author" href="blog.html"><i class="far fa-user"></i>By Tronix</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">Cloud computer allows you to access</a>
                            </h3>
                            <p class="box-text">Cybersecurity is a top concern for small businesses, as they are often
                                more vulnerable to cyberattacks</p><a href="blog-details.html"
                                class="ot-btn btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="space-bottom">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title"><span class="text">Brand We Work
                        With</span></span>
                <h2 class="sec-title">Trusted by thousands Business</h2>
            </div>
            <div class="brand-grid-wrap">f
                <div class="brand-grid"><img src="<?php echo base_url(); ?>user-assets/img/brand/brand_1_1.png" alt="Brand Logo"></div>
                <div class="brand-grid"><img src="<?php echo base_url(); ?>user-assets/img/brand/brand_1_2.png" alt="Brand Logo"></div>
                <div class="brand-grid"><img src="<?php echo base_url(); ?>user-assets/img/brand/brand_1_3.png" alt="Brand Logo"></div>
                <div class="brand-grid"><img src="<?php echo base_url(); ?>user-assets/img/brand/brand_1_4.png" alt="Brand Logo"></div>
                <div class="brand-grid"><img src="<?php echo base_url(); ?>user-assets/img/brand/brand_1_5.png" alt="Brand Logo"></div>
                <div class="brand-grid"><img src="<?php echo base_url(); ?>user-assets/img/brand/brand_1_6.png" alt="Brand Logo"></div>
                <div class="brand-grid"><img src="<?php echo base_url(); ?>user-assets/img/brand/brand_1_7.png" alt="Brand Logo"></div>
                <div class="brand-grid"><img src="<?php echo base_url(); ?>user-assets/img/brand/brand_1_8.png" alt="Brand Logo"></div>
            </div>
        </div>
    </div>
    <?php
        $this->load->view('user/footer');
    ?>
    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>
    <?php
        $this->load->view('user/script');
    ?>
</body>
<!-- Mirrored from html.onertheme.com/tronix/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Dec 2023 00:36:16 GMT -->

</html>