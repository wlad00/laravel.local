@extends('layouts.app')

@section('content')
<div class="container" ng-app="myApp" ng-controller="testPen">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" ng-click="clickFn()">Dashboard</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div class="ui container" >

                    <div class="ui form">
                        <div class="grouped fields">
                            <label>How often do you use checkboxes?</label>
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" name="example2" checked="checked">
                                    <label>Once a week</label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" name="example2">
                                    <label>2-3 times a week</label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" name="example2">
                                    <label>Once a day</label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" name="example2">
                                    <label>Twice a day</label>
                                </div>
                            </div>
                        </div>




                    <label class="radioContainer"> One
                        <input type="radio">
                        <span class="circle"></span>
                    </label>
                    <br>
                    <label class="radioContainer"> Two
                        <input type="checkbox">
                        <span class="circle"></span>
                    </label>


                    <div class="pt-checkbox">
                        <input type="checkbox">
                        <img class="no-checked" src="/img/SVG/radio_button.svg">
                        <img class="checked" src="/img/SVG/radio_button_checked.svg">
                    </div>
                    <div class="pt-checkbox">
                        <input type="checkbox">
                        <img class="no-checked" src="/img/SVG/checkbox.png">
                        <img class="checked" src="/img/SVG/checkbox_checked.png">
                    </div>

                </div>


                <p><a href="#" title="That&apos;s what this widget is">Tooltips</a> can be attached to any element. When you hover
                    the element with your mouse, the title attribute is displayed in a little box next to the element, just like a native tooltip.</p>
                <p>But as it's not a native tooltip, it can be styled. Any themes built with
                    <a href="http://jqueryui.com/themeroller/" title="ThemeRoller: jQuery UI&apos;s theme builder application">ThemeRoller</a>
                    will also style tooltips accordingly.</p>
                <p>Tooltips are also useful for form elements, to show some additional information in the context of each field.</p>
                <p><label for="age">Your age:</label><input id="age" title="We ask for your age only for statistical purposes."></p>
                <p>Hover the field to see the tooltip.</p>
            </div>
        </div>
    </div>
</div>
@endsection
