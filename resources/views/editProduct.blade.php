@extends('app')
@section('content')
<div class="btn-toolbar mb-2 mb-md-0">

            <div class="card-body">
                <form action="{{url('update2/'.$pro->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                      <label for="name">Product Name:</label>
                      <input type="text" class="form-control" name="pName" value="{{$pro->Name}}">
                    </div>
                    <div class="form-group">
                      <label for="price">Product Category :</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="cat" value="{{$pro->category}}">
                        <option>Category 1</option>
                        <option>Category 1</option>
                        <option>Category 1</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price :</label>
                        <input type="text" class="form-control" name="pPrice" value="{{$pro->price}}" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity:</label>
                        <input type="text" class="form-control" name="pQty" value="{{$pro->Quantity }}" />
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
@endsection

