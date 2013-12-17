
function t_check(i,j)
{
	//alert("Hello"+i+""+j);
	var id;
		var k=0;
	

		if($("#"+i+j).prop("checked"))
		{

		for(var t=0; t<10;t++)
		{
			id=t+""+j;
			document.getElementById(id).disabled=true;

		}
		for(var l=0; l<4; l++)
		{
			id=i+""+l;
			document.getElementById(id).disabled=true;
		}
			document.getElementById(i+""+j).disabled=false;
		}
		else
		{
			var flag=0;
		for(var t=0; t<10;t++)
		{
			id=t+""+j;
			//document.getElementById(id).disabled=false;
			for(l=0; l<4; l++)
			{
				var id_new=t+""+l;
				
				if($("#"+id_new).prop("checked"))
				{
					//alert(id_new);
					flag++;
					id_new=0;
					break;
					
				}

			}
			if(flag==0)
			{
				//alert("disabled thing :- "+id);

				document.getElementById(id).disabled=false;
				
			}
			flag=0;

		}

		var left,right;
		flag=0;

		for(left=0;left<4;left++)
		{
			id=i+""+left;

			for(right=0; right<10; right++)
			{
				var id1=right+""+left;
				if($("#"+id1).prop("checked"))
				{
					flag++;
				}
			}
			if(flag==0)
			{
				document.getElementById(id).disabled=false;
			}
			flag=0;
		}
		
			document.getElementById(i+""+j).disabled=false;


		}
}



  $(document).ready(function(){
        $("#p_info").click(function(){
           $("#pinfo_content").slideToggle(500);
        });

        $("#bg_info").click(function(){
           $("#bginfo_content").slideToggle(500);
        });

         $("#participation_info").click(function(){
           $("#participation_content").slideToggle(500);
        });

         $("#technical_info").click(function(){
           $("#technical_content").slideToggle(500);
        });

          $("#ref_info").click(function(){
           $("#reference_content").slideToggle(500);
        });

           $("#tc_info").click(function(){
           $("#tc_content").slideToggle(500);
        });
  });



  $("#radio_com").change(function(){

			for (var i = 3; i <=7; i++) {
				$("#personal_entries"+i).css("display","none");	
			}

			for (var i = 1; i <=2; i++) {
				$("#background_entries"+i).css("display","none");	
			}


			$("#tecnical_helper").css("display","none");
			$("#references").css("display","none");


			//$("#txt_university").val("n/a");
			$("#txt_college").val("n/a");
			$("#txt_major").val("n/a");
			$("#txt_school").val("n/a");
			$("#txt_gpa").val("n/a");
			$("#txt_activities").val("n/a");
			$("#txt_ref1_name").val("n/a");
			$("#txt_ref1_email").val("n/a");
			$("#txt_ref1_position").val("n/a");
			$("#txt_ref1_relation").val("n/a");


			$("#ch_uni").html("Company <b class=\"status_red\"> * </b>");
			$("#txt_university").attr("placeholder","Enter designation and company name");
			
		});

		$("#radio_stu").change(function(){
			for (var i = 3; i <=7; i++) {
				$("#personal_entries"+i).css("display","block");	
			}

			for (var i = 1; i <=2; i++) {
				$("#background_entries"+i).css("display","block");	
			}


			$("#tecnical_helper").css("display","block");
			$("#references").css("display","block");

			//$("#txt_university").val("");
			$("#txt_college").val("");
			$("#txt_major").val("");
			$("#txt_school").val("");
			$("#txt_gpa").val("");
			$("#txt_activities").val("");
			$("#txt_ref1_name").val("");
			$("#txt_ref1_email").val("");
			$("#txt_ref1_position").val("");
			$("#txt_ref1_relation").val("");

			$("#ch_uni").html("University <b class=\"status_red\"> * </b>");
			$("#txt_university").attr("placeholder","Enter full University name and City");
			
		});