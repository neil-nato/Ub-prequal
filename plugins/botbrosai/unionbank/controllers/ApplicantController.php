<?php namespace BotbrosAi\UnionBank\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use BotbrosAi\UnionBank\Models\Applicant;
use Symfony\Component\HttpFoundation\Request;

class ApplicantController extends Controller
{
    public function refNumCheck(Request $req){
    	try{
            $data = $req->input();
            // if (Applicant::where('prequalification_code','=',$data['prequalification_code'])->exists()) {
            //     return 'Success.. Redirecting to (View)';
            // }
            if (Applicant::where('prequalification_code','=',$data['prequalification_code'])->exists()) {
                return 'Success.. Redirecting to ';
            }
        }catch(Exception $e){
            return response($e,400);
        }
    }

    public function otpCheck(Request $req){
    	try{
            $data = $req->input();
            if (Applicant::where('otp_code','=',$data['otp_code'])->exists()) {
                return 'Success.. Redirecting to ';
            }
            // return $data['otp_code'];
            // return "haha";
        }catch(Exception $e){
            return response($e,400);
        }
    }



    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('BotbrosAi.UnionBank', 'main-menu-item5', 'side-menu-item');
    }
}
