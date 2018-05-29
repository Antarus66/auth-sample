@foreach ($articles as $article)
    <a href="{{ route('articles.show', ['id' => $article->id]) }}">{{ $article->title }}</a>
@endforeach