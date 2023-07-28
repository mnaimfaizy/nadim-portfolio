<?php 
$_conn = mysqli_connect('localhost','root','','date');
if (!$_conn) {
	die("conntion failed" .myslqi_connect_error());
}
?>

<?php
function card_(){
		$sql = "select * from user_reg";
		$result = mysqli_num_rows($_conn, $sql);
	
	echo '
		<div class="card mb-3" style="max-width: 100%;">
<div class="row g-0">
	 <div class="col-md-4 pro_img">
				<img src="./files/img/ans.png" class="img-fluid rounded-start" alt="">
		</div>
		<div class="col-md-8">
				<div class="card-body">

					<p class="pro_text">Name Lastname</p>
					<p class="pro_text">City </p>
					<p class="pro_text">Something </p>
					<p>Favourite qoute</p>
					<ul class="pro_ul">
					 <li class="pro_li"><a href="#">More</a></li>
					 <li class="pro_li"><a href="#">Follow</a></li>
					 <li class="pro_li"><a href="#">Next</a></li>
					 <li class="pro_li"><a href="#">Messege</a></li>
					 <li class="pro_li"><a href="#">Report</a></li>
					</ul>
					        
					</div>
		</div>
</div>
</div>
	';
}


 ?>




