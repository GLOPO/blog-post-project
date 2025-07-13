<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BlogCard extends Component
{
    public $title;
    public $body;

    public function --construct($title, $body)
    {
        $this->title = $title;
        $this->body = $body;
    }

    public function render ()
    {
        return view('components.blog-card')
    }
}