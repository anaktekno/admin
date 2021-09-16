@extends('layouts.main')
@section('judul','Sistem Input Penilaian')
@section('konten')

<div class="col-md-12">
    <div class="card">

<div class="container col-md-10" style="margin-top:30px; margin-bottom:30px">
    <h4>
        SISTEM INPUT PENILAIAN
    </h4>
    <table class="table table-borderless">
        <tbody>
            <tr>
                <td>
                    Judul
                </td>
                <td>: Rancangan Alat atau Mesin Daur Ulang Sampah Terhadap Komunitas Bank Sampah (Bank Sampah Hijau Lestari Kiaracondong)</td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td>: Jawa Barat</td>
            </tr><tr>
                <td>Kota/Kabupaten</td>
                <td>: Kota Bandung</td>
            </tr>
        </tbody>
    </table>
    <button type="button" class="btn btn-danger">File Proposal</button>
    <button type="button" class="btn btn-warning">URL Video</button>
    <br><br>
    

      <button type="button" class="btn btn-primary float-right">Submit Nilai</button>
      <br><br>
</div>
    </div>
</div>


@endsection