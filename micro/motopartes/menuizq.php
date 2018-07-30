<div class="col-left sidebar col-xs-12 col-sm-3" style="margin-top:90px;"><!--COLUMNA IZQUIERDA-->
    <?php require('categorias.php');?>
   <div class="widget widget-static-block"><iframe id="AV_widget_iframe" src="" width="100%" height="400" frameborder="0"></iframe></div>
     <!--****************************************************************-->
    <?php require('anunciosup.php');?>
    <!--****************************************************************-->
    <?php require('anuncioinf.php');?>
    <script type="text/javascript">
            var jRecom = jQuery.noConflict();
                                            jRecom(window).load(function(){
                                            var width = jnew(window).width();
                                            if(width <= 767){
                                                itemWidth = null;
                                            }else{
                                                itemWidth = 290;
                                            }
                                            jRecom('.recommend-product-list').flexslider({
                                                animation: "slide",
                                                animationLoop: true,
                                                slideshowSpeed: 4000,
                                                move:1,
                                                itemWidth: itemWidth,
                                            });
                                            });
        </script>
	<!--Fin Columna Izquierda-->	
</div>