@extends('master')


@section('main')
<header class="masthead">

    <div class="container">
                            <div class="text-center">
                                <h1>{{$pages->title}}</h1>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                  
                               
{!! html_entity_decode($pages->description) !!}
</div>
    </div></div>

</header>
@endsection