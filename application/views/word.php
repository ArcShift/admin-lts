<form name="formUpload" method="POST" enctype="multipart/form-data">
    <input type="file" name="word" value="" />
    <input type="submit" value="submit" name="submit" />
</form>
<?php echo isset($data)? $data['status_text']:null; ?>
<?php // echo isset($data)? print_r($data['file']['file_name']):null; ?>