<?php
 
// Auto deploy website after github receives a push
// Written by Lei Zhao on 09/13/13
 
if (isset($_POST["payload"])) {
  `touch ../../git/webhook/updated`;
}
 
