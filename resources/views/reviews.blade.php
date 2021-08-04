    @extends('layout')

    @section('content')

        @foreach($reviews as $review)
            <div>
                <h1 class="album_name">
                    <a href="/reviews/{{$review->slug}}">
                        {{$review->album_name}}
                    </a>
                        <p>
                            <a href="/recordTypes/{{$review->recordType->name}}" id="recordType" >{{$review->recordType->name}}</a>
                        </p>
                </h1>

            </div>

        @endforeach

    @endsection
