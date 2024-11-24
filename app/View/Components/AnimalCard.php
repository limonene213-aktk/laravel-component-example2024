<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AnimalCard extends Component
{
    public $name; // ここで $name を定義
    public $description; // ここで $description を定義

    // 引数をデフォルト値付きで受け取るように修正
    public function __construct(string $name = '', string $description = '')
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function render()
    {
        return view('components.animal-card');
    }
}