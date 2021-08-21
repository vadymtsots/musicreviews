 <x-layout>
    @include ('_reviews-header')

     <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($reviews->count())

         <div class="lg:grid lg:grid-cols-2">
             @foreach($reviews as $review)
                <x-post-card :review="$review" />
             @endforeach
         </div>
         @else
             <p>No reviews yet</p>
         @endif
     </main>
 </x-layout>
