	


<h1>Page <?php echo $this->uri->segment(3)+1; ?></h1>
<?php echo $paging_link; ?>
<script>
    $(".paging").children().addClass("btn btn-primary");
    $(".paging strong").addClass("btn btn-primary active");
</script>
