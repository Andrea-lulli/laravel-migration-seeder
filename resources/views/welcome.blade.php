@extends('layouts.app')




@section('main-content')

@foreach ($trains as $elem )
<div >
    <ul class="box">
        <li>{{$elem->vettore}}</li>
        <li>{{$elem->treno}}</li>
        <li>{{$elem->partenza}}</li>
        <li>{{$elem->destinazione}}</li>
        <li>{{$elem->orario}}</li>
        <li>{{$elem->binario}}</li>
        <li>{{$elem->informazioni}}</li>
        <li>{{$elem->ritardo}}</li>
    </ul>
</div>

    @endforeach

@endsection
