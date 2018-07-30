/**
 * Created by Admin on 2/27/2017.
 */
$('.product_pad_mini .product_box').css("height", "inherit");

var max_height = 0;
$('.product_pad_mini .product_box').each(function(e) {
    h = $(this).height();
    if(typeof(h) != "undefined") {
        if(h > max_height) {
            max_height = h;
        }
    }
});
if(max_height > 0) {
    $('.product_pad_mini .product_box').height(max_height);
}
