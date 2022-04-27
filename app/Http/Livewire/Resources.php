<?php

namespace App\Http\Livewire;

use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Resources extends Component
{
    use WithFileUploads, WithPagination;

    public File $file;

    public $media;

    public $search;

    public $random;

    public $creating = false;

    public $text = 'Creating';

    public $action = 'create';

    protected $queryString = [
        'search' => ['except' => ''],
    ];

    protected $rules = [
        'file.title' => 'required|min:5|max:255',
        'file.description' => 'required|min:5|max:1000',
        'media' => 'required|image',
    ];

    public function mount()
    {
        $this->file = new File;
        $this->random = Str::random(5);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function resolveFile($id)
    {
        $this->action = 'edit';

        $this->file = File::findOrFail($id);

        $this->creating = true;
    }

    public function edit()
    {
        $this->validate();

        $this->file->path = $this->media->store('');

        $this->file->save();

        $this->file = new File;

        $this->reset(['media']);

        $this->random = Str::random(5);

        $this->creating = false;
    }

    public function remove($id)
    {
        $file = File::findOrFail($id);

        $file->delete();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function create()
    {
        $this->validate();

        $this->file->path = $this->media->store('');

        $this->file->save();

        $this->file = new File;

        $this->reset(['media']);

        $this->random = Str::random(5);

        $this->creating = false;

        $this->emit('fileAdded');
    }

    public function render()
    {
        return view('livewire.resources')->with([
            'files' => File::where('title', 'like', '%' . $this->search . '%')
                        ->orWhere('description', 'like', '%' . $this->search . '%')
                        ->paginate(3),
        ]);
    }
}
