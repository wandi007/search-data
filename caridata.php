<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mencari data</title>
    <script type="text/javascript"src='jquery-3.1.1.min.js'></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $('#cari').keydown(function () {
          var nama=$('#cari').val();
          $.ajax({
            method : "GET",
            url    : "tes.php",
            data   : {nama_prov:nama}
          }).done(function (data) {
            $('div').html(data);
          });
        });
        $('div').load('tes.php');
      });
    </script>
  </head>
  <body>
    <input type="text" name="provinsi"id='cari'>
    <button type="button"id="provinsi">Cari</button>
    <div>

    </div>
  </body>
</html>
