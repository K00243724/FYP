<?php
$this->load->view('header'); 
$this->load->helper('url');
$base = base_url() . index_page();
$img_base = base_url();

$user = $this->session->userdata('user');
$r = $this->session->userdata('resultData');

?>

<h1 class="center-text">Results</h1>

<?php
if(!$r==null){
?>
	<table>
		<th>Beef</th>
        <th>Chicken</th>
        <th>Pork</th>
        <th>Lamb</th>
		<th>Date</th>
<?php
		foreach ($r as $result){
			echo "<tr>";
				echo "<td>" . $result['Beef'] . "</td>";
				echo "<td>" . $result['Chicken'] . "</td>";
				echo "<td>" . $result['Pork'] . "</td>";
				echo "<td>" . $result['Lamb'] . "</td>";
				echo "<td>" . $result['Date'] . "</td>";
			echo "</tr>";
		}
?>
	</table>
  <?php } ?>              

<?php
$this->load->view('footer'); 
?>