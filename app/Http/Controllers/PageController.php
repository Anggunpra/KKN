<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        return view('front.history');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function information()
    {
        $information = \App\Information::paginate(9);
        return view('front.information',compact('information'));
    }

    
    public function team()
    {
        return view('front.team');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showInformation($slug)
    {
        $information = \App\Information::whereSlug($slug)->get();
        if($information->isEmpty()){
            abort(404);
        }
        $information = $information->first();
        return view('front.information_detail',compact('information'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showGraphic()
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
        return view('front.graphic',compact('data','periodes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('front.contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
