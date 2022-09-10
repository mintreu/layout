<?php

namespace Mintreu\Layout;

use Illuminate\View\Component;

class Layout extends Component
{

    public bool $jsStyle;
    public bool $manifest;

    public function __construct(bool $manifest=false,bool $jsStyle=false)
    {
        $this->manifest = $manifest;
        $this->jsStyle = $jsStyle;
    }


    public function render()
    {
        return view('layout::layouts.app');
    }
}
