@extends('fw.layout')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css"/>
<link href="{{ asset('vendor/crudbooster/assets/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
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
    .select2-search__field {
        height: 25px;
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
    th, td { white-space: nowrap; }
    div.dataTables_wrapper, div.formnya {
        /* width: 800px; */
        margin: 0 auto;
    }
 
    tr { height: 15px; }
    .widget-content {
        padding: 40px 20px;
    }
    div.form-group label {
        font-weight: bold;
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
							<h3> Tabel Data Komiditi Pedagang</h3>
						</div>

						<!-- /widget-header -->
						<div class="widget-content">
							<div class="widget big-stats-container formnya">
                                <form id="formnya">
                                    <div class="form-group">
                                        <label for="pedagang">Kelompok Pedagang</label>
                                        <select class="form-control select2" id="kelompok" name="kelompok" required>
                                            <option value="" selected>- Silahkan Pilih Kelompok -</option>
                                            <option>Penyosoh</option>
                                            <option>Distributor</option>
                                            <option>Pasar</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pedagang">Pedagang</label>
                                        <select class="form-control select2" id="pencarian" name="pencarian" disabled>
                                            <option value="0" selected>- Silahkan Pilih Pedagang -</option>
                                            @foreach($data['pedagang'] as $item)
                                            <option value="{{ $item->id }}">{{$item->value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" id="alamatnya" style="display: none">
                                        <label for="pedagang">Alamat</label>
                                        <div id="jalan"></div>

                                    </div>
                                </form>
                                <table id="tabelnya" class='table table-striped'>
                                    <thead>
                                        <tr>
                                            <th>Komiditi</th>
                                            <th>Stok (Kg)</th>
                                            <th>Harga (Rp)</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>

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
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('vendor/crudbooster/assets/select2/dist/js/select2.full.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript">
    // select
    $('.select2').select2();

    // daterange
    var tgl_awal;
    var tgl_akhir;

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

    //kelompok pedagang
    $('select[id="kelompok"]').on('change',function(){
        var id = $('#kelompok').val();
        if(id=='') {id = '0';}
        if ($('#pencarian').val() != '') {
            $("#pencarian").select2("val", "null");
            $("#pencarian").select2(
                {
                    placeholder: "** Silahkan Pilih Pedagang"
                }
            );
        }
        
        $('#loader1').show();
        $("#pencarian").prop('disabled', true);
        if(id!=null) {
            $.ajax(
                { 
                    type: 'GET', 
                    url: '/select/pedagang/' + id, 
                    data: '', 
                    success: function(result) { 
                        $('select[id="pencarian"]').empty();
                        $('select[id="pencarian"]').append('<option value="null">** Silahkan Pilih Pedagang</option>');
                        $.each(result, function(i, val){ 
                            $('#pencarian').append($('<option></option>').attr('value',val.value).text(val.label)); }); 
                        
                        $("#pencarian").prop('disabled', false);
                        $('#loader1').hide(); 

                    } 
                }
            );
        }
    });

    // alamat
    $('select[id="pencarian"]').on('change',function(){
        var id = $('#pencarian').val();

        if(id!=null&&id!=0) {
            $.ajax(
                {   
                    type: 'GET', 
                    url: '/pedagang/alamat/' + id, 
                    data: '', 
                    success: function(datanya) { 
                        $('#alamatnya').show();
                        $('#jalan').text(datanya['alamat']);
                    } 
                }
            );
        }
        
    });

    // fungsi awal
    var tb = $('#tabelnya').DataTable( {
        "paging": false,
        "language": {
                "lengthMenu": "Tampilkan _MENU_ Data per Halaman",
                "zeroRecords": "Silahkan pilih pedagang terlebih dahulu",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ total data",
                "infoEmpty": "Tabel kosong",
                "infoFiltered": "(Difilter dari _MAX_ total data)",
                "search": "Cari",
                "paginate": {
                    "first":      "Pertama",
                    "last":       "Terakhir",
                    "next":       ">",
                    "previous":   "<"
            },
        },
        dom: "lrtip"
    });

    // pencarian dan get data
    $('#pencarian').on('change', function(){
        tb.destroy();
        tb = $('#tabelnya').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": '/json/pedagang/'+$(this).val(),
            "columns": [
                { data: "nama_pangan", name:"komoditi"},
                { data: "stok", name:"stok", render: $.fn.dataTable.render.number( ',', '.')},
                { data: "harga", name:"harga", render: $.fn.dataTable.render.number( ',', '.', 2)},
                { data: "tgl_input", name:"tgl_input"}
                // { data: "aksi", name:"pedagang", orderable:false}
            ],
            "language": {
                "lengthMenu": "Tampilkan _MENU_ Data per Halaman",
                "zeroRecords": "Tidak ada Data",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ total data",
                "infoEmpty": "Tabel kosong",
                "infoFiltered": "(Difilter dari _MAX_ total data)",
                "search": "Cari",
                "paginate": {
                    "first":      "Pertama",
                    "last":       "Terakhir",
                    "next":       ">",
                    "previous":   "<"
                },
            },
            columnDefs: [
                {
                    targets: 2,
                    className: 'text-right'
                },
                {
                    targets: 1,
                    className: 'text-right'
                }
            ],
            columnDefs: [{
                "orderable": false
            }],
            dom: "lrtip",
            order: [[ 0, "asc" ]]
        });
    });

    
</script>
@endpush
