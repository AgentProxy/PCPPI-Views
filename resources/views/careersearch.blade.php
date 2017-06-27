@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <h3>FIND YOUR CAREER</h3>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <input type="text" class="form-control" id="job" placeholder="Job">
        </div>
        <div class="form-group col-md-4">
            <input type="text" class="form-control" id="loc" placeholder="Location">
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-primary col-md-12">Search</button>
        </div>
    </div>
    <div class="row" id="padbot">
        <h4>Can't find any vacant position in desired location and position? Leave your resume here.</h4>
        <button type="button" class="btn btn-primary">Upload</button>
    </div>
</div>
@endsection