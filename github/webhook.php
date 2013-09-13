<?php
 
// Auto deploy website after github receives a push
// Written by Lei Zhao on 09/13/13
 
if ($_POST["payload"]) {
  `/home/cmb/git/website-dev.git/hooks/github-webhook 2>&1`;
  `/home/cmb/git/website-prod.git/hooks/github-webhook 2>&1`;
}
 
