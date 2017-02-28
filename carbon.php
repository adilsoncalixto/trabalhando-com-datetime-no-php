<?php

require __DIR__.'/vendor/autoload.php';

Carbon\Carbon::setLocale('pt_BR');
setLocale(LC_TIME, 'Portuguese');

$date_time = new \DateTime('2016-08-15');

$carbon = Carbon\Carbon::instance($date_time)
    ->subYears(32)
    ->diffForHumans();

var_dump($carbon);

//tabela de formatação de data: http://www.php.net/strftime

$carbon = Carbon\Carbon::instance($date_time)
    ->subYears(32)
    ->formatLocalized('%e de %B de %G');

var_dump($carbon);
