<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{


    public function createNewUser(){
        User::create([
            'name' => "test name1",
            'email' => "tes1t@email",
            'password' => '12234'
        ]);
    }

    public function handleClick(){
        dump("Clicked!");
    }

    public function render()
    {
        $title = "sample title";

        $users = User::all();

        return view('livewire.clicker',[
            'title' => $title,
            'users' => $users
        ]);
    }
}
