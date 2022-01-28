@extends('layouts.admin')

@section('title')
Dashboard - Circle of Influence
@endsection

@section('contents')

<div class="card">

</div>

<script type="text/javascript">
    var w = 600,
        h = 600,
        circleWidth = 2;


    var palette = {
        "lightgray": "#E5E8E8",
        "gray": "#708284",
        "mediumgray": "#536870",
        "blue": "#3B757F"
    }

    var colors = d3.scale.category20();

    var nodes = [{
            name: "Skills",
            value: 10
        },
        {
            name: "HTML5",
            target: [0],
            value: 10
        },
        {
            name: "CSS3",
            target: [1],
            value: 10
        },
        {
            name: "Scss",
            target: [1],
            value: 10
        },
        {
            name: "Compass",
            target: [1],
            value: 10
        },
        {
            name: "Susy",
            target: [1],
            value: 10
        },
        {
            name: "Breakpoints",
            target: [1],
            value: 10
        },
        {
            name: "jQuery",
            target: [1],
            value: 10
        },
        {
            name: "Javascript",
            target: [1],
            value: 10
        },
        {
            name: "PHP",
            target: [1],
            value: 10
        },
        {
            name: "Wordpress",
            target: [1],
            value: 10
        },
        {
            name: "Git",
            target: [1],
            value: 10
        },
        {
            name: "Snap.svg",
            target: [1],
            value: 10
        },
        {
            name: "d3",
            target: [1],
            value: 10
        },
        {
            name: "Gulp",
            target: [1],
            value: 10
        },
        {
            name: "AngularJS",
            target: [1],
            value: 10
        },
        {
            name: "Adobe CS",
            target: [1],
            value: 10
        },
        {
            name: "mySql",
            target: [1],
            value: 10
        },
        {
            name: "Grunt",
            target: [1],
            value: 10
        },
    ];

    var links = [];

    for (var i = 0; i < nodes.length; i++) {
        if (nodes[i].target !== undefined) {
            for (var x = 0; x < nodes[i].target.length; x++)
                links.push({
                    source: nodes[i],
                    target: nodes[nodes[i].target[x]]
                });
        };
    };


    var myChart = d3.select('.card')
        .append("div")
        .classed("svg-container", true)

        .append('svg')
        .attr("preserveAspectRatio", "xMinYMin meet")
        .attr("viewBox", "0 0 600 800")
        .classed("svg-content-responsive", true)


    var force = d3.layout.force()
        .nodes(nodes)
        .links([])
        .gravity(0.1)
        .charge(-600)
        .size([w, h]);

    var link = myChart.selectAll('line')
        .data(links).enter().append('line')
        .attr('stroke', palette.lightgray)
        .attr('strokewidth', '1');

    var node = myChart.selectAll('circle')
        .data(nodes).enter()
        .append('g')
        .call(force.drag);


    node.append('circle')
        .attr('cx', function (d) {
            return d.x;
        })
        .attr('cy', function (d) {
            return d.y;
        })
        .attr('r', function (d, i) {
            console.log(d.value);
            if (i > 0) {
                return circleWidth + d.value;
            } else {
                return circleWidth + 35;
            }
        })
        .attr('fill', function (d, i) {
            if (i > 0) {
                return colors(i);
            } else {
                return '#fff';
            }
        })
        .attr('strokewidth', function (d, i) {
            if (i > 0) {
                return '0';
            } else {
                return '2';
            }
        })
        .attr('stroke', function (d, i) {
            if (i > 0) {
                return '';
            } else {
                return 'black';
            }
        });


    force.on('tick', function (e) {
        node.attr('transform', function (d, i) {
            return 'translate(' + d.x + ',' + d.y + ')'
        })

        link
            .attr('x1', function (d) {
                return d.source.x;
            })
            .attr('y1', function (d) {
                return d.source.y;
            })
            .attr('x2', function (d) {
                return d.target.x;
            })
            .attr('y2', function (d) {
                return d.target.y;
            })
    });


    node.append('text')
        .text(function (d) {
            return d.name;
        })
        .attr('font-family', 'Raleway', 'Helvetica Neue, Helvetica')
        .attr('fill', function (d, i) {
            console.log(d.value);
            if (i > 0 && d.value < 10) {
                return palette.mediumgray;
            } else if (i > 0 && d.value > 10) {
                return palette.lightgray;
            } else {
                return palette.blue;
            }
        })
        .attr('text-anchor', function (d, i) {
            return 'middle';
        })
        .attr('font-size', function (d, i) {
            if (i > 0) {
                return '.5em';
            } else {
                return '.5em';
            }
        })

    force.start();

</script>

@endsection
