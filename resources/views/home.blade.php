@extends('layout.master')



@section('title' , 'home')
    

@section('body')
<section class="hero-section">
    <div class="hs-slider owl-carousel">
       @foreach ($slider as $slider)
           
        <div class="hs-item set-bg" data-setbg="./assets/images/{{$slider->photo}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="hi-text">
                            <span>Shape your body</span>
                            <h1>Be <strong>strong</strong> traning hard</h1>
                            <a href="#" class="primary-btn">Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- Hero Section End -->

<!-- ChoseUs Section Begin -->
<section class="choseus-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Why chose us?</span>
                    <h2>PUSH YOUR LIMITS FORWARD</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-034-stationary-bike"></span>
                    <h4>Modern equipment</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore facilisis.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-033-juice"></span>
                    <h4>Healthy nutrition plan</h4>
                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-002-dumbell"></span>
                    <h4>Proffesponal training plan</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore facilisis.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-014-heart-beat"></span>
                    <h4>Unique to your needs</h4>
                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ChoseUs Section End -->

<!-- Classes Section Begin -->
<section class="classes-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Our Classes</span>
                    <h2>WHAT WE CAN OFFER</h2>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($classes as $class)

            <div class="col-lg-6 col-md-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="./assets/images/{{$class->photo}}" alt="">
                    </div>
                    <div class="ci-text">
                        <span>{{$class->class}}</span>
                        <h4>{{$class->class_name}}</h4>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ChoseUs Section End -->

<!-- Banner Section Begin -->
<section class="banner-section set-bg" data-setbg="./img/banner-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="bs-text">
                    <h2>registration now to get more deals</h2>
                    <div class="bt-tips">Where health, beauty and fitness meet.</div>
                    <a href="#pricing-section" class="primary-btn  btn-normal">Appointment</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->



<!-- Pricing Section Begin -->
<section class="pricing-section spad" id="pricing-section">
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
                        <h2>{{$price->price}} JD</h2>
                        <span>SINGLE CLASS</span>
                    </div>
                    <ul>
                        <li>{{$price->details_1}}</li>
                        <li>{{$price->details_2}}</li>
                        <li>{{$price->details_3}}</li>
                        
                    </ul>
                    {{-- <a href="#" class="primary-btn pricing-btn">Enroll now</a> --}}
                  {{-- <a href="/test{{$user->id}}">--}}  <button type="button" class="primary-btn pricing-btn" data-toggle="modal" data-target="#exampleModalCenter"> 
                        Subscribe now
                      </button></a>
                </div>
            </div>
           @endforeach
        </div>
    </div>
</section>
<!-- Pricing Section End -->

<!-- Gallery Section Begin -->

<!-- Gallery Section End -->

<!-- Team Section Begin -->
 <section class="team-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team-title">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>TRAIN WITH EXPERTS</h2>
                    </div>
                    <a href="#pricing-section" class="primary-btn btn-normal appoinment-btn">appointment</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="ts-slider owl-carousel">
               
                @foreach ($coaches as $coach)
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="./assets/images/{{$coach->photo}}">
                        <div class="ts_text">
                            <h4>{{$coach->name}}</h4>
                            <span>{{$coach->position}}</span>
                            <div class="tt_social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
               
               
                @endforeach
        </div>
    </div>
</section> 
<!-- Team Section End -->

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


{{-- modal start  --}}


<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" >
        <div class="modal-header" style="background-color: black; color:white;>
          <h5 class="modal-title" id="exampleModalLongTitle">Send a subscription request!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background-color: #753003;">
         <p id="modalP">
            Are you sure about a request to subscribe to this subscription?
            <em class="blockquote-footer" id="modalP">The subscription request will reach the gym manager
                 and you will need to go there to confirm this request</em>
         </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-success">Confirm subscription</button>
        </div>
      </div>
    </div>
  </div>



{{-- modal end  --}}


    
@endsection