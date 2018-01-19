<head>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{URL::to('css/main.css')}}">
</head>

<body>
    <div class="container">
        <div class="alert alert-danger center-block offset" {{!Session::has('error') ? 'hidden' : ''}}>{{Session::get('error')}}</div>
        <div class="alert alert-success center-block offset"{{!Session::has('success') ? 'hidden' : ''}}>{{Session::get('success')}}</div>
        <div class="row">
            <div class="col-lg-2">
                <div class="input-group">
                    <form action="{{route('trip.results')}}" method="get">
                        <label for="longitude">Longitude</label>
                        <input type="number" value="19.43295600" class="form-control"
                               name="longitude" step="0.000001" placeholder="0.000001" required>

                        <label for="latitude">Latitude</label>
                        <input type="number" value="51.742503" class="form-control"
                               name="latitude" step="0.000001" placeholder="0.000001"  required>

                        <br>
                        <button type="submit" class="btn btn-success">Calculate</button>
                    </form>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div>
</body>
