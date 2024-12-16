<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style2.css">

<body class="regjistrimi">
 <div class = " login-box">
    <div class="row">
        <div class="col-md-6 login-left">
          <div class="error">
            <?php echo validation_errors(); ?>
          </div>
          <form action="<?= base_url('pages/procesLogimi') ?>" method="POST">
            <br>
            <h2 class="logimi">Login</h2><br>
             <div class="logimi2">
              <label>Name</label>
               <input   type ="text" name="emri2" class="form-control" /></div>
             <div class = "logimi2">
              <label>Password :</label>
               <input type ="password" name="pasi2" class="form-control" /> </div><br><br><br><br>
               <input type = "submit" value="Login" class="btn cta-btn"/>
            </form>
        </div>
     <div class="col-md-6 login-right"><br>
  
      <form action="<?= base_url('pages/regjistrimi') ?>" method="POST">
     <h2 class="logimi">Register</h2><br>
              <div class="logimi2"><label>Name</label>
                <input type ="text" name="emri" class="form-control" value="<?php echo set_value('emri'); ?>"/></div>
              <div class="logimi2"><label>Email</label>
                <input type ="email" name="emaili" value="<?php echo set_value('emaili'); ?>"class="form-control" /></div>
              <div class="logimi2"><label>Password</label>
                <input type ="password" name="pasi" value="<?php echo set_value('pasi'); ?>"class="form-control" /></div><br>
             <input type = "submit" value="Register" class="btn cta-btn"/>
          </form>
      </div> 
    </div>
   </div>
</body>