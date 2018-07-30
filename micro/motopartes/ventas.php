	<!-- Begin Salesforce Live Agent -->
	<div id="amscope_sfla_spacer" style="height: 2em;"></div><!--2-->
	<div id="amscope_sfla_container" style="display: block; min-height: 120px; width: 240px; background-color: rgb(48, 48, 48); position: fixed; z-index: 100; bottom: -120px; 
	        height: 120px; right: 10px; transition: all 0.5s ease-in-out 0s; border-top-left-radius: 10px; margin: 0px; padding: 0px;">
    	<div id="btn_sfla_chat" style="display: block; width: 136px; background-color: rgb(48, 48, 48); color: rgb(255, 255, 255); position: absolute; height: 32px; top: -31px; 
    	    font-size: 20px; line-height: 48px; border: medium none; border-top-left-radius: 10px; border-top-right-radius: 10px; font-weight: bold; right: 0px; margin: 0px; 
    	    padding: 0px 4px;">
        	<img alt="Chat" id="img_sfla_chat_online" src="micros2_files/icon_chat_128_online.png" style="border: medium none; margin: 0px; padding: 0px;">
            <img alt="Chat" id="img_sfla_chat_offline" src="micros2_files/icon_chat_128_offline.png" style="display:none; border:none; margin:0px; padding:0px;">
        </div>
    	<div id="liveagent_button_online_57337000000CdYC" style="">
            <!-- Begin Online Chat Content -->
            <div id="btn_sfla_chat_now" style="display:inline-block; width:auto; border-top:#505050 1px solid; border-left:#505050 1px solid; border-bottom:#202020 1px solid; 
                 border-right:#202020 1px solid; margin:0px; margin-top:15px; border-radius:5px;">
            	<a class="online" onclick="liveagent.startChat('57337000000CdYC')" href="javascript://Chat" style="font-size: 16px; line-height: 45px; vertical-align: middle; 
            	padding: 0px 10px; margin: 0px; display: inline-block; width: 100%; color: rgb(255, 255, 255);">Chat Now</a>
            </div>
            <p style="padding: 0px 5px; margin: 5px 0px 0px; color: rgb(255, 255, 255); font-size: 14px; line-height: 16px;">A customer service agent<br> is ready to chat</p>
            <!-- End Online Chat Content -->
        </div>
        <div id="liveagent_button_offline_57337000000CdYC" style="display:none;">
            <!-- Begin Offline Chat Content -->
            <p style="padding: 0px 5px; margin: 15px 0px; color: rgb(255, 255, 255); font-size: 14px; line-height: 16px;">No Agents are Currently Online</p>
            <a class="offline" href="" style="font-size: 16px; padding: 10px; color: rgb(255, 255, 255);">
    			Contact Us Here
            </a>
            <!-- End Offline Chat Content -->
        </div>
    </div>

	<script type="text/javascript">// <![CDATA[
            if (!window._laq) { window._laq = []; }
            window._laq.push(function(){
            	liveagent.showWhenOnline('57337000000CdYC', document.getElementById('liveagent_button_online_57337000000CdYC'));
            	liveagent.showWhenOnline('57337000000CdYC', document.getElementById('img_sfla_chat_online'));
            	liveagent.showWhenOffline('57337000000CdYC', document.getElementById('liveagent_button_offline_57337000000CdYC'));
            	liveagent.showWhenOffline('57337000000CdYC', document.getElementById('img_sfla_chat_offline'));
            });
            jQuery(document).ready(function(e) {
                jQuery('#amscope_sfla_container, #btn_sfla_chat').css({'background-color':'#303030'});
            	jQuery('#amscope_sfla_container p, #amscope_sfla_container a, #btn_sfla_chat').css({'color':'#ffffff'});
            	jQuery('#amscope_sfla_spacer').css({'height':'2em'});
            	jQuery('#amscope_sfla_container').css({'position':'fixed', 'z-index':'100', 'bottom':'-120px', 'height':'120px', 'right':'10px', 'transition':'all 0.5s ease-in-out', '-webkit-transition':'all 0.5s ease-in-out', '-moz-transition':'all 0.5s ease-in-out', '-ms-transition':'all 0.5s ease-in-out', '-o-transition':'all 0.5s ease-in-out', 'border-top-left-radius':'10px', 'margin':'0px', 'padding':'0px'});
            	jQuery('#btn_sfla_chat').css({'position':'absolute', 'height':'32px', 'top':'-31px', 'font-size':'20px', 'line-height':'48px', 'border':'none', 'border-top-left-radius':'10px', 'border-top-right-radius':'10px', 'font-weight':'bold', 'right':'0px', 'margin':'0px', 'padding':'0px 4px'});
            	jQuery('#amscope_sfla_container').hover(function(e){jQuery(this).css('bottom','0px')}, function(e){jQuery(this).css('bottom','-120px')});
            	jQuery('#btn_sfla_chat_now').hover(function(e){jQuery(this).css('background','#454545')}, function(e){jQuery(this).css('background','none')});
            });
            // ]]>
    </script>
	<!-- End Salesforce Live Agent -->
	