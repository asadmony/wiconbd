@extends('layouts.adminlayout')
@section('content')
<h1 class="mt-4">Categories</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">Messages</li>
</ol>
<div class="container">
    <div class="header">
        <h2>All Messages </h2>
        <hr>
    </div>
    <div class="" style="">
        <x-alert></x-alert>
        <div class="col-xs-10">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Option</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($messages as $message)
                        <tr>
                            <td class="text-center">{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->message }}</td>
                            <td>
                                <div class="p-2">
                                    <a class="btn btn-danger " href="" onclick="event.preventDefault();
                                    if(confirm('Are you sure to delete?')){
                                        document.getElementById('form-delete-{{ $message->id }}')
                                        .submit()
                                    }"> <i class="fa fa-trash"></i> Delete</a>
                                    <form style="display: none;" id="form-delete-{{ $message->id }}" method="POST" action="{{ route('admin.deletemsg', $message->id) }}">
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
