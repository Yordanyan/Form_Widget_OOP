<?php

namespace App;

abstract class BaseInput extends HtmlElement
{
    public string $name;
    public string $label;
    public string $value;

    /**
     * @param string $name
     * @param string $label
     * @param string $value
     */
    public function __construct(string $name, string $label, string $value = '')
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }

    public function render(): string
    {
        return sprintf(
            '<div class="section"> 
                        <label> %s </label><br>
                      %s
                    </div><br>',$this->label,$this->renderINNER()
        );
    }

    abstract public function renderINNER(): string;


}