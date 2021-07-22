@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
<div class="page has-sidebar-left height-full">
    <header class="black accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Dashboard
                    </h4>
                </div>
            </div>
        </div>
    </header>

    <div class="tab-pane animated fadeInUpShort go active show" id="v-pills-2">
                <div class="row my-3">
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                    <span class="icon icon-angle-double-down text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title"><strong>Penghasilan Masuk</strong></div>
                                <h5 class="sc-counter mt-3">1000</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                <span class="icon icon-shopping-cart text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title"><strong>Pengeluaran Belanja</strong></div>
                                <h5 class="sc-counter mt-3">500</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                <span class="icon icon-shopping-cart text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title"><strong>Pengeluaran Kebutuhan</strong></div>
                                <h5 class="sc-counter mt-3">500</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box white r-5 p-3">
                            <div class="p-4">
                                <div class="float-right">
                                <span class="icon icon-dollar text-light-blue s-48"></span>
                                </div>
                                <div class="counter-title"><strong>Total Saldo</strong></div>
                                <h5 class="sc-counter mt-3">5000</h5>
                            </div>
                            <div class="progress progress-xs r-0">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="128"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="d-flex row row-eq-height my-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header white">
                                <div class="row justify-content-end">
                                    <div class="center">
                                        <h2>GRAFIK LONOX</h2>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body no-p">
                            <div id="chartPerusahaan"></div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                
    </div>

@endsection
@section('script')

<script>
const chart = Highcharts.chart('chartPerusahaan', {
    title: {
        text: 'Data Keuangan'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Penghasilan Masuk', 'Pengeluaran belanja', 'Pengeluaran Kebutuhan', 'Total Saldo']
    },
    series: [{
        type: 'column',
        colorByPoint: true,
        data: [100,500,500,5000],
        showInLegend: false
    }]
});                     
</script>
@endsection
