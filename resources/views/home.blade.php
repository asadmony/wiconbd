@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row mt-4 justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @php
                    $productcount = App\Product::count();
                @endphp
                <div class="card-body">
                    Total Products: {{ $productcount }}
                </div>
                @php
                    $categorycount = App\Category::count();
                @endphp
                <div class="card-body">
                    Total Categories: {{ $categorycount }}
                </div>
            </div>
            @php
                $webinfo = App\WebInfo::first();
            @endphp
            <div class="card">
                <div class="card-body">
                    Maintenance mode:
                    @if ($webinfo->maintenance == 1)
                    <span class="alert alert-success"><strong>ON</strong></span>
                    <a href="" class="alert alert-danger" onclick="event.preventDefault();
                        document.getElementById('maintenancemode')
                        .submit()">OFF</a>
                    @else
                    <a href="" class="alert alert-success" onclick="event.preventDefault();
                        document.getElementById('maintenancemode')
                        .submit()">ON</a>
                    <span class="alert alert-danger"><strong>OFF</strong></span>
                    @endif

                    <form style="display: none;" id="maintenancemode" method="POST" action="{{ route('admin.maintenanceMode') }}">
                        @csrf
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Special Products</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Header</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Header</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Option</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($brands as $brand)
                            <tr>
                                <td class="text-center">
                                    <img class="img rounded" src="{{ asset($brand->brandlogo) }}" alt="{{ $brand->brandname }}" style="max-width: 160px; max-height: 160px">
                                </td>
                                <td>{{ $brand->brandname }}</td>
                                <td>
                                    <div class="p-2">
                                        <a class="btn btn-primary" href="{{ route('admin.editbrand',$brand->id) }}"> <i class="fa fa-edit"></i> Edit</a>
                                    </div>
                                    {{-- <div class="p-2">
                                        <a class="btn btn-danger " href="" onclick="event.preventDefault();
                                        if(confirm('Are you sure to delete?')){
                                            document.getElementById('form-delete-{{ $brand->id }}')
                                            .submit()
                                        }"> <i class="fa fa-trash"></i> Delete</a>
                                        <form style="display: none;" id="form-delete-{{ $brand->id }}" method="POST" action="{{ route('admin.deletebrand', $brand->id) }}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </div> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
