<?php namespace BotbrosAi\UnionBank\Models;

use Model;

/**
 * Model
 */
class Faq extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    public $fillable = ['question','answer'];
    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'botbrosai_unionbank_faq';
}
