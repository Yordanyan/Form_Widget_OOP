<?php

namespace App;

class Email_Input extends BaseInput
{


    public function renderINNER(): string
    {
        return sprintf(
            '<input type="email" name="%s" value="%s"/>',$this->name,$this->value
        );
    }
}