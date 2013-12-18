
<?php 
    include ("header.php");

    ?>

	<div class="container">
    <div class="row padd"></div>
        <div class="row">
          <div class="col-lg-2">
            <ul class="contab">
                <li class="consubtab"><img src="assets/img/orange.png" style="width:10px;height:10px;">&nbsp;&nbsp;<a href="di14.php" style="text-decoration:none;color:black;">Apply</a></li>
                <li class="consubtab"><img src="assets/img/gray.png" style="width:10px;height:10px;">&nbsp;&nbsp;<a href="about_di14.php" style="text-decoration:none;color:#acacac;">About</a></li>
                <li class="consubtab"><img src="assets/img/gray.png" style="width:10px;height:10px;">&nbsp;&nbsp;<a href="track_di14.php" style="text-decoration:none;color:#acacac;">Tracks</a></li>
                <li class="consubtab"><img src="assets/img/gray.png" style="width:10px;height:10px;">&nbsp;&nbsp;<a href="agenda.php" style="text-decoration:none;color:#acacac;">Agenda</a></li>
                <li class="consubtab"><img src="assets/img/gray.png" style="width:10px;height:10px;">&nbsp;&nbsp;<a href="people_di14.php" style="text-decoration:none;color:#acacac;">People</a></li>
                <li class="consubtab"><img src="assets/img/gray.png" style="width:10px;height:10px;">&nbsp;&nbsp;<a href="sponsors_di14.php" style="text-decoration:none;color:#acacac;">Sponsors</a></li>
                <li class="consubtab"><img src="assets/img/gray.png" style="width:10px;height:10px;">&nbsp;&nbsp;<a href="faq.php" style="text-decoration:none;color:#acacac;">FAQ</a></li>
      </ul>
        </div>
        <div class="col-lg-10">
            <div class="row">
               <div class="col-lg-3"></div>
                <div class="col-lg-6">
                      <img src="content/di14/slideshow/1.png" class="img-responsive"/>
                </div>
                 <div class="col-lg-3"></div>
            </div> 
           <div class="row">
            <div class="col-lg-2"></div>
                  <div class="col-lg-8">                      
            <form action="save.php" method="post">

                <h3 class="di14select">Select Type : <input id="radio_stu" type="radio" name="profile_type" value="student" checked/>Student <input id="radio_com" type="radio" name="profile_type" value="company"/>Company </h3>
                <br/>
                   <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title" style="cursor:pointer;" id="p_info">Personal Information</h3>
                      </div>
                      <div class="panel-body" id="pinfo_content">
                        <div class="row">
                            <div class="form-group">
                              <div class="col-md-4">
                                <label>Name <b class="status_red"> * </b> </label>
                              </div>
                              <div class="col-md-5">  
                                <input class="form-control" name="txt_name" required/> 
                              </div> 
                            </div>
                        </div> 
                        <br/>
                             <div class="row">
                            <div class="form-group">
                              <div class="col-md-4">
                                <label>Date of birth <b class="status_red"> * </b></label>
                                </div>
                                <div class="col-md-5"> 
                                <input class="form-control" name="txt_dob" placeholder="dd/mm/yy" required/> 
                                </div>
                            </div>
                          </div>
                          
                            <div class="row">
                              <br/> 
                            <div class="form-group">
                              <div class="col-md-4">
                              <label> Email <b class="status_red"> * </b></label>
                            </div>
                                <div class="col-md-5"> 
                                <input type="text" class="form-control" name="txt_mail" id="txt_phone" required/>
                            </div>
                          </div>
                          </div>
                          
                            <div class="row">
                              <br/>
                            <div class="form-group">
                              <div class="col-md-4">
                              <label> Verify your Email <b class="status_red"> * </b></label>
                              </div>
                                <div class="col-md-5"> 
                                <input type="text" class="form-control" name="txt_verify" id="txt_phone" required/>
                            </div>
                            </div>
                            </div>

                             <br/>
                            <div class="row">
                            <div class="form-group">
                              <div class="col-md-4">
                              <label> Phone <b class="status_red"> * </b></label>
                              </div>
                                <div class="col-md-5"> 
                                <input type="text" class="form-control" name="txt_phone" id="txt_phone" required>
                            </div>
                            </div>
                            </div>

                            <br/>
                            <div class="row">
                            <div class="form-group">
                              <div class="col-md-4">
                                <label id="ch_uni">University <b class="status_red"> * </b></label>
                                </div>
                                <div class="col-md-5"> 
                                <input class="form-control" placeholder="Full University name and City" name="txt_university" id="txt_university" required/> 
                            </div>
                            </div>
                            </div>

                            
                            <div class="row" id="personal_entries4">
                              <br/>
                            <div class="form-group">
                              <div class="col-md-4">
                                <label> College/Institute <b class="status_red"> * </b></label><br/>
                                </div>
                                <div class="col-md-5"> 
                                <input class="form-control" id="txt_college" name="txt_college" placeholder="Full College/Institute name" required/> 
                            </div>
                            </div>
                            </div>

                            <div class="row" id="personal_entries5">
                              <br/>
                            <div class="form-group">
                              <div class="col-md-4">
                                <label> Major <b class="status_red"> * </b></label>
                                 </div>
                                <div class="col-md-5"> 
                                <input class="form-control" name="txt_major" id="txt_major" required/> 
                            </div>
                            </div>
                            </div>

                            <div class="form-group" id="personal_entries6">
                              <br/>
                                <label> Year of School <b class="status_red"> * </b></label><br/>
                                <i>First - freshman; second - sophomore; third - junior; fourth - senior , ms;phd;please specify</i>
                                <input class="form-control" id="txt_school" name="txt_school" required/> 
                            </div>  

                            <div class="row" id="personal_entries7">
                              <br/>
                            <div class="form-group">
                              <div class="col-md-4">
                                <label> Are you IEEE Member? <b class="status_red"> * </b></label>
                                 </div>
                                <div class="col-md-5"> 
                                 <select id="optionnamebox" name="opt_member" class="form-control input-sm" required>
                                    <option value="NO">No</option>
                                    <option value="YES">Yes</option>
                                 </select>
                              </div>                       
                              </div>                       
                              </div>                       
                    </div>
                  </div>

                   <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title" style="cursor:pointer;" id="bg_info">Background Information</h3>
                      </div>
                      <div class="panel-body" id="bginfo_content">

                            <div class="form-group" id="background_entries1">
                                <label> GPA <b class="status_red"> * </b></label><br/>
                                <i>Please enter it in the form P/Q, e.g. 9.2/10, 76/100.</i>
                                <textarea class="form-control" id="txt_gpa" name="txt_gpa" required> </textarea>
                            </div> 

                            <div class="form-group">
                                <label> Software Experience</label><br/>
                                <i>List all the languages you are familiar with, e.g. Java, Python, Processing, Matlab, other, OR none</i>
                                <textarea class="form-control" name="txt_software"> </textarea>
                            </div> 

                            <div class="form-group">
                                <label> Hardware Experience</label><br/>
                                <i>List your electronics and hardware experience, e.g. Arduino programming, robotics, OR none</i>
                                <textarea class="form-control" name="txt_hardware"> </textarea>
                            </div> 

                            <div class="form-group">
                                <label> Management and Leadership Experience</label><br/>
                                <i>Describe your people/soft skills in the context of your projects and activities</i>
                                <textarea class="form-control" name="txt_mgt"> </textarea>
                            </div> 

                            <div class="form-group" id="background_entries2">
                                <label> Extra-Curricular Activities</label><br/>
                                <i>List all activities and hobbies outside of your academic curriculum.</i>
                                <textarea class="form-control" id="txt_activities" name="txt_activities"> </textarea>
                            </div> 

                            <div class="form-group">
                                <label> Will you have access to a laptop for the duration of the workshop? <b class="status_red"> * </b> </label><br/>
                                <i>Your answer will help us form teams should you be selected. Please note that this will not affect your chances.</i>
                                <select id="optionnamebox" name="opt_access" class="form-control input-sm" required>
                                    <option value="NO">No</option>
                                    <option value="YES">Yes</option>
                                 </select>
                            </div> 
                            
                      </div>
                  </div>


                  <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title" style="cursor:pointer;" id="participation_info">Participation Information</h3>
                      </div>
                      <div class="panel-body" id="participation_content">
                            <div class="form-group">
                                <label> List interesting and relevant projects you have done. <b class="status_red"> * </b></label>
                                <textarea class="form-control" name="txt_relevant" required> </textarea>
                            </div> 

                            <div class="form-group">
                                <label> Describe a few project ideas you have that you would like to build and what impact these might have. <b class="status_red"> * </b></label><br/>
                                <i>Be brief (10 lines at most).</i>
                                <textarea class="form-control" name="txt_desc_project" required> </textarea>
                            </div> 

                             <div class="form-group">
                                <label> Track Selection <b class="status_red"> * </b></label><br/>
                                <i>Pick a different preference for each track.</i>
                                    <br/>
                                  <table class="table-striped">
                                    <thead>
                                      <tr>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        
                                        </td><td id="head_label">
                                          First
                                        </td>
                                        <td id="head_label2">
                                          Second
                                        </td> 
                                        <td id="head_label3">
                                          Third
                                        </td>
                                        <td id="head_label4">
                                          Fourth
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr id="tr_border">
                                        <td>
                                          </td><td id="title">Imaging Experiences</td>
                                        
                                        <td>
                                        </td>
                                        <td>
                                          <input type="checkbox" id="00" name="img_exp" value="1" onclick="t_check(0,0)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="01" name="img_exp" value="2" onclick="t_check(0,1)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="02" name="img_exp" value="3" onclick="t_check(0,2)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="03" name="img_exp" value="4" onclick="t_check(0,3)">
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                      <tr id="tr_border">
                                        <td>
                                          </td><td id="title">ICICI Future of Banking</td>
                                        
                                        <td>
                                        </td>
                                        <td>
                                          <input type="checkbox" name="icic_fut" id="10" value="1" onclick="t_check(1,0)">
                                        </td>
                                        <td>
                                          <input type="checkbox" name="icic_fut" id="11" value="2" onclick="t_check(1,1)">
                                        </td>
                                        <td>
                                          <input type="checkbox" name="icic_fut" id="12" value="3" onclick="t_check(1,2)">
                                        </td>
                                        <td>
                                          <input type="checkbox" name="icic_fut" id="13" value="4" onclick="t_check(1,3)">
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                      <tr><td>
                                          </td><td id="title">Living Mobile</td>
                                        
                                        <td>
                                        </td>
                                        <td>
                                          <input type="checkbox" name="liv_mob" id="20" value="1" onclick="t_check(2,0)"> 
                                        </td>
                                        <td>
                                          <input type="checkbox" name="liv_mob" id="21" value="2" onclick="t_check(2,1)">                       </td>
                                        <td>
                                          <input type="checkbox" name="liv_mob" id="22" value="3" onclick="t_check(2,2)"> 
                                        </td>
                                        <td>
                                          <input type="checkbox" id="23" name="liv_mob" value="4" onclick="t_check(2,3)">
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                      <tr id="tr_border">
                                        <td>
                                          </td><td id="title">Designing For Interactions</td>
                                        
                                        <td>
                                        </td>
                                        <td>
                                          <input type="checkbox" name="designing_interaction" id="30" value="1" onclick="t_check(3,0)">
                                        </td>
                                        <td>
                                          <input type="checkbox" name="designing_interaction" id="31" value="2" onclick="t_check(3,1)">
                                        </td>
                                        <td>
                                          <input type="checkbox" name="designing_interaction" id="32" value="3" onclick="t_check(3,2)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="33" name="designing_interaction" value="4" onclick="t_check(3,3)">
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                      <tr id="tr_border">
                                        <td>
                                          </td><td id="title">Designing For Creative Learning</td>
                                        
                                        <td>
                                        </td>
                                        <td>
                                          <input type="checkbox" id="40" name="designing_creative_learning" value="1" onclick="t_check(4,0)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="41" name="designing_creative_learning" value="2" onclick="t_check(4,1)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="42" name="designing_creative_learning" value="3" onclick="t_check(4,2)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="43" name="designing_creative_learning" value="4" onclick="t_check(4,3)">
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                      <tr id="tr_border">
                                        <td>
                                          </td><td id="title">Grassroot Engineering</td>
                                        
                                        <td>
                                        </td>
                                        <td>
                                          <input type="checkbox" id="50" name="grassroot_engineering" value="1" onclick="t_check(5,0)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="51" name="grassroot_engineering" value="2" onclick="t_check(5,1)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="52" name="grassroot_engineering" value="3" onclick="t_check(5,2)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="53" name="grassroot_engineering" value="4" onclick="t_check(5,3)">
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                      <tr id="tr_border">
                                        <td>
                                          </td><td id="title">Performance Capture</td>
                                        
                                        <td>
                                        </td>
                                        <td>
                                          <input type="checkbox" id="60" name="performance_capture" value="1" onclick="t_check(6,0)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="61" name="performance_capture" value="2" onclick="t_check(6,1)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="62" name="performance_capture" value="3" onclick="t_check(6,2)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="63" name="performance_capture" value="4" onclick="t_check(6,3)">
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                      <tr id="tr_border">
                                        <td>
                                          </td><td id="title">Design For Sustainability</td>
                                        
                                        <td>
                                        </td>
                                        <td>
                                          <input type="checkbox" id="70" name="design_sustainability" value="1" onclick="t_check(7,0)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="71" name="design_sustainability" value="2" onclick="t_check(7,1)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="72" name="design_sustainability" value="3" onclick="t_check(7,2)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="73" name="design_sustainability" value="4" onclick="t_check(7,3)">
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                      <tr id="tr_border">
                                        <td>
                                          </td><td id="title">Magical Interfaces</td>
                                        
                                        <td>
                                        </td>
                                        <td>
                                          <input type="checkbox" id="80" name="magical_interfaces" value="1" onclick="t_check(8,0)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="81" name="magical_interfaces" value="2" onclick="t_check(8,1)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="82" name="magical_interfaces" value="3" onclick="t_check(8,2)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="83" name="magical_interfaces" value="4" onclick="t_check(8,3)">
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                      <tr id="tr_border">
                                        <td>
                                          </td><td id="title">Fabrication Laboratory</td>
                                        
                                        <td>
                                        </td>
                                        <td>
                                          <input type="checkbox" id="90" name="fabrication_lab" value="1" onclick="t_check(9,0)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="91" name="fabrication_lab" value="2" onclick="t_check(9,1)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="92" name="fabrication_lab" value="3" onclick="t_check(9,2)">
                                        </td>
                                        <td>
                                          <input type="checkbox" id="93" name="fabrication_lab" value="4" onclick="t_check(9,3)">
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>

                            </div>

                            <div class="form-group">
                                <label >If you are interested in the MIT Health Tech Workshop please apply at</label>
                                <br/>
                                <label><a href="http://india.media.mit.edu/health/mumbai">http://india.media.mit.edu/health/mumbai</a></label>
                            </div> 

                             <div class="form-group">
                                <label> What do you expect to learn from this workshop?. <b class="status_red"> * </b></label>
                                <textarea class="form-control" name="txt_workshop" required> </textarea>
                            </div> 

                      </div>
                  </div>

                  <div class="panel panel-info" id="tecnical_helper">
                      <div class="panel-heading">
                        <h3 class="panel-title" style="cursor:pointer;" id="technical_info">Research Enabler</h3>
                      </div>
                      <div class="panel-body" id="technical_content">
                          If you are a WeSchool student (seniors and, in some cases, juniors), you can volunteer to help your teammates with technical issues relating to the technical environment and the infrastructure.
                           
                            <br/> <br/>
                           <div class="form-group">
                                <label> Do you want to be considered for the position of Technical Helper (WeSchool students only)? </label><br/>
                                <i>Please note that your answer will not affect your chances.</i><br/>
                                <input type="checkbox" name="check_tech"/> I would like to volunteer for the position of Technical Helper.
                            </div> 
                      </div>
                  </div>

                  <div class="panel panel-info" id="references">
                      <div class="panel-heading">
                        <h3 class="panel-title" style="cursor:pointer;" id="ref_info">References</h3>
                      </div>
                      <div class="panel-body" id="reference_content">
                          
                            <div class="form-group">
                                <label>Ref.1: Name <b class="status_red"> * </b> </label>
                                <input class="form-control" id="txt_ref1_name" name="txt_ref1_name" required/> 
                            </div>

                            <div class="form-group">
                                <label>Ref.1: Email or Phone <b class="status_red"> * </b> </label>
                                <input class="form-control" id="txt_ref1_email" name="txt_ref1_email" required/> 
                            </div>

                            <div class="form-group">
                                <label>Ref.1: Position and Institutions <b class="status_red"> * </b> </label><br/>
                                <i>For e.g., Assistant Professor, Professor, Lecturer, Head of Dept. etc.</i>
                                <input class="form-control" id="txt_ref1_position" name="txt_ref1_position" required/> 
                            </div>

                            <div class="form-group">
                                <label>Ref.1: Relationship to applicant <b class="status_red"> * </b> </label><br/>
                                <i>For e.g., Professor of Robotics for one semester, Project mentor for 2 semesters, etc.</i>
                                <input class="form-control" id="txt_ref1_relation" name="txt_ref1_relation" required/> 
                            </div>

                            <div class="form-group">
                                <label>Ref.2: Name  </label>
                                <input class="form-control" name="txt_ref2_name"/> 
                            </div>

                            <div class="form-group">
                                <label>Ref.2: Email or Phone  </label>
                                <input class="form-control" name="txt_ref2_email"/> 
                            </div>

                            <div class="form-group">
                                <label>Ref.2: Position and Institutions  </label><br/>
                                <i>For e.g., Assistant Professor, Professor, Lecturer, Head of Dept. etc.</i>
                                <input class="form-control" name="txt_ref2_position"/> 
                            </div>

                            <div class="form-group">
                                <label>Ref.2: Relationship to applicant </label><br/>
                                <i>For e.g., Professor of Robotics for one semester, Project mentor for 2 semesters, etc.</i>
                                <input class="form-control" name="txt_ref2_relation"/> 
                            </div>

                      </div>
                  </div>

                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title" style="cursor:pointer;" id="tc_info">Terms and Conditions</h3>
                      </div>
                      <div class="panel-body" id="tc_content">
                          <div class="form-group">
                                <label>Please release License agreement. <b class="status_red"> * </b> </label><br/>
                                <i>Check the box below to declare consent.</i><br/>
                                <input type="checkbox" name="check_tc1" required/>  I hereby agree to release the work that I develop at the workshop with an open-source license and understand that it will be archived and made available publicly
                          </div>
                          <div class="form-group">
                                <label>Permission to use recordings and biographical information. <b class="status_red"> * </b> </label><br/>
                                <i>Check the box below to declare consent.</i><br/>
                                <input type="checkbox" name="check_tc2" required/>  I understand that the organizers may record, use, and archive my participation and appearance at the workshop and that I will need to sign a release form if I participate in the workshop.
                          </div>
                          <div class="form-group">
                                <label>I hereby verify that all the information on this form is true and correct to the best of my knowledge. <b class="status_red"> * </b></label> <br/>
                                 <i> Please electronically sign this form by writing your full name in the box below.</i>
                                <input class="form-control" name="txt_sign" required/> 
                          </div>
                      </div>
                  </div>

                  <button class="btn btn-info" >Submit</button> 
                    </form>
                  </div>
           </div>
        </div>
</div>
</div>


<br/>
<br/>
<br/>
<br/>

<?php 
include ("footer.php");
?>
</body>

<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/hover-dropdown.min.js"></script>
<script src="assets/js/di14.js"></script>
</html>

<?php 
if(isset($_GET['ret']))
{
    ?>
      <script type="text/javascript">
          $(document).ready(function(){
              $('#myModal').modal('show');
          });
      </script>

    <?php
}
?>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	              <h4 class="modal-title">Congratulations!</h4>
		            </div>
	<div class="modal-body" style="font-weight:normal">
	        <p>Your application has been successfully submitted.</p>
			<p>Thank you for applying.</p>
			      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
