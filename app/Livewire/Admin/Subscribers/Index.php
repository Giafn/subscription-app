<?php

namespace App\Livewire\Admin\Subscribers;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class Index extends Component
{
    public $name, $email, $password;
    public $subscribers;

    public function mount()
    {
        $this->loadSubscribers();
    }

    public function loadSubscribers()
    {
        $this->subscribers = User::where('role', 'subscriber')->get();
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'id' => Str::uuid(),
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'subscriber',
        ]);

        session()->flash('success', 'Subscriber berhasil ditambahkan.');

        $this->reset(['name', 'email', 'password']);
        $this->loadSubscribers();
    }

    public function render()
    {
        return view('livewire.admin.subscribers.index')
            ->layout('layouts.app');
    }
}
