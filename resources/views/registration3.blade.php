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

 <form  method="post" action="{{route('registrations.store')}}">
    @csrf




<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >النقل</label>
    </div>

    <div class="col col-10  p-2">





            <select id="my-select" class="custom-select" name="transport">
                <option value="1"> نعم</option>
                <option value="0">لا </option>

            </select>
    </div>

</div>


<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" > المدة بالأشهر </label>
    </div>

    <div class="col col-10  p-2">


        <input class="  form-control ml-4 " type="text" name="duree" id="duree">
    </div>

</div>


<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" > المبلغ المدفوع  بالدينار </label>
    </div>

    <div class="col col-10  p-2">


        <input class="  form-control ml-4 " type="text" name="prix_abonnement" id="prix_abonnement">
    </div>

</div>


<div class="row m-2">

<div class="col col-2 p-2">
    <label  class="h4 text-white" for="fin" > المبلغ المتبقي بالدينار </label>
</div>

<div class="col col-10  p-2">


    <input class="  form-control ml-4 " type="text" name="prix_reste" id="prix_reste">
</div>

</div>


<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >الوثائق المقدمة  </label>
    </div>

    <div class="col col-10  p-2">
        <select multiple="multiple" class="form-control"    
        name="documents[]" id="documents[]" required>
        @foreach ($documents as $document)
            
        <option value="{{$document->nom}}">{{$document->nom}}</option>
           @endforeach      
          
            </select>

    </div>

</div>



















<div class="row m-2">

    <div class="col col-2 p-2">
     <label  class="h4 text-white" for="fin" >الفوج    :</label>
    </div>
    <div class="col col-10 p-2">
        <select name="groupe" class="custom-select form-group">
            @foreach ($groupes as $groupe)
            <option value="{{$groupe->id}}">{{$groupe->nom}}</option>

            @endforeach
          </select></div>

</div>



<input type="hidden" name="nom" value="{{$nom}}">
<input type="hidden" name="prenom" value="{{$prenom}}">
<input type="hidden" name="date_naissance" value="{{$date_naissance}}">
<input type="hidden" name="address" value="{{$address}}">
<input type="hidden" name="nom_pere" value="{{$nom_pere}}">
<input type="hidden" name="email" value="{{$email}}">
<input type="hidden" name="sexe" value="{{$sexe}}">

<input type="hidden" name="telephone" value="{{$telephone}}">
<input type="hidden" name="telephone_pere" value="{{$telephone_pere}}">


  



<div class="row m-2 ">


    <input class=" p-2 btn btn-primary col col-12"   type="submit" value="إضافة">
</div>
</form>


</div>








@stop
