<?php
$this->load->view('header'); 
$this->load->helper('url');
$base = base_url() . index_page();
$img_base = base_url();
?>

<h1 class="center-text">User Home Page</h1>
<p class="center-text">Hi <?php
$user = $this->session->userdata('user');
$n = $this->session->userdata('noticeData');
echo $user['FirstName']; ?></p>
<p class="center-text">
	<a href="<?php echo "$base/User/getUpdateDetails/" . $user['UserID']; ?>">Edit User Details</a>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="<?php echo "$base/Notice/doInsertNotice/"?>">Add Notice</a>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="<?php echo "$base/User/logout/"?>">Log out</a>
</p>

<?php
if(!$n==null){
?>
	<h2 class="center-text">Notices</h2>
	<table border="1">
		<th>Image</th>
        <th>Description</th>
        <th>area</th>
        <th>Actions</th>
<?php
		foreach ($n as $notice){
			echo "<tr>";
				echo "<td> <a href=\"$base/Notice/getDrillDownNotice/". 
					$notice['noticeId'] . "\"><img src=\"$img_base/assets/images/thumbs/". 
					$notice['largeImage']. "\" /> </a> </td>";
				echo "<td>" . $notice['shortDescription'] . "</td>";
				echo "<td>" . $notice['area'] . "</td>";
				echo "<td>	<a href=\"$base/Notice/doEditNotice/". $notice['noticeId'] . "\">Edit" ."<br>";
				echo "<a href=\"$base/Notice/deleteNotice/". $notice['noticeId'] . "\">Delete	</td>" ;  
			echo "</tr>";
		}
?>
	</table>
  <?php } ?>              

<?php
$this->load->view('footer'); 
?>