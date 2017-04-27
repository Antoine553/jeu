<table id="table_message">
<?php
while($don = $message->fetch())
{
	if(pair($don['ID']))
	{
		$color = "";
	}
	else
	{
		$color = "#EDEDED";
	}



?>
<tr style="background-color:<?php echo $color; ?>">
	<td class="info_message" valign="top">
	<span style="font-size:small"><?php echo "De ".$don['Pseudo'];?></span></br>
	</td>
	<td class="message" >
	<div class="message2" >
	<?php echo $don['Message'];?>
	</div>	
	</td>

</tr>


<?php

}
?>
</table>