
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['photo'])) {
  $photo = base64_decode($_POST['photo']);
  file_put_contents('foto.jpg', $photo);
  echo 'Zdjęcie zostało zapisane na serwerze.';
}
?>
