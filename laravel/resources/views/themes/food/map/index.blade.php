{{--
    @include('geo::maps.directorybs4.index')
--}}
@php
    $ns='geo::maps.farmshops';
    $ns='geo::maps.directorybs4';
@endphp
@include($ns.'.index',['ns'=>$ns])
