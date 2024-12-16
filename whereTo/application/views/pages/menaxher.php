<html>
<head>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"   integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style2.css">
</head>

 <?php 
 $kapaciteti = $post['kapaciteti'];
 $numriVendeveTelira = $post['vende_te_lira'];
 $eshteHapur = $post['hapur'];
 $emri=$post['emri'];
 $IdMng = $post['id_menaxher'];

  $this->session->set_userdata('emriLokalit',$emri);

 if($kapaciteti == $numriVendeveTelira){
    $this->session->set_userdata('eshteBosh','po');
 } else{
     $this->session->unset_userdata('eshteBosh');
 }
  if($numriVendeveTelira == 0){
    $this->session->set_userdata('eshtePlot','po');
 } else{
     $this->session->unset_userdata('eshtePlot');
 }

?>

<body class="regjistrimi">
  <div class = "login-box2">
    <div class="menaxhimi">
     <div class="row">
        <div class="col-md-6 login-mng">
         <h2 class="logimi">Menaxheri i <?php echo $emri ?></h2><br>
          <div class="logimi2">
          <div class="veprimeMenaxheri">

      <?php 
       if(!$this->session->userdata('hapur')) { 
       echo "<div class='closed'>MBYLLUR</div>
       <a class= 'btn cta-btn' href=".base_url('hapLokalin/'.$emri).">HAP</a>";
        }else{ 
         echo" <div class='open'>HAPUR</div>
         <h3>Numri i vendeve te lira ne lokal : $numriVendeveTelira  nga $kapaciteti vende
         </h3><br>"; 
          if($this->session->userdata('eshtePlot')) {
          echo "<h4 style='color:red'>Lokali eshte plote ! </h4>";
          }
          else if($this->session->userdata('eshteBosh')){
            echo "<h4 style='color:#90ee90'>Lokali eshte bosh ! </h4>";
          }
         echo"<a href=".base_url('shtoVend/'.$emri)."><input type='submit' name='submit'  class='btn cta-btn' value='SHTO VEND'></a>
         <a href=".base_url('zbritVend/'.$emri)."><input type='submit' name='submit' class='btn cta-btn' value='ZBRIT VEND'></a>
         <a href=".base_url('eshtePlot/'.$emri)."><input type='submit' name='submit'  class='btn cta-btn' value='ESHTE PLOT'></a>
         <a href=".base_url('eshteBosh/'.$emri)."><input type='submit' name='submit'  class='btn cta-btn' value='ESHTE BOSH'></a>
         <br><br>
         <a class='btn cta-btn' href=".base_url('mbyllLokalin/'.$emri).">
          MBYLL</a>";
        }?>
   <br><br> 
  </div>
 <br><br>

  <!--TABELA -->
  <a class='buttonTemp' href="<?php echo base_url('shfaqTabele/'.$IdMng); ?>"><input type='submit' name='submit'  class='btn cta-btn' value='Tabela e Rezervimeve'></a>
  <br><br><br>

  <!--Eventet dhe Oferta-->
   <?php echo form_open_multipart('pages/shtoEvent') ; ?>
   <form>
   <div class="form-group "><h4 class="logimi">Shto Event </h4></div>
   <input type="file" name="userfile" size="20">
   <input type="submit" value="SHTO" class="btn cta-btn" name="submit" >
   </form><br><br>

   <?php echo form_open_multipart('pages/shtoOferte') ; ?>
   <form>
   <div class="form-group "><h3 class="logimi"> Shto Oferte </h3></div>
   <input type="file" name="userfile2" size="20">
   <input type="submit" value="SHTO" class="btn cta-btn" name="submit" >
   </form><br><br>
 
    <a href="<?php echo base_url();?>/logoutMng" ><input type='submit' name='submit'  class='btn cta-btn' value=' DIL '></a>
   </div>
  </div>
  </div>
 </div>
</div>
</body>
</html>
