<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\SurveiModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SurveiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('administrator.survei');
    }

    public function simpan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['prm' => false, 'msg' => $validator->errors()->toArray()]);
        } else {
            try {

                SurveiModel::updateOrCreate(
                    [
                        'survei_id' => $request->survei_id
                    ],
                    [
                        'user_id' => Auth::user()->id,
                        'nama' => $request->nama,
                        'tanggal_mulai' => $request->tanggal_mulai,
                        'tanggal_selesai' => $request->tanggal_selesai
                    ]
                );

                return response()->json(['prm' => true, 'msg' => 'Data saved successfully.']);
            } catch (\Exception $e) {
                return response()->json(['prm' => false, 'msg' => $e->getMessage()]);
            }
        }
    }
}
