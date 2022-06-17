//upload
var iFileSize = 0;
function readURL(fileInput){
     var files = fileInput.files;
     for (var i = 0; i < files.length; i++) {
         var file = files[i];
         iFileSize = file.size;
         var imageType = /image.*/;
         if (!file.type.match(imageType)) {
             continue;
         }
     }
}
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Byte';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
};
function updIndvDocs(){
  $(".upload-img").change(function(e){
    readURL(this);
    var $this = $(this);
    var file = $this[0].files[0];
    var fileName = e.target.files[0].name;
    var ext = $this.val().split('.').pop().toLowerCase();
    var $par = $(this).parents('li');
    var $msg = $par.find('.msg');
    var $fn = $par.find('.fileName');
    var $dt = $par.find('.docType');
    var $ds = $par.find('.fileSize');
    $msg.hide();
    $dt.hide();
    $par.removeClass('uploaded');
    $(this).parents('.user-files').find('.error').hide();
    if(iFileSize >= 10485760) { // 10 mb
      $msg.show().text('File is too large. Max 10 MB');
      $this.val('');
    }else if($.inArray(ext, ['png', 'jpg', 'gif', 'pdf']) == -1 && ext != ''){
      $msg.show().text('Invalid file format.');
      $this.val('');
    }else{
      $par.addClass('uploaded');
      $dt.show();
      $ds.text(bytesToSize(iFileSize));
      if(fileName.length > 18){
        $fn.html(fileName.substr(0, 9)+'...'+fileName.substr(fileName.length-6, fileName.length));
      }else{
        $fn.html(fileName);
      }
    }
  });
    
 $(document).on('click', '.removeFile', function(){
    var $par = $(this).parents('li');
    $par.find('.msg, .docType').hide();
    $par.find('input').val('');
    $par.removeClass('uploaded');
  });
}

//val
function sideForm5(){
    var valid = true,
        indvUploads = [],
        allCheck1;
        $('.user-files1 input').each(function(){
            indvUploads.push($(this).val());
        });
        allCheck1 = $.inArray('', indvUploads);
        if(allCheck1 != -1){
            $('.user-files1 .error').show();
            valid = false;
        }
    return valid;
}


$(document).ready(function(){
  updIndvDocs();
  
  $('.js-submit').click(function(){
    if(sideForm5()){
      consol.log('Done')
    }
  });
  
}); 

//onclick
function modalshow () {
  const locations = simplemaps_countrymap_mapdata.locations;
  for(const locationIndex in simplemaps_countrymap_mapdata.locations){
      const classNamess = `sm_location_${locationIndex}`
      console.log(locationIndex)
      const locationElement = document.getElementsByClassName(classNamess)
      console.log(locationElement)
      for (const locationElementss of locationElement) {
          locationElementss.addEventListener("click", locations.onClick = function(){           
              console.log('ok');
              $.ajax({
                  method : "get",
                  url : "ajax.php",
                  data:{locationid:locationIndex},
                  success:function(result) {
                    result = JSON.parse(result);
                    console.log(result);
                      $("#city option[value='" + result.governorate + "']").attr("selected", "selected");
                      $("#exampleFormControlTextarea1").text(result.description);
                      $("#Location").val(result.full_address);
                      $("#section_id option[value='" + result.orange_section_id + "']").attr("selected", "selected");

                      // console.log(result.lat.trim(), result.lng);
                      $("#markerId").val(locationIndex);
                      var country = "",
                      khaled = JSON.parse(result.AllCity);
                      khaled.forEach((city) =>{
                          if(city.admin_name === result.governorate){
                              country += `<option ${(result.lat.trim() == city.lat && result.lng == city.lng) ? "selected" : ""} value="${city.lat + "/" + city.lng}">${city.city}</option>`;
                          }
                      });
                      $(".country").empty().append(country);
                      $(".Delete").val(locationIndex);

                  }
                });
          })
      }
  }
}
setTimeout(modalshow, 500) 
//modal

