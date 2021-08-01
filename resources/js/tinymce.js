require('tinymce');
require('tinymce/themes/silver');

require('tinymce/icons/default');

require('tinymce/plugins/advlist');
require('tinymce/plugins/autolink');
require('tinymce/plugins/lists');
require('tinymce/plugins/link');
require('tinymce/plugins/image');
require('tinymce/plugins/charmap');
require('tinymce/plugins/print');
require('tinymce/plugins/preview');
require('tinymce/plugins/anchor');
require('tinymce/plugins/searchreplace');
require('tinymce/plugins/visualblocks');
require('tinymce/plugins/code');
require('tinymce/plugins/codesample');
require('tinymce/plugins/fullscreen');
require('tinymce/plugins/insertdatetime');
require('tinymce/plugins/media');
require('tinymce/plugins/table');
require('tinymce/plugins/paste');
require('tinymce/plugins/imagetools');

var directionality = "ltr";

function init_tinymce(selector, min_height) {
    var menu_bar = 'file edit view insert format tools table help';
    if (selector == '.tinyMCEQuiz') {
        menu_bar = false;
    }
    tinymce.init({
        selector: selector,
        height: min_height,
        valid_elements: '*[*]',
        relative_urls: false,
        remove_script_host: false,
        directionality: directionality,
        language: 'en',
        menubar: menu_bar,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code codesample fullscreen",
            "insertdatetime media table paste imagetools"
        ],
        toolbar: 'fullscreen code preview | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | numlist bullist | forecolor backcolor removeformat | image media link | outdent indent',
        content_css: ['../../assets/plugins/tinymce/editor_content.css'],
    });
    tinymce.DOM.loadCSS('../../assets/plugins/tinymce/editor_ui.css');
}

if ($('.tinyMCE').length > 0) {
    init_tinymce('textarea.tinyMCE', 500);
}
if ($('.tinyMCEsmall').length > 0) {
    init_tinymce('textarea.tinyMCEsmall', 300);
}
if ($('.tinyMCEQuiz').length > 0) {
    init_tinymce('textarea.tinyMCEQuiz', 200);
}