<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\LetterSubmissionDataTable;
use Validator;
use PDF;
class LetterSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(LetterSubmissionDataTable $datatable)
    {
        return $datatable->render('letter.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verification($id)
    {
        $letter = \App\LetterSubmission::findOrFail($id);
        $letter->update(['status_pengerjaan' => 'Sudah Dikerjakan']);
        return response()->json(['status' => true, 'message' => 'Berhasil mengerjakan surat'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $letter = \App\LetterSubmission::findOrFail($id);
        $officials = \App\Official::all();
        return view('letter.edit',compact('letter','officials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $letter = \App\LetterSubmission::findOrFail($id);
        $input = $request->all();
        $dataValidator = [
            'official_id' => 'required|exists:officials,id',
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
        ];
        if($letter->nomor_surat != $request->nomor_surat){
            $dataValidator['nomor_surat'] = 'required|unique:letter_submissions,nomor_surat';
        }
        $validator = Validator::make($input,$dataValidator);
        if($validator->fails()){
            return response()->json(['status' => false, 'message' => $validator->errors()->all()], 400);
        }
        $letter->update([
            'official_id' => $request->official_id,
            'nomor_surat' => $request->nomor_surat,
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
            'isi_sk' => $request->isi_sk,
            'jenis_sk' => $request->jenis_sk,
        ]);
        if($request->has('cetak')){
            return response()->json(['status' => true, 'message' => 'Berhasil memperbarui dan cetak surat' , 'url' => route('letter.print',$letter->id)], 200);
        }
        return response()->json(['status' => true, 'message' => 'Berhasil memperbarui surat'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $letter = \App\LetterSubmission::findOrFail($id);
        $letter->delete();
        return response()->json(['status' => true, 'message' => 'Berhasil menghapus surat'], 200);
    }

    public function print($id)
    {
        $letter = \App\LetterSubmission::findOrFail($id);
        if(is_null($letter->nomor_surat) || is_null($letter->official_id) ){
            return redirect()->route('letter.edit',$letter->id)->with(['message' =>'Harap mengisi Nomor Surat atau Pejabat yang menandatangani surat terlebih dahulu sebelum mencetak']);
        }
        $pdf = PDF::loadView('letter.print', compact('letter'))->setPaper('A4', 'portrait');
        return $pdf->stream('surat_keterangan_'. $letter->nama_lengkap .'.pdf');
    }
}
