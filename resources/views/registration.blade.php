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


<div class="text-right"><form action="{{route('registrations.destroy',$registration->id)}}" method="POST">
    
    @csrf
<input type="submit"  class="btn btn-danger text-right mr-2" value="  حذف المشترك ">

    @method('DELETE')
</form></div>
<div class="bg-dark p-2 m-2 text-right">

 <form  method="post" action="/registration/edit/{{$registration->id}}">
    @csrf



<div class="row m-2">

    <div class="col col-2 p-2  ">
        <label  class="h4 text-white" for="fin" >الإسم  :</label>
    </div>

    <div class="col col-10  p-2 ">
        <input class="  form-control ml-4 " value="{{$registration->prenom}}" type="text" name="prenom" id="prenom">
    </div>

</div>


<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >اللقب  :</label>
    </div>

    <div class="col col-10  p-2">
        <input class="  form-control ml-4 " value="{{$registration->nom}}" type="text" name="nom" id="nom">
    </div>

</div>



<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >تاريخ الميلاد </label>
    </div>

    <div class="col col-10  p-2">

<input type="date"  class="  form-control ml-4 " value="{{$registration->date_naissance}}" name="date_naissance" id="date_naissance">

    </div>

</div>





<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >العنوان</label>
    </div>

    <div class="col col-10  p-2">
        <input class="  form-control ml-4 " type="text" name="address" value="{{$registration->address}}" id="address">
    </div>

</div>









<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >الجنس </label>
    </div>

    <div class="col col-10  p-2">



            <select id="my-select" class="custom-select" name="sexe">
                <option value="ذكر">ذكر</option>
                <option value="أنثى">أنثى</option>

            </select>
    </div>

</div>

@php
        $age = date_diff(date_create($registration->date_naissance), date_create('now'))->y;

@endphp
@if ($age<15)
    

<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >إسم الأب</label>
    </div>

    <div class="col col-10  p-2">
        <input class="  form-control ml-4 "  value="{{$registration->nom_pere}}" type="text" name="nom_pere" id="nom_pere">
    </div>

</div>




<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >هاتف الأب  :</label>
    </div>

    <div class="col col-10  p-2">
        <input class="  form-control ml-4 " value="{{$registration->telephone_pere}}" type="text" name="telephone_pere" id="telephone_pere">
    </div>

</div>

@else
    
<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >الهاتف  :</label>
    </div>

    <div class="col col-10  p-2">
        <input class="  form-control ml-4 " value="{{$registration->telephone}}" type="text" name="telephone" id="telephone">
    </div>

</div>


@endif









<div class="row m-2" >

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" >الإيميل </label>
    </div>

    <div class="col col-10  p-2">


        <input class="  form-control ml-4 " value="{{$registration->email}}" type="text" name="email" id="email">
    </div>

</div>



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
        <label  class="h4 text-white" for="fin" > مدة الإشتراك بالأشهر </label>
    </div>

    <div class="col col-10  p-2">


        <input class="  form-control ml-4 " value="{{$registration->duree}}" type="number" name="duree" id="duree">
    </div>

</div>


<div class="row m-2">

    <div class="col col-2 p-2">
        <label  class="h4 text-white" for="fin" > المبلغ المدفوع  بالدينار </label>
    </div>

    <div class="col col-10  p-2">


        <input class="  form-control ml-4 " value="{{$registration->prix_abonnement}}" type="number" name="prix_abonnement" id="prix_abonnement">
    </div>

</div>


<div class="row m-2">

<div class="col col-2 p-2">
    <label  class="h4 text-white" for="fin" > المبلغ المتبقي بالدينار </label>
</div>

<div class="col col-10  p-2">


    <input class="  form-control ml-4 " type="number" value="{{$registration->prix_reste}}" name="prix_reste" id="prix_reste">
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
            
        <option value="{{$document->nom}}">{{$document->nom}}
       </option>
           @endforeach      
          
            </select>

    </div>

</div>



















<div class="row m-2">

    <div class="col col-2 p-2">
     <label  class="h4 text-white" for="fin" >الفوج   :</label>
    </div>
    <div class="col col-10 p-2">
        <select name="groupe" class="custom-select form-group">
            @foreach ($groupes as $groupe)
            <option  @if ($groupe->id==$registration->groupe->id)
                selected
            @endif value="{{$groupe->id}}">{{$groupe->nom}}</option>

            @endforeach
          </select></div>

</div>






























<div class="row m-2 ">


    <input class=" p-2 btn btn-primary col col-12"   type="submit" value="تعديل">
</div>
</form>


</div>









@stop
