@extends('layouts.master')

@section('title', 'TOP')

@section('content')
    <div class="row main-title">
        <div class="col-md-8 col-md-offset-2">
            <h1>Baleen</h1>
            <p>Very Simple Docker Launcher Tool!</p>
        </div>
        <div class="col-md-4" ></div>
    </div>

    <div class="main-form">
        <form action="/" method="post">
            <div class="row">
                {{ csrf_field() }}
                <div class="col-md-4 col-md-offset-4">
                    <div class="form-group">
                        <label for="address" class="col-sm-3 control-label">ServerAddress</label>
                        <input type="text" name="address" id="server-address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pass" class="col-sm-3 control-label">Password</label>
                        <input type="text" name="pass" id="server-pass" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-default center-block">Access</button>
            </div>
        </form>
    </div>
@endsection