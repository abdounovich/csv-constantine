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

<div class="bg-dark p-2 m-2 text-right">

 <form  method="post" action="/registration2b">
    @csrf







<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >الهاتف  :</label>
    </div>

    <div class="col col-10  p-2">
        <input class="  form-control ml-4 " type="text" name="telephone" id="telephone">
    </div>

</div>





<div class="row m-2" >

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >الإيميل </label>
    </div>

    <div class="col col-10  p-2">


        <input class="  form-control ml-4 " type="text" name="email" id="email">
    </div>

</div>























<input type="hidden" name="nom" value="{{$nom}}">
<input type="hidden" name="prenom" value="{{$prenom}}">
<input type="hidden" name="date_naissance" value="{{$date_naissance}}">
<input type="hidden" name="address" value="{{$address}}">
<input type="hidden" name="sexe" value="{{$sexe}}">


<div class="row m-2 ">


    <input class=" p-2 btn btn-primary col col-12"   type="submit" value="إضافة">
</div>
</form>


</div>





@stop
