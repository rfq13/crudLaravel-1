<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class pertanyaanModel
{

  public static function get()
  {
    $pertanyaan = DB::table('pertanyaan')->get();
    return $pertanyaan;
  }

  public static function save($data)
  {
    $new_pertanyaa = DB::table('pertanyaan')->insert($data);
    return $new_pertanyaa;
  }
}
