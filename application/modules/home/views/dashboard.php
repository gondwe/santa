
<div class="row">
<div class="float-left d-block">
	<div class="card pr-5" style="">
	  <img class="card-img-top ml-4 pt-md-4" width="100px" src="<?=base_url('assets/images/santa.png')?>" alt="gift">
	  <div class="card-body">
		<h5 class="card-title text-info"><?=$this->session->email?></h5>
		
	  </div>
	  <ul class="list-group list-group-flush">
		<li class="list-group-item">Category : Basic</li>
		<li class="list-group-item">Earnings : KES.0.00</li>
		<li class="list-group-item">Target : <?=$refcount?>/5 referals</li>
		<li class="list-group-item">Bonuses : 3 Coins</li>
	  </ul>
	  <div class="card-body">
		<a href="<?=base_url('auth/logout')?>" class="card-link text-danger"><i class="fa fa-sign-out"></i>Logout</a>
	  </div>
	</div>
</div>
<div class="mt-md-2 mt-sm-2 p-4">
<a href="<?=base_url('auth/')?>" class='btn btn-primary pull-right'>Admin Panel</a>
	<?php 
		// echo("<h2 class='text-success'>Welcome [".."]</h2>"); 
		$hash= md5($this->session->user_id).$this->session->user_id;
		$trulink = base_url("auth/register/".$hash);
		pf("http://santaworks.net/reg/".$hash);
		
	?>
	<a href="<?=$trulink?>" class="card-link">Shareable link</a>
	<div class='m-md-5'>
		<?php $this->load->view("pricePlans")?>
	</div>
</div>


<style>
	.card { border-bottom:0px solid #fff;}
	.text-dim { color:#dcdcdc;}
	.card-img-top { width:200px;}
</style>