<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Post as BlogPost;

class Post extends Component
{
    public $post;

    public function mount($slug)
    {
        $this->post = BlogPost::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.post');
    }
}
