@extends('frontend.layout.app')

@section('title','Base-Blog-Home')
@section('content')




<section id="home" class="hero-section-wrapper hero-section-wrapper-1">

      <!-- ========================= header-4 start ========================= -->
      
      <!-- ========================= header-4 end ========================= -->

      <!-- ========================= hero-1 start ========================= -->
      <div class="hero-section hero-style-1">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="hero-content-wrapper">
                <h2>You are using free lite version of the template</h2>
                <p>Please, purchase full version of the template to get all pages and features.</p>
                  <a href="https://rebrand.ly/base-gg" rel="nofollow" target="_blank" class="button button-lg radius-50">Get Started</a>
              </div>
            </div>
            <div class="col-lg-6 align-self-end">
              <div class="hero-image">
                <img src="{{('base/img/hero/hero-1/hero-img.svg')}}" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="shapes">
          <img src="{{('base/img/hero/hero-1/shape-1.svg')}}" alt="" class="shape shape-1">
          <img src="{{('base/img/hero/hero-1/shape-2.svg')}}" alt="" class="shape shape-2">
          <img src="{{('base/img/hero/hero-1/shape-3.svg')}}" alt="" class="shape shape-3">
          <img src="{{('base/img/hero/hero-1/shape-4.svg')}}" alt="" class="shape shape-4">
        </div>
      </div>
      <!-- ========================= hero-1 end ========================= -->
    </section>
    <!-- ========================= hero-section-wrapper-1 end ========================= -->

    <!-- ========================= feature style-3 start ========================= -->
    <section id="features" class="feature-section feature-style-3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-8">
            <div class="section-title text-center mb-60">
              <h3 class="mb-15">Awesome Features</h3>
              <p>Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single-feature">
              <div class="icon">
                <i class="lni lni-vector"></i>
              </div>
              <div class="content">
                <h5>Graphics Design</h5>
                <p>Short description for the ones who look for something new.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-feature">
              <div class="icon">
                <i class="lni lni-pallet"></i>
              </div>
              <div class="content">
                <h5>Print Design</h5>
                <p>Short description for the ones who look for something new.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-feature">
              <div class="icon">
                <i class="lni lni-stats-up"></i>
              </div>
              <div class="content">
                <h5>Business Analysis</h5>
                <p>Short description for the ones who look for something new.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-feature">
              <div class="icon">
                <i class="lni lni-code-alt"></i>
              </div>
              <div class="content">
                <h5>Web Development</h5>
                <p>Short description for the ones who look for something new.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-feature">
              <div class="icon">
                <i class="lni lni-lock"></i>
              </div>
              <div class="content">
                <h5>Best Security</h5>
                <p>Short description for the ones who look for something new.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-feature">
              <div class="icon">
                <i class="lni lni-code"></i>
              </div>
              <div class="content">
                <h5>Web Design</h5>
                <p>Short description for the ones who look for something new.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		<!-- ========================= feature style-3 end ========================= -->

    <!-- ========================= about style-5 start ========================= -->
    <section id="about" class="about-section about-style-5" style="background-image: url('{{('base/img/about/about-5/about-img.jpg')}}')">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-8 col-md-10">
            <div class="about-content-wrapper">
              <div class="section-title mb-30">
                <h3 class="mb-25">The future of designing starts here</h3>
                <p>Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed, Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed,</p>
              </div>
              <a href="#0" class="button button-lg radius-10">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========================= about style-5 end ========================= -->

		<!-- ========================= team style-6 start ========================= -->
		<section class="team-section text-center team-style-6">
          <div class="col-12">
            <div class="section-title text-center pt-60 mb-60">
              <h3 class="mb-15">You are using free lite version</h3>
              <p>Please, purchase full version of the template to get all pages and features</p><br/>
              <a href="https://rebrand.ly/base-gg" rel="nofollow" target="_blank" class="button radius-30">Purchase Now</a>
            </div>
          </div>
    </section>
    <!-- ========================= team style-6 end ========================= -->


    <!-- ========================= clients-logo start ========================= -->
    <section class="clients-logo-section pb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-center mb-60">
              <h3>Co-created by</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="client-logo wow fadeInUp" data-wow-delay=".2s">
              <img src="{{('base/img/clients/brands.svg')}}" alt="" class="w-100">
            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection