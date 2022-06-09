@extends('template.main')

@section('content')

<div class="pt-5 text-center">
    <div class="pt-5 text-center">
        <iframe width="560" height="315" src="{{$meditation->link_youtube}}" title="YouTube video player" style = "pt-3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>








@endsection

