/* ----------- WINDOW LOAD ----------- */
// $(window).load(function() {
//     "use strict";

//     $('#refund-request-list-modal').modal('show');
// });
/* Data Table Structure */
var dom_structure =
    '<"page-header"' +
    '<"page-header-inner"' +
    '<"page-header-content-left"' +
    '<"page-header-content title-block"' +
    '<"title">' +
    '>' +
    '<"page-header-content button-block"' +
    '>' +
    '>' +
    '<"page-header-content-right"' +
    '<"page-header-content search-block"f' +
    '>' +
    '<"page-header-content button-block"' +
    '>' +
    '>' +
    '>' +
    '>' +
    '<"page-main-content"' +
    '<"container"' +
    '<"row"' +
    '<"col-sm-12"' +
    '<"table-responsive table-scroll"t>' +
    '>' +
    '>' +
    '>' +
    '>' +

    '<"footer"' +
    '<"container"' +
    '<"row"' +
    '<"col-md-12"' +
    '<"footer-content"' +
    '<"paginate"' +
    '<"foot_info"' +
    'i' +
    '>' +
    '<"pagination-block"p>' +
    '<"showing-results"l>' +
    '>' +
    '>' +
    '>' +
    '>' +
    '>' +
    '>';


/* Data Table Structure */
var dom_structure_1 =
    '<"tab-header-second-section"' +
    '>' +
    '<"page-main-content"' +
    '<"container"' +
    '<"row"' +
    '<"col-sm-12"' +
    '<"page-header"' +
    '<"page-header-inner"' +
    '<"page-header-content-left"' +
    '<"page-header-content title-block"' +
    '<"title">' +
    '>' +
    '<"page-header-content button-block"' +
    '>' +
    '>' +
    '<"page-header-content-right"' +
    '<"page-header-content search-block"f' +
    '>' +
    '<"page-header-content button-block"' +
    '>' +
    '>' +
    '>' +
    '>' +
    '<"table-responsive table-scroll"t>' +
    '>' +
    '>' +
    '>' +
    '>' +

    '<"footer"' +
    '<"container"' +
    '<"row"' +
    '<"col-md-12"' +
    '<"footer-content"' +
    '<"paginate"' +
    '<"foot_info"' +
    'i' +
    '>' +
    '<"pagination-block"p>' +
    '<"showing-results"l>' +
    '>' +
    '>' +
    '>' +
    '>' +
    '>' +
    '>';

var dom_structure_2 =
    '<"page-header"' +
    '<"page-header-inner"' +
    '<"page-header-content-left"' +
    '<"page-header-content title-block"' +
    '<"title">' +
    '>' +
    '<"page-header-content search-block"f' +
    '>' +
    '<"page-header-content button-block"' +
    '>' +
    '>' +
    '<"page-header-content-right"' +

    '<"page-header-content button-block"' +
    '>' +
    '>' +
    '>' +
    '>' +
    '<"page-main-content pad-lf-rt"' +
    '<"container"' +
    '<"row"' +
    '<"col-sm-12 pad-none"' +
    '<"table-responsive table-scroll"t>' +
    '>' +
    '>' +
    '>' +
    '>' +

    '<"footer"' +
    '<"container"' +
    '<"row"' +
    '<"col-md-12"' +
    '<"footer-content"' +
    '<"paginate"' +
    '<"foot_info"' +
    'i' +
    '>' +
    '<"pagination-block"p>' +
    '<"showing-results"l>' +
    '>' +
    '>' +
    '>' +
    '>' +
    '>' +
    '>';

var dom_structure_3 =
    '<"page-header"' +
    '<"page-header-inner"' +
    '<"page-header-content-left"' +
    '<"page-header-content title-block"' +
    '<"title">' +
    '>' +
    '<"page-header-content search-block"f' +
    '>' +
    '<"page-header-content button-block"' +
    '>' +
    '>' +
    '<"page-header-content-right"' +

    '<"page-header-content button-block"' +
    '>' +
    '>' +
    '>' +
    '>' +
    '<"page-main-content pad-lf-rt"' +
    '<"container"' +
    '<"row"' +
    '<"col-sm-12"' +
    '<' +
    '<"table-responsive cn_request_list_table_wrap tableresp"t>' +
    '>' +
    '>' +
    '>' +
    '>' +
    '>' +

    '<"footer"' +
    '<"container"' +
    '<"row"' +
    '<"col-md-12"' +
    '<"footer-content"' +
    '<"paginate"' +
    '<"foot_info"' +
    'i' +
    '>' +
    '<"pagination-block"p>' +
    '<"showing-results"l>' +
    '>' +
    '>' +
    '>' +
    '>' +
    '>' +
    '>';

/* CNDN DOM Structure */
var cndn_dom_structure =
    '<"content-shadow-wrap"' +
    '<"table-responsive table-scroll"t>' +
    '>' +
    '<"footer bottom-fixed"' +
    '<"row"' +
    '<"col-md-12"' +
    '<"footer-content"' +
    '<"paginate"' +
    '<"foot_info"' +
    'i' +
    '>' +
    '<"pagination-block"p>' +
    '<"showing-results"l>' +
    '>' +
    '>' +
    '>' +
    '>' +
    '>';


/* ----------- Document Ready ----------- */

$(document).ready(function() {
    $(".navbar-fixed-top").autoHidingNavbar({
        showOnBottom: false,
    });
    if (jQuery.ui) {
        var datepicker = $.fn.datepicker.noConflict();
        $.fn.bootstrapDP = datepicker;
    } else {
        $.fn.bootstrapDP = $.fn.datepicker;
    }

    dropDown();
    formFocus();
    bgImage();
    fullscreen();
    //fullscreenContent();
    //tableHeight();
    selectBox();
    multiSelectBox();
    popover();
    fileUpload();
    imgUpload();
    dataTables();
    datePicker();
    dateRangePicker();
    //dateTime();
    alterError();
    toggleIcon();
    breakWord();
    forgotForm();
    fancyBox();
    nextTab();
    tabPaneFooter();
    tabPaneFooterScroll();
    tableResponsiveAction();
    /* matchHeight(); */
    $(window).trigger('resize');





    //$('input[name="daterange"]').daterangepicker();


});

/* -------------------------------
        Popover
/* ----------------------------- */
function popover() {
    "use strict";

    $(function() {
        $('[data-toggle="popover"]').popover()
    })

    $(".pophover").popover({ trigger: "manual", html: true, animation: false })

        .on("mouseenter", function() {

            var _this = this;
            $(this).popover("show").addClass('appear-true');

            $(".popover").on("mouseleave", function() {
                $(_this).popover('hide').removeClass('appear-true');
            });

        }).on("mouseleave", function() {
            var _this = this;
            setTimeout(function() {
                if (!$(".popover:hover").length) {
                    $(_this).popover("hide").removeClass('appear-true');
                }
            }, 300);
        });
}
/* -------------------------------
        File Upload
/* ----------------------------- */
function fileUpload() {
    $(".form-group").on("change", ".file-upload-field", function() {
        $(this).parent(".file-upload-wrapper").attr("data-text", $(this).val().replace(/.*(\/|\\)/, ''));
    });
}
/* -------------------------------
        Image Upload
/* ----------------------------- */
function imgUpload() {
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
}
/* -------------------------------
        Drop Down
/* ----------------------------- */
function dropDown() {

    "use strict";

    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {

        event.preventDefault();

        event.stopPropagation();

        $(this).parent().siblings().removeClass('open');

        $(this).parent().toggleClass('open');

    });
}
/* -------------------------------
        SelectBox
/* ----------------------------- */
function selectBox() {
    $('.show-as').select2();
    $('.modal-select').select2();
    $('.dataTables_length select').select2();
}
/* -------------------------------
        Multi SelectBox
/* ----------------------------- */
function multiSelectBox() {
    $('.multi-select').multiselect({
        enableClickableOptGroups: true,
        enableCollapsibleOptGroups: true,
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        includeSelectAllOption: true
    });
}
/* -------------------------------
        Form Focus
/* ----------------------------- */
function formFocus() {

    // Form Focus
    $("input, .form-control").on("focus", function(event) {

        $(this).parent().addClass("focus");

    })

    $("input, .form-control").on("blur", function(event) {

        if (!this.value) {

            $(this).parent().removeClass("focus");

        }

    })

}
/* -------------------------------
        BACKGROUND IMAGE
/* ----------------------------- */
function bgImage() {
    "use strict";
    var pageSection = $('[data-background]');
    pageSection.each(function(indx) {
        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });
    $('[data-bgcolor]').css('background', function() {
        return $(this).data('bgcolor')
    });
}


/* -------------------------------
        Full Screen
/* ----------------------------- */
function fullscreen() {

    "use strict";

    if ($(window).width() > 1025) {

        $('.fullscreen').css({ 'height': $(window).height() });

        $(window).on('resize', function() {

            $('.fullscreen').css({ 'height': $(window).height() });

        });
    }
}

/* -------------------------------
        Full Screen Content
/* ----------------------------- */
function fullscreenContent() {

    "use strict";

    if ($(window).width() > 767) {

        var pageetc = 250;

        $('.content-wrap').css({ 'height': $(window).height() - pageetc });

        $(window).on('resize', function() {

            $('.content-wrap').css({ 'height': $(window).height() - pageetc });

        });
    }
}

/* -------------------------------
        Table Height
/* ----------------------------- */
function tableHeight() {

    "use strict";

    if ($(window).width() > 767) {

        var pageetc = 425;

        $('.table-scroll').css({ 'height': $(window).height() - pageetc });

        $(window).on('resize', function() {

            $('.table-scroll').css({ 'height': $(window).height() - pageetc });

        });
    }
}
/* -------------------------------
        Date Tables
/* ----------------------------- */
function dataTables() {

    "use strict";

    $('.sampledatatable').DataTable();

}

/* -------------------------------
        Date Picker
/* ----------------------------- */
function datePicker() {


    $('div[data-provide="datepicker"]').bootstrapDP({
        format: "dd/mm/yyyy",
        autoclose: "true"
    });

    $('div[data-provide="datepickercurrent"]').bootstrapDP({
        format: "dd/mm/yyyy",
        autoclose: "true",
        endDate: "today"
    });

    $('div[data-provide="datepickercurrentonly"]').bootstrapDP({
        format: "dd/mm/yyyy",
        autoclose: "true",
        endDate: "today"
        // startdate: "today",
        // endDate: "today"
        // maxDate: '0'
        //setDate: new Date()
    });

    // $('div[data-provide="datepickerrange"]').daterangepicker({
    //                                 locale: {
    //                                     format: 'DD/MM/YYYY'
    //                                 }
    // });


}

/* -------------------------------
        Date Range Picker
/* ----------------------------- */
function dateRangePicker() {
    $('.daterange').daterangepicker({
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear',
            format: "DD-MM-YYYY"
        }
    });

    $('.align-left.daterange').daterangepicker({
        autoUpdateInput: false,
        "opens": "left",
        locale: {
            cancelLabel: 'Clear',
            format: "DD-MM-YYYY"
        }
    });

    $('.daterange').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('DD-MM-YYYY') + ' to ' + picker.endDate.format('DD-MM-YYYY'));
    });

    $('.daterange').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
}

/* -------------------------------
        Date Time Picker
/* ----------------------------- */
function dateTime() {
    $(function() {
        $('.timepicker').datetimepicker({
            /* format: 'LT'*/
            format: 'HH:mm'
        });
    });
}

/* -------------------------------
        Alter Error
/* ----------------------------- */
function alterError() {
    $("input[type=submit]").on("click", function() {
        setTimeout(function() { check_error() }, 100);
    });

    function check_error() {
        if ($(".master_0").hasClass("error")) {
            $(".alter-error").addClass("in");

        } else {
            $(".alter-error").removeClass("in");
        }
    }
}

/* -------------------------------
        Toggle Icon
/* ----------------------------- */
function toggleIcon() {
    $("#toggle-btn").click(function() {
        if ($('.navbar-toggle').hasClass('open')) {
            $('.navbar-toggle').removeClass('open');
        } else {
            $('.navbar-toggle').addClass('open');
        }
    });
}

/* -------------------------------
        Break Word
/* ----------------------------- */
function breakWord() {
    $(document).on('mouseover', ".break_word", function() {
        var $this = $(this);
        if (this.offsetWidth < this.scrollWidth && !$this.attr('title')) {
            $this.tooltip({
                title: $this.text(),
                placement: "top"
            });
            $this.tooltip('show');
        }
    });
    //    $('.break_word').css('width',$('.break_word').parent().width());
}

/* -------------------------------
        Forgot Button
/* ----------------------------- */
function forgotForm() {
    $("#forgot-link").click(function() {
        if ($('.forgot-form').hasClass('open')) {
            $('.forgot-form').removeClass('open');
        } else {
            $('.forgot-form').addClass('open');
            $('.form-minimal').addClass('form-close');
        }
    });
    $("#btn-forgot").click(function() {
        if ($('.forgot-form').hasClass('open')) {
            $('.forgot-form').removeClass('open');
            $('.form-minimal').removeClass('form-close');
        }
    });

    $("#btn-back").click(function() {
        if ($('.confirmation-form').hasClass('open')) {
            $('.confirmation-form').removeClass('open');
            $('.forgot-form').removeClass('form-close');
            $('.forgot-form').addClass('open');
        }
    });

    $("#btn-cancel").click(function() {
        $('.password-form').removeClass('open');
        $('.confirmation-form').removeClass('open');
        $('.confirmation-form').removeClass('form-close');
        $('.forgot-form').removeClass('open');
        $('.forgot-form').removeClass('form-close');
        $('.form-minimal').removeClass('form-close');
    });
}
/* -------------------------------
        Fancy Box View
/* ----------------------------- */
function fancyBox() {
    $('[data-fancybox="images"]').fancybox({
        buttons: [
            'download',
            'thumbs',
            'close'
        ]
    });
}

/* -------------------------------
        Next Tab
/* ----------------------------- */
function nextTab() {
    $('.btn-next-one').click(function() {
        $('.tab-two').addClass('active');
        $('.tab-two').parent().addClass('active');
        $('.tab-one').removeClass('active');
        $('.tab-one').parent().removeClass('active');
        $('.btn-next-two').css("display", "inline-block");
        $(this).addClass('btn-tab-next');
        $('.btn-next-one').css("display", "none");
        $('.btn-next-last').css("display", "none");
    });
    $('.btn-next-two').click(function() {
        $('.tab-three').addClass('active');
        $('.tab-three').parent().addClass('active');
        $('.tab-two').removeClass('active');
        $('.tab-two').parent().removeClass('active');
        $(this).css("display", "none");
        $('.btn-next-three').css("display", "inline-block");
        $('.btn-next-one').css("display", "none");
        $('.btn-next-two').css("display", "none");
        $('.btn-next-last').css("display", "inline-block");
    });
    $('.btn-nxt').on("click", function() {
        $('.editDetails-tabs li.active').next().children('a').trigger("click");
        tabPaneFooter();
    });
    $('.btn-prev').on("click", function() {
        $('.editDetails-tabs li.active').prev().children('a').trigger("click");
        tabPaneFooter();
    });
    $('.btn-pills').on("click", function() {
        tabPaneFooter();
    });
}

/* -------------------------------
        Tap Pane Footer Width
/* ----------------------------- */
function tabPaneFooter() {
    setTimeout(function() {
        "use strict";
        if ($('.page-main-content').hasClass('type2')) {
            var page_etc = 0;
            $('.tab-pane-footer').css({ 'margin-left': page_etc });
        } else {
            if ($(window).width() > 750) {
                var pageetc = 30;
                $('.tab-pane-footer').css({ 'width': $('.page-main-content').width() + pageetc });
                $(window).on('resize', function() {
                    $('.tab-pane-footer').css({ 'width': $('.page-main-content').width() + pageetc });
                });
            }
        }
    }, 200);
}



/* -------------------------------
        Table Responsive Action 
/* ----------------------------- */
function tableResponsiveAction() {
    $(".tableresp").on('click', '.dropdown-toggle', function(event) {
        if ($('.dropdown-menu').length) {
            var elm = $('.dropdown-menu'),
                docHeight = $(document).height(),
                docWidth = $(document).width(),
                btn_offset = $(this).offset(),
                btn_width = $(this).outerWidth(),
                btn_height = $(this).outerHeight(),
                elm_width = elm.outerWidth(),
                elm_height = elm.outerHeight(),
                table_offset = $(".tableresp").offset(),
                table_width = $(".tableresp").width(),
                table_height = $(".tableresp").height(),

                tableoffright = table_width + table_offset.left,
                tableoffbottom = table_height + table_offset.top,
                rem_tablewidth = docWidth - tableoffright,
                rem_tableheight = docHeight - tableoffbottom,
                elm_offsetleft = btn_offset.left,
                elm_offsetright = btn_offset.left + btn_width,
                elm_offsettop = btn_offset.top + btn_height,
                btn_offsetbottom = elm_offsettop,

                left_edge = (elm_offsetleft - table_offset.left) < elm_width,
                top_edge = btn_offset.top < elm_height,
                right_edge = (table_width - elm_offsetleft) < elm_width,
                bottom_edge = (tableoffbottom - btn_offsetbottom) < elm_height;

            console.log(tableoffbottom);
            console.log(btn_offsetbottom);
            console.log(bottom_edge);
            console.log((tableoffbottom - btn_offsetbottom) + "|| " + elm_height);
            // console.log(elm_width + " element width");              
            // console.log(elm_height + " element height");

            // console.log(table_width + " table width");
            // console.log(table_offset.left + " table offset left");
            // console.log(tableoffright + " table offright");
            // console.log(docWidth + " document width");
            // console.log(rem_tablewidth + " rem table width");

            // console.log(docHeight + " doc height");
            // console.log(table_height + " table height");
            // console.log(table_offset.top + " table offset top");
            // console.log(tableoffbottom + " table offbottom");
            // console.log(rem_tableheight + " rem table height");

            // console.log(btn_offset.left + " btn offset left");
            // console.log(btn_offset.top + " btn offset top");

            var table_offset_bottom = docHeight - (table_offset.top + table_height);
            // console.log(table_offset_bottom + " table_offset_bottom");

            var touchTableBottom = (btn_offset.top + btn_height + (elm_height * 2)) - table_offset.top;
            // console.log(touchTableBottom + " touchTableBottom");
            // console.log(table_height + " table_height");
            // console.log(btn_height + " btn_height");
            // console.log(elm_height + " elm_height");

            var bottomedge = touchTableBottom > table_offset_bottom;

            if (left_edge) {
                $(this).addClass('left-edge');
            } else {
                $('.dropdown-menu').removeClass('left-edge');
            }
            if (bottom_edge) {
                $(this).parent().addClass('dropup');
                // $(this).parent().removeClass('dropdown');
            } else {
                $(this).parent().removeClass('dropup');
                // $(this).parent().addClass('dropdown');
            }

        }
    });
    //use if table height is below 300
    setTimeout(function() {
        var table_smallheight = $('.tableresp'),
            positioning = table_smallheight.parent();

        if (table_smallheight.height() < 160) {
            positioning.addClass('positioning');
            /* $('.tableresp .dropdown').css('position','static');
            $('.tableresp .dropup').css('position','static'); */
        } else {
            positioning.removeClass('positioning');
            $('.tableresp .dropdown,.tableresp .dropup').css('position', 'relative');
        }
    }, 3200);
}

/* -------------------------------
        Tab Pane Footer Overflow 
/* ----------------------------- */
function tabPaneFooterScroll() {
    setTimeout(function() {
        "use strict";
        if ($(window).width() > 750) {
            var scroll_value = $('.tab-pane-footer').height();
            if (scroll_value > 60) {
                scroll_value = scroll_value - 60
            }
            $('.tab-pane-scroll').css({ 'margin-top': scroll_value });
            $(window).on('resize', function() {
                $('.tab-pane-scroll').css({ 'margin-top': scroll_value });
            });
        }
    }, 200);
}

/* -------------------------------
        Match Height 
/* ----------------------------- */
function matchHeight() {
    setTimeout(function() {
        var heights = new Array();
        // Loop to get all element Widths
        $('.match-height').each(function() {
            // Need to let sizes be whatever they want so no overflow on resize
            /* $(this).css('min-width', '0');
            $(this).css('max-width', 'none');
            $(this).css('width', 'auto'); */
            // Then add size (no units) to array
            heights.push($(this).height());
        });
        // Find max Width of all elements
        var max = Math.max.apply(Math, heights);
        // Set all Width to max Width
        $('.match-height').each(function() {
            $(this).css('height', max + 'px');
            // Note: IF box-sizing is border-box, would need to manually add border and padding to Width (or tallest element will overflow by amount of vertical border + vertical padding)
        });
    }, 2000);
}

function custom_noty(noty_type, msg) {
    new Noty({
        type: noty_type,
        layout: 'topRight',
        timeout: 3000,
        text: msg
    }).show();
}

/* -------------------------------
        Reset Tooltip
/* ----------------------------- */
$(document).on('mouseover', ".reset-tooltip", function() {
    var $this = $(this);
    $this.tooltip({
        title: 'Refresh',
        placement: "top"
    });
    $this.tooltip('show');
});
