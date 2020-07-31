<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [];
        $attributes = \App\Attribute::all();
        $periodes = \App\Periode::all();
        foreach ($attributes as $item) {
            $dataGrafik = [];
            if($item->tipe_input == 'Dropdown'){
                $attributeNames = explode('_',$item->nama_atribut);
                $attributeName = '';
                foreach ($attributeNames as $attribute) {
                    $attributeName .= $attribute . ' ';
                }
                $dataGrafik['nama_grafik'] = 'Grafik masyarakat dengan pertanyaan '.$attributeName ;
                $dataGrafik['id_grafik'] = $item->nama_atribut ;
                $dataGrafik['label'] = $item->surveys()->groupBy('attribute_value')->pluck('attribute_value')->toArray();
                $getSurveys = DB::table('surveys')
                        ->select('attribute_value', DB::raw('count(*) as total'))
                        ->groupBy('attribute_value')
                        ->whereAttributeId($item->id);
                if(request()->has('periode')){
                    $getSurveys = $getSurveys->wherePeriodeId(request()->periode);
                }
                $dataGrafik['label_total'] = $getSurveys->get()->pluck('total')->toArray();
                $data[] = $dataGrafik;
            }
        }
        // dd($data);
        return view('dashboard-user',compact('data','periodes'));
    }
}
