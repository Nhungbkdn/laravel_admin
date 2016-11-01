<?php namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PromotionRequest as StoreRequest;
use App\Http\Requests\PromotionRequest as UpdateRequest;

class PromotionCrudController extends CrudController {

	public function __construct() {
        parent::__construct();

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Promotion");
        $this->crud->setRoute("admin/promotion");
        $this->crud->setEntityNameStrings('promotion', 'promotions');

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/

		 $this->crud->addColumns(['id']);
		 $this->crud->addColumns(['title']);
        $this->crud->addColumns(['image']);
        $this->crud->addColumns(['imageThumb']);
        
         $this->crud->addColumns(['created_at']);

         $this->crud->addColumn([ 'label' => "Cinema",
                   'type' => 'select2',
                    'name' => 'cinema_id',
                    
                 'entity' => 'cinema', 
                'attribute' => 'name', 
                  'model' => "App\Models\Cinema", ]);
       $this->crud->addField([
                    'name' => 'title',
                    'label' => "Title(*)",
                    'type' =>'text',
                     'store_as_json' => true
                    ]
                    );
                    $this->crud->addField([
                    'name' => 'image',
                    'label' => "Image(*)",
                    'type' =>'browse',
                     'store_as_json' => true
                    ]
                    );
                     $this->crud->addField([
                    'name' => 'content',
                    'label' => "Content(*)",
                    'type' =>'textarea',
                     'store_as_json' => true
                    ]
                    );
                     $this->crud->addField([
                   'label' => "Image_thumb",
                    'name' => "imageThumb",
                     'type' => 'browse',
    
                    ]
                    );
                     $this->crud->addField([
                    'label' => "Cinema(*)",
                   'type' => 'select2',
                    'name' => 'cinema_id',
                    
                 'entity' => 'cinema', 
                'attribute' => 'name', 
                  'model' => "App\Models\Cinema", 
                  
                    ]
                   );

		// ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']);
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though: 
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable(); 

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}
