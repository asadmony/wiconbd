@extends('layouts.adminlayout')
@section('content')
    <h1 class="mt-4">Auto Code Generator</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Auto codes</li>
                        </ol>
<div class="container">
        <div class="header">
            <h2>List of codes</h2>
            <hr>
        </div>
        <div class="" style="">
            <x-alert></x-alert>
            <div class="col-xs-10">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Auto Code For</th>
                                <th>Prefix</th>
                                <th>Year</th>
                                <th>Suffix</th>
                                <th>Example</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Auto Code For</th>
                                <th>Prefix</th>
                                <th>Year</th>
                                <th>Suffix</th>
                                <th>Example</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($autos as $auto)
                            <tr>
                                <th>{{ $auto->autocodekey }}</th>
                                <td>{{ $auto->prefix }}</td>
                                <td>{{ date("Y") }}</td>
                                <td>{{ $auto->suffix }}</td>
                                <td>Code will be like : {{ $auto->prefix.date("Y").$auto->suffix }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('admin.editautocode',$auto->id) }}"> <i class="fa fa-edit"></i> Update</a>
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
