@extends('layouts.adminlayout')

@section('content')
   <h1 class="mt-4">Website information</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Informations</li>
                        </ol>
<div class="container">
        <div class="header">
            <h2>List of Informations <a href="{{ route('admin.editwebinfo', $webinfo->id) }}"><i class="fa fa-edit"></i></a></h2>
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
                        <tr>
                            <th>
                                Contact Us Description
                            </th>
                            <td>
                                {{ $webinfo->contactDesc }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Address
                            </th>
                            <td>
                                {{ $webinfo->address }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Google map iframe link
                            </th>
                            <td>
                                {{ $webinfo->gmapiframe }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Email
                            </th>
                            <td>
                                {{ $webinfo->email }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Mobile
                            </th>
                            <td>
                                {{ $webinfo->mobile }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Facebook link
                            </th>
                            <td>
                                {{ $webinfo->facebook }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Twitter link
                            </th>
                            <td>
                                {{ $webinfo->twitter }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Instagram link
                            </th>
                            <td>
                                {{ $webinfo->instagram }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Whatsapp Number
                            </th>
                            <td>
                                {{ $webinfo->whatsapp }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</div>
@endsection
