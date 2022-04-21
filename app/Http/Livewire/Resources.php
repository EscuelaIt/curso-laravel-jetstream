<?php

namespace App\Http\Livewire;

use App\Models\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class Resources extends Component
{
    use WithFileUploads;

    public File $file;

    public $media;

    public $creating = false;

    protected $rules = [
        'file.title' => 'required|min:5|max:255',
        'file.description' => 'required|min:5|max:1000',
        'media' => 'required|image',
    ];

    public function mount()
    {
        $this->file = new File;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function create()
    {
        $this->validate();

        dd($this->media, $this->media->getClientOriginalName());

        $this->file->path = $this->media->store('');

        $this->file->save();

        $this->file = new File;

        $this->reset(['media']);

        $this->creating = false;
    }

    public function render()
    {
        return view('livewire.resources')->with([
            'files' => File::all(),
        ]);
    }
}
