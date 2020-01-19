$(document).ready(function(){ 

	//check username availability
  $('#username').blur(function(){
  	var username = $(this).val();
  		$.ajax({
  			url:"check/checkuser.php",
  			method:"POST",
  			data:{username:username},
  			dataType:"text",
  			success:function(data){
  				$('#userstatus').html(data);
  			}
  		});
  });

  //autocomplete textbox
  $('#skill').keyup(function(){
  	if (skill != '') {
  		var skill = $(this).val();
  		$.ajax({
  			url:"check/checskill.php",
  			method:"POST",
  			data:{skill:skill},
  			success:function(data){
  				$('#statusskill').fadeIn();
  				$('#statusskill').html(data);
  			}
  		});
  	}
  	
  });


  $(document).on("click", "li", function(){
  	$('#skill').val($(this).text());
  	$('#statusskill').fadeOut();
  });

//show password button
 $("#showpassword").on("click", function(){
 	var pass = $("#password");
 	var fieldtype = pass.attr('type');
 	if (fieldtype == 'password') {
 		pass.attr('type', 'text');
 		$(this).text("Hide Password");
 	}else{
 		pass.attr('type', 'password');
 		$(this).text("Show Password");
 	}
  });

 //Auto refresh div content
$("#autosubmit").click(function(){
	var content = $("#body").val();
	if ($.trim(content) != '') {
		$.ajax({
  			url:"check/checkrefresh.php",
  			method:"POST",
  			data:{body:content},
  			dataType: "text",
  			success:function(data){
  				$("#body").val('');
  			}
  		});
  		return false;
	}
});

  setInterval(function(){
    $("#autostatus").load("check/getrefresh.php").fa("slow");
  }, 1000);

  //live data search
  $("#livesearch").keyup(function(){
      var live = $(this).val();
      if ($.trim(live) != '') {
        $.ajax({
            url:"check/livesearch.php",
            method:"POST",
            data:{search:live},
            dataType: "text",
            success:function(data){
              $("#statuslive").html(data);
            }
          });
      }else{
        $("#statuslive").html("");
      }
  });

  //auto save data
  function autoSave(){
    var content = $("#content").val();
    var contentid = $("#contentid").val();
    if ((content) != '') {
        $.ajax({
            url:"check/autosave.php",
            method:"POST",
            data:{content:content, contentid:contentid},
            dataType: "text",
            success:function(data){
              if (data !='') {
                  $("#contentid").val(data);
              }
              $("#statussave").text("Content save as draft");
              setInterval(function(){
                $("#statussave").text("");
              }, 2000);
            }
          });
      }
  }


  setInterval(function(){
    autoSave()
  }, 10000);

});  