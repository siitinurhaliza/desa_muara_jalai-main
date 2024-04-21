@extends('layaout.master')

@section('content')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Vertical Form</div>
                    <hr>

                    <form action="{{ route('datapenduduk.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="input-1">Name</label>
                            <input name="nama" id="nama" type="text" class="form-control" id="input-1"
                                placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="input-2">NIK</label>
                            <input name="NIK" id="NIK" type="text" class="form-control" id="input-2"
                                placeholder="Masukkan NIK">
                        </div>
                        <div class="form-group">
                            <label for="input-2">Tanggal Lahir</label>
                            <input name="Tanggal_Lahir" id="Tanggal_Lahir" type="text" class="form-control" id="input-2"
                                placeholder="Masukkan Tanggal_Lahir">
                        </div>
                        <div class="form-group">
                            <label for="input-2">Alamat</label>
                            <input name="Alamat" id="Alamat" type="text" class="form-control" id="input-2"
                                placeholder="Masukkan Alamat">
                        </div>
                        <div class="form-group">
                            <label for="input-2">No Hp</label>
                            <input name="No_Hp" id="No_Hp" type="text" class="form-control" id="input-2"
                                placeholder="Masukkan No_Hp">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-light px-5">Submit</button>
                            <a href="{{ route('datapenduduk.index') }}" class="btn btn-light px-5">Cancel</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div><!--End Row-->
@endsection
