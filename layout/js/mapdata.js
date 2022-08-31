var simplemaps_countrymap_mapdata={
  main_settings: {
   //General settings
    width:'500',//'700' or 'responsive'
    background_color: "#FFFFFF",
    background_transparent: "yes",
    border_color: "#ffffff",
    
    //State defaults
    state_description: "State description",
    state_color: "#88A4BC",
    state_hover_color: "#3B729F",
    state_url: "",
    border_size: 1.5,
    all_states_inactive: "no",
    all_states_zoomable: "yes",
    
    //Location defaults
    location_url: "",
    location_opacity:0,
    location_hover_opacity: 1,
    location_size: 50,
    location_type: "marker",
    location_image_source: "map_images/frog.png",
    location_border_color: "#FFFFFF",
    location_border: 2,
    location_hover_border: 2.5,
    all_locations_inactive: "no",
    all_locations_hidden: "no",
    
    //Label defaults
    label_color: "#d5ddec",
    label_hover_color: "#d5ddec",
    label_size: 22,
    label_font: "Arial",
    hide_labels: "no",
    hide_eastern_labels: "no",
   
    //Zoom settings
    zoom: "yes",
    manual_zoom: "yes",
    back_image: "no",
    initial_back: "no",
    initial_zoom: "-1",
    initial_zoom_solo: "no",
    region_opacity: 1,
    region_hover_opacity: 0.6,
    zoom_out_incrementally: "yes",
    zoom_percentage: 0.99,
    zoom_time: 0.5,
    
    //Popup settings
    popup_color: "white",
    popup_opacity: 0.9,
    popup_shadow: 1,
    popup_corners: 5,
    popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
    popup_nocss: "no",
    
    //Advanced settings
    div: "map",
    auto_load: "yes",
    url_new_tab: "no",
    images_directory: "default",
    fade_time: 0.1,
    link_text: "View Website",
    popups: "detect",
    state_image_url: "",
    state_image_position: "",
    location_image_url: ""
  },
  state_specific: {
    JOR849: {
      name: "Aqaba",
      color: "#fff6b6",
      hover_color: "#fff6b6"

    },
    JOR850: {
      name: "Mafraq",
      color: "rgb(181, 232, 247)",
      hover_color: "rgb(181, 232, 247)"

    },
    JOR851: {
      name: "Amman",
      color: "rgb(217, 194, 240)",
      hover_color: "rgb(217, 194, 240)"

    },
    JOR852: {
      name: "Tafilah",
      color: "#ff8ad4",
      hover_color: "#ff8ad4"

    },
    JOR853: {
      name: "Ma`an",
      color: "#ffe8f7",
      hover_color: "#ffe8f7"
    },
    JOR854: {
      name: "Irbid",
      color: "#b8ebd6",
      hover_color: "#b8ebd6"

    },
    JOR855: {
      name: "Ajlun",
      color: "#50be87",
      hover_color: "#50be87"

    },
    JOR856: {
      name: "Jarash",
      color: "#a885d8",
      hover_color: "#a885d8"

    },
    JOR857: {
      name: "Balqa",
      color: "#ffb4e6",
      hover_color: "#ffb4e6"

    },
    JOR858: {
      name: "Madaba",
      color: "#fff6b6",
      hover_color: "#fff6b6"

    },
    JOR859: {
      name: "Karak",
      color: "#b5e8f7",
      hover_color: "#b5e8f7"

    },
    JOR860: {
      name: "Zarqa",
      color: "rgb(184, 235, 214)",
      hover_color: "rgb(184, 235, 214)"
    }
  },

  locations:{},

  labels: {
    "0": {
      name: "Aqaba",
      parent_id: "JOR849",
      x: 87.6,
      y: 1016.9,
      color: "#000"
    },
    "1": {
      name: "Mafraq",
      parent_id: "JOR850",
      x: 769.6,
      y: 257.5,
      color: "#000"
    },
    "2": {
      name: "Amman",
      parent_id: "JOR851",
      x: 299.9,
      y: 494.2,
      color: "#000"
    },
    "3": {
      name: "Tafilah",
      parent_id: "JOR852",
      x: 155.9,
      y: 701.8,
      color: "#000"
    },
    "4": {
      name: "Ma`an",
      parent_id: "JOR853",
      x: 425.8,
      y: 760.2,
      color: "#000"
    },
    "5": {
      name: "Irbid",
      parent_id: "JOR854",
      x: 193.6,
      y: 222.8,
      color: "#000"
    },
    "6": {
      name: "Ajlun",
      parent_id: "JOR855",
      x: 177.7,
      y: 300.1,
      color: "#000"
    },
    "7": {
      name: "Jarash",
      parent_id: "JOR856",
      x: 216.8,
      y: 321.6,
      color: "#000"
    },
    "8": {
      name: "Balqa",
      parent_id: "JOR857",
      x: 166.6,
      y: 368.1,
      color: "#000"
    },
    "9": {
      name: "Madaba",
      parent_id: "JOR858",
      x: 174.8,
      y: 500.3,
      color: "#000"
    },
    "10": {
      name: "Karak",
      parent_id: "JOR859",
      x: 231.4,
      y: 627.2,
      color: "#000"
    },
    "11": {
      name: "Zarqa",
      parent_id: "JOR860",
      x: 485.9,
      y: 454.2,
      color: "#000"
    }
  },
  legend: {
    entries: []
  },
  regions: {}
};
//show markr
$.ajax({
  method : "get",
  url : "ajax.php",
  data:{getAllLocation: 1},
  success:function(result) {
    result = JSON.parse(result);
    simplemaps_countrymap_mapdata.locations = {...result};
  }
});
function setcolor(){
  $.ajax({
    method : "get",
    url : "ajax.php",
    data:{getAllLocation: 1},
    success:function(result) {
      result = JSON.parse(result);
      var result = $.map(result, function(value, index){
        return [{orderdd:value.orange_section_id,id:value.id}];
    });
    result.forEach((color_view) => {
      if(color_view.orderdd == 1){
        $(".sm_location_" + color_view.id).css('fill','#085ebd');
      }else if(color_view.orderdd == 2){
        $(".sm_location_" + color_view.id).css('fill','#0a6e31');
      }else if(color_view.orderdd == 3){
        $(".sm_location_" + color_view.id).css('fill','#492191');
      }else if(color_view.orderdd == 4){
        $(".sm_location_" + color_view.id).css('fill','#ff8ad4');
      }else if(color_view.orderdd == 5){
        $(".sm_location_" + color_view.id).css('fill','#ffb400');
      }else if(color_view.orderdd == 6){
        $(".sm_location_" + color_view.id).css('fill','#4bb4e6');
      }else if(color_view.orderdd == 7){
        $(".sm_location_" + color_view.id).css('fill','#50be87');
      }
    });
    }
  });

}

$("#allswitch").on("click", function() {
  var arry = $.map(simplemaps_countrymap_mapdata.locations, function(value, index){
    return [value];
  });

  if(this.checked == true){
    arry.forEach((map) => {
        $(".sm_location_" + map.id).fadeIn();
    })
  }else{
    arry.forEach((map) => {
      $(".sm_location_" + map.id).fadeOut();
    })
  }
});
setTimeout(setcolor, 50);
//checkbox marker
var checkarray = [];
var checkboxes = document.querySelectorAll('.inputcheckfilter');
for(var checkbox of checkboxes){
  checkbox.addEventListener('click',function() {
    if(this.checked == true){
      checkarray.push(this.value);
    }else{
      checkarray = checkarray.filter(c => c !== this.value);
    }
      $.ajax({
        method : "get",
        url : "ajax.php",
        data:{id: checkarray.length === 0 ? -1 : checkarray},
        success:function(result) {
              result = JSON.parse(result);
              var result = $.map(result, function(value, index){
                  return [index]
              });
              var arry = $.map(simplemaps_countrymap_mapdata.locations, function(value, index){
                return [value];
              });
              arry.forEach((map) => {
                if(!result.includes(map.id)){
                  $(".sm_location_" + map.id).fadeOut();
                }else{
                  $(".sm_location_" + map.id).fadeIn();
                }
              })
        }
      });

      if(checkarray.length === 0){
        
      }else{
        $("#allswitch").attr("checked", false);
      }
  })
}
//modal + animation
//checkbox
$('.checkinputbox').click(function(){
  $(this).siblings("span").toggleClass('colorsche');
});
//modal click show
function modalshow () {
  const locations = simplemaps_countrymap_mapdata.locations;
  for(const locationIndex in simplemaps_countrymap_mapdata.locations){
      const classNamess = `sm_location_${locationIndex}`
      const locationElement = document.getElementsByClassName(classNamess)
      for (const locationElementss of locationElement) {
     
          locationElementss.addEventListener("click", locations.onClick = function(){  
            $('#map').fadeOut(1000);   
            $('.list-group').fadeOut(2000);   
            $('#content-wrapper').fadeIn(3000);
            $('.cover_photo_map').fadeIn(3500);   
                            $.ajax({
                  method : "get",
                  url : "ajax.php",
                  data:{locationid:locationIndex},
                  success:function(result) {
                      result = JSON.parse(result);
                      console.log(result);
                      $('#slide1').attr('src','admin/img/' + result.image1);
                      $('#featured').attr('src','admin/img/' + result.image1);
                      $('#slide2').attr('src','admin/img/' + result.image2);
                      $('#slide3').attr('src','admin/img/' + result.image3);
                      $('#slide4').attr('src','admin/img/' + result.image4);
                      $('#slide5').attr('src','admin/img/' + result.image5);
                      $('#slide6').attr('src','admin/img/' + result.image6);

                      //description
                      $('#descriptionslide').text(result.description);
                      $('#orangeSectionName').text(result.orangeSectionName);
                      $('#location').text(result.location);
                      
                  }
                });
          })
      }
  }
}
setTimeout(modalshow, 500); 

//img map animmation

$('#img_animmations').click(function() {
  $('#content-wrapper').fadeOut();
            $('.cover_photo_map').fadeOut(); 
            $('#map').fadeIn(3500);   
            $('.list-group').fadeIn(3000);   
});

//modal slide
let thumbnails = document.getElementsByClassName('thumbnail')

let activeImages = document.getElementsByClassName('active')

for (var i=0; i < thumbnails.length; i++){

  thumbnails[i].addEventListener('click', function(){
      console.log(activeImages)
      
      if (activeImages.length > 0){
          activeImages[0].classList.remove('active')
      }
      

      this.classList.add('active')
      document.getElementById('featured').src = this.src
  })
}


let buttonRight = document.getElementById('slideRight');
let buttonLeft = document.getElementById('slideLeft');

buttonLeft.addEventListener('click', function(){
  document.getElementById('slider').scrollLeft -= 180
})

buttonRight.addEventListener('click', function(){
  document.getElementById('slider').scrollLeft += 180
})
// function animm(){ 
//   if($('#map').hasClass("animat")){
      
//   }else{
//   simplemaps_countrymap_mapdata.main_settings.width = '500';

// }

// }; 

setTimeout(nnnd, 500) 
