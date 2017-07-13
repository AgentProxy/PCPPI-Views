<textarea class="form-control list" id="{{$row->field}}" name="{{ $row->field }}" style="height: 200px;">@if(isset($dataTypeContent->{$row->field})){{ old($row->field, $dataTypeContent->{$row->field}) }}@elseif(isset($options->default)){{ old($row->field, $options->default) }}@else{{ old($row->field) }}@endif</textarea>

<script>
/*
	This Script will put bullets on the text area to make it look like a list
	Special Thanks to: Abhishek Agrawal for this script
*/
$(".list").focus(function() {
    if(document.getElementById("{{$row->field}}").value === ''){
        document.getElementById("{{$row->field}}").value +='• ';
	}
});
$(".list").keyup(function(event){
	var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        document.getElementById("{{$row->field}}").value +='• ';
	}
	var txtval = document.getElementById("{{$row->field}}").value;
	if(txtval.substr(txtval.length - 1) == '\n'){
		document.getElementById("{{$row->field}}").value = txtval.substring(0,txtval.length - 1);
	}
});
</script>