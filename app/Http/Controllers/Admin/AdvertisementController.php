<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AdvertisementController extends CRUDCrontroller
{
    public function __construct(Request $request)
    {
        parent::__construct('Advertisement');
        $this->__request    = $request;
        $this->__data['page_title'] = 'Advertisements';
        $this->__indexView  = 'advertisements.index';
        $this->__createView = 'advertisements.add';
        $this->__editView   = 'advertisements.edit';
        $this->__detailView = 'advertisements.detail';
    }

    /**
     * This function is used for validate data
     * @param string $action
     * @param string $slug
     * @return array|\Illuminate\Contracts\Validation\Validator
     */
    public function validation(string $action, string $slug=NULL)
    {
        $validator = [];
        switch ($action){
            case 'POST':
                $validator = Validator::make($this->__request->all(), [
                    'title' => ["required","string","min:3","max:70"],
                    'description' => ["required","string","min:5","max:5000"],
                    'image' => ["required","image","max:3000"],
                    'url' => ['required', 'string',"min:5","max:5000"],
                ]);
                break;
            case 'PUT':
                $validator = Validator::make($this->__request->all(), [
                    '_method'   => 'required|in:PUT',
                    'title' => ["required","string","min:3","max:70"],
                    'description' => ["required","string","min:5","max:5000"],
                    'image' => ["required","image","max:3000"],
                    'url' => ['required', 'string',"min:5","max:5000"],
                ]);
                break;
        }
        return $validator;
    }

    /**
     * This function is used for before the index view render
     * data pass on view eg: $this->__data['title'] = 'Title';
     */
    public function beforeRenderIndexView()
    {

    }

    /**
     * This function is used to add data in datatable
     * @param object $record
     * @return array
     */
    public function dataTableRecords($record)
    {
        $options  = '<a href="'. route('advertisement.edit',['advertisement' => $record->slug]) .'" title="Edit" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>';
        $options .= '<a title="Delete" class="btn btn-xs btn-danger _delete_record"><i class="fa fa-trash"></i></a>';
        $image = Storage::disk('s3')->url($record->image);
        return [
            '<input type="checkbox" name="record_id[]" class="record_id" value="'. $record->slug .'">',
            $record->title,
            "<img src='".$image."' style='width:50px;'>",
            $record->click_count,
            "<span style=' max-width: 500px; display: inline-block;'>$record->url</span>",
            $options
        ];
    }

    /**
     * This function is used for before the create view render
     * data pass on view eg: $this->__data['title'] = 'Title';
     */
    public function beforeRenderCreateView()
    {

    }

    /**
     * This function is called before a model load
     */
    public function beforeStoreLoadModel()
    {

    }

    /**
     * This function is used for before the edit view render
     * data pass on view eg: $this->__data['title'] = 'Title';
     * @param string @slug
     */
    public function beforeRenderEditView($slug)
    {

    }

    /**
     * This function is called before a model load
     */
    public function beforeUpdateLoadModel()
    {

    }

    /**
     * This function is called before a model load
     */
    public function beforeRenderDetailView()
    {

    }

    /**
     * This function is called before a model load
     */
    public function beforeDeleteLoadModel()
    {

    }
}
