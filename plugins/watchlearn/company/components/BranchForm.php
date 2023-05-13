<?php namespace Watchlearn\Company\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Watchlearn\Company\Models\Branch;
use Watchlearn\Company\Models\Company;

class BranchForm extends ComponentBase
{
    public function componentDetails(){
        return [
            'name' => 'Branch Form',
            'description' => 'Add a branch'
        ];
    }

    public function onRun(){
        $this->page['company'] = Company::all()->lists('name', 'id');
    }

    public function onSeva(){
        $branch = new Branch();

        $branch->name = Input::get('name');
        $branch->company_id = Input::get('company_id');
        $branch->address = Input::get('address');

        $branch->save();
    }
}