<?php
session_start();
include'Shikamaru.php';



$sesionh=session_id();//Index creó una variable de sessio
//echo $_SESSION['idsesion'];
if (isset($_POST['idproducto'])) //Agreando  productos al carro
		{
			$item=$_POST['idproducto'];
			$shika->addCarro($sesionh,1,$item);
			
		}

$shika->setCarro($sesionh);//Almacena en el array los productos de la seccion

if (isset($_GET['seccion'])) {$idprod=$_GET['seccion'];}
else{$idprod=2;}


//echo($_POST['borrable']);

if (isset($_POST['carro'])) {$shika->borrarCarro((int)$_POST['carro']);
//header ("Location: carros.php");
//setTimeout(function(){var hh=0;}, 4000);
sleep(1);header ("Location: cielo.php");
}

if (isset($_POST['cantidad'])) {
    $shika->setCantidad(
        (int)$_POST['idcarro'],
        (int)$_POST['cantidad']);
    }


?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030"><?php include 'encabezado.php';?>
<?php include 'hidrogeno.php';?>
    <style type="text/css">
		@charset "UTF-8";
		.clear,.woocommerce .woocommerce-breadcrumb:after{clear:both}
		@-webkit-keyframes spin{100%{-webkit-transform:rotate(360deg)}}@-moz-keyframes spin{100%{-moz-transform:rotate(360deg)}}@keyframes spin{100%{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-ms-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg)}}@font-face{font-family:star;src:url(../fonts/star.eot);src:url(../fonts/star.eot?#iefix) format("embedded-opentype"),url(../fonts/star.woff) format("woff"),url(../fonts/star.ttf) format("truetype"),url(../fonts/star.svg#star) format("svg");font-weight:400;font-style:normal}@font-face{font-family:WooCommerce;src:url(../fonts/WooCommerce.eot);src:url(../fonts/WooCommerce.eot?#iefix) format("embedded-opentype"),url(../fonts/WooCommerce.woff) format("woff"),url(../fonts/WooCommerce.ttf) format("truetype"),url(../fonts/WooCommerce.svg#WooCommerce) format("svg");font-weight:400;font-style:normal}p.demo_store{position:fixed;top:0;left:0;right:0;margin:0;width:100%;font-size:1em;padding:1em 0;text-align:center;background-color:#a46497;color:#fff;z-index:99998;box-shadow:0 1px 1em rgba(0,0,0,.2)}p.demo_store a{color:#fff}.admin-bar p.demo_store{top:32px}.woocommerce .blockUI.blockOverlay{position:relative}.woocommerce .blockUI.blockOverlay:before,.woocommerce .loader:before{height:1em;width:1em;position:absolute;top:50%;left:50%;margin-left:-.5em;margin-top:-.5em;display:block;content:"";-webkit-animation:spin 1s ease-in-out infinite;-moz-animation:spin 1s ease-in-out infinite;animation:spin 1s ease-in-out infinite;background:url(../images/icons/loader.svg) center center;background-size:cover;line-height:1;text-align:center;font-size:2em;color:rgba(0,0,0,.75)}.woocommerce a.remove{display:block;font-size:1.5em;height:1em;width:1em;text-align:center;line-height:1;border-radius:100%;color:red!important;text-decoration:none;font-weight:700;border:0}.woocommerce a.remove:hover{color:#fff!important;background:red}.woocommerce small.note{display:block;color:#777;font-size:.857em;margin-top:10px}.woocommerce .woocommerce-breadcrumb{margin:0 0 1em;padding:0;font-size:.92em;color:#777}.woocommerce .woocommerce-breadcrumb:after,.woocommerce .woocommerce-breadcrumb:before{content:" ";display:table}.woocommerce .woocommerce-breadcrumb a{color:#777}.woocommerce .quantity .qty{width:3.631em;text-align:center}.woocommerce div.product{margin-bottom:0;position:relative}.woocommerce div.product .product_title{clear:none;margin-top:0;padding:0}.woocommerce #reviews #comments .add_review:after,.woocommerce .products ul:after,.woocommerce div.product form.cart:after,.woocommerce div.product p.cart:after,.woocommerce nav.woocommerce-pagination ul,.woocommerce ul.products:after{clear:both}.woocommerce div.product p.price,.woocommerce div.product span.price{color:#77a464;font-size:1.25em}.woocommerce div.product p.price ins,.woocommerce div.product span.price ins{background:inherit;font-weight:700}.woocommerce div.product p.price del,.woocommerce div.product span.price del{opacity:.5}.woocommerce div.product p.stock{font-size:.92em}.woocommerce div.product .stock{color:#77a464}.woocommerce div.product .out-of-stock{color:red}.woocommerce div.product .woocommerce-product-rating{margin-bottom:1.618em}.woocommerce div.product div.images,.woocommerce div.product div.summary{margin-bottom:2em}.woocommerce div.product div.images img{display:block;width:100%;height:auto;box-shadow:none}.woocommerce div.product div.images div.thumbnails{padding-top:1em}.woocommerce div.product div.social{text-align:right;margin:0 0 1em}.woocommerce div.product div.social span{margin:0 0 0 2px}.woocommerce div.product div.social span span{margin:0}.woocommerce div.product div.social span .stButton .chicklets{padding-left:16px;width:0}.woocommerce div.product div.social iframe{float:left;margin-top:3px}.woocommerce div.product .woocommerce-tabs ul.tabs{list-style:none;padding:0 0 0 1em;margin:0 0 1.618em;overflow:hidden;position:relative}.woocommerce div.product .woocommerce-tabs ul.tabs li{border:1px solid #d3ced2;background-color:#ebe9eb;display:inline-block;position:relative;z-index:0;border-radius:4px 4px 0 0;margin:0 -5px;padding:0 1em}.woocommerce div.product .woocommerce-tabs ul.tabs li a{display:inline-block;padding:.5em 0;font-weight:700;color:#515151;text-decoration:none}.woocommerce div.product form.cart:after,.woocommerce div.product form.cart:before,.woocommerce div.product p.cart:after,.woocommerce div.product p.cart:before{display:table;content:" "}.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover{text-decoration:none;color:#6b6b6b}.woocommerce div.product .woocommerce-tabs ul.tabs li.active{background:#fff;z-index:2;border-bottom-color:#fff}.woocommerce div.product .woocommerce-tabs ul.tabs li.active a{color:inherit;text-shadow:inherit}.woocommerce div.product .woocommerce-tabs ul.tabs li.active:before{box-shadow:2px 2px 0 #fff}.woocommerce div.product .woocommerce-tabs ul.tabs li.active:after{box-shadow:-2px 2px 0 #fff}.woocommerce div.product .woocommerce-tabs ul.tabs li:after,.woocommerce div.product .woocommerce-tabs ul.tabs li:before{border:1px solid #d3ced2;position:absolute;bottom:-1px;width:5px;height:5px;content:" "}.woocommerce div.product .woocommerce-tabs ul.tabs li:before{left:-6px;-webkit-border-bottom-right-radius:4px;-moz-border-bottom-right-radius:4px;border-bottom-right-radius:4px;border-width:0 1px 1px 0;box-shadow:2px 2px 0 #ebe9eb}.woocommerce div.product .woocommerce-tabs ul.tabs li:after{right:-6px;-webkit-border-bottom-left-radius:4px;-moz-border-bottom-left-radius:4px;border-bottom-left-radius:4px;border-width:0 0 1px 1px;box-shadow:-2px 2px 0 #ebe9eb}.woocommerce div.product .woocommerce-tabs ul.tabs:before{position:absolute;content:" ";width:100%;bottom:0;left:0;border-bottom:1px solid #d3ced2;z-index:1}.woocommerce div.product .woocommerce-tabs .panel{margin:0 0 2em;padding:0}.woocommerce div.product form.cart,.woocommerce div.product p.cart{margin-bottom:2em}.woocommerce div.product form.cart div.quantity{float:left;margin:0 4px 0 0}.woocommerce div.product form.cart table{border-width:0 0 1px}.woocommerce div.product form.cart table td{padding-left:0}.woocommerce div.product form.cart table div.quantity{float:none;margin:0}.woocommerce div.product form.cart table small.stock{display:block;float:none}.woocommerce div.product form.cart .variations{margin-bottom:1em;border:0;width:100%}.woocommerce div.product form.cart .variations td,.woocommerce div.product form.cart .variations th{border:0;vertical-align:top;line-height:2em}.woocommerce div.product form.cart .variations label{font-weight:700}.woocommerce div.product form.cart .variations select{max-width:100%;min-width:75%;display:inline-block;margin-right:1em}.woocommerce div.product form.cart .variations td.label{padding-right:1em}.woocommerce div.product form.cart .woocommerce-variation-description p{margin-bottom:1em}.woocommerce div.product form.cart .reset_variations{visibility:hidden;font-size:.83em}.woocommerce div.product form.cart .wc-no-matching-variations{display:none}.woocommerce div.product form.cart .button{vertical-align:middle;float:left}.woocommerce div.product form.cart .group_table td.label{padding-right:1em;padding-left:1em}.woocommerce div.product form.cart .group_table td{vertical-align:top;padding-bottom:.5em;border:0}.woocommerce span.onsale{min-height:3.236em;min-width:3.236em;padding:.202em;font-weight:700;position:absolute;text-align:center;line-height:3.236;top:-.5em;left:-.5em;margin:0;border-radius:100%;background-color:#77a464;color:#fff;font-size:.857em;-webkit-font-smoothing:antialiased}.woocommerce .products ul,.woocommerce ul.products{margin:0 0 1em;padding:0;list-style:none;clear:both}.woocommerce .products ul:after,.woocommerce .products ul:before,.woocommerce ul.products:after,.woocommerce ul.products:before{content:" ";display:table}.woocommerce .products ul li,.woocommerce ul.products li{list-style:none}.woocommerce ul.products li.product .onsale{top:0;right:0;left:auto;margin:-.5em -.5em 0 0}.woocommerce ul.products li.product h3{padding:.5em 0;margin:0;font-size:1em}.woocommerce ul.products li.product a{text-decoration:none}.woocommerce ul.products li.product a img{width:100%;height:auto;display:block;margin:0 0 1em;box-shadow:none}.woocommerce ul.products li.product strong{display:block}.woocommerce ul.products li.product .star-rating{font-size:.857em}.woocommerce ul.products li.product .button{margin-top:1em}.woocommerce ul.products li.product .price{color:#77a464;display:block;font-weight:400;margin-bottom:.5em;font-size:.857em}.woocommerce ul.products li.product .price del{color:inherit;opacity:.5;display:block}.woocommerce ul.products li.product .price ins{background:0 0;font-weight:700}.woocommerce ul.products li.product .price .from{font-size:.67em;margin:-2px 0 0;text-transform:uppercase;color:rgba(132,132,132,.5)}.woocommerce .woocommerce-ordering,.woocommerce .woocommerce-result-count{margin:0 0 1em}.woocommerce .woocommerce-ordering select{vertical-align:top}.woocommerce nav.woocommerce-pagination{text-align:center}.woocommerce nav.woocommerce-pagination ul{display:inline-block;white-space:nowrap;padding:0;border:1px solid #d3ced2;border-right:0;margin:1px}.woocommerce nav.woocommerce-pagination ul li{border-right:1px solid #d3ced2;padding:0;margin:0;float:left;display:inline;overflow:hidden}.woocommerce nav.woocommerce-pagination ul li a,.woocommerce nav.woocommerce-pagination ul li span{margin:0;text-decoration:none;line-height:1;font-size:1em;font-weight:400;padding:.5em;min-width:1em;display:block}.woocommerce nav.woocommerce-pagination ul li a:focus,.woocommerce nav.woocommerce-pagination ul li a:hover,.woocommerce nav.woocommerce-pagination ul li span.current{background:#ebe9eb;color:#8a7e88}.woocommerce #respond input#submit,.woocommerce a.button,.woocommerce button.button,.woocommerce input.button{font-size:100%;margin:0;line-height:1;cursor:pointer;position:relative;text-decoration:none;overflow:visible;padding:.618em 1em;font-weight:700;border-radius:3px;left:auto;color:#515151;background-color:#ebe9eb;border:0;white-space:nowrap;display:inline-block;background-image:none;box-shadow:none;-webkit-box-shadow:none;text-shadow:none}.woocommerce #respond input#submit.loading,.woocommerce a.button.loading,.woocommerce button.button.loading,.woocommerce input.button.loading{opacity:.25;padding-right:2.618em}.woocommerce #respond input#submit.loading:after,.woocommerce a.button.loading:after,.woocommerce button.button.loading:after,.woocommerce input.button.loading:after{font-family:WooCommerce;content:"\e01c";vertical-align:top;-webkit-font-smoothing:antialiased;font-weight:400;position:absolute;top:.618em;right:1em;-webkit-animation:spin 2s linear infinite;-moz-animation:spin 2s linear infinite;animation:spin 2s linear infinite}.woocommerce #respond input#submit.added:after,.woocommerce a.button.added:after,.woocommerce button.button.added:after,.woocommerce input.button.added:after{font-family:WooCommerce;content:"\e017";margin-left:.53em;vertical-align:bottom}.woocommerce #respond input#submit:hover,.woocommerce a.button:hover,.woocommerce button.button:hover,.woocommerce input.button:hover{background-color:#dad8da;text-decoration:none;background-image:none;color:#515151}.woocommerce #respond input#submit.alt,.woocommerce a.button.alt,.woocommerce button.button.alt,.woocommerce input.button.alt{background-color:#a46497;color:#fff;-webkit-font-smoothing:antialiased}.woocommerce #respond input#submit.alt:hover,.woocommerce a.button.alt:hover,.woocommerce button.button.alt:hover,.woocommerce input.button.alt:hover{background-color:#935386;color:#fff}.woocommerce #respond input#submit.alt.disabled,.woocommerce #respond input#submit.alt.disabled:hover,.woocommerce #respond input#submit.alt:disabled,.woocommerce #respond input#submit.alt:disabled:hover,.woocommerce #respond input#submit.alt:disabled[disabled],.woocommerce #respond input#submit.alt:disabled[disabled]:hover,.woocommerce a.button.alt.disabled,.woocommerce a.button.alt.disabled:hover,.woocommerce a.button.alt:disabled,.woocommerce a.button.alt:disabled:hover,.woocommerce a.button.alt:disabled[disabled],.woocommerce a.button.alt:disabled[disabled]:hover,.woocommerce button.button.alt.disabled,.woocommerce button.button.alt.disabled:hover,.woocommerce button.button.alt:disabled,.woocommerce button.button.alt:disabled:hover,.woocommerce button.button.alt:disabled[disabled],.woocommerce button.button.alt:disabled[disabled]:hover,.woocommerce input.button.alt.disabled,.woocommerce input.button.alt.disabled:hover,.woocommerce input.button.alt:disabled,.woocommerce input.button.alt:disabled:hover,.woocommerce input.button.alt:disabled[disabled],.woocommerce input.button.alt:disabled[disabled]:hover{background-color:#a46497;color:#fff}.woocommerce #respond input#submit.disabled,.woocommerce #respond input#submit:disabled,.woocommerce #respond input#submit:disabled[disabled],.woocommerce a.button.disabled,.woocommerce a.button:disabled,.woocommerce a.button:disabled[disabled],.woocommerce button.button.disabled,.woocommerce button.button:disabled,.woocommerce button.button:disabled[disabled],.woocommerce input.button.disabled,.woocommerce input.button:disabled,.woocommerce input.button:disabled[disabled]{color:inherit;cursor:not-allowed;opacity:.5;padding:.618em 1em}.woocommerce #respond input#submit.disabled:hover,.woocommerce #respond input#submit:disabled:hover,.woocommerce #respond input#submit:disabled[disabled]:hover,.woocommerce a.button.disabled:hover,.woocommerce a.button:disabled:hover,.woocommerce a.button:disabled[disabled]:hover,.woocommerce button.button.disabled:hover,.woocommerce button.button:disabled:hover,.woocommerce button.button:disabled[disabled]:hover,.woocommerce input.button.disabled:hover,.woocommerce input.button:disabled:hover,.woocommerce input.button:disabled[disabled]:hover{color:inherit;background-color:#ebe9eb}.woocommerce .cart .button,.woocommerce .cart input.button{float:none}.woocommerce a.added_to_cart{padding-top:.5em;white-space:nowrap;display:inline-block}.woocommerce #reviews #comments .add_review:after,.woocommerce #reviews #comments .add_review:before,.woocommerce #reviews #comments ol.commentlist li .comment-text:after,.woocommerce #reviews #comments ol.commentlist li .comment-text:before,.woocommerce #reviews #comments ol.commentlist:after,.woocommerce #reviews #comments ol.commentlist:before{content:" ";display:table}.woocommerce #reviews h2 small{float:right;color:#777;font-size:15px;margin:10px 0 0}.woocommerce #reviews h2 small a{text-decoration:none;color:#777}.woocommerce #reviews h3{margin:0}.woocommerce #reviews #respond{margin:0;border:0;padding:0}.woocommerce #reviews #comment{height:75px}.woocommerce #reviews #comments h2{clear:none}.woocommerce #review_form #respond:after,.woocommerce #reviews #comments ol.commentlist li .comment-text:after,.woocommerce #reviews #comments ol.commentlist:after,.woocommerce .woocommerce-product-rating:after,.woocommerce td.product-name dl.variation:after{clear:both}.woocommerce #reviews #comments ol.commentlist{margin:0;width:100%;background:0 0;list-style:none}.woocommerce #reviews #comments ol.commentlist li{padding:0;margin:0 0 20px;position:relative;background:0;border:0}.woocommerce #reviews #comments ol.commentlist li .meta{color:#777;font-size:.75em}.woocommerce #reviews #comments ol.commentlist li img.avatar{float:left;position:absolute;top:0;left:0;padding:3px;width:32px;height:auto;background:#ebe9eb;border:1px solid #e4e1e3;margin:0;box-shadow:none}.woocommerce #reviews #comments ol.commentlist li .comment-text{margin:0 0 0 50px;border:1px solid #e4e1e3;border-radius:4px;padding:1em 1em 0}.woocommerce #reviews #comments ol.commentlist li .comment-text p{margin:0 0 1em}.woocommerce #reviews #comments ol.commentlist li .comment-text p.meta{font-size:.83em}.woocommerce #reviews #comments ol.commentlist ul.children{list-style:none;margin:20px 0 0 50px}.woocommerce #reviews #comments ol.commentlist ul.children .star-rating{display:none}.woocommerce #reviews #comments ol.commentlist #respond{border:1px solid #e4e1e3;border-radius:4px;padding:1em 1em 0;margin:20px 0 0 50px}.woocommerce #reviews #comments .commentlist>li:before{content:""}.woocommerce .star-rating{float:right;overflow:hidden;position:relative;height:1em;line-height:1;font-size:1em;width:5.4em;font-family:star}.woocommerce .star-rating:before{content:"\73\73\73\73\73";color:#d3ced2;float:left;top:0;left:0;position:absolute}.woocommerce .star-rating span{overflow:hidden;float:left;top:0;left:0;position:absolute;padding-top:1.5em}.woocommerce .star-rating span:before{content:"\53\53\53\53\53";top:0;position:absolute;left:0}.woocommerce .woocommerce-product-rating{line-height:2;display:block}.woocommerce .woocommerce-product-rating:after,.woocommerce .woocommerce-product-rating:before{content:" ";display:table}.woocommerce .woocommerce-product-rating .star-rating{margin:.5em 4px 0 0;float:left}.woocommerce .products .star-rating{display:block;margin:0 0 .5em;float:none}.woocommerce .hreview-aggregate .star-rating{margin:10px 0 0}.woocommerce #review_form #respond{position:static;margin:0;width:auto;padding:0;background:0 0;border:0}.woocommerce #review_form #respond:after,.woocommerce #review_form #respond:before{content:" ";display:table}.woocommerce p.stars a:before,.woocommerce p.stars a:hover~a:before{content:"\e021"}.woocommerce #review_form #respond p{margin:0 0 10px}.woocommerce #review_form #respond .form-submit input{left:auto}.woocommerce #review_form #respond textarea{box-sizing:border-box;width:100%}.woocommerce p.stars a{position:relative;height:1em;width:1em;text-indent:-999em;display:inline-block;text-decoration:none}.woocommerce p.stars a:before{display:block;position:absolute;top:0;left:0;width:1em;height:1em;line-height:1;font-family:WooCommerce;text-indent:0}.woocommerce table.shop_attributes td,.woocommerce table.shop_attributes th{line-height:1.5;border-bottom:1px dotted rgba(0,0,0,.1);border-top:0;margin:0}.woocommerce p.stars.selected a.active:before,.woocommerce p.stars:hover a:before{content:"\e020"}.woocommerce p.stars.selected a.active~a:before{content:"\e021"}.woocommerce p.stars.selected a:not(.active):before{content:"\e020"}.woocommerce table.shop_attributes{border:0;border-top:1px dotted rgba(0,0,0,.1);margin-bottom:1.618em;width:100%}.woocommerce table.shop_attributes th{width:150px;font-weight:700;padding:8px}.woocommerce table.shop_attributes td{font-style:italic;padding:0}.woocommerce table.shop_attributes td p{margin:0;padding:8px 0}.woocommerce table.shop_attributes .alt td,.woocommerce table.shop_attributes .alt th{background:rgba(0,0,0,.025)}.woocommerce table.shop_table{border:1px solid rgba(0,0,0,.1);margin:0 -1px 24px 0;text-align:left;width:100%;border-collapse:separate;border-radius:5px}.woocommerce table.shop_table th{font-weight:700;padding:9px 12px}.woocommerce table.shop_table td{border-top:1px solid rgba(0,0,0,.1);padding:6px 12px;vertical-align:middle}.woocommerce table.shop_table td small{font-weight:400}.woocommerce table.shop_table tbody:first-child tr:first-child td,.woocommerce table.shop_table tbody:first-child tr:first-child th{border-top:0}.woocommerce table.shop_table tbody th,.woocommerce table.shop_table tfoot td,.woocommerce table.shop_table tfoot th{font-weight:700;border-top:1px solid rgba(0,0,0,.1)}.woocommerce table.my_account_orders{font-size:.85em}.woocommerce table.my_account_orders td,.woocommerce table.my_account_orders th{padding:4px 8px;vertical-align:middle}.woocommerce table.my_account_orders .button{white-space:nowrap}.woocommerce table.my_account_orders .order-actions{text-align:right}.woocommerce table.my_account_orders .order-actions .button{margin:.125em 0 .125em .25em}.woocommerce td.product-name dl.variation{margin:.25em 0}.woocommerce td.product-name dl.variation:after,.woocommerce td.product-name dl.variation:before{content:" ";display:table}.woocommerce td.product-name dl.variation dd,.woocommerce td.product-name dl.variation dt{display:inline-block;float:left;margin-bottom:1em}.woocommerce td.product-name dl.variation dt{font-weight:700;padding:0 0 .25em;margin:0 4px 0 0;clear:left}.woocommerce ul.cart_list li dl:after,.woocommerce ul.cart_list li:after,.woocommerce ul.product_list_widget li dl:after,.woocommerce ul.product_list_widget li:after{clear:both}.woocommerce td.product-name dl.variation dd{padding:0 0 .25em}.woocommerce td.product-name dl.variation dd p:last-child{margin-bottom:0}.woocommerce td.product-name p.backorder_notification{font-size:.83em}.woocommerce td.product-quantity{min-width:80px}.woocommerce ul.cart_list,.woocommerce ul.product_list_widget{list-style:none;padding:0;margin:0}.woocommerce ul.cart_list li,.woocommerce ul.product_list_widget li{padding:4px 0;margin:0;list-style:none}.woocommerce ul.cart_list li:after,.woocommerce ul.cart_list li:before,.woocommerce ul.product_list_widget li:after,.woocommerce ul.product_list_widget li:before{content:" ";display:table}.woocommerce ul.cart_list li a,.woocommerce ul.product_list_widget li a{display:block;font-weight:700}.woocommerce ul.cart_list li img,.woocommerce ul.product_list_widget li img{float:right;margin-left:4px;width:32px;height:auto;box-shadow:none}.woocommerce ul.cart_list li dl,.woocommerce ul.product_list_widget li dl{margin:0;padding-left:1em;border-left:2px solid rgba(0,0,0,.1)}.woocommerce ul.cart_list li dl:after,.woocommerce ul.cart_list li dl:before,.woocommerce ul.product_list_widget li dl:after,.woocommerce ul.product_list_widget li dl:before{content:" ";display:table}.woocommerce ul.cart_list li dl dd,.woocommerce ul.cart_list li dl dt,.woocommerce ul.product_list_widget li dl dd,.woocommerce ul.product_list_widget li dl dt{display:inline-block;float:left;margin-bottom:1em}.woocommerce ul.cart_list li dl dt,.woocommerce ul.product_list_widget li dl dt{font-weight:700;padding:0 0 .25em;margin:0 4px 0 0;clear:left}#add_payment_method .wc-proceed-to-checkout:after,.woocommerce .order_details:after,.woocommerce .widget_layered_nav ul li:after,.woocommerce .widget_rating_filter ul li:after,.woocommerce .widget_shopping_cart .buttons:after,.woocommerce-account .addresses .title:after,.woocommerce-account .woocommerce:after,.woocommerce-cart .wc-proceed-to-checkout:after,.woocommerce-checkout .wc-proceed-to-checkout:after,.woocommerce-error:after,.woocommerce-info:after,.woocommerce-message:after,.woocommerce.widget_shopping_cart .buttons:after{clear:both}.woocommerce ul.cart_list li dl dd,.woocommerce ul.product_list_widget li dl dd{padding:0 0 .25em}.woocommerce ul.cart_list li dl dd p:last-child,.woocommerce ul.product_list_widget li dl dd p:last-child{margin-bottom:0}.woocommerce ul.cart_list li .star-rating,.woocommerce ul.product_list_widget li .star-rating{float:none}.woocommerce .widget_shopping_cart .total,.woocommerce.widget_shopping_cart .total{border-top:3px double #ebe9eb;padding:4px 0 0}.woocommerce .widget_shopping_cart .total strong,.woocommerce.widget_shopping_cart .total strong{min-width:40px;display:inline-block}.woocommerce .widget_shopping_cart .cart_list li,.woocommerce.widget_shopping_cart .cart_list li{padding-left:2em;position:relative;padding-top:0}.woocommerce .widget_shopping_cart .cart_list li a.remove,.woocommerce.widget_shopping_cart .cart_list li a.remove{position:absolute;top:0;left:0}.woocommerce .widget_shopping_cart .buttons:after,.woocommerce .widget_shopping_cart .buttons:before,.woocommerce.widget_shopping_cart .buttons:after,.woocommerce.widget_shopping_cart .buttons:before{content:" ";display:table}.woocommerce form .form-row{padding:3px;margin:0 0 6px}.woocommerce form .form-row [placeholder]:focus::-webkit-input-placeholder{-webkit-transition:opacity .5s .5s ease;-moz-transition:opacity .5s .5s ease;transition:opacity .5s .5s ease;opacity:0}.woocommerce form .form-row label{line-height:2}.woocommerce form .form-row label.hidden{visibility:hidden}.woocommerce form .form-row label.inline{display:inline}.woocommerce form .form-row select{cursor:pointer;margin:0}.woocommerce form .form-row .required{color:red;font-weight:700;border:0}.woocommerce form .form-row .input-checkbox{display:inline;margin:-2px 8px 0 0;text-align:center;vertical-align:middle}.woocommerce form .form-row input.input-text,.woocommerce form .form-row textarea{box-sizing:border-box;width:100%;margin:0;outline:0;line-height:1}.woocommerce form .form-row textarea{height:4em;line-height:1.5;display:block;-moz-box-shadow:none;-webkit-box-shadow:none;box-shadow:none}.woocommerce form .form-row .select2-container{width:100%;line-height:2em}.woocommerce form .form-row.woocommerce-invalid label{color:#a00}.woocommerce form .form-row.woocommerce-invalid .select2-container,.woocommerce form .form-row.woocommerce-invalid input.input-text,.woocommerce form .form-row.woocommerce-invalid select{border-color:#a00}.woocommerce form .form-row.woocommerce-validated .select2-container,.woocommerce form .form-row.woocommerce-validated input.input-text,.woocommerce form .form-row.woocommerce-validated select{border-color:#69bf29}.woocommerce form .form-row ::-webkit-input-placeholder{line-height:normal}.woocommerce form .form-row :-moz-placeholder{line-height:normal}.woocommerce form .form-row :-ms-input-placeholder{line-height:normal}.woocommerce form.checkout_coupon,.woocommerce form.login,.woocommerce form.register{border:1px solid #d3ced2;padding:20px;margin:2em 0;text-align:left;border-radius:5px}.woocommerce ul#shipping_method{list-style:none;margin:0;padding:0}.woocommerce ul#shipping_method li{margin:0;padding:.25em 0 .25em 22px;text-indent:-22px;list-style:none}.woocommerce ul#shipping_method li input{margin:3px .5ex}.woocommerce ul#shipping_method li label{display:inline}.woocommerce ul#shipping_method .amount{font-weight:700}.woocommerce p.woocommerce-shipping-contents{margin:0}.woocommerce .order_details{margin:0 0 1.5em;list-style:none}.woocommerce .order_details:after,.woocommerce .order_details:before{content:" ";display:table}.woocommerce .order_details li{float:left;margin-right:2em;text-transform:uppercase;font-size:.715em;line-height:1;border-right:1px dashed #d3ced2;padding-right:2em;margin-left:0;padding-left:0;list-style-type:none}.woocommerce .order_details li strong{display:block;font-size:1.4em;text-transform:none;line-height:1.5}.woocommerce .order_details li:last-of-type{border:none}.woocommerce .widget_layered_nav ul{margin:0;padding:0;border:0;list-style:none}.woocommerce .widget_layered_nav ul li{padding:0 0 1px;list-style:none}.woocommerce .widget_layered_nav ul li:after,.woocommerce .widget_layered_nav ul li:before{content:" ";display:table}.woocommerce .widget_layered_nav ul li.chosen a:before,.woocommerce .widget_layered_nav_filters ul li a:before{line-height:1;content:"?";font-family:WooCommerce;font-weight:400;color:#a00;speak:none;font-variant:normal;text-transform:none;-webkit-font-smoothing:antialiased;text-decoration:none}.woocommerce .widget_layered_nav ul li a,.woocommerce .widget_layered_nav ul li span{padding:1px 0}.woocommerce .widget_layered_nav ul li.chosen a:before{margin-right:.618em}.woocommerce .widget_layered_nav_filters ul{margin:0;padding:0;border:0;list-style:none;overflow:hidden;zoom:1}.woocommerce .widget_layered_nav_filters ul li{float:left;padding:0 1px 1px 0;list-style:none}.woocommerce .widget_layered_nav_filters ul li a{text-decoration:none}.woocommerce .widget_layered_nav_filters ul li a:before{margin-right:.618em}.woocommerce .widget_price_filter .price_slider{margin-bottom:1em}.woocommerce .widget_price_filter .price_slider_amount{text-align:right;line-height:2.4;font-size:.8751em}.woocommerce .widget_price_filter .price_slider_amount .button{font-size:1.15em;float:left}.woocommerce .widget_price_filter .ui-slider{position:relative;text-align:left;margin-left:.5em;margin-right:.5em}.woocommerce .widget_price_filter .ui-slider .ui-slider-handle{position:absolute;z-index:2;width:1em;height:1em;background-color:#a46497;border-radius:1em;cursor:ew-resize;outline:0;top:-.3em;margin-left:-.5em}.woocommerce .widget_price_filter .ui-slider .ui-slider-range{position:absolute;z-index:1;font-size:.7em;display:block;border:0;border-radius:1em;background-color:#a46497}.woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content{border-radius:1em;background-color:#602053;border:0}.woocommerce .widget_price_filter .ui-slider-horizontal{height:.5em}.woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range{top:0;height:100%}.woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range-min{left:-1px}.woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range-max{right:-1px}.woocommerce .widget_rating_filter ul{margin:0;padding:0;border:0;list-style:none}.woocommerce .widget_rating_filter ul li{padding:0 0 1px;list-style:none}.woocommerce .widget_rating_filter ul li:after,.woocommerce .widget_rating_filter ul li:before{content:" ";display:table}.woocommerce .widget_rating_filter ul li a{padding:1px 0;text-decoration:none}.woocommerce .widget_rating_filter ul li .star-rating{float:none;display:inline-block}.woocommerce .widget_rating_filter ul li.chosen a:before{font-family:WooCommerce;speak:none;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;margin-right:.618em;content:"?";text-decoration:none;color:#a00}.woocommerce-error,.woocommerce-info,.woocommerce-message{padding:1em 2em 1em 3.5em!important;margin:0 0 2em!important;position:relative;background-color:#f7f6f7;color:#515151;border-top:3px solid #a46497;list-style:none!important;width:auto;word-wrap:break-word}.woocommerce-error:after,.woocommerce-error:before,.woocommerce-info:after,.woocommerce-info:before,.woocommerce-message:after,.woocommerce-message:before{content:" ";display:table}.woocommerce-error:before,.woocommerce-info:before,.woocommerce-message:before{font-family:WooCommerce;content:"\e028";display:inline-block;position:absolute;top:1em;left:1.5em}.woocommerce-error .button,.woocommerce-info .button,.woocommerce-message .button{float:right}.woocommerce-error li,.woocommerce-info li,.woocommerce-message li{list-style:none!important;padding-left:0!important;margin-left:0!important}.woocommerce-message{border-top-color:#8fae1b}.woocommerce-message:before{content:"\e015";color:#8fae1b}.woocommerce-info{border-top-color:#1e85be}.woocommerce-info:before{color:#1e85be}.woocommerce-error{border-top-color:#b81c23}.woocommerce-error:before{content:"\e016";color:#b81c23}.woocommerce-account .addresses .title:after,.woocommerce-account .addresses .title:before,.woocommerce-account .woocommerce:after,.woocommerce-account .woocommerce:before{content:" ";display:table}.woocommerce-account .addresses .title h3{float:left}.woocommerce-account .addresses .title .edit,.woocommerce-account ul.digital-downloads li .count{float:right}.woocommerce-account ol.commentlist.notes li.note p.meta{font-weight:700;margin-bottom:0}.woocommerce-account ol.commentlist.notes li.note .description p:last-child{margin-bottom:0}.woocommerce-account ul.digital-downloads{margin-left:0;padding-left:0}.woocommerce-account ul.digital-downloads li{list-style:none;margin-left:0;padding-left:0}.woocommerce-account ul.digital-downloads li:before{font-family:WooCommerce;speak:none;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;margin-right:.618em;content:"?";text-decoration:none}#add_payment_method table.cart .product-thumbnail,.woocommerce-cart table.cart .product-thumbnail,.woocommerce-checkout table.cart .product-thumbnail{min-width:32px}#add_payment_method table.cart img,.woocommerce-cart table.cart img,.woocommerce-checkout table.cart img{width:32px;box-shadow:none}#add_payment_method table.cart td,#add_payment_method table.cart th,.woocommerce-cart table.cart td,.woocommerce-cart table.cart th,.woocommerce-checkout table.cart td,.woocommerce-checkout table.cart th{vertical-align:middle}#add_payment_method table.cart td.actions .coupon .input-text,.woocommerce-cart table.cart td.actions .coupon .input-text,.woocommerce-checkout table.cart td.actions .coupon .input-text{float:left;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;border:1px solid #d3ced2;padding:6px 6px 5px;margin:0 4px 0 0;outline:0;line-height:1}#add_payment_method table.cart input,.woocommerce-cart table.cart input,.woocommerce-checkout table.cart input{margin:0;vertical-align:middle;line-height:1}#add_payment_method .wc-proceed-to-checkout,.woocommerce-cart .wc-proceed-to-checkout,.woocommerce-checkout .wc-proceed-to-checkout{padding:1em 0}#add_payment_method .wc-proceed-to-checkout:after,#add_payment_method .wc-proceed-to-checkout:before,.woocommerce-cart .wc-proceed-to-checkout:after,.woocommerce-cart .wc-proceed-to-checkout:before,.woocommerce-checkout .wc-proceed-to-checkout:after,.woocommerce-checkout .wc-proceed-to-checkout:before{content:" ";display:table}#add_payment_method .wc-proceed-to-checkout a.checkout-button,.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button{display:block;text-align:center;margin-bottom:1em;font-size:1.25em;padding:1em}#add_payment_method .cart-collaterals .shipping_calculator .button,.woocommerce-cart .cart-collaterals .shipping_calculator .button,.woocommerce-checkout .cart-collaterals .shipping_calculator .button{width:100%;float:none;display:block}#add_payment_method .cart-collaterals .shipping_calculator .shipping-calculator-button:after,.woocommerce-cart .cart-collaterals .shipping_calculator .shipping-calculator-button:after,.woocommerce-checkout .cart-collaterals .shipping_calculator .shipping-calculator-button:after{font-family:WooCommerce;speak:none;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;margin-left:.618em;content:"?";text-decoration:none}#add_payment_method #payment ul.payment_methods li:after,#add_payment_method #payment ul.payment_methods li:before,#add_payment_method #payment ul.payment_methods:after,#add_payment_method #payment ul.payment_methods:before,.woocommerce-cart #payment ul.payment_methods li:after,.woocommerce-cart #payment ul.payment_methods li:before,.woocommerce-cart #payment ul.payment_methods:after,.woocommerce-cart #payment ul.payment_methods:before,.woocommerce-checkout #payment ul.payment_methods li:after,.woocommerce-checkout #payment ul.payment_methods li:before,.woocommerce-checkout #payment ul.payment_methods:after,.woocommerce-checkout #payment ul.payment_methods:before{content:" ";display:table}#add_payment_method .cart-collaterals .cart_totals p small,.woocommerce-cart .cart-collaterals .cart_totals p small,.woocommerce-checkout .cart-collaterals .cart_totals p small{color:#777;font-size:.83em}#add_payment_method .cart-collaterals .cart_totals table,.woocommerce-cart .cart-collaterals .cart_totals table,.woocommerce-checkout .cart-collaterals .cart_totals table{border-collapse:separate;margin:0 0 6px;padding:0}#add_payment_method .cart-collaterals .cart_totals table tr:first-child td,#add_payment_method .cart-collaterals .cart_totals table tr:first-child th,.woocommerce-cart .cart-collaterals .cart_totals table tr:first-child td,.woocommerce-cart .cart-collaterals .cart_totals table tr:first-child th,.woocommerce-checkout .cart-collaterals .cart_totals table tr:first-child td,.woocommerce-checkout .cart-collaterals .cart_totals table tr:first-child th{border-top:0}#add_payment_method .cart-collaterals .cart_totals table th,.woocommerce-cart .cart-collaterals .cart_totals table th,.woocommerce-checkout .cart-collaterals .cart_totals table th{width:40%}#add_payment_method .cart-collaterals .cart_totals table td,#add_payment_method .cart-collaterals .cart_totals table th,.woocommerce-cart .cart-collaterals .cart_totals table td,.woocommerce-cart .cart-collaterals .cart_totals table th,.woocommerce-checkout .cart-collaterals .cart_totals table td,.woocommerce-checkout .cart-collaterals .cart_totals table th{vertical-align:top;border-left:0;border-right:0;line-height:1.5em}#add_payment_method .cart-collaterals .cart_totals table small,.woocommerce-cart .cart-collaterals .cart_totals table small,.woocommerce-checkout .cart-collaterals .cart_totals table small{color:#777}#add_payment_method .cart-collaterals .cart_totals table select,.woocommerce-cart .cart-collaterals .cart_totals table select,.woocommerce-checkout .cart-collaterals .cart_totals table select{width:100%}#add_payment_method .cart-collaterals .cart_totals .discount td,.woocommerce-cart .cart-collaterals .cart_totals .discount td,.woocommerce-checkout .cart-collaterals .cart_totals .discount td{color:#77a464}#add_payment_method .cart-collaterals .cart_totals tr td,#add_payment_method .cart-collaterals .cart_totals tr th,.woocommerce-cart .cart-collaterals .cart_totals tr td,.woocommerce-cart .cart-collaterals .cart_totals tr th,.woocommerce-checkout .cart-collaterals .cart_totals tr td,.woocommerce-checkout .cart-collaterals .cart_totals tr th{border-top:1px solid #ebe9eb}#add_payment_method .cart-collaterals .cross-sells ul.products li.product,.woocommerce-cart .cart-collaterals .cross-sells ul.products li.product,.woocommerce-checkout .cart-collaterals .cross-sells ul.products li.product{margin-top:0}#add_payment_method .checkout .col-2 h3#ship-to-different-address,.woocommerce-cart .checkout .col-2 h3#ship-to-different-address,.woocommerce-checkout .checkout .col-2 h3#ship-to-different-address{float:left;clear:none}#add_payment_method .checkout .col-2 .form-row-first,#add_payment_method .checkout .col-2 .notes,.woocommerce-cart .checkout .col-2 .form-row-first,.woocommerce-cart .checkout .col-2 .notes,.woocommerce-checkout .checkout .col-2 .form-row-first,.woocommerce-checkout .checkout .col-2 .notes{clear:left}#add_payment_method .checkout .create-account small,.woocommerce-cart .checkout .create-account small,.woocommerce-checkout .checkout .create-account small{font-size:11px;color:#777;font-weight:400}#add_payment_method .checkout div.shipping-address,.woocommerce-cart .checkout div.shipping-address,.woocommerce-checkout .checkout div.shipping-address{padding:0;clear:left;width:100%}#add_payment_method #payment ul.payment_methods li:after,#add_payment_method #payment ul.payment_methods:after,#add_payment_method .checkout .shipping_address,.single-product .twentythirteen p.stars,.woocommerce-cart #payment ul.payment_methods li:after,.woocommerce-cart #payment ul.payment_methods:after,.woocommerce-cart .checkout .shipping_address,.woocommerce-checkout #payment ul.payment_methods li:after,.woocommerce-checkout #payment ul.payment_methods:after,.woocommerce-checkout .checkout .shipping_address{clear:both}#add_payment_method #payment,.woocommerce-cart #payment,.woocommerce-checkout #payment{background:#ebe9eb;border-radius:5px}#add_payment_method #payment ul.payment_methods,.woocommerce-cart #payment ul.payment_methods,.woocommerce-checkout #payment ul.payment_methods{text-align:left;padding:1em;border-bottom:1px solid #d3ced2;margin:0;list-style:none}#add_payment_method #payment ul.payment_methods li,.woocommerce-cart #payment ul.payment_methods li,.woocommerce-checkout #payment ul.payment_methods li{line-height:2;text-align:left;margin:0;font-weight:400}#add_payment_method #payment ul.payment_methods li input,.woocommerce-cart #payment ul.payment_methods li input,.woocommerce-checkout #payment ul.payment_methods li input{margin:0 1em 0 0}#add_payment_method #payment ul.payment_methods li img,.woocommerce-cart #payment ul.payment_methods li img,.woocommerce-checkout #payment ul.payment_methods li img{vertical-align:middle;margin:-2px 0 0 .5em;padding:0;position:relative;box-shadow:none}#add_payment_method #payment ul.payment_methods li img+img,.woocommerce-cart #payment ul.payment_methods li img+img,.woocommerce-checkout #payment ul.payment_methods li img+img{margin-left:2px}#add_payment_method #payment div.form-row,.woocommerce-cart #payment div.form-row,.woocommerce-checkout #payment div.form-row{padding:1em}#add_payment_method #payment div.payment_box,.woocommerce-cart #payment div.payment_box,.woocommerce-checkout #payment div.payment_box{position:relative;box-sizing:border-box;width:100%;padding:1em;margin:1em 0;font-size:.92em;border-radius:2px;line-height:1.5;background-color:#dfdcde;color:#515151}#add_payment_method #payment div.payment_box input.input-text,#add_payment_method #payment div.payment_box textarea,.woocommerce-cart #payment div.payment_box input.input-text,.woocommerce-cart #payment div.payment_box textarea,.woocommerce-checkout #payment div.payment_box input.input-text,.woocommerce-checkout #payment div.payment_box textarea{border-color:#bbb3b9 #c7c1c6 #c7c1c6}#add_payment_method #payment div.payment_box ::-webkit-input-placeholder,.woocommerce-cart #payment div.payment_box ::-webkit-input-placeholder,.woocommerce-checkout #payment div.payment_box ::-webkit-input-placeholder{color:#bbb3b9}#add_payment_method #payment div.payment_box :-moz-placeholder,.woocommerce-cart #payment div.payment_box :-moz-placeholder,.woocommerce-checkout #payment div.payment_box :-moz-placeholder{color:#bbb3b9}#add_payment_method #payment div.payment_box :-ms-input-placeholder,.woocommerce-cart #payment div.payment_box :-ms-input-placeholder,.woocommerce-checkout #payment div.payment_box :-ms-input-placeholder{color:#bbb3b9}#add_payment_method #payment div.payment_box .woocommerce-SavedPaymentMethods,.woocommerce-cart #payment div.payment_box .woocommerce-SavedPaymentMethods,.woocommerce-checkout #payment div.payment_box .woocommerce-SavedPaymentMethods{list-style:none;margin:0}#add_payment_method #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-new,#add_payment_method #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-token,.woocommerce-cart #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-new,.woocommerce-cart #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-token,.woocommerce-checkout #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-new,.woocommerce-checkout #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-token{margin:0 0 .5em}#add_payment_method #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-new label,#add_payment_method #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-token label,.woocommerce-cart #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-new label,.woocommerce-cart #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-token label,.woocommerce-checkout #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-new label,.woocommerce-checkout #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-token label{cursor:pointer}#add_payment_method #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-tokenInput,.woocommerce-cart #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-tokenInput,.woocommerce-checkout #payment div.payment_box .woocommerce-SavedPaymentMethods .woocommerce-SavedPaymentMethods-tokenInput{vertical-align:middle;margin:-3px 1em 0 0;position:relative}#add_payment_method #payment div.payment_box .wc-credit-card-form,.woocommerce-cart #payment div.payment_box .wc-credit-card-form,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form{border:0;padding:0;margin:1em 0 0}#add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-number,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number{font-size:1.5em;padding:8px;background-repeat:no-repeat;background-position:right .618em center;background-size:32px 20px}#add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc.visa,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry.visa,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-number.visa,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc.visa,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry.visa,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number.visa,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc.visa,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry.visa,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number.visa{background-image:url(../images/icons/credit-cards/visa.svg)}#add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc.mastercard,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry.mastercard,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-number.mastercard,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc.mastercard,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry.mastercard,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number.mastercard,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc.mastercard,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry.mastercard,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number.mastercard{background-image:url(../images/icons/credit-cards/mastercard.svg)}#add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc.laser,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry.laser,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-number.laser,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc.laser,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry.laser,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number.laser,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc.laser,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry.laser,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number.laser{background-image:url(../images/icons/credit-cards/laser.svg)}#add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc.dinersclub,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry.dinersclub,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-number.dinersclub,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc.dinersclub,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry.dinersclub,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number.dinersclub,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc.dinersclub,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry.dinersclub,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number.dinersclub{background-image:url(../images/icons/credit-cards/diners.svg)}#add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc.maestro,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry.maestro,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-number.maestro,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc.maestro,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry.maestro,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number.maestro,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc.maestro,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry.maestro,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number.maestro{background-image:url(../images/icons/credit-cards/maestro.svg)}#add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc.jcb,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry.jcb,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-number.jcb,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc.jcb,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry.jcb,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number.jcb,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc.jcb,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry.jcb,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number.jcb{background-image:url(../images/icons/credit-cards/jcb.svg)}#add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc.amex,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry.amex,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-number.amex,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc.amex,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry.amex,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number.amex,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc.amex,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry.amex,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number.amex{background-image:url(../images/icons/credit-cards/amex.svg)}#add_payment_method #payment div.payment_box .wc-credit-card-form-card-cvc.discover,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-expiry.discover,#add_payment_method #payment div.payment_box .wc-credit-card-form-card-number.discover,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-cvc.discover,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-expiry.discover,.woocommerce-cart #payment div.payment_box .wc-credit-card-form-card-number.discover,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-cvc.discover,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-expiry.discover,.woocommerce-checkout #payment div.payment_box .wc-credit-card-form-card-number.discover{background-image:url(../images/icons/credit-cards/discover.svg)}#add_payment_method #payment div.payment_box span.help,.woocommerce-cart #payment div.payment_box span.help,.woocommerce-checkout #payment div.payment_box span.help{font-size:.857em;color:#777;font-weight:400}#add_payment_method #payment div.payment_box .form-row,.woocommerce-cart #payment div.payment_box .form-row,.woocommerce-checkout #payment div.payment_box .form-row{margin:0 0 1em}#add_payment_method #payment div.payment_box p:last-child,.woocommerce-cart #payment div.payment_box p:last-child,.woocommerce-checkout #payment div.payment_box p:last-child{margin-bottom:0}#add_payment_method #payment div.payment_box:before,.woocommerce-cart #payment div.payment_box:before,.woocommerce-checkout #payment div.payment_box:before{content:"";display:block;border:1em solid #dfdcde;border-right-color:transparent;border-left-color:transparent;border-top-color:transparent;position:absolute;top:-.75em;left:0;margin:-1em 0 0 2em}#add_payment_method #payment .payment_method_paypal .about_paypal,.woocommerce-cart #payment .payment_method_paypal .about_paypal,.woocommerce-checkout #payment .payment_method_paypal .about_paypal{float:right;line-height:52px;font-size:.83em}#add_payment_method #payment .payment_method_paypal img,.woocommerce-cart #payment .payment_method_paypal img,.woocommerce-checkout #payment .payment_method_paypal img{max-height:52px;vertical-align:middle}.woocommerce-password-strength{text-align:center;font-weight:600;padding:3px .5em;font-size:1em}.woocommerce-password-strength.strong{background-color:#c1e1b9;border-color:#83c373}.woocommerce-password-strength.short{background-color:#f1adad;border-color:#e35b5b}.woocommerce-password-strength.bad{background-color:#fbc5a9;border-color:#f78b53}.woocommerce-password-strength.good{background-color:#ffe399;border-color:#ffc733}.woocommerce-password-hint{margin:.5em 0 0;display:block}.product.has-default-attributes.has-children>.images{opacity:0}#content.twentyeleven .woocommerce-pagination a{font-size:1em;line-height:1}.single-product .twentythirteen #reply-title,.single-product .twentythirteen #respond #commentform,.single-product .twentythirteen .entry-summary{padding:0}.twentythirteen .woocommerce-breadcrumb{padding-top:40px}.twentyfourteen ul.products li.product{margin-top:0!important}body:not(.search-results) .twentysixteen .entry-summary{color:inherit;font-size:inherit;line-height:inherit}.twentysixteen .price ins{background:inherit;color:inherit}
		.woocommerce #content div.product .woocommerce-tabs ul.tabs:after,.woocommerce #content div.product .woocommerce-tabs ul.tabs:before,.woocommerce #content div.product div.thumbnails:after,.woocommerce #content div.product div.thumbnails:before,.woocommerce .col2-set:after,.woocommerce .col2-set:before,.woocommerce div.product .woocommerce-tabs ul.tabs:after,.woocommerce div.product .woocommerce-tabs ul.tabs:before,.woocommerce div.product div.thumbnails:after,.woocommerce div.product div.thumbnails:before,.woocommerce-page #content div.product .woocommerce-tabs ul.tabs:after,.woocommerce-page #content div.product .woocommerce-tabs ul.tabs:before,.woocommerce-page #content div.product div.thumbnails:after,.woocommerce-page #content div.product div.thumbnails:before,.woocommerce-page .col2-set:after,.woocommerce-page .col2-set:before,.woocommerce-page div.product .woocommerce-tabs ul.tabs:after,.woocommerce-page div.product .woocommerce-tabs ul.tabs:before,.woocommerce-page div.product div.thumbnails:after,.woocommerce-page div.product div.thumbnails:before{content:" ";display:table}.woocommerce #content div.product .woocommerce-tabs,.woocommerce #content div.product .woocommerce-tabs ul.tabs:after,.woocommerce #content div.product div.thumbnails a.first,.woocommerce #content div.product div.thumbnails:after,.woocommerce .cart-collaterals:after,.woocommerce .col2-set:after,.woocommerce .woocommerce-pagination ul.page-numbers:after,.woocommerce div.product .woocommerce-tabs,.woocommerce div.product .woocommerce-tabs ul.tabs:after,.woocommerce div.product div.thumbnails a.first,.woocommerce div.product div.thumbnails:after,.woocommerce ul.products,.woocommerce ul.products li.first,.woocommerce ul.products:after,.woocommerce-page #content div.product .woocommerce-tabs,.woocommerce-page #content div.product .woocommerce-tabs ul.tabs:after,.woocommerce-page #content div.product div.thumbnails a.first,.woocommerce-page #content div.product div.thumbnails:after,.woocommerce-page .cart-collaterals:after,.woocommerce-page .col2-set:after,.woocommerce-page .woocommerce-pagination ul.page-numbers:after,.woocommerce-page div.product .woocommerce-tabs,.woocommerce-page div.product .woocommerce-tabs ul.tabs:after,.woocommerce-page div.product div.thumbnails a.first,.woocommerce-page div.product div.thumbnails:after,.woocommerce-page ul.products,.woocommerce-page ul.products li.first,.woocommerce-page ul.products:after{clear:both}.woocommerce .col2-set,.woocommerce-page .col2-set{width:100%}.woocommerce .col2-set .col-1,.woocommerce-page .col2-set .col-1{float:left;width:48%}.woocommerce .col2-set .col-2,.woocommerce-page .col2-set .col-2{float:right;width:48%}.woocommerce img,.woocommerce-page img{height:auto;max-width:100%}.woocommerce #content div.product div.images,.woocommerce div.product div.images,.woocommerce-page #content div.product div.images,.woocommerce-page div.product div.images{float:left;width:48%}.woocommerce #content div.product div.thumbnails a,.woocommerce div.product div.thumbnails a,.woocommerce-page #content div.product div.thumbnails a,.woocommerce-page div.product div.thumbnails a{float:left;width:30.75%;margin-right:3.8%;margin-bottom:1em}.woocommerce #content div.product div.thumbnails a.last,.woocommerce div.product div.thumbnails a.last,.woocommerce-page #content div.product div.thumbnails a.last,.woocommerce-page div.product div.thumbnails a.last{margin-right:0}.woocommerce #content div.product div.thumbnails.columns-1 a,.woocommerce div.product div.thumbnails.columns-1 a,.woocommerce-page #content div.product div.thumbnails.columns-1 a,.woocommerce-page div.product div.thumbnails.columns-1 a{width:100%;margin-right:0;float:none}.woocommerce #content div.product div.thumbnails.columns-2 a,.woocommerce div.product div.thumbnails.columns-2 a,.woocommerce-page #content div.product div.thumbnails.columns-2 a,.woocommerce-page div.product div.thumbnails.columns-2 a{width:48%}.woocommerce #content div.product div.thumbnails.columns-4 a,.woocommerce div.product div.thumbnails.columns-4 a,.woocommerce-page #content div.product div.thumbnails.columns-4 a,.woocommerce-page div.product div.thumbnails.columns-4 a{width:22.05%}.woocommerce #content div.product div.thumbnails.columns-5 a,.woocommerce div.product div.thumbnails.columns-5 a,.woocommerce-page #content div.product div.thumbnails.columns-5 a,.woocommerce-page div.product div.thumbnails.columns-5 a{width:16.9%}.woocommerce #content div.product div.summary,.woocommerce div.product div.summary,.woocommerce-page #content div.product div.summary,.woocommerce-page div.product div.summary{float:right;width:48%}.woocommerce #content div.product .woocommerce-tabs ul.tabs li,.woocommerce div.product .woocommerce-tabs ul.tabs li,.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li,.woocommerce-page div.product .woocommerce-tabs ul.tabs li{display:inline-block}.woocommerce #content div.product #reviews .comment:after,.woocommerce #content div.product #reviews .comment:before,.woocommerce .woocommerce-pagination ul.page-numbers:after,.woocommerce .woocommerce-pagination ul.page-numbers:before,.woocommerce div.product #reviews .comment:after,.woocommerce div.product #reviews .comment:before,.woocommerce ul.products:after,.woocommerce ul.products:before,.woocommerce-page #content div.product #reviews .comment:after,.woocommerce-page #content div.product #reviews .comment:before,.woocommerce-page .woocommerce-pagination ul.page-numbers:after,.woocommerce-page .woocommerce-pagination ul.page-numbers:before,.woocommerce-page div.product #reviews .comment:after,.woocommerce-page div.product #reviews .comment:before,.woocommerce-page ul.products:after,.woocommerce-page ul.products:before{content:" ";display:table}.woocommerce #content div.product #reviews .comment:after,.woocommerce div.product #reviews .comment:after,.woocommerce-page #content div.product #reviews .comment:after,.woocommerce-page div.product #reviews .comment:after{clear:both}.woocommerce #content div.product #reviews .comment img,.woocommerce div.product #reviews .comment img,.woocommerce-page #content div.product #reviews .comment img,.woocommerce-page div.product #reviews .comment img{float:right;height:auto}.woocommerce ul.products li.product,.woocommerce-page ul.products li.product{float:left;margin:0 3.8% 2.992em 0;padding:0;position:relative;width:22.05%}.woocommerce ul.products li.last,.woocommerce-page ul.products li.last{margin-right:0}.woocommerce-page.columns-1 ul.products li.product,.woocommerce.columns-1 ul.products li.product{width:100%;margin-right:0}.woocommerce-page.columns-2 ul.products li.product,.woocommerce.columns-2 ul.products li.product{width:48%}.woocommerce-page.columns-3 ul.products li.product,.woocommerce.columns-3 ul.products li.product{width:30.75%}.woocommerce-page.columns-5 ul.products li.product,.woocommerce.columns-5 ul.products li.product{width:16.95%}.woocommerce-page.columns-6 ul.products li.product,.woocommerce.columns-6 ul.products li.product{width:13.5%}.woocommerce .woocommerce-result-count,.woocommerce-page .woocommerce-result-count{float:left}.woocommerce .woocommerce-ordering,.woocommerce-page .woocommerce-ordering{float:right}.woocommerce .woocommerce-pagination ul.page-numbers li,.woocommerce-page .woocommerce-pagination ul.page-numbers li{display:inline-block}.woocommerce #content table.cart img,.woocommerce table.cart img,.woocommerce-page #content table.cart img,.woocommerce-page table.cart img{height:auto}.woocommerce #content table.cart td.actions,.woocommerce table.cart td.actions,.woocommerce-page #content table.cart td.actions,.woocommerce-page table.cart td.actions{text-align:right}.woocommerce #content table.cart td.actions .input-text,.woocommerce table.cart td.actions .input-text,.woocommerce-page #content table.cart td.actions .input-text,.woocommerce-page table.cart td.actions .input-text{width:80px}.woocommerce #content table.cart td.actions .coupon,.woocommerce table.cart td.actions .coupon,.woocommerce-page #content table.cart td.actions .coupon,.woocommerce-page table.cart td.actions .coupon{float:left}.woocommerce #content table.cart td.actions .coupon label,.woocommerce table.cart td.actions .coupon label,.woocommerce-page #content table.cart td.actions .coupon label,.woocommerce-page table.cart td.actions .coupon label{display:none}.woocommerce .cart-collaterals .shipping_calculator:after,.woocommerce .cart-collaterals .shipping_calculator:before,.woocommerce .cart-collaterals:after,.woocommerce .cart-collaterals:before,.woocommerce form .form-row:after,.woocommerce form .form-row:before,.woocommerce ul.cart_list li:after,.woocommerce ul.cart_list li:before,.woocommerce ul.product_list_widget li:after,.woocommerce ul.product_list_widget li:before,.woocommerce-page .cart-collaterals .shipping_calculator:after,.woocommerce-page .cart-collaterals .shipping_calculator:before,.woocommerce-page .cart-collaterals:after,.woocommerce-page .cart-collaterals:before,.woocommerce-page form .form-row:after,.woocommerce-page form .form-row:before,.woocommerce-page ul.cart_list li:after,.woocommerce-page ul.cart_list li:before,.woocommerce-page ul.product_list_widget li:after,.woocommerce-page ul.product_list_widget li:before{content:" ";display:table}.woocommerce .cart-collaterals,.woocommerce-page .cart-collaterals{width:100%}.woocommerce .cart-collaterals .related,.woocommerce-page .cart-collaterals .related{width:30.75%;float:left}.woocommerce .cart-collaterals .cross-sells,.woocommerce-page .cart-collaterals .cross-sells{width:48%;float:left}.woocommerce .cart-collaterals .cross-sells ul.products,.woocommerce-page .cart-collaterals .cross-sells ul.products{float:none}.woocommerce .cart-collaterals .cross-sells ul.products li,.woocommerce-page .cart-collaterals .cross-sells ul.products li{width:48%}.woocommerce .cart-collaterals .shipping_calculator,.woocommerce-page .cart-collaterals .shipping_calculator{width:48%;clear:right;float:right}.woocommerce .cart-collaterals .shipping_calculator:after,.woocommerce form .form-row-wide,.woocommerce form .form-row:after,.woocommerce ul.cart_list li:after,.woocommerce ul.product_list_widget li:after,.woocommerce-page .cart-collaterals .shipping_calculator:after,.woocommerce-page form .form-row-wide,.woocommerce-page form .form-row:after,.woocommerce-page ul.cart_list li:after,.woocommerce-page ul.product_list_widget li:after{clear:both}.woocommerce .cart-collaterals .shipping_calculator .col2-set .col-1,.woocommerce .cart-collaterals .shipping_calculator .col2-set .col-2,.woocommerce-page .cart-collaterals .shipping_calculator .col2-set .col-1,.woocommerce-page .cart-collaterals .shipping_calculator .col2-set .col-2{width:47%}.woocommerce .cart-collaterals .cart_totals,.woocommerce-page .cart-collaterals .cart_totals{float:right;width:48%}.woocommerce ul.cart_list li img,.woocommerce ul.product_list_widget li img,.woocommerce-page ul.cart_list li img,.woocommerce-page ul.product_list_widget li img{float:right;height:auto}.woocommerce form .form-row label,.woocommerce-page form .form-row label{display:block}.woocommerce form .form-row label.checkbox,.woocommerce-page form .form-row label.checkbox{display:inline}.woocommerce form .form-row select,.woocommerce-page form .form-row select{width:100%}.woocommerce form .form-row .input-text,.woocommerce-page form .form-row .input-text{box-sizing:border-box;width:100%}.woocommerce form .form-row-first,.woocommerce form .form-row-last,.woocommerce-page form .form-row-first,.woocommerce-page form .form-row-last{float:left;width:47%;overflow:visible}.woocommerce form .form-row-last,.woocommerce-page form .form-row-last{float:right}.woocommerce #payment .form-row select,.woocommerce-page #payment .form-row select{width:auto}.woocommerce #payment .terms,.woocommerce #payment .wc-terms-and-conditions,.woocommerce-page #payment .terms,.woocommerce-page #payment .wc-terms-and-conditions{text-align:left;padding:0 1em 0 0;float:left}.woocommerce #payment #place_order,.woocommerce-page #payment #place_order{float:right}.woocommerce-account .woocommerce-MyAccount-navigation{float:left;width:30%}.woocommerce-account .woocommerce-MyAccount-content{float:right;width:68%}.woocommerce-page.left-sidebar #content.twentyeleven{width:58.4%;margin:0 7.6%;float:right}.woocommerce-page.right-sidebar #content.twentyeleven{margin:0 7.6%;width:58.4%;float:left}.twentyfourteen .tfwc{padding:12px 10px 0;max-width:474px;margin:0 auto}.twentyfourteen .tfwc .product .entry-summary{padding:0!important;margin:0 0 1.618em!important}.twentyfourteen .tfwc div.product.hentry.has-post-thumbnail{margin-top:0}.twentyfourteen .tfwc .product .images img{margin-bottom:1em}@media screen and (min-width:673px){.twentyfourteen .tfwc{padding-right:30px;padding-left:30px}}@media screen and (min-width:1040px){.twentyfourteen .tfwc{padding-right:15px;padding-left:15px}}@media screen and (min-width:1110px){.twentyfourteen .tfwc{padding-right:30px;padding-left:30px}}@media screen and (min-width:1218px){.twentyfourteen .tfwc{margin-right:54px}.full-width .twentyfourteen .tfwc{margin-right:auto}}.twentyfifteen .t15wc{padding-left:7.6923%;padding-right:7.6923%;padding-top:7.6923%;margin-bottom:7.6923%;background:#fff;box-shadow:0 0 1px rgba(0,0,0,.15)}.twentyfifteen .t15wc .page-title{margin-left:0}@media screen and (min-width:38.75em){.twentyfifteen .t15wc{margin-right:7.6923%;margin-left:7.6923%;margin-top:8.3333%}}@media screen and (min-width:59.6875em){.twentyfifteen .t15wc{margin-left:8.3333%;margin-right:8.3333%;padding:10%}.single-product .twentyfifteen .entry-summary{padding:0!important}}.twentysixteen .site-main{margin-right:7.6923%;margin-left:7.6923%}.twentysixteen .entry-summary{margin-right:0;margin-left:0}#content .twentysixteen div.product div.images,#content .twentysixteen div.product div.summary{width:46.42857%}@media screen and (min-width:44.375em){.twentysixteen .site-main{margin-right:23.0769%}}@media screen and (min-width:56.875em){.twentysixteen .site-main{margin-right:0;margin-left:0}.no-sidebar .twentysixteen .site-main{margin-right:15%;margin-left:15%}.no-sidebar .twentysixteen .entry-summary{margin-right:0;margin-left:0}}.rtl .woocommerce .col2-set .col-1,.rtl .woocommerce-page .col2-set .col-1{float:right}.rtl .woocommerce .col2-set .col-2,.rtl .woocommerce-page .col2-set .col-2{float:left}.rtl .woocommerce form .form-row-first,.rtl .woocommerce form .form-row-last,.rtl .woocommerce-page form .form-row-first,.rtl .woocommerce-page form .form-row-last{float:right}.rtl .woocommerce form .form-row-last,.rtl .woocommerce-page form .form-row-last{float:left}
		/*
Title:   Woocommerce overide stylee
*/

/* Products in listings */
.woocommerce ul.products { margin: 0 -15px; }
.woocommerce ul.products li.product { margin: 0 0 30px; padding: 0 15px; width: 25%;}

/* When with sidebar */
.woocommerce .left_sidebar ul.products li.product,
.woocommerce.left_sidebar ul.products li.product,
.woocommerce .right_sidebar ul.products li.product { width: 33.3333%; }

/* MQ */
@media (max-width: 991px) {
    .woocommerce ul.products li.product,
    .woocommerce-page ul.products li.product { width: 50%;}
    .woocommerce .left_sidebar ul.products li.product,
    .woocommerce-page .left_sidebar ul.products li.product,
    .woocommerce .right_sidebar ul.products li.product,
    .woocommerce-page .right_sidebar ul.products li.product { width: 50%;}
}
@media (max-width: 480px) {
    .woocommerce ul.products li.product,
    .woocommerce-page ul.products li.product { width: 100%;}
    .woocommerce .left_sidebar ul.products li.product,
    .woocommerce-page .left_sidebar ul.products li.product,
    .woocommerce .right_sidebar ul.products li.product,
    .woocommerce-page .right_sidebar ul.products li.product { width: 100%;}
}

.woocommerce #content div.product div.images,
.woocommerce div.product div.images { width: 100%; }

/* Override for [product id="##" class="kl-wc-single"] shortcode */
.woocommerce.kl-wc-single ul.products li.product {width:100%;}

/* WC buttons ==================== */

/* Classic */
.zn-wc-pages-classic a.button,
.zn-wc-pages-classic button.button,
.zn-wc-pages-classic button.button.alt,
.zn-wc-pages-classic input.button,
.zn-wc-pages-classic input#button,
.zn-wc-pages-classic #review_form #submit,
.add_to_cart_inline .kw-actions a {
	background:#CD2122; font-size:13px !important; padding:10px 20px; font-weight:600; color:#fff; text-transform: uppercase; text-shadow: none; border-radius: 3px; box-shadow: none; position: relative; border: 0;
}
.zn-wc-pages-classic a.button:hover,
.zn-wc-pages-classic button.button:hover,
.zn-wc-pages-classic button.button.alt:hover,
.zn-wc-pages-classic input.button:hover,
.zn-wc-pages-classic input#button:hover,
.zn-wc-pages-classic #review_form #submit:hover,
.add_to_cart_inline .kw-actions a:hover {background:#343434; color:#fff; }

/* Alternative Button */
.zn-wc-pages-classic #respond input#submit.alt,
.zn-wc-pages-classic a.button.alt,
.zn-wc-pages-classic button.button.alt,
.zn-wc-pages-classic input.button.alt,
.add_to_cart_inline .kw-actions .actions-moreinfo {background:#000; font-weight: 600; color: #fff !important;}
.zn-wc-pages-classic #respond input#submit.alt:hover,
.zn-wc-pages-classic a.button.alt:hover,
.zn-wc-pages-classic button.button.alt:hover,
.zn-wc-pages-classic input.button.alt:hover,
.add_to_cart_inline .kw-actions .actions-moreinfo:hover { background:#232323;}


/* Buttons for Style #2  */
.zn-wc-pages-style2 a.button,
.zn-wc-pages-style2 button.button,
.zn-wc-pages-style2 input.button,
.zn-wc-pages-style2 input#button,
.zn-wc-pages-style2 #review_form #submit {font-weight: 700; font-size: 14px; padding:17px 35px; color:#fff; text-transform: uppercase; text-shadow: none; border-radius: 3px; box-shadow: none; position: relative;}

/* Simple */
.zn-wc-pages-style2 #respond input#submit,
.zn-wc-pages-style2 a.button,
.zn-wc-pages-style2 button.button,
.zn-wc-pages-style2 input.button {border: 2px solid #000; background-color: transparent; color: #000;}
.zn-wc-pages-style2 #respond input#submit:hover,
.zn-wc-pages-style2 a.button:hover,
.zn-wc-pages-style2 button.button:hover,
.zn-wc-pages-style2 input.button:hover { background:transparent; opacity: .8; }

/* Simple inverted */
.kl-skin--dark.zn-wc-pages-style2 #respond input#submit,
.kl-skin--dark.zn-wc-pages-style2 a.button,
.kl-skin--dark.zn-wc-pages-style2 button.button,
.kl-skin--dark.zn-wc-pages-style2 input.button {border-color: rgba(255,255,255,0.8); color: rgba(255,255,255,0.8);}

/* Alternative */
.zn-wc-pages-style2 #respond input#submit.alt,
.zn-wc-pages-style2 a.button.alt,
.zn-wc-pages-style2 button.button.alt,
.zn-wc-pages-style2 input.button.alt {background:#CD2122; border:0; padding:19px 35px;}
.zn-wc-pages-style2 #respond input#submit.alt:hover,
.zn-wc-pages-style2 a.button.alt:hover,
.zn-wc-pages-style2 button.button.alt:hover,
.zn-wc-pages-style2 input.button.alt:hover { background:#232323; }

/* View Button */
.zn-wc-pages-style2 a.button.view {padding: 6px 15px;}

/* Disabled state */
.woocommerce #respond input#submit.alt.disabled,
.woocommerce #respond input#submit.alt.disabled:hover,
.woocommerce #respond input#submit.alt:disabled,
.woocommerce #respond input#submit.alt:disabled:hover,
.woocommerce #respond input#submit.alt:disabled[disabled],
.woocommerce #respond input#submit.alt:disabled[disabled]:hover,
.woocommerce a.button.alt.disabled,
.woocommerce a.button.alt.disabled:hover,
.woocommerce a.button.alt:disabled,
.woocommerce a.button.alt:disabled:hover,
.woocommerce a.button.alt:disabled[disabled],
.woocommerce a.button.alt:disabled[disabled]:hover,
.woocommerce button.button.alt.disabled,
.woocommerce button.button.alt.disabled:hover,
.woocommerce button.button.alt:disabled,
.woocommerce button.button.alt:disabled:hover,
.woocommerce button.button.alt:disabled[disabled],
.woocommerce button.button.alt:disabled[disabled]:hover,
.woocommerce input.button.alt.disabled,
.woocommerce input.button.alt.disabled:hover,
.woocommerce input.button.alt:disabled,
.woocommerce input.button.alt:disabled:hover,
.woocommerce input.button.alt:disabled[disabled],
.woocommerce input.button.alt:disabled[disabled]:hover {background-color: #B5B5B5;}

/* Increase sidebar margins */
.woocommerce.widget {margin-bottom: 50px;}

/* PRODUCT CATEGORIES WIDGET */
.woocommerce.widget_product_categories {}
.woocommerce.widget_product_categories .product-categories {list-style: none; margin: 0; padding: 0; }
.woocommerce.widget_product_categories .cat-item { margin:10px 0 }
.woocommerce.widget_product_categories .cat-item a {font-weight:400; font-size:14px; color:#484848; padding:10px 0; -webkit-transition: all .15s ease-out;
    transition: all .15s ease-out;}
.woocommerce.widget_product_categories .cat-item a:hover { color:#111}
.woocommerce.widget_product_categories .cat-item a:before{content: ''; display: inline-block; margin-right: 12px; width: 8px; height: 2px; background: #E1E1E1; vertical-align: middle; -webkit-transition: all .15s ease-out; transition: all .15s ease-out; }
.woocommerce.widget_product_categories .cat-item.current-cat > a {font-weight:600; color:#181818; }
.woocommerce.widget_product_categories .cat-item.current-cat > a:before{background: #bbb;}
.woocommerce.widget_product_categories .cat-item .count { opacity:.5; }
.woocommerce.widget_product_categories .children {list-style:none; margin:0; padding:0 0 0 20px}
.woocommerce.widget_product_categories .children .cat-item {}
/* Dark Version */
.kl-skin--dark .widget_product_categories .cat-item a { color:#B7B7B7;}
.kl-skin--dark .widget_product_categories .cat-item a:hover { color:#EEEEEE}
.kl-skin--dark .widget_product_categories .cat-item a:before{background: #1E1E1E; }
.kl-skin--dark .widget_product_categories .cat-item.current-cat > a {color:#E7E7E7; }
.kl-skin--dark .widget_product_categories .cat-item.current-cat > a:before{background: #444444;}


/* Price Slider Widget */
.woocommerce.widget_price_filter .price_slider {}
.woocommerce.widget_price_filter .price_slider_amount {}
.woocommerce.widget_price_filter .price_slider_amount .button {padding: 10px;}
.woocommerce.widget_price_filter .price_label {font-size:14px;}
.woocommerce.widget_price_filter .ui-slider {}
.woocommerce.widget_price_filter .ui-slider .ui-slider-handle { -webkit-transition:background-color .2s ease-out; transition:background-color .2s ease-out; background-color: #C8C8C8; width: 10px; height: 10px; top: -4px; }
.woocommerce.widget_price_filter:hover .ui-slider .ui-slider-handle {background-color: #898989;}
.woocommerce.widget_price_filter .ui-slider .ui-slider-range {background-color: #C8C8C8; }
.woocommerce.widget_price_filter .price_slider_wrapper .ui-widget-content {background-color: #9D9D9D; margin-bottom: 30px; margin-top: 30px; }
.woocommerce.widget_price_filter .ui-slider-horizontal {height: 3px; }
.woocommerce.widget_price_filter .ui-slider-horizontal .ui-slider-range {}
.woocommerce.widget_price_filter .ui-slider-horizontal .ui-slider-range-min {}
.woocommerce.widget_price_filter .ui-slider-horizontal .ui-slider-range-max {}
/* Dark Version */
.kl-skin--dark .widget_price_filter .ui-slider .ui-slider-handle { background-color: #373737; }
.kl-skin--dark .widget_price_filter:hover .ui-slider .ui-slider-handle {background-color: #767676;}
.kl-skin--dark .widget_price_filter .ui-slider .ui-slider-range {background-color: #373737; }
.kl-skin--dark .widget_price_filter .price_slider_wrapper .ui-widget-content {background-color: #626262; }


/* Top rated produts */
.woocommerce.widget_top_rated_products {}
.woocommerce.widget ul.product_list_widget {}
.woocommerce.widget ul.product_list_widget li {margin-bottom: 20px; padding: 0; }
.woocommerce.widget ul.product_list_widget li:after,
.woocommerce.widget ul.product_list_widget li:before {}
.woocommerce.widget ul.product_list_widget li a {font-size: 13px; margin-bottom: 10px; line-height: 1.6; font-weight: 400;}
.woocommerce.widget ul.product_list_widget li a span {/*font-weight: 400;*/}
.woocommerce.widget ul.product_list_widget li img {width: 58px; }
.woocommerce.widget ul.product_list_widget li > .amount {font-weight: 300; }
/*.woocommerce.widget ul.product_list_widget li > .amount:before {content:'-- '; opacity:.2;}*/
.woocommerce.widget ul.product_list_widget li .star-rating {font-size: 10px; margin-bottom:10px }

.woocommerce.widget:last-child {margin-bottom:0}

/* Subcategories page */
.woocommerce ul.products li.product-category h3 {margin: 0 20px; font-size: 18px;font-weight: 300;line-height: 1.4;padding-bottom: 20px;}
.woocommerce.columns-4 ul.products li.product-category h3 {font-size: 14px; font-weight: 300; margin: 0 0 0 5px;padding-bottom: 20px;}
.woocommerce ul.products li.product-category h3 mark {background:none; font-weight:400;}

/* Cart List */
.woocommerce ul.cart_list li a {font-size: 14px; }
/* Cart widget */
.woocommerce.widget .widget_shopping_cart_content .mini_cart_item {margin-left: 25px; }
.woocommerce.widget .widget_shopping_cart_content .remove {margin-left: -25px; margin-top:10px; }
/* Fix for small sidebar and wider text, so that the buttons go after each other */
.woocommerce.widget .widget_shopping_cart_content .buttons .button {margin-top: 10px; padding-top: 10px; padding-bottom: 10px;}


/* Shopping cart widget */
.woocommerce .widget_shopping_cart .total,
.woocommerce.widget_shopping_cart .total { font-size:16px; border-top-style: solid; padding-top: 15px;}

/* SVG Cart */
.kl-cart-button .svg-cart.kl-cart-icon { position:relative;top: 2px;margin-right: 7px;display: block;}
.kl-cart-button .svg-cart.kl-cart-icon .svg-cart-icon {fill:#fff;}
.kl-cart-button .svg-cart.kl-cart-icon:after { content: attr(data-count); font-size: 9px;background-color: #ff6666; color: #fff;width: 20px;height: 20px; display: block; text-align: center;line-height: 20px; border-radius: 50%; position: absolute;top: 4px;left: -9px; font-weight: 600; padding-right: 1px;}
/* Cart Container */
.cart-container > .widget_shopping_cart_content {display:block;font-size:11px;}
.cart-container { margin: 0; background: #f5f5f5; padding: 15px; }
.cart-container .cart_list { margin: 0 0 15px; list-style: none; border-bottom: 1px solid #ddd; padding: 0; max-height: 410px; overflow-y: auto; }
.cart-container .cart_list:only-child {margin-bottom:0; border:0;  }
.cart-container .cart_list a:hover { background-color: transparent; }
.cart-container .mini_cart_item { overflow: hidden; margin: 0 0 15px; color: #535353;}
.cart-container .mini_cart_item:first-child { margin-top:10px }
.cart-container .mini_cart_item.empty {margin-bottom: 0; margin-top:0; text-align: center;}
.cart-container .mini_cart_item a:not(.remove) { font-size: 11px; font-weight: normal; padding: 0 30px 0 0; }
.cart-container .cart_list .remove { float: right; font-size: 16px; color: #C3C3C3; padding: 0; }
.cart-container .cart_list .remove:hover { color: #7F7F7F; }
.cart-container .mini_cart_item img { float: left; margin-right: 15px; margin-left: 0; width: 60px }
.cart-container .mini_cart_item .variation,
.cart-container .mini_cart_item .variation p { margin: 0;}
.cart-container .mini_cart_item .variation { overflow: hidden; border: 0; padding: 0;}
.cart-container .mini_cart_item .variation-Color { display: inline-block; padding: 0; margin: 0; clear: none; }
.cart-container .mini_cart_item .variationr:before,
.cart-container .mini_cart_item .variation:after {content: none}
.cart-container .cart_list .quantity {display: block;}
.cart-container .total .amount { float: right; font-weight: bold; font-size: 15px; }
.cart-container .total { border-bottom: 1px solid #ddd; padding: 0 0 15px; margin:15px 0; }
.cart-container .buttons { overflow: hidden; margin: 0; }
.cart-container .buttons:before,
.cart-container .buttons:after { content: " "; display: table;}
.cart-container .buttons:after {clear: both;}
.cart-container .buttons .button { width: calc(50% - 6px); float:left; padding: 6px 0; margin-bottom: 0; font-size: 14px; font-weight: 600; line-height: 1.6; text-shadow: none; text-align: center; white-space: normal; vertical-align: middle; -ms-touch-action: manipulation; touch-action: manipulation; cursor: pointer; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; background-image: none; border: 1px solid transparent; text-transform: uppercase; box-shadow: none; border-radius: 3px;}
.cart-container .buttons .button { background-color: #cd2122; color: #fff; padding: 10px 0; -webkit-transition: background-color .2s ease-in-out; transition: background-color .2s ease-in-out; }
.cart-container .buttons .button.checkout { color: #242424 !important; border-color: #242424;  border-width: 2px; background: none; padding: 9px 0; border-style: solid; -webkit-transition: all .1s ease-in-out; transition: all .1s ease-in-out; margin-left: 12px;  background-color: transparent !important;}
.cart-container .buttons .button.checkout:hover,
.cart-container .buttons .button.checkout:focus { color: #000; border-color: #000;}
/* Dark cart container */
.nav-th--dark .cart-container { background: #0A0A0A ; }
.nav-th--dark .cart-container .cart_list { border-bottom-color: #222; }
.nav-th--dark .cart-container .cart_list a:hover { background-color: transparent ; }
.nav-th--dark .cart-container .mini_cart_item {color: #ACACAC;}
.nav-th--dark .cart-container .cart_list .remove { color: #3C3C3C ; }
.nav-th--dark .cart-container .cart_list .remove:hover { color: #808080; }
.nav-th--dark .cart-container .total { border-bottom-color: #222; }
.nav-th--dark .cart-container .buttons .button.checkout { color:#DBDBDB !important; border-color: #DBDBDB;}
.nav-th--dark .cart-container .buttons .button.checkout:hover,
.nav-th--dark .cart-container .buttons .button.checkout:focus { color: #fff ; border-color: #fff;}
@media (max-height: 600px) {
    .cart-container .cart_list { max-height: 180px; overflow-x: hidden;}
}
@media (max-width:480px) {
    .topnav--cart,
    .topnav--cart .topnav-drop { position:static }

    .topnav-drop-panel.topnav--cart-panel { right: 10px; left: 10px }

    .topnav-drop-panel-inner:after { content: none }
}

/* Category */
.woocommerce .page-title { color: #343434;}
/* Dark Version */
.kl-skin--dark .page-title { color: #CBCBCB;}

/* Search widget */
.zn_sidebar .woocommerce-product-search.gensearch__form .screen-reader-text {display: none;}

/* Top side of category listing */
.woocommerce .woocommerce-ordering select,
.products-per-page select { padding-right: 25px;height: 34px; font-size: 11px; font-weight: 600; outline: none; border-radius: 3px; border: 1px solid #D9D9D9; -webkit-appearance: none; background-image: url(../../images/select-arrow.svg); background-repeat: no-repeat; background-size: 6px 12px; background-position: calc(100% - 10px) center; background-position-y: center; background-position-x: calc(100% - 10px); text-transform: uppercase; padding-left: 10px; color: #909090; -webkit-transition:all .2s ease-out; transition:all .2s ease-out;}
.woocommerce .woocommerce-ordering select:hover,
.woocommerce .woocommerce-ordering select:focus,
.products-per-page select:hover,
.products-per-page select:focus { border: 1px solid #bababa; color: #787878;}
.woocommerce .woocommerce-result-count { margin: 10px 0; text-transform: uppercase; font-size: 11px; font-weight: 600; color: #838383;}
.woocommerce .woocommerce-ordering,
.woocommerce .woocommerce-result-count {margin: 0 0 20px;}
/* Dark Version */
.kl-skin--dark .woocommerce-ordering select,
.kl-skin--dark .products-per-page select { border: 1px solid #262626; background-image: url(../../images/select-arrow-dark.svg); background-color: #1D1D1D; }
.kl-skin--dark .woocommerce-ordering select:hover,
.kl-skin--dark .woocommerce-ordering select:focus,
.kl-skin--dark .products-per-page select:hover,
.kl-skin--dark .products-per-page select:focus { border: 1px solid #454545; color: #878787;}
.kl-skin--dark .woocommerce-result-count { color: #7C7C7C;}

/* Forms */
.woocommerce form .form-row {padding-left: 0; padding-right: 0;}
.woocommerce input.input-text,
.woocommerce textarea.input-text,
.woocommerce form .form-row select,
/* Overrides for forced styles from WC */
.woocommerce-cart table.cart td.actions .coupon .input-text { padding: 7px 10px; box-shadow: inset 2px 2px 0 0px rgba(0, 0, 0, 0.05); border-radius: 3px; border: 1px solid #D9D9D9; -webkit-transition: box-shadow .25s ease-in-out; transition: box-shadow .25s ease-in-out;  }
.woocommerce input.input-text:hover,
.woocommerce textarea.input-text:hover,
.woocommerce form .form-row select:hover,
.woocommerce input.input-text:focus,
.woocommerce textarea.input-text:focus,
.woocommerce form .form-row select:focus {border: 1px solid #bababa; color: #787878;}
.woocommerce form .form-row select {height:34px; }
.woocommerce input.input-text,
.woocommerce textarea.input-text,
.woocommerce .login .input-text {border:1px solid #d8d8d8;}
.woocommerce form .form-row.woocommerce-invalid input.input-text,
.woocommerce form .form-row.woocommerce-invalid select { box-shadow: inset 3px 0 0 #e2401c }
.woocommerce .woocommerce form .form-row label {font-weight:400;}
.form-row + fieldset {margin-top: 20px}

/* Dark Version */
.kl-skin--dark input.input-text,
.kl-skin--dark textarea.input-text,
.kl-skin--dark form .form-row select,
.kl-skin--dark table.cart td.actions .coupon .input-text,
.kl-skin--dark-cart table.cart td.actions .coupon .input-text { box-shadow: inset 2px 2px 0 0px rgba(255, 255, 255, 0.05); border: 1px solid #262626;}
.kl-skin--dark input.input-text:hover,
.kl-skin--dark textarea.input-text:hover,
.kl-skin--dark form .form-row select:hover,
.kl-skin--dark input.input-text:focus,
.kl-skin--dark textarea.input-text:focus,
.kl-skin--dark form .form-row select:focus {border: 1px solid #454545; color: #878787;}
.kl-skin--dark input.input-text,
.kl-skin--dark textarea.input-text,
.kl-skin--dark .login .input-text {border:1px solid #272727; background-color: #111;}

/* Forms on Style #2 pages */
.zn-wc-pages-style2 input.input-text,
.zn-wc-pages-style2 textarea.input-text,
.zn-wc-pages-style2 form .form-row input.input-text,
.zn-wc-pages-style2 form .form-row textarea,
.zn-wc-pages-style2 form .form-row select,
.woocommerce-cart.zn-wc-pages-style2 table.cart td.actions .coupon .input-text,
.zn-wc-pages-style2 .woocommerce form .form-row .select2-container,
.woocommerce div.product.prodpage-style3 form.cart div.quantity .qty,
.woocommerce div.product.prodpage-style3 form.cart .single_variation_wrap .variations_button div.quantity .qty  { height: 52px; box-shadow: none;}
.zn-wc-pages-style2 .select2-container .select2-choice {height: 52px; line-height: 52px;}
.zn-wc-pages-style2 textarea.input-text,
.zn-wc-pages-style2 form .form-row textarea { height: auto;}



/* Messages / Notices */
.woocommerce .woocommerce-error,
.woocommerce .woocommerce-error:before,
.woocommerce .woocommerce-info,
.woocommerce .woocommerce-info:before,
.woocommerce .woocommerce-message,
.woocommerce .woocommerce-message:before { color: #fff; line-height: 30px; border-top: 0; }
.woocommerce .woocommerce-error,
.woocommerce .woocommerce-info,
.woocommerce .woocommerce-message { border-left: .618em solid rgba(0,0,0,.15) }
.woocommerce .woocommerce-error a:not(.button),
.woocommerce .woocommerce-info a:not(.button),
.woocommerce .woocommerce-message a:not(.button) { color: #fff; margin-left: 10px; border-bottom: 1px solid rgba(255, 255, 255, 0.2);}
.woocommerce .woocommerce-error a:not(.button):hover,
.woocommerce .woocommerce-info a:not(.button):hover,
.woocommerce .woocommerce-message a:not(.button):hover { border-color: rgba(255, 255, 255, 0.4);}
.woocommerce .woocommerce-info { background-color: #A7B9C3;}
.woocommerce .woocommerce-error {background-color: #FAAC9B; }
.woocommerce .woocommerce-message { background-color: #B4D3C5; }
.woocommerce .woocommerce-message .button.wc-forward {background:none; color:#fff; border:1px solid rgba(255,255,255,0.5);}
.woocommerce .woocommerce-message .button.wc-forward:hover {background:none; color:#fff; border-color: rgba(255,255,255,0.8);}


/*** Shopping Cart */
.woocommerce .zn-cartpage-classic table.shop_table { border: 0; border-radius: 0; background-color: #fff }
.woocommerce .zn-cartpage-classic table.shop_table thead {  color: #fff; text-transform: uppercase; font-size: 12px; border-radius: 3px;}
.woocommerce .zn-cartpage-classic table.shop_table thead th { background-color: #ccc; color:#454545; font-weight:600;}
.woocommerce .zn-cartpage-classic table.shop_table thead th:first-child { border-radius:3px 0 0 0; }
.woocommerce .zn-cartpage-classic table.shop_table thead th:last-child { border-radius:0 3px 0 0; }
.woocommerce .zn-cartpage-classic table.shop_table  thead th,
.woocommerce .zn-cartpage-classic table.shop_table td { padding: 15px }
.woocommerce-cart .zn-cartpage-classic table.cart .product-remove {width: 60px; padding: 0;text-align: center;}
.woocommerce-cart .zn-cartpage-classic table.cart .product-remove .remove {display: inline-block; margin: 0 auto; }
.woocommerce-cart .zn-cartpage-classic table.cart .product-thumbnail {width: 52px; padding: 0;}
.woocommerce-cart .zn-cartpage-classic table.cart .product-thumbnail img {width: 42px; box-shadow: none }
.woocommerce-cart #page_wrapper  .zn-cartpage-classic table.cart td.actions .coupon .input-text { width: auto; height: auto; line-height: normal;}
@media screen and (max-width: 767px){
	.woocommerce #page_wrapper .zn-cartpage-classic table.cart td.actions .coupon + .button { margin: 30px auto 20px; display: block;}
}
 .zn-cartpage-classic .shipping-calculator-button { background-color: #D4D4D4; padding: 6px 10px; border-radius: 2px; line-height: 1; margin-top:10px; display:inline-block;}
 .zn-cartpage-classic .shipping-calculator-button:hover { background-color: #ccc; }
/* Dark Version */
.kl-skin--dark .zn-cartpage-classic table.shop_table,
.kl-skin--dark .zn-cartpage-classic table.shop_table {background-color: #000}
.kl-skin--dark .zn-cartpage-classic table.shop_table thead,
.kl-skin--dark .zn-cartpage-classic table.shop_table thead {color: #000;}
.kl-skin--dark .zn-cartpage-classic table.shop_table thead th,
.kl-skin--dark .zn-cartpage-classic table.shop_table thead th { background-color: #333; color:#BABABA;}
.kl-skin--dark .zn-cartpage-classic .shipping-calculator-button,
.kl-skin--dark .zn-cartpage-classic .shipping-calculator-button { background-color: #2B2B2B;}
.kl-skin--dark .zn-cartpage-classic .shipping-calculator-button:hover,
.kl-skin--dark .zn-cartpage-classic .shipping-calculator-button:hover { background-color: #333; }

/*** Cart totals */
.woocommerce .zn-cartpage-classic .cart-collaterals .cart_totals {width:50%;}
.woocommerce .zn-cartpage-classic .cart-collaterals .cart_totals > h2 {text-transform:uppercase; color:#888;}
.woocommerce .zn-cartpage-classic .cart-collaterals .cart_totals table { width:100%; }
.woocommerce .zn-cartpage-classic .cart-collaterals .cart_totals .order-total {background-color: #eee; font-size:16px; }
.woocommerce .zn-cartpage-classic .cart-collaterals .cart_totals table th {text-transform:uppercase; font-weight:600;}
.woocommerce .zn-cartpage-classic .cart-collaterals .cart_totals table td,
.woocommerce .zn-cartpage-classic .cart-collaterals .cart_totals table th {padding: 10px; }
.woocommerce .zn-cartpage-classic .cart-collaterals ul.products li.product .product-list-item .kw-prodimage { line-height: 180px; height: 180px;}
.woocommerce .zn-cartpage-classic .cart-collaterals .cross-sells {width: 50%; }
.woocommerce .zn-cartpage-classic .cart-collaterals .cross-sells >h2 {font-size:22px; font-weight:400; font-family: 'Open Sans', sans-serif;}
.woocommerce .zn-cartpage-classic .wc-proceed-to-checkout {display: inline-block; }
/* Dark Version */
.kl-skin--dark .zn-cartpage-classic .cart-collaterals .cart_totals > h2 {color:#777777;}
.kl-skin--dark .zn-cartpage-classic .cart-collaterals .cart_totals .order-total {background-color: #111111;}
.kl-skin--dark .zn-cartpage-classic .cart-collaterals .cart_totals table td,
.kl-skin--dark .zn-cartpage-classic .cart-collaterals .cart_totals table th {border-top-color:#252525;}
.kl-skin--dark .zn-cartpage-classic .woocommerce-checkout #payment { background: #292929;}
.kl-skin--dark .zn-cartpage-classic .woocommerce-checkout #payment ul.payment_methods { border-bottom: 1px solid #353535;}

@media screen and (max-width: 767px){
	.woocommerce .zn-cartpage-classic .cart-collaterals .cross-sells ,
	.woocommerce .zn-cartpage-classic .cart-collaterals .cart_totals {width: 100%; }
}


/*** Shopping Cart page - STYLE #2 */
.woocommerce .zn-cartpage-style2 {background-color: #fff;}
.woocommerce .zn-cartpage-style2 table.cart { border: 0; border-radius: 0; }
.woocommerce .zn-cartpage-style2 table.cart thead {  color: #fff; text-transform: uppercase; font-size: 12px; border-radius: 0;}
.woocommerce .zn-cartpage-style2 table.cart thead th { background-color: #fafafa; color:#000000; font-weight:700; font-size: 14px; padding-top:30px; height:90px;}
.woocommerce .zn-cartpage-style2 table.cart td { padding: 25px }
.woocommerce .zn-cartpage-style2 table.cart tr:before {content:''; display: table-cell; width:50px;}
.woocommerce .zn-cartpage-style2 table.cart tr:after {content:''; display: table-cell; width:50px;}
.woocommerce .zn-cartpage-style2 table.cart thead tr:before,
.woocommerce .zn-cartpage-style2 table.cart thead tr:after {background-color: #fafafa}
.woocommerce .zn-cartpage-style2 table.cart .cart_item td {padding-top:30px; padding-bottom: 30px;}
.woocommerce .zn-cartpage-style2 table.cart .cart_item:first-child td {border-top: 0;}
.woocommerce-cart .zn-cartpage-style2 table.cart td.product-remove {width: 60px; padding-left: 0; padding-right: 0; text-align: left;}
.woocommerce-cart .zn-cartpage-style2 table.cart td.product-remove .remove {display: inline-block; position:relative; margin: 0 auto; width: 28px; height: 28px; line-height: 30px; background: #ff9999; text-indent: -9999px;-webkit-transform:rotate(45deg); -ms-transform:rotate(45deg);transform:rotate(45deg);}
.woocommerce-cart .zn-cartpage-style2 table.cart td.product-remove .remove:hover {background: #000;}
.woocommerce-cart .zn-cartpage-style2 table.cart td.product-remove .remove:before,
.woocommerce-cart .zn-cartpage-style2 table.cart td.product-remove .remove:after {content:''; position: absolute; top: 50%;left: 50%; width:12px; height: 2px; background-color: #FFF;margin: -1px 0 0 -6px;}
.woocommerce-cart .zn-cartpage-style2 table.cart td.product-remove .remove:after {-webkit-transform:rotate(90deg); -ms-transform:rotate(90deg); transform:rotate(90deg);}
.woocommerce-cart .zn-cartpage-style2 table.cart td.product-thumbnail {width: 72px; padding-left: 0; padding-right: 0;}
.woocommerce-cart .zn-cartpage-style2 table.cart td.product-thumbnail img {width: 72px; box-shadow: none; border:3px solid #edefed; }
.woocommerce-cart .zn-cartpage-style2 table.cart td.product-name {font-weight: 700;}
.woocommerce-cart .zn-cartpage-style2 table.cart td.product-name .variation {font-weight: normal;}
.woocommerce-cart .zn-cartpage-style2 table.cart td.product-price {font-size: 14px;}
.woocommerce-cart .zn-cartpage-style2 table.cart td.product-quantity input.qty { width: 100px;}
.woocommerce-cart .zn-cartpage-style2 table.cart td.product-subtotal {font-size: 18px}
.woocommerce .zn-cartpage-style2 table.cart .product-price,
.woocommerce .zn-cartpage-style2 table.cart .product-quantity,
.woocommerce .zn-cartpage-style2 table.cart .product-subtotal {text-align: end; padding-left: 15px; padding-right: 15px;}
.woocommerce-cart #page_wrapper .zn-cartpage-style2 table.cart td.actions {height:110px; padding-left: 0; padding-right: 0;}
.woocommerce-cart #page_wrapper .zn-cartpage-style2 table.cart td.actions .coupon .input-text { width: auto; min-width: 300px; line-height: normal; color:#000; font-size: 14px; }
.woocommerce-cart #page_wrapper .zn-cartpage-style2 table.cart td.actions .coupon .input-text:focus { border-color:#ccc;}
.woocommerce-cart #page_wrapper .zn-cartpage-style2 table.cart td.actions .coupon input[type="submit"] {background-color: transparent; border:2px solid #eee; color: #cccccc !important; margin-left: 20px;}
.woocommerce-cart #page_wrapper .zn-cartpage-style2 table.cart td.actions .coupon input[type="submit"]:hover {border-color:#ccc; color: #999 !important; }
/* Update button */
.woocommerce-cart #page_wrapper .zn-cartpage-style2 table.cart td.actions > input.button { margin-left: 20px;}

/*** Cart totals */
.woocommerce .zn-cartpage-style2 .cart-collaterals { display: -webkit-box; display: -webkit-flex; display: -ms-flexbox; display: flex;}
.woocommerce .zn-cartpage-style2 .cart-collaterals .cart_totals {width:50%; padding: 70px 50px; background-color: #fafafa; }
.woocommerce .zn-cartpage-style2 .cart-collaterals .cart_totals:only-child {margin-left: auto; }
.woocommerce .zn-cartpage-style2 .cart-collaterals .cross-sells + .cart_totals {width:40%; ;}
.woocommerce .zn-cartpage-style2 .cart-collaterals .cart_totals > h2 {font-size:24px; font-weight:700; font-family: inherit; text-transform:uppercase; color:#000; margin-top: 0;}
.woocommerce .zn-cartpage-style2 .cart-collaterals .cart_totals .shop_table { width:100%; border:0; border-radius: 0;  }
.woocommerce .zn-cartpage-style2 .cart-collaterals .cart_totals .shop_table td,
.woocommerce .zn-cartpage-style2 .cart-collaterals .cart_totals .shop_table th {padding: 10px; }
.woocommerce .zn-cartpage-style2 .cart-collaterals .cart_totals .shop_table th {text-transform:uppercase; font-weight:600; width: 35%;}
.woocommerce .zn-cartpage-style2 .cart-collaterals .cart_totals .shop_table td {text-align: right;}
.woocommerce .zn-cartpage-style2 .shipping-calculator-button { background-color: transparent; padding:10px 0; width:100%; border-radius: 2px; line-height: 1; margin-top:20px; display:inline-block; border:2px solid #ff9999; color:#ff9999;text-transform: uppercase; font-size: 12px; text-align: center;}
.woocommerce .zn-cartpage-style2 .shipping-calculator-button:hover { opacity:.8;}
.woocommerce-cart .zn-cartpage-style2 .cart-collaterals .cart_totals .shipping-calculator-form select,
.woocommerce-cart .zn-cartpage-style2 .cart-collaterals .cart_totals .shipping-calculator-form input[type=text],
.woocommerce-cart .zn-cartpage-style2 .cart-collaterals .cart_totals .shipping-calculator-form button[type="submit"] {box-shadow: none; margin-bottom:10px;}
.woocommerce-cart .zn-cartpage-style2 .cart-collaterals .cart_totals .shipping-calculator-form button[type="submit"] { width:100%;}
.woocommerce .zn-cartpage-style2 .cart-collaterals .cart_totals .order-total {background-color: transparent; color:#000; font-size:16px; }
.woocommerce .zn-cartpage-style2 .cart-collaterals .cart_totals .order-total td,
.woocommerce .zn-cartpage-style2 .cart-collaterals .cart_totals .order-total th {}
.woocommerce-cart .zn-cartpage-style2 .wc-proceed-to-checkout a.checkout-button {display: block;}
.woocommerce .zn-cartpage-style2 > form {min-height: .01%; overflow-x: auto; }
/* Cross Sells */
.woocommerce .zn-cartpage-style2 .cart-collaterals .cross-sells {width:60%; padding: 70px 50px;}
.woocommerce .zn-cartpage-style2 .cart-collaterals .cross-sells > h2 {font-size:22px; font-weight:700; color:#000; margin-top: 0; margin-bottom: 20px;}
@media (max-width: 991px){
    .woocommerce .zn-cartpage-style2 .cart-collaterals {-webkit-box-orient: vertical;-webkit-box-direction: normal;-webkit-flex-direction: column;-ms-flex-direction: column;flex-direction: column;}
    .woocommerce .zn-cartpage-style2 .cart-collaterals .cross-sells ,
    .woocommerce .zn-cartpage-style2 .cart-collaterals .cart_totals,
    .woocommerce .zn-cartpage-style2 .cart-collaterals .cross-sells + .cart_totals {width: 100%; }
}
@media (max-width: 767px){

    .woocommerce #page_wrapper .zn-cartpage-style2 table.cart td.actions .coupon + .button { margin: 30px auto 20px; display: block;}

    .woocommerce .cart-collaterals .cross-sells ul.products li,
    .woocommerce-page .cart-collaterals .cross-sells ul.products li {width: 100%;}
    .woocommerce .zn-cartpage-style2 > form {width: 100%; margin-bottom: 15px; overflow-y: hidden; -ms-overflow-style: -ms-autohiding-scrollbar; border: 1px solid #ddd; }
    .woocommerce .zn-cartpage-style2 table.cart tr:before,
    .woocommerce .zn-cartpage-style2 table.cart tr:after {display: none;}
    .woocommerce .zn-cartpage-style2 table.shop_table_responsive.cart thead,
    .woocommerce-page .zn-cartpage-style2 table.shop_table_responsive.cart thead {display: table-header-group;}
    .woocommerce .zn-cartpage-style2 table.shop_table_responsive.cart ,
    .woocommerce-page .zn-cartpage-style2 table.shop_table_responsive.cart  {min-width: 1200px}
    .woocommerce .zn-cartpage-style2 table.shop_table_responsive.cart tr,
    .woocommerce-page .zn-cartpage-style2 table.shop_table_responsive.cart tr {display:table-row;}
    .woocommerce .zn-cartpage-style2 table.shop_table_responsive.cart tr td,
    .woocommerce-page .zn-cartpage-style2 table.shop_table_responsive.cart tr td {display:table-cell; text-align: start !important}
    .woocommerce .zn-cartpage-style2 table.shop_table_responsive.cart tr td:before,
    .woocommerce-page .zn-cartpage-style2 table.shop_table_responsive.cart tr td:before {display: none;}
    .woocommerce .zn-cartpage-style2 #content table.cart .product-thumbnail,
    .woocommerce .zn-cartpage-style2 table.cart .product-thumbnail,
    .woocommerce-page .zn-cartpage-style2 #content table.cart .product-thumbnail,
    .woocommerce-page .zn-cartpage-style2 table.cart .product-thumbnail {display: table-cell;}
    .woocommerce-cart .zn-cartpage-style2 table.cart td.product-remove {padding: 25px}
    .woocommerce-cart #page_wrapper .zn-cartpage-style2 table.cart td.actions {padding:25px;}
    .woocommerce #content .zn-cartpage-style2 table.cart td.actions .coupon,
    .woocommerce .zn-cartpage-style2 table.cart td.actions .coupon,
    .woocommerce-page #content .zn-cartpage-style2 table.cart td.actions .coupon,
    .woocommerce-page .zn-cartpage-style2 table.cart td.actions .coupon {float:none; padding-bottom: 0;}
    .woocommerce-cart #page_wrapper .zn-cartpage-style2 table.cart td.actions .coupon input[type="submit"] {float: none; width: auto;}
    .woocommerce-cart #page_wrapper .zn-cartpage-style2 table.cart td.actions > input.button {float: none; clear:left; width: auto; margin-top: 30px; margin-left: 0;}
}

/* Dark version Shopping Cart page - STYLE #2 */
.kl-skin--dark .zn-cartpage-style2 {background-color: #000;}
.kl-skin--dark .zn-cartpage-style2 table.cart thead {  color: #000; }
.kl-skin--dark .zn-cartpage-style2 table.cart thead th { background-color: #131313; color:#fff; }
.kl-skin--dark .zn-cartpage-style2 table.cart thead tr:before,
.kl-skin--dark .zn-cartpage-style2 table.cart thead tr:after {background-color: #131313}
.kl-skin--dark .zn-cartpage-style2 table.cart td.product-remove .remove:hover {background: #fff;}
.kl-skin--dark .zn-cartpage-style2 table.cart td.product-remove .remove:before,
.kl-skin--dark .zn-cartpage-style2 table.cart td.product-remove .remove:after {background-color: #000;}
.kl-skin--dark .zn-cartpage-style2 table.cart td.product-thumbnail img {border-color:#121012; }
.kl-skin--dark #page_wrapper .zn-cartpage-style2 table.cart td.actions .coupon .input-text { color:#fff;}
.kl-skin--dark #page_wrapper .zn-cartpage-style2 table.cart td.actions .coupon .input-text:focus { border-color:#333333;}
.kl-skin--dark #page_wrapper .zn-cartpage-style2 table.cart td.actions .coupon input[type="submit"] {border:2px solid #111; color: #333 !important; }
.kl-skin--dark #page_wrapper .zn-cartpage-style2 table.cart td.actions .coupon input[type="submit"]:hover {border-color:#333; color: #666666 !important; }
.kl-skin--dark .zn-cartpage-style2 .cart-collaterals .cart_totals {background-color: #050505; }
.kl-skin--dark .zn-cartpage-style2 .cart-collaterals .cart_totals > h2 {color:#fff;}
.kl-skin--dark .zn-cartpage-style2 .cart-collaterals .cart_totals .order-total {color:#fff;}
.kl-skin--dark .zn-cartpage-style2 .cart-collaterals .cross-sells > h2 {color:#fff;}
.kl-skin--dark .zn-cartpage-style2 .cart-collaterals .cart_totals tr td,
.kl-skin--dark .zn-cartpage-style2 .cart-collaterals .cart_totals tr th {border-top-color: #444;}

/** End Cart table - style 2 */


/*** Checkout */
.zn-wc-pages-classic .checkout.woocommerce-checkout .woocommerce-shipping-fields h3 {margin-top: 10px;}
.zn-wc-pages-classic .checkout.woocommerce-checkout .woocommerce-shipping-fields h3 label {font-weight:400; display:inline-block; font-size: 20px; margin-right: 10px;}
.zn-wc-pages-classic .woocommerce-checkout-review-order .product-name {width:35%}
.zn-wc-pages-classic table.shop_table tbody th,
.zn-wc-pages-classic table.shop_table tfoot td,
.zn-wc-pages-classic table.shop_table tfoot th {font-weight:600;}
.zn-wc-pages-classic table.shop_table .order-total {background-color: #eee; font-size:16px; }
.zn-wc-pages-classic table.woocommerce-checkout-review-order-table { border-bottom: 1px solid #ccc;}
/* Dark Version */
.kl-skin--dark.zn-wc-pages-classic table.shop_table .order-total {background-color: #111111;}
.kl-skin--dark.zn-wc-pages-classic table.woocommerce-checkout-review-order-table { border-bottom-color: #333333;}

/* Checkout Style 2 */
.woocommerce-checkout.zn-wc-pages-style2 .woocommerce > .woocommerce-info {padding:35px 65px 25px !important; background:#fafafa; border:0; margin-top: 20px !important;}
.woocommerce-checkout.zn-wc-pages-style2 .woocommerce > .woocommerce-info:before {display: none;}
.woocommerce-checkout.zn-wc-pages-style2 .woocommerce > .woocommerce-info,
.woocommerce-checkout.zn-wc-pages-style2 .woocommerce > .woocommerce-info a,
.woocommerce-checkout.zn-wc-pages-style2 .woocommerce > .woocommerce-info a.showcoupon,
.woocommerce-checkout.zn-wc-pages-style2 .woocommerce > .woocommerce-info a.showlogin {font-size: 14px; color:#000; font-weight: 700;}
.woocommerce-checkout.zn-wc-pages-style2 .woocommerce > .woocommerce-info {text-transform: uppercase; margin-bottom: 0 !important;}
.woocommerce-checkout.zn-wc-pages-style2 .woocommerce > .woocommerce-info a.showcoupon,
.woocommerce-checkout.zn-wc-pages-style2 .woocommerce > .woocommerce-info a.showlogin{text-transform: none; margin-left: 30px; opacity:.4; text-decoration: underline;}
.woocommerce-checkout.zn-wc-pages-style2 .woocommerce > .woocommerce-info a.showcoupon:hover,
.woocommerce-checkout.zn-wc-pages-style2 .woocommerce > .woocommerce-info a.showlogin:hover{ opacity:1;}
/* Login */
.zn-wc-pages-style2 .woocommerce form.login {background-color: #fff; padding:45px 65px 35px; border:0; border-radius: 0; margin:0; }
.zn-wc-pages-style2 .woocommerce form.login .button { margin-right: 20px;}
.zn-wc-pages-style2 .woocommerce form.login label {color:#000;}
.zn-wc-pages-style2 .woocommerce form.login .lost_password a {opacity: .6; text-decoration: underline;;}
.zn-wc-pages-style2 .woocommerce form.login .lost_password a:hover {opacity:1;}
/* couppon */
.zn-wc-pages-style2 .woocommerce .checkout_coupon {background-color: #fff; padding:35px 65px 35px; border:0; border-radius: 0; margin:0;}
.zn-wc-pages-style2 .woocommerce .checkout_coupon .form-row {padding-right: 0; padding-left: 0;}
.zn-wc-pages-style2 .woocommerce .checkout_coupon .form-row-first {width:calc(75% - 20px); }
.zn-wc-pages-style2 .woocommerce .checkout_coupon .form-row-last {width: 25%; margin-left: 20px;}
.zn-wc-pages-style2 .woocommerce .checkout_coupon .button {width:100%;}
.zn-wc-pages-style2 .woocommerce form.login label {color:#000;}
@media (min-width: 768px) and (max-width: 991px){
    .zn-wc-pages-style2 .woocommerce .checkout_coupon .form-row-first,
    .zn-wc-pages-style2 .woocommerce .checkout_coupon .form-row-last {width: 48%;}
}
@media (max-width: 767px) {
    .zn-wc-pages-style2 .woocommerce .checkout_coupon .form-row-first,
    .zn-wc-pages-style2 .woocommerce .checkout_coupon .form-row-last {width: 100%;}
}
/* Billing form */
.zn-wc-pages-style2 .checkout.woocommerce-checkout {background-color: #fff; padding:45px 65px 45px; margin-top:20px;}
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-billing-fields h3 {font-weight: 900; color:#000; margin-top:0; margin-bottom: 40px;}
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-billing-fields label {color:#000;}
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-shipping-fields h3 {font-weight: 700; color:#000; font-family: inherit; margin-top:0; margin-bottom: 20px;}
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-shipping-fields h3 label {font-weight:400; display:inline-block; font-size: 20px; margin-right: 10px;}
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-shipping-fields label {color:#000;}
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-shipping-fields .notes textarea {min-height: 90px;}
/* Totals */
.zn-wc-pages-style2 .checkout.woocommerce-checkout #order_review_heading {font-weight: 900; color:#000; margin: 40px 0 20px; padding-top:40px; position:relative}
.zn-wc-pages-style2 .checkout.woocommerce-checkout #order_review_heading:before {content:'';border-top:3px solid rgba(0,0,0,.05); position:absolute; top:0; left:-65px; right:-65px; }
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-checkout-review-order-table {border:0;color: #000;}
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-checkout-review-order-table th {text-transform:uppercase; padding:15px 0;}
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-checkout-review-order-table td {padding:15px 0; border-top:1px solid rgba(0,0,0,.05)}
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-checkout-review-order-table .product-total,
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-checkout-review-order-table .cart-subtotal td,
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-checkout-review-order-table .shipping td,
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-checkout-review-order-table .order-total td,
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-checkout-review-order-table .tax-rate td {text-align:right;}
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-checkout-review-order-table .order-total {background:none;}
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-checkout-review-order-table .order-total th,
.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-checkout-review-order-table .order-total td {background:none; border-top:2px solid #ccc;}
/* Payment */
.zn-wc-pages-style2 .checkout.woocommerce-checkout #payment { background:none; padding:0; padding-top:40px; margin-top:40px; position: relative; }
.zn-wc-pages-style2 .checkout.woocommerce-checkout #payment:before {content:'';border-top:3px solid rgba(0,0,0,.05); position:absolute; top:0; left:-65px; right:-65px; }
.zn-wc-pages-style2 .checkout.woocommerce-checkout #payment ul.payment_methods { padding:0; border-bottom: 0; }
.zn-wc-pages-style2 .checkout.woocommerce-checkout #payment ul.payment_methods li {margin-bottom: 10px;}
.zn-wc-pages-style2 .checkout.woocommerce-checkout #payment ul.payment_methods li label {text-transform: uppercase; color:#000;}
.zn-wc-pages-style2 .checkout.woocommerce-checkout #payment .payment_method_paypal .about_paypal {line-height: 32px; margin-left: 10px; opacity: .6}
.zn-wc-pages-style2 .checkout.woocommerce-checkout #place_order {padding-left: 40px; padding-right: 40px;}

/* Dark Checkout Style 2 */
.kl-skin--dark.woocommerce-checkout.zn-wc-pages-style2 .woocommerce > .woocommerce-info {background:#050505;}
.kl-skin--dark.woocommerce-checkout.zn-wc-pages-style2 .woocommerce > .woocommerce-info,
.kl-skin--dark.woocommerce-checkout.zn-wc-pages-style2 .woocommerce > .woocommerce-info a,
.kl-skin--dark.woocommerce-checkout.zn-wc-pages-style2 .woocommerce > .woocommerce-info a.showcoupon,
.kl-skin--dark.woocommerce-checkout.zn-wc-pages-style2 .woocommerce > .woocommerce-info a.showlogin {color:#fff;}
.kl-skin--dark.zn-wc-pages-style2 .woocommerce form.login {background-color: #000; }
.kl-skin--dark.zn-wc-pages-style2 .woocommerce form.login label {color:#fff;}
.kl-skin--dark.zn-wc-pages-style2 .woocommerce .checkout_coupon {background-color: #000; }
.kl-skin--dark.zn-wc-pages-style2 .woocommerce form.login label {color:#fff;}
.kl-skin--dark.zn-wc-pages-style2 .checkout.woocommerce-checkout {background-color: #000;}
.kl-skin--dark.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-billing-fields h3 {color:#fff; }
.kl-skin--dark.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-billing-fields label {color:#fff;}
.kl-skin--dark.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-shipping-fields h3 {color:#fff;}
.kl-skin--dark.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-shipping-fields label {color:#fff;}
.kl-skin--dark.zn-wc-pages-style2 .checkout.woocommerce-checkout #order_review_heading {color:#fff;}
.kl-skin--dark.zn-wc-pages-style2 .checkout.woocommerce-checkout #order_review_heading:before {border-top-color:rgba(255,255,255,.05);}
.kl-skin--dark.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-checkout-review-order-table {color: #fff;}
.kl-skin--dark.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-checkout-review-order-table td {border-top-color:rgba(255,255,255,.05)}
.kl-skin--dark.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-checkout-review-order-table .order-total th,
.kl-skin--dark.zn-wc-pages-style2 .checkout.woocommerce-checkout .woocommerce-checkout-review-order-table .order-total td {border-top-color:#333;}
.kl-skin--dark.zn-wc-pages-style2 .checkout.woocommerce-checkout #payment:before {border-top-color:rgba(255,255,255,.05); }
.kl-skin--dark.zn-wc-pages-style2 .checkout.woocommerce-checkout #payment ul.payment_methods li label {color:#fff;}
.kl-skin--dark.zn-wc-pages-style2 .checkout.woocommerce-checkout #payment ul.payment_methods .payment_box {background-color:#202321; color:#999;}
.kl-skin--dark.zn-wc-pages-style2 .checkout.woocommerce-checkout #payment ul.payment_methods .payment_box:before {border-bottom-color:#202321; }


/*** ACCOUNT Page */
.woocommerce table.my_account_orders th.order-total,
.woocommerce table.my_account_orders td.order-total {background-color: #ccc; font-size: 13px; }
.woocommerce table.my_account_orders td.order-total {background-color:transparent;}
.woocommerce .addresses .title {overflow: hidden;}
.woocommerce .addresses .title h3 {float: left; margin-top: 0; line-height: 1.3; margin-bottom: 20px; text-transform: uppercase;font-size: 20px;}
.woocommerce .addresses .title .edit,
.woocommerce ul.digital-downloads li .count {float: right; padding: 7px 10px 6px; background-color: #DEDEDE; border-radius: 2px; text-transform: uppercase; font-weight: 600; color: #676767; font-size: 12px; line-height: 1; margin-top:5px; }
.woocommerce .addresses .title .edit:hover,
.woocommerce ul.digital-downloads li .count:hover {background-color: #CCC;}
.woocommerce .woocommerce > form .form-row {padding-left:0; padding-right:0;}
.woocommerce .woocommerce > form fieldset {clear: both; margin-top: 30px; margin-bottom: 20px; }
.woocommerce .woocommerce > form legend {clear: both; padding-bottom: 10px; }
.woocommerce .myaccount_user {font-size:14px; line-height:1.7;}
.woocommerce .myaccount_user a {text-decoration:underline;}
.woocommerce .myaccount_user ~ h2,
.woocommerce .order-info ~ h2,
.woocommerce .order-info ~ header h2,
.woocommerce .woocommerce > h2 {text-transform:uppercase;}
.woocommerce form.checkout_coupon,
.woocommerce form.login,
.woocommerce form.register {border: 1px solid #E9E9E9; padding: 10px 20px; }
.woocommerce form.login .form-row,
.woocommerce form.register .form-row {margin-bottom:10px;}
.woocommerce form.login .form-row .button + label,
.woocommerce form.register .form-row .button + label {margin-left:10px;}
.woocommerce form.edit-account .button {margin-top:20px;}

/* Dark Version */
.kl-skin--dark table.my_account_orders th.order-total,
.kl-skin--dark table.my_account_orders td.order-total {background-color: #333333; }
.kl-skin--dark .addresses .title .edit,
.kl-skin--dark ul.digital-downloads li .count { background-color: #212121; color: #989898;}
.kl-skin--dark .addresses .title .edit:hover,
.kl-skin--dark ul.digital-downloads li .count:hover {background-color: #333333;}
.kl-skin--dark form.checkout_coupon,
.kl-skin--dark form.login,
.kl-skin--dark form.register {border: 1px solid #161616; }

/* My Account 2.6+ */
.woocommerce-MyAccount-navigation {}
.woocommerce-MyAccount-navigation ul {list-style: none; margin: 0; padding: 0;}
.woocommerce-MyAccount-navigation ul li {margin-bottom: 10px; padding-bottom: 10px; border-bottom: 1px solid rgba(0,0,0,0.1);}
.kl-skin--dark .woocommerce-MyAccount-navigation ul li {border-bottom-color: rgba(255,255,255,0.1);}
.woocommerce-MyAccount-navigation ul a {display: block;}
.woocommerce-MyAccount-navigation ul li.is-active a {font-weight: bold;}
/* Address */
.woocommerce-Address-title .edit {  text-decoration: underline; text-transform: uppercase; font-weight: 700; font-size: 11px;}

/* Thank you page */
.zn-wc-pages-style2 .woocommerce-thankyou-order-received {font-size: 16px; margin-bottom: 30px;}
.zn-wc-pages-style2 .woocommerce-thankyou-order-details {padding-left: 0;}
.zn-wc-pages-style2 .woocommerce-thankyou-order-details li {margin-bottom: 20px;}
.zn-wc-pages-style2 table.shop_table.order_details,
.zn-wc-pages-style2 table.shop_table.customer_details {margin-top: 20px; background: #fff; border:0; border-radius: 0;}
.zn-wc-pages-style2 table.shop_table.order_details td,
.zn-wc-pages-style2 table.shop_table.order_details th,
.zn-wc-pages-style2 table.shop_table.customer_details td,
.zn-wc-pages-style2 table.shop_table.customer_details th {padding:15px 20px;}

/* Dark Thank you page */
.kl-skin--dark.zn-wc-pages-style2 table.shop_table.order_details,
.kl-skin--dark.zn-wc-pages-style2 table.shop_table.customer_details {background: #000;}


/*** PRODUCT PAGE */
.woocommerce .product-page {margin-bottom: 30px; }
.woocommerce div.product .product_title {line-height:1.4;}
/* Prod page - main image */
.woocommerce .single_product_main_image .images {border:1px solid #EAEAEA; background:#fff; width:100%; padding-bottom:1px; position: relative;}
.woocommerce .single_product_main_image .images .woocommerce-main-image {width:100%; text-align:center; display: block;}
/* Prod page - thumbnails */
.woocommerce div.product div.images div.thumbnails {padding: 10px 0 0 10px; margin: 0 10px;}
.woocommerce div.product div.images div.thumbnails img { border:1px solid #EAEAEA; padding:2px;}
.woocommerce div.product div.images div.thumbnails img:hover { border:1px solid #EEE; }
/* Prod page - summary (right side) */
.woocommerce div.product div.summary { float: none !important; width:100% !important; }
/* Prod page - price */
.woocommerce.single-product div.product p.price,
.woocommerce.single-product div.product span.price {font-size: 24px; color:#282828; }
.woocommerce.single-product div.product p.price .amount,
.woocommerce.single-product div.product span.price .amount {margin:0 5px;}
.woocommerce.single-product div.product p.price del,
.woocommerce.single-product div.product span.price del { opacity:.8 ; text-decoration: none; display: inline-block; margin-right: 10px; display:inline-block;}
.woocommerce.single-product div.product p.price del .amount,
.woocommerce.single-product div.product span.price del .amount { text-decoration: line-through;}
.woocommerce.single-product div.product p.price ins,
.woocommerce.single-product div.product span.price ins {text-decoration:none; font-weight:600; display:inline-block;}

/* Prod page - description */
.woocommerce.single-product div.product .kw-details-desc {margin-bottom:30px;}
/* Prod page - simple add to cart */
.woocommerce div.product form.cart div.quantity {margin-right: 10px; }
.woocommerce div.product form.cart div.quantity .qty {height:34px; border-radius:3px; border: 1px solid #D9D9D9; font-size: 16px; padding: 2px;}
.woocommerce div.product form.cart .single_add_to_cart_button  {}
/* Prod page - Variations (add to cart form) */
.woocommerce div.product form.cart .variations td.label { display: table-cell; padding: 0;font-size: 100%;text-align: start;vertical-align: top; padding-top: 10px;}
.woocommerce div.product form.cart .variations label {display: inline-block; text-transform: uppercase; font-size: 16px; font-weight: 400; color: #000; margin-right: 20px; }
.woocommerce div.product form.cart .variations select { height: 34px; font-size: 11px; font-weight: 600; outline: none; border-radius: 3px; border: 1px solid #D9D9D9; -webkit-appearance: none; background-image: url(../../images/select-arrow.svg); background-repeat: no-repeat; background-size: 6px 12px; background-position-y: center; background-position-x: calc(100% - 10px); text-transform: uppercase; padding-left: 10px; color: #909090; -webkit-transition:all .2s ease-out; transition:all .2s ease-out;}
@media (max-width: 640px) {
    .woocommerce div.product form.cart .variations td.label,
    .woocommerce div.product form.cart .variations td.value {display: list-item; width: 100%; list-style: none; }
    .woocommerce div.product form.cart .variations td.value select {width: 100%; }
}
.woocommerce div.product form.cart .variations select:hover,
.woocommerce div.product form.cart .variations select:focus { border: 1px solid #bababa; color: #787878;}
.woocommerce div.product form.cart .reset_variations {font-size:11px; text-transform:uppercase; color:rgba(0,0,0,.8)}
.woocommerce div.product form.cart .single_variation_wrap {border-left:3px solid rgba(0,0,0,0.1); padding-left:20px; padding-top:5px; padding-bottom:5px;}
.woocommerce div.product form.cart .single_variation_wrap:before,
.woocommerce div.product form.cart .single_variation_wrap:after {display: table; content: " "}
.woocommerce div.product form.cart .single_variation_wrap:after {clear:both;}
.woocommerce div.product form.cart .single_variation_wrap .single_variation {margin-bottom: 15px; }
.woocommerce div.product form.cart .single_variation_wrap .single_variation .price {font-size:32px; color:#444;line-height: 1;}
.woocommerce div.product form.cart .single_variation_wrap .single_variation .price:before {content:''; width:20px; height:1px; background:#ccc; display:inline-block; vertical-align:middle; margin-right:10px; margin-left:-20px;}
.woocommerce div.product form.cart .single_variation_wrap .variations_button {}
.woocommerce div.product form.cart .single_variation_wrap .variations_button:before,
.woocommerce div.product form.cart .single_variation_wrap .variations_button:after {display: table; content: " "}
.woocommerce div.product form.cart .single_variation_wrap .variations_button:after {clear:both;}
.woocommerce div.product form.cart .single_variation_wrap .variations_button div.quantity {margin-right: 10px; }
.woocommerce div.product form.cart .single_variation_wrap .variations_button div.quantity .qty {height:33px; border-radius:3px; border: 1px solid #D9D9D9;}
.woocommerce div.product form.cart .single_variation_wrap .variations_button .single_add_to_cart_button  {}
/* Prod page - product meta */
.woocommerce .product_meta {margin-bottom: 10px;}
.woocommerce .product_meta > span {display: block;}
.woocommerce .product_meta span a {font-weight: normal;}
/* Product page - rating */
.woocommerce .woocommerce-product-rating .star-rating {margin: 5px 5px 10px; float: left; color: #cd2122;}
.woocommerce #comments .star-rating {margin-bottom: 10px; float: right;}
/* WooCommerce Tabs - reviews / comments */
.woocommerce #reviews #comments ol.commentlist li .comment-text {margin-left: 0; border:0;}
.woocommerce #reviews #comments ol.commentlist li img.avatar {margin: 10px;}
/* WooCommerce Tabs - Tab nav */
.woocommerce div.product .woocommerce-tabs {margin-bottom:50px}
.woocommerce div.product .woocommerce-tabs ul.tabs { margin: 0; padding: 0;margin-bottom: -1px;border-bottom: none; }
.woocommerce div.product .woocommerce-tabs ul.tabs:before {border:0;}
.woocommerce div.product .woocommerce-tabs ul.tabs li { margin: 0;box-shadow:none ;background: none ; padding: 0 ; border: none ;float: left ; display: block ; }
.woocommerce div.product .woocommerce-tabs ul.tabs li:before {display: none ;}
.woocommerce div.product .woocommerce-tabs ul.tabs li:after {display: none ;}
.woocommerce div.product .woocommerce-tabs ul.tabs li a { font-weight:normal ;padding: 15px 20px;line-height: 18px ;color: #343434 ;display: block ; text-transform: uppercase;}
.woocommerce div.product .woocommerce-tabs ul.tabs li.active a { background: #FFF; border: 1px solid #ECECEC; border-bottom: 0;border-top-left-radius: 5px; border-top-right-radius: 5px; }
/* WooCommerce Tabs - panels */
.woocommerce div.product .woocommerce-tabs .panel {width: 100%; padding: 10px 15px 15px; border: 1px solid #ECECEC; background: #FFF; }
.woocommerce div.product .woocommerce-tabs h2,
.upsells.products h2 ,
.related.products h2 {font-size: 18px; line-height: 20px;text-transform: uppercase;}
div.product p.stock,
.site-content div.product p.stock {font-size:11px; color:#535353; }

/* Product page - Dark Version */
.kl-skin--dark .single_product_main_image .images {border:1px solid #151515; background:#000;}
.kl-skin--dark div.product div.images div.thumbnails img { border:1px solid #151515; }
.kl-skin--dark div.product div.images div.thumbnails img:hover { border:1px solid #111; }
.kl-skin--dark.single-product div.product p.price,
.kl-skin--dark.single-product div.product span.price {color:#D7D7D7; }
.kl-skin--dark.single-product div.product p.price del:before,
.kl-skin--dark.single-product div.product span.price del:before { color:#777777;}
.kl-skin--dark div.product form.cart div.quantity .qty {border: 1px solid #262626; background: #111;}
.kl-skin--dark div.product form.cart .variations label {color: #000;}
.kl-skin--dark div.product form.cart .variations select { border: 1px solid #262626; background-image: url(../../images/select-arrow-dark.svg); color: #6F6F6F; }
.kl-skin--dark div.product form.cart .variations select:hover,
.kl-skin--dark div.product form.cart .variations select:focus { border: 1px solid #454545; color: #878787;}
.kl-skin--dark div.product form.cart .reset_variations {color:rgba(255,255,255,.8)}
.kl-skin--dark div.product form.cart .single_variation_wrap {border-left:3px solid rgba(255,255,255,0.1);}
.kl-skin--dark div.product form.cart .single_variation_wrap .single_variation .price {color:#BBBBBB}
.kl-skin--dark div.product form.cart .single_variation_wrap .single_variation .price:before {background:#333333;}
.kl-skin--dark div.product form.cart .single_variation_wrap .variations_button div.quantity .qty {border: 1px solid #D9D9D9;}
.kl-skin--dark div.product .woocommerce-tabs ul.tabs li a {color: #CBCBCB ;}
.kl-skin--dark div.product .woocommerce-tabs ul.tabs li.active a { background: #000; border: 1px solid #131313;}
.kl-skin--dark div.product .woocommerce-tabs .panel {border: 1px solid #131313; background: #000; }
.kl-skin--dark div.product p.stock,
.kl-skin--dark .site-content div.product p.stock {color:#ACACAC; }
.kl-skin--dark div.product .woocommerce-tabs ul.tabs li.active {background:#000;}

.kl-skin--dark .commentlist li.comment > div[id*="comment-"] {background-color: #161616; border: 1px solid #444;}

/* Classic dedicated styles */
.woocommerce.single-product div.product.prodpage-classic p.price del:before,
.woocommerce.single-product div.product.prodpage-classic span.price del:before,
.woocommerce.single-product div.product.prodpage-classic p.price ins:before,
.woocommerce.single-product div.product.prodpage-classic span.price ins:before { text-decoration:none; font-size:10px; display:block; line-height:1.4; margin-left:5px; font-weight:700; }
.woocommerce.single-product div.product.prodpage-classic p.price del:before,
.woocommerce.single-product div.product.prodpage-classic span.price del:before { content:attr(data-was); color:#888;}
.woocommerce.single-product div.product.prodpage-classic p.price del + ins:before,
.woocommerce.single-product div.product.prodpage-classic span.price del + ins:before { content:attr(data-now); color: #cd2122;}


/* Alternative Layout - Style2 */
.woocommerce div.product.prodpage-style2 {}
.woocommerce div.product.prodpage-style2 .product_title {color:#000;}
.woocommerce div.product.prodpage-style2 .product-page {margin-left: 0; margin-right: 0; background-color: #fff; padding:50px;}
.woocommerce div.product.prodpage-style2 .single_product_main_image {padding-left: 0;padding-right: 30px;  }
.woocommerce div.product.prodpage-style2 .main-data {padding-right: 0; padding-left: 20px;}
/* Image and thumbs */
.woocommerce div.product.prodpage-style2 .single_product_main_image .images {border:0;}
.woocommerce div.product.prodpage-style2 .single_product_main_image .images .woocommerce-main-image {margin-bottom: 30px;}
.woocommerce div.product.prodpage-style2 div.images div.thumbnails img {border:2px solid #efefef; padding: 0;}
.woocommerce div.product.prodpage-style2 div.images div.thumbnails img:hover {border-color:#000000;}
.woocommerce #content div.product.prodpage-style2 div.images div.thumbnails,
.woocommerce div.product.prodpage-style2 div.images div.thumbnails,
.woocommerce-page #content div.product.prodpage-style2 div.images div.thumbnails,
.woocommerce-page div.product.prodpage-style2 div.images div.thumbnails { margin-left: -7px; margin-right: -7px; padding-left: 0; }
.woocommerce #content div.product.prodpage-style2 div.images div.thumbnails a,
.woocommerce div.product.prodpage-style2 div.images div.thumbnails a,
.woocommerce-page #content div.product.prodpage-style2 div.images div.thumbnails a,
.woocommerce-page div.product.prodpage-style2 div.images div.thumbnails a { height: auto; margin: 0 10px 10px 0; padding: 0; width: calc(25% - 10px); max-width: 70px; max-height: 70px; }
/* content */
.woocommerce.single-product div.product.prodpage-style2 .kw-details-desc {color: #000000; font-size: 14px; }
.woocommerce.single-product div.product.prodpage-style2 p.price,
.woocommerce.single-product div.product.prodpage-style2 span.price {color: #000; margin-bottom: 40px; }
.woocommerce.single-product div.product.prodpage-style2 p.price del,
.woocommerce.single-product div.product.prodpage-style2 span.price del {font-size: 18px;margin-bottom: 10px;}
.woocommerce.single-product div.product.prodpage-style2 p.price ins,
.woocommerce.single-product div.product.prodpage-style2 span.price ins {display: block;font-size: 30px;}
/* Add to cart */
.woocommerce div.product.prodpage-style2 form.cart div.quantity .qty {width:100px; height:52px;}
.woocommerce div.product.prodpage-style2 form.cart .single_add_to_cart_button {text-transform: uppercase; padding: 19px 35px; }
/* Product meta */
.woocommerce.single-product div.product.prodpage-style2 .product_meta {font-weight: 700;}
.woocommerce.single-product div.product.prodpage-style2 .product_meta span span ,
.woocommerce.single-product div.product.prodpage-style2 .product_meta span a {font-weight: normal;}
/* Rating */
.woocommerce div.product.prodpage-style2 .woocommerce-product-rating .star-rating {color:#c2c2c2;}
/* WooCommerce Tabs - Tab nav */
.woocommerce div.product.prodpage-style2 .woocommerce-tabs ul.tabs {margin-bottom: -1px; border-bottom: none;}
.woocommerce div.product.prodpage-style2 .woocommerce-tabs ul.tabs:before {border:0; }
.woocommerce div.product.prodpage-style2 .woocommerce-tabs ul.tabs li {background:none; border:0; margin-right: 2px; border-radius: 0;}
.woocommerce div.product.prodpage-style2 .woocommerce-tabs ul.tabs li a {font-weight: bold; color: #000; background: #FFF; border-radius: 0; opacity:0.5; -webkit-transition: opacity .1s ease-out; transition: opacity .1s ease-out; }
.woocommerce div.product.prodpage-style2 .woocommerce-tabs ul.tabs li:hover a,
.woocommerce div.product.prodpage-style2 .woocommerce-tabs ul.tabs li.active a { border: 0; opacity:1; }
.woocommerce div.product.prodpage-style2 .woocommerce-tabs .panel {border:0; padding: 40px;}
.woocommerce div.product.prodpage-style2 .woocommerce-tabs h2 {font-family: inherit;}
/* Reviews */
.woocommerce div.product.prodpage-style2 #reviews #comments h2 {font-weight: bold; font-size: 14px; margin-top:10px; margin-bottom: 30px;}
.woocommerce div.product.prodpage-style2 #reviews #comments ol.commentlist li img.avatar { border-radius: 50%;}
.woocommerce div.product.prodpage-style2 #reviews #comments ol.commentlist .comment_container {border:0; background-color: transparent;}
.woocommerce div.product.prodpage-style2 #reviews #comments ol.commentlist li .comment-text {padding-left: 0; padding-right: 0;}
.woocommerce div.product.prodpage-style2 #reviews #comments ol.commentlist li .comment-text p.meta {font-size: 14px;}
.woocommerce div.product.prodpage-style2 #reviews #comments ol.commentlist li .comment-text p.meta strong {color:#000;}
.woocommerce div.product.prodpage-style2 #reviews #comments .star-rating {color:#c2c2c2; font-size: 12px;}
/* Add review */
.woocommerce div.product.prodpage-style2 #reviews .comment-respond .comment-reply-title {font-family: inherit;text-transform: uppercase;font-weight: 400;font-size: 16px;text-align: center; cursor:pointer; }
.woocommerce div.product.prodpage-style2 #reviews .comment-respond .comment-reply-title:before {content:'+'; display:block; width:40px; height:40px; border:1px solid #ddd; margin:0 auto; border-radius:50%; color:#000; -webkit-transition:border-color .1s ease-out; transition: border-color .1s ease-out; }
.woocommerce div.product.prodpage-style2 #reviews .comment-respond .comment-reply-title.opened-form:before {-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);}
.woocommerce div.product.prodpage-style2 #reviews .comment-respond .comment-reply-title:hover:before {border:1px solid #aaa; }
.woocommerce div.product.prodpage-style2 #reviews .comment-form {display:none;}
.woocommerce div.product.prodpage-style2 #reviews .comment-form.show-form {display:block;}
/* Titles */
div.product.prodpage-style2 .upsells.products h2,
div.product.prodpage-style2 .related.products h2 {font-size: 26px; color:#000000; margin-bottom: 20px; font-weight: 700;}

/* Alternative Layout - Style2 - DARK */
.kl-skin--dark div.product.prodpage-style2 .product_title {color:#fff;}
.kl-skin--dark div.product.prodpage-style2 .product-page {background-color: #000; }
/* Image and thumbs */
.kl-skin--dark div.product.prodpage-style2 div.images div.thumbnails img {border:2px solid #101010;}
.kl-skin--dark div.product.prodpage-style2 div.images div.thumbnails img:hover {border-color:#FFF;}
/* content */
.kl-skin--dark.single-product div.product.prodpage-style2 .kw-details-desc {color: #FFF; }
.kl-skin--dark.single-product div.product.prodpage-style2 p.price,
.kl-skin--dark.single-product div.product.prodpage-style2 span.price {color: #fff; }
/* Rating */
.kl-skin--dark div.product.prodpage-style2 .woocommerce-product-rating .star-rating {color:#3D3D3D;}
/* WooCommerce Tabs - Tab nav */
.kl-skin--dark div.product.prodpage-style2 .woocommerce-tabs ul.tabs li a {color: #fff; background: #000; }
/* Reviews */
.kl-skin--dark div.product.prodpage-style2 #reviews #comments ol.commentlist li .comment-text p.meta strong {color:#fff;}
/* Add review */
.kl-skin--dark div.product.prodpage-style2 #reviews .comment-respond .comment-reply-title:before {border:1px solid #222222; color:#fff; }
.kl-skin--dark div.product.prodpage-style2 #reviews .comment-respond .comment-reply-title:hover:before {border:1px solid #555555; }
/* Titles */
.kl-skin--dark div.product.prodpage-style2 .upsells.products h2,
.kl-skin--dark div.product.prodpage-style2 .related.products h2 { color:#fff;}


/* Alternative Layout - Style #3 */
.woocommerce div.product.prodpage-style3 {}
.woocommerce div.product.prodpage-style3 .product_title {color:#000; font-weight: 700;}
.woocommerce div.product.prodpage-style3 .product-page {margin-left: 0; margin-right: 0; background-color: #fff; margin-bottom: 0;}

.woocommerce div.product.prodpage-style3 .main-data {padding-right: 0; padding-left: 20px;}
.woocommerce div.product.prodpage-style3 .summary {padding-top:110px; padding-left: 70px; padding-bottom: 40px; padding-right: calc((100vw - 1170px) / 2);}
/* Image and thumbs */
.woocommerce #content div.product.prodpage-style3 .single_product_main_image,
.woocommerce div.product.prodpage-style3 .single_product_main_image {padding-left: 0; padding-right: 0;background-color: transparent; position: relative;}
.woocommerce #content div.product.prodpage-style3 .single_product_main_image:after,
.woocommerce div.product.prodpage-style3 .single_product_main_image:after {content:''; position:absolute;background-color: rgba(142, 142, 142, 0.05);left: 0;top: 0;width: 100%;height: 100%;pointer-events: none;}
.no-csspointerevents .woocommerce #content div.product.prodpage-style3 .single_product_main_image:after,
.no-csspointerevents .woocommerce div.product.prodpage-style3 .single_product_main_image:after {display: none;}
.woocommerce #content div.product.prodpage-style3 .single_product_main_image .images,
.woocommerce div.product.prodpage-style3 .single_product_main_image .images {border:0; padding-top:0; padding-bottom: 0; max-width: 60%; float: none; width: auto; margin: 0 auto; background-color: transparent;}
.woocommerce div.product.prodpage-style3 .single_product_main_image .images .woocommerce-main-image {margin-bottom: 0;}
/* Thumbnails in product-summary  */
.woocommerce div.product.prodpage-style3 .summary div.thumbnails img {border:2px solid #efefef; padding: 0;}
.woocommerce div.product.prodpage-style3 .summary div.thumbnails img:hover {border-color:#000000;}
.woocommerce #content div.product.prodpage-style3 .summary div.thumbnails,
.woocommerce div.product.prodpage-style3 .summary div.thumbnails,
.woocommerce-page #content div.product.prodpage-style3 .summary div.thumbnails,
.woocommerce-page div.product.prodpage-style3 .summary div.thumbnails { margin-bottom: 40px; }
.woocommerce #content div.product.prodpage-style3 .summary div.thumbnails a,
.woocommerce div.product.prodpage-style3 .summary div.thumbnails a,
.woocommerce-page #content div.product.prodpage-style3 .summary div.thumbnails a,
.woocommerce-page div.product.prodpage-style3 .summary div.thumbnails a { width: 70px; height:70px; margin:0 10px 0 0; padding:0; }
/* Just in case, thumbnails under main-image  */
.woocommerce div.product.prodpage-style3 div.images div.thumbnails img {border:2px solid #efefef; padding: 0;}
.woocommerce div.product.prodpage-style3 div.images div.thumbnails img:hover {border-color:#000000;}
.woocommerce #content div.product.prodpage-style3 div.images div.thumbnails,
.woocommerce div.product.prodpage-style3 div.images div.thumbnails,
.woocommerce-page #content div.product.prodpage-style3 div.images div.thumbnails,
.woocommerce-page div.product.prodpage-style3 div.images div.thumbnails { margin-left: -7px; margin-right: -7px; padding-left: 0; }
.woocommerce #content div.product.prodpage-style3 div.images div.thumbnails a,
.woocommerce div.product.prodpage-style3 div.images div.thumbnails a,
.woocommerce-page #content div.product.prodpage-style3 div.images div.thumbnails a,
.woocommerce-page div.product.prodpage-style3 div.images div.thumbnails a { width: 70px; height:70px; margin:0 10px 0 0; padding:0; }
/* Badge */
.woocommerce div.product.prodpage-style3 .single_product_main_image .zn_badge_container {top: 35px;}
.woocommerce div.product.prodpage-style3 .single_product_main_image .zn_badge_sale,
.woocommerce div.product.prodpage-style3 .single_product_main_image .zn_badge_new {font-size: 14px; padding:10px 15px; font-weight:700;}
/* content */
.woocommerce.single-product div.product.prodpage-style3 .kw-details-desc {color: #000000; font-size: 14px; }
.woocommerce.single-product div.product.prodpage-style3 p.price,
.woocommerce.single-product div.product.prodpage-style3 span.price {color: #000; margin-bottom: 40px; }
.woocommerce.single-product div.product.prodpage-style3 p.price del,
.woocommerce.single-product div.product.prodpage-style3 span.price del {font-size: 18px;margin-bottom: 10px;}
.woocommerce.single-product div.product.prodpage-style3 p.price ins,
.woocommerce.single-product div.product.prodpage-style3 span.price ins {display: block; font-size: 30px;}
/* Add to cart */
.woocommerce div.product.prodpage-style3 form.cart div.quantity .qty,
.woocommerce div.product.prodpage-style3 form.cart .single_variation_wrap .variations_button div.quantity .qty {width:100px; }
.woocommerce div.product.prodpage-style3 form.cart .single_add_to_cart_button {text-transform: uppercase; padding-left: 40px; padding-right: 40px; }
/* Product meta */
.woocommerce.single-product div.product.prodpage-style3 .product_meta {font-weight: 700;}
.woocommerce.single-product div.product.prodpage-style3 .product_meta span span ,
.woocommerce.single-product div.product.prodpage-style3 .product_meta span a {font-weight: normal;}
/* Rating */
.woocommerce div.product.prodpage-style3 .woocommerce-product-rating .star-rating {color:#c2c2c2; font-size: 12px; vertical-align: middle; margin: 0; float: none; display: inline-block;}
.woocommerce div.product.prodpage-style3 .woocommerce-product-rating .woocommerce-review-link {font-size: 12px; vertical-align: middle; line-height: 1;}
/* Sections */
.woocommerce div.product.prodpage-style3 .wc-related-upsells-section {background-color:#fcfcfc; padding-top:80px; padding-bottom: 90px;}
.woocommerce div.product.prodpage-style3 .wc-tabs-section {padding-top:80px; padding-bottom: 100px;}
/* WooCommerce Tabs - Tab nav */
.woocommerce div.product.prodpage-style3 .woocommerce-tabs,
.woocommerce div.product.prodpage-style3 .woocommerce-tabs .panel {margin-bottom: 0;}
.woocommerce div.product.prodpage-style3 .woocommerce-tabs ul.tabs {margin-bottom: -1px; border-bottom: none;}
.woocommerce div.product.prodpage-style3 .woocommerce-tabs ul.tabs:before {border:0; }
.woocommerce div.product.prodpage-style3 .woocommerce-tabs ul.tabs li {background:none; border:0; margin-right: 2px; border-radius: 0;}
.woocommerce div.product.prodpage-style3 .woocommerce-tabs ul.tabs li a {font-weight: bold; color: #000; background: #FFF; border-radius: 0; opacity:0.5; -webkit-transition: opacity .1s ease-out; transition: opacity .1s ease-out; }
.woocommerce div.product.prodpage-style3 .woocommerce-tabs ul.tabs li:hover a,
.woocommerce div.product.prodpage-style3 .woocommerce-tabs ul.tabs li.active a { border: 0; opacity:1; }
.woocommerce div.product.prodpage-style3 .woocommerce-tabs .panel {border:0; padding: 40px;}
.woocommerce div.product.prodpage-style3 .woocommerce-tabs h2 {font-family: inherit;}
/* Reviews */
.woocommerce div.product.prodpage-style3 #reviews #comments h2 {font-weight: bold; font-size: 14px; margin-top:10px; margin-bottom: 30px;}
.woocommerce div.product.prodpage-style3 #reviews #comments ol.commentlist li img.avatar { border-radius: 50%;}
.woocommerce div.product.prodpage-style3 #reviews #comments ol.commentlist .comment_container {border:0; background-color: transparent;}
.woocommerce div.product.prodpage-style3 #reviews #comments ol.commentlist li .comment-text {padding-left: 0; padding-right: 0;}
.woocommerce div.product.prodpage-style3 #reviews #comments ol.commentlist li .comment-text p.meta {font-size: 14px;}
.woocommerce div.product.prodpage-style3 #reviews #comments ol.commentlist li .comment-text p.meta strong {color:#000;}
.woocommerce div.product.prodpage-style3 #reviews #comments .star-rating {color:#c2c2c2; font-size: 12px;}
/* Add review */
.woocommerce div.product.prodpage-style3 #reviews .comment-respond .comment-reply-title {font-family: inherit;text-transform: uppercase;font-weight: 400;font-size: 16px;text-align: center; cursor:pointer; }
.woocommerce div.product.prodpage-style3 #reviews .comment-respond .comment-reply-title:before {content:'+'; display:block; width:40px; height:40px; border:1px solid #ddd; margin:0 auto; border-radius:50%; color:#000; -webkit-transition:border-color .1s ease-out; transition: border-color .1s ease-out; }
.woocommerce div.product.prodpage-style3 #reviews .comment-respond .comment-reply-title.opened-form:before {-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);}
.woocommerce div.product.prodpage-style3 #reviews .comment-respond .comment-reply-title:hover:before {border:1px solid #aaa; }
.woocommerce div.product.prodpage-style3 #reviews .comment-form {display:none;}
.woocommerce div.product.prodpage-style3 #reviews .comment-form.show-form {display:block;}
/* Titles */
div.product.prodpage-style3 .upsells.products h2,
div.product.prodpage-style3 .related.products h2 {font-size: 26px; color:#000000; margin-bottom: 20px; font-weight: 700;}

@media (max-width: 767px){
    .woocommerce #content div.product.prodpage-style3 .single_product_main_image .images,
    .woocommerce div.product.prodpage-style3 .single_product_main_image .images { max-width: 90%; padding-top: 30px;}
    .woocommerce div.product.prodpage-style3 .summary {padding-left: 20px; padding-right: 20px; padding-top: 40px}
}

/* Alternative Layout - Style3 - DARK */
.kl-skin--dark div.product.prodpage-style3 .product_title {color:#fff;}
.kl-skin--dark #content div.product.prodpage-style3 .single_product_main_image:after,
.kl-skin--dark div.product.prodpage-style3 .single_product_main_image:after {background-color: rgba(142, 142, 142, 0.1);}
.kl-skin--dark #content div.product.prodpage-style3 .single_product_main_image,
.kl-skin--dark div.product.prodpage-style3 .single_product_main_image { background-color: #151515;}
.kl-skin--dark div.product.prodpage-style3 .wc-related-upsells-section { background-color: #151515;}
/* Image and thumbs */
.kl-skin--dark div.product.prodpage-style3 div.images div.thumbnails img {border:2px solid #101010;}
.kl-skin--dark div.product.prodpage-style3 div.images div.thumbnails img:hover {border-color:#FFF;}
/* content */
.kl-skin--dark.single-product div.product.prodpage-style3 .kw-details-desc {color: #FFF; }
.kl-skin--dark.single-product div.product.prodpage-style3 p.price,
.kl-skin--dark.single-product div.product.prodpage-style3 span.price {color: #fff; }
/* Rating */
.kl-skin--dark div.product.prodpage-style3 .woocommerce-product-rating .star-rating {color:#3D3D3D;}
/* WooCommerce Tabs - Tab nav */
.kl-skin--dark div.product.prodpage-style3 .woocommerce-tabs ul.tabs li a {color: #fff; background: #000; }
/* Reviews */
.kl-skin--dark div.product.prodpage-style3 #reviews #comments ol.commentlist li .comment-text p.meta strong {color:#fff;}
/* Add review */
.kl-skin--dark div.product.prodpage-style3 #reviews .comment-respond .comment-reply-title:before {border:1px solid #222222; color:#fff; }
.kl-skin--dark div.product.prodpage-style3 #reviews .comment-respond .comment-reply-title:hover:before {border:1px solid #555555; }
/* Titles */
.kl-skin--dark div.product.prodpage-style3 .upsells.products h2,
.kl-skin--dark div.product.prodpage-style3 .related.products h2 { color:#fff;}


/* BADGES */
.zn_badge_container {position: absolute; top: 20px; left: 20px; z-index: 1; }
.product-page .zn_badge_container { left: 35px; }
.zn_badge_container .zn_badge_sale:not(:only-child) {margin-bottom: -1px}
.zn_badge_container .zn_badge_sale:not(:only-child):after {display: none;}
.zn_badge_container .zn_badge_new:not(:only-child):before { content:'&'; }
.zn_badge_sale ,
.zn_badge_new,
.zn_badge_soldout{color: #FFFFFF; font-size: 10px; line-height: 1; padding: 8px 12px 7px; position:relative; display:block; margin-bottom:11px; border-radius: 2px;text-align: center;}
.zn_badge_soldout {background: #D3D3D3; font-weight: 700; color: #1E1E1E;}
.zn_badge_sale {background: #C51212; }
.zn_badge_sale:after ,
.zn_badge_new:after,
.zn_badge_soldout:after {position: absolute;bottom: -3px; content:"";width: 10px;height: 10px;-webkit-transform: rotate(45deg);-ms-transform: rotate(45deg);transform: rotate(45deg);border-radius: 2px;}
.zn_badge_sale:after { z-index: 1; background-color: #cd2122; left:5px;}
.zn_badge_new {background-color: #12A1C5; }
.zn_badge_new:after {background-color: #12A1C5; z-index: 1; left:5px; }
.zn_badge_soldout:after {z-index: 1; background-color: #D3D3D3; left:5px;}

/* ORDERING FORM */
.zn_woo_cat_page {position:relative; }
.woocommerce_ordering {float:right; margin-bottom:20px; position:absolute; top:0; right:0; }

/* register form */
form .form-row input.input-text,
form .form-row textarea {height:auto; min-height:30px; }

#payment ul.payment_methods li label {display:inline-block; }

.popupaddcart {z-index:1000;width:250px; height:40px; line-height:40px; text-align:center; background:#cecece; border:3px solid #999; box-shadow:0 0 20px rgba(0,0,0,0.4); color:#333; position:fixed; left:50%; top:50%; margin:-20px 0 0 -125px;}

.zn_loop_row {clear:both; height:1px; }

/* Reviews */
.woocommerce #reviews h3 {font-size: 18px; margin-bottom: 20px; font-weight: 600;}
.woocommerce #reviews #comments ol.commentlist {padding:0;}
.woocommerce #reviews #comments ol.commentlist li img.avatar
{width:70px; position:relative; margin-right:15px; }

/* WOOCOOMERCE PRODUCT SUBCATEGORY */
.zn_product_subcategory {text-align: center;}

/* Dark Dropdown list */
.kl-skin--dark .select2-container .select2-choice {border: 1px solid #353535; background-color: #141414; color: #CDCDCD;}
.kl-skin--dark .select2-container.select2-drop-above .select2-choice {border-bottom-color: #333; }
.kl-skin--dark .select2-drop-mask {background-color: #000; }
.kl-skin--dark .select2-drop {background: #000; color: #fff; border: 1px solid #333; }
.kl-skin--dark .select2-drop.select2-drop-above {border-top: 1px solid #333; }
.kl-skin--dark .select2-drop-active {border: 1px solid #999999; }
.kl-skin--dark .select2-drop.select2-drop-above.select2-drop-active {border-top: 1px solid #999 }
.kl-skin--dark .select2-drop-auto-width {border-top: 1px solid #333; }
.kl-skin--dark .select2-container .select2-choice .select2-arrow b:after {border-top-color: #999; }
.kl-skin--dark .select2-search input {border: 1px solid #333; background-color:#000 }
html[dir=rtl] .kl-skin--dark .select2-search input {background-color: #000 }
.kl-skin--dark .select2-search input.select2-active {background-color: #000 }
.kl-skin--dark .select2-container-active .select2-choice,
.kl-skin--dark .select2-container-active .select2-choices {border: 1px solid #999; }
.kl-skin--dark .select2-dropdown-open .select2-choice {-webkit-box-shadow: 0 1px 0 #000 inset; box-shadow: 0 1px 0 #000 inset; }
.kl-skin--dark .select2-dropdown-open .select2-choice .select2-arrow b:after {border-bottom-color: #999; }
.kl-skin--dark .select2-dropdown-open.select2-drop-above .select2-choice,
.kl-skin--dark .select2-dropdown-open.select2-drop-above .select2-choices {border: 1px solid #999; }
.kl-skin--dark .select2-results {background: #050505; }
.kl-skin--dark .select2-results .select2-highlighted {background: #0E0E0E; color: #fff; }
.kl-skin--dark .select2-results li em {background: #010021; }
.kl-skin--dark .select2-results .select2-highlighted ul {background: #000; color: #fff }
.kl-skin--dark .select2-results .select2-ajax-error,
.kl-skin--dark .select2-results .select2-no-results,
.kl-skin--dark .select2-results .select2-searching,
.kl-skin--dark .select2-results .select2-selection-limit {background: #0B0B0B; }
.kl-skin--dark .select2-results .select2-disabled.select2-highlighted {color: #999; background: #0B0B0B; }
.kl-skin--dark .select2-results .select2-disabled {background: #0B0B0B; }
.kl-skin--dark .select2-more-results.select2-active {background-color: #0B0B0B }
.kl-skin--dark .select2-more-results {background: #0B0B0B; }
.kl-skin--dark .select2-container.select2-container-disabled .select2-choice {background-color: #0B0B0B; border: 1px solid #222; }
.kl-skin--dark .select2-container.select2-container-disabled .select2-choice .select2-arrow {background-color: #0B0B0B; }
.kl-skin--dark .select2-container-multi .select2-choices {border: 1px solid #333; background-color: #000; }
.kl-skin--dark .select2-container-multi.select2-container-active .select2-choices {border: 1px solid #999; }
.kl-skin--dark .select2-container-multi .select2-choices .select2-search-field input.select2-active {background-color: #000!important }
.kl-skin--dark .select2-default {color: #999!important }
.kl-skin--dark .select2-container-multi .select2-choices .select2-search-choice {color: #ccc; background-color: #1B1B1B }
.kl-skin--dark .select2-container-multi .select2-choices .select2-search-choice-focus {background: #2B2B2B }
.kl-skin--dark .select2-container-multi.select2-container-disabled .select2-choices {background-color: #0B0B0B; border: 1px solid #222; }
.kl-skin--dark .select2-container-multi.select2-container-disabled .select2-choices .select2-search-choice {border: 1px solid #222; background-color: #0B0B0B }

/* Archive Element */
.zn_woo_archive_elemenent {width:100%;}

/* Other plugins */

/* YITH Ajax Nav. */
.woocommerce .widget_layered_nav ul li {margin-bottom:5px}
.woocommerce .widget_layered_nav ul li a {font-weight: 600; color: #45474d; line-height: 1.4;padding: 7px 0; text-decoration: none;}
.woocommerce .widget_layered_nav ul li:not(.chosen) a:before {content: ''; display: inline-block; width: 10px; height: 10px; border: 1px solid #cbcbcb; margin-right: 11px; border-radius: 2px; }
.woocommerce .widget_layered_nav .count { font-size: 100%; opacity: .5; }
.woocommerce .widget_layered_nav .count:before {content:'(';}
.woocommerce .widget_layered_nav .count:after {content:')';}


/* Added to cart panel */
.kl-addedtocart {position: fixed; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.2); left: 0; top: 0; }
.kl-addedtocart-container {position: relative; top: 50%; left: 50%; -webkit-transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%); width: 540px; background: #FFF; padding: 80px 20px; text-align: center; color:#000; }
.kl-addedtocart-image {margin-bottom: 20px;}
.kl-addedtocart-title {font-size: 20px; font-weight: bold; margin-bottom: 5px;}
.kl-addedtocart-desc {font-size: 16px; margin-bottom: 20px;}
.kl-addedtocart-price {font-size: 22px; font-weight: 700;}
.kl-addedtocart-checkout {margin-top: 50px;}
.kl-addedtocart-close {display:block; position: absolute; right:40px; top:40px; -webkit-transform:rotate(45deg); -ms-transform:rotate(45deg); transform:rotate(45deg); width: 20px;height: 20px; cursor: pointer;}
.kl-addedtocart-close:before,
.kl-addedtocart-close:after {content:''; position: absolute;top: 50%;left: 0; width:20px; height: 2px; background-color: #000;}
.kl-addedtocart-close:after {-webkit-transform:rotate(90deg); -ms-transform:rotate(90deg); transform:rotate(90deg);}

/* DARK Added to cart panel */
.kl-skin--dark .kl-addedtocart {background: rgba(255, 255, 255, 0.2); }
.kl-skin--dark .kl-addedtocart-container {background: #000; color:#FFF; }
.kl-skin--dark .kl-addedtocart-close:before,
.kl-skin--dark .kl-addedtocart-close:after {background-color: #FFF;}

@media (max-width: 540px){
    .kl-addedtocart-container {width:95%;}
}

/***
 Product in listing - Classic Style
 Single & with nesting styles because product listing is also adeed into the shop-latest tabs ;
 TODO: reduce nesting (once Woocommerce is updated) ;
 */

/* Product in listing - Image */
.product-list-item > a,
.woocommerce ul.products li.product .product-list-item > a {display: block; position: relative; }
.product-list-item .kw-prodimage,
.woocommerce ul.products li.product .product-list-item .kw-prodimage {text-align:center; overflow: hidden; position:relative; z-index:0; display: block;}
.product-list-item .kw-prodimage-img,
.woocommerce ul.products li.product .product-list-item .kw-prodimage-img,
.woocommerce ul.products li.product .product-list-item .kw-prodimage-img {margin-bottom: 0; width: auto; margin: 0 auto; vertical-align: middle; opacity: 1; -webkit-transition: opacity 0.3s; transition: opacity 0.3s;  -webkit-backface-visibility:hidden;}
.woocommerce ul.products li.product a img { margin-bottom: 0 }
/* Product in listing - Rating */
.product-list-item .star-rating,
.woocommerce ul.products li.product .product-list-item .star-rating {overflow: hidden; position: absolute; right:20px; bottom: 18px; height: 1em; line-height: 1; font-size: 10px; width: 5.4em; color: #CACACA;font-family: star }
.product-list-item .star-rating {bottom:26px;}
.product-list-item .star-rating:before,
.woocommerce ul.products li.product .product-list-item .star-rating:before {content: "\73\73\73\73\73"; color: #E0E0E0; float: left; top: 0; left: 0; position: absolute }
.product-list-item .star-rating span,
.woocommerce ul.products li.product .product-list-item .star-rating span {overflow: hidden; float: left; top: 0; left: 0; position: absolute; padding-top: 1.5em }
.product-list-item .star-rating span:before,
.woocommerce ul.products li.product .product-list-item .star-rating span:before {content: "\53\53\53\53\53"; top: 0; position: absolute; left: 0 }

.product-list-item .kw-prodimage-img:not(:only-child),
.woocommerce ul.products li.product .product-list-item .kw-prodimage-img:not(:only-child) {position:relative; z-index:1;}
.product-list-item .kw-prodimage-img-secondary,
.woocommerce ul.products li.product .product-list-item .kw-prodimage-img-secondary {position:absolute; left:0; top:0; opacity:0; -webkit-transition: opacity 0.4s; transition: opacity 0.4s; left: 50%; -webkit-transform: translateX(-50%); -ms-transform: translateX(-50%); transform: translateX(-50%); -webkit-backface-visibility:hidden; }
.product-list-item:hover .kw-prodimage-img-secondary,
.woocommerce ul.products li.product .product-list-item:hover .kw-prodimage-img-secondary {opacity:1; z-index:1;}
.product-list-item:hover .kw-prodimage-img:not(:only-child),
.woocommerce ul.products li.product .product-list-item:hover .kw-prodimage-img:not(:only-child) {opacity:0;}
.product-list-item .kw-prodimage-img[data-src],
.woocommerce ul.products li.product .product-list-item .kw-prodimage-img[data-src] {opacity: 0; }

/* Classic Products */

.product-list-item.prod-layout-classic,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic {display:block; position:relative; background: #ffffff; background: -webkit-gradient(radial, center center, 0, center center, 100%, color-stop(61%,#ffffff), color-stop(100%,#ededed)); background: -webkit-radial-gradient(center, ellipse cover,  #ffffff 61%,#ededed 100%); background: -webkit-radial-gradient(center, ellipse, #ffffff 0%, #ffffff 50%, #ededed 100%); background: radial-gradient(ellipse at center,#ffffff 0%,  #ffffff 50%,#ededed 100%); }
.product-list-item.prod-layout-classic:before,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic:before {content:" "; position:absolute; left:0; top:0; z-index: 1; width:100%;height: 100%; pointer-events: none; box-shadow:inset 0 0 0 2px #e8e8e8; -webkit-transition: all 0.2s ease-out; transition: all 0.2s ease-out;}

.no-csspointerevents .product-list-item.prod-layout-classic:before,
.no-csspointerevents .woocommerce ul.products li.product .product-list-item.prod-layout-classic:before {display:none;}

/* Product in listing - Details */
.product-list-item.prod-layout-classic .kw-details,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .kw-details { padding:20px 20px 20px; position: relative; -webkit-transition: all 0.2s ease-out; transition: all 0.2s ease-out; background:#fff;}
.product-list-item.prod-layout-classic .kw-details-title,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .kw-details-title {font-size:16px; line-height:1.3; margin:0 0 10px; padding: 0; font-weight: 300; min-height: 40px; }
.product-list-item.prod-layout-classic .kw-details-title ,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .kw-details-title ,
.product-list-item.prod-layout-classic .kw-details-title a,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .kw-details-title a {color:#2f2f2f; -webkit-transition: all 0.2s ease-out; transition: all 0.2s ease-out;}
/* Product in listing - Description */
.product-list-item.prod-layout-classic .kw-details-desc,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .kw-details-desc {font-size:12px; color:#939393; line-height:1.4; margin-bottom:10px; }
.product-list-item.prod-layout-classic .kw-details-desc,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .kw-details-desc {display: block; clear: both;position: relative; height: 60px; overflow: hidden;}
.product-list-item.prod-layout-classic .kw-details-desc:after,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .kw-details-desc:after {content:''; position:absolute; left: -5px; right: -5px; bottom: -10px; height: 75%; width:100%; -webkit-transition: all 0.2s ease-out; transition: all 0.2s ease-out; background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0)), color-stop(100%,#fff)); background: -webkit-linear-gradient(top,  rgba(255,255,255,0) 0%,#fff 100%); background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, #fff 100%); background: linear-gradient(to bottom,  rgba(255,255,255,0) 0%,#fff 100%);}
.product-list-item.prod-layout-classic:hover .kw-details-desc:after,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic:hover .kw-details-desc:after { background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0)), color-stop(100%,#edecec)); background: -webkit-linear-gradient(top,  rgba(255,255,255,0) 0%,#edecec 100%); background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, #edecec 100%); background: linear-gradient(to bottom,  rgba(255,255,255,0) 0%,#edecec 100%);}
/* Product in listing - Actions */
.kw-actions {display:inline-block;}
.product-list-item.prod-layout-classic .kw-actions,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .kw-actions {text-align:right; position:absolute; right:0; bottom:10px; width:auto; overflow:hidden;line-height: 1; z-index: 0; padding:10px 0; -webkit-transition: all 0.2s ease-out; transition: all 0.2s ease-out;}
.product-list-item.prod-layout-classic .kw-actions a,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .kw-actions a { text-transform: uppercase; display: inline-block; background: #CD2122; color: #fff; font-size: 10px; line-height: 1; padding: 6px 10px; white-space: nowrap; margin-bottom: 3px; position: relative; float: right; clear: right; font-weight: 600; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2); opacity: 0; -webkit-transition: all .3s ease-out; transition: all .3s ease-out; -webkit-transform: translateX(100%); -ms-transform: translateX(100%); transform: translateX(100%);}
.product-list-item.prod-layout-classic:hover .kw-actions a,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic:hover .kw-actions a { opacity: 1; -webkit-transform: translateX(0); -ms-transform: translateX(0); transform: translateX(0); }
.product-list-item.prod-layout-classic .kw-actions a:hover,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .kw-actions a:hover {background:#333; }
.product-list-item.prod-layout-classic .kw-actions a.loading:before,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .kw-actions a.loading:before {background: url("../../images/ajax-loader.gif") no-repeat scroll center center rgba(255, 255, 255, 0.65); bottom: 0; content: ""; left: 0; position: absolute; right: 0; top: 0; }

/* Product in listing - Price */
.product-list-item.prod-layout-classic .price,
.product-list-item.prod-layout-classic .price ins,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .price,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .price ins {color: #282828; font-size: 18px; font-weight: 600; line-height: 1 ;margin-bottom: 0; text-decoration: none;}
.product-list-item.prod-layout-classic .price del span,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .price del {font-weight:normal; display:inline-block; }
.product-list-item.prod-layout-classic .price del span,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .price del span {position: relative; color: #000; margin-right: 5px; text-decoration: line-through; }
.product-list-item.prod-layout-classic .price del,
.product-list-item.prod-layout-classic .price ins,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .price del,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic .price ins {font-size:80%}

/* Product in listing - Hover item */
.product-list-item.prod-layout-classic:hover:before,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic:hover:before {box-shadow:inset 0 0 0 4px #9c9c9c;}
.product-list-item.prod-layout-classic:hover .kw-details,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic:hover .kw-details {background:#edecec;}
.product-list-item.prod-layout-classic:hover .kw-details-title,
.woocommerce ul.products li.product .product-list-item.prod-layout-classic:hover .kw-details-title {color:#CD2122;}

/* DARK Product listing */
.kl-skin--dark .product-list-item.prod-layout-classic,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic {background: #000; background: -webkit-gradient(radial, center center, 0, center center, 100%, color-stop(61%,#000), color-stop(100%,#121212)); background: -webkit-radial-gradient(center, ellipse cover,  #000 61%,#121212 100%); background: -webkit-radial-gradient(center, ellipse, #000 0%, #000 50%, #121212 100%); background: radial-gradient(ellipse at center,#000 0%,  #000 50%,#121212 100%); }
.kl-skin--dark .product-list-item.prod-layout-classic:before,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic:before {box-shadow:inset 0 0 0 2px #171717;}
.kl-skin--dark .product-list-item.prod-layout-classic .kw-details,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic .kw-details { background:#000;}
.kl-skin--dark .product-list-item.prod-layout-classic .kw-details-title ,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic .kw-details-title ,
.kl-skin--dark .product-list-item.prod-layout-classic .kw-details-title a,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic .kw-details-title a {color:#D0D0D0; }
.kl-skin--dark .product-list-item.prod-layout-classic .kw-details-desc,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic .kw-details-desc {color:#6C6C6C; }
.kl-skin--dark .product-list-item.prod-layout-classic .kw-details-desc:after,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic .kw-details-desc:after { background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,#000)); background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,#000 100%); background: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%, #000 100%); background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,#000 100%);}
.kl-skin--dark .product-list-item.prod-layout-classic:hover .kw-details-desc:after,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic:hover .kw-details-desc:after { background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,#121313)); background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,#121313 100%); background: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%, #121313 100%); background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,#121313 100%);}
.kl-skin--dark .product-list-item.prod-layout-classic .kw-actions a,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic .kw-actions a {color: #000; box-shadow: 0px 4px 15px rgba(0,0,0, 0.5);}
.kl-skin--dark .product-list-item.prod-layout-classic .kw-actions a:hover,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic .kw-actions a:hover {background:#CCCCCC; }
.kl-skin--dark .product-list-item.prod-layout-classic .kw-actions a.loading:before,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic .kw-actions a.loading:before {background-color: rgba(0, 0, 0, 0.65);}
.kl-skin--dark .product-list-item.prod-layout-classic .price,
.kl-skin--dark .product-list-item.prod-layout-classic .price ins,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic .price,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic .price ins {color: #D7D7D7; }
.kl-skin--dark .product-list-item.prod-layout-classic .price del span,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic .price del span {color: #fff;}
.kl-skin--dark .product-list-item.prod-layout-classic .star-rating,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic .star-rating {color: #353535; }
.kl-skin--dark .product-list-item.prod-layout-classic .star-rating:before,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic .star-rating:before {color: #1F1F1F;}
.kl-skin--dark .product-list-item.prod-layout-classic:hover:before,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic:hover:before {box-shadow:inset 0 0 0 4px #636363;}
.kl-skin--dark .product-list-item.prod-layout-classic:hover .kw-details,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-classic:hover .kw-details {background:#121313;}


/* Style2 Products in listing */
.product-list-item.prod-layout-style2,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 {display:block; position:relative; background: #ffffff; -webkit-transition:box-shadow .15s ease-out; transition: box-shadow .15s ease-out; }
.product-list-item.prod-layout-style2:hover,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2:hover { box-shadow: 8px 15px 40px rgba(0,0,0,0.15); }
/* Product in listing - Details */
.product-list-item.prod-layout-style2 .kw-details,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .kw-details { padding:25px 30px 60px; position: relative;}
.product-list-item.prod-layout-style2 .kw-details-title,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .kw-details-title {font-size:16px; line-height:1.5; margin:0 0 10px; padding: 0; font-weight: 700; min-height: 40px; font-family: inherit; }
.product-list-item.prod-layout-style2 .kw-details-title ,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .kw-details-title ,
.product-list-item.prod-layout-style2 .kw-details-title a,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .kw-details-title a {color:#2f2f2f; -webkit-transition: all 0.2s ease-out; transition: all 0.2s ease-out;}
/* Product in listing - Description */
.product-list-item.prod-layout-style2 .kw-details-desc,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .kw-details-desc {font-size:12px; color:#999999; line-height:1.6; margin-bottom:10px; }
/* Product in listing - Actions */
.product-list-item.prod-layout-style2 .kw-actions,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .kw-actions {position:absolute; right:0; bottom:0; width:auto;}
.product-list-item.prod-layout-style2 .kw-actions a,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .kw-actions a { width:50px; height:50px; display: block; float:left; text-indent: 100%; white-space: nowrap; overflow: hidden;}
.product-type-variable  .product-list-item.prod-layout-style2 .kw-actions .actions-addtocart,
.woocommerce ul.products li.product.product-type-variable  .product-list-item.prod-layout-style2 .kw-actions .actions-addtocart,
.outofstock .product-list-item.prod-layout-style2 .kw-actions .actions-addtocart,
.woocommerce ul.products li.product.outofstock .product-list-item.prod-layout-style2 .kw-actions .actions-addtocart,
.product-list-item.prod-layout-style2 .kw-actions .actions-moreinfo,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .kw-actions .actions-moreinfo { background-image: url("../../images/products_listing_icons/ico-more-listing-dark.svg"); background-repeat: no-repeat background-position:center; border-left:1px solid #f9f6f6; }
.product-list-item.prod-layout-style2 .kw-actions .actions-addtocart,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .kw-actions .actions-addtocart { background-image: url("../../images/products_listing_icons/ico-cart-listing-dark.svg"); background-repeat: no-repeat background-position:center; position: relative; }
.product-list-item.prod-layout-style2 .kw-actions .actions-addtocart.added,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .kw-actions .actions-addtocart.added { background-image: url("../../images/products_listing_icons/ico-cart-added-listing-dark.svg") }
.product-list-item.prod-layout-style2 .kw-actions .added_to_cart.wc-forward,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .kw-actions .added_to_cart.wc-forward {display: none;}

.product-list-item.prod-layout-style2 .kw-actions a:hover,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .kw-actions a:hover {background-color: #f2f2f2; }
.product-list-item.prod-layout-style2 .kw-actions a.loading:before,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .kw-actions a.loading:before {background: url("../../images/ajax-loader.gif") no-repeat scroll center center rgba(255, 255, 255, 0.9); bottom: 0; content: ""; left: 0; position: absolute; right: 0; top: 0; }
/* Product in listing - Price */
.product-list-item.prod-layout-style2 .price,
.product-list-item.prod-layout-style2 .price ins,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .price,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .price ins {color: #282828; font-size: 18px; font-weight: 600; line-height: 1 ;margin-bottom: 0; text-decoration: none;}
.product-list-item.prod-layout-style2 .price del span,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .price del {font-weight:normal; display:inline-block; }
.product-list-item.prod-layout-style2 .price del span,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .price del span {position: relative; color: #000; margin-right: 5px; text-decoration: line-through; }
.product-list-item.prod-layout-style2 .price del,
.product-list-item.prod-layout-style2 .price ins,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .price del,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .price ins {font-size:80%}
/* Rating */
.product-list-item.prod-layout-style2 .star-rating,
.woocommerce ul.products li.product .product-list-item.prod-layout-style2 .star-rating {right:auto; left:30px;}

/* DARK Style2 Products in listing */
.kl-skin--dark .product-list-item.prod-layout-style2,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-style2 {background: #000; }
/* Product in listing - Details */
.kl-skin--dark .product-list-item.prod-layout-style2 .kw-details-title ,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-style2 .kw-details-title ,
.kl-skin--dark .product-list-item.prod-layout-style2 .kw-details-title a,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-style2 .kw-details-title a {color:#D0D0D0;}
/* Product in listing - Description */
.kl-skin--dark .product-list-item.prod-layout-style2 .kw-details-desc,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-style2 .kw-details-desc {color:#999;}
/* Product in listing - Actions */
.kl-skin--dark .product-list-item.prod-layout-style2 .kw-actions .actions-moreinfo,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-style2 .kw-actions .actions-moreinfo { background-image: url("../../images/products_listing_icons/ico-more-listing-light.svg"); border-left-color:#151515; }
.kl-skin--dark .product-list-item.prod-layout-style2 .kw-actions .actions-addtocart,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-style2 .kw-actions .actions-addtocart { background-image: url("../../images/products_listing_icons/ico-cart-listing-light.svg"); }
.kl-skin--dark .product-list-item.prod-layout-style2 .kw-actions .actions-addtocart.added,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-style2 .kw-actions .actions-addtocart.added { background-image: url("../../images/products_listing_icons/ico-cart-added-listing-light.svg") }
.kl-skin--dark .product-list-item.prod-layout-style2 .kw-actions a:hover,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-style2 .kw-actions a:hover {background-color: #0D0D0D; }
.kl-skin--dark .product-list-item.prod-layout-style2 .kw-actions a.loading:before,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-style2 .kw-actions a.loading:before {background-color:rgba(0, 0, 0, 0.9); }
/* Product in listing - Price */
.kl-skin--dark .product-list-item.prod-layout-style2 .price,
.kl-skin--dark .product-list-item.prod-layout-style2 .price ins,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-style2 .price,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-style2 .price ins {color: #D7D7D7;}
.kl-skin--dark .product-list-item.prod-layout-style2 .price del span,
.kl-skin--dark ul.products li.product .product-list-item.prod-layout-style2 .price del span {color: #fff; }


/* Add to cart inline */
.add_to_cart_inline .woocommerce-Price-amount {font-weight: 700;font-size: 16px; vertical-align: middle;}
.add_to_cart_inline .kw-actions {vertical-align: middle;}
.add_to_cart_inline .kw-actions a {margin-left: 10px;text-transform: uppercase;padding: 4px 10px;font-size: 12px !important;}


/* Woocommerce Archive columns */
.woocommerce .sigma-wc-cols--3 ul.products li.product { width: 33%; }
.woocommerce .sigma-wc-cols--4 ul.products li.product { width: 25%; }
.woocommerce .sigma-wc-cols--5 ul.products li.product { width: 20%; }
.woocommerce .sigma-wc-cols--6 ul.products li.product { width: 16.666%; }

@media (max-width: 1199px) {
    .woocommerce .sigma-wc-cols--5 ul.products li.product,
    .woocommerce .sigma-wc-cols--6 ul.products li.product { width: 25%; }
    .woocommerce .sigma-wc-cols--5 ul.products li.product.first,
    .woocommerce .sigma-wc-cols--6 ul.products li.product.first { clear: none !important; }
}

@media (max-width: 991px) {
    .woocommerce .sigma-productlist-wrapper ul.products li.product { width: 33.333%; }
    .woocommerce .sigma-wc-cols--4 ul.products li.product.first { clear: none !important; }
}

@media (max-width: 767px) {
    .woocommerce .sigma-productlist-wrapper ul.products li.product { width: 50%; }
}

@media (max-width: 479px) {
    .woocommerce .sigma-productlist-wrapper ul.products li.product { width: 100%; }
}

@media (min-width: 992px) and (max-width: 1199px) {
    .woocommerce .sigma-productlist-wrapper:not(.sigma-wc-cols--3) ul.products li.product:nth-child(4n+1) { clear: both !important; }
}

@media (min-width: 768px) and (max-width: 991px) {
    .woocommerce .sigma-productlist-wrapper ul.products li.product:nth-child(3n+1) { clear: both !important; }
}

@media (min-width: 480px) and (max-width: 767px) {
    .woocommerce .sigma-productlist-wrapper ul.products li.product:nth-child(2n+1) { clear: both !important; }
}

@media (min-width: 1200px) {
    .woocommerce .sigma-wc-cols--5 ul.products li.product .star-rating,
    .woocommerce .sigma-wc-cols--6 ul.products li.product .star-rating { position: relative; right: auto; bottom: 10px }
}






h1,.page-title,.h1-typography {font-family:"Open Sans", Helvetica, Arial, sans-serif;;font-size:36px;line-height:40px;font-weight:400;font-style:normal;}h2,.page-subtitle,.subtitle,.h2-typography {font-family:"Open Sans", Helvetica, Arial, sans-serif;;font-size:30px;line-height:40px;font-weight:400;font-style:normal;}h3,.h3-typography {font-family:"Open Sans", Helvetica, Arial, sans-serif;;font-size:24px;line-height:40px;font-weight:400;font-style:normal;}h4,.h4-typography {font-family:"Open Sans", Helvetica, Arial, sans-serif;;font-size:18px;line-height:28px;font-weight:400;font-style:normal;}h5,.h5-typography {font-family:"Open Sans", Helvetica, Arial, sans-serif;;font-size:14px;line-height:20px;font-weight:400;font-style:normal;}h6,.h6-typography {font-family:"Open Sans", Helvetica, Arial, sans-serif;;font-size:12px;line-height:20px;font-weight:400;font-style:normal;}body{font-family:"Open Sans", Helvetica, Arial, sans-serif;;font-size:16px;line-height:22px;}.site-footer {font-family:"Open Sans", Helvetica, Arial, sans-serif;;font-size:16px;line-height:22px;color:;}body {color:#000000;}a {color:#061947;}a:focus,a:hover {color:#4390bc;}.element-scheme--light {color:#000000;}.element-scheme--light a {color:#061947;}.element-scheme--light a:hover,.element-scheme--light .element-scheme__linkhv:hover {color:#4390bc;}.element-scheme--light .element-scheme__hdg1 { color:#323232 }.element-scheme--light .element-scheme__hdg2 { color:#4b4b4b }.element-scheme--light .element-scheme__faded { color:rgba(83,83,83,0.7) }.element-scheme--dark {color:#dcdcdc;}.element-scheme--dark a {color:#ffffff;}.element-scheme--dark a:hover,.element-scheme--dark .element-scheme__linkhv:hover {color:#eee;}.element-scheme--dark .element-scheme__hdg1 { color:#ffffff }.element-scheme--dark .element-scheme__hdg2 { color:#f2f2f2 }.element-scheme--dark .element-scheme__faded { color:rgba(220,220,220,0.7) }body #page_wrapper ,body.boxed #page_wrapper {background-repeat:repeat;background-position:left top;background-attachment:scroll;}@media (max-width:992px) {#main-menu,.zn-megaMenuSmartArea-content { display:none !important;}.site-header.style7 .main-menu-wrapper {margin-right:auto;}}@media (min-width:993px) {.zn-res-menuwrapper { display:none;}}.site-logo-img {max-width:none;}.uh_zn_def_header_style ,.zn_def_header_style ,.page-subheader.zn_def_header_style ,.kl-slideshow.zn_def_header_style ,.page-subheader.uh_zn_def_header_style ,.kl-slideshow.uh_zn_def_header_style {background-color:#0042b6;}.page-subheader.zn_def_header_style .bgback ,.kl-slideshow.zn_def_header_style .bgback ,.page-subheader.uh_zn_def_header_style .bgback ,.kl-slideshow.uh_zn_def_header_style .bgback{}.page-subheader.zn_def_header_style,.page-subheader.uh_zn_def_header_style {min-height:250px;height:250px;}.page-subheader.zn_def_header_style .ph-content-wrap,.page-subheader.uh_zn_def_header_style .ph-content-wrap { padding-top:170px; }.page-subheader.zn_def_header_style ,.kl-slideshow.zn_def_header_style,.page-subheader.uh_zn_def_header_style ,.kl-slideshow.uh_zn_def_header_style {}.page-subheader.uh_light_blue_-_flat .bgback , .kl-slideshow.uh_light_blue_-_flat .bgback {}.uh_light_blue_-_flat .th-sparkles , .kl-slideshow.uh_light_blue_-_flat .th-sparkles{display:none}.page-subheader.uh_light_blue_-_flat , .kl-slideshow.uh_light_blue_-_flat {background-color:#0042b6;}.page-subheader.uh_light_blue_-_flat.page-subheader--inherit-hp{height:300px; min-height:300px;}.page-subheader.uh_light_blue_-_flat.page-subheader--inherit-hp .ph-content-wrap {padding-top:170px;}@media screen and (min-width:992px) and (max-width:1199px) {.page-subheader.uh_light_blue_-_flat.page-subheader--inherit-hp{}.page-subheader.uh_light_blue_-_flat.page-subheader--inherit-hp .ph-content-wrap {}}@media screen and (min-width:768px) and (max-width:991px) {.page-subheader.uh_light_blue_-_flat.page-subheader--inherit-hp{}.page-subheader.uh_light_blue_-_flat.page-subheader--inherit-hp .ph-content-wrap {}}@media screen and (max-width:767px) {.page-subheader.uh_light_blue_-_flat.page-subheader--inherit-hp{}.page-subheader.uh_light_blue_-_flat.page-subheader--inherit-hp .ph-content-wrap {}}.page-subheader.uh_flat_with_sparkles .bgback , .kl-slideshow.uh_flat_with_sparkles .bgback {}.uh_flat_with_sparkles .th-sparkles , .kl-slideshow.uh_flat_with_sparkles .th-sparkles {display:block}.page-subheader.uh_flat_with_sparkles , .kl-slideshow.uh_flat_with_sparkles {background-color:#0042b6;}.page-subheader.uh_flat_with_sparkles.page-subheader--inherit-hp{height:300px; min-height:300px;}.page-subheader.uh_flat_with_sparkles.page-subheader--inherit-hp .ph-content-wrap {padding-top:170px;}@media screen and (min-width:992px) and (max-width:1199px) {.page-subheader.uh_flat_with_sparkles.page-subheader--inherit-hp{}.page-subheader.uh_flat_with_sparkles.page-subheader--inherit-hp .ph-content-wrap {}}@media screen and (min-width:768px) and (max-width:991px) {.page-subheader.uh_flat_with_sparkles.page-subheader--inherit-hp{}.page-subheader.uh_flat_with_sparkles.page-subheader--inherit-hp .ph-content-wrap {}}@media screen and (max-width:767px) {.page-subheader.uh_flat_with_sparkles.page-subheader--inherit-hp{}.page-subheader.uh_flat_with_sparkles.page-subheader--inherit-hp .ph-content-wrap {}}.page-subheader.uh_flat_redish .bgback , .kl-slideshow.uh_flat_redish .bgback {}.uh_flat_redish .th-sparkles , .kl-slideshow.uh_flat_redish .th-sparkles{display:none}.page-subheader.uh_flat_redish , .kl-slideshow.uh_flat_redish {background-color:#db4437;}.page-subheader.uh_flat_redish.page-subheader--inherit-hp{height:300px; min-height:300px;}.page-subheader.uh_flat_redish.page-subheader--inherit-hp .ph-content-wrap {padding-top:170px;}@media screen and (min-width:992px) and (max-width:1199px) {.page-subheader.uh_flat_redish.page-subheader--inherit-hp{}.page-subheader.uh_flat_redish.page-subheader--inherit-hp .ph-content-wrap {}}@media screen and (min-width:768px) and (max-width:991px) {.page-subheader.uh_flat_redish.page-subheader--inherit-hp{}.page-subheader.uh_flat_redish.page-subheader--inherit-hp .ph-content-wrap {}}@media screen and (max-width:767px) {.page-subheader.uh_flat_redish.page-subheader--inherit-hp{}.page-subheader.uh_flat_redish.page-subheader--inherit-hp .ph-content-wrap {}}.page-subheader.uh_neutral_color .bgback , .kl-slideshow.uh_neutral_color .bgback {}.uh_neutral_color .th-sparkles , .kl-slideshow.uh_neutral_color .th-sparkles{display:none}.page-subheader.uh_neutral_color , .kl-slideshow.uh_neutral_color {background-color:#607d8b;}.page-subheader.uh_neutral_color.page-subheader--inherit-hp{height:300px; min-height:300px;}.page-subheader.uh_neutral_color.page-subheader--inherit-hp .ph-content-wrap {padding-top:170px;}@media screen and (min-width:992px) and (max-width:1199px) {.page-subheader.uh_neutral_color.page-subheader--inherit-hp{}.page-subheader.uh_neutral_color.page-subheader--inherit-hp .ph-content-wrap {}}@media screen and (min-width:768px) and (max-width:991px) {.page-subheader.uh_neutral_color.page-subheader--inherit-hp{}.page-subheader.uh_neutral_color.page-subheader--inherit-hp .ph-content-wrap {}}@media screen and (max-width:767px) {.page-subheader.uh_neutral_color.page-subheader--inherit-hp{}.page-subheader.uh_neutral_color.page-subheader--inherit-hp .ph-content-wrap {}}.page-subheader.uh_light_gray .bgback , .kl-slideshow.uh_light_gray .bgback {}.uh_light_gray .th-sparkles , .kl-slideshow.uh_light_gray .th-sparkles{display:none}.page-subheader.uh_light_gray , .kl-slideshow.uh_light_gray {background-color:#e0e0e0;}.page-subheader.uh_light_gray.page-subheader--inherit-hp{height:300px; min-height:300px;}.page-subheader.uh_light_gray.page-subheader--inherit-hp .ph-content-wrap {padding-top:170px;}@media screen and (min-width:992px) and (max-width:1199px) {.page-subheader.uh_light_gray.page-subheader--inherit-hp{}.page-subheader.uh_light_gray.page-subheader--inherit-hp .ph-content-wrap {}}@media screen and (min-width:768px) and (max-width:991px) {.page-subheader.uh_light_gray.page-subheader--inherit-hp{}.page-subheader.uh_light_gray.page-subheader--inherit-hp .ph-content-wrap {}}@media screen and (max-width:767px) {.page-subheader.uh_light_gray.page-subheader--inherit-hp{}.page-subheader.uh_light_gray.page-subheader--inherit-hp .ph-content-wrap {}}.page-subheader.uh_flat_dark_blue .bgback , .kl-slideshow.uh_flat_dark_blue .bgback {}.uh_flat_dark_blue .th-sparkles , .kl-slideshow.uh_flat_dark_blue .th-sparkles{display:none}.page-subheader.uh_flat_dark_blue , .kl-slideshow.uh_flat_dark_blue {background-color:#345370;}.page-subheader.uh_flat_dark_blue.page-subheader--inherit-hp{height:300px; min-height:300px;}.page-subheader.uh_flat_dark_blue.page-subheader--inherit-hp .ph-content-wrap {padding-top:170px;}@media screen and (min-width:992px) and (max-width:1199px) {.page-subheader.uh_flat_dark_blue.page-subheader--inherit-hp{}.page-subheader.uh_flat_dark_blue.page-subheader--inherit-hp .ph-content-wrap {}}@media screen and (min-width:768px) and (max-width:991px) {.page-subheader.uh_flat_dark_blue.page-subheader--inherit-hp{}.page-subheader.uh_flat_dark_blue.page-subheader--inherit-hp .ph-content-wrap {}}@media screen and (max-width:767px) {.page-subheader.uh_flat_dark_blue.page-subheader--inherit-hp{}.page-subheader.uh_flat_dark_blue.page-subheader--inherit-hp .ph-content-wrap {}}.m_title,.text-custom,.text-custom-hover:hover,.text-custom-after:after,.text-custom-before:before,.text-custom-parent .text-custom-child,.text-custom-parent .text-custom-child-hov:hover,.text-custom-parent-hov:hover .text-custom-child,.text-custom-parent-act.active .text-custom-active,.text-custom-a>a,.btn-lined.lined-custom,.latest_posts--4.default-style .latest_posts-link:hover .latest_posts-readon,.grid-ibx__item:hover .grid-ibx__icon,.site-header .site-header .main-nav.mainnav--active-text > ul > li.active > a,.site-header .site-header .main-nav.mainnav--active-text > ul > li:hover > a,.site-header .site-header .main-nav.mainnav--active-text > ul > li > a:hover,.preloader-pulsating-circle,.preloader-material-circle,ul.colored-list[class*="list-style"] li:before,.woocommerce-MyAccount-navigation ul li.is-active a{color:#0042b6;}.btn-lined.lined-custom:hover,#header .main-nav > ul > li.menuitem-highlight > a{ color:#003592;}.kl-main-bgcolor,.kl-main-bgcolor-after:after,.kl-main-bgcolor-before:before,.kl-main-bgcolor-hover:hover,.kl-main-bgcolor-parenthover:hover .kl-main-bgcolor-child{background-color:#0042b6;}.main-nav.mainnav--active-bg > ul > li > a:before,.main-nav .zn_mega_container li a:not(.zn_mega_title):before,.main-nav ul .zn-mega-new-item,.social-icons.sc--normal .social-icons-item:hover,.kl-cart-button .glyphicon:after,.site-header.style7 .kl-cart-button .glyphicon:after,.site-header.style8 .site-header-bottom-wrapper .kl-cta-lined,.site-header.style9 .kl-cta-lined,.kl-cta-ribbon,.cart-container .buttons .button.wc-forward,.chaser-main-menu li.active > a{background-color:#0042b6;}.action_box,.action_box.style3:before,.action_box.style3 .action_box-inner:before,.btn.btn-fullcolor,.btn.btn-fullcolor:focus,.btn.btn-fullcolor.btn-skewed:before,.circle-text-box.style3 .wpk-circle-span,.circle-text-box.style2 .wpk-circle-span::before,.circle-text-box:not(.style3) .wpk-circle-span:after,.elm-social-icons.sc--normal .elm-sc-icon:hover,.elm-searchbox--normal .elm-searchbox__submit,.elm-searchbox--transparent .elm-searchbox__submit,.hover-box:hover,.how_to_shop .number,.image-boxes.image-boxes--4 .image-boxes-title:after,.kl-flex--classic .zn_simple_carousel-arr:hover,.kl-flex--modern .flex-underbar,.kl-blog-item-overlay-more:hover,.kl-blog-related-post-link:after,.kl-ioscaption--style1 .more:before,.kl-ioscaption--style1 .more:after,.kl-ioscaption--style2 .more,.kl-ioscaption--style3.s3ext .main_title::before,.kl-ios-selectors-block.bullets2 .item.selected::before,.kl-ioscaption--style5 .klios-separator-line span,.kl-ptfcarousel-carousel-arr:hover,.kl-ptfsortable-nav-link:hover,.kl-ptfsortable-nav-item.current .kl-ptfsortable-nav-link,.latest_posts3-post-date,.latest_posts--style4.kl-style-2 .latest_posts-elm-titlew,.latest_posts--style4.kl-style-2 .latest_posts-title:after,.latest_posts--style4.default-style .latest_posts-readon,.ls__nav-item.selected,.lt-offers-item:after,.media-container__link--style-borderanim1 > i,.nivo-directionNav a:hover,.pricing-table-element .plan-column.featured .subscription-price .inner-cell,.process_steps--style1 .process_steps__intro,.process_steps--style2 .process_steps__intro,.process_steps--style2 .process_steps__intro:before,.recentwork_carousel--1 .recentwork_carousel__bg,.recentwork_carousel--2 .recentwork_carousel__title:after,.recentwork_carousel--2 .recentwork_carousel__cat,.recentwork_carousel_v2 .recentwork_carousel__plus,.recentwork_carousel_v3 .btn::before,.recentwork_carousel_v3 .recentwork_carousel__cat,.timeline_box:hover:before,.title_circle,.title_circle:before,.services_box--classic:hover .services_box__icon,.spp-el-item.active .spp-el-nav-link:before,.stepbox2-box--ok:before,.stepbox2-box--ok:after,.stepbox2-box--ok,.stepbox3-content:before,.stepbox4-number:before,.tbk--color-theme.tbk-symbol--line .tbk__symbol span,.tbk--color-theme.tbk-symbol--line_border .tbk__symbol span,.th-wowslider a.ws_next:hover,.th-wowslider a.ws_prev:hover,.zn-acc--style4 .acc-title,.zn-acc--style4 .acc-tgg-button .acc-icon:before,.zn-acc--style3 .acc-tgg-button:before,.zn_badge_sale,.zn_badge_sale:after,.elm-cmlist.elm-cmlist--v2 a:before,.elm-cmlist.elm-cmlist--v3ext a:before,.elm-custommenu--dd .elm-custommenu-pick,.shop-features .shop-feature:hover,.feature_box.style3 .box:hover,.services_box_element:hover .box .icon,.elm-social-icons.sc--normal .elm-sc-link:hover .elm-sc-icon{background-color:#0042b6;}.kl-ioscaption--style4 .more:before { background:rgba(0,66,182,0.7) }.kl-ioscaption--style4 .more:hover:before { background:rgba(0,66,182,0.9) }.zn-wc-pages-classic a.button,.zn-wc-pages-classic button.button,.zn-wc-pages-classic button.button.alt,.zn-wc-pages-classic input.button,.zn-wc-pages-classic input#button,.zn-wc-pages-classic #respond input#submit,.add_to_cart_inline .kw-actions a,.zn-wc-pages-style2 #respond input#submit.alt,.zn-wc-pages-style2 a.button.alt,.zn-wc-pages-style2 button.button.alt,.zn-wc-pages-style2 input.button.alt,.product-list-item.prod-layout-classic .kw-actions a,.woocommerce ul.products li.product .product-list-item.prod-layout-classic .kw-actions a,#bbpress-forums div.bbp-search-form input[type=submit],#bbpress-forums .bbp-submit-wrapper button,#bbpress-forums #bbp-your-profile fieldset.submit button{background-color:#0042b6;}.btn.btn-fullcolor:hover,.btn.btn-fullcolor.btn-skewed:hover:before,.cart-container .buttons .button.wc-forward:hover,.zn-wc-pages-classic a.button:hover,.zn-wc-pages-classic button.button:hover,.zn-wc-pages-classic button.button.alt:hover,.zn-wc-pages-classic input.button:hover,.zn-wc-pages-classic input#button:hover,.zn-wc-pages-classic #respond input#submit:hover,.add_to_cart_inline .kw-actions a:hover,.zn-wc-pages-style2 #respond input#submit.alt:hover,.zn-wc-pages-style2 a.button.alt:hover,.zn-wc-pages-style2 button.button.alt:hover,.zn-wc-pages-style2 input.button.alt:hover{ background-color:#003592 }.border-custom,.border-custom-after:after,.border-custom-before:before,.kl-blog-item-overlay-more:hover,.acc--style4,.acc--style4 .acc-tgg-button .acc-icon,.kl-ioscaption--style4 .more:before,.btn-lined.lined-custom,.btn.btn-bordered{ border-color:#0042b6;}.fake-loading:after{ border-color:rgba(0,66,182,0.15);}.action_box:before,.action_box:after,.site-header.style1,.site-header.style2 .site-logo-anch,.site-header.style3 .site-logo-anch,.site-header.style6,.tabs_style1 > ul.nav > li.active > a,.offline-page-container:after,.latest_posts3-post-date:after,.fake-loading:after{ border-top-color:#0042b6; }.stepbox3-box[data-align=right] .stepbox3-content:after,.vr-tabs-kl-style-1 .vr-tabs-nav-item.active .vr-tabs-nav-link,.kl-ioscaption--style2.klios-alignright .title_big,.kl-ioscaption--style2.klios-alignright .title_small,.fake-loading:after{ border-right-color:#0042b6; }.image-boxes.image-boxes--4.kl-title_style_bottom .imgboxes-border-helper,.image-boxes.image-boxes--4.kl-title_style_bottom:hover .imgboxes-border-helper,.kl-blog-full-image-link,.kl-blog-post-image-link,.site-header.style8 .site-header-bottom-wrapper,.site-header.style9,.spp-el-item.active .spp-el-nav-link:after,.statistic-box__line,.zn-sidebar-widget-title:after,.tabs_style5 > ul.nav > li.active > a,.offline-page-container,.keywordbox.keywordbox-2,.keywordbox.keywordbox-3{border-bottom-color:#0042b6}.breadcrumbs.bread-style--black li:before,.infobox2-inner,.kl-flex--classic .flex-caption,.ls--laptop .ls__item-caption,.nivo-caption,.process_steps--style1 .process_steps__intro:after,.stepbox3-box[data-align=left] .stepbox3-content:after,.th-wowslider .ws-title,.kl-ioscaption--style2 .title_big,.kl-ioscaption--style2 .title_small,html[dir="rtl"] .vr-tabs-kl-style-1 .vr-tabs-nav-item.active .vr-tabs-nav-link{border-left-color:#0042b6; }.kl-cta-ribbon .trisvg path,.kl-mask .bmask-customfill,.kl-slideshow .kl-loader svg path,.kl-slideshow.kl-loadersvg rect,.kl-diagram circle { fill:#0042b6; }.borderanim2-svg__shape,.kl-blog--layout-def_modern .kl-blog-item-comments-link:hover path,.kl-blog--layout-def_modern .kl-blog-item-more-btn:hover .svg-more-bg {stroke:#0042b6;}.hoverBorder:hover:after {box-shadow:0 0 0 5px #0042b6 inset;}.services_box--modern .services_box__icon { box-shadow:inset 0 0 0 2px #0042b6; }.services_box--modern:hover .services_box__icon {box-shadow:inset 0 0 0 40px #0042b6;}.services_box--modern .services_box__list li:before {box-shadow:0 0 0 2px #0042b6;}.services_box--modern .services_box__list li:hover:before {box-shadow:0 0 0 3px #0042b6;}.portfolio-item-overlay-imgintro:hover .portfolio-item-overlay {box-shadow:inset 0 -8px 0 0 #0042b6;}.main-nav.mainnav--active-bg > ul > li.active > a,.main-nav.mainnav--active-bg > ul > li > a:hover,.main-nav.mainnav--active-bg > ul > li:hover > a,.chaser-main-menu li.active > a,.kl-cart-button .glyphicon:after,.kl-ptfsortable-nav-link:hover,.kl-ptfsortable-nav-item.current .kl-ptfsortable-nav-link,.circlehover,.circle-text-box .wpk-circle-span,.imgboxes_style1 .hoverBorder h6{color:#fff !important;}.btn-flat,.zn-wc-pages-classic a.button,.zn-wc-pages-classic button.button,.zn-wc-pages-classic button.button.alt,.zn-wc-pages-classic input.button,.zn-wc-pages-classic input#button,.zn-wc-pages-classic #respond input#submit,.zn-wc-pages-style2 #respond input#submit.alt,.zn-wc-pages-style2 a.button.alt,.zn-wc-pages-style2 button.button.alt,.zn-wc-pages-style2 input.button.alt,.product-list-item.prod-layout-classic .kw-actions a,.woocommerce ul.products li.product .product-list-item.prod-layout-classic .kw-actions a{color:#fff !important;}.latest-posts-crs-readon,.latest_posts--4.default-style .latest_posts-readon,.latest_posts--4.kl-style-2 .latest_posts-elm-title,.latest_posts3-post-date,.action_box-text,.recentwork_carousel__link:hover .recentwork_carousel__crsl-title,.recentwork_carousel__link:hover .recentwork_carousel__cat,.stepbox2-box--ok:before,.stepbox2-box--ok:after,.stepbox2-box--ok,.stepbox2-box--ok .stepbox2-title,.kl-ioscaption--style4 .more,.image-boxes.image-boxes--1 .image-boxes-readon,.acc--style3 .acc-tgg-button:not(.collapsed):before{color:#fff;}#bbpress-forums .bbp-topics li.bbp-body .bbp-topic-title > a,.product-list-item.prod-layout-classic:hover .kw-details-title,.woocommerce ul.products li.product .product-list-item.prod-layout-classic:hover .kw-details-title,.woocommerce ul.product_list_widget li .star-rating,.woocommerce .prodpage-classic .woocommerce-product-rating .star-rating,.widget.buddypress div.item-options a.selected ,#buddypress div.item-list-tabs ul li.selected a,#buddypress div.item-list-tabs ul li.current a ,#buddypress div.activity-meta a ,#buddypress div.activity-meta a:hover,#buddypress .acomment-options a{color:#0042b6;}#buddypress form#whats-new-form p.activity-greeting:after {border-top-color:#0042b6;}#buddypress input[type=submit],#buddypress input[type=button],#buddypress input[type=reset],#buddypress .activity-list li.load-more a {background:#0042b6;}#buddypress div.item-list-tabs ul li.selected a,#buddypress div.item-list-tabs ul li.current a {border-top:2px solid #0042b6;}#buddypress form#whats-new-form p.activity-greeting,.widget.buddypress ul.item-list li:hover {background-color:#0042b6;}.kl-cta-ribbon { background-color:#03a9ea }.kl-cta-ribbon .trisvg path { fill:#03a9ea }.ctabutton { color:#fff }.logo-container .logo-infocard {background:#d3d3d3}.logo-infocard, .logo-infocard a,.logo-infocard .social-icons-item,.logo-infocard .glyphicon {color:#000000}.support-panel {background:#F0F0F0; }.support-panel,.support-panel * {color:#000000;}.site-footer {border-top-color:#FFFFFF;}.site-footer-bottom { border-top-color:#0042b6;}.main-nav > ul > li > a {font-family:"Open Sans", Helvetica, Arial, sans-serif;;line-height:14px;font-weight:700;font-style:normal;letter-spacing:;text-transform:;}.main-nav > ul > li > a {font-size:16px;}.main-nav.mainnav--active-bg > ul > li > a:before {height:16px;}.main-nav.mainnav--active-bg > ul > li.active > a:before, .main-nav.mainnav--active-bg > ul > li > a:hover:before, .main-nav.mainnav--active-bg > ul > li:hover > a:before {height:calc(16px + 16px)}.mainnav--pointer-dash.main-nav > ul > li.menu-item-has-children > a:after {bottom:calc(52% - 14px);}.site-header .main-nav.mainnav--active-text > ul > li.active > a, .site-header .main-nav.mainnav--active-text > ul > li > a:hover, .site-header .main-nav.mainnav--active-text > ul > li:hover > a {color:#03a9ea;}.main-nav.mainnav--active-bg > ul > li.active > a:before, .main-nav.mainnav--active-bg > ul > li > a:hover:before, .main-nav.mainnav--active-bg > ul > li:hover > a:before {background-color:#03a9ea;}.main-nav ul ul.sub-menu li a, .main-nav .zn_mega_container li a {font-family:Open Sans;font-size:14px;line-height:14px;font-weight:400;font-style:normal;}.main-nav .zn_mega_container li a.zn_mega_title, .main-nav div.zn_mega_container ul li:last-child > a.zn_mega_title{font-size:16px}.ff-alternative,.kl-font-alt,.kl-fontafter-alt:after,.page-title, .page-subtitle, .subtitle,.topnav-item,.topnav .menu-item > a,.zn-sidebar-widget-title,.nivo-caption,.th-wowslider .ws-title,.cart-container .cart_list li a:not(.remove) {font-family:"Montserrat", Helvetica, Arial, sans-serif;;}.ff-montserrat{font-family:"Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;}.ff-open_sans{font-family:"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;}.site-header[class*="sh-"] .topnav .topnav-item,.site-header[class*="sh-"] .topnav.social-icons .topnav-item,.site-header[class*="sh-"] .topnav .menu-item>a,.site-header[class*="sh-"] .topnav .topnav-li .glyphicon,.site-header[class*="sh-"] .kl-header-toptext,.site-header[class*="sh-"] .kl-header-toptext a { color:#ffffff ;}.site-header[class*="sh-"] .topnav .topnav-item:hover,.site-header[class*="sh-"] .topnav.social-icons .topnav-item:hover,.site-header[class*="sh-"] .topnav .menu-item>a:hover,.site-header[class*="sh-"] .kl-header-toptext a:hover { color:#0042b6 ;}@media (max-width:767px) {.site-header {background-color:#03a9ea !important;}}@font-face {font-family:'glyphicons_halflingsregular'; font-weight:normal; font-style:normal;src:url('//www.sigmaelectronica.net/wp-content/themes/sigma/template_helpers/icons/glyphicons_halflingsregular/glyphicons_halflingsregular.eot');src:url('//www.sigmaelectronica.net/wp-content/themes/sigma/template_helpers/icons/glyphicons_halflingsregular/glyphicons_halflingsregular.eot#iefix') format('embedded-opentype'),url('//www.sigmaelectronica.net/wp-content/themes/sigma/template_helpers/icons/glyphicons_halflingsregular/glyphicons_halflingsregular.woff') format('woff'),url('//www.sigmaelectronica.net/wp-content/themes/sigma/template_helpers/icons/glyphicons_halflingsregular/glyphicons_halflingsregular.ttf') format('truetype'),url('//www.sigmaelectronica.net/wp-content/themes/sigma/template_helpers/icons/glyphicons_halflingsregular/glyphicons_halflingsregular.svg#glyphicons_halflingsregular') format('svg');}[data-zniconfam='glyphicons_halflingsregular']:before , [data-zniconfam='glyphicons_halflingsregular']{ font-family:'glyphicons_halflingsregular' !important; }[data-zn_icon]:before {content:attr(data-zn_icon)}@font-face {font-family:'kl-social-icons'; font-weight:normal; font-style:normal;src:url('//www.sigmaelectronica.net/wp-content/themes/sigma/template_helpers/icons/kl-social-icons/kl-social-icons.eot');src:url('//www.sigmaelectronica.net/wp-content/themes/sigma/template_helpers/icons/kl-social-icons/kl-social-icons.eot#iefix') format('embedded-opentype'),url('//www.sigmaelectronica.net/wp-content/themes/sigma/template_helpers/icons/kl-social-icons/kl-social-icons.woff') format('woff'),url('//www.sigmaelectronica.net/wp-content/themes/sigma/template_helpers/icons/kl-social-icons/kl-social-icons.ttf') format('truetype'),url('//www.sigmaelectronica.net/wp-content/themes/sigma/template_helpers/icons/kl-social-icons/kl-social-icons.svg#kl-social-icons') format('svg');}[data-zniconfam='kl-social-icons']:before , [data-zniconfam='kl-social-icons']{ font-family:'kl-social-icons' !important; }[data-zn_icon]:before {content:attr(data-zn_icon)}@font-face {font-family:'icomoon'; font-weight:normal; font-style:normal;src:url('//andreaarango.co/demo/sigma/wp-content/uploads/zn_fonts/icomoon/icomoon.eot');src:url('//andreaarango.co/demo/sigma/wp-content/uploads/zn_fonts/icomoon/icomoon.eot#iefix') format('embedded-opentype'),url('//andreaarango.co/demo/sigma/wp-content/uploads/zn_fonts/icomoon/icomoon.woff') format('woff'),url('//andreaarango.co/demo/sigma/wp-content/uploads/zn_fonts/icomoon/icomoon.ttf') format('truetype'),url('//andreaarango.co/demo/sigma/wp-content/uploads/zn_fonts/icomoon/icomoon.svg#icomoon') format('svg');}[data-zniconfam='icomoon']:before , [data-zniconfam='icomoon']{ font-family:'icomoon' !important; }[data-zn_icon]:before {content:attr(data-zn_icon)}.site-footer .widgettitle{ font-size:20px;font-weight:bold; border-bottom:2px solid #0042b6;padding-bottom:5px;}.site-footer{padding-top:30px;}.margen-iconos{margin-right:10px;}.subheader-maintitle{color:#ffff00 !important;}.kl-cart-button .glyphicon.kl-cart-icon:after{background-color:#cd2122 !important;}.sh-component.kl-header-toptext.kl-font-alt, div.product p.stock, .site-content div.product p.stock{font-size:16px;}.iosSlider div.item.iosslider__item:nth-child(2) h2,.iosSlider div.item.iosslider__item:nth-child(2) h3,.iosSlider div.item.iosslider__item:nth-child(3) h2,.iosSlider div.item.iosslider__item:nth-child(3) h3{text-shadow:3px 2px 2px #575757;}.iosSlider div.item.iosslider__item:nth-child(3) .more a{background-color:#ffa500} span.slide-arduino strong{color:#ffa500}.headsearch--def .header-search-button{background:rgb(255, 165, 0);}.spp-products-rows .spp-title{border-bottom:2px solid #414492;}.metodos-pago{margin:8px;}.eluidabb74176.quienes-somos {padding-top:0;}





		
		</style>
	
	
	<script type='text/javascript'>var nombres=[];var precios=[];var cantidades=[];var totales=[];var subtotal;var auxiliar=[]; var idcarros=[];</script>
	<?php for($i=0;$i<count($shika->listacompras); $i++) {?>
	<script type='text/javascript'>
		nombres.push('<?php echo($shika->listacompras[$i]->getName()); ?>');
		precios.push(<?php echo($shika->listacompras[$i]->getPrice()); ?>);
		cantidades.push(<?php echo($shika->listacompras[$i]->getCantidad()); ?>);
		totales.push('<?php echo(($shika->listacompras[$i]->getPrice())*($shika->listacompras[$i]->getCantidad())); ?>');
		idcarros.push('<?php echo($shika->listacompras[$i]->getidcarro()); ?>');
	</script>
	<?php }?>
	
	
	<script>	
	function getSubtotal(){
		var temporal=[];
		var salida=0;
		for(var i=0;i<totales.length;i++){
			temporal[i]=parseInt(totales[i]);
			salida+=temporal[i];
		}
		return salida;
	}
				
	function espia(indice,cantidad){
			//alert(indice+"##"+cantidad);
			inputs =$(".diego input");//Envio del formulario oculto
			inputs[1].value=indice;
			inputs[2].value=cantidad;
			inputs[3].value=2;// valor dos es actualizar
			$(".diego").submit();
		
			totales[indice]=precios[indice]*cantidad;
			var lisboa=$("span.portugal");
			lisboa[indice].innerHTML='<span class="woocommerce-Price-currencySymbol">$</span>'+totales[indice];
			for(var i=0;i<totales.length;i++){
				subtotal+=totales[i];
			}
			$("span.biela")[0].innerHTML='<span class="woocommerce-Price-currencySymbol">$</span>'+getSubtotal();
		}
	
	function turquia(s,t){
		var aux=s+1;
		inputs =$(".diego input");
		inputs[0].value=t;
		inputs[3].value=1;// valor uno es borrar
		$(".diego").submit();
	}
	function comprar(){
		$(".total").val(getSubtotal());
		
		var aux='';
		for(var i=0;i<cantidades.length;i++){aux += cantidades[i]+ " "+nombres[i]+";";}
		$(".descripcion").val(aux);
		
		//alert($(".total").val()+"&&&&&&&"+$(".descripcion").val());
		
		$(".infoPago").submit();
		//location.href="registro2.php";
	}
	
	

	</script>
	</head>
<body>
	<div id="bodywrapper"style="width:970px; height:400px;"> 
	<?php include 'header2.php';?>
	<div id="sectionpad" style="background-image:baner/shop.jpg"> 
	<!--		<div class="navtrail" style="background-color:red;">
				<span itemscope="" itemtype="">
				<a href="" itemprop="url">
				<span itemprop="title">Main page</span></a></span>
			</div>-->
			<?php include 'izquierda.php';?>
			<?php include 'centralcarros.php';?>
			<?php //include 'derecha.php';?>
	</div>
	</div>
	<?php// include 'desplegable.php';?>
	
	

</body></html>




