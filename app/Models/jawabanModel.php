<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class jawabanModel
{
  public static function get($id)
  {
    $jawaban = DB::table('jawaban')
      ->join('pertanyaan', 'pertanyaan.id', '=', 'jawaban.id_pertanyaan')
      ->select('jawaban.*', 'pertanyaan.judul as judul', 'pertanyaan.isi as pisi', 'pertanyaan.id as pidi')
      ->where('pertanyaan.id', '=', $id)->get();

    return $jawaban;
  }

  public static function insert($data, $id)
  {
    unset($data['_token']);
    $data["status_jawaban"] = 0;
    $data["id_penjawab"] = 1;
    $jawaban = DB::table('jawaban')
      ->where('id_pertanyaan', '=', $id)
      ->insert($data);
    return $jawaban;
  }
}
