<?php
$this->load->view('header'); 
$this->load->helper('url');
$img_base = base_url();
$base = base_url() . index_page();
$sd = $notice['shortDescription'];
$ld = $notice['longDescription'];
$area = $notice['area'];
$dateExp = $notice['dateExp'];
$image = $notice['largeImage'];
$firstname=$userNotice['FirstName'];
$surname=$userNotice['SurName'];
$mobile=$userNotice['Mobile']; 		
?>

<h2 class="center-text">Notice</h2>
<form id="form1" name="form1" >
  <p>
    <label for="shortDescription">shortDescription</label>
    <input type="text" name="shortDescription" id="shortDescription" value="<?php echo $sd ?>" readonly />
  </p>
  <p>
    <label for="longDescription">Long Description</label>
    <textarea name="longDescription" id="longDescription"  readonly cols="45" rows="5"><?php echo $ld ?></textarea>
  </p>
  <p>
	<img width="300" src="<?php echo $img_base . "assets/images/notices/$image"?>">
  </p>
  <p>
    <label for="area">Area</label> 
    <input type="text" name="area" id="area" value="<?php echo $area?>" readonly />
  </p>
  <p>
    <label for="dateExp">DateExp</label>
    <input type="text" name="dateExp" id="dateExp" value="<?php echo $dateExp ?>" readonly />
  </p>
 <p>
    <label for="FirstName">First Name</label>
    <input type="text" name="FirstName" id="FirstName" value ="<?php echo $firstname?>" readonly />
  </p>
  <p>
    <label for="Surname">Surname</label>
    <input type="text" name="Surname" id="Surname" value ="<?php echo $surname ?>" readonly />
  </p>
  <p>
    <label for="Mobile">Mobile</label>
    <input type="text" name="Mobile" id="Mobile" value ="<?php echo $mobile?>" readonly />
  </p>
  <p>
</form>

<?php
$this->load->view('footer'); 
?>