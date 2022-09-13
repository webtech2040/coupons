@extends("layouts.admin_layout")


@section("content")


<div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Coupon</h4>
                            </div>



 @if(session('msg'))

                         
                          

                         






                            <div class="alert alert-success alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>  
                                    <strong>Success!</strong>   {{session('msg')}}
                                    
                                </div>


 @endif




                            <div class="card-body">


                         








                                <div class="basic-form">











                                    <form action="{{route('saveCoupon')}}" method="POST" enctype="multipart/form-data">


                                        @csrf

                                        <div class="mb-3">
                                            <input type="text" class="form-control input-default " name="coupon_title"  placeholder="Enter Coupon Title">
                                        </div>


                                         @error('product_name')

                                         
                                             <div class="alert alert-danger">{{ $message }}</div>
                                         

                                         @enderror



                                         <div class="mb-3">

  <label>Coupon Discription</label>
 <div class="card-body custom-ekeditor">
                                

   <textarea name="coupon_dics" id="ckeditor">
       

   </textarea>
      

          






     



   </div>
</div>









                                           <div class="mb-3">

                                            <label>Select Brands Name</label>
                                           
                                           <select name="brand_id" class="form-control input-default ">
                                              


                                           @foreach($brands as $brand)

                                              <option value="{{$brand->id}}"> {{$brand->brandName}} </option>

                                              @endforeach






                                           </select>


                                            </div>


                                        







                                        <div class="mb-3">
                                            <input type="text" name="coupon_url" class="form-control input-rounded" placeholder="Enter Coupon Url">
                                        </div>


    @error('product_price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror


                                        <div class="mb-3">
                                            <input type="text" name="coupon_code" class="form-control input-rounded" placeholder="Enter Coupon Code">
                                        </div>


                                        @error('product_status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror




                                        <div class="mb-3">
                                            <input type="date" name="expire_date" class="form-control input-rounded" placeholder="Enter Date ">
                                        </div>


                                        @error('product_status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

 




<div class="mb-3">
    <input type="text" name="discount" placeholder="Enter Discount" class="form-file-input form-control">
</div>


 @error('brandImage')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror



  <div class="mb-3">
        
        <select name="type" class="form-control input-default ">
            

        <option>Coupon</option>
        <option>Deal</option>

        </select>



  </div>


     <div class="mb-3">
         <input type="text" name="status" class="form-control input-rounded" placeholder="Enter brand Status ">
     </div>

 












     

























                                       <div class="mb-3">
                                            <input type="submit"  class="form-control input-rounded" value="Add Product">
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                </div>

</div>
</div>


@endsection