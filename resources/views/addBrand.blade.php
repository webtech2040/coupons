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
                                <h4 class="card-title">Add Brand</h4>
                            </div>



 @if(session('msg'))

                         
                          

                         






                            <div class="alert alert-success alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>  
                                    <strong>Success!</strong>   {{session('msg')}}
                                    
                                </div>


 @endif




                            <div class="card-body">


                         








                                <div class="basic-form">











                                    <form action="{{route('saveBrand')}}" method="POST" enctype="multipart/form-data">


                                        @csrf

                                        <div class="mb-3">
                                            <input type="text" class="form-control input-default " name="brandName"  placeholder="Enter brand Name">
                                        </div>


                                         @error('product_name')

                                         
                                             <div class="alert alert-danger">{{ $message }}</div>
                                         

                                         @enderror





                                           <div class="mb-3">

                                            <label>Select Category Name</label>
                                           
                                           <select name="cat_id" class="form-control input-default ">
                                              


                                           @foreach($cats as $cat)

                                              <option value="{{$cat->id}}"> {{$cat->name}} </option>

                                              @endforeach






                                           </select>


                                            </div>


                                        







                                        <div class="mb-3">
                                            <input type="text" name="brandUrl" class="form-control input-rounded" placeholder="Enter brand Url">
                                        </div>


    @error('product_price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror


                                        <div class="mb-3">
                                            <input type="text" name="brandStatus" class="form-control input-rounded" placeholder="Enter brand Status">
                                        </div>


                                        @error('product_status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

 




<div class="mb-3">
    <input type="file" name="brandImage" class="form-file-input form-control">
</div>


 @error('brandImage')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror



  <div class="mb-3">
         <input type="text" name="brandTitle" class="form-control input-rounded" placeholder="Enter brand Title ">
  </div>


     <div class="mb-3">
         <input type="text" name="brandMeta" class="form-control input-rounded" placeholder="Enter brand Meta ">
     </div>

 <div class="mb-3">

  <label>Brand Discription</label>
 <div class="card-body custom-ekeditor">
                                

   <textarea name="brandsdis" id="ckeditor">
       

   </textarea>
            






     



   </div>
</div>




<div class="mb-3">

  <label>Brand FAQS NO 1</label>
 <div class="card-body custom-ekeditor">
                                

   <textarea name="fq1" id="fq1" rows="5" cols="100">
       

   </textarea>
            






     



   </div>
</div>


<div class="mb-3">

  <label>Brand FAQS NO 2</label>
 <div class="card-body custom-ekeditor">
                                

   <textarea name="fq2" id="fq2" rows="5" cols="100">
       

   </textarea>
            






     



   </div>
</div>



<div class="mb-3">

  <label>Brand FAQS NO 3</label>
 <div class="card-body custom-ekeditor">
                                

   <textarea name="fq3" id="fq3" rows="5" cols="100">
       

   </textarea>
            






     



   </div>
</div>



<div class="mb-3">

  <label>Brand FAQS NO 4</label>
 <div class="card-body custom-ekeditor">
                                

   <textarea name="fq4" id="fq4" rows="5" cols="100">
       

   </textarea>
            






     



   </div>
</div>



<div class="mb-3">

  <label>Brand FAQS NO5</label>
 <div class="card-body custom-ekeditor">
                                

   <textarea name="fq5" id="fq5" rows="5" cols="100">
       

   </textarea>
            






     



   </div>
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