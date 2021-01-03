@extends('template.master')

@section('content')
    <div id="panorama">
        @php
            print_r($scene);
        @endphp
    </div>
    @include('modal/mymodal')
@endsection