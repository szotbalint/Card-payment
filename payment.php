<?php namespace Szb\Payment\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use ValidationException;

class Payment extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Payment component',
            'description' => 'This is integrat the payment'
        ];
    }


    public function payment(){
        
        //Input::has('checkValue')) ? true : false;

        if (Input::has('free')==true ) {
        }
        else if (Input::has('basic')==true ) {
            // atiranyit a fizeteshez, bellitja az osszeget X-re
        }

        else if (Input::has('gold')==true ) {
            // atiranyit a fizeteshez, bellitja az osszeget y-ra
        }
    
        //ha sikeres a fizetés

        //meghivja az urlap mentese fuggvenyt

        Flash::Success('Sikeres fizetés!');


        // If fizetes nem sikerult
        Flash::Error('Sikertelen fizetés, próbálja újra később!');
    }

}