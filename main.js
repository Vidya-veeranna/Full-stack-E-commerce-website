
    /********Slider*******/
    $('.slider2')
    .not(".slick-intialized")
    .slick({
        autoplay: true,
        autoplaySpeed:3000,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<span class='prev position-top2 left-0 ml-2'><i style='cursor: pointer' class='fas fa-chevron-left'></i></span>",
        nextArrow: "<span class='next position-top2 right-1 mr-2'><i style='cursor: pointer' class='fas fa-chevron-right'></i></span>",
        responsive:[
            {
                breakpoint: 1500,
                settings:{
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 700,
                settings:{
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    })
/* product qty section
let $qty_up = $(".qty .qty-up");
let $qty_down = $(".qty .qty-down");
let $input = $(".qty .qty_input");

// click on qty up button
$qty_up.click(function(e){
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    if($input.val() >= 1 && $input.val() <= 9){
        $input.val(function(i, oldval){
            return ++oldval;
        });
    }
});

   // click on qty down button
   $qty_down.click(function(e){
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    if($input.val() > 1 && $input.val() <= 10){
        $input.val(function(i, oldval){
            return --oldval;
        });
    }
});

*/
var ProductImg = document.getElementById("product-img");
var samllImg = document.getElementsByClassName("small-img");

samllImg[0].onclick = function(){
    ProductImg.src = samllImg[0].src;
}
samllImg[1].onclick = function(){
    ProductImg.src = samllImg[1].src;
}
samllImg[2].onclick = function(){
    ProductImg.src = samllImg[2].src;
}
samllImg[3].onclick = function(){
    ProductImg.src = samllImg[3].src;
}

