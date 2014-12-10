<?php
session_start();
if($_SESSION['uame']=="")
{
	header('location: ../login.php');
}
include_once("dbconnect.php");
$page_name = basename($_SERVER['PHP_SELF']); /* Returns The Current PHP File Name */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SVS Express Courier services</title>
</head>
<body style="margin-top:0px;">
<table width="900" align="center" border="0" cellpadding="10" cellspacing="0" style="border:solid 1px skyblue; font-family:Arial, Helvetica, sans-serif; color:#FFF; font-size:12px;">
	<tr height="30" bgcolor="skyblue">
		<td>
        	<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
	            <tr height="30">
                	<td align="center" <?php if($page_name == "index.php"){ ?> bgcolor="#666666" <?php } ?>><a href="index.php" style="text-decoration:none; color:#FFF;">Create User</a></td>
					<td align="center" <?php if($page_name == "add_new_item.php"){ ?> bgcolor="#666666" <?php } ?>><a href=" add_new_item.php" style="text-decoration:none; color:#FFF;">Add New Item</a></td>
					<td align="center" <?php if($page_name == "additem.php"){ ?> bgcolor="#666666" <?php } ?>><a href="additem.php" style="text-decoration:none; color:#FFF;">Add Items</a></td>
					<td align="center" <?php if($page_name == "edititem.php"){ ?> bgcolor="#666666" <?php } ?>><a href="edititem.php" style="text-decoration:none; color:#FFF;">Edit Item</a></td>
					<!-- <td align="center" ><a href="status.php" style="text-decoration:none; color:#FFF;">Delivery</a></td>  -->
					
					<td align="center" <?php if($page_name == "status.php"){ ?> bgcolor="#666666" <?php } ?>><a href="status.php" style="text-decoration:none; color:#FFF;">Add Status</a></td>
					<td align="center" <?php if($page_name == "editstatus.php"){ ?> bgcolor="#666666" <?php } ?>><a href="editstatus.php" style="text-decoration:none; color:#FFF;">Edit Status</a></td>
					
                    <td align="center" <?php if($page_name == "users.php"){ ?> bgcolor="#666666" <?php } ?>><a href="users.php" style="text-decoration:none; color:#FFF;">Users</a></td>
                    <td align="center" <?php if($page_name == "uploads.php"){ ?> bgcolor="#666666" <?php } ?>><a href="uploads.php" style="text-decoration:none; color:#FFF;">Upload File</a></td>
					
					<td align="center" <?php if($page_name == "pincodes_list.php"){ ?> bgcolor="#666666" <?php } ?>><a href="pincodes_list.php" style="text-decoration:none; color:#FFF;">Pincodes</a></td>
					
					<td align="center" <?php if($page_name == "upload_logo.php"){ ?> bgcolor="#666666" <?php } ?>><a href="upload_logo.php" style="text-decoration:none; color:#FFF;">Logos</a></td>
					
					<td align="center" <?php if($page_name == "cms.php"){ ?> bgcolor="#666666" <?php } ?>><a href="cms.php" style="text-decoration:none; color:#FFF;">CMS</a></td>
					<td align="center"><a href="logout.php" style="text-decoration:none; color:#FFF;">Logout</a></td>
                </tr>
            </table>
		</td>
	</tr>
