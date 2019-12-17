// Material Select Initialization
$(document).ready(function() {
    $('.mdb-select').materialSelect();

    $('.mdb-select').on('change', function() {
        var inp = $(this).parent(".mdb-select").find('input');
        if (inp.val() != undefined) {
            inp.css('color', '#673ab7');
        }
    });
});
