$(function () {
  i18n.init({debug: true, preload: ['de-DE', 'en']},
      function (err, t) {
        // translate nav
        $(".test").i18n();
        $(".navbar-right").i18n();
        $("#contact").i18n();


        // programatical access
        var appName = t("app.name");
      });

  $('#translate-en').click(function () {
    i18n.setLng('en', function (err, t) { /* loading done */
    });
    location.reload();
  });
  $('#translate-de').click(function () {
    i18n.setLng('de', function (err, t) { /* loading done */
    });
    location.reload();
  });
});