<?php
   require_once 'Program.php';
  
   $userObject = new User();
   $type=$_POST['type'];
//   header("Content-Type: application/json");
   switch($type){
       case 1:
       $title=$_POST['title'];

       echo $userObject-> createSection($title);

       break;
       case 2:
       $sno=$_POST['section_no'];
       $ssno=$_POST['subsection_no'];
       $sstitle=$_POST['title'];
       $ssdetail=$_POST['detail'];
       echo $userObject-> createSubsection($sno,$ssno,$sstitle,$ssdetail);

       break;

       case 3:
        $id=$_POST['id'];
        $title=$_POST['title'];
        $detail=$_POST['detail'];
        echo $userObject->updateSubsection($id,$title,$detail);
       break;
        
       case 4:
       $id=$_POST['id'];
       echo $userObject->deleteSection($id);
       break;

       case 5:
       $interview_type=$_POST['i_type'];
       $interview_question=$_POST['question'];
       $interview_answer=$_POST['answer'];

       echo $userObject->createInterview($interview_type,$interview_question,$interview_answer);

       break;
       case 6:
        $statement=$_POST['statement'];
        $code=$_POST['code'];
        $output=$_POST['output'];

        echo $userObject->createProgram($statement,$code,$output);
       break;
       case 7:
       $id=$_POST['id'];
       echo $userObject->deleteSubsection($id);
       break;

       case 8:
       $id=$_POST['id'];
       echo $userObject->deleteProgram($id);
       break;
       case 9:
       $id=$_POST['id'];
       echo $userObject->deleteInterview($id);
       break;

       case 10:
        $id=$_POST['id'];
        $program_statement=$_POST['statement'];
        $program_code=$_POST['code'];
        $program_output=$_POST['op'];

        echo $userObject->updateProgram($id,$program_statement,$program_code,$program_output);

       break;

       case 11:
        $id=$_POST['id'];
        $interview_type=$_POST['interview_type'];
        $interview_question=$_POST['question'];
        $interview_answer=$_POST['answer'];
       echo $userObject->updateInterview($id,$interview_type,$interview_question,$interview_answer);
       break;


   }

  //$json_array2 = $userObject->getInterview();
    
 // header("Content-Type: application/json");
 // echo json_encode($json_array2,JSON_PRETTY_PRINT);  
  
?>