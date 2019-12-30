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
        {{-- <div class="item">
            <div class="banner-image">
                <img src="{{asset('public/images/bannerImages/bannertwo.png')}}" alt="">
                <div class="banner-text-wrapper">
                    <div class="baner-text">
                        Building feature
                    </div>
                </div>
            </div>
        </div> --}}
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
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique debitis enim inventore
                 laboriosam, tempora dolore id assumenda rem ratione illo laborum dolorem obcaecati, aperiam
                  ad pariatur eum laudantium maiores eaque! Corporis nesciunt asperiores veritatis ipsam, 
                  aspernatur accusamus harum!
             </div>
                <div class="main-content-wrapper">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, eius quia vero vel laudantium
                Voluptates reprehenderit porro commodi exercitationem corrupti perspiciatis, esse ullam totam 
                laudantium quibusdam laboriosam unde quisquam id, quasi officia fugiat obcaecati numquam sint 
                adipisci voluptate dignissimos?

                <a href="" class="content-link">Find out more about us.</a>
            </div>
          </div> 
          <div class="section-second-content">
              <div class="heading-wrapper">
                FACTS & FIGURES
              </div>
           <div class="content-card-wrapper">
           
                <ul class="content-card-count">
                    <li class="list-count-entry">
                        <div class="list-count">50</div><div class="list-content">Year of exprience</div>
                    </li>
                    <li class="list-count-entry alternate">
                        <div class="list-count">7</div><div class="list-content">Countries of operation</div>
                    </li>
                    <li class="list-count-entry">
                        <div class="list-count">11</div><div class="list-content">Offices in the Middle East and India</div>
                    </li>
                    <li class="list-count-entry alternate">
                        <div class="list-count">30,000</div><div class="list-content">Workforce</div>
                    </li>
                    <li class="list-count-entry">
                        <div class="list-count">Over $1 billion</div><div class="list-content">Annual turnover</div>
                    </li>
                </ul>            
           </div>
          </div> 
        </div>
        <div class="section-card">
            <div class="card-text-wrapper">
                <div class="card-heading-wrapper">
                    Lorem ipsum dolor sit. – Lorem, ipsum dolor.
                </div>
                <div class="main-content-wrapper">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat repellendus, enim nisi excepturi voluptatem odio molestiae unde reprehenderit totam repellat eaque fuga. Illo officiis reiciendis molestias explicabo sint, unde eum!
                </div>
            </div>
            <div class="card-image-wrapper">
                <img src="{{asset('public/images/bannerImages/bannerthree.png')}}" alt="">
            </div>
        </div>
    </div>
</section>    

{{-- project slider section --}}

<section id="project-section" class="project-section">
    <div class="project-heading-wrapper">
        projects
    </div>
    <div id="project-carousel" class="owl-carousel owl-theme">
        <div class="item">
            <div class="project-image">
                <img src="{{asset('public/images/projectbannerImages/bannerfour.jpg')}}" alt="">
                <span class="overlay-wrapper"> view project</span>
                <div class="project-text-wrapper">
                    <div class="project-text">
                        Lorem, ipsum dolor
                    </div>
                </div>
            </div>
            <div class="project-dis">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio impedit repudiandae perferendis.
            </div>
        </div>
        <div class="item">
            <div class="project-image">
                <img src="{{asset('public/images/projectbannerImages/bannerfive.jpg')}}" alt="">
                <span class="overlay-wrapper"> view project</span>
                <div class="project-text-wrapper">
                    <div class="project-text">
                        Lorem ipsum dolor sit amet
                    </div>
                </div>
            </div>
            <div class="project-dis">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio impedit repudiandae perferendis.
            </div>
        </div>
        <div class="item">
            <div class="project-image">
                <img src="{{asset('public/images/projectbannerImages/bannersix.jpg')}}" alt="">
                <span class="overlay-wrapper"> view project</span>
                <div class="project-text-wrapper">
                    <div class="project-text">
                        Lorem ipsumamet consectetur
                    </div>
                </div>
            </div>
            <div class="project-dis">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio impedit repudiandae perferendis.
            </div>
        </div>
        <div class="item">
            <div class="project-image">
                <img src="{{asset('public/images/projectbannerImages/bannerseven.jpg')}}" alt="">
                <span class="overlay-wrapper"> view project</span>
                <div class="project-text-wrapper">
                    <div class="project-text">
                        Lorem, ipsum dolor
                    </div>
                </div>
            </div>
            <div class="project-dis">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio impedit repudiandae perferendis.
            </div>
        </div>
        
       
    </div>
</section>




{{-- capablities section --}}

<section id="capablities-section" class="capablities-section">
    <div class="capablities-section-wrapper">
        <div class="capablities-heading-wrapper">
            capabilities
        </div>
        <div class="capablities-card-wrapper">
            <div class="card-image-wrapper">
                <img src="{{asset('public/images/projectbannerImages/bannerfour.jpg')}}" alt="" class="card-image">
                <span class="image-content-section">
                    buildings
                </span>
            </div>
            <div class="card-image-wrapper">
                <img src="{{asset('public/images/projectbannerImages/bannersix.jpg')}}" alt="" class="card-image">
                <span class="image-content-section">
                    oil & gas
                </span>
            </div>
        </div>
    </div>
</section>

{{-- footer section --}}

<section id="global-footer" class="global-footer">
    <div class="bottom-section">
        <div class="footer-heading">contact us</div>
            <div class="footer-list">
        <div class="footer-heading">stay updated</div>
        <div class="footer-icon">
            <a href="" class="footer-icon-wrapper">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a class="footer-icon-wrapper">
                <i class="fab fa-linkedin-in"></i>
            </a>
            </div>
                
                <div class="footer-sub-heading">
                    terms & conditions
                </div>        
        </div>
    </div>
    <div class="bottom-section">
        <div class="footer-list other-list">
            <div class="footer-heading ">about us</div>
            <ul class="footer-list-container">
                <li class="footer-list-wrapper"><a href="" class="footer-list-link">overview</a></li>
                <li class="footer-list-wrapper"><a href="" class="footer-list-link">our vision & values</a></li>
                <li class="footer-list-wrapper"><a href="" class="footer-list-link">awards</a></li>
                <li class="footer-list-wrapper"><a href="" class="footer-list-link">quality and safety</a></li>
                <li class="footer-list-wrapper"><a href="" class="footer-list-link">our timeline</a></li>
            </ul>
        </div>
    </div>
    <div class="bottom-section">
        <div class="footer-list other-list">
            <div class="footer-heading">capablities</div>
            <ul class="footer-list-container">
                <li class="footer-list-wrapper"><a href="" class="footer-list-link">buildings</a></li>
                <li class="footer-list-wrapper"><a href="" class="footer-list-link">oil & gas / indrustrial</a></li>
            </ul>
            <div class="footer-heading">projects</div>
        </div>
        
    </div>
    <div class="bottom-section">
        <div class="footer-list other-list">
            <div class="footer-heading">careers</div>
            <ul class="footer-list-container">
                <li class="footer-list-wrapper"><a href="" class="footer-list-link">company culture</a></li>
                <li class="footer-list-wrapper"><a href="" class="footer-list-link">career growth</a></li>
                <li class="footer-list-wrapper"><a href="" class="footer-list-link">hiring process</a></li>
                <li class="footer-list-wrapper"><a href="" class="footer-list-link">rewards and benifits</a></li>
                <li class="footer-list-wrapper"><a href="" class="footer-list-link">recruitments faqs</a></li>
            </ul>
        </div>
    </div>

    

</section>

<div class="copyright-line">
    COPYRIGHT 2019 zabeel contracting. ALL RIGHTS RESERVED.
</div>


{{-- <div style="height:100vh;">
   
</div> --}}



@stop