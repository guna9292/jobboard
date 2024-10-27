@extends('layouts.app')
@section('content')

<section class="section-hero overlay inner-page bg-image" style="background-image: url('{{asset('assets/images/hero_1.jpg')}}'); margin-top:-24px;" id="home-section">
    <div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7">
        <div class="card p-3 py-4">

            <div class="container">
                @if (\Session::has('update'))
         <div class="alert alert-success">
            <p>{!! \Session::get('update') !!}</p></div>
         @endif

                <div class="text-center">
                    <img src="{{asset('assets/images_users/'.$profile->image)}}" alt="Image" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                </div>

                <div class="text-center mt-3">
                    <!-- <span class="bg-secondary p-1 px-4 rounded text-white">Pro</span> -->
                    <h5 class="mt-1 mb-0 font-weight-bold">{{$profile->name}}</h5>
                    <span>{{$profile->job_title}}</span>

                    <div class="px-4 mt-1 mb-1">
                        <p class="fonts">{{$profile->bio}} </p>
                    </div>

                        <a href="{{asset('assets/cvs/'.$profile->cv.'')}}" class="btn btn-block text-white btn-primary btn-sm mb-3 mt-2"><strong>Download CV</strong></a>
                    </div>

                    <div class="px-3 text-center">
                <a href="{{$profile->facebook}} " class="pt-3 pb-3 pr-3 pl-0 underline-none"><span class="icon-facebook"></span></a>
                <a href="{{$profile->github}} " class="pt-3 pb-3 pr-3 pl-0"><span class="icon-github"></span></a>
                <a href="{{$profile->linkedin}} " class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
            </div>



                </div>




            </div>
        </div>
    </div>


    </div>
</section>
@endsection
