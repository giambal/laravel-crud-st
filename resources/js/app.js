
var $ = require('jquery');

function init() {

  setTimeout(function () {

    $(".alert").fadeOut(2000);
  },3000);
}

$(document).ready(init);
