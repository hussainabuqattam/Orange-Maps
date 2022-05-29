
function readUrl(input){
    var uploadimg = document.getElementById("imguploadserves");

    if(input.files){
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload=(download)=>{
            uploadimg.src = download.target.result;
        }
    }
}

let btn=document.querySelector("#btn"),
sidedar=document.querySelector(".sidebar"),
sidemargin=document.querySelector(".wraper"),
searchbtn=document.querySelector(".fa-search");
ciclemargin=document.querySelector(".circle-nav")
btn.onclick = function(){
    sidedar.classList.toggle("active");
    sidemargin.classList.toggle("margins");  
    ciclemargin.classList.toggle("circle-margin");  
}


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
//start table
getPagination('#table-id');
$('#maxRows').trigger('change');
function getPagination (table){

	  $('#maxRows').on('change',function(){
		  $('.pagination').html('');						// reset pagination div
		  var trnum = 0 ;									// reset tr counter 
		  var maxRows = parseInt($(this).val());			// get Max Rows from select option
	
		  var totalRows = $(table+' tbody tr').length;		// numbers of rows 
		 $(table+' tr:gt(0)').each(function(){			// each TR in  table and not the header
			 trnum++;									// Start Counter 
			 if (trnum > maxRows ){						// if tr number gt maxRows
				 
				 $(this).hide();							// fade it out 
			 }if (trnum <= maxRows ){$(this).show();}// else fade in Important in case if it ..
		 });											//  was fade out to fade it in 
		 if (totalRows > maxRows){						// if tr total rows gt max rows option
			 var pagenum = Math.ceil(totalRows/maxRows);	// ceil total(rows/maxrows) to get ..  
														 //	numbers of pages 
			 for (var i = 1; i <= pagenum ;){			// for each page append pagination li 
			 $('.pagination').append('<li data-page="'+i+'">\
								  <span>'+ i++ +'<span class="sr-only">(current)</span></span>\
								</li>').show();
			 }											// end for i 
 
	 
		} 												// end if row count > max rows
		$('.pagination li:first-child').addClass('active-ra'); // add active-ra class to the first li 
	
	
	//SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
   showig_rows_count(maxRows, 1, totalRows);
	//SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT

	$('.pagination li').on('click',function(e){		// on click each page
	e.preventDefault();
			var pageNum = $(this).attr('data-page');	// get it's number
			var trIndex = 0 ;							// reset tr counter
			$('.pagination li').removeClass('active-ra');	// remove active-ra class from all li 
			$(this).addClass('active-ra');					// add active-ra class to the clicked 
	
	
	//SHOWING ROWS NUMBER OUT OF TOTAL
   showig_rows_count(maxRows, pageNum, totalRows);
	//SHOWING ROWS NUMBER OUT OF TOTAL
	
	
	
			 $(table+' tr:gt(0)').each(function(){		// each tr in table not the header
				 trIndex++;								// tr index counter 
				 // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
				 if (trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
					 $(this).hide();		
				 }else {$(this).show();} 				//else fade in 
			 }); 										// end of for each tr in table
				});										// end of on click pagination list
	});
										// end of on select change 
	 
							// END OF PAGINATION 

}	


//ROWS SHOWING FUNCTION
function showig_rows_count(maxRows, pageNum, totalRows) {
//Default rows showing
	var end_index = maxRows*pageNum;
	var start_index = ((maxRows*pageNum)- maxRows) + parseFloat(1);
	var string = 'Showing '+ start_index + ' to ' + end_index +' of ' + totalRows + ' entries';               
	$('.rows_count').html(string);
}



// All Table search script
function FilterkeyWord_all_table() {

// Count td if you want to search on all table instead of specific column

var count = $('.table').children('tbody').children('tr:first-child').children('td').length; 

	// Declare variables
var input, filter, table, tr, td, i;
input = document.getElementById("search_input_all");
var input_value =     document.getElementById("search_input_all").value;
	filter = input.value.toLowerCase();
if(input_value !=''){
	table = document.getElementById("table-id");
	tr = table.getElementsByTagName("tr");

	// Loop through all table rows, and hide those who don't match the search query
	for (i = 1; i < tr.length; i++) {
	  
	  var flag = 0;
	   
	  for(j = 0; j < count; j++){
		td = tr[i].getElementsByTagName("td")[j];
		if (td) {
		 
			var td_text = td.innerHTML;  
			if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
			//var td_text = td.innerHTML;  
			//td.innerHTML = 'shaban';
			  flag = 1;
			} else {
			  //DO NOTHING
			}
		  }
		}
	  if(flag==1){
				 tr[i].style.display = "";
	  }else {
		 tr[i].style.display = "none";
	  }
	}
}else {
  //RESET TABLE
  $('#maxRows').trigger('change');
}
}
//new upload
var btnUpload = $("#uploadss_file"),
btnOuter = $(".button_outer");
btnUpload.on("change", function(e){
var ext = btnUpload.val().split('.').pop().toLowerCase();
if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
    $(".error_msg").text("Not an Image...");
} else {
    $(".error_msg").text("");
    btnOuter.addClass("file_uploading");
    setTimeout(function(){
        btnOuter.addClass("file_uploaded");
    },3000);
    var uploadedFile = URL.createObjectURL(e.target.files[0]);
    setTimeout(function(){
        $("#uploaded_view").append('<img  src="'+uploadedFile+'" />').addClass("show");
    },3500);
}
});
$(".file_remove").on("click", function(e){
$("#uploaded_view").removeClass("show");
$("#uploaded_view").find("img").remove();
btnOuter.removeClass("file_uploading");
btnOuter.removeClass("file_uploaded");
});



//profile
/*add-img-edit-profile-*/
function readUrledit(event){
    "use strict"
var uploadimge = document.getElementById("uplodeimgedit");
if(event.files){
var readers = new FileReader();
readers.readAsDataURL(event.files[0]);
readers.onload=(download)=>{
uploadimge.src = download.target.result;
}
}
};     
/*add-img-edit-profile-click*/
function uptateimge(){
    "use strict"
var uptateimgeS=document.getElementById("uplode-img-edit");
uptateimgeS.click();};