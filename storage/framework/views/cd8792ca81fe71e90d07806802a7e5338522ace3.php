<textarea class="form-control list" id="<?php echo e($row->field); ?>" name="<?php echo e($row->field); ?>" style="height: 200px;"><?php if(isset($dataTypeContent->{$row->field})): ?><?php echo e(old($row->field, $dataTypeContent->{$row->field})); ?><?php elseif(isset($options->default)): ?><?php echo e(old($row->field, $options->default)); ?><?php else: ?><?php echo e(old($row->field)); ?><?php endif; ?></textarea>

<script>
/*
	This Script will put bullets on the text area to make it look like a list
	Special Thanks to: Abhishek Agrawal for this script
*/
$(".list").focus(function() {
    if(document.getElementById("<?php echo e($row->field); ?>").value === ''){
        document.getElementById("<?php echo e($row->field); ?>").value +='• ';
	}
});
$(".list").keyup(function(event){
	var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        document.getElementById("<?php echo e($row->field); ?>").value +='• ';
	}
	var txtval = document.getElementById("<?php echo e($row->field); ?>").value;
	if(txtval.substr(txtval.length - 1) == '\n'){
		document.getElementById("<?php echo e($row->field); ?>").value = txtval.substring(0,txtval.length - 1);
	}
});
</script>