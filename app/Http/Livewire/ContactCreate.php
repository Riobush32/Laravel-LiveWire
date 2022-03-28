<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactCreate extends Component
{
    

    public $name;
    public $phone;

    public function render()
    {
        return view('livewire.contact-create');
    } 
    
    protected $rules = [
            'name' => 'required|min:3',
            'phone' => 'required|max:15',
        ];

    public function store()
    {

        $this->validate();
        
        $contact = Contact::create([
            'name' => $this->name,
            'phone' => $this->phone
        ]);

        $this->resetInput();

        $this->emit('contactStore', $contact);
    }

    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }
}
