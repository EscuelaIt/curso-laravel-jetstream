<?php

namespace App\Http\Livewire;

use App\Models\File;
use Livewire\Component;

class RegularTable extends Component
{
    public $files;

    public $counter;

    protected $listeners = ['fileAdded' => 'refreshFileList'];

    public function mount()
    {
        $this->files = File::all();
        $this->counter = $this->files->count();
    }

    public function refreshFileList()
    {
        \Log::debug(11111);
        $this->files = File::all();
        $this->counter = $this->files->count();
    }

    public function render()
    {
        return view('livewire.regular-table')/*->with([
            'files' => File::all(),
        ])*/;
    }
}
