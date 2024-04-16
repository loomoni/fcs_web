@extends('layouts.master')

@section('title', 'Grants | ')
@section('content')
    @include('partials.header')
    @include('partials.sidebar')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i>Grants</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Grants</li>
                <li class="breadcrumb-item"><a href="#">Add Grants</a></li>
            </ul>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="">
            <a class="btn btn-primary" href="{{ url('grants') }}"><i class="fa fa-edit"></i> Manage</a>
        </div>
        <div class="row mt-2">

            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">New Grants</h3>
                    <div class="tile-body">
                        <form method="POST" action=""  enctype="multipart/form-data">
                            @csrf
                          
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Description</label>
                                    {{-- <input name="description" class="form-control @error('description') is-invalid @enderror" type="text"> --}}
                                    <textarea type="text" name="description" class="summernotecontents"></textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 align-self-end">
                                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection



