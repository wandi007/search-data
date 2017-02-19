<?php
  $conek=mysqli_connect('localhost','root','');
  mysqli_select_db($conek,'datawilayah');
 ?>
<table border="1px">
  <tr>
    <th>no</th>
    <th>propinsi</th>
  </tr>
  <?php
  if(isset($_GET['nama_prov'])){
    $nama_prov=$_GET['nama_prov'];
    $tampil=mysqli_query($conek,"SELECT * FROM provinsi where nama_prov like '%$nama_prov%'");
  }else{
    $tampil=mysqli_query($conek,"SELECT * FROM provinsi");
  }
    while ($data=mysqli_fetch_array($tampil)) {
  ?>
  <tr>
    <td><?php echo $data['id_prov']; ?></td>
    <td><?php echo $data['nama_prov']; ?></td>
  </tr>
  <?php
    }
  ?>
</table>
