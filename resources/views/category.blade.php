@extends('app')
@section('content')
<div class="btn-toolbar mb-2 mb-md-0">

            <div class="card-body">
                <form action="{{url('store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Category Name:</label>
                        <input type="text" class="form-control" name="product_name" />
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
@endsection
