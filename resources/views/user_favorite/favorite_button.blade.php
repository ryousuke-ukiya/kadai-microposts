
    @if (Auth::user()->is_favorites($micropost->id))
    @csrf
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-block btn-sm "]) !!}
        {!! Form::close() !!}
    @else
    @csrf
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-light btn-block btn-sm "]) !!}
        {!! Form::close() !!}
    @endif
