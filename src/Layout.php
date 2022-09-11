<?php

namespace Mintreu\Layout;

use Illuminate\View\Component;

class Layout extends Component
{

    public bool $jsStyle;
    public bool $manifest;
    public bool $ogTags;
    public string $layout_title;
    public bool $hasViteSupport;
    public bool $hasMixSupport;
    public bool $hasLivewireSupport;

    public function __construct(string $title='',bool $manifest=false,bool $via_js=false,bool $og_tag=false,bool $vite=true,bool $mix=false,bool $livewire=true)
    {
        $this->manifest = $manifest;
        $this->jsStyle = $via_js;
        $this->ogTags = $og_tag;
        $this->layout_title = $title;
        $this->hasViteSupport = $vite;
        $this->hasMixSupport = $mix;
        $this->hasLivewireSupport = $livewire;
    }


    public function render()
    {
        return view('layout::layouts.app');
    }
}
