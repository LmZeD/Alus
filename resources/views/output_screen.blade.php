<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</head>

<body>
<div class="container" style="padding-top: 20px">
    <div class="col-lg-12">
        <h1 style="color: #67b168;font-size: 32px">Results</h1>
        <h4 style="font-size: 20px">Starting longitude: <strong style="color: red;font-size: 25px">{{$start_longitude}}</strong></h4>
        <h4 style="font-size: 20px">Starting latitude: <strong style="color: red;font-size: 25px">{{$start_latitude}}</strong></h4>
        <h5>Calculated in {{$run_time}} seconds</h5>
        <h5>Distance traveled: {{$results['max_trip_distance']-$results['distance_left']}} km</h5>
        <br>
        @php($i=1)
        @foreach($results as $result)
            @if(is_array($result) && array_key_exists('longitude',$result) && $result['longitude']!=null){{--for other data in result array--}}
                <p>{{$i++}}. @if($i-1==1) [HOME] @endif -> [{{$result['brewery']['id']}}] {{$result['brewery']['name']}} (lat/long)
                {{$result['latitude']}}, {{$result['longitude']}} distance {{$result['distance']}} km</p>
            @endif
        @endforeach
        <p>Left: {{$results['distance_left']}} km (of {{$results['max_trip_distance']}} km)</p>
        <br>
        <h5>Total unique beer found: <strong>{{$results['beer_count']}}</strong></h5>
        @php($i=1)
        @foreach($results['unique_beer'] as $beer)
            <p>{{$i++}}. {{$beer}}</p>
        @endforeach
    </div>
</div>
</body>
