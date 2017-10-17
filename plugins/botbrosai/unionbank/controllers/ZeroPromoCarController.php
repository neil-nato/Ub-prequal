<?php namespace BotbrosAi\UnionBank\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use BotbrosAi\UnionBank\Models\ZeroPromoCar;

class ZeroPromoCarController extends Controller
{
    //

    /* GET */
    public function zeroPromoCarList(){
    	return ZeroPromoCar::all();
    }

    public function zeroPromoCarListSingle($zero_promo_id){
        try{

          if (ZeroPromoCar::where('zero_promo_id','=',$zero_promo_id)->exists()) {
              return ZeroPromoCar::where('zero_promo_id','=',$zero_promo_id)->get();
          }

        }catch(Exception $e){
          return response($e,400);
        }
      }
    //

    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('BotbrosAi.UnionBank', 'main-menu-item4', 'side-menu-item');
    }
}
