<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\SurveiModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Services\DataTable;

class DatatableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $tabel = $request->tabel;

            switch ($tabel) {
                case 'survei':
                    $data = SurveiModel::select('*');
                    return DataTables::of($data)
                        ->addIndexColumn()
                        ->editColumn('tanggal_mulai', function ($row) {
                            return Carbon::parse($row->tanggal_mulai)->format('d, M Y H:i');
                        })
                        ->editColumn('tanggal_selesai', function ($row) {
                            return Carbon::parse($row->tanggal_selesai)->format('d, M Y H:i');
                        })
                        ->addColumn('action', function ($row) {
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                            return $btn;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
                    break;

                default:
                    return [];
                    break;
            }
        }
    }
}
