<?php namespace Watchlearn\Company\Components;

use Cms\Classes\ComponentBase;
use Input;
use Watchlearn\Company\Models\Branch;
use Watchlearn\Company\Models\Company;
use Watchlearn\Company\Models\Ledger;

class LedgerForm extends ComponentBase
{
    public function componentDetails(){
        return [
            'name' => 'Ledger Form',
            'description' => 'Add a ledger'
        ];
    }

    public function onRun(){
        $this->page['company'] = Company::all()->lists('name', 'id');
        $this->page['branch'] = Branch::all()->lists('name', 'id');
    }

    public function onSeva(){
        $ledger = new Ledger();

        $ledger->order = Input::get('order');
        $ledger->company_id = Input::get('company_id');
        $ledger->branch_id = Input::get('branch_id');
        $ledger->amount = Input::get('amount');
        $ledger->wallet = Input::get('wallet');
        $ledger->details = Input::get('details');


        $ledger->save();
    }
}