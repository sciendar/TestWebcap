// maskForm
$(document).ready(function() {
    $('input[name*="date"]').inputmask('9999.99.99',{ "placeholder": "гггг.мм.дд" });
    $('input[name*="phone"]').inputmask('(999) 999-99-99',{ "placeholder": "x" });
});
