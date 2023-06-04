<?php

namespace App\Models;

class ChatViewModel
{
    public function __construct(
        public array $meChat,
        public array $youChat,
    ) {}
}
