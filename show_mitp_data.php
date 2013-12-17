<?php
include('head.php');
?>

<?php



$DB_Server = "gkmit.co"; //MySQL Server    
$DB_Username = "c0gkm"; //MySQL Username     
$DB_Password = "gkm@123";             //MySQL Password     
$DB_DBName = "c0gkm";         //MySQL Database Name  
$DB_TBLName = "gitp_form"; //MySQL Table Name   




$sql = "Select * from $DB_TBLName";
$Connect = @mysql_connect($DB_Server, $DB_Username, $DB_Password) or die("Couldn't connect to MySQL:<br>" . mysql_error() . "<br>" . mysql_errno());
//select database   
//mysql_set_charset("utf8", $Connect);
$Db = @mysql_select_db($DB_DBName, $Connect) or die("Couldn't select database:<br>" . mysql_error(). "<br>" . mysql_errno());   
//execute query 
$result = @mysql_query($sql,$Connect) or die("Couldn't execute query:<br>" . mysql_error(). "<br>" . mysql_errno());    





 echo "<table class='table table-bordered'>
            <thead>
              <tr>
                <th>Form_ID</th>
                <th>Name</th>
                <th>DOB</th>
                <th>Mail</th>
                <th>Phone</th>
                <th>University</th>
                <th>College</th>
                <th>Major</th>
                <th>Year</th>
                <th>Member</th>
                <th>GPA</th>
                <th>Software_Exp</th>
                <th>Hardware_Exp</th>
                <th>Art_Exp</th>
                <th>Mngt_Exp</th>
                <th>Awards</th>
                <th>Activities</th>
                <th>Other_Exp</th>
                <th>Access_Laptop</th>
                <th>Projects_Done</th>
                <th>Projects_Idea</th>
                <th>Imaging Experiences</th>
                <th>ICICI future of Banking</th> 
                <th>Living Mobile</th> 
                <th>Designing for Interaction</th> 
                <th>Designing for<br/>Creative Learning</th> 
                <th>Grassroot Engineering</th>
                <th>Performace Capture</th>
                <th>Design for Sustainability</th>
                <th>Magical Interfaces</th>
                <th>Fabrication Laboratory</th>
                <th>Expect Workshop</th>
                <th>Tech volunteer</th>
                <th>Ref1_Name</th>
                <th>Ref1_Contact</th>
                <th>Ref1_Position</th>
                <th>Ref1_Relation</th>
                 <th>Ref2_Name</th>
                <th>Ref2_Contact</th>
                <th>Ref2_Position</th>
                <th>Ref2_Relation</th> 
                <th>Profile Type</th> 
                </tr> </thead>"; 

                  function write_data($num)
                      {

                        $val="";
                        switch ($num) {
                          case 0:
                          $val="N/A";
                          break;

                          case 1:
                            $val="First";
                            break;
                          
                          case 2:
                            $val="Second";
                            break;
                          
                          case 3:
                            $val="Third";
                            break;
                          
                          case 4:
                            $val="Four";
                            break;

                        }
                         return $val;
                      }


                    while($row = mysql_fetch_array($result))
                      {
                      echo "<tr class='success'>";
                      echo "<td>" . $row['form_id'] . "</td>";
                      echo "<td>" . $row['name'] . "</td>";
                      echo "<td>" . $row['dob'] . "</td>";
                      echo "<td>" . $row['email'] . "</td>";
                      echo "<td>" . $row['phone'] . "</td>";
                      echo "<td>" . $row['university'] . "</td>";
                      echo "<td>" . $row['college'] . "</td>";
                      echo "<td>" . $row['major'] . "</td>";
                      echo "<td>" . $row['year'] . "</td>";
                      echo "<td>" . $row['member'] . "</td>";
                      echo "<td>" . $row['gpa'] . "</td>";
                      echo "<td>" . $row['soft_exp'] . "</td>";
                      echo "<td>" . $row['hard_exp'] . "</td>";
                      echo "<td>" . $row['art_exp'] . "</td>";
                      echo "<td>" . $row['mgnt_exp'] . "</td>";
                      echo "<td>" . $row['awards'] . "</td>";
                      echo "<td>" . $row['extra_activity'] . "</td>";
                      echo "<td>" . $row['other_exp'] . "</td>";
                      echo "<td>" . $row['access_laptop'] . "</td>";
                      echo "<td>" . $row['project_done'] . "</td>";
                      echo "<td>" . $row['project_idea'] . "</td>";



                      echo "<td>" . write_data($row['imag_exp']) . "</td>";
                      echo "<td>" . write_data($row['icici_bank']) . "</td>";
                      echo "<td>" . write_data($row['liv_mob']) . "</td>";
                      echo "<td>" . write_data($row['desg_interaction']) . "</td>";

                       echo "<td>" . write_data($row['desg_learning']) . "</td>";
                      echo "<td>" . write_data($row['grass_eng']) . "</td>";
                      echo "<td>" . write_data($row['perf_capture']) . "</td>";
                      echo "<td>" . write_data($row['desg_sustainability']) . "</td>";
                       echo "<td>" . write_data($row['magical_inter']) . "</td>";
                      echo "<td>" . write_data($row['fabrication_lab']) . "</td>";


                      echo "<td>" . $row['expect'] . "</td>";
                      echo "<td>" . $row['tech_volunteer'] . "</td>";
                      echo "<td>" . $row['ref1_name'] . "</td>";
                      echo "<td>" . $row['ref1_contact'] . "</td>";
                      echo "<td>" . $row['ref1_position'] . "</td>";
                      echo "<td>" . $row['ref1_relation'] . "</td>";
                      echo "<td>" . $row['ref2_name'] . "</td>";
                      echo "<td>" . $row['ref2_contact'] . "</td>";
                      echo "<td>" . $row['ref2_position'] . "</td>";
                      echo "<td>" . $row['ref2_relation'] . "</td>";
                      echo "<td>" . $row['profile_type'] . "</td>";
                      echo "</tr>"; }
             echo "</table>"; ?>

  <a href="convert_excel.php"><button class="btn btn-warning">Save Excel File</button></a>

  <?

    include('footer.php');

    ?>

