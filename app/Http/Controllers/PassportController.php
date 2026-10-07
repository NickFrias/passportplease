<?php

namespace App\Http\Controllers;

use App\Models\Passport;

class PassportController extends Controller
{
    public function show(Passport $passport)
    {
        abort_unless($passport->is_published, 404);

        return view('passports.show', compact('passport'));
    }
}
