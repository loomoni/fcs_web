

@extends('layouts.master')

@section('titel', 'Slider | ')
@section('content')
    @include('partials.header')
    @include('partials.sidebar')

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Manage Grants</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Grants</li>
                <li class="breadcrumb-item active"><a href="#">Manage Grants</a></li>
            </ul>
        </div>
        <div class="">
            <a class="btn btn-primary" href="{{ url('grants/create') }}"><i class="fa fa-plus"> </i> Add New</a>
        </div>

        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif

        @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
        @endif

        <div class="row mt-2">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Description</th>
                                <th style="width: 11%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $count=0 ?>
                            @foreach( $data as $data)
                             <?php $count++ ?>
                                <tr>
                                    <td>{{ $count }} </td>
                                    <td>{!! str_limit(html_entity_decode(strip_tags($data->description)), 190, '...') !!}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ url('grants/edit', $data->id) }}"><i class="fa fa-edit" ></i></a>
                                        <a data-toggle="modal" data-target="#delete{{ $data->id }}" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i></a>
                                    </td> 
                                    @include('backend/grants/modals/delete')
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
                       
@endsection



@push('js')
    <script type="text/javascript" src="{{asset('/')}}js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{{asset('/')}}js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function deleteTag(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush
