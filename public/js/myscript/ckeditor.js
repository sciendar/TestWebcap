// ckeditor
$(document).ready(function(){
    CKEDITOR.config.toolbar = [ // Настройки тулбара редактора

        { name: 'clipboard', items: [

                'Paste', '-', 'pastefromword',//'Copy',
                'Undo', 'Redo', '-',
                'Bold', 'Italic', '-',
                'Subscript', 'Superscript', '-',//????
                'JustifyLeft', 'JustifyCenter','JustifyRight','JustifyBlock','-',//???
                'NumberedList', 'BulletedList', 'Outdent', 'Indent','-',
                'Link', 'Unlink', '-',
                //'TextColor','BGColor',//????
                'Image', 'Table', 'HorizontalRule', 'SpecialChar', '-',
                'Maximize',
            ] },


        // '/',

        // { name: 'my_styles', items: [
        //        'pastefromword','smiley'
        //    ] }
    ];

    var editor = CKEDITOR.replaceAll();
    CKFinder.setupCKEditor( editor );
})
