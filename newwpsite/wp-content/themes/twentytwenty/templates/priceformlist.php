<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" />
<div class="wrap">
<?php
	global $wpdb;
	$packagerequests = $wpdb->prefix . "packagerequests";
	$showlists = $wpdb->get_results( "SELECT * FROM $packagerequests ORDER BY id" );
?>
<h1 class="wp-heading-inline">Leads</h1>
<table class="table table-bordered wp-list-table widefat fixed striped table-view-list posts" id="orderTable">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Service</th>
      <th scope="col">Package</th>
	  <th scope="col">Status</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
	  <?php foreach ($showlists as $showlist) : ?>
	  <tr>
       <td><?php echo $showlist->name; ?> </td>
       <td><?php echo $showlist->email; ?> </td>
       <td><?php echo $showlist->service; ?> </td>	  
       <td><?php echo $showlist->package; ?> </td>
	   <td class="text-center">
		   <?php if($showlist->status) : ?>
			  <a  id="<?php echo $showlist->id ?>" onclick="changeStatusModal(this.id);" class="btn btn-sm shadow-lg bg-primary rounded text-white w-50 text-uppercase"><?php echo $showlist->status; ?></a>
		   <?php endif; ?>
	   </td>
	   <td>
		  <a type="button" class="btn btn-sm shadow-lg bg-info rounded text-white">Edit</a>
		  <a type="button" data-nonce="<?php echo wp_create_nonce('my_delete_post_nonce') ?>" id="<?php echo $showlist->id?>" class="btn btn-sm shadow-lg bg-danger rounded text-white" onclick="deleteOrder(this);">Delete</a>
	   </td>
	  </tr>
	 <?php endforeach; ?>
  </tbody>
</table>
</div>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script> 