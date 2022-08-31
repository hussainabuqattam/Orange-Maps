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
        $governorate = $_POST['governorate'];
        $location = $_POST['location'];
        $orange_section_id = $_POST['orange_section_id'];
        $full_address = $_POST['full_address'];
        $description = $_POST['description'];
        $image1 = $_FILES['image1']['name'];
        $image2 = $_FILES['image2']['name'];
        $image3 = $_FILES['image3']['name'];
        $image4 = $_FILES['image4']['name'];
        $image5 = $_FILES['image5']['name'];
        $image6 = $_FILES['image6']['name'];

        $stmt = $connect->prepare("INSERT INTO marker SET governorate = ?, location = ?, orange_section_id = ?, full_address = ?, description = ?, image1 = ?, image2 = ?, image3 = ?, image4 = ?, image5 = ?, image6 = ?");
        $result = $stmt->execute([$governorate, $location, $orange_section_id, $full_address, $description, $image1, $image2, $image3, $image4, $image5, $image6]);

        if($result == true){
            move_uploaded_file($_FILES['image1']['tmp_name'], "img/$image1");
            move_uploaded_file($_FILES['image2']['tmp_name'], "img/$image2");
            move_uploaded_file($_FILES['image3']['tmp_name'], "img/$image3");
            move_uploaded_file($_FILES['image4']['tmp_name'], "img/$image4");
            move_uploaded_file($_FILES['image5']['tmp_name'], "img/$image5");
            move_uploaded_file($_FILES['image6']['tmp_name'], "img/$image6");
            $_SESSION['message'] = "Add Successfully";
            Refresh();
        }
    }
?>
<div class="container">
    <div class="contain-header-title">
        <h1 class="new-mark">Add New Marker</h1>
        <a href="Editmarker.php" class="btn btn-success editmark">Edit Marker</a>
    </div>
</div>
<hr>
<div class="container">
    <?php if(isset($_SESSION['message'])): ?>
        <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
    <?php unset($_SESSION['message']); endif; ?>
    <div class="form_wrapper">
    <div class="form_container">
        <form method="post" enctype="multipart/form-data">
            <div class="input_field select_option">
                <select class="city" name="governorate">
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
                    <select name="orange_section_id">
                        <?php if(!empty($orange_section)): foreach ($orange_section as $item): ?>
                            <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                        <?php endforeach; endif;?>
                    </select>
                    <div class="select_arrow"></div>
            </div>
            <div class="input_field"><span><i class="fas fa-map-marker-alt"></i></span>
                <input type="text" name="full_address" placeholder="Location" required />
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="description" name="description" id="exampleFormControlTextarea1" rows="3" style="resize: none;"></textarea>
            </div>
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
                                <input type="file" class="upload-img" name="image5" id="userFile7">
                                <label for="userFile7">Add photo</label>
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
                                <input type="file" class="upload-img" name="image6" id="userFile8">
                                <label for="userFile8">Add photo</label>
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
            <input class="button addmark" name="save" type="submit" value="Add Marker" />
        </form>
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
                    if(city.admin_name === name ){
                        country += `<option value="${city.lat + "/" + city.lng}">${city.city}</option>`;
                    }
                });
                $(".country").empty().append(country);
            }
        });
    })
</script>