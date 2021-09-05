<html>
<head>
	<meta charset="utf-8">
	<title>Opportunity Management</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Opportunity Management</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>accounts">Accounts</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>opportunities">Opportunities</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>about">About</a>
        </li>
       
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-right">
        <?php if (!$this->session->userdata('logged_in')): ?>
         <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>users/login">Log In</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>users/register">Register</a>
          </li>
        <?php endif ?>

        <?php if ($this->session->userdata('logged_in')): ?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>accounts/create">Create Account</a>
          </li>

          <li class="nav-item">
           <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>opportunities/create">Create Opportunity</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>users/logout">Log Out</a>
          </li>
        <?php endif ?>
      </ul>

    </div>
  </div>
</nav>



<div class="container">
  <!-- Flash messages -->
  <?php if($this->session->flashdata('user_registered')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered'). '</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('account_created')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('account_created'). '</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('account_updated')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('account_updated'). '</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('opportunity_created')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('opportunity_created'). '</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('opportunity_updated')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('opportunity_updated'). '</p>'; ?>
  <?php endif; ?>

   <?php if($this->session->flashdata('opportunity_deleted')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('opportunity_deleted'). '</p>'; ?>
  <?php endif; ?>

   <?php if($this->session->flashdata('account_deleted')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('account_deleted'). '</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('login_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed'). '</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('user_loggedin')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin'). '</p>'; ?>
  <?php endif; ?>

   <?php if($this->session->flashdata('user_loggedout')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout'). '</p>'; ?>
  <?php endif; ?>