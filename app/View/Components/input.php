<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    public $label;
    public $name;
    public $placeholder;
    public $value;
    public  $type;
    public $var;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label=null,$name,$type,$placeholder=null,$value=null,$var=0)
    {
        $this->label = $label;
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->var = $var;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
