$(document).ready(function(){
    $(document).on("change", "#resume", check_upload);
    //$(document).on("ready", this, check_upload);
    $(document).on("click",".add-work", add_work);
    $(document).on("click",".delete-work", delete_work);
    $(document).on("click",".delete-skill", delete_skill);
    $(document).on("click",".add-skill", add_skill);
})

function validate(token){
  if(grecaptcha.getResponse() !=""){
    console.log("hi");
    var submit= $('<input id="Submit" type="submit" value="submit"/>');
    $("#i-recaptcha").append(submit);
    $('[type="submit"]').click();
    resume = $("#resume").val();
    filesize = resume.size;
    filetype = resume.split('.').pop();

    if(resume==''){
      $("#upload-error").text("Please upload your resume");
      return false;
    }
    else if (filetype!="doc"&&filetype!="docx"&&filetype!="pdf"&&
      filetype!="DOC"&&filetype!="DOCX"&&filetype!="PDF"){
      $("#upload-error").text("Please upload in PDF, DOC, or DOCX format");
      return false; 
    }
  }
}

function check_upload(){
  console.log("helo");
  resume = document.getElementById('resume')
  upload = $("#resume").val();
  filesize = resume.size;
  alert(resume.files[0].size);
  filetype = upload.split('.').pop();

  if (filetype!="doc"&&filetype!="docx"&&filetype!="pdf"&&
      filetype!="DOC"&&filetype!="DOCX"&&filetype!="PDF"){
        $("#uploaded-file").text(upload);
        document.getElementById("upload").className = "btn btn-success btn-lg";
        $("#upload").attr('class', "btn btn-success btn-lg");
        $("#upload-error").text("Please upload in PDF, DOC, or DOCX format"); 
        return false;
    }
  else if(upload==""){
    $("#upload-error").text("Please upload your resume");
    return false;
  }
  
}

function add_work(){
  i = document.getElementsByClassName('work-history');
  $('#work-history-0').clone().attr('id','work-history-'+(i.length)).insertAfter('#work-history-' + (i.length- 1));
  // document.getElementById("work-history-" + (i.length-1)).style.display = "block";
  $("#work-history-"+(i.length-1)).css("display", "block");
}

function delete_work(){
  $(this).parent().parent().remove();
  i = document.getElementsByClassName('work-history');
  for(x=1;x<i.length;x++){
    i[x].id = "work-history-" + x;
  }
}

function add_skill(){
  skill = document.getElementById('skill');

  if(skill.value != ""){
    i = document.getElementsByClassName('skills');
    $('#skill-0').clone().attr('id','skill-'+(i.length)).insertAfter('#skill-' + (i.length-1));
    // document.getElementById('skill-'+(i.length-1)).style = "display: block;";
    $("#skill-"+(i.length-1)).css("display", "block");
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