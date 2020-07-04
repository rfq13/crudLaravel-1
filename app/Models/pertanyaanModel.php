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
  public static function getId($id)
  {
    $pertanyaan = DB::table('pertanyaan')
      ->where('id', '=', $id)
      ->first();
    return $pertanyaan;
  }

  public static function save($data)
  {
    $pertanyaan = DB::table('pertanyaan')->insert($data);
    return $pertanyaan;
  }

  public static function update($data, $id)
  {
    unset($data['_token']);
    unset($data['_method']);

    $update = DB::table('pertanyaan')
      ->where('id', '=', $id)
      ->update($data);
    return $update;
  }

  public static function delete($id)
  {
    $delete = DB::table('pertanyaan')
      ->where('id', '=', $id)
      ->delete();

    return $delete;
  }
}
