@extends('layouts.master')

@section('title', 'About Us | ')
@section('content')
    @include('partials.header')
    @include('partials.sidebar')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i>Edit Values</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Values</li>
                <li class="breadcrumb-item"><a href="#">Edit Values</a></li>
            </ul>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="">
            <a class="btn btn-primary" href="{{ url('values') }}"><i class="fa fa-edit"></i> Manage Values</a>
        </div>
        <div class="row mt-2">

            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Edit Value</h3>
                    <div class="tile-body">
                        <form method="POST" action=""  enctype="multipart/form-data">
                            @csrf
                                <div class="form-group col-md-12">
                                    <label class="control-label">Name</label>
                                    <select name="type" class="form-control" required="">
                                        <option>---Select Type---</option>
                                        <option value="MISSION" {{ $data->type == "MISSION" ? 'selected' : '' }}>MISSION</option>
                                        <option value="VISION" {{ $data->type == "VISION" ? 'selected' : '' }}>VISION</option>
                                        {{-- <option value="CLARITY" {{ $data->type == 'CLARITY' ? 'selected' : '' }}>CLARITY</option> --}}
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label">Description</label>
                                    <textarea name="description" class="form-control  @error('description') is-invalid @enderror" placeholder="Enter Value Description">{{ $data->description }}</textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 align-self-end">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection



