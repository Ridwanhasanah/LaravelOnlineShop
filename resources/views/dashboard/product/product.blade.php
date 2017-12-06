@extends('dashboard.masterdashboard')
@section('content')
{{-- =================================================================== --}}
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Products</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>SKU</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($products as $product)

                                    <tr class="odd gradeX">
                                        <td>
                                            <img src="{{asset($product->image)}}" height="50" width="70" style="float: left; padding-left: 10px; padding-right: 10px;">
                                            <b><a href="{{route('editProduct',$product->id)}}">{{ $product->name }}</a></b><br>
                                            <small>
                                                    <a style="float: left;" href="{{route('editProduct',$product->id)}}">Edit | </a>
                                                    <form style="float: left; color: red;" class="" action="{{route('deleteProduct', $product->id)}}" method="post">
                                                          {{ csrf_field() }}
                                                          {{ method_field('DELETE') }}
                                                          <a href="">
                                                            &nbsp;Delete | 
                                                            <input type="hidden">
                                                          </a>
                                                      </form>
                                                      <a style="float: left;" href="#">&nbsp;View</a>
                                            </small>

                                        </td>
                                        <td>{{$product->stock}}</td>
                                        <td>Rp. {{$product->price}}</td>
                                        <td class="center">Rp. {{$product->discount}}</td>
                                        <td class="center">{{$product->sku}}</td>
                                    </tr>

                                    @endforeach

                                    
                                </tbody>
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>SKU</th>
                                    </tr>
                                </thead>
                            </table>
                            {!! $products->render() !!}
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
{{-- ====================================================== --}}
@endsection