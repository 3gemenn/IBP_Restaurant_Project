<?php

namespace App\Models;


class HomeViewModel
{
    public function __construct(
        public array $menu,
        public array $announcemet,
        public array $slider,
        public array $menuList
    ) {
    }
}
