<?php include("header.php");
include("dbconnection.php");
?>


	

		<div id="featured">
			<div class="container">
				<div class="row">
				<?php include("leftsidebar.php");
?>
					
							<div class='9u'  >
                              <?php
							  $sql = "SELECT * FROM article where article_id='$_GET[articleid]'";
							  $qsql = mysqli_query($con,$sql);
							  while($rs = mysqli_fetch_array($qsql))
							  {
								echo "<section><header ><h2><u>$rs[title]</u></h2><strong><p>Published on $rs[publish_date]</p></strong>";
if($rs[article_img1] != "" && file_exists('imgarticle/'.$rs[article_img1]))
{
echo "<img src='imgarticle/$rs[article_img1]' align='left' style='padding-right: 10px;width: 100%;'>";
}
								echo "<p>" . $rs[article_description] . "</p>";
if($rs[article_img2] != "" && file_exists('imgarticle/'.$rs[article_img2]))
{
echo "<img src='imgarticle/$rs[article_img2]' align='left' style='padding-right: 10px;width: 100%;'>";
}
if($rs[article_img3] != "" && file_exists('imgarticle/'.$rs[article_img3]))
{
echo "<img src='imgarticle/$rs[article_img3]' align='left' style='padding-right: 10px;width: 100%;'>";
}
if($rs[article_img4] != "" && file_exists('imgarticle/'.$rs[article_img4]))
{
echo "<img src='imgarticle/$rs[article_img4]' align='left' style='padding-right: 10px;width: 100%;'>";
}
if($rs[article_img5] != "" && file_exists('imgarticle/'.$rs[article_img5]))
{
echo "<img src='imgarticle/$rs[article_img5]' align='left' style='padding-right: 10px;width: 100%;'>";
}
								echo "
								
								</header></section>";
							  }
							  ?>
								
						</div>
						
					
				</div>
			</div>
		</div>
	<?php include("footer.php");?>