<?php

namespace App\Http\Livewire\Cars;

use App\Models\Contact;
use Livewire\Component;

class NewCar extends Component
{
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

    public function validateName()
    {
        $this->validate(['name' => 'required|min:6',]);
    }

    public function validateEmail()
    {
        $this->validate(['email' => 'required|email',]);
    }

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);
    }
    public function render()
    {
        return view('livewire.cars.new-car')->slot('main');
    }
}
