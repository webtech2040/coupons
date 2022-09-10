@extends("layouts.admin_layout")

@section("content")


<div class="content-body">
            <div class="container-fluid">
        <div class="row page-titles">
          <ol class="breadcrumb">
           
          </ol>
                </div>


           <div class="row">
            


 @if(session('msg'))

                         
                          

                         






                            <div class="alert alert-success alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>  
                                    <strong>Success!</strong>   {{session('msg')}}
                                    
                                </div>


 @endif



 @if(session('msg_update'))

                         
                          

                         






                            <div class="alert alert-success alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>  
                                    <strong>Success!</strong>   {{session('msg_update')}}
                                    
                                </div>


 @endif



<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Brands Names</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:80px;"><strong>#</strong></th>
                                                <th><strong>Brand Image</strong></th>
                                                <th><strong>Brand Name</strong></th>
                                                <th><strong>Brand Status</strong></th>
                                                

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>



                                           @foreach($data as $d)








                                            <tr>
                                                <td><strong>{{$d->id}}</strong></td>
                                                <td>
                                                  
                                               

                            <img src="{{ asset('images/'.$d->brandImage) }}" width= '150' height='100' class="img img-responsive" />
 
 
                                                



                                                </td>
                                                <td>{{$d->brandName}}</td>
                                                <td>{{$d->brandStatus}}</td>

                                                <td>
               <a href="{{route('edit', $d->id)}}">                                    
             <button type="button" class="btn btn-secondary">Edit</button>--
        </a>


             <a href="{{route('delete_product', $d->id)}}">
             <button type="button" class="btn btn-danger">Delete</button>
             </a>



                                                </td>
                                                
                                            </tr>


                                            @endforeach
                      
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>












           </div>


        





















            </div>

 </div>










@endsection