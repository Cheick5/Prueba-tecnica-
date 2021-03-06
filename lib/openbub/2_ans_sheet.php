<?php

require_once ('../../../../lib' . '/pdflib.php');
require_once ('../../../../mod/emarking/lib/fpdi/fpdi.php');
    if($CFG->version > 2015111600) {
        require_once ($CFG->dirroot . "/lib/pdflib.php");
        require_once ($CFG->dirroot . "/mod/emarking/lib/fpdi/fpdi_bridge.php");
    } else {
        require_once ($CFG->dirroot . "/mod/assign/feedback/editpdf/fpdi/fpdi2tcpdf_bridge.php");
    }

require_once('ans_pdf_open.php'); // for more documentation, see the top of this file


// Variables to be assigned
$exam= "Cumulative Assessment 10-B";
$grade= "Grade 4";
$teacher= "Mr. Smithman";
$subject= "Language Arts";
$instancedate= "Fall 2009";
$exam_id="786B";
$student_code="1870654129";
$student_name="Rosales, Jose";

// Create a new BubPdf object. 
$BubPdf=new BubPdf('P', 'in', 'LETTER', true);

// NewExam sets the margins, etc
BP_NewExam($CorrectAnswersProvided=TRUE);

BP_StudentAnswerSheetStart();

// A simple 12 question answer sheet
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',4, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',7, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',8, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',4, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',7, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',8, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',4, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',7, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',8, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',4, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',7, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',8, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',4, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',7, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',8, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',4, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',7, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',8, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',4, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',7, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',8, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',4, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',7, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',8, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);
BP_AddAnswerBubbles('A',5, 1,FALSE,false,null);

BP_StudentAnswerSheetComplete();

// the CreateExam call can be used to retrieve an array of the zone assignments
$myZones = BP_CreateExam();

//display the PDF of the Exam
$BubPdf->Output("exam_".$exam_id.".pdf"); // NOTE: "Save a Copy" in the acrobat plugin seems to ignore the name, though "File->Save As..." in the browser does not.

?>
