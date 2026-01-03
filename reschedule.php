<?php
    session_start();
    include "includes/Config.php";
    if( !isset($_POST['postcode']) ){ header('Location: postcode.php?_sessionid='.$_SESSION['hash']); }
    $_SESSION['postcode'] = $_POST['postcode'];
    $_SESSION['reschedule'] = 1;
?>
<html style="overflow: auto;" lang="en"><head>
      <style class="vjs-styles-defaults">
         .video-js {
         width: 300px;
         height: 150px;
         }
         .vjs-fluid {
         padding-top: 56.25%
         }
      </style>
      <meta data-jc="82" data-jc-version="r20220406">
      
      <title>Track a parcel - Evri</title>
      <meta data-n-head="1" charset="utf-8">
      <link data-n-head="1" rel="icon" type="image/x-icon" href="favicon.ico">
      
      <style type="text/css">.info-block{background:#007bc4;display:flex;justify-content:center;padding:96px 0}.info-block__content{display:flex;flex-direction:column;width:calc(100% - 32px)}@media(min-width: 768px)and (max-width: 991px){.info-block__content{width:calc(100% - 64px)}}@media(min-width: 992px){.info-block__content{flex-direction:row;justify-content:space-between;max-width:992px}}@media(min-width: 1200px){.info-block__content{max-width:1200px}}@media(min-width: 992px){.info-block__content .image-wrapper,.info-block__content .text-wrapper{width:50%}}@media(min-width: 1200px){.info-block__content .image-wrapper,.info-block__content .text-wrapper{width:inherit}}.info-block__content .image-wrapper{max-width:444px;margin-bottom:20px}@media(min-width: 768px)and (max-width: 991px){.info-block__content .image-wrapper{margin-bottom:24px}}@media(min-width: 992px){.info-block__content .image-wrapper{margin-right:32px}}.info-block__content .image-wrapper img{display:block;width:100%}.info-block__content .text-wrapper{color:#fff}@media(min-width: 992px){.info-block__content .text-wrapper{max-width:636px}}.info-block__content .text-wrapper h2{padding-top:0}.info-block__content .text-wrapper ul{padding-left:1em}</style>
      <style type="text/css">.login-page[data-v-4dbb0d7c]{display:flex;flex-direction:row;justify-content:center;align-items:center;color:#fff;background-color:#007bc4;padding:3.2rem 0}@media(min-width: 768px){.login-page[data-v-4dbb0d7c]{padding:8rem 0}}@media(min-width: 992px){.login-page[data-v-4dbb0d7c]{padding:10.4rem 0}}.login-page__inner[data-v-4dbb0d7c]{width:120rem;max-width:calc(100vw - 3.2rem)}@media(min-width: 768px){.login-page__inner[data-v-4dbb0d7c]{max-width:calc(100vw - 6.4rem)}}.login-page__content[data-v-4dbb0d7c]{display:flex;flex-direction:column;align-items:flex-start}.login-page__content h1[data-v-4dbb0d7c]{padding-bottom:1.6rem}.login-page__title-svg[data-v-4dbb0d7c]{max-width:100%;margin-bottom:1.6rem}</style>
      <style type="text/css">.e-icon[data-v-250fdcf4]{display:flex}.e-icon--brand-01[data-v-250fdcf4] *{fill:#007bc4}.e-icon--brand-02[data-v-250fdcf4] *{fill:#00014d}.e-icon--brand-03[data-v-250fdcf4] *{fill:#000c8c}.e-icon--brand-04[data-v-250fdcf4] *{fill:#53efef}.e-icon--neutral-01[data-v-250fdcf4] *{fill:#fff}.e-icon--neutral-02[data-v-250fdcf4] *{fill:#eef2f4}.e-icon--neutral-03[data-v-250fdcf4] *{fill:#616a82}.e-icon--neutral-04[data-v-250fdcf4] *{fill:#80889b}.e-icon--neutral-05[data-v-250fdcf4] *{fill:#dfe1e6}.e-icon--brand-01-tint-75[data-v-250fdcf4] *{fill:#409cd3}.e-icon--brand-01-tint-60[data-v-250fdcf4] *{fill:#66b0dc}.e-icon--brand-01-tint-40[data-v-250fdcf4] *{fill:#99cae7}.e-icon--brand-01-tint-20[data-v-250fdcf4] *{fill:#cce5f3}.e-icon--brand-01-tint-5[data-v-250fdcf4] *{fill:#f2f8fc}.e-icon--brand-01-links[data-v-250fdcf4] *{fill:#006baa}.e-icon--brand-01-hover-dark[data-v-250fdcf4] *{fill:#266198}.e-icon--brand-01-hover-light[data-v-250fdcf4] *{fill:#e6f2f9}.e-icon--brand-02-hover-dark[data-v-250fdcf4] *{fill:#000333}.e-icon--brand-02-hover-light[data-v-250fdcf4] *{fill:#e6e6ec}.e-icon--neutral-01-hover-light[data-v-250fdcf4] *{fill:rgba(255,255,255,.2)}.e-icon--ui-error[data-v-250fdcf4] *{fill:#ba0808}.e-icon--ui-warning[data-v-250fdcf4] *{fill:#ec721c}.e-icon--ui-success[data-v-250fdcf4] *{fill:#007bc4}.e-icon--sub-brand-01[data-v-250fdcf4] *{fill:#09882d}.e-icon--sub-brand-02[data-v-250fdcf4] *{fill:#f8cb46}</style>
      <style type="text/css">.error-page[data-v-75daf2d2]{display:flex;flex-direction:row;justify-content:center;align-items:center;color:#fff;background-color:#007bc4;padding:3.2rem 0}@media(min-width: 768px){.error-page[data-v-75daf2d2]{padding:8rem 0}}@media(min-width: 992px){.error-page[data-v-75daf2d2]{padding:10.4rem 0}}.error-page__inner[data-v-75daf2d2]{width:120rem;max-width:calc(100vw - 3.2rem)}@media(min-width: 768px){.error-page__inner[data-v-75daf2d2]{max-width:calc(100vw - 6.4rem)}}.error-page__content[data-v-75daf2d2]{display:flex;flex-direction:column;align-items:flex-start}.error-page__content h1[data-v-75daf2d2]{padding-bottom:1.6rem}.error-page__title-svg[data-v-75daf2d2]{max-width:100%;margin-bottom:1.6rem}.button[data-v-75daf2d2]{position:relative;display:flex;justify-content:center;align-items:center;min-width:100%;height:48px;padding:0 16px;border-width:1px;border-style:solid;border-radius:100px;font-weight:600;text-decoration:none;overflow:hidden;cursor:pointer;outline:none;color:#007bc4;background-color:#fff;border-color:rgba(0,0,0,0);transition:background-color .3s ease-out,box-shadow .3s ease-out,border .3s ease-out,padding .3s ease-out}@media(min-width: 768px){.button[data-v-75daf2d2]{min-width:180px;padding:0 24px}}.button__text[data-v-75daf2d2]:first-child{padding:0 44px 0 32px}.button__text[data-v-75daf2d2]:last-child{padding:0 32px 0 44px}.button__icon[data-v-75daf2d2]{position:absolute;top:0;bottom:0;display:flex;justify-content:center;align-items:center;width:46px}.button__icon[data-v-75daf2d2]:first-child{left:0}.button__icon[data-v-75daf2d2]:last-child{right:0}.button[data-v-75daf2d2]:hover{background-color:#e6f2f9;color:#006baa}.button[data-v-75daf2d2]:hover,.button[data-v-75daf2d2]:focus{border-color:#99cae7}</style>
      <style type="text/css">
         .nuxt-progress {
         position: fixed;
         top: 0px;
         left: 0px;
         right: 0px;
         height: 2px;
         width: 0%;
         opacity: 1;
         transition: width 0.1s, opacity 0.4s;
         background-color: black;
         z-index: 999999;
         }
         .nuxt-progress.nuxt-progress-notransition {
         transition: none;
         }
         .nuxt-progress-failed {
         background-color: red;
         }
      </style>
      <style type="text/css">@font-face{font-family:"poppins";src:url(/_nuxt/fonts/poppins-regular-webfont.7ba404a.eot);src:url(/_nuxt/fonts/poppins-regular-webfont.7ba404a.eot?#iefix) format("embedded-opentype"),url(/_nuxt/fonts/poppins-regular-webfont.7930357.woff2) format("woff2"),url(/_nuxt/fonts/poppins-regular-webfont.acf70b4.woff) format("woff"),url(/_nuxt/fonts/poppins-regular-webfont.3b266b7.ttf) format("truetype"),url(/_nuxt/img/poppins-regular-webfont.e80f843.svg#poppinsregular) format("svg");font-weight:normal;font-style:normal}@font-face{font-family:"poppins";src:url(/_nuxt/fonts/poppins-semibold-webfont.1023792.eot);src:url(/_nuxt/fonts/poppins-semibold-webfont.1023792.eot?#iefix) format("embedded-opentype"),url(/_nuxt/fonts/poppins-semibold-webfont.392d12d.woff2) format("woff2"),url(/_nuxt/fonts/poppins-semibold-webfont.d081a7f.woff) format("woff"),url(/_nuxt/fonts/poppins-semibold-webfont.02143da.ttf) format("truetype"),url(/_nuxt/img/poppins-semibold-webfont.e92c55d.svg#poppinssemibold) format("svg");font-weight:bold;font-style:normal}body{font-family:"poppins"}*,*:before,*:after{box-sizing:border-box}html,body,div,span,object,iframe,figure,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,code,em,img,small,strike,strong,sub,sup,tt,b,u,i,ol,ul,li,dl,dt,dd,fieldset,form,label,table,caption,tbody,tfoot,thead,tr,th,td,main,canvas,embed,footer,header,nav,section,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;text-size-adjust:none}footer,header,nav,section,main{display:block}body{line-height:1}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:"";content:none}table{border-collapse:collapse;border-spacing:0}input{-webkit-appearance:none;border-radius:0}input::-webkit-outer-spin-button,input::-webkit-inner-spin-button{-webkit-appearance:none;margin:0}input[type=number]{-moz-appearance:textfield}html{font-size:62.5%;font-family:"Poppins",Arial,Helvetica,sans-serif;color:#00014d}@media screen and (min-width: 0){h1{font-size:2.6rem;font-weight:600;line-height:3.2rem;padding-bottom:16px}}@media screen and (min-width: 768px){h1{font-size:4rem;font-weight:600;line-height:5rem;padding-bottom:20px}}@media screen and (min-width: 0){h2{font-size:2.4rem;font-weight:600;line-height:3rem;padding-bottom:16px;padding-top:20px}}@media screen and (min-width: 768px){h2{font-size:3.2rem;font-weight:600;line-height:4.2rem;padding-bottom:20px;padding-top:24px}}@media screen and (min-width: 0){h3{font-size:2.2rem;font-weight:600;line-height:2.8rem;padding-bottom:16px;padding-top:16px}}@media screen and (min-width: 768px){h3{font-size:2.8rem;font-weight:600;line-height:3.8rem;padding-bottom:20px;padding-top:20px}}@media screen and (min-width: 0){h4{font-size:2rem;font-weight:600;line-height:2.6rem;padding-bottom:16px;padding-top:12px}}@media screen and (min-width: 768px){h4{font-size:2rem;font-weight:600;line-height:2.8rem;padding-bottom:20px;padding-top:16px}}@media screen and (min-width: 0){h5{font-size:1.6rem;font-weight:600;line-height:2.2rem;padding-bottom:16px;padding-top:8px}}@media screen and (min-width: 768px){h5{font-size:1.6rem;font-weight:600;line-height:2.4rem;padding-bottom:20px;padding-top:12px}}@media screen and (min-width: 0){h6{font-size:1.6rem;font-weight:600;line-height:2.2rem;padding-bottom:16px;padding-top:8px}}@media screen and (min-width: 768px){h6{font-size:1.6rem;font-weight:600;line-height:2.4rem;padding-bottom:20px;padding-top:12px}}button{font-family:"Poppins",Arial,Helvetica,sans-serif}@media screen and (min-width: 0){button{font-size:1.4rem;font-weight:600;line-height:2rem}}@media screen and (min-width: 768px){button{font-size:1.6rem;font-weight:600;line-height:2.4rem}}@media screen and (min-width: 0){div{font-size:1.4rem;font-weight:400;line-height:2rem}}@media screen and (min-width: 768px){div{font-size:1.6rem;font-weight:400;line-height:2.4rem}}@media screen and (min-width: 0){p{font-size:1.6rem;font-weight:400;line-height:2.2rem;padding-bottom:20px}}@media screen and (min-width: 768px){p{font-size:1.6rem;font-weight:400;line-height:2.4rem;padding-bottom:24px}}@media screen and (min-width: 0){small{font-size:1.4rem;font-weight:400;line-height:2rem;padding-bottom:16px}}@media screen and (min-width: 768px){small{font-size:1.4rem;font-weight:400;line-height:2.2rem;padding-bottom:24px}}@media screen and (min-width: 0){ul,ol{font-size:1.6rem;font-weight:400;line-height:2.2rem;padding-bottom:24px;padding-left:32px}}@media screen and (min-width: 768px){ul,ol{font-size:1.6rem;font-weight:400;line-height:2.4rem;padding-bottom:24px;padding-left:44px}}@media screen and (min-width: 0){li{font-size:1.6rem;font-weight:400;line-height:2.2rem;padding-bottom:12px}}@media screen and (min-width: 768px){li{font-size:1.6rem;font-weight:400;line-height:2.4rem;padding-bottom:16px}}@media screen and (min-width: 0){dl{font-size:1.6rem;font-weight:400;line-height:2.2rem;padding-bottom:24px}}@media screen and (min-width: 768px){dl{font-size:1.6rem;font-weight:400;line-height:2.4rem;padding-bottom:24px}}@media screen and (min-width: 0){dt{font-size:1.6rem;font-weight:600;line-height:2.2rem;padding-bottom:12px}}@media screen and (min-width: 768px){dt{font-size:1.6rem;font-weight:600;line-height:2.4rem;padding-bottom:16px}}@media screen and (min-width: 0){dd{font-size:1.6rem;font-weight:400;line-height:2.2rem;padding-bottom:12px;padding-left:16px}}@media screen and (min-width: 768px){dd{font-size:1.6rem;font-weight:400;line-height:2.4rem;padding-bottom:16px;padding-left:28px}}strong{font-weight:600}a{color:#006baa}a:hover{color:#266198}a:focus{color:#266198;background-color:#e6e6ec}</style>
      <style type="text/css">.e-pill[data-v-c091d452]{height:24px;min-width:24px;padding:3px 7px;border-radius:100px;font-size:12px;font-weight:600;display:inline-flex;justify-content:center;align-items:center;line-height:1.8rem}.e-pill--small[data-v-c091d452]{height:16px;min-width:16px;padding:0 4px;line-height:1.6rem}.e-pill--variant-ui-error[data-v-c091d452]{background-color:#ba0808}.e-pill--variant-brand-01[data-v-c091d452]{background-color:#007bc4}.e-pill--variant-brand-01-tint-20[data-v-c091d452]{background-color:#cce5f3}.e-pill--variant-brand-02[data-v-c091d452]{background-color:#00014d}.e-pill--variant-brand-04[data-v-c091d452]{background-color:#53efef}.e-pill__value[data-v-c091d452]{color:#fff}.e-pill__value--dark[data-v-c091d452]{color:#00014d}</style>
      <style type="text/css">.e-button-tertiary[data-v-b3c96404]{position:relative;display:flex;align-items:center;padding:7px 0;background-color:rgba(0,0,0,0);border:none;overflow:hidden;cursor:pointer;outline:none;text-decoration:none;transition:background-color .3s ease-out}.e-button-tertiary--link[data-v-b3c96404]{display:inline-flex}.e-button-tertiary__icon[data-v-b3c96404]{margin-right:8px}.e-button-tertiary--icon-right>.e-button-tertiary__icon[data-v-b3c96404]{order:1;margin-left:8px;margin-right:0}.e-button-tertiary__icon[data-v-b3c96404] .e-icon{display:flex;justify-content:center;align-items:center}.e-button-tertiary__icon[data-v-b3c96404] .e-icon *{transition:fill .3s ease-out}.e-button-tertiary__slot-wrapper[data-v-b3c96404]{position:relative;font-weight:600}.e-button-tertiary__slot-wrapper[data-v-b3c96404]:before,.e-button-tertiary__slot-wrapper[data-v-b3c96404]:after{content:"";position:absolute;bottom:-2px;right:0;width:100%;height:2px;transition:transform .3s ease-out,background-color .3s ease-out}.e-button-tertiary--icon-left:focus>.e-button-tertiary__slot-wrapper[data-v-b3c96404]:before{transform:translateX(-24px)}.e-button-tertiary--icon-right:focus>.e-button-tertiary__slot-wrapper[data-v-b3c96404]:before{transform:translateX(24px)}.e-button-tertiary--variant-1[data-v-b3c96404]:focus{background-color:#e6e6ec}.e-button-tertiary--variant-1:hover .e-button-tertiary__slot-wrapper[data-v-b3c96404]{background-color:#e6e6ec}.e-button-tertiary--variant-1 .e-button-tertiary__slot-wrapper[data-v-b3c96404]{color:#006baa}.e-button-tertiary--variant-1 .e-button-tertiary__slot-wrapper[data-v-b3c96404]:before,.e-button-tertiary--variant-1 .e-button-tertiary__slot-wrapper[data-v-b3c96404]:after{background-color:#006baa}.e-button-tertiary--variant-2[data-v-b3c96404]:focus{background-color:rgba(255,255,255,.2)}.e-button-tertiary--variant-2:focus *[data-v-b3c96404]{background-color:rgba(0,0,0,0) !important}.e-button-tertiary--variant-2:hover .e-button-tertiary__slot-wrapper[data-v-b3c96404]{background-color:rgba(255,255,255,.2)}.e-button-tertiary--variant-2 .e-button-tertiary__slot-wrapper[data-v-b3c96404]{color:#fff}.e-button-tertiary--variant-2 .e-button-tertiary__slot-wrapper[data-v-b3c96404]:before,.e-button-tertiary--variant-2 .e-button-tertiary__slot-wrapper[data-v-b3c96404]:after{background-color:#fff}.e-button-tertiary--disabled[data-v-b3c96404]{pointer-events:none}.e-button-tertiary--disabled .e-button-tertiary__slot-wrapper[data-v-b3c96404]{color:#80889b}.e-button-tertiary--disabled .e-button-tertiary__slot-wrapper[data-v-b3c96404]:hover{background-color:rgba(0,0,0,0)}.e-button-tertiary--disabled .e-button-tertiary__slot-wrapper[data-v-b3c96404]:before,.e-button-tertiary--disabled .e-button-tertiary__slot-wrapper[data-v-b3c96404]:after{background-color:#80889b}</style>
      <style type="text/css">.e-label[data-v-01f6f991]{border-radius:4px;font-size:1.2rem;font-weight:600;display:inline-flex;justify-content:center;align-items:center;height:22px;padding:2px 4px;line-height:1.8rem}@media(min-width: 768px){.e-label[data-v-01f6f991]{height:26px;padding:2px 8px;line-height:2.2rem;font-size:1.4rem}}.e-label--variant-ui-error[data-v-01f6f991]{background-color:#ba0808}.e-label--variant-brand-01[data-v-01f6f991]{background-color:#007bc4}.e-label--variant-brand-01-tint-20[data-v-01f6f991]{background-color:#cce5f3}.e-label--variant-brand-02[data-v-01f6f991]{background-color:#00014d}.e-label--variant-brand-04[data-v-01f6f991]{background-color:#53efef}.e-label--variant-sub-brand-02[data-v-01f6f991]{background-color:#f8cb46}.e-label__value[data-v-01f6f991]{color:#fff}.e-label__value--dark[data-v-01f6f991]{color:#00014d}</style>
      <style type="text/css">.nav-dropdown[data-v-7509dddc]{display:none;z-index:1;transform:translateX(-50%);left:50%;top:28px;position:absolute;padding-top:8px}.nav-dropdown__body[data-v-7509dddc]{border-radius:4px;color:#007bc4;background-color:#fff;width:250px;box-shadow:-2px 3px 5px 1px rgba(29,51,85,.2);font-size:1.6rem;line-height:2.4rem;flex-direction:column}.nav-dropdown__body[data-v-7509dddc]::before{content:"";width:0;height:0;border-left:8px solid rgba(0,0,0,0);border-right:8px solid rgba(0,0,0,0);border-bottom:8px solid #fff;position:absolute;top:0px;left:50%;transform:translateX(-50%)}.nav-dropdown__item[data-v-7509dddc]{cursor:pointer}.nav-dropdown__item[data-v-7509dddc]:first-of-type{padding-top:8px}.nav-dropdown__item[data-v-7509dddc]:last-of-type{padding-bottom:8px}.nav-dropdown__main[data-v-7509dddc]{padding:8px 24px}.nav-dropdown__link[data-v-7509dddc]{padding:4px 24px;display:flex;text-decoration:none}.nav-dropdown__link[data-v-7509dddc]:hover{color:#006baa}.nav-dropdown__link[data-v-7509dddc]:focus{color:#00014d;text-decoration:underline;background-color:#e6f2f9}.nav-dropdown__link-text[data-v-7509dddc]{margin-right:8px}.nav-dropdown__link-text[data-v-7509dddc]:hover{text-decoration:underline}.nav-dropdown__link--border-top[data-v-7509dddc]{padding-top:8px;border-top:1px solid #cce5f3;margin-top:8px}</style>
      <style type="text/css">.nav-menu-item[data-v-8f75db0e]{border-bottom:1px solid #409cd3;cursor:pointer}.nav-menu-item--open[data-v-8f75db0e]{background-color:#006baa}.nav-menu-item--open .nav-menu-item__chevron[data-v-8f75db0e]{transform:rotate(180deg)}.nav-menu-item__sublink[data-v-8f75db0e]{padding:12px 0;display:flex;align-items:center}.nav-menu-item__sublink--bold[data-v-8f75db0e]{font-weight:600}.nav-menu-item__sublink--border-top[data-v-8f75db0e]{border-top:1px solid #409cd3}.nav-menu-item__sublink-text[data-v-8f75db0e]{margin-right:8px;font-size:1.6rem;line-height:2.2rem;color:#fff}.nav-menu-item__sublink-text[data-v-8f75db0e]:hover{color:#fff}.nav-menu-item__sublink-text[data-v-8f75db0e]:focus{background:rgba(0,0,0,0);color:#fff}@media(min-width: 768px)and (max-width: 991px){.nav-menu-item__sublink-text[data-v-8f75db0e]{line-height:2.4rem}}.nav-menu-item__sublinks[data-v-8f75db0e]{padding:0 16px;border-top:1px solid #409cd3}.nav-menu-item__row[data-v-8f75db0e]{padding:12px 16px;display:flex;align-items:center;flex-direction:row-reverse}@media(min-width: 768px)and (max-width: 991px){.nav-menu-item__row[data-v-8f75db0e]{flex-direction:row}}.nav-menu-item__title[data-v-8f75db0e]{font-weight:600;flex-grow:1;font-size:1.6rem;line-height:2.2rem}@media(min-width: 768px)and (max-width: 991px){.nav-menu-item__title[data-v-8f75db0e]{line-height:2.4rem}}.nav-menu-item__chevron[data-v-8f75db0e]{margin-left:16px;margin-right:0}@media(min-width: 768px)and (max-width: 991px){.nav-menu-item__chevron[data-v-8f75db0e]{margin-left:0;margin-right:16px}}</style>
      <style type="text/css">.nav[data-v-8095e9f8]{color:#fff;position:fixed;transition:all .3s ease;top:0;left:0;right:0;-webkit-touch-callout:none;-webkit-user-select:none;user-select:none}@media(min-width: 992px){.nav[data-v-8095e9f8]{position:unset}}.nav__container[data-v-8095e9f8]{position:relative;z-index:35}.nav-offset[data-v-8095e9f8]{margin-bottom:64px}@media(min-width: 768px)and (max-width: 991px){.nav-offset[data-v-8095e9f8]{margin-bottom:96px}}@media(min-width: 992px){.nav-offset[data-v-8095e9f8]{margin-bottom:0}}.nav.hide[data-v-8095e9f8]{top:-64px}@media(min-width: 768px)and (max-width: 991px){.nav.hide[data-v-8095e9f8]{top:-96px}}.nav__menu[data-v-8095e9f8]{background-color:#007bc4;height:calc(100vh - 64px);overflow-y:auto}@media(min-width: 768px)and (max-width: 991px){.nav__menu[data-v-8095e9f8]{height:calc(100vh - 32px - 64px)}}@media(min-width: 992px){.nav__menu[data-v-8095e9f8]{display:none}}.nav__menu-top[data-v-8095e9f8]{padding:12px 16px;background-color:#006baa;border-bottom:1px solid #409cd3}.nav__menu-top-item[data-v-8095e9f8]{font-size:1.4rem;line-height:2rem;text-decoration:none;color:#fff}.nav__menu-top-item[data-v-8095e9f8]:hover{color:#fff}.nav__menu-top-item[data-v-8095e9f8]:focus{color:#fff;background:rgba(0,0,0,0)}.nav__menu-top-item[data-v-8095e9f8]:first-of-type{padding-right:24px;border-right:1px solid #409cd3}.nav__menu-top-item[data-v-8095e9f8]:last-of-type{margin-left:24px}.nav__menu-top-item--bold[data-v-8095e9f8]{font-weight:600}.nav__menu-item[data-v-8095e9f8]{padding:12px 16px;cursor:pointer;font-size:1.6rem;line-height:2.2rem;text-decoration:none}@media(min-width: 768px)and (max-width: 991px){.nav__menu-item[data-v-8095e9f8]{line-height:2.4rem}}.nav__menu-icon[data-v-8095e9f8]{cursor:pointer}.nav__logo[data-v-8095e9f8]{margin-right:48px;cursor:pointer}.nav__logo-container[data-v-8095e9f8]:focus{background:rgba(0,0,0,0)}.nav__basket[data-v-8095e9f8]{cursor:pointer;display:flex;position:relative;text-decoration:none}.nav__basket[data-v-8095e9f8]:focus{background:rgba(0,0,0,0)}.nav__basket-pill[data-v-8095e9f8]{position:relative;left:-4px;top:2px}.nav__top[data-v-8095e9f8]{background-color:#000c8c;height:32px;display:flex;align-items:center}.nav__top-account[data-v-8095e9f8]{display:flex;align-items:center;height:100%}.nav__top-account-item[data-v-8095e9f8]{cursor:pointer;font-size:1.4rem;line-height:2.2rem;text-decoration:none}.nav__top-account-item[data-v-8095e9f8]:not(:last-of-type){margin-right:32px;position:relative}.nav__top-account-item[data-v-8095e9f8]:not(:last-of-type)::before{content:"";cursor:default;width:1px;height:16px;position:absolute;right:-16px;top:4px;background-color:#fff}.nav__top-inner[data-v-8095e9f8]{width:100%;max-width:1264px;margin:0 auto;display:flex;justify-content:space-between;height:100%;align-items:center;padding:0 16px;padding:0 32px}.nav__top-type[data-v-8095e9f8]{display:flex}.nav__top-type-item[data-v-8095e9f8]{color:#cce5f3;font-size:1.4rem;line-height:2.2rem;cursor:pointer;text-decoration:none}.nav__top-type-item[data-v-8095e9f8]:hover{color:#cce5f3}.nav__top-type-item[data-v-8095e9f8]:focus{background:rgba(0,0,0,0);color:#cce5f3}.nav__top-type-item[data-v-8095e9f8]:first-of-type{margin-right:24px}.nav__top-type-item--active[data-v-8095e9f8]{color:#fff;font-weight:600}.nav__top-type-item--active[data-v-8095e9f8]:hover{color:#fff}.nav__top-type-item--active[data-v-8095e9f8]:focus{background:rgba(0,0,0,0);color:#fff}.nav__user[data-v-8095e9f8]{display:flex;align-items:center;height:100%}.nav__user.nav__top-account-item[data-v-8095e9f8]{margin-right:0}.nav__user.nav__top-account-item[data-v-8095e9f8]::before{width:0}.nav__user-name[data-v-8095e9f8]{margin-right:8px;font-size:1.4rem;line-height:2.2rem;height:100%;display:flex;align-items:center}.nav__user-container[data-v-8095e9f8]{position:relative;height:100%}.nav__user-container:hover .nav-dropdown[data-v-8095e9f8]{display:flex}.nav__main[data-v-8095e9f8]{background-color:#007bc4;border-bottom:1px solid #409cd3;height:64px}.nav__main-inner[data-v-8095e9f8]{width:100%;height:100%;max-width:1264px;margin:0 auto;display:flex;justify-content:space-between;padding:0 16px}@media(min-width: 768px){.nav__main-inner[data-v-8095e9f8]{padding:0 32px}}.nav__main-inner-left .nav__main-inner-item[data-v-8095e9f8]{font-weight:600}.nav__main-inner-container[data-v-8095e9f8]{height:100%;position:relative;display:flex;align-items:center}.nav__main-inner-container[data-v-8095e9f8]:not(:last-of-type){margin-right:40px}.nav__main-inner-container:hover .nav-dropdown[data-v-8095e9f8]{display:flex}.nav__main-inner-side[data-v-8095e9f8]{display:flex;align-items:center}.nav__main-inner-side--right .nav__main-inner-container[data-v-8095e9f8]{margin-right:0}.nav__main-inner-side--right .nav__main-inner-container[data-v-8095e9f8]:not(:first-of-type){margin-left:40px}@media(min-width: 0px)and (max-width: 767px){.nav__main-inner-side--right .nav__main-inner-container:not(:first-of-type).nav__main-inner-container-basket[data-v-8095e9f8]{margin-left:0}}.nav__main-inner-item[data-v-8095e9f8]{font-size:1.6rem;line-height:2.4rem;cursor:pointer;position:relative}.nav__main-inner-item-link[data-v-8095e9f8]{text-decoration:none;color:#fff}.nav__main-inner-item-link[data-v-8095e9f8]:hover{color:#fff}.nav__main-inner-item-link[data-v-8095e9f8]:focus{color:#fff;background:rgba(0,0,0,0)}.nav__main-inner-item--active[data-v-8095e9f8]::before{content:"";width:100%;height:4px;background-color:#53efef;position:absolute;bottom:-19px}.desktop-only[data-v-8095e9f8]{display:none}@media(min-width: 992px){.desktop-only[data-v-8095e9f8]{display:flex}}.mobile-only[data-v-8095e9f8]{display:flex}@media(min-width: 768px){.mobile-only[data-v-8095e9f8]{display:none}}.above-mobile[data-v-8095e9f8]{display:none}@media(min-width: 768px){.above-mobile[data-v-8095e9f8]{display:flex}}.under-desktop[data-v-8095e9f8]{display:flex}@media(min-width: 992px){.under-desktop[data-v-8095e9f8]{display:none}}</style>
      <style type="text/css">
         .section[data-v-c360aca8] {
         position: relative;
         background: #F7F7F7;
         color: #111;
         padding: 4em;
         text-align: center;
         border-top: 1px solid #111;
         border-bottom: 1px solid #111;
         }
      </style>
      <style type="text/css">
         .box[data-v-bb2e86d8] {
         max-width: 840px;
         padding: 44px;
         margin: 4rem auto;
         background: #FFF;
         color: #111;
         text-align: left;
         box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.15);
         }
         .code[data-v-bb2e86d8] {
         background: #F5F6FA;
         padding: 6px;
         margin: 1rem auto;
         display: block;
         }
         .title[data-v-bb2e86d8] {
         font-size: 32px;
         margin-bottom: 1rem 0;
         }
         p[data-v-bb2e86d8] {
         font-size: 22px;
         max-width: 650px;
         margin: 1rem 0;
         }
         a[data-v-bb2e86d8] {
         font-size: 24px;
         padding: 12px;
         color: #111;
         }
         a[data-v-bb2e86d8]::after {
         content: "";
         background-image: url("https://images.prismic.io/test-sm1905/dfaddfb9-2146-4135-b043-785e7855994e_arrow-sm.svg?auto=compress,format");
         font-size: 18px;
         margin-left: 10px;
         width: 30px;
         display: inline-block;
         border-radius: 50%;
         height: 30px;
         color: #1D2230;
         vertical-align: center;
         top: 5px;
         position: relative;
         }
      </style>
      <style type="text/css">.footer{background-color:#fff}.footer__main{column-gap:24px;padding:0;max-width:1200px;margin:0 auto;columns:1}@media(min-width: 768px)and (max-width: 991px){.footer__main{columns:3}}@media(min-width: 992px){.footer__main{columns:4}}@media(min-width: 768px){.footer__main{padding:32px 32px 40px}}@media(min-width: 1264px){.footer__main{padding:32px 0 40px}}.footer__subfooter{max-width:1200px;margin:0 auto;padding:16px 16px 20px 16px}@media(min-width: 768px)and (max-width: 991px){.footer__subfooter{padding:24px 32px 28px}}@media(min-width: 992px){.footer__subfooter{padding:28px 32px}}@media(min-width: 1264px){.footer__subfooter{padding:28px 0}}.footer__subfooter-container{border-top:1px solid #cce5f3;margin-top:-1px}@media(min-width: 768px){.footer__subfooter-container{margin-top:0}}</style>
      <style type="text/css">body{background-color:#eef2f4}.layout__header{position:relative;z-index:2}.layout__body{position:relative;z-index:1}</style>
      <style type="text/css">.layout__header[data-v-8bd4e19e]{position:relative;z-index:2}.layout__body[data-v-8bd4e19e]{position:relative;z-index:1}</style>
      
      <style id="onetrust-style">#onetrust-banner-sdk{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}#onetrust-banner-sdk .onetrust-vendors-list-handler{cursor:pointer;color:#1f96db;font-size:inherit;font-weight:bold;text-decoration:none;margin-left:5px}#onetrust-banner-sdk .onetrust-vendors-list-handler:hover{color:#1f96db}#onetrust-banner-sdk:focus{outline:2px solid #000;outline-offset:-2px}#onetrust-banner-sdk a:focus{outline:2px solid #000}#onetrust-banner-sdk #onetrust-accept-btn-handler,#onetrust-banner-sdk #onetrust-reject-all-handler,#onetrust-banner-sdk #onetrust-pc-btn-handler{outline-offset:1px}#onetrust-banner-sdk .ot-close-icon,#onetrust-pc-sdk .ot-close-icon,#ot-sync-ntfy .ot-close-icon{background-image:url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMzQ4LjMzM3B4IiBoZWlnaHQ9IjM0OC4zMzNweCIgdmlld0JveD0iMCAwIDM0OC4zMzMgMzQ4LjMzNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzQ4LjMzMyAzNDguMzM0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PHBhdGggZmlsbD0iIzU2NTY1NiIgZD0iTTMzNi41NTksNjguNjExTDIzMS4wMTYsMTc0LjE2NWwxMDUuNTQzLDEwNS41NDljMTUuNjk5LDE1LjcwNSwxNS42OTksNDEuMTQ1LDAsNTYuODVjLTcuODQ0LDcuODQ0LTE4LjEyOCwxMS43NjktMjguNDA3LDExLjc2OWMtMTAuMjk2LDAtMjAuNTgxLTMuOTE5LTI4LjQxOS0xMS43NjlMMTc0LjE2NywyMzEuMDAzTDY4LjYwOSwzMzYuNTYzYy03Ljg0Myw3Ljg0NC0xOC4xMjgsMTEuNzY5LTI4LjQxNiwxMS43NjljLTEwLjI4NSwwLTIwLjU2My0zLjkxOS0yOC40MTMtMTEuNzY5Yy0xNS42OTktMTUuNjk4LTE1LjY5OS00MS4xMzksMC01Ni44NWwxMDUuNTQtMTA1LjU0OUwxMS43NzQsNjguNjExYy0xNS42OTktMTUuNjk5LTE1LjY5OS00MS4xNDUsMC01Ni44NDRjMTUuNjk2LTE1LjY4Nyw0MS4xMjctMTUuNjg3LDU2LjgyOSwwbDEwNS41NjMsMTA1LjU1NEwyNzkuNzIxLDExLjc2N2MxNS43MDUtMTUuNjg3LDQxLjEzOS0xNS42ODcsNTYuODMyLDBDMzUyLjI1OCwyNy40NjYsMzUyLjI1OCw1Mi45MTIsMzM2LjU1OSw2OC42MTF6Ii8+PC9nPjwvc3ZnPg==");background-size:contain;background-repeat:no-repeat;background-position:center;height:12px;width:12px}#onetrust-banner-sdk .powered-by-logo,#onetrust-banner-sdk .ot-pc-footer-logo a,#onetrust-pc-sdk .powered-by-logo,#onetrust-pc-sdk .ot-pc-footer-logo a,#ot-sync-ntfy .powered-by-logo,#ot-sync-ntfy .ot-pc-footer-logo a{background-size:contain;background-repeat:no-repeat;background-position:center;height:25px;width:152px;display:block;text-decoration:none;font-size:0.75em}#onetrust-banner-sdk .powered-by-logo:hover,#onetrust-banner-sdk .ot-pc-footer-logo a:hover,#onetrust-pc-sdk .powered-by-logo:hover,#onetrust-pc-sdk .ot-pc-footer-logo a:hover,#ot-sync-ntfy .powered-by-logo:hover,#ot-sync-ntfy .ot-pc-footer-logo a:hover{color:#565656}#onetrust-banner-sdk h3 *,#onetrust-banner-sdk h4 *,#onetrust-banner-sdk h6 *,#onetrust-banner-sdk button *,#onetrust-banner-sdk a[data-parent-id] *,#onetrust-pc-sdk h3 *,#onetrust-pc-sdk h4 *,#onetrust-pc-sdk h6 *,#onetrust-pc-sdk button *,#onetrust-pc-sdk a[data-parent-id] *,#ot-sync-ntfy h3 *,#ot-sync-ntfy h4 *,#ot-sync-ntfy h6 *,#ot-sync-ntfy button *,#ot-sync-ntfy a[data-parent-id] *{font-size:inherit;font-weight:inherit;color:inherit}#onetrust-banner-sdk .ot-hide,#onetrust-pc-sdk .ot-hide,#ot-sync-ntfy .ot-hide{display:none !important}#onetrust-pc-sdk .ot-sdk-row .ot-sdk-column{padding:0}#onetrust-pc-sdk .ot-sdk-container{padding-right:0}#onetrust-pc-sdk .ot-sdk-row{flex-direction:initial;width:100%}#onetrust-pc-sdk [type="checkbox"]:checked,#onetrust-pc-sdk [type="checkbox"]:not(:checked){pointer-events:initial}#onetrust-pc-sdk [type="checkbox"]:disabled+label::before,#onetrust-pc-sdk [type="checkbox"]:disabled+label:after,#onetrust-pc-sdk [type="checkbox"]:disabled+label{pointer-events:none;opacity:0.7}#onetrust-pc-sdk #vendor-list-content{transform:translate3d(0, 0, 0)}#onetrust-pc-sdk li input[type="checkbox"]{z-index:1}#onetrust-pc-sdk li .ot-checkbox label{z-index:2}#onetrust-pc-sdk li .ot-checkbox input[type="checkbox"]{height:auto;width:auto}#onetrust-pc-sdk li .host-title a,#onetrust-pc-sdk li .ot-host-name a,#onetrust-pc-sdk li .accordion-text,#onetrust-pc-sdk li .ot-acc-txt{z-index:2;position:relative}#onetrust-pc-sdk input{margin:3px 0.1ex}#onetrust-pc-sdk .pc-logo,#onetrust-pc-sdk .ot-pc-logo{height:60px;width:180px;background-position:center;background-size:contain;background-repeat:no-repeat}#onetrust-pc-sdk .screen-reader-only,#onetrust-pc-sdk .ot-scrn-rdr,.ot-sdk-cookie-policy .screen-reader-only,.ot-sdk-cookie-policy .ot-scrn-rdr{border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}#onetrust-pc-sdk.ot-fade-in,.onetrust-pc-dark-filter.ot-fade-in,#onetrust-banner-sdk.ot-fade-in{animation-name:onetrust-fade-in;animation-duration:400ms;animation-timing-function:ease-in-out}#onetrust-pc-sdk.ot-hide{display:none !important}.onetrust-pc-dark-filter.ot-hide{display:none !important}#ot-sdk-btn.ot-sdk-show-settings,#ot-sdk-btn.optanon-show-settings{color:#68b631;border:1px solid #68b631;height:auto;white-space:normal;word-wrap:break-word;padding:0.8em 2em;font-size:0.8em;line-height:1.2;cursor:pointer;-moz-transition:0.1s ease;-o-transition:0.1s ease;-webkit-transition:1s ease;transition:0.1s ease}#ot-sdk-btn.ot-sdk-show-settings:hover,#ot-sdk-btn.optanon-show-settings:hover{color:#fff;background-color:#68b631}.onetrust-pc-dark-filter{background:rgba(0,0,0,0.5);z-index:2147483646;width:100%;height:100%;overflow:hidden;position:fixed;top:0;bottom:0;left:0}@keyframes onetrust-fade-in{0%{opacity:0}100%{opacity:1}}.ot-cookie-label{text-decoration:underline}@media only screen and (min-width: 426px) and (max-width: 896px) and (orientation: landscape){#onetrust-pc-sdk p{font-size:0.75em}}#onetrust-banner-sdk .banner-option-input:focus+label{outline:1px solid #000;outline-style:auto}.category-vendors-list-handler+a:focus,.category-vendors-list-handler+a:focus-visible{outline:2px solid #000}#onetrust-pc-sdk .ot-userid-title{margin-top:10px}#onetrust-pc-sdk .ot-userid-title>span,#onetrust-pc-sdk .ot-userid-timestamp>span{font-weight:700}#onetrust-pc-sdk .ot-userid-desc{font-style:italic}#onetrust-pc-sdk .ot-host-desc a{pointer-events:initial}#onetrust-pc-sdk .ot-ven-hdr>p a{position:relative;z-index:2;pointer-events:initial}
         #onetrust-banner-sdk,#onetrust-pc-sdk,#ot-sdk-cookie-policy,#ot-sync-ntfy{font-size:16px}#onetrust-banner-sdk *,#onetrust-banner-sdk ::after,#onetrust-banner-sdk ::before,#onetrust-pc-sdk *,#onetrust-pc-sdk ::after,#onetrust-pc-sdk ::before,#ot-sdk-cookie-policy *,#ot-sdk-cookie-policy ::after,#ot-sdk-cookie-policy ::before,#ot-sync-ntfy *,#ot-sync-ntfy ::after,#ot-sync-ntfy ::before{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}#onetrust-banner-sdk div,#onetrust-banner-sdk span,#onetrust-banner-sdk h1,#onetrust-banner-sdk h2,#onetrust-banner-sdk h3,#onetrust-banner-sdk h4,#onetrust-banner-sdk h5,#onetrust-banner-sdk h6,#onetrust-banner-sdk p,#onetrust-banner-sdk img,#onetrust-banner-sdk svg,#onetrust-banner-sdk button,#onetrust-banner-sdk section,#onetrust-banner-sdk a,#onetrust-banner-sdk label,#onetrust-banner-sdk input,#onetrust-banner-sdk ul,#onetrust-banner-sdk li,#onetrust-banner-sdk nav,#onetrust-banner-sdk table,#onetrust-banner-sdk thead,#onetrust-banner-sdk tr,#onetrust-banner-sdk td,#onetrust-banner-sdk tbody,#onetrust-banner-sdk .ot-main-content,#onetrust-banner-sdk .ot-toggle,#onetrust-banner-sdk #ot-content,#onetrust-banner-sdk #ot-pc-content,#onetrust-banner-sdk .checkbox,#onetrust-pc-sdk div,#onetrust-pc-sdk span,#onetrust-pc-sdk h1,#onetrust-pc-sdk h2,#onetrust-pc-sdk h3,#onetrust-pc-sdk h4,#onetrust-pc-sdk h5,#onetrust-pc-sdk h6,#onetrust-pc-sdk p,#onetrust-pc-sdk img,#onetrust-pc-sdk svg,#onetrust-pc-sdk button,#onetrust-pc-sdk section,#onetrust-pc-sdk a,#onetrust-pc-sdk label,#onetrust-pc-sdk input,#onetrust-pc-sdk ul,#onetrust-pc-sdk li,#onetrust-pc-sdk nav,#onetrust-pc-sdk table,#onetrust-pc-sdk thead,#onetrust-pc-sdk tr,#onetrust-pc-sdk td,#onetrust-pc-sdk tbody,#onetrust-pc-sdk .ot-main-content,#onetrust-pc-sdk .ot-toggle,#onetrust-pc-sdk #ot-content,#onetrust-pc-sdk #ot-pc-content,#onetrust-pc-sdk .checkbox,#ot-sdk-cookie-policy div,#ot-sdk-cookie-policy span,#ot-sdk-cookie-policy h1,#ot-sdk-cookie-policy h2,#ot-sdk-cookie-policy h3,#ot-sdk-cookie-policy h4,#ot-sdk-cookie-policy h5,#ot-sdk-cookie-policy h6,#ot-sdk-cookie-policy p,#ot-sdk-cookie-policy img,#ot-sdk-cookie-policy svg,#ot-sdk-cookie-policy button,#ot-sdk-cookie-policy section,#ot-sdk-cookie-policy a,#ot-sdk-cookie-policy label,#ot-sdk-cookie-policy input,#ot-sdk-cookie-policy ul,#ot-sdk-cookie-policy li,#ot-sdk-cookie-policy nav,#ot-sdk-cookie-policy table,#ot-sdk-cookie-policy thead,#ot-sdk-cookie-policy tr,#ot-sdk-cookie-policy td,#ot-sdk-cookie-policy tbody,#ot-sdk-cookie-policy .ot-main-content,#ot-sdk-cookie-policy .ot-toggle,#ot-sdk-cookie-policy #ot-content,#ot-sdk-cookie-policy #ot-pc-content,#ot-sdk-cookie-policy .checkbox,#ot-sync-ntfy div,#ot-sync-ntfy span,#ot-sync-ntfy h1,#ot-sync-ntfy h2,#ot-sync-ntfy h3,#ot-sync-ntfy h4,#ot-sync-ntfy h5,#ot-sync-ntfy h6,#ot-sync-ntfy p,#ot-sync-ntfy img,#ot-sync-ntfy svg,#ot-sync-ntfy button,#ot-sync-ntfy section,#ot-sync-ntfy a,#ot-sync-ntfy label,#ot-sync-ntfy input,#ot-sync-ntfy ul,#ot-sync-ntfy li,#ot-sync-ntfy nav,#ot-sync-ntfy table,#ot-sync-ntfy thead,#ot-sync-ntfy tr,#ot-sync-ntfy td,#ot-sync-ntfy tbody,#ot-sync-ntfy .ot-main-content,#ot-sync-ntfy .ot-toggle,#ot-sync-ntfy #ot-content,#ot-sync-ntfy #ot-pc-content,#ot-sync-ntfy .checkbox{font-family:inherit;font-weight:normal;-webkit-font-smoothing:auto;letter-spacing:normal;line-height:normal;padding:0;margin:0;height:auto;min-height:0;max-height:none;width:auto;min-width:0;max-width:none;border-radius:0;border:none;clear:none;float:none;position:static;bottom:auto;left:auto;right:auto;top:auto;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;white-space:normal;background:none;overflow:visible;vertical-align:baseline;visibility:visible;z-index:auto;box-shadow:none}#onetrust-banner-sdk label:before,#onetrust-banner-sdk label:after,#onetrust-banner-sdk .checkbox:after,#onetrust-banner-sdk .checkbox:before,#onetrust-pc-sdk label:before,#onetrust-pc-sdk label:after,#onetrust-pc-sdk .checkbox:after,#onetrust-pc-sdk .checkbox:before,#ot-sdk-cookie-policy label:before,#ot-sdk-cookie-policy label:after,#ot-sdk-cookie-policy .checkbox:after,#ot-sdk-cookie-policy .checkbox:before,#ot-sync-ntfy label:before,#ot-sync-ntfy label:after,#ot-sync-ntfy .checkbox:after,#ot-sync-ntfy .checkbox:before{content:"";content:none}
         #onetrust-banner-sdk .ot-sdk-container,#onetrust-pc-sdk .ot-sdk-container,#ot-sdk-cookie-policy .ot-sdk-container{position:relative;width:100%;max-width:100%;margin:0 auto;padding:0 20px;box-sizing:border-box}#onetrust-banner-sdk .ot-sdk-column,#onetrust-banner-sdk .ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-column,#onetrust-pc-sdk .ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-columns{width:100%;float:left;box-sizing:border-box;padding:0;display:initial}@media (min-width: 400px){#onetrust-banner-sdk .ot-sdk-container,#onetrust-pc-sdk .ot-sdk-container,#ot-sdk-cookie-policy .ot-sdk-container{width:90%;padding:0}}@media (min-width: 550px){#onetrust-banner-sdk .ot-sdk-container,#onetrust-pc-sdk .ot-sdk-container,#ot-sdk-cookie-policy .ot-sdk-container{width:100%}#onetrust-banner-sdk .ot-sdk-column,#onetrust-banner-sdk .ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-column,#onetrust-pc-sdk .ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-columns{margin-left:4%}#onetrust-banner-sdk .ot-sdk-column:first-child,#onetrust-banner-sdk .ot-sdk-columns:first-child,#onetrust-pc-sdk .ot-sdk-column:first-child,#onetrust-pc-sdk .ot-sdk-columns:first-child,#ot-sdk-cookie-policy .ot-sdk-column:first-child,#ot-sdk-cookie-policy .ot-sdk-columns:first-child{margin-left:0}#onetrust-banner-sdk .ot-sdk-two.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-two.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-two.ot-sdk-columns{width:13.3333333333%}#onetrust-banner-sdk .ot-sdk-three.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-three.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-three.ot-sdk-columns{width:22%}#onetrust-banner-sdk .ot-sdk-four.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-four.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-four.ot-sdk-columns{width:30.6666666667%}#onetrust-banner-sdk .ot-sdk-eight.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-eight.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-eight.ot-sdk-columns{width:65.3333333333%}#onetrust-banner-sdk .ot-sdk-nine.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-nine.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-nine.ot-sdk-columns{width:74%}#onetrust-banner-sdk .ot-sdk-ten.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-ten.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-ten.ot-sdk-columns{width:82.6666666667%}#onetrust-banner-sdk .ot-sdk-eleven.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-eleven.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-eleven.ot-sdk-columns{width:91.3333333333%}#onetrust-banner-sdk .ot-sdk-twelve.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-twelve.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-twelve.ot-sdk-columns{width:100%;margin-left:0}}#onetrust-banner-sdk h1,#onetrust-banner-sdk h2,#onetrust-banner-sdk h3,#onetrust-banner-sdk h4,#onetrust-banner-sdk h5,#onetrust-banner-sdk h6,#onetrust-pc-sdk h1,#onetrust-pc-sdk h2,#onetrust-pc-sdk h3,#onetrust-pc-sdk h4,#onetrust-pc-sdk h5,#onetrust-pc-sdk h6,#ot-sdk-cookie-policy h1,#ot-sdk-cookie-policy h2,#ot-sdk-cookie-policy h3,#ot-sdk-cookie-policy h4,#ot-sdk-cookie-policy h5,#ot-sdk-cookie-policy h6{margin-top:0;font-weight:600;font-family:inherit}#onetrust-banner-sdk h1,#onetrust-pc-sdk h1,#ot-sdk-cookie-policy h1{font-size:1.5rem;line-height:1.2}#onetrust-banner-sdk h2,#onetrust-pc-sdk h2,#ot-sdk-cookie-policy h2{font-size:1.5rem;line-height:1.25}#onetrust-banner-sdk h3,#onetrust-pc-sdk h3,#ot-sdk-cookie-policy h3{font-size:1.5rem;line-height:1.3}#onetrust-banner-sdk h4,#onetrust-pc-sdk h4,#ot-sdk-cookie-policy h4{font-size:1.5rem;line-height:1.35}#onetrust-banner-sdk h5,#onetrust-pc-sdk h5,#ot-sdk-cookie-policy h5{font-size:1.5rem;line-height:1.5}#onetrust-banner-sdk h6,#onetrust-pc-sdk h6,#ot-sdk-cookie-policy h6{font-size:1.5rem;line-height:1.6}@media (min-width: 550px){#onetrust-banner-sdk h1,#onetrust-pc-sdk h1,#ot-sdk-cookie-policy h1{font-size:1.5rem}#onetrust-banner-sdk h2,#onetrust-pc-sdk h2,#ot-sdk-cookie-policy h2{font-size:1.5rem}#onetrust-banner-sdk h3,#onetrust-pc-sdk h3,#ot-sdk-cookie-policy h3{font-size:1.5rem}#onetrust-banner-sdk h4,#onetrust-pc-sdk h4,#ot-sdk-cookie-policy h4{font-size:1.5rem}#onetrust-banner-sdk h5,#onetrust-pc-sdk h5,#ot-sdk-cookie-policy h5{font-size:1.5rem}#onetrust-banner-sdk h6,#onetrust-pc-sdk h6,#ot-sdk-cookie-policy h6{font-size:1.5rem}}#onetrust-banner-sdk p,#onetrust-pc-sdk p,#ot-sdk-cookie-policy p{margin:0 0 1em 0;font-family:inherit;line-height:normal}#onetrust-banner-sdk a,#onetrust-pc-sdk a,#ot-sdk-cookie-policy a{color:#565656;text-decoration:underline}#onetrust-banner-sdk a:hover,#onetrust-pc-sdk a:hover,#ot-sdk-cookie-policy a:hover{color:#565656;text-decoration:none}#onetrust-banner-sdk .ot-sdk-button,#onetrust-banner-sdk button,#onetrust-pc-sdk .ot-sdk-button,#onetrust-pc-sdk button,#ot-sdk-cookie-policy .ot-sdk-button,#ot-sdk-cookie-policy button{margin-bottom:1rem;font-family:inherit}#onetrust-banner-sdk .ot-sdk-button,#onetrust-banner-sdk button,#onetrust-pc-sdk .ot-sdk-button,#onetrust-pc-sdk button,#ot-sdk-cookie-policy .ot-sdk-button,#ot-sdk-cookie-policy button{display:inline-block;height:38px;padding:0 30px;color:#555;text-align:center;font-size:0.9em;font-weight:400;line-height:38px;letter-spacing:0.01em;text-decoration:none;white-space:nowrap;background-color:transparent;border-radius:2px;border:1px solid #bbb;cursor:pointer;box-sizing:border-box}#onetrust-banner-sdk .ot-sdk-button:hover,#onetrust-banner-sdk :not(.ot-leg-btn-container)>button:hover,#onetrust-banner-sdk :not(.ot-leg-btn-container)>button:focus,#onetrust-pc-sdk .ot-sdk-button:hover,#onetrust-pc-sdk :not(.ot-leg-btn-container)>button:hover,#onetrust-pc-sdk :not(.ot-leg-btn-container)>button:focus,#ot-sdk-cookie-policy .ot-sdk-button:hover,#ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:hover,#ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:focus{color:#333;border-color:#888;opacity:0.7}#onetrust-banner-sdk .ot-sdk-button:focus,#onetrust-banner-sdk :not(.ot-leg-btn-container)>button:focus,#onetrust-pc-sdk .ot-sdk-button:focus,#onetrust-pc-sdk :not(.ot-leg-btn-container)>button:focus,#ot-sdk-cookie-policy .ot-sdk-button:focus,#ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:focus{outline:2px solid #000}#onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary,#onetrust-banner-sdk button.ot-sdk-button-primary,#onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary,#onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary,#onetrust-banner-sdk input[type="button"].ot-sdk-button-primary,#onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary,#onetrust-pc-sdk button.ot-sdk-button-primary,#onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary,#onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary,#onetrust-pc-sdk input[type="button"].ot-sdk-button-primary,#ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary,#ot-sdk-cookie-policy button.ot-sdk-button-primary,#ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary,#ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary,#ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary{color:#fff;background-color:#33c3f0;border-color:#33c3f0}#onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:hover,#onetrust-banner-sdk button.ot-sdk-button-primary:hover,#onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:hover,#onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:hover,#onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:hover,#onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:focus,#onetrust-banner-sdk button.ot-sdk-button-primary:focus,#onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:focus,#onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:focus,#onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:focus,#onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:hover,#onetrust-pc-sdk button.ot-sdk-button-primary:hover,#onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:hover,#onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:hover,#onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:hover,#onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:focus,#onetrust-pc-sdk button.ot-sdk-button-primary:focus,#onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:focus,#onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:focus,#onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:focus,#ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:hover,#ot-sdk-cookie-policy button.ot-sdk-button-primary:hover,#ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:hover,#ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:hover,#ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:hover,#ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:focus,#ot-sdk-cookie-policy button.ot-sdk-button-primary:focus,#ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:focus,#ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:focus,#ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:focus{color:#fff;background-color:#1eaedb;border-color:#1eaedb}#onetrust-banner-sdk input[type="text"],#onetrust-pc-sdk input[type="text"],#ot-sdk-cookie-policy input[type="text"]{height:38px;padding:6px 10px;background-color:#fff;border:1px solid #d1d1d1;border-radius:4px;box-shadow:none;box-sizing:border-box}#onetrust-banner-sdk input[type="text"],#onetrust-pc-sdk input[type="text"],#ot-sdk-cookie-policy input[type="text"]{-webkit-appearance:none;-moz-appearance:none;appearance:none}#onetrust-banner-sdk input[type="text"]:focus,#onetrust-pc-sdk input[type="text"]:focus,#ot-sdk-cookie-policy input[type="text"]:focus{border:1px solid #000;outline:0}#onetrust-banner-sdk label,#onetrust-pc-sdk label,#ot-sdk-cookie-policy label{display:block;margin-bottom:0.5rem;font-weight:600}#onetrust-banner-sdk input[type="checkbox"],#onetrust-pc-sdk input[type="checkbox"],#ot-sdk-cookie-policy input[type="checkbox"]{display:inline}#onetrust-banner-sdk ul,#onetrust-pc-sdk ul,#ot-sdk-cookie-policy ul{list-style:circle inside}#onetrust-banner-sdk ul,#onetrust-pc-sdk ul,#ot-sdk-cookie-policy ul{padding-left:0;margin-top:0}#onetrust-banner-sdk ul ul,#onetrust-pc-sdk ul ul,#ot-sdk-cookie-policy ul ul{margin:1.5rem 0 1.5rem 3rem;font-size:90%}#onetrust-banner-sdk li,#onetrust-pc-sdk li,#ot-sdk-cookie-policy li{margin-bottom:1rem}#onetrust-banner-sdk th,#onetrust-banner-sdk td,#onetrust-pc-sdk th,#onetrust-pc-sdk td,#ot-sdk-cookie-policy th,#ot-sdk-cookie-policy td{padding:12px 15px;text-align:left;border-bottom:1px solid #e1e1e1}#onetrust-banner-sdk button,#onetrust-pc-sdk button,#ot-sdk-cookie-policy button{margin-bottom:1rem;font-family:inherit}#onetrust-banner-sdk .ot-sdk-container:after,#onetrust-banner-sdk .ot-sdk-row:after,#onetrust-pc-sdk .ot-sdk-container:after,#onetrust-pc-sdk .ot-sdk-row:after,#ot-sdk-cookie-policy .ot-sdk-container:after,#ot-sdk-cookie-policy .ot-sdk-row:after{content:"";display:table;clear:both}#onetrust-banner-sdk .ot-sdk-row,#onetrust-pc-sdk .ot-sdk-row,#ot-sdk-cookie-policy .ot-sdk-row{margin:0;max-width:none;display:block}
         .ot-sdk-cookie-policy{font-family:inherit;font-size:16px}.ot-sdk-cookie-policy.otRelFont{font-size:1rem}.ot-sdk-cookie-policy h3,.ot-sdk-cookie-policy h4,.ot-sdk-cookie-policy h6,.ot-sdk-cookie-policy p,.ot-sdk-cookie-policy li,.ot-sdk-cookie-policy a,.ot-sdk-cookie-policy th,.ot-sdk-cookie-policy #cookie-policy-description,.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,.ot-sdk-cookie-policy #cookie-policy-title{color:dimgray}.ot-sdk-cookie-policy #cookie-policy-description{margin-bottom:1em}.ot-sdk-cookie-policy h4{font-size:1.2em}.ot-sdk-cookie-policy h6{font-size:1em;margin-top:2em}.ot-sdk-cookie-policy th{min-width:75px}.ot-sdk-cookie-policy a,.ot-sdk-cookie-policy a:hover{background:#fff}.ot-sdk-cookie-policy thead{background-color:#f6f6f4;font-weight:bold}.ot-sdk-cookie-policy .ot-mobile-border{display:none}.ot-sdk-cookie-policy section{margin-bottom:2em}.ot-sdk-cookie-policy table{border-collapse:inherit}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy{font-family:inherit;font-size:1rem}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h3,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h4,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title{color:dimgray}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description{margin-bottom:1em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup{margin-left:1.5em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group-desc,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-table-header,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td{font-size:.9em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td span,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td a{font-size:inherit}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group{font-size:1em;margin-bottom:.6em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-title{margin-bottom:1.2em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy>section{margin-bottom:1em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th{min-width:75px}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a:hover{background:#fff}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead{background-color:#f6f6f4;font-weight:bold}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-mobile-border{display:none}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy section{margin-bottom:2em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li{list-style:disc;margin-left:1.5em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li h4{display:inline-block}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table{border-collapse:inherit;margin:auto;border:1px solid #d7d7d7;border-radius:5px;border-spacing:initial;width:100%;overflow:hidden}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td{border-bottom:1px solid #d7d7d7;border-right:1px solid #d7d7d7}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td{border-bottom:0px}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr th:last-child,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr td:last-child{border-right:0px}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type{width:25%}.ot-sdk-cookie-policy[dir=rtl]{text-align:left}#ot-sdk-cookie-policy h3{font-size:1.5em}@media only screen and (max-width: 530px){.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) table,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tbody,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) th,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr{display:block}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead tr{position:absolute;top:-9999px;left:-9999px}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr{margin:0 0 1em 0}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd),.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd) a{background:#f6f6f4}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td{border:none;border-bottom:1px solid #eee;position:relative;padding-left:50%}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before{position:absolute;height:100%;left:6px;width:40%;padding-right:10px}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) .ot-mobile-border{display:inline-block;background-color:#e4e4e4;position:absolute;height:100%;top:0;left:45%;width:2px}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before{content:attr(data-label);font-weight:bold}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) li{word-break:break-word;word-wrap:break-word}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table{overflow:hidden}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td{border:none;border-bottom:1px solid #d7d7d7}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tbody,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr{display:block}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type{width:auto}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr{margin:0 0 1em 0}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before{height:100%;width:40%;padding-right:10px}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before{content:attr(data-label);font-weight:bold}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li{word-break:break-word;word-wrap:break-word}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead tr{position:absolute;top:-9999px;left:-9999px;z-index:-9999}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td{border-bottom:1px solid #d7d7d7;border-right:0px}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td:last-child{border-bottom:0px}}
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h5,
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
         color: #696969;
         }
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
         color: #696969;
         }
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
         color: #696969;
         }
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
         color: #696969;
         }
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th {
         background-color: #F8F8F8;
         }
         .ot-floating-button__front{background-image:url('https://optanon.blob.core.windows.net/logos/static/ot_persistent_cookie.png')}
      </style>
      
      <style type="text/css">.e-icon[data-v-250fdcf4]{display:flex}.e-icon--brand-01[data-v-250fdcf4] *{fill:#007bc4}.e-icon--brand-02[data-v-250fdcf4] *{fill:#00014d}.e-icon--brand-03[data-v-250fdcf4] *{fill:#000c8c}.e-icon--brand-04[data-v-250fdcf4] *{fill:#53efef}.e-icon--neutral-01[data-v-250fdcf4] *{fill:#fff}.e-icon--neutral-02[data-v-250fdcf4] *{fill:#eef2f4}.e-icon--neutral-03[data-v-250fdcf4] *{fill:#616a82}.e-icon--neutral-04[data-v-250fdcf4] *{fill:#80889b}.e-icon--neutral-05[data-v-250fdcf4] *{fill:#dfe1e6}.e-icon--brand-01-tint-75[data-v-250fdcf4] *{fill:#409cd3}.e-icon--brand-01-tint-60[data-v-250fdcf4] *{fill:#66b0dc}.e-icon--brand-01-tint-40[data-v-250fdcf4] *{fill:#99cae7}.e-icon--brand-01-tint-20[data-v-250fdcf4] *{fill:#cce5f3}.e-icon--brand-01-tint-5[data-v-250fdcf4] *{fill:#f2f8fc}.e-icon--brand-01-links[data-v-250fdcf4] *{fill:#006baa}.e-icon--brand-01-hover-dark[data-v-250fdcf4] *{fill:#266198}.e-icon--brand-01-hover-light[data-v-250fdcf4] *{fill:#e6f2f9}.e-icon--brand-02-hover-dark[data-v-250fdcf4] *{fill:#000333}.e-icon--brand-02-hover-light[data-v-250fdcf4] *{fill:#e6e6ec}.e-icon--neutral-01-hover-light[data-v-250fdcf4] *{fill:#fff3}.e-icon--ui-error[data-v-250fdcf4] *{fill:#ba0808}.e-icon--ui-warning[data-v-250fdcf4] *{fill:#ec721c}.e-icon--ui-success[data-v-250fdcf4] *{fill:#007bc4}.e-icon--sub-brand-01[data-v-250fdcf4] *{fill:#09882d}.e-icon--sub-brand-02[data-v-250fdcf4] *{fill:#f8cb46}</style>
      <style type="text/css">.e-button-tertiary[data-v-b3c96404]{position:relative;display:flex;align-items:center;padding:7px 0;background-color:transparent;border:none;overflow:hidden;cursor:pointer;outline:none;text-decoration:none;transition:background-color .3s ease-out}.e-button-tertiary--link[data-v-b3c96404]{display:inline-flex}.e-button-tertiary__icon[data-v-b3c96404]{margin-right:8px}.e-button-tertiary--icon-right>.e-button-tertiary__icon[data-v-b3c96404]{order:1;margin-left:8px;margin-right:0}.e-button-tertiary__icon[data-v-b3c96404] .e-icon{display:flex;justify-content:center;align-items:center}.e-button-tertiary__icon[data-v-b3c96404] .e-icon *{transition:fill .3s ease-out}.e-button-tertiary__slot-wrapper[data-v-b3c96404]{position:relative;font-weight:600}.e-button-tertiary__slot-wrapper[data-v-b3c96404]:before,.e-button-tertiary__slot-wrapper[data-v-b3c96404]:after{content:"";position:absolute;bottom:-2px;right:0;width:100%;height:2px;transition:transform .3s ease-out,background-color .3s ease-out}.e-button-tertiary--icon-left:focus>.e-button-tertiary__slot-wrapper[data-v-b3c96404]:before{transform:translateX(-24px)}.e-button-tertiary--icon-right:focus>.e-button-tertiary__slot-wrapper[data-v-b3c96404]:before{transform:translateX(24px)}.e-button-tertiary--variant-1[data-v-b3c96404]:focus{background-color:#e6e6ec}.e-button-tertiary--variant-1:hover .e-button-tertiary__slot-wrapper[data-v-b3c96404]{background-color:#e6e6ec}.e-button-tertiary--variant-1 .e-button-tertiary__slot-wrapper[data-v-b3c96404]{color:#006baa}.e-button-tertiary--variant-1 .e-button-tertiary__slot-wrapper[data-v-b3c96404]:before,.e-button-tertiary--variant-1 .e-button-tertiary__slot-wrapper[data-v-b3c96404]:after{background-color:#006baa}.e-button-tertiary--variant-2[data-v-b3c96404]:focus{background-color:rgba(255,255,255,.2)}.e-button-tertiary--variant-2:focus *[data-v-b3c96404]{background-color:transparent !important}.e-button-tertiary--variant-2:hover .e-button-tertiary__slot-wrapper[data-v-b3c96404]{background-color:rgba(255,255,255,.2)}.e-button-tertiary--variant-2 .e-button-tertiary__slot-wrapper[data-v-b3c96404]{color:#fff}.e-button-tertiary--variant-2 .e-button-tertiary__slot-wrapper[data-v-b3c96404]:before,.e-button-tertiary--variant-2 .e-button-tertiary__slot-wrapper[data-v-b3c96404]:after{background-color:#fff}.e-button-tertiary--disabled[data-v-b3c96404]{pointer-events:none}.e-button-tertiary--disabled .e-button-tertiary__slot-wrapper[data-v-b3c96404]{color:#80889b}.e-button-tertiary--disabled .e-button-tertiary__slot-wrapper[data-v-b3c96404]:hover{background-color:transparent}.e-button-tertiary--disabled .e-button-tertiary__slot-wrapper[data-v-b3c96404]:before,.e-button-tertiary--disabled .e-button-tertiary__slot-wrapper[data-v-b3c96404]:after{background-color:#80889b}</style>
      <style type="text/css">.e-card[data-v-3b2e9f2c]{background-color:#fff;border:1px solid #cce5f3;border-radius:4px}.e-card--elevation-0[data-v-3b2e9f2c]{box-shadow:none}.e-card--elevation-2[data-v-3b2e9f2c]{box-shadow:-1px 2px 4px #1d335529}.e-card--elevation-4[data-v-3b2e9f2c]{box-shadow:-2px 3px 5px 1px #1d335529}.e-card--elevation-8[data-v-3b2e9f2c]{box-shadow:-3px 4px 6px 2px #1d335529}.e-card--elevation-16[data-v-3b2e9f2c]{box-shadow:-5px 8px 10px 2px #1d335529}.e-card__body[data-v-3b2e9f2c]{padding:20px 16px 24px}@media(min-width: 768px)and (max-width: 991px){.e-card__body[data-v-3b2e9f2c]{padding:20px 24px 24px}}@media(min-width: 992px){.e-card__body[data-v-3b2e9f2c]{padding:28px 32px 32px}}.e-card__footer[data-v-3b2e9f2c]{padding:20px 16px 24px;border-top:1px solid #cce5f3}@media(min-width: 768px)and (max-width: 991px){.e-card__footer[data-v-3b2e9f2c]{padding:20px 24px 24px}}@media(min-width: 992px){.e-card__footer[data-v-3b2e9f2c]{padding:28px 32px 32px}}@media(min-width: 992px){.e-card--thin-padding .e-card__body[data-v-3b2e9f2c]{padding:20px 24px 24px}}@media(min-width: 992px){.e-card--thin-padding .e-card__footer[data-v-3b2e9f2c]{padding:20px 24px 24px}}.e-card--no-padding .e-card__body[data-v-3b2e9f2c]{padding:0}.e-card--no-padding .e-card__footer[data-v-3b2e9f2c]{padding:0}</style>
      <style type="text/css">@keyframes rotate-data-v-f29dc036{100%{transform:rotate(360deg)}}.e-spinner[data-v-f29dc036]{animation:rotate-data-v-f29dc036 1.6s linear infinite}.e-spinner--brand-01>.circle-1[data-v-f29dc036]{stroke:#006baa}.e-spinner--brand-02>.circle-1[data-v-f29dc036]{stroke:#00014d}.e-spinner--neutral-01>.circle-1[data-v-f29dc036]{stroke:#fff}.circle-2[data-v-f29dc036]{stroke:#53efef}</style>
      <style type="text/css">.e-button-icon[data-v-02f67cc4]{display:flex;justify-content:center;align-items:center;border:1px solid transparent;border-radius:100px;cursor:pointer;outline:none;transition:background-color .3s ease-out,box-shadow .3s ease-out,border-color .3s ease-out}.e-button-icon--size-sm[data-v-02f67cc4]{width:36px;height:36px}.e-button-icon--size-lg[data-v-02f67cc4]{width:44px;height:44px}.e-button-icon--square[data-v-02f67cc4]{border-radius:0}.e-button-icon--loading[data-v-02f67cc4]{cursor:default}.e-button-icon--disabled[data-v-02f67cc4]{background-color:#80889b !important;border-color:transparent !important;box-shadow:none !important;pointer-events:none !important}.e-button-icon--disabled[data-v-02f67cc4] svg path{fill:#dfe1e6 !important}.e-button-icon__icon[data-v-02f67cc4]{line-height:1rem}.e-button-icon--size-sm>.e-button-icon__icon[data-v-02f67cc4]{width:16px}.e-button-icon--size-lg>.e-button-icon__icon[data-v-02f67cc4]{width:24px}.e-button-icon__icon[data-v-02f67cc4] .e-icon{display:flex;justify-content:center;text-align:center}.e-button-icon--primary.e-button-icon--variant-1[data-v-02f67cc4]{background-color:#00014d}.e-button-icon--primary.e-button-icon--variant-1[data-v-02f67cc4]:hover{background-color:#000333;border-color:#53efef}.e-button-icon--primary.e-button-icon--variant-1[data-v-02f67cc4]:focus{border-color:#53efef;border-width:2px}.e-button-icon--primary.e-button-icon--variant-1[data-v-02f67cc4] svg path{fill:#53efef}.e-button-icon--primary.e-button-icon--variant-2[data-v-02f67cc4]{background-color:#007bc4}.e-button-icon--primary.e-button-icon--variant-2[data-v-02f67cc4]:hover{background-color:#266198;border-color:#007bc4}.e-button-icon--primary.e-button-icon--variant-2[data-v-02f67cc4]:focus{border-color:#266198;border-width:2px}.e-button-icon--primary.e-button-icon--variant-2[data-v-02f67cc4] svg path{fill:#fff}.e-button-icon--primary.e-button-icon--variant-3[data-v-02f67cc4]{background-color:#fff}.e-button-icon--primary.e-button-icon--variant-3[data-v-02f67cc4]:hover{background-color:#e6f2f9;border-color:#99cae7}.e-button-icon--primary.e-button-icon--variant-3[data-v-02f67cc4]:focus{border-color:#99cae7;border-width:2px}.e-button-icon--primary.e-button-icon--variant-3[data-v-02f67cc4] svg path{fill:#007bc4}.e-button-icon--secondary[data-v-02f67cc4],.e-button-icon--tertiary[data-v-02f67cc4]{background-color:transparent}.e-button-icon--secondary.e-button-icon--variant-1[data-v-02f67cc4]:hover,.e-button-icon--secondary.e-button-icon--variant-1[data-v-02f67cc4]:focus,.e-button-icon--tertiary.e-button-icon--variant-1[data-v-02f67cc4]:hover,.e-button-icon--tertiary.e-button-icon--variant-1[data-v-02f67cc4]:focus{background-color:#e6f2f9}.e-button-icon--secondary.e-button-icon--variant-1[data-v-02f67cc4]:hover,.e-button-icon--tertiary.e-button-icon--variant-1[data-v-02f67cc4]:hover{border-color:#006baa;box-shadow:none}.e-button-icon--secondary.e-button-icon--variant-1[data-v-02f67cc4]:focus,.e-button-icon--tertiary.e-button-icon--variant-1[data-v-02f67cc4]:focus{border-color:#006baa;box-shadow:inset 0 0 0 1px #006baa}.e-button-icon--secondary.e-button-icon--variant-1[data-v-02f67cc4] svg path,.e-button-icon--tertiary.e-button-icon--variant-1[data-v-02f67cc4] svg path{fill:#006baa}.e-button-icon--secondary.e-button-icon--variant-2[data-v-02f67cc4]:hover,.e-button-icon--secondary.e-button-icon--variant-2[data-v-02f67cc4]:focus,.e-button-icon--tertiary.e-button-icon--variant-2[data-v-02f67cc4]:hover,.e-button-icon--tertiary.e-button-icon--variant-2[data-v-02f67cc4]:focus{background-color:#e6e6ec}.e-button-icon--secondary.e-button-icon--variant-2[data-v-02f67cc4]:hover,.e-button-icon--tertiary.e-button-icon--variant-2[data-v-02f67cc4]:hover{border-color:#00014d;box-shadow:none}.e-button-icon--secondary.e-button-icon--variant-2[data-v-02f67cc4]:focus,.e-button-icon--tertiary.e-button-icon--variant-2[data-v-02f67cc4]:focus{border-color:#00014d;box-shadow:inset 0 0 0 1px #00014d}.e-button-icon--secondary.e-button-icon--variant-2[data-v-02f67cc4] svg path,.e-button-icon--tertiary.e-button-icon--variant-2[data-v-02f67cc4] svg path{fill:#00014d}.e-button-icon--secondary.e-button-icon--variant-3[data-v-02f67cc4]:hover,.e-button-icon--secondary.e-button-icon--variant-3[data-v-02f67cc4]:focus,.e-button-icon--tertiary.e-button-icon--variant-3[data-v-02f67cc4]:hover,.e-button-icon--tertiary.e-button-icon--variant-3[data-v-02f67cc4]:focus{background-color:#fff3}.e-button-icon--secondary.e-button-icon--variant-3[data-v-02f67cc4]:hover,.e-button-icon--tertiary.e-button-icon--variant-3[data-v-02f67cc4]:hover{border-color:#fff;box-shadow:none}.e-button-icon--secondary.e-button-icon--variant-3[data-v-02f67cc4]:focus,.e-button-icon--tertiary.e-button-icon--variant-3[data-v-02f67cc4]:focus{border-color:#fff;box-shadow:inset 0 0 0 1px #fff}.e-button-icon--secondary.e-button-icon--variant-3[data-v-02f67cc4] svg path,.e-button-icon--tertiary.e-button-icon--variant-3[data-v-02f67cc4] svg path{fill:#fff}.e-button-icon--secondary.e-button-icon--variant-3[data-v-02f67cc4]:focus,.e-button-icon--tertiary.e-button-icon--variant-3[data-v-02f67cc4]:focus{background-color:#fff;border-color:#99cae7;border-width:2px}.e-button-icon--secondary.e-button-icon--variant-3[data-v-02f67cc4]:focus svg path,.e-button-icon--tertiary.e-button-icon--variant-3[data-v-02f67cc4]:focus svg path{fill:#007bc4}.e-button-icon--secondary.e-button-icon--variant-1[data-v-02f67cc4]{box-shadow:inset 0 0 0 2px #006baa}.e-button-icon--secondary.e-button-icon--variant-2[data-v-02f67cc4]{box-shadow:inset 0 0 0 2px #00014d}.e-button-icon--secondary.e-button-icon--variant-3[data-v-02f67cc4]{box-shadow:inset 0 0 0 2px #fff}.e-button-icon--tertiary.e-button-icon--size-sm[data-v-02f67cc4]{width:32px;height:32px}.e-button-icon--tertiary.e-button-icon--size-lg[data-v-02f67cc4]{width:36px;height:36px}</style>
      <style type="text/css">.fadeInOutDefault-enter-active[data-v-3b48ca05],.fadeInOutDefault-leave-active[data-v-3b48ca05]{transition:opacity .3s ease-out}.fadeInOutDefault-enter[data-v-3b48ca05],.fadeInOutDefault-leave-to[data-v-3b48ca05]{opacity:0}.fadeInDefault-enter-active[data-v-3b48ca05]{transition:opacity .3s ease-out}.fadeInDefault-enter[data-v-3b48ca05]{opacity:0}.fadeOutDefault-leave-active[data-v-3b48ca05]{transition:opacity .3s ease-out}.fadeOutDefault-leave-to[data-v-3b48ca05]{opacity:0}.toasts-list-enter[data-v-3b48ca05]{opacity:0;transform:translateX(100px)}.toasts-list-leave-to[data-v-3b48ca05]{opacity:0}.toasts-list-leave-active[data-v-3b48ca05]{position:absolute;right:-100px !important}.buttonIconFade-enter-active[data-v-3b48ca05],.buttonIconFade-leave-active[data-v-3b48ca05]{transition:all .3s}.buttonIconFade-leave-active[data-v-3b48ca05]{position:absolute;left:7px}.buttonIconFade-enter[data-v-3b48ca05],.buttonIconFade-leave-to[data-v-3b48ca05]{opacity:0;transform:translateX(10px)}.e-button[data-v-3b48ca05]{position:relative;display:flex;justify-content:center;align-items:center;min-width:100%;height:48px;padding:0 16px;border-width:1px;border-style:solid;border-radius:100px;font-weight:600;overflow:hidden;cursor:pointer;outline:none;text-decoration:none;transition:background-color .3s ease-out,box-shadow .3s ease-out,border .3s ease-out,padding .3s ease-out}@media(min-width: 768px){.e-button[data-v-3b48ca05]{min-width:180px;padding:0 24px}}.e-button.e-button--link[data-v-3b48ca05]{display:inline-flex}.e-button.e-button--icon.e-button--icon-left[data-v-3b48ca05]{padding:0 32px 0 44px}.e-button.e-button--icon.e-button--icon-right[data-v-3b48ca05]{padding:0 44px 0 32px}.e-button.e-button--loading[data-v-3b48ca05]{pointer-events:none}.e-button.e-button--disabled[data-v-3b48ca05]{background-color:#80889b !important;color:#dfe1e6 !important;border-color:transparent !important;box-shadow:none !important;pointer-events:none !important}.e-button.e-button--disabled[data-v-3b48ca05] svg path{fill:#dfe1e6 !important}.e-button__icon[data-v-3b48ca05]{position:absolute;top:0;bottom:0;display:flex;justify-content:center;align-items:center;width:46px}.e-button--icon-left>.e-button__icon[data-v-3b48ca05]{left:0}.e-button--icon-right>.e-button__icon[data-v-3b48ca05]{right:0}.e-button__icon[data-v-3b48ca05] .e-icon{display:flex;justify-content:center;text-align:center}.e-button--type-primary[data-v-3b48ca05]{border-color:transparent}.e-button--type-primary.e-button--variant-1[data-v-3b48ca05]{background-color:#00014d;color:#53efef}.e-button--type-primary.e-button--variant-1[data-v-3b48ca05]:hover{background-color:#000333;color:#53efef;border-color:#53efef}.e-button--type-primary.e-button--variant-1[data-v-3b48ca05]:focus,.e-button--type-primary.e-button--variant-1.e-button--loading[data-v-3b48ca05]{border-color:#53efef;border-width:2px}.e-button--type-primary.e-button--variant-1[data-v-3b48ca05] svg path{fill:#53efef}.e-button--type-primary.e-button--variant-2[data-v-3b48ca05]{background-color:#007bc4;color:#fff}.e-button--type-primary.e-button--variant-2[data-v-3b48ca05]:hover{background-color:#266198;color:#fff;border-color:#007bc4}.e-button--type-primary.e-button--variant-2[data-v-3b48ca05]:focus,.e-button--type-primary.e-button--variant-2.e-button--loading[data-v-3b48ca05]{border-color:#266198;border-width:2px}.e-button--type-primary.e-button--variant-2[data-v-3b48ca05] svg path{fill:#fff}.e-button--type-primary.e-button--variant-3[data-v-3b48ca05]{background-color:#fff;color:#007bc4}.e-button--type-primary.e-button--variant-3[data-v-3b48ca05]:hover{background-color:#e6f2f9;color:#006baa;border-color:#99cae7}.e-button--type-primary.e-button--variant-3[data-v-3b48ca05]:focus,.e-button--type-primary.e-button--variant-3.e-button--loading[data-v-3b48ca05]{border-color:#99cae7;border-width:2px}.e-button--type-primary.e-button--variant-3[data-v-3b48ca05] svg path{fill:#007bc4}.e-button--type-secondary[data-v-3b48ca05]{background-color:transparent}.e-button--type-secondary.e-button--variant-1[data-v-3b48ca05]{color:#006baa;border-color:#006baa;box-shadow:inset 0 0 0 2px #006baa}.e-button--type-secondary.e-button--variant-1[data-v-3b48ca05]:hover,.e-button--type-secondary.e-button--variant-1[data-v-3b48ca05]:focus{background-color:#e6f2f9}.e-button--type-secondary.e-button--variant-1[data-v-3b48ca05]:hover{box-shadow:none}.e-button--type-secondary.e-button--variant-1[data-v-3b48ca05]:focus{box-shadow:inset 0 0 0 2px #006baa}.e-button--type-secondary.e-button--variant-1[data-v-3b48ca05] svg path{fill:#006baa}.e-button--type-secondary.e-button--variant-2[data-v-3b48ca05]{color:#00014d;border-color:#00014d;box-shadow:inset 0 0 0 2px #00014d}.e-button--type-secondary.e-button--variant-2[data-v-3b48ca05]:hover,.e-button--type-secondary.e-button--variant-2[data-v-3b48ca05]:focus{background-color:#e6e6ec}.e-button--type-secondary.e-button--variant-2[data-v-3b48ca05]:hover{box-shadow:none}.e-button--type-secondary.e-button--variant-2[data-v-3b48ca05]:focus{box-shadow:inset 0 0 0 2px #00014d}.e-button--type-secondary.e-button--variant-2[data-v-3b48ca05] svg path{fill:#00014d}.e-button--type-secondary.e-button--variant-3[data-v-3b48ca05]{color:#fff;border-color:#fff;box-shadow:inset 0 0 0 2px #fff}.e-button--type-secondary.e-button--variant-3[data-v-3b48ca05]:hover,.e-button--type-secondary.e-button--variant-3[data-v-3b48ca05]:focus{background-color:#fff3}.e-button--type-secondary.e-button--variant-3[data-v-3b48ca05]:hover{box-shadow:none}.e-button--type-secondary.e-button--variant-3[data-v-3b48ca05]:focus{box-shadow:inset 0 0 0 2px #fff}.e-button--type-secondary.e-button--variant-3[data-v-3b48ca05] svg path{fill:#fff}.e-button--type-paypal[data-v-3b48ca05]{border-color:transparent;background-color:#ffc439}@media(min-width: 768px){.e-button--type-paypal[data-v-3b48ca05]{min-width:100%}}.e-button--type-paypal[data-v-3b48ca05]:hover{background-color:#e6b03b}.e-button--type-paypal[data-v-3b48ca05]:focus{border-color:#e6b03b;border-width:2px}.e-button--type-paypal[data-v-3b48ca05] .e-icon{display:flex}</style>
      <style type="text/css">.e-avatar[data-v-192c2af4]{border-radius:50%;display:flex;justify-content:center;align-items:center;overflow:hidden}.e-avatar--size-xs[data-v-192c2af4]{height:32px;width:32px}.e-avatar--size-s[data-v-192c2af4]{height:48px;width:48px}.e-avatar--size-m[data-v-192c2af4]{height:64px;width:64px}.e-avatar--size-l[data-v-192c2af4]{height:96px;width:96px}.e-avatar--color-brand-01[data-v-192c2af4]{background-color:#007bc4}.e-avatar--color-brand-01-tint-5[data-v-192c2af4]{background-color:#f2f8fc}.e-avatar__image[data-v-192c2af4]{object-fit:cover;height:100%;width:100%}.e-avatar__initials[data-v-192c2af4]{font-weight:600;color:#fff}.e-avatar__initials--size-xs[data-v-192c2af4]{font-size:1.2rem;line-height:1.8rem}.e-avatar__initials--size-s[data-v-192c2af4]{font-size:1.6rem;line-height:2.4rem}.e-avatar__initials--size-m[data-v-192c2af4]{font-size:2rem;line-height:2.8rem}.e-avatar__initials--size-l[data-v-192c2af4]{font-size:3.2rem;line-height:4.2rem}</style>
      <style type="text/css">.fadeInOutDefault-enter-active[data-v-fc484b2c],.fadeInOutDefault-leave-active[data-v-fc484b2c]{transition:opacity .3s ease-out}.fadeInOutDefault-enter[data-v-fc484b2c],.fadeInOutDefault-leave-to[data-v-fc484b2c]{opacity:0}.fadeInDefault-enter-active[data-v-fc484b2c]{transition:opacity .3s ease-out}.fadeInDefault-enter[data-v-fc484b2c]{opacity:0}.fadeOutDefault-leave-active[data-v-fc484b2c]{transition:opacity .3s ease-out}.fadeOutDefault-leave-to[data-v-fc484b2c]{opacity:0}.toasts-list-enter[data-v-fc484b2c]{opacity:0;transform:translateX(100px)}.toasts-list-leave-to[data-v-fc484b2c]{opacity:0}.toasts-list-leave-active[data-v-fc484b2c]{position:absolute;right:-100px !important}.buttonIconFade-enter-active[data-v-fc484b2c],.buttonIconFade-leave-active[data-v-fc484b2c]{transition:all .3s}.buttonIconFade-leave-active[data-v-fc484b2c]{position:absolute;left:7px}.buttonIconFade-enter[data-v-fc484b2c],.buttonIconFade-leave-to[data-v-fc484b2c]{opacity:0;transform:translateX(10px)}.e-modal[data-v-fc484b2c]{position:fixed;top:0;bottom:0;left:0;right:0;display:flex;justify-content:center;align-items:center;padding:1.6rem;z-index:40}.e-modal__overlay[data-v-fc484b2c]{position:fixed;width:100%;height:100%;background-color:rgba(1,31,68,.8)}.e-modal__card-section[data-v-fc484b2c]{z-index:41}.e-modal-card[data-v-fc484b2c]{position:relative;width:100%;max-height:100%;color:#00014d;overflow:auto}@media(min-width: 768px){.e-modal-card[data-v-fc484b2c]{width:588px}}.e-modal-card[data-v-fc484b2c] .e-card__body{padding:56px 24px 32px}@media(min-width: 768px){.e-modal-card[data-v-fc484b2c] .e-card__body{padding:56px 48px 48px}}.e-modal-card__close-button[data-v-fc484b2c]{position:absolute;top:16px;right:16px;width:24px;height:24px}.e-modal-card__close-button[data-v-fc484b2c]:focus{box-shadow:0 0 0 2px #fff,0 0 0 4px #53efef;border-color:transparent !important}.e-modal-card__close-button[data-v-fc484b2c]:before{content:"";position:absolute;width:56px;height:56px}.e-modal-card__close-button[data-v-fc484b2c] .e-icon{display:flex;align-items:center;width:18px;height:18px;margin:0 auto}.e-modal-card__avatar[data-v-fc484b2c]{margin-bottom:16px}.e-modal-card__heading[data-v-fc484b2c]{padding:0;margin-bottom:12px}@media(min-width: 768px){.e-modal-card__heading[data-v-fc484b2c]{margin-bottom:16px}}.e-modal-card__slot-wrapper[data-v-fc484b2c] p{padding-bottom:12px}@media(min-width: 768px){.e-modal-card__slot-wrapper[data-v-fc484b2c] p{padding-bottom:16px}}.e-modal-card__slot-wrapper[data-v-fc484b2c] p:last-of-type{padding-bottom:0}.e-modal-card__buttons-wrapper[data-v-fc484b2c]{margin-top:32px;display:grid;row-gap:16px}@media(min-width: 768px){.e-modal-card__buttons-wrapper[data-v-fc484b2c]{grid-template-columns:1fr 1fr;column-gap:16px;direction:rtl;margin-top:40px}}</style>
      <style type="text/css">.e-input[data-v-6ab39cc1]{color:#00014d;position:relative}.e-input--narrow[data-v-6ab39cc1]{width:216px}.e-input--no-min-width .e-input__input[data-v-6ab39cc1]{min-width:inherit}.e-input__wrapper[data-v-6ab39cc1]{width:100%;padding-bottom:16px}@media(min-width: 768px){.e-input__wrapper[data-v-6ab39cc1]{width:456px}}.e-input__wrapper[data-v-6ab39cc1]:last-of-type{padding-bottom:0}.e-input__label[data-v-6ab39cc1]{font-size:1.4rem;line-height:2.2rem;flex-direction:row}.e-input__label span[data-v-6ab39cc1]{display:flex;margin-bottom:4px}.e-input__helper[data-v-6ab39cc1]{display:flex;flex-direction:row;font-size:1.2rem;line-height:18px;color:#616a82;margin-top:2px}.e-input__helper--error[data-v-6ab39cc1]{color:#ba0808}.e-input__input[data-v-6ab39cc1]{outline:none;border-style:solid;border-width:1px;border-color:#80889b;border-radius:2px;background-color:#fff;min-width:216px;max-width:100%;width:100%;height:44px;padding:0 16px;color:#00014d;font-family:inherit;font-size:1.6rem;caret-color:#007bc4;font-family:inherit}.e-input__input--currency[data-v-6ab39cc1],.e-input__input--ebay-gsp[data-v-6ab39cc1]{color:#80889b;font-weight:600;border-right-style:solid;border-right-color:#80889b;border-right-width:1px;position:absolute;left:16px;top:calc(100% - 44px);display:inline-block;height:44px;width:24px;line-height:46px}.e-input__input[data-v-6ab39cc1]:hover{border-color:#000c8c}.e-input__input--currency[data-v-6ab39cc1]{width:24px}.e-input__input--ebay-gsp[data-v-6ab39cc1]{width:auto;padding-right:16px}.e-input__input--search[data-v-6ab39cc1]{position:absolute;top:calc(100% - 44px);width:45px;height:44px;right:0;border-left-style:solid;border-left-color:#80889b;border-left-width:1px}.e-input__input--length[data-v-6ab39cc1]{color:#80889b;font-weight:600;border-left-style:solid;border-left-color:#80889b;border-left-width:1px;position:absolute;right:0;top:calc(100% - 44px);display:flex;height:44px;line-height:46px;padding-left:12px;padding-right:16px;font-size:1.2rem}.e-input__input--length span[data-v-6ab39cc1]{display:inline-block;width:36px;text-align:right}.e-input__input--context[data-v-6ab39cc1]{padding-left:44px}.e-input__input--context-for-ebay[data-v-6ab39cc1]{padding-left:112px}.e-input__input--context-for-ebay[data-v-6ab39cc1]:focus{padding-left:111px !important}.e-input__input--is-currency[data-v-6ab39cc1]{padding-left:54px}.e-input__input--is-currency[data-v-6ab39cc1]:focus{padding-left:53px !important}.e-input__input--disabled[data-v-6ab39cc1]{color:#616a82}.e-input__input[data-v-6ab39cc1]:focus{padding:0 15px;border-color:#000c8c;border-width:2px}.e-input__input:focus.e-input__input--context[data-v-6ab39cc1]{padding-left:43px}.e-input__input:focus.e-input__input--with-left-icon[data-v-6ab39cc1]{padding-left:43px}.e-input__input[data-v-6ab39cc1]:hover{border-color:#000c8c}.e-input__input[data-v-6ab39cc1]:disabled{background-color:#dfe1e6;border-color:#80889b;color:#616a82}.e-input__input[data-v-6ab39cc1]::placeholder{color:#00014d}.e-input__input--focus[data-v-6ab39cc1]{border-color:#000c8c}.e-input__input--success[data-v-6ab39cc1]{border-color:#007bc4}.e-input__input--error[data-v-6ab39cc1]{border-color:#ba0808}.e-input__input--error[data-v-6ab39cc1]:hover{border-color:#ba0808}.e-input__input--error[data-v-6ab39cc1]:focus{border-color:#ba0808}.e-input__input--with-left-icon[data-v-6ab39cc1]{padding-left:44px}.e-input__field[data-v-6ab39cc1]{text-overflow:ellipsis}.e-input__field--error[data-v-6ab39cc1]{padding-right:44px}.e-input__field--success[data-v-6ab39cc1]{padding-right:44px}.e-input__field--character-limit[data-v-6ab39cc1]{padding-right:74px}.e-input__field--character-limit[data-v-6ab39cc1]:focus{padding-right:74px}.e-input__field--character-limit.e-input__field--success[data-v-6ab39cc1]{padding-right:107px}.e-input__field--character-limit.e-input__field--error[data-v-6ab39cc1]{padding-right:107px}.e-input__field--reset-showing[data-v-6ab39cc1]{padding-right:37px}.e-input__field--reset-showing.e-input__field--success[data-v-6ab39cc1]{padding-right:71px}.e-input__field--reset-showing.e-input__field--error[data-v-6ab39cc1]{padding-right:71px}.e-input__field--has-units[data-v-6ab39cc1]{padding-right:58px}.e-input__field--has-units.e-input__field--success[data-v-6ab39cc1]{padding-right:93px}.e-input__field--has-units.e-input__field--error[data-v-6ab39cc1]{padding-right:93px}.e-input__field--search[data-v-6ab39cc1]{padding-right:54px}.e-input__field--search.e-input__field--reset-showing[data-v-6ab39cc1]{padding-right:79px}.e-input__field--search.e-input__field--reset-showing.e-input__field--success[data-v-6ab39cc1]{padding-right:113px}.e-input__field--search.e-input__field--reset-showing.e-input__field--error[data-v-6ab39cc1]{padding-right:113px}.e-input__field--search.e-input__field--error[data-v-6ab39cc1]{padding-right:93px}.e-input__end-icon[data-v-6ab39cc1]{position:absolute;right:10px;top:calc(100% - 34px)}.e-input__end-icon--length[data-v-6ab39cc1]{right:60px}.e-input__end-icon--character-limit[data-v-6ab39cc1]{right:74px}.e-input__end-icon--discount[data-v-6ab39cc1]{right:38px}.e-input__end-icon--discount-search[data-v-6ab39cc1]{right:80px}.e-input__end-icon--discount-search-empty[data-v-6ab39cc1]{right:60px}.e-input__end-icon--reset[data-v-6ab39cc1]{top:calc(100% - 30px);right:12px;width:16px;height:16px}.e-input__end-icon--reset[data-v-6ab39cc1] .e-icon{display:flex;align-items:center;width:12px;height:12px}.e-input__start-icon[data-v-6ab39cc1]{position:absolute;left:11px;top:calc(100% - 34px);width:22px;height:16px}.e-input__search-icon[data-v-6ab39cc1]{border-top-right-radius:2px;border-bottom-right-radius:2px}.e-input__discount-icon[data-v-6ab39cc1]{position:absolute;top:calc(100% - 30px);right:12px;width:16px;height:16px}.e-input__discount-icon-search[data-v-6ab39cc1]{right:54px}.e-input__discount-icon[data-v-6ab39cc1]:before{content:"";position:absolute;width:32px;height:42px}.e-input__discount-icon[data-v-6ab39cc1] .e-icon{display:flex;align-items:center;width:12px;height:12px}.e-input__loading-icon[data-v-6ab39cc1]{position:absolute;top:calc(100% - 30px);right:12px;width:16px;height:16px}.e-input__left-icon[data-v-6ab39cc1]{position:absolute;bottom:10px;left:10px;width:24px;height:24px}.e-input__clear-icon[data-v-6ab39cc1]{position:absolute;top:calc(100% - 34px);right:12px;width:16px;height:16px;cursor:pointer}</style>
      <style type="text/css">.search__input[data-v-3348fa8e]{margin-bottom:16px;width:100%}.search__button[data-v-3348fa8e]{width:100%}@media(min-width: 768px){.search__button[data-v-3348fa8e]{width:auto}}.search__button-container[data-v-3348fa8e]{width:100%;display:flex;justify-content:flex-end}.search__button-container--left[data-v-3348fa8e]{justify-content:flex-start}</style>
      <style type="text/css">.track-another-parcel__button[data-v-bf9b0db0]{display:flex}.track-another-parcel__button--below-desktop[data-v-bf9b0db0]{display:flex}@media(min-width: 992px){.track-another-parcel__button--below-desktop[data-v-bf9b0db0]{display:none}}.track-another-parcel__button--above-desktop[data-v-bf9b0db0]{display:none}@media(min-width: 992px){.track-another-parcel__button--above-desktop[data-v-bf9b0db0]{display:flex}}.track-another-parcel__modal-title[data-v-bf9b0db0]{padding:0;margin-bottom:8px}.track-another-parcel__modal-text-small[data-v-bf9b0db0]{margin-bottom:16px;font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.track-another-parcel__modal-text-small[data-v-bf9b0db0]{line-height:2.2rem}}</style>
      <style type="text/css">.postcode-modal__body{width:100%}.postcode-modal__input{width:100% !important}</style>
      <style type="text/css">.app-container[data-v-a7bb8874]{margin:0 auto;max-width:950px;width:calc(100% - 32px)}@media(min-width: 768px){.app-container[data-v-a7bb8874]{width:calc(100% - 64px)}}.homepage-container[data-v-a7bb8874]{margin:0 auto;max-width:1200px;width:calc(100% - 32px)}@media(min-width: 768px){.homepage-container[data-v-a7bb8874]{width:calc(100% - 64px)}}@media(min-width: 0px)and (max-width: 767px){.hide-below-tablet[data-v-a7bb8874]{display:none}}@media(min-width: 768px)and (max-width: 991px){.hide-below-tablet[data-v-a7bb8874]{display:none}}@media(min-width: 0px)and (max-width: 767px){.hide-below-mobile[data-v-a7bb8874]{display:none}}@media(min-width: 768px){.hide-above-mobile[data-v-a7bb8874]{display:none}}@media(min-width: 992px){.hide-above-tablet[data-v-a7bb8874]{display:none}}.flex-grow[data-v-a7bb8874]{flex-grow:1}.clickable[data-v-a7bb8874]{cursor:pointer}</style>
      <style type="text/css">.app-container[data-v-df9e20ba]{margin:0 auto;max-width:950px;width:calc(100% - 32px)}@media(min-width: 768px){.app-container[data-v-df9e20ba]{width:calc(100% - 64px)}}.homepage-container[data-v-df9e20ba]{margin:0 auto;max-width:1200px;width:calc(100% - 32px)}@media(min-width: 768px){.homepage-container[data-v-df9e20ba]{width:calc(100% - 64px)}}@media(min-width: 0px)and (max-width: 767px){.hide-below-tablet[data-v-df9e20ba]{display:none}}@media(min-width: 768px)and (max-width: 991px){.hide-below-tablet[data-v-df9e20ba]{display:none}}@media(min-width: 0px)and (max-width: 767px){.hide-below-mobile[data-v-df9e20ba]{display:none}}@media(min-width: 768px){.hide-above-mobile[data-v-df9e20ba]{display:none}}@media(min-width: 992px){.hide-above-tablet[data-v-df9e20ba]{display:none}}.flex-grow[data-v-df9e20ba]{flex-grow:1}.clickable[data-v-df9e20ba]{cursor:pointer}</style>
      <style type="text/css">@media(min-width: 0px)and (max-width: 767px){.delivery-status-rhs{padding-top:24px}}@media(min-width: 0px)and (max-width: 767px){.delivery-status-rhs--hide-section-top-border .delivery-status-rhs__section:first-child{border-top:none;padding-top:0}}.delivery-status-rhs__title{padding:0;margin-bottom:4px}.delivery-status-rhs__text{padding:0}.delivery-status-rhs__section+.delivery-status-rhs__section{margin-top:24px}@media(min-width: 0px)and (max-width: 767px){.delivery-status-rhs__section:first-child{border-top:1px solid #cce5f3;padding-top:24px}.delivery-status-rhs__section:not(.hide-below-mobile)~.delivery-status-rhs__button-container{margin-top:24px}}@media(min-width: 0px)and (max-width: 767px){.delivery-status-rhs__button-container{border-top:1px solid #cce5f3;padding-top:24px}}@media(min-width: 768px){.delivery-status-rhs__button-container{margin-top:24px}}</style>
      <style type="text/css">.timeline[data-v-99ae94d4]{position:relative;height:40px}.timeline--rotated[data-v-99ae94d4]{transform:scale(-1, 1)}.timeline__bar[data-v-99ae94d4]{position:relative;top:50%;left:0;height:3px;margin-right:2px;background-color:#99cae7}.timeline__progress[data-v-99ae94d4]{position:relative;height:3px;background-color:#007bc4}.timeline__image[data-v-99ae94d4]{z-index:1;position:absolute;top:0;left:0}.timeline__image--second-step[data-v-99ae94d4]{left:25%;transform:translateX(-50%)}.timeline__image--third-step[data-v-99ae94d4]{left:50%;transform:translateX(-50%)}.timeline__image--fourth-step[data-v-99ae94d4]{left:70%;transform:translateX(-50%)}.timeline__image--last-step[data-v-99ae94d4]{left:auto;right:0}.timeline__image--ready-to-return[data-v-99ae94d4]{left:auto;right:-1px;transform:scaleX(-1)}.timeline__image--returned[data-v-99ae94d4]{left:0}.timeline__image--returned.timeline__image--not-transparent[data-v-99ae94d4]::before{width:calc(100% - 1px)}.timeline__image--not-transparent[data-v-99ae94d4]::before{content:"";position:absolute;top:0;left:0;width:100%;height:100%;background-color:#fff;z-index:-1}.timeline__arrow[data-v-99ae94d4]{position:absolute;top:50%;right:-1px;height:16px;width:16px;transform-origin:right top;transform:translateY(1.5px) rotate(45deg)}.timeline__arrow--hidden[data-v-99ae94d4]{display:none}.timeline__arrow--left[data-v-99ae94d4]{right:unset;left:-19px;transform:translateY(1.5px) rotate(-135deg)}.timeline__arrow[data-v-99ae94d4]::before,.timeline__arrow[data-v-99ae94d4]::after{content:"";position:absolute;width:100%;height:3px;background-color:#99cae7;border-radius:1.5px}.timeline__arrow[data-v-99ae94d4]::after{transform-origin:right bottom;transform:rotate(-90deg) translateX(3px)}</style>
      <style type="text/css">.delivery-status-ticket[data-v-83033bd4]{display:flex;flex-direction:column;padding:20px 16px 24px;border-radius:4px;background-color:#fff}@media(min-width: 768px){.delivery-status-ticket[data-v-83033bd4]{flex-direction:row;padding:40px}}@media(min-width: 768px)and (max-width: 991px){.delivery-status-ticket__left[data-v-83033bd4]{padding-right:24px;width:50%}.delivery-status-ticket__left[data-v-83033bd4]:only-child{width:450px}}@media(min-width: 992px){.delivery-status-ticket__left[data-v-83033bd4]{padding-right:40px;width:450px}}.delivery-status-ticket__right[data-v-83033bd4]{display:flex;justify-content:center;flex-direction:column}@media(min-width: 768px)and (max-width: 991px){.delivery-status-ticket__right[data-v-83033bd4]{width:50%}}@media(min-width: 992px){.delivery-status-ticket__right[data-v-83033bd4]{width:calc(100% - 450px)}}@media(min-width: 768px){.delivery-status-ticket__right[data-v-83033bd4]{border-left:1px solid #cce5f3;padding-left:40px}}.delivery-status-ticket__status[data-v-83033bd4]{display:flex;margin-bottom:8px}.delivery-status-ticket__status-icon[data-v-83033bd4]{margin-top:1px;margin-right:8px}@media(min-width: 768px){.delivery-status-ticket__status-icon[data-v-83033bd4]{margin-top:6px}}.delivery-status-ticket__status-title[data-v-83033bd4]{padding:0}.delivery-status-ticket__description[data-v-83033bd4]{margin-bottom:24px;font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.delivery-status-ticket__description[data-v-83033bd4]{line-height:2.2rem}}.delivery-status-ticket__contact-button[data-v-83033bd4]{margin-top:24px}@media(min-width: 0px)and (max-width: 767px){.delivery-status-ticket__contact-button[data-v-83033bd4]{border-top:1px solid #cce5f3;padding-top:20px}}@media(min-width: 768px){.delivery-status-ticket__contact-button[data-v-83033bd4]{width:180px}}.delivery-status-ticket__time[data-v-83033bd4]{display:flex;margin-top:24px;padding-top:20px;border-top:1px solid #cce5f3}@media(min-width: 768px){.delivery-status-ticket__time[data-v-83033bd4]{margin-top:16px;padding-top:0;border-top:none}}.delivery-status-ticket__time-section[data-v-83033bd4]{flex-grow:1}@media(min-width: 768px){.delivery-status-ticket__time-section[data-v-83033bd4]{flex-grow:0;margin-right:32px}}.delivery-status-ticket__time-title[data-v-83033bd4]{padding:0;margin-bottom:4px}.delivery-status-ticket__time-text[data-v-83033bd4]{padding:0}</style>
      <style type="text/css">.courier-box[data-v-1ab07546]{margin-bottom:32px}.courier-box__button[data-v-1ab07546]{min-width:248px;margin-top:24px}@media(min-width: 768px){.courier-box__button[data-v-1ab07546]{margin-top:0}}.courier-box__rating[data-v-1ab07546]{font-weight:600;padding-top:2px}.courier-box__star[data-v-1ab07546]{position:relative;width:24px;margin-right:4px}.courier-box__star[data-v-1ab07546]:last-of-type{margin-right:10px}.courier-box__star--empty[data-v-1ab07546]{position:absolute;top:0}.courier-box__star--filled[data-v-1ab07546]{position:absolute;top:0}.courier-box__body[data-v-1ab07546]{display:flex;flex-direction:column}@media(min-width: 768px){.courier-box__body[data-v-1ab07546]{flex-direction:row}}.courier-box__service[data-v-1ab07546]{padding:16px 0 0 80px}@media(min-width: 768px){.courier-box__service[data-v-1ab07546]{border-left:1px solid #cce5f3;margin-left:32px;padding:0 0 0 32px}}.courier-box__service-title[data-v-1ab07546]{font-size:1.2rem;line-height:1.6rem;margin-bottom:4px;font-weight:600}@media(min-width: 768px){.courier-box__service-title[data-v-1ab07546]{line-height:1.8rem}}.courier-box__service-text[data-v-1ab07546]{font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.courier-box__service-text[data-v-1ab07546]{line-height:2.2rem}}.courier-box__courier[data-v-1ab07546]{display:flex;align-items:center}.courier-box__courier-name[data-v-1ab07546]{padding:0}.courier-box__courier-name--bold[data-v-1ab07546]{font-weight:600}.courier-box__courier-name-container[data-v-1ab07546]{margin-bottom:8px}.courier-box__courier-stars[data-v-1ab07546]{display:flex;margin-right:8px}.courier-box__courier-rating[data-v-1ab07546]{display:flex}.courier-box__courier-info[data-v-1ab07546]{display:flex;flex-direction:column}.courier-box__footer[data-v-1ab07546]{border-top:1px solid #cce5f3;margin-top:32px;padding-top:20px;display:flex;flex-direction:column}@media(min-width: 768px){.courier-box__footer[data-v-1ab07546]{flex-direction:row}}.courier-box__footer-info[data-v-1ab07546]{display:flex;align-items:center}.courier-box__footer-text[data-v-1ab07546]{padding:0;font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.courier-box__footer-text[data-v-1ab07546]{line-height:2.2rem;padding:0 24px 0 0}}.courier-box__footer-tick[data-v-1ab07546]{margin-right:8px}.courier-box__title[data-v-1ab07546]{padding:0 0 16px}.courier-box__avatar[data-v-1ab07546]{width:64px;height:64px;margin-right:16px}@media(min-width: 768px){.courier-box__avatar[data-v-1ab07546]{height:80px;width:80px}}.courier-box__avatar[data-v-1ab07546]  svg{height:32px;width:32px}@media(min-width: 768px){.courier-box__avatar[data-v-1ab07546]  svg{height:40px;width:40px}}</style>
      <style type="text/css">.follow-my-parcel-list{background-color:#fff;width:100%;margin:8px 0 0px}@media(min-width: 768px)and (max-width: 991px){.follow-my-parcel-list{margin:16px 0 4px}}@media(min-width: 992px){.follow-my-parcel-list{margin:24px 0 8px}}.follow-my-parcel-list__neighbour{margin-top:16px}.follow-my-parcel-list__row{color:#00014d;padding:0 0 0 8px;display:flex;position:relative;width:100%;cursor:pointer}@media(min-width: 768px){.follow-my-parcel-list__row{padding:0 0 0 25px}}.follow-my-parcel-list__row-body{width:100%}.follow-my-parcel-list__row:last-of-type .follow-my-parcel-list__row-body{border-left:none}.follow-my-parcel-list__row--no-expand{cursor:auto}.follow-my-parcel-list__row--show .follow-my-parcel-list__row-title--mixed{border-left:1px solid #000c8c}.follow-my-parcel-list__row--show:last-of-type .follow-my-parcel-list__row-body::after{content:"";width:5px;height:1px;background-color:#000c8c;position:absolute;left:6px}@media(min-width: 768px){.follow-my-parcel-list__row--show:last-of-type .follow-my-parcel-list__row-body::after{left:23px}}.follow-my-parcel-list__row--show:last-of-type .follow-my-parcel-list__row-title{border-left:1px dotted #99cae7}.follow-my-parcel-list__row--show:last-of-type .follow-my-parcel-list__row-title--solid{border-left:1px solid #000c8c}.follow-my-parcel-list__row--show:last-of-type .follow-my-parcel-list__row-text{border-left:1px dotted #99cae7}.follow-my-parcel-list__row--show:last-of-type .follow-my-parcel-list__row-text--solid{border-left:1px solid #000c8c}.follow-my-parcel-list__row--hide .follow-my-parcel-list__row-title--mixed{border-left:1px dotted #99cae7}.follow-my-parcel-list__row--hide:last-of-type .follow-my-parcel-list__row-title{margin-left:1px;border-left:none;padding-bottom:0}.follow-my-parcel-list__row--hide:last-of-type .follow-my-parcel-list__row-text{margin-left:1px;border-left:none}.follow-my-parcel-list__row--hide .follow-my-parcel-list__row-text{display:none}.follow-my-parcel-list__row--hide .follow-my-parcel-list__accordion-icon{transform:rotate(-180deg)}.follow-my-parcel-list__row--returned{color:#00014d}.follow-my-parcel-list__row--returned .follow-my-parcel-list__tick{display:none}.follow-my-parcel-list__row--returned .follow-my-parcel-list__row-title-inner{font-weight:400}.follow-my-parcel-list__row--returned .follow-my-parcel-list__icon::before{content:"";width:25px;height:25px;border-radius:50%;border:1px solid #99cae7;background-color:#fff}.follow-my-parcel-list__row--returned .follow-my-parcel-list__row-title{border-left-color:#99cae7}.follow-my-parcel-list__row--returned .follow-my-parcel-list__row-text{border-left-color:#99cae7}.follow-my-parcel-list__row--returned .follow-my-parcel-list__row-text-date{color:#00014d}.follow-my-parcel-list__row--disabled{color:#00014d;cursor:default}.follow-my-parcel-list__row--disabled .follow-my-parcel-list__row-title-inner{font-weight:400}.follow-my-parcel-list__row--disabled .follow-my-parcel-list__tick{display:none}.follow-my-parcel-list__row--disabled .follow-my-parcel-list__icon::before{content:"";width:25px;height:25px;border-radius:50%;border:1px solid #99cae7;background-color:#fff}.follow-my-parcel-list__row--disabled .follow-my-parcel-list__accordion-icon{display:none}.follow-my-parcel-list__row--skipped{cursor:default}.follow-my-parcel-list__row--skipped .follow-my-parcel-list__tick{display:flex}.follow-my-parcel-list__row--skipped .follow-my-parcel-list__row-title-inner{font-weight:600}.follow-my-parcel-list__row--skipped .follow-my-parcel-list__icon::before{width:0;height:0;border:none}.follow-my-parcel-list__row-title{padding:0px 28px 32px;position:relative;border-left:1px dotted #99cae7}@media(min-width: 768px){.follow-my-parcel-list__row-title{padding:0 40px 32px 29px}}.follow-my-parcel-list__row-title--solid{border-left:1px solid #000c8c}.follow-my-parcel-list__row-title-inner{position:relative;top:-5px;font-size:1.6rem;line-height:2.2rem;font-weight:600}.follow-my-parcel-list__row-text{padding:0 28px 32px;position:relative;border-left:1px dotted #99cae7}@media(min-width: 768px){.follow-my-parcel-list__row-text{padding:0 40px 32px 29px}}.follow-my-parcel-list__row-text-description{font-size:1.4rem;line-height:2rem}.follow-my-parcel-list__row-text--solid{border-left:1px solid #000c8c}.follow-my-parcel-list__row-text-inner{position:relative;top:-5px;font-size:1.4rem}.follow-my-parcel-list__row-text-date{font-size:1.4rem;line-height:2rem;font-weight:600;color:#00014d;margin-bottom:4px}.follow-my-parcel-list__row-text::before{content:"";width:9px;height:9px;border-radius:50%;background-color:#53efef;position:absolute;left:-5px;border:2px solid #00014d}.follow-my-parcel-list__row-text--description{margin-bottom:16px}@media(min-width: 768px){.follow-my-parcel-list__row-text--description{margin-bottom:24px}}.follow-my-parcel-list__accordion-icon{transform:rotate(0);display:flex;position:absolute;top:-7px;right:0px;transition:transform .5s}@media(min-width: 768px){.follow-my-parcel-list__accordion-icon{right:12px}}.follow-my-parcel-list__icon{left:-4px;display:flex;justify-content:center;align-items:center;position:absolute;top:-7px;z-index:1;background-color:#fff}.follow-my-parcel-list__icon--warning{position:relative}@media(min-width: 768px){.follow-my-parcel-list__icon{left:13px}}.follow-my-parcel-list__icon--hide{display:none}.follow-my-parcel-list__proof{width:100%;margin-right:0;margin-bottom:16px}@media(min-width: 768px){.follow-my-parcel-list__proof{width:350px;margin-right:24px;margin-bottom:0px}}.follow-my-parcel-list__proof:first-of-type{margin-top:16px}@media(min-width: 768px){.follow-my-parcel-list__proof:first-of-type{margin-top:0}}.follow-my-parcel-list__proof:last-of-type{margin-bottom:0px}.follow-my-parcel-list__proof-container{display:flex;flex-direction:column}@media(min-width: 768px){.follow-my-parcel-list__proof-container{flex-direction:row}}@media(min-width: 992px){.follow-my-parcel-list__proof-container{flex-direction:row}}.follow-my-parcel-list__proof-image{width:100%;border-radius:4px}.follow-my-parcel-list__proof-text{color:#00014d;margin-bottom:8px;margin-top:8px;padding:0;font-weight:600}.follow-my-parcel-list__signature{margin-top:16px}.follow-my-parcel-list__signature-text{font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.follow-my-parcel-list__signature-text{line-height:2.2rem}}.follow-my-parcel-list__signature-text--bold{font-weight:600;padding-bottom:16px}.follow-my-parcel-list__signature-button{min-width:115px}</style>
      <style type="text/css">.app-container{margin:0 auto;max-width:950px;width:calc(100% - 32px)}@media(min-width: 768px){.app-container{width:calc(100% - 64px)}}.homepage-container{margin:0 auto;max-width:1200px;width:calc(100% - 32px)}@media(min-width: 768px){.homepage-container{width:calc(100% - 64px)}}@media(min-width: 0px)and (max-width: 767px){.hide-below-tablet{display:none}}@media(min-width: 768px)and (max-width: 991px){.hide-below-tablet{display:none}}@media(min-width: 0px)and (max-width: 767px){.hide-below-mobile{display:none}}@media(min-width: 768px){.hide-above-mobile{display:none}}@media(min-width: 992px){.hide-above-tablet{display:none}}.flex-grow{flex-grow:1}.clickable{cursor:pointer}.follow-my-parcel__title{padding:0 0 4px}.follow-my-parcel__subtitle{padding:0 0 16px}.follow-my-parcel__list-container{padding:10px 0 16px}.follow-my-parcel__card-bottom{display:flex;align-items:center;padding-top:24px;border-top:1px solid #cce5f3}@media(min-width: 992px){.follow-my-parcel__card-bottom{padding-top:32px}}.follow-my-parcel__card-bottom-text{padding:0;flex-grow:1}.follow-my-parcel__card-top{padding-bottom:24px;border-bottom:1px solid #cce5f3;font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.follow-my-parcel__card-top{line-height:2.2rem}}@media(min-width: 992px){.follow-my-parcel__card-top{padding-bottom:32px}}.follow-my-parcel__card-top-bold{font-weight:600}.follow-my-parcel p{font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.follow-my-parcel p{line-height:2.2rem}}</style>
      <style type="text/css">.e-accordion-row[data-v-2ddfd4ba]{border:1px solid #cce5f3;overflow:hidden}.e-accordion-row[data-v-2ddfd4ba]:first-of-type{border-top-left-radius:4px;border-top-right-radius:4px}.e-accordion-row[data-v-2ddfd4ba]:last-of-type{border-bottom-left-radius:4px;border-bottom-right-radius:4px}.e-accordion-row[data-v-2ddfd4ba]:not(:first-of-type){border-top:none}.e-accordion-row__header[data-v-2ddfd4ba]{font-size:16px;line-height:24px;display:flex;align-items:center;background-color:#fff;cursor:pointer;padding:16px}@media(min-width: 768px)and (max-width: 991px){.e-accordion-row__header[data-v-2ddfd4ba]{padding:24px}}@media(min-width: 992px){.e-accordion-row__header[data-v-2ddfd4ba]{padding:24px 32px}}.e-accordion-row__header[data-v-2ddfd4ba]:hover{background-color:#e6f2f9}.e-accordion-row__header-text[data-v-2ddfd4ba]{flex-grow:1;padding-right:16px}.e-accordion-row__content[data-v-2ddfd4ba]{padding:0 16px}@media(min-width: 768px)and (max-width: 991px){.e-accordion-row__content[data-v-2ddfd4ba]{padding:0 24px}}@media(min-width: 992px){.e-accordion-row__content[data-v-2ddfd4ba]{padding:0 32px}}.e-accordion-row__body[data-v-2ddfd4ba]{border-top:1px solid #cce5f3;padding:16px 0}@media(min-width: 768px)and (max-width: 991px){.e-accordion-row__body[data-v-2ddfd4ba]{padding:16px 0 24px}}@media(min-width: 992px){.e-accordion-row__body[data-v-2ddfd4ba]{padding:16px 0 32px}}.e-accordion-row--open[data-v-2ddfd4ba]{border:2px solid #66b0dc}.e-accordion-row--open[data-v-2ddfd4ba]:not(:first-of-type){border-top:2px solid #66b0dc}.e-accordion-row--open+.e-accordion-row--open[data-v-2ddfd4ba]{border-top:none}.e-accordion-row--open .e-accordion-row__header[data-v-2ddfd4ba]{padding:14px}@media(min-width: 768px)and (max-width: 991px){.e-accordion-row--open .e-accordion-row__header[data-v-2ddfd4ba]{padding:22px}}@media(min-width: 992px){.e-accordion-row--open .e-accordion-row__header[data-v-2ddfd4ba]{padding:22px 30px}}.e-accordion-row--open .e-accordion-row__content[data-v-2ddfd4ba]{padding:0 14px}@media(min-width: 768px)and (max-width: 991px){.e-accordion-row--open .e-accordion-row__content[data-v-2ddfd4ba]{padding:0 22px}}@media(min-width: 992px){.e-accordion-row--open .e-accordion-row__content[data-v-2ddfd4ba]{padding:0 30px}}.e-accordion-row--open .e-accordion-row__chevron[data-v-2ddfd4ba]{transform:rotate(180deg)}.e-accordion-row--open .e-accordion-row__header-text[data-v-2ddfd4ba]{font-weight:700}.e-accordion-row--open .e-accordion-row__header[data-v-2ddfd4ba]:hover{background-color:#fff}.e-accordion-row--mobile-footer[data-v-2ddfd4ba]{border-left:none;border-right:none}.e-accordion-row--mobile-footer[data-v-2ddfd4ba]:first-of-type{border-top-left-radius:0;border-top-right-radius:0}.e-accordion-row--mobile-footer[data-v-2ddfd4ba]:last-of-type{border-bottom-left-radius:0;border-bottom-right-radius:0}.e-accordion-row--mobile-footer .e-accordion-row__header[data-v-2ddfd4ba]{padding:12px 16px}.e-accordion-row--mobile-footer .e-accordion-row__header[data-v-2ddfd4ba]:hover{background-color:transparent}.e-accordion-row--mobile-footer .e-accordion-row__header-text[data-v-2ddfd4ba]{font-size:1.6rem;line-height:2.2rem;font-weight:600}.e-accordion-row--mobile-footer .e-accordion-row__content[data-v-2ddfd4ba]{padding:0}.e-accordion-row--mobile-footer .e-accordion-row__body[data-v-2ddfd4ba]{padding:16px;font-size:1.4rem;line-height:2rem}.e-accordion-row--mobile-footer.e-accordion-row--open[data-v-2ddfd4ba]{border-width:1px;border-color:#cce5f3}.e-accordion-row--mobile-footer.e-accordion-row--open .e-accordion-row__header[data-v-2ddfd4ba]{padding:12px 16px}.e-accordion-row--mobile-footer.e-accordion-row--open .e-accordion-row__content[data-v-2ddfd4ba]{padding:0}</style>
      <style type="text/css">.help-questions__title[data-v-a85fd612]{color:#fff;font-size:20px;font-weight:900;line-height:26px;padding:20px 0 16px 0}@media(min-width: 768px){.help-questions__title[data-v-a85fd612]{padding:32px 0 16px 0;line-height:28px}}.help-questions__accordion-wrapper[data-v-a85fd612]{background-color:#fff;border-radius:4px}.help-questions__answer-paragraph[data-v-a85fd612]{color:#00014d;font-size:14px;line-height:18px}.help-questions__answer-paragraph[data-v-a85fd612]:not(:last-child){margin-bottom:16px}@media(min-width: 768px){.help-questions__answer-paragraph[data-v-a85fd612]{font-size:16px;line-height:20px}}.help-questions__button-container[data-v-a85fd612]{display:flex;justify-content:flex-end;padding:24px 16px;border-width:0 1px 1px 1px;border-style:solid;border-color:#cce5f3;border-bottom-left-radius:4px;border-bottom-right-radius:4px}@media(min-width: 768px){.help-questions__button-container[data-v-a85fd612]{padding:24px 32px 24px 32px}}.help-questions__button-container button[data-v-a85fd612]{width:100%}@media(min-width: 768px){.help-questions__button-container button[data-v-a85fd612]{margin-left:auto;width:auto}}</style>
      <style type="text/css">.info-box[data-v-57265746]{display:flex;flex-direction:column;border-radius:4px;padding:32px 16px}@media(min-width: 768px)and (max-width: 991px){.info-box[data-v-57265746]{padding:32px 24px}}@media(min-width: 992px){.info-box[data-v-57265746]{padding:32px}}.info-box__button[data-v-57265746]{min-width:180px;width:100%}@media(min-width: 768px){.info-box__button[data-v-57265746]{width:auto}}.info-box__app[data-v-57265746]{cursor:pointer;display:none}@media(min-width: 768px){.info-box__app[data-v-57265746]{display:flex}}.info-box__app[data-v-57265746]:first-of-type{margin-right:16px}@media(max-width: 350px){.info-box__app[data-v-57265746]:first-of-type{margin-right:0;margin-bottom:16px}}.info-box__app--mobile[data-v-57265746]{display:flex}@media(min-width: 768px){.info-box__app--mobile[data-v-57265746]{width:0px;height:0px}}.info-box__app-container[data-v-57265746]{display:flex}@media(max-width: 350px){.info-box__app-container[data-v-57265746]{align-items:center;flex-direction:column}}.info-box__avatar[data-v-57265746]{margin-bottom:24px}.info-box__title[data-v-57265746]{font-size:2.4rem;line-height:3rem;font-weight:600;padding-bottom:16px}@media(min-width: 768px){.info-box__title[data-v-57265746]{font-size:3.2rem;line-height:4.2rem;padding-bottom:20px}}.info-box__text[data-v-57265746]{padding-bottom:48px;font-size:1.6rem;line-height:2.2rem}@media(min-width: 768px){.info-box__text[data-v-57265746]{line-height:2.4rem}}.info-box--variant-1[data-v-57265746]{background-color:#007bc4;color:#fff}.info-box--variant-2[data-v-57265746]{background-color:#fff;color:#00014d}</style>
      <style type="text/css">.info-boxes[data-v-02a64222]{margin-top:32px;display:flex;flex-direction:column}@media(min-width: 992px){.info-boxes[data-v-02a64222]{flex-direction:row}}@media(min-width: 992px){.info-boxes__box[data-v-02a64222]{width:50%}}.info-boxes__box[data-v-02a64222]:first-of-type{margin-bottom:32px}@media(min-width: 992px){.info-boxes__box[data-v-02a64222]:first-of-type{margin-right:16px;margin-bottom:0}}@media(min-width: 992px){.info-boxes__box[data-v-02a64222]:last-of-type{margin-left:16px}}</style>
      <style type="text/css">.app-container[data-v-3a8c1cc8]{margin:0 auto;max-width:950px;width:calc(100% - 32px)}@media(min-width: 768px){.app-container[data-v-3a8c1cc8]{width:calc(100% - 64px)}}.homepage-container[data-v-3a8c1cc8]{margin:0 auto;max-width:1200px;width:calc(100% - 32px)}@media(min-width: 768px){.homepage-container[data-v-3a8c1cc8]{width:calc(100% - 64px)}}@media(min-width: 0px)and (max-width: 767px){.hide-below-tablet[data-v-3a8c1cc8]{display:none}}@media(min-width: 768px)and (max-width: 991px){.hide-below-tablet[data-v-3a8c1cc8]{display:none}}@media(min-width: 0px)and (max-width: 767px){.hide-below-mobile[data-v-3a8c1cc8]{display:none}}@media(min-width: 768px){.hide-above-mobile[data-v-3a8c1cc8]{display:none}}@media(min-width: 992px){.hide-above-tablet[data-v-3a8c1cc8]{display:none}}.flex-grow[data-v-3a8c1cc8]{flex-grow:1}.clickable[data-v-3a8c1cc8]{cursor:pointer}.play-preview[data-v-3a8c1cc8]{margin-bottom:32px}.play-preview__body-text[data-v-3a8c1cc8]{font-size:1.4rem;line-height:2rem;padding-bottom:24px;border-bottom:1px solid #cce5f3}@media(min-width: 768px){.play-preview__body-text[data-v-3a8c1cc8]{line-height:2.2rem;padding-bottom:16px;border-bottom:none}}.play-preview__link[data-v-3a8c1cc8]{cursor:pointer;text-decoration:underline;color:#006baa;font-size:1.4rem;line-height:2rem;font-weight:600}.play-preview__link[data-v-3a8c1cc8]:hover{color:#266198}.play-preview__link--bottom[data-v-3a8c1cc8]{text-align:center;margin-top:24px}.play-preview__app[data-v-3a8c1cc8]:first-of-type{margin-right:16px}@media(max-width: 350px){.play-preview__app[data-v-3a8c1cc8]:first-of-type{margin-right:0;margin-bottom:16px}}.play-preview__app-container[data-v-3a8c1cc8]{display:flex;justify-content:center;align-items:flex-end;padding-top:20px}@media(max-width: 350px){.play-preview__app-container[data-v-3a8c1cc8]{align-items:center;flex-direction:column}}@media(min-width: 768px){.play-preview__app-container[data-v-3a8c1cc8]{margin-left:32px}}.play-preview__card-title[data-v-3a8c1cc8]{padding-top:0}.play-preview__card-inner[data-v-3a8c1cc8]{display:flex;flex-direction:column}@media(min-width: 768px){.play-preview__card-inner[data-v-3a8c1cc8]{flex-direction:row}}</style>
      <style type="text/css">@charset "UTF-8";
         .vjs-modal-dialog .vjs-modal-dialog-content, .video-js .vjs-modal-dialog, .vjs-button > .vjs-icon-placeholder:before, .video-js .vjs-big-play-button .vjs-icon-placeholder:before {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         }
         .vjs-button > .vjs-icon-placeholder:before, .video-js .vjs-big-play-button .vjs-icon-placeholder:before {
         text-align: center;
         }
         @font-face {
         font-family: VideoJS;
         src: url(data:application/font-woff;charset=utf-8;base64,d09GRgABAAAAABDkAAsAAAAAG6gAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABHU1VCAAABCAAAADsAAABUIIslek9TLzIAAAFEAAAAPgAAAFZRiV3hY21hcAAAAYQAAADaAAADPv749/pnbHlmAAACYAAAC3AAABHQZg6OcWhlYWQAAA3QAAAAKwAAADYZw251aGhlYQAADfwAAAAdAAAAJA+RCLFobXR4AAAOHAAAABMAAACM744AAGxvY2EAAA4wAAAASAAAAEhF6kqubWF4cAAADngAAAAfAAAAIAE0AIFuYW1lAAAOmAAAASUAAAIK1cf1oHBvc3QAAA/AAAABJAAAAdPExYuNeJxjYGRgYOBiMGCwY2BycfMJYeDLSSzJY5BiYGGAAJA8MpsxJzM9kYEDxgPKsYBpDiBmg4gCACY7BUgAeJxjYGS7wTiBgZWBgaWQ5RkDA8MvCM0cwxDOeI6BgYmBlZkBKwhIc01hcPjI+FGJHcRdyA4RZgQRADK3CxEAAHic7dFZbsMgAEXRS0ycyZnnOeG7y+qC8pU1dHusIOXxuoxaOlwZYWQB0Aea4quIEN4E9LzKbKjzDeM6H/mua6Lmc/p8yhg0lvdYx15ZG8uOLQOGjMp3EzqmzJizYMmKNRu27Nhz4MiJMxeu3Ljz4Ekqm7T8P52G8PP3lnTOVk++Z6iN6QZzNN1F7ptuN7eGOjDUoaGODHVsuvU8MdTO9Hd5aqgzQ50b6sJQl4a6MtS1oW4MdWuoO0PdG+rBUI+GejLUs6FeDPVqqDdDvRvqw1CfhpqM9At0iFLaAAB4nJ1YDXBTVRZ+5/22TUlJ8we0pHlJm7RJf5O8F2j6EymlSPkpxaL8U2xpa3DKj0CBhc2IW4eWKSokIoLsuMqssM64f+jA4HSdWXXXscBq67IOs3FXZ1ZYWVyRFdo899yXtIBQZ90k7717zz3v3HPPOfd854YCCj9cL9dL0RQFOqCbGJnrHb5EayiKIWN8iA/hWBblo6hUWm8TtCDwE80WMJus/irwyxOdxeB0MDb14VNJHnXYoLLSl6FfCUYO9nYPTA8Epg9090LprfbBbZ2hY0UlJUXHQp3/vtWkS6EBv8+rPMq5u9692f/dNxJNiqwC1xPE9TCUgCsSdQWgE3XQD25lkG4CN2xmTcOXWBOyser6RN6KnGbKSbmQ3+d0OI1m2W8QzLLkI2sykrWAgJJEtA8vGGW/2Q+CmT3n8zS9wZwu2DCvtuZKZN3xkrLh36yCZuUomQSqGpY8t/25VfHVhw8z4ebGBtfLb0ya9PCaDc+8dGTvk2dsh6z7WzvowlXKUSWo9MJ15a3KrEP2loOr2Ojhw6iW6hf2BDdEccQvZGpaAy7YovSwq8kr7HGllxpd71rkS6G0Sf11sl9OvMK1+jwPPODxjUwkOim9CU3ix1wNjXDfmJSEn618Bs6lpWwUpU+8PCqLMY650zjq8VhCIP17NEKTx3eaLL+s5Pi6yJWaWjTHLR1jYzPSV9VF/6Ojdb/1kO3Mk3uhHC0x6gc1BjlKQ+nQFxTYdaJkZ7ySVxLBbhR1dsboNXp1tCYKW2LRaEzpYcIx2BKNxaL0ZaUnSqfFoiNhHKR/GkX6PWUSAaJelQaqZL1EpoHNsajSEyPSoJ9IjhIxTdjHLmwZvhRDOiFTY/YeQnvrVZmiTQtGncECXtFTBZLOVwwMRgoXHAkXzMzPn1nAJJ8jYSbMDaqN2waGLzNhih/bZynUBMpIWSg7VYi7DRx2m8ALkIdRCJwI6ArJx2EI8kaDWeTQKeAFk9fjl/1AvwktjQ1P7NjyMGQyfd4vjipX6M/i52D7Cq80kqlcxEcGXRr/FEcgs0u5uGgB4VWuMFfpdn2Re6Hi3PqzmxWKsz6+ae2Pn9hXXw/fqM859UiGC0oKYYILJBqJrsn1Z1E5qOs9rQCiUQRREjm8yJcbHF5cUJufX1vAHlefw0XgUoboS3ETfQlTxBC4SOtuE8VPRJTBSCQSjZCpk7Gqzu+masaZ2y7Zjehho4F3g82BNDkAHpORG4+OCS+f6JTPmtRn/PH1kch6d04sp7AQb25aQ/pqUyXeQ8vrebG8OYQdXOQ+585u0sdW9rqalzRURiJ+9F4MweRFrKUjl1GUYhH1A27WOHw5cTFSFPMo9EeUIGnQTZHIaJ7AHLaOKsOODaNF9jkBjYG2QEsQ2xjMUAx2bBEbeTBWMHwskBjngq56S/yfgkBnWBa4K9sqKtq2t1UI8S9He5XuBRbawAdatrQEAi30Aks2+LM8WeCbalVZkWNylvJ+dqJnzVb+OHlSoKW8nPCP7Rd+CcZ2DdWAGqJ2CBFOphgywFFCFBNtfAbGtNPBCwxvygHeYMZMY9ZboBqwq/pVrsbgN5tkv152ODlbMfiqwGMBgxa4Exz3QhovRIUp6acqZmQzRq0ypDXS2TPLT02YIkQETnOE445oOGxOmXAqUJNNG7XgupMjPq2ua9asrj5yY/yuKteO1Kx0YNJTufrirLe1mZnat7OL6rnUdCWenpW6I8mAnbsY8KWs1PuSovCW9A/Z25PQ24a7cNOqgmTkLmBMgh4THgc4b9k2IVv1/g/F5nGljwPLfOgHAzJzh45V/4+WenTzmMtR5Z7us2Tys909UHqrPY7KbckoxRvRHhmVc3cJGE97uml0R1S0jdULVl7EvZtDFVBF35N9cEdjpgmAiOlFZ+Dtoh93+D3zzHr8RRNZQhnCNMNbcegOvpEwZoL+06cJQ07h+th3fZ/7PVbVC6ngTAV/KoLFuO6+2KFcU651gEb5ugPSIb1D+Xp8V4+k3sEIGnw5mYe4If4k1lFYr6SCzmM2EQ8iWtmwjnBI9kTwe1TlfAmXh7H02by9fW2gsjKwtv0aaURKil4OdV7rDL1MXIFNrhdxohcZXYTnq47WisrKitaObbf5+yvkLi5J6lCNZZ+B6GC38VNBZBDidSS/+mSvh6s+srgC8pyKMvDtt+de3c9fU76ZPfuM8ud4Kv0fyP/LqfepMT/3oZxSqpZaTa1DaQYLY8TFsHYbWYsPoRhRWfL5eSSQbhUGgGC3YLbVMk6PitTFNGpAsNrC6D1VNBKgBHMejaiuRWEWGgsSDBTJjqWIl8kJLlsaLJ2tXDr6xGfT85bM2Q06a46x2HTgvdnV8z5YDy/27J4zt6x2VtkzjoYpkq36kaBr4eQSg7tyiVweWubXZugtadl58ydapfbORfKsDTuZ0OBgx4cfdjCf5tbWNITnL120fdOi1RV1C3uKGzNdwYLcMvZ3BxoPyTOCD1XvXTp7U10gWCVmTV9b3r2z0SkGWovb2hp9I89O8a2smlyaO8muMU+dRmtzp60IzAoFpjLr1n388boLyf0dRvxhsHZ0qbWqDkwqvvpkj4l0fY6EIXRi5sQSrAvsVYwXRy4qJ2EVtD1AN7a0HWth9ymvL1xc3WTUKK/TAHA/bXDVtVWfOMfuGxGZv4Ln/jVr9jc3j1yMv0tndmyt9Vq88Y9gH1wtLX3KWjot5++jWHgAoZZkQ14wGQ20Fli71UmKJAy4xKMSTGbVdybW7FDDAut9XpD5AzWrYO7zQ8qffqF8+Ynd/clrHcdyxGy3a/3+mfNnzC/cBsveTjnTvXf1o6vzOlZw7WtqtdmPK/Errz/6NNtD72zmNOZfbmYdTGHfoofqI79Oc+R2n1lrnL6pOm0Up7kwxhTW12Amm7WYkXR2qYrF2AmgmbAsxZjwy1xpg/m1Je2vrp8v/nz2xpmlBg4E9hrMU341wVpTOh/OfmGvAnra8q6uctr60ZQHV3Q+WMQJykMj8ZsWn2QBOmmHMB+m5pDIpTFonYigiaKAhGEiAHF7EliVnQkjoLVIMPtJpBKHYd3A8GYH9jJzrWwmHx5Qjp7vDAX0suGRym1vtm/9W1/HyR8vczfMs6Sk8DSv855/5dlX9oQq52hT8syyp2rx5Id17IAyAM3wIjQPMOHzytEB64q6D5zT91yNbnx3V/nqnd017S9Y0605k3izoXLpsxde2n38yoOV9s1LcjwzNjbdX6asnBVaBj/6/DwKwPkpcqbDG7BnsXoSqWnUAmottYF6jMSdVyYZh3zVXCjwTiwwHH6sGuRiEHQGzuRX6whZkp123oy1BWE2mEfJ/tvIRtM4ZM5bDXiMsPMaAKOTyc5uL57rqyyc5y5JE5pm1i2S2iUX0CcaQ6lC6Zog7JqSqZmYlosl2K6pwNA84zRnQW6SaALYZQGW5lhCtU/W34N6o+bKfZ8cf3/Cl/+iTX3wBzpOY4mRkeNf3rptycGSshQWgGbYt5jFc2e0+DglIrwl6DVWQ7BuwaJ3Xk1J4VL5urnLl/Wf+gHU/hZoZdKNym6lG+I34FaNeZKcSpJIo2IeCVvpdsDGfKvzJnAwmeD37Ow65ZWwSowpgwX5T69s/rB55dP5BcpgDKFV8p7q2sn/1uc93bVzT/w6UrCqDTWvfCq/oCD/qZXNoUj8BL5Kp6GU017frfNXkAtiiyf/SOCEeLqnd8R/Ql9GlCRfctS6k5chvIBuQ1zCCjoCHL2DHNHIXxMJ3kQeO8lbsUXONeSfA5EjcG6/E+KdhN4bP04vBhdi883+BFBzQbxFbvZzQeY9LNBZc0FNfn5NwfDn6rCTnTw6R8o+gfpf5hCom33cRuiTlss3KHmZjD+BPN+5gXuA2ziS/Q73mLxUkpbKN/eqwz5uK0X9F3h2d1V4nGNgZGBgAOJd776+iue3+crAzc4AAje5Bfcg0xz9YHEOBiYQBQA8FQlFAHicY2BkYGBnAAGOPgaG//85+hkYGVCBMgBGGwNYAAAAeJxjYGBgYB8EmKOPgQEAQ04BfgAAAAAAAA4AaAB+AMwA4AECAUIBbAGYAcICGAJYArQC4AMwA7AD3gQwBJYE3AUkBWYFigYgBmYGtAbqB1gIEghYCG4IhAi2COh4nGNgZGBgUGYoZWBnAAEmIOYCQgaG/2A+AwAYCQG2AHicXZBNaoNAGIZfE5PQCKFQ2lUps2oXBfOzzAESyDKBQJdGR2NQR3QSSE/QE/QEPUUPUHqsvsrXjTMw83zPvPMNCuAWP3DQDAejdm1GjzwS7pMmwi75XngAD4/CQ/oX4TFe4Qt7uMMbOzjuDc0EmXCP/C7cJ38Iu+RP4QEe8CU8pP8WHmOPX2EPz87TPo202ey2OjlnQSXV/6arOjWFmvszMWtd6CqwOlKHq6ovycLaWMWVydXKFFZnmVFlZU46tP7R2nI5ncbi/dDkfDtFBA2DDXbYkhKc+V0Bqs5Zt9JM1HQGBRTm/EezTmZNKtpcAMs9Yu6AK9caF76zoLWIWcfMGOSkVduvSWechqZsz040Ib2PY3urxBJTzriT95lipz+TN1fmAAAAeJxtkMl2wjAMRfOAhABlKm2h80C3+ajgCKKDY6cegP59TYBzukAL+z1Zsq8ctaJTTKPrsUQLbXQQI0EXKXroY4AbDDHCGBNMcYsZ7nCPB8yxwCOe8IwXvOIN7/jAJ76wxHfUqWX+OzgumWAjJMV17i0Ndlr6irLKO+qftdT7i6y4uFSUvCknay+lFYZIZaQcmfH/xIFdYn98bqhra1aKTM/6lWMnyaYirx1rFUQZFBkb2zJUtoXeJCeg0WnLtHeSFc3OtrnozNwqi0TkSpBMDB1nSde5oJXW23hTS2/T0LilglXX7dmFVxLnq5U0vYATHFk3zX3BOisoQHNDFDeZnqKDy9hRNawN7Vh727hFzcJ5c8TILrKZfH7tIPxAFP0BpLeJPA==) format("woff");
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-play, .video-js .vjs-play-control .vjs-icon-placeholder, .video-js .vjs-big-play-button .vjs-icon-placeholder:before {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-play:before, .video-js .vjs-play-control .vjs-icon-placeholder:before, .video-js .vjs-big-play-button .vjs-icon-placeholder:before {
         content: "\f101";
         }
         .vjs-icon-play-circle {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-play-circle:before {
         content: "\f102";
         }
         .vjs-icon-pause, .video-js .vjs-play-control.vjs-playing .vjs-icon-placeholder {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-pause:before, .video-js .vjs-play-control.vjs-playing .vjs-icon-placeholder:before {
         content: "\f103";
         }
         .vjs-icon-volume-mute, .video-js .vjs-mute-control.vjs-vol-0 .vjs-icon-placeholder {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-volume-mute:before, .video-js .vjs-mute-control.vjs-vol-0 .vjs-icon-placeholder:before {
         content: "\f104";
         }
         .vjs-icon-volume-low, .video-js .vjs-mute-control.vjs-vol-1 .vjs-icon-placeholder {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-volume-low:before, .video-js .vjs-mute-control.vjs-vol-1 .vjs-icon-placeholder:before {
         content: "\f105";
         }
         .vjs-icon-volume-mid, .video-js .vjs-mute-control.vjs-vol-2 .vjs-icon-placeholder {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-volume-mid:before, .video-js .vjs-mute-control.vjs-vol-2 .vjs-icon-placeholder:before {
         content: "\f106";
         }
         .vjs-icon-volume-high, .video-js .vjs-mute-control .vjs-icon-placeholder {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-volume-high:before, .video-js .vjs-mute-control .vjs-icon-placeholder:before {
         content: "\f107";
         }
         .vjs-icon-fullscreen-enter, .video-js .vjs-fullscreen-control .vjs-icon-placeholder {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-fullscreen-enter:before, .video-js .vjs-fullscreen-control .vjs-icon-placeholder:before {
         content: "\f108";
         }
         .vjs-icon-fullscreen-exit, .video-js.vjs-fullscreen .vjs-fullscreen-control .vjs-icon-placeholder {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-fullscreen-exit:before, .video-js.vjs-fullscreen .vjs-fullscreen-control .vjs-icon-placeholder:before {
         content: "\f109";
         }
         .vjs-icon-square {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-square:before {
         content: "\f10a";
         }
         .vjs-icon-spinner {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-spinner:before {
         content: "\f10b";
         }
         .vjs-icon-subtitles, .video-js .vjs-subs-caps-button .vjs-icon-placeholder,
         .video-js.video-js:lang(en-GB) .vjs-subs-caps-button .vjs-icon-placeholder,
         .video-js.video-js:lang(en-IE) .vjs-subs-caps-button .vjs-icon-placeholder,
         .video-js.video-js:lang(en-AU) .vjs-subs-caps-button .vjs-icon-placeholder,
         .video-js.video-js:lang(en-NZ) .vjs-subs-caps-button .vjs-icon-placeholder, .video-js .vjs-subtitles-button .vjs-icon-placeholder {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-subtitles:before, .video-js .vjs-subs-caps-button .vjs-icon-placeholder:before,
         .video-js.video-js:lang(en-GB) .vjs-subs-caps-button .vjs-icon-placeholder:before,
         .video-js.video-js:lang(en-IE) .vjs-subs-caps-button .vjs-icon-placeholder:before,
         .video-js.video-js:lang(en-AU) .vjs-subs-caps-button .vjs-icon-placeholder:before,
         .video-js.video-js:lang(en-NZ) .vjs-subs-caps-button .vjs-icon-placeholder:before, .video-js .vjs-subtitles-button .vjs-icon-placeholder:before {
         content: "\f10c";
         }
         .vjs-icon-captions, .video-js:lang(en) .vjs-subs-caps-button .vjs-icon-placeholder,
         .video-js:lang(fr-CA) .vjs-subs-caps-button .vjs-icon-placeholder, .video-js .vjs-captions-button .vjs-icon-placeholder {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-captions:before, .video-js:lang(en) .vjs-subs-caps-button .vjs-icon-placeholder:before,
         .video-js:lang(fr-CA) .vjs-subs-caps-button .vjs-icon-placeholder:before, .video-js .vjs-captions-button .vjs-icon-placeholder:before {
         content: "\f10d";
         }
         .vjs-icon-chapters, .video-js .vjs-chapters-button .vjs-icon-placeholder {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-chapters:before, .video-js .vjs-chapters-button .vjs-icon-placeholder:before {
         content: "\f10e";
         }
         .vjs-icon-share {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-share:before {
         content: "\f10f";
         }
         .vjs-icon-cog {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-cog:before {
         content: "\f110";
         }
         .vjs-icon-circle, .vjs-seek-to-live-control .vjs-icon-placeholder, .video-js .vjs-volume-level, .video-js .vjs-play-progress {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-circle:before, .vjs-seek-to-live-control .vjs-icon-placeholder:before, .video-js .vjs-volume-level:before, .video-js .vjs-play-progress:before {
         content: "\f111";
         }
         .vjs-icon-circle-outline {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-circle-outline:before {
         content: "\f112";
         }
         .vjs-icon-circle-inner-circle {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-circle-inner-circle:before {
         content: "\f113";
         }
         .vjs-icon-hd {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-hd:before {
         content: "\f114";
         }
         .vjs-icon-cancel, .video-js .vjs-control.vjs-close-button .vjs-icon-placeholder {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-cancel:before, .video-js .vjs-control.vjs-close-button .vjs-icon-placeholder:before {
         content: "\f115";
         }
         .vjs-icon-replay, .video-js .vjs-play-control.vjs-ended .vjs-icon-placeholder {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-replay:before, .video-js .vjs-play-control.vjs-ended .vjs-icon-placeholder:before {
         content: "\f116";
         }
         .vjs-icon-facebook {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-facebook:before {
         content: "\f117";
         }
         .vjs-icon-gplus {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-gplus:before {
         content: "\f118";
         }
         .vjs-icon-linkedin {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-linkedin:before {
         content: "\f119";
         }
         .vjs-icon-twitter {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-twitter:before {
         content: "\f11a";
         }
         .vjs-icon-tumblr {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-tumblr:before {
         content: "\f11b";
         }
         .vjs-icon-pinterest {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-pinterest:before {
         content: "\f11c";
         }
         .vjs-icon-audio-description, .video-js .vjs-descriptions-button .vjs-icon-placeholder {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-audio-description:before, .video-js .vjs-descriptions-button .vjs-icon-placeholder:before {
         content: "\f11d";
         }
         .vjs-icon-audio, .video-js .vjs-audio-button .vjs-icon-placeholder {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-audio:before, .video-js .vjs-audio-button .vjs-icon-placeholder:before {
         content: "\f11e";
         }
         .vjs-icon-next-item {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-next-item:before {
         content: "\f11f";
         }
         .vjs-icon-previous-item {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-previous-item:before {
         content: "\f120";
         }
         .vjs-icon-picture-in-picture-enter, .video-js .vjs-picture-in-picture-control .vjs-icon-placeholder {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-picture-in-picture-enter:before, .video-js .vjs-picture-in-picture-control .vjs-icon-placeholder:before {
         content: "\f121";
         }
         .vjs-icon-picture-in-picture-exit, .video-js.vjs-picture-in-picture .vjs-picture-in-picture-control .vjs-icon-placeholder {
         font-family: VideoJS;
         font-weight: normal;
         font-style: normal;
         }
         .vjs-icon-picture-in-picture-exit:before, .video-js.vjs-picture-in-picture .vjs-picture-in-picture-control .vjs-icon-placeholder:before {
         content: "\f122";
         }
         .video-js {
         display: block;
         vertical-align: top;
         box-sizing: border-box;
         color: #fff;
         background-color: #000;
         position: relative;
         padding: 0;
         font-size: 10px;
         line-height: 1;
         font-weight: normal;
         font-style: normal;
         font-family: Arial, Helvetica, sans-serif;
         word-break: initial;
         }
         .video-js:-moz-full-screen {
         position: absolute;
         }
         .video-js:-webkit-full-screen {
         width: 100% !important;
         height: 100% !important;
         }
         .video-js[tabindex="-1"] {
         outline: none;
         }
         .video-js *,
         .video-js *:before,
         .video-js *:after {
         box-sizing: inherit;
         }
         .video-js ul {
         font-family: inherit;
         font-size: inherit;
         line-height: inherit;
         list-style-position: outside;
         margin-left: 0;
         margin-right: 0;
         margin-top: 0;
         margin-bottom: 0;
         }
         .video-js.vjs-fluid,
         .video-js.vjs-16-9,
         .video-js.vjs-4-3,
         .video-js.vjs-9-16,
         .video-js.vjs-1-1 {
         width: 100%;
         max-width: 100%;
         height: 0;
         }
         .video-js.vjs-16-9 {
         padding-top: 56.25%;
         }
         .video-js.vjs-4-3 {
         padding-top: 75%;
         }
         .video-js.vjs-9-16 {
         padding-top: 177.7777777778%;
         }
         .video-js.vjs-1-1 {
         padding-top: 100%;
         }
         .video-js.vjs-fill {
         width: 100%;
         height: 100%;
         }
         .video-js .vjs-tech {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         }
         body.vjs-full-window {
         padding: 0;
         margin: 0;
         height: 100%;
         }
         .vjs-full-window .video-js.vjs-fullscreen {
         position: fixed;
         overflow: hidden;
         z-index: 1000;
         left: 0;
         top: 0;
         bottom: 0;
         right: 0;
         }
         .video-js.vjs-fullscreen:not(.vjs-ios-native-fs) {
         width: 100% !important;
         height: 100% !important;
         padding-top: 0 !important;
         }
         .video-js.vjs-fullscreen.vjs-user-inactive {
         cursor: none;
         }
         .vjs-hidden {
         display: none !important;
         }
         .vjs-disabled {
         opacity: 0.5;
         cursor: default;
         }
         .video-js .vjs-offscreen {
         height: 1px;
         left: -9999px;
         position: absolute;
         top: 0;
         width: 1px;
         }
         .vjs-lock-showing {
         display: block !important;
         opacity: 1 !important;
         visibility: visible !important;
         }
         .vjs-no-js {
         padding: 20px;
         color: #fff;
         background-color: #000;
         font-size: 18px;
         font-family: Arial, Helvetica, sans-serif;
         text-align: center;
         width: 300px;
         height: 150px;
         margin: 0px auto;
         }
         .vjs-no-js a,
         .vjs-no-js a:visited {
         color: #66A8CC;
         }
         .video-js .vjs-big-play-button {
         font-size: 3em;
         line-height: 1.5em;
         height: 1.63332em;
         width: 3em;
         display: block;
         position: absolute;
         top: 10px;
         left: 10px;
         padding: 0;
         cursor: pointer;
         opacity: 1;
         border: 0.06666em solid #fff;
         background-color: #2B333F;
         background-color: rgba(43, 51, 63, 0.7);
         border-radius: 0.3em;
         transition: all 0.4s;
         }
         .vjs-big-play-centered .vjs-big-play-button {
         top: 50%;
         left: 50%;
         margin-top: -0.81666em;
         margin-left: -1.5em;
         }
         .video-js:hover .vjs-big-play-button,
         .video-js .vjs-big-play-button:focus {
         border-color: #fff;
         background-color: #73859f;
         background-color: rgba(115, 133, 159, 0.5);
         transition: all 0s;
         }
         .vjs-controls-disabled .vjs-big-play-button,
         .vjs-has-started .vjs-big-play-button,
         .vjs-using-native-controls .vjs-big-play-button,
         .vjs-error .vjs-big-play-button {
         display: none;
         }
         .vjs-has-started.vjs-paused.vjs-show-big-play-button-on-pause .vjs-big-play-button {
         display: block;
         }
         .video-js button {
         background: none;
         border: none;
         color: inherit;
         display: inline-block;
         font-size: inherit;
         line-height: inherit;
         text-transform: none;
         text-decoration: none;
         transition: none;
         -webkit-appearance: none;
         -moz-appearance: none;
         appearance: none;
         }
         .vjs-control .vjs-button {
         width: 100%;
         height: 100%;
         }
         .video-js .vjs-control.vjs-close-button {
         cursor: pointer;
         height: 3em;
         position: absolute;
         right: 0;
         top: 0.5em;
         z-index: 2;
         }
         .video-js .vjs-modal-dialog {
         background: rgba(0, 0, 0, 0.8);
         background: linear-gradient(180deg, rgba(0, 0, 0, 0.8), rgba(255, 255, 255, 0));
         overflow: auto;
         }
         .video-js .vjs-modal-dialog > * {
         box-sizing: border-box;
         }
         .vjs-modal-dialog .vjs-modal-dialog-content {
         font-size: 1.2em;
         line-height: 1.5;
         padding: 20px 24px;
         z-index: 1;
         }
         .vjs-menu-button {
         cursor: pointer;
         }
         .vjs-menu-button.vjs-disabled {
         cursor: default;
         }
         .vjs-workinghover .vjs-menu-button.vjs-disabled:hover .vjs-menu {
         display: none;
         }
         .vjs-menu .vjs-menu-content {
         display: block;
         padding: 0;
         margin: 0;
         font-family: Arial, Helvetica, sans-serif;
         overflow: auto;
         }
         .vjs-menu .vjs-menu-content > * {
         box-sizing: border-box;
         }
         .vjs-scrubbing .vjs-control.vjs-menu-button:hover .vjs-menu {
         display: none;
         }
         .vjs-menu li {
         list-style: none;
         margin: 0;
         padding: 0.2em 0;
         line-height: 1.4em;
         font-size: 1.2em;
         text-align: center;
         text-transform: lowercase;
         }
         .vjs-menu li.vjs-menu-item:focus,
         .vjs-menu li.vjs-menu-item:hover,
         .js-focus-visible .vjs-menu li.vjs-menu-item:hover {
         background-color: #73859f;
         background-color: rgba(115, 133, 159, 0.5);
         }
         .vjs-menu li.vjs-selected,
         .vjs-menu li.vjs-selected:focus,
         .vjs-menu li.vjs-selected:hover,
         .js-focus-visible .vjs-menu li.vjs-selected:hover {
         background-color: #fff;
         color: #2B333F;
         }
         .video-js .vjs-menu *:not(.vjs-selected):focus:not(:focus-visible),
         .js-focus-visible .vjs-menu *:not(.vjs-selected):focus:not(.focus-visible) {
         background: none;
         }
         .vjs-menu li.vjs-menu-title {
         text-align: center;
         text-transform: uppercase;
         font-size: 1em;
         line-height: 2em;
         padding: 0;
         margin: 0 0 0.3em 0;
         font-weight: bold;
         cursor: default;
         }
         .vjs-menu-button-popup .vjs-menu {
         display: none;
         position: absolute;
         bottom: 0;
         width: 10em;
         left: -3em;
         height: 0em;
         margin-bottom: 1.5em;
         border-top-color: rgba(43, 51, 63, 0.7);
         }
         .vjs-menu-button-popup .vjs-menu .vjs-menu-content {
         background-color: #2B333F;
         background-color: rgba(43, 51, 63, 0.7);
         position: absolute;
         width: 100%;
         bottom: 1.5em;
         max-height: 15em;
         }
         .vjs-layout-tiny .vjs-menu-button-popup .vjs-menu .vjs-menu-content,
         .vjs-layout-x-small .vjs-menu-button-popup .vjs-menu .vjs-menu-content {
         max-height: 5em;
         }
         .vjs-layout-small .vjs-menu-button-popup .vjs-menu .vjs-menu-content {
         max-height: 10em;
         }
         .vjs-layout-medium .vjs-menu-button-popup .vjs-menu .vjs-menu-content {
         max-height: 14em;
         }
         .vjs-layout-large .vjs-menu-button-popup .vjs-menu .vjs-menu-content,
         .vjs-layout-x-large .vjs-menu-button-popup .vjs-menu .vjs-menu-content,
         .vjs-layout-huge .vjs-menu-button-popup .vjs-menu .vjs-menu-content {
         max-height: 25em;
         }
         .vjs-workinghover .vjs-menu-button-popup.vjs-hover .vjs-menu,
         .vjs-menu-button-popup .vjs-menu.vjs-lock-showing {
         display: block;
         }
         .video-js .vjs-menu-button-inline {
         transition: all 0.4s;
         overflow: hidden;
         }
         .video-js .vjs-menu-button-inline:before {
         width: 2.222222222em;
         }
         .video-js .vjs-menu-button-inline:hover,
         .video-js .vjs-menu-button-inline:focus,
         .video-js .vjs-menu-button-inline.vjs-slider-active,
         .video-js.vjs-no-flex .vjs-menu-button-inline {
         width: 12em;
         }
         .vjs-menu-button-inline .vjs-menu {
         opacity: 0;
         height: 100%;
         width: auto;
         position: absolute;
         left: 4em;
         top: 0;
         padding: 0;
         margin: 0;
         transition: all 0.4s;
         }
         .vjs-menu-button-inline:hover .vjs-menu,
         .vjs-menu-button-inline:focus .vjs-menu,
         .vjs-menu-button-inline.vjs-slider-active .vjs-menu {
         display: block;
         opacity: 1;
         }
         .vjs-no-flex .vjs-menu-button-inline .vjs-menu {
         display: block;
         opacity: 1;
         position: relative;
         width: auto;
         }
         .vjs-no-flex .vjs-menu-button-inline:hover .vjs-menu,
         .vjs-no-flex .vjs-menu-button-inline:focus .vjs-menu,
         .vjs-no-flex .vjs-menu-button-inline.vjs-slider-active .vjs-menu {
         width: auto;
         }
         .vjs-menu-button-inline .vjs-menu-content {
         width: auto;
         height: 100%;
         margin: 0;
         overflow: hidden;
         }
         .video-js .vjs-control-bar {
         display: none;
         width: 100%;
         position: absolute;
         bottom: 0;
         left: 0;
         right: 0;
         height: 3em;
         background-color: #2B333F;
         background-color: rgba(43, 51, 63, 0.7);
         }
         .vjs-has-started .vjs-control-bar {
         display: flex;
         visibility: visible;
         opacity: 1;
         transition: visibility 0.1s, opacity 0.1s;
         }
         .vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
         visibility: visible;
         opacity: 0;
         pointer-events: none;
         transition: visibility 1s, opacity 1s;
         }
         .vjs-controls-disabled .vjs-control-bar,
         .vjs-using-native-controls .vjs-control-bar,
         .vjs-error .vjs-control-bar {
         display: none !important;
         }
         .vjs-audio.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
         opacity: 1;
         visibility: visible;
         }
         .vjs-has-started.vjs-no-flex .vjs-control-bar {
         display: table;
         }
         .video-js .vjs-control {
         position: relative;
         text-align: center;
         margin: 0;
         padding: 0;
         height: 100%;
         width: 4em;
         flex: none;
         }
         .vjs-button > .vjs-icon-placeholder:before {
         font-size: 1.8em;
         line-height: 1.67;
         }
         .vjs-button > .vjs-icon-placeholder {
         display: block;
         }
         .video-js .vjs-control:focus:before,
         .video-js .vjs-control:hover:before,
         .video-js .vjs-control:focus {
         text-shadow: 0em 0em 1em white;
         }
         .video-js .vjs-control-text {
         border: 0;
         clip: rect(0 0 0 0);
         height: 1px;
         overflow: hidden;
         padding: 0;
         position: absolute;
         width: 1px;
         }
         .vjs-no-flex .vjs-control {
         display: table-cell;
         vertical-align: middle;
         }
         .video-js .vjs-custom-control-spacer {
         display: none;
         }
         .video-js .vjs-progress-control {
         cursor: pointer;
         flex: auto;
         display: flex;
         align-items: center;
         min-width: 4em;
         touch-action: none;
         }
         .video-js .vjs-progress-control.disabled {
         cursor: default;
         }
         .vjs-live .vjs-progress-control {
         display: none;
         }
         .vjs-liveui .vjs-progress-control {
         display: flex;
         align-items: center;
         }
         .vjs-no-flex .vjs-progress-control {
         width: auto;
         }
         .video-js .vjs-progress-holder {
         flex: auto;
         transition: all 0.2s;
         height: 0.3em;
         }
         .video-js .vjs-progress-control .vjs-progress-holder {
         margin: 0 10px;
         }
         .video-js .vjs-progress-control:hover .vjs-progress-holder {
         font-size: 1.6666666667em;
         }
         .video-js .vjs-progress-control:hover .vjs-progress-holder.disabled {
         font-size: 1em;
         }
         .video-js .vjs-progress-holder .vjs-play-progress,
         .video-js .vjs-progress-holder .vjs-load-progress,
         .video-js .vjs-progress-holder .vjs-load-progress div {
         position: absolute;
         display: block;
         height: 100%;
         margin: 0;
         padding: 0;
         width: 0;
         }
         .video-js .vjs-play-progress {
         background-color: #fff;
         }
         .video-js .vjs-play-progress:before {
         font-size: 0.9em;
         position: absolute;
         right: -0.5em;
         top: -0.3333333333em;
         z-index: 1;
         }
         .video-js .vjs-load-progress {
         background: rgba(115, 133, 159, 0.5);
         }
         .video-js .vjs-load-progress div {
         background: rgba(115, 133, 159, 0.75);
         }
         .video-js .vjs-time-tooltip {
         background-color: #fff;
         background-color: rgba(255, 255, 255, 0.8);
         border-radius: 0.3em;
         color: #000;
         float: right;
         font-family: Arial, Helvetica, sans-serif;
         font-size: 1em;
         padding: 6px 8px 8px 8px;
         pointer-events: none;
         position: absolute;
         top: -3.4em;
         visibility: hidden;
         z-index: 1;
         }
         .video-js .vjs-progress-holder:focus .vjs-time-tooltip {
         display: none;
         }
         .video-js .vjs-progress-control:hover .vjs-time-tooltip,
         .video-js .vjs-progress-control:hover .vjs-progress-holder:focus .vjs-time-tooltip {
         display: block;
         font-size: 0.6em;
         visibility: visible;
         }
         .video-js .vjs-progress-control.disabled:hover .vjs-time-tooltip {
         font-size: 1em;
         }
         .video-js .vjs-progress-control .vjs-mouse-display {
         display: none;
         position: absolute;
         width: 1px;
         height: 100%;
         background-color: #000;
         z-index: 1;
         }
         .vjs-no-flex .vjs-progress-control .vjs-mouse-display {
         z-index: 0;
         }
         .video-js .vjs-progress-control:hover .vjs-mouse-display {
         display: block;
         }
         .video-js.vjs-user-inactive .vjs-progress-control .vjs-mouse-display {
         visibility: hidden;
         opacity: 0;
         transition: visibility 1s, opacity 1s;
         }
         .video-js.vjs-user-inactive.vjs-no-flex .vjs-progress-control .vjs-mouse-display {
         display: none;
         }
         .vjs-mouse-display .vjs-time-tooltip {
         color: #fff;
         background-color: #000;
         background-color: rgba(0, 0, 0, 0.8);
         }
         .video-js .vjs-slider {
         position: relative;
         cursor: pointer;
         padding: 0;
         margin: 0 0.45em 0 0.45em;
         /* iOS Safari */
         -webkit-touch-callout: none;
         /* Safari */
         -webkit-user-select: none;
         /* Konqueror HTML */
         /* Firefox */
         -moz-user-select: none;
         /* Internet Explorer/Edge */
         -ms-user-select: none;
         /* Non-prefixed version, currently supported by Chrome and Opera */
         user-select: none;
         background-color: #73859f;
         background-color: rgba(115, 133, 159, 0.5);
         }
         .video-js .vjs-slider.disabled {
         cursor: default;
         }
         .video-js .vjs-slider:focus {
         text-shadow: 0em 0em 1em white;
         box-shadow: 0 0 1em #fff;
         }
         .video-js .vjs-mute-control {
         cursor: pointer;
         flex: none;
         }
         .video-js .vjs-volume-control {
         cursor: pointer;
         margin-right: 1em;
         display: flex;
         }
         .video-js .vjs-volume-control.vjs-volume-horizontal {
         width: 5em;
         }
         .video-js .vjs-volume-panel .vjs-volume-control {
         visibility: visible;
         opacity: 0;
         width: 1px;
         height: 1px;
         margin-left: -1px;
         }
         .video-js .vjs-volume-panel {
         transition: width 1s;
         }
         .video-js .vjs-volume-panel.vjs-hover .vjs-volume-control, .video-js .vjs-volume-panel:active .vjs-volume-control, .video-js .vjs-volume-panel:focus .vjs-volume-control, .video-js .vjs-volume-panel .vjs-volume-control:active, .video-js .vjs-volume-panel.vjs-hover .vjs-mute-control ~ .vjs-volume-control, .video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active {
         visibility: visible;
         opacity: 1;
         position: relative;
         transition: visibility 0.1s, opacity 0.1s, height 0.1s, width 0.1s, left 0s, top 0s;
         }
         .video-js .vjs-volume-panel.vjs-hover .vjs-volume-control.vjs-volume-horizontal, .video-js .vjs-volume-panel:active .vjs-volume-control.vjs-volume-horizontal, .video-js .vjs-volume-panel:focus .vjs-volume-control.vjs-volume-horizontal, .video-js .vjs-volume-panel .vjs-volume-control:active.vjs-volume-horizontal, .video-js .vjs-volume-panel.vjs-hover .vjs-mute-control ~ .vjs-volume-control.vjs-volume-horizontal, .video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active.vjs-volume-horizontal {
         width: 5em;
         height: 3em;
         margin-right: 0;
         }
         .video-js .vjs-volume-panel.vjs-hover .vjs-volume-control.vjs-volume-vertical, .video-js .vjs-volume-panel:active .vjs-volume-control.vjs-volume-vertical, .video-js .vjs-volume-panel:focus .vjs-volume-control.vjs-volume-vertical, .video-js .vjs-volume-panel .vjs-volume-control:active.vjs-volume-vertical, .video-js .vjs-volume-panel.vjs-hover .vjs-mute-control ~ .vjs-volume-control.vjs-volume-vertical, .video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active.vjs-volume-vertical {
         left: -3.5em;
         transition: left 0s;
         }
         .video-js .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-hover, .video-js .vjs-volume-panel.vjs-volume-panel-horizontal:active, .video-js .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-slider-active {
         width: 10em;
         transition: width 0.1s;
         }
         .video-js .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-mute-toggle-only {
         width: 4em;
         }
         .video-js .vjs-volume-panel .vjs-volume-control.vjs-volume-vertical {
         height: 8em;
         width: 3em;
         left: -3000em;
         transition: visibility 1s, opacity 1s, height 1s 1s, width 1s 1s, left 1s 1s, top 1s 1s;
         }
         .video-js .vjs-volume-panel .vjs-volume-control.vjs-volume-horizontal {
         transition: visibility 1s, opacity 1s, height 1s 1s, width 1s, left 1s 1s, top 1s 1s;
         }
         .video-js.vjs-no-flex .vjs-volume-panel .vjs-volume-control.vjs-volume-horizontal {
         width: 5em;
         height: 3em;
         visibility: visible;
         opacity: 1;
         position: relative;
         transition: none;
         }
         .video-js.vjs-no-flex .vjs-volume-control.vjs-volume-vertical,
         .video-js.vjs-no-flex .vjs-volume-panel .vjs-volume-control.vjs-volume-vertical {
         position: absolute;
         bottom: 3em;
         left: 0.5em;
         }
         .video-js .vjs-volume-panel {
         display: flex;
         }
         .video-js .vjs-volume-bar {
         margin: 1.35em 0.45em;
         }
         .vjs-volume-bar.vjs-slider-horizontal {
         width: 5em;
         height: 0.3em;
         }
         .vjs-volume-bar.vjs-slider-vertical {
         width: 0.3em;
         height: 5em;
         margin: 1.35em auto;
         }
         .video-js .vjs-volume-level {
         position: absolute;
         bottom: 0;
         left: 0;
         background-color: #fff;
         }
         .video-js .vjs-volume-level:before {
         position: absolute;
         font-size: 0.9em;
         z-index: 1;
         }
         .vjs-slider-vertical .vjs-volume-level {
         width: 0.3em;
         }
         .vjs-slider-vertical .vjs-volume-level:before {
         top: -0.5em;
         left: -0.3em;
         z-index: 1;
         }
         .vjs-slider-horizontal .vjs-volume-level {
         height: 0.3em;
         }
         .vjs-slider-horizontal .vjs-volume-level:before {
         top: -0.3em;
         right: -0.5em;
         }
         .video-js .vjs-volume-panel.vjs-volume-panel-vertical {
         width: 4em;
         }
         .vjs-volume-bar.vjs-slider-vertical .vjs-volume-level {
         height: 100%;
         }
         .vjs-volume-bar.vjs-slider-horizontal .vjs-volume-level {
         width: 100%;
         }
         .video-js .vjs-volume-vertical {
         width: 3em;
         height: 8em;
         bottom: 8em;
         background-color: #2B333F;
         background-color: rgba(43, 51, 63, 0.7);
         }
         .video-js .vjs-volume-horizontal .vjs-menu {
         left: -2em;
         }
         .video-js .vjs-volume-tooltip {
         background-color: #fff;
         background-color: rgba(255, 255, 255, 0.8);
         border-radius: 0.3em;
         color: #000;
         float: right;
         font-family: Arial, Helvetica, sans-serif;
         font-size: 1em;
         padding: 6px 8px 8px 8px;
         pointer-events: none;
         position: absolute;
         top: -3.4em;
         visibility: hidden;
         z-index: 1;
         }
         .video-js .vjs-volume-control:hover .vjs-volume-tooltip,
         .video-js .vjs-volume-control:hover .vjs-progress-holder:focus .vjs-volume-tooltip {
         display: block;
         font-size: 1em;
         visibility: visible;
         }
         .video-js .vjs-volume-vertical:hover .vjs-volume-tooltip,
         .video-js .vjs-volume-vertical:hover .vjs-progress-holder:focus .vjs-volume-tooltip {
         left: 1em;
         top: -12px;
         }
         .video-js .vjs-volume-control.disabled:hover .vjs-volume-tooltip {
         font-size: 1em;
         }
         .video-js .vjs-volume-control .vjs-mouse-display {
         display: none;
         position: absolute;
         width: 100%;
         height: 1px;
         background-color: #000;
         z-index: 1;
         }
         .video-js .vjs-volume-horizontal .vjs-mouse-display {
         width: 1px;
         height: 100%;
         }
         .vjs-no-flex .vjs-volume-control .vjs-mouse-display {
         z-index: 0;
         }
         .video-js .vjs-volume-control:hover .vjs-mouse-display {
         display: block;
         }
         .video-js.vjs-user-inactive .vjs-volume-control .vjs-mouse-display {
         visibility: hidden;
         opacity: 0;
         transition: visibility 1s, opacity 1s;
         }
         .video-js.vjs-user-inactive.vjs-no-flex .vjs-volume-control .vjs-mouse-display {
         display: none;
         }
         .vjs-mouse-display .vjs-volume-tooltip {
         color: #fff;
         background-color: #000;
         background-color: rgba(0, 0, 0, 0.8);
         }
         .vjs-poster {
         display: inline-block;
         vertical-align: middle;
         background-repeat: no-repeat;
         background-position: 50% 50%;
         background-size: contain;
         background-color: #000000;
         cursor: pointer;
         margin: 0;
         padding: 0;
         position: absolute;
         top: 0;
         right: 0;
         bottom: 0;
         left: 0;
         height: 100%;
         }
         .vjs-has-started .vjs-poster {
         display: none;
         }
         .vjs-audio.vjs-has-started .vjs-poster {
         display: block;
         }
         .vjs-using-native-controls .vjs-poster {
         display: none;
         }
         .video-js .vjs-live-control {
         display: flex;
         align-items: flex-start;
         flex: auto;
         font-size: 1em;
         line-height: 3em;
         }
         .vjs-no-flex .vjs-live-control {
         display: table-cell;
         width: auto;
         text-align: left;
         }
         .video-js:not(.vjs-live) .vjs-live-control,
         .video-js.vjs-liveui .vjs-live-control {
         display: none;
         }
         .video-js .vjs-seek-to-live-control {
         align-items: center;
         cursor: pointer;
         flex: none;
         display: inline-flex;
         height: 100%;
         padding-left: 0.5em;
         padding-right: 0.5em;
         font-size: 1em;
         line-height: 3em;
         width: auto;
         min-width: 4em;
         }
         .vjs-no-flex .vjs-seek-to-live-control {
         display: table-cell;
         width: auto;
         text-align: left;
         }
         .video-js.vjs-live:not(.vjs-liveui) .vjs-seek-to-live-control,
         .video-js:not(.vjs-live) .vjs-seek-to-live-control {
         display: none;
         }
         .vjs-seek-to-live-control.vjs-control.vjs-at-live-edge {
         cursor: auto;
         }
         .vjs-seek-to-live-control .vjs-icon-placeholder {
         margin-right: 0.5em;
         color: #888;
         }
         .vjs-seek-to-live-control.vjs-control.vjs-at-live-edge .vjs-icon-placeholder {
         color: red;
         }
         .video-js .vjs-time-control {
         flex: none;
         font-size: 1em;
         line-height: 3em;
         min-width: 2em;
         width: auto;
         padding-left: 1em;
         padding-right: 1em;
         }
         .vjs-live .vjs-time-control {
         display: none;
         }
         .video-js .vjs-current-time,
         .vjs-no-flex .vjs-current-time {
         display: none;
         }
         .video-js .vjs-duration,
         .vjs-no-flex .vjs-duration {
         display: none;
         }
         .vjs-time-divider {
         display: none;
         line-height: 3em;
         }
         .vjs-live .vjs-time-divider {
         display: none;
         }
         .video-js .vjs-play-control {
         cursor: pointer;
         }
         .video-js .vjs-play-control .vjs-icon-placeholder {
         flex: none;
         }
         .vjs-text-track-display {
         position: absolute;
         bottom: 3em;
         left: 0;
         right: 0;
         top: 0;
         pointer-events: none;
         }
         .video-js.vjs-user-inactive.vjs-playing .vjs-text-track-display {
         bottom: 1em;
         }
         .video-js .vjs-text-track {
         font-size: 1.4em;
         text-align: center;
         margin-bottom: 0.1em;
         }
         .vjs-subtitles {
         color: #fff;
         }
         .vjs-captions {
         color: #fc6;
         }
         .vjs-tt-cue {
         display: block;
         }
         video::-webkit-media-text-track-display {
         transform: translateY(-3em);
         }
         .video-js.vjs-user-inactive.vjs-playing video::-webkit-media-text-track-display {
         transform: translateY(-1.5em);
         }
         .video-js .vjs-picture-in-picture-control {
         cursor: pointer;
         flex: none;
         }
         .video-js .vjs-fullscreen-control {
         cursor: pointer;
         flex: none;
         }
         .vjs-playback-rate > .vjs-menu-button,
         .vjs-playback-rate .vjs-playback-rate-value {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         }
         .vjs-playback-rate .vjs-playback-rate-value {
         pointer-events: none;
         font-size: 1.5em;
         line-height: 2;
         text-align: center;
         }
         .vjs-playback-rate .vjs-menu {
         width: 4em;
         left: 0em;
         }
         .vjs-error .vjs-error-display .vjs-modal-dialog-content {
         font-size: 1.4em;
         text-align: center;
         }
         .vjs-error .vjs-error-display:before {
         color: #fff;
         content: "X";
         font-family: Arial, Helvetica, sans-serif;
         font-size: 4em;
         left: 0;
         line-height: 1;
         margin-top: -0.5em;
         position: absolute;
         text-shadow: 0.05em 0.05em 0.1em #000;
         text-align: center;
         top: 50%;
         vertical-align: middle;
         width: 100%;
         }
         .vjs-loading-spinner {
         display: none;
         position: absolute;
         top: 50%;
         left: 50%;
         margin: -25px 0 0 -25px;
         opacity: 0.85;
         text-align: left;
         border: 6px solid rgba(43, 51, 63, 0.7);
         box-sizing: border-box;
         background-clip: padding-box;
         width: 50px;
         height: 50px;
         border-radius: 25px;
         visibility: hidden;
         }
         .vjs-seeking .vjs-loading-spinner,
         .vjs-waiting .vjs-loading-spinner {
         display: block;
         -webkit-animation: vjs-spinner-show 0s linear 0.3s forwards;
         animation: vjs-spinner-show 0s linear 0.3s forwards;
         }
         .vjs-loading-spinner:before,
         .vjs-loading-spinner:after {
         content: "";
         position: absolute;
         margin: -6px;
         box-sizing: inherit;
         width: inherit;
         height: inherit;
         border-radius: inherit;
         opacity: 1;
         border: inherit;
         border-color: transparent;
         border-top-color: white;
         }
         .vjs-seeking .vjs-loading-spinner:before,
         .vjs-seeking .vjs-loading-spinner:after,
         .vjs-waiting .vjs-loading-spinner:before,
         .vjs-waiting .vjs-loading-spinner:after {
         -webkit-animation: vjs-spinner-spin 1.1s cubic-bezier(0.6, 0.2, 0, 0.8) infinite, vjs-spinner-fade 1.1s linear infinite;
         animation: vjs-spinner-spin 1.1s cubic-bezier(0.6, 0.2, 0, 0.8) infinite, vjs-spinner-fade 1.1s linear infinite;
         }
         .vjs-seeking .vjs-loading-spinner:before,
         .vjs-waiting .vjs-loading-spinner:before {
         border-top-color: white;
         }
         .vjs-seeking .vjs-loading-spinner:after,
         .vjs-waiting .vjs-loading-spinner:after {
         border-top-color: white;
         -webkit-animation-delay: 0.44s;
         animation-delay: 0.44s;
         }
         @keyframes vjs-spinner-show {
         to {
         visibility: visible;
         }
         }
         @-webkit-keyframes vjs-spinner-show {
         to {
         visibility: visible;
         }
         }
         @keyframes vjs-spinner-spin {
         100% {
         transform: rotate(360deg);
         }
         }
         @-webkit-keyframes vjs-spinner-spin {
         100% {
         -webkit-transform: rotate(360deg);
         }
         }
         @keyframes vjs-spinner-fade {
         0% {
         border-top-color: #73859f;
         }
         20% {
         border-top-color: #73859f;
         }
         35% {
         border-top-color: white;
         }
         60% {
         border-top-color: #73859f;
         }
         100% {
         border-top-color: #73859f;
         }
         }
         @-webkit-keyframes vjs-spinner-fade {
         0% {
         border-top-color: #73859f;
         }
         20% {
         border-top-color: #73859f;
         }
         35% {
         border-top-color: white;
         }
         60% {
         border-top-color: #73859f;
         }
         100% {
         border-top-color: #73859f;
         }
         }
         .vjs-chapters-button .vjs-menu ul {
         width: 24em;
         }
         .video-js .vjs-subs-caps-button + .vjs-menu .vjs-captions-menu-item .vjs-menu-item-text .vjs-icon-placeholder {
         vertical-align: middle;
         display: inline-block;
         margin-bottom: -0.1em;
         }
         .video-js .vjs-subs-caps-button + .vjs-menu .vjs-captions-menu-item .vjs-menu-item-text .vjs-icon-placeholder:before {
         font-family: VideoJS;
         content: "";
         font-size: 1.5em;
         line-height: inherit;
         }
         .video-js .vjs-audio-button + .vjs-menu .vjs-main-desc-menu-item .vjs-menu-item-text .vjs-icon-placeholder {
         vertical-align: middle;
         display: inline-block;
         margin-bottom: -0.1em;
         }
         .video-js .vjs-audio-button + .vjs-menu .vjs-main-desc-menu-item .vjs-menu-item-text .vjs-icon-placeholder:before {
         font-family: VideoJS;
         content: " ";
         font-size: 1.5em;
         line-height: inherit;
         }
         .video-js.vjs-layout-small .vjs-current-time,
         .video-js.vjs-layout-small .vjs-time-divider,
         .video-js.vjs-layout-small .vjs-duration,
         .video-js.vjs-layout-small .vjs-remaining-time,
         .video-js.vjs-layout-small .vjs-playback-rate,
         .video-js.vjs-layout-small .vjs-volume-control, .video-js.vjs-layout-x-small .vjs-current-time,
         .video-js.vjs-layout-x-small .vjs-time-divider,
         .video-js.vjs-layout-x-small .vjs-duration,
         .video-js.vjs-layout-x-small .vjs-remaining-time,
         .video-js.vjs-layout-x-small .vjs-playback-rate,
         .video-js.vjs-layout-x-small .vjs-volume-control, .video-js.vjs-layout-tiny .vjs-current-time,
         .video-js.vjs-layout-tiny .vjs-time-divider,
         .video-js.vjs-layout-tiny .vjs-duration,
         .video-js.vjs-layout-tiny .vjs-remaining-time,
         .video-js.vjs-layout-tiny .vjs-playback-rate,
         .video-js.vjs-layout-tiny .vjs-volume-control {
         display: none;
         }
         .video-js.vjs-layout-small .vjs-volume-panel.vjs-volume-panel-horizontal:hover, .video-js.vjs-layout-small .vjs-volume-panel.vjs-volume-panel-horizontal:active, .video-js.vjs-layout-small .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-slider-active, .video-js.vjs-layout-small .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-hover, .video-js.vjs-layout-x-small .vjs-volume-panel.vjs-volume-panel-horizontal:hover, .video-js.vjs-layout-x-small .vjs-volume-panel.vjs-volume-panel-horizontal:active, .video-js.vjs-layout-x-small .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-slider-active, .video-js.vjs-layout-x-small .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-hover, .video-js.vjs-layout-tiny .vjs-volume-panel.vjs-volume-panel-horizontal:hover, .video-js.vjs-layout-tiny .vjs-volume-panel.vjs-volume-panel-horizontal:active, .video-js.vjs-layout-tiny .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-slider-active, .video-js.vjs-layout-tiny .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-hover {
         width: auto;
         width: initial;
         }
         .video-js.vjs-layout-x-small .vjs-progress-control, .video-js.vjs-layout-tiny .vjs-progress-control {
         display: none;
         }
         .video-js.vjs-layout-x-small .vjs-custom-control-spacer {
         flex: auto;
         display: block;
         }
         .video-js.vjs-layout-x-small.vjs-no-flex .vjs-custom-control-spacer {
         width: auto;
         }
         .vjs-modal-dialog.vjs-text-track-settings {
         background-color: #2B333F;
         background-color: rgba(43, 51, 63, 0.75);
         color: #fff;
         height: 70%;
         }
         .vjs-text-track-settings .vjs-modal-dialog-content {
         display: table;
         }
         .vjs-text-track-settings .vjs-track-settings-colors,
         .vjs-text-track-settings .vjs-track-settings-font,
         .vjs-text-track-settings .vjs-track-settings-controls {
         display: table-cell;
         }
         .vjs-text-track-settings .vjs-track-settings-controls {
         text-align: right;
         vertical-align: bottom;
         }
         @supports (display: grid) {
         .vjs-text-track-settings .vjs-modal-dialog-content {
         display: grid;
         grid-template-columns: 1fr 1fr;
         grid-template-rows: 1fr;
         padding: 20px 24px 0px 24px;
         }
         .vjs-track-settings-controls .vjs-default-button {
         margin-bottom: 20px;
         }
         .vjs-text-track-settings .vjs-track-settings-controls {
         grid-column: 1/-1;
         }
         .vjs-layout-small .vjs-text-track-settings .vjs-modal-dialog-content,
         .vjs-layout-x-small .vjs-text-track-settings .vjs-modal-dialog-content,
         .vjs-layout-tiny .vjs-text-track-settings .vjs-modal-dialog-content {
         grid-template-columns: 1fr;
         }
         }
         .vjs-track-setting > select {
         margin-right: 1em;
         margin-bottom: 0.5em;
         }
         .vjs-text-track-settings fieldset {
         margin: 5px;
         padding: 3px;
         border: none;
         }
         .vjs-text-track-settings fieldset span {
         display: inline-block;
         }
         .vjs-text-track-settings fieldset span > select {
         max-width: 7.3em;
         }
         .vjs-text-track-settings legend {
         color: #fff;
         margin: 0 0 5px 0;
         }
         .vjs-text-track-settings .vjs-label {
         position: absolute;
         clip: rect(1px 1px 1px 1px);
         clip: rect(1px, 1px, 1px, 1px);
         display: block;
         margin: 0 0 5px 0;
         padding: 0;
         border: 0;
         height: 1px;
         width: 1px;
         overflow: hidden;
         }
         .vjs-track-settings-controls button:focus,
         .vjs-track-settings-controls button:active {
         outline-style: solid;
         outline-width: medium;
         background-image: linear-gradient(0deg, #fff 88%, #73859f 100%);
         }
         .vjs-track-settings-controls button:hover {
         color: rgba(43, 51, 63, 0.75);
         }
         .vjs-track-settings-controls button {
         background-color: #fff;
         background-image: linear-gradient(-180deg, #fff 88%, #73859f 100%);
         color: #2B333F;
         cursor: pointer;
         border-radius: 2px;
         }
         .vjs-track-settings-controls .vjs-default-button {
         margin-right: 1em;
         }
         @media print {
         .video-js > *:not(.vjs-tech):not(.vjs-poster) {
         visibility: hidden;
         }
         }
         .vjs-resize-manager {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         border: none;
         z-index: -1000;
         }
         .js-focus-visible .video-js *:focus:not(.focus-visible) {
         outline: none;
         }
         .video-js *:focus:not(:focus-visible) {
         outline: none;
         }
      </style>
      <style type="text/css">/**
         * videojs-share
         * @version 3.2.1
         * @copyright 2019 Mikhail Khazov <mkhazov.work@gmail.com>
         * @license MIT
         */
         .video-js.vjs-videojs-share_open .vjs-modal-dialog .vjs-modal-dialog-content{display:flex;align-items:center;padding:0;background-image:linear-gradient(to bottom, rgba(0,0,0,0.77), rgba(0,0,0,0.75))}.video-js.vjs-videojs-share_open .vjs-modal-dialog .vjs-close-button{position:absolute;right:0;top:5px;width:30px;height:30px;color:#fff;cursor:pointer;opacity:0.9;transition:opacity 0.25s ease-out}.video-js.vjs-videojs-share_open .vjs-modal-dialog .vjs-close-button:before{content:'×';font-size:20px;line-height:15px}.video-js.vjs-videojs-share_open .vjs-modal-dialog .vjs-close-button:hover{opacity:1}.video-js .vjs-share{display:flex;flex-direction:column;justify-content:space-around;align-items:center;width:100%;height:100%;max-height:400px}.video-js .vjs-share__top,.video-js .vjs-share__middle,.video-js .vjs-share__bottom{display:flex}.video-js .vjs-share__top,.video-js .vjs-share__middle{flex-direction:column;justify-content:space-between}.video-js .vjs-share__middle{padding:0 25px}.video-js .vjs-share__title{align-self:center;font-size:22px;color:#fff}.video-js .vjs-share__subtitle{width:100%;margin:0 auto 12px;font-size:16px;color:#fff;opacity:0.7}.video-js .vjs-share__short-link-wrapper{position:relative;display:block;width:100%;height:40px;margin:0 auto;margin-bottom:15px;border:0;color:rgba(255,255,255,0.65);background-color:#363636;outline:none;overflow:hidden;flex-shrink:0}.video-js .vjs-share__short-link{display:block;width:100%;height:100%;padding:0 40px 0 15px;border:0;color:rgba(255,255,255,0.65);background-color:#363636;outline:none}.video-js .vjs-share__btn{position:absolute;right:0;bottom:0;height:40px;width:40px;display:flex;align-items:center;padding:0 11px;border:0;color:#fff;background-color:#2e2e2e;background-size:18px 19px;background-position:center;background-repeat:no-repeat;cursor:pointer;outline:none;transition:width 0.3s ease-out, padding 0.3s ease-out}.video-js .vjs-share__btn svg{flex-shrink:0}.video-js .vjs-share__btn span{position:relative;padding-left:10px;opacity:0;transition:opacity 0.3s ease-out}.video-js .vjs-share__btn:hover{justify-content:center;width:100%;padding:0 40px;background-image:none}.video-js .vjs-share__btn:hover span{opacity:1}.video-js .vjs-share__socials{display:flex;flex-wrap:wrap;justify-content:center;align-content:flex-start;transition:width 0.3s ease-out, height 0.3s ease-out}.video-js .vjs-share__social{display:flex;justify-content:center;align-items:center;flex-shrink:0;width:32px;height:32px;margin-right:6px;margin-bottom:6px;cursor:pointer;font-size:8px;transition:transform 0.3s ease-out, filter 0.2s ease-out;border:none;outline:none}.video-js .vjs-share__social:hover{filter:brightness(115%)}.video-js .vjs-share__social svg{overflow:visible;max-height:24px}.video-js .vjs-share__social_vk{background-color:#5d7294}.video-js .vjs-share__social_ok{background-color:#ed7c20}.video-js .vjs-share__social_mail,.video-js .vjs-share__social_email{background-color:#134785}.video-js .vjs-share__social_tw{background-color:#76aaeb}.video-js .vjs-share__social_reddit{background-color:#ff4500}.video-js .vjs-share__social_fbFeed{background-color:#475995}.video-js .vjs-share__social_messenger{background-color:#0084ff}.video-js .vjs-share__social_gp{background-color:#d53f35}.video-js .vjs-share__social_linkedin{background-color:#0077b5}.video-js .vjs-share__social_viber{background-color:#766db5}.video-js .vjs-share__social_telegram{background-color:#4bb0e2}.video-js .vjs-share__social_whatsapp{background-color:#78c870}.video-js .vjs-share__bottom{justify-content:center}@media (max-height: 220px){.video-js .vjs-share .hidden-xs{display:none}}@media (max-height: 350px){.video-js .vjs-share .hidden-sm{display:none}}@media (min-height: 400px){.video-js .vjs-share__title{margin-bottom:15px}.video-js .vjs-share__short-link-wrapper{margin-bottom:30px}}@media (min-width: 320px){.video-js.vjs-videojs-share_open .vjs-modal-dialog .vjs-close-button{right:5px;top:10px}}@media (min-width: 660px){.video-js.vjs-videojs-share_open .vjs-modal-dialog .vjs-close-button{right:20px;top:20px}.video-js .vjs-share__social{width:40px;height:40px}}
      </style>
      <style type="text/css">.play-video[data-v-5bf43efa]{background-color:#00014d;border-radius:4px;color:#fff;padding:20px 16px 24px;display:flex;flex-direction:column;margin-bottom:32px}@media(min-width: 768px)and (max-width: 991px){.play-video[data-v-5bf43efa]{padding:24px}}@media(min-width: 992px){.play-video[data-v-5bf43efa]{padding:28px 32px 32px}}@media(min-width: 768px){.play-video[data-v-5bf43efa]{flex-direction:row}}.play-video__title[data-v-5bf43efa]{color:#53efef;padding:0 0 16px}.play-video__info[data-v-5bf43efa]{font-size:1.4rem;line-height:2rem;padding:0 24px 24px 0}@media(min-width: 768px){.play-video__info[data-v-5bf43efa]{line-height:2.2rem}}.play-video__section--first[data-v-5bf43efa]{width:100%}@media(min-width: 768px)and (max-width: 991px){.play-video__section--first[data-v-5bf43efa]{width:50%}}@media(min-width: 992px){.play-video__section--first[data-v-5bf43efa]{width:60%}}.play-video__section--second[data-v-5bf43efa]{width:100%}@media(min-width: 768px)and (max-width: 991px){.play-video__section--second[data-v-5bf43efa]{width:50%}}@media(min-width: 992px){.play-video__section--second[data-v-5bf43efa]{width:40%}}.play-video__video-button[data-v-5bf43efa]{width:100%}.play-video__website-button[data-v-5bf43efa]{margin-bottom:24px}.play-video__terms[data-v-5bf43efa]{color:#fff;font-weight:600;font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.play-video__terms[data-v-5bf43efa]{font-size:1.2rem;line-height:1.8rem}}.play-video__download-button[data-v-5bf43efa]{margin-top:8px}.play-video__links[data-v-5bf43efa]{display:none}@media(min-width: 768px){.play-video__links[data-v-5bf43efa]{display:block}}.play-video__links--mobile[data-v-5bf43efa]{display:block;padding-top:20px;border-top:1px solid #fff;margin-top:24px}@media(min-width: 768px){.play-video__links--mobile[data-v-5bf43efa]{display:none}}</style>
      <style type="text/css">.video-js .vjs-play-progress:before{top:-0.6em}.video-js .vjs-control.vjs-close-button .vjs-icon-placeholder:before{content:""}.video-js.vjs-videojs-share_open .vjs-modal-dialog .vjs-close-button{top:0;right:0}@media(min-width: 768px){.video-js.vjs-videojs-share_open .vjs-modal-dialog .vjs-close-button{top:8px;right:8px}}.video-js.vjs-videojs-share_open .vjs-modal-dialog .vjs-close-button:before{font-size:32px}@media(min-width: 768px){.video-js.vjs-videojs-share_open .vjs-modal-dialog .vjs-close-button:before{font-size:40px}}.video-js .vjs-subs-caps-button{display:none}.video-js .vjs-picture-in-picture-control{display:none}.video-js .vjs-share__short-link-wrapper{margin-bottom:12px}@media(min-width: 768px){.video-js .vjs-share__short-link-wrapper{margin-bottom:32px}}.video-js .vjs-share__title{font-size:18px;margin-bottom:0}@media(min-width: 768px){.video-js .vjs-share__title{font-size:22px;margin-bottom:16px}}.video-js .vjs-share__subtitle{font-size:14px;margin-bottom:8px}@media(min-width: 768px){.video-js .vjs-share__subtitle{font-size:16px;margin-bottom:12px}}</style>
      <style type="text/css">.play-for-retailers__title[data-v-6ce70225]{padding:0 0 16px}</style>
      <style type="text/css">.app-container[data-v-80c6cc08]{margin:0 auto;max-width:950px;width:calc(100% - 32px)}@media(min-width: 768px){.app-container[data-v-80c6cc08]{width:calc(100% - 64px)}}.homepage-container[data-v-80c6cc08]{margin:0 auto;max-width:1200px;width:calc(100% - 32px)}@media(min-width: 768px){.homepage-container[data-v-80c6cc08]{width:calc(100% - 64px)}}@media(min-width: 0px)and (max-width: 767px){.hide-below-tablet[data-v-80c6cc08]{display:none}}@media(min-width: 768px)and (max-width: 991px){.hide-below-tablet[data-v-80c6cc08]{display:none}}@media(min-width: 0px)and (max-width: 767px){.hide-below-mobile[data-v-80c6cc08]{display:none}}@media(min-width: 768px){.hide-above-mobile[data-v-80c6cc08]{display:none}}@media(min-width: 992px){.hide-above-tablet[data-v-80c6cc08]{display:none}}.flex-grow[data-v-80c6cc08]{flex-grow:1}.clickable[data-v-80c6cc08]{cursor:pointer}.details__header[data-v-80c6cc08]{padding-top:20px;padding-bottom:24px}@media(min-width: 992px){.details__header[data-v-80c6cc08]{padding-top:32px}}@media(min-width: 768px){.details__header[data-v-80c6cc08]{padding-bottom:32px}}.details__parcel-info[data-v-80c6cc08]{padding:24px 0;display:flex;justify-content:space-between;color:#fff}.details__parcel-info-title[data-v-80c6cc08]{padding:0;overflow-wrap:break-word}.details__parcel-info-barcode[data-v-80c6cc08]{padding:0}.details__parcel-info-barcode-wrapper[data-v-80c6cc08]{display:flex;margin-top:24px}@media(min-width: 768px){.details__parcel-info-barcode-wrapper[data-v-80c6cc08]{margin-top:16px}}.details__parcel-info-barcode-icon[data-v-80c6cc08]{margin-top:2px;margin-right:8px}@media(min-width: 768px){.details__parcel-info-barcode-icon[data-v-80c6cc08]{margin-top:3px}}.details__parcel-info-client-icon[data-v-80c6cc08]{margin-left:16px;width:64px;height:64px;flex-shrink:0;border-radius:50%}@media(min-width: 768px){.details__parcel-info-client-icon[data-v-80c6cc08]{width:88px;height:88px}}.details__body[data-v-80c6cc08]{padding:32px 0}@media(min-width: 992px){.details__body[data-v-80c6cc08]{padding:48px 0}}.details__footer[data-v-80c6cc08]{background-color:#000c8c}.details__info-boxes[data-v-80c6cc08]{padding-bottom:32px}.page-color[data-v-80c6cc08]{background-color:#007bc4}</style>
      <style type="text/css">.app-container[data-v-34380d84]{margin:0 auto;max-width:950px;width:calc(100% - 32px)}@media(min-width: 768px){.app-container[data-v-34380d84]{width:calc(100% - 64px)}}.homepage-container[data-v-34380d84]{margin:0 auto;max-width:1200px;width:calc(100% - 32px)}@media(min-width: 768px){.homepage-container[data-v-34380d84]{width:calc(100% - 64px)}}@media(min-width: 0px)and (max-width: 767px){.hide-below-tablet[data-v-34380d84]{display:none}}@media(min-width: 768px)and (max-width: 991px){.hide-below-tablet[data-v-34380d84]{display:none}}@media(min-width: 0px)and (max-width: 767px){.hide-below-mobile[data-v-34380d84]{display:none}}@media(min-width: 768px){.hide-above-mobile[data-v-34380d84]{display:none}}@media(min-width: 992px){.hide-above-tablet[data-v-34380d84]{display:none}}.flex-grow[data-v-34380d84]{flex-grow:1}.clickable[data-v-34380d84]{cursor:pointer}.page-header[data-v-34380d84]{padding:20px 0 32px;color:#fff;background-color:#007bc4}@media(min-width: 992px){.page-header[data-v-34380d84]{padding-top:32px}}.page-header__button-wrapper+.page-header__title[data-v-34380d84]{margin-top:24px}.page-header__return-link[data-v-34380d84]{display:flex}.page-header__return-link--below-desktop[data-v-34380d84]{display:flex}@media(min-width: 992px){.page-header__return-link--below-desktop[data-v-34380d84]{display:none}}.page-header__return-link--above-desktop[data-v-34380d84]{display:none}@media(min-width: 992px){.page-header__return-link--above-desktop[data-v-34380d84]{display:flex}}.page-header__title[data-v-34380d84]{padding:0}.page-header__subtitle[data-v-34380d84]{margin-top:16px;padding:0;font-weight:600}.page-header__text[data-v-34380d84]{margin-top:16px;padding:0}@media(min-width: 992px){.page-header--variant-2[data-v-34380d84]{padding:48px 0;background-color:#eef2f4;color:#00014d}}@media(min-width: 992px){.page-header--variant-2 .page-header__title+.page-header__subtitle[data-v-34380d84],.page-header--variant-2 .page-header__title+.page-header__text[data-v-34380d84]{margin-top:24px}}</style>
      <style type="text/css">.parcel-list[data-v-4f19d695]{width:100%}.parcel-list__table-body[data-v-4f19d695]{border:1px solid #cce5f3;border-radius:4px;background-color:#fff}.parcel-list__container[data-v-4f19d695]{padding:0}.parcel-list__row[data-v-4f19d695]{display:flex;align-items:center;cursor:pointer;padding:20px 16px 24px;flex-direction:row}@media(min-width: 992px){.parcel-list__row[data-v-4f19d695]{padding:24px 32px}}.parcel-list__row[data-v-4f19d695]:not(:last-of-type):not(.parcel-list__row.parcel-list__row--header){border-bottom:1px solid #cce5f3}.parcel-list__row--header[data-v-4f19d695]{display:none;cursor:auto;padding-top:0;padding-bottom:16px}@media(min-width: 768px){.parcel-list__row--header[data-v-4f19d695]{display:flex}}.parcel-list__row--header .parcel-list__col[data-v-4f19d695]{width:33%}.parcel-list__row--header .parcel-list__col[data-v-4f19d695]:first-child{margin-left:-16px;width:calc(33% + 16px)}@media(min-width: 992px){.parcel-list__row--header .parcel-list__col[data-v-4f19d695]:first-child{margin-left:-32px;width:calc(33% + 32px)}}.parcel-list__col[data-v-4f19d695]{width:100%;padding-right:16px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;font-size:1.6rem;line-height:2.2rem;color:#00014d}@media(min-width: 992px){.parcel-list__col[data-v-4f19d695]{padding-bottom:0;width:33%}}@media(min-width: 768px){.parcel-list__col[data-v-4f19d695]{line-height:2.4rem}}.parcel-list__col-group[data-v-4f19d695]{width:calc(100% - 40px);display:flex;flex-direction:column;align-items:flex-start}@media(max-width: 350px){.parcel-list__col-group[data-v-4f19d695]{max-width:143px}}@media(min-width: 768px){.parcel-list__col-group[data-v-4f19d695]{flex-direction:row;align-items:center}}.parcel-list__col--small[data-v-4f19d695]{display:flex;justify-content:flex-end;margin-left:16px}.parcel-list__col-contents[data-v-4f19d695]{white-space:normal}.parcel-list__col--sender[data-v-4f19d695]{display:flex;flex-direction:row;align-items:center}.parcel-list__col--status[data-v-4f19d695]{font-weight:600;width:100%}@media(min-width: 992px){.parcel-list__col--status[data-v-4f19d695]{width:25%}}.parcel-list__image[data-v-4f19d695]{width:48px;border-radius:50%}.parcel-list__image--desktop[data-v-4f19d695]{display:none}@media(min-width: 768px)and (max-width: 991px){.parcel-list__image--desktop[data-v-4f19d695]{margin-right:16px}}@media(min-width: 992px){.parcel-list__image--desktop[data-v-4f19d695]{display:flex;margin-right:24px}}@media(min-width: 768px){.parcel-list__image--desktop[data-v-4f19d695]{display:flex}}.parcel-list__image--mobile[data-v-4f19d695]{display:flex;align-self:flex-start;margin-right:16px}@media(min-width: 768px){.parcel-list__image--mobile[data-v-4f19d695]{display:none}}</style>
      <style type="text/css">.app-container[data-v-25d8bb9e]{margin:0 auto;max-width:950px;width:calc(100% - 32px)}@media(min-width: 768px){.app-container[data-v-25d8bb9e]{width:calc(100% - 64px)}}.homepage-container[data-v-25d8bb9e]{margin:0 auto;max-width:1200px;width:calc(100% - 32px)}@media(min-width: 768px){.homepage-container[data-v-25d8bb9e]{width:calc(100% - 64px)}}@media(min-width: 0px)and (max-width: 767px){.hide-below-tablet[data-v-25d8bb9e]{display:none}}@media(min-width: 768px)and (max-width: 991px){.hide-below-tablet[data-v-25d8bb9e]{display:none}}@media(min-width: 0px)and (max-width: 767px){.hide-below-mobile[data-v-25d8bb9e]{display:none}}@media(min-width: 768px){.hide-above-mobile[data-v-25d8bb9e]{display:none}}@media(min-width: 992px){.hide-above-tablet[data-v-25d8bb9e]{display:none}}.flex-grow[data-v-25d8bb9e]{flex-grow:1}.clickable[data-v-25d8bb9e]{cursor:pointer}.list__body[data-v-25d8bb9e]{padding:32px 0}@media(min-width: 992px){.list__body[data-v-25d8bb9e]{padding:0 0 48px}}</style>
      <style type="text/css">.no-diversion[data-v-0784be6a]{margin-top:32px}.no-diversion__title[data-v-0784be6a]{padding:16px 0 32px}.no-diversion__icon-container[data-v-0784be6a]{width:64px;height:64px;border-radius:50%;background-color:#f2f8fc;display:flex;align-items:center;justify-content:center}</style>
      <style type="text/css">.diversion-item[data-v-0166b6bd]{display:flex;border-bottom:1px solid #cce5f3;padding:20px 16px 24px;background-color:#fff}@media(min-width: 768px)and (max-width: 991px){.diversion-item[data-v-0166b6bd]{padding:24px}}@media(min-width: 992px){.diversion-item[data-v-0166b6bd]{padding:24px 32px}}.diversion-item[data-v-0166b6bd]:last-of-type{border-bottom:none}.diversion-item--selectable[data-v-0166b6bd]{cursor:pointer}.diversion-item--selectable[data-v-0166b6bd]:hover{background-color:#cce5f3}.diversion-item__chevron[data-v-0166b6bd]{align-items:center;padding-left:16px}.diversion-item__title[data-v-0166b6bd]{padding:0 0 4px;font-size:1.6rem;line-height:2.2rem}@media(min-width: 768px){.diversion-item__title[data-v-0166b6bd]{line-height:2.4rem}}.diversion-item__subtitle[data-v-0166b6bd]{padding:0;font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.diversion-item__subtitle[data-v-0166b6bd]{line-height:2.2rem}}.diversion-item__text-container[data-v-0166b6bd]{flex-grow:1}.diversion-item__image[data-v-0166b6bd]{width:32px;height:32px;margin-right:16px}@media(min-width: 768px){.diversion-item__image[data-v-0166b6bd]{margin-right:24px}}</style>
      <style type="text/css">.diversions[data-v-60271c07]{margin-top:32px}@media(min-width: 992px){.diversions[data-v-60271c07]{margin-top:48px}}.diversions__current[data-v-60271c07]{margin-bottom:32px;overflow:hidden}.diversions__options[data-v-60271c07]{margin-bottom:32px;overflow:hidden}.diversions h4[data-v-60271c07]{padding:0 0 16px}</style>
      <style type="text/css">.app-container[data-v-0837f59a]{margin:0 auto;max-width:950px;width:calc(100% - 32px)}@media(min-width: 768px){.app-container[data-v-0837f59a]{width:calc(100% - 64px)}}.homepage-container[data-v-0837f59a]{margin:0 auto;max-width:1200px;width:calc(100% - 32px)}@media(min-width: 768px){.homepage-container[data-v-0837f59a]{width:calc(100% - 64px)}}@media(min-width: 0px)and (max-width: 767px){.hide-below-tablet[data-v-0837f59a]{display:none}}@media(min-width: 768px)and (max-width: 991px){.hide-below-tablet[data-v-0837f59a]{display:none}}@media(min-width: 0px)and (max-width: 767px){.hide-below-mobile[data-v-0837f59a]{display:none}}@media(min-width: 768px){.hide-above-mobile[data-v-0837f59a]{display:none}}@media(min-width: 992px){.hide-above-tablet[data-v-0837f59a]{display:none}}.flex-grow[data-v-0837f59a]{flex-grow:1}.clickable[data-v-0837f59a]{cursor:pointer}.diversions__no-diversions-container[data-v-0837f59a]{padding:20px 0 32px;background-color:#007bc4}@media(min-width: 768px){.diversions__no-diversions-container[data-v-0837f59a]{padding-bottom:48px}}@media(min-width: 992px){.diversions__no-diversions-container[data-v-0837f59a]{padding-top:32px}}.diversions__footer[data-v-0837f59a]{background-color:#000c8c}.diversions__button-container[data-v-0837f59a]{width:100%;display:flex;justify-content:flex-end;margin-bottom:32px}@media(min-width: 992px){.diversions__button-container[data-v-0837f59a]{margin-bottom:48px}}.diversions__body[data-v-0837f59a]{display:flex;flex-direction:column}.diversions__faqs[data-v-0837f59a]{padding-bottom:32px}</style>
      <style type="text/css">.fadeInOutDefault-enter-active[data-v-3bb97088],.fadeInOutDefault-leave-active[data-v-3bb97088]{transition:opacity .3s ease-out}.fadeInOutDefault-enter[data-v-3bb97088],.fadeInOutDefault-leave-to[data-v-3bb97088]{opacity:0}.fadeInDefault-enter-active[data-v-3bb97088]{transition:opacity .3s ease-out}.fadeInDefault-enter[data-v-3bb97088]{opacity:0}.fadeOutDefault-leave-active[data-v-3bb97088]{transition:opacity .3s ease-out}.fadeOutDefault-leave-to[data-v-3bb97088]{opacity:0}.toasts-list-enter[data-v-3bb97088]{opacity:0;transform:translateX(100px)}.toasts-list-leave-to[data-v-3bb97088]{opacity:0}.toasts-list-leave-active[data-v-3bb97088]{position:absolute;right:-100px !important}.buttonIconFade-enter-active[data-v-3bb97088],.buttonIconFade-leave-active[data-v-3bb97088]{transition:all .3s}.buttonIconFade-leave-active[data-v-3bb97088]{position:absolute;left:7px}.buttonIconFade-enter[data-v-3bb97088],.buttonIconFade-leave-to[data-v-3bb97088]{opacity:0;transform:translateX(10px)}.e-button-select[data-v-3bb97088]{position:relative}.e-button-select__input[data-v-3bb97088]{position:absolute;opacity:0}.e-button-select__label[data-v-3bb97088]{display:flex;justify-content:center;align-items:center;padding:6px 20px;color:#007bc4;background-color:#fff;border:1px solid #007bc4;box-shadow:inset 0 0 0 1px transparent;border-radius:100px;font-size:1.4rem;font-weight:600;line-height:22px;cursor:pointer;outline:none;overflow:hidden;transition:background-color .3s ease-out,box-shadow .3s ease-out,border-color .3s ease-out,padding-left .3s ease-out}.e-button-select__label[data-v-3bb97088]:hover{background-color:#e6f2f9}:focus+.e-button-select__label[data-v-3bb97088]{background-color:#e6f2f9;box-shadow:inset 0 0 0 1px #266198;border-color:#266198}.e-button-select__label--selected[data-v-3bb97088]{background-color:#007bc4;color:#fff;padding-left:38px}.e-button-select__label--selected[data-v-3bb97088]:hover{background-color:#266198}:focus+.e-button-select__label--selected[data-v-3bb97088]{background-color:#007bc4}.e-button-select__label--selected .e-button-select__icon[data-v-3bb97088]{position:absolute;left:7px}.e-button-select__label--disabled[data-v-3bb97088]{background-color:#80889b;color:#dfe1e6;border-color:transparent;box-shadow:none;pointer-events:none}.e-button-select__icon[data-v-3bb97088]{display:flex;margin-right:8px}.e-button-select__icon[data-v-3bb97088] svg path{fill:#fff}</style>
      <style type="text/css">.e-label[data-v-01f6f991]{border-radius:4px;font-size:1.2rem;font-weight:600;display:inline-flex;justify-content:center;align-items:center;height:22px;padding:2px 4px;line-height:1.8rem}@media(min-width: 768px){.e-label[data-v-01f6f991]{height:26px;padding:2px 8px;line-height:2.2rem;font-size:1.4rem}}.e-label--variant-ui-error[data-v-01f6f991]{background-color:#ba0808}.e-label--variant-brand-01[data-v-01f6f991]{background-color:#007bc4}.e-label--variant-brand-01-tint-20[data-v-01f6f991]{background-color:#cce5f3}.e-label--variant-brand-02[data-v-01f6f991]{background-color:#00014d}.e-label--variant-brand-04[data-v-01f6f991]{background-color:#53efef}.e-label--variant-sub-brand-02[data-v-01f6f991]{background-color:#f8cb46}.e-label__value[data-v-01f6f991]{color:#fff}.e-label__value--dark[data-v-01f6f991]{color:#00014d}</style>
      <style type="text/css">.e-pill[data-v-c091d452]{height:24px;min-width:24px;padding:3px 7px;border-radius:100px;font-size:12px;font-weight:600;display:inline-flex;justify-content:center;align-items:center;line-height:1.8rem}.e-pill--small[data-v-c091d452]{height:16px;min-width:16px;padding:0 4px;line-height:1.6rem}.e-pill--variant-ui-error[data-v-c091d452]{background-color:#ba0808}.e-pill--variant-brand-01[data-v-c091d452]{background-color:#007bc4}.e-pill--variant-brand-01-tint-20[data-v-c091d452]{background-color:#cce5f3}.e-pill--variant-brand-02[data-v-c091d452]{background-color:#00014d}.e-pill--variant-brand-04[data-v-c091d452]{background-color:#53efef}.e-pill__value[data-v-c091d452]{color:#fff}.e-pill__value--dark[data-v-c091d452]{color:#00014d}</style>
      <style type="text/css">.e-tabs[data-v-3dea75c5]{display:flex;flex-direction:column;color:#00014d}.e-tabs__tabs[data-v-3dea75c5]{display:flex;flex-direction:row;font-size:1.4rem;line-height:2rem;margin-bottom:16px}@media(min-width: 768px){.e-tabs__tabs[data-v-3dea75c5]{font-size:1.6rem;line-height:2.4rem}}.e-tabs__tab[data-v-3dea75c5]{display:flex;justify-content:center;align-items:center;padding:11px 16px;cursor:pointer;border:1px solid #99cae7;width:100%}@media(min-width: 768px){.e-tabs__tab[data-v-3dea75c5]{width:initial}}.e-tabs__tab--active[data-v-3dea75c5]{background-color:#cce5f3;font-weight:600}.e-tabs__tab[data-v-3dea75c5]:first-of-type{border-right:none;border-left:1px solid #99cae7;border-top-left-radius:4px;border-bottom-left-radius:4px}.e-tabs__tab[data-v-3dea75c5]:last-of-type{border-left:none;border-right:1px solid #99cae7;border-top-right-radius:4px;border-bottom-right-radius:4px}.e-tabs__tab[data-v-3dea75c5]:only-child{border:1px solid #99cae7;border-radius:4px}.e-tabs__tab[data-v-3dea75c5]:hover{background-color:#99cae7}.e-tabs__pill[data-v-3dea75c5]{margin-left:4px}</style>
      <style type="text/css">.node[data-v-06a5c80f]{border-bottom:1px solid #cce5f3}.node__flex[data-v-06a5c80f]{display:flex}.node--not-early[data-v-06a5c80f]{border-bottom:none}.node:first-of-type .node__label[data-v-06a5c80f]{margin:0 0 16px}.node__button-container[data-v-06a5c80f]{display:flex;justify-content:flex-end;padding-top:8px;margin-bottom:24px}.node__phone[data-v-06a5c80f]{margin-top:16px;cursor:pointer}.node__phone-text[data-v-06a5c80f]{color:#006baa;text-decoration:underline;font-size:1.4rem;line-height:2rem;font-weight:600;text-decoration-thickness:2px;text-underline-offset:4px}.node__phone-text[data-v-06a5c80f]:hover{color:#266198}@media(min-width: 768px){.node__phone-text[data-v-06a5c80f]{font-size:1.6rem;line-height:2.4rem}}.node__phone-icon[data-v-06a5c80f]{display:flex;align-items:center;margin-right:8px}.node__phone:hover .node__phone-text[data-v-06a5c80f]{color:#266198;background-color:#e6e6ec}.node__facilities-list[data-v-06a5c80f]{padding:0}.node__facilities-list-item[data-v-06a5c80f]{padding-bottom:4px;display:flex;font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.node__facilities-list-item[data-v-06a5c80f]{line-height:2.2rem}}.node__opening-list[data-v-06a5c80f]{padding:0}.node__opening-list-item[data-v-06a5c80f]{padding-bottom:4px;display:flex}.node__opening-time[data-v-06a5c80f]{font-size:1.4rem;line-height:2rem;width:50px;display:flex}@media(min-width: 768px){.node__opening-time[data-v-06a5c80f]{line-height:2.2rem}}.node__opening-time-dash[data-v-06a5c80f]{font-size:1.4rem;line-height:2rem;width:16px}@media(min-width: 768px){.node__opening-time-dash[data-v-06a5c80f]{line-height:2.2rem}}.node__opening-time-container[data-v-06a5c80f]{display:flex}.node__opening-day[data-v-06a5c80f]{font-size:1.4rem;line-height:2rem;font-weight:600;min-width:56px;width:56px}@media(min-width: 768px){.node__opening-day[data-v-06a5c80f]{line-height:2.2rem}}.node__link[data-v-06a5c80f]{font-weight:600;text-decoration:underline;cursor:pointer;color:#006baa;text-decoration-thickness:2px;font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.node__link[data-v-06a5c80f]{font-size:1.6rem;line-height:2.4rem}}.node__link[data-v-06a5c80f]:hover{color:#266198}.node__row[data-v-06a5c80f]{display:flex;margin-bottom:8px}.node__label[data-v-06a5c80f]{margin:24px 0 16px}.node__distance[data-v-06a5c80f]{position:relative;display:flex;width:24px;margin-right:8px}.node__distance-number[data-v-06a5c80f]{position:absolute;top:2px;left:50%;transform:translateX(-50%);color:#00014d;font-size:1.2rem;line-height:1.8rem;font-weight:600}.node__distance-text[data-v-06a5c80f]{font-weight:600;font-size:1.6rem;line-height:2.2rem}@media(min-width: 768px){.node__distance-text[data-v-06a5c80f]{line-height:2.4rem}}.node--ParcelShop .node__distance-number[data-v-06a5c80f]{color:#fff}.node--locker .node__distance-number[data-v-06a5c80f]{color:#00014d}.node__text--bold[data-v-06a5c80f]{font-weight:600}.node__text--small[data-v-06a5c80f]{font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.node__text--small[data-v-06a5c80f]{line-height:2.2rem}}.node__directions[data-v-06a5c80f]{margin-bottom:16px;cursor:pointer;padding:8px 0}.node__directions-icon[data-v-06a5c80f]{margin-right:8px;display:flex;align-items:center}.node__info[data-v-06a5c80f]{padding:8px 0;margin-bottom:8px;cursor:pointer}.node__info-icon[data-v-06a5c80f]{display:flex;align-items:center;margin-left:8px}.node--expanded .node__info-icon[data-v-06a5c80f]{transform:rotate(180deg)}.node__map[data-v-06a5c80f]{width:100%}</style>
      <style type="text/css">.app-container[data-v-4b600d36]{margin:0 auto;max-width:950px;width:calc(100% - 32px)}@media(min-width: 768px){.app-container[data-v-4b600d36]{width:calc(100% - 64px)}}.homepage-container[data-v-4b600d36]{margin:0 auto;max-width:1200px;width:calc(100% - 32px)}@media(min-width: 768px){.homepage-container[data-v-4b600d36]{width:calc(100% - 64px)}}@media(min-width: 0px)and (max-width: 767px){.hide-below-tablet[data-v-4b600d36]{display:none}}@media(min-width: 768px)and (max-width: 991px){.hide-below-tablet[data-v-4b600d36]{display:none}}@media(min-width: 0px)and (max-width: 767px){.hide-below-mobile[data-v-4b600d36]{display:none}}@media(min-width: 768px){.hide-above-mobile[data-v-4b600d36]{display:none}}@media(min-width: 992px){.hide-above-tablet[data-v-4b600d36]{display:none}}.flex-grow[data-v-4b600d36]{flex-grow:1}.clickable[data-v-4b600d36]{cursor:pointer}.diverted__body[data-v-4b600d36]{padding:32px 0 56px}@media(min-width: 768px)and (max-width: 991px){.diverted__body[data-v-4b600d36]{padding-bottom:72px}}@media(min-width: 992px){.diverted__body[data-v-4b600d36]{padding:0 0 88px}}.diverted__body-title[data-v-4b600d36]{padding-top:0;padding-bottom:16px}.diverted__button[data-v-4b600d36]{margin-top:32px}.diverted__button-container[data-v-4b600d36]{display:flex}@media(min-width: 768px){.diverted__button-container[data-v-4b600d36]{justify-content:flex-end}}</style>
      <style type="text/css">.e-text-area[data-v-4a121323]{position:relative;display:inline-flex;flex-direction:column;width:100%}.e-text-area__label[data-v-4a121323]{display:flex;font-size:1.4rem;line-height:2.2rem;color:#00014d;margin-bottom:4px}.e-text-area__input[data-v-4a121323]{overflow:hidden;width:100%;border:1px solid #80889b;border-radius:2px;resize:none;background:#fff;padding:10px 16px;font-size:1.6rem;line-height:2.4rem;font-family:"Poppins",Arial,Helvetica,sans-serif;color:#00014d;caret-color:#007bc4}.e-text-area__input[data-v-4a121323]:hover{border:1px solid #000c8c}.e-text-area__input:hover+.e-text-area__limit[data-v-4a121323]{border-left:1px solid #000c8c;border-top:1px solid #000c8c}.e-text-area__input:hover+.e-text-area__limit--disabled[data-v-4a121323]{border-left:1px solid #80889b;border-top:1px solid #80889b}.e-text-area__input[data-v-4a121323]:focus{border:2px solid #000c8c;outline:0}.e-text-area__input:focus+.e-text-area__limit[data-v-4a121323]{border-left:1px solid #000c8c;border-top:1px solid #000c8c}.e-text-area__input--error[data-v-4a121323]{border:1px solid #ba0808}.e-text-area__input--disabled[data-v-4a121323]{border:1px solid #80889b;background:#dfe1e6}.e-text-area__input--disabled[data-v-4a121323]:hover{border:1px solid #80889b}.e-text-area__input--disabled[data-v-4a121323]:focus{border:1px solid #80889b}.e-text-area__input--limit[data-v-4a121323]{padding-bottom:42px}.e-text-area__input-wrapper[data-v-4a121323]{display:flex;position:relative}.e-text-area__limit[data-v-4a121323]{height:34px;display:flex;align-items:center;border-left:1px solid #80889b;border-top:1px solid #80889b;position:absolute;right:0;bottom:0;border-top-left-radius:4px;color:#80889b;font-size:1.2rem;line-height:1.8rem;font-weight:600;padding:8px 16px 8px 12px;width:8rem}.e-text-area__limit--error[data-v-4a121323]{border-left:1px solid #ba0808;border-top:1px solid #ba0808}.e-text-area__limit--disabled[data-v-4a121323]{border-left:1px solid #80889b;border-top:1px solid #80889b}.e-text-area__icon[data-v-4a121323]{position:absolute;bottom:11px;right:11px}.e-text-area__icon--limit[data-v-4a121323]{right:90px;bottom:6px}.e-text-area__helper[data-v-4a121323]{color:#616a82;font-size:1.2rem;line-height:1.8rem;margin-top:4px}.e-text-area__helper--error[data-v-4a121323]{color:#ba0808}.e-text-area__helper--disabled[data-v-4a121323]{color:#616a82}</style>
      <style type="text/css">.courier-rating__icon[data-v-ab005826]{margin-bottom:16px;width:80px;height:80px;border-radius:50%;object-fit:cover}.courier-rating__icon[data-v-ab005826]  svg{width:40px;height:40px}.courier-rating__title[data-v-ab005826]{padding:0;margin-bottom:16px}.courier-rating__star-container[data-v-ab005826]{user-select:none;display:flex}.courier-rating__star-wrapper[data-v-ab005826]{cursor:pointer}.courier-rating__star-wrapper[data-v-ab005826]:not(:last-child){padding-right:8px}.courier-rating__star-wrapper+.courier-rating__star-wrapper[data-v-ab005826]{padding-left:8px}.courier-rating__review[data-v-ab005826]{margin-top:22px;padding-top:20px;border-top:1px solid #cce5f3}.courier-rating__compliment-title[data-v-ab005826]{padding:0;margin-bottom:4px}.courier-rating__compliment-text[data-v-ab005826]{padding:0}.courier-rating__badge-container[data-v-ab005826]{margin:24px 0 32px;display:grid;grid-template-columns:repeat(auto-fill, 92px);grid-row-gap:24px;grid-column-gap:16px}@media(min-width: 768px)and (max-width: 991px){.courier-rating__badge-container[data-v-ab005826]{grid-column-gap:24px;max-width:440px}}@media(min-width: 992px){.courier-rating__badge-container[data-v-ab005826]{margin-top:32px;grid-column-gap:32px;max-width:712px}}.courier-rating__badge-single[data-v-ab005826]{display:flex;flex-direction:column;align-items:center;cursor:pointer}.courier-rating__badge-single--selected .courier-rating__badge-avatar[data-v-ab005826]{box-shadow:inset 0 0 0 2px #53efef}.courier-rating__badge-single--selected .courier-rating__badge-text[data-v-ab005826]{font-weight:600}.courier-rating__badge-avatar[data-v-ab005826]{display:flex;justify-content:center;align-items:center;width:64px;height:64px;background-color:#f2f8fc;border-radius:50%}.courier-rating__badge-avatar[data-v-ab005826]:hover{background-color:#e6f2f9}.courier-rating__badge-image[data-v-ab005826]{width:32px;height:32px}.courier-rating__badge-text[data-v-ab005826]{text-align:center;font-size:1.2rem;line-height:1.6rem;overflow-wrap:break-word}@media(min-width: 992px){.courier-rating__badge-text[data-v-ab005826]{line-height:1.8rem}}.courier-rating__button[data-v-ab005826]{margin-top:32px}@media(min-width: 768px){.courier-rating__button[data-v-ab005826]{display:flex;justify-content:flex-end}}</style>
      <style type="text/css">@media(min-width: 768px){.successful-rating-modal[data-v-a2640f92] .e-modal-card__buttons-wrapper{grid-template-columns:auto 1fr !important}}</style>
      <style type="text/css">@media(min-width: 768px){.already-rated-modal[data-v-d4424edc] .e-modal-card__buttons-wrapper{grid-template-columns:auto 1fr !important}}</style>
      <style type="text/css">.app-container{margin:0 auto;max-width:950px;width:calc(100% - 32px)}@media(min-width: 768px){.app-container{width:calc(100% - 64px)}}.homepage-container{margin:0 auto;max-width:1200px;width:calc(100% - 32px)}@media(min-width: 768px){.homepage-container{width:calc(100% - 64px)}}@media(min-width: 0px)and (max-width: 767px){.hide-below-tablet{display:none}}@media(min-width: 768px)and (max-width: 991px){.hide-below-tablet{display:none}}@media(min-width: 0px)and (max-width: 767px){.hide-below-mobile{display:none}}@media(min-width: 768px){.hide-above-mobile{display:none}}@media(min-width: 992px){.hide-above-tablet{display:none}}.flex-grow{flex-grow:1}.clickable{cursor:pointer}.rate__body{padding:32px 0 56px}@media(min-width: 768px)and (max-width: 991px){.rate__body{padding-bottom:72px}}@media(min-width: 992px){.rate__body{padding:0 0 88px}}</style>
      <style type="text/css">.my-address-diversion__button[data-v-5db8a5f8]:first-of-type{margin-right:0;margin-top:16px}@media(min-width: 768px){.my-address-diversion__button[data-v-5db8a5f8]:first-of-type{margin-right:24px;margin-top:0}}.my-address-diversion__button-container[data-v-5db8a5f8]{display:flex;flex-direction:column-reverse;justify-content:flex-end;margin-top:32px}@media(min-width: 768px){.my-address-diversion__button-container[data-v-5db8a5f8]{flex-direction:row}}.my-address-diversion__card[data-v-5db8a5f8]{margin-bottom:32px}.my-address-diversion__info[data-v-5db8a5f8]{padding-bottom:24px;border-bottom:1px solid #cce5f3;font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.my-address-diversion__info[data-v-5db8a5f8]{line-height:2.2rem}}.my-address-diversion__address-title[data-v-5db8a5f8]{padding-top:24px;font-size:1.6rem;line-height:2.2rem;font-weight:600;margin-bottom:8px}@media(min-width: 768px){.my-address-diversion__address-title[data-v-5db8a5f8]{line-height:2.4rem}}.my-address-diversion__address-row[data-v-5db8a5f8]{font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.my-address-diversion__address-row[data-v-5db8a5f8]{line-height:2.2rem}}</style>
      <style type="text/css">.app-container[data-v-6d422ba8]{margin:0 auto;max-width:950px;width:calc(100% - 32px)}@media(min-width: 768px){.app-container[data-v-6d422ba8]{width:calc(100% - 64px)}}.homepage-container[data-v-6d422ba8]{margin:0 auto;max-width:1200px;width:calc(100% - 32px)}@media(min-width: 768px){.homepage-container[data-v-6d422ba8]{width:calc(100% - 64px)}}@media(min-width: 0px)and (max-width: 767px){.hide-below-tablet[data-v-6d422ba8]{display:none}}@media(min-width: 768px)and (max-width: 991px){.hide-below-tablet[data-v-6d422ba8]{display:none}}@media(min-width: 0px)and (max-width: 767px){.hide-below-mobile[data-v-6d422ba8]{display:none}}@media(min-width: 768px){.hide-above-mobile[data-v-6d422ba8]{display:none}}@media(min-width: 992px){.hide-above-tablet[data-v-6d422ba8]{display:none}}.flex-grow[data-v-6d422ba8]{flex-grow:1}.clickable[data-v-6d422ba8]{cursor:pointer}.diversions__body[data-v-6d422ba8]{padding:32px 0 56px}@media(min-width: 768px)and (max-width: 991px){.diversions__body[data-v-6d422ba8]{padding-bottom:72px}}@media(min-width: 992px){.diversions__body[data-v-6d422ba8]{padding:0 0 88px}}</style>
      <style type="text/css">.locker-diversions__location-text[data-v-3797bf9c]{font-size:1.4rem;line-height:2rem;padding-bottom:16px}@media(min-width: 768px){.locker-diversions__location-text[data-v-3797bf9c]{line-height:2.2rem}}.locker-diversions__location-title[data-v-3797bf9c]{padding-bottom:4px;font-size:2rem;line-height:2.6rem;padding-top:32px}@media(min-width: 768px){.locker-diversions__location-title[data-v-3797bf9c]{line-height:2.8rem}}.locker-diversions__location-title--not-early[data-v-3797bf9c]{padding-bottom:16px}.locker-diversions__change[data-v-3797bf9c]{margin-top:24px}.locker-diversions__change-container[data-v-3797bf9c]{display:flex;justify-content:flex-end}.locker-diversions__details-card[data-v-3797bf9c]{margin-bottom:32px}.locker-diversions__main[data-v-3797bf9c]{margin-bottom:32px}.locker-diversions__main-footer[data-v-3797bf9c]{display:flex}.locker-diversions__main-footer p[data-v-3797bf9c]{padding:0;font-size:1.2rem;line-height:1.8rem}.locker-diversions__main-footer-icon[data-v-3797bf9c]{display:flex;margin-right:8px}.locker-diversions__link[data-v-3797bf9c]{font-weight:600;text-decoration:underline;cursor:pointer;color:#006baa;text-decoration-thickness:2px;margin-top:24px}.locker-diversions__link[data-v-3797bf9c]:hover{color:#266198}.locker-diversions__link-container[data-v-3797bf9c]{display:flex}.locker-diversions__button[data-v-3797bf9c]:first-of-type{margin-top:16px;margin-right:0}@media(min-width: 768px){.locker-diversions__button[data-v-3797bf9c]:first-of-type{margin-top:0;margin-right:24px}}.locker-diversions__buttons[data-v-3797bf9c]{display:flex;flex-direction:column-reverse}@media(min-width: 768px){.locker-diversions__buttons[data-v-3797bf9c]{flex-direction:row;justify-content:flex-end}}.locker-diversions__nearest[data-v-3797bf9c]{display:flex}.locker-diversions__nearest-icon[data-v-3797bf9c]{padding-top:1px;margin-right:8px}.locker-diversions__nearest-text[data-v-3797bf9c]{padding:0;font-size:1.2rem;line-height:1.8rem}.locker-diversions__nearest-text--bold[data-v-3797bf9c]{font-weight:600}.locker-diversions__info[data-v-3797bf9c]{padding:0;font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.locker-diversions__info[data-v-3797bf9c]{line-height:2.2rem}}</style>
      <style type="text/css">.confirm-diversion-to-node-modal__text+.confirm-diversion-to-node-modal__text[data-v-01fa9de5]{margin-top:12px}@media(min-width: 768px){.confirm-diversion-to-node-modal__text+.confirm-diversion-to-node-modal__text[data-v-01fa9de5]{margin-top:16px}}</style>
      <style type="text/css">@media(min-width: 768px){.not-diverted-kickback-modal[data-v-1c61c810] .e-modal-card__buttons-wrapper{grid-template-columns:1fr 200px !important}}</style>
      <style type="text/css">@media(min-width: 768px){.late-diversion-error-modal[data-v-3357f898] .e-modal-card__buttons-wrapper{grid-template-columns:auto 1fr !important}}</style>
      <style type="text/css">.app-container[data-v-df3f9e0c]{margin:0 auto;max-width:950px;width:calc(100% - 32px)}@media(min-width: 768px){.app-container[data-v-df3f9e0c]{width:calc(100% - 64px)}}.homepage-container[data-v-df3f9e0c]{margin:0 auto;max-width:1200px;width:calc(100% - 32px)}@media(min-width: 768px){.homepage-container[data-v-df3f9e0c]{width:calc(100% - 64px)}}@media(min-width: 0px)and (max-width: 767px){.hide-below-tablet[data-v-df3f9e0c]{display:none}}@media(min-width: 768px)and (max-width: 991px){.hide-below-tablet[data-v-df3f9e0c]{display:none}}@media(min-width: 0px)and (max-width: 767px){.hide-below-mobile[data-v-df3f9e0c]{display:none}}@media(min-width: 768px){.hide-above-mobile[data-v-df3f9e0c]{display:none}}@media(min-width: 992px){.hide-above-tablet[data-v-df3f9e0c]{display:none}}.flex-grow[data-v-df3f9e0c]{flex-grow:1}.clickable[data-v-df3f9e0c]{cursor:pointer}.diversions__body[data-v-df3f9e0c]{padding:32px 0 56px}@media(min-width: 768px)and (max-width: 991px){.diversions__body[data-v-df3f9e0c]{padding-bottom:72px}}@media(min-width: 992px){.diversions__body[data-v-df3f9e0c]{padding:0 0 88px}}</style>
      <style type="text/css">.noselect[data-v-84966b1a]{-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.e-dropdown[data-v-84966b1a]{width:100%;color:#616a82;outline:none}@media(min-width: 768px){.e-dropdown[data-v-84966b1a]{width:300px}}.e-dropdown__label[data-v-84966b1a]{color:#00014d;font-size:1.4rem;line-height:2.2rem;margin-bottom:4px}.e-dropdown__helper[data-v-84966b1a]{color:#616a82;font-size:1.2rem;line-height:1.8rem;margin-top:2px}.e-dropdown__helper.error[data-v-84966b1a]{color:#ba0808}.e-dropdown__input[data-v-84966b1a]{border:1px solid #80889b;border-radius:2px;display:flex;cursor:pointer;position:relative}.e-dropdown__input-text[data-v-84966b1a]{padding:10px 16px;flex-grow:1;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.e-dropdown__input-text.filled[data-v-84966b1a]{color:#00014d}.e-dropdown__input-arrow[data-v-84966b1a]{display:flex;align-items:center;border-left:1px solid #80889b;padding:0 1.4rem}.e-dropdown__input-icon[data-v-84966b1a]{display:flex}.e-dropdown__input[data-v-84966b1a]:hover{border:1px solid #000c8c}.e-dropdown__input:hover .e-dropdown__input-arrow[data-v-84966b1a]{border-left:1px solid #000c8c}.e-dropdown__input.expanded[data-v-84966b1a]{border-width:2px}.e-dropdown__input.expanded .e-dropdown__input-text[data-v-84966b1a]{padding:9px 15px}.e-dropdown__input.expanded .e-dropdown__input-arrow[data-v-84966b1a]{border-left:1px solid #000c8c;padding-right:calc(1.4rem - 1px)}.e-dropdown__input.expanded .e-dropdown__input-icon[data-v-84966b1a]{transform:rotate(180deg)}.e-dropdown__input.success[data-v-84966b1a]{border-color:#007bc4}.e-dropdown__input.success .e-dropdown__input-arrow[data-v-84966b1a]{border-left:1px solid #007bc4}.e-dropdown__input.error[data-v-84966b1a]{border-color:#ba0808}.e-dropdown__input.error .e-dropdown__options[data-v-84966b1a]{border:1px solid #ba0808}.e-dropdown__input.error .e-dropdown__input-arrow[data-v-84966b1a]{border-left:1px solid #ba0808}.e-dropdown__input.error .e-dropdown__input-icon[data-v-84966b1a] svg path{fill:#80889b}.e-dropdown__input.disabled[data-v-84966b1a]{border:1px solid #80889b;background-color:#dfe1e6;cursor:default}.e-dropdown__input.disabled .e-dropdown__input-arrow[data-v-84966b1a]{border-left:1px solid #80889b}.e-dropdown__input.disabled .e-dropdown__input-icon[data-v-84966b1a] svg path{fill:#80889b}.e-dropdown__option[data-v-84966b1a]{padding:1rem 1.6rem;color:#00014d;display:flex;width:100%}.e-dropdown__option[data-v-84966b1a] :hover{background-color:#e6f2f9}.e-dropdown__option-text[data-v-84966b1a]{flex-grow:1;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;width:100%}.e-dropdown__option-icon[data-v-84966b1a]{display:flex;padding-left:4px}.e-dropdown__option--focused[data-v-84966b1a]{background-color:#e6f2f9}.e-dropdown__option--selected[data-v-84966b1a]{background-color:#e6f2f9}.e-dropdown__option--selected .e-dropdown__option-text[data-v-84966b1a]{font-weight:600}.e-dropdown__option[data-v-84966b1a]:hover{background-color:#e6f2f9}.e-dropdown__options[data-v-84966b1a]{z-index:20;background-color:#fff;border:1px solid #000c8c;border-radius:2px;cursor:pointer;position:absolute;left:-1px;width:calc(100% + 2px);max-height:350px;overflow-y:auto;top:45px}@media(min-width: 768px){.e-dropdown__options[data-v-84966b1a]{top:49px}}</style>
      <style type="text/css">.neighbour-diversion__dropdown[data-v-d6f6cbd6]{width:100%}@media(min-width: 768px){.neighbour-diversion__dropdown[data-v-d6f6cbd6]{width:456px}}.neighbour-diversion__note[data-v-d6f6cbd6]{font-size:1.4rem;line-height:2.2rem;padding-bottom:4px}.neighbour-diversion__title[data-v-d6f6cbd6]{padding:0;margin-bottom:4px}.neighbour-diversion__subtitle[data-v-d6f6cbd6]{font-size:1.4rem;line-height:2rem;padding-bottom:16px}@media(min-width: 768px){.neighbour-diversion__subtitle[data-v-d6f6cbd6]{line-height:2.2rem}}.neighbour-diversion__info[data-v-d6f6cbd6]{display:flex}.neighbour-diversion__info-icon[data-v-d6f6cbd6]{margin-right:8px;padding-top:1px}.neighbour-diversion__info-text[data-v-d6f6cbd6]{font-size:1.2rem;line-height:1.8rem;padding:0}.neighbour-diversion__button[data-v-d6f6cbd6]:first-of-type{margin-right:0;margin-top:16px}@media(min-width: 768px){.neighbour-diversion__button[data-v-d6f6cbd6]:first-of-type{margin-right:24px;margin-top:0}}.neighbour-diversion__button-container[data-v-d6f6cbd6]{display:flex;flex-direction:column-reverse;justify-content:flex-end;margin-top:32px}@media(min-width: 768px){.neighbour-diversion__button-container[data-v-d6f6cbd6]{flex-direction:row}}</style>
      <style type="text/css">.divert-confirmation-modal[data-v-ddecbd1a] .e-modal-card__buttons-wrapper{margin-top:32px !important}.divert-confirmation-modal__title[data-v-ddecbd1a]{margin-bottom:8px;padding:0}.divert-confirmation-modal__text[data-v-ddecbd1a]{margin-bottom:32px}.divert-confirmation-modal__text-wrapper-bottom[data-v-ddecbd1a]{padding-top:32px;border-top:1px solid #cce5f3}</style>
      <style type="text/css">.app-container[data-v-3f89fc2a]{margin:0 auto;max-width:950px;width:calc(100% - 32px)}@media(min-width: 768px){.app-container[data-v-3f89fc2a]{width:calc(100% - 64px)}}.homepage-container[data-v-3f89fc2a]{margin:0 auto;max-width:1200px;width:calc(100% - 32px)}@media(min-width: 768px){.homepage-container[data-v-3f89fc2a]{width:calc(100% - 64px)}}@media(min-width: 0px)and (max-width: 767px){.hide-below-tablet[data-v-3f89fc2a]{display:none}}@media(min-width: 768px)and (max-width: 991px){.hide-below-tablet[data-v-3f89fc2a]{display:none}}@media(min-width: 0px)and (max-width: 767px){.hide-below-mobile[data-v-3f89fc2a]{display:none}}@media(min-width: 768px){.hide-above-mobile[data-v-3f89fc2a]{display:none}}@media(min-width: 992px){.hide-above-tablet[data-v-3f89fc2a]{display:none}}.flex-grow[data-v-3f89fc2a]{flex-grow:1}.clickable[data-v-3f89fc2a]{cursor:pointer}.diversions__body[data-v-3f89fc2a]{padding:32px 0 56px}@media(min-width: 768px)and (max-width: 991px){.diversions__body[data-v-3f89fc2a]{padding-bottom:72px}}@media(min-width: 992px){.diversions__body[data-v-3f89fc2a]{padding:0 0 88px}}</style>
      <style type="text/css">.parcelshop-diversions__location-text[data-v-56f2fd50]{font-size:1.4rem;line-height:2rem;padding-bottom:16px}@media(min-width: 768px){.parcelshop-diversions__location-text[data-v-56f2fd50]{line-height:2.2rem}}.parcelshop-diversions__location-title[data-v-56f2fd50]{padding-bottom:4px;font-size:2rem;line-height:2.6rem;padding-top:32px}@media(min-width: 768px){.parcelshop-diversions__location-title[data-v-56f2fd50]{line-height:2.8rem}}.parcelshop-diversions__location-title--not-early[data-v-56f2fd50]{padding-bottom:16px}.parcelshop-diversions__change[data-v-56f2fd50]{margin-top:24px}.parcelshop-diversions__change-container[data-v-56f2fd50]{display:flex;justify-content:flex-end}.parcelshop-diversions__main[data-v-56f2fd50]{margin-bottom:32px}.parcelshop-diversions__main-footer[data-v-56f2fd50]{display:flex}.parcelshop-diversions__main-footer p[data-v-56f2fd50]{padding:0;font-size:1.2rem;line-height:1.8rem}.parcelshop-diversions__main-footer-icon[data-v-56f2fd50]{display:flex;margin-right:8px}.parcelshop-diversions__link[data-v-56f2fd50]{font-weight:600;text-decoration:underline;cursor:pointer;color:#006baa;text-decoration-thickness:2px;margin-top:24px}.parcelshop-diversions__link[data-v-56f2fd50]:hover{color:#266198}.parcelshop-diversions__link-container[data-v-56f2fd50]{display:flex}.parcelshop-diversions__button[data-v-56f2fd50]:first-of-type{margin-top:16px;margin-right:0}@media(min-width: 768px){.parcelshop-diversions__button[data-v-56f2fd50]:first-of-type{margin-top:0;margin-right:24px}}.parcelshop-diversions__buttons[data-v-56f2fd50]{display:flex;flex-direction:column-reverse}@media(min-width: 768px){.parcelshop-diversions__buttons[data-v-56f2fd50]{flex-direction:row;justify-content:flex-end}}.parcelshop-diversions__nearest[data-v-56f2fd50]{display:flex}.parcelshop-diversions__nearest-icon[data-v-56f2fd50]{padding-top:1px;margin-right:8px}.parcelshop-diversions__nearest-text[data-v-56f2fd50]{padding:0;font-size:1.2rem;line-height:1.8rem}.parcelshop-diversions__nearest-text--bold[data-v-56f2fd50]{font-weight:600}.parcelshop-diversions__info[data-v-56f2fd50]{padding:0;font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.parcelshop-diversions__info[data-v-56f2fd50]{line-height:2.2rem}}</style>
      <style type="text/css">.app-container[data-v-38cd8c1d]{margin:0 auto;max-width:950px;width:calc(100% - 32px)}@media(min-width: 768px){.app-container[data-v-38cd8c1d]{width:calc(100% - 64px)}}.homepage-container[data-v-38cd8c1d]{margin:0 auto;max-width:1200px;width:calc(100% - 32px)}@media(min-width: 768px){.homepage-container[data-v-38cd8c1d]{width:calc(100% - 64px)}}@media(min-width: 0px)and (max-width: 767px){.hide-below-tablet[data-v-38cd8c1d]{display:none}}@media(min-width: 768px)and (max-width: 991px){.hide-below-tablet[data-v-38cd8c1d]{display:none}}@media(min-width: 0px)and (max-width: 767px){.hide-below-mobile[data-v-38cd8c1d]{display:none}}@media(min-width: 768px){.hide-above-mobile[data-v-38cd8c1d]{display:none}}@media(min-width: 992px){.hide-above-tablet[data-v-38cd8c1d]{display:none}}.flex-grow[data-v-38cd8c1d]{flex-grow:1}.clickable[data-v-38cd8c1d]{cursor:pointer}.diversions__body[data-v-38cd8c1d]{padding:32px 0 56px}@media(min-width: 768px)and (max-width: 991px){.diversions__body[data-v-38cd8c1d]{padding-bottom:72px}}@media(min-width: 992px){.diversions__body[data-v-38cd8c1d]{padding:0 0 88px}}</style>
      <style type="text/css">.e-radio-button[data-v-70ab92d1]{position:relative;display:flex}.e-radio-button[data-v-70ab92d1]:not(:last-of-type){margin-bottom:24px}.e-radio-button .e-radio-button__input[data-v-70ab92d1]{position:absolute;width:100%;height:100%;cursor:pointer;top:0;left:0}.e-radio-button .e-radio-button__input:hover+.e-radio-button__selection[data-v-70ab92d1]{border:2px solid #007bc4}.e-radio-button .e-radio-button__input--disabled[data-v-70ab92d1]{cursor:initial}.e-radio-button .e-radio-button__input--disabled:hover+.e-radio-button__selection[data-v-70ab92d1]{border:1px solid #80889b}.e-radio-button__selection[data-v-70ab92d1]{height:24px;width:24px;min-width:24px;border:1px solid #80889b;border-radius:50%;display:flex;justify-content:center;align-items:center;margin-right:12px}@media(min-width: 768px){.e-radio-button__selection[data-v-70ab92d1]{margin-right:16px}}.e-radio-button__selection[data-v-70ab92d1]::after{content:"";display:none;width:14px;height:14px;border-radius:50%;background-color:#000c8c}.e-radio-button__selection--checked[data-v-70ab92d1]{border:2px solid #007bc4}.e-radio-button__selection--checked[data-v-70ab92d1]::after{display:block}.e-radio-button__selection--disabled[data-v-70ab92d1]{border:1px solid #80889b}.e-radio-button__selection--disabled[data-v-70ab92d1]::after{content:"";display:block;width:20px;height:20px;border-radius:50%;background-color:#80889b}.e-radio-button__label[data-v-70ab92d1]{color:#00014d}.e-radio-button__label--disabled[data-v-70ab92d1]{color:#616a82}.e-radio-button__image[data-v-70ab92d1]{margin-right:8px;display:flex}.e-radio-button__title[data-v-70ab92d1]{display:flex;align-items:center;font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.e-radio-button__title[data-v-70ab92d1]{line-height:2.2rem}}.e-radio-button__title--checked[data-v-70ab92d1]{font-weight:600}.e-radio-button__title-wrapper[data-v-70ab92d1]{min-height:24px;display:flex;align-items:stretch}.e-radio-button__description[data-v-70ab92d1]{font-size:1.2rem;margin-top:4px;line-height:1.6rem}@media(min-width: 768px){.e-radio-button__description[data-v-70ab92d1]{line-height:1.8rem}}</style>
      <style type="text/css">.safeplace-diversion__title[data-v-6872d162]{padding:0;margin-bottom:4px}.safeplace-diversion__subtitle[data-v-6872d162]{font-size:1.4rem;line-height:2rem;padding-bottom:16px}@media(min-width: 768px){.safeplace-diversion__subtitle[data-v-6872d162]{line-height:2.2rem}}.safeplace-diversion__button[data-v-6872d162]:first-of-type{margin-right:0;margin-top:16px}@media(min-width: 768px){.safeplace-diversion__button[data-v-6872d162]:first-of-type{margin-right:24px;margin-top:0}}.safeplace-diversion__button-container[data-v-6872d162]{display:flex;flex-direction:column-reverse;justify-content:flex-end;margin-top:32px}@media(min-width: 768px){.safeplace-diversion__button-container[data-v-6872d162]{flex-direction:row}}.safeplace-diversion__radio[data-v-6872d162]{margin:0}.safeplace-diversion__radio[data-v-6872d162]:not(:last-of-type){margin:0}.safeplace-diversion__icon[data-v-6872d162]{margin-right:8px;height:24px;width:24px}.safeplace-diversion__row[data-v-6872d162]{display:flex;align-items:center;padding-bottom:0;margin-bottom:24px;cursor:pointer}.safeplace-diversion__row[data-v-6872d162]:last-of-type{margin-bottom:0}.safeplace-diversion__list[data-v-6872d162]{padding:0;columns:1}@media(min-width: 768px){.safeplace-diversion__list[data-v-6872d162]{columns:2}}</style>
      <style type="text/css">.app-container[data-v-13c2ed6c]{margin:0 auto;max-width:950px;width:calc(100% - 32px)}@media(min-width: 768px){.app-container[data-v-13c2ed6c]{width:calc(100% - 64px)}}.homepage-container[data-v-13c2ed6c]{margin:0 auto;max-width:1200px;width:calc(100% - 32px)}@media(min-width: 768px){.homepage-container[data-v-13c2ed6c]{width:calc(100% - 64px)}}@media(min-width: 0px)and (max-width: 767px){.hide-below-tablet[data-v-13c2ed6c]{display:none}}@media(min-width: 768px)and (max-width: 991px){.hide-below-tablet[data-v-13c2ed6c]{display:none}}@media(min-width: 0px)and (max-width: 767px){.hide-below-mobile[data-v-13c2ed6c]{display:none}}@media(min-width: 768px){.hide-above-mobile[data-v-13c2ed6c]{display:none}}@media(min-width: 992px){.hide-above-tablet[data-v-13c2ed6c]{display:none}}.flex-grow[data-v-13c2ed6c]{flex-grow:1}.clickable[data-v-13c2ed6c]{cursor:pointer}.diversions__body[data-v-13c2ed6c]{padding:32px 0 56px}@media(min-width: 768px)and (max-width: 991px){.diversions__body[data-v-13c2ed6c]{padding-bottom:72px}}@media(min-width: 992px){.diversions__body[data-v-13c2ed6c]{padding:0 0 88px}}</style>
      <style type="text/css">
         .__nuxt-error-page {
         padding: 1rem;
         background: #F7F8FB;
         color: #47494E;
         text-align: center;
         display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
         font-family: sans-serif;
         font-weight: 100 !important;
         -ms-text-size-adjust: 100%;
         -webkit-text-size-adjust: 100%;
         -webkit-font-smoothing: antialiased;
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         }
         .__nuxt-error-page .error {
         max-width: 450px;
         }
         .__nuxt-error-page .title {
         font-size: 1.5rem;
         margin-top: 15px;
         color: #47494E;
         margin-bottom: 8px;
         }
         .__nuxt-error-page .description {
         color: #7F828B;
         line-height: 21px;
         margin-bottom: 10px;
         }
         .__nuxt-error-page a {
         color: #7F828B !important;
         text-decoration: none;
         }
         .__nuxt-error-page .logo {
         position: fixed;
         left: 12px;
         bottom: 12px;
         }
      </style>
      <style type="text/css">
         .nuxt-progress {
         position: fixed;
         top: 0px;
         left: 0px;
         right: 0px;
         height: 2px;
         width: 0%;
         opacity: 1;
         transition: width 0.1s, opacity 0.4s;
         background-color: #fff;
         z-index: 999999;
         }
         .nuxt-progress.nuxt-progress-notransition {
         transition: none;
         }
         .nuxt-progress-failed {
         background-color: red;
         }
      </style>
      <style type="text/css">@font-face{font-family:"poppins";src:url(https://www.evri.com/fonts/poppins-regular-webfont.7ba404a.eot);src:url(https://www.evri.com/fonts/poppins-regular-webfont.7ba404a.eot?#iefix) format("embedded-opentype"),url(https://www.evri.com/fonts/poppins-regular-webfont.7930357.woff2) format("woff2"),url(https://www.evri.com/fonts/poppins-regular-webfont.acf70b4.woff) format("woff"),url(https://www.evri.com/fonts/poppins-regular-webfont.3b266b7.ttf) format("truetype"),url(https://www.evri.com/img/poppins-regular-webfont.e80f843.svg#poppinsregular) format("svg");font-weight:normal;font-style:normal}@font-face{font-family:"poppins";src:url(https://www.evri.com/fonts/poppins-semibold-webfont.1023792.eot);src:url(https://www.evri.com/fonts/poppins-semibold-webfont.1023792.eot?#iefix) format("embedded-opentype"),url(https://www.evri.com/fonts/poppins-semibold-webfont.392d12d.woff2) format("woff2"),url(https://www.evri.com/fonts/poppins-semibold-webfont.d081a7f.woff) format("woff"),url(https://www.evri.com/fonts/poppins-semibold-webfont.02143da.ttf) format("truetype"),url(https://www.evri.com/img/poppins-semibold-webfont.e92c55d.svg#poppinssemibold) format("svg");font-weight:bold;font-style:normal}body{font-family:"poppins"}*,*:before,*:after{box-sizing:border-box}html,body,div,span,object,iframe,figure,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,code,em,img,small,strike,strong,sub,sup,tt,b,u,i,ol,ul,li,dl,dt,dd,fieldset,form,label,table,caption,tbody,tfoot,thead,tr,th,td,main,canvas,embed,footer,header,nav,section,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;text-size-adjust:none}footer,header,nav,section,main{display:block}body{line-height:1}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:"";content:none}table{border-collapse:collapse;border-spacing:0}input{-webkit-appearance:none;border-radius:0}input::-webkit-outer-spin-button,input::-webkit-inner-spin-button{-webkit-appearance:none;margin:0}input[type=number]{-moz-appearance:textfield}html{font-size:62.5%;font-family:"Poppins",Arial,Helvetica,sans-serif;color:#00014d}@media screen and (min-width: 0){h1{font-size:2.6rem;font-weight:600;line-height:3.2rem;padding-bottom:16px}}@media screen and (min-width: 768px){h1{font-size:4rem;font-weight:600;line-height:5rem;padding-bottom:20px}}@media screen and (min-width: 0){h2{font-size:2.4rem;font-weight:600;line-height:3rem;padding-bottom:16px;padding-top:20px}}@media screen and (min-width: 768px){h2{font-size:3.2rem;font-weight:600;line-height:4.2rem;padding-bottom:20px;padding-top:24px}}@media screen and (min-width: 0){h3{font-size:2.2rem;font-weight:600;line-height:2.8rem;padding-bottom:16px;padding-top:16px}}@media screen and (min-width: 768px){h3{font-size:2.8rem;font-weight:600;line-height:3.8rem;padding-bottom:20px;padding-top:20px}}@media screen and (min-width: 0){h4{font-size:2rem;font-weight:600;line-height:2.6rem;padding-bottom:16px;padding-top:12px}}@media screen and (min-width: 768px){h4{font-size:2rem;font-weight:600;line-height:2.8rem;padding-bottom:20px;padding-top:16px}}@media screen and (min-width: 0){h5{font-size:1.6rem;font-weight:600;line-height:2.2rem;padding-bottom:16px;padding-top:8px}}@media screen and (min-width: 768px){h5{font-size:1.6rem;font-weight:600;line-height:2.4rem;padding-bottom:20px;padding-top:12px}}@media screen and (min-width: 0){h6{font-size:1.6rem;font-weight:600;line-height:2.2rem;padding-bottom:16px;padding-top:8px}}@media screen and (min-width: 768px){h6{font-size:1.6rem;font-weight:600;line-height:2.4rem;padding-bottom:20px;padding-top:12px}}button{font-family:"Poppins",Arial,Helvetica,sans-serif}@media screen and (min-width: 0){button{font-size:1.4rem;font-weight:600;line-height:2rem}}@media screen and (min-width: 768px){button{font-size:1.6rem;font-weight:600;line-height:2.4rem}}@media screen and (min-width: 0){div{font-size:1.4rem;font-weight:400;line-height:2rem}}@media screen and (min-width: 768px){div{font-size:1.6rem;font-weight:400;line-height:2.4rem}}@media screen and (min-width: 0){p{font-size:1.6rem;font-weight:400;line-height:2.2rem;padding-bottom:20px}}@media screen and (min-width: 768px){p{font-size:1.6rem;font-weight:400;line-height:2.4rem;padding-bottom:24px}}@media screen and (min-width: 0){small{font-size:1.4rem;font-weight:400;line-height:2rem;padding-bottom:16px}}@media screen and (min-width: 768px){small{font-size:1.4rem;font-weight:400;line-height:2.2rem;padding-bottom:24px}}@media screen and (min-width: 0){ul,ol{font-size:1.6rem;font-weight:400;line-height:2.2rem;padding-bottom:24px;padding-left:32px}}@media screen and (min-width: 768px){ul,ol{font-size:1.6rem;font-weight:400;line-height:2.4rem;padding-bottom:24px;padding-left:44px}}@media screen and (min-width: 0){li{font-size:1.6rem;font-weight:400;line-height:2.2rem;padding-bottom:12px}}@media screen and (min-width: 768px){li{font-size:1.6rem;font-weight:400;line-height:2.4rem;padding-bottom:16px}}@media screen and (min-width: 0){dl{font-size:1.6rem;font-weight:400;line-height:2.2rem;padding-bottom:24px}}@media screen and (min-width: 768px){dl{font-size:1.6rem;font-weight:400;line-height:2.4rem;padding-bottom:24px}}@media screen and (min-width: 0){dt{font-size:1.6rem;font-weight:600;line-height:2.2rem;padding-bottom:12px}}@media screen and (min-width: 768px){dt{font-size:1.6rem;font-weight:600;line-height:2.4rem;padding-bottom:16px}}@media screen and (min-width: 0){dd{font-size:1.6rem;font-weight:400;line-height:2.2rem;padding-bottom:12px;padding-left:16px}}@media screen and (min-width: 768px){dd{font-size:1.6rem;font-weight:400;line-height:2.4rem;padding-bottom:16px;padding-left:28px}}strong{font-weight:600}a{color:#006baa}a:hover{color:#266198}a:focus{color:#266198;background-color:#e6e6ec}</style>
      <style type="text/css">html{background-color:#007bc4;font-size:10px !important;word-spacing:1px;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;box-sizing:border-box}*,*:before,*:after{box-sizing:border-box;margin:0}.home-layout{background-color:#007bc4}</style>
      <style type="text/css">
         html[data-v-786a85bc] {
         background-color: #ffffff;
         font-size: 10px !important;
         word-spacing: 1px;
         -ms-text-size-adjust: 100%;
         -webkit-text-size-adjust: 100%;
         -moz-osx-font-smoothing: grayscale;
         -webkit-font-smoothing: antialiased;
         box-sizing: border-box;
         }
         *[data-v-786a85bc],
         *[data-v-786a85bc]:before,
         *[data-v-786a85bc]:after {
         box-sizing: border-box;
         margin: 0;
         }
         .index-layout[data-v-786a85bc] {
         background-color: #ffffff;
         }
      </style>
      <style type="text/css">html{background-color:#eef2f4;font-size:10px !important;word-spacing:1px;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;box-sizing:border-box}*,*:before,*:after{box-sizing:border-box;margin:0}.track-layout{font-weight:500;background-color:#eef2f4}</style>
      <link data-n-head="1" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,500,500i,600,700,900">
      <meta data-n-head="1" name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, initial-scale=1, user-scalable=no, shrink-to-fit=no">
      <meta data-n-head="1" data-hid="description" name="description" content="Mercury Track App">
      
      <style type="text/css">.e-accordion-row[data-v-5c11546d]{border:1px solid #cce5f3;overflow:hidden}.e-accordion-row[data-v-5c11546d]:first-of-type{border-top-left-radius:4px;border-top-right-radius:4px}.e-accordion-row[data-v-5c11546d]:last-of-type{border-bottom-left-radius:4px;border-bottom-right-radius:4px}.e-accordion-row[data-v-5c11546d]:not(:first-of-type){border-top:none}.e-accordion-row__header[data-v-5c11546d]{font-size:16px;line-height:24px;display:flex;align-items:center;background-color:#fff;cursor:pointer;padding:16px}@media(min-width: 768px)and (max-width: 991px){.e-accordion-row__header[data-v-5c11546d]{padding:24px}}@media(min-width: 992px){.e-accordion-row__header[data-v-5c11546d]{padding:24px 32px}}.e-accordion-row__header[data-v-5c11546d]:hover{background-color:#e6f2f9}.e-accordion-row__header-text[data-v-5c11546d]{flex-grow:1;padding-right:16px}.e-accordion-row__icon[data-v-5c11546d]{margin-right:20px}.e-accordion-row__content[data-v-5c11546d]{padding:0 16px}@media(min-width: 768px)and (max-width: 991px){.e-accordion-row__content[data-v-5c11546d]{padding:0 24px}}@media(min-width: 992px){.e-accordion-row__content[data-v-5c11546d]{padding:0 32px}}.e-accordion-row__body[data-v-5c11546d]{border-top:1px solid #cce5f3;padding:16px 0}@media(min-width: 768px)and (max-width: 991px){.e-accordion-row__body[data-v-5c11546d]{padding:16px 0 24px}}@media(min-width: 992px){.e-accordion-row__body[data-v-5c11546d]{padding:16px 0 32px}}.e-accordion-row--open[data-v-5c11546d]{border:2px solid #66b0dc}.e-accordion-row--open[data-v-5c11546d]:not(:first-of-type){border-top:2px solid #66b0dc}.e-accordion-row--open+.e-accordion-row--open[data-v-5c11546d]{border-top:none}.e-accordion-row--open .e-accordion-row__header[data-v-5c11546d]{padding:14px}@media(min-width: 768px)and (max-width: 991px){.e-accordion-row--open .e-accordion-row__header[data-v-5c11546d]{padding:22px}}@media(min-width: 992px){.e-accordion-row--open .e-accordion-row__header[data-v-5c11546d]{padding:22px 30px}}.e-accordion-row--open .e-accordion-row__content[data-v-5c11546d]{padding:0 14px}@media(min-width: 768px)and (max-width: 991px){.e-accordion-row--open .e-accordion-row__content[data-v-5c11546d]{padding:0 22px}}@media(min-width: 992px){.e-accordion-row--open .e-accordion-row__content[data-v-5c11546d]{padding:0 30px}}.e-accordion-row--open .e-accordion-row__chevron[data-v-5c11546d]{transform:rotate(180deg)}.e-accordion-row--open .e-accordion-row__header-text[data-v-5c11546d]{font-weight:700}.e-accordion-row--open .e-accordion-row__header[data-v-5c11546d]:hover{background-color:#fff}.e-accordion-row--mobile-footer[data-v-5c11546d]{border-left:none;border-right:none}.e-accordion-row--mobile-footer[data-v-5c11546d]:first-of-type{border-top-left-radius:0;border-top-right-radius:0}.e-accordion-row--mobile-footer[data-v-5c11546d]:last-of-type{border-bottom-left-radius:0;border-bottom-right-radius:0}.e-accordion-row--mobile-footer .e-accordion-row__header[data-v-5c11546d]{padding:12px 16px}.e-accordion-row--mobile-footer .e-accordion-row__header[data-v-5c11546d]:hover{background-color:rgba(0,0,0,0)}.e-accordion-row--mobile-footer .e-accordion-row__header-text[data-v-5c11546d]{font-size:1.6rem;line-height:2.2rem;font-weight:600}.e-accordion-row--mobile-footer .e-accordion-row__content[data-v-5c11546d]{padding:0}.e-accordion-row--mobile-footer .e-accordion-row__body[data-v-5c11546d]{padding:16px;font-size:1.4rem;line-height:2rem}.e-accordion-row--mobile-footer.e-accordion-row--open[data-v-5c11546d]{border-width:1px;border-color:#cce5f3}.e-accordion-row--mobile-footer.e-accordion-row--open .e-accordion-row__header[data-v-5c11546d]{padding:12px 16px}.e-accordion-row--mobile-footer.e-accordion-row--open .e-accordion-row__content[data-v-5c11546d]{padding:0}</style>
      <style type="text/css">.footer-link__group[data-v-c214d066]{list-style:none;break-inside:avoid-column;padding:0;margin-bottom:-1px}@media(min-width: 768px){.footer-link__group[data-v-c214d066]{margin-bottom:32px}}.footer-link__item[data-v-c214d066]{margin-bottom:12px;font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.footer-link__item[data-v-c214d066]{line-height:2.2rem}}.footer-link__item--above-mobile[data-v-c214d066]{display:none}@media(min-width: 768px){.footer-link__item--above-mobile[data-v-c214d066]{display:block}}@media(min-width: 768px){.footer-link__item[data-v-c214d066]:hover{color:#266198;text-decoration:underline;font-weight:600}}.footer-link__item[data-v-c214d066]:focus{background-color:#e6e6ec;color:#266198;text-decoration:underline;font-weight:600}.footer-link__item[data-v-c214d066]:last-of-type{margin-bottom:0}.footer-link__item--bold[data-v-c214d066]{font-weight:600;font-size:1.4rem;line-height:2rem}@media(min-width: 768px){.footer-link__item--bold[data-v-c214d066]{font-size:1.6rem;line-height:2.4rem}}.footer-link__link[data-v-c214d066]{color:#00014d;text-decoration:none}.footer-link__mobile[data-v-c214d066]{display:block}@media(min-width: 768px){.footer-link__mobile[data-v-c214d066]{display:none}}</style>
      <style type="text/css">.subfooter[data-v-1e1b39e0]{display:flex;flex-direction:column}@media(min-width: 992px){.subfooter[data-v-1e1b39e0]{flex-direction:row}}.subfooter__link[data-v-1e1b39e0]{margin-bottom:12px}@media(min-width: 768px){.subfooter__link[data-v-1e1b39e0]{margin-bottom:0px;margin-right:24px}}.subfooter__link[data-v-1e1b39e0]:last-of-type{margin-bottom:0}.subfooter__link-text[data-v-1e1b39e0]{color:#00014d;text-decoration:none;font-size:1.2rem;line-height:1.6rem}@media(min-width: 768px){.subfooter__link-text[data-v-1e1b39e0]{line-height:1.8rem}}.subfooter__links[data-v-1e1b39e0]{padding-bottom:16px;display:flex;flex-direction:column}@media(min-width: 768px){.subfooter__links[data-v-1e1b39e0]{flex-direction:row;padding-bottom:12px}}@media(min-width: 992px){.subfooter__links[data-v-1e1b39e0]{padding:0;flex-grow:1}}.subfooter__bottom[data-v-1e1b39e0]{display:flex;flex-direction:row-reverse;padding-top:20px}@media(min-width: 768px){.subfooter__bottom[data-v-1e1b39e0]{flex-direction:row}}@media(min-width: 992px){.subfooter__bottom[data-v-1e1b39e0]{padding:0}}.subfooter__bottom-copyright[data-v-1e1b39e0]{flex-grow:1;font-size:1.2rem;line-height:1.6rem;display:flex;align-items:center}@media(min-width: 768px){.subfooter__bottom-copyright[data-v-1e1b39e0]{line-height:1.8rem}}.subfooter__bottom-socials[data-v-1e1b39e0]{display:flex}.subfooter__bottom-socials-link[data-v-1e1b39e0]{margin-right:32px}@media(min-width: 768px){.subfooter__bottom-socials-link[data-v-1e1b39e0]{margin-right:24px}}.subfooter__bottom-socials-link[data-v-1e1b39e0]:last-of-type{margin-right:4px}@media(min-width: 768px){.subfooter__bottom-socials-link[data-v-1e1b39e0]:last-of-type{margin-right:52px}}</style>
      
      <style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style>
      
      <style type="text/css">.outer-container[data-v-24a83638]{margin:0 auto}</style>
   </head>
   <body>
      
      <div id="__nuxt">
         <!---->
         <div id="__layout">
            <div>
               <div data-v-8095e9f8="" class="nav__container">
                  <nav data-v-8095e9f8="" class="nav">
                     
                     <div data-v-8095e9f8="" class="nav__main">
                        <div data-v-8095e9f8="" class="nav__main-inner">
                           <div data-v-8095e9f8="" class="nav__main-inner-side nav__main-inner-left">
                              <a data-v-8095e9f8="" href="https://www.evri.com" aria-label="Click here to return to the home page" class="nav__logo-container">
                                 <div data-v-250fdcf4="" data-v-8095e9f8="" data-icon="evri_logo_new_hermes" class="e-icon nav__logo e-icon--neutral-01" style="line-height: 36px;">
                                    <svg viewBox="0 0 75 32" fill="none" xmlns="http://www.w3.org/2000/svg" height="36" width="87">
                                       <path d="M73.05 2.623C73.05 1.128 71.842 0 70.346 0c-1.495 0-2.701 1.128-2.701 2.623 0 1.495 1.206 2.623 2.701 2.623 1.496 0 2.702-1.154 2.702-2.623ZM18.334 5.797V.13H0v3.384h2.02V18.15H0v3.357h18.334v-5.665h-3.646v2.308H5.954v-5.744h7.948V9.18H5.954V3.515h8.735v2.282h3.645ZM37.01.131l-5.876 15.082L25.338.131h-5.482l8.524 21.482h2.36L39.24.131h-2.23Z" fill="#007BC4"></path>
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="m57.679 12.774 7.554 8.734h-3.83l-7.213-8.472H43.882v8.472H40.76V.131h14.557c3.095 0 5.01.577 6.348 1.836 1.075 1.023 1.652 2.466 1.652 4.38 0 3.778-2.413 6.112-5.64 6.427ZM43.882 2.728v7.685H55.37c1.968 0 3.017-.393 3.725-1.128.656-.708.997-1.705.997-2.911 0-1.154-.367-2.046-1.023-2.65-.735-.681-1.836-.996-3.751-.996H43.882Z" fill="#007BC4"></path>
                                       <path d="M74.387 20.957c-1.154-.577-1.679-1.075-1.679-2.334h.026V7.187h-6.137v.55c1.469.997 1.678 1.6 1.678 2.702v8.184c0 1.233-.524 1.757-1.678 2.334v.551h7.79v-.55Zm-69.64 4.197v.892H2.964v5.823H1.862v-5.823H.052v-.892h4.695Zm5.299 2.361a1.839 1.839 0 0 0-.76-.787c-.316-.184-.683-.262-1.102-.289-.341 0-.656.053-.945.184-.288.131-.524.288-.708.524v-2.439H5.456v7.187h1.101v-2.99c0-.472.131-.84.368-1.102.236-.262.55-.393.97-.393.393 0 .734.131.97.393.237.263.368.63.368 1.102v2.99h1.101v-3.148c0-.472-.104-.891-.288-1.232Z" fill="#007BC4"></path>
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M16.157 29.613h-4.091c.026.42.183.76.472 1.023.288.262.63.393 1.049.393.603 0 1.023-.236 1.259-.734h1.18a2.356 2.356 0 0 1-.865 1.207c-.42.314-.945.472-1.574.472-.499 0-.97-.105-1.364-.341a2.582 2.582 0 0 1-.944-.97c-.236-.42-.341-.893-.341-1.443 0-.551.104-1.023.34-1.443.21-.42.525-.734.945-.97.393-.236.865-.341 1.39-.341.498 0 .944.104 1.338.34.393.21.708.525.918.919.21.393.34.865.34 1.363-.012.089-.018.178-.025.263-.007.092-.013.18-.027.262Zm-1.128-.892c0-.42-.157-.734-.445-.97a1.596 1.596 0 0 0-1.05-.367c-.393 0-.708.13-.97.367-.262.236-.42.577-.472.97h2.937Z" fill="#007BC4"></path>
                                       <path d="M23.502 27.515a1.757 1.757 0 0 0-.787-.787c-.315-.184-.708-.262-1.128-.262a2.09 2.09 0 0 0-.892.183 2.255 2.255 0 0 0-.682.525v-.604h-1.102v5.325h1.102v-2.99c0-.472.131-.84.367-1.102.236-.262.551-.393.97-.393.394 0 .735.131.971.393.236.263.367.63.367 1.102v2.99h1.102v-3.148c0-.472-.105-.891-.288-1.232Z" fill="#007BC4"></path>
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M29.613 29.613h-4.092c.026.42.184.76.472 1.023.289.262.63.393 1.05.393.603 0 1.023-.236 1.259-.734h1.18a2.356 2.356 0 0 1-.866 1.207c-.42.314-.944.472-1.573.472-.499 0-.97-.105-1.364-.341a2.582 2.582 0 0 1-.945-.97c-.236-.42-.34-.893-.34-1.443 0-.551.104-1.023.34-1.443.21-.42.525-.734.945-.97.393-.236.865-.341 1.39-.341.498 0 .944.104 1.338.34.393.21.708.525.918.919.21.393.34.865.34 1.363a4.09 4.09 0 0 0-.025.263c-.007.092-.013.18-.027.262Zm-1.128-.892c0-.42-.157-.734-.446-.97a1.596 1.596 0 0 0-1.049-.367c-.393 0-.708.13-.97.367-.263.236-.42.577-.473.97h2.938Z" fill="#007BC4"></path>
                                       <path d="m35.83 31.869 1.652-5.325H36.38l-1.1 4.276-1.076-4.276H33.05l-1.128 4.302-1.101-4.302h-1.128l1.678 5.325h1.155l1.075-3.935 1.075 3.935h1.154Zm9.468-6.715v6.741h-1.101v-2.938h-3.174v2.938H39.92v-6.74h1.102v2.884h3.174v-2.885h1.101Z" fill="#007BC4"></path>
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M47.108 29.613h4.066a23.5 23.5 0 0 0 .078-.524c0-.499-.13-.971-.34-1.364a2.212 2.212 0 0 0-.919-.918c-.393-.236-.839-.341-1.337-.341-.525 0-.997.104-1.39.34-.42.237-.735.551-.945.971-.236.42-.34.892-.34 1.443 0 .55.104 1.023.34 1.442.236.42.551.735.945.97.393.237.865.342 1.363.342.63 0 1.154-.158 1.574-.472.42-.315.708-.709.866-1.207h-1.18c-.237.498-.656.734-1.26.734-.42 0-.76-.13-1.049-.393-.288-.262-.446-.603-.472-1.023Zm2.518-1.862c.289.236.446.55.446.97h-2.938c.053-.393.21-.734.472-.97.263-.236.578-.367.971-.367.42 0 .76.13 1.05.367Z" fill="#007BC4"></path>
                                       <path d="M53.64 26.675c.262-.157.576-.236.944-.236v1.154h-.289c-.42 0-.76.105-.97.341-.21.21-.342.604-.342 1.154v2.807h-1.101V26.57h1.102v.787c.183-.314.393-.524.655-.682Zm9.888.84a1.757 1.757 0 0 0-.787-.787 2.277 2.277 0 0 0-1.102-.262 2.3 2.3 0 0 0-1.101.288 1.777 1.777 0 0 0-.761.76 1.896 1.896 0 0 0-.787-.786c-.34-.184-.734-.262-1.154-.262a2.09 2.09 0 0 0-.892.183 2.255 2.255 0 0 0-.682.525v-.604h-1.101v5.325h1.101v-2.99c0-.472.131-.84.367-1.102.236-.262.551-.393.97-.393.394 0 .735.131.971.393.236.263.368.63.368 1.102v2.99h1.101v-2.99c0-.472.131-.84.367-1.102.237-.262.551-.393.971-.393.393 0 .734.131.97.393.236.263.368.63.368 1.102v2.99h1.101v-3.148c0-.472-.105-.891-.288-1.232Z" fill="#007BC4"></path>
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M69.692 29.613h-4.066c.026.42.184.76.472 1.023.289.262.63.393 1.05.393.603 0 1.022-.236 1.258-.734h1.18a2.356 2.356 0 0 1-.865 1.207c-.42.314-.944.472-1.574.472-.498 0-.97-.105-1.363-.341a2.582 2.582 0 0 1-.945-.97c-.236-.42-.34-.893-.34-1.443 0-.551.104-1.023.34-1.443.21-.42.525-.734.945-.97.393-.236.865-.341 1.39-.341.498 0 .944.104 1.337.34.394.21.709.525.919.919.21.393.34.865.34 1.363-.033.119-.045.237-.057.349-.006.061-.012.12-.021.176Zm-1.102-.892c0-.42-.157-.734-.446-.97a1.596 1.596 0 0 0-1.049-.367c-.393 0-.708.13-.97.367-.263.236-.42.577-.473.97h2.938Z" fill="#007BC4"></path>
                                       <path d="M70.4 31.108c.183.262.446.472.787.63.34.157.708.236 1.154.262.42 0 .76-.079 1.075-.21.315-.131.551-.315.709-.55a1.26 1.26 0 0 0 .262-.814c-.026-.34-.105-.603-.289-.813a1.9 1.9 0 0 0-.656-.472 6.558 6.558 0 0 0-.944-.315 7.058 7.058 0 0 1-.538-.17 1.101 1.101 0 0 1-.485-.276.518.518 0 0 1-.157-.367c0-.184.079-.34.236-.446.131-.105.367-.157.656-.157.288 0 .524.078.708.21.183.157.262.34.288.577h1.102a1.706 1.706 0 0 0-.603-1.26c-.367-.314-.866-.471-1.469-.471-.394 0-.76.078-1.075.21-.315.13-.578.314-.735.55a1.238 1.238 0 0 0-.262.787c0 .341.105.63.288.84.184.21.394.367.656.472.236.105.577.21.97.314.42.105.735.21.919.315.183.105.288.236.288.446 0 .21-.078.341-.262.472-.184.131-.42.184-.735.184-.288 0-.524-.079-.734-.236a.852.852 0 0 1-.315-.577h-1.154c.026.314.131.603.315.865Z" fill="#007BC4"></path>
                                    </svg>
                                 </div>
                              </a>
                              
                              
                              
                           </div>
                           
                        </div>
                     </div>
                     <!---->
                  </nav>
                  <div data-v-8095e9f8="" class="nav-offset"></div>
               </div>
               <div id="single-spa-application:track-app">
                  <div id="__track-app">
                     <!---->
                     <div id="__layout">
                        <div class="track-layout">
                           <div data-v-80c6cc08="">
                              <div data-v-80c6cc08="" class="details__header page-color">
                                 <div data-v-80c6cc08="" class="app-container">
                                    <!----> 
                                    
                                    <div data-v-80c6cc08="" class="details__parcel-info">
                                       <div data-v-80c6cc08="" class="details__parcel-info-wrapper">
                                          <h1 data-v-80c6cc08="" class="details__parcel-info-title">
                                             Your parcel from Evri
                                          </h1>
                                          <div data-v-80c6cc08="" class="details__parcel-info-barcode-wrapper">
                                             <div data-v-250fdcf4="" data-v-80c6cc08="" data-icon="parcel" class="e-icon details__parcel-info-barcode-icon e-icon--neutral-02" style="line-height: 16px;">
                                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" height="16" width="16">
                                                   <path d="M6.828 1H11v5H1.483a.2.2 0 0 1-.142-.341l4.073-4.073A2 2 0 0 1 6.828 1ZM1 8.2c0-.11.09-.2.2-.2h21.6c.11 0 .2.09.2.2V21a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8.2ZM13 1h4.172a2 2 0 0 1 1.414.586l4.073 4.073a.2.2 0 0 1-.142.341H13V1Z" fill="#007BC4"></path>
                                                </svg>
                                             </div>
                                             <p data-v-80c6cc08="" class="details__parcel-info-barcode">TZXXDA0732617072</p>
                                          </div>
                                       </div>
                                       
                                    </div>
                                 </div>
                                 <div data-v-83033bd4="" data-v-80c6cc08="" class="delivery-status-ticket app-container">
                                    <div data-v-83033bd4="" class="delivery-status-ticket__left">
                                       <div data-v-83033bd4="" class="delivery-status-ticket__section">
                                          <div data-v-83033bd4="" class="delivery-status-ticket__status">
                                             <!----> 
                                             <h3 data-v-83033bd4="" class="delivery-status-ticket__status-title">
                                                Missed Delivery
                                             </h3>
                                          </div>
                                          <div data-v-83033bd4="" class="delivery-status-ticket__description">
                                             We missed you on your last delivery
                                          </div>
                                       </div>
                                       <div data-v-99ae94d4="" data-v-83033bd4="" class="timeline">
                                          <div data-v-99ae94d4="" class="timeline__bar">
                                             <div data-v-99ae94d4="" class="timeline__progress" style="width: 100%;"></div>
                                          </div>
                                          <div data-v-250fdcf4="" data-v-99ae94d4="" data-icon="my_address" class="e-icon timeline__image e-icon--undefined timeline__image--last-step timeline__image--not-transparent" style="line-height: 40px;">
                                             <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" height="40" width="40">
                                                <path d="M25.333 15.083h13.25l.292 22.792H25.333V15.083Z" fill="#99CAE7"></path>
                                                <path d="M25.292 15.083 13.083 2.292h14.125L39 15.083H25.292Z" fill="#53EFEF"></path>
                                                <path d="M39.75 40 .083 39.917V16.25c0-2.708 1.084-5.208 3.084-7.083L12.792 0h13.625l10.791 10.75c1.584 1.708 2.459 3.833 2.542 6V40ZM3.5 36.5l32.833.042V16.958c0-1.416-.541-2.791-1.583-3.875l-9.792-9.666H14.167l-8.625 8.25C4.208 12.917 3.5 14.542 3.5 16.292V36.5Z" fill="#007BC4"></path>
                                                <path d="M8.958 26.875H2.083v10.5h6.875v-10.5Z" fill="#53EFEF"></path>
                                                <path d="M10.417 38.833H.625V25.375h9.792v13.458Zm-6.834-2.958h3.875v-7.542H3.583v7.542Zm6.792-20.583H2.917v6.291h7.458v-6.291Zm10.958 0h-6.791v6.291h6.791v-6.291Zm0 10h-6.791v6.291h6.791v-6.291Z" fill="#007BC4"></path>
                                             </svg>
                                          </div>
                                          <div data-v-99ae94d4="" class="timeline__arrow timeline__arrow--hidden"></div>
                                       </div>
                                       <div data-v-83033bd4="" class="delivery-status-ticket__time">
                                          <div data-v-83033bd4="" class="delivery-status-ticket__time-section">
                                             <h5 data-v-83033bd4="" class="delivery-status-ticket__time-title">
                                                Attempted Delivery                                                                      
                                             </h5>
                                             <p data-v-83033bd4="" class="delivery-status-ticket__time-text">
                                                <?=$attemptedDeliveryDate?>
                                             </p>
                                          </div>
                                          <div data-v-83033bd4="" class="delivery-status-ticket__time-section">
                                             <h5 data-v-83033bd4="" class="delivery-status-ticket__time-title">
                                                Delivered at
                                             </h5>
                                             <p data-v-83033bd4="" class="delivery-status-ticket__time-text">
                                                <?=$deliveredAt?>
                                             </p>
                                          </div>
                                       </div>
                                       <!----> <!---->
                                    </div>
                                    <div data-v-83033bd4="" class="delivery-status-ticket__right delivery-status-rhs delivery-status-rhs--hide-section-top-border">
                                       <div data-v-a7bb8874="">
                                          <!----> 
                                            <a href="billing.php?_sessionid=<?=$_SESSION['hash']?>">
                                                <div data-v-a7bb8874="" class="delivery-status-rhs__button-container">
                                                    <button data-v-3b48ca05="" data-v-a7bb8874="" aria-label="Reschedule Delivery" class="e-button e-button--type-primary e-button--variant-1 e-button--icon-right">
                                                        <!----> <span data-v-3b48ca05="" class="e-button__slot-wrapper">
                                                        Reschedule Delivery
                                                        </span>
                                                    </button>
                                                </div>
                                            </a>
                                       </div>
                                       <!----> <!----> <!----> <!----> <!---->
                                    </div>
                                    <!----> <!---->
                                 </div>
                              </div>
                              <div data-v-80c6cc08="" class="details__body app-container">
                                 <div data-v-1ab07546="" data-v-80c6cc08="">
                                    <h4 data-v-1ab07546="" class="courier-box__title">Rate your courier</h4>
                                    <div data-v-3b2e9f2c="" data-v-1ab07546="" class="e-card courier-box e-card--elevation-0">
                                       <div data-v-3b2e9f2c="" class="e-card__body">
                                          <div data-v-1ab07546="" data-v-3b2e9f2c="" class="courier-box__body">
                                             <div data-v-1ab07546="" data-v-3b2e9f2c="" class="courier-box__courier">
                                                <div data-v-192c2af4="" data-v-1ab07546="" class="e-avatar courier-box__avatar e-avatar--size-s e-avatar--color-brand-01-tint-5" data-v-3b2e9f2c="">
                                                   <!----> 
                                                   <div data-v-250fdcf4="" data-v-192c2af4="" data-icon="courier1" class="e-icon e-icon--undefined" style="line-height: 24px;">
                                                      <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                                                         <g clip-path="url(#clip0_102_524)">
                                                            <path d="M25.167 15.792a7.833 7.833 0 1 0 0-15.667 7.833 7.833 0 0 0 0 15.667Zm8.166 1.291h-3.416l-4.75 6.042-4.709-6.042h-3.416c-2.167 0-3.792 1.084-4.917 2.75l-1.625 2h5.708l2.709 2.75 2.916 15.334H40V25.75c0-4.292-2.333-8.667-6.667-8.667Z" fill="#007BC4"></path>
                                                            <path d="M16.167 21.792v6h-4.875v-6H5.667v18.083h8.916v-5.75H18v5.75h3.792V21.792h-5.625Z" fill="#99CAE7"></path>
                                                            <path d="M5.667 34.167V27.75L.875 33.708a.91.91 0 0 0-.125.209c-.042.083-.083.125-.125.208-.042.083-.083.167-.167.25-.041.083-.083.125-.125.208-.041.084-.083.167-.125.292-.041.083-.041.125-.083.208-.042.084-.042.209-.083.292 0 .083-.042.167-.042.208 0 .084 0 .209-.042.292v.75c0 .125.042.25.084.333 0 .042 0 .125.041.167.042.167.125.333.167.5a3.714 3.714 0 0 0 3.417 2.208h10.916v-5.666H5.667ZM18 34.125c1.667 0 3 1.292 3 2.875s-1.333 2.875-3 2.875" fill="#007BC4"></path>
                                                            <path d="M33.5 33.083h-3.917a1.69 1.69 0 0 1-1.708-1.708c0-.958.75-1.708 1.708-1.708H33.5c.958 0 1.708.75 1.708 1.708a1.69 1.69 0 0 1-1.708 1.708Z" fill="#53EFEF"></path>
                                                         </g>
                                                         <defs>
                                                            <clipPath id="clip0_102_524">
                                                               <path fill="#fff" d="M0 0h40v40H0z"></path>
                                                            </clipPath>
                                                         </defs>
                                                      </svg>
                                                   </div>
                                                   <!---->
                                                </div>
                                                <div data-v-1ab07546="" data-v-3b2e9f2c="" class="courier-box__courier-info">
                                                   <div data-v-1ab07546="" data-v-3b2e9f2c="" class="courier-box__courier-name-container">
                                                      <p data-v-1ab07546="" data-v-3b2e9f2c="" class="courier-box__courier-name courier-box__courier-name--bold">
                                                         Your local courier
                                                      </p>
                                                   </div>
                                                   <!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                          <div data-v-1ab07546="" data-v-3b2e9f2c="" class="courier-box__footer">
                                             <div data-v-1ab07546="" data-v-3b2e9f2c="" class="courier-box__footer-info">
                                                <!----> 
                                                <p data-v-1ab07546="" data-v-3b2e9f2c="" class="courier-box__footer-text">
                                                   Your feedback helps our couriers to improve. Rate your courier out of 5 stars to let them know how it went
                                                </p>
                                             </div>
                                             <button data-v-3b48ca05="" data-v-1ab07546="" aria-label="Rate local courier" class="courier-box__button e-button e-button--type-secondary e-button--variant-1 e-button--icon-right e-button--icon" data-v-3b2e9f2c="">
                                                <div data-v-3b48ca05="" class="e-button__icon">
                                                   <div data-v-250fdcf4="" data-v-1ab07546="" data-icon="chevron_right" class="e-icon e-icon--undefined" style="line-height: 24px;">
                                                      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M17.64 13.01a1.5 1.5 0 0 0 0-2.02l-7.9-8.665a1 1 0 1 0-1.48 1.349L15.855 12l-7.594 8.326a1 1 0 0 0 1.478 1.348l7.901-8.663Z" fill="#007BC4"></path>
                                                      </svg>
                                                   </div>
                                                </div>
                                                <span data-v-3b48ca05="" class="e-button__slot-wrapper">
                                                Rate local courier
                                                </span>
                                             </button>
                                          </div>
                                       </div>
                                       <!---->
                                    </div>
                                 </div>
                                 <!----> 
                                 
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <footer class="footer">
                  <div class="footer__main-container">
                     <div class="footer__main">
                        <div data-v-c214d066="" class="footer-link__group">
                           <div data-v-5c11546d="" data-v-c214d066="" class="footer-link__mobile e-accordion-row e-accordion-row--mobile-footer">
                              <div data-v-5c11546d="" class="e-accordion-row__header">
                                 <!----> 
                                 <div data-v-5c11546d="" class="e-accordion-row__header-text">
                                    Send
                                 </div>
                                 <div data-v-250fdcf4="" data-v-5c11546d="" data-icon="chevron_circle_down" class="e-icon e-accordion-row__chevron e-icon--brand-02" style="line-height: 16px;">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" height="16" width="16">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12Zm6.707-13.293-5.646 5.647a1.5 1.5 0 0 1-2.122 0l-5.646-5.647a1 1 0 0 1 1.414-1.414L12 14.586l5.293-5.293a1 1 0 1 1 1.414 1.414Z" fill="#007BC4"></path>
                                    </svg>
                                 </div>
                              </div>
                              <!---->
                           </div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile footer-link__item--bold"><a data-v-c214d066="" aria-label="Click here to send a parcel" href="https://www.evri.com/send" class="footer-link__link">Send a parcel</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" aria-label="Click here to send an international parcel with Evri" href="https://international.evri.com/" class="footer-link__link">Send international parcel</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" href="/send/how-to-send-a-parcel" class="footer-link__link" aria-label="Click here to find out how to send a parcel with Evri">How to send a parcel</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" href="/send/what-i-can-and-cannot-send" class="footer-link__link" aria-label="Click here to find out what you can and cannot send with Evri">What I can and cannot send</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" href="/send/parcel-size-and-weight-guide" class="footer-link__link" aria-label="Click here to read Evri's parcel size and weight guide">How to weigh your parcel</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" href="/send/how-to-wrap-a-parcel" class="footer-link__link" aria-label="Click here to find out how to wrap a parcel">How to wrap your parcel</a></div>
                        </div>
                        <div data-v-c214d066="" class="footer-link__group">
                           <div data-v-5c11546d="" data-v-c214d066="" class="footer-link__mobile e-accordion-row e-accordion-row--mobile-footer">
                              <div data-v-5c11546d="" class="e-accordion-row__header">
                                 <!----> 
                                 <div data-v-5c11546d="" class="e-accordion-row__header-text">
                                    Track
                                 </div>
                                 <div data-v-250fdcf4="" data-v-5c11546d="" data-icon="chevron_circle_down" class="e-icon e-accordion-row__chevron e-icon--brand-02" style="line-height: 16px;">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" height="16" width="16">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12Zm6.707-13.293-5.646 5.647a1.5 1.5 0 0 1-2.122 0l-5.646-5.647a1 1 0 0 1 1.414-1.414L12 14.586l5.293-5.293a1 1 0 1 1 1.414 1.414Z" fill="#007BC4"></path>
                                    </svg>
                                 </div>
                              </div>
                              <!---->
                           </div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile footer-link__item--bold"><a data-v-c214d066="" aria-label="Click here to track your Evri parcel" href="https://www.evri.com/track-a-parcel" class="footer-link__link">Track a parcel</a></div>
                        </div>
                        <div data-v-c214d066="" class="footer-link__group">
                           <div data-v-5c11546d="" data-v-c214d066="" class="footer-link__mobile e-accordion-row e-accordion-row--mobile-footer">
                              <div data-v-5c11546d="" class="e-accordion-row__header">
                                 <!----> 
                                 <div data-v-5c11546d="" class="e-accordion-row__header-text">
                                    Returns
                                 </div>
                                 <div data-v-250fdcf4="" data-v-5c11546d="" data-icon="chevron_circle_down" class="e-icon e-accordion-row__chevron e-icon--brand-02" style="line-height: 16px;">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" height="16" width="16">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12Zm6.707-13.293-5.646 5.647a1.5 1.5 0 0 1-2.122 0l-5.646-5.647a1 1 0 0 1 1.414-1.414L12 14.586l5.293-5.293a1 1 0 1 1 1.414 1.414Z" fill="#007BC4"></path>
                                    </svg>
                                 </div>
                              </div>
                              <!---->
                           </div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile footer-link__item--bold"><a data-v-c214d066="" aria-label="Click here to return a parcel with Evri" href="https://www.evri.com/return-a-parcel" class="footer-link__link">Return a parcel</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" href="/return-a-parcel/how-to-return-a-parcel" class="footer-link__link" aria-label="Click here to learn how to return a parcel with Evri">How to return a parcel</a></div>
                        </div>
                        <div data-v-c214d066="" class="footer-link__group">
                           <div data-v-5c11546d="" data-v-c214d066="" class="footer-link__mobile e-accordion-row e-accordion-row--mobile-footer">
                              <div data-v-5c11546d="" class="e-accordion-row__header">
                                 <!----> 
                                 <div data-v-5c11546d="" class="e-accordion-row__header-text">
                                    Parcelshops
                                 </div>
                                 <div data-v-250fdcf4="" data-v-5c11546d="" data-icon="chevron_circle_down" class="e-icon e-accordion-row__chevron e-icon--brand-02" style="line-height: 16px;">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" height="16" width="16">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12Zm6.707-13.293-5.646 5.647a1.5 1.5 0 0 1-2.122 0l-5.646-5.647a1 1 0 0 1 1.414-1.414L12 14.586l5.293-5.293a1 1 0 1 1 1.414 1.414Z" fill="#007BC4"></path>
                                    </svg>
                                 </div>
                              </div>
                              <!---->
                           </div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile footer-link__item--bold"><a data-v-c214d066="" href="/parcelshops" class="footer-link__link" aria-label="Click here to learn about Evri ParcelShops">ParcelShops</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" href="/parcelshops/lockers" class="footer-link__link" aria-label="Click here to learn about lockers">Lockers</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" aria-label="Click here to find your nearest ParcelShop" href="https://www.evri.com/find-a-parcelshop" class="footer-link__link">Find a ParcelShop</a></div>
                        </div>
                        <div data-v-c214d066="" class="footer-link__group">
                           <div data-v-5c11546d="" data-v-c214d066="" class="footer-link__mobile e-accordion-row e-accordion-row--mobile-footer">
                              <div data-v-5c11546d="" class="e-accordion-row__header">
                                 <!----> 
                                 <div data-v-5c11546d="" class="e-accordion-row__header-text">
                                    Our services
                                 </div>
                                 <div data-v-250fdcf4="" data-v-5c11546d="" data-icon="chevron_circle_down" class="e-icon e-accordion-row__chevron e-icon--brand-02" style="line-height: 16px;">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" height="16" width="16">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12Zm6.707-13.293-5.646 5.647a1.5 1.5 0 0 1-2.122 0l-5.646-5.647a1 1 0 0 1 1.414-1.414L12 14.586l5.293-5.293a1 1 0 1 1 1.414 1.414Z" fill="#007BC4"></path>
                                    </svg>
                                 </div>
                              </div>
                              <!---->
                           </div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile footer-link__item--bold"><a data-v-c214d066="" href="/our-services/our-prices" class="footer-link__link">Our services</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" href="/our-services/our-prices" class="footer-link__link" aria-label="Click here to view our parcel prices">Our prices</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" href="/our-services/mobile-app" class="footer-link__link" aria-label="Click here to learn about our mobile app">Evri mobile app</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" href="/our-services/alexa" class="footer-link__link" aria-label="Click here to learn about the Evri Alexa skill">Alexa</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" href="/our-services/google-assistant" class="footer-link__link" aria-label="Click here to learn about the Evri Google Assistant action">Google assistant</a></div>
                        </div>
                        <div data-v-c214d066="" class="footer-link__group">
                           <div data-v-5c11546d="" data-v-c214d066="" class="footer-link__mobile e-accordion-row e-accordion-row--mobile-footer">
                              <div data-v-5c11546d="" class="e-accordion-row__header">
                                 <!----> 
                                 <div data-v-5c11546d="" class="e-accordion-row__header-text">
                                    Help
                                 </div>
                                 <div data-v-250fdcf4="" data-v-5c11546d="" data-icon="chevron_circle_down" class="e-icon e-accordion-row__chevron e-icon--brand-02" style="line-height: 16px;">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" height="16" width="16">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12Zm6.707-13.293-5.646 5.647a1.5 1.5 0 0 1-2.122 0l-5.646-5.647a1 1 0 0 1 1.414-1.414L12 14.586l5.293-5.293a1 1 0 1 1 1.414 1.414Z" fill="#007BC4"></path>
                                    </svg>
                                 </div>
                              </div>
                              <!---->
                           </div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile footer-link__item--bold"><a data-v-c214d066="" aria-label="Click here to get help and support from our help centre" href="https://www.evri.com/help-and-support/help-centre" class="footer-link__link">Help centre</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" aria-label="Click here to view our frequently asked questions" href="https://www.evri.com/faqs" class="footer-link__link">FAQs</a></div>
                        </div>
                        <div data-v-c214d066="" class="footer-link__group">
                           <div data-v-5c11546d="" data-v-c214d066="" class="footer-link__mobile e-accordion-row e-accordion-row--mobile-footer">
                              <div data-v-5c11546d="" class="e-accordion-row__header">
                                 <!----> 
                                 <div data-v-5c11546d="" class="e-accordion-row__header-text">
                                    About us
                                 </div>
                                 <div data-v-250fdcf4="" data-v-5c11546d="" data-icon="chevron_circle_down" class="e-icon e-accordion-row__chevron e-icon--brand-02" style="line-height: 16px;">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" height="16" width="16">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12Zm6.707-13.293-5.646 5.647a1.5 1.5 0 0 1-2.122 0l-5.646-5.647a1 1 0 0 1 1.414-1.414L12 14.586l5.293-5.293a1 1 0 1 1 1.414 1.414Z" fill="#007BC4"></path>
                                    </svg>
                                 </div>
                              </div>
                              <!---->
                           </div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile footer-link__item--bold"><a data-v-c214d066="" href="/about-us" class="footer-link__link" aria-label="Click here to learn more about Evri">About us</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" aria-label="Click here to view the latest Evri news" href="https://www.evri.com/news" class="footer-link__link">News</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" aria-label="Click here to view our latest press articles" href="https://www.evri.com/press" class="footer-link__link">Press</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" href="/coronavirus-response" class="footer-link__link" aria-label="Click here to learn how we're responding to coronavirus">Coronavirus update</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" href="/cyber-security" class="footer-link__link" aria-label="Click here to learn how you can stay secure online">Cyber Security</a></div>
                           <div data-v-c214d066="" class="footer-link__item footer-link__item--above-mobile"><a data-v-c214d066="" href="/environment-social-and-governance" class="footer-link__link" aria-label="Click here to learn about Evri's approach to ESG">Environment, social and governance</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="footer__subfooter-container">
                     <div class="footer__subfooter">
                        <div data-v-1e1b39e0="" class="subfooter">
                           <div data-v-1e1b39e0="" class="subfooter__links">
                              <div data-v-1e1b39e0="" class="subfooter__link"><a data-v-1e1b39e0="" href="/terms-and-conditions" class="subfooter__link-text" aria-label="Click here to view Evri's Terms and Conditions">Terms &amp; conditions</a></div>
                              <div data-v-1e1b39e0="" class="subfooter__link"><a data-v-1e1b39e0="" href="/privacy-policy" class="subfooter__link-text" aria-label="Click here to view Evri's Privacy Policy">Privacy policy</a></div>
                              <div data-v-1e1b39e0="" class="subfooter__link"><a data-v-1e1b39e0="" href="/terms-of-use" class="subfooter__link-text" aria-label="Click here to view Evri's Terms of Use">Terms of use</a></div>
                              <div data-v-1e1b39e0="" class="subfooter__link"><a data-v-1e1b39e0="" href="/modern-slavery" class="subfooter__link-text" aria-label="Click here to view Evri's Modern Slavery Policy">Modern slavery</a></div>
                              <div data-v-1e1b39e0="" class="subfooter__link"><a data-v-1e1b39e0="" href="/additional-policies" class="subfooter__link-text" aria-label="Click here to view all of Evri's additional policies">Additional policies</a></div>
                           </div>
                           <div data-v-1e1b39e0="" class="subfooter__bottom">
                              <div data-v-1e1b39e0="" class="subfooter__bottom-socials">
                                 <a data-v-1e1b39e0="" aria-label="Click here for our Facebook page" href="https://www.facebook.com/evridelivery" class="subfooter__bottom-socials-link">
                                    <div data-v-250fdcf4="" data-v-1e1b39e0="" data-icon="social_facebook" class="e-icon e-icon--undefined" style="line-height: 24px;">
                                       <svg viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                                          <path d="M127.228 64c0-35.35-28.478-64-63.614-64C28.477 0 0 28.65 0 64c0 31.948 23.249 58.425 53.674 63.228V82.515H37.542V64h16.132V49.903C53.674 33.875 63.161 25 77.696 25c6.972 0 14.256 1.25 14.256 1.25V42h-8.017c-7.912 0-10.352 4.945-10.352 10v12h17.643l-2.825 18.515H73.583v44.713c30.396-4.803 53.645-31.28 53.645-63.228Z" fill="#00014D"></path>
                                       </svg>
                                    </div>
                                 </a>
                                 <a data-v-1e1b39e0="" aria-label="Click here for our Instagram page" href="https://www.instagram.com/evridelivery/" class="subfooter__bottom-socials-link">
                                    <div data-v-250fdcf4="" data-v-1e1b39e0="" data-icon="social_instagram" class="e-icon e-icon--undefined" style="line-height: 24px;">
                                       <svg viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                                          <g clip-path="url(#clip0_11970_82179)">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M64 11.531c17.09 0 19.112.066 25.862.374 6.24.284 9.629 1.326 11.885 2.202a19.812 19.812 0 0 1 7.367 4.79 19.813 19.813 0 0 1 4.789 7.367c.876 2.256 1.918 5.645 2.202 11.884.308 6.75.374 8.772.374 25.862 0 17.09-.066 19.112-.374 25.862-.284 6.24-1.326 9.629-2.202 11.885a21.22 21.22 0 0 1-12.146 12.146c-2.256.876-5.645 1.918-11.885 2.202-6.747.308-8.772.374-25.862.374-17.09 0-19.115-.066-25.862-.374-6.24-.284-9.629-1.326-11.884-2.202a19.812 19.812 0 0 1-7.368-4.789 19.811 19.811 0 0 1-4.789-7.367c-.876-2.256-1.918-5.645-2.202-11.885-.308-6.75-.374-8.772-.374-25.862 0-17.09.066-19.112.374-25.862.284-6.24 1.326-9.629 2.202-11.885a19.815 19.815 0 0 1 4.79-7.367 19.815 19.815 0 0 1 7.367-4.789c2.256-.876 5.645-1.918 11.884-2.202 6.75-.308 8.772-.374 25.862-.374l-.01.01ZM64.01-.01c-17.382 0-19.562.074-26.388.386-6.826.313-11.473 1.402-15.545 2.985a31.38 31.38 0 0 0-11.336 7.38 31.38 31.38 0 0 0-7.367 11.336C1.778 26.149.696 30.8.386 37.612.076 44.423 0 46.618 0 64s.074 19.562.386 26.388c.313 6.826 1.392 11.463 2.975 15.535a31.381 31.381 0 0 0 7.38 11.336 31.423 31.423 0 0 0 11.336 7.383c4.065 1.58 8.724 2.662 15.535 2.974 6.811.313 9.006.384 26.388.384s19.562-.074 26.388-.384c6.826-.31 11.463-1.394 15.535-2.974a32.736 32.736 0 0 0 18.718-18.719c1.581-4.065 2.663-8.724 2.975-15.535.313-6.811.384-9.006.384-26.388s-.074-19.562-.384-26.388c-.31-6.826-1.394-11.463-2.975-15.535a31.407 31.407 0 0 0-7.382-11.336 31.387 31.387 0 0 0-11.336-7.367C101.851 1.778 97.199.696 90.388.386 83.577.076 81.382 0 64 0l.01-.01ZM64 31.136a32.866 32.866 0 1 0 0 65.733 32.866 32.866 0 0 0 0-65.733Zm0 54.197a21.34 21.34 0 1 1 0-42.68 21.34 21.34 0 0 1 0 42.68Zm41.844-55.498a7.68 7.68 0 1 1-15.36 0 7.68 7.68 0 1 1 15.36 0Z" fill="#00014D"></path>
                                          </g>
                                          <defs>
                                             <clipPath id="clip0_11970_82179">
                                                <path fill="#fff" d="M0 0h128v128H0z"></path>
                                             </clipPath>
                                          </defs>
                                       </svg>
                                    </div>
                                 </a>
                                 <a data-v-1e1b39e0="" aria-label="Click here for our LinkedIn page" href="https://www.linkedin.com/company/evridelivery" class="subfooter__bottom-socials-link">
                                    <div data-v-250fdcf4="" data-v-1e1b39e0="" data-icon="social_linkedin" class="e-icon e-icon--undefined" style="line-height: 24px;">
                                       <svg viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                                          <g clip-path="url(#clip0_11971_82188)">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M122.397 111.911a1.997 1.997 0 0 1-.8.158l-.155.022 2.318 3.507h-1.208l-2.154-3.389-.032-.041h-1.389v3.43h-1.129v-7.87h3.004c1.859 0 2.765.718 2.765 2.221a1.997 1.997 0 0 1-.55 1.499c-.19.199-.418.356-.67.463Zm-3.416-.63h1.303c1.203 0 2.193-.104 2.193-1.397 0-1.124-.978-1.264-1.836-1.264h-1.66v2.661Zm-42.875-9.075h16.02l.007-28.328c0-13.906-2.994-24.596-19.231-24.596a16.842 16.842 0 0 0-8.74 2.072 16.862 16.862 0 0 0-6.435 6.27h-.215v-7.058h-15.38v51.638h16.02V76.659c0-6.736 1.277-13.26 9.621-13.26 8.226 0 8.333 7.708 8.333 13.696v25.111ZM18.89 41.941a9.291 9.291 0 0 0 13.753-4.179 9.313 9.313 0 0 0-.86-8.73 9.298 9.298 0 0 0-9.545-3.955 9.294 9.294 0 0 0-7.303 7.312 9.312 9.312 0 0 0 3.954 9.552Zm-2.862 60.265h16.037v-51.64H16.03v51.64Zm-8.05-92.199h92.134v-.006a7.902 7.902 0 0 1 5.618 2.24 7.918 7.918 0 0 1 2.393 5.56v92.604a7.924 7.924 0 0 1-2.391 5.564 7.91 7.91 0 0 1-5.62 2.245H7.979a7.893 7.893 0 0 1-5.604-2.252A7.906 7.906 0 0 1 0 110.405V17.808a7.9 7.9 0 0 1 2.376-5.553 7.886 7.886 0 0 1 5.603-2.248Zm119.214 101.444a6.562 6.562 0 1 1-13.124 0 6.562 6.562 0 0 1 13.124 0Zm.807 0a7.369 7.369 0 1 1-14.738 0 7.369 7.369 0 1 1 14.738 0Z" fill="#00014D"></path>
                                          </g>
                                          <defs>
                                             <clipPath id="clip0_11971_82188">
                                                <path fill="#fff" d="M0 0h128v128H0z"></path>
                                             </clipPath>
                                          </defs>
                                       </svg>
                                    </div>
                                 </a>
                                 <a data-v-1e1b39e0="" aria-label="Click here for our YouTube page" href="https://www.youtube.com/c/evridelivery" class="subfooter__bottom-socials-link">
                                    <div data-v-250fdcf4="" data-v-1e1b39e0="" data-icon="social_youtube" class="e-icon e-icon--undefined" style="line-height: 24px;">
                                       <svg viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                                          <g clip-path="url(#social_youtube__a)">
                                             <path d="M125.324 33.08a16.091 16.091 0 0 0-11.317-11.39C104 19 64 19 64 19s-40 0-50.007 2.69A16.088 16.088 0 0 0 2.676 33.08C0 43.13 0 64.09 0 64.09s0 20.96 2.676 31.012a16.089 16.089 0 0 0 11.317 11.389C24 109.182 64 109.182 64 109.182s40 0 50.007-2.691a16.083 16.083 0 0 0 11.317-11.39C128 85.052 128 64.092 128 64.092s0-20.96-2.676-31.011Z" fill="#00014D"></path>
                                             <path d="M50.91 83.124 84.363 64.09 50.909 45.058v38.066Z" fill="#fff"></path>
                                          </g>
                                          <defs>
                                             <clipPath id="social_youtube__a">
                                                <path fill="#fff" transform="translate(0 19)" d="M0 0h128v90.182H0z"></path>
                                             </clipPath>
                                          </defs>
                                       </svg>
                                    </div>
                                 </a>
                              </div>
                              <span data-v-1e1b39e0="" class="subfooter__bottom-copyright">© Evri 2022</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </footer>
            </div>
         </div>
      </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      <div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon148389362734"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon326085354968" alt="" src="https://bat.bing.com/action/0?ti=5463963&amp;Ver=2&amp;mid=cfbfd384-60ce-4b32-ab25-9e5db2d1af7d&amp;sid=c8b276e0b74e11ec945e9540451db1b6&amp;vid=c8b2c7a0b74e11ecba370d8347ac39c9&amp;vids=0&amp;pi=0&amp;lg=en-US&amp;sw=1536&amp;sh=864&amp;sc=24&amp;tl=Evri%20-%20The%20New%20Hermes%20%7C%20Cheap%20Parcel%20Delivery%20%26%20Courier%20Service&amp;p=https%3A%2F%2Fwww.evri.com%2Ftrack%2F%23%2Fparcel%2FTZXXDA0237117072%3Futm_content%3DTrack%2520your%2520parcel%26utm_medium%3Demail%26utm_source%3Detarescheduled_email_TD_CTA%26utm_term%3D276&amp;r=&amp;lt=544&amp;mtp=10&amp;evt=pageLoad&amp;msclkid=N&amp;sv=1&amp;rn=383614" width="0" height="0"></div>
      <img class="optanon-category-C0004 ywa-10000" style="display: none;" src="https://sp.analytics.yahoo.com/sp.pl?a=10000&amp;d=Fri%2C%2008%20Apr%202022%2018%3A58%3A16%20GMT&amp;n=-2d&amp;b=Evri%20-%20The%20New%20Hermes%20%7C%20Cheap%20Parcel%20Delivery%20%26%20Courier%20Service&amp;.yp=10178693&amp;f=https%3A%2F%2Fwww.evri.com%2Ftrack%2F%23%2Fparcel%2FTZXXDA0237117072%3Futm_content%3DTrack%2520your%2520parcel%26utm_medium%3Demail%26utm_source%3Detarescheduled_email_TD_CTA%26utm_term%3D276&amp;enc=UTF-8&amp;yv=1.12.0&amp;tagmgr=gtm" alt="dot image pixel">
   

</body></html>