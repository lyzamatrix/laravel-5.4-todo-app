<!-- edit.blade.php -->

@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{action('CRUDController@update', $id)}}">
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Task Title" name="title" value="{{$crud->title}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Task</label>
      <div class="col-sm-10">
        <textarea name="post" rows="8" cols="80" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Task Description">{{$crud->post}}</textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10"></div>
      <button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
    </div>
  </form>
</div>
@endsection