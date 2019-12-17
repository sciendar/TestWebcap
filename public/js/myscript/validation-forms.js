// Validation forms
$(document).ready(function() {
    $('select[required]:invalid').each(function(){
        $(this).closest('.select-wrapper').find('.select-dropdown').addClass('not-filled');
    });

    $('select').on('change',function(){
        if($(this).val() != '') {
            $(this).closest('.select-wrapper').find('.select-dropdown').removeClass('not-filled');
        }
    });

    setInterval(function(){
        $('select[required]:invalid', 'input[required]:invalid').each(function(){
            $(this).closest('.select-wrapper').find('.select-dropdown').addClass('not-filled');
        });
    },200);
});
