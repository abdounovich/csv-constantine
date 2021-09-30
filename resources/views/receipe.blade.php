
    



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

<style> body {
    font-family: "Cairo", sans-serif;background-color: #fff;
color: #535353;
margin: 5px;
}
table {
border-collapse: collapse;
padding: 0;
width: 100%;
}
td {
padding: 0;
vertical-align: top;
}
.ticket-title {
color: #999;
font-size: 16px;
letter-spacing: 0;
line-height: 16px;
margin-top: 10px;
}
.ticket-info {
color: #535353;
font-size: 14px;
line-height: 21px;
}
.ticket-wrapper {
border: 2px solid #999;
border-top: 12px solid rgb(0, 3, 7);
margin: 15px auto 0;
padding-bottom: 15px;
width: 650px;
}
.ticket-wrapper:first-child {
margin-top: 0;
}
.ticket-table {}
.ticket-table .first-col {
width: 570px;
}
.ticket-logo {
border-left: 2px dashed #ccc;
text-align: center;
vertical-align: middle;
}
.ticket-logo img {
height: 150px;
width: 150px;
margin: 0px;
}
.ticket-name-div {
border-bottom: 2px dotted #ccc;
margin: 0 12px 0 22px;
padding: 15px 0px 15px 0;
text-align: left;
}
.ticket-event-longtitle {
color: #535353;
font-size: 15px;
letter-spacing: -1px;
line-height: 15px;
}
.ticket-event-shorttitle {
color: #535353;
font-size: 18px;
letter-spacing: -1px;
line-height: 22px;
}
.ticket-event-details {
border-bottom: 2px dotted #ccc;
margin: 0 12px 0px 22px;
padding: 15px 0px 15px 0;
text-align: left;
}
.ticket-event-details .first-col {
text-align: left;
width: 50%;
}
.ticket-event-details .second-col {
text-align: right;
vertical-align: top;
width: 50%;
}
.ticket-venue {
color: #535353;
font-size: 14px;
line-height: 21px;
}
.ticket-venue:first-child {
font-size: 16px;
}
.ticket-ticket-details {
margin: 0 12px 0px 22px;
text-align: left;
}
.ticket-ticket-details .first-col {
border-right: 2px dashed #ccc;
padding-top: 10px;
padding-right: 5px;
text-align: right;
vertical-align: top;
width: 43%;
}
.ticket-ticket-details .second-col {
padding: 4px 0px 0px 32px;
text-align: right;
width: 32%;
}
.ticket-ticket-details .third-col {
    padding: 4px 0px 0px 32px;
text-align: right;
width: 25%;
}
.ticket-qr-code{
height: 50px;
width: 50px;
}
/* Print specific styles */
@media print {
a[href]:after, abbr[title]:after {
    content: "";
}
.ticket-wrapper {
    width: 16cm;
}
.ticket-table .first-col {
    width: 13.8cm;
}
.ticket-logo img {
    height: auto;
    max-width: 100%;
}
.ticket-ticket-details .first-col {
    width: 4cm;
}
.ticket-ticket-details .second-col {
    width: 6cm;
}
.ticket-ticket-details .third-col {
    width: 2.5cm;
}
@page {
    margin: 1cm;
}}

</style>




    <!-- Start Ticket -->
    <div class="ticket-wrapper bg-white" id="bodyDiv" style="text-align: right">
        <table class="ticket-table">
            <tr>
                <td class="first-col">
                    <!-- title -->
                    <div class="ticket-name-div " style="text-align: center">
                        <span class="ticket-event-longtitle h5 ">Club Ville Suspendue Constantine</span>
                      
    
                    </div>
                    <!-- /.ticket-name-div -->
                    <!-- venue details start -->
                    <div class="ticket-event-details">
                        <table>
                            <tr>
                                <td class="first-col">
                             
    
        
    
                                          <div class="ticket-venue">
                                            {{$registration->address}}
                                         </div>
         
                                         <!-- /.ticket-venue -->
                                         <div class="ticket-venue">
                                             <b> @if ( $registration->telephone=="NA")
                                               {{$registration->telephone_pere}}
                                             @else
                                             {{$registration->telephone}}

                                             @endif</b>
                                         </div>
    
                                </td>
                                <!-- /.first-col -->
                                <td class="second-col">
                                   
                                    <div class="ticket-title" style="margin-top: -2px">
                                        : إثبات الدفع الخاص   بـ  
                                      </div>
                                      <!-- /.ticket-title -->
                                      <div class="ticket-info" style="margin-top: 5px">
                                       {{$registration->nom}}      {{$registration->prenom}}                               </div>
                                      <!-- /.ticket-info -->
                                    
    
                                </td>
                               
                                <!-- /.second-col -->
                            </tr>
                        </table>
                    </div>
                    <!-- /.ticket-event-details -->
                    <!-- ticket details start -->
                    <div class="ticket-ticket-details">
                        <table>
                            <tr>
                                <td class="first-col">
                                   
                                    <!-- /.ticket-info -->
                                    <div class="ticket-title">
                                    </div>
                                    <div class="ticket-title" style="margin-top: 0px">
                                      مدة الإشتراك
                                     
                                         <span style="color: black; float:left">  <b>  <span style="float: left; margin-right:4px" > أشهر </span> {{$registration->duree}} </b>    </span>
                                     </div>
                                    <!-- /.ticket-title -->
                                    <div class="ticket-title" style="margin-top: 8">
                                       ثمن الإشتراك    
                                     
                                         <span style="color: black; float:left">  <b>  {{$registration->prix_abonnement+$registration->prix_reste}} </b> DZD  </span>
                                     </div>
                                    <div class="ticket-title" style="margin-top: 10">
                                      المبلغ المدفوع  
                                    
                                        <span style="color: black; float:left">  <b>  {{$registration->prix_abonnement}}</b> DZD  </span>
                                    </div>
                                         <div class="ticket-title">
                                           المبلغ المتبقي                                  
                                            <span style="color: black; float:left">  <b>  {{$registration->prix_reste}}  </b> DZD </span>
                                            
                                        </div>
                                            <div class="ticket-title" style="padding-top:10px; margin-top:15px; border-top: 2px dashed #ccc;" >
                                       قسنطينة في                                     
                                
                                        <span style="color: black;padding:5px; margin-top:-5px; float:left"><b> @php
                                           date_default_timezone_set("Africa/Algiers");
                                       @endphp
                                    {{now()->format(" Y/m/d    H:i:s     ")}}</b> 
                                        </span></div>
                                       
                                                                      
                                                                       
                                    <!-- /.ticket-info -->
                                </td>
                          
                                <!-- /.second-col -->
                                <td class="third-col">
                                    <div class="ticket-title" >
                                        كود المشترك  
                                    </div>
                                    <!-- /.ticket-title -->
                                    <div class="ticket-info" style="background-color:rgb(17, 16, 1);text-align: center; margin-top:5px" >
                                      <b><span  style="color:white; ">   #{{$registration->id}} </span> </b>  
                                      </div>
                                       <div class="ticket-title" style="padding-top:10px; margin-top:15px; border-top: 2px dashed #ccc;" >
                                          ختم الجمعية                                   
                                    
                                           </div>
                                     
                                </td>
                                <!-- /.third-col -->
                            </tr>
    
                        </table>
                    </div>
                    <!-- /.ticket-ticket-details -->
                </td>
              

                <!-- /.first-col -->
                <td class="ticket-logo">
                <img class="ticket-qr-code" src="{{asset("images/csv_logo.png")}}"
                 alt="logo"/>                      
                <img style=" width:80px; height:80px" src="{{asset("images/qr_code.png")}}" alt="qrcode"/>
                <p><span  style="color:black; font-size:10px ;margin:-5px ">  CVS#{{$registration->id}}/{{$registration->groupe->id}}  </span> </p>                             </div>
    
      </td>
    
                <!-- /.ticket-logo -->
            </tr>
        </table>
        <!-- /.ticket-table -->
    </div>
    <!-- /.ticket-wrapper -->
    <!-- End Ticket -->
  

    <div class="mt-1">
        <a  class="btn bg-success text-center" id="btnSave" download="your_pic_name.png">إضغظ مرتين للتحميل</a>
      
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