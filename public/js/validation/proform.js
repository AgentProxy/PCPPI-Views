$(document).ready(function(){
    $(document).on("change", "#resume", check_upload);
    $(document).on("click",".add-work", add_work);
    $(document).on("click",".delete-work", delete_work);
    $(document).on("click",".delete-skill", delete_skill);
    $(document).on("click",".add-skill", add_skill);
})

  

function validate(){
    resume = document.getElementById('resume').value;
    filetype = resume.split('.').pop();
    if(resume==''){
        document.getElementById('upload-error').innerHTML="Please upload your resume";
        return false;
    }
    else if (filetype!="doc"&&filetype!="docx"&&filetype!="pdf"&&
      filetype!="DOC"&&filetype!="DOCX"&&filetype!="PDF"){
        document.getElementById('upload-error').innerHTML="Please upload in PDF, DOC, or DOCX format";
        return false;
    }
    console.log(filetype);
}

function check_upload(){
  resume = document.getElementById('resume').value;
  if(resume!=""){
      resume = resume.split(/(\\|\/)/g).pop()
      // document.getElementById("upload-text").innerHTML = "Change";
      $("#upload-text").text("Change");

      document.getElementById("uploaded-file").innerHTML = resume;
      document.getElementById("upload").className = "btn btn-success btn-lg";
      document.getElementById('upload-error').innerHTML="";
      console.log(resume.split('.').pop());
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
  skill = document.getElementById('skill');
  console.log(skill.value);
  if(skill.value != ""){
    i = document.getElementsByClassName('skills');
    $('#skill-0').clone().attr('id','skill-'+(i.length)).insertAfter('#skill-' + (i.length-1));
    document.getElementById('skill-'+(i.length-1)).style = "display: block;";
    document.getElementById('skill-'+(i.length-1)).lastChild.previousSibling.innerHTML = skill.value;
    skill.value ="";
  }

}

function delete_skill(){
  $(this).parent().remove();
  i = document.getElementsByClassName('skills');
  console.log(i);
  for(x=0;x<i.length;x++){
    i[x].id = "skill-" + x;
  }
}