@extends('layout.layout-smartphone')

@section('content')


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

        <label for="mem_ext">Max speed</label><br>
        <input type="text" name="mem_ext" value="">
      </div>
      <button type="submit" name="button">create</button>
  </form>

@stop
