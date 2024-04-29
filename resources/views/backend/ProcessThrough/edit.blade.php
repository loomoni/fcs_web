@extends('layouts.master')

@section('title', 'Process | ')
@section('content')
    @include('partials.header')
    @include('partials.sidebar')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i>Add Process</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Process</li>
                <li class="breadcrumb-item"><a href="#">Add Process</a></li>
            </ul>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="">
            <a class="btn btn-primary" href="{{ url('process') }}"><i class="fa fa-edit"></i> Manage Process</a>
        </div>
        <div class="row mt-2">

            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Add New Process</h3>
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
                                    @if ($data->image != null)
                                    <div class="form-group col-md-6" id="imageField">
                                        <label class="control-label">Update Image</label>
                                        <input name="image" class="form-control @error('image') is-invalid @enderror" type="file">
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div style="padding-top: 5px">
                                             <img height="50" width="50" src="/images/ProcessThrough/{{ $data->image }}">
                                        </div>
                                    </div>
                                    
                                @endif
                                </div>
                                
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Description</label>
                                    <textarea name="description" class="form-control  @error('description') is-invalid @enderror">{{ $data->description }}</textarea>
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



