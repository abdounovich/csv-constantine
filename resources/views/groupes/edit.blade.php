@extends('layouts.master')

@section('title', 'Clients')



@section('content')




@if (\Session::has('success'))
    <div class="alert  alert-success  text-dark text-right ">
        <ul>
            <li class="p-2">{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

@if (\Session::has('erreur'))
    <div class="alert  alert-danger  text-right ">
        <ul>
            <li class="p-2">{!! \Session::get('erreur') !!}</li>
        </ul>
    </div>
@endif

<div class="bg-dark p-2 m-2">

 <form  method="POST" action="{{ route('groupes.update',$groupe->id) }}">
    @csrf
    @method('PUT')



    <div class="p-2 text-right" >
     <label  class="h4 text-white m-2" for="fin" >إسم الفوج  :</label>
  
    <input class="form-control my-4  p-2 " value="{{$groupe->nom}}" type="text" name="nom" id="nom">


    

    <input class=" col col-12 btn btn-success text-center"   type="submit" value="حفظ التعديلات">
</div>
</form>
</div>






  




@stop
