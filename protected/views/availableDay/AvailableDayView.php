<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo Yii::app()->getBaseUrl(true);?>/css/libs/jquery.mobile-1.4.2.min.css">
<script src="<?php echo Yii::app()->getBaseUrl(true);?>/js/libs/jquery-1.10.2.min.js"></script>
<script src="<?php echo Yii::app()->getBaseUrl(true);?>/js/libs/jquery.mobile-1.4.2.min.js"></script>
<style type="text/css">
  .ui-panel-inner { padding: 0px; }
</style>
<script type="text/javascript">
  $(document).ready(
      function(){
        $('#search').parent().css('margin','3px');

      }
    );
</script>
</head>
<body>
<div data-role="page" id="page1">
  <div data-role="panel" id="menu" data-dismissible="true" data-swipe-close="true" data-position="right" data-display="push"> 
        <div data-role="controlgroup" data-corners="false" style="margin:0px;">
            <!--<a href="#" data-role="button" style="padding:0px;height:42px;"><input type="text" name="search" id="search" placeholder="Search..."/></a>-->
            <input type="text" name="search" id="search" placeholder="Search..."/>
            <a href="<?php echo Yii::app()->getBaseUrl(true);?>/main" data-role="button" class="ui-btn ui-icon-home ui-btn-icon-left" style="text-align:left;">Main</a>           
            <a href="<?php echo Yii::app()->getBaseUrl(true);?>/availableWeek" data-role="button" class="ui-btn ui-icon-calendar ui-btn-icon-left" style="text-align:left;">Reserve</a>
            <a href="#" data-role="button" class="ui-btn ui-icon-user ui-btn-icon-left" style="text-align:left;">Profile</a>
            <a href="#" data-role="button" class="ui-btn ui-icon-shop ui-btn-icon-left" style="text-align:left;">Account<span class="ui-li-count">20 TL</span></a>
            <a href="#" data-role="button" class="ui-btn ui-icon-mail ui-btn-icon-left" style="text-align:left;">Messages<span class="ui-li-count">2</span></a>
            <a href="#" data-role="button" class="ui-btn ui-icon-info ui-btn-icon-left" style="text-align:left;">Notifications<span class="ui-li-count">1</span></a>
        </div>
  </div> 
  <div data-role="header" data-position="fixed">
      <!--<a href="#" class="ui-btn ui-btn-b ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left">Home</a>-->
      <a href="#" class="ui-btn ui-btn-b ui-corner-all ui-shadow ui-icon-back ui-btn-icon-left" data-rel="back">Back</a>
      <h1>April, 14</h1>
      <a href="#menu" class="ui-btn-right ui-btn ui-btn-b ui-corner-all ui-shadow ui-icon-grid ui-btn-icon-left ui-btn-icon-notext">Menu button</a>

  </div>

  <div data-role="main" class="ui-content">
    <ul data-role="listview" data-inset="true">

      <li data-role="list-divider">Monday</li>
      <li><a href="#">06:00-7:00<span class="ui-li-count">10</span></a></li>
      <li><a href="#">07:00-8:00<span class="ui-li-count">1</span></a></li>
      <li><a href="#">08:00-9:00<span class="ui-li-count">4</span></a></li>
      <li><a href="#">09:00-10:00<span class="ui-li-count">9</span></a></li>
      <li><a href="#">10:00-11:00<span class="ui-li-count">7</span></a></li>
      <li><a href="#">11:00-12:00<span class="ui-li-count">3</span></a></li>
      <li><a href="#">12:00-13:00<span class="ui-li-count">3</span></a></li>

    </ul>
  </div>

  <div data-role="footer" data-position="fixed" style="text-align:center;">
      <div data-role="controlgroup" data-type="horizontal">
            <a href="#" class="ui-btn ui-btn-b ui-corner-all ui-shadow ui-icon-arrow-l ui-btn-icon-left">Previous Day</a>
            <a href="#" class="ui-btn ui-btn-b ui-corner-all ui-shadow ui-icon-arrow-r ui-btn-icon-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Next Day</a>
      </div>
  </div>

</div>

</body>
</html>