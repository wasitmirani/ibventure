@extends('layouts.frontend.master')


@section('title')
Home
@endsection

@section('content')
  <section class="hero-wrap style2 bg-narvik">
            <div class="container-fluid container-full">
               <img class="brick-shape-1" src="{{ asset('assets/img/hero/brick-2.svg')}}" alt="Image">
               <img class="brick-shape-2" src="{{ asset('assets/img/hero/brick-2.svg')}}" alt="Image">
               <div class="gd-cat one">
                  <img src="{{ asset('/assets/img/hero/pin.svg') }}" alt="Image" class="pin "  >
                  <img class="gd-cat-img" src="{{ asset('/assets/img/hero/gloves.svg')}}" alt="Image" >
                  <span>Lorem ipsum </span>
               </div>
               <div class="gd-cat two">
                  <img src="{{ asset('assets/img/hero/pin.svg')}}" alt="Image" class="pin">
                  <img class="gd-cat-img" src="{{ asset('assets/img/hero/flower-tub.svg')}}" alt="Image" >
                  <span>Plants Planted</span>
               </div>
               <div class="gd-cat three">
                  <img src="{{ asset('assets/img/hero/pin.svg')}}" alt="Image" class="pin">
                  <img class="gd-cat-img" src="{{ asset('/assets/img/hero/water-pot.svg')}}" alt="Image" >
                  <span>Lorem ipsum</span>
               </div>
               <div class="gd-cat four">
                  <img src="{{ asset('/assets/img/hero/pin.svg')}}" alt="Image" class="pin">
                  <img class="gd-cat-img" src="{{ asset('/assets/img/hero/tools-1.svg')}}" alt="Image" >
                  <span>Maintenance</span>
               </div>
               <div class="hero-slider-one">
                  <div class="hero-slide-one">
                     <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6 col-md-12 col-12 order-xl-1 order-lg-1 order-md-2 order-2">
                           <div class="hero-content style2">
                              <span>Mushroom</span>
                              <h1>Welcome to the Lorem ipsum dolor sit amet.
                              </h1>
                              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam Voluptua.</p>
                              <div class="hero-btn">
                                 <a href="{{ route('about') }}" class="btn style1"><i class="flaticon-book"></i>Learn More</a>
                                 <a href="{{ route('contactus') }}" class="btn style2"><i class="flaticon-contact-book"></i>Contact Us</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-12 col-12 order-xl-2 order-lg-2 order-md-1 order-1">
                           <div class="hero-img">
                              <img src="{{ asset('assets/img/hero/brick-3.png')}}" alt="Image" class="brick-shape-3">
                              <img src="{{ asset('assets/img/hero/hero-img-1.png')}}" alt="Image">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="promo-wrap style2">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-xl-4 col-lg-6 col-md-6">
                     <div class="promo-item">
                        <div class="promo-icon">
                           <i class="flaticon-gardening"></i>
                        </div>
                        <div class="promo-text">
                           <h5><a href="services.html">Variation Gardening</a></h5>
                           <p>Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed diam nonumy eirmod.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6">
                     <div class="promo-item">
                        <div class="promo-icon">
                           <i class="flaticon-agriculture"></i>
                        </div>
                        <div class="promo-text">
                           <h5><a href="services.html">Get The Best Designer</a></h5>
                           <p>Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed diam nonumy eirmod.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6">
                     <div class="promo-item">
                        <div class="promo-icon">
                           <i class="flaticon-growth"></i>
                        </div>
                        <div class="promo-text">
                           <h5><a href="services.html">Design And 3D Model</a></h5>
                           <p>Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed diam nonumy eirmod.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <section class="about-wrap style2 ptb-100">
            <div class="container">
               <div class="row gx-5">
                  <div class="col-xl-6">
                     <div class="about-img-wrap">
                        <div class="about-bg-five bg-f about-bg-4"></div>
                        <div class="about-cat">
                           <i class="flaticon-house"></i>
                           <span>Home Setup</span>
                        </div>
                        <img src="{{ asset('assets/img/about/aboutbg2.jpg')}}" alt="Image" class="ab-img-5">
                        <img src="{{ asset('assets/img/about/aboutbg4.jpg')}}" alt="Image" class="ab-img-6">
                        <div class="exp-text"><span>14</span>
                           Years Work Experience
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6">
                     <div class="about-content">
                        <div class="content-title">
                           <span>About Us</span>
                           <h2>We Created &amp; Managed
                               Around Pakistan
                           </h2>
                           <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                           <ul class="about-feature-list list-style">
                              <li><i class="las la-check"></i>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</li>
                              <li><i class="las la-check"></i>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</li>
                              <li><i class="las la-check"></i>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</li>
                              <li><i class="las la-check"></i>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</li>
                              <li><i class="las la-check"></i>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</li>
                           </ul>
                           <a href="about.html" class="btn style1"><i class="flaticon-book"></i>Learn More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="service-wrap ptb-100 bg-apple-green">
            <div class="container">
               <div class="row">
                  <div class="section-title text-center mb-50">
                     <h2>Our Services</h2>
                     <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat,
                     </p>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-xl-4 col-lg-6 col-md-6">
                     <div class="service-card style2">
                        <div class="service-img">
                           <div class="service-icon">
                              <i class="flaticon-house"></i>
                           </div>
                           <img src="{{ asset('assets/img/service/service-10.jpg')}}" alt="Image">
                        </div>
                        <div class="service-info">
                           <h3 class="service-title"><a href="service-details.html">Commercial Gardens</a></h3>
                           <p class="service-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                           <a href="service-details.html" class="link style2">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6">
                     <div class="service-card style2">
                        <div class="service-img">
                           <div class="service-icon">
                              <i class="flaticon-farming"></i>
                           </div>
                           <img src="{{ asset('assets/img/service/service-11.jpg')}}" alt="Image">
                        </div>
                        <div class="service-info">
                           <h3 class="service-title"><a href="service-details.html">Contemporary Gardens</a></h3>
                           <p class="service-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                           <a href="service-details.html" class="link style2">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6">
                     <div class="service-card style2">
                        <div class="service-img">
                           <div class="service-icon">
                              <i class="flaticon-gardening-1"></i>
                           </div>
                           <img src="{{ asset('assets/img/service/service-12.jpg')}}" alt="Image">
                        </div>
                        <div class="service-info">
                           <h3 class="service-title"><a href="service-details.html">Small Setup</a></h3>
                           <p class="service-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                           <a href="service-details.html" class="link style2">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row mt-15">
                  <div class="col-md-12">
                     <p class="subtitle">Explore Our Gardening Services.<a class="link style1" href="services.html">View All Services <i class="flaticon-right-arrow"></i></a></p>
                  </div>
               </div>
            </div>
         </section>
         <div class="counter-wrap pt-100 pb-75">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                     <div class="counter-card style2 bg-peppermint-dark">
                        <div class="counter-icon">
                           <i class="flaticon-rating-1"></i>
                        </div>
                        <p>Happy Clients</p>
                        <h2><span class="odometer" data-count="300">00</span>+</h2>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                     <div class="counter-card style2 bg-link-ice">
                        <div class="counter-icon">
                           <i class="flaticon-growth-1"></i>
                        </div>
                        <p>Plants Planted</p>
                        <h2><span class="odometer" data-count="1500">00</span>+</h2>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                     <div class="counter-card style2 bg-vanila-ice">
                        <div class="counter-icon">
                           <i class="flaticon-goal"></i>
                        </div>
                        <p>Work Experience</p>
                        <h2><span class="odometer" data-count="203">00</span>+</h2>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                     <div class="counter-card style2  bg-ecru ">
                        <div class="counter-icon">
                           <i class="flaticon-workers"></i>
                        </div>
                        <p>Gardeners</p>
                        <h2><span class="odometer" data-count="40">00</span>+</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <section class="why-choose-wrap style2 ptb-100 bg-vista-white">
            <img src="{{ asset('assets/img/leaf-6.png')}}" alt="Image" class="leaf-6 lg-none">
            <div class="container">
               <div class="row">
                  <div class="container">
                     <div class="row gx-5">
                        <div class="col-xl-5">
                           <div class="content-title mb-20">
                              <h2>Why Choose Us</h2>
                              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
                           </div>
                           <div class="wh-item-wrap">
                              <div class="wh-item">
                                 <div class="wh-icon">
                                    <i class="flaticon-watering-plants"></i>
                                 </div>
                                 <div class="wh-text">
                                    <h5><a href="about.html">Getting The Best Designers</a></h5>
                                    <p>Lorem ipsum dolor sit amet, sconsetetur sadipscing elitr, sed diam
                                       nonumy eirmod
                                    </p>
                                 </div>
                              </div>
                              <div class="wh-item">
                                 <div class="wh-icon">
                                    <i class="flaticon-watering-plants"></i>
                                 </div>
                                 <div class="wh-text">
                                    <h5><a href="about.html">24/7 Customer Support</a></h5>
                                    <p>Lorem ipsum dolor sit amet, sconsetetur sadipscing elitr, sed diam
                                       nonumy eirmod
                                    </p>
                                 </div>
                              </div>
                              <div class="wh-item">
                                 <div class="wh-icon">
                                    <i class="flaticon-agriculture"></i>
                                 </div>
                                 <div class="wh-text">
                                    <h5><a href="about.html">Design And 3D Model</a></h5>
                                    <p>Lorem ipsum dolor sit amet, sconsetetur sadipscing elitr, sed diam
                                       nonumy eirmod
                                    </p>
                                 </div>
                              </div>
                              <div class="wh-item">
                                 <div class="wh-icon">
                                    <i class="flaticon-growth"></i>
                                 </div>
                                 <div class="wh-text">
                                    <h5><a href="about.html">Commercial Gardening Design</a></h5>
                                    <p>Lorem ipsum dolor sit amet, sconsetetur sadipscing elitr, sed diam
                                       nonumy eirmod
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-7">
                           <div class="wh-img-slider swiper-container">
                              <div class="swiper-wrapper">
                                 <div class="swiper-slide">
                                    <div class="wh-img-item bg-f wh-bg-3"></div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="wh-img-item bg-f wh-bg-4"></div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="wh-img-item bg-f wh-bg-5"></div>
                                 </div>
                              </div>
                              <div class="wh-btn-wrp">
                                 <div class="wh-img-prev slider-btn style1"><i class="flaticon-left-arrow-2"></i></div>
                                 <div class="wh-img-next slider-btn style1"><i class="flaticon-right-arrow-1"></i></div>
                              </div>
                              <div class="swiper-pagination"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="testimonial-wrap style3 ptb-100">
            <div class="container">
               <div class="section-title style1 text-center mb-10">
                  <h2>What Our Customer Says
                     About Our Services
                  </h2>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                     invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                  </p>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="testimonial-slider-two swiper-container">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="testimonial-slider-item style2">
                                 <div class="client-quote">
                                    <p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirm od tempor invidunt ut sadipscing elitr, sed diam nonumy eirm od tempor invidunt ut Lorem ipsum dolor sit"</p>
                                 </div>
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="client-info-wrap">
                                          <div class="client-img">
                                             <img src="{{ asset('assets/img/testimonials/client-1.jpg')}}" alt="Image">
                                          </div>
                                          <div class="client-info">
                                             <h5>Bianca A. Wells</h5>
                                             <span>CEO, Arttree</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="testimonial-slider-item style2">
                                 <div class="client-quote">
                                    <p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirm od tempor invidunt ut sadipscing elitr, sed diam nonumy eirm od tempor invidunt ut Lorem ipsum dolor sit"</p>
                                 </div>
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="client-info-wrap">
                                          <div class="client-img">
                                             <img src="{{ asset('assets/img/testimonials/client-2.jpg')}}" alt="Image">
                                          </div>
                                          <div class="client-info">
                                             <h5>Holly J. Knight</h5>
                                             <span>MD, Mackins</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="testimonial-slider-item style2">
                                 <div class="client-quote">
                                    <p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirm od tempor invidunt ut sadipscing elitr, sed diam nonumy eirm od tempor invidunt ut Lorem ipsum dolor sit"</p>
                                 </div>
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="client-info-wrap">
                                          <div class="client-img">
                                             <img src="{{ asset('assets/img/testimonials/client-3.jpg')}}" alt="Image">
                                          </div>
                                          <div class="client-info">
                                             <h5>April a. Morales</h5>
                                             <span>Doctor, ADL</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="testimonial-two-pagination slider-pagination style1"></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="gallery-wrap pt-100 pb-75 bg-apple-green">
            <div class="container">
               <div class="section-title style1 text-center mb-50">
                  <h2>Our Gallery</h2>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                     tempor invidunt ut labore et dolore magna aliquyam erat,
                  </p>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <ul class="nav nav-tabs gallery-tablist" role="tablist">
                        <li class="nav-item">
                           <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_1" type="button" role="tab">All</button>
                        </li>
                        <li class="nav-item">
                           <button class="nav-link " data-bs-toggle="tab" data-bs-target="#tab_2" type="button" role="tab">Gardening</button>
                        </li>
                        <li class="nav-item">
                           <button class="nav-link " data-bs-toggle="tab" data-bs-target="#tab_3" type="button" role="tab">Planting</button>
                        </li>
                        <li class="nav-item">
                           <button class="nav-link " data-bs-toggle="tab" data-bs-target="#tab_4" type="button" role="tab">Maintenance</button>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="tab-content gallery-tab-content">
                  <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                     <div class="row  justify-content-center">
                        <div class="col-xl-6 col-lg-12">
                           <div class="gallery-item style3 bg-f gallery-bg-7">
                              <div class="gallery-info">
                                 <div>
                                    <h5><a href="project-details.html">Home Garden</a></h5>
                                    <span>South Dakota</span>
                                 </div>
                                 <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="gallery-item style4 bg-f gallery-bg-8">
                                    <div class="gallery-info">
                                       <div>
                                          <h5><a href="project-details.html">Maintenance</a></h5>
                                          <span>New York</span>
                                       </div>
                                       <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="gallery-item style4 bg-f gallery-bg-9">
                                    <div class="gallery-info">
                                       <div>
                                          <h5><a href="project-details.html">Design & Planting</a></h5>
                                          <span>Florida</span>
                                       </div>
                                       <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="gallery-item style4 bg-f gallery-bg-10">
                                    <div class="gallery-info">
                                       <div>
                                          <h5><a href="project-details.html">Indoor Scaping</a></h5>
                                          <span>South Dakota</span>
                                       </div>
                                       <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                           <div class="gallery-item style4 bg-f gallery-bg-11">
                              <div class="gallery-info">
                                 <div>
                                    <h5><a href="project-details.html">Commercial Garden</a></h5>
                                    <span>California</span>
                                 </div>
                                 <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                           <div class="gallery-item style4 bg-f gallery-bg-12">
                              <div class="gallery-info">
                                 <div>
                                    <h5><a href="project-details.html">Home Garden</a></h5>
                                    <span>South Dakota</span>
                                 </div>
                                 <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                           <div class="gallery-item style4 bg-f gallery-bg-13">
                              <div class="gallery-info">
                                 <div>
                                    <h5><a href="project-details.html">Outdoor Scaping</a></h5>
                                    <span>Agortia</span>
                                 </div>
                                 <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="tab_2" role="tabpanel">
                     <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-6">
                           <div class="gallery-item style4 bg-f gallery-bg-11">
                              <div class="gallery-info">
                                 <div>
                                    <h5><a href="project-details.html">Commercial Garden</a></h5>
                                    <span>California</span>
                                 </div>
                                 <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                           <div class="gallery-item style4 bg-f gallery-bg-12">
                              <div class="gallery-info">
                                 <div>
                                    <h5><a href="project-details.html">Home Garden</a></h5>
                                    <span>South Dakota</span>
                                 </div>
                                 <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                           <div class="gallery-item style4 bg-f gallery-bg-13">
                              <div class="gallery-info">
                                 <div>
                                    <h5><a href="project-details.html">Outdoor Scaping</a></h5>
                                    <span>Agortia</span>
                                 </div>
                                 <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="tab_3" role="tabpanel">
                     <div class="row  justify-content-center">
                        <div class="col-xl-6 col-lg-12">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="gallery-item style4 bg-f gallery-bg-8">
                                    <div class="gallery-info">
                                       <div>
                                          <h5><a href="project-details.html">Maintenance</a></h5>
                                          <span>New York</span>
                                       </div>
                                       <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="gallery-item style4 bg-f gallery-bg-9">
                                    <div class="gallery-info">
                                       <div>
                                          <h5><a href="project-details.html">Design & Planting</a></h5>
                                          <span>Florida</span>
                                       </div>
                                       <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="gallery-item style4 bg-f gallery-bg-10">
                                    <div class="gallery-info">
                                       <div>
                                          <h5><a href="project-details.html">Indoor Scaping</a></h5>
                                          <span>South Dakota</span>
                                       </div>
                                       <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                           <div class="gallery-item style3 bg-f gallery-bg-7">
                              <div class="gallery-info">
                                 <div>
                                    <h5><a href="project-details.html">Home Garden</a></h5>
                                    <span>South Dakota</span>
                                 </div>
                                 <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="tab_4" role="tabpanel">
                     <div class="row  justify-content-center">
                        <div class="col-xxl-3 col-xl-6 col-lg-6">
                           <div class="gallery-item style4 bg-f gallery-bg-9">
                              <div class="gallery-info">
                                 <div>
                                    <h5><a href="project-details.html">Design & Planting</a></h5>
                                    <span>Florida</span>
                                 </div>
                                 <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6">
                           <div class="gallery-item style4 bg-f gallery-bg-10">
                              <div class="gallery-info">
                                 <div>
                                    <h5><a href="project-details.html">Indoor Scaping</a></h5>
                                    <span>South Dakota</span>
                                 </div>
                                 <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6">
                           <div class="gallery-item style4 bg-f gallery-bg-11">
                              <div class="gallery-info">
                                 <div>
                                    <h5><a href="project-details.html">Commercial Garden</a></h5>
                                    <span>California</span>
                                 </div>
                                 <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6">
                           <div class="gallery-item style4 bg-f gallery-bg-12">
                              <div class="gallery-info">
                                 <div>
                                    <h5><a href="project-details.html">Home Garden</a></h5>
                                    <span>South Dakota</span>
                                 </div>
                                 <a class="gal_btn" href="project-details.html"><i class="flaticon-right-arrow-1"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="blog-wrap pt-100 pb-75">
            <div class="container">
               <div class="section-title style1 text-center mb-50">
                  <h2>News &amp; Articles</h2>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                     tempor invidunt ut labore et dolore magna aliquyam erat,
                  </p>
               </div>
               <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-6">
                     <div class="blog-card style2">
                        <a href="blog-details-left-sidebar.html" class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog-7.jpg')}}" alt="Image">
                        </a>
                        <div class="blog-info">
                           <ul class="blog-metainfo list-style">
                              <li><a href="blog-left-sidebar.html">31 Mar 2021</a></li>
                              <li><a href="blog-left-sidebar.html">By Andrew P. Mason</a></li>
                           </ul>
                           <h3 class="blog-title"><a href="blog-details-left-sidebar.html">Everything You Need To Know For Your Home Setup</a></h3>
                           <a href="blog-details-left-sidebar.html" class="link style2">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="blog-card style2">
                        <a href="blog-details-left-sidebar.html" class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog-8.jpg')}}" alt="Image">
                        </a>
                        <div class="blog-info">
                           <ul class="blog-metainfo list-style">
                              <li><a href="blog-left-sidebar.html">15 Mar 2021</a></li>
                              <li><a href="blog-left-sidebar.html">By Andrew Phil</a></li>
                           </ul>
                           <h3 class="blog-title"><a href="blog-details-left-sidebar.html">How To Take proper Nurtcher Of Your Home Plants</a></h3>
                           <a href="blog-details-left-sidebar.html" class="link style2">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="blog-card style2">
                        <a href="blog-details-left-sidebar.html" class="blog-img">
                        <img src="{{ asset('assets/img/blog/blog-9.jpg')}}" alt="Image">
                        </a>
                        <div class="blog-info">
                           <ul class="blog-metainfo list-style">
                              <li><a href="blog-left-sidebar.html">12 Jan 2021</a></li>
                              <li><a href="blog-left-sidebar.html">By Tony Stark</a></li>
                           </ul>
                           <h3 class="blog-title"><a href="blog-details-left-sidebar.html">A Step-By-Step Guideline For Home Installation</a></h3>
                           <a href="blog-details-left-sidebar.html" class="link style2">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="newsletter-wrap style2 bg-apple-green ptb-100">
            <img class="nl-shape-1" src="{{ asset('assets/img/brick-2.png')}}" alt="Image">
            <img class="nl-shape-2" src="{{ asset('assets/img/brick.svg')}}" alt="Image">
            <div class="container">
               <div class="section-title style1 text-center mb-50">
                  <h2>Subscribe Our Newsletter</h2>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                     tempor invidunt ut labore et dolore magna aliquyam erat,
                  </p>
               </div>
               <div class="row">
                  <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                     <form action="#" class="newsletter-form">
                        <div class="form-group">
                           <input type="email" placeholder="Please Enter Your Email Address">
                           <button type="submit"> <i class="flaticon-right-arrow"></i> Get Subscribe Now</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </section>

@endsection
