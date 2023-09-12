@extends('crudbooster::admin_template')
@section('content')
<style>
    .select2-container--default .select2-selection--single {
        border-radius: 0px !important
    }
    .select2-container .select2-selection--single {
        height: 35px
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #3c8dbc !important;
        border-color: #367fa9 !important;
        color: #fff !important;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        color: #fff !important;
    }
    .spin {
        display: none;
    }
</style>

<p><a title='Return' href="{{ crudbooster::adminPath('activities') }}"><i class='fa fa-chevron-circle-left '></i>
        &nbsp; Kembali</a></p>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong><i class="fa fa-tasks"></i> Add Activity</strong>
    </div>

    <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data"
        action="{{ crudbooster::mainpath('edit-save/'.$row->id) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="panel-body">
            {{ form_input("Title EN", "title_en", "text", 10, "", "required value='$row->title_en'") }}
            {{ form_input("Title JP", "title_jp", "text", 10, "", "required value='$row->title_jp'") }}

            {{ form_textarea("Desc EN", "desc_en", "textarea", "required", $row->desc_en) }}
            {{ form_textarea("Desc JP", "desc_jp", "textarea", "required", $row->desc_jp) }}

            {{ form_input("Youtube URL", "youtube", "text", 10, "", "value='$row->youtube'", "", "Please add only the Youtube ID Ex: https://www.youtube.com/watch?v=BswtqHoRmPk -> The ID is BswtqHoRmPk") }}

            <hr>
        
            @if(CRUDBooster::me()->id_cms_privileges!=3)
                {{ form_start_combobox("Country", "id_country", 6, "", "required", "select2") }}
                    @foreach ($countries as $item)
                    <option value="{!! $item->id !!}" @if($row->id_country==$item->id) {{ "selected='selected'" }} @endif>{!! $item->val !!}</option>
                    @endforeach
                {{ form_end_combobox() }}
            @else
                {{ form_start_combobox("Country", "id_country", 6, "", "readonly disabled", "select2") }}
                    @foreach ($countries as $item)
                    <option value="{!! $item->id !!}" @if(CRUDBooster::me()->country_id==$item->id) {{ "selected='selected'" }} @endif>{!! $item->val !!}</option>
                    @endforeach
                {{ form_end_combobox() }}
                <input type="hidden" name="id_country" value="{!! CRUDBooster::me()->country_id !!}">
            @endif

            

            {{ form_start_combobox("Actions", "id_actions[]", 6, "", "required multiple='multiple'", "select2", false) }}
                @php $actionnya = unserialize($row->id_actions) @endphp
                @if(!empty($actionnya))
                    @foreach ($actions as $key => $item)
                        <option value="{!! $item->id !!}" @if(in_array($item->id, $actionnya)) {{ "selected='selected'" }} @endif>{!! $item->val !!}</option>
                    @endforeach
                @else
                    @foreach ($actions as $key => $item)
                        <option value="{!! $item->id !!}">{!! $item->val !!}</option>
                    @endforeach
                @endif
            {{ form_end_combobox() }}

            <hr>

            {{ form_start_combobox("Keywords", "id_keyword[]", 6, "", "required multiple='multiple'", "select2", false) }}
                @php $keywordnya = unserialize($row->id_keyword) @endphp
                @foreach ($keywords as $key => $item)
                    <option value="{!! $item->id !!}" @if(in_array($item->id, $keywordnya)) {{ "selected='selected'" }} @endif>{!! $item->val !!}</option>
                @endforeach
            {{ form_end_combobox() }}

            <!-- <div class="form-group">
                <label for="id_keyword" class="col-sm-2 control-label"></label>
                <div class="col-md-10">
                    <ul id="keyword_activities"></ul>
                </div>
            </div> -->

            <div class="form-group">
                <div class="col-md-offset-2 col-md-6">
                    <div class="callout callout-info">
                        <h4><i class="fa fa-exclamation-circle"></i> Note:</h4>
                        <p>You could add more than one keyword.</p>
                    </div>
                    <br>
                </div>
            </div>

            <hr>
            @if($row->photo1!=null)
                <div class="form-group header-group-0" id="form-group-file" style="">
                    <label class="col-sm-2 control-label">Photo 1</label>
                    <div class="col-sm-10">
                        <p><a data-lightbox="roadtrip" href="{{ URL::to('/').'/'.$row->photo1 }}">
                            <img style="max-width:160px" title="Image" src="{{ URL::to('/').'/'.$row->photo1 }}">
                        </a></p>
                        <input type="hidden" name="_photo1" value="{{ $row->photo1 }}">
                        <p><a class="btn btn-danger btn-delete btn-sm" onclick="if(!confirm('Are you sure ?')) return false" href="{{ CRUDBooster::mainpath('delete-image?image='.$row->photo1.'&id='.$row->id.'&column=photo1') }}"><i class="fa fa-ban"></i> Delete </a></p>
                        <p class="text-muted"><em>* If you want to upload other file, please first delete the file.</em></p>

                        <div class="text-danger"></div>
                    </div>
                </div>
            @else
                {{ form_mediapicker("Photo 1", "photo1", 10, "", '') }}
            @endif

            @if($row->photo2!=null)
                <div class="form-group header-group-0" id="form-group-file" style="">
                    <label class="col-sm-2 control-label">Photo 2</label>
                    <div class="col-sm-10">
                        <p><a data-lightbox="roadtrip" href="{{ URL::to('/').'/'.$row->photo2 }}">
                            <img style="max-width:160px" title="Image" src="{{ URL::to('/').'/'.$row->photo2 }}">
                        </a></p>
                        <input type="hidden" name="_photo2" value="{{ $row->photo2 }}">
                        <p><a class="btn btn-danger btn-delete btn-sm" onclick="if(!confirm('Are you sure ?')) return false" href="{{ CRUDBooster::mainpath('delete-image?image='.$row->photo2.'&id='.$row->id.'&column=photo2') }}"><i class="fa fa-ban"></i> Delete </a></p>
                        <p class="text-muted"><em>* If you want to upload other file, please first delete the file.</em></p>

                        <div class="text-danger"></div>
                    </div>
                </div>
            @else
                {{ form_mediapicker("Photo 2", "photo2", 10, "", '') }}
            @endif

            @if($row->photo3!=null)
                <div class="form-group header-group-0" id="form-group-file" style="">
                    <label class="col-sm-2 control-label">Photo 3</label>
                    <div class="col-sm-10">
                        <p><a data-lightbox="roadtrip" href="{{ URL::to('/').'/'.$row->photo3 }}">
                            <img style="max-width:160px" title="Image" src="{{ URL::to('/').'/'.$row->photo3 }}">
                        </a></p>
                        <input type="hidden" name="_photo3" value="{{ $row->photo3 }}">
                        <p><a class="btn btn-danger btn-delete btn-sm" onclick="if(!confirm('Are you sure ?')) return false" href="{{ CRUDBooster::mainpath('delete-image?image='.$row->photo3.'&id='.$row->id.'&column=photo3') }}"><i class="fa fa-ban"></i> Delete </a></p>
                        <p class="text-muted"><em>* If you want to upload other file, please first delete the file.</em></p>

                        <div class="text-danger"></div>
                    </div>
                </div>
            @else
                {{ form_mediapicker("Photo 3", "photo3", 10, "", '') }}
            @endif

            @if($row->photo4!=null)
                <div class="form-group header-group-0" id="form-group-file" style="">
                    <label class="col-sm-2 control-label">Photo 4</label>
                    <div class="col-sm-10">
                        <p><a data-lightbox="roadtrip" href="{{ URL::to('/').'/'.$row->photo4 }}">
                            <img style="max-width:160px" title="Image" src="{{ URL::to('/').'/'.$row->photo4 }}">
                        </a></p>
                        <input type="hidden" name="_photo4" value="{{ $row->photo4 }}">
                        <p><a class="btn btn-danger btn-delete btn-sm" onclick="if(!confirm('Are you sure ?')) return false" href="{{ CRUDBooster::mainpath('delete-image?image='.$row->photo4.'&id='.$row->id.'&column=photo4') }}"><i class="fa fa-ban"></i> Delete </a></p>
                        <p class="text-muted"><em>* If you want to upload other file, please first delete the file.</em></p>

                        <div class="text-danger"></div>
                    </div>
                </div>
            @else
                {{ form_mediapicker("Photo 4", "photo4", 10, "", '') }}
            @endif

            <hr>


            @if($row->photo_cover!=null)
                <div class="form-group header-group-0" id="form-group-file" style="">
                    <label class="col-sm-2 control-label">Photo Cover</label>
                    <div class="col-sm-10">
                        <p><a data-lightbox="roadtrip" href="{{ URL::to('/').'/'.$row->photo_cover }}">
                            <img style="max-width:160px" title="Image" src="{{ URL::to('/').'/'.$row->photo_cover }}">
                        </a></p>
                        <input type="hidden" name="_photo_cover" value="{{ $row->photo_cover }}">
                        <p><a class="btn btn-danger btn-delete btn-sm" onclick="if(!confirm('Are you sure ?')) return false" href="{{ CRUDBooster::mainpath('delete-image?image='.$row->photo_cover.'&id='.$row->id.'&column=photo_cover') }}"><i class="fa fa-ban"></i> Delete </a></p>
                        <p class="text-muted"><em>* If you want to upload other file, please first delete the file.</em></p>

                        <div class="text-danger"></div>
                    </div>
                </div>
            @else
                {{ form_mediapicker("Photo Cover", "photo_cover", 10, "", '') }}
            @endif

            {{ form_radio("Status", "status", $row->status) }}


        </div>
        <div class="panel-footer">
            <input type="submit" name="submit" value="Save & Add More"
                class='btn btn-success'>
            <input type="submit" name="submit" class="btn btn-primary" value="Save Data">
        </div>
    </form>
</div>
@endsection