<!DOCTYPE html>
<html>
<head>
	<title>Tabela</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style2.css">
</head>
<body class="regjistrimi">
  <div class = "login-box">
        <div class="col-md-6 login-mng">
         <h2 class="logimi">Rezervimet e <?php echo $this->session->userdata('emriLokalit');?></h2><br>

        <table  class="stil-tabele"  border="2px" >
    <thead><tr>
      <th>Numri i Personave</th>
      <th>Emri i Perdoruesit</th>
      <th>Emaili</th>
      <th>Data e Rezervimit</th>
    </tr>
  </thead>

  <tbody>
  <?php
  foreach ($post->result() as $row) {
            echo "<tr>
      <td>$row->numri_personave</td>
      <td>$row->emri</td>
      <td>$row->email</td>
      <td>$row->data</td>
                </tr>";
    }
   ?>
  </tbody>
 </table>
</body>
</html>