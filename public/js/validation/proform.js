$(document).ready(function(){
  $(document).on("change", "#resume", check_upload);
  $(document).on("submit", "#i-recaptcha", check);
  $(document).on("click",".delete-skill", delete_skill);
  $(document).on("click",".add-skill", add_skill);
})
  
function check(e){
  /*
    This function is for checking if captcha has been completed 
    and also checks if uploading in the check_upload() function passed.
    Disables Submit button after clicking if all is true to prevent multiple clicks on 
    the Submit button.
  */
  console.log("helo");
  $(window).off('beforeunload');        //stops the leave page popup box from appearing
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
  }
  
$('#Submit').click(function(){
    $("#Submit").prop('disabled','true');
    $("#i-recaptcha").submit();
    return true;
})

}

/*
  This function checks file upload if file size is in range to 2MB and 
  checks file extension (front-end validation)
  Also checks if uploaded file is blank.
*/
function check_upload(){
  
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
/*
  This is for the dynamic adding of skills input box in professionals form and talent bank forms.
  Will not add skill if input box is blank to prevent addition of blank skills.
*/
function add_skill(){
  skill = document.getElementById('skill');
  if(skill.value != ""){
    i = document.getElementsByClassName('skills');
    $('#skill-0').clone().attr('id','skill-'+(i.length+1)).insertAfter('#skill-' + (i.length));
    $("#skill-"+(i.length+1)).attr('class', 'checkbox skills');
    $("#skill-"+(i.length)).css("display", "block");
    (skill.value).replace(/</g, "&lt;").replace(/>/g, "&gt;");
    document.getElementById('skill-'+(i.length)).firstChild.nextSibling.value = skill.value;
    document.getElementById('skill-'+(i.length)).lastChild.previousSibling.innerHTML = skill.value;
    skill.value ="";
  }

}
/*
  For deleting inputted skills in professionals form and talent bank forms
*/
function delete_skill(){
  $(this).parent().remove();
  i = document.getElementsByClassName('skills');
  console.log(i);
  for(x=0;x<i.length;x++){
    i[x].id = "skill-" + (x+1);
  }
}