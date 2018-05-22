<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentelella Alela! | </title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url(); ?>assets/vendors/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/css/animate.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo base_url(); ?>assets/vendors/css/nprogress.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?php echo base_url(); ?>assets/vendors/css/custom.min.css" rel="stylesheet">
</head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php echo form_open(base_url().'Utilisateur',array('method'=>'post'));?>
            <h1>TELEOPERATEUR</h1>
            <input type="hidden"  name="table" value="agent"/>
              <div>
                <input type="email" class="form-control" placeholder="Adresse email" name="mail" required="" />
                  <?php echo form_error('mail'); ?>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Mot de passe" name="pass" required="" />
                  <?php echo form_error('pass'); ?>
              </div>
              <?php if ($error!=""){ ?>
                <div class="alert alert-danger">
                  <?php echo $error; ?>
                </div>
              <?php } ?>
              <div>
                <input type="submit" class="btn btn-default submit" value="Je me connecte">
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Etes-vous un Manager?
                  <a href="#signup" class="to_register"> Connectez-vous ici! </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> TeleOperateur!</h1>
                  <p>©2017 All Rights Reserved. TeleOperateur.</p>
                </div>
              </div>
            <?php echo form_close(); ?>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <?php echo form_open(base_url().'Utilisateur',array('method'=>'post'));?>
            <h1>MANAGER</h1>
            <input type="hidden"  name="table" value="manager"/>
            <div>
              <input type="email" class="form-control" placeholder="Adresse email" name="mail" required="" />
                <?php echo form_error('mail'); ?>
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Mot de passe" name="pass" required="" />
                <?php echo form_error('pass'); ?>
            </div>
            <?php if ($error!=""){ ?>
              <div class="alert alert-danger">
                <?php echo $error; ?>
              </div>
            <?php } ?>
            <div>
              <input type="submit" class="btn btn-default submit" value="Je me connecte">
              <a class="reset_pass" href="#">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Etes-vous un Agent ?
                <a href="#signin" class="to_register"> Connectez-vous ici! </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> TeleOperateur!</h1>
                <p>©2017 All Rights Reserved. TeleOperateur.</p>
              </div>
            </div>
            <?php echo form_close(); ?>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
