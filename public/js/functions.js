function cart(product_id) {
    $.ajaxSetup({ headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") } });
    var o = window.location.protocol + "//" + $(location).attr("host"),
	//var o = 'http://localhost/100web4/public_html',
        e = jQuery("#show-cart"),
        r = o + "/cart/add",
        qty = jQuery("#qty").val();
        if(!qty) { qty = 1;}
    $.ajax({
        type: "GET",
        url: r,
        data: { qty: qty, production: product_id },
        success: function (result) {
           if(result){

                    if(result=='stock'){

                        e.load(o + "/cart/list", function () {
                            $('.stock-cart').show();
                            setTimeout(function() {
                                $('.stock-cart').hide();
                            }, 3e3);
                        });

                     }

                     else{
                        e.load(o + "/cart/list", function () {
                        $('.success-cart').show();
                        $(".item-count").text(result);
                        setTimeout(function() {
                            $('.success-cart').hide();
                        }, 3e3);
                    });
                 }

           }
        },
        error: function (result) {
            console.log("Error:", result);
        },
    });
}


function wishlist(product_id) {
    $.ajaxSetup({ headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") } });
   var o = window.location.protocol + "//" + $(location).attr("host"),
   // var o = 'http://localhost/100web4/public_html',
        r = o + "/wishlist/add";
    $.ajax({
        type: "GET",
        url: r,
        data: { production: product_id },
        success: function (result) {
           if(result==1){

                  $('.success-wishlist').show();
                        setTimeout(function() {
                            $('.success-wishlist').hide();
                        }, 3e3);
                }
			else{
				 $('.added-wishlist').show();
                        setTimeout(function() {
                            $('.added-wishlist').hide();
                        }, 3e3);
			}
        },
        error: function (result) {
            console.log("Error:", result);
        },
    });
}


function remove(cart_id) {
    $.ajaxSetup({ headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") } });
   var o = window.location.protocol + "//" + $(location).attr("host"),
     // var o = 'http://localhost/100web4/public_html',
        e = jQuery("#show-cart"),
        r = o + "/cart-remove";
        
    $.ajax({
        type: "GET",
        url: r,
        data: {  cart_id: cart_id },
        success: function (result) {
           if(result){
                    e.load(o + "/cart/list", function () {
                        $(".item-count").text(result);
                        
                    });

                }
        },
        error: function (result) {
            console.log("Error:", result);
        },
    });
}

function offcanvasClose(){
    var offCanvasToggle = $('.offcanvas-toggle'),
            offCanvas       = $('.offcanvas-add-cart-section'),
            offCanvasOverlay = $('.offcanvas-overlay'),
            mobileMenuToggle = $('.mobile-menu-toggle'),
            body = $('body');
            
    body.removeClass('offcanvas-open');
    offCanvas.removeClass('offcanvas-open');
    offCanvasOverlay.fadeOut();
    mobileMenuToggle.find('a').removeClass('close');
}


setTimeout(() => {$(".alert").fadeOut(1e3)}, 3000);
setTimeout(() => {$(".success-wishlist").fadeOut(1e3)}, 1000);
setTimeout(() => {$(".success-cart").fadeOut(1e3)}, 1000);
setTimeout(() => {$(".added-wishlist").fadeOut(1e3)}, 1000);
setTimeout(() => {$(".stock-cart").fadeOut(1e3)}, 1000);