@extends('layouts.adminlayout')
@section('content')
    <h1 class="mt-4">Categories</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Categories</li>
                        </ol>
<div class="container">
        <div class="header">
            <h2>List of Categories <a href="{{ route('admin.newcategory') }}"><i class="pe-7s-plus"></i></a></h2>
            <hr>
        </div>
        <div class="" style="">
            <x-alert></x-alert>
            <div class="col-xs-10">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th>Category</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Logo</th>
                                <th>Category</th>
                                <th>Option</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($cats as $cat)
                            <tr>
                                <td class="text-center">
                                    <img class="img rounded" src="{{ asset($cat->catlogo) }}" alt="{{ $cat->catname }}" style="max-width: 160px">
                                </td>
                                <td>{{ $cat->catname }}</td>
                                <td>
                                    <div class="p-2">
                                        <a class="btn btn-primary" href="{{ route('admin.editcategory',$cat->id) }}"> <i class="fa fa-edit"></i> Edit</a>
                                    </div>
                                    <div class="p-2">
                                        <a class="btn btn-danger " href="" onclick="event.preventDefault();
                                        if(confirm('Are you sure to delete?')){
                                            document.getElementById('form-delete-{{ $cat->id }}')
                                            .submit()
                                        }"> <i class="fa fa-trash"></i> Delete</a>
                                        <form style="display: none;" id="form-delete-{{ $cat->id }}" method="POST" action="{{ route('admin.deletecategory', $cat->id) }}">
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
