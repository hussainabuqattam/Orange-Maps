//checkbox
$('.checkinputbox').click(function(){
    $(this).siblings("span").toggleClass('colorsche');
});
function modalshow () {
    const locations = simplemaps_countrymap_mapdata.locations;
    for(const locationIndex in simplemaps_countrymap_mapdata.locations){
        const classNamess = `sm_location_${locationIndex}`
        console.log(locationIndex);
        const locationElement = document.getElementsByClassName(classNamess)
        console.log(locationElement);
        for (const locationElementss of locationElement) {
            locationElementss.addEventListener("click", locations.onClick = function(){           
                $('#exampleModal').modal('show');
                console.log('ok');
                $.ajax({
                    method : "get",
                    url : "ajax.php",
                    data:{locationid: locationIndex},
                    success:function(result) {
                        result = JSON.parse(result);
                        console.log(result);
                    }
                  });
            })
        }
    }
}
setTimeout(modalshow, 500) 
