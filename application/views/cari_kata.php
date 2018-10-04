<form  id="form-cari" method="post" class="sidebar-form">
  <div class="input-group">
    <input type="text" id="kata" name="q" class="form-control " placeholder="Search...">
    <span class="input-group-btn">
      <button type="reset" name="search" id="hapus-pencarian" class="btn btn-flat"><i class="fa fa-times"></i></button>
      <button type="submit" name="search" id="cari" class="btn btn-flat"><i class="fa fa-search"></i>
      </button>
    </span>
  </div>
</form>
<table id="tbl" class="table table-bordered table-hover">
<!--  <thead>
  </thead>
  <tbody>
  </tbody>-->
</table>
<table id="example" class="display" width="100%"></table>
<script>
  $(document).ready(function () {
    $('#form-cari').on('submit', function (e) {
      e.preventDefault();//no refresh
      console.log('submit');
      console.log('cari: ' + $("#kata").val());
      $.ajax({
	type: 'POST',
	url: "kamus/cari/" + $("#kata").val(),
	dataType: 'json',
	success: function (result) {
//	$("#div1").html(result);
	  console.log(result)
	  if (typeof table !== 'undefined') {
	    table.destroy();
	  }
	  table = $('#tbl').DataTable({
	    data: result,
	    columns: [
	      {title: "Kata"}
	    ]
	  });
	}
      });
    });
  });

//  $(function () {
//    $('#tbl').DataTable();
//  });
//  $(function () {
//    $('#tbl').DataTable()
////    $('#example2').DataTable({
////      'paging'      : true,
////      'lengthChange': false,
////      'searching'   : false,
////      'ordering'    : true,
////      'info'        : true,
////      'autoWidth'   : false
////    })
////  })
</script>

