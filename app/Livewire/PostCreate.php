<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Str;

class PostCreate extends Component
{
    public $saveSuccess = false;

    #[Validate('required|min:3')]
    public $title;

    #[Validate('required|min:3')]
    public $body;

    public $user_id;
    public $slug;

    public function mount()
    {
        $this->user_id = 1;
    }

    public function save()
    {
        $this->validate();

        Post::create([
            'user_id' => $this->user_id,
            'title' => $this->title,
            'body' => $this->body,
            'slug' => Str::slug($this->title)
        ]);

        $this->saveSuccess = true;

    }

    public function render()
    {
        return view('livewire.post-create');
    }
}
