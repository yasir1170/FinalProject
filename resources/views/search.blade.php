@section('content')
<h1 style="background-color: #3498db; color: #fff; padding: 10px; text-align: center;">Search Results for "{{ $query }}"</h1>

@if(count($data) > 0)
<div class="row">
    @foreach($data as $part)
    <div class="col-xs-12 col-sm-6 col-md-4" style="margin-top:10px;">
        
    </div>
    @endforeach
</div>
@else
<p>No results found.</p>
@endif
@endsection
@extends('parts')