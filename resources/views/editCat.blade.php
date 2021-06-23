@extends('app')
@section('content')
<div class="btn-toolbar mb-2 mb-md-0">

            <div class="card-body">
                <form action="{{url('update/'.$cat->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Category Name:</label>
                        <input type="text" class="form-control" name="product_name" / value="{{$cat->Name}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
@endsection
