<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/utils/boot.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/utils/repositories/GaleryRepository.php';

$galeryRepository = new GaleryRepository;

view('galery/index.php');
