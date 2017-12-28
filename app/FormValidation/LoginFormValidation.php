<?php

use App\Common\BaseForm;
/**
* 
*/
class LoginFormValidation extends BaseForm
{
    
    protected function rules()
    {
        return [
            'email' => 'require|email|max:255',
            'password' => 'require'
        ];
    }
}