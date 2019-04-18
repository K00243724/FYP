<?php
$this->load->view('header'); 
$this->load->helper('url');
$base = base_url() . index_page();
?>

<h1 class="center-text">Quiz</h1>
<form id="form1" name="form1" method="post"  action="<?php echo "$base/User/insertResults"; ?>">
  <label>Ask question here</label>
  <p>
	<label>Beef:</label>
    <input type="radio" name="Beef" value="1">None</input>
	<input type="radio" name="Beef" value="2">Quarter</input>
	<input type="radio" name="Beef" value="3">More</input>
  </p>
    <p>
	<label>Chicken:</label>
    <input type="radio" name="Chicken" value="1">None</input>
	<input type="radio" name="Chicken" value="2">Quarter</input>
	<input type="radio" name="Chicken" value="3">More</input>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
</form>
<?php
$this->load->view('footer'); 
?>