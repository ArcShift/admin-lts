Word JS
<script src="<?php echo base_url(); ?>/asset/js/doc2html.min.js"></script>
<div id="a"></div>
<script>
    $(document).ready(function () {
        docx2html = require('docx2html');
        docx2html("D:\\xampp\\htdocs\\admin-lte\\asset\\document\\ABCDEF.docx", {container: document.getElementById('a')}).then(function (html) {
            html.toString();
            console.log('ok');
            console.log(html.toString());
            h2=html;
        })
    });

</script>
