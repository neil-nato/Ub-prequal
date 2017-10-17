<?php namespace BotbrosAi\UnionBank\Models;

use Model;

/**
 * Model
 */
class ZeroPromoCar extends Model
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
    public $table = 'botbrosai_unionbank_zero_promo_car';


    

    public $belongsTo = [

        'brand' => [
            'BotbrosAi\UnionBank\Models\CarMake',
            'key' => 'car_make_id'
        ],

        'zeropromo' => [
            'BotbrosAi\UnionBank\Models\ZeroPromo',
            'key' => 'zero_promo_id'
        ],

    ];


    public function getZeropromoOptions(){
        return ZeroPromo::where('car_make_id', '=', $this->car_make_id)->lists('title', 'id');
    }
}