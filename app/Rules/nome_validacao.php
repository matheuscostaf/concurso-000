<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class nome_validacao implements Rule
{

    public function passes($attribute, $value)
    {   
        
        for($i=0 ;$i<strlen($value); $i++){
            if (preg_match('/[a-zA-Z’ ]+/',$value[$i])) {
            }else{
                return false;
            }
        }
        return true;
    }
    public function message()
    {
        return 'O campo Nome não deve conter números e caracteres especiais(ex:1,2,$,#).';
    }
}
