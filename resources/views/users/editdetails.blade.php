@extends('layouts.app')

@section('content')

<!-- HOME -->
<section class="section-hero overlay inner-page bg-image" style="background-image: url('{{asset('assets/images/hero_1.jpg')}}');margin-top:-24px;" id="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1 class="text-white font-weight-bold">Hey there! {{Auth::user()->name}}</h1>
          <div class="custom-breadcrumbs">
            <a href="#">Home</a> <span class="mx-2 slash">/</span>
            <a href="#">Job</a> <span class="mx-2 slash">/</span>
            <span class="text-white"><strong>Update Profile</strong></span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="site-section">
    <div class="container">
        @if (\Session::has('update'))
 <div class="alert alert-success">
    <p>{!! \Session::get('update') !!}</p></div>
 @endif
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="section-title mb-4" style="font-size: 2.5rem; font-weight: bold; color: #333; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
                <span style="border-bottom: 3px solid #ff6347; padding-bottom: 5px;">Update your Details here</span>
              </h2>
            </div>
          </div>

      </div>
{{-- Super real-time validation --}}
      <div class="row mb-5 justify-content-center">
        <div class="col-lg-8">
          <form class="p-4 p-md-5 border rounded shadow-sm" action="{{ route('update.details') }}" method="POST" style="background-color: #f9f9f9;" id="profileForm">
            @csrf
            <h3 class="text-center mb-4" style="font-weight: bold; color: #333;">Update Profile</h3>

            <!-- User Details -->
            <div class="form-group mb-4">
              <label for="name" class="font-weight-bold">Name</label>
              <input type="text" name="name" value="{{ $userDetails->name }}" class="form-control" id="name" placeholder="Enter your name" required>
                @if($errors->has('name'))
                <div class="alert alert-danger">
                    <p>Please enter a valid NAME.{{ $errors->first('name') }}</p>
                </div>
                @endif
            <div class="form-group mb-4">
              <label for="email" class="font-weight-bold">Email</label>
              <input type="email" name="email" value="{{ $userDetails->email }}" class="form-control" id="email" placeholder="Enter your email" required>
              @if($errors->has('email'))
              <div class="alert alert-danger">
                  <p>Please enter a valid EMAIL.{{ $errors->first('email') }}</p>
              </div>
              @endif
            </div>
            <div class="form-group mb-4">
              <label for="job-title" class="font-weight-bold">Job Title</label>
              <input type="text" name="job_title" value="{{ $userDetails->job_title }}" class="form-control" id="job-title" placeholder="Job title here...">
              @if($errors->has('job_title'))
              <div class="alert alert-danger">
                  <p>Please enter a valid JOB TITLE.{{ $errors->first('job_title') }}</p>
              </div>
              @endif
            </div>

            <!-- Text Area for Bio -->
            <div class="form-group mb-4">
              <label for="bio" class="font-weight-bold">Bio</label>
              <textarea name="bio" id="bio" cols="30" rows="4" class="form-control" placeholder="Write a brief description about yourself" maxlength="1000" oninput="validateForm()">{{ Str::limit($userDetails->bio, 1000) }}</textarea>
              <small id="bioHelp" class="form-text text-muted">Maximum 1000 characters.</small>
            </div>

            <!-- Social Links -->
            <div class="row">
              <div class="col-md-6 form-group mb-4">
                <label for="facebook" class="font-weight-bold">Facebook</label>
                <input type="text" name="facebook" value="{{ $userDetails->facebook }}" class="form-control" id="facebook" placeholder="Facebook profile link" oninput="validateForm()">
                @if($errors->has('facebook'))
                <div class="alert alert-danger">
                  <p>Please enter a valid URL.{{ $errors->first('facebook') }}</p>
                </div>
                @endif
                <small id="facebookHelp" class="form-text text-muted">Enter a valid URL.</small>
            </div>
              <div class="col-md-6 form-group mb-4">
                <label for="github" class="font-weight-bold">Github</label>
                <input type="text" name="github" value="{{ $userDetails->github }}" class="form-control" id="github" placeholder="GitHub profile link" oninput="validateForm()">
                @if($errors->has('github'))
                <div class="alert alert-danger">
                  <p>Please enter a valid URL.{{ $errors->first('github') }}</p>
                </div>
                @endif
                <small id="githubHelp" class="form-text text-muted">Enter a valid URL.</small>
              </div>
            </div>
            <div class="form-group mb-4">
              <label for="linkedin" class="font-weight-bold">LinkedIn</label>
              <input type="text" name="linkedin" value="{{ $userDetails->linkedin }}" class="form-control" id="linkedin" placeholder="LinkedIn profile link" oninput="validateForm()">
              @if($errors->has('linkedin'))
              <div class="alert alert-danger">
                  <p>Please enter a valid URL.{{ $errors->first('linkedin') }}</p>
              </div>
              @endif
              <small id="linkedinHelp" class="form-text text-muted">Enter a valid URL.</small>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
              <button type="submit" name="submit" class="btn btn-primary btn-lg" id="submitButton" style="padding: 10px 40px; font-weight: bold;">Update Profile</button>
            </div>
          </form>
        </div>
      </div>

      <script>
        function validateForm() {
          const bio = document.getElementById('bio');
          const facebook = document.getElementById('facebook');
          const github = document.getElementById('github');
          const linkedin = document.getElementById('linkedin');
          const submitButton = document.getElementById('submitButton');
          const bioHelp = document.getElementById('bioHelp');

          let isValid = true;

          // Bio length validation
          if (bio.value.length > 1000) {
            bio.style.borderColor = 'red';
            bioHelp.style.color = 'red';
            isValid = false;
          } else {
            bio.style.borderColor = '#ced4da';
            bioHelp.style.color = '#6c757d';
          }

          // URL validation
          const urlPattern = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([/\w .-]*)*\/?$/;
          const fields = [facebook, github, linkedin];
          fields.forEach(field => {
            const helpText = document.getElementById(field.id + 'Help');
            if (field.value && !urlPattern.test(field.value)) {
              field.style.borderColor = 'red';
              helpText.style.color = 'red';
              isValid = false;
            } else {
              field.style.borderColor = '#ced4da';
              helpText.style.color = '#6c757d';
            }
          });

          // Enable or disable submit button
          submitButton.disabled = !isValid;
        }

        // Initial validation on page load
        validateForm();
      </script>


</div>
</section>
@endsection
