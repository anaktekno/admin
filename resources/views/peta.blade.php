@extends('layouts.main')
@section('judul','Peta Proposal Top 100')

@section('kepala')
<style type="text/css">
    .exactCenter {
        margin-top:100px;
        margin
    }
  </style>
@endsection

@section('konten')


<div class="exactCenter" id="container"></div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    <script>
        // Prepare demo data
// Data is joined to map using value of 'hc-key' property by default.
// See API docs for 'joinBy' for more info on linking data and map.
var data = [
    ['id-3700', 0],
    ['id-ac', 0], //aceh
    ['id-jt', 17], //jawa timur
    ['id-be', 1], //bengkulu
    ['id-bt', 3], //banten
    ['id-kb', 3], //kalbar
    ['id-bb', 0], //babel
    ['id-ba', 2], //bali
    ['id-ji', 7], //jatim
    ['id-ks', 1], //kalsel
    ['id-nt', 0], //ntt
    ['id-se', 7], //sulsel
    ['id-kr', 0], //kepri
    ['id-ib', 2], //papuabarat
    ['id-su', 2], //sumut
    ['id-ri', 2], //riau
    ['id-sw', 0], //sulut
    ['id-ku', 0], //kalut
    ['id-la', 1], //malukuutara
    ['id-sb', 2], //sumbar
    ['id-ma', 1], //maluku
    ['id-nb', 4], //ntb
    ['id-sg', 2], //sultara
    ['id-st', 0], //sulteng
    ['id-pa', 0], //papua
    ['id-jr', 37], //jawabarat
    ['id-ki', 0], //kaltim
    ['id-1024', 2], //lampung
    ['id-jk', 1], //jakarta
    ['id-go', 0], //gorontalo
    ['id-yo', 1], //yogya
    ['id-sl', 1], //sumsel
    ['id-sr', 0], //sulbar
    ['id-ja', 0], //jambi
    ['id-kt', 1] //kaltim
];

// Create the chart
Highcharts.mapChart('container', {
    chart: {
        map: 'countries/id/id-all'
    },

    title: {
        text: 'Peta Sebaran Top 100 Lokasi Kerja Sosial Innovillage'
    },

    
    mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },

    colorAxis: {
        min: 0
    },

    series: [{
        data: data,
        name: 'Proposal Masuk',
        states: {
            hover: {
                color: '#BADA55'
            }
        },
        dataLabels: {
            enabled: false,
            format: '{point.name}'
        }
    }]
});

    </script>


@endsection