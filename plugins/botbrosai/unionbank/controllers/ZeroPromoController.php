<?php namespace BotbrosAi\UnionBank\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use BotbrosAi\UnionBank\Models\ZeroPromo;
use BotbrosAi\UnionBank\Models\ZeroPromoCar;
use Db;
class ZeroPromoController extends Controller
{
    //

    public function zeroPromoList(){
    	$zeropromo =  ZeroPromo::all(); 
        foreach ($zeropromo as $key => $value){
            $cars = ZeroPromoCar::
                select(
                    'botbrosai_unionbank_zero_promo_car.id',
                    'botbrosai_unionbank_car_make.name',
                    'botbrosai_unionbank_zero_promo_car.model',
                    'botbrosai_unionbank_zero_promo_car.srp'
                )
                ->join('botbrosai_unionbank_car_make', 'botbrosai_unionbank_car_make.id','=','car_make_id')
                ->where('zero_promo_id','=',$value['id'])
                ->get();
            foreach ($cars as $key2 => $value2){
                $getDownpayment = Db::table('botbrosai_unionbank_downpayment_zero_promo_car')
                    ->select('downpayment')
                    ->join('botbrosai_unionbank_downpayment', 'downpayment_id', '=', 'botbrosai_unionbank_downpayment.id' )
                    ->where('zero_promo_car_id', '=', $value2['id'])
                    ->get();
                $getTerms = Db::table('botbrosai_unionbank_term_zero_promo_car')
                    ->select('term')
                    ->join('botbrosai_unionbank_term', 'term_id', '=', 'botbrosai_unionbank_term.id' )
                    ->where('zero_promo_car_id', '=', $value2['id'])
                    ->get();
                $downpayment = [];
                $term = [];
                foreach ($getDownpayment as $key3 => $value3){
                    array_push($downpayment, $getDownpayment[$key3]->downpayment);
                }
                foreach ($getTerms as $key3 => $value3){
                    array_push($term, $getTerms[$key3]->term);
                }
                $cars[$key2]->downpayments = $downpayment;
                $cars[$key2]->terms = $term;
            }
            $zeropromo[$key]->zeropromocars = $cars;
            $zeropromo[$key]->start_date = date_format(date_create($zeropromo[$key]->start_date),"F d, Y" );
            $zeropromo[$key]->end_date = date_format(date_create($zeropromo[$key]->end_date),"F d, Y" );
        }
        return $zeropromo;
    }

    //

    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController',
        'Backend\Behaviors\RelationController'
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('BotbrosAi.UnionBank', 'main-menu-item4');
    }
}
