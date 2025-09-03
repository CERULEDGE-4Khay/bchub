<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
   public function index()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('dashboard.admin.berita.index', compact('beritas'));
    }
    public function publicIndex(Berita $berita)
    {
        $beritas = Berita::where('status', 'published')
            ->orderBy('published_at', 'desc')
            ->get();

        return view('berita', compact('beritas'));
    }

    public function publicShow(Berita $berita)
    {
    // Lindungi supaya draft tidak bisa diakses publik
    if ($berita->status !== 'published') {
        abort(404);
    }

    return view('berita-show', compact('berita')); // pakai layout guest
    }

    public function create()
    {
        return view('dashboard.admin.berita.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_at' => 'required|date',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'status'       => 'required|in:draft,published',
        ]);

        DB::transaction(function () use ($validated, $request) {
            if ($request->hasFile('image')) {
                $validated['image'] = $request->file('image')->store('beritas', 'public');
            }
            Berita::create($validated);
        });

        return redirect()->route('beritas.index')->with('success', 'Berita berhasil dibuat.');
    }

    public function show(Berita $berita)
    {
        return view('dashboard.admin.berita.show', compact('berita'));
    }

    public function edit(Berita $berita)
    {
        return view('dashboard.admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_at' => 'required|date',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'status'       => 'required|in:draft,published',
        ]);

        DB::transaction(function () use ($validated, $request, $berita) {
            if ($request->hasFile('image')) {
                if ($berita->image && Storage::disk('public')->exists($berita->image)) {
                    Storage::disk('public')->delete($berita->image);
                }
                $validated['image'] = $request->file('image')->store('beritas', 'public');
            }

            $berita->update($validated);
        });

        return redirect()->route('beritas.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(Berita $berita)
    {
        DB::transaction(function () use ($berita) {
            if ($berita->image && Storage::disk('public')->exists($berita->image)) {
                Storage::disk('public')->delete($berita->image);
            }
            $berita->delete();
        });

        return redirect()->route('beritas.index')->with('success', 'Berita berhasil dihapus.');
    }
}
