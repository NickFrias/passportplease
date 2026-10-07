<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;

use App\Models\Passport;

class PassportController extends Controller
{
    public function show(Passport $passport)
    {
        abort_unless($passport->is_published, 404);

        return view('passports.show', compact('passport'));
    }

    public function toggle(Passport $passport): RedirectResponse
    {
        $passport->update(['is_published' => ! $passport->is_published]);
        return redirect()->route('products.show', $passport->product);
    }
}
