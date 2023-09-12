<?php
/**
 *
 * Set active css class if the specific URI is current URI
 *
 * @param string $path       A specific URI
 * @param string $class_name Css class name, optional
 * @return string            Css class name if it's current URI,
 *                           otherwise - empty string
 */
function setActive(string $path = "NULL", string $class_name = "active", string $option = "like")
{
    if ($option === "like") {
        $string = Request::path();
        if (strpos($string, $path) === FALSE) {
            return "tes";
        } else {
            return $class_name;
        }
    } else {
        if (Request::path() === $path) {
            return $class_name;
        } else {
            return "tes";
        }
    }
}
// fungsi create push notification onesignal
function sendMessage($dataPush){
    $content = array(
        "en" => $dataPush['judul']
        );
    $heading = array(
        "en" => $dataPush['judul']
        );

    $fields = array(
        // 'app_id' => "2eb77044-210b-46a3-9115-a2f92eff2cca",
        'app_id' => "ba9338c6-fb67-4424-8246-fbf20d61f761",
        //'included_segments' => array('All'),
        'included_segments' => array('testing'),
        'data' => array(
					"foo" => "bar",
					"notifikasi_page" => $dataPush
					),
        'large_icon' =>"ic_launcher_round.png",
        'contents' => $content,
        'headings' => $heading
    );

    $fields = json_encode($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic NmY4NDkwNjMtMzllMi00OTNhLWFlOTktMzA0ZTFkOTJkOWRm'));
                                               //'Authorization: Basic OTQwZDMxMzEtOWZhMy00Y2JlLTgwMjEtNzgzY2YxZTY0ODQ1'));
                                               
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}
// ikon panel admin
function create_panel($color, $icon, $number, $text) {
    echo '
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-'.$color.' panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <i class="glyphicon glyphicon-'.$icon.'"></i>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">'.$number.'</div>
                    <div class="text-muted">'.$text.'</div>
                </div>
            </div>
        </div>
    </div>
    ';
}
// judul halaman
function create_title($text) {
    echo '<h2 class="page-header">'.$text.'</h2>';
}
// awal halaman admin
function start_content($color="danger") {
    echo '
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-'.$color.'">
                <div class="panel-body">
    ';
}
// judul & opsi bar
function opsi_bar_start($judul="Judul Halaman", $ikon="font-awesome") {
    echo '
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="box-title"><i class="fa fa-'.$ikon.'"></i>&nbsp;'.$judul.'</h4>
        </div>';
}
function opsi_bar_end() {
    echo '</div>';
}
// akhir halaman admin
function end_content() {
    echo '
                </div>
            </div>
        </div>  
    </div>
    ';
}
// tombol
function create_button($text, $color, $onclick, $icon, $size="md", $class="", $attr="") {
    echo '
    <button class="btn btn-'.$color.' btn-'.$size.' '.$class.'" id="'.$onclick.'" '.$attr.'>
        <i class="fa fa-'.$icon.'"></i> 
         '.$text.'
    </button>
    ';
}
function create_button_href($text, $color, $onclick, $icon, $size="md", $class="", $attr="") {
    echo '
    <a class="btn btn-'.$color.' btn-'.$size.' '.$class.'" href="'.$onclick.'" '.$attr.'>
        <i class="fa fa-'.$icon.'"></i> 
         '.$text.'
    </a>
    ';
}
// tabel
function create_table($column, $data_url, $id="", $nomor="0") {
    echo '
    <hr style="margin: 5px 0;">
        <table id="table'.$id.'" data-url="'.$data_url.'" class="table table-sm table-hover table-stripped table-bordered table-hover" width="100%">
            <thead>
                <tr>
    ';
    if ($nomor=="0") {
        echo '<th>No.</th>';
    }
                    foreach ($column as $col) {
                        echo '<th>'.$col.'</th>';
                    }
    echo '
                </tr>
            </thead>
        </table>
    <br/>
    ';
}
// modal form
function start_modal($id, $action="") {
    echo '
    <div class="modal" 
        id="'.$id.'"  
        role="dialog" 
        aria-hidden="true" 
        data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="padding: 15px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title"><i class="fa fa-plus-sqare"></i> Tambah Data</h4>
                </div>
                <form class="form-horizontal" method="post" enctype="multipart/formdata" onsubmit="'.$action.'">
                    <div class="modal-body">
                        '.csrf_field().'
                        <input type="hidden" id="methodnya" name="_method" value="">
                        <input type="hidden" name="id" id="id">
    ';
}
// modal end form
function end_modal($save=true, $special="") {
    echo '
        </div>
            <div class="modal-footer">';
    if ($save) {
        echo '
            <button type="submit" class="btn btn-primary btn-save">
                <i class="glyphicon glyphicon-floppy-disk"></i>
                Simpan
            </button>';
    }
    if ($special!="") {
        echo '
            <button type="button" class="btn btn-primary btn-'.$special.'">
                <i class="glyphicon glyphicon-print"></i>
                '.$special.'
            </button>';
    }
    echo '                  
                        <button type="button" class="btn btn-warning" 
                                data-dismiss="modal" 
                                aria-label="Close">
                            <i class="fa fa-times"></i>
                            Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    ';
}
// label show
function label_format($label) {
    if($label==1) {
        echo '
        <span class="label label-success">Show</span>
        ';
    } elseif ($label==0) {
        echo '
        <span class="label label-danger">Hide</span>
        ';
    }
}

// kotak input
function form_input($label, $name, $type="text", $width="5", $class="", $attr="", $belakang="", $helper="") {
    echo '
    <div class="form-group">
        <label for="'.$name.'" class="col-sm-2 control-label">
        '.$label;
        if (strpos($attr, 'required') !== false) {
            echo '<span class="text-danger" title="This field is required">*</span>';
        }
        echo 
        '</label>
        <div class="col-sm-'.$width.'">
            <input type="'.$type.'" class="form-control '.$class.'" id="'.$name.'" name="'.$name.'" autocomplete="off" placeholder="Input Data" '.$attr.'>
            <p class="help-block">'.$helper.'</p>
            <div class="text-danger"></div>
        </div>';

        if($belakang!=""){
            echo '<div id="belakang'.$belakang.'"></div>';
        }
        echo '
    </div>
    ';
}
// combobox
function form_api_combobox($label, $name, $data, $width='5', $class="", $attr="required") {
    echo '
    <div class="form-group">
        <label for="'.$name.'" class="col-sm-2 control-label">'.$label.'</label>
        <div class="col-sm-'.$width.'">
            <select data-api="'.$data.'" class="form-control '.$class.'" id="'.$name.'" name="'.$name.'" '.$attr.'>
            </select>
        </div>
    </div>
    ';
}
function form_start_combobox($label, $name, $width='5', $class="", $attr="required", $tipe="", $placeholder=true) {
    echo '
        <div class="form-group">
            <label for="'.$name.'" class="col-sm-2 control-label">'.$label;
            if(strpos($attr, 'required') !== false) echo '<span class="text-danger" title="This field is required">*</span>';
            echo '
            </label>
            <div class="col-sm-'.$width.'">
                <select class="form-control '.$class.' '.$tipe.'" id="'.$name.'" name="'.$name.'" '.$attr.'>';
                if($placeholder==true){
                    echo '<option value="" selected>** Please choose '.$label.' -</option>';
                }
}
function form_end_combobox($spinner=0) {
    echo '
                </select>
            </div>';
            if ($spinner != 0) {
                echo '<span class="spin" id="loader'.$spinner.'"><i class="fa fa-spinner fa-spin"></i></span>';
            }
    echo '
        </div>
    ';
}
function combobox_filter_start($label, $name, $width='5', $class="", $attr="required") {
    // if ($label!="") echo '<label for="'.$name.'" class="col-sm-2 control-label">'.$label.'</label>';
    // $text = "";
    // if($tipe != 1) $text = 'disabled';
    echo '
        <div class="form-group">
            <div class="col-sm-'.$width.'">
                <select class="form-control form-control-sm '.$class.'" id="'.$name.'" name="'.$name.'" '.$attr.'>
                    <option value="" selected>- Semua '.$label.' -</option>
    ';
}
function combobox_filter_end() {
    echo '
                </select>
            </div>
        </div>
    ';
}
function form_radio($label, $nama, $val=null) {
    $val_show = "";
    $val_hide = "";
    
    if($val==1) {
        $val_show = "checked";
    } else if($val==0) {
        $val_hide = "checked";
    }

    echo '
    <div class="form-group">
        <label class="col-lg-2 control-label">'.$label.'</label>
        <div class="col-lg-10">
            <div class="radio">
                <label>
                    <input type="radio" name="'.$nama.'" id="status1" value="1" '.$val_show.'>
                    Show
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="'.$nama.'" id="status2" value="0" '.$val_hide.'>
                    Hide
                </label>
            </div>
        </div>
    </div>
    ';
}
function form_mediapicker($label, $nama, $lebar='10', $tipe='0', $modal_id='') {
    echo '
    <div class="form-group">
        <label for="'.$nama.'" class="col-sm-2 control-label">'.$label.'</label>
        <div class="col-sm-'.$lebar.'">
            <div id="file-'.$nama.'"></div>
            <input id="'.$nama.'" class="form-control" type="file" name="'.$nama.'">
            <p class="help-block"></p>
            <div class="text-danger"></div>
        </div>
    </div>
    ';
    /*echo '
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <!-- The global progress bar -->
            <div id="progress" class="progress">
                <div class="progress-bar bg-danger"></div>
            </div>
            <!-- The container for the uploaded files -->
            <div id="files" class="files"></div>
        </div>
    </div>
    ';*/
}
// recursive array map
function array_map_recursive($f, $xs) {
    $out = [];
    foreach ($xs as $k => $x) {
        $out[$k] = (is_array($x)) ? array_map_recursive($f, $x) : $f($x);
    }
    return $out;
}

// buat timeline
function start_timeline($bg, $icon, $text) {
    echo '
        <!-- timeline item -->
        <li id="'.$text.'">
            <i class="fa fa-'.$icon.' bg-'.$bg.'"></i>
            <div class="timeline-item">
                <h3 class="timeline-header bold">'.$text.'</h3>
                <div class="timeline-body">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
    ';
}
function end_timeline() {
    echo '
                   </div>
                <!-- /.row -->
            </div>
        </div>
    </li>
    <!-- END timeline item -->
    ';
}
function small_box($bg, $icon, $text, $url="") {
        echo '
            <a class="no-decor" href="'.$url.'">
                <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-'.$bg.'">
                    <div class="inner">
                        <h3><i class="fa fa-'.$icon.'"></i></h3>
                        <p class="title-button">'.$text.'</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-'.$icon.'"></i>
                    </div>
                </div>
            </div>
        </a>
        <!-- ./col -->
    ';
}
// cek if object is empty
function emptyObj($obj) {
    foreach ( $obj AS $prop ) {
        return FALSE;
    }
    return TRUE;
}
// textarea
function form_textarea($label, $name, $class="", $attr="", $val="") {
    echo '
    <div class="form-group">
        <label for="'.$name.'" class="col-sm-2 control-label">'.$label;
        if (strpos($attr, 'required') !== false) {
            echo '<span class="text-danger" title="This field is required">*</span>';
        }
        echo
        '</label>
        <div class="col-sm-10">
            <textarea class="form-control compose-textarea '.$class.'" rows="3" name="'.$name.'" id="'.$name.'" '.$attr.'>'.$val.'</textarea>
            <p class="help-block"></p>
            <div class="text-danger"></div>
        </div>
    </div>
    ';
}
// fungsi cek hari
function getHari($day) {
    if ($day == "Monday") $id = 1;
    elseif ($day == "Tuesday") $id = 2;
    elseif ($day == "Wednesday") $id = 3;
    elseif ($day == "Thursday")  $id = 4;
    elseif ($day == "Friday") $id = 5;
    elseif ($day == "Saturday") $id = 6;
    elseif ($day == "Sunday") $id = 7;

    return $id;
}
// fungsi cek hari
function getHariIndo($day) {
    if ($day == 1) $id = "Senin";
    elseif ($day == 2) $id = "Selasa";
    elseif ($day == 3) $id = "Rabu";
    elseif ($day == 4) $id = "Kamis";
    elseif ($day == 5) $id = "Jumat";
    elseif ($day == 6) $id = "Sabtu";
    elseif ($day == 7) $id = "Minggu";

    return $id;
}
// fungsi cek bulan
function getBulan($month) {
    if ($month == "January") $id = "Januari";
    elseif ($month == "February") $id = "Februari";
    elseif ($month == "March") $id = "Maret";
    elseif ($month == "April")  $id = "April";
    elseif ($month == "May") $id = "Mei";
    elseif ($month == "June") $id = "Juni";
    elseif ($month == "July") $id = "Juli";
    elseif ($month == "August") $id = "Agustus";
    elseif ($month == "September") $id = "September";
    elseif ($month == "October") $id = "Oktober";
    elseif ($month == "November") $id = "November";
    elseif ($month == "December") $id = "Desember";

    return $id;
}

// --------------------------------
function f_input($label, $name, $type="text", $class="", $attr="") {
    echo '
    <div class="form-group">
        <label for="'.$name.'" class="lb-custom">'.$label.'</label>
        <input type="'.$type.'" name="'.$name.'" id="'.$name.'" placeholder="Inputkan di sini" class="form-control input-sm '.$class.'" '.$attr.'/>
    </div>
    ';
}
function f_select_start($label, $name, $class="", $attr="") {
    echo '
    <div class="form-group">
        <label for="'.$name.'" class="lb-custom">'.$label.'</label>
        <select class="form-control input-sm '.$class.'" id="'.$name.'" name="'.$name.'" '.$attr.'>
            <option value="" disabled selected>- Silahkan pilih '.$label.' -</option>
    ';
}
function f_select_end() {
    echo '
        </select>
    </div>
    ';
}
function f_radio($label, $name, $lb1, $lb2, $val_lb1, $val_lb2, $id_lb1, $id_lb2, $attr="") {
    echo '
    <div class="form-group">
        <label for="'.$name.'" class="lb-custom">'.$label.'</label>
        <div class="radio">
            <label class="radio-inline">
                <input type="radio" name="'.$name.'" id="'.$id_lb1.'" value="'.$val_lb1.'" '.$attr.'/>'.$lb1.'  
            </label>
            <label class="radio-inline">
                <input type="radio" name="'.$name.'" id="'.$id_lb2.'" value="'.$val_lb2.'" '.$attr.'/>'.$lb2.'
            </label>
        </div>
    </div>
    ';
}

// youtube checker
function getYouTubeData($videoId) {
    $theURL = "https://www.youtube.com/oembed?url=http://www.youtube.com/watch?v=$videoId&format=json";

    $curl = curl_init($theURL);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $body = curl_exec($curl);
    curl_close($curl);

    return json_decode($body, true);
}

?>