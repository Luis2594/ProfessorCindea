<?php

include_once './CurriculumBusiness.php';

$id = $_POST['id'];
$curriculumBusiness = new CurriculumBusiness();
$result = $curriculumBusiness->getCurriculumCourseEnrollment($id);
echo json_encode($result);
