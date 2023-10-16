<?php

namespace App;

class TextInput extends BaseInput
{


    public function renderINNER(): string
    {
        return sprintf(
            '<input type="text" name="%s" value="%s"/>',$this->name,$this->value
        );
    }
}