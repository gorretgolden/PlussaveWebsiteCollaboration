@extends('layout')

@section('content')
<section >

     <!-- Hero Section -->
 <livewire:hero-section type="savings" />
</section>

<div class="py-6">

    @livewire('account-types')
</div>






@endsection
