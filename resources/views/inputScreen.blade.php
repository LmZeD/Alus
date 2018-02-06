@extends('layouts.master')
@section('title')
    Input screen
@endsection
@section('content')
    <div class="container">
        <div class="alert alert-danger center-block offset" {{!Session::has('error') ? 'hidden' : ''}}>{{Session::get('error')}}</div>
        <div class="alert alert-success center-block offset"{{!Session::has('success') ? 'hidden' : ''}}>{{Session::get('success')}}</div>
        <div class="row">
            <div class="col-lg-2">
                <div class="input-group">
                    <form action="{{route('trip.results')}}" method="get">
                        <label for="longitude">Longitude</label>
                        <input type="number" value="19.43295600"
                               name="longitude" step="0.000000000001" placeholder="0.000001" id="longitude" required>

                        <label for="latitude">Latitude</label>
                        <input type="number" value="51.742503"
                               name="latitude" step="0.000000000001" placeholder="0.000001" id="latitude" required>

                        <br>
                        <button type="submit" class="btn btn-success" id="calculate">Calculate</button>
                    </form>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div>
@endsection
