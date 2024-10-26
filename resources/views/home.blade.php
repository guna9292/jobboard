@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- HOME -->
<section class="home-section section-hero overlay bg-image" style="background-image: url({{asset('assets/images/hero_1.jpg')}});margin-top: -24px;" id="home-section">

<div class="container">
  <div class="row align-items-center justify-content-center">
    <div class="col-md-12">
      <div class="mb-5 text-center">
        <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
        <p>Welcome to JobBoard, your go-to platform for finding your dream job. We offer you a wonderful career.</p>
      </div>
      <form method="post" class="search-jobs-form">
        <div class="row mb-5">
          <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <input type="text" class="form-control form-control-lg" placeholder="Job title, Company...">
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Region">
              <option>Anywhere</option>
              <option>San Francisco</option>
              <option>Palo Alto</option>
              <option>New York</option>
              <option>Manhattan</option>
              <option>Ontario</option>
              <option>Toronto</option>
              <option>Kansas</option>
              <option>Mountain View</option>
            </select>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type">
              <option>Regular Employee</option>
              <option>Part Time</option>
            </select>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 popular-keywords">
            <h3>Trending Keywords:</h3>
            <ul class="keywords list-unstyled m-0 p-0">
              <li><a href="#" class="">UI Designer</a></li>
              <li><a href="#" class="">Python</a></li>
              <li><a href="#" class="">Developer</a></li>
            </ul>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<a href="#next" class="scroll-button smoothscroll">
  <span class=" icon-keyboard_arrow_down"></span>
</a>

</section>

<section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('images/hero_1.jpg');">
<div class="container">
  <div class="row mb-5 justify-content-center">
    <div class="col-md-7 text-center">
      <h2 class="section-title mb-2 text-white">JobBoard Site Stats</h2>
    <p class="lead text-white">Our job board connects thousands of candidates with top companies, offering numerous job opportunities across various industries.</p>
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
        <strong class="number" data-number="54">0</strong>
      </div>
      <span class="caption">Jobs Posted</span>
    </div>

    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
      <div class="d-flex align-items-center justify-content-center mb-2">
        <strong class="number" data-number="120">0</strong>
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



<section class="site-section">
<div class="container">

  <div class="row mb-5 justify-content-center">
    <div class="col-md-7 text-center">
      <h2 class="section-title mb-2">{{ $totalJobs }} Jobs Listed</h2>
    </div>
  </div>

  <ul class="job-listings mb-5">
    @foreach ($jobs as $job)
    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
      <a href="{{ route('single.job',$job->id)}}"></a>
      <div class="border p-2 d-inline-block mr-3 rounded" style="width: 100px; height: 100px; overflow: hidden;">
                <img src="{{$job->image}}" alt="Image" style="width: 100%; height: 100%; object-fit: contain;">
              </div>

      <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
          <h2>{{$job->job_title}}</h2>
          <strong>{{$job->company}}</strong>
        </div>
        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
          <span class="icon-room"></span> {{$job->job_region}}
        </div>
        <div class="job-listing-meta">
          <span class="badge badge-danger">{{$job->job_type}}</span>
        </div>
      </div>

    </li>
    @endforeach
  </ul>
</div>
</section>

<section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-8">
      <h2 class="text-white">Looking For A Job?</h2>
      <p class="mb-0 text-white lead">We're here to assist you about that.Stay Connected to Us.</p>
    </div>
    <div class="col-md-3 ml-auto">
      <a href="#" class="btn btn-warning btn-block btn-lg">Sign Up</a>
    </div>
  </div>
</div>
</section>


<section class="site-section py-4">
<div class="container">

    <div class="row align-items-center">
        <div class="col-12 text-center mt-4 mb-5">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <h2 class="section-title mb-2">Companies We've been posting</h2>
                    <p class="lead">Different companies offer different job roles that might suit you or may end up you in tragedy. Please check job description carefully before applying.</p>
                </div>
            </div>
        </div>
        <div class="row text-center">
                <div class="col-6 col-lg-3 col-md-6 mb-4">
                        <img src="{{asset('assets/images/logo_mailchimp.svg')}}" alt="Image" class="img-fluid logo-1" style="max-width: 80px;">
                </div>
                <div class="col-6 col-lg-3 col-md-6 mb-4">
                        <img src="{{asset('assets/images/logo_paypal.svg')}}" alt="Image" class="img-fluid logo-2" style="max-width: 80px;">
                </div>
                <div class="col-6 col-lg-3 col-md-6 mb-4">
                        <img src="{{asset('assets/images/logo_stripe.svg')}}" alt="Image" class="img-fluid logo-3" style="max-width: 80px;">
                </div>
                <div class="col-6 col-lg-3 col-md-6 mb-4">
                        <img src="{{asset('assets/images/logo_visa.svg')}}" alt="Image" class="img-fluid logo-4" style="max-width: 80px;">
                </div>
                <div class="col-6 col-lg-3 col-md-6 mb-4">
                        <img src="{{asset('assets/images/logo_apple.svg')}}" alt="Image" class="img-fluid logo-5" style="max-width: 80px;">
                </div>
                <div class="col-6 col-lg-3 col-md-6 mb-4">
                        <img src="{{asset('assets/images/logo_tinder.svg')}}" alt="Image" class="img-fluid logo-6" style="max-width: 80px;">
                </div>
                <div class="col-6 col-lg-3 col-md-6 mb-4">
                        <img src="{{asset('assets/images/logo_sony.svg')}}" alt="Image" class="img-fluid logo-7" style="max-width: 80px;">
                </div>
                <div class="col-6 col-lg-3 col-md-6 mb-4">
                        <img src="{{asset('assets/images/logo_airbnb.svg')}}" alt="Image" class="img-fluid logo-8" style="max-width: 80px;">
                </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-4">
                <p class="lead font-weight-bold">and many more...</p>
            </div>
        </div>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    </div>
</div>
</section>


<section class="bg-light pt-5 testimony-full">

  <div class="owl-carousel single-carousel">


    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center text-center text-lg-left">
          <blockquote>
            <p>&ldquo;There are lot more companies that hire you on your skill basis.Don't Keep yourself down applying a random 10 number of jobs.&rdquo;</p>
            <p><cite> &mdash; Corey Woods, @Dribbble</cite></p>
          </blockquote>
        </div>
        <div class="col-lg-6 align-self-end text-center text-lg-right">
          <img src="{{asset('assets/images/person_transparent_2.png')}}" alt="Image" class="img-fluid mb-0">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center text-center text-lg-left">
          <blockquote>
            <p>&ldquo;Your potential is not stopping here.You gonna go high in your career when you don't stop trying.&rdquo;</p>
            <p><cite> &mdash; Chris Evans, @Apple Inc.</cite></p>
          </blockquote>
        </div>
        <div class="col-lg-6 align-self-end text-center text-lg-right">
        <img src="{{asset('assets/images/person_transparent1.png')}}" alt="Image" class="img-fluid mb-0">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center text-center text-lg-left">
          <blockquote>
            <p>&ldquo;We, the companies are ready to hire you.Are you skilled and ready to join us?..We're here to help.&rdquo;</p>
            <p><cite> &mdash; Chris Peters, @Google</cite></p>
          </blockquote>
        </div>
        <div class="col-lg-6 align-self-end text-center text-lg-right">
          <img src="{{asset('assets/images/person_transparent.png')}}" alt="Image" class="img-fluid mb-0">
        </div>
      </div>
    </div>

</div>

</section>

<section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url({{asset('assets/images/hero_1.jpg')}});margin-bottom: -24px;">
<div class="container">
  <div class="row">
    <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
      <h2 class="text-white">Get The Mobile Apps</h2>
      <p class="mb-5 lead text-white">We are coming soon on mobile.Stay connected with us.Find your career asap.</p>
      <p class="mb-0"></p>
        <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-apple mr-3"></span>App Store</a>
        <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-android mr-3"></span>Play Store</a>
      </p>
    </div>
    <div class="col-md-4 ml-auto align-self-end">
        <div class="rounded position-relative mb-4" style="overflow: hidden;">
            <img src="https://img.freepik.com/free-vector/flat-coming-soon-background-with-megaphone_1017-33737.jpg?ga=GA1.1.1901465603.1729877080&semt=ais_hybrid" alt="image by freepik" class="img-fluid" style="border-radius: 15px;">
            <div class="position-absolute w-100 h-100" style="top: 0; left: 0; border-radius: 15px;"></div>
        </div>
    </div>
  </div>
</div>
</section>
@endsection
