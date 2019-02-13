<?php
/**
 * Created by PhpStorm.
 * User: cbrownroberts
 * Date: 1/6/16
 * Time: 8:47 AM
 */

require_once("../../includes/autoloader.php");
require_once("../../includes/config.php");

use SubjectsPlus\Control\Querier;
use SubjectsPlus\Control\Guide\PlusletData;
header('Content-Type: application/json');

$db = new Querier;

$objPlusletData = new SectionData($db);
$objPlusletData->fetchSectionIdsBySubjectId($_GET['subject_id']);

echo $objPlusletData->toJSON();

// 2142263024

// 2142263021