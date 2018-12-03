<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Mail\FormularioContacto;
use App\Mail\acuseRecibo;
use App\Property;
use App\Propertytype;
use App\DetailForm;
use App\City;
use App\Detail;
use App\Negotiation;
use App\Housingtype;
use App\Equipments;
use App\Photo;


class PropertyController extends Controller
{
    public function latest() {
	    return Property::with(['negotiation','housingtype', 'city'])->where('status',1)->orderBy('created_at','desc')->take(48)->get();
    }

    public function randomProperties() {
        return Property::with(['negotiation','housingtype', 'city'])->where('status',1)->inRandomOrder()->take(6)->get();
    }

    public function detail($id) {
	    return view('property-detail.main')->with(['id'=> $id]);
    }

    public function getDataDetail($id){
        $propertyGetDetail['property'] = Property::with(['negotiation','housingtype','user','propertytype', 'city', 'detail', 'equipment'])->where('id', $id)->first();
        $propertyGetDetail['photos'] = Photo::where('property_id', $id)->get();

        return $propertyGetDetail;
    }

    public function getAllProperties(Request $request) {

        if ($request->ajax()) {
            return Property::with(['negotiation','housingtype', 'city'])->where('status',1)->orderBy('created_at','desc')->get();
        } else {
            return view('all-properties-list.main');
        }
    }  

    public function filterInList() {
        return view('property-detail.main');
    }

    public function getDataFilter(){
        $dataFilter = [];
        $dataFilter['negotiation'] = Negotiation::where('id','>',1)->get();
        $dataFilter['propertytype'] = Propertytype::get();
        $dataFilter['housingtype'] = Housingtype::where('id','>',1)->get();
        $dataFilter['equipment'] = Equipments::get();
        $dataFilter['city'] = City::get();
        $dataFilter['minprice'] = Property::select('price')->groupBy('price')->orderBy('price','asc')->first();
        $dataFilter['maxprice'] = Property::select('price')->groupBy('price')->orderBy('price','desc')->first();
        $dataFilter['propertyhabs'] = Property::select('habs')->groupBy('habs')->get();
        $dataFilter['propertybath'] = Property::select('bath')->groupBy('bath')->get();
        $dataFilter['characteristics'] = Detail::select('name')->groupBy('name')->take(20)->get();
        return $dataFilter;
    }

    public function getCityFilter(){
        return Property::with(['negotiation','housingtype','user','propertytype', 'city', 'detail'])->where('city_id', 2)->get();
    }

    public function contactForm(Request $request){

        $data = [];
        //para guarda en la base de datos
        $data =detailform::create([
            'name' => $request->input('name')['$modelValue'],
            'emailcontact' => $request->input('emailcontact')['$modelValue'], 
            'user_id' => $request->input('user_id')['$modelValue'],
            'email-agent' => $request->input('email-agent')['$modelValue'],
            'message' => $request->input('message')['$modelValue'],
            'phone' => $request->input('phone')['$modelValue'],
        ]);


        //obtenemos los datos del formulario
        $nombre = $data['name'];  
        $telefono = $data['phone'];  
        $email = $data['emailcontact'];  
        $mensaje = $data['message'];
        $to_email = $data['email-agent'];
        $to_name = 'TECNOCASA';
        $propertyid = $request->input('propertyid')['$modelValue'];
        $agent_name = $request->input('agent-name')['$modelValue'];
        $propertyPrice = $request->input('propertyPrice')['$modelValue'];
        $address = $request->input('address')['$modelValue'];
        $addressNumber = $request->input('addressNumber')['$modelValue'];
        $city = $request->input('city')['$modelValue'];
        $cp = $request->input('cp')['$modelValue'];
        $habs = $request->input('habs')['$modelValue'];
        $bath = $request->input('bath')['$modelValue'];
        $description = $request->input('description')['$modelValue'];
        $domainName = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        $footerMail = "Equipo de Network Solutions Control, S.L.";
        $equipment = $request->input('equipment')['$modelValue'];
        $agent_phone = $request->input('agent_phone')['$modelValue'];




        //validación del captcha
        $recaptchaURL = 'https://www.google.com/recaptcha/api/siteverify';
        $vars = 'secret=6LejyzIUAAAAAP_bPN8P_7vq2BqgV-eL8kLHKhFf&response='. $request['g-recaptcha-response'];
        $ch = curl_init( $recaptchaURL );
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $vars);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        $response_captcha = json_decode(curl_exec( $ch ), true);

        if ($response_captcha) {
            //enviamos correo al agente
            Mail::to($to_email, $to_name)->send(new FormularioContacto($nombre, $telefono, $email, $mensaje, $to_name, $to_email, $propertyid,$domainName, $footerMail));

            //Enviamos correo a quien completó el form
            Mail::to($email, $nombre)->send(new acuseRecibo($nombre, $telefono, $email, $mensaje, $to_name, $to_email, $agent_name, $propertyid, $domainName, $propertyPrice, $address, $addressNumber, $city, $cp, $habs, $bath, $description, $footerMail, $equipment, $agent_phone));
            
            return response('Correct', 200);
        } else {
            return response('Incorrect', 500);
        }

        return $data;
    }    

    public function addImages(Request $request)
    {

        /*if ($request->input('extension') === 'png') {
             return response('no se ha podido guardar la imágen', 500);
        }*/
        try {
                if ($request->input('extension') === 'jpg') {
                    $request->file->storeAs('logotipos', $request->input('id'), 'local'); 
                    $base = 'data:image/jpg;base64,' ;       
                }else if($request->input('extension') === 'png'){
                    $request->file->storeAs('logotipos', $request->input('id'), 'local');
                    $base = 'data:image/png;base64,';       
                }
                $files = base64_encode(Storage::disk('local')->get('logotipos/' . $request->input('id')));

                //return $files;

                $property_id = $request['property_id'];;
                $divisionId = 2;
                $photoBD = new Photo();
                if($files != NULL){
                    $photoBD->img = $base.$files;
                    $photoBD->property_id = $property_id;
                    $photoBD->division = $divisionId;
                    $photoBD->save();
                }
                /*foreach($files as $imgs){
                    //print_r($request->input('file')['$modelValue']);

                    $photoBD = new Photo();
                    if($imgs != NULL){
                        $photoBD->img = $imgs;
                        $photoBD->property_id = $property_id;
                        $photoBD->division = $divisionId;
                        $photoBD->save();
                    }
                }*/
                //print_r($files->original);
                return $files;
            } catch (Exception $exception) {
                return response('no se ha podido guardar la imágen', 500);
            }
    }


}
