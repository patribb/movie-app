<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;
use Illuminate\Support\Str;

class TagIndex extends Component
{
    public $showTagModal = false;
    public $tagName;

    public function showCreateModal()
    {
        $this->showTagModal = true;
    }

    public function createTag()
    {
        Tag::create([
            'tag_name' => $this->tagName,
            'slug' => Str::slug($this->tagName)
        ]);
        $this->reset();
    }

    public function closeTagModal()
    {
        $this->showTagModal = false;
    }

    public function render()
    {
        return view('livewire.tag-index');
    }
}
