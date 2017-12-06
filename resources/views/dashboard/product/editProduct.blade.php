@extends('dashboard.masterdashboard')
@section('content')
	
{{-- ====================================================================== --}}
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Product</h1>
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
                                

                                    <form action="{{route('updateProduct',$product->id)}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}

                                        <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Product name</label>
                                            <input name="name" value="{{$product->name}}" class="form-control">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Description</label>
                                            <textarea name="desc" rows="25" class="form-control" placeholder="Enter text" >{{$product->desc}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <textarea name="short_desc" rows="5" class="form-control" placeholder="Enter text" >{{$product->short_desc}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input name="price" value="{{$product->price}}" type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Discount Price</label>
                                            <input name="discount" value="{{$product->discount}}" type="number" class="form-control">
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
                                            <input name="stock" value="{{$product->stock}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>weight</label>
                                            <input name="weight" value="{{$product->weight}}" type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>SKU</label>
                                            <input name="sku" value="{{$product->sku}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Width</label>
                                            <input name="widht" value="{{$product->widht}}" type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Height</label>
                                            <input name="height" value="{{$product->height}}" type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Checkboxes</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 1
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 2
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 3 {{$product->short_desc}} 
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Thumbnail</label>
                                            <input type="file" name="image">
                                        </div>
                                         <div class="form-group">
                                            <p> {{$product->image}}</p>
                                            {{-- @if (count($filename1) != 0) --}}
                                                <img width="100" height="100" src="{{asset($product->image)}}">
                                            {{-- @endif --}}
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Gallery Image <p> {{$product->img_gallery}}</p></label>
                                            <input type="file" name="img_gallery">
                                        </div>
                                        <div class="form-group">
                                            
                                            {{-- @if (count($filename1) != 0) --}}
                                            <img width="100" height="100" src="{{asset($product->img_gallery)}}">
                                            {{-- @endif --}}
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