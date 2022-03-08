<?php

namespace App\Http\Livewire;

use Livewire\WhitPagination;
use App\Models\Resource;
use Livewire\Component;

class ResourceList extends Component
{
    // use WithPagination;
    public function render()
    {
        $resources = Resource::orderBy('id', 'desc')->paginate(5);
        return view('livewire.resource-list', compact('resources'));
    }
}
