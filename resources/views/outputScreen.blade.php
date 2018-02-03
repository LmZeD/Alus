@extends('layouts.master')
@section('title')
    Results
@endsection
@section('content')
<div class="container">
    <div class="col-lg-12">
        <h1 class="heading">Results</h1>
        <h4>Starting longitude: <strong class="big-red">{{$startLongitude}}</strong></h4>
        <h4>Starting latitude: <strong class="big-red">{{$startLatitude}}</strong></h4>
        <h5>Calculated in {{$runTime}} seconds</h5>
        <h5>Distance traveled: {{$results['maxTripDistance']-$results['distanceLeft']}} km</h5>
        <br>
        @php($i=1)
        @foreach($results as $result)
            @if(is_array($result) && array_key_exists('longitude',$result) && $result['longitude']!=null){{--for other data in result array--}}
                <p>{{$i++}}. @if($i-1==1) [HOME] @endif -> [{{$result['brewery']['id']}}] {{$result['brewery']['name']}} (lat/long)
                {{$result['latitude']}}, {{$result['longitude']}} distance {{$result['distance']}} km</p>
            @endif
        @endforeach
        <p>Left: {{$results['distanceLeft']}} km (of {{$results['maxTripDistance']}} km)</p>
        <br>
        <h5>Total beer found: <strong>{{$results['beerCount']}}</strong></h5>
        <h5>Unique beer found: <strong>{{count($results['uniqueBeer'])}}</strong></h5>
        @php($i=1)
        @foreach($results['uniqueBeer'] as $beer)
            <p>{{$i++}}. {{$beer}}</p>
        @endforeach
    </div>
</div>
@endsection