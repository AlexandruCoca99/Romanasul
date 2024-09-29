function doMenu(item1, item2, item3, item4) {
  ditem1 = document.getElementById(item1);
  ditem2 = document.getElementById(item2);
  ditem3 = document.getElementById(item3);
  ditem4 = document.getElementById(item4);
  ditem1.style.display = "block";
  ditem2.style.display = "none";
  ditem3.style.display = "none";
  ditem4.style.display = "none";
}

function reveal(item) {
  obj = document.getElementById(item);
  obj.style.display = "block";
}

function hide(item) {
  obj = document.getElementById(item);
  obj.style.display = "none";
}

function selectedDance(str, id, file) {
  if (str == "") {
    document.getElementById(id).innerHTML = "";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById(id).innerHTML = xmlhttp.responseText;
    }
  };
  xmlhttp.open("GET", "../administration/" + file + "?id=" + str, true);
  xmlhttp.send();
}

function modifyDance(str, id, file, name, region, description, action) {
  if (str == "") {
    document.getElementById(id).innerHTML = "";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById(id).innerHTML = xmlhttp.responseText;
    }
  };
  xmlhttp.open(
    "GET",
    "../administration/" +
      file +
      "?id=" +
      str +
      "&name=" +
      name +
      "&region=" +
      region +
      "&description=" +
      description +
      "&action=" +
      action,
    true
  );
  xmlhttp.send();
}

function selectedPair(str, id, file, spectacle, dance) {
  //    alert("str: "+str);
  //    alert("id: "+id);
  //    alert("file: "+file);
  //    alert("spec: "+spectacle);
  //    alert("dance: "+dance);
  if (str == "") {
    document.getElementById(id).innerHTML = "";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById(id).innerHTML = xmlhttp.responseText;
    }
  };
  xmlhttp.open(
    "GET",
    "../administration/" +
      file +
      "?id=" +
      str +
      "&spec=" +
      spectacle +
      "&dance=" +
      dance,
    true
  );
  xmlhttp.send();
}

$(function () {
  // Form validator
  $("#contactFormBtn").formValidator({
    scope: "#contactForm",
    errorDiv: "#errorDiv1",
  });
});

$(function () {
  function scroll(direction) {
    var scroll,
      i,
      positions = [],
      here = $(window).scrollTop(),
      collection = $(".post");

    collection.each(function () {
      positions.push(parseInt($(this).offset()["top"], 10));
    });

    for (i = 0; i < positions.length; i++) {
      if (direction == "next" && positions[i] > here) {
        scroll = collection.get(i);
        break;
      }
      if (direction == "prev" && i > 0 && positions[i] >= here) {
        scroll = collection.get(i - 1);
        break;
      }
    }

    if (scroll) {
      $.scrollTo(scroll, {
        duration: 750,
      });
    }

    return false;
  }

  $(".scrollBtn").click(function () {
    $.scrollTo($($(this).attr("href")), {
      duration: 750,
    });
    return false;
  });
});

jQuery(document).ready(function ($) {
  $("a").on("click", function () {
    // console.log($(this));
  });
  console.log("sdasdsad");

  $(".solist").css({ color: "red" });

  /*paralax*/
  jQuery("#parallax").jparallax({
    yparallax: false,
  });
  image_width = 1868;
  image_heigth = 630;
  awidth = screen.availWidth;
  aheight = screen.availHeight;
  proc_width = awidth / image_width;
  paralax_height = image_heigth * proc_width.toFixed(2);

  $("#parallax").css({ width: awidth, height: paralax_height });
  $(".parallaxBox").css({ width: awidth, height: paralax_height });
  $(".home").css({ height: aheight });
  $(".contacts").css({ height: aheight });
  $("#home_bg").css({ width: awidth });
  $("#baieti img").css({ height: paralax_height });
  $("#ione img").css({ height: paralax_height });
  $("#fete img").css({ height: paralax_height });
  $("#fete_spate img").css({ height: paralax_height });

  image_width_contact = 604;
  image_height_contact = 453;
  proc_width_contact = awidth / image_width_contact;
  contact_height = image_height_contact * proc_width_contact.toFixed(2);
  contact_width = (image_width_contact - 88) * proc_width_contact.toFixed(2);
  $(".footerCenter").css({ "background-size": contact_width });
});

$(function () {
  $(".slider-images").jCarouselLite({
    btnNext: ".next",
    btnPrev: ".prev",
    visible: 1,
    easing: "easeout",
    auto: 9900,
    speed: 700,
  });

  $(".slidertext").jCarouselLite({
    btnNext: ".next",
    btnPrev: ".prev",
    vertical: true,
    visible: 1,
    easing: "easeout",
    auto: 9900,
    speed: 700,
  });
});

$(document).ready(function () {
  /* Adding a colortip to any tag with a title attribute: */
  $("[rev]").colorTip({ color: "gray" });
});
