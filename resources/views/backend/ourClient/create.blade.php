@extends('layouts.master')

@section('title', 'Our Client | ')
@section('content')
    @include('partials.header')
    @include('partials.sidebar')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i>Add Client</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Our Client</li>
                <li class="breadcrumb-item"><a href="#">Add Client</a></li>
            </ul>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="">
            <a class="btn btn-primary" href="{{ url('our-client') }}"><i class="fa fa-edit"></i> Manage Client</a>
        </div>
        <div class="row mt-2">

            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Add New Client</h3>
                    <div class="tile-body">
                        <form method="POST" action=""  enctype="multipart/form-data">
                            @csrf
                                <div class="form-group col-md-12">
                                    <label class="control-label">Website</label>
                                    <input name="website" class="form-control @error('website') is-invalid @enderror" type="text" placeholder="Enter Client Website Link">
                                    @error('website')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="control-label">Client Logo</label>
                                    <input name="logo" class="form-control @error('logo') is-invalid @enderror" type="file">
                                    @error('logo')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 align-self-end">
                                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Now</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection



