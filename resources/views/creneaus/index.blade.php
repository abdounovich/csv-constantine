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

 <form  method="post" action="{{route('creneaus.store')}}">
    @csrf

<div class="row p-2">

    <div class="col col-2  ">
        <label  class="h4 text-white" for="fin" >إسم الحصة  :</label>
    </div>

    <div class="col col-10 ">
        <input class="  form-control  " type="text" name="nom" id="nom">
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
        <select name="jour" class="custom-select form-group" >
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
       <input type="time" class="form-control" name="debut" id="debut"></div>

</div>



<div class="row p-2">

    <div class="col col-2 ">
     <label  class="h4 text-white" for="debut" >النهاية   :</label>
    </div>
    <div class="col col-10">
       <input type="time" name="fin" class="form-control" id="fin"></div>

</div>



<div class="row p-2">

    <div class="col col-2 ">
     <label  class="h4 text-white" for="fin" >الفوج   :</label>
    </div>
    <div class="col col-10 ">
        <select name="groupe" class="custom-select form-group" aria-label="Default select example">
            @foreach ($groupes as $groupe)
            <option value="{{$groupe->id}}">{{$groupe->nom}}</option>

            @endforeach
          </select></div>

</div>







    <input class="  btn btn-success col col-12 p-2"   type="submit" value="إضافة">

</form>


</div>








@forelse ($groupes as $groupe)
    

@empty
    




@endforelse

<div class="m-2 p-2">
    <table class="table table-bordred bg-dark">
  
@foreach ($groupes as $groupe)
<tbody class="text-white text-center">
<tr>
        <td colspan="4" class="text-center bg-info text-white">{{$groupe->nom}}</td>

</tr>
 @foreach ($groupe->creanau as $creanau)
<tr>
   
       
    <td>
        {{$creanau->nom}}
            </td> 
            <td>
                {{$creanau->jour}} -> 
                   
                        {{$creanau->debut}} |  
                            {{$creanau->fin}}
                                
                            </td>   
                            <td ><a href="{{route('creneaus.edit',$creanau->id)}}"  class="btn btn-warning">تعديـــل</a></td>
                            <td>
                            <form action="{{route('creneaus.destroy',$creanau->id)}}" method="POST">
                                @csrf
                <input type="submit"  class="btn btn-danger" value="حذف">
                
                                @method('DELETE')
                            </form></td>
</tr> @endforeach
</tbody>
@endforeach


    




    </table>
</div>









    





@stop
