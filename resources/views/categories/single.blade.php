@extends('layouts.app')

@section('content')
{{-- HOME --}}
<section class="section-hero overlay inner-page bg-image" style="background-image: url('{{asset('assets/images/hero_1.jpg')}}');margin-top:-24px;" id="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1 class="text-white font-weight-bold">{{$name}} Category</h1>
          <div class="custom-breadcrumbs">
            <a href="#">Home</a> <span class="mx-2 slash">/</span>
            <a href="#">Job</a> <span class="mx-2 slash">/</span>
            <span class="text-white"><strong>{{$name}}</strong></span>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="site-section">
    <div class="container">

      <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          <h2 class="section-title mb-2">{{$name}} Jobs</h2>
        </div>
      </div>

      <ul class="job-listings mb-5">
        @if ($jobs->count() > 0)
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
    </ul>
        @endforeach
        @else
        <div class="alert alert-danger text-center" style="max-width: 400px; margin: 0 auto;">
          <img src="https://img.freepik.com/free-vector/hand-drawn-no-data-illustration_23-2150584265.jpg?semt=ais_hybrid" alt="Image" class="img-fluid">
          <h4 class="mt-5 alert-heading">No Jobs Found</h4>
          <p>There are no jobs under this category.</p>
        </div>
        @endif

    </div>
    </section>




@endsection
