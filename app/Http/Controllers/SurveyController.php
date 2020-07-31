<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\SurveyDataTable;
use Validator;
class SurveyController extends Controller
{
    public function index(SurveyDataTable $datatable)
    {
        return $datatable->render('survey.index');
    }

    public function create()
    {
        $periodes = \App\Periode::all();
        $attributes = \App\Attribute::all();
        return view('survey.create', compact('attributes', 'periodes'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $dataValidator = [];
        $dataValidator['periode'] = 'required';
        foreach (\App\Attribute::all() as $item) {
            $valid = '';
            if ($item->wajib == 1) {
                $valid .= 'required|';
            }
            if ($item->tipe_input == 'Isian Text') {
                $valid .= 'string';
            } elseif ($item->tipe_input == 'Angka') {
                $valid .= 'numeric|min:1';
            } else {
                $valid .= 'in:'.$item->nilai;
            }
            $dataValidator[$item->nama_atribut] = $valid;
        }
        $validator = Validator::make($input, $dataValidator);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors()->all()], 400);
        }
        $checkPeriode = \App\Survey::wherePeriodeId($request->periode)->whereUserId(auth()->user()->id)->get();
        if (!$checkPeriode->isEmpty()) {
            return response()->json(['status' => false, 'message' => 'Anda telah menginputkan pada periode ini'], 403);
        }
        foreach (\App\Attribute::all() as $item) {
            $survey = \App\Survey::firstOrCreate([
                'periode_id' => $request->periode,
                'attribute_id' => $item->id,
                'user_id' => auth()->user()->id,
                'attribute_value' => $request->{$item->nama_atribut},
            ]);
        }
        return response()->json(['status' => true, 'message' => 'Berhasil menambahkan survey']);
    }
}
