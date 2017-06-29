$(document).ready(function(){
    $(document).on("change", "#resume", check_upload);
    $(document).on("click",".add-work", add_work);
    $(document).on("click",".delete-work", delete_work);
    $(document).on("click",".add-skill", add_skill);
})

function validate(){
    if(document.getElementById('resume').value==''){
        console.log("Hello");
        document.getElementById('upload-error').innerHTML="Please upload your resume";
        return false;
    }
    else{
      console.log(document.getElementById('resume').value);
    }
    console.log("Hello");
}

function check_upload(){
  if(document.getElementById('upload').value!=""){
      document.getElementById("upload-text").innerHTML = "Change";
      document.getElementById("upload").className = "btn btn-success btn-lg";
      document.getElementById('upload-error').innerHTML="";
  }
}

function add_work(){
  i = document.getElementsByClassName('work-history');
  $('#work-history-0').clone().attr('id','work-history-'+(i.length)).insertAfter('#work-history-' + (i.length- 1));
  //$('#requirements-1').attr('id','requirements-'+(i.length));
  document.getElementById("work-history-" + (i.length-1)).style.display = "block";
}

function delete_work(){
  $(this).parent().parent().remove();
  i = document.getElementsByClassName('work-history');
  console.log(i);
  for(x=1;x<i.length;x++){
    i[x].id = "work-history-" + x;
  }
}

function add_skill(){
  skill = document.getElementById('skill').value;
  console.log(skill);
  if(skill != ""){
    i = document.getElementsByClassName('skills');
    $('#skill-additional-0').clone().attr('id','skill-'+(i.length-1)).insertAfter('#skill-' + (i.length- 2));
    document.getElementById('skill-'+(i.length-2)).style = "display: block;";
    document.getElementById('skill-'+(i.length-2)).lastChild.previousSibling.innerHTML = skill;
    
    //document.getElementById('skill-'+(i.length-1)).value = skill;
  }
}