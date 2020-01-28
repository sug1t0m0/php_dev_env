<?php
// src/Sample.php
class Sample
{
    public function test(): void
    {
        if ($_SERVER['HTTPS']==='on') {
            header("Location: https://{$_SERVER['HTTP_HOST']}");
        }
    }
}
