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
                        <tr>
                            <th>
                                Footer Description
                            </th>
                            <td>
                                {{ $webinfo->footerDesc }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</div>
@endsection
