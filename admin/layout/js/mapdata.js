var simplemaps_countrymap_mapdata={
  main_settings: {
   //General settings
    width: "500", //'700' or 'responsive'
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
    location_description: "Location description",
    location_url: "",
    location_color: "#ff6600",
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
      color: "#d8ffcf",
      hover_color: "#d8ffcf"
    },
    JOR850: {
      name: "Mafraq",
      color: "#ffffcf",
      hover_color: "#ffffcf"
    },
    JOR851: {
      name: "Amman",
      color: "#d6ffce",
      hover_color: "#d6ffce"
    },
    JOR852: {
      name: "Tafilah",
      color: "#f5d5aa",
      hover_color: "#f5d5aa"
    },
    JOR853: {
      name: "Ma`an",
      color: "#f3d1fe",
      hover_color: "#f3d1fe"
    },
    JOR854: {
      name: "Irbid",
      color: "#dbfcd1",
      hover_color: "#dbfcd1"
    },
    JOR855: {
      name: "Ajlun",
      color: "#fed1d2",
      hover_color: "#fed1d2"
    },
    JOR856: {
      name: "Jarash",
      color: "#f3d0f1",
      hover_color: "#f3d0f1"
    },
    JOR857: {
      name: "Balqa",
      color: "#f1dddf",
      hover_color: "#f1dddf"
    },
    JOR858: {
      name: "Madaba",
      color: "#debfaa",
      hover_color: "#debfaa"
    },
    JOR859: {
      name: "Karak",
      color: "#fed3d6",
      hover_color: "#fed3d6"
    },
    JOR860: {
      name: "Zarqa",
      color: "#977e61",
      hover_color: "#977e61"
    }
  },
  locations: {},
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
$.ajax({
  method : "get",
  url : "ajax.php",
  data:{getAllLocation: 1},
  success:function(result) {
    result = JSON.parse(result);
    simplemaps_countrymap_mapdata.locations = {...result};
    console.log(simplemaps_countrymap_mapdata.locations);
  }
});