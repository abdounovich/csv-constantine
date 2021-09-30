@extends('layouts.master')

@section('title', 'Clients')



@section('content')




@if (\Session::has('success'))
    <div class="alert   alert-success  text-dark  text-right ">
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

<div class="bg-dark text-right p-2 m-2 rounded">

    <form  method="POST" action="{{ route('creneaus.update',$creneau->id) }}">
        @csrf


<div class="row p-2">

    <div class="col col-2  ">
        <label  class="h4 text-white" for="fin" >إسم الفوج  :</label>
    </div>

    <div class="col col-10 ">
        <input class="  form-control  " value="{{$creneau->nom}}" type="text" name="nom" id="nom">
    </div>

</div>



<div class="row p-2">

    <div class="col col-2 ">
        <label  class="h4 text-white" for="fin" >اليوم  :</label>
    </div>

    <div class="col col-10 ">
        @php
            $jours=array();
            $jours=['الجمعة','السبت','الأحد','الإثنين','الثلاثاء','الأربعاء','الخميس'];
        @endphp
        <select name="jour" class="custom-select form-group"  >
            @foreach ($jours as $jour)
            <option value="{{$jour}}">{{$jour}}</option>

            @endforeach
          </select>
    </div>

</div>



<div class="row p-2">

    <div class="col col-2 ">
     <label  class="h4 text-white" for="debut" >البداية   :</label>
    </div>
    <div class="col col-10">
       <input type="time" class="form-control" name="debut" value="{{$creneau->debut}}" id="debut"></div>

</div>



<div class="row p-2">

    <div class="col col-2 ">
     <label  class="h4 text-white" for="debut" >النهاية   :</label>
    </div>
    <div class="col col-10">
       <input type="time" name="fin" value="{{$creneau->fin}}" class="form-control" id="fin"></div>

</div>



<div class="row p-2">

    <div class="col col-2 ">
     <label  class="h4 text-white" for="fin" >المجموعة   :</label>
    </div>
    <div class="col col-10 ">
        <select name="groupe" class="custom-select form-group" aria-label="Default select example">
            @foreach ($groupes as $groupe)
            <option value="{{$groupe->id}}">{{$groupe->nom}}</option>

            @endforeach
          </select></div>

</div>







    <input class="  btn btn-success col col-12 p-2"   type="submit" value="حفظ التعديلات">

</form>


</div>






    





@stop
