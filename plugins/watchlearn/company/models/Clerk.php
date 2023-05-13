<?php namespace Watchlearn\Company\Models;

use Model;

/**
 * Model
 */
class Clerk extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'watchlearn_company_clerk';

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
