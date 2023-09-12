<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;

	use Illuminate\Support\Str;

	class AdminActivitiesController extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "title_en";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_bulk_action = false;
			$this->button_action_style = "button_icon";
			$this->button_add = true;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = false;
			$this->button_show = false;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = true;
			$this->table = "activities";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Title EN","name"=>"title_en"];
			$this->col[] = ["label"=>"Title JP","name"=>"title_jp"];
			$this->col[] = ["label"=>"Country","name"=>"id_country","join"=>"countries,title"];
			$this->col[] = ["label"=>"Status","name"=>"status","callback_php"=>'($row->status == 1? "<span class=\"label label-success\">Show</span>" : "<span class=\"label label-danger\">Hide</span>")'];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Country','name'=>'id_country','type'=>'select2','validation'=>'required|integer','width'=>'col-sm-10','datatable'=>'countries,title'];
			$this->form[] = ['label'=>'Action','name'=>'id_action','type'=>'select2','width'=>'col-sm-10','datatable'=>'actions,title_jp'];
			$this->form[] = ['label'=>'Title EN','name'=>'title_en','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Title JP','name'=>'title_jp','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Desc EN','name'=>'desc_en','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Desc JP','name'=>'desc_jp','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Youtube','name'=>'youtube','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','help'=>'Please add only the Youtube ID EX: https://www.youtube.com/watch?v=BswtqHoRmPk -> The ID is BswtqHoRmPk'];
			$this->form[] = ['label'=>'Photo Cover','name'=>'photo_cover','type'=>'upload','validation'=>'image','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Photo1','name'=>'photo1','type'=>'upload','validation'=>'image','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Photo2','name'=>'photo2','type'=>'upload','validation'=>'image','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Photo3','name'=>'photo3','type'=>'upload','validation'=>'image','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Photo4','name'=>'photo4','type'=>'upload','validation'=>'image','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Keywords','name'=>'id_keyword','type'=>'select2','width'=>'col-sm-10','datatable'=>'keywords,title_en'];
			$this->form[] = ['label'=>'Actions','name'=>'id_actions','type'=>'select2','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Status','name'=>'status','type'=>'radio','validation'=>'required','width'=>'col-sm-10','dataenum'=>'1|Show;0|Hide'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ['label'=>'Country','name'=>'id_country','type'=>'select2','validation'=>'required|integer','width'=>'col-sm-10','datatable'=>'countries,title'];
			//$this->form[] = ['label'=>'Action','name'=>'id_action','type'=>'select2','width'=>'col-sm-10','datatable'=>'actions,title_jp'];
			//$this->form[] = ['label'=>'Title EN','name'=>'title_en','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Title JP','name'=>'title_jp','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Desc EN','name'=>'desc_en','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Desc JP','name'=>'desc_jp','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Youtube','name'=>'youtube','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','help'=>'Please add only the Youtube ID EX: https://www.youtube.com/watch?v=BswtqHoRmPk -> The ID is BswtqHoRmPk'];
			//$this->form[] = ['label'=>'Photo Cover','name'=>'photo_cover','type'=>'upload','validation'=>'image','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Photo1','name'=>'photo1','type'=>'upload','validation'=>'image','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Photo2','name'=>'photo2','type'=>'upload','validation'=>'image','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Photo3','name'=>'photo3','type'=>'upload','validation'=>'image','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Photo4','name'=>'photo4','type'=>'upload','validation'=>'image','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Keywords','name'=>'id_keyword','type'=>'select2','width'=>'col-sm-10','datatable'=>'keywords,title_en'];
			//$this->form[] = ['label'=>'Actions','name'=>'id_actions','type'=>'select2','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Status','name'=>'status','type'=>'radio','validation'=>'required','width'=>'col-sm-10','dataenum'=>'1|Show;0|Hide'];
			# OLD END FORM

			/* 
	        | ---------------------------------------------------------------------- 
	        | Sub Module
	        | ----------------------------------------------------------------------     
			| @label          = Label of action 
			| @path           = Path of sub module
			| @foreign_key 	  = foreign key of sub table/module
			| @button_color   = Bootstrap Class (primary,success,warning,danger)
			| @button_icon    = Font Awesome Class  
			| @parent_columns = Sparate with comma, e.g : name,created_at
	        | 
	        */
	        $this->sub_module = array();


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Action Button / Menu
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
	        | @icon        = Font awesome class icon. e.g : fa fa-bars
	        | @color 	   = Default is primary. (primary, warning, succecss, info)     
	        | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
	        | 
	        */
	        $this->addaction = array();


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Button Selected
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @icon 	   = Icon from fontawesome
	        | @name 	   = Name of button 
	        | Then about the action, you should code at actionButtonSelected method 
	        | 
	        */
	        $this->button_selected = array();

	                
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add alert message to this module at overheader
	        | ----------------------------------------------------------------------     
	        | @message = Text of message 
	        | @type    = warning,success,danger,info        
	        | 
	        */
	        $this->alert        = array();
	                

	        
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add more button to header button 
	        | ----------------------------------------------------------------------     
	        | @label = Name of button 
	        | @url   = URL Target
	        | @icon  = Icon from Awesome.
	        | 
	        */
	        $this->index_button = array();



	        /* 
	        | ---------------------------------------------------------------------- 
	        | Customize Table Row Color
	        | ----------------------------------------------------------------------     
	        | @condition = If condition. You may use field alias. E.g : [id] == 1
	        | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.        
	        | 
	        */
	        $this->table_row_color = array();     	          

	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | You may use this bellow array to add statistic at dashboard 
	        | ---------------------------------------------------------------------- 
	        | @label, @count, @icon, @color 
	        |
	        */
	        $this->index_statistic = array();



	        /*
	        | ---------------------------------------------------------------------- 
	        | Add javascript at body 
	        | ---------------------------------------------------------------------- 
	        | javascript code in the variable 
	        | $this->script_js = "function() { ... }";
	        |
	        */
	        $this->script_js = NULL;
			$this->script_js .= "
				// input
				$('.select2').select2();

				// summernote
				$('#desc_en').summernote({
					height: ($(window).height() - 500),
					callbacks: {
						onImageUpload: function (image) {
							uploadImagedesc_en(image[0]);
						}
					}
				});
	
				function uploadImagedesc_en(image) {
					var data = new FormData();
					data.append(\"userfile\", image);
					$.ajax({
						url: '".CRUDBooster::mainpath('upload-summernote')."',
						cache: false,
						contentType: false,
						processData: false,
						data: data,
						type: \"post\",
						success: function (url) {
							var image = $('<img>').attr('src', url);
							$('#desc_en').summernote(\"insertNode\", image[0]);
						},
						error: function (data) {
							console.log(data);
						}
					});
				}

				$('#desc_jp').summernote({
					height: ($(window).height() - 500),
					callbacks: {
						onImageUpload: function (image) {
							uploadImagedesc_jp(image[0]);
						}
					}
				});
	
				function uploadImagedesc_jp(image) {
					var data = new FormData();
					data.append(\"userfile\", image);
					$.ajax({
						url: '".CRUDBooster::mainpath('upload-summernote')."',
						cache: false,
						contentType: false,
						processData: false,
						data: data,
						type: \"post\",
						success: function (url) {
							var image = $('<img>').attr('src', url);
							$('#desc_jp').summernote(\"insertNode\", image[0]);
						},
						error: function (data) {
							console.log(data);
						}
					});
				}
			";


            /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code before index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
	        */
	        $this->pre_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code after index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it after index table
	        | $this->post_index_html = "<p>test</p>";
	        |
	        */
	        $this->post_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include Javascript File 
	        | ---------------------------------------------------------------------- 
	        | URL of your javascript each array 
	        | $this->load_js[] = asset("myfile.js");
	        |
	        */
	        $this->load_js = array();
			$this->load_js[] = asset("vendor/crudbooster/assets/select2/dist/js/select2.full.min.js");
			$this->load_js[] = asset("vendor/crudbooster/assets/summernote/summernote.min.js");
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Add css style at body 
	        | ---------------------------------------------------------------------- 
	        | css code in the variable 
	        | $this->style_css = ".style{....}";
	        |
	        */
	        $this->style_css = NULL;
			$this->style_css = "

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
					width:100%;
				}
			";
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include css File 
	        | ---------------------------------------------------------------------- 
	        | URL of your css each array 
	        | $this->load_css[] = asset("myfile.css");
	        |
	        */
	        $this->load_css = array();
			$this->load_css[] = asset("vendor/crudbooster/assets/select2/dist/css/select2.min.css");
			$this->load_css[] = asset("vendor/crudbooster/assets/summernote/summernote.css");
	        
	        
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for button selected
	    | ---------------------------------------------------------------------- 
	    | @id_selected = the id selected
	    | @button_name = the name of button
	    |
	    */
	    public function actionButtonSelected($id_selected,$button_name) {
	        //Your code here
	            
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate query of index result 
	    | ---------------------------------------------------------------------- 
	    | @query = current sql query 
	    |
	    */
	    public function hook_query_index(&$query) {
	        //Your code here
			if(CRUDBooster::me()->id_cms_privileges==3) {
				$query->where('id_country', CRUDBooster::me()->country_id);
			}
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate row of index table html 
	    | ---------------------------------------------------------------------- 
	    |
	    */    
	    public function hook_row_index($column_index,&$column_value) {	        
	    	//Your code here
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before add data is execute
	    | ---------------------------------------------------------------------- 
	    | @arr
	    |
	    */
	    public function hook_before_add(&$postdata) {        
	        //Your code here
			// dd($postdata);

			$postdata['id_keyword'] = serialize($postdata['id_keyword']);
			$postdata['id_actions'] = serialize($postdata['id_actions']);

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after add public static function called 
	    | ---------------------------------------------------------------------- 
	    | @id = last insert id
	    | 
	    */
	    public function hook_after_add($id) {
	        //Your code here
			$data = DB::table('activities')
				->select('title_en')
				->where('id', $id)
				->first();

			$result = DB::table('activities')
				->where('id', $id)
				->update(
					[
						'slug' => Str::slug($data->title_en)
					]
				);

			// -----------------------------
			$activity = DB::table('activities')
				->where('id', $id)
				->first();

			$datanya = unserialize($activity->id_keyword);
			$datanya2 = unserialize($activity->id_actions);

			$numItems = count($datanya);
			$numItems2 = count($datanya2);
			$i = 0;

			// keyword
			// dd($numItems);
			foreach($datanya as $item) {
				if(++$i<=$numItems){
					try {
						$result = DB::table('keyword_activities')->insert(
							[
								'id_activity' => $activity->id, 
								'id_keyword' => $item,
								'created_at' => $activity->created_at
							]
						);
					} catch (\Illuminate\Database\QueryException $e){
						$errorCode = $e->errorInfo[1];

						// dd($e->errorInfo);
						if($errorCode == 1062){
							// houston, we have a duplicate entry problem
							CRUDBooster::redirect(CRUDBooster::adminPath('activities/add'), 'You have input a duplicate data1!', 'danger');
							exit;
						}else{
							CRUDBooster::redirect(CRUDBooster::adminPath('activities/add'), 'You have input a duplicate data2! ErrorCode: '.$errorCode, 'danger');
							exit;
						}
						// dd('test!');
					}
				}else{
					$check = DB::table('keyword_activities')
					->where([
						'id_activity' => $activity->id,
						'id_keyword' => $item,
					])->count();

					if($check==0){
						$data = $item;
					} else {
						CRUDBooster::redirect(CRUDBooster::adminPath('activities/add'), 'You have input a duplicate data3!', 'danger');
						exit();
					}
				}
			}

			$i = 0;
			// action
			foreach($datanya2 as $item) {
				if(++$i<=$numItems2){
					try {
						$result = DB::table('action_activities')->insert(
							[
								'id_activity' => $activity->id, 
								'id_action' => $item,
								'created_at' => $activity->created_at
							]
						);
					} catch (\Illuminate\Database\QueryException $e){
						$errorCode = $e->errorInfo[1];

						// dd($e->errorInfo);
						if($errorCode == 1062){
							// houston, we have a duplicate entry problem
							CRUDBooster::redirect(CRUDBooster::adminPath('activities/add'), 'You have input a duplicate data1!', 'danger');
							exit;
						}else{
							CRUDBooster::redirect(CRUDBooster::adminPath('activities/add'), 'You have input a duplicate data2! ErrorCode: '.$errorCode, 'danger');
							exit;
						}
						// dd('test!');
					}
				}else{
					$check = DB::table('action_activities')
					->where([
						'id_activity' => $activity->id,
						'id_action' => $item,
					])->count();

					if($check==0){
						$data = $item;
					} else {
						CRUDBooster::redirect(CRUDBooster::adminPath('activities/add'), 'You have input a duplicate data3!', 'danger');
						exit();
					}
				}
			}
	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before update data is execute
	    | ---------------------------------------------------------------------- 
	    | @postdata = input post data 
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_edit(&$postdata,$id) {        
	        //Your code here
			// insert serialized array to db 
			$postdata['id_keyword'] = serialize($postdata['id_keyword']);
			$postdata['id_actions'] = serialize($postdata['id_actions']);

			// delete pivot data
			DB::table('keyword_activities')->where('id_activity', $id)->delete();
			DB::table('action_activities')->where('id_activity', $id)->delete();


	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after edit public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_edit($id) {
	        //Your code here 
			$data = DB::table('activities')
				->select('title_en')
				->where('id', $id)
				->first();

			$result = DB::table('activities')
				->where('id', $id)
				->update(
					[
						'slug' => Str::slug($data->title_en)
					]
				);

			// ------------------------
			$activity = DB::table('activities')
				->where('id', $id)
				->first();

			$datanya = unserialize($activity->id_keyword);
			$datanya2 = unserialize($activity->id_actions);

			// dd($activity->id_keyword);

			$numItems = count($datanya);
			$numItems2 = count($datanya2);
			$i = 0;

			// dd($numItems);
			foreach($datanya as $item) {
				if(++$i<=$numItems){
					try {
						$result = DB::table('keyword_activities')->insert(
							[
								'id_activity' => $activity->id, 
								'id_keyword' => $item,
								'created_at' => $activity->created_at
							]
						);
					} catch (\Illuminate\Database\QueryException $e){
						$errorCode = $e->errorInfo[1];

						// dd($e->errorInfo);
						if($errorCode == 1062){
							// houston, we have a duplicate entry problem
							CRUDBooster::redirect(CRUDBooster::adminPath('activities/add'), 'You have input a duplicate data1!', 'danger');
							exit;
						}else{
							CRUDBooster::redirect(CRUDBooster::adminPath('activities/add'), 'You have input a duplicate data2! ErrorCode: '.$errorCode, 'danger');
							exit;
						}
						// dd('test!');
					}
				}else{
					$check = DB::table('keyword_activities')
					->where([
						'id_activity' => $activity->id,
						'id_keyword' => $item,
					])->count();

					if($check==0){
						$data = $item;
					} else {
						CRUDBooster::redirect(CRUDBooster::adminPath('activities/add'), 'You have input a duplicate data3!', 'danger');
						exit();
					}
				}
			}

			$i = 0;
			// action
			foreach($datanya2 as $item) {
				if(++$i<=$numItems2){
					try {
						$result = DB::table('action_activities')->insert(
							[
								'id_activity' => $activity->id, 
								'id_action' => $item,
								'created_at' => $activity->created_at
							]
						);
					} catch (\Illuminate\Database\QueryException $e){
						$errorCode = $e->errorInfo[1];

						// dd($e->errorInfo);
						if($errorCode == 1062){
							// houston, we have a duplicate entry problem
							CRUDBooster::redirect(CRUDBooster::adminPath('activities/add'), 'You have input a duplicate data1!', 'danger');
							exit;
						}else{
							CRUDBooster::redirect(CRUDBooster::adminPath('activities/add'), 'You have input a duplicate data2! ErrorCode: '.$errorCode, 'danger');
							exit;
						}
						// dd('test!');
					}
				}else{
					$check = DB::table('action_activities')
					->where([
						'id_activity' => $activity->id,
						'id_action' => $item,
					])->count();

					if($check==0){
						$data = $item;
					} else {
						CRUDBooster::redirect(CRUDBooster::adminPath('activities/add'), 'You have input a duplicate data3!', 'danger');
						exit();
					}
				}
			}

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command before delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_delete($id) {
	        //Your code here
			// delete pivot data
			DB::table('keyword_activities')->where('id_activity', $id)->delete();
			DB::table('action_activities')->where('id_activity', $id)->delete();

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_delete($id) {
	        //Your code here

	    }

	    //By the way, you can still create your own method in here... :) 
		public function getAdd(){
			$data['page_title'] = "Activity";

			// populate dropdown
			$data['countries'] = DB::table('countries')
				->select('title as val', 'id')
            	->get();
            
			$data['actions'] = DB::table('actions')
				->select('title_en as val', 'id')
				->get();

			$data['keywords'] = DB::table('keywords')
				->select('title_en as val', 'id')
				->get();

			return $this->view('admin/activity/add', $data);
		}

		// getEdit
		public function getEdit($id){
			//Create an Auth
			if(!CRUDBooster::isUpdate() && $this->global_privilege==FALSE || $this->button_edit==FALSE) {    
				CRUDBooster::redirect(CRUDBooster::adminPath(),trans("crudbooster.denied_access"));
			}

			$data = [];
			$data['page_title'] = 'Edit Activity';
			$data['row'] = DB::table('activities')
				->where(
					'id',
					$id
					)
				->first();
			
			// populate dropdown
			$data['countries'] = DB::table('countries')
				->select('title as val', 'id')
            	->get();
            
			$data['actions'] = DB::table('actions')
				->select('title_en as val', 'id')
				->get();

			$data['keywords'] = DB::table('keywords')
				->select('title_en as val', 'id')
				->get();

			// dd($data);

			return $this->view('admin/activity/edit', $data);
		}

		// data select
		public function getFillSelectPangan($id){
			$data = DB::table('pedagang_pangans')
			->join(
				'pangans',
				'pedagang_pangans.pangan_id',
				'=',
				'pangans.id'
			)
			->where('pedagang_pangans.pedagang_id', $id)
			->select("pangans.nama_pangan as label")
			->get();
	
			return $data;
		}

		// test
		public function getTest(){
			$data['page_title'] = "Test";

			// populate dropdown
			$data['activity'] = DB::table('activities')
				->select('*')
				->where('id', 3)
				->first();

			dd(unserialize($data['activity']->id_keyword));

			// return $this->view('admin/activity/add', $data);
		}


	}