/**
 * ---------------------------------------
 * This demo was created using amCharts 5.
 *
 * For more information visit:
 * https://www.amcharts.com/
 *
 * Documentation is available at:
 * https://www.amcharts.com/docs/v5/
 * ---------------------------------------
 */

jQuery(document).ready(function ($) {
  const mapHolder = $("#chartdiv");

  if (mapHolder.length === 0) {
    return;
  }

  // Create root and chart
  const root = am5.Root.new("chartdiv");

  // Set themes
  root.setThemes([am5themes_Animated.new(root)]);

  const chart = root.container.children.push(
    am5map.MapChart.new(root, {
      panX: "rotateX",
      projection: am5map.geoNaturalEarth1(),
    })
  );

  // Create polygon series
  const polygonSeries = chart.series.push(
    am5map.MapPolygonSeries.new(root, {
      geoJSON: am5geodata_worldLow,
      exclude: ["AQ"],
    })
  );

  // GeoJSON data
  var cities = {
    type: "FeatureCollection",
    features: [
      {
        type: "Feature",
        properties: {
          name: "New York City",
          pictureSettings: {
            src: "https://assets.codepen.io/t-160/nyc.jpg",
          },
        },
        geometry: {
          type: "Point",
          coordinates: [-73.778137, 40.641312],
        },
      },
      {
        type: "Feature",
        properties: {
          name: "London",
          pictureSettings: {
            src: "https://assets.codepen.io/t-160/london.jpg",
          },
        },
        geometry: {
          type: "Point",
          coordinates: [-0.454296, 51.47002],
        },
      },
      {
        type: "Feature",
        properties: {
          name: "Beijing",
          pictureSettings: {
            src: "https://assets.codepen.io/t-160/beijing.jpg",
          },
        },
        geometry: {
          type: "Point",
          coordinates: [116.597504, 40.072498],
        },
      },
    ],
  };

  // Create point series
  var pointSeries = chart.series.push(
    am5map.MapPointSeries.new(root, {
      geoJSON: cities,
    })
  );

  pointSeries.bullets.push(function (root, series, dataItem) {
    var container = am5.Container.new(root, {});

    container.children.push(
      am5.Picture.new(root, {
        templateField: "pictureSettings",
        width: 90,
        centerX: am5.p50,
        centerY: am5.p50,
        forceInactive: true,
      })
    );

    var circle = container.children.push(
      am5.Circle.new(root, {
        radius: 30,
        stroke: am5.color(0xb4e1ff),
        fill: am5.color(0xb4e1ff),
        strokeWidth: 4,
        tooltipText: "{name}",
      })
    );

    container.set("mask", circle);

    return am5.Bullet.new(root, {
      sprite: container,
    });
  });
});
