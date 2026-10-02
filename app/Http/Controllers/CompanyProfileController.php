<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CompanyProfileController extends Controller
{
    public function home(): View
    {
        return view('company.home');
    }

    public function about(): View
    {
        return view('company.about');
    }

    public function services(): View
    {
        return view('company.services');
    }

    public function contact(): View
    {
        return view('company.contact');
    }

    public function sendContact(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'pesan' => 'required|string|max:1000',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'pesan.required' => 'Pesan wajib diisi.',
        ]);

        return redirect()
            ->route('contact')
            ->with('success', 'Pesan berhasil dikirim. Terima kasih sudah menghubungi PT Digital Nusantara.');
    }
}
