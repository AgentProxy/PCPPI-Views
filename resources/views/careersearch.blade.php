@extends('layouts.master')

@section('content')
<div id="section" class="container">
    <div id="search-header" >
        <div class="row">
            <h3>FIND YOUR CAREER</h3>
        </div>
        <div class="row">
            <form method="GET" action="/careers-retrieve">
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" name="job" id="job" placeholder="Job" value="{!! old('job') !!}">
                </div>
                <div class="form-group col-md-3">
                    <select class="form-control" id="region" name="region">
                        <option value="0" >All Regions</option>
                        @foreach($regions as $region)
                        <option value="{{$region->id}}" @if($region_id==$region->id) selected="selected" @endif>{{$region->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <select class="form-control" name="function" id="function">
                        <option value="0">All Functions</option>
                        @foreach($functions as $function)
                        <option value="{{$function->id}}" @if($function_id==$function->id) selected="selected" @endif>{{$function->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="submit" class="btn btn-primary col-md-12" value="Search" />
                </div>
            </form>
        </div>
        <div class="row" id="padbot">
            <h4>Can't find any vacancy in desired region and position? Leave your resume <a id="bank" href="/careers-bankform"> here</a>.  </h4>
        </div>
    </div>
    <div id="search-results" class="full-height" style="width: 100%; background-color: white;">
        @forelse($vacancies as $vacancy)
        <div class="panel panel-default"> 
            <div class="panel-heading">
                <h1> {{$vacancy->position}} </h1>
            </div>
            <div class="panel-body">
                <div id="viewjob" class="row">
                    <div class="col-md-10">
                        <h3>Location: {{$vacancy->regions->name}}</h3>
                        <h3>Function: {{$vacancy->functions->name}}</h3> 
                        <h4>{{$vacancy->description}}</h4>
                    </div>
                    <div class="col-md-2" style="padding-top: 15px;">
                        <a href="careers-proform/{{$vacancy->id}}" class="btn btn-view btn-cherry btn-lg col-xs-offset-1" role="button">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <h1 style="text-align: center;"> No Vacancies Found </h1>
        @endforelse
    </div>
    <div style="text-align: center;">
        <div class="pagination" style="margin: auto;"> {{ $vacancies->links() }} </div>
    </div>
</div>
@endsection