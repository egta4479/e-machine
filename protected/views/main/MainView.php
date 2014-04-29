<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo Yii::app()->getBaseUrl(true);?>/css/libs/jquery.mobile-1.4.2.min.css">
<script src="<?php echo Yii::app()->getBaseUrl(true);?>/js/libs/jquery-1.10.2.min.js"></script>
<script src="<?php echo Yii::app()->getBaseUrl(true);?>/js/libs/jquery.mobile-1.4.2.min.js"></script>
<style type="text/css">
  .ui-panel-inner { padding: 0px; }

.split-custom-wrapper {
    /* position wrapper on the right of the listitem */
    position: absolute;
    right: 0;
    top: 0;
    height: 99%;
}

.split-custom-button {
    position: relative;
    float: right;   /* allow multiple links stacked on the right */
    height: 99%;
    margin:0;
    top:1px;
    min-width:3em;
    /*border-style:solid;*/
    /* remove boxshadow and border */
    border-left: 1px solid;
    border-right:none;
    border-top:none;
    border-bottom: none;
    /*border:none;*/
    moz-border-radius: 0;
    webkit-border-radius: 0;
    border-radius: 0;
    moz-box-shadow: none;
    webkit-box-shadow: none;
    /*box-shadow: none;*/
    box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.2); 
}

.split-custom-button span.ui-btn-inner {
    /* position icons in center of listitem*/
    position: relative;
    margin-top:50%;
    margin-left:50%;
    /* compensation for icon dimensions */
    top:11px; 
    left:-12px;
    height:40%; /* stay within boundaries of list item */
}


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

    <h1>Electrowash</h1>
    <a href="#menu" class="ui-btn-right ui-btn ui-btn-b ui-corner-all ui-shadow ui-icon-grid ui-btn-icon-left ui-btn-icon-notext">Menu button</a>
  </div>

  <div data-role="main" class="ui-content">

      <ul data-role="listview" data-inset="true">
            <li>
                <b>Reserved machines:</b>
            </li>
            <li>
              <a href="#">
                  <div style="float:left;margin-right:25px;">
                    <select name="flip-1" id="flip-1" data-role="slider">
                      <option value="off">Off</option>
                      <option value="on">On</option>
                    </select> 
                  </div>
                  <div>
                    <h2>Machine:7</h2>
                    <p>April,20 <br> 18:00-19:00</p>
                  </div>
                  <hr width="100%" style="opacity:0.1;">
                  <p>STATUS: 1 day 25 minutes left!</p>
              </a>
              <div class="split-custom-wrapper">
                <a href="#popupDelete" data-rel="popup" data-role="button" class="split-custom-button" data-icon="delete" data-rel="dialog" data-theme="a" data-corners="false" data-iconpos="notext"></a>           
                <a href="#popupComment" data-rel="popup" data-role="button" class="split-custom-button" data-icon="comment" data-rel="dialog" data-theme="a" data-corners="false" data-iconpos="notext"></a>           

              </div>
            </li>
            <li>
              <a href="#">
              <div style="float:left;margin-right:25px;">
                  <select name="flip-1" id="flip-1" data-role="slider">
                    <option value="off">Off</option>
                    <option selected value="on">On</option>
                  </select> 
              </div>
              <div>
                  <h2>Machine:9</h2>
                  <p>April,20 <br> 13:00-14:00</p>
              </div>
              <hr width="100%" style="opacity:0.1;">
              <p>STATUS: 60 minutes left!<br>Please take out your clothes in time!</p>

              </a>
              <!--
              -->
              
              <div class="split-custom-wrapper">

                <a href="#popupDelete" data-rel="popup" data-role="button" class="split-custom-button" data-icon="delete" data-rel="dialog" data-theme="a" data-corners="false" data-iconpos="notext"></a>           
                <div data-role="popup" id="popupDelete" data-overlay-theme="a" data-position-to="window" data-dismissible="false" >
                    <h3>Are you sure to delete this reservation?<h3>
                    <p style="font-weight:initial;">
                      Machine:9<br>
                      April,20 <br>
                      13:00-14:00
                    </p>
                    <center>
                    <a href="#" data-role="button" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" data-rel="back" data-corners="true">Close</a>
                    <a href="#" data-role="button" class="ui-btn ui-btn-b ui-corner-all ui-shadow ui-btn-inline" data-rel="back" data-corners="true">Delete</a>
                    </center>
                </div>



                <a href="#popupComment" data-rel="popup" data-role="button" class="split-custom-button" data-icon="comment" data-rel="dialog" data-theme="a" data-corners="false" data-iconpos="notext"></a>           
                <div data-role="popup" id="popupComment" data-overlay-theme="a" data-position-to="window" data-dismissible="false" >
                    <h3>Are you sure to delete this reservation?<h3>
                    <p style="font-weight:initial;">
                      Machine:9<br>
                      April,20 <br>
                      13:00-14:00
                    </p>
                    <center>
                    <a href="#" data-role="button" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" data-rel="back" data-corners="true">Close</a>
                    <a href="#" data-role="button" class="ui-btn ui-btn-b ui-corner-all ui-shadow ui-btn-inline" data-rel="back" data-corners="true">Delete</a>
                    </center>
                </div>

              </div>
            </li>
      </ul>  
  </div>

 
</div> 

</body>
</html>