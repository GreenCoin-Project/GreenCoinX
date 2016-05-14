<div style="margin-left:20px;margin-right:20px;">
	<div class="row">
		<div class="col-md-2"> 
		<h3><?=$t('Mine / Generate GreenCoinX')?>?</h3>
<?php echo $this->_render('element', 'greencoin');?>				
		</div>
		<div class="col-md-10"> 
		<h3><?=$t('Mine / Generate GreenCoinX')?></h3>
		<div class="bs-example" data-example-id="carousel-with-captions">
    <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div  style="height:400px;width:600px;margin-left:90px;padding-top:5px">
											<img src="/img/Mine-001.jpg" alt="Select Help">
										</div>
          <div class="carousel-caption-dark" style="margin-top:10px">
            <h5><?=$t('Select ')?>Help, Debug</h5>
            <p><?=$t('Go to menu')?>: Debug</p>
          </div>
        </div>
        <div class="item">
          <div  style="height:400px;width:600px;margin-left:90px;padding-top:5px">
											<img src="/img/Mine-002.jpg" alt="Console">
										</div>
          <div class="carousel-caption-dark" style="margin-top:10px">
            <h5><?=$t('Console')?></h5>
            <p><?=$t('Select Console')?></p>
          </div>
        </div>
        <div class="item">
          <div  style="height:400px;width:600px;margin-left:90px;padding-top:5px">
											<img src="/img/Mine-003.jpg" alt="Enter label for address">
										</div>
          <div class="carousel-caption-dark" style="margin-top:10px">
            <h5>setgenerate</h5>
            <p><?=$t('Command')?>: setgenerate true -1; <?=$t('This will generate GreenCoinX coins')?></p>
          </div>
        </div>
        <div class="item">
          <div  style="height:400px;width:600px;margin-left:90px;padding-top:5px">
											<img src="/img/Mine-004.jpg" alt="Enter label for address">
										</div>
          <div class="carousel-caption-dark" style="margin-top:10px">
            <h5>getmininginfo</h5>
            <p><?=$t('Command')?>: getmininginfo; <?=$t('check if mining is in progress')?></p>
          </div>
        </div>
        <div class="item">
          <div  style="height:400px;width:600px;margin-left:90px;padding-top:5px">
											<img src="/img/Mine-005.jpg" alt="Enter label for address">
										</div>
          <div class="carousel-caption-dark" style="margin-top:10px">
            <h5><?=$t('Checking')?>...</h5>
            <p><?=$t('Result of')?> getmininginfo; <?=$t('shows')?> generate: true</p>
          </div>
        </div>


								
						</div>
						
      <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only"><?=$t('Previous')?></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only"><?=$t('Next')?></span>
      </a>
    </div>
  </div>
	</div>
	</div>
	</div>
