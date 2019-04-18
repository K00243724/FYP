<?php
$this->load->view('header'); 
$this->load->helper('url'); 
$base = base_url() . index_page();
$img_base = base_url();
$n = $this->session->userdata('AllNoticeData');
$countdivs = -1;
?>

 <!--<div> <img id='fowl' src ="<?php echo $img_base."/assets/images/notices/rat.PNG"?>" alt="fowl"></div>-->
 
<?php
if(!$n==null){ ?>
	<?php foreach($n as $notice){
		$countdivs++;
		 if ($countdivs%4 == 0){
			 echo "<div class ='firstdiv'>";
		 }
		 else{
			 echo"<div class='floatdiv'>";
		 }   
		   
			echo"<a href=\"$base/Notice/getDrillDownAndUser/".$notice['noticeId']."\"><img id='reportImg'
			     src=\"$img_base/assets/images/thumbs/".$notice['largeImage']. "\" alt='fowl' /></a>";
			
			echo"<br>";	
			
			echo "<div id='head1>";
			
				echo $notice['dateUploaded'];
			
			echo"</div>";
			
			echo "<div id='head2>";
			    echo $notice['dateUploaded'];
				echo"<br>";
				echo $notice['area'];
				echo"<br>";
				echo $notice['longDescription'];
				echo"<br>";
			
			echo"</div>";
			
			echo "<div id='head3>";
			
				echo $notice['longDescription'];
				
			echo"</div>";
			
		echo"</div>";



	
 } ?> 
<?php } ?> 

<?php
$this->load->view('footer'); 
?>