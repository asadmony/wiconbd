@extends('layouts.adminlayout')
@section('content')
    <h1 class="mt-4">Products</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Products</li>
    </ol>
<div class="container-fluid">
        <div class="header">
            <h2>List of Products <a href="{{ route('admin.newproduct') }}"><i class="pe-7s-plus"></i></a></h2>
            <hr>
        </div>
        <div class="" style="">
            <x-alert />
            <div class="col-xs-12">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Product Code</th>
                                <th>Product Name</th>
                                <th width="30%">Details</th>
                                <th width="15%">Features</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th width="8%">Price</th>
                                <th width="3%">Discount%</th>
                                <th width="3%">Discount Price</th>
                                <th width="3%">Quantity</th>
                                <th width="3%">Option</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Product Code</th>
                                <th>Product Name</th>
                                <th>Details</th>
                                <th>Features</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Price</th>
                                <th>Discount%</th>
                                <th>Discount Price</th>
                                <th>Quantity</th>
                                <th>Option</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->productcode }}</td>
                                <td>{{ $product->productname }}</td>
                                <td>{{ $product->description }}</td>
                                <td class="">
                                    @foreach ($product->features as $feature)
                                        <ul class="list-inline py-0 my-0">
                                            <li class="list-inline-item">
                                                <a class="" style="color: red" href="" onclick="event.preventDefault();
                                if(confirm('Are you sure to delete this feature?')){
                                    document.getElementById('form-deletefeature-{{ $feature->id }}')
                                    .submit()
                                }"> <i class="fa fa-times"></i></a>
                                <form style="display: none;" id="form-deletefeature-{{ $feature->id }}" method="POST" action="{{ route('admin.deleteproductfeature', $feature->id) }}">
                                    @csrf
                                    @method('delete')
                                </form>
                                            </li>
                                                    <li class="list-inline-item">
                                                       <i> {{ $feature->featurename }} : </i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        {{ $feature->featurevalue }}
                                                    </li>
                                                </ul>
                                            @endforeach
                                        <div class="text-center pt-1">
                                            <a class="btn btn-primary btn-sm" href="{{ route('admin.newproductfeature', $product->id) }}">add features</a>
                                        </div>
                                </td>
                                <td>{{ $product->category }}</td>
                                <td>{{ $product->brand }}</td>
                                <td> &#2547 {{ $product->price }}</td>
                                <td class="text-center">
                                    <div class=""> {{ $product->discount }}%</div>
                                    <div class="py-2">
                                        <a class="btn btn-info btn-sm" href="#" data-target="#discount" onClick="makediscount('{{ $product->id }}',{{ $product->price }},'{{ $product->productcode }}');" data-toggle="modal"> <i class="pe-7s-cash"></i> Set</a>
                                    </div>
                                    @if ($product->discount > 0)
                                    <a class="btn btn-danger btn-sm" href="" onclick="event.preventDefault();
                                    if(confirm('Are you sure to remove discount?')){
                                        document.getElementById('form-remove-discount-{{ $product->id }}')
                                        .submit()
                                    }"> <i class="fa fa-trash"></i> Remove</a>
                                    <form style="display: none;" id="form-remove-discount-{{ $product->id }}" method="POST" action="{{ route('admin.removediscount', $product->id) }}">
                                        @csrf
                                        @method('put')
                                    </form>
                                    @endif
                                </td>
                                <td> &#2547 {{ $product->discountprice }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>
                                    <div class=" text-center p-2">
                                        <a class="btn btn-info btn-sm" href="{{ route('admin.productimages',$product->id) }}"> <i class="pe-7s-photo"></i> Images</a>
                                    </div>
                                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-cog fa-fw"></i> options </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                        <product-available available="{{ $product->available }}" product="{{ $product->id }}"></product-available>
                                        <product-visibility visibility="{{ $product->visibility }}" product="{{ $product->id }}"></product-visibility>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('admin.editproduct',$product->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                        <a class="dropdown-item" href="" onclick="event.preventDefault();
                                        if(confirm('Are you sure to delete?')){
                                            document.getElementById('form-delete-{{ $product->id }}')
                                            .submit()
                                        }"> <i class="fa fa-trash"></i> Delete</a>
                                        <form style="display: none;" id="form-delete-{{ $product->id }}" method="POST" action="{{ route('admin.deleteproduct', $product->id) }}">
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
<div class="modal fade" id="discount" tabindex="-1">
    <!-- content will come from js function  -->
  </div>
  <script>
  function makediscount(id,price,code){
    var price = parseInt(price);
    var id = parseInt(id);
      var data = '<div class="modal-dialog">'+
    '<div class="modal-content">'+
      '<div class="modal-header">'+
        '<button class="close" data-dismiss="modal" type="button">×</button>'+
      '</div>'+
      '<div class="modal-body">'+
          '<div class="rows">'+
          '<h2>Discount for : '+code+'</h2>'+
          '</div>'+
          '<div class="rows">'+
            '<form action="/admin/product/'+id+'/setdiscount" method="POST">'+
            '@csrf'+
            '@method("put")'+
        '<div class="form-group">'+
                '<lebel for="discount">Discount</lebel>'+
        '<div class="input-group">'+
                '<input class="form-control disper" type="number" onChange="calculate(this.value,'+price+')" id="discount" name="discount" value="0.0" step="any" min="0" max="100">'+
                '<span class="input-group-addon px-2 pt-1 border">'+
                    '<i>%</i>'+
                  '</span>'+
          '</div>'+
          '</div>'+
        '<div class="form-group">'+
                '<lebel for="discountprice">Price after Discount</lebel>'+
        '<div class="input-group">'+
                '<span class="input-group-addon px-3 pt-1 border">'+
                    '<i>&#2547</i>'+
                  '</span>'+
                '<input class="form-control disper" type="text" id="discountprice" name="discountprice" value="'+price+'" readonly="true">'+
          '</div>'+
          '</div>'+
          '<button class="form-control disper" type="submit">Save</button>'+
            '</form>'+
        '</div>'+
      '</div>'+
      '<div class="modal-footer">'+
        '<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>'+
      '</div>'+
    '</div>'+
  '</div>';
      $("#discount").html(data);
      }
      function calculate(discount,price){
        if (discount > 0 && discount <101) {
        var dis = discount / 100;
        var disprice = price * dis;
        var discountprice = price - disprice;
        console.log(discountprice);
        document.getElementById("discountprice").value = parseInt(discountprice);
        }
      }
  </script>
@endsection

