@extends('layout.master')



@section('title' , 'Services')
    

@section('body')


<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Services</h2>
                    <div class="bt-option">
                        <a href="/">Home</a>
                        <span>Services</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Services Section Begin -->
<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>What we do?</span>
                    <h2>PUSH YOUR LIMITS FORWARD</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 order-lg-1 col-md-6 p-0">
                <div class="ss-pic">
                    <img src="img/services/services-1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-3 order-lg-2 col-md-6 p-0">
                <div class="ss-text">
                    <h4>Personal training</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut dolore facilisis.
                    </p>
                    <a href="#">Explore</a>
                </div>
            </div>
            <div class="col-lg-3 order-lg-3 col-md-6 p-0">
                <div class="ss-pic">
                    <img src="img/services/services-2.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-3 order-lg-4 col-md-6 p-0">
                <div class="ss-text">
                    <h4>Group fitness classes</h4>
                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus.</p>
                    <a href="#">Explore</a>
                </div>
            </div>
            <div class="col-lg-3 order-lg-8 col-md-6 p-0">
                <div class="ss-pic">
                    <img src="img/services/services-1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-3 order-lg-7 col-md-6 p-0">
                <div class="ss-text second-row">
                    <h4>Body building</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut dolore facilisis.
                    </p>
                    <a href="#">Explore</a>
                </div>
            </div>
            <div class="col-lg-3 order-lg-6 col-md-6 p-0">
                <div class="ss-pic">
                    <img src="img/services/services-3.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-3 order-lg-5 col-md-6 p-0">
                <div class="ss-text second-row">
                    <h4>Strength training</h4>
                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus.</p>
                    <a href="#">Explore</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Banner Section Begin -->
<section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="bs-text service-banner">
                    <h2>Exercise until the body obeys.</h2>
                    <div class="bt-tips">Where health, beauty and fitness meet.</div>
                    <a href="https://www.youtube.com/watch?v=dPK9jtT7Hg8" class="play-btn video-popup"><i
                            class="fa fa-caret-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Pricing Section Begin -->
<section class="pricing-section service-pricing spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Our Plan</span>
                    <h2>Choose your pricing plan</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($price as $price)
            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3>{{$price->months}}</h3>
                    <div class="pi-price">
                        <h2>{{$price->price}}</h2>
                        <span>SINGLE CLASS</span>
                    </div>
                    <ul>
                        <li>{{$price->details_1}}</li>
                        <li>{{$price->details_2}}</li>
                        <li>{{$price->details_3}}</li>
                        
                    </ul>
                    <a href="#" class="primary-btn pricing-btn">Enroll now</a>
                    
                </div>
            </div>
           @endforeach
        </div>
    </div>
</section>
<!-- Pricing Section End -->

<!-- Get In Touch Section Begin -->
<div class="gettouch-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="gt-text">
                    <i class="fa fa-map-marker"></i>
                    <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text">
                    <i class="fa fa-mobile"></i>
                    <ul>
                        <li>125-711-811</li>
                        <li>125-668-886</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text email">
                    <i class="fa fa-envelope"></i>
                    <p>Support.gymcenter@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection