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
am4core.ready(function () {
  // Themes begin
  am4core.useTheme(am4themes_animated);
  // Themes end

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
  polygonTemplate.fill = chart.colors.getIndex(0);

  // Create hover state and set alternative fill color
  var hs = polygonTemplate.states.create("hover");
  hs.properties.fill = am4core.color("#367B25");

  var bgSeries = chart.series.push(new am4maps.MapImageSeries());
  bgSeries.toBack();
  var bgImage = bgSeries.mapImages.template.createChild(am4core.Image);
  bgImage.propertyFields.href = "src";
  bgImage.width = 2000;
  bgImage.height = 500;
  bgSeries.data = [
    {
      //src: "images/Map-bg-img.png",
    },
  ];

  // Image series
  var imageSeries = chart.series.push(new am4maps.MapImageSeries());
  var imageTemplate = imageSeries.mapImages.template;
  imageTemplate.propertyFields.longitude = "longitude";
  imageTemplate.propertyFields.latitude = "latitude";
  imageTemplate.nonScaling = true;

  // Creating a pin bullet
  var pin = imageTemplate.createChild(am4plugins_bullets.PinBullet);

  // Set what to display on rollover tooltip
  pin.tooltipText = "{title}";
  imageSeries.tooltip.pointerOrientation = "center";

  // Configuring pin appearance
  pin.background.fill = chart.colors.getIndex(6);
  pin.background.fillOpacity = 0.7;
  pin.background.pointerAngle = 240;
  pin.background.pointerBaseWidth = 5;
  pin.background.pointerLength = 30;
  // Adding an image with its "href" attribute tied to values in data
  pin.image = new am4core.Image();
  pin.image.propertyFields.href = "imageURL";

  // Creating a "heat rule" to modify "radius" of the bullet based
  // on value in data
  imageSeries.heatRules.push({
    target: pin.background,
    property: "radius",
    min: 20,
    max: 40,
    dataField: "value",
  });

  // Add a circle to pin base.
  // Bullet is a Container, so we can add there anything.
  var circle = pin.createChild(am4core.Ellipse);
  //circle.radius = am4core.percent(80);
  circle.radiusY = 3;
  circle.strokeWidth = 0;
  circle.fillOpacity = 0.1;
  circle.zIndex = -1;

  // Create hover state to slightly increase radius
  var hs = pin.background.states.create("hover");
  hs.properties.radius = 50;

  imageSeries.data = [
    // {
    //   latitude: 40.416775,
    //   longitude: -3.70379,
    //   imageURL:
    //     "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/pin_madrid.jpg",
    //   value: 100,
    //   title: "Madrid",
    // },
    {
      latitude: 25.276987,
      longitude: 55.296249,
      imageURL: "images/gallery/AfiseTurnee/Dubai.jpg",
      value: 70,
      title: "London",
    },
    // {
    //   latitude: 48.856614,
    //   longitude: 2.352222,
    //   imageURL:
    //     "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/pin_paris.jpg",
    //   value: 60,
    //   title: "Paris",
    // },
    // {
    //   latitude: 52.520007,
    //   longitude: 13.404954,
    //   imageURL:
    //     "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/pin_berlin.jpg",
    //   value: 22,
    //   title: "Berlin",
    // },
    // {
    //   latitude: 52.229676,
    //   longitude: 21.012229,
    //   imageURL:
    //     "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/pin_warsaw.jpg",
    //   value: 39,
    //   title: "Warsaw",
    // },
    // {
    //   latitude: 41.872389,
    //   longitude: 12.48018,
    //   imageURL:
    //     "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/pin_rome.jpg",
    //   value: 66,
    //   title: "Rome",
    // },
    // {
    //   latitude: 59.329323,
    //   longitude: 18.068581,
    //   imageURL:
    //     "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/pin_stockholm.jpg",
    //   value: 50,
    //   title: "Stockholm",
    // },
  ];

  polygonSeries.data = [
    {
      id: "AE",
      fill: "images/gallery/AfiseTurnee/Dubai.jpg",
    },
    {
      id: "RU",
      fill: "images/gallery/AfiseTurnee/Canada.jpg",
    },

    {
      id: "CA",
      fill: "images/gallery/AfiseTurnee/Canada.jpg",
    },
  ];

  polygonSeries.events.on("datavalidated", function (ev) {
    ev.target.mapPolygons.each(function (polygon) {
      if (polygon.dataItem.dataContext.fill) {
        // Create pattern
        var pattern = new am4core.Pattern();
        pattern.width = 600;
        pattern.height = 750;
        pattern.x = -250;
        pattern.y = -375;

        var image = new am4core.Image();
        image.width = 700;
        image.height = 950;
        image.href = polygon.dataItem.dataContext.fill;

        switch (polygon.dataItem.dataContext.id) {
          case "CA":
            image.width = 400;
            image.height = 200;

            pattern.width = 400;
            pattern.height = 200;
            pattern.x = -52;
            pattern.y = -100;
            break;

          case "AE":
            image.width = 200;
            image.height = 200;

            pattern.width = 200;
            pattern.height = 200;
            pattern.x = -52;
            pattern.y = -100;
            break;
        }
        pattern.addElement(image.element);

        polygon.fill = pattern;
        // if (polygon.dataItem.dataContext.id === "CA") {
        //   image.width = 400;
        //   image.height = 200;

        //   pattern.width = 400;
        //   pattern.height = 200;
        //   pattern.x = -52;
        //   pattern.y = -100;
        // }
        // pattern.addElement(image.element);

        // polygon.fill = pattern;
      }
    });
  });
});
