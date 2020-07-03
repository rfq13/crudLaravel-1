<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaanModel;

class pertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan = pertanyaanModel::get();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function insert()
    {
        return view('pertanyaan.insert');
    }
    public function save(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $save = pertanyaanModel::save($data);
        if ($save) {
            return redirect('/');
        }
    }
}
