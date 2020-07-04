@extends('master')
@section('title','Edit Pertanyaan')
@section('content')
<div class="container-fluid">
  <div class="card">
    <h3 class="py-3 mx-auto">Edit Pertanyaan</h3>
    <div class="card-body">
      <div class="px-3">
        <form action="/pertanyaan/{{{$pertanyaan->id}}}" method="POST">
          @csrf
          @method("PUT")
          <div class="row">
            <div class="col-lg-5">
              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" value="{{{$pertanyaan->judul}}}" class="form-control" id="judul">
              </div>
              <div class="form-group">
                <label for="isi">Pertanyaan</label>
                <textarea type="text" name="isi" class="form-control" id="isi">{{{$pertanyaan->isi}}}</textarea>
              </div>
              <div class="form-group">
                <label for="Tgl-dibuat">Tgl-dibuat</label>
                <input type="text" class="form-control" name="tgl_dibuat" id="Tgl-dibuat" value="{{{$pertanyaan->tgl_dibuat}}}">
              </div>
              <div class="form-group">
                <label for="Tgl-update">Tgl-update</label>
                <input type="text" class="form-control" name="tgl_diperbaharui" id="Tgl-update" value="{{{$pertanyaan->tgl_diperbaharui}}}">
                <input type="hidden" class="form-control" name="id_penanya" id="idpenanya" value="1">
              </div>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection