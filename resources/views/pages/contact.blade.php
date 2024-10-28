@extends('layouts.app')
@section('content')

<!-- HOME -->
<section class="section-hero overlay inner-page bg-image" style="background-image: url('{{asset('assets/images/hero_1.jpg')}}');" id="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1 class="text-white font-weight-bold">Contact Us</h1>
          <div class="custom-breadcrumbs">
            <a href="#">Home</a> <span class="mx-2 slash">/</span>
            <span class="text-white"><strong>Contact Us</strong></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="site-section" id="next-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <form action="#" class="">

            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="fname">First Name</label>
                <input type="text" id="fname" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="text-black" for="lname">Last Name</label>
                <input type="text" id="lname" class="form-control">
              </div>
            </div>

            <div class="row form-group">

              <div class="col-md-12">
                <label class="text-black" for="email">Email</label>
                <input type="email" id="email" class="form-control">
              </div>
            </div>

            <div class="row form-group">

              <div class="col-md-12">
                <label class="text-black" for="subject">Subject</label>
                <input type="subject" id="subject" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
              </div>
            </div>


          </form>
        </div>
        <div class="col-lg-5 ml-auto">
          <div class="p-4 mb-3 bg-white">
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">Visakhapatnam, Andhra Pradesh, India</p>

            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#">+91 9652177844</a></p>

            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0"><a href="#">nagothigunesh@gmail.com</a></p>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="site-section bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center" data-aos="fade">
          <h2 class="section-title mb-3">Happy Candidates Says</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="block__87154 bg-white rounded">
            <blockquote>
              <p>&ldquo;Navigating the job market feels much easier with JobBoard. It combines clean design with powerful features, helping job seekers find and save relevant job postings without a hassle. The setup is intuitive, making it suitable for all tech levels. The bio and social link features allow users to create professional profiles in minutes, adding a personal touch that feels important for recruiters. The inclusion of real-time notifications and easy bookmarking simplifies the job hunt.&rdquo;</p>
            </blockquote>
            <div class="block__91147 d-flex align-items-center">
              <figure class="mr-4"><img src="{{asset('assets/images/person_2.jpg')}}" alt="Image" class="img-fluid"></figure>
              <div>
                <h3>Chris Peter</h3>
                <span class="position">Creative Director</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="block__87154 bg-white rounded">
            <blockquote>
              <p>&ldquo;JobBoard is an impressive platform that simplifies job hunting for professionals and students alike. The sleek design, coupled with intuitive navigation, makes browsing job listings easy and enjoyable. Features like saved jobs, personalized job recommendations, and quick apply make it a standout in the market. JobBoard is a must-have for anyone looking to find a job.&rdquo;</p>
            </blockquote>
            <div class="block__91147 d-flex align-items-center">
              <figure class="mr-4"><img src="https://plus.unsplash.com/premium_photo-1671656349322-41de944d259b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8cGVyc29ufGVufDB8fDB8fHww" alt="Image" class="img-fluid"></figure>
              <div>
                <h3>Frank Flores</h3>
                <span class="position">Web Designer</span>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>


@endsection
