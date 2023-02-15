<?php

namespace App\Http\Controllers;

use Excel;

use Illuminate\Http\Request;
use App\Imports\FirmaImport;
use App\Exports\FirmaExport;
use App\Models\Firma;
use Yajra\DataTables\DataTables;


class FirmaController extends Controller
{
    public function indir()
    {
        return Excel::download(new FirmaExport, 'firma.xlsx');
    }

    public function excelYukle(Request $request)
    {
        Excel::import(new FirmaImport, $request->file('file'));
        return redirect()->back()->with('success', 'Kayıtlar başarıyla yüklendi.');
    }
}
