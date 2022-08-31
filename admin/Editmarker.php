<?php
    $titlePage = "Admin login";
    include "include/init.php";
    include "include/header.php";
    include "include/nav.php";

    if(!isset($_SESSION['AdminId']))
        Redirect("login.php");

        $stmt = $connect->prepare("SELECT * FROM orange_section");
        $stmt->execute();
        $orange_section = $stmt->fetchAll();

        if(isset($_POST['save'])){

            $stmt = $connect->prepare("SELECT * FROM marker WHERE id = ?");
            $stmt->execute([$_POST['id']]);
            $marker = $stmt->fetchAll();

            $governorate = $_POST['governorate'];
            $location = $_POST['location'];
            $id = $_POST['id'];
            $orange_section_id = $_POST['orange_section_id'];
            $full_address = $_POST['full_address'];
            $description = $_POST['description'];
            $image1 = empty($_FILES['image1']['name']) ? $marker['image1'] : $_FILES['image1']['name'];
            $image2 = empty($_FILES['image2']['name']) ? $marker['image2'] : $_FILES['image2']['name'];
            $image3 = empty($_FILES['image3']['name']) ? $marker['image3'] : $_FILES['image3']['name'];
            $image4 = empty($_FILES['image4']['name']) ? $marker['image4'] : $_FILES['image4']['name'];
            $image5 = empty($_FILES['image5']['name']) ? $marker['image5'] : $_FILES['image5']['name'];
            $image6 = empty($_FILES['image6']['name']) ? $marker['image6'] : $_FILES['image6']['name'];
    
            $stmt = $connect->prepare("UPDATE marker SET governorate = ?, location = ?, orange_section_id = ?, full_address = ?, description = ?, image1 = ?, image2 = ?, image3 = ?, image4 = ?, image5 = ?, image6 = ? WHERE id = ?");
            $result = $stmt->execute([$governorate, $location, $orange_section_id, $full_address, $description, $image1, $image2, $image3, $image4, $image5, $image6, $id]);
    
            if($result == true){
                if(empty($_FILES['image1']['name']))
                    move_uploaded_file($_FILES['image1']['tmp_name'], "img/$image1");
                
                if(empty($_FILES['image2']['name']))
                    move_uploaded_file($_FILES['image2']['tmp_name'], "img/$image2");
                
                if(empty($_FILES['image3']['name']))
                    move_uploaded_file($_FILES['image3']['tmp_name'], "img/$image3");

                if(empty($_FILES['image4']['name']))
                    move_uploaded_file($_FILES['image4']['tmp_name'], "img/$image4");  
                
                if(empty($_FILES['image5']['name']))
                    move_uploaded_file($_FILES['image5']['tmp_name'], "img/$image5");  

                if(empty($_FILES['image6']['name']))
                    move_uploaded_file($_FILES['image6']['tmp_name'], "img/$image6");                
                    
                    $_SESSION['message'] = "Update Successfully";
                Refresh();
            }
        }
?>
<div class="container">
    <div class="contain-header-title">
        <h1 class="new-mark">Edit Marker</h1>
        <a href="index.php" class="btn btn-success editmark">Add Marker</a>
    </div>
</div>
<hr>
<div class="container">
<?php if(isset($_SESSION['message'])): ?>
    <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
<?php unset($_SESSION['message']); endif; ?>
    <div class="row">
        <div class="col-md-6">
           <div id="map" class="map-orange"></div>
        </div>
        <div class="col-md-6">
                <div class="form_wrapper" style="margin: 5% auto 0;">
                 <div class="form_container">
                    <form method="post" enctype="multipart/form-data">
                    <div class="input_field select_option">
                    <select class="city" name="governorate" id="city">
                        <option disabled hidden value=""></option>
                        <option value="Al ‘Āşimah">Amman</option>
                        <option value="Al ‘Aqabah">Aqaba</option>
                        <option value="Al Mafraq">Mafraq</option>
                        <option value="Aţ Ţafīlah">Tafilah</option>
                        <option value="Ma‘ān">Ma`an</option>
                        <option value="Irbid">Irbid</option>
                        <option value="‘Ajlūn">Ajlun</option>
                        <option value="Jarash">Jarash</option>
                        <option value="Al Balqā">Balqa</option>
                        <option value="Ma’dabā">Madaba</option>
                        <option value="Al Karak">Karak</option>
                        <option value="Az Zarqā’">Zarqa</option>
                    </select>
                            <div class="select_arrow"></div>
                    </div>
                    <div class="input_field select_option">
                        <select class="country" name="location">
                            <option value="">Select Region</option>
                        </select>
                        <div class="select_arrow"></div>
                    </div>
                    <div class="input_field select_option">
                            <select name="orange_section_id" id="section_id">
                                <?php if(!empty($orange_section)): foreach ($orange_section as $item): ?>
                                    <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                                <?php endforeach; endif;?>
                            </select>
                            <div class="select_arrow"></div>
                    </div>
                    <div class="input_field"><span><i class="fas fa-map-marker-alt"></i></span>
                        <input type="text" id="Location" name="full_address" placeholder="Location" required />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="description" id="exampleFormControlTextarea1" name="description" rows="3" style="resize: none;"></textarea>
                    </div>
                    <input type="hidden" id="markerId" name="id">
                    <!--upload img-->       
                        <div id="uploadFiles">
                        <p class="insUpload">Upload Photo Only JPG, PNG, GIF.</p>
                        <div class="user-files user-files1">
                        <ul>
                            <li>
                            <div class="upld-list">
                                <div class="upd-iconName">
                                <span class="uploaded-icon">
                                    <svg viewBox="-448.5 266.5 28.9 29">
                                    <use xlink:href="#upload-svg"></use>
                                    </svg>
                                </span>
                                <div>
                                    <span class="docName">One photo</span>
                                    <div class="docType"><span class="fileName"></span> <i class="mdot"></i><span class="fileSize"></span></div>
                                    <div class="msg"></div>
                                </div>
                                </div>
                                <div>
                                <input type="file" class="upload-img" name="image1" id="userFile1">
                                <label for="userFile1">Add photo</label>
                                <span class="closeStyle removeFile"></span>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="upld-list">
                                <div class="upd-iconName">
                                <span class="uploaded-icon">
                                    <svg viewBox="-448.5 266.5 28.9 29">
                                    <use xlink:href="#upload-svg"></use>
                                    </svg>
                                </span>
                                <div>
                                    <span class="docName">Tow photo</span>
                                    <div class="docType"><span class="fileName"></span> <i class="mdot"></i><span class="fileSize"></span></div>
                                    <div class="msg"></div>
                                </div>
                                </div>
                                <div>
                                <input type="file" class="upload-img" name="image2" id="userFile4">
                                <label for="userFile4">Add photo</label>
                                <span class="closeStyle removeFile"></span>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="upld-list">
                                <div class="upd-iconName">
                                <span class="uploaded-icon">
                                    <svg viewBox="-448.5 266.5 28.9 29">
                                    <use xlink:href="#upload-svg"></use>
                                    </svg>
                                </span>
                                <div>
                                    <span class="docName">Three photo</span>
                                    <div class="docType"><span class="fileName"></span> <i class="mdot"></i><span class="fileSize"></span></div>
                                    <div class="msg"></div>
                                </div>
                                </div>
                                <div>
                                <input type="file" class="upload-img" name="image3" id="userFile5">
                                <label for="userFile5">Add photo</label>
                                <span class="closeStyle removeFile"></span>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="upld-list">
                                <div class="upd-iconName">
                                <span class="uploaded-icon">
                                    <svg viewBox="-448.5 266.5 28.9 29">
                                    <use xlink:href="#upload-svg"></use>
                                    </svg>
                                </span>
                                <div>
                                    <span class="docName">Four photo</span>
                                    <div class="docType"><span class="fileName"></span> <i class="mdot"></i><span class="fileSize"></span></div>
                                    <div class="msg"></div>
                                </div>
                                </div>
                                <div>
                                <input type="file" class="upload-img" name="image4" id="userFile6">
                                <label for="userFile6">Add photo</label>
                                <span class="closeStyle removeFile"></span>
                                </div>
                            </div>
                            </li>
                            <li>
                    <div class="upld-list">
                        <div class="upd-iconName">
                        <span class="uploaded-icon">
                            <svg viewBox="-448.5 266.5 28.9 29">
                            <use xlink:href="#upload-svg"></use>
                            </svg>
                        </span>
                        <div>
                            <span class="docName">Five photo</span>
                            <div class="docType"><span class="fileName"></span> <i class="mdot"></i><span class="fileSize"></span></div>
                            <div class="msg"></div>
                        </div>
                        </div>
                        <div>
                        <input type="file" class="upload-img" name="image5" id="userFile6">
                        <label for="userFile6">Add photo</label>
                        <span class="closeStyle removeFile"></span>
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="upld-list">
                        <div class="upd-iconName">
                        <span class="uploaded-icon">
                            <svg viewBox="-448.5 266.5 28.9 29">
                            <use xlink:href="#upload-svg"></use>
                            </svg>
                        </span>
                        <div>
                            <span class="docName">Sex photo</span>
                            <div class="docType"><span class="fileName"></span> <i class="mdot"></i><span class="fileSize"></span></div>
                            <div class="msg"></div>
                        </div>
                        </div>
                        <div>
                        <input type="file" class="upload-img" name="image6" id="userFile6">
                        <label for="userFile6">Add photo</label>
                        <span class="closeStyle removeFile"></span>
                        </div>
                    </div>
                    </li>
                        </ul>
                        </div>
                        
                        
                        <svg class="mainSvg" viewBox="-448.5 266.5 28.9 29" style="display:none">
                        <g id="upload-svg">
                            <path class="st0" d="M-434,295.5c-8,0-14.5-6.5-14.5-14.5s6.5-14.5,14.5-14.5c2.5,0,5,0.7,7.2,1.9c0.3,0.2,0.4,0.6,0.2,0.8c-0.1,0.2-0.3,0.3-0.5,0.3c-0.1,0-0.2,0-0.3-0.1c-2-1.2-4.3-1.8-6.6-1.8c-7.3,0.1-13.3,6.1-13.3,13.4s5.9,13.3,13.3,13.3s13.3-6,13.3-13.3c0-0.6,0-1.2-0.1-1.8c-0.1-1-0.4-2-0.8-3c-0.2-0.6-0.5-1.3-0.9-1.8c-0.1-0.1-0.1-0.3-0.1-0.5c0-0.2,0.1-0.3,0.3-0.4c0.1-0.1,0.2-0.1,0.3-0.1c0.2,0,0.4,0.1,0.5,0.3c0.4,0.6,0.7,1.3,1,2c0.4,1.1,0.7,2.2,0.8,3.3c0.1,0.6,0.1,1.3,0.1,1.9C-419.5,289-426,295.5-434,295.5"/>
                            <path class="st0" d="M-435.9,286.2c-0.2,0-0.3-0.1-0.4-0.2l-3.7-3.6c-0.2-0.2-0.2-0.6,0-0.9c0.1-0.1,0.3-0.2,0.4-0.2c0.2,0,0.3,0.1,0.4,0.2l3,3c0.1,0.1,0.1,0.1,0.2,0.1s0.2,0,0.2-0.1l6.7-6.7c0.1-0.1,0.3-0.2,0.4-0.2c0.1,0,0.3,0.1,0.4,0.2c0.2,0.2,0.2,0.6,0,0.9l-7.4,7.4C-435.5,286.2-435.7,286.2-435.9,286.2"/>
                            </g>
                        </svg>
                        </div>
                    <!--upload img-->      
                    <div style="display:flex;justify-content: space-around;">
                    <input class="button edit-mark Delete-marker" type="button" value="Delete Marker" style="background-color:red"/>
                    <input type="hidden" class="Delete">
                    <input class="button edit-mark" name="save" type="submit" value="Edit Marker" />
                    </div>    
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
<?php include "include/footer.php"; ?>
<script>
    $(".city").on("change", function(){
        var name = $(this).val();
        $.ajax({
            method : "get",
            url : "ajax.php",
            data: {"getAllCountry": 1},
            success:function(result) {
                result = JSON.parse(result);
                var country = "";
                console.log(result);
                result.forEach((city) =>{
                    if(city.admin_name === name){
                        country += `<option value="${city.lat + "/" + city.lng}">${city.city}</option>`;
                    }
                });
                $(".country").empty().append(country);
            }
        });
    })

    $(document).on("click", ".Delete-marker" , function(){
        var id = $(".Delete").val();
        $.ajax({
            method : "post",
            url : "ajax.php",
            data: {"marker_id": id},
            success:function(result) {
                $(".sm_location_" + id).fadeOut();
            }
        });
    })
</script>