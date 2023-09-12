@extends('fw.layout')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css"/>
<link href="http://localhost/vendor/crudbooster/assets/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>
<style>
	.table-condensed th, .table-condensed td {
		padding:unset !important;
	}
	canvas {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
		height: 300px;
	}
	#judul-grafik, #judul-grafik-2{
		text-align:center;
		font-weight:bold;
	}
	p#tgl, p#tgl-2 {
		text-align:center;
	}
	.select2-container--default .select2-selection--single {
		border-radius: 0px !important
	}
	.select2-container .select2-selection--single {
		height: 35px !important
	}
	.select2-container--default .select2-selection--multiple .select2-selection__choice {
		background-color: #3c8dbc !important;
		border-color: #367fa9 !important;
		color: #fff !important;
	}
	.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
		color: #fff !important;
	}
	.select2-container {
		width:100% !important;
	}
	.spin {
		display: none;
	}
	.form-control {
		box-sizing:border-box;
		border-radius: 0;
		box-shadow: none;
		display: block;
		width: 100%;
		height: 34px;
		padding: 6px 12px;
		/* line-height: 1.42857143; */
		color: #555;
		background-color: #fff;
		background-image: none;
		border: 1px solid #ccc;
	}
	.form-group {
		margin-bottom: 15px;
	}
	#tgl-2, #tgl {
		font-size:12px;
	}
</style>
@endpush

@section('content')
<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="widget">
						<div class="widget-header"> <i class="fa fa-list-alt"></i>
							<h3> {{ $data['tentang']->judul }}</h3>
						</div>

						<!-- /widget-header -->
						<div class="widget-content">
							<div class="widget big-stats-container">
								<div class="widget-content">
								{!! $data['tentang']->deskripsi !!}
								</div>
								<!-- /widget-content -->

							</div>
						</div>
					</div>
					<!-- /widget -->
				</div>
				<!-- /span12 -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /main-inner -->
</div>
<!-- /main -->
@endsection

@push('scripts')

<!--SWEET ALERT-->
<script src="http://localhost/vendor/crudbooster/assets/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://localhost/vendor/crudbooster/assets/sweetalert/dist/sweetalert.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
<script src="http://localhost/vendor/crudbooster/assets/select2/dist/js/select2.full.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript">
    var site_url = "http://localhost";
            
            // lokal
            var id_daterangepicker = {
                'direction': 'ltr',
                'format': 'DD/MM/YYYY',
                'separator': ' - ',
                'applyLabel': 'Terapkan',
                'cancelLabel': 'Batal',
                'fromLabel': 'Dari',
                'toLabel': 'Sampai',
                'customRangeLabel': 'Atur',
                'daysOfWeek': [
                    'Min',
                    'Sen',
                    'Sel',
                    'Rab',
                    'Kam',
                    'Jum',
                    'Sab'
                ],
                'monthNames': [
                    'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                ],
                'firstDay': 1
            };

            function commaify(value) {
                var result = (''+value).replace(/^(-?\d+)(\d{3})/, '$1,$2');
                return value == result? result : commaify(result);
             }

            // select
            $('.select2').select2();

            // daterange
            var tgl_awal;
            var tgl_akhir;
            $(function() {
                $('input[name="tanggal"]').daterangepicker({
                    locale: id_daterangepicker,
                    opens: 'left'
                }, function(start, end, label) {
                    tgl_awal = start.format('YYYY-MM-DD');
                    tgl_akhir = end.format('YYYY-MM-DD');
                });
            });
    
            // initial graph
            var barChartData = {
                labels: ['Data'],
                datasets: [{
                    label: 'Data',
                    backgroundColor: 'black',
                    data: [
                        0
                    ]
                }]

            };
            var barChartData2 = {
                labels: ['Data'],
                datasets: [{
                    label: 'Data',
                    backgroundColor: 'black',
                    data: [
                        0
                    ]
                }]

            };

            //fungsi tanggal
            var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            var tgl_dok = '';

            // fungsi tombol
            $('#submit').click(function(){
				console.log(tgl_awal);
                //cek
                if($('#pangan_id').val()==0){
                    swal('Oops...', 'Mohon pilih field Pangan!', 'warning');
                    return;
                }else{
                    if(tgl_awal==null){
                        tgl_awal = '<?php echo Date("Y-m-d"); ?>';
                        tgl_akhir = '<?php echo Date("Y-m-d"); ?>';
                    }
                    // fungsi ajax
                    $.ajax({
                        type: 'POST',
                        contentType: 'application/json; charset=utf-8',
                        url: '/publik/pangan',
                        data: JSON.stringify({
							"_token": "{{ csrf_token() }}",
                            pangan_id: $('#pangan_id').val(), 
                            tgl_awal: tgl_awal, 
                            tgl_akhir: tgl_akhir,
                            tipe: 'stok'
                        }),
                        dataType: 'json',
                        success: function (r) {
                            // variabel baru
                            var barChartData1 = {
                                labels: r.pedagang,
                                datasets: [{
                                    label: r.pangan +' ('+r.satuan+')',
                                    backgroundColor: 'black',
                                    data: r.survei,
                                }]
                            };
                            // hapus graph
                            myBar.destroy();
                            triggerGraph(barChartData1, r.satuan);
                            $('#judul-grafik').html('Data Ketersediaan Pangan '+r.pangan);
                            
                            
                            if(tgl_awal && tgl_akhir){
                                tgl_awal_str = new Date(tgl_awal);
                                tgl_awal_str = tgl_awal_str.toLocaleDateString("id-ID", options)

                                tgl_akhir_str = new Date(tgl_akhir);
                                tgl_akhir_str = tgl_akhir_str.toLocaleDateString("id-ID", options)

                                if(tgl_awal==tgl_akhir) {
                                    $('#tgl').html(tgl_awal_str);
                                }else{
                                    $('#tgl').html(tgl_awal_str + ' sampai dengan ' + tgl_akhir_str);
                                }
                            }
                        }
                    });
                    // fungsi ajax 2
                    $.ajax({
                        type: 'POST',
                        contentType: 'application/json; charset=utf-8',
                        url: '/publik/pangan',
                        data: JSON.stringify({
							"_token": "{{ csrf_token() }}",
                            pangan_id: $('#pangan_id').val(), 
                            tgl_awal: tgl_awal, 
                            tgl_akhir: tgl_akhir,
                            tipe: 'harga'
                        }),
                        dataType: 'json',
                        success: function (r) {
                            // variabel baru
                            var barChartData2 = {
                                labels: r.pedagang,
                                datasets: [{
                                    label: r.pangan,
                                    backgroundColor: 'black',
                                    data: r.survei
                                }]
                            };
                            // hapus graph
                            myBar2.destroy();
                            triggerGraph2(barChartData2);
                            $('#judul-grafik-2').html('Data Harga Pangan '+r.pangan);

                            if(tgl_awal && tgl_akhir){
                                tgl_awal_str = new Date(tgl_awal);
                                tgl_awal_str = tgl_awal_str.toLocaleDateString("id-ID", options)

                                tgl_akhir_str = new Date(tgl_akhir);
                                tgl_akhir_str = tgl_akhir_str.toLocaleDateString("id-ID", options)

                                if(tgl_awal==tgl_akhir) {
                                    $('#tgl-2').html(tgl_awal_str);
                                }else{
                                    $('#tgl-2').html(tgl_awal_str + ' sampai dengan ' + tgl_akhir_str);
                                }
                            }
                        }
                    });
                }
            });
            // fungsi trigger
            function triggerGraph(barChartData1, satuan=''){
                var ctx = document.getElementById('canvas').getContext('2d');
                window.myBar = new Chart(ctx, {
                    type: 'bar',
                    data: barChartData1,
                    options: {
                        plugins: {
                            datalabels: {
                                labels: {
                                    title: {
                                        font: {
                                            weight: 'bold',
                                        }
                                    }
                                },
                                color: '#fff',
                                formatter: function(value) {
                                    return commaify(value) + ' ' + satuan;
                                }
                            }
                        },
                        title: {
                            display: false,
                            text: 'Data Ketersediaan Pangan'
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                stacked: true,
                            }],
                            yAxes: [{
                                stacked: true
                            }]
                        }
                    }
                });
            }
            function triggerGraph2(barChartData2){
                var ctx2 = document.getElementById('canvas2').getContext('2d');
                window.myBar2 = new Chart(ctx2, {
                    type: 'bar',
                    data: barChartData2,
                    options: {
                        plugins: {
                            datalabels: {
                                labels: {
                                    title: {
                                        font: {
                                            weight: 'bold'
                                        }
                                    }
                                },
                                color: '#fff',
                                formatter: function(value) {
                                    return 'Rp ' + commaify(value);
                                }
                            }
                        },
                        title: {
                            display: false,
                            text: 'Data Harga Pangan per Satuan'
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                stacked: true,
                            }],
                            yAxes: [{
                                stacked: true
                            }]
                        }
                    }
                });
            }

            // fungsi awal
            window.onload = function() {
                var ctx = document.getElementById('canvas').getContext('2d');
                window.myBar = new Chart(ctx, {
                    type: 'bar',
                    data: barChartData,
                    options: {
                        title: {
                            display: true,
                            text: 'Pilih filter untuk melihat grafik'
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                stacked: true,
                            }],
                            yAxes: [{
                                stacked: true
                            }]
                        }
                    }
                });
                var ctx2 = document.getElementById('canvas2').getContext('2d');
                window.myBar2 = new Chart(ctx2, {
                    type: 'bar',
                    data: barChartData2,
                    options: {
                        title: {
                            display: true,
                            text: 'Pilih filter untuk melihat grafik'
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                stacked: true,
                            }],
                            yAxes: [{
                                stacked: true
                            }]
                        }
                    }
                });

            };
        
    </script>
@endpush