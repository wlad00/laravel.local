@extends('layouts.app')

@section('content')
<div class="container" ng-app="myApp" ng-controller="testPen">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" ng-click="clickFn()">Dashboard</div>
=> @{{ A }}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div class="ui container" >


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
