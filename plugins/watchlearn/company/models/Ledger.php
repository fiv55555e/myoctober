<?php namespace Watchlearn\Company\Models;

use Model;

/**
 * Model
 */
class Ledger extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'watchlearn_company_ledger';

    public $belongsTo = [
        'company' => [
            'Watchlearn\Company\Models\Company',
            'key' => 'company_id'
        ],
        'branch' => [
            'Watchlearn\Company\Models\Branch',
            'key' => 'branch_id'
        ]
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
