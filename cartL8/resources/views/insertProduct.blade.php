@extends('layouts.app')
@section('content') 
            <div>
                <div style="text-align:center"> 
                    <form class="subform"  method="post" action="{{ route('addProduct') }}" enctype="multipart/form-data">
                    @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    <p>
                        <label for="name" class="label">Name</label>
                        <input type="text" name="name" id="name">
                    </p>
                    <p>
                        <label for="description" class="label">Description</label>
                        <input type="text" name="description" id="description">
                    </p>
                    <p>
                        <label for="price" class="label">Price</label>
                        <input type="number" name="price" id="price">
                    </p>
                    <p>
                        <label for="size" class="label">Size</label>
                        <input type="text" name="size" id="size">
                    </p>
                <p>
                    <label for="category" class="label">Category</label>
                    <br>
                        <select name="category" id="category" class="form-control">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                 </p>
                   
                    <p>
                        <label for="quantity" class="label">Quantity</label>
                        <input type="number" name="quantity" id="quantity">
                    </p>

                    <p>
                        <input type="file" class="form-control" name="product-image" value="">
                    </p>
                    <p>
                        <input type="submit" name="insert" value="Insert">
                    </p>
                    </form>
                </div>
            </div>
@endsection