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

 <form  method="post" action="{{route('groupes.store')}}">
    @csrf



    <div class="p-2 text-right" >
     <label  class="h4 text-white m-2" for="fin" >إسم الفوج  :</label>
  
    <input class="form-control my-4  p-2 " type="text" name="nom" id="nom">


    

    <input class=" col col-12 btn btn-success text-center"   type="submit" value="إضافة">
</div>
</form>
</div>





@forelse ($groupes as $groupe)
    
@empty
    <div class="h3 text-white bg-dark mx-2  text-center mt-4 p-4">لا يوجد أي مجموعة</div>
@endforelse
<div class="m-2 p-2">
    <table class="table table-bordred bg-dark">
    <thead class="thead-light text-center">
        <tr>
            <th>#</th>
            <th>إسم الفوج</th>
            <th></th>
            <th></th>



        </tr>
    </thead>
   

@isset($groupes)
@foreach ($groupes as $groupe)
<tbody class="text-white text-center">
<tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$groupe->nom}}</td>
        <td><a href="{{route('groupes.edit',$groupe->id)}}"  class="btn btn-warning">تعديـــل</a>
            <td ><form action="{{route('groupes.destroy',$groupe->id)}}" method="POST">
                @csrf
<input type="submit"  class="btn btn-danger" value="حذف">

                @method('DELETE')
            </form></td>

</tr></tbody>
@endforeach

@endisset





    </table>
</div>






@stop
