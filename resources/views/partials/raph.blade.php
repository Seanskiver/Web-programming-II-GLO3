<!--RAPHAEL-->
<script type="text/javascript" src="/js/raphael/raphael-min.js"></script>
<script src="/js/raphael/g.raphael.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/raphael/g.pie.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" charset="utf-8">
    window.onload = function () {
        var r = Raphael("holder"),
            pie = r.piechart(320, 240, 100, [55, 20, 13, 32, 5, 1, 2, 10], { legend: ["%%.%% - Enterprise Users", "IE Users"], legendpos: "west", href: ["http://raphaeljs.com", "http://g.raphaeljs.com"]});

        r.text(320, 100, "Interactive Pie Chart").attr({ font: "20px 'Fontin Sans', Fontin-Sans, sans-serif" });
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
  
