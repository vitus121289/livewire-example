<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{

    public $first_name;
    public $last_name;
    public $email;
    public $message;

    protected $rules = [
        'first_name' => 'required|min:6|max:255',
        'last_name' => 'required|min:6|max:255',
        'email' => 'required|email',
        'message' => 'min:5'
    ];

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }
    
    public function render()
    {
        return view('livewire.contact-form');
    }
}
