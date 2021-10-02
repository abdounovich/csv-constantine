@extends('layouts.master')

@section('title', 'المشتركين')



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



<div class="p-2 m-5  d-flex justify-content-right"> <a class="btn btn-primary  rounded text-white " title="إضافة مشترك جديد"  href="registration1"><i class=" p-1 fa fa-plus fa-4x "></i>
</a></div>
<div class=" p-2 m-2 text-right">



    







    






@if ($registrations->count()==0)
<div class="h3 text-white bg-dark mx-2  text-center mt-4 p-4">لا يوجد أي مشترك</div>

    @else
    <table class="table table-dark text-white table-bordered  table-striped">
        <thead class="thead-light">
          <tr>            
                <th>#</th>
                <th>الإسم</th>
                <th>اللقب</th>
                <th>تاريخ الميلاد</th>
    
                <th>الفوج</th>
    
                <th>الوثائق 
                  </th>
                <th>   مبلغ الإشتراك</th>
    <th></th>
    
            </tr>
        </thead>
                @foreach ($registrations  as $registration)
    <tbody>
       <tr>
                <td>{{$loop->index+1}}</td>
               <td> <a  class="text-white" href="registration/{{$registration->id}}">{{$registration->nom}} </a></td>
                <td>{{$registration->prenom}}</td>
                <td>{{$registration->date_naissance}}</td>
    
                <td>           <span class="badge badge-pill badge-primary"> {{$registration->groupe->nom}}</span>
    
    @foreach ($registration->groupe->creanau as $creanau)
                  <div>  {{$creanau->jour}} : {{$creanau->debut}} | {{$creanau->fin}}</div>
                @endforeach</td>
    
                <td>@php
                    $array=json_decode($registration->documents, true);
    
                @endphp 
               
                    
    
                 @foreach ($array as $item)
                    
                 <p class="badge badge-success p-2 "> {{$item}}</p>
              @endforeach 
    
    
    
             
    
                </td>
                <td> 
                    @if ($registration->prix_reste>0)
                                        <span class="badge badge-danger p-2">باقي {{$registration->prix_reste}} دج</span>
                                       
    
    
                    @else
                    <span class="badge badge-success p-2"> {{$registration->prix_abonnement}} دج</span>
    
                    @endif
                     </td>
                     <td> <p><a class="text-warning btn btn-link text-center" href="/badge/{{$registration->id}}">البادج </a></p>
                        <a class="text-warning btn btn-link text-center" href="/receipe/{{$registration->id}}"> إثبات الدفع </a></td>
            </tr>
       
    
        </tbody>@endforeach
    
    </table>
    
    
    </div>
@endif

<div class="text-center d-flex justify-content-center">
    <div class="text-center  p-2 mt-2 mb-4">{{$registrations->links("vendor.pagination.bootstrap-4")}}</div>

</div>

@stop
