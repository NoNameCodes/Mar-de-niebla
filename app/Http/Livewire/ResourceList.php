<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Resource;

class ResourceList extends Component
{
    public function render()
    {
        $resources = Resource::orderBy('id', 'desc')->paginate(5);
        return view('livewire.resource-list', ['resources' => $resources]);
    }
}
