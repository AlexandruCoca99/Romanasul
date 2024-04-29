let countryId;
const visitedCountries = [
  {
    id: "AE",
    title: "Dubai",
    fill: "images/gallery/AfiseTurnee/Dubai.jpg",
    buttons: ["AE-2019", "AE-2023"],
  },

  {
    id: "ES",
    fill: "images/Poze-romanasul/1.Turnee/Barcelona-2022/Afis-Barcelona.jpg",
    buttons: ["ES-2022"],
  },

  {
    id: "CA",
    fill: "images/gallery/AfiseTurnee/Canada.jpg",
    name: "Canada",
    buttons: ["CA-2023"],
  },

  {
    id: "NL",
    fill: "images/gallery/AfiseTurnee/Netherlands.jpg",
    buttons: ["NL-2015"],
  },

  {
    id: "BE",
    fill: "images/gallery/AfiseTurnee/Belgium.jpg",
    buttons: ["BE-2016"],
  },
  {
    id: "RU",
    fill: "images/gallery/AfiseTurnee/Morocco-Tanger.jpg",
    buttons: ["RU-2012"],
  },
  {
    id: "MA",
    fill: "images/gallery/AfiseTurnee/Morocco-Tanger.jpg",
    buttons: ["MA-2023"],
  },
  {
    id: "PL",
    fill: "images/Poze-romanasul/1.Turnee/Franta-2021/Afis.jpg",
    buttons: ["PL-2013", "PL-2014", "PL-2017"],
  },
  {
    id: "FI",
    fill: "images/gallery/AfiseTurnee/Finland.jpg",
    buttons: ["FI-2022"],
  },
  {
    id: "FR",
    fill: "images/gallery/AfiseTurnee/France.jpg",
    buttons: ["FR-2022"],
  },
  {
    id: "PT",
    fill: "images/gallery/AfiseTurnee/Portugal.jpg",
    buttons: ["PT-2019", "PT-2024"],
  },
  {
    id: "AL",
    fill: "images/gallery/AfiseTurnee/Portugal.jpg",
    buttons: ["AL-2024"],
  },
];

jQuery(document).ready(function ($) {
  //Display right side container
  const displayRightSideContainer = (countryData) => {
    $(".right-side-pop-up").addClass("show");
    $(".right-side-pop-up").html(renderRightSideContent(countryData));
    $(".background").addClass("show");
  };

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
    // hs.properties.fill = am4core.color("#367B25");

    //Background image
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
    pin.background.fill = chart.colors.getIndex(8);
    pin.background.fillOpacity = 0.7;
    pin.background.radius = 25;
    // pin.background.pointerAngle = "customValue";
    pin.background.pointerBaseWidth = 50;
    pin.background.pointerLength = 50;
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

    // imageSeries.heatRules.push({
    //   target: pin.background,
    //   property: "pointerAngle",
    //   dataField: "customValue",
    // });
    console.log(pin);
    console.log(imageSeries);

    // Add a circle to pin base.
    // Bullet is a Container, so we can add there anything.
    var circle = pin.createChild(am4core.Ellipse);
    //circle.radius = am4core.percent(80);
    circle.radiusY = 3;
    circle.strokeWidth = 0;
    circle.fillOpacity = 0.1;
    circle.zIndex = -1;

    // Create hover state to slightly increase radius
    let hoverState = pin.states.create("hover");
    hoverState.properties.scale = 1.5;

    imageSeries.data = [
      {
        latitude: 50.5039,
        longitude: 4.4699,
        imageURL: "images/gallery/AfiseTurnee/Belgium.jpg",
        value: 150,
        // zoomLevel: 180,
        title: "Belgium",
      },
      {
        latitude: 25.276987,
        longitude: 55.296249,
        imageURL: "images/gallery/AfiseTurnee/Dubai.jpg",
        value: 50,
        title: "Dubai",
      },
      {
        latitude: 52.1326,
        longitude: 5.2913,
        imageURL: "images/gallery/AfiseTurnee/Netherlands.jpg",
        value: 50,
        customValue: 180,
        title: "Netherlands",
      },
      {
        latitude: 43.9159,
        longitude: 17.6791,
        imageURL:
          "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/pin_berlin.jpg",
        value: 22,
        title: "Bosnia and Herzegovina",
      },
      {
        latitude: 41.1533,
        longitude: 20.1683,
        imageURL:
          "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/pin_warsaw.jpg",
        value: 39,
        title: "Albania",
      },
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

    polygonSeries.data = [...visitedCountries];

    polygonSeries.events.on("datavalidated", function (ev) {
      ev.target.mapPolygons.each(function (polygon) {
        if (polygon.dataItem.dataContext.fill) {
          // Create pattern
          var pattern = new am4core.Pattern();
          pattern.width = 600;
          pattern.height = 750;
          pattern.x = -250;
          pattern.y = -375;

          //Create image
          var image = new am4core.Image();
          image.width = 700;
          image.height = 950;
          image.href = polygon.dataItem.dataContext.fill;

          //fill each country with the image
          switch (polygon.dataItem.dataContext.id) {
            case "CA":
              image.width = 600;
              image.height = 400;

              pattern.width = 500;
              pattern.height = 320;

              pattern.x = 210;
              pattern.y = 30;
              break;

            case "AE":
              image.width = 30;
              image.height = 15;

              pattern.width = 30;
              pattern.height = 10;
              pattern.x = -15;
              pattern.y = 0;
              break;

            case "ES":
              image.width = 70;
              image.height = 115;

              pattern.width = 70;
              pattern.height = 115;
              pattern.x = -3;
              pattern.y = 70;
              break;

            case "PT":
              image.width = 15;
              image.height = 23;

              pattern.width = 15;
              pattern.height = 23;
              pattern.x = -3;
              pattern.y = 70;
              break;

            case "NL":
              image.width = 15;
              image.height = 23;

              pattern.width = 15;
              pattern.height = 23;
              pattern.x = -3;
              pattern.y = 70;
              break;

            case "FR":
              image.width = 150;
              image.height = 100;

              pattern.width = 150;
              pattern.height = 100;
              pattern.x = 5;
              pattern.y = -35;

            case "FR":
              image.width = 150;
              image.height = 100;

              pattern.width = 150;
              pattern.height = 100;
              pattern.x = 5;
              pattern.y = -35;
              break;
          }
          pattern.addElement(image.element);

          polygon.fill = pattern;
        }
      });
    });

    pin.events.on("hit", function (ev) {
      console.log(ev);
      countryId = ev.target.dataItem.dataContext.title;
      const countryData = polygonSeries.data.find(
        (data) => data.title === countryId
      );

      if (!visitedCountries.some((data) => data.title === countryId)) {
        return;
      }

      displayRightSideContainer(countryData);
    });

    //Click event on countries
    polygonSeries.mapPolygons.template.events.on("hit", function (ev) {
      countryId = ev.target.dataItem.dataContext.id;
      const countryData = polygonSeries.data.find(
        (data) => data.id === countryId
      );

      if (!visitedCountries.some((data) => data.id === countryId)) {
        return;
      }

      displayRightSideContainer(countryData);
    });
  });

  const renderRightSideContent = (countryData) => {
    const { fill, name, buttons } = countryData;

    return `
    <div class="content">
      <div class="image-holder">
        <img src="${fill}"/>
      </div>
      <h1>${name}</h1>
      ${
        buttons
          ? `
      <h3>Image Gallery</h3>
      <div class="buttons-holder">
        ${buttons?.map(
          (button) =>
            `<button id="${button}" class="button">
            ${button}
          </button>`
        )}
      </div>`
          : ""
      }

    </div>`;
  };

  $(".background").on("click", function () {
    $(this).removeClass("show");
    $(".right-side-pop-up").removeClass("show");
  });

  $(document).on("click", ".right-side-pop-up .button", function () {
    const id = $(this).attr("id");
    console.log(id);
    //add slider
    $(".swiper-main").removeClass("hidden");
    $(`#${id}.swiper`).removeClass("hidden");
    $(".right-side-pop-up").removeClass("show");
    $(".background").removeClass("show");
  });

  //close slider
  $(".swiper-main .close-button").on("click", function (e) {
    e.preventDefault();
    $(".swiper-main").addClass("hidden");
    $(".swiper-main .swiper").addClass("hidden");
  });
});
