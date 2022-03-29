<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    public $statusUpdate = false;

    protected $listeners = [
        'contactStore' => 'handleStore',
        'contactUpdated' => 'handleUpdate'
    ];

    public function render()
    {
        return view('livewire.contact-index', [
            'contacts' => Contact::latest()->get()
        ]);
    }

    public function getContact($id)
    {
        $this->statusUpdate = true;
        $contact = Contact::find($id);
        $this->emit('getContact', $contact);
    }

    public function destroy($id)
    {
        if($id)
        {
            $data = Contact::find($id);
            $data->delete();
            session()->flash('message', 'Contact was deleted!');
        }
    }

    public function handleStore($contact)
    {
        session()->flash('message', 'Contact ' . $contact['name'] . ' was stored!');
    }

    public function handleUpdate($contact)
    {
        session()->flash('message', 'Contact ' . $contact['name'] . ' was updated!');
    }
}
