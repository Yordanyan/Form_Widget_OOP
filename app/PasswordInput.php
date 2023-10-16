<?php

namespace App;

class PasswordInput extends BaseInput
{
    public function renderINNER(): string
    {
        return sprintf(
            '<input type="password" name="%s" value="%s"/>',$this->name,$this->value
        );
    }
}