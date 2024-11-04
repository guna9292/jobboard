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
            @if(Session::has('create'))
               <div class="alert alert-success">
                   {{Session::get('create')}}
               </div>
           @endif
            @if(Session::has('update'))
               <div class="alert alert-success">
                   {{Session::get('update')}}
               </div>
           @endif
            @if(Session::has('delete'))
               <div class="alert alert-success">
                   {{Session::get('delete')}}
               </div>
           @endif
          <h5 class="card-title mb-4 d-inline">Categories</h5>
         <a  href="{{route('create.categories')}}" class="btn btn-primary mb-4 text-center float-right">Create Categories</a>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">update</th>
                <th scope="col">delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($categories as $category)
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td><a  href="{{route('edit.categories',$category->id ) }}" class="btn btn-warning text-white text-center ">Update </a></td>
                <td><a href="{{route('delete.categories',$category->id ) }}" class="btn btn-danger  text-center ">Delete </a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
