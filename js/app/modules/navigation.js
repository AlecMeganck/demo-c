window.castaar = (function ($, ns) {
  ns.Navigation = {
    init: function () {
      this.toggleMenu();
      this.smoothScroll();
    },
    toggleMenu: function () {
      $(".sidemenu-open").click(function (e) {
        e.preventDefault();
        $(this).toggleClass("sidemenu-none");
        $(".sidemenu-close").toggleClass("sidemenu-none");
        $(".nav").toggleClass("nav-open");
      });
      $(".sidemenu-close").click(function (e) {
        e.preventDefault();
        $(this).toggleClass("sidemenu-none");
        $(".sidemenu-open").toggleClass("sidemenu-none");
        $(".nav").toggleClass("nav-open");
      });
    },
    smoothScroll: function () {
      $(document).on("click", 'a[href^="#"]', function (event) {
        event.preventDefault();

        $("html, body").animate(
          {
            scrollTop: $($.attr(this, "href")).offset().top,
          },
          500
        );
      });
    },
  };

  return ns;
})(window.jQuery, window.castaar || {});
