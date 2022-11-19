<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vize Final Ortalama</title>
    </head>
    <body>
      <div class="container"> 
              <?php
               if(isset($_POST["kontrol"]))//kontrol adında bir form nesnesi var mı kontrolü yapılıyor
               {
                   $vize=$_POST["vize"];
                   $final=$_POST["final"];
                   $sonuc=$vize*0.4 + $final*0.6;
                   if($sonuc >= 50 && $final >= 50)
                   {
                       echo "<h1 class='text-info'>$sonuc ,GEÇTİ</h1>";
                   }
                   else
                   {
                       echo "<h1 class='text-danger'>$sonuc ,KALDI</h1>";
                   }
               }     
                ?>
            <hr>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
              <div class="form-group">
                <label for="vize">Vize Notu:</label>
                <input type="text" class="form-control" name="vize">
              </div>
              <div class="form-group">
                <label for="final">Final Notu:</label>
                <input type="text" class="form-control" name="final">
              </div>
              <button type="submit" name="kontrol" class="btn btn-default" >Kontrol Et</button>
            </form>
        </div>
    </body>
</html>