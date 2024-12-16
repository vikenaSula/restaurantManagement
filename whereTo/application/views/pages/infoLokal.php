<!--Slidet e info lokal-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style2.css"> 
   <body  class="trupiInfo"> 

 
 <?php 
 $kapaciteti = $post['kapaciteti'];
 $vendeTeLira = $post['vende_te_lira'];
 $eshteHapur = $post['hapur'];
 $emri=$post['emri'];
 $foto1= $post['foto1'];
 $foto2= $post['foto2'];
 $foto3= $post['foto3'];
 $menu = $post['menu'];
  
     if($eshteHapur == 1){ 
          $this->session->set_userdata('hapur','po');
    }
     else{
           $this->session->unset_userdata('hapur');
    }

    if($vendeTeLira==0){
          $this->session->set_userdata('eshtePlot','po');
          $this->session->unset_userdata('eshteBosh');
    }
    else if($vendeTeLira==$kapaciteti){
          $this->session->set_userdata('eshteBosh','po');
          $this->session->unset_userdata('eshtePlot');
    }
    else{
         $this->session->unset_userdata('eshtePlot');
         $this->session->unset_userdata('eshteBosh');
     }
    
     ?>

 <section class="infoinfo">
  <div class="container sesioni-lokal">
   <h1 class="logimi koka"><?php echo $post['emri']?></h1>
    <div class="infoLokal">

    <?php    
    if($this->session->userdata('hapur')){
        echo "<div class='open'>HAPUR</div> ";
        echo  "<h3>Numri i vendeve te lira ne lokal : $vendeTeLira</h3><br>";
    if($this->session->userdata('eshtePlot')){
       echo "<h4>Lokali eshte plote ! </h4>";
    }
    else if($this->session->userdata('eshteBosh')){
     echo "<h4>Lokali eshte bosh ! </h4>";
     }
    }else echo "<div class='closed'>MBYLLUR</div> ";
     ?>
   </div><br><br>

 <h1 class="logimi koka">Rreth Nesh</h1>
 <div class="w3-content w3-display-container" >
  <img class="mySlides" src="<?php echo base_url().$foto1;?>" style="width:100%; height:500px">
  <img class="mySlides" src="<?php echo base_url().$foto2;?>" style="width:100%; height:500px">
  <img class="mySlides" src="<?php echo base_url().$foto3;?>" style="width:100%; height:500px">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
  <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
  <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
     <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
     <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
     <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div> 
</div>
<br><br><br><br>

   <h1 class="logimi koka">Menu</h1>
   <div class="w3-content w3-display-container" >
     <img src="<?php echo base_url().$menu;?>" class="menuja" >
   </div>
  </div>
 </div>
</section>
</body>


