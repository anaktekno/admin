@extends('layouts.main')
@section('judul','Data Penilaian')
@section('konten')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Penilaian</strong>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success  mb-2">{{session('success')}}</div>
                        @endif

                        @if (session('danger'))
                        <div class="alert alert-danger  mb-2">{{session('danger')}}</div>
                        @endif

                        <table id="bootstrap-data-table-export" class="table table-sms table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th style="width: 40%">Judul</th>
                                    <th>Data Lengkap</th>
                                    <th>Proposal</th>
                                    <th>Video</th>
                                    <th class="text-center">Hasil Assesment</th>
                                    <th class="text-center">Anggaran Disetujui</th>
                                </tr>
                                {{-- <tr>
                                    <th rowspan="1" class="text-center" colspan="2">Nilai</th>
                                    <th rowspan="2" class="text-center">Rekomendasi Anggaran</th>
                                    <th rowspan="2">CATATAN</th>
                                    <th rowspan="2" class="text-center">Status</th>
                                    <th rowspan="2" class="text-center">Anggaran disetujui</th>
                                </tr>
                                <tr>
                                    <th>Detil Nilai</th>
                                    <th>Reviewer 2</th> 
                                    <th>Nilai Total</th>
                                    <th>Reviewer 1</th>
                                    <th>Reviewer 2</th> 
                                    <th>Hasil</th> 
                                    <th rowspan="2" class="text-center">Status</th>
                                    <th rowspan="2" class="text-center">Anggaran disetujui</th> 
                                </tr>  --}}
                            </thead>
                            <tbody>
                                @foreach ($nilai as $item)
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    {{--<th>{{$item[0]->proposal->Provinsi}}</th>
                                    <th>{{$item[0]->proposal->Kota_Kabupaten}}</th>
                                    <th>{{$item[0]->proposal->Institusi_Anggota_1}}</th>--}}
                                    <th>{{$item[0]->proposal->Judul_Proposal}}</th>
                                    <th>
                                        <a class="badge badge-warning"
                                            href="{{route('proposal',$item[0]->proposal->Id)}}" target="_blank">
                                            Detail
                                        </a>
                                    </th>
                                    {{-- <th>
                                        <button data-toggle="modal" data-target="#exampleModal"
                                        data-catatan1="{{$item[0]->total}}"
                                        data-catatan2="
                                        @if (count($item) > 1)
                                        {{($item[0]->total + $item[1]->total) / 2 }}
                                        @else
                                        {{$item[0]->total / 2}}
                                        @endif"
                                        class="btn catatan badge badge-info">Nilai</button>
                                        {{$item[0]->total}}</th>
                                    <th>
                                        @if (count($item) > 1)
                                        {{$item[1]->total}}
                                        @else
                                        -
                                        @endif
                                    </th>
                                    <th>
                                        @if (count($item) > 1)
                                        {{($item[0]->total + $item[1]->total) / 2 }}
                                        @else
                                        {{$item[0]->total / 2}}
                                        @endif
                                    </th>
                                    <th> <button data-toggle="modal" data-target="#exampleModal"
                                        data-catatan1="{{$item[0]->anggaran}}"
                                        data-catatan2="{{$item[1]->anggaran ?? '-'}}"
                                        class="btn catatan badge badge-secondary">Anggaran</button>
                                        {{$item[0]->anggaran}}</th>
                                    <th>{{$item[1]->anggaran ?? '-'}}
                                    </th> --}}
                                    {{-- <th>
                                        @if (count($item) > 1)
                                        {{($item[0]->total + $item[1]->total) / 2 }}
                                        @else
                                        {{$item[0]->total / 2}}
                                        @endif
                                        <button data-toggle="modal" data-target="#exampleModal"
                                        data-catatan1="{{$item[0]->total}}"
                                        data-catatan2="
                                        @if (count($item) > 1)
                                        {{($item[0]->total + $item[1]->total) / 2 }}
                                        @else
                                        {{$item[0]->total / 2}}
                                        @endif"
                                        class="btn catatan badge badge-info">Nilai</button> 
                                    </th>                                     --}}
                                    <th>
                                        <a class="badge badge-info" href="{{$item[0]->proposal->File_Proposal}}" target="_blank">
                                        Proposal</a>
                                    </th>
                                    <th>
                                        <a class="badge badge-secondary" href="{{$item[0]->proposal->Youtubeurl}}" target="_blank">
                                        video</a>
                                    </th>
                                    <th>
                                        @if ($item[0]->proposal->Setuju == 1)
                                        <div class="badge p-3 badge-success">Disetujui</div>
                                        @elseif($item[0]->proposal->Setuju == 0)
                                        <div class="badge p-3 badge-danger">Tidak Disetujui</div>
                                        @else
                                        -
                                        @endif

                                    </th>
                                    <th>{{'Rp. '.number_format($item[0]->proposal->biaya) ?? '-'}}
                                        {{-- <input type="text" disabled value="{{'Rp. '.number_format($item[0]->proposal->biaya) ?? '-'}}">
                                         <form action="{{route('biaya')}}" class="mt-2" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$item[0]->proposal->Id}}">
                                            <input type="number" id="biaya" class="biaya" name="biaya">
                                            <button type="submit" class="btn-sm mt-1 btn-danger">Submit</button>
                                        </form> --}} 
                                    </th>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">CATATAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        Penilai 1
                    </div>
                    <div id="komentar1" class="card-body">

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                       Penilai 2
                    </div>
                    <div id="komentar2" class="card-body">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script src="{{ asset('style/vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('style/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script>
    $('.catatan').on('click',function(){
        $('#komentar1').html($(this).data('catatan1'))
        $('#komentar2').html($(this).data('catatan2'))

    })

    

</script>


@endpush

