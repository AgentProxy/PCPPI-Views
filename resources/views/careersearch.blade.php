@extends('layouts.master')

@section('content')
<div class="container">
    <div id="search-header" >
        <div class="row">
            <h3>FIND YOUR CAREER</h3>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="job" placeholder="Job">
            </div>
            <div class="form-group col-md-4">
                <select class="form-control" id="loc">
                    <option>Region 1</option>
                    <option>Region 2</option>
                    <option>Region 3</option>
                    <option>Region 4</option>
                    <option>Region 5</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-primary col-md-12">Search</button>
            </div>
        </div>
        <div class="row" id="padbot">
            <h4>Can't find any vacant position in desired location and position? Leave your resume <a href="#"> here </a>.  </h4>
            <!-- <button type="button" class="btn btn-primary">Upload</button> -->
        </div>
    </div>
    <div id="search-results" class="full-height" style="width: 100%; height: 1024px;">
        <div class="panel panel-default"> 
            <div class="panel-body">
            <h1> Job </h1>
            </div>
        </div>
    </div>
</div>
@endsection