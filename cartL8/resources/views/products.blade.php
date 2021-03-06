@extends('layouts.app')
@section('content') 
@if(Session::has('success'))           
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>       
@endif 
    

<div class="col-md-12">
            <div class="card border-0">
                <h5 class="card-title">Products</h5>                   
                 <div class="row">
                @foreach($products as $product)              
                    <div class="col-sm-4">
                        <div class="card h-100">
                            <div class="card-body">
                                    <h5 class="card-title">{{$product->name}}</h5>                            
                                     <a href="{{ route('product.detail', ['id' => $product->id]) }}"><img src="{{ asset('images/') }}/{{$product->image}}" alt="" class="img-fluid"></a>
                                     <div class="card-heading">RM {{$product->price}} <button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
                                    </div>
                            </div>
                        </div>
                    
                    </div>
                   
                @endforeach          
</div>
<div class="text-center">
	{{ $products->links() }}
 </div>    
@endsection