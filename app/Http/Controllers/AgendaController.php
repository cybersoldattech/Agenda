<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    protected $rules = [];

    public function create(Request $request)
    {

        $reponse["error"]["code"] = "0"; 

        $create = Agenda::create([
            'name' => $request->eventName,
            'start_date' => $request->startDate,
            'end_date' => $request->endDate,
            'description' => $request->description,
        ]);

        if($create){            
            $reponse["message"] = array();
            $reponse["message"]["code"] = "200";  
            $reponse["message"]["description"] = "Enregistrement crée avec succès !!!";
            echo $reponse_json = json_encode($reponse, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);		
            exit;		
	
        }else{
            $reponse["error"]["code"] = "1"; 
        }
       
    }

    public function displayEvent(){
        
        return view('eventlist',[
            'events' => Agenda::get(),
        ]);
    }

}
