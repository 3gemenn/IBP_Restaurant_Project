<?php

namespace App\Models;

class MessageListViewModel
{
    public function __construct(
        public int $userId,
        public string $name,
        public string $lastName
    ) {}
}
