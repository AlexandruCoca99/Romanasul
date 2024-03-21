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
    id: "PT",
    fill: "images/Poze-romanasul/1.Turnee/Portugalia-2019/Afis-reversed.png",
  },

  {
    id: "FR",
    fill: "images/Poze-romanasul/1.Turnee/Franta-2021/Afis.jpg",
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
    console.log(pin);
    // Set what to display on rollover tooltip
    pin.tooltipText = "{title}";
    imageSeries.tooltip.pointerOrientation = "center";

    // Configuring pin appearance
    pin.background.fill = chart.colors.getIndex(8);
    pin.background.fillOpacity = 0.7;
    pin.background.pointerAngle = 240;
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
        title: "Dubai",
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
