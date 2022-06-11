//checkbox
$('.checkinputbox').click(function(){
    $(this).siblings("span").toggleClass('colorsche');
});
function modalshow () {
    const locations = simplemaps_countrymap_mapdata.locations;
    for(const locationIndex in simplemaps_countrymap_mapdata.locations){
        const classNamess = `sm_location_${locationIndex}`
        console.log(locationIndex)
        const locationElement = document.getElementsByClassName(classNamess)
        console.log(locationElement)
        for (const locationElementss of locationElement) {
            locationElementss.addEventListener("click", locations.onClick = function(){           
                $('#exampleModal').modal('show');
                console.log('ok');
                $.ajax({
                    method : "get",
                    url : "ajax.php",
                    data:{locationid:locationIndex},
                    success:function(result) {
                        result = JSON.parse(result);
                        $('#slide1 img').attr('src','admin/img/' + result.image1);
                        $('#slide2 img').attr('src','admin/img/' + result.image2);
                        $('#slide3 img').attr('src','admin/img/' + result.image3);
                        $('#slide4 img').attr('src','admin/img/' + result.image4);
                        $('#slide5 img').attr('src','admin/img/' + result.image5);
                        //small img
                        $('#smallslide1 img').attr('src','admin/img/' + result.image1);
                        $('#smallslide2 img').attr('src','admin/img/' + result.image2);
                        $('#smallslide3 img').attr('src','admin/img/' + result.image3);
                        $('#smallslide4 img').attr('src','admin/img/' + result.image4);
                        $('#smallslide5 img').attr('src','admin/img/' + result.image5);
                        //description
                        $('#descriptionslide').text(result.description);
                        
                    }
                  });
            })
        }
    }
}
setTimeout(modalshow, 500) 
//modal
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