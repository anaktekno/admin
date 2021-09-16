<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Proposal;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Proposal::where('Periksa1_UserID', auth()->user()->id)
            ->orWhere('Periksa2_UserId', auth()->user()->id)
            ->get();

        return view('dashboard', ['pendaftaran' => $pendaftaran]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "original" => "required",
            "inovasi" => "required",
            "kolaborasi" => "required",
            "kebermanfaatan" => "required",
            "sustainability" => "required",
            "TTKI" => "required",
            "video" => "required",
            "komentar" => "required",
            "anggaran" => "required",
        ]);
        Nilai::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Proposal berhasil dinilai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detil = Proposal::where('Id', $id)->first();
        foreach ($detil->nilai as $nilai) {
            if ($nilai->user_id == auth()->user()->id) {
                return redirect()->back()->with('danger', 'Ups, Seperti nya anda sudah menilai proposal ini');
            }
        }

        return view('detil', compact('detil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function proposal()
    {
        $proposal = Proposal::all();

        return view('all', [
            "proposal" => $proposal,

        ]);
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
        DB::table('tbl_proposal')->where('id', $id)->update([
            "Setuju" => $request->value
        ]);

        return redirect()->back()->with('success', 'Sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function biaya(Request $request)
    {
        DB::table('tbl_proposal')->where('id', $request->id)->update([
            "biaya" => $request->biaya
        ]);

        return redirect()->back()->with('success', 'Biaya berhasil ditambahkan');
    }
}
