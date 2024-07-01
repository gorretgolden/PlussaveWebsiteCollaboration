@extends('layout')

@section('content')
<section >

     <!-- Hero Section -->
 <livewire:hero-section type="blog" />



</section>


    <div class="container mx-auto px-4 py-4  mt-10  mb-10">
        @livewire('blog-list')
    </div>




@endsection
