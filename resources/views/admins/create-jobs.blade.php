@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4 d-inline">Create Job</h5>

          <form class="p-4 p-md-5" action="{{route('store.jobs')}}" method="post" enctype="multipart/form-data">
            @csrf
            <!--job details-->

            <div class="form-group">
              <label for="job-id">Job ID</label>
              <input type="text" name="job_id" class="form-control" id="job-id" placeholder="Eg. 123456789">
            </div>

            <div class="form-group">
              <label for="job-title">Job Title</label>
              <input type="text" name="job_title" class="form-control" id="job-title" placeholder="Eg. Product Designer, Web Developer">
            </div>


            <div class="form-group">
              <label for="job-region">Job Region</label>
              <input type="text" name="job_region" class="form-control" id="job-region" placeholder="Eg. Dhaka, Chittagong or simply Anywhere" value="{{ old('job_region', 'Not specified') }}">
            </div>
            <div class="form-group">
              <label for="job-region">Company</label>
                <input type="text" name="company" class="form-control" id="job-company" placeholder="Eg. Google, Facebook, Amazon, Microsoft, etc">
            </div>
            <div class="form-group">
                <label for="job-type">Job Type</label>
                <select name="job_type" class="selectpicker border rounded form-control" id="job-type" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job type">
                    <option value="Regular Employee">Regular Employee</option>
                    <option value="Part time">Part time</option>
                </select>
            </div>

            <div class="form-group">
              <label for="job-location">Vacancy</label>
              <input name="vacancy" type="text" class="form-control" id="job-vacancy" placeholder="e.g. 3">
            </div>
            <div class="form-group">
              <label for="job-type">Experience</label>
              <input type="text" name="experience" class="form-control" id="job-experience" placeholder="e.g. 1-3 years">
            </div>
            <div class="form-group">
              <label for="job-type">Salary</label>
              <input type="text" name="salary" id="job-salary" placeholder="Enter your CTC Eg.5-7 LPA or Simply mention Not yet Disclosed">
            </div>

            <div class="form-group">
              <label for="Gender">Gender</label>
              <select name="Gender" class="selectpicker border rounded form-control" id="job-type" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job type">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Any">Any</option>
            </select>
            </div>

            <div class="form-group">
              <label for="job-location">Application Deadline</label>
              <input name="application_deadline" type="date" class="form-control" id="job-application_deadline" placeholder="e.g. 20-12-2022">
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="">Job Description</label>
                <textarea name="jobdescription" id="" cols="30" rows="7" class="form-control" placeholder="Write Job Description... seperated by '-'"></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="">Responsibilities seperated by '-'</label>
                <textarea name="responsibilities" id="" cols="30" rows="7" class="form-control" placeholder="Write Responsibilities...seperated by '-'"></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="">Education & Experience seperated by '-'</label>
                <textarea name="education_experience" id="" cols="30" rows="7" class="form-control" placeholder="Write Education & Experience..."></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="">Other Benifits seperated by '-'</label>
                <textarea name="otherbenefits" id="" cols="30" rows="7" class="form-control" placeholder="Write Other Benefits..."></textarea>
              </div>
            </div>

            <!--company details-->



            <div class="form-group">
                <label for="job-location">Company Logo or image you wanna showcase</label>
                <input name="image" type="url" class="form-control" id="" placeholder="Enter a valid image URL" value="{{ old('image') }}">
            </div>

            <div class="form-group">
                <label for="job-type">Category</label>
                <select name="category" class="selectpicker border rounded form-control" id="" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Gender">
                    @foreach ($categories as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="job-application-url">If they must apply at your site</label>
                <input name="url" type="url" class="form-control" id="" placeholder="Enter a valid Job Application URL else ignore" value="{{ old('url') }}">
            </div>

            <div class="col-lg-4 ml-auto">
                <div class="row">
                  <div class="col-6">
                    <input type="submit" name="submit" class="btn btn-block btn-primary btn-md" style="margin-left: 200px;" value="Save Job">
                  </div>
                </div>
            </div>


          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
