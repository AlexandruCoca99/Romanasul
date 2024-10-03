let countryId;

jQuery(document).ready(function ($) {
  // Define a class to manage the map and its interactions
  class MapManager {
    // Constructor to initialize the map with the specified chart ID and visited countries data
    constructor(chartId, visitedCountries, visitedCountriesSmall) {
      // console.log(visitedCountries);
      this.chartId = chartId;
      this.visitedCountries = visitedCountries;
      this.visitedCountriesSmall = visitedCountriesSmall;
      this.chart = null;
      this.initMap(); // Initialize the map upon creating an instance
    }

    initMap() {
      am4core.ready(() => {
        const isMobile = window.innerWidth <= 1000;
        console.log(window.innerWidth);
        // Apply animated theme to the chart
        am4core.useTheme(am4themes_animated);

        // Create the map chart instance
        this.chart = am4core.create(this.chartId, am4maps.MapChart);
        // Set the map's geographical data
        this.chart.geodata = am4geodata_worldLow;
        // Set the map's projection type
        this.chart.projection = new am4maps.projections.Miller();
        this.chart.responsive.enabled = true;
        // Set the map's initial zoom
        this.chart.homeZoomLevel = isMobile ? 5 : 1;
        this.chart.homeGeoPoint = {
          latitude: 50,
          longitude: 10,
        };
        // Create and configure the polygon series for countries
        const polygonSeries = this.createPolygonSeries();
        // polygonSeries.data = this.visitedCountries;

        this.attachPolygonHitEvent(polygonSeries); // Add event listeners to the polygon series

        // Create the image series for custom markers
        const imageSeries = this.createImageSeries();

        // Set the initial data for the polygon series

        imageSeries.data = this.visitedCountriesSmall;
      });
    }

    // Method to create and return a configured polygon series
    createPolygonSeries() {
      const polygonSeries = this.chart.series.push(
        new am4maps.MapPolygonSeries()
      );
      polygonSeries.exclude = ["AQ"]; // Exclude Antarctica
      polygonSeries.useGeodata = true; // Use the provided GeoJSON for polygons
      polygonSeries.mapPolygons.template.tooltipText = "{name}"; // Tooltip text format
      polygonSeries.mapPolygons.template.fill = this.chart.colors.getIndex(0); // Default fill color
      // console.log(polygonSeries);
      // Adding a pattern on data validation
      polygonSeries.events.on("datavalidated", (ev) => {
        this.applyPatternsToCountries(ev.target);
      });

      return polygonSeries;
    }

    applyPatternsToCountries(polygonSeries) {
      polygonSeries.mapPolygons.each((polygon) => {
        const dataContext = polygon.dataItem.dataContext;
        const id = dataContext.id;
        const foundVisitedCountry = this.visitedCountries.find(
          (country) => country.id === id
        );
        if (foundVisitedCountry) {
          const pattern = new am4core.Pattern();
          pattern.width = 400;
          pattern.height = 300;
          pattern.x = 0;
          pattern.y = 0;

          const image = new am4core.Image();
          // console.log(image);
          image.width = 400;
          image.height = 300;
          image.href = foundVisitedCountry.fill;

          this.adjustImageSizeForCountry(dataContext.id, image, pattern);

          pattern.addElement(image.element);
          polygon.fill = pattern;
        }
      });
    }

    adjustImageSizeForCountry(countryId, image, pattern) {
      // Adjustments specific to each country
      const screenWidth = window.innerWidth;
      const screenHeight = window.innerHeight;
      const isMobile = window.innerWidth <= 1000;
      // Define scaling factors based on screen size
      const widthScale = screenWidth / 1920; // Assuming 1920px as base width
      const heightScale = screenHeight / 1080; // Assuming 1080px as base height

      // Default scaling factor to avoid extreme small images on very small screens
      console.log(screenWidth);
      if (!isMobile)
        switch (countryId) {
          case "CA":
            image.width = 15;
            image.height = image.width / 2;
            pattern.width = image.width - 0.3;
            pattern.height = pattern.width / 2;
            pattern.x = 4.5 * widthScale;
            pattern.y = 9.5 * heightScale;
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
            image.width = 3;
            image.height = image.width;
            pattern.width = image.width - 0.1;
            pattern.height = pattern.width;
            pattern.x = 2.9 * widthScale;
            pattern.y = -2.25 * heightScale;
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
            image.width = 0.5;
            image.height = image.width / 2;
            pattern.width = image.width / 2;
            pattern.height = pattern.width / 2;
            pattern.x = 1 * widthScale;
            pattern.y = 1 * heightScale;
          case "MA":
            image.width = 40;
            image.height = 60;
            pattern.width = 40;
            pattern.height = 60;
            pattern.x = -10;
            pattern.y = 23;
            break;
        }
      else
        switch (countryId) {
          case "CA":
            image.width = 15;
            image.height = image.width / 2;
            pattern.width = image.width;
            pattern.height = pattern.width / 2;
            pattern.x = 17.5 * widthScale;
            pattern.y = 9.5 * heightScale;
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
            image.width = 3;
            image.height = image.width;
            pattern.width = image.width - 0.1;
            pattern.height = pattern.width;
            pattern.x = 0 * widthScale;
            pattern.y = -2.25 * heightScale;
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
            image.width = 700;
            image.height = 115;
            pattern.width = 700;
            pattern.height = 115;
            pattern.x = 100;
            pattern.y = 0;
          case "MA":
            image.width = 40;
            image.height = 60;
            pattern.width = 40;
            pattern.height = 60;
            pattern.x = -10;
            pattern.y = 23;
            break;
        }
    }

    // Method to create and configure the image series for custom markers
    createImageSeries() {
      const imageSeries = this.chart.series.push(new am4maps.MapImageSeries());
      const imageTemplate = imageSeries.mapImages.template;

      // Set property fields for coordinates
      imageTemplate.propertyFields.longitude = "longitude";
      imageTemplate.propertyFields.latitude = "latitude";
      imageTemplate.nonScaling = true; // Ensure markers do not scale when zooming

      // Create a pin bullet as a child of the template
      const pin = imageTemplate.createChild(am4plugins_bullets.PinBullet);
      pin.tooltipText = "{title}"; // Set tooltip text
      imageSeries.tooltip.pointerOrientation = "center"; // Tooltip orientation

      // Configure the appearance of the pin
      pin.background.fill = this.chart.colors.getIndex(8);
      pin.background.fillOpacity = 0.7;
      pin.background.pointerBaseWidth = 20;
      pin.background.pointerLength = 50;
      // pin.background.pointerAngle = "value";
      pin.image = new am4core.Image();
      pin.image.propertyFields.href = "fill"; // Bind image URL field

      // Add a heat rule for dynamic radius based on data
      imageSeries.heatRules.push({
        target: pin.background,
        property: "radius",
        min: 20,
        max: 20,
        dataField: "value",
      });

      imageTemplate.adapter.add("rotation", (pointerAngle, target) => {
        return target.dataItem.dataContext.angle || 0; // Apply the angle from data or default to 0
      });

      // Add a circle to the pin base for a visual enhancement
      var circle = pin.createChild(am4core.Ellipse);
      circle.radiusY = 3; // Vertical radius of the circle
      circle.strokeWidth = 0; // No border
      circle.fillOpacity = 0.1; // Slightly visible
      circle.zIndex = -1; // Ensure it is rendered behind the pin

      // Create hover state to increase the pin's size on mouse over
      let hoverState = pin.states.create("hover");
      hoverState.properties.scale = 1.5; // Scale up to 150% when hovered
      // this.addDataToSeries(imageSeries); // Populate the image series with data

      this.attachPinHitEvent(pin);
      return imageSeries;
    }

    // Method to add event listeners to polygon series
    attachPolygonHitEvent(polygonSeries) {
      // Handling click events on polygons to display detailed information
      polygonSeries.mapPolygons.template.events.on("hit", (ev) => {
        this.manageVisitedCountries(this.visitedCountries, ev);
      });

      // Event listener for background click to hide overlays
      this.manageSlider();
    }

    attachPinHitEvent(pin) {
      // Handling pin hit event
      pin.events.on("hit", (ev) => {
        this.manageVisitedCountries(this.visitedCountriesSmall, ev);
      });

      // Event listener for background click to hide overlays
      this.manageSlider();
    }

    manageVisitedCountries(visitedCountry, ev) {
      countryId = ev.target.dataItem.dataContext.id;
      if (!visitedCountry.some((data) => data.id === countryId)) {
        return;
      }
      const foundVisitedCountry = visitedCountry.find(
        (country) => country.id === countryId
      );
      this.displayRightSideContainer(foundVisitedCountry);
    }
    manageSlider() {
      this.hideRightSideContainer();
      this.addSlider();
      this.closeSlider();
      this.toggleMap();
    }

    hideRightSideContainer() {
      $(".background").on("click", () => {
        const isMobile = window.innerWidth <= 650;
        console.log(isMobile);
        // Remove 'show' class from elements to hide them
        $(".right-side-pop-up").removeClass("show");
        $(".background").removeClass("show");
        if (!isMobile) $(".right-side-container").removeClass("transformRight");
      });
    }

    // Method to display the right side container with country details
    displayRightSideContainer(countryData) {
      const isMobile = window.innerWidth <= 650;
      $(".right-side-pop-up").addClass("show");
      $(".right-side-pop-up").html(this.renderRightSideContent(countryData));
      $(".background").addClass("show");
      if (!isMobile) $(".right-side-container").addClass("transformRight");
    }

    addSlider() {
      $(document).on("click", ".right-side-pop-up .button", function () {
        const id = $(this).attr("id");
        // console.log(id);
        //add slider
        $(".swiper-main").removeClass("hidden");
        $(`#${id}.swiper`).removeClass("hidden");
        $(".right-side-pop-up").removeClass("show");
        $(".background").removeClass("show");
      });
    }

    closeSlider() {
      $(".swiper-main .close-button").on("click", function (e) {
        const isMobile = window.innerWidth <= 650;
        e.preventDefault();
        $(".swiper-main").addClass("hidden");
        $(".swiper-main .swiper").addClass("hidden");
        if (!isMobile) $(".right-side-container").removeClass("transformRight");
      });
    }

    toggleMap() {
      let mapVisible = true;
      let dropdownOpen = false;
      $(".dropdown-arrow").on("click", function () {
        if (dropdownOpen) {
          $(".dropdown-content").css("display", "none");
          $(this).css("transform", "translateY(0)"); // Reset arrow translation
        } else {
          $(".dropdown-content").css("display", "block");
          $(this).css("transform", "translateY(30px)"); // Translate arrow down by 30px
        }
        dropdownOpen = !dropdownOpen;
      });

      $("#toggleMap").on("click", function (e) {
        if (mapVisible) {
          $("#chartdiv").hide();
          $(this).text("Show Map");
          $(".right-side-container").css("padding-top", "100px");
        } else {
          $("#chartdiv").show(); // Show the map
          $(this).text("Hide Map"); // Change button text
          $(".right-side-container").css("padding-top", "0px");
        }

        // Toggle the map visibility state
        mapVisible = !mapVisible;
      });
    }

    // Method to render HTML content for the right-side container
    renderRightSideContent(countryData) {
      const { fill, title, buttons } = countryData;
      return `
      <div class="content">
        <div class="image-holder">
          <img src="${fill}"/>
        </div>
        <h1>${title}</h1>
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
    }
  }

  const visitedCountries = [
    {
      id: "AE",
      title: "Dubai",
      fill: "images/gallery/AfiseTurnee/Dubai.jpg",
      buttons: ["AE-2019", "AE-2023"],
    },

    {
      id: "ES",
      title: "Spain",
      fill: "images/Poze-romanasul/1.Turnee/Barcelona-2022/Afis-Barcelona.jpg",
      buttons: ["ES-2022"],
    },

    {
      id: "CA",
      fill: "images/gallery/AfiseTurnee/Canada.jpg",
      title: "Canada",
      buttons: ["CA-2023"],
    },

    {
      id: "NL",
      title: "Netherlands",
      fill: "images/gallery/AfiseTurnee/Netherlands.jpg",
      buttons: ["NL-2015"],
    },
    {
      id: "BE",
      title: "Belgium",
      fill: "images/gallery/AfiseTurnee/Belgium.jpg",
      buttons: ["BE-2016"],
    },
    {
      id: "RU",
      title: "Russia",
      fill: "images/gallery/AfiseTurnee/Morocco-Tanger.jpg",
      buttons: ["RU-2012"],
    },
    {
      id: "MA",
      title: "Morocco",
      fill: "images/gallery/AfiseTurnee/Morocco-Tanger.jpg",
      buttons: ["MA-2023"],
    },
    {
      id: "PL",
      title: "Poland",
      fill: "images/Poze-romanasul/1.Turnee/Franta-2021/Afis.jpg",
      buttons: ["PL-2013", "PL-2014", "PL-2017"],
    },
    {
      id: "FI",
      title: "Finland",
      fill: "images/gallery/AfiseTurnee/Finland.jpg",
      buttons: ["FI-2022"],
    },
    {
      id: "FR",
      title: "France",
      fill: "images/gallery/AfiseTurnee/France.jpg",
      buttons: ["FR-2022"],
    },
    {
      id: "PT",
      title: "Portugal",
      fill: "images/gallery/AfiseTurnee/Portugal.jpg",
      buttons: ["PT-2019", "PT-2024"],
    },
    {
      id: "AL",
      title: "Albania",
      fill: "images/gallery/AfiseTurnee/Portugal.jpg",
      buttons: ["AL-2024"],
    },
  ];
  const visitedCountriesSmall = [
    {
      id: "BE",
      latitude: 50.8799,
      longitude: 2.65594,
      fill: "images/gallery/AfiseTurnee/Belgium.jpg",
      value: 25,
      zoomLevel: 180,
      title: "Belgium",
      buttons: ["BE-2016"],
    },
    {
      id: "AE",
      latitude: 25.276987,
      longitude: 55.296249,
      fill: "images/gallery/AfiseTurnee/Dubai.jpg",
      value: 25,
      angle: 45,
      title: "Dubai",
      buttons: ["AE-2019", "AE-2023"],
    },
    {
      id: "NL",
      latitude: 53.22977,
      longitude: 7.149182,
      fill: "images/gallery/AfiseTurnee/Netherlands.jpg",
      value: 25,
      zoomLevel: 180,
      title: "Netherlands",
      buttons: ["NL-2015"],
    },
    {
      id: "BA",
      latitude: 43.9159,
      longitude: 17.6791,
      fill: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/pin_berlin.jpg",
      value: 22,
      zoomLevel: 180,
      title: "Bosnia and Herzegovina",
    },
    {
      id: "AL",
      latitude: 41.1533,
      longitude: 20.1683,
      fill: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/pin_warsaw.jpg",
      value: 39,
      zoomLevel: 45,
      title: "Albania",
      buttons: ["AL-2024"],
    },
  ];
  const map = new MapManager(
    "chartdiv",
    visitedCountries,
    visitedCountriesSmall
  );
});
