@extends('app')
@section('content')
<div class="btn-toolbar mb-2 mb-md-0">
            <table class="table table-bordered">
              <tbody>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th width="280px">Actions</th>
                  </tr>
                  @foreach ($categorys as $cat )
                  <tr>
                      <td>{{$cat->id}}</td>
                      <td>{{$cat->Name}}</td>
                      <td>
                          <form action="{{url('edit/'.$cat->id)}}" method="post">
                            @csrf
                            @method('PUT')
                        <button class="btn btn-info">Edit</button>
                        </form>
                        <form action="{{url('destroy/'.$cat->id)}}" method="post">
                            @csrf
                            @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
        </div>


@endsection
