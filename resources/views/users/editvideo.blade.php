@extends('layouts.app')

@section('content')

<!-- HOME -->
<section class="section-hero overlay inner-page bg-Video" style="background-image: url('{{asset('assets/images/hero_1.jpg')}}');margin-top:-24px;" id="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1 class="text-white font-weight-bold">Hey there! {{Auth::user()->name}}</h1>
          <div class="custom-breadcrumbs">
            <a href="#">Home</a> <span class="mx-2 slash">/</span>
            <a href="#">Job</a> <span class="mx-2 slash">/</span>
            <span class="text-white"><strong>Update Video</strong></span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="site-section">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="section-title mb-4" style="font-size: 2.5rem; font-weight: bold; color: #333; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
                <span style="border-bottom: 3px solid #ff6347; padding-bottom: 5px;">Update your Video here</span>
              </h2>
            </div>
          </div>

      </div>
{{-- Super real-time validation --}}
      <div class="row mb-5 justify-content-center">
        <div class="col-lg-8">
          <form class="p-4 p-md-5 border rounded shadow-sm" enctype="multipart/form-data" action="{{ route('update.video') }}" method="POST" style="background-color: #f9f9f9;" id="profileForm">
            @csrf
            <h3 class="text-center mb-4" style="font-weight: bold; color: #333;">Update Profile Video</h3>
            @if (\Session::has('update'))
            <div class="alert alert-success">
               <p>{!! \Session::get('update') !!}</p></div>
            @endif
            <!-- User Details -->
            <div class="form-group mb-4">
              <label for="name" class="font-weight-bold">Profile Video</label>
              <input type="file" name="video" class="form-control" id="name" accept="video/*">
              @if ($errors->has('video'))
            <div class="alert alert-danger">
               <p>{{ $errors->first('video') }}</p></div>
            @endif
            </div>

            <!-- Submit Button -->
            <div class="text-center">
              <button type="submit" name="submit" class="btn btn-primary btn-lg" id="submitButton" style="padding: 10px 40px; font-weight: bold;">Update Video</button>
            </div>
          </form>
        </div>
      </div>
</div>
</section>
@endsection
