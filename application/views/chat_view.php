<div class="box box-primary direct-chat direct-chat-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Chat</h3>
    <div class="box-tools pull-right">
      <span data-toggle="tooltip" title="3 New Messages" class="badge bg-light-blue">3</span>
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
      <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
	<i class="fa fa-comments"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <!-- Conversations are loaded here -->
    <div class="direct-chat-messages">
      <!-- Message. Default to the left -->
      <div class="direct-chat-msg">
	<div class="direct-chat-info clearfix">
	  <span class="direct-chat-name pull-left">Alexander Pierce</span>
	  <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
	</div>
	<!-- /.direct-chat-info -->
	<img class="direct-chat-img" src="<?php echo base_url(); ?>asset\AdminLTE\dist\img\avatar04.png" alt="Message User Image"><!-- /.direct-chat-img -->
	<div class="direct-chat-text">
	  Is this template really for free? That's unbelievable!
	</div>
	<!-- /.direct-chat-text -->
      </div>
      <!-- /.direct-chat-msg -->

      <!-- Message to the right -->
      <div class="direct-chat-msg right">
	<div class="direct-chat-info clearfix">
	  <span class="direct-chat-name pull-right">Sarah Bullock</span>
	  <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
	</div>
	<!-- /.direct-chat-info -->
	<img class="direct-chat-img" src="<?php echo base_url(); ?>asset\AdminLTE\dist\img\avatar04.png" alt="Message User Image"><!-- /.direct-chat-img -->
	<div class="direct-chat-text">
	  You better believe it!
	</div>
	<!-- /.direct-chat-text -->
      </div>
      <!-- /.direct-chat-msg -->
    </div>
    <!--/.direct-chat-messages-->

    <!-- Contacts are loaded here -->
    <div class="direct-chat-contacts">
      <ul class="contacts-list">
	<li>
	  <a href="#">
	    <img class="contacts-list-img" src="<?php echo base_url(); ?>asset\AdminLTE\dist\img\avatar04.png" alt="User Image">

	    <div class="contacts-list-info">
	      <span class="contacts-list-name">
		Count Dracula
		<small class="contacts-list-date pull-right">2/28/2015</small>
	      </span>
	      <span class="contacts-list-msg">How have you been? I was...</span>
	    </div>
	    <!-- /.contacts-list-info -->
	  </a>
	</li>
	<!-- End Contact Item -->
      </ul>
      <!-- /.contatcts-list -->
    </div>
    <!-- /.direct-chat-pane -->
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    <form action="#" id="form-write-message" method="post">
      <div class="input-group">
	<input type="text" name="message" id="input-write-message" placeholder="Type Message ..." class="form-control">
	<span class="input-group-btn">
	  <button type="submit" class="btn btn-primary btn-flat">Send</button>
	</span>
      </div>
    </form>
  </div>
  <!-- /.box-footer-->
</div>
<?php echo $_SERVER['REMOTE_ADDR'];?>
<script>
  $(document).ready(function () {
    $('#form-write-message').on('submit', function (e) {
      e.preventDefault();//no refresh
      console.log('submit');
      $(".direct-chat-msg:last-child").clone(true).appendTo(".direct-chat-messages");
      $.ajax({
	type: 'POST',
	url: "chat/send/" + $("#input-write-message").val(),
	dataType: 'json',
	success: function (result) {
	  console.log(result);
//	  $(".direct-chat-msg").clone().appendTo(".box-body");
	  
	  
//	  direct-chat-msg right
	}
      });
    });
  });
</script>
