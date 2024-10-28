@extends('layouts.app')
@section('content')

{{-- <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> --}}

<!-- HOME -->
<section class="section-hero overlay inner-page bg-image" style="background-image: url('{{asset('assets/images/hero_1.jpg')}}'); margin-top:-24px;" id="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1 class="text-white font-weight-bold">About Us</h1>
          <div class="custom-breadcrumbs">
            <a href="#">Home</a> <span class="mx-2 slash">/</span>
            <span class="text-white"><strong>About Us</strong></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-image overlay-primary fixed overlay" id="next-section" style="background-image: url('{{asset('assets/images/hero_1.jpg')}}');">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          <h2 class="section-title mb-2 text-white">JobBoard Site Stats</h2>
          <p class="lead text-white">The bio and social link features allow users to create professional profiles in minutes, adding a personal touch that feels important for recruiters.</p>
        </div>
      </div>
      <div class="row pb-0 block__19738 section-counter">

        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="d-flex align-items-center justify-content-center mb-2">
            <strong class="number" data-number="1930">0</strong>
          </div>
          <span class="caption">Candidates</span>
        </div>

        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="d-flex align-items-center justify-content-center mb-2">
            <strong class="number" data-number="540">0</strong>
          </div>
          <span class="caption">Jobs Posted</span>
        </div>

        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="d-flex align-items-center justify-content-center mb-2">
            <strong class="number" data-number="560">0</strong>
          </div>
          <span class="caption">Jobs Filled</span>
        </div>

        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="d-flex align-items-center justify-content-center mb-2">
            <strong class="number" data-number="550">0</strong>
          </div>
          <span class="caption">Companies</span>
        </div>


      </div>
    </div>
  </section>


  <section class="site-section pb-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <a data-fancybox data-ratio="2" href="https://youtu.be/IMxDeACOWCE?feature=shared" class="block__96788">
            <span class="play-icon"><span class="icon-play"></span></span>
            <img src="{{asset('assets/images/sq_img_6.jpg')}}" alt="Image" class="img-fluid img-shadow">
          </a>
        </div>
        <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">JobBoard for Freelancers & Web Developers</h2>
            <p class="lead">Empowering freelancers and web developers with tailored opportunities to match your expertise. Discover a space designed to connect skills with rewarding projects.</p>
            <p>Whether you're a seasoned developer or a fresh freelancer, JobBoard opens doors to projects that value your talent. Find clients and companies eager for collaboration, and start building your portfolio with engaging work. Dive into a community where your skills meet genuine demand and fuel your career path forward!</p>
          </div>
    </div>
  </section>

  <section class="site-section pt-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
          <a data-fancybox data-ratio="2" href="https://youtu.be/8NJWZpC51Tg?feature=shared" class="block__96788">
            <span class="play-icon"><span class="icon-play"></span></span>
            <img src="{{asset('assets/images/sq_img_6.jpg')}}" alt="Image" class="img-fluid img-shadow">
          </a>
        </div>
        <div class="col-lg-5 mr-auto order-md-1 mb-5 mb-lg-0">
            <h2 class="section-title mb-3">JobBoard: Built for the Workforce</h2>
            <p class="lead">Empowering you to find work that’s meaningful and impactful. JobBoard connects you to opportunities designed for growth and purpose, built with you in mind.</p>
            <p>Discover a platform that values your time and skills, simplifying your job search with seamless navigation and personalized listings. We bring job seekers closer to employers, turning ambitions into achievements with a few simple clicks. Get ready to take the next step in your career journey with confidence!</p>
          </div>
      </div>
    </div>
  </section>


  <section class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center" data-aos="fade">
          <h2 class="section-title mb-3">Our Team</h2>
        </div>
      </div>

      <div class="row align-items-center block__69944">

        <div class="col-md-6">
          <img src="{{asset('assets/images/person_6.jpg')}}" alt="Image" class="img-fluid mb-4 rounded" style="width: 250px; height: 250px; object-fit: cover; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
        </div>

        <div class="col-md-6">
          <h3>Gunesh Nagothi</h3>
          <p class="text-muted">Creative Director & Founder</p>
          <p>Gunesh Nagothi is a creative and entrepreneurial minded individual who has a keen interest in the field of digital marketing. He has been working in the industry for over a decade and has gained extensive experience in various aspects of digital marketing. Gunesh is passionate about creating innovative solutions that help businesses grow and succeed. He is an active member of the marketing community and is always eager to share his knowledge and expertise with others.</p>
          <div class="social mt-4">
            <a href="https://facebook.com/guna9292"><span class="icon-facebook"></span></a>
            <a href="https://github.com/guna9292"><span class="icon-github"></span></a>
            <a href="https://www.instagram.com/gunaa_0507/"><span class="icon-instagram"></span></a>
            <a href="https://linkedin.com/in/gunesh-nagothi"><span class="icon-linkedin"></span></a>
          </div>
        </div>

  </section>


@endsection
