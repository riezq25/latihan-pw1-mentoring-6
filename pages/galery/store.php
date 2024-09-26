<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/utils/boot.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/utils/repositories/GaleryRepository.php';

$galeryRepository = new GaleryRepository;

$data = $_POST;
$file = $_FILES;

// upload file
$target_dir = $_SERVER['DOCUMENT_ROOT'] . "/uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);

  if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

// mendapatkan lokasi file
$image = $target_file;

$insertData = [
  'image' => $image,
  'name'  => $_POST['name'],
  'description'  => $_POST['description'],
];

// insert ke database
$galeryRepository
  ->create($insertData);

// redirect ke menu galery/index

var_dump($target_file);
die;
