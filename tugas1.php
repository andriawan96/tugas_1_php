<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tugas1</title>
  </head>
  <body>
    <h1>Daftar Menu</h1>
    <?php
    //daftar menu
    $menu1 = "Ayam Goreng";
    $menu2 = "Ayam Bakar";
    $menu3 = "Ayam Sayur";
    $menu4 = "Tempe Goreng";
    $menu5 = "Tahu Goreng";
    $menu6 = "Soto";
    $menu7 = "Nasi Putih";
    $menu8 = "Es Teh";
    $menu9 = "Tebu";
    //daftar Harga
    $harga1 = 13000;
    $harga2 = 15000;
    $harga3 = 13000;
    $harga4 = 1000;
    $harga5 = 1000;
    $harga6 = 3000;
    $harga7 = 5000;
    $harga8 = 4000;
    $harga9 = 5000;
     ?>

      <table>
          <tr>
            <td><li><?php echo "$menu1"; ?></li></td>
            <td>=</td>
            <td><?php echo "Rp. $harga1"; ?></td>
          </tr>
          <tr>
            <td><li><?php echo "$menu2"; ?></li></td>
            <td>=</td>
            <td><?php echo "Rp. $harga2"; ?></td>
          </tr>
          <tr>
            <td><li><?php echo "$menu3"; ?></li></td>
            <td>=</td>
            <td><?php echo "Rp. $harga3"; ?></td>
          </tr>
          <tr>
            <td><li><?php echo "$menu4"; ?></li></td>
            <td>=</td>
            <td><?php echo "Rp. $harga4"; ?></td>
          </tr>
          <tr>
            <td><li><?php echo "$menu5"; ?></li></td>
            <td>=</td>
            <td><?php echo "Rp. $harga5"; ?></td>
          </tr>
          <tr>
            <td><li><?php echo "$menu6"; ?></li></td>
            <td>=</td>
            <td><?php echo "Rp. $harga6"; ?></td>
          </tr>
          <tr>
            <td><li><?php echo "$menu7"; ?></li></td>
            <td>=</td>
            <td><?php echo "Rp. $harga7"; ?></td>
          </tr>
          <tr>
            <td><li><?php echo "$menu8"; ?></li></td>
            <td>=</td>
            <td><?php echo "Rp. $harga8"; ?></td>
          </tr>
          <tr>
            <td><li><?php echo "$menu9"; ?></li></td>
            <td>=</td>
            <td><?php echo "Rp. $harga9"; ?></td>
          </tr>
      </table>

  </body>
</html>
