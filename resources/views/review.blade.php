    @extends('single_review_layout')

    @section('content')
        <section class="review">
            <h1> {{$review->album_name}} </h1>
            <div>
                <a href="/users/{{$review->user->name}}">{{$review->user->name}}</a>
            </div>
            <div>
                {!! $review->review !!}
            </div>
        </section>


        <section class="back">
            <a href="/reviews">Back</a>
        </section>
    @endsection
