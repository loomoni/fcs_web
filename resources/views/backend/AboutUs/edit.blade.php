@extends('layouts.master')

@section('title', 'About Us | ')
@section('content')
    @include('partials.header')
    @include('partials.sidebar')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i>Add About Us</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">About Us</li>
                <li class="breadcrumb-item"><a href="#">Add About Us</a></li>
            </ul>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="">
            <a class="btn btn-primary" href="{{ url('about-us') }}"><i class="fa fa-edit"></i> Manage About Us</a>
        </div>
        <div class="row mt-2">

            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Add New About Us</h3>
                    <div class="tile-body">
                        <form method="POST" action=""  enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="control-label">Title</label>
                                    <input name="title" class="form-control @error('title') is-invalid @enderror" type="text" value="{{ $data->title }}">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">Type</label>
                                    <select name="type" class="form-control" required="">
                                        <option>---Select Type---</option>
                                        <option value="About FCS">About FCS</option>
                                        <option value="Work Location">Work Location</option>
                                        {{-- <option value="CLARITY">CLARITY</option> --}}
                                    </select>
                                </div>
                               

                               
                            </div>
                            <div class="form-row">

                                @if ($data->image != null)
                                <div class="form-group col-md-12" id="imageField">
                                    <label class="control-label">Update Image</label>
                                    <input name="image" class="form-control @error('image') is-invalid @enderror" type="file">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div style="padding-top: 5px">
                                         <img height="50" width="50" src="/images/aboutUs/{{ $data->image }}">
                                    </div>
                                </div>
                                
                            @endif

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Description</label>
                                    {{-- <input name="description" class="form-control @error('description') is-invalid @enderror" type="text"> --}}
                                    <textarea type="text" name="description" class="summernotecontents">{{ $data->description }}</textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 align-self-end">
                                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection



