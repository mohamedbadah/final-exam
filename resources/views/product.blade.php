@extends('app')
@section('content')
<div class="btn-toolbar mb-2 mb-md-0">

            <div class="card-body">
                <form action="{{url('store2')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="name">Product Name:</label>
                      <input type="text" class="form-control" name="pName" />
                    </div>
                    <div class="form-group">
                      <label for="price">Product Category :</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="cat">
                        <option>Category 1</option>
                        <option>Category 1</option>
                        <option>Category 1</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price :</label>
                        <input type="text" class="form-control" name="pPrice" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity:</label>
                        <input type="text" class="form-control" name="pQty" />
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
@endsection

