    @extends('layout')

    @section('content')

        @foreach($reviews as $review)

            <h1 class="album_name">
                <a href="/reviews/{{$review->id}}">
                    {{$review->album_name}}
                </a>
            </h1>
        @endforeach

    @endsection
