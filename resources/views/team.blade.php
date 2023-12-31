@extends('layout.master')



@section('title' , 'Our team')
    

@section('body')


<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Our Team</h2>
                    <div class="bt-option">
                        <a href="/">Home</a>
                        <span>Our team</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Team Section Begin -->
<section class="team-section team-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team-title">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>TRAIN WITH EXPERTS</h2>
                    </div>
                    <a href="#" class="primary-btn btn-normal appoinment-btn">appointment</a>
                </div>
            </div>
        </div>
        
        <div class="row">
            @foreach ($data as $user)
            <div class="col-lg-4 col-sm-6">
                <div class="ts-item set-bg" data-setbg="./assets/images/{{$user->photo}}">
                    <div class="ts_text">
                        <h4>{{$user->name}}</h4>
                        <span>{{$user->position}}</span>
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

    
@endsection