<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SiteLayout extends Component
{
    public function __construct(
        public string $title = 'PassportPlease'
    ) {}

    public function render(): View|Closure|string
    {
        return view('components.site-layout');
    }
}