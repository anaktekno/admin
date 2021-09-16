@extends('layouts.main')
@section('judul','Detil Pendaftaran')
@section('konten')

<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">

      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <th scope="row">
                    <h2>Penilaian</h2>
                  </th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <a class="btn btn-warning" href="{{$detil -> Youtubeurl }}" role="button" target="_blank">URL Video</a>
                    <a class="btn btn-success" href="{{$detil -> File_Proposal }}" role="button" target="_blank">File Proposal</a>
                  </td>
                </tr>
              </tbody>
            </table>
            <br>
            <table class="table table-sm">
              <thead>
                <tr>
                  <th scope="col" style="width: 20%">Judul Proposal</th>
                  <th scope="col">{{$detil -> Judul_Proposal }}</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Provinsi</th>
                  <td>{{$detil -> Provinsi }}</td>
                </tr>
                <tr>
                  <th scope="row">Kota/ Kabupaten</th>
                  <td>{{$detil -> Kota_Kabupaten }}</td>
                </tr>

                {{-- <tr>
                          <th scope="row">Nama Ketua</th>
                          <td>{{$detil -> Nama_Anggota_1_Ketua }}</td>
                </tr>
                <tr>
                  <th scope="row">NIM Ketua</th>
                  <td>{{$detil -> NIM_Anggota_1 }}</td>
                </tr>
                <tr>
                  <th scope="row">Institusi Ketua</th>
                  <td>{{$detil -> Institusi_Anggota_1 }}</td>
                </tr>
                <tr>
                  <th scope="row">Fakultas Ketua</th>
                  <td>{{$detil -> Fakultas_Anggota_1 }}</td>
                </tr>
                <tr>
                  <th scope="row">Program Studi Ketua</th>
                  <td>{{$detil -> Program_Studi_Anggota_1 }}</td>
                </tr>

                <tr>
                  <th scope="row">Nama Ketua</th>
                  <td>{{$detil -> Nama_Anggota_2 }}</td>
                </tr>
                <tr>
                  <th scope="row">NIM Ketua</th>
                  <td>{{$detil -> NIM_Anggota_2 }}</td>
                </tr>
                <tr>
                  <th scope="row">Institusi Ketua</th>
                  <td>{{$detil -> Institusi_Anggota_2 }}</td>
                </tr>
                <tr>
                  <th scope="row">Fakultas Ketua</th>
                  <td>{{$detil -> Fakultas_Anggota_2 }}</td>
                </tr>
                <tr>
                  <th scope="row">Program Studi Ketua</th>
                  <td>{{$detil -> Program_Studi }}</td>
                </tr>

                <tr>
                  <th scope="row">Nama Ketua</th>
                  <td>{{$detil -> Nama_Anggota_3 }}</td>
                </tr>
                <tr>
                  <th scope="row">NIM Ketua</th>
                  <td>{{$detil -> NIM_Anggota_3 }}</td>
                </tr>
                <tr>
                  <th scope="row">Institusi Ketua</th>
                  <td>{{$detil -> Institusi_Anggota_3 }}</td>
                </tr>
                <tr>
                  <th scope="row">Fakultas Ketua</th>
                  <td>{{$detil -> Fakultas_Anggota_3 }}</td>
                </tr>
                <tr>
                  <th scope="row">Program Studi Ketua</th>
                  <td>{{$detil -> Program_Studi_Anggota_3 }}</td>
                </tr>

                <tr>
                  <th scope="row">No Telp Ketua</th>
                  <td>{{$detil -> Nomor_Telp_Ketua }}</td>
                </tr>
                <tr>
                  <th scope="row">Alamat Email Ketua</th>
                  <td>{{$detil -> Alamat_Email }}</td>
                </tr>

                <tr>
                  <th scope="row">Dosen Pembimbing</th>
                  <td>{{$detil -> Nama_Dosen }}</td>
                </tr>
                <tr>
                  <th scope="row">NRP Dosen</th>
                  <td>{{$detil -> Nip_Dosen }}</td>
                </tr>

                <tr>
                  <th scope="row">No Telp Dosen</th>
                  <td>{{$detil -> Nomor_Telp_Dosen }}</td>
                </tr> --}}

              </tbody>
            </table>

            <br>

            <form form class="form-signin" method="POST" action="{{route('nilai')}}">
              @csrf
              <input type="hidden" name="proposal_id" value="{{$detil->Id}}">
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <div class="container">
                <p><b>Orisinalitas Ide atau Gagasan</b><br>Original - Bersifat baru dan melibatkan teknologi digital |
                  Identifiable - Identifikasi masalah jelas dan solusi berkaitan</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="original" id="orisinalitas1" value=10>
                  <label class="form-check-label" for="orisinalitas1">1</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="original" id="orisinalitas2" value=20>
                  <label class="form-check-label" for="orisinalitas2">2</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="original" id="orisinalitas3" value=30>
                  <label class="form-check-label" for="orisinalitas3">3 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="original" id="orisinalitas4" value=40 disabled>
                  <label class="form-check-label" for="orisinalitas4">4 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="original" id="orisinalitas5" value=50>
                  <label class="form-check-label" for="orisinalitas5">5 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="original" id="orisinalitas6" value=60>
                  <label class="form-check-label" for="orisinalitas6">6 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="original" id="orisinalitas7" value=70>
                  <label class="form-check-label" for="orisinalitas7">7 </label>
                </div>
                <p>
                  @error('original')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                </p>
              </div>

              <br>
              <div class="container">
                <p><b>Inovasi Project Sosial</b><br>Applicable - Masuk akal dan dapat diterapkan | Publishable -
                  Memiliki potensi untuk dipublikasikan</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inovasi" id="inovasi1" value=20>
                  <label class="form-check-label" for="inovasi1">1</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inovasi" id="inovasi2" value=40>
                  <label class="form-check-label" for="inovasi2">2</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inovasi" id="inovasi3" value=60>
                  <label class="form-check-label" for="inovasi3">3 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inovasi" id="inovasi4" value=80 disabled>
                  <label class="form-check-label" for="inovasi4">4 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inovasi" id="inovasi5" value=100>
                  <label class="form-check-label" for="inovasi5">5 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inovasi" id="inovasi6" value=120>
                  <label class="form-check-label" for="inovasi6">6 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inovasi" id="inovasi7" value=140>
                  <label class="form-check-label" for="inovasi7">7 </label>
                </div>
                <p>
                  @error('inovasi')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                </p>
              </div>
              <br>
              <div class="container">
                <p><b>Kolaborasi</b><br>Cooperation - Solusi antardisiplin ilmu dalam tim | Coordination - Memiliki
                  pembagian jobdesc sesuai dengan bidang ilmu anggota tim</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="kolaborasi" id="kolaborasi1" value=15>
                  <label class="form-check-label" for="kolaborasi1">1</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="kolaborasi" id="kolaborasi2" value=30>
                  <label class="form-check-label" for="kolaborasi2">2</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="kolaborasi" id="kolaborasi3" value=45>
                  <label class="form-check-label" for="kolaborasi3">3 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="kolaborasi" id="kolaborasi4" value=60 disabled>
                  <label class="form-check-label" for="kolaborasi4">4 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="kolaborasi" id="kolaborasi5" value=75>
                  <label class="form-check-label" for="kolaborasi5">5 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="kolaborasi" id="kolaborasi6" value=90>
                  <label class="form-check-label" for="kolaborasi6">6 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="kolaborasi" id="kolaborasi7" value=105>
                  <label class="form-check-label" for="kolaborasi7">7 </label>
                </div>
                <p>
                  @error('kolaborasi')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                </p>
              </div>
              <br>

              <div class="container">
                <p><b>Kebermanfaatan</b><br>Maintainable - Solusi dapat dipergunakan dan dioperasikan | Synergy -
                  Melibatkan peran serta masyarakat desa sasar</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="kebermanfaatan" id="kebermanfaatan1" value=25>
                  <label class="form-check-label" for="kebermanfaatan1">1</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="kebermanfaatan" id="kebermanfaatan2" value=50>
                  <label class="form-check-label" for="kebermanfaatan2">2</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="kebermanfaatan" id="kebermanfaatan3" value=74>
                  <label class="form-check-label" for="kebermanfaatan3">3 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="kebermanfaatan" id="kebermanfaatan4" value=100
                    disabled>
                  <label class="form-check-label" for="kebermanfaatan4">4 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="kebermanfaatan" id="kebermanfaatan5" value=125>
                  <label class="form-check-label" for="kebermanfaatan5">5 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="kebermanfaatan" id="kebermanfaatan6" value=150>
                  <label class="form-check-label" for="kebermanfaatan6">6 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="kebermanfaatan" id="kebermanfaatan7" value=175>
                  <label class="form-check-label" for="kebermanfaatan7">7 </label>
                </div>
                <p>
                  @error('kebermanfaatan')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                </p>
              </div>
              <br>
              <div class="container">
                <p><b>Sustainability</b><br>Designed - Memiliki Roadmap | Expandable - Solusi berpotensi untuk dapat
                  ditingkatkan dalam rangka mencapai target kebermanfaatan dan impact yang lebih besar</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sustainability" id="sustainability1" value=20>
                  <label class="form-check-label" for="sustainability1">1</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sustainability" id="sustainability2" value=40>
                  <label class="form-check-label" for="sustainability2">2</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sustainability" id="sustainability3" value=60>
                  <label class="form-check-label" for="sustainability3">3 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sustainability" id="sustainability4" value=80
                    disabled>
                  <label class="form-check-label" for="sustainability4">4 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sustainability" id="sustainability5" value=100>
                  <label class="form-check-label" for="sustainability5">5 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sustainability" id="sustainability6" value=120>
                  <label class="form-check-label" for="sustainability6">6 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sustainability" id="sustainability7" value=140>
                  <label class="form-check-label" for="sustainability7">7 </label>
                </div>
                <p>
                  @error('sustainability')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                </p>
              </div>
              <br>

              <div class="container">
                <p><b>Tata Kata dan Penulisan</b> <br>Clarity - Alur penjelasan yang jelas dan mudah dipahami, serta
                  mengikuti kaidah kebahasaan</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TTKI" id="ttki1" value=10>
                  <label class="form-check-label" for="ttki1">1</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TTKI" id="ttki2" value=20>
                  <label class="form-check-label" for="ttki2">2</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TTKI" id="ttki3" value=30>
                  <label class="form-check-label" for="ttki3">3 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TTKI" id="ttki4" value=40 disabled>
                  <label class="form-check-label" for="ttki4">4 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TTKI" id="ttki5" value=50>
                  <label class="form-check-label" for="ttki5">5 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TTKI" id="ttki6" value=60>
                  <label class="form-check-label" for="ttki6">6 </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TTKI" id="ttki7" value=70>
                  <label class="form-check-label" for="ttki7">7 </label>
                </div>
                <p>
                  @error('TTKI')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                </p>
              </div>
              <br>

              <div class="container">
                <p><b>Video</b></p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="video" id="video1" value=0>
                  <label class="form-check-label" for="video1">Ada </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="video" id="video2" value=1>
                  <label class="form-check-label" for="video2">Tidak Ada </label>
                </div>

                @error('video')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <br><br>
                <div class="form-group">
                  <label for="catatan">Catatan Reviewer</label>
                  <textarea class="form-control" id="catatan" name="komentar" rows="3"></textarea>
                  @error('komentar')
                  <small class="text-danger">{{$message}}</small>
                  @enderror

                </div>

                <div class="form-group">
                  <label for="anggaran">Rekomendasi Anggaran</label>
                  <textarea class="form-control" id="anggaran" name="anggaran" rows="3"></textarea>

                  @error('anggaran')
                  <small class="text-danger">{{$message}}</small>
                  @enderror

                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

          </div>
        </div>
      </div>
    </div>

  </div>
</div><!-- .animated -->
</div><!-- .content -->

@endsection