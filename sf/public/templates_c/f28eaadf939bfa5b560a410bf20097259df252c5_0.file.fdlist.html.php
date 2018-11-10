<?php
/* Smarty version 3.1.28, created on 2018-06-13 17:29:30
  from "/var/www/html/sf/app/views/sms/fdlist.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5b20e3fa2512e4_28596738',
  'file_dependency' => 
  array (
    'f28eaadf939bfa5b560a410bf20097259df252c5' => 
    array (
      0 => '/var/www/html/sf/app/views/sms/fdlist.html',
      1 => 1528882168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20e3fa2512e4_28596738 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<link href="/sf/public/assert/css/style.css" rel="stylesheet" type="text/css" />
	<link href="/sf/public/assert/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/sf/public/assert/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
	<?php echo '<script'; ?>
 type="text/javascript" src="/sf/public/assert/js/bootstrap.min.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 type="text/javascript">
		function change()
		{
			var dt = $('#key').val();
			//var xx = $("input[name='key']").val();
			 $.ajax({
                    url:'/sf/public/sms/ndlist?key='+dt,
                    type:"get",
                    success:function(data){
                    },
                    error:function(){
                    }
            });
		
		}
	<?php echo '</script'; ?>
>
</head>
<body>
	<div class="container">
		<form action="" class="form-horizontal"  role="form">
			<fieldset>
				<div class="form-group">
					<label for="dtp_input2" class="col-md-2 control-label">选择日期</label>
					<div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd"" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
						<input  id="key" class="form-control" size="16" type="text" value="" readonly>
						<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
						<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
					</div>
					<input type="hidden" id="" value="" />
					<input type="button" id="dtp_btn" value="确定" style="width:50px;height:34px"/>
				</div>
			</fieldset>
		</form>	
<!-- 		<form action="" class="form-horizontal" >
				<div class="form-group"   style="margin-left:0px;display:inline;">
					<label for="dtp_input2" class="col-md-1 control-label"  style="padding-left:0px;margin-left:0px">选择日期</label>
					<div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd"" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
						<input  id="key" name="key" class="form-control" size="16" type="text" value="" readonly>
						
						<span class="input-group-addon" style="height:10px"><span class="glyphicon glyphicon-remove"></span></span>
						<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
										<button   onclick="change()">确定</button >

					</div>

					<input type="hidden" id="" value="" />
				</div>                        
		</form>	 -->	
		<table class="table table-hover">
		   <thead>
			  <tr>
				 <th>姓名</th>
				 <th>联系电话</th>
				 <th>城市</th>
				 <th>区县</th>
				 <th>详细地址 </th>
				 <th>提交页面 </th>
				 <th>终端类型 </th>
				 <th>提交时间 </th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['client_page'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['client_from'];?>
</td>				
				<td><?php echo $_smarty_tpl->tpl_vars['foo']->value['client_time'];?>
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
	
	<?php echo '<script'; ?>
 src="http://libs.baidu.com/jquery/2.1.1/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/sf/public/assert/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/sf/public/assert/js/bootstrap-datetimepicker.js" charset="UTF-8"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/sf/public/assert/js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"><?php echo '</script'; ?>
>	
	<?php echo '<script'; ?>
 type="text/javascript">
		$(function(){
			$('.form_date').datetimepicker({
				language:  'zh-CN',
				weekStart: 1,
				todayBtn:  0,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				minView: 2,
				forceParse: 0
			});
		});
	<?php echo '</script'; ?>
>	
</body>
</html><?php }
}
