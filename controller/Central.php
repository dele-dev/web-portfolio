<?php
session_start();

include  ($dataLink == "single") ? "./model/DatabaseConnection.php" : "../model/DatabaseConnection.php";

include ($dataLink == "single") ? "./controller/Bio.php" :"../controller/Bio.php";
include ($dataLink == "single") ? "./controller/Award.php":"../controller/Award.php";
include ($dataLink == "single") ? "./controller/Faq.php":"../controller/Faq.php";
include ($dataLink == "single") ? "./controller/Contact.php" :"../controller/Contact.php";
include ($dataLink == "single") ? "./controller/Expirience.php":"../controller/Expirience.php";
include ($dataLink == "single") ? "./controller/Framework.php":"../controller/Framework.php";
include ($dataLink == "single") ? "./controller/Message.php":"../controller/Message.php";
include ($dataLink == "single") ? "./controller/Hoobie.php":"../controller/Hoobie.php";
include ($dataLink == "single") ? "./controller/Languages.php":"../controller/Languages.php";
include ($dataLink == "single") ? "./controller/Project.php":"../controller/Project.php";
include ($dataLink == "single") ? "./controller/Skill.php":"../controller/Skill.php";
include ($dataLink == "single") ? "./controller/SoftSkill.php":"../controller/SoftSkill.php";
include ($dataLink == "single") ? "./controller/Tool.php":"../controller/Tool.php";
include ($dataLink == "single") ? "./controller/BasicInfo.php":"../controller/BasicInfo.php";
include ($dataLink == "single") ? "./controller/util.php":"../controller/util.php";