jQuery(document).ready(function ($) {
    $('.popupCloseButton').on('click', function () {
        $('.vejledning-form').hide();
    })
});

jQuery(document).ready(function ($) {
    $('#submitBtn2').on('click', function () {
        $('.vejledning-form').hide();
    })
});

function erSynlig(elementClass) {
    const elementBoks = document.getElementByClass(vejledning-form).getBoundingClientRect();
    const halvtredsPct = elementBoks.height * 0.5;
    const start = window.innerHeight - halvtredsPct;

    if (elementBoks.top <= start && elementBoks.bottom - halvtredsPct > 0) {
        return true;
    } else {
        return false;
    }

}
