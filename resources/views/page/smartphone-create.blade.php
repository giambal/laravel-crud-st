@extends('layout.layout-smartphone')

@section('content')

<div class="title">
  <div class="">

  </div>
  <div class="">
    <h1>Add New Smartphone</h1>

  </div>
  <div class="link">

    <a href="{{route('st.index')}}">torna indietro</a>
  </div>
</div>
<div class="container">

  <form action="{{ route('st.store')}}" method="post">
    @csrf
    <div class="formDiv">

      <label for="brand">Brand</label><br>
      <input type="text" name="brand" value="">
    </div>
    <div class="formDiv">

      <label for="model">Model</label><br>
      <input type="text" name="model" value="">
    </div>
    <div class="formDiv">

      <label for="display">Display</label><br>
      <input type="text" name="display" value="">
    </div>
    <div class="formDiv">

      <label for="mem_ext">Mem ext</label><br>
      <input type="text" name="mem_ext" value="">
    </div>
    <button type="submit" name="">Save the smartphone</button>
  </form>
</div>

@stop
