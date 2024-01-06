<?php
    function chkLength(string $word, int $min, int $max){
        $length = strlen($word);
        if($length < $min || $length > $max){ 
            return FALSE;
        }
        return TRUE;
    }

    function sanitize(string $word){
        $word = trim($word);
        $word = htmlspecialchars($word, ENT_QUOTES, 'UTF-8');
        return $word;
    }
?>