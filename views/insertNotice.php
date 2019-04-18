<?php
$this->load->view('header'); 
$this->load->helper('url');
$base = base_url() . index_page();
?>

<h1 class="center-text">Create Notice</h1>
<form id="form1" name="form1" method="post" enctype="multipart/form-data"  action="<?php echo "$base/Notice/insertNotice"; ?>">
  <p>
    <label for="shortDescription">shortDescription</label>
    <input type="text" name="shortDescription" id="shortDescription" />
  </p>
  <p>
    <label for="longDescription">Long Description</label>
    <textarea name="longDescription" id="longDescription" cols="45" rows="5"></textarea>
  </p>
  <p>
    <label for="userfile">Image</label>
	<input name="userfile" type="file" id="userfile" size="45" />
  </p>
  <p>
    <label for="area">Area</label>
    <input type="text" name="area" id="area" />
  </p>
  <p>
    <label for="dateExp">DateExp</label>
    <input type="text" name="dateExp" id="dateExp" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
</form>
<?php
$this->load->view('footer'); 
?>