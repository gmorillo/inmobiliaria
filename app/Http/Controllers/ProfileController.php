<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\User;
use App\View;
use App\Negotiation;
use App\Housingtype;
use App\Property;
use App\Propertytype;
use App\DetailForm;
use App\Equipments;
use App\Division;
use App\City;
use App\Detail;
use App\Photo;
use DB;
use App;




class ProfileController extends Controller
{
    public function getAllProperties(Request $request) {
        return  Property::with(['negotiation','housingtype', 'user', 'city'])->where('user_id', Auth::getUser()->id)->orderBy('created_at','desc')->get();
    }

    public function index(Request $request)
    {   
        return view('profile.main');
    }
	
	public function getUserProfile(Request $request)
    {	
    	$variables =  User::where('id', Auth::getUser()->id)->first();
        return $variables;
    }

	public function profileLeftMenu( ) {
        
    }

    public function profileHeader(Request $request) {

    }

    public function updateAccount(Request $request){

        $usuario =  User::where('id', $request->input('idUsuario'))->first();
        $usuario->name = $request->input('name')['$modelValue'];
        $usuario->email = $request->input('email')['$modelValue']; 
        $usuario->phone = $request->input('phone')['$modelValue'];
        $usuario->password = Hash::make($request->input('password')['$modelValue']);
        $usuario->save();
    }

    public function getAllSelects(){
        $selects = [];
        $selects['negotiation'] = Negotiation::get();
        $selects['propertytype'] = Propertytype::get();
        $selects['housingtype'] = Housingtype::get();
        $selects['equipment'] = Equipments::get();
        $selects['divisions'] = Division::get();
        $selects['city'] = City::get();
        return $selects;
    }

    public function sendNewPropertyFormCtrl(Request $request){


        $data = [];


        //para guarda en la base de datos
        $data =Property::create([
            'habs' => $request->input('habs')['$modelValue'],
            'bath' => $request->input('bath')['$modelValue'], 
            'address' => $request->input('address')['$modelValue'],
            'number' => $request->input('number')['$modelValue'],
            'cp' => $request->input('cp')['$modelValue'],
            'area' => $request->input('area')['$modelValue'],
            'antiquity' => $request->input('antiquity')['$modelValue'],
            'floor' => $request->input('floor')['$modelValue'], 
            'description' => $request->input('description')['$modelValue'],
            'user_id' => $request->input('user_id')['$modelValue'],
            'price' => $request->input('price')['$modelValue'],
            'negotiation_id' => $request->input('negotiationSelected')['$modelValue'],
            'housingtype_id' => $request->input('housingtypeSelected')['$modelValue'],
            'propertytype_id' => $request->input('propertytypeSelected')['$modelValue'],
            'equipment_id' => $request->input('equipmentSelected')['$modelValue'],
            'city_id' => $request->input('citySelected')['$modelValue'],
        ]);

        //return $request->input('file')['$modelValue'];

        $selected_details = $request['details'];
        

        foreach($selected_details as $detail){

            $detalles = new Detail();
            if($detail['selected'] == '1'){
                $detalles->name = $detail['name'];
                $detalles->property_id = $data->id;
                $detalles->save();
            }
        }

        $selected_file = $request['imagenes'];
        //$divisionId = $request->input('divisionsselected')['$modelValue'];
        $divisionId = 2;
        foreach($selected_file as $imgs){
            
            $photoBD = new Photo();
            if($imgs != NULL){
                $photoBD->img = $imgs['logotipo'];
                $photoBD->property_id = $data->id;
                $photoBD->division = $divisionId;
                $photoBD->save();
            }
        }
        return $request;
    }

    public function deletePhotos(Request $request){
        $id = $request->input('imgId');
        return Photo::where('id', $id)->delete();
    }

    public function uploadLogo(Request $request)
    {
        if ($request->input('extension') === 'png') {
             return response('no se ha podido guardar la imágen', 500);
        }
        try {
                if ($request->input('extension') === 'jpg') {
                    $request->file->storeAs('logotipos', $request->input('id'), 'local');                   
                }
                $files = response(base64_encode(Storage::disk('local')->get('logotipos/' . $request->input('id'))), 200);
                return $files;

            } catch (Exception $exception) {
                return response('no se ha podido guardar la imágen', 500);
            }
    }




















    public function pleaseInactivateProperty(Request $request){
        $inactiveproperty =  Property::where('id', $request->input('propertyId'))->first();
        $inactiveproperty->status = '0';
        $inactiveproperty->save();
        return $inactiveproperty;   
    }

    public function pleaseActivateProperty(Request $request){
        $activeproperty =  Property::where('id', $request->input('propertyId'))->first();
        $activeproperty->status = '1';
        $activeproperty->save();
        return $activeproperty;   
    }

    public function deleteProperty(Request $request){
        return Property::where('id', $request->input('propertyId'))->delete(); 
    }

    public function editProperty(Request $request){
        //return "llegó al controlador php";
        $selects = [];
        $selects['property'] = Property::with(['negotiation','housingtype', 'user', 'city', 'propertytype', 'equipment'])->where('id', $request->input('propertyId'))->first();
        $selects['details'] = Detail::where('property_id', $request->input('propertyId'))->get();
        $selects['negotiation'] = Negotiation::get();
        $selects['propertytype'] = Propertytype::get();
        $selects['housingtype'] = Housingtype::get();
        $selects['equipment'] = Equipments::get();
        $selects['divisions'] = Division::get();
        $selects['city'] = City::get();
        $selects['photo'] = Photo::where('property_id', $request->input('propertyId'))->get();

        return $selects;         
    }

    public function updateProperty(Request $request){

        
        $property =  Property::where('id', $request->input('id'))->first();
        $property->habs = isset($request['form']['habitaciones']['$modelValue']) ? $request['form']['habitaciones']['$modelValue'] : $property->habs;
        $property->bath = isset($request['form']['bath']['$modelValue']) ? $request['form']['bath']['$modelValue'] : $property->bath;
        $property->address = isset($request['form']['address']['$modelValue']) ? $request['form']['address']['$modelValue'] : $property->address;
        $property->number = isset($request['form']['number']['$modelValue']) ? $request['form']['number']['$modelValue'] : $property->number;
        $property->cp = isset($request['form']['cp']['$modelValue']) ? $request['form']['cp']['$modelValue'] : $property->cp;
        $property->area = isset($request['form']['area']['$modelValue']) ? $request['form']['area']['$modelValue'] : $property->area;
        $property->antiquity = isset($request['form']['antiquity']['$modelValue']) ? $request['form']['antiquity']['$modelValue'] : $property->antiquity;
        $property->floor = isset($request['form']['floor']['$modelValue']) ? $request['form']['floor']['$modelValue'] : $property->floor;
        $property->description = isset($request['form']['description']['$modelValue']) ? $request['form']['description']['$modelValue'] : $property->description;
        $property->user_id = isset($request['form']['user_id']['$modelValue']) ? $request['form']['user_id']['$modelValue'] : $property->user_id;
        $property->price = isset($request['form']['price']['$modelValue']) ? $request['form']['price']['$modelValue'] : $property->price;
        $property->negotiation_id = isset($request['form']['negotiation']['$modelValue']['id']) ? $request['form']['negotiation']['$modelValue']['id'] : $property->negotiation_id;
        $property->housingtype_id = isset($request['form']['housingtype']['$modelValue']['id']) ? $request['form']['housingtype']['$modelValue']['id'] : $property->housingtype_id;
        $property->propertytype_id = isset($request['form']['propertytype']['$modelValue']['id']) ? $request['form']['propertytype']['$modelValue']['id'] : $property->propertytype_id;
        $property->equipment_id = isset($request['form']['equipment']['$modelValue']['id']) ? $request['form']['equipment']['$modelValue']['id'] : $property->equipment_id;
        $property->city_id = isset($request['form']['city']['$modelValue']['id']) ? $request['form']['city']['$modelValue']['id'] : $property->city_id;
        $property->save();
        return $request;
    }

    public function editPropertyDetails(Request $request){


        //$selected_details = Detail::where('property_id', $request->input('id'))->get();

        $selected_details = $request['form']['details'];

        foreach($selected_details as $detail){

         
            if($detail['selected'] == '1'){
                /*$detalles = new Detail();
                $detalles->name = $detail['name'];
                $detalles->property_id = $request->input('id');
                //$detalles->id = $detail['id'];
                $detalles->save();*/
            }else{
                Detail::where('id', $detail['id'])->delete();
            }
        }



        return  $selected_details;
    }
}
