@extends('layouts.main')
@section('judul','Data Proposal')
@section('konten')

<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <h2>
                {{$proposal->Judul_Proposal}}
            </h2>
        </div>

        <div class="card-body">
            <a class="btn my-2 col-sm-2 text-white btn-dark"> <i
                class="menu-icon fa fa-file-text"></i>
                Nilai Total: {{
                    ($proposal->nilai[0]->original+
                    $proposal->nilai[0]->inovasi+
                    $proposal->nilai[0]->kolaborasi+
                    $proposal->nilai[0]->kebermanfaatan+
                    $proposal->nilai[0]->sustainability+
                    $proposal->nilai[0]->TTKI +
                    $proposal->nilai[1]->original +
                    $proposal->nilai[1]->inovasi +
                    $proposal->nilai[1]->kolaborasi +
                    $proposal->nilai[1]->kebermanfaatan +
                    $proposal->nilai[1]->sustainability +
                    $proposal->nilai[1]->TTKI)/2}}</a>
            <a class="btn my-2 col-sm-2 btn-danger" href="{{$proposal->File_Proposal}}" target="_blank"> <i
                class="menu-icon fa fa-download"></i>
            File Proposal</a>
            <a class="btn my-2 col-sm-2 text-white btn-warning" href="{{$proposal->Youtubeurl}}" target="_blank"> <i
                class="menu-icon fa fa-desktop"></i>
            Video Proposal</a>
            <table class="table table-sm">
                <tbody>
                    <tr>
                        <th scope="col" style="width: 20%">Reviewer 1</th>
                        <th scope="col"></th>
                    </tr>
                    <tr>
                        <td scope="row">• Komentar</td>
                        <td>{{$proposal->nilai[0]->komentar }}</td>
                    </tr>
                    <tr>
                        <td scope="row">• Rekomendasi Anggaran</td>
                        <td>{{$proposal->nilai[0]->anggaran }}</td>
                    </tr>
                    <tr>
                        <td scope="row">• Nilai Detail</td>
                        <td>
                            Orisinalitas Ide: <b>{{$proposal->nilai[0]->original }}</b> |
                            Inovasi: <b>{{$proposal->nilai[0]->inovasi }}</b> |
                            Kolaborasi: <b>{{$proposal->nilai[0]->kolaborasi }}</b> |
                            Kebermanfaatan: <b>{{$proposal->nilai[0]->kebermanfaatan }}</b> |
                            Sustainability: <b>{{$proposal->nilai[0]->sustainability }}</b> |
                            Tata Kata dan Penulisan: <b>{{$proposal->nilai[0]->TTKI }}
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">• Nilai Reviewer 1</td>
                        <td>
                            <b>{{$proposal->nilai[0]->original+
                            $proposal->nilai[0]->inovasi+
                            $proposal->nilai[0]->kolaborasi+
                            $proposal->nilai[0]->kebermanfaatan+
                            $proposal->nilai[0]->sustainability+
                            $proposal->nilai[0]->TTKI }}</b>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col" style="width: 20%">Reviewer 2</th>
                        <th scope="col">{{$proposal->nilai[1]->user->name ?? '-'}}</th>
                    </tr>

                    <tr>
                        <td scope="row">• Komentar Reviewer</td>
                        <td>{{$proposal->nilai[1]->komentar ?? '-'}}</td>
                    </tr>
                    <tr>
                        <td scope="row">• Rekomendasi Anggaran</td>
                        <td>{{$proposal->nilai[1]->anggaran ?? '-'}}</td>
                    </tr>
                    <tr>
                        <td scope="row">• Nilai Reviewer 2</td>
                        <td>
                            Orisinalitas Ide: <b>{{$proposal->nilai[1]->original ?? '-'}}</b> |
                            Inovasi: <b>{{$proposal->nilai[1]->inovasi ?? '-'}}</b> |
                            Kolaborasi: <b>{{$proposal->nilai[1]->kolaborasi ?? '-'}}</b> |
                            Kebermanfaatan: <b>{{$proposal->nilai[1]->kebermanfaatan ?? '-'}}</b> |
                            Sustainability: <b>{{$proposal->nilai[1]->sustainability ?? '-'}}</b> |
                            Tata Kata dan Penulisan: <b>{{$proposal->nilai[1]->TTKI ?? '-'}}</b>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">• Nilai Total</td>
                        <td>
                            <b>{{$proposal->nilai[1]->original +
                            $proposal->nilai[1]->inovasi +
                            $proposal->nilai[1]->kolaborasi +
                            $proposal->nilai[1]->kebermanfaatan +
                            $proposal->nilai[1]->sustainability +
                            $proposal->nilai[1]->TTKI}}</b>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col" style="width: 20%">Judul Proposal</th>
                        <th scope="col">{{$proposal -> Judul_Proposal }}</th>
                    </tr>
                    <tr>
                        <td scope="row">Provinsi</td>
                        <td>{{$proposal -> Provinsi }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Kota/ Kabupaten</td>
                        <td>{{$proposal -> Kota_Kabupaten }}</td>
                    </tr>

                    <tr>
                        <th scope="row">Nama Ketua</th>
                        <th>{{$proposal -> Nama_Anggota_1_Ketua }}</th>
                    </tr>
                    <tr>
                        <td scope="row">NIM Ketua</td>
                        <td>{{$proposal -> NIM_Anggota_1 }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Institusi Ketua</td>
                        <td>{{$proposal -> Institusi_Anggota_1 }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Fakultas Ketua</td>
                        <td>{{$proposal -> Fakultas_Anggota_1 }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Program Studi Ketua</td>
                        <td>{{$proposal -> Program_Studi_Anggota_1 }}</td>
                    </tr>

                    <tr>
                        <th scope="row">Nama Anggota 1</th>
                        <th>{{$proposal -> Nama_Anggota_2 }}</th>
                    </tr>
                    <tr>
                        <td scope="row">NIM Anggota 1</td>
                        <td>{{$proposal -> NIM_Anggota_2 }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Institusi Anggota 1</td>
                        <td>{{$proposal -> Institusi_Anggota_2 }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Fakultas Anggota 1</td>
                        <td>{{$proposal -> Fakultas_Anggota_2 }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Program Studi Anggota 1</td>
                        <td>{{$proposal -> Program_Studi }}</td>
                    </tr>

                    <tr>
                        <th scope="row">Nama Anggota 2</th>
                        <th>{{$proposal -> Nama_Anggota_3 }}</th>
                    </tr>
                    <tr>
                        <td scope="row">NIM Anggota 2</td>
                        <td>{{$proposal -> NIM_Anggota_3 }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Institusi Anggota 2</td>
                        <td>{{$proposal -> Institusi_Anggota_3 }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Fakultas Anggota 2</td>
                        <td>{{$proposal -> Fakultas_Anggota_3 }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Program Studi Anggota 2</td>
                        <td>{{$proposal -> Program_Studi_Anggota_3 }}</td>
                    </tr>

                    <tr>
                        <td scope="row">No Telp Ketua</td>
                        <td>{{$proposal -> Nomor_Telp_Ketua }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Alamat Email Ketua</td>
                        <td>{{$proposal -> Alamat_Email }}</td>
                    </tr>

                    <tr>
                        <th scope="row">Dosen Pembimbing</th>
                        <th>{{$proposal -> Nama_Dosen }}</th>
                    </tr>
                    <tr>
                        <td scope="row">NRP Dosen</td>
                        <td>{{$proposal -> Nip_Dosen }}</td>
                    </tr>

                    <tr>
                        <td scope="row">No Telp Dosen</td>
                        <td>{{$proposal -> Nomor_Telp_Dosen }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
