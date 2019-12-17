<!-- JQuery -->
<script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="/js/popper.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="/js/mdb.min.js"></script>
<!-- DataTables -->
<!--script type="text/javascript" src="/js/addons/datatables.js"></script>
<script type="text/javascript" src="/js/addons/datatables-select.js"></script-->
<!-- loader -->
<script type="text/javascript" src="/js/loader.js"></script>


<!-- scrollup -->
<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script ???????????? -->
<script type="text/javascript" src="/js/scrollup.js"></script>

<!-- ckeditor -->
<script src="/plugins/ckeditor/ckeditor.js"></script>
<script src="/plugins/ckfinder/ckfinder.js"></script>
<script src="/js/myscript/ckeditor.js"></script>



<!-- MyScript -->
<script type="text/javascript" src="/js/myscript/card-sorting.js"></script>
<script type="text/javascript" src="/js/myscript.js"></script>


<script>
    // Tooltips Initialization
    $(function () {
        $('.material-tooltip').tooltip()
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $(function () {
        $('.material-tooltip-main').tooltip({
            template: '<div class="tooltip md-tooltip-main"> <div class = "tooltip-arrow md-arrow" > < /div> <div class = "tooltip-inner md-inner-main" > < /div> </div>'
        });
    });
</script>

<script>
    // Add-more
    $(document).ready(function() {
        $(".add-more").click(function () {
            var html = $(".copy-fields").html();
            $(".after-add-more").after(html);
        });
        $("body").on("click", ".remove", function () {
            $(this).parents(".control-group").remove();
        });
    });
</script>
