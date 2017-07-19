@extends('layouts.master')

@section('content')
<div class="container">
    <div id="search-header" >
        <div class="row">
            <h3>FIND YOUR CAREER</h3>
        </div>
        <div class="row">
            <form method="GET" action="/careers-search">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="job" id="job" placeholder="Job" value="{!! old('job') !!}">
                </div>
                <div class="form-group col-md-4">
                    <select class="form-control" id="region" name="region">
                        <option value="0" >All Regions</option>
                        @foreach($regions as $region)
                        <option value="{{$region->id}}" @if($region_id==$region->id) selected="selected" @endif>{{$region->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="submit" class="btn btn-primary col-md-12" value="Search" />
                </div>
            </form>
        </div>
        <div class="row" id="padbot">
            <h4>Can't find any vacancy in desired region and position? Leave your resume <a id="bank" href="/careers-bankform"> here</a>.  </h4>
        </div>
    </div>
    <div id="search-results" class="full-height" style="width: 100%; height: 1024px; background-color: white;">
        @forelse($vacancies as $vacancy)
        <div class="panel panel-default"> 
            <div class="panel-heading">
                <h1> {{$vacancy->position}} </h1>
            </div>
            <div class="panel-body">
                <div id="viewjob" class="row">
                    <div class="col-md-10">
                        <h3>Location: {{$vacancy->regions->name}}</h3>
                        <h3>{{$vacancy->description}}</h3>
                    </div>
                    <div class="col-md-2" style="padding-top: 15px;">
                        <a href="/careers-proform/{{$vacancy->id}}" class="btn btn-primary btn-lg col-xs-offset-1" role="button">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <h1> No Vacancies Found </h1>
        @endforelse
    </div>
    <div style="text-align: center;">
        <div class="pagination" style="margin: auto;"> {{ $vacancies->links() }} </div>
    </div>
</div>
@endsection