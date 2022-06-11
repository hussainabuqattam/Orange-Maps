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
  
	<div id="content-wrapper">
		

		<div class="column">
			<img id=featured src="map_images/images (1).jpg">

			<div id="slide-wrapper" >
				<img id="slideLeft" class="arrow" src="map_images/arrow-left.png">

				<div id="slider">
					<img class="thumbnail active" src="map_images/download.jpg">
					<img class="thumbnail" src="map_images/images.jpg">
					<img class="thumbnail" src="map_images/images (3).jpg">

					<img class="thumbnail" src="map_images/download.png">
					<img class="thumbnail" src="map_images/images (1).jpg">
					<img class="thumbnail" src="map_images/images (3).jpg">
					<img class="thumbnail" src="map_images/download.png">
				</div>

				<img id="slideRight" class="arrow" src="map_images/arrow-right.png">
			</div>
		</div>

		<div class="column" style="margin-bottom=60px;">
			<h1>Awesome Shoes</h1>
			<hr>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>

	</div>
      </div>
    </div>
  </div>
</div>
<?php include "include/footer.php"; ?>
      
    

