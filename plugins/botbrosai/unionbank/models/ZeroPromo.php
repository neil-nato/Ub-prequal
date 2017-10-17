<?php namespace BotbrosAi\UnionBank\Models;

use Model;

/**
 * Model
 */
class ZeroPromo extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'botbrosai_unionbank_zero_promo';


    public $belongsTo = [
        'brand' => [
            'BotbrosAi\UnionBank\Models\CarMake',
            'key' => 'car_make_id'
        ],

        
    ];

    public $hasMany = [
        'zeropromoo' => [
            'BotbrosAi\UnionBank\Models\ZeroPromoCar',
            'key' => 'zero_promo_id'
        ]
    ];

    public $attachOne = [
        'promo_image' => 'System\Models\File'
    ];
}