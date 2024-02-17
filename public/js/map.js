/**
 * ---------------------------------------
 * This demo was created using amCharts 4.
 *
 * For more information visit:
 * https://www.amcharts.com/
 *
 * Documentation is available at:
 * https://www.amcharts.com/docs/v4/
 * ---------------------------------------
 */

// Create map instance
var chart = am4core.create("chartdiv", am4maps.MapChart);

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Miller();

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

// Exclude Antartica
polygonSeries.exclude = ["AQ"];

// Make map load polygon (like id names) data from GeoJSON
polygonSeries.useGeodata = true;

// Configure series
var polygonTemplate = polygonSeries.mapPolygons.template;
polygonTemplate.tooltipText = "{name}";
polygonTemplate.fill = am4core.color("#74B266");

// Create hover state and set alternative fill color
var hs = polygonTemplate.states.create("hover");
hs.properties.fill = am4core.color("#367B25");

polygonSeries.data = [
  {
    id: "US",
    fill: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/pattern1.jpg",
  },
  {
    id: "RU",
    fill: "images/canada.jpg",
  },
  {
    id: "AU",
    fill: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/pattern3.jpg",
  },
  {
    id: "BR",
    fill: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/pattern4.jpg",
  },
  {
    id: "CA",
    fill: "images/canada.jpg",
  },
];

polygonSeries.events.on("datavalidated", function (ev) {
  ev.target.mapPolygons.each(function (polygon) {
    if (polygon.dataItem.dataContext.fill) {
      // Create pattern
      var pattern = new am4core.Pattern();
      pattern.width = 500;
      pattern.height = 750;
      pattern.x = -250;
      pattern.y = -375;

      var image = new am4core.Image();
      image.width = 700;
      image.height = 950;
      image.href = polygon.dataItem.dataContext.fill;

      if (polygon.dataItem.dataContext.id === "CA") {
        image.width = 300;
        image.height = 200;

        pattern.width = 300;
        pattern.height = 200;
        pattern.x = 50;
        pattern.y = 100;
      }
      pattern.addElement(image.element);

      polygon.fill = pattern;
    }
  });
});
