@extends('layout')

@section('content')

@include('partials._hero') 

@include('partials._search')
{{-- partials to load  search file and _hero --}}

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
{{-- @unless(count($listings == 0))  --}}

@foreach($listings as $listing)


<x-listing-card :listing="$listing"/>  
{{-- components used to access variable listing --}}

@endforeach
{{-- @endunless --}}
</div>
@endsection

