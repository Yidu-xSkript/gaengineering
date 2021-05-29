<?php

$settings = App\CompanySettings::first();

?>

<footer class="footer">

  <div class="container-fluid clearfix">

    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block" style="font-size: 14px;">Copyright © <?= date('Y');?>

      	<span style="color: #00ce68;">{{$settings->company_name}}</span>. All rights reserved.</span>

    	<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center" style="font-size: 14px;">Hand-crafted & made with<i class="mdi mdi-heart text-danger"></i> by <a href="https://tibebtech.net" target="_blank">Tibebtech</a>

    </span>

  </div>

</footer>