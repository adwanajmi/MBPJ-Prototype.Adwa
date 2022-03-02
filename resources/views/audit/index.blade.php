@extends('base')
@section('content')

<div class="card h-md-100 ecommerce-card-min-width">
    <div class="card-header">
        <div class="row flex-between-end">
          <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
            <h5 class="mb-0" data-anchor="data-anchor">Audit Trail</h5>
          </div>
          <div class="col-auto ms-auto">

            <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="/audit/create"><span class="fas fa-pencil-alt fs--2 me-1"></span>Create New</a></div>

          </div>
        </div>
      </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Activity</th>
          <th scope="col">Date</th>
          <th scope="col">User</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($audit_trail as $audit_trail)
        <tr>
          <td>{{ $audit_trail->activity }}</td>
          <td>{{ $audit_trail->date }}</td>
          <td>{{ $audit_trail->user }}</td>
          <td class="text-end">
            <div>
                <form action="{{ route('audit.destroy',$audit_trail->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('audit.show',$audit_trail->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('audit.edit',$audit_trail->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
          </td>
        </tr>

        @endforeach


      </tbody>
    </table>
  </div>

  <div class="card">
      <!-- Styles -->
        <style>
            #chartdiv {
            width: 100%;
            height: 500px;
            }
            </style>

            <!-- Resources -->
            <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
            <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
            <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

            <!-- Chart code -->
            <script>
            am5.ready(function() {

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv");


            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([
            am5themes_Animated.new(root)
            ]);


            // Create chart
            // https://www.amcharts.com/docs/v5/charts/xy-chart/
            var chart = root.container.children.push(am5xy.XYChart.new(root, {
            panX: true,
            panY: true,
            wheelX: "none",
            wheelY: "none"
            }));

            // We don't want zoom-out button to appear while animating, so we hide it
            chart.zoomOutButton.set("forceHidden", true);


            // Create axes
            // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            var xRenderer = am5xy.AxisRendererX.new(root, {
            minGridDistance: 30
            });
            xRenderer.labels.template.setAll({
            rotation: -90,
            centerY: am5.p50,
            centerX: 0,
            paddingRight: 15
            });
            xRenderer.grid.template.set("visible", false);

            var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
            maxDeviation: 0.3,
            categoryField: "country",
            renderer: xRenderer
            }));

            var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
            maxDeviation: 0.3,
            min: 0,
            renderer: am5xy.AxisRendererY.new(root, {})
            }));


            // Add series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var series = chart.series.push(am5xy.ColumnSeries.new(root, {
            name: "Series 1",
            xAxis: xAxis,
            yAxis: yAxis,
            valueYField: "value",
            categoryXField: "country"
            }));

            // Rounded corners for columns
            series.columns.template.setAll({
            cornerRadiusTL: 5,
            cornerRadiusTR: 5
            });

            // Make each column to be of a different color
            series.columns.template.adapters.add("fill", function (fill, target) {
            return chart.get("colors").getIndex(series.columns.indexOf(target ));
            });

            series.columns.template.adapters.add("stroke", function (stroke, target) {
            return chart.get("colors").getIndex(series.columns.indexOf(target ));
            });

            // Add Label bullet
            series.bullets.push(function () {
            return am5.Bullet.new(root, {
                locationY: 1,
                sprite: am5.Label.new(root, {
                text: "{valueYWorking.formatNumber('#.')}",
                fill: root.interfaceColors.get("alternativeText"),
                centerY: 0,
                centerX: am5.p50,
                populateText: true
                })
            });
            });


            // Set data
            var data = [{

            "country": "Japan",
            "value": 1809
            }, {
            "country": "Germany",
            "value": 1322
            }, {
            "country": "UK",
            "value": 1122
            }, {
            "country": "France",
            "value": 1114
            }, {
            "country": "India",
            "value": 984
            }, {
            "country": "Spain",
            "value": 711
            }, {
            "country": "Netherlands",
            "value": 665
            }, {
            "country": "Russia",
            "value": 580
            }, {
            "country": "South Korea",
            "value": 443
            }, {
            "country": "Canada",
            "value": 441
            }];

            xAxis.data.setAll(data);
            series.data.setAll(data);

            // update data with random values each 1.5 sec
            setInterval(function () {
            updateData();
            }, 1500)

            function updateData() {
            am5.array.each(series.dataItems, function (dataItem) {
                var value = dataItem.get("valueY") + Math.round(Math.random() * 300 - 150);
                if (value < 0) {
                value = 10;
                }
                // both valueY and workingValueY should be changed, we only animate workingValueY
                dataItem.set("valueY", value);
                dataItem.animate({
                key: "valueYWorking",
                to: value,
                duration: 600,
                easing: am5.ease.out(am5.ease.cubic)
                });
            })

            sortCategoryAxis();
            }


            // Get series item by category
            function getSeriesItem(category) {
            for (var i = 0; i < series.dataItems.length; i++) {
                var dataItem = series.dataItems[i];
                if (dataItem.get("categoryX") == category) {
                return dataItem;
                }
            }
            }


            // Axis sorting
            function sortCategoryAxis() {

            // Sort by value
            series.dataItems.sort(function (x, y) {
                return y.get("valueY") - x.get("valueY"); // descending
                //return y.get("valueY") - x.get("valueY"); // ascending
            })

            // Go through each axis item
            am5.array.each(xAxis.dataItems, function (dataItem) {
                // get corresponding series item
                var seriesDataItem = getSeriesItem(dataItem.get("category"));

                if (seriesDataItem) {
                // get index of series data item
                var index = series.dataItems.indexOf(seriesDataItem);
                // calculate delta position
                var deltaPosition = (index - dataItem.get("index", 0)) / series.dataItems.length;
                // set index to be the same as series data item index
                dataItem.set("index", index);
                // set deltaPosition instanlty
                dataItem.set("deltaPosition", -deltaPosition);
                // animate delta position to 0
                dataItem.animate({
                    key: "deltaPosition",
                    to: 0,
                    duration: 1000,
                    easing: am5.ease.out(am5.ease.cubic)
                })
                }
            });

            // Sort axis items by index.
            // This changes the order instantly, but as deltaPosition is set,
            // they keep in the same places and then animate to true positions.
            xAxis.dataItems.sort(function (x, y) {
                return x.get("index") - y.get("index");
            });
            }


            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            series.appear(1000);
            chart.appear(1000, 100);

            }); // end am5.ready()
            </script>

            <!-- HTML -->
            <div id="chartdiv"></div>
  </div>


@endsection
