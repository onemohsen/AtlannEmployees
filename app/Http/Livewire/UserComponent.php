<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserComponent extends Component
{
    public $user;
    public $showModal = false;
    public $isEdit = false;
    public $userRoles = [
        [
            'id' => '1',
            'name' => 'مدیر',
        ],
        [
            'id' => '0',
            'name' => 'کارمند',
        ]

    ];

    public function mount()
    {
        $this->makeBlankUser();
    }

    public function rules()
    {
        if (!$this->isEdit) {
            return [
                'user.name' => 'required',
                'user.email' => ['required', 'email', 'unique:users,email'],
                'user.is_admin' => ['boolean', 'required'],
                'user.password' => ['required', 'confirmed'],
                'user.password_confirmation' => ['required'],
            ];
        } else {
            return [
                'user.name' => 'required',
                'user.email' => ['required', 'email', 'unique:users,email,' . $this->user->id],
                'user.is_admin' => ['boolean', 'required']
            ];
        }

    }

    public function makeBlankUser()
    {
        $this->user = User::make();
    }

    public function create()
    {
        $this->makeBlankUser();
        $this->isEdit = false;
        $this->showModal = true;
    }

    public function edit(User $user)
    {
        $this->user = $user;
        $this->showModal = true;
        $this->isEdit = true;
    }

    public function delete(User $user)
    {
        $this->user = $user;
        $this->user->delete();
    }

    public function store()
    {
        $this->validate();
        if (!$this->isEdit) {
            $this->user->password = bcrypt($this->user->password);
            unset($this->user['password_confirmation']);
        }
        $this->user->save();
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.user-component', [
            'users' => User::all()
        ])->layout('layouts.admin');
    }
}
