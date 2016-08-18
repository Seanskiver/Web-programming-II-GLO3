@extends('layouts.app')

     


     
@section('middle')
    <div class="row">
        <span id="xmlHeading" style="font-size:2em">XML feed<sup><small>(With Angular.js)</small></sup></span>
        <p>This section uses and Angular Js app to make get requests to a php script that serves up xml documents</p>
    </div>
    <hr>

    <div id="xmlOutput" ng-app="xmlApp" ng-controller="xmlController">
        <div class="card-panel grey lighten-5 z-depth-1" ng-repeat="post in posts">
            <b><% post.author %>: </b><span class="black-text"><% post.name %></span>
            <div class="row">
                <span><% post.description %></span>
            </div>
        </div>
    </div>
@endsection




@section('right')

<script type="text/javascript" charset="utf-8">
    window.onload = function () {
        var r = Raphael("holder"),
            pie = r.piechart(320, 240, 100, [55, 20, 13, 32, 5, 1, 2, 10], { legend: ["Stay inside", "Obey the speed limit", "Don't drink alcohol", "wear a helmet, everywhere"], legendpos: "west"});

        r.text(320, 100, "Best ways to be safe").attr({ font: "20px 'Fontin Sans', Fontin-Sans, sans-serif" });
        pie.hover(function () {
            this.sector.stop();
            this.sector.scale(1.1, 1.1, this.cx, this.cy);

            if (this.label) {
                this.label[0].stop();
                this.label[0].attr({ r: 7.5 });
                this.label[1].attr({ "font-weight": 800 });
            }
        }, function () {
            this.sector.animate({ transform: 's1 1 ' + this.cx + ' ' + this.cy }, 500, "bounce");

            if (this.label) {
                this.label[0].animate({ r: 5 }, 500, "bounce");
                this.label[1].attr({ "font-weight": 400 });
            }
        });
    };
</script>

<div class="raphael" id="g.raphaelm">
<div id="holder"></div>
</div>
      
@endsection