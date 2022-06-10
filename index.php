<?php
    $titlePage = "index";
    include "include/init.php";
    include "include/header.php";
    include "include/nav.php";

     $stmt = $connect->prepare("SELECT * FROM orange_section");
     $stmt->execute();
     $orange_section = $stmt->fetchAll();
?>
        <div id="map" class="map-orange"></div>
        <div class="check-container">
            <div class="row">
                <div class="col-md-4">
                    <?php if(!empty($orange_section)): foreach ($orange_section as $item): ?>
                    <label class="check-box">
                        <input type="checkbox"  value="<?= $item['id'] ?>" class="checkinputbox inputcheckfilter">
                        <span class=""><?= $item['name'] ?></span>
                    </label>
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </div>

<!-- Modal -->

<div class="modal modal-map-orange fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container-img-slider">
        <div class="cont-img">
        <ul class="slides">
          <li id="slide1"><img src="map_images/download.jpg" alt="" /></li>
          <li id="slide2"><img src="map_images/images (1).jpg" alt="" /></li>
          <li id="slide3"><img src="map_images/images.jpg" alt="" /></li>
          <li id="slide4"><img src="map_images/images (2).jpg" alt="" /></li>
          <li id="slide5"><img src="map_images/images (3).jpg" alt="" /></li>
        </ul>

        <ul class="thumbnails">
          <li>
            <a href="#slide1" id="smallslide1"><img src="map_images/download.jpg" /></a>
          </li>
          <li>
            <a href="#slide2" id="smallslide2"><img src="map_images/images (1).jpg" /></a>
          </li>
          <li>
            <a href="#slide3" id="smallslide3"><img src="map_images/images.jpg" /></a>
          </li>
          <li>
            <a href="#slide4" id="smallslide4"><img src="map_images/images (2).jpg" /></a>
          </li>
          <li>
            <a href="#slide5" id="smallslide5"><img src="map_images/images (3).jpg" /></a>
          </li>
        </ul>
        </div>
        <div>
          <p class="text-modal-slide" id="descriptionslide">
              numeric characters, between two or more users of mobile devices, desktops/laptops, or another type of compatible computer. Text messages may be sent over a cellular network, or may also be sent via an Internet connection.
              The term originally referred to messages sent using the Short Message Service (SMS). It has grown beyond alphanumeric text to include multimedia messages using the Multimedia Messaging Service (MMS) containing digital images, videos, and sound content, as well as ideograms known as emoji (happy faces, sad faces, and other icons), and instant messenger applications (usually the term is used when on mobile devices).
          </p>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "include/footer.php"; ?>
      
    

