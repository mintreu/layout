<?php

namespace Mintreu\Layout;

use Illuminate\View\Component;

class Layout extends Component
{

    public bool $jsStyle = false;


    public function render()
    {
        return view('layout::layouts.app');
    }
}
