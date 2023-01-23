<?php
// author: yandricr

namespace EmailCheck\Email;

use Exception;

class Email {
    public function verify($mail = ""){
        if(empty($mail)){
            return '{
                "message": "email_not_entered",
                "description": "there is no email to verify"
            }';
        } else {
            function sEmail($ml){
                $op = @file_get_contents("https://emailcheck.projectsrpp.repl.co/em/".urlencode($ml));
                if($op != true){
                    sleep(0);
                    sEmail($ml);
                } else {
                    return $op;
                }
            }
            return sEmail($mail);
        }
    }
}
?>