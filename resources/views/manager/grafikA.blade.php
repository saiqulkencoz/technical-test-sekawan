@extends('manager.master-mngA')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Grafik Request Kendaraan</h3>
                        </div>
                        <div class="panel-body">
                            <div id="chart">

                            </div>
                            <div id="chart2">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('chart2', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Kendaraan Tersetujui'
            },
            subtitle: {
                text: 'PT. Tambang Nikel'
            },
            xAxis: {
                categories:{!!json_encode($categories)!!},
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Pemakaian'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Pemakaian',
                data: {!!json_encode($approve)!!}

            }]
        });
    </script>
    <script>
        Highcharts.chart('chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Demand Kendaraan'
            },
            subtitle: {
                text: 'PT. Tambang Nikel'
            },
            xAxis: {
                categories:{!!json_encode($categories)!!},
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Request'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Pemakaian',
                data: {!!json_encode($data)!!}

            }]
        });
    </script>
@endsection
