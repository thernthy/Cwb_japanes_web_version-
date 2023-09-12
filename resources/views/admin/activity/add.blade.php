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
        action="{{ crudbooster::mainpath('add-save') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="panel-body">
            {{ form_input("Title EN", "title_en", "text", 10, "", "required") }}
            {{ form_input("Title JP", "title_jp", "text", 10, "", "required") }}

            {{ form_textarea("Desc EN", "desc_en", "textarea", "required", "") }}
            {{ form_textarea("Desc JP", "desc_jp", "textarea", "required", "") }}

            {{ form_input("Youtube URL", "youtube", "text", 10, "", "", "", "Please add only the Youtube ID EX: https://www.youtube.com/watch?v=BswtqHoRmPk -> The ID is BswtqHoRmPk") }}

            <hr>

            @if(CRUDBooster::me()->id_cms_privileges!=3)
                {{ form_start_combobox("Country", "id_country", 6, "", "required", "select2") }}
                    @foreach ($countries as $item)
                    <option value="{!! $item->id !!}">{!! $item->val !!}</option>
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
                @foreach ($actions as $item)
                    <option value="{!! $item->id !!}">{!! $item->val !!}</option>
                @endforeach
            {{ form_end_combobox() }}

            <hr>

            {{ form_start_combobox("Keywords", "id_keyword[]", 6, "", "required multiple='multiple'", "select2", false) }}
                @foreach ($keywords as $item)
                    <option value="{!! $item->id !!}">{!! $item->val !!}</option>
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
            {{ form_mediapicker("Photo 1", "photo1", 10, "", '') }}
            {{ form_mediapicker("Photo 2", "photo2", 10, "", '') }}
            {{ form_mediapicker("Photo 3", "photo3", 10, "", '') }}
            {{ form_mediapicker("Photo 4", "photo4", 10, "", '') }}
            <hr>

            {{ form_mediapicker("Photo Cover", "photo_cover", 10, "", '') }}

            {{ form_radio("Status", "status") }}

        </div>
        <div class="panel-footer">
            <input type="submit" name="submit" value="Save & Add More"
                class='btn btn-success'>
            <input type="submit" name="submit" class="btn btn-primary" value="Save Data">
        </div>
    </form>
</div>
@endsection