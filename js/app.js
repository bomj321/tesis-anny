/*************************Case 1*********************************/

$("#button-next-part-1-case-1").click(function () {
  $("#part-1-case-1").addClass("hidden-section");
  $("#part-2-case-1").removeClass("hidden-section");
  $("#part-2-case-1").addClass("show-section");
});

$("#button-next-part-2-case-1").click(function () {
  $("#part-1-case-1").addClass("hidden-section");
  $("#part-2-case-1").removeClass("show-section");
  $("#part-2-case-1").addClass("hidden-section");
  $("#part-3-case-1").removeClass("hidden-section");
  $("#part-3-case-1").addClass("show-section");
});

$("#button-next-part-3-case-1").click(function () {
  $("#part-2-case-1").removeClass("show-section");
  $("#part-2-case-1").addClass("hidden-section");
  $("#part-3-case-1").removeClass("show-section");
  $("#part-3-case-1").addClass("hidden-section");
  $("#part-4-case-1").removeClass("hidden-section");
  $("#part-4-case-1").addClass("show-section");
});

$("#button-next-part-4-case-1").click(function () {
  $("#part-3-case-1").removeClass("show-section");
  $("#part-3-case-1").addClass("hidden-section");
  $("#part-4-case-1").removeClass("show-section");
  $("#part-4-case-1").addClass("hidden-section");
  $("#part-5-case-1").removeClass("hidden-section");
  $("#part-5-case-1").addClass("show-section");
});

$("#button-next-part-4-case-1-yes").click(function () {
  $("#part-4-case-1").removeClass("show-section");
  $("#part-4-case-1").addClass("hidden-section");
  $("#part-5-case-1-yes").removeClass("hidden-section");
  $("#part-5-case-1-yes").addClass("show-section");
});

$("#button-next-part-4-case-1-no").click(function () {
  $("#part-4-case-1").removeClass("show-section");
  $("#part-4-case-1").addClass("hidden-section");
  $("#part-5-case-1-no").removeClass("hidden-section");
  $("#part-5-case-1-no").addClass("show-section");
});

/*************************Case 1*********************************/

$("#button-next-part-1-2-case-1").click(function () {
  $("#part-1-case-1").addClass("hidden-section");
  $("#part-2-2-case-1").removeClass("hidden-section");
  $("#part-2-2-case-1").addClass("show-section");
});

$("#button-next-part-2-2-case-1").click(function () {
  $("#part-2-2-case-1").addClass("hidden-section");
  $("#part-2-2-case-1").removeClass("show-section");
  $("#part-3-2-case-1").removeClass("hidden-section");
  $("#part-3-2-case-1").addClass("show-section");
});
