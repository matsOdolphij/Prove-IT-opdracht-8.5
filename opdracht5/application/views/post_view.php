<section>
	<?php 
	$attr_form = array('id' => 'addpost_form', 'method' => 'POST');
	$attr_fieldset = array('id' => 'addpost_fieldset');
	$attr_textarea = array('id' => 'addpost_content', 'name' => 'addpost_content', 'cols' => '80', 'rows' => '35');
	
	$attr_pic1 = array('id' => '', 'name' => '', );
	$attr_pic2 = array('id' => '', 'name' => '', );
	$attr_pic3 = array('id' => '', 'name' => '', );

	echo form_open_multipart('../post/addPost', $attr_form);
	echo form_fieldset();
	?>

	<table id="post_form">
		<tr>
			<td><?php echo form_label('text', 'addpost_content'); ?></td>
			<td><?php echo form_textarea($attr_textarea); ?></td>
		</tr>
		<tr>
			<td><?php echo form_label('pic1', 'pic1'); ?></td>
			<td><?php echo form_upload($attr_pic1); ?></td>
		</tr>
		<tr>
			<td><?php echo form_label('pic2', 'pic2'); ?></td>
			<td><?php echo form_upload($attr_pic2); ?></td>
		</tr>
		<tr>
			<td><?php echo form_label('pic3', 'pic3'); ?></td>
			<td><?php echo form_upload($attr_pic3); ?></td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo form_submit('Submit', 'Submit'); ?></td>
		</tr>
	</table>

	<?php
	echo form_fieldset_close();
	echo form_close();
	?>

</section>