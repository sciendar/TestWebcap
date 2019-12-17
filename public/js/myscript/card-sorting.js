var $btns = $('.eventSelect').click(function() {
    if (this.id == 'all') {
        $('#event > div').fadeIn(450);
    } else {
        var $el = $('.' + this.id).fadeIn(450);
        $('#event > div').not($el).hide();
    }
    $btns.removeClass('active');
    $(this).addClass('active');
})
