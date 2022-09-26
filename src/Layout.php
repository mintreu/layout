<?php

namespace Mintreu\Layout;

use Illuminate\View\Component;

class Layout extends Component
{

    public bool $jsStyle;
    public bool $manifest;
    public bool $ogTagSupport;
    public string $layout_title;
    public bool $hasViteSupport;
    public bool $hasMixSupport;
    public bool $hasLivewireSupport;
    public bool $hasRawSupport;
    public bool $hasPreloaderSupport;
    public string $preloaderPath='';
    public $preloaderColor;

    /**
     * @param string $title
     * @param bool $manifest
     * @param bool $viaJs
     * @param bool $ogTag
     * @param bool $vite
     * @param bool $mix
     * @param bool $livewire
     * @param bool $raw
     * @param bool $preloader
     * @param string $preloader_url
     */
    public function __construct(
        string $title='',
        bool $manifest=false,
        bool $viaJs=false,
        bool $ogTag=false,
        bool $vite=true,
        bool $mix=false,
        bool $livewire=true,
        bool $raw=false,
        bool $preloader = false,
        string $preloader_url='',
        string $preloaderBgColor="#f3f3f3",
        string $preloaderPrimaryColor="#f3f3f3",
        string $preloaderSecondaryColor="#444444"
    )
    {
        $this->manifest = $manifest;
        $this->jsStyle = $viaJs;
        $this->ogTagSupport = $ogTag;
        $this->layout_title = $title;
        $this->hasViteSupport = $vite;
        $this->hasMixSupport = $mix;
        $this->hasLivewireSupport = $livewire;
        $this->hasRawSupport = $raw;
        $this->hasPreloaderSupport = $preloader;
        $this->preloaderPath = $preloader_url ? $preloader_url : $this->preloaderPath;
        $this->preloaderColor['bg'] = $preloaderBgColor;
        $this->preloaderColor['primary'] = $preloaderPrimaryColor;
        $this->preloaderColor['secondary'] = $preloaderSecondaryColor;

    }


    public function render()
    {
        return view('layout::layouts.app');
    }
}
