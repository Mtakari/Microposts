
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- アンフォローボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id],"method" => "delete"]) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フォローボタンのフォーム --}}
        {!! Form::open(['route' => ['favorite.favorites', $micropost->id], 'method' => 'post' ])  !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-sm"]) !!}
        {!! Form::close() !!}
@endif
