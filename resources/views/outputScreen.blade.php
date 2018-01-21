<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{URL::to('css/main.css')}}">
</head>

<body>
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
</body>
