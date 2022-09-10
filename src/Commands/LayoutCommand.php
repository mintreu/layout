<?php

namespace Mintreu\Layout\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Mintreu\Layout\Commands\Traits\hasFilesManipulator;

class LayoutCommand extends Command
{
    use hasFilesManipulator;
    
    public $signature = 'make:layout {name}';

    public $description = 'My command';

    public function handle(): int
    {

        $layoutName = (string) Str::of($this->argument('name') ?? $this->askRequired('Name (e.g. `awesome-layout`)', 'name'))
            ->trim('/')
            ->trim('\\')
            ->trim(' ')
            ->replace('/', '\\');


        $this->copyStubToApp('layout',resource_path('views/'.$layoutName.'.blade.php'),[
            'layout_title' => ucfirst($layoutName).'|'.config('app.name'),
            'layout_keyword' => implode(',',[$layoutName,config('app.name'),',layout']),
            'layout_description' => config('app.name').'meta description goes here',
        ]);



        $this->comment('All done');

        return self::SUCCESS;
    }
}
