<?php
    $titlePage = "index";
    include "include/init.php";
    include "include/header.php";
    include "include/nav.php";

     $stmt = $connect->prepare("SELECT * FROM orange_section");
     $stmt->execute();
     $orange_section = $stmt->fetchAll();
?>
<div class="container">
  
</div>

<!--slider-->

<!----end slider--->
        <div id="map" class="map-orange animat"></div>        </div>       
        <!-- <div class="check-container">
            <div class="row">
                <div class="col-md-4">
                    <?php if(!empty($orange_section)): foreach ($orange_section as $item): ?>
                    <label class="check-box">
                        <input type="checkbox" style value="<?= $item['id'] ?>" class="checkinputbox inputcheckfilter">
                        <span class=""><?= $item['name'] ?></span>
                    </label>
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </div> -->

<!-- Modal -->

<!-- <div class="modal modal-map-orange fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> -->
      <div id="content-wrapper" style="display:none">
		

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

		<div class="column text-colomss" >
			<h1 style="color:#ff7900;">Awesome Shoes</h1>
			<hr>
			<p style="color:#eee;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>

	</div>

      </div>
    <!-- </div>
  </div>
</div> -->

<!--start checkbox-->
            <div class="panel panel-default new_checkbox">
                          <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item">
                      Coding School                        
                    <div class="material-switch pull-right">
                            <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"/>
                            <label for="someSwitchOptionDefault" class="label-default" style="background-color:#085ebd;"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                    Fablab
                            <div class="material-switch pull-right">
                            <input id="someSwitchOptionPrimary" name="someSwitchOption001" type="checkbox"/>
                            <label for="someSwitchOptionPrimary" class="label-primary" style="background-color:#0a6e31;"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Big By Orange
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionSuccess" name="someSwitchOption001" type="checkbox"/>
                            <label for="someSwitchOptionSuccess" class="label-success" style="background-color:#492191;"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Coding Academy
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionInfo" name="someSwitchOption001" type="checkbox"/>
                            <label for="someSwitchOptionInfo" class="label-info" style="background-color:#ff8ad4;"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                       AI Incubator                     
                          <div class="material-switch pull-right">
                            <input id="someSwitchOptionWarning" name="someSwitchOption001" type="checkbox"/>
                            <label for="someSwitchOptionWarning" class="label-warning" style="background-color:#ffb400;"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                       Innovation Hub
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox"/>
                            <label for="someSwitchOptionDanger" class="label-danger" style="background-color:#4bb4e6;"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Digital Center
                        <div class="material-switch pull-right">
                            <input id="someSwitchOp" name="someSwitchOption001" type="checkbox"/>
                            <label for="someSwitchOp" class="label-danger" style="background-color:#50be87;"></label>
                        </div>
                    </li>
                </ul>
            </div>            
        </div>


<!--end checkbox-->
<div class="cover_photo_map" style="display:none;">
    <img id="img_animmations" src="map_images/jordan-map-slide8-removebg-preview.png" alt="">
</div>

<?php include "include/footer.php"; ?>
      
    

