<?php

namespace Mintreu\Layout;

use Illuminate\View\Component;

class Layout extends Component
{

    public bool $jsStyle;
    public bool $manifest;
    public bool $ogTags;
    public string $layout_title;

    public function __construct(string $title='',bool $manifest=false,bool $via_js=false,bool $og_tag=false)
    {
        $this->manifest = $manifest;
        $this->jsStyle = $via_js;
        $this->ogTags = $og_tag;
        $this->layout_title = $title;
    }


    public function render()
    {
        return view('layout::layouts.app');
    }
}
