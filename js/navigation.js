
$(window).on('scroll', function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 50) {
        $(".forsticky").addClass("sticky");
    } else {
        $(".forsticky").removeClass("sticky");
        $(".forsticky").addClass("");
    }
});
$('.menu-dental-openmenu').on('click', function () {
    $('.responsive-header-main').addClass('active');
    $('.responsive-dental-opened').slideDown();
    $('.menu-dental-closemenu').removeClass('active')
    $(this).addClass('active');
});
$('.menu-dental-closemenu').on('click', function () {
    $('.responsive-header-main').removeClass('active');
    $('.responsive-dental-opened').slideUp();
    $('.menu-dental-openmenu').removeClass('active')
    $(this).addClass('active');
});
function getScrollbarWidth() {
    return window.innerWidth - document.documentElement.clientWidth;
}  
var style = document.createElement('style');
style.innerHTML = `
.modal-open header.stick-top.forsticky {
    width: calc(100% - `+getScrollbarWidth()+`px) !important;
}
.modal-open .main {
    padding-right: `+getScrollbarWidth()+`px !important;
}
.modal-open .breadcrumb {
    padding-right: `+getScrollbarWidth()+`px !important;
}
`;
document.head.appendChild(style);