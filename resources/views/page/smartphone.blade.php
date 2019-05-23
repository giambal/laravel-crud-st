@extends('layout.layout-smartphone')

@section('content')

<div class="list">
  <table border="1px">
    @foreach($smartphones as $smartphone)

      <tr>
        <td>{{$smartphone->id}}</td>
        <td>{{$smartphone->brand}}</td>
        <td>{{$smartphone->model}}</td>
        <td>{{$smartphone->display}}</td>
        <td>{{$smartphone->mem_ext}}</td>
        <td><a class="link" href="#"><i class="fas fa-edit"></i></a></td>
        <td>
          <form class="" action="" method="post">
            @csrf
            @method('DELETE')
            <button class="del-butt" type="submit"><i class="fas fa-trash-alt"></i></button>
          </form>
        </td>
      </tr>

    @endforeach
  </table>

  <h1><a href="{{route('st.create')}}">create new</a></h1>
</div>
@stop
