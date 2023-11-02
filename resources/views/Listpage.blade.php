@extends('layout')
@section('content')
@include('partials._hero')
@include('partials._search')



<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">


  @if (count($listings) == 0) 
  <h2> No listings :c </h2>
    @else

       @foreach ($listings as $listing)
       <x-listing_card :listing="$listing" />
   
       @endforeach
   @endif

</div>
    
<footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-15 mt-24 opacity-90 md:justify-center">
<p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>

<a href="create.html" class="absolute top-1/5 right-10 bg-black text-white py-1 px-5">New post</a>

</footer>




@endsection

