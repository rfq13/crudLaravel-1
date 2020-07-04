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
    public static function edit($id)
    {
        $pertanyaan = pertanyaanModel::getId($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public static function update(Request $request, $id)
    {

        $update = pertanyaanModel::update($request->all(), $id);

        if ($update) {
            return redirect("/jawaban/$id");
        }
    }

    public static function delete($id)
    {
        $delete = pertanyaanModel::delete($id);
        if ($delete) {
            return redirect("/");
        }
    }
}
