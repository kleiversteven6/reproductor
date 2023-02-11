<?php

namespace App\Http\Controllers;

use App\Models\Ttitles;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Storage;
class TtitlesController extends Controller
{
    public function save(Request $request) //
    {
        ini_set('memory_limit','10240M');
        /* $modelCab= new Ttitles;
        $modelCab['TTITLES_Name'] = $request->nombre;
        $modelCab['TTITLES_Pista'] = 3;
        $modelCab['TTITLES_Status'] = 1;
        $modelCab->save();*/
        dd($request->file('file'));
        if ($request->file()) {
            $file = $request->file('file')->getClientOriginalName();
            
            $request->file('file')->storeAs("public/music", $file);
        }

    }
    public function listMusic(Request $request) //
    {
         $list = Ttitles::get();
         $li=array();
         $c=0;
         foreach($list as $l){
            $li[$c]['TTITLES_Name']=$l->TTITLES_Name;
            $li[$c]['TTITLES_Pista']= asset(Storage::url('public/music/' . $l->TTITLES_Pista));
            $c++;
         }
         return json_encode($li);
    }
    
}