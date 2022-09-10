<?php

namespace Mintreu\Layout\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class ManifestCommand extends Command
{
    public $signature = 'layout:manifest';

    public $description = 'Default Manifest Generate For Future Use';

    /**
     * @return int
     */
    public function handle(): int
    {
        $this->copyStubToApp('manifest',public_path('manifest.json'),[
            'name' => $name= config('app.name'),
            'short-name' => Str::slug($name),
        ]);


        $this->warn('Mintreu::Layout -  Hurrah! Manifest Generate Successfully');
        $this->comment('Mintreu::Layout - PWA Service Created Successfully');
        $this->comment('Mintreu::Layout - Modify public/manifest.json as per your requirement');

        return self::SUCCESS;
    }



}
