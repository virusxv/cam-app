
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['photo'])) {
  $photo = base64_decode($_POST['photo']);
  file_put_contents('/ścieżka/do/katalogu/na/serwerze/zdjęcia.jpg', $photo);
  echo 'Zdjęcie zostało zapisane na serwerze.';
}
?>
