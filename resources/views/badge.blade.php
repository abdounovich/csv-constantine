
    



     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <script src="{{ asset('js/app.js',true )}}" type="text/js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
     <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">
     <script src="https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js"></script>

<style>
    

    .relative {
        margin: 0 auto;
        position: relative;
        width: 300px;
      }
      
      .absolute {
        position: absolute;
        right: 0;
        top: 0;
        width: 50px;
      }
      
      .fixed-feedback {
        position: fixed;
        top: 400px;
        width: 90px;
      }
      
      .fixed-le {
        position: fixed;
        top: 410px;
        width: 270px;
        
      }
      
      .fixed-bande {
        position: fixed;
        top: 450px;
        width: 300px;
      }
      
      
      @page {
        size: 200mm 200mm portrait;
        margin: 0;
      }
      @media print {
        html, body {
          width: 30mm;
          height: 10mm;
        }
        /* ... the rest of the rules ... */
      }
      
      #bodyDiv{
        direction: rtl;
      width:79mm;
      height:126mm;
      margin:auto;
      font-family: "Cairo", sans-serif; 
      font-size: 14px;
      font-weight: bold;
      background-image: url("{{asset("images/badge_bg.jpg")}}");
background-repeat: no-repeat !important;
background-position: 0 -40px !important;
      }
          
      
      
      
      #first{
      
      width:79mm;
      height:100mm;
      }
      #last{
      
      width:79mm;
      height:26mm;
      }
</style>



   
@php
    $texte="";
$telephone="";
if ($registration->telephone=="NA") {

$text="هاتف الأب";
$telephone=$registration->telephone_pere;
} 

else {$text=" الهاتف";
$telephone=$registration->telephone;
}
@endphp
<div id="bodyDiv" >
<div id="first">
<img class=" " style=" position:relative;width:140px; height:90px;top:10px;left:-20px"
width="100" height="100"  
src="{{asset('images/csv_logo.png')}}" alt="">

<div class=" ml-5 mr-2 ">


<div  style=" position:relative; top:-60px; left:-30px;width: 100px;height:100px" class=" text-primary bg-white mr-5  border border-info text-center rounded " >
<i class="fa fa-5x fa-user "></i>
</div> 
<div class="text-right  mb-2" style="margin-top: -25px">اللقب : <span class="text-primary  ml-3">  {{$registration->nom}} </span> 
الإسم : <span class="text-primary"> {{$registration->prenom}}  </span> </div>
<div class="text-right my-2">تاريخ الميلاد : <span class="text-primary"> {{$registration->date_naissance}}  </span> </div>

<div class="text-right my-2">{{$text}} :<span class="text-primary"> {{$telephone}}  </span> </div>

@foreach ($registration->groupe->creanau as $creanau) 
 <div class='text-right bg-primary  text-white my-2 p-2 rounded'> 
  <span class='badge badge-dark p-2  '  style='width: 25% '>{{$creanau->jour}}</span> 
  <span class='mr-2'>{{$creanau->debut}} | {{$creanau->fin}}</span>  
  </div>
@endForeach


</div>







<div class="relative"  >
<div class="absolute" >
<p class="fixed-feedback "> قسنطينة في  <span class="text-primary">{{$date = date("Y/m/d") }}</span></p>
<p class="fixed-le " dir="rtl "> ختم الجمعية </p>

</div>
</div>

<div class="text-white bg-primary p-1 fixed-bande" style="font-size: 12px">
  <span class=" bg-primary text-white    ">Tel :</span><span class="text-white text-right"> 0667725678 - 0560741104 </span>  |
 <span class=" bg-primary text-white  ">fb/</span><span class="text-white text-right">CVS Constantine</span>

</div>

</div>
</div>
    <div class="mt-1">
        <a  class="btn btn-success text-center" id="btnSave" download="your_pic_name.png">إضغظ مرتين للتحميل</a>
      
      </div>
     
     
    


     <script>
     
     
     var element = $("#bodyDiv"); // global variable
     var getCanvas; // global variable
     
         $("#btnSave").on('click', function () {
              html2canvas(element, {
              onrendered: function (canvas) {
                     $("#previewImage").append(canvas);
                     getCanvas = canvas;
                     var imgageData = getCanvas.toDataURL("image/png");
         // Now browser starts downloading it instead of just showing it
         var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
         $("#btnSave").attr("href", newData);
                  }
              });
         });
     
       
     
     
     
     
     
     </script>