/* ----------- Dynamic Common JS ----------- */

/* ----------- NG Shortcuts Tooltip --------- */

$(document).on('mouseover', ".my-tooltip", function() {
    var $this = $(this);
    $this.tooltip({
        title: $this.attr('data-title'),
        placement: "top"
    });
    $this.tooltip('show');
});