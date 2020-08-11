<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Illuminate\Support\Str;
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
    public function letter()
    {
        return view('front.letter_submission');
    }

    public function letterSubmission(Request $request)
    {
        $input = $request->all();
        $dataValidator = [
            'nama_lengkap' => 'required|string',
            'nik' => 'required|numeric|digits_between:16,16',
            'tempat_lahir' => 'required|string',
            'status_kawin' => 'required|in:Kawin,Belum Kawin,Cerai Hidup,Cerai Mati',
            'nomor_hp' => 'required|numeric|digits_between:9,14',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|in:Islam,Hindu,Budha,Kristen,Katolik,Protestan',
            'rt' => 'required|string',
            'rw' => 'required|string',
            'dusun' => 'required|in:Dusun Sidoagung,Dusun Sidodadi',
            'pekerjaan' => 'required|string',
            'keperluan_sk' => 'required|string',
            'isi_sk' => 'required|string',
            'jenis_sk' => 'required|in:Surat Keterangan Usaha,Surat Keterangan Domisili,Surat Keterangan Kehilangan,Lain-lain',
            'upload_surat_pengantar' => 'required|file|mimes:jpeg,jpg,png,pdf',
            'upload_berkas_pendukung' => 'nullable|file|mimes:jpeg,jpg,png,pdf',
        ];
        $validator = Validator::make($input,$dataValidator);
        if($validator->fails()){
            return response()->json(['status' => false, 'message' => $validator->errors()->all()], 400);
        }
        if($request->hasFile('upload_surat_pengantar')) {
            $uploadBerkas = $request->file('upload_surat_pengantar');
            $destinationPath = 'uploads/pengantar-rt/berkas/'; // upload path
            $fileName1 = date('YmdHis'). '-' . Str::random(25) . "_scan." . $uploadBerkas->getClientOriginalExtension();
            $uploadBerkas->move($destinationPath, $fileName1);
            $fileName1 = $destinationPath.$fileName1;
        }
        if($request->hasFile('upload_berkas_pendukung')) {
            $uploadBerkas = $request->file('upload_berkas_pendukung');
            $destinationPath = 'uploads/pendukung/berkas/'; // upload path
            $fileName2 = date('YmdHis'). '-' . Str::random(25) . "_scan." . $uploadBerkas->getClientOriginalExtension();
            $uploadBerkas->move($destinationPath, $fileName2);
            $fileName2 = $destinationPath.$fileName2;
        }
        $letterSubmission = \App\LetterSubmission::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'status_kawin' => $request->status_kawin,
            'nomor_hp' => $request->nomor_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'dusun' => $request->dusun,
            'pekerjaan' => $request->pekerjaan,
            'keperluan_sk' => $request->keperluan_sk,
            'jenis_sk' => $request->jenis_sk,
            'isi_sk' => $request->isi_sk,
            'upload_surat_pengantar' => $fileName1,
            'upload_berkas_pendukung' => isset($fileName2) ? $fileName2 : '',
        ]);
        return response()->json(['status' => true, 'message' => 'Berhasil mengajukan surat, mohon untuk menunggu konfirmasi dari petugas'], 200);
    }
}
