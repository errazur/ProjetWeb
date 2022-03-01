<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Classement extends Component
{
    public $clubuser;
    public $index = 1;

    public function getUserProperty()
    {
        return User::find($this->index);
    }

    public function render()
    {
        return view('livewire.classement');
    }
}
