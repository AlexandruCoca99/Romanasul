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

polygonSeries.mapPolygons.template.setAll({
  tooltipText: "{name}",
  templateField: "polygonSettings",
});

polygonSeries.mapPolygons.template.states.create("hover", {
  fill: am5.color(0x677935),
});

polygonSeries.data.setAll([
  {
    id: "US",
    polygonSettings: {
      fill: am5.color(0xff3c38),
    },
  },
  {
    id: "CA",
    polygonSettings: {
      fill: am5.color(0xa23e48),
    },
  },
  {
    id: "MX",
    polygonSettings: {
      fill: am5.color(0xff8c42),
    },
  },
]);
