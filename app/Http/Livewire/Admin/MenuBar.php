<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class MenuBar extends Component
{
    public $application, $content;

    protected $listeners = ['render'];

    public function render()
    {
        return view('livewire.admin.menu-bar');
    }
}
