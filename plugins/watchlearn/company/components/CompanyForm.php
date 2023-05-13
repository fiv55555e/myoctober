<?php namespace Watchlearn\Company\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Watchlearn\Company\Models\Company;

class CompanyForm extends ComponentBase
{
    public function componentDetails(){
        return [
            'name' => 'Company Form',
            'description' => 'Add a company'
        ];
    }

    public function onSeva(){
        $company = new Company();

        $company->name = Input::get('name');
        $company->username = Input::get('username');
        $company->password = Input::get('password');

        $company->save();
    }
}