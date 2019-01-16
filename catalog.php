<html>
<head>
<title>Poetry Home & Decor Studio</title>
	
<link rel="shortcut icon" href="img/icon.png"  type="image/x-icon">
<style>
table{
	border-collapse:collapse;
	border:1px solid black;
}
</style>
</head>
<body>

<?php
   
    // Loading the XML file
  $xml = simplexml_load_file("product.xml");
  echo "<h1 style=text-align:Center;margin-top:50px;> Product ".$xml->getName()."</h1>";
 
 ?>
 <?php
 //menampilkan semua item urut
  foreach($xml->children() as $product)
    {    
        if($product->status == '2')
							{
								$status='On Sale';?>
								<table style="margin-left:100px;margin-right:100px;margin-top:10px"">
								<td style="padding-right:100px;padding-left:50px">
								<?php
								echo "<a href='$product->tn_img_url' target='_blank'><img src=".$product->tn_img_url."></a><br />";
								echo "<h4 style='text-align:center;font-style:italic;'>".$product->name."</h4><br />";
								?>
								</td>
								<td style="padding-right:50px;">
								<?php
								echo "Name : ".$product->short_desc."<br />";
								echo "Description : ".$product->long_desc." <br />";
								echo "Quantity : ".$product->quantity." <br />";
								echo "Price : IDR ".$product->price." <br />";
								echo "Discount : ".$product->discount." <br />";
								echo "<p style='color:green;'> Status :".$status."</p><br />";		
								?>
								</td>
								</table>										
	<?php						

							}
	}
	foreach($xml->children() as $product)
    {
		if ($product->status == '1')
							{
								$status='Dijual';?>
								<table style="margin-left:100px;margin-right:100px;margin-top:10px"">
								<td style="padding-right:100px;padding-left:50px">
								<?php
								echo "<a href='$product->tn_img_url' target='_blank'><img src=".$product->tn_img_url."></a><br />";
								echo "<h4 style='text-align:center;font-style:italic;'>".$product->name."</h4><br />";
								?>
								</td>
								<td style="padding-right:50px;">
								<?php
								echo "Name : ".$product->short_desc."<br />";
								echo "Description : ".$product->long_desc." <br />";
								echo "Quantity : ".$product->quantity." <br />";
								echo "Price : IDR ".$product->price." <br />";
								echo "Discount : ".$product->discount." <br />";
								echo "<p style='color:blue;'> Status :".$status."</p><br />";		
								?>
								</td>
								</table>	
	<?php
							}
	}
	foreach($xml->children() as $product)
    {
		if ($product->status == '0')
							{
								$status='Tidak Dijual';?>
								<table style="margin-left:100px;margin-right:100px;margin-top:10px"">
								<td style="padding-right:100px;padding-left:50px">
								<?php
								echo " <a href='$product->tn_img_url' target='_blank'><img src=".$product->tn_img_url."></a><br />";
								echo "<h4 style='text-align:center;font-style:italic;'>".$product->name."</h4><br />";
								?>
								</td>
								<td style="padding-right:50px;">
								<?php
								echo "Name : ".$product->short_desc."<br />";
								echo "Description : ".$product->long_desc." <br />";
								echo "Quantity : ".$product->quantity." <br />";
								echo "Price : IDR ".$product->price." <br />";
								echo "Discount : ".$product->discount." <br />";
								echo "<p style='color:red;'> Status :".$status."</p><br />";		
								?>
								</td>
								</table>
<?php								
							}
		
		
    }	
?>

</body>
</html>
