@extends("layouts.admin_layout")


@section("content")


<div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Element</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Product</h4>
                            </div>



 @if(session('msg'))

                         
                          

                         






                            <div class="alert alert-success alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>  
                                    <strong>Success!</strong>   {{session('msg')}}
                                    
                                </div>


 @endif




                            <div class="card-body">


                         








                                <div class="basic-form">











                                    <form action="{{route('edit_product',$data->id)}}" method="POST">


                                        @csrf

                                        <div class="mb-3">
            <input type="text" value="{{$data->product_name}}" class="form-control input-default " name="product_name"  placeholder="Enter Product Name">
                                        </div>


                                         @error('product_name')

                                         
                                             <div class="alert alert-danger">{{ $message }}</div>
                                         

                                         @enderror



                                        <div class="mb-3">
                                            <input type="text" value="{{$data->product_price}}" name="product_price" class="form-control input-rounded" placeholder="Enter Product Price">
                                        </div>


    @error('product_price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror


                                        <div class="mb-3">
                                            <input type="text" name="product_status" value="{{$data->product_status}}" class="form-control input-rounded" placeholder="Enter Product Status">
                                        </div>


                                        @error('product_status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

 

                                       <div class="mb-3">
                                            <input type="submit"  class="form-control input-rounded" value="Edit Product">
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                </div>

</div>
</div>


@endsection