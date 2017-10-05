<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php $this->title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php $this->addMainCSS("templates/{$this->name}/css/bootstrap.css"); ?>
    <?php $this->addMainCSS("templates/{$this->name}/css/bootstrap-grid.css"); ?>
    <?php $this->addMainCSS("templates/{$this->name}/css/bootstrap-reboot.css"); ?>
    <?php $this->addMainCSS("templates/{$this->name}/css/style.css"); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <?php $this->addMainJS("templates/{$this->name}/js/bootstrap.js"); ?>
    <?php $this->addMainJS("templates/{$this->name}/js/jquery-modal.js"); ?>
    <?php $this->addMainJS("templates/{$this->name}/js/core.js"); ?>
    <?php $this->addMainJS("templates/{$this->name}/js/modal.js"); ?>

    <?php if (cmsUser::isLogged()){ ?>
        <?php $this->addMainJS("templates/{$this->name}/js/messages.js"); ?>
    <?php } ?>
    <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/livingston-css3-mediaqueries-js/1.0.0/css3-mediaqueries.min.js"></script>
    <![endif]-->
    <?php $this->head(); ?>
    <meta name="csrf-token" content="<?php echo cmsForm::getCSRFToken(); ?>" />
    <style><?php include('options.css.php'); ?></style>
</head>
<body>
    <div class="container-fluid">
        <header>

            <div class="title-header row align-items-center">
                <div class="col text-center">Anastasia</div>
            </div>
            <div class="row">
                <div class="col" id="widget_pos_header"><?php $this->widgets('header', false, 'wrapper_plain'); ?></div>
            </div>
        </header>
        <?php $this->body(); ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>