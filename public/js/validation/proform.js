$(document).ready(function(){
  $(document).on("change", "#resume", check_upload);
  $(document).on("submit", "#i-recaptcha", check);
  $(document).on("click",".add-work", add_work);
  $(document).on("click",".delete-work", delete_work);
  $(document).on("click",".delete-skill", delete_skill);
  $(document).on("click",".add-skill", add_skill);
})
  
function check(e){
  console.log("Submitted Clicked")
  $(window).off('beforeunload');
  if(grecaptcha.getResponse().length === 0){
    e.preventDefault();
    alert("Please verify that you're human.");
    return false;
  }
  else{

    if(check_upload()==false){
      e.preventDefault();
      return false;
    } 
    $("#Submit").prop('disabled','true');
    return true;
  }
}
    
function check_upload(){
  console.log("helo");
  resume = document.getElementById('resume');
  if($("#resume").val()!=""){
    upload = $("#resume").val();
    filesize = resume.files[0].size;
    filetype = upload.split('.').pop();
    upload = upload.split('\\').pop().split('/').pop();
    $("#uploaded-file").text(upload);
    $("#upload").attr('class', "btn btn-success btn-lg");
    $("#upload-text").text("Change");
    if(filetype!="doc"&&filetype!="docx"&&filetype!="pdf"&&
        filetype!="DOC"&&filetype!="DOCX"&&filetype!="PDF"){  
      $("#upload-error").text("Please upload in PDF, DOC, or DOCX format");
    }
    else if(upload==""){
      $("#upload-error").text("Please upload your resume");
    }
    else if(filesize>2097152){
      $("#upload-error").text("Filesize should only be 2 MB or less");
    }
    else{
      $("#upload-error").text("");
      return true;
    }
  }
  return false;
}

function add_work(){
  i = document.getElementsByClassName('work-history');
  $('#work-history-0').clone().attr('id','work-history-'+(i.length+1)).insertAfter('#work-history-' + (i.length));
  $("#work-history-"+(i.length+1)).attr('class', 'work-history');
  $("#work-history-"+(i.length)).css("display", "block");
  
}

function delete_work(){
  $(this).parent().parent().remove();
  i = document.getElementsByClassName('work-history');
  for(x=0;x<i.length;x++){
    i[x].id = "work-history-" + (x+1);
  }
}

function add_skill(){
  skill = document.getElementById('skill');
  if(skill.value != ""){
    i = document.getElementsByClassName('skills');
    $('#skill-0').clone().attr('id','skill-'+(i.length+1)).insertAfter('#skill-' + (i.length));
    $("#skill-"+(i.length+1)).attr('class', 'checkbox skills');
    //document.getElementById("work-history-"+(i.length))
    $("#skill-"+(i.length)).css("display", "block");
    (skill.value).replace(/</g, "&lt;").replace(/>/g, "&gt;");
    document.getElementById('skill-'+(i.length)).firstChild.nextSibling.value = skill.value;
    document.getElementById('skill-'+(i.length)).lastChild.previousSibling.innerHTML = skill.value;
    skill.value ="";
  }

}

function delete_skill(){
  $(this).parent().remove();
  i = document.getElementsByClassName('skills');
  console.log(i);
  for(x=0;x<i.length;x++){
    i[x].id = "skill-" + (x+1);
  }
}