<?php
/* Smarty version 3.1.28, created on 2018-06-06 17:22:23
  from "/var/www/html/spframe/app/views/fdlist.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5b17a7cfded581_63800153',
  'file_dependency' => 
  array (
    'd9bfc9734cacbd1b95b3916031172f2c80f2c541' => 
    array (
      0 => '/var/www/html/spframe/app/views/fdlist.html',
      1 => 1528276677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b17a7cfded581_63800153 ($_smarty_tpl) {
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
				 <th>姓名</th>
				 <th>联系电话</th>
				 <th>城市</th>
				 <th>区</th>
				 <th>详细地址 </th>
			  </tr>
		   </thead>		
			<?php
$_from = $_smarty_tpl->tpl_vars['xx3']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_0_saved_item = isset($_smarty_tpl->tpl_vars['foo']) ? $_smarty_tpl->tpl_vars['foo'] : false;
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable();
$__foreach_foo_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_foo_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$__foreach_foo_0_saved_local_item = $_smarty_tpl->tpl_vars['foo'];
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['client_name'];?>
</td>	
				<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['client_mob'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['client_province'];?>
</td>	
				<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['client_city'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['client_addr'];?>
</td>				
			</tr>
			<?php
$_smarty_tpl->tpl_vars['foo'] = $__foreach_foo_0_saved_local_item;
}
}
if ($__foreach_foo_0_saved_item) {
$_smarty_tpl->tpl_vars['foo'] = $__foreach_foo_0_saved_item;
}
?>
		</table>
	</div>
</body>
</html>
<?php }
}
