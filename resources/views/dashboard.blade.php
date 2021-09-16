@extends('layouts.main')
@section('judul','Peta Sebaran Proposal')

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
    ['id-ac', 0],
    ['id-jt', 26],
    ['id-be', 3],
    ['id-bt', 8],
    ['id-kb', 4],
    ['id-bb', 0],
    ['id-ba', 13],
    ['id-ji', 23],
    ['id-ks', 3],
    ['id-nt', 2],
    ['id-se', 17],
    ['id-kr', 0],
    ['id-ib', 2],
    ['id-su', 8],
    ['id-ri', 3],
    ['id-sw', 2],
    ['id-ku', 0],
    ['id-la', 2],
    ['id-sb', 8],
    ['id-ma', 3],
    ['id-nb', 11],
    ['id-sg', 2],
    ['id-st', 0],
    ['id-pa', 0],
    ['id-jr', 137],
    ['id-ki', 3],
    ['id-1024', 4],
    ['id-jk', 7],
    ['id-go', 3],
    ['id-yo', 3],
    ['id-sl', 2],
    ['id-sr', 32],
    ['id-ja', 1],
    ['id-kt', 1]
];

// Create the chart
Highcharts.mapChart('container', {
    chart: {
        map: 'countries/id/id-all'
    },

    title: {
        text: 'Peta Sebaran Lokasi Kerja Sosial Innovillage'
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
            enabled: true,
            format: '{point.name}'
        }
    }]
});

    </script>


@endsection