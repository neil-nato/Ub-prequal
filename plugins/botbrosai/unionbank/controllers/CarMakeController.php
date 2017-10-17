<?php namespace BotbrosAi\UnionBank\Controllers;
use Backend\Classes\Controller;
use BackendMenu;
use BotbrosAi\UnionBank\Models\CarMake;
use BotbrosAi\UnionBank\Models\CarModel;

class CarMakeController extends Controller
{
    public function carList(){
        $car = CarMake::all();
        $haha = "";
        foreach ($car as $key => $value) {
            $arr = [];
            $carmodel = CarModel::select('model')->where('car_make_id','=',$value->id)->get();
            $carmodel=  json_decode($carmodel,true);
            $carmodel = array_values(array_unique($carmodel, SORT_REGULAR));
            $car[$key]->models = $carmodel;
            foreach ($car[$key]->models as $key2 => $value2) {
                $carvariant = CarModel::where('model','=',$value2['model'])->get();
                $value2['variants'] = $carvariant;
                array_push($arr,$value2);
            }
            $car[$key]->models = $arr;
        }
        return $car;
    }

    public function carViewIncrement($id){
        $car = CarModel::where('id','=',$id)->increment('views_increment');
        return $car;
    }

    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('BotbrosAi.UnionBank', 'main-menu-item3', 'side-menu-item');
    }

    public $belongsToMany = [
      'car_make_id' => [
          'BotbrosAi\UnionBbank\Models\CarModel'
          ]
      ];
}
