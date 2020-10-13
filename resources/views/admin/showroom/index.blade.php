@extends('layouts.adminlayout')
@section('content')
    <h1 class="mt-4">Showrooms & DealerShops</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Showrooms</li>
                        </ol>
<div class="container">
        <div class="header">
            <h2>List of Showrooms <a href="{{ route('admin.newshowroom') }}"><i class="pe-7s-plus"></i></a></h2>
            <hr>
        </div>
        <div class="" style="">
            <x-alert></x-alert>
            <div class="col-xs-10">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Option</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($showrooms as $showroom)
                            <tr>
                                <td>{{ $showroom->title }}</td>
                                <td>{{ $showroom->name }}</td>
                                <td>{{ $showroom->address }}</td>
                                <td>{{ $showroom->phone }}</td>
                                <td>
                                    <div class="p-2">
                                        <a class="btn btn-primary" href="{{ route('admin.editshowroom',$showroom->id) }}"> <i class="fa fa-edit"></i> Edit</a>
                                    </div>
                                    <div class="p-2">
                                        <a class="btn btn-danger " href="" onclick="event.preventDefault();
                                        if(confirm('Are you sure to delete?')){
                                            document.getElementById('showroom-delete-{{ $showroom->id }}')
                                            .submit()
                                        }"> <i class="fa fa-trash"></i> Delete</a>
                                        <form style="display: none;" id="showroom-delete-{{ $showroom->id }}" method="POST" action="{{ route('admin.deleteshowroom', $showroom->id) }}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
@endsection
