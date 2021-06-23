@extends('app')
@section('content')
    <div class="btn-toolbar mb-2 mb-md-0">
            <table class="table table-bordered">
              <tbody>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th width="280px">Actions</th>
                  </tr>
                  @foreach ($products as $prod)
                   <tr>
                      <td>{{$prod->id}}</td>
                      <td>{{$prod->Name}}</td>
                      <td>{{$prod->price}}</td>
                      <td>{{$prod->Quantity }}</td>
                      <td>
                          <form action="{{url('edit2/'.$prod->id)}}" method="post">
                             @csrf
                            @method('PUT')
                         <button class="btn btn-info" href="">Edit</button>
                        </form>
                        <form action="{{url('destroy/'.$prod->id)}}" method="post">
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
