<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style2.css">

<body class="regjistrimi">
  <div class = "login-box">
    <div class="rezervimi">
     <div class="row">
        <div class="col-md-6 login-mng">
          <form action="<?= base_url('pages/procesRezervimi') ?>" method="POST">
            <br>
            <h2 class="logimi">Booking for <?=$this->session->userdata('emri');?></h2><br>
             <div class="logimi2">
              <label>Name:</label>
              <input type = "text" name="emri"  class="form-control" value="<?=$this->session->userdata('emri')?>" disabled>
            Bar/Restaurant:<select name="barrestorant" required="" class="form-control">
                              <option value=""></option>
                              <option value="RestorantVilaBenvenuto">Restorant Vila Benvenuto</option>
                              <option value="FastFoodOpa">Fast Food Opa</option>
                              <option value="RealScampis">Real Scampis</option>
                              <option value="BarFriends">Bar Friends</option>
                              <option value="CoffeHouse">Coffe House</option>
                              <option value="PrestoPasta">Presto Pasta</option>
                              <option value="TruthLoungueBar">Truth LoungueBar</option>
                              <option value="BarLiving">Bar Living</option>
                              <option value="TavernaAttika">Taverna Attika</option>
                              <option value="PiceriBasilico">Piceri Basilico</option>
                              </select>
             Date : <input type="datetime-local" name="data" required="" class="form-control" >
             Number of people :<input type="number" min="1" max="15" name="nrpersonave"  class="form-control"  required=""><br><br>
              <input type = "submit" value="Book" class="btn cta-btn"/>
              <a   href="<?php echo base_url();?>/logout" class="btn cta-btn">Logout</a> 
           </div>
         </form>
     </div>
    </div>
  </div>
 </div>
</body>
