<?php namespace BotbrosAi\UnionBank\Models;

use Model;

/**
 * Model
 */
class CarMake extends Model
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
    public $table = 'botbrosai_unionbank_car_make';


    /* Relations */

    public $attachOne = [
        'brand_logo' => 'System\Models\File'
    ];
}