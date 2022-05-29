//upload 
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

//signup 
let btndoctor = document.querySelector("#chec");

let btnremove = document.querySelector("#doctor");

btndoctor.onclick = function(){
    $('.Jurisdiction').addClass("doctor-display");
    $('.timedis').addClass("doctor-display");
    $('.labeldis').addClass("doctor-display");
    $('.imgdes').addClass("doctor-display");
}
btnremove.onclick = function(){
    $('.Jurisdiction').removeClass("doctor-display");
    $('.timedis').removeClass("doctor-display");
    $('.labeldis').removeClass("doctor-display");
    $('.imgdes').removeClass("doctor-display");
}



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









//start table
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
//end table

