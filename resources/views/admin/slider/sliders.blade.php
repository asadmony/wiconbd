@extends('layouts.adminlayout')
@section('content')
    <h1 class="mt-4">Sliders</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Sliders</li>
                        </ol>
<div class="container">
        <div class="header">
            <h2>List of Sliders <a href="{{ route('admin.newslider') }}"><i class="pe-7s-plus"></i></a></h2>
            <hr>
        </div>
        <div class="" style="">
            <x-alert></x-alert>
            <div class="col-xs-10">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Details</th>
                                <th>Button</th>
                                <th>Button Name</th>
                                <th>Button Link</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Details</th>
                                <th>Button</th>
                                <th>Button Name</th>
                                <th>Button Link</th>
                                <th>Option</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($sliders as $slider)
                            <tr>
                                <td class="text-center">
                                    <img class="img rounded" src="{{ asset($slider->image) }}" alt="{{ $slider->title }}" style="max-width: 160px">
                                </td>
                                <td>{{ $slider->title }}</td>
                                <td>{{ $slider->details }}</td>
                                <td>
                                    <div>
                                        <slider-button button="{{ $slider->button }}" slider="{{ $slider->id }}"></slider-button>
                                    </div>
                                </td>
                                <td>{{ $slider->buttonname }}</td>
                                <td>{{ $slider->buttonlink }}</td>
                                <td>
                                    <div class="p-2">
                                        <a class="btn btn-primary" href="{{ route('admin.editslider',$slider->id) }}"> <i class="fa fa-edit"></i> Edit</a>
                                    </div>
                                    <div class="p-2">
                                        <a class="btn btn-danger " href="" onclick="event.preventDefault();
                                        if(confirm('Are you sure to delete?')){
                                            document.getElementById('form-delete-{{ $slider->id }}')
                                            .submit()
                                        }"> <i class="fa fa-trash"></i> Delete</a>
                                        <form style="display: none;" id="form-delete-{{ $slider->id }}" method="POST" action="{{ route('admin.deleteslider', $slider->id) }}">
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
