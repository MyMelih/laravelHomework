<?php

namespace App\Http\Controllers;

use App\Models\Firma;
use Facade\FlareClient\View;
use Illuminate\Contracts\View\View as ViewView;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        return view('list');
    }

    public function firmaListele(Request $request)
    {
        if ($request->ajax()) {
            $data = Firma::latest();;
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '<div class="btn-group">
                                <button class="btn btn-sm btn-primary" name="editCountryBtn" data-id="' . $row['id'] . '" id="editCountryBtn">Düzenle</button>
                                <button class="btn btn-sm btn-danger" name="deleteCountryBtn" data-id="' . $row['id'] . '" id="deleteCountryBtn">Sil</button>
                            </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return Datatables::of($data);
    }

    function firmaDetay($id)
    {
        $data = Firma::findOrFail($id);
        return response()->json($data);
    }

    function firmaGuncelle(Request $request, $id)
    {
        $firma = Firma::find($id);
        if ($firma) {
            $firma->update($request->all());
            return response()->json(['success' => 'Firma başarıyla güncellendi.']);
        } else {
            return response()->json(['error' => 'Firma bulunamadı.']);
        }
    }

    public function firmaSil($id)
    {
        $firma = Firma::find($id);
        if ($firma) {
            $firma->delete();
            return response()->json(['success' => 'Firma başarıyla silindi.']);
        } else {
            return response()->json(['error' => 'Firma bulunamadı.']);
        }
    }
}
