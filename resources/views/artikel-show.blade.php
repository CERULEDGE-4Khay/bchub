@extends('layouts.guest')

@section('content')
<section class="mt-24 pb-16">
  <div class="container mx-auto px-6 max-w-4xl">
    <div class="mb-8">
      <a href="{{ route('articles.public.index') }}" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-gray-700">
        ← Kembali ke Artikel
      </a>
    </div>

    <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
      {{ $article->title }}
    </h1>

    <div class="mt-3 flex flex-wrap items-center gap-4 text-sm text-gray-500">
      <span>✍️ {{ $article->author ?? 'Admin' }}</span>
      <span>•</span>
      <span>{{ optional($article->published_at)->format('d M Y') ?? '-' }}</span>
      <span class="px-2 py-1 text-xs rounded-full
                   {{ $article->status === 'published' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
        {{ ucfirst($article->status) }}
      </span>
    </div>

    @if ($article->image)
      <div class="mt-8">
        <img src="{{ asset('storage/'.$article->image) }}" alt="{{ $article->title }}"
             class="w-full rounded-2xl shadow-lg">
      </div>
    @endif

    <article class="prose prose-lg max-w-none mt-8 prose-headings:scroll-mt-24">
      @if(!empty($article->description))
        <p class="text-gray-700">{{ $article->description }}</p>
      @endif

      @isset($article->content)
        {!! nl2br(e($article->content)) !!}
      @endisset
    </article>

    <div class="mt-10 border-t pt-6 flex items-center justify-between text-sm text-gray-500">
      <span>Bagikan:
        <a class="ml-2 hover:text-indigo-600" target="_blank"
           href="https://twitter.com/intent/tweet?text={{ urlencode($article->title) }}&url={{ urlencode(request()->fullUrl()) }}">Twitter</a>
        <span class="mx-1">•</span>
        <a class="hover:text-indigo-600" target="_blank"
           href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}">Facebook</a>
      </span>
      <a href="{{ route('articles.public.index') }}" class="hover:text-indigo-600">← Kembali</a>
    </div>
  </div>
</section>
@endsection
