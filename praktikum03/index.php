<?php
require_once("function/call.page.php");
callpage("header");
callpage("navbar");
if (isset($_GET["page"])) {
    callpage($_GET["page"]);
}
callpage("footer");

?>
