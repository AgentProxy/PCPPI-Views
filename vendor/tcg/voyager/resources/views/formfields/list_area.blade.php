<textarea class="form-control" style="height: 200px;" name="{{ $row->field }}" id="{{ $row->field }}">@if(isset($dataTypeContent->{$row->field})){{ old($row->field, $dataTypeContent->{$row->field}) }}@elseif(isset($options->default)){{ old($row->field, $options->default) }}@else{{ old($row->field) }}@endif</textarea>

<script>

	$("#{{ $row->field }}").focus(function() {
	    if(document.getElementById("{{ $row->field }}").value === ''){
	        document.getElementById("{{ $row->field }}").value +='• ';
		}
	});
	$("#{{ $row->field }}").keyup(function(event){
		var keycode = (event.keyCode ? event.keyCode : event.which);
	    if(keycode == '13'){
	        document.getElementById("{{ $row->field }}").value +='• ';
		}
		var txtval = document.getElementById("{{ $row->field }}").value;
		if(txtval.substr(txtval.length - 1) == '\n'){
			document.getElementById("{{ $row->field }}").value = txtval.substring(0,txtval.length - 1);
		}
	});

</script>