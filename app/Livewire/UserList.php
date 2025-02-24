<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public function render(): View
    {
        return view('livewire.user-list', [
            'users' => User::paginate(10),
        ]);
    }
}
