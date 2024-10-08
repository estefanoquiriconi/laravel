<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;

class Counter extends Component
{

    public $note = "";
    public $feedback = "";

    public function store()
    {
        Note::create([
            'content' => $this->note
        ]);
        $this->feedback = "Note created!";
    }

    public function update($id)
    {
        $noteToUpdate = Note::find($id);
        $noteToUpdate->content = $this->note;
        $noteToUpdate->save();
        $this->feedback = "Note updated";
    }

    public function destroy($id)
    {
        Note::destroy($id);
        $this->feedback = "Note deleted";
    }

    public function render()
    {
        $notes = Note::all();
        return view('livewire.counter', compact('notes'));
    }

}
