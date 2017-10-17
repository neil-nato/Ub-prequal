<?php namespace BotbrosAi\UnionBank\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use BotbrosAi\UnionBank\Models\Faq;


class FaqController extends Controller
{
    //

    /* GET */
    public function faqList(){
    	return Faq::all();
    }

    //

    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('BotbrosAi.UnionBank', 'main-menu-item');
    }
}
