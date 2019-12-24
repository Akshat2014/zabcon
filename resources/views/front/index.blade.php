@extends('applayout.app')
@section('page_title' , 'Home')


@section('mainContent')



{{-- banner section --}}
<section class="banner-section" id="banner-section">
    <div id="banner-carousel" class="owl-carousel owl-theme">
        <div class="item">
            <div class="banner-image">
                <img src="{{url('public/images/bannerImages/banner_1.png')}}" alt="">
                <div class="banner-text-wrapper">
                    <div class="baner-text">
                        Building services
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="banner-image">
                <img src="{{url('public/images/bannerImages/banner_2.png')}}" alt="">
                <div class="banner-text-wrapper">
                    <div class="baner-text">
                       building icons
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="banner-image">
                <img src="{{url('public/images/bannerImages/banner_3.png')}}" alt="">
                <div class="banner-text-wrapper">
                    <div class="baner-text">
                    building features
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- landing page section --}}