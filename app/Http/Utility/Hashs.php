<?php

namespace App\Http\Utility;

use Illuminate\Support\Facades\Hash;

class Hashs
{
    public function Decode($password, $hashedPassword)
    {
        return Hash::check($password, $hashedPassword);
    }

    public function Encode($password)
    {
        return bcrypt($password);

    }
}
