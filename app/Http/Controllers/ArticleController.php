<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('dashboard.admin.article.index', compact('articles'));
    }
    public function publicIndex(Article $article)
    {
        $articles = Article::where('status', 'published')
            ->orderBy('published_at', 'desc')
            ->get();

        return view('artikel', compact('articles'));
    }

    public function publicShow(Article $article)
    {
    // Lindungi supaya draft tidak bisa diakses publik
    if ($article->status !== 'published') {
        abort(404);
    }

    return view('artikel-show', compact('article')); // pakai layout guest
    }

    public function create()
    {
        return view('dashboard.admin.article.create');
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
                $validated['image'] = $request->file('image')->store('articles', 'public');
            }
            Article::create($validated);
        });

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dibuat.');
    }

    public function show(Article $article)
    {
        return view('dashboard.admin.article.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('dashboard.admin.article.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_at' => 'required|date',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'status'       => 'required|in:draft,published',
        ]);

        DB::transaction(function () use ($validated, $request, $article) {
            if ($request->hasFile('image')) {
                if ($article->image && Storage::disk('public')->exists($article->image)) {
                    Storage::disk('public')->delete($article->image);
                }
                $validated['image'] = $request->file('image')->store('articles', 'public');
            }

            $article->update($validated);
        });

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Article $article)
    {
        DB::transaction(function () use ($article) {
            if ($article->image && Storage::disk('public')->exists($article->image)) {
                Storage::disk('public')->delete($article->image);
            }
            $article->delete();
        });

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus.');
    }
}

