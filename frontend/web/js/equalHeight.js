(function($) {

    var leftEl = $('#leftSidebar');
    var rightEl = $('#rightSidebar');

    var heightLeft = leftEl.outerHeight();
    var heightRight = rightEl.outerHeight();

    var heightSidebar = Math.max(heightLeft,heightRight);

    var heightFull = $(window).height()
        - $('#header').outerHeight()
        - $('#topNav').outerHeight()
        - $('footer').outerHeight();

    if (heightFull > heightSidebar) {
        newHeight(leftEl,heightFull);
        newHeight(rightEl,heightFull);
    }

    function newHeight(el,fullHeight) {

        var outerHeight = parseInt(el.css('paddingTop'))
            + parseInt(el.css('paddingBottom'))
            + parseInt(el.css('borderTopWidth'))
            + parseInt(el.css('borderBottomWidth'));

        var correctedHeight = fullHeight - outerHeight;

        el.css('height',correctedHeight);

    }

})(jQuery);