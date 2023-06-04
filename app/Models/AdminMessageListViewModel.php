<?php

namespace App\Models;

class AdminMessageListViewModel
{
    public function __construct(
        public Message $message,
        public bool $isRead,
    ) {}
}
