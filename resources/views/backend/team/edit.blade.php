@extends('layouts.master')

@section('title', 'Team | ')
@section('content')
    @include('partials.header')
    @include('partials.sidebar')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i>Edit Team</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Team</li>
                <li class="breadcrumb-item"><a href="#">Edit Team</a></li>
            </ul>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="">
            <a class="btn btn-primary" href="{{ url('team') }}"><i class="fa fa-edit"></i> Manage Team</a>
        </div>
        <div class="row mt-2">

            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Edit Team</h3>
                    <div class="tile-body">
                        <form method="POST" action=""  enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="control-label">Name</label>
                                    <input name="name" class="form-control @error('name') is-invalid @enderror" type="text" value={{ $data->name }}>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">Position</label>
                                    <input name="position" class="form-control @error('position') is-invalid @enderror" type="text" value={{ $data->position }}>
                                    @error('position')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="control-label">Type</label>
                                    <select style="height: 45px" name="type" class="form-control" required="">
                                        <option value="Management" {{ $data->type == "Management" ? 'selected' : '' }}>Management</option>
                                        <option value="Board" {{ $data->type == "Board" ? 'selected' : '' }}>Board</option>
                                        <option value="Staff" {{ $data->type == 'Staff' ? 'selected' : '' }}>Staff</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">Update Image</label>
                                    <input name="image" class="form-control @error('image') is-invalid @enderror" type="file">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div style="padding-top: 5px">
                                        <img height="50" width="50" src="/images/team/{{ $data->image }}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 align-self-end">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection



