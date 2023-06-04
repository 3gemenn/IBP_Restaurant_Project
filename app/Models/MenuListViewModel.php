<?php

namespace App\Models;

use Faker\Provider\tr_TR\DateTime;

class MenuListViewModel
{
    public function __construct(
        public int $menu_id,
        public string $menu_title,
        public string $menu_content,
        public array $comment
    ) {}
}
