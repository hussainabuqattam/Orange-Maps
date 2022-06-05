<?php
    $titlePage = "Admin login";
    include "include/header.php";
    include "include/nav.php";
?>
<div class="container">
    <div class="contain-header-title">
        <h1 class="new-mark">Edit Marker</h1>
        <a href="index.php" class="btn btn-success edit-mark">Add Marker</a>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-6">
           <div id="map" class="map-orange"></div>
        </div>
        <div class="col-md-6">
                <div class="form_wrapper" style="margin: 5% auto 0;">
                 <div class="form_container">
                    <form>
                    <div class="input_field select_option">
                            <select >
                                <option value="Amman">Amman</option>
                                <option value="Aqaba">Aqaba</option>
                                <option value="Mafraq">Mafraq</option>
                                <option value="Tafilah">Tafilah</option>
                                <option value="Ma`an">Ma`an</option>
                                <option value="Irbid">Irbid</option>
                                <option value="Ajlun">Ajlun</option>
                                <option value="Jarash">Jarash</option>
                                <option value="Balqa">Balqa</option>
                                <option value="Madaba">Madaba</option>
                                <option value="Karak">Karak</option>
                                <option value="Zarqa">Zarqa</option>
                            </select>
                            <div class="select_arrow"></div>
                    </div>
                    <div class="input_field select_option">
                            <select >
                                <option value="CodingSchool">Coding School</option>
                                <option value="Fablab">Fablab</option>
                                <option value="Big">Big</option>
                                <option value="CodingAcademy">Coding Academy</option>
                                <option value="Ai">Ai</option>
                                <option value="Inv">Inv</option>
                                <option value="DigitalCenter">Digital Center</option>
                            </select>
                            <div class="select_arrow"></div>
                    </div>
                    <div class="input_field"><span><i class="fas fa-map-marker-alt"></i></span>
                        <input type="text" name="Location" placeholder="Location" required />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="description"id="exampleFormControlTextarea1" rows="3" style="resize: none;"></textarea>
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
                                <input type="file" class="upload-img" name="" id="userFile1">
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
                                <input type="file" class="upload-img" name="" id="userFile4">
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
                                <input type="file" class="upload-img" name="" id="userFile5">
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
                                <input type="file" class="upload-img" name="" id="userFile6">
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
                        <input type="file" class="upload-img" name="" id="userFile6">
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
                        <input type="file" class="upload-img" name="" id="userFile6">
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
                    <input class="button" type="submit" value="Add Marker" />
                    </form>
            </div>
            </div>
        </div>
    </div>
</div>
<?php include "include/footer.php"; ?>
