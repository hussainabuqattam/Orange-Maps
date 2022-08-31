<?php
    $titlePage = "index";
    include "include/init.php";
    include "include/header.php";
    include "include/nav.php";

     $stmt = $connect->prepare("SELECT * FROM orange_section");
     $stmt->execute();
     $orange_section = $stmt->fetchAll();

     const arrcolor = ['#085ebd','#0a6e31','#492191','#ff8ad4','#ffb400','#4bb4e6','#50be87']
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
			<img id=featured>

			<div id="slide-wrapper" >
				<img id="slideLeft" class="arrow" src="map_images/arrow-left.png">

				<div id="slider">
					<img id="slide1" class="thumbnail active" >
					<img id="slide2" class="thumbnail" >
					<img id="slide3" class="thumbnail" >

					<img id="slide4" class="thumbnail" >
					<img id="slide5" class="thumbnail" >
					<img id="slide6" class="thumbnail" >
				</div>

				<img id="slideRight" class="arrow" src="map_images/arrow-right.png">
			</div>
		</div>

		<div class="column text-colomss" >
			<h1 style="color:#ff7900;" id="orangeSectionName"></h1>
      <span id="location"></span>
			<hr>
			<p style="color:#eee;" id="descriptionslide"></p>
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
                       All ODC
                    <div class="material-switch pull-right">
                            <input id="allswitch" name="allswitch" type="checkbox" checked="checked"/>
                            <label id="allswitch2" for="allswitch" class="label-default" style="background-color:#085ebd;"></label>
                        </div>
                    </li>
                <?php if(!empty($orange_section)): foreach ($orange_section as $index => $item): ?>
                <li class="list-group-item">
                <?= $item['name'] ?>
                        <div class="material-switch pull-right">
                            <input id="someSwitchOption<?= $item['id'] ?>" value="<?= $item['id'] ?>"name="allswitch" type="checkbox" class="checkinputbox inputcheckfilter"/>
                            <label for="someSwitchOption<?= $item['id'] ?>" class="label-default" style="background-color:<?=arrcolor[$index]?>"></label>
                        </div>
                    </li>
                    <!-- <li class="list-group-item">
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
                            <input id="someSwitchOptionWarning" name="someSwitchOption001" type="checkbox" />
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
                    </li> -->
                    <?php endforeach; endif; ?>
                </ul>
            </div>            
        </div>


<!--end checkbox-->
<div class="cover_photo_map" style="display:none;">
    <img id="img_animmations" src="map_images/jordan-map-slide8-removebg-preview.png" alt="">
</div>

<?php include "include/footer.php"; ?>
      
    

