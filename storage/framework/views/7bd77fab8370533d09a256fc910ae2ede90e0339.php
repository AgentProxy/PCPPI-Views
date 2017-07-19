<textarea class="form-control" style="height: 200px;" name="<?php echo e($row->field); ?>" id="<?php echo e($row->field); ?>"><?php if(isset($dataTypeContent->{$row->field})): ?><?php echo e(old($row->field, $dataTypeContent->{$row->field})); ?><?php elseif(isset($options->default)): ?><?php echo e(old($row->field, $options->default)); ?><?php else: ?><?php echo e(old($row->field)); ?><?php endif; ?></textarea>

<script>

	$("#<?php echo e($row->field); ?>").focus(function() {
	    if(document.getElementById("<?php echo e($row->field); ?>").value === ''){
	        document.getElementById("<?php echo e($row->field); ?>").value +='• ';
		}
	});
	$("#<?php echo e($row->field); ?>").keyup(function(event){
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