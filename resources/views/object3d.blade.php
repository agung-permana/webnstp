@extends('template.master')

@section('content')

{{-- <style>
      /* Transform the page into a 2-column grid */
#holder {
    display: grid;
    grid-template-columns: 1fr 1fr;
    height: 100%;
}

/* The left grid contains the text and occupies 50% of the available space */
#text {
    align-self: left;
    justify-self: justify;
    text-align: justify;
    margin: 0px 25px;
}

/* The right grid contains the model and occupies 50% of the available space */
model-viewer {
    width: 100%;
    height: 100%;
    outline: none;
}
      </style> --}}

<div class="container">
    <div id="text">
        <p>
        <h5>Spesifikasi</h5>
        <p>{{ $objek->spesifikasi }}</p>
        <h5>Deskripsi</h5>
        <p>{{ $objek->deskripsi }}</p>
        </p>
    </div>

    <div id="model">
        <model-viewer src="{{ asset('file/object/'.$objek->object_file) }}" alt="A 3D model of a robot" auto-rotate="" camera-controls="" background-color="#455A64"></model-viewer>
    </div>
    
</div>

@endsection