<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Logo extends Component
{
<<<<<<< HEAD
    /**
     * Create a new component instance.
     */
    public function __construct()
    {

=======
    public $src;
    public $alt;
    /**
     * Create a new component instance.
     */
    public function __construct($src, $alt)
    {
        $this->src = $src;
        $this->alt = $alt;
>>>>>>> e721b3a1765057709b11256179692000038f04c9
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
<<<<<<< HEAD
        return view('components.logo');
=======
        return view('components.logo', ['src' => $this->src, 'alt' => $this->alt]);
>>>>>>> e721b3a1765057709b11256179692000038f04c9
    }
}
