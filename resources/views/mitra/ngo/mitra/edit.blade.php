@extends('layouts.menubar')

@extends('mitra.ngo.mitra.tambahmitra')

@section('modal_edit')


<div class="modal fade" id="/edit/{{$m -> id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Mitra Lokal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            @foreach ($mitra as $m)
            <form action="/tambah-mitra/{{$m->id}}/update" role="form" method="POST">
                    @csrf
                    <input type="text" name="id" value="{{ $m -> id }}"> <br/>
                    <div class="form-group">
                        <label for="nama">Nama Mitra</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Mitra" value="{{ $m -> nama }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Mitra</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Mitra" value="{{ $m -> alamat }}" >
                    </div>
                    <div class="form-group">
                        <label for="registrasi">Nomor Izin Registrasi</label>
                        <input type="text" name="no_regis_izin" class="form-control" id="registrasi" placeholder="Nomor Registrasi" value="{{ $m -> no_regis_izin }}">
                    </div>
                    <div class="form-group">
                    <label>Nama Program</label>
                    <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                    </select>
                    </div>
                    @foreach ($lokal as $item)
                    <div class="form-group">
                        <label for="">Pembiayaan</label>
                        <input type="number" name="pembiayaan" class="form-control" id="biaya2" value="{{$item -> pembiayaan}}">
                    </div>
                    <div class="form-group">
                        <label for="">Durasi</label>
                        <div class="input-group">
                            <input type="text" name="durasi_awal" value="{{$item -> durasi_awal}}" class="form-control startdate2 datetimepicker-input" data-toggle="datetimepicker" data-target=".startdate2"/>
                            <div class="input-group-append">
                            <span class="input-group-text">s/d</span>
                            </div>
                            <input type="text" name="durasi_akhir" value="{{$item -> durasi_akhir}}" class="form-control enddate2 datetimepicker-input" data-toggle="datetimepicker" data-target=".enddate2" />
                        </div>
                    </div>
                    @endforeach
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
    </div>
</div>    
@endsection

