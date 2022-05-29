$(document).ready(function() {

    // Add to cart 
    $(document).on("click", ".addToCart", function(){
        var itemId = $(this).data("item") ,qunatity = 1;
        if($(this).data("withcounter") == true){
            qunatity = parseInt(document.getElementById("number-product").value);
        }
        $.ajax({
            method:"post",
            url:"ajax.php",
            data:{itemId: itemId, quantity:qunatity},
            success:function(result) {
                result = JSON.parse(result);
                var MessageBox          = "#messagebox",
                icon                    = ".icon-message-cart i",
                iconMessageClass        = "fa-check-circle",
                MessageBody             = "",
                cartMessagecontentClass = ".cartMessagecontent";
                MessageBody = result.message;
                $(".message-body-cart").text(MessageBody);
                $(MessageBox).fadeIn(300 ,function(){
                    $(this).find(icon).removeClass("fa-circle").addClass(iconMessageClass);
                    $(MessageBox).delay(700).fadeOut(500,function(){
                        $(icon).removeClass(iconMessageClass).addClass("fa-circle");
                        if($(cartMessagecontentClass).hasClass("founded")){
                            $(cartMessagecontentClass).removeClass("founded");
                        }
                    });
                });
                if(result.status == 1){
                    var count = $(".new-count-cart").text();
                    count = ++count;
                    $(".new-count-cart").text(count);
                }
            }
        });
        
    
    });


});