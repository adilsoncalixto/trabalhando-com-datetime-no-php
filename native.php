<?php

//http://php.net/manual/pt_BR/class.datetime.php
//tabela para formatar data: http://php.net/manual/pt_BR/function.date.php

$date_time = new \DateTime('2016-08-15');

$date_time->add(new \DateInterval('P1Y5M28DT24H30M21S'));
$date_time->sub(new \DateInterval('P1Y5M28DT24H30M21S'));
$date_time->sub(new \DateInterval('P31Y'));

var_dump($date_time->format('d \d\e F \d\e Y'));

$formatter = new IntlDateFormatter('pt_BR', IntlDateFormatter::GREGORIAN, IntlDateFormatter::NONE);

var_dump($formatter->format($date_time));

var_dump($date_time <= new \DateTime);
