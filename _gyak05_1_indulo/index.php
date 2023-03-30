<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kapcsolat</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <h1>Kapcsolat</h1>
    <form name="kapcsolat" action="php/kapcsolat.php" method="post">
		<div>
      <label>
        <select name="szulnap">
          <?php
          for($i=1;$i<=31;$i++) {
            echo '<option value="'.$i.'">'.$i.'</option>';
          }
          ?>
        </select>
        <select name="szulho">
          <?php
          for($i=1;$i<=12;$i++) {
            echo '<option value="'.$i.'">'.$i.'</option>';
          }
          ?>
        </select>
        <select name="szulev">
          <?php
          for($i=1920;$i<=2021;$i++) {
            echo '<option value="'.$i.'">'.$i.'</option>';
          }
          ?>
        </select>
        Születési dátum:
      </label>
		</div>
    <?php    for ($suly = 0; $suly <= 120; $suly += 30) { ?>        <div>            <label>                <input type="radio" name="suly" value="<?= $suly ?>">                <span><?php echo $suly." - ".($suly + 30); ?></span>                <?= $suly == 0 ? "Testsúly: " : "" ?>            </label>        </div>        <?php }?>
    <div>
      <label>
        <input type="text" name="nev" size="20" required pattern="[A-Za-z]+" minlength="8" maxlength="20">
        Név (minimum 8, maximum 20 karakter):
        </label>
        </div>
        <div>
      <label>
        <input type="text" name="email" size="30" required  maxlength="40">
        E-mail-cím (max. 40 karakter):
        </label>
        </div>
        <div>
          <label>
            <textarea name="szoveg" cols="40" rows="10" require minlength="20"></textarea>
            Üzenet (min. 20 karakter)
        </label>
        </div>
        <div>
          <input type="submit" value="Küldés">
        </div>
  </form>
</body>
</html>
