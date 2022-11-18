@extends('layouts.app')

@section('content')
<!-- Start Tulis Resep -->
<div class="tresep">
    <div class="container">
        <div class="col-12 mt-5">
            <div class="card border-0">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p class="title">Tulis Resepmu...</p>
                    <div class="mb-3">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <p class="title2 m-0 mb-2">Bahan - Bahan</p>
                    <div class="mb-2">
                        <input type="text" name="bahan[0]" class="form-control">
                    </div>
                    <div class="mb-2">
                        <input type="text" name="bahan[1]" class="form-control">
                    </div>
                    <div id="form_dinamisbhn"></div>
                    <div class="btn-addmore d-flex ">
                        <div class="col-auto">
                            <button type="button" class="btn" id="tambahbhn">+ Item Bahan</button>
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn" id="hapusbhn">Hapus</button>
                        </div>
                    </div>
                    <p class="title2 mt-1">Langkah Pembuatan</p>
                    <div class="mb-2">
                      <input type="text" name="langkah[0]" class="form-control">
                  </div>
                  <div class="mb-2">
                      <input type="text" name="langkah[1]" class="form-control">
                  </div>
                  <div id="form_dinamislangkah"></div>
                  <div class="btn-addmore d-flex">
                      <div class="col-auto">
                          <button type="button" class="btn" id="tambahlangkah">+ Item Bahan</button>
                      </div>
                      <div class="col-auto">
                          <button type="button" class="btn" id="hapuslangkah">Hapus</button>
                      </div>
                  </div>
                  <label for="" class="form-label mt-2">Upload Foto Masakan</label>
                  <div class="form-upload">
                        <input type="file" class="form-control" name="photo">
                  </div>
                  <div class="text-center">
                    <button class="btn btn-submit mt-4" type="submit">Terbitkan Resep</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
  </div>
  <!-- End Resep -->

  <script>
    $(document).ready(function() {
        var id_bhn = 0;
        $('#tambahbhn').click(function() {
            id_bhn++;
            $('#form_dinamisbhn').append('<div class="mb-2" id="bahan'+id_bhn+'"> <input type="text" name="bahan['+id_bhn+']" class="form-control"> </div>')
        })
        $('#hapusbhn').click(function() {
          $('#bahan'+ id_bhn).remove();
          id_bhn--;
        })
    })
    $(document).ready(function() {
        var id_langkah = 0;
        $('#tambahlangkah').click(function() {
            id_langkah++;
            $('#form_dinamislangkah').append('<div class="mb-2" id="langkah'+id_langkah+'"> <input type="text" name="langkah['+id_langkah+']" class="form-control"> </div>')
        })
        $('#hapuslangkah').click(function() {
          $('#langkah'+ id_langkah).remove();
          id--;
        })
    })
  </script>

@endsection