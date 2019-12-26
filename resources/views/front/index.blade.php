@extends('applayout.app')
@section('page_title' , 'Home')


@section('mainContent')


{{-- banner section --}}
<section id="banner-section" class="banner-section">
    <div id="banner-carousel" class="owl-carousel owl-theme">
        <div class="item">
            <div class="banner-image">
                <img src="{{asset('public/images/bannerImages/bannerone.png')}}" alt="">
                <div class="banner-text-wrapper">
                    <div class="baner-text">
                        Building Icons
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="banner-image">
                <img src="{{asset('public/images/bannerImages/bannertwo.png')}}" alt="">
                <div class="banner-text-wrapper">
                    <div class="baner-text">
                        Building feature
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="banner-image">
                <img src="{{asset('public/images/bannerImages/bannerthree.png')}}" alt="">
                <div class="banner-text-wrapper">
                    <div class="baner-text">
                        Building Services
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-scroll-btn-container">

        <div class="the-actual-btn">
            <a href="#key-stats" class="scroll-down"> <i class="fas fa-chevron-down"></i></a>
        </div>

    </div>
</section>


{{--  welcome section --}}
<section id="welcome-section" class="welcome-section">
    <div class="welcome-section-container">
        <div class="section-content">
          <div class="section-first-content">
            <div class="heading-wrapper">
                welcome
            </div>
            <div class="main-content-wrapper">
                    ACC (Arabian Construction Company) is a leading construction
                contractor in the MENA region with a portfolio that includes 
                some of the Middle East and India’s most iconic and sophisticated 
                construction masterpieces
                </div>
                <div class="main-content-wrapper">
                For almost 50 years, we have shaped the skylines of major cities,
                set the infrastructure for large industrial facilities and built
                landmark projects in healthcare, hospitality, commercial and residential.
                We focus on delivering quality while maintaining the highest health and 
                safety standards.

                <a href="" class="content-link">Find out more about us.</a>
            </div>
          </div> 
          <div class="section-second-content">
              <div class="heading-wrapper">
                FACTS & FIGURES
              </div>
            <ul class="content-card-count">
                <li class="list-count">50</li>
                <li class="list-count">7</li>
                <li class="list-count">11</li>
                <li class="list-count">30,000</li>
                <li class="list-count">Over $1 billion</li>
            </ul>
            <ul class="content-card-text">
                <li class="list-text">Years of experience</li>
                <li class="list-text">Countries of operation</li>
                <li class="list-text">Offices in the Middle East and India</li>
                <li class="list-text">Workforce</li>
                <li class="list-text">Annual turnover</li>
            </ul>
          </div> 
        </div>
        <div class="section-card"></div>
    </div>
</section>    



@stop