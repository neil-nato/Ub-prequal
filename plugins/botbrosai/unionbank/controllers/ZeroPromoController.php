<?php namespace BotbrosAi\UnionBank\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use BotbrosAi\UnionBank\Models\ZeroPromo;
use BotbrosAi\UnionBank\Models\ZeroPromoCar;

class ZeroPromoController extends Controller
{
    //

    /* GET */
    public function zeroPromoList(){
    	$zeropromo =  ZeroPromo::all();
        foreach ($zeropromo as $key => $value){
            $cars = ZeroPromoCar::join('botbrosai_unionbank_car_make', 'botbrosai_unionbank_car_make.id','=','car_make_id')->where('zero_promo_id','=',$value->id)->get();
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
