<?php
/* Smarty version 3.1.28, created on 2018-06-06 16:16:29
  from "/var/www/html/spframe/app/views/sms/fdlist.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5b17985d37a466_13027314',
  'file_dependency' => 
  array (
    'ca31169efe7d8eeb5cbd1a6cda19941fea4aa492' => 
    array (
      0 => '/var/www/html/spframe/app/views/sms/fdlist.html',
      1 => 1528272987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b17985d37a466_13027314 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="/source/client/template/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="container">
		
		<table class="table table-hover">
		   <thead>
			  <tr>
				 <th>姓名<?php echo $_smarty_tpl->tpl_vars['xx']->value;?>
</th>
				 <th>联系电话</th>
				 <th>城市</th>
				 <th>区</th>
				 <th>详细地址 	</th>
			  </tr>
		   </thead>		
			<?php echo '<?php
			';?>while($row = mysql_fetch_array($query)){
			<?php echo '?>';?>
			<tr>
				<td><?php echo '<?php ';?>echo "-----------"; <?php echo '?>';?></td>		
			</tr>
			<?php echo '<?php
			';?>}
			<?php echo '?>';?>
		</table>
	</div>
</body>
</html>
<?php }
}
