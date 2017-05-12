@extends('layout.home')

@section('content')
    <div class="main__list">
        @if($posts)
            @foreach($posts as $row)
                <div class="post__item">
                    <span class="post__item__rank">1</span>
                    <a class="post__item__thumbnail" href="{{ route('detail-post', $row->slug) }}">
                        <img src="http://www.elcotidiano.es/wp-content/uploads/2014/04/tierracuadrada.jpg" width="70" height="70" alt="">
                    </a>
                    <div class="post__item__entry">
                        <h3 class="post__item__entry__title"><a href="{{ $row->url }}" target="_blank">{{ $row->title }}</a></h3>
                        <p class="post__item__entry__tagline">
                            {{ $row->created_at }}
                            <a href="" class="author"> {{ $row->name }} </a>
                            a
                            <a href="" class="tag"> {{ $row->tag }}</a>
                        </p>
                        <p class="post__item__entry__comments">
                            1783 comentarios
                        </p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <div class="main__pager">
        <span class="main__pager__label">ver más: </span>
        <span class="main__pager__button main_pager__button--prev">
					<a href="">‹ anterior</a>
				</span>
        <span class="main__pager__button main_pager__button--next">
					<a href="">siguiente ›</a>
				</span>
    </div>
@endsection