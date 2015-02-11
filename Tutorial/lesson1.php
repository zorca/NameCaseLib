<?php
use NCL\NCLNameCaseRu;
use NCL\NCLNameCaseUa;

header('Content-type: text/html; charset=utf-8');


/**
 * Создаем обьект класса. 
 * Теперь библиотека готова к работе 
 */
$nc = new NCLNameCaseRu();
/**
 * Производим склонения и выводим результат на экран
 */
print_r($nc->q("Андрей Николаевич"));

/**
 * Создаем объект класса. 
 * Теперь библиотека готова к работе 
 */
$nc = new NCLNameCaseUa();
/**
 * Производим склонения и выводим результат на экран
 */
print_r($nc->q("Андрій Миколайович"));
?>