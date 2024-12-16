<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style2.css">

<body class="regjistrimi">
<?php echo form_open('pages/validimMng'); ?>
 <div class = " login-box">
  <div class="error">
   <?php echo validation_errors(); ?></div>
     <div class="row">
        <div class="col-md-6 login-mng">
          <form>
            <br>
            <h2 class="logimi">Manager Login</h2><br>
             <div class="logimi2">
               <label>Name</label>
               <input   type ="text" name="emri" class="form-control" /></div><br>
             <div class = "logimi2"> <label>Password</label>
               <input type ="password" name="fjalekalimi" class="form-control" /> </div><br><br><br><br>
               <input type = "submit" value="Login" class="btn cta-btn"/>
            </form>
        </div>
      </div>
    </div>
  </body>