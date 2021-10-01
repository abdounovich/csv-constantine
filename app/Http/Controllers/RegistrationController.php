<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Creneau;
use App\Models\Document;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $groupes=Groupe::all();
      $registrations=Registration::paginate(10);


return view('registrations')->with('groupes',$groupes)->with('registrations',$registrations);
  }








  public function registration1()
  {
      $groupes=Groupe::all();
      $registrations=Registration::all();


return view('registration1')->with('groupes',$groupes)->with('registrations',$registrations);
  }






  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function registration2(Request $request)
  {

    $nom=$request->get("nom");
    $prenom=$request->get("prenom");
    $date_naissance=$request->get("date_naissance");
    $address=$request->get("address");
    $sexe=$request->get("sexe");


    $age = date_diff(date_create($date_naissance), date_create('now'))->y;

    if ($age<15) {
     return view('registration2a')
     ->with("nom",$nom)
     ->with("prenom",$prenom)
     ->with("date_naissance",$date_naissance)
     ->with("address",$address)
     ->with("sexe",$sexe);



    }
else{
  return view('registration2b')   
  ->with("nom",$nom)
  ->with("prenom",$prenom)
  ->with("date_naissance",$date_naissance)
  ->with("address",$address)
  ->with("sexe",$sexe) ;
}





  }



  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function registration2a(Request $request)
  {

    $nom=$request->get("nom");
    $prenom=$request->get("prenom");
    $date_naissance=$request->get("date_naissance");
    $address=$request->get("address");
    $sexe=$request->get("sexe");
    $telephone_pere=$request->get("telephone_pere");
    $nom_pere=$request->get('nom_pere');
    $email=$request->get('email');
    $telephone='NA';


    $groupes=Groupe::all();
    $documents=Document::all();

    return view('registration3')
    ->with("nom",$nom)
    ->with("prenom",$prenom)
    ->with("date_naissance",$date_naissance)
    ->with("address",$address)
    ->with("telephone_pere",$telephone_pere)
    ->with("nom_pere",$nom_pere)
    ->with("email",$email)
    ->with("sexe",$sexe)   
    ->with('telephone',$telephone) 
    ->with("groupes",$groupes)
    ->with("documents",$documents);


  }




    /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function registration2b(Request $request)
  {


    $nom=$request->get("nom");
    $prenom=$request->get("prenom");
    $date_naissance=$request->get("date_naissance");
    $address=$request->get("address");
    $sexe=$request->get("sexe");
    $telephone=$request->get("telephone");
    $email=$request->get('email');
    $telephone_pere="NA";
    $nom_pere="NA";

    $groupes=Groupe::all();
    $documents=Document::all();


    return view('registration3')
    ->with("nom",$nom)
    ->with("prenom",$prenom)
    ->with("date_naissance",$date_naissance)
    ->with("address",$address)
    ->with("telephone",$telephone)
    ->with("email",$email)
    ->with("sexe",$sexe)
    ->with("telephone_pere",$telephone_pere)
    ->with("nom_pere",$nom_pere)
    ->with("groupes",$groupes)
    ->with("documents",$documents);

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
 $nom=$request->get("nom");
 $prenom=$request->get("prenom");
$telephone=$request->get("telephone");
$telephone_pere=$request->get("telephone_pere");
$address=$request->get("address");
$nom_pere=$request->get("nom_pere");
$transport=$request->get("transport");
$duree=$request->get("duree");
$prix_reste=$request->get("prix_reste");
$prix_abonnement=$request->get("prix_abonnement");
$email=$request->get("email");
$sexe=$request->get("sexe");
$date_naissance=$request->get("date_naissance");
$payment=$request->get("payment");
$groupe=$request->get("groupe");
$documents=json_encode($request->input('documents'));

$registration=new Registration();
$registration->nom=$nom;
$registration->prenom=$prenom;
$registration->telephone=$telephone;
$registration->telephone_pere=$telephone_pere;
$registration->address=$address;
$registration->nom_pere=$nom_pere;
$registration->transport=$transport;
$registration->duree=$duree;
$registration->prix_abonnement=$prix_abonnement;
$registration->prix_reste=$prix_reste;
$registration->email=$email;
$registration->sexe=$sexe;
$registration->groupe_id=$groupe;
$registration->date_naissance=$date_naissance;
$registration->documents=$documents;
$texte="";
$telephone="";
if ($registration->telephone=="NA") {
  $telephone=$registration->telephone_pere;

$text="هاتف الأب";} 
else {
  $text=" الهاتف";
  $telephone=$registration->telephone;

}$registration->save();

$registration->badge_url="badge/".$registration->id;
$registration->save();
// $html_variable="";
// foreach ($registration->groupe->creanau as $creanau) {
//   $html_variable=$html_variable."<div class='text-right bg-primary  text-white my-2 p-2 rounded'> 
//   <span class='badge badge-dark p-2  '  style='width: 25% '>".$creanau->jour."</span> 
//   <span class='mr-2'>".$creanau->debut." | ".$creanau->fin."</span>  
//   </div>"
//   ;

  
// }

// $html = '
//     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
//     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
//     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   

// <div id="bodyDiv" >
// <div id="first">
// <img class=" " style=" position:relative;width:140px; height:90px;top:10px;left:-20px"
// width="100" height="100"  
// src="https://scontent.fczl2-1.fna.fbcdn.net/v/t1.15752-9/s2048x2048/69262527_687908988343433_3037938172139929600_n.png?_nc_cat=107&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeHxyjOV961QpYRWoBGcjB2JQgHznhELzlZCAfOeEQvOVqFBvqaa4kc-NGzfP2PG_VIr-OPNOFOMSepoOh8ovOLl&_nc_ohc=CRBmc5jevnAAX9ArxrP&_nc_ht=scontent.fczl2-1.fna&oh=a83e85ea823d904f22535eba4cd47311&oe=61743F62" alt="">

// <div class=" ml-5 mr-2 ">


// <div  style=" position:relative; top:-60px; left:-30px;width: 100px;height:100px" class=" text-primary bg-white mr-5  border border-info text-center rounded " >
// <i class="fa fa-5x fa-user "></i>
// </div> 
// <div class="text-right  mb-2" style="margin-top: -25px">اللقب : <span class="text-primary  ml-3">  '.$registration->nom.' </span> 
// الإسم : <span class="text-primary"> '.$registration->prenom.'  </span> </div>
// <div class="text-right my-2">تاريخ الميلاد : <span class="text-primary"> '.$registration->date_naissance.'  </span> </div>

// <div class="text-right my-2">رقم الهاتف :<span class="text-primary"> '.$telephone.'  </span> </div>

// '.$html_variable.'


// </div>







// <div class="relative">
// <div class="absolute">
// <p class="fixed-feedback "> قسنطينة في  <span class="text-primary">'.$date = date("Y/m/d") .'</span></p>
// <p class="fixed-le "> ختم الجمعية </p>

// </div>
// </div>

// <div class="text-white bg-primary p-1 fixed-bande" >
// <span >0667725678 </span>  <i class="fa fa-phone  text-dark"></i>
// |



// <span class="mr-1" > CVS Constantine  </span>  <i class="fa fa-facebook text-dark mr-1"></i>
// </div>

// </div>';
    
//     $css = '
    

//     .relative {
//         margin: 0 auto;
//         position: relative;
//         width: 300px;
//       }
      
//       .absolute {
//         position: absolute;
//         right: 0;
//         top: 0;
//         width: 50px;
//       }
      
//       .fixed-feedback {
//         position: fixed;
//         top: 400px;
//         width: 90px;
//       }
      
//       .fixed-le {
//         position: fixed;
//         top: 410px;
//         width: 270px;
        
//       }
      
//       .fixed-bande {
//         position: fixed;
//         top: 452px;
//         width: 300px;
//       }
      
      
//       @page {
//         size: 200mm 200mm portrait;
//         margin: 0;
//       }
//       @media print {
//         html, body {
//           width: 30mm;
//           height: 10mm;
//         }
//         /* ... the rest of the rules ... */
//       }
      
//       #bodyDiv{
//         direction: rtl;
//       width:79mm;
//       height:126mm;
//       margin:auto;
//       font-family: "Roboto", sans-serif; 
//       font-size: 14px;
//       font-weight: bold;
//       background-image: url( "https://png.pngtree.com/thumb_back/fw800/back_our/20190619/ourmid/pngtree-blue-minimalistic-geometric-education-academic-advertising-detail-page-vector-background-image_135064.jpg");
//       }
          
      
      
      
//       #first{
      
//       width:79mm;
//       height:100mm;
//       }
//       #last{
      
//       width:79mm;
//       height:26mm;
//       }
//        ';
//     $google_fonts = "Roboto";
    
//     $data = array('html'=>$html,
//                  'css'=>$css,
//                  'google_fonts'=>$google_fonts);
    
//     $ch = curl_init();
    
//     curl_setopt($ch, CURLOPT_URL, "https://hcti.io/v1/image");
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
//     curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    
//     curl_setopt($ch, CURLOPT_POST, 1);
//     // Retrieve your user_id and api_key from https://htmlcsstoimage.com/dashboard
//     curl_setopt($ch, CURLOPT_USERPWD, "517c37dd-d6ef-45f7-a9a3-5aff4cfe4f6e" . ":" . "e295eff1-06a0-47f5-b2e0-b43cd63a452c");
    
//     $headers = array();
//     $headers[] = "Content-Type: application/x-www-form-urlencoded";
//     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
//     $result = curl_exec($ch);
//     if (curl_errno($ch)) {
//      echo 'Error:' . curl_error($ch);
//     }
//     curl_close ($ch);
//     $res = json_decode($result,true);
//    $registration->find($registration->id);
// $registration->save();







return redirect('/registrations')->with("success","لقد تم إضافة مشترك جديد بنجاح");
}

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
$registration=Registration::find($id);
$documents=Document::all();
$groupes=Groupe::all();

return view('registration')->with("registration",$registration)->with("documents",$documents)->with("groupes",$groupes);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request ,$id)
  {
$registration=Registration::find($id);
$input = $request->all();
$registration->fill($input)->save();
return back()->with('success', 'تم تعديل البيانات بنجاح');

  }

  /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $groupe
     * @return \Illuminate\Http\Response
     */
  public function destroy(Registration $registration)
  {
    $registration->delete();

    return redirect('/registrations')->with('success',' تمت عملية  الحدف  بنجاح');

  }

}

?>
