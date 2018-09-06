<!DOCTYPE html>

<!-- parallax container 1 -->
<div class="parallax-container valign-wrapper min-height-3">
  <div class="section no-pad-bot">
    <!-- BolderBlack title -->
    <div class="row center black-text">
      <h1>Contact Us</h1>
    </div>
  </div>
  <div class="parallax"><img src="img/big_tire.png" alt="Unsplashed background img 1"></div>
</div>

<!-- map & form -->
<div class="container z-depth-0">

    <div class="row" id="mapRow">
      <!-- info -->
      <div class="col m6 s12 center z-depth-0">
        <div class="icon-block left-align">
          <h2 class="center brown-text"><i class="material-icons">business</i></h2>
          <h5 class="center ">Info</h5>
            <h6> Address </h6>
            <div class="divider"></div>
            <p> 1637 Pearl Street, Suite 204 <br/>Boulder CO 80302</p>
            <h6> Corporate </h6>
            <div class="divider"></div>
            <p>+1 (720) 514-9035<br/>info@bolderindustries.com</p>
            <h6> Sales </h6>
            <div class="divider"></div>
            <p> sales@bolderindustries.com </p>
        </div>
      </div>
      <!-- form -->
      <div class="col m6 s12 center z-depth-0 no-pad">
        <?php include 'phpform/formpage.php' ?>
      </div>
      <!-- map -->
      <div class="col s12 center z-depth-0 no-pad" id="mapContainer">

          <div id="mapid"></div>

      </div>
    </div>

</div>

<!-- parallax container 2 -->
<div class="parallax-container valign-wrapper min-height-2 hide-on-med-and-down">
  <div class="parallax"><img src="img/big_tire.png" alt="Unsplashed background img 1"></div>
</div>


<!-- map scripts -->
<script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js" integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q==" crossorigin=""></script>
<script src="js/bin/map.js"></script>
