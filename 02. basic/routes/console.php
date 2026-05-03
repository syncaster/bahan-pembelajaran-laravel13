<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('hello-world', function(){
    $this->comment('Ini adalah Komen dari hello-world');
    $this->info('CommandLine hello-world Sukses Dijalankan');    
})->purpose('Menampilkan hello-world di command line');