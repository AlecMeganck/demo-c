window.castaar = (function ($, ns) {
  // 1. ECMA-262/5
  "use strict";

  // 2. PRIVATE CONFIGURATION OVERRIDE
  const cfg = {};

  // 3. LOAD COMPONENTS AND CLASSES
  ns.components = function () {
    ns.Navigation && ns.Navigation.init();
  };

  ns.classes = function () {
    return {
      wow: new window.WOW({ boxClass: "wow", animateClass: "animated", offset: 100 }).init(),
    };
  };

  // 4. DOM Ready
  $(function () {
    ns.components();
    ns.classes();
  });

  // 5. RETURN NAMESPACE
  return ns;
})(window.jQuery, window.castaar || {});
