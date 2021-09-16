@extends('layouts.main')

@section('judul','Form Pendaftaran')
    
@section('konten')

<div class="container col-md-6" style="margin-top:30px; margin-bottom:30px">
    <h2>
        FORM PENDAFTARAN
    </h2>
    <br>
    <div class="card">
        <div class="card-body">        
            <form>                
                <div class="container" id="orang1">
                    <h6>DATA PESERTA</h6>
                    <h6>Ketua</h6>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama1">Nama</label>
                            <input type="text" class="form-control" id="nama1">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nim1">NIM</label>
                            <input type="text" class="form-control" id="nim1">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="institusi1">Institusi</label>
                            <select id="institusi1" class="form-control">
                                <option selected disabled value>pilih institusi</option>
                                <option>Telkom University</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="institusi1">Fakultas</label>
                            <select id="institusi1" class="form-control">
                                <option selected disabled value>pilih fakultas</option>
                                <option>...</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="jurusan1">Jurusan</label>
                            <select id="jurusan1" class="form-control">
                                <option selected disabled value>pilih jurusan</option>
                                <option>...</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="form-group col-md-6">
                    <label for="jumlahAnggota">Jumlah Anggota</label>
                    <select id="jumlahAnggota" class="form-control" onchange="fun_showtextbox()">
                        <option selected disabled value="0">pilih jumlah anggota dalam 1 tim</option>
                        <option value="orang2">2 orang</option>
                        <option value="orang3">3 orang</option>
                    </select>
                </div>
                <br>
                <div class="container" id="orang2" style="display: none">
                    <h6>Anggota 1</h6>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama2">Nama</label>
                            <input type="text" class="form-control" id="nama1">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nim2">NIM</label>
                            <input type="text" class="form-control" id="nim1">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="institusi2">Institusi</label>
                            <select id="institusi2" class="form-control">
                                <option selected disabled value>pilih institusi</option>
                                <option>Telkom University</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="institusi2">Fakultas</label>
                            <select id="institusi2" class="form-control">
                                <option selected disabled value>pilih fakultas</option>
                                <option>...</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="jurusan2">Jurusan</label>
                            <select id="jurusan2" class="form-control">
                                <option selected disabled value>pilih jurusan</option>
                                <option>...</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="container" id="orang3" style="display: none">
                    <h6>Anggota 2</h6>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama3">Nama</label>
                            <input type="text" class="form-control" id="nama3">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nim3">NIM</label>
                            <input type="text" class="form-control" id="nim3">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="institusi3">Institusi</label>
                            <select id="institusi3" class="form-control">
                                <option selected disabled value>pilih institusi</option>
                                <option>Telkom University</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="institusi3">Fakultas</label>
                            <select id="institusi3" class="form-control">
                                <option selected disabled value>pilih fakultas</option>
                                <option>...</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="jurusan3">Jurusan</label>
                            <select id="jurusan3" class="form-control">
                                <option selected disabled value>pilih jurusan</option>
                                <option>...</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telp">No Telp Ketua</label>
                            <input type="text" class="form-control" id="telp">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email Ketua</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <br>
                    <h6>DATA DOSEN</h6>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="namadosen">Nama Dosen</label>
                            <input type="text" class="form-control" id="namadosen">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">NRP Dosen</label>
                            <input type="nrpdosen" class="form-control" id="nrpdosen">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telpdosen">No Telp Dosen</label>
                            <input type="text" class="form-control" id="telpdosen">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <br>
                    <h6>DATA PROPOSAL</h6>
                    <div class="form-group">
                        <label for="judulproposal">Judul Proposal</label>
                        <input type="text" class="form-control" id="judulproposal">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="provinsi">Provinsi</label>
                            <select id="provinsi" class="form-control">
                                <option selected disabled value>pilih provinsi</option>
                                <option>...</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kotakab">Kota/ Kabupaten</label>
                            <select id="kotakab" class="form-control">
                                <option selected disabled value>pilih kota/kabupaten</option>
                                <option>...</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="urlyoutube">URL Youtube</label>
                            <input type="text" class="form-control" id="urlyoutube">
                        </div>
                        <div class="custom-file col-md-6" style="margin-top: 32px">
                            <input type="file" class="custom-file-input" id="fileproposal">
                            <label class="custom-file-label" for="fileproposal" data-browse="Upload File">file proposal pdf</label>
                        </div> 
                    </div>
                </div>

                <br>
                <button class="btn btn-primary" type="submit" style="margin-left: 16px">Submit Proposal</button>
              </form>
        </div>
    </div>
</div>

@endsection