@extends('layouts.admin')
@section('content')


<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
            @if(Session::has('error'))
               <div class="alert alert-danger">
                   {{Session::get('error')}}
               </div>
              @endif
            @if(Session::has('delete'))
               <div class="alert alert-success">
                   {{Session::get('delete')}}
               </div>
              @endif
          <h5 class="card-title mb-4 d-inline">Job Applications</h5>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">cv</th>
                <th scope="col">email</th>
                <th scope="col">job_id</th>
                <th scope="col">job_title</th>
                <th scope="col">company</th>
                <th scope="col">delete</th>
                <th scope="col">video</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($apps as $app)

                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><a class="btn btn-success" href="{{asset('/assets/cvs/'.$app->cv.'')}}">{{$app->cv}}</a></td>
                    <td><a class="btn btn-primary" href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $app->email }}" target="_blank">{{$app->email}}</a></td>
                    <td><a class="btn btn-success" href="{{route('single.job',$app->job_id)}}">Go to the job page</a></td>
                    <td>{{$app->job_title}}</td>
                    <td>{{$app->company}}</td>
                    <td><a href="{{route('delete.apps',$app->id)}}" class="btn btn-danger  text-center ">delete</a></td>
                    <td><a href="{{asset('/assets/videos_users/'.$app->video.'')}}" class="btn btn-danger  text-center ">video</a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
