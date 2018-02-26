@extends('dashboard.masterdashboard')
@section('content')

{{-- ====================================================================== --}}
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add new product</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Basic Form Elements
                </div>
                <div class="panel-body">
                    <div class="row">


                        <form action="{{route('addProduct.store')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label>Product name</label>
                                    <input name="name" value="{{old('name')}}" class="form-control">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="form-group">
                                    <label>Product Description</label>
                                    <textarea name="desc" rows="25" class="form-control" placeholder="Enter text" >{{old('desc')}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea name="short_desc" rows="5" class="form-control" placeholder="Enter text" >{{old('short_desc')}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input name="price" value="{{old('price')}}" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Discount Price</label>
                                    <input name="discount" value="{{old('discount')}}" type="number" class="form-control">
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group scrollcat">
                                        <label>Size</label>
                                        @foreach ($sizes as $size)
                                            
                                            <div class="checkbox">
                                                <label>
                                                    <input name="size_id" type="checkbox" value="{{$size->id}}">{{$size->name}}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group scrollcat">
                                        <label>Color</label>
                                        
                                        @foreach ($colors as $color)
                                            <div class="checkbox">
                                            <label>
                                                <input name="color_id" type="checkbox" value="">{{$color->name}}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>



                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-4">

                                <div class="form-group">
                                  <h1>Publish Product</h1>
                                  <input name="submit" id="submit" class="btn btn-primary" value="Publish" type="submit">
                                  <button type="reset" class="btn btn-default">Reset Button</button>
                                </div>
                                <div class="form-group">
                                    <label>Stock</label>
                                    <input name="stock" value="{{old('stock')}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>weight</label>
                                    <input name="weight" value="{{old('weight')}}" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>SKU</label>
                                    <input name="sku" value="{{old('sku')}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Width</label>
                                    <input name="widht" value="{{old('widht')}}" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Height</label>
                                    <input name="height" value="{{old('height')}}" type="number" class="form-control">
                                </div>
                                <div class="form-group scrollcat">
                                    <label>Category</label>
                                    @foreach ( $categories as $category)
                                        <div class="checkbox">
                                            <label>
                                                <input name="category_id" type="checkbox" value="">{{$category->name}}
                                            </label>
                                        </div>    
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <label>Thumbnail</label>
                                    <input type="file" name="image">
                                </div>
                                <div class="form-group">
                                    <label>Gallery Image</label>
                                    <input type="file" name="img_gallery">
                                </div>

                            </div>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->
{{-- ===================================================================== --}}

@endsection