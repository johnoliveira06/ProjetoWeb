<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="insertImg.php" method="POST"  enctype="multipart/form-data">

  <div class="field">
    <div class="field-label">
      Arquivo de imagem:
    </div>
    <div class="field-data">
      <input type="file" id="file" name="file">
    </div>
  </div>
    <div class="button-container">
      <input type="submit" class="submit-button" id="botao_submit" name="botao_submit"
      value="Fazer upload">
  </div>
</form>
</body>
</html>