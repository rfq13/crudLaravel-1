<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jawabanModel;
use App\Models\pertanyaanModel;


class jawabanController extends Controller
{
    public static function index($id)
    {
        $pertanyaan = pertanyaanModel::getId($id);

        if (count(jawabanModel::get($id)) > 0) {
            $jawaban = jawabanModel::get($id);
        } else {
            $jawaban = [(object) [
                'id' => $pertanyaan->id,
                'judul' => $pertanyaan->judul,
                'pisi' => $pertanyaan->isi,
                'isi' => "kosong"
            ]];
        }

        return view('jawaban.index', compact('jawaban'));
    }
    public static function store(Request $request, $id)
    {
        $data = $request->all();
        $jawaban = jawabanModel::insert($data, $id);
        if ($jawaban) {
            return redirect("/jawaban/$id");
        }
    }
}
