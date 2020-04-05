/* ----------- Dynamic Common JS ----------- */

/* ----------- NG Shortcuts Tooltip --------- */

$(document).ready(function() {
    $('body').on("click", '.btn-nxt', function() {
        $('.cndn-tabs li.active').next().children('a').trigger("click");
        tabPaneFooter();
    });
    $('body').on("click", '.btn-prev', function() {
        $('.cndn-tabs li.active').prev().children('a').trigger("click");
        tabPaneFooter();
    });
    $('body').on("click", '.btn-pills', function() {
        tabPaneFooter();
    });
});

$(document).on('mouseover', ".my-tooltip", function() {
    var $this = $(this);
    $this.tooltip({
        title: $this.attr('data-title'),
        placement: "top"
    });
    $this.tooltip('show');
});
