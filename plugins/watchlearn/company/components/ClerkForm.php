<?php namespace Watchlearn\Company\Components;

use Cms\Classes\ComponentBase;
use Input;
use Watchlearn\Company\Models\Branch;
use Watchlearn\Company\Models\Company;
use Watchlearn\Company\Models\Clerk;

class ClerkForm extends ComponentBase
{
    public function componentDetails(){
        return [
            'name' => 'Clerk Form',
            'description' => 'Add a clerk'
        ];
    }

    public function onRun(){
        $this->page['company'] = Company::all()->lists('name', 'id');
        $this->page['branch'] = Branch::all()->lists('name', 'id');
    }

    public function onSeva(){
        $clerk = new Clerk();

        $clerk->name = Input::get('name');
        $clerk->company_id = Input::get('company_id');
        $clerk->branch_id = Input::get('branch_id');
        $clerk->wallet = Input::get('wallet');


        $clerk->save();
    }
}