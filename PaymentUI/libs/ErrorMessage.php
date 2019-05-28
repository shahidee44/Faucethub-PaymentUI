<?php
class ErrorMessage {
    public static function show($msg) {
    	include VIEWPATH.'header.php';
        echo "<b> Error: </b> " . $msg . "<br/> Click <a href=". $_SERVER['HTTP_REFERER'] ."> here </a> to the previous page.";
        include VIEWPATH.'footer.php';
    }
}
?>