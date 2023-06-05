<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAST BLOG</title>
    <!-- Box-icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;1,400&display=swap');
*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
    scroll-padding-top: 2rem;
    box-sizing: border-box;
}

/* root values */
:root{
    --container-color: #1a1e21;
    --second-color: rgba(77, 228, 255);
    --text-color: #172317;
    --bg-color: #fff;
}

::selection{
    color: var(--bg-color);
    background: var(--second-color);
}

a{
    text-decoration: none;
}

li{
    list-style: none;
}

img{
    width: 100%;
}

section{
    padding: 3rem 0 2rem;
}

.container{
    max-width: 1068px;
    margin: auto;
    width: 100%;
}

a{
    color: #fff;
}

/* Header */
header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 200;
}

header.shadow{
    background: var(--bg-color);
    box-shadow: 0 1px 4px hsl(0 4% 14% / 10%);
    transition: .5s;
}

header.shadow .logo{
    color: var(--text-color);
}

.nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 18px 0;
}

.logo{
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--bg-color);
}

.logo span{
    color: var(--second-color);
}

.login{
    padding: 8px 14px;
    text-transform: uppercase;
    font-weight: 500;
    border-radius: 4px;
    background: var(--second-color);
    color: var(--bg-color);
}

.login:hover{
    background: hsl(199, 98%, 56%);
    transition: .5s;
}

.home{
    width: 100%;
    min-height: 440px;
    /* background: url("https://media.istockphoto.com/id/1131300577/photo/smart-phone-and-laptop-with-blank-screen-on-a-big-sphere-minimal-technology-concept.jpg?s=612x612&w=0&k=20&c=mD1PLo9K-iztuq53AKOttIB_jibi6nX9Qr-X9RJ8RuI="); */
    background-position: center;
    background: rgb(1, 1, 72);
    background-size: cover;
    color: white;
    display: grid;

    justify-content: center;
    align-items: center;
}


.home-text{
    color: var(--bg-color);
    text-align: center;
}

.home-title{
    font-size: 3.5rem;
}

.home-subtitle{
    font-size: 1rem;
    font-weight: 400;
}

.about{
    position: relative;
    width: 100%;
    display: flex !important;
    justify-content: center;
    align-items: center;
}

.about .contentBx{
    max-width: 50%;
    width: 50%;
    text-align: left;
    padding-right: 40px;
}

.titleText{
    font-weight: 600;
    color: #111;
    font-size: 2rem;
    margin-bottom: 10px;
}

.title-text{
    color: #111;
    font-size: 1em;
}

.about .imgBx{
    position: relative;
    min-width: 50%;
    width: 50%;
    min-height: 500px;
}

.btn2{
    position: relative;
    display: inline-block;
    margin-top: 30px;
    padding: 10px 30px;
    background: #fff;
    border: .8px solid #111;
    color: #333;
    text-decoration: none;
    transition: 0.5s;
}

.btn2:hover{
    background-color: var(--second-color);
    border: none;
    color: #fff;
}

.post-filter{
    display: flex;
    justify-content: center;
    align-items: center;
    column-gap: 1.5rem;
    margin-top: 2rem !important;
}

.filter-item{
    font-size: 0.9rem;
    font-weight: 500;
    cursor: pointer;
}

.active-filter{
    background: var(--second-color);
    color: var(--bg-color);
    padding: 4px 10px;
    border-radius: 4px;
}

.post{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, auto));
    justify-content: center;
    gap: 1.5rem;
}

.post-box{
    background: var(--bg-color);
    box-shadow: 0 4px 14px hsl(35deg 25% 15% / 10%);
    padding: 15px;
    border-radius: 0.5rem;
}

.post-img{
    width: 100%;
    height: 200px;
    object-fit: cover;
    object-position: center;
    border-radius: 0.5rem;
}

.category{
    font-size: 0.9rem;
    font-weight: 500;
    text-transform: uppercase;
    color: var(--second-color);
}

.post-title{
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--text-color);
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.post-date{
    display: flex;
    font-size: 0.875rem;
    text-transform: uppercase;
    margin-top: 4px;
    font-weight: 400;
}

.post-description{
    font-size: 0.9rem;
    line-height: 1.5rem;
    margin: 5px 0 10px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.dast-blog {
    display: flex;
}
.dast-blog  li{
  margin: 1rem;
  
}
.dast-blog  li a{
    color: rgb(238, 238, 241);
    
  }
.profile{
    display: flex;
    align-items: center;
    gap: 10px;
}

.profile-img{
    width: 35px;
    height: 35px;
    border-radius: 50%;
    object-fit: cover;
    object-position: center;
    border: 2px solid var(--second-color);
}

.profile-name{
    font-size: .8rem;
    font-weight: 500;
}

footer{
    position: relative;
    width: 100%;
    height: auto;
    padding: 50px 100px;
    margin-top: 3rem;
    background: #111;
    display: flex;
    font-family: sans-serif;
    justify-content: space-between;
}

.footer-container{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    flex-direction: row;
}

.footer-container .sec{
    margin-right: 30px;
}

.footer-container .sec.aboutus{
    width: 40%;
}

.footer-container h2{
    position: relative;
    color: #fff;
    margin-bottom: 15px;
}

.footer-container h2::before{
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 50px;
    height: 2px;
    background: rgb(77, 228, 255);
}

footer p{
    color: #fff;
}

.sci{
    margin: 20px;
    display: flex;
}

.sci li{
    list-style: none;
}

.sci li a{
    display: inline-block;
    width: 40px;
    height: 40px;
    background: #222;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 10px;
    text-decoration: none;
    border-radius: 4px;
    transition: .5s;
}

.sci li a:hover{
    background: rgb(77, 228, 255);
}

.sci i a .bx{
    color: #fff;
    font-size: 20px;
}

.quicklinks{
    position: relative;
    width: 25%;
}

.quicklinks ul li{
    list-style: none;
}

.quicklinks ul li a{
    color: #999;
    text-decoration: none;
    margin-bottom: 10px;
    display: inline-block;
    transition: .3s;
}

.quicklinks ul li a:hover{
    color: #fff;
}

.footer-container .contactBx{
    width: calc(35% - 60px);
    margin-right: 0 !important;
}

.contactBx .info{
    position: relative;
}

.contactBx .info li{
    display: flex !important;
    margin-bottom: 16px;
}

.contactBx .info li span:nth-child(1){
    color: #fff;
    font-size: 20px;
    margin-right: 10px;
}

.contactBx .info li span{
    color: #999;
}

.contactBx .info li a{
    color: #999;
    text-decoration: none;
    transition: .5s;
}

.contactBx .info li a:hover{
    color: #fff;
}

@media (max-width: 1060px){
    .container{
        margin: 0 auto;
        width: 95%;
    }

    .home-text{
        width: 100%
    }
}

@media (max-width: 768px){
    .nav{
        padding: 10px 0;
    }

    section{
        padding: 2rem 0 !important;
    }

    .header-content{
        margin-top: 3rem !important;
    }

    .home{
        min-height: 380px;
    }

    .home-title{
        font-size: 3rem;
    }

    .header-title{
        font-size: 2rem;
    }

    .header-img{
        height: 370px;
    }

    .about{
        flex-direction: column;
    }

    .about .contentBx{
        min-width: 100%;
        width: 100%;
        text-align: center;
        padding-right: 0px;
    }

    .about .contentBx,
    .about .imgBx{
        min-width: 100%;
        width: 100%;
        padding-right: 0px;
        text-align: center;
    }

    .about .imgBx{
        min-height: 250px;
    }

    .btn2{
        margin-bottom: 30px;
    }

    .post-header{
        height: 435px;
    }

    .post-header{
        margin-top: 9rem !important;
    }
}

@media (max-width: 570px){
    .post-header{
        height: 390px;
    }

    .header-title{
        width: 100%;
    }

    .header-img{
        height: 340px;
    }
}

@media (max-width: 396px){
    .home-title{
        font-size: 2rem;
    }

    .home-subtitle{
        font-size: 0.9rem;
    }

    .home{
        min-height: 300px;
    }

    .post-box{
        padding: 10px;
    }

    .header-title{
        font-size: 1.4rem;
    }

    .header-img{
        height: 240px;
    }

    .post-header{
        height: 335px;
    }

    .header-img{
        height: 340px;
    }
}

/* Footer Media Query */
@media (max-width: 991px){
    footer{
        padding: 40px;
        font-size: 20px;
    }

    footer .footer-container{
        flex-direction: column;
    }

    footer .footer-container .sec{
        margin-right: 0;
        margin-bottom: 40px;
    }


    footer .footer-container .sec.aboutus{
        width: 100% !important;
    }

    footer .footer-container .quicklinks{
        width: 100%;
    }

    footer .footer-container .contactBx{
        width: 100%;
    }
}



/* Add the following CSS styles to your existing styles */

/* Hamburger menu styles */
.hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.line {
    width: 25px;
    height: 3px;
    background-color: white;
    margin-bottom: 4px;
}

/* Responsive styles */
@media screen and (max-width: 768px) {
    .dast-blog {
        display: none;
    }

    .hamburger {
        display: flex;
    }

    .dast-blog.active {
        display: flex;
        flex-direction: column;
        background-color: rgb(1, 1, 38);
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
    }

    .dast-blog.active li {
        text-align: center;
        margin: 10px 0;
    }

    .dast-blog.active a {
        color: white;
    }
}


    </style>
</head>
<body>
    <header style="background-color: rgb(1, 1, 38); color: white">
        <div class="nav container">
            <a href="/dast-blog" class="logo">DAST <span>BLOG</span></a>
            <ul class="dast-blog">
                <li><a href="">About</a></li>
                <li><a style="border-bottom: 4px solid rgb(2, 2, 159);" href="/blogs">Blog</a></li>
                <li><a href="">Account</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Twitter</a></li>
                <li><a href="">Telegram</a></li>
            </ul>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </header>












    
    <style>
        .fool-search-label{display:none}.ticker-input{position:relative;z-index:999999}.ticker-input-results{min-width:320px;margin:0;position:absolute;z-index:1;top:55px;left:307px;right:0;background:#fff;border-radius:5px;box-shadow:0 0 5px #A7A8A9;line-height:1;width:500px}.ticker-input-results .ticker-input-results-result{display:flex;flex-direction:row;height:min-content;border:1px dotted #A7A8A9;font-size:14px;padding:3px 10px;cursor:pointer}.ticker-input-results .ticker-input-results-result.active{background-color:#edeeee;border:1px solid #006BA6;border-radius:4px;cursor:pointer}.ticker-input-results-company{flex:10;padding:5px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.ticker-input-results-symbol{min-width:70px;font-weight:bold;padding:5px;text-align:left;white-space:nowrap}.ticker-input-results-exchange{flex:1;color:#8A8C8E;font-weight:normal;padding:5px}.exchange-icon{flex:1;min-width:20px;background-repeat:no-repeat;background-position:center center}.exchange-NYSE{background-image:url("https://g.foolcdn.com/art/Flags/18/UnitedStates.png")}.exchange-NASDAQ{background-image:url("https://g.foolcdn.com/art/Flags/18/UnitedStates.png")}.exchange-NYSEMKT{background-image:url("https://g.foolcdn.com/art/Flags/18/UnitedStates.png")}.exchange-NASDAQOTCBB{background-image:url("https://g.foolcdn.com/art/Flags/18/UnitedStates.png")}.exchange-NASDAQOTH{background-image:url("https://g.foolcdn.com/art/Flags/18/UnitedStates.png")}.exchange-NASDAQMUTFUND{background-image:url("https://g.foolcdn.com/art/Flags/18/UnitedStates.png")}.exchange-TREASURY{background-image:url("https://g.foolcdn.com/art/Flags/18/UnitedStates.png")}.exchange-NNM{background-image:url("https://g.foolcdn.com/art/Flags/18/UnitedStates.png")}.exchange-LSE{background-image:url("https://g.foolcdn.com/art/Flags/18/UnitedKingdom.png")}.exchange-FTSE{background-image:url("https://g.foolcdn.com/art/Flags/18/UnitedKingdom.png")}.exchange-TSX{background-image:url("https://g.foolcdn.com/art/Flags/18/Canada.png")}.exchange-TSXV{background-image:url("https://g.foolcdn.com/art/Flags/18/Canada.png")}.exchange-CMF{background-image:url("https://g.foolcdn.com/art/Flags/18/Canada.png")}.exchange-ASX{background-image:url("https://g.foolcdn.com/art/Flags/18/Australia.png")}.exchange-ASXINDICES{background-image:url("https://g.foolcdn.com/art/Flags/18/Australia.png")}.exchange-NIKKEIINDICES{background-image:url("https://g.foolcdn.com/art/Flags/18/Japan.png")}.exchange-HSIINDICES{background-image:url("https://g.foolcdn.com/art/Flags/18/HongKong.png")}.exchange-DAXINDICES{background-image:url("https://g.foolcdn.com/art/Flags/18/Germany.png")}.exchange-CACINDICES{background-image:url("https://g.foolcdn.com/art/Flags/18/France.png")}.usmf-article-nav{font-family:Roboto,sans-serif;color:#fff;top:51px;position:sticky}@media screen and (max-width:1023px){.usmf-article-nav{top:0px}}.usmf-article-nav .important\:hover-white{color:white!important}.usmf-article-nav .topnav-wrapper{margin:auto;max-width:1280px;width:100%}@media screen and (max-width:1023px){.usmf-article-nav .topnav-wrapper{height:100%!important;padding:0!important}}.usmf-article-nav .topnav{height:72px;top:54px;transition:0.4s}@media screen and (max-width:1023px){.usmf-article-nav .topnav{top:3px}}.usmf-article-nav .topnav nav{height:100%}.usmf-article-nav .topnav .logo{padding:0;width:145px}.usmf-article-nav .topnav a{color:#fff}.usmf-article-nav .topnav .dropdown-label{color:#fff;line-height:1;padding:28px 18px;cursor:pointer;position:relative;white-space:nowrap}.usmf-article-nav .topnav .dropdown-label svg{color:#fff;height:13px;position:absolute;right:0;top:40%;transition:none;width:13px}.usmf-article-nav .topnav .dropdown-label:hover{background:#24125F;color:#FFB81C}.usmf-article-nav .topnav .dropdown-label:hover svg{color:#FFB81C}.usmf-article-nav .dropdown .submenu{background:#24125F;border-top:solid 1px #753BBD;display:flex;left:0;position:absolute;top:72px;width:100%;visibility:hidden;transition-delay:0.4s}.usmf-article-nav .dropdown .submenu a:hover{color:#FFB81C}.usmf-article-nav .dropdown:hover .submenu{transition-delay:0.4s;visibility:visible}.usmf-article-nav .dropdown:focus-within .submenu{visibility:visible;transition-delay:0s}.usmf-article-nav .returns a{color:#006BA6;font-weight:700}.usmf-article-nav .topnav-picks{background:#E31C79;border-color:#E31C79;box-shadow:2px 2px 12px rgba(0,0,0,0.16);font-weight:700;height:36px;margin-left:32px;margin-top:19px}.usmf-article-nav .topnav-picks:hover{background-color:#E958A4}.usmf-article-nav .topnav-picks a{color:#fff;padding:20px}#mobile-nav-container{max-height:calc(100% - 75px);overflow:scroll;position:fixed;top:75px}#nav-alert-banner-container~.page-grid-container #mobile-nav-container{padding-top:45px}#mobile-nav-container .submenu a{color:#fff}#mobile-nav-container .dropdown.active .dropdown-label{border-bottom:none;color:#FFB81C}#mobile-nav-container .dropdown.active .dropdown-label .angle-down{display:none}#mobile-nav-container .dropdown.active .dropdown-label .angle-up{display:block}#mobile-nav-container .dropdown.active .mobile-submenu{display:block}#mobile-nav-container .topnav-picks{margin:0}#mobile-nav-container .topnav-picks a{height:36px;line-height:36px;padding:0}#mobile-nav-container .search-box{margin:0 -24px}#mobile-nav-container .search-box input{height:60px;-webkit-appearance:none}#mobile-nav-container .search-box .ticker-input-results{color:#53565A;left:0;top:60px;width:auto}#nav-promo-banner-container{top:126px;width:100%;position:sticky}@media screen and (max-width:1023px){#nav-promo-banner-container{margin:0 24px;top:75px;width:calc(100% - 48px)}}#nav-alert-banner-container{top:0;width:100%;z-index:1001;position:relative}#nav-promo-banner{margin:auto;max-width:1280px}#tophat-container{background:#fafafa;position:sticky;top:0;width:100%;z-index:1001}#tophat{font-family:Roboto,sans-serif;font-size:12px;height:48px;height:51px;justify-content:space-between;margin:auto;max-width:1290px}#tophat input{background:#EDEEEE;font-size:14px;height:100%;padding:0 40px 0 24px;width:356px}#tophat input::placeholder{color:#8A8C8E;font-style:italic}#tophat .ticker-input-results{left:0;top:54px}#tophat .icon{height:18px;position:relative;right:30px;width:18px}#tophat .tophat-links{align-items:center;display:flex}#tophat .tophat-links a{border-right:solid 1px #EDEEEE;color:#8A8C8E;line-height:48px;padding:0 24px;text-transform:uppercase}#tophat .tophat-links a.cta-highlight{color:#E31C79}#tophat .tophat-links a:hover{color:#1C1D20}#tophat .tophat-links a:last-child{border:none;padding-right:8px}.tophat-color-line{display:flex}.tophat-color-line div{height:3px;width:100%}.tophat-color-line div.green{background:#43B02A}.tophat-color-line div.cyan{background:#0095C8}.tophat-color-line div.blue{background:#485CC7}.tophat-color-line div.royal{background:#753BBD}.tophat-color-line div.purple{background:#981E97}.tophat-color-line div.magenta{background:#E31C79}.tophat-color-line div.red{background:#F9423A}.tophat-color-line div.orange{background:#FF6900}.tophat-color-line div.bronze{background:#CF7F00}.tophat-color-line div.gold{background:#FFB81C}#usmf-footer{font-size:14px;line-height:1rem}#usmf-footer ul{padding:0}#usmf-footer li{list-style:none;padding:0.5rem 0}#usmf-footer h2{font-size:14px}#usmf-footer .footer-main{padding:2em 1.618em;max-width:1280px;margin:0 auto}@media screen and (min-width:1024px){#usmf-footer .footer-main{display:grid;grid-gap:2rem;grid-template:"site-info link-lists";padding-top:3rem}}#usmf-footer .footer-site-info{grid-area:site-info}#usmf-footer .fool-logo{max-width:147px;margin:0.25rem 0 0.5rem}#usmf-footer .tagline{color:#FAFAFA;margin-bottom:1rem}#usmf-footer .footer-social{display:flex;margin-bottom:1.4rem}#usmf-footer .footer-small{font-size:0.625rem;margin-bottom:2rem}#usmf-footer .footer-small p{margin-bottom:0}#usmf-footer .footer-small a{text-decoration:underline}#usmf-footer .footer-lists{grid-area:link-lists;display:grid;grid-template-columns:repeat(auto-fill,150px);grid-gap:2rem;margin-bottom:2.5em}@media screen and (max-width:859px){#usmf-footer .footer-lists{column-gap:2.5rem;line-height:1.25;margin-bottom:0}}@media screen and (min-width:660px){#usmf-footer .footer-lists{grid-template-columns:unset;grid-auto-columns:1fr}}@media screen and (min-width:660px){#usmf-footer .footer-list{grid-row:1}}#usmf-footer .legal-text{background:#FAFAFA}#usmf-footer .legal-text ul{margin:0}#usmf-footer .legal-text li{padding:0 16px}@media screen and (max-width:859px){#usmf-footer .legal-text li{padding:8px 0}}*,::before,::after{--tw-border-opacity:1;border-color:rgba(138,140,142,var(--tw-border-opacity))}.stroke-current{stroke:currentColor}/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{font-family:Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;--tw-text-opacity:1;color:rgba(138,140,142,1);color:rgba(138,140,142,var(--tw-text-opacity));box-sizing:border-box;line-height:1.5;-webkit-text-size-adjust:100%}body{margin:0}main{display:block}h1{font-size:2em;margin:0.67em 0}hr{box-sizing:content-box;height:0;overflow:visible}pre{font-family:monospace,monospace;font-size:1em}a{background-color:transparent}abbr[title]{border-bottom:none;text-decoration:underline;-webkit-text-decoration:underline dotted;text-decoration:underline dotted}b,strong{font-weight:bolder}code,kbd,samp{font-family:monospace,monospace;font-size:1em}small{font-size:0.625rem;line-height:0.75rem;line-height:1.2}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-0.25em}sup{top:-0.5em}button{background:transparent;padding:0}button,[role='button']{cursor:pointer}textarea{overflow:auto;resize:vertical}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}button,[type='button'],[type='reset'],[type='submit']{-webkit-appearance:button}button::-moz-focus-inner,[type='button']::-moz-focus-inner,[type='reset']::-moz-focus-inner,[type='submit']::-moz-focus-inner{border-style:none;padding:0}button:-moz-focusring,[type='button']:-moz-focusring,[type='reset']:-moz-focusring,[type='submit']:-moz-focusring{outline:none}fieldset{margin:0;padding:0.35em 0.75em 0.625em}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{vertical-align:baseline}[type='checkbox'],[type='radio']{box-sizing:border-box;padding:0}[type='number']::-webkit-inner-spin-button,[type='number']::-webkit-outer-spin-button{height:auto}[type='search']{-webkit-appearance:textfield;outline-offset:-2px}[type='search']::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details{display:block}summary{display:list-item}template{display:none}[hidden]{display:none}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,figure,p,pre{margin:0}button:focus{outline:none}ol,ul{margin:0}*,*::before,*::after{border-color:currentColor;border-style:solid;border-width:0;box-sizing:inherit}img{border-style:solid;height:auto;max-width:100%}input::-moz-placeholder,textarea::-moz-placeholder{color:inherit;opacity:0.5}input::placeholder,textarea::placeholder{color:inherit;opacity:0.5}table{border-collapse:collapse}select:-moz-focusring{color:transparent;text-shadow:0 0 0 #000}*:focus{outline:none;--tw-shadow:0 0 0 3px rgba(66,153,225,0.5);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow)}[data-whatintent='mouse'] *:focus{--tw-shadow:0 0 rgba(0,0,0,0);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow)}p{font-size:1rem;line-height:1.5rem}@media (min-width:40em){p{line-height:1.625rem}}.tailwind-article-body p a,.tailwind-article-body li a{text-decoration:none}.tailwind-article-body p a,.tailwind-article-body li a{--tw-text-opacity:1;color:rgba(0,107,166,1);color:rgba(0,107,166,var(--tw-text-opacity))}.tailwind-article-body p a:hover,.tailwind-article-body p a:active,.tailwind-article-body li a:hover,.tailwind-article-body li a:active{background-position:left bottom;background-repeat:repeat-x}.tailwind-article-body p a:hover,.tailwind-article-body p a:active,.tailwind-article-body li a:hover,.tailwind-article-body li a:active{background-image:linear-gradient(to right,#6AD1E3 100%,transparent 100%);background-size:1px 1px}.tailwind-article-body p a:active,.tailwind-article-body li a:active{--tw-bg-opacity:1;background-color:rgba(106,209,227,var(--tw-bg-opacity));background-image:linear-gradient(to right,#6AD1E3 100%,transparent 100%)}strong{font-weight:700}.group:focus .group-hover\:text-blue-700{--tw-text-opacity:1;color:rgba(72,92,199,1);color:rgba(72,92,199,var(--tw-text-opacity))}.group:focus .group-hover\:text-wht-80{color:rgba(255,255,255,0.8)}.group:focus .group-hover\:text-white{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.tailwind-article-body .portable-module .group:focus .group-hover\:text-white{color:#fff}.group:focus .group-hover\:text-white{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.tailwind-article-body .portable-module .group:focus .group-hover\:text-white{color:#fff}.group:focus .group-hover\:opacity-100{opacity:1}.fade-enter-active,.fade-leave-active{transition:opacity 0.5s}.fade-enter,.fade-leave-to{opacity:0}.modal-enter{opacity:0}.modal-leave-active{opacity:0}.modal-mask{background-color:rgba(0,0,0,.7);transition:opacity .3s ease}.modal-enter .modal-container,.modal-leave-active .modal-container{transform:scale(1.1)}.bg-gradient-brand{background-image:linear-gradient(45deg,#fafafa,#f3f3f3)}.foolcom-btn{display:inline-block;cursor:pointer;border-radius:0.25rem;padding-left:2rem;padding-right:2rem;padding-top:1rem;padding-bottom:1rem;text-align:center;font-size:1.125rem;line-height:1.375rem;font-weight:700;--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn:hover{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn{--tw-shadow:2px 2px 10px rgba(0,0,0,0.16);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow);transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.tailwind-article-body .portable-module .foolcom-btn{color:#fff}.foolcom-btn-green{display:inline-block;cursor:pointer;border-radius:0.25rem;padding-left:2rem;padding-right:2rem;padding-top:1rem;padding-bottom:1rem;text-align:center;font-size:1.125rem;line-height:1.375rem;font-weight:700;--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-green:hover{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-green{--tw-shadow:2px 2px 10px rgba(0,0,0,0.16);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow);transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.tailwind-article-body .portable-module .foolcom-btn-green{color:#fff}.wagtail-ecap .foolcom-btn-green{width:100%}@media (min-width:48em){.wagtail-ecap .foolcom-btn-green{width:auto}}.foolcom-btn-green{--tw-bg-opacity:1;background-color:rgba(67,176,42,var(--tw-bg-opacity))}.foolcom-btn-green:hover{--tw-bg-opacity:1;background-color:rgba(105,199,72,var(--tw-bg-opacity))}.foolcom-btn-cyan{display:inline-block;cursor:pointer;border-radius:0.25rem;padding-left:2rem;padding-right:2rem;padding-top:1rem;padding-bottom:1rem;text-align:center;font-size:1.125rem;line-height:1.375rem;font-weight:700;--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-cyan:hover{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-cyan{--tw-shadow:2px 2px 10px rgba(0,0,0,0.16);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow);transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.tailwind-article-body .portable-module .foolcom-btn-cyan{color:#fff}.wagtail-ecap .foolcom-btn-cyan{width:100%}@media (min-width:48em){.wagtail-ecap .foolcom-btn-cyan{width:auto}}.foolcom-btn-cyan{--tw-bg-opacity:1;background-color:rgba(0,149,200,var(--tw-bg-opacity))}.foolcom-btn-cyan:hover{--tw-bg-opacity:1;background-color:rgba(53,178,214,var(--tw-bg-opacity))}.foolcom-btn-white{display:inline-block;cursor:pointer;border-radius:0.25rem;padding-left:2rem;padding-right:2rem;padding-top:1rem;padding-bottom:1rem;text-align:center;font-size:1.125rem;line-height:1.375rem;font-weight:700;--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-white:hover{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-white{--tw-shadow:2px 2px 10px rgba(0,0,0,0.16);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow);transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.tailwind-article-body .portable-module .foolcom-btn-white{color:#fff}.wagtail-ecap .foolcom-btn-white{width:100%}@media (min-width:48em){.wagtail-ecap .foolcom-btn-white{width:auto}}.foolcom-btn-white{--tw-bg-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity))}.foolcom-btn-white:hover{--tw-bg-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity))}.foolcom-btn-white{--tw-text-opacity:1;color:rgba(0,149,200,1);color:rgba(0,149,200,var(--tw-text-opacity))}.foolcom-btn-white:hover{--tw-text-opacity:1;color:rgba(53,178,214,1);color:rgba(53,178,214,var(--tw-text-opacity))}.foolcom-btn-gold{display:inline-block;cursor:pointer;border-radius:0.25rem;padding-left:2rem;padding-right:2rem;padding-top:1rem;padding-bottom:1rem;text-align:center;font-size:1.125rem;line-height:1.375rem;font-weight:700;--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-gold:hover{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-gold{--tw-shadow:2px 2px 10px rgba(0,0,0,0.16);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow);transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.tailwind-article-body .portable-module .foolcom-btn-gold{color:#fff}.wagtail-ecap .foolcom-btn-gold{width:100%}@media (min-width:48em){.wagtail-ecap .foolcom-btn-gold{width:auto}}.foolcom-btn-gold{--tw-bg-opacity:1;background-color:rgba(255,184,28,var(--tw-bg-opacity))}.foolcom-btn-gold:hover{--tw-bg-opacity:1;background-color:rgba(251,204,85,var(--tw-bg-opacity))}.foolcom-btn-orange{display:inline-block;cursor:pointer;border-radius:0.25rem;padding-left:2rem;padding-right:2rem;padding-top:1rem;padding-bottom:1rem;text-align:center;font-size:1.125rem;line-height:1.375rem;font-weight:700;--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-orange:hover{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-orange{--tw-shadow:2px 2px 10px rgba(0,0,0,0.16);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow);transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.tailwind-article-body .portable-module .foolcom-btn-orange{color:#fff}.wagtail-ecap .foolcom-btn-orange{width:100%}@media (min-width:48em){.wagtail-ecap .foolcom-btn-orange{width:auto}}.foolcom-btn-orange{--tw-bg-opacity:1;background-color:rgba(255,105,0,var(--tw-bg-opacity))}.foolcom-btn-orange:hover{--tw-bg-opacity:1;background-color:rgba(250,131,55,var(--tw-bg-opacity))}.foolcom-btn-magenta{display:inline-block;cursor:pointer;border-radius:0.25rem;padding-left:2rem;padding-right:2rem;padding-top:1rem;padding-bottom:1rem;text-align:center;font-size:1.125rem;line-height:1.375rem;font-weight:700;--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-magenta:hover{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-magenta{--tw-shadow:2px 2px 10px rgba(0,0,0,0.16);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow);transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.tailwind-article-body .portable-module .foolcom-btn-magenta{color:#fff}.wagtail-ecap .foolcom-btn-magenta{width:100%}@media (min-width:48em){.wagtail-ecap .foolcom-btn-magenta{width:auto}}.foolcom-btn-magenta{--tw-bg-opacity:1;background-color:rgba(227,28,121,var(--tw-bg-opacity))}.foolcom-btn-magenta:hover{--tw-bg-opacity:1;background-color:rgba(233,88,164,var(--tw-bg-opacity))}.foolcom-btn-blue{display:inline-block;cursor:pointer;border-radius:0.25rem;padding-left:2rem;padding-right:2rem;padding-top:1rem;padding-bottom:1rem;text-align:center;font-size:1.125rem;line-height:1.375rem;font-weight:700;--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-blue:hover{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-blue{--tw-shadow:2px 2px 10px rgba(0,0,0,0.16);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow);transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.tailwind-article-body .portable-module .foolcom-btn-blue{color:#fff}.wagtail-ecap .foolcom-btn-blue{width:100%}@media (min-width:48em){.wagtail-ecap .foolcom-btn-blue{width:auto}}.foolcom-btn-blue{--tw-bg-opacity:1;background-color:rgba(72,92,199,var(--tw-bg-opacity))}.foolcom-btn-blue:hover{--tw-bg-opacity:1;background-color:rgba(115,133,214,var(--tw-bg-opacity))}.foolcom-btn-red{display:inline-block;cursor:pointer;border-radius:0.25rem;padding-left:2rem;padding-right:2rem;padding-top:1rem;padding-bottom:1rem;text-align:center;font-size:1.125rem;line-height:1.375rem;font-weight:700;--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-red:hover{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-red{--tw-shadow:2px 2px 10px rgba(0,0,0,0.16);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow);transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.tailwind-article-body .portable-module .foolcom-btn-red{color:#fff}.wagtail-ecap .foolcom-btn-red{width:100%}@media (min-width:48em){.wagtail-ecap .foolcom-btn-red{width:auto}}.foolcom-btn-red{--tw-bg-opacity:1;background-color:rgba(216,39,52,var(--tw-bg-opacity))}.foolcom-btn-red:hover{--tw-bg-opacity:1;background-color:rgba(249,66,58,var(--tw-bg-opacity))}.foolcom-btn-purple{display:inline-block;cursor:pointer;border-radius:0.25rem;padding-left:2rem;padding-right:2rem;padding-top:1rem;padding-bottom:1rem;text-align:center;font-size:1.125rem;line-height:1.375rem;font-weight:700;--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-purple:hover{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-purple{--tw-shadow:2px 2px 10px rgba(0,0,0,0.16);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow);transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.tailwind-article-body .portable-module .foolcom-btn-purple{color:#fff}.wagtail-ecap .foolcom-btn-purple{width:100%}@media (min-width:48em){.wagtail-ecap .foolcom-btn-purple{width:auto}}.foolcom-btn-purple{--tw-bg-opacity:1;background-color:rgba(152,30,151,var(--tw-bg-opacity))}.foolcom-btn-purple:hover{--tw-bg-opacity:1;background-color:rgba(176,84,185,var(--tw-bg-opacity))}.foolcom-btn-royal-purple{display:inline-block;cursor:pointer;border-radius:0.25rem;padding-left:2rem;padding-right:2rem;padding-top:1rem;padding-bottom:1rem;text-align:center;font-size:1.125rem;line-height:1.375rem;font-weight:700;--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-royal-purple:hover{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.foolcom-btn-royal-purple{--tw-shadow:2px 2px 10px rgba(0,0,0,0.16);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow);transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.tailwind-article-body .portable-module .foolcom-btn-royal-purple{color:#fff}.wagtail-ecap .foolcom-btn-royal-purple{width:100%}@media (min-width:48em){.wagtail-ecap .foolcom-btn-royal-purple{width:auto}}.foolcom-btn-royal-purple{--tw-bg-opacity:1;background-color:rgba(117,59,189,var(--tw-bg-opacity))}.foolcom-btn-royal-purple:hover{--tw-bg-opacity:1;background-color:rgba(144,104,204,var(--tw-bg-opacity))}.foolcom-btn-lg{padding-left:1.5rem;padding-right:1.5rem;padding-top:0.625rem;padding-bottom:0.625rem;font-size:1rem;line-height:1.5rem}.foolcom-btn-md{padding-left:1rem;padding-right:1rem;padding-top:0.5rem;padding-bottom:0.5rem;font-size:0.875rem;line-height:1.125rem}*,*::before,*::after{border-color:#8A8C8E;border-style:solid;border-width:0;box-sizing:inherit}button{-webkit-appearance:none;background:transparent}h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:0.5rem}html{font-family:Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.15;-webkit-text-size-adjust:100%}svg,svg *:not([fill]){fill:currentColor}select:-moz-focusring{color:transparent;text-shadow:0 0 0 #000}*:focus{outline:none;--tw-shadow:0 0 0 3px rgba(66,153,225,0.5);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow)}[data-whatintent="mouse"] *:focus{--tw-shadow:0 0 rgba(0,0,0,0);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow)}svg{fill:currentColor}*,*::before,*::after{border-color:#8A8C8E}img{border-style:solid;height:auto;max-width:100%}input::-moz-placeholder,textarea::-moz-placeholder{color:inherit;opacity:0.5}input::placeholder,textarea::placeholder{color:inherit;opacity:0.5}table{border-collapse:collapse}select:-moz-focusring{color:transparent;text-shadow:0 0 0 #000}*:focus{outline:none;--tw-shadow:0 0 0 3px rgba(66,153,225,0.5);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow)}[data-whatintent="mouse"] *:focus{--tw-shadow:0 0 rgba(0,0,0,0);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow)}.pointer-events-none{pointer-events:none}.pointer-events-auto{pointer-events:auto}.visible{visibility:visible}.invisible{visibility:hidden}.static{position:static}.fixed{position:fixed}.absolute{position:absolute}.relative{position:relative}.sticky{position:sticky}.top-0{top:0}.top-75{top:4.6875rem}.top-112{top:7rem}.top-152{top:9.5rem}.top-0px{top:0}.top-8px{top:0.5rem}.top-full{top:100%}.right-0{right:0}.right-0px{right:0}.right-12px{right:0.75rem}.bottom-0{bottom:0}.bottom-32{bottom:2rem}.bottom-60{bottom:60px}.bottom-0px{bottom:0}.bottom-28px{bottom:1.75rem}.left-0{left:0}.left-32{left:2rem}.left-0px{left:0}.left-12px{left:0.75rem}.left-half{left:50%}.z-0{z-index:0}.z-10{z-index:10}.z-20{z-index:20}.z-40{z-index:40}.z-50{z-index:50}.z-top{z-index:1000}.-z-1{z-index:-1}.col-span-12{grid-column:span 12 / span 12}.col-start-1{grid-column-start:1}.col-start-2{grid-column-start:2}.col-start-3{grid-column-start:3}.col-start-4{grid-column-start:4}.col-end-2{grid-column-end:2}.col-end-3{grid-column-end:3}.col-end-4{grid-column-end:4}.col-end-6{grid-column-end:6}.row-start-1{grid-row-start:1}.row-start-2{grid-row-start:2}.row-start-3{grid-row-start:3}.row-start-4{grid-row-start:4}.row-start-5{grid-row-start:5}.row-start-6{grid-row-start:6}.row-end-2{grid-row-end:2}.row-end-3{grid-row-end:3}.row-end-4{grid-row-end:4}.row-end-5{grid-row-end:5}.row-end-6{grid-row-end:6}.row-end-7{grid-row-end:7}.float-right{float:right}.float-left{float:left}.clear-both{clear:both}.m-auto{margin:auto}.m-0px{margin:0}.m-16px{margin:1rem}.m-24px{margin:1.5rem}.mx-20{margin-left:1.25rem;margin-right:1.25rem}.mx-auto{margin-left:auto;margin-right:auto}.mx-0px{margin-left:0;margin-right:0}.mx-4px{margin-left:0.25rem;margin-right:0.25rem}.mx-24px{margin-left:1.5rem;margin-right:1.5rem}.mx-28px{margin-left:1.75rem;margin-right:1.75rem}.mx-32px{margin-left:2rem;margin-right:2rem}.-mx-24px{margin-left:-1.5rem;margin-right:-1.5rem}.my-10{margin-top:0.625rem;margin-bottom:0.625rem}.my-48{margin-top:3rem;margin-bottom:3rem}.my-64{margin-top:4rem;margin-bottom:4rem}.my-2px{margin-top:0.125rem;margin-bottom:0.125rem}.my-4px{margin-top:0.25rem;margin-bottom:0.25rem}.my-8px{margin-top:0.5rem;margin-bottom:0.5rem}.my-12px{margin-top:0.75rem;margin-bottom:0.75rem}.my-16px{margin-top:1rem;margin-bottom:1rem}.my-20px{margin-top:1.25rem;margin-bottom:1.25rem}.my-24px{margin-top:1.5rem;margin-bottom:1.5rem}.my-32px{margin-top:2rem;margin-bottom:2rem}.my-36px{margin-top:2.25rem;margin-bottom:2.25rem}.my-48px{margin-top:3rem;margin-bottom:3rem}.mt-6{margin-top:0.375rem}.mt-8{margin-top:0.5rem}.mt-10{margin-top:0.625rem}.mt-12{margin-top:0.75rem}.mt-20{margin-top:1.25rem}.mt-40{margin-top:2.5rem}.mt-56{margin-top:3.5rem}.mt-60{margin-top:3.75rem}.mt-80{margin-top:5rem}.mt-120{margin-top:7.5rem}.mt-0px{margin-top:0}.mt-2px{margin-top:0.125rem}.mt-4px{margin-top:0.25rem}.mt-8px{margin-top:0.5rem}.mt-12px{margin-top:0.75rem}.mt-16px{margin-top:1rem}.mt-20px{margin-top:1.25rem}.mt-24px{margin-top:1.5rem}.mt-28px{margin-top:1.75rem}.mt-32px{margin-top:2rem}.mt-36px{margin-top:2.25rem}.mt-40px{margin-top:2.5rem}.mt-48px{margin-top:3rem}.-mt-32px{margin-top:-2rem}.mr-10{margin-right:0.625rem}.mr-16{margin-right:1rem}.mr-4px{margin-right:0.25rem}.mr-8px{margin-right:0.5rem}.mr-12px{margin-right:0.75rem}.mr-16px{margin-right:1rem}.mr-24px{margin-right:1.5rem}.mr-36px{margin-right:2.25rem}.-mr-40{margin-right:-2.5rem}.-mr-12px{margin-right:-0.75rem}.mb-6{margin-bottom:0.375rem}.mb-10{margin-bottom:0.625rem}.mb-12{margin-bottom:0.75rem}.mb-14{margin-bottom:0.875rem}.mb-16{margin-bottom:1rem}.mb-20{margin-bottom:1.25rem}.mb-40{margin-bottom:2.5rem}.mb-48{margin-bottom:3rem}.mb-60{margin-bottom:3.75rem}.mb-64{margin-bottom:4rem}.mb-80{margin-bottom:5rem}.mb-160{margin-bottom:10rem}.mb-0px{margin-bottom:0}.mb-2px{margin-bottom:0.125rem}.mb-4px{margin-bottom:0.25rem}.mb-8px{margin-bottom:0.5rem}.mb-12px{margin-bottom:0.75rem}.mb-16px{margin-bottom:1rem}.mb-20px{margin-bottom:1.25rem}.mb-24px{margin-bottom:1.5rem}.mb-28px{margin-bottom:1.75rem}.mb-32px{margin-bottom:2rem}.mb-36px{margin-bottom:2.25rem}.mb-40px{margin-bottom:2.5rem}.mb-48px{margin-bottom:3rem}.-mb-240{margin-bottom:-15rem}.-mb-16px{margin-bottom:-1rem}.ml-14{margin-left:0.875rem}.ml-4px{margin-left:0.25rem}.ml-8px{margin-left:0.5rem}.ml-12px{margin-left:0.75rem}.ml-16px{margin-left:1rem}.ml-20px{margin-left:1.25rem}.ml-24px{margin-left:1.5rem}.-ml-8px{margin-left:-0.5rem}.block{display:block}.inline-block{display:inline-block}.inline{display:inline}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.flow-root{display:flow-root}.grid{display:grid}.inline-grid{display:inline-grid}.hidden{display:none}.h-60{height:3.75rem}.h-64{height:4rem}.h-auto{height:auto}.h-0px{height:0}.h-4px{height:0.25rem}.h-8px{height:0.5rem}.h-12px{height:0.75rem}.h-16px{height:1rem}.h-20px{height:1.25rem}.h-24px{height:1.5rem}.h-32px{height:2rem}.h-36px{height:2.25rem}.h-48px{height:3rem}.h-full{height:100%}.w-60{width:3.75rem}.w-200{width:12.5rem}.w-250{width:15.625rem}.w-300{width:18.75rem}.w-auto{width:auto}.w-0px{width:0}.w-8px{width:0.5rem}.w-12px{width:0.75rem}.w-16px{width:1rem}.w-20px{width:1.25rem}.w-24px{width:1.5rem}.w-28px{width:1.75rem}.w-32px{width:2rem}.w-40px{width:2.5rem}.w-48px{width:3rem}.w-1\/2{width:50%}.w-1\/3{width:33.333333%}.w-2\/3{width:66.666667%}.w-1\/4{width:25%}.w-3\/4{width:75%}.w-1\/6{width:16.666667%}.w-2\/6{width:33.333333%}.w-5\/6{width:83.333333%}.w-11\/12{width:91.666667%}.w-full{width:100%}.w-screen{width:100vw}.w-90px{width:90px}.min-w-0{min-width:0}.min-w-120{min-width:7.5rem}.min-w-600{min-width:37.5rem}.min-w-full{min-width:100%}.min-w-1\/3{min-width:33%}.max-w-80{max-width:5rem}.max-w-210{max-width:13.125rem}.max-w-240{max-width:15rem}.max-w-300{max-width:18.75rem}.max-w-312{max-width:19.5rem}.max-w-540{max-width:33.75rem}.max-w-740{max-width:46.25rem}.max-w-800{max-width:50rem}.max-w-960{max-width:60rem}.max-w-1280{max-width:80rem}.max-w-full{max-width:100%}.flex-1{flex:1 1 0%}.flex-auto{flex:1 1 auto}.flex-none{flex:none}.flex-shrink-0{flex-shrink:0}.flex-shrink{flex-shrink:1}.flex-grow{flex-grow:1}.table-fixed{table-layout:fixed}.border-collapse{border-collapse:collapse}.transform{--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;transform:translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.-translate-x-1\/2{--tw-translate-x:-50%}.rotate-12{--tw-rotate:12deg}.rotate-30{--tw-rotate:30deg}.rotate-45{--tw-rotate:45deg}.rotate-180{--tw-rotate:180deg}.hover\:scale-105:hover{--tw-scale-x:1.05;--tw-scale-y:1.05}.hover\:scale-110:hover{--tw-scale-x:1.1;--tw-scale-y:1.1}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,100%{transform:scale(2);opacity:0}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,100%{transform:translateY(-25%);animation-timing-function:cubic-bezier(0.8,0,1,1)}50%{transform:none;animation-timing-function:cubic-bezier(0,0,0.2,1)}}.cursor{cursor:default}.cursor-pointer{cursor:pointer}.cursor-not-allowed{cursor:not-allowed}.select-none{-webkit-user-select:none;-moz-user-select:none;user-select:none}.select-auto{-webkit-user-select:auto;-moz-user-select:auto;user-select:auto}.resize{resize:both}.list-outside{list-style-position:outside}.list-none{list-style-type:none}.list-disc{list-style-type:disc}.appearance-none{-webkit-appearance:none;-moz-appearance:none;appearance:none}.grid-flow-row{grid-auto-flow:row}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.grid-cols-5{grid-template-columns:repeat(5,minmax(0,1fr))}.flex-row{flex-direction:row}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.flex-wrap{flex-wrap:wrap}.place-content-center{align-content:center;justify-content:center;place-content:center}.place-content-start{align-content:start;justify-content:start;place-content:start}.place-content-between{align-content:space-between;justify-content:space-between;place-content:space-between}.place-items-start{align-items:start;justify-items:start;place-items:start}.place-items-center{align-items:center;justify-items:center;place-items:center}.items-start{align-items:flex-start}.items-end{align-items:flex-end}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-evenly{justify-content:space-evenly}.gap-16{grid-gap:1rem;gap:1rem}.gap-24{grid-gap:1.5rem;gap:1.5rem}.gap-12px{grid-gap:0.75rem;gap:0.75rem}.gap-16px{grid-gap:1rem;gap:1rem}.gap-20px{grid-gap:1.25rem;gap:1.25rem}.gap-28px{grid-gap:1.75rem;gap:1.75rem}.gap-32px{grid-gap:2rem;gap:2rem}.gap-48px{grid-gap:3rem;gap:3rem}.gap-x-12{grid-column-gap:0.75rem;-moz-column-gap:0.75rem;column-gap:0.75rem}.gap-x-24px{grid-column-gap:1.5rem;-moz-column-gap:1.5rem;column-gap:1.5rem}.gap-y-6{grid-row-gap:0.375rem;row-gap:0.375rem}.gap-y-12{grid-row-gap:0.75rem;row-gap:0.75rem}.gap-y-14{grid-row-gap:0.875rem;row-gap:0.875rem}.gap-y-20px{grid-row-gap:1.25rem;row-gap:1.25rem}.space-y-12px>:not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0.75rem * var(--tw-space-y-reverse))}.divide-y>:not([hidden]) ~ :not([hidden]){--tw-divide-y-reverse:0;border-top-width:calc(1px * calc(1 - var(--tw-divide-y-reverse)));border-bottom-width:calc(1px * var(--tw-divide-y-reverse))}.divide-gray-300>:not([hidden]) ~ :not([hidden]){--tw-divide-opacity:1;border-color:rgba(220,220,221,var(--tw-divide-opacity))}.place-self-center{align-self:center;justify-self:center;place-self:center}.self-start{align-self:flex-start}.self-end{align-self:flex-end}.self-center{align-self:center}.self-stretch{align-self:stretch}.justify-self-center{justify-self:center}.overflow-auto{overflow:auto}.overflow-hidden{overflow:hidden}.overflow-scroll{overflow:scroll}.overflow-x-auto{overflow-x:auto}.overflow-y-hidden{overflow-y:hidden}.overflow-x-scroll{overflow-x:scroll}.whitespace-nowrap{white-space:nowrap}.break-words{word-wrap:break-word}.rounded{border-radius:0.25rem}.rounded-4px{border-radius:0.25rem}.rounded-8px{border-radius:0.5rem}.rounded-full{border-radius:9999px}.rounded-t-4px{border-top-left-radius:0.25rem;border-top-right-radius:0.25rem}.rounded-b{border-bottom-right-radius:0.25rem;border-bottom-left-radius:0.25rem}.border{border-width:1px}.border-0px{border-width:0}.border-1px{border-width:1px}.border-2px{border-width:2px}.border-t{border-top-width:1px}.border-t-1px{border-top-width:1px}.border-t-4px{border-top-width:4px}.border-t-8px{border-top-width:8px}.border-r{border-right-width:1px}.border-r-1px{border-right-width:1px}.border-r-8px{border-right-width:8px}.border-b{border-bottom-width:1px}.border-b-1px{border-bottom-width:1px}.border-b-2px{border-bottom-width:2px}.border-l{border-left-width:1px}.border-l-0px{border-left-width:0}.border-l-1px{border-left-width:1px}.border-l-2px{border-left-width:2px}.border-l-4px{border-left-width:4px}.border-solid{border-style:solid}.border-dashed{border-style:dashed}.border-dotted{border-style:dotted}.border-bronze-700{--tw-border-opacity:1;border-color:rgba(176,102,10,var(--tw-border-opacity))}.border-white{--tw-border-opacity:1;border-color:rgba(255,255,255,var(--tw-border-opacity))}.border-gold-600{--tw-border-opacity:1;border-color:rgba(255,184,28,var(--tw-border-opacity))}.border-gray-100{--tw-border-opacity:1;border-color:rgba(250,250,250,var(--tw-border-opacity))}.border-gray-200{--tw-border-opacity:1;border-color:rgba(237,238,238,var(--tw-border-opacity))}.border-gray-300{--tw-border-opacity:1;border-color:rgba(220,220,221,var(--tw-border-opacity))}.border-gray-400{--tw-border-opacity:1;border-color:rgba(202,203,203,var(--tw-border-opacity))}.border-gray-500{--tw-border-opacity:1;border-color:rgba(185,185,186,var(--tw-border-opacity))}.border-gray-700{--tw-border-opacity:1;border-color:rgba(138,140,142,var(--tw-border-opacity))}.border-gray-1100{--tw-border-opacity:1;border-color:rgba(28,29,32,var(--tw-border-opacity))}.border-red-700{--tw-border-opacity:1;border-color:rgba(249,66,58,var(--tw-border-opacity))}.border-red-900{--tw-border-opacity:1;border-color:rgba(186,3,47,var(--tw-border-opacity))}.border-green-700{--tw-border-opacity:1;border-color:rgba(67,176,42,var(--tw-border-opacity))}.border-green-1000{--tw-border-opacity:1;border-color:rgba(12,97,51,var(--tw-border-opacity))}.border-orange-600{--tw-border-opacity:1;border-color:rgba(255,105,0,var(--tw-border-opacity))}.border-orange-700{--tw-border-opacity:1;border-color:rgba(231,87,16,var(--tw-border-opacity))}.border-blue-700{--tw-border-opacity:1;border-color:rgba(72,92,199,var(--tw-border-opacity))}.border-blue-1000{--tw-border-opacity:1;border-color:rgba(22,33,130,var(--tw-border-opacity))}.border-purple-600{--tw-border-opacity:1;border-color:rgba(176,84,185,var(--tw-border-opacity))}.border-purple-700{--tw-border-opacity:1;border-color:rgba(152,30,151,var(--tw-border-opacity))}.border-cyan-700{--tw-border-opacity:1;border-color:rgba(0,149,200,var(--tw-border-opacity))}.border-cyan-800{--tw-border-opacity:1;border-color:rgba(38,128,183,var(--tw-border-opacity))}.border-cyan-900{--tw-border-opacity:1;border-color:rgba(0,107,166,var(--tw-border-opacity))}.border-royal-purple-700{--tw-border-opacity:1;border-color:rgba(117,59,189,var(--tw-border-opacity))}.border-royal-purple-800{--tw-border-opacity:1;border-color:rgba(91,30,171,var(--tw-border-opacity))}.border-royal-purple-1100{--tw-border-opacity:1;border-color:rgba(36,18,95,var(--tw-border-opacity))}.border-magenta-700{--tw-border-opacity:1;border-color:rgba(227,28,121,var(--tw-border-opacity))}.border-magenta-900{--tw-border-opacity:1;border-color:rgba(172,20,90,var(--tw-border-opacity))}.hover\:border-gold-500:hover{--tw-border-opacity:1;border-color:rgba(251,204,85,var(--tw-border-opacity))}.hover\:border-gray-600:hover{--tw-border-opacity:1;border-color:rgba(167,168,169,var(--tw-border-opacity))}.hover\:border-cyan-600:hover{--tw-border-opacity:1;border-color:rgba(53,178,214,var(--tw-border-opacity))}.focus\:border-cyan-900:focus{--tw-border-opacity:1;border-color:rgba(0,107,166,var(--tw-border-opacity))}.bg-black{--tw-bg-opacity:1;background-color:rgba(0,0,0,var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity))}.bg-gold-200{--tw-bg-opacity:1;background-color:rgba(253,245,218,var(--tw-bg-opacity))}.bg-gold-600{--tw-bg-opacity:1;background-color:rgba(255,184,28,var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity:1;background-color:rgba(250,250,250,var(--tw-bg-opacity))}.bg-gray-200{--tw-bg-opacity:1;background-color:rgba(237,238,238,var(--tw-bg-opacity))}.bg-gray-300{--tw-bg-opacity:1;background-color:rgba(220,220,221,var(--tw-bg-opacity))}.bg-gray-600{--tw-bg-opacity:1;background-color:rgba(167,168,169,var(--tw-bg-opacity))}.bg-gray-800{--tw-bg-opacity:1;background-color:rgba(111,113,115,var(--tw-bg-opacity))}.bg-gray-900{--tw-bg-opacity:1;background-color:rgba(83,86,90,var(--tw-bg-opacity))}.bg-gray-1000{--tw-bg-opacity:1;background-color:rgba(55,57,59,var(--tw-bg-opacity))}.bg-gray-1100{--tw-bg-opacity:1;background-color:rgba(28,29,32,var(--tw-bg-opacity))}.bg-red-200{--tw-bg-opacity:1;background-color:rgba(254,226,231,var(--tw-bg-opacity))}.bg-red-700{--tw-bg-opacity:1;background-color:rgba(249,66,58,var(--tw-bg-opacity))}.bg-red-800{--tw-bg-opacity:1;background-color:rgba(216,39,52,var(--tw-bg-opacity))}.bg-red-900{--tw-bg-opacity:1;background-color:rgba(186,3,47,var(--tw-bg-opacity))}.bg-green-200{--tw-bg-opacity:1;background-color:rgba(227,246,216,var(--tw-bg-opacity))}.bg-green-700{--tw-bg-opacity:1;background-color:rgba(67,176,42,var(--tw-bg-opacity))}.bg-green-900{--tw-bg-opacity:1;background-color:rgba(0,122,51,var(--tw-bg-opacity))}.bg-blue-700{--tw-bg-opacity:1;background-color:rgba(72,92,199,var(--tw-bg-opacity))}.bg-blue-1000{--tw-bg-opacity:1;background-color:rgba(22,33,130,var(--tw-bg-opacity))}.bg-purple-700{--tw-bg-opacity:1;background-color:rgba(152,30,151,var(--tw-bg-opacity))}.bg-purple-900{--tw-bg-opacity:1;background-color:rgba(114,36,108,var(--tw-bg-opacity))}.bg-cyan-200{--tw-bg-opacity:1;background-color:rgba(218,243,248,var(--tw-bg-opacity))}.bg-cyan-700{--tw-bg-opacity:1;background-color:rgba(0,149,200,var(--tw-bg-opacity))}.bg-cyan-900{--tw-bg-opacity:1;background-color:rgba(0,107,166,var(--tw-bg-opacity))}.bg-cyan-1000{--tw-bg-opacity:1;background-color:rgba(23,83,129,var(--tw-bg-opacity))}.bg-royal-purple-700{--tw-bg-opacity:1;background-color:rgba(117,59,189,var(--tw-bg-opacity))}.bg-royal-purple-1000{--tw-bg-opacity:1;background-color:rgba(51,8,124,var(--tw-bg-opacity))}.bg-royal-purple-1100{--tw-bg-opacity:1;background-color:rgba(36,18,95,var(--tw-bg-opacity))}.bg-magenta-700{--tw-bg-opacity:1;background-color:rgba(227,28,121,var(--tw-bg-opacity))}.disabled\:bg-gray-100:disabled{--tw-bg-opacity:1;background-color:rgba(250,250,250,var(--tw-bg-opacity))}.hover\:bg-gold-500:hover{--tw-bg-opacity:1;background-color:rgba(251,204,85,var(--tw-bg-opacity))}.hover\:bg-gray-200:hover{--tw-bg-opacity:1;background-color:rgba(237,238,238,var(--tw-bg-opacity))}.hover\:bg-gray-900:hover{--tw-bg-opacity:1;background-color:rgba(83,86,90,var(--tw-bg-opacity))}.hover\:bg-green-600:hover{--tw-bg-opacity:1;background-color:rgba(105,199,72,var(--tw-bg-opacity))}.hover\:bg-purple-700:hover{--tw-bg-opacity:1;background-color:rgba(152,30,151,var(--tw-bg-opacity))}.hover\:bg-cyan-600:hover{--tw-bg-opacity:1;background-color:rgba(53,178,214,var(--tw-bg-opacity))}.hover\:bg-cyan-800:hover{--tw-bg-opacity:1;background-color:rgba(38,128,183,var(--tw-bg-opacity))}.bg-opacity-50{--tw-bg-opacity:0.5}.bg-opacity-70{--tw-bg-opacity:0.7}.bg-gradient-to-t{background-image:linear-gradient(to top,var(--tw-gradient-stops))}.bg-gradient-to-r{background-image:linear-gradient(to right,var(--tw-gradient-stops))}.bg-gradient-to-br{background-image:linear-gradient(to bottom right,var(--tw-gradient-stops))}.bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent;--tw-gradient-stops:var(--tw-gradient-from),var(--tw-gradient-to,rgba(0,0,0,0))}.from-gray-200{--tw-gradient-from:#EDEEEE;--tw-gradient-stops:var(--tw-gradient-from),var(--tw-gradient-to,rgba(237,238,238,0))}.from-cyan-700{--tw-gradient-from:#0095C8;--tw-gradient-stops:var(--tw-gradient-from),var(--tw-gradient-to,rgba(0,149,200,0))}.to-gray-200{--tw-gradient-to:#EDEEEE}.to-cyan-900{--tw-gradient-to:#006BA6}.bg-cover{background-size:cover}.bg-center{background-position:center}.bg-right-bottom{background-position:right bottom}.bg-no-repeat{background-repeat:no-repeat}.fill-current{fill:currentColor}.object-contain{-o-object-fit:contain;object-fit:contain}.object-cover{-o-object-fit:cover;object-fit:cover}.p-14{padding:0.875rem}.p-20{padding:1.25rem}.p-0px{padding:0}.p-4px{padding:0.25rem}.p-8px{padding:0.5rem}.p-12px{padding:0.75rem}.p-16px{padding:1rem}.p-20px{padding:1.25rem}.p-24px{padding:1.5rem}.p-28px{padding:1.75rem}.p-32px{padding:2rem}.p-36px{padding:2.25rem}.p-48px{padding:3rem}.px-10{padding-left:0.625rem;padding-right:0.625rem}.px-14{padding-left:0.875rem;padding-right:0.875rem}.px-24{padding-left:1.5rem;padding-right:1.5rem}.px-0px{padding-left:0;padding-right:0}.px-4px{padding-left:0.25rem;padding-right:0.25rem}.px-8px{padding-left:0.5rem;padding-right:0.5rem}.px-12px{padding-left:0.75rem;padding-right:0.75rem}.px-16px{padding-left:1rem;padding-right:1rem}.px-20px{padding-left:1.25rem;padding-right:1.25rem}.px-24px{padding-left:1.5rem;padding-right:1.5rem}.px-28px{padding-left:1.75rem;padding-right:1.75rem}.px-32px{padding-left:2rem;padding-right:2rem}.px-40px{padding-left:2.5rem;padding-right:2.5rem}.px-48px{padding-left:3rem;padding-right:3rem}.py-10{padding-top:0.625rem;padding-bottom:0.625rem}.py-14{padding-top:0.875rem;padding-bottom:0.875rem}.py-20{padding-top:1.25rem;padding-bottom:1.25rem}.py-24{padding-top:1.5rem;padding-bottom:1.5rem}.py-48{padding-top:3rem;padding-bottom:3rem}.py-64{padding-top:4rem;padding-bottom:4rem}.py-2px{padding-top:0.125rem;padding-bottom:0.125rem}.py-4px{padding-top:0.25rem;padding-bottom:0.25rem}.py-8px{padding-top:0.5rem;padding-bottom:0.5rem}.py-12px{padding-top:0.75rem;padding-bottom:0.75rem}.py-16px{padding-top:1rem;padding-bottom:1rem}.py-20px{padding-top:1.25rem;padding-bottom:1.25rem}.py-24px{padding-top:1.5rem;padding-bottom:1.5rem}.py-32px{padding-top:2rem;padding-bottom:2rem}.py-48px{padding-top:3rem;padding-bottom:3rem}.pt-12{padding-top:0.75rem}.pt-20{padding-top:1.25rem}.pt-40{padding-top:2.5rem}.pt-60{padding-top:3.75rem}.pt-4px{padding-top:0.25rem}.pt-8px{padding-top:0.5rem}.pt-12px{padding-top:0.75rem}.pt-16px{padding-top:1rem}.pt-20px{padding-top:1.25rem}.pt-24px{padding-top:1.5rem}.pt-28px{padding-top:1.75rem}.pt-32px{padding-top:2rem}.pt-36px{padding-top:2.25rem}.pr-28{padding-right:1.75rem}.pr-40{padding-right:2.5rem}.pr-4px{padding-right:0.25rem}.pr-8px{padding-right:0.5rem}.pr-12px{padding-right:0.75rem}.pr-16px{padding-right:1rem}.pr-24px{padding-right:1.5rem}.pb-6{padding-bottom:0.375rem}.pb-10{padding-bottom:0.625rem}.pb-14{padding-bottom:0.875rem}.pb-48{padding-bottom:3rem}.pb-60{padding-bottom:3.75rem}.pb-64{padding-bottom:4rem}.pb-160{padding-bottom:10rem}.pb-0px{padding-bottom:0}.pb-2px{padding-bottom:0.125rem}.pb-4px{padding-bottom:0.25rem}.pb-8px{padding-bottom:0.5rem}.pb-12px{padding-bottom:0.75rem}.pb-16px{padding-bottom:1rem}.pb-20px{padding-bottom:1.25rem}.pb-24px{padding-bottom:1.5rem}.pb-28px{padding-bottom:1.75rem}.pb-32px{padding-bottom:2rem}.pb-36px{padding-bottom:2.25rem}.pb-48px{padding-bottom:3rem}.pl-0px{padding-left:0}.pl-4px{padding-left:0.25rem}.pl-8px{padding-left:0.5rem}.pl-12px{padding-left:0.75rem}.pl-16px{padding-left:1rem}.pl-20px{padding-left:1.25rem}.pl-24px{padding-left:1.5rem}.text-left{text-align:left}.text-center{text-align:center}.text-right{text-align:right}.align-top{vertical-align:top}.align-middle{vertical-align:middle}.align-text-bottom{vertical-align:text-bottom}.font-sans{font-family:Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji}.font-serif{font-family:Georgia,Cambria,Times New Roman,Times,serif}.text-10{font-size:0.625rem}.text-12{font-size:0.75rem}.text-14{font-size:0.875rem}.text-16{font-size:1rem}.text-18{font-size:1.125rem}.text-20{font-size:1.25rem}.text-24{font-size:1.5rem}.text-28{font-size:1.75rem}.text-32{font-size:2rem}.text-h1{font-size:3.75rem;line-height:4rem}.text-h2{font-size:2.75rem;line-height:3rem}.text-h3{font-size:2rem;line-height:2.5rem}.text-h4{font-size:1.75rem;line-height:2rem}.text-h5{font-size:1.375rem;line-height:1.625rem}.text-h6{font-size:1.25rem;line-height:1.5rem}.text-xl{font-size:1.125rem;line-height:2rem}.text-lg{font-size:1rem;line-height:1.5rem}.text-md{font-size:0.875rem;line-height:1.125rem}.text-sm{font-size:0.75rem;line-height:1rem}.text-2xl{font-size:1.5rem}.text-3xl{font-size:1.875rem}.text-4xl{font-size:2.25rem}.text-h3-mobile{font-size:1.625rem;line-height:2rem}.text-h4-mobile{font-size:1.5rem;line-height:1.625rem}.text-xl-tight{font-size:1.125rem;line-height:1.375rem}.text-xs{font-size:0.625rem;line-height:0.75rem}.font-thin{font-weight:200}.font-normal{font-weight:400}.font-medium{font-weight:500}.font-bold{font-weight:700}.font-light{font-weight:300}.uppercase{text-transform:uppercase}.italic{font-style:italic}.not-italic{font-style:normal}.leading-10{line-height:2.5rem}.leading-none{line-height:1}.leading-tight{line-height:1.25rem}.leading-snug{line-height:1.375rem}.leading-normal{line-height:1.5rem}.leading-relaxed{line-height:1.625rem}.leading-relative-1{line-height:1.1}.leading-relative-2{line-height:1.2}.leading-relative-3{line-height:1.3}.leading-relative-4{line-height:1.4}.leading-relative-5{line-height:1.5}.tracking-tighter{letter-spacing:-0.05em}.tracking-tight{letter-spacing:-0.025em}.tracking-normal{letter-spacing:0}.text-black{--tw-text-opacity:1;color:rgba(0,0,0,1);color:rgba(0,0,0,var(--tw-text-opacity))}.text-bronze-800{--tw-text-opacity:1;color:rgba(147,77,17,1);color:rgba(147,77,17,var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.text-gold-600{--tw-text-opacity:1;color:rgba(255,184,28,1);color:rgba(255,184,28,var(--tw-text-opacity))}.text-gray-100{--tw-text-opacity:1;color:rgba(250,250,250,1);color:rgba(250,250,250,var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity:1;color:rgba(220,220,221,1);color:rgba(220,220,221,var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgba(185,185,186,1);color:rgba(185,185,186,var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity:1;color:rgba(167,168,169,1);color:rgba(167,168,169,var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity:1;color:rgba(138,140,142,1);color:rgba(138,140,142,var(--tw-text-opacity))}.text-gray-800{--tw-text-opacity:1;color:rgba(111,113,115,1);color:rgba(111,113,115,var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgba(83,86,90,1);color:rgba(83,86,90,var(--tw-text-opacity))}.text-gray-1000{--tw-text-opacity:1;color:rgba(55,57,59,1);color:rgba(55,57,59,var(--tw-text-opacity))}.text-gray-1100{--tw-text-opacity:1;color:rgba(28,29,32,1);color:rgba(28,29,32,var(--tw-text-opacity))}.text-red-900{--tw-text-opacity:1;color:rgba(186,3,47,1);color:rgba(186,3,47,var(--tw-text-opacity))}.text-green-700{--tw-text-opacity:1;color:rgba(67,176,42,1);color:rgba(67,176,42,var(--tw-text-opacity))}.text-green-800{--tw-text-opacity:1;color:rgba(33,149,47,1);color:rgba(33,149,47,var(--tw-text-opacity))}.text-green-900{--tw-text-opacity:1;color:rgba(0,122,51,1);color:rgba(0,122,51,var(--tw-text-opacity))}.text-green-1000{--tw-text-opacity:1;color:rgba(12,97,51,1);color:rgba(12,97,51,var(--tw-text-opacity))}.text-orange-800{--tw-text-opacity:1;color:rgba(207,69,32,1);color:rgba(207,69,32,var(--tw-text-opacity))}.text-blue-800{--tw-text-opacity:1;color:rgba(51,63,184,1);color:rgba(51,63,184,var(--tw-text-opacity))}.text-blue-900{--tw-text-opacity:1;color:rgba(30,34,170,1);color:rgba(30,34,170,var(--tw-text-opacity))}.text-cyan-700{--tw-text-opacity:1;color:rgba(0,149,200,1);color:rgba(0,149,200,var(--tw-text-opacity))}.text-cyan-800{--tw-text-opacity:1;color:rgba(38,128,183,1);color:rgba(38,128,183,var(--tw-text-opacity))}.text-cyan-900{--tw-text-opacity:1;color:rgba(0,107,166,1);color:rgba(0,107,166,var(--tw-text-opacity))}.text-magenta-700{--tw-text-opacity:1;color:rgba(227,28,121,1);color:rgba(227,28,121,var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgba(0,0,0,1);color:rgba(0,0,0,var(--tw-text-opacity))}.hover\:text-white:hover{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.hover\:text-gray-300:hover{--tw-text-opacity:1;color:rgba(220,220,221,1);color:rgba(220,220,221,var(--tw-text-opacity))}.hover\:text-gray-1100:hover{--tw-text-opacity:1;color:rgba(28,29,32,1);color:rgba(28,29,32,var(--tw-text-opacity))}.hover\:text-gray-1200:hover{--tw-text-opacity:1;color:rgba(0,0,0,1);color:rgba(0,0,0,var(--tw-text-opacity))}.hover\:text-cyan-600:hover{--tw-text-opacity:1;color:rgba(53,178,214,1);color:rgba(53,178,214,var(--tw-text-opacity))}.hover\:text-cyan-700:hover{--tw-text-opacity:1;color:rgba(0,149,200,1);color:rgba(0,149,200,var(--tw-text-opacity))}.hover\:text-cyan-800:hover{--tw-text-opacity:1;color:rgba(38,128,183,1);color:rgba(38,128,183,var(--tw-text-opacity))}.hover\:text-cyan-900:hover{--tw-text-opacity:1;color:rgba(0,107,166,1);color:rgba(0,107,166,var(--tw-text-opacity))}.underline{text-decoration:underline}.no-underline{text-decoration:none}.hover\:underline:hover{text-decoration:underline}.placeholder-gray-500::-moz-placeholder{--tw-placeholder-opacity:1;color:rgba(185,185,186,var(--tw-placeholder-opacity))}.placeholder-gray-500::placeholder{--tw-placeholder-opacity:1;color:rgba(185,185,186,var(--tw-placeholder-opacity))}.opacity-0{opacity:0}.opacity-10{opacity:0.1}.opacity-30{opacity:0.3}.opacity-50{opacity:0.5}.opacity-70{opacity:0.7}.opacity-75{opacity:0.75}.opacity-100{opacity:1}*,::before,::after{--tw-shadow:0 0 rgba(0,0,0,0)}.shadow{--tw-shadow:2px 2px 10px rgba(0,0,0,0.16);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow)}.shadow-button{--tw-shadow:2px 2px 10px rgba(0,0,0,0.16);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow)}.shadow-card{--tw-shadow:4px 4px 10px rgba(0,0,0,0.1);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow)}.shadow-nav{--tw-shadow:0px 0px 10px rgba(0,0,0,0.2);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow)}.focus\:shadow-none:focus{--tw-shadow:0 0 rgba(0,0,0,0);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}*,::before,::after{--tw-ring-inset:var(--tw-empty,/*!*//*!*/);--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgba(159,174,229,0.5);--tw-ring-offset-shadow:0 0 rgba(0,0,0,0);--tw-ring-shadow:0 0 rgba(0,0,0,0)}.focus\:ring-2:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),0 0 rgba(0,0,0,0);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 rgba(0,0,0,0))}.focus\:ring-cyan-400:focus{--tw-ring-opacity:1;--tw-ring-color:rgba(143,221,234,var(--tw-ring-opacity))}.focus\:ring-opacity-75:focus{--tw-ring-opacity:0.75}.filter{--tw-blur:var(--tw-empty,/*!*//*!*/);--tw-brightness:var(--tw-empty,/*!*//*!*/);--tw-contrast:var(--tw-empty,/*!*//*!*/);--tw-grayscale:var(--tw-empty,/*!*//*!*/);--tw-hue-rotate:var(--tw-empty,/*!*//*!*/);--tw-invert:var(--tw-empty,/*!*//*!*/);--tw-saturate:var(--tw-empty,/*!*//*!*/);--tw-sepia:var(--tw-empty,/*!*//*!*/);--tw-drop-shadow:var(--tw-empty,/*!*//*!*/);filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.blur-sm{--tw-blur:blur(4px)}.blur{--tw-blur:blur(8px)}.brightness-75{--tw-brightness:brightness(.75)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.transition{transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.delay-75{transition-delay:75ms}.delay-100{transition-delay:100ms}.delay-150{transition-delay:150ms}.delay-200{transition-delay:200ms}.duration-100{transition-duration:100ms}.duration-150{transition-duration:150ms}.duration-500{transition-duration:500ms}.duration-700{transition-duration:700ms}.ease-in-out{transition-timing-function:cubic-bezier(0.4,0,0.2,1)}.sr-only{border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0px;position:absolute;width:1px}.tmf-badge{border-radius:0.5rem;padding:0.25rem;text-transform:uppercase}.tmf-button-link{display:inline-flex;cursor:pointer;border-radius:0.25rem;padding-left:1.25rem;padding-right:1.25rem;padding-top:0.75rem;padding-bottom:0.75rem;text-decoration:none}.tmf-button-link:not([class*="transparent"]):hover{text-decoration:none}.tmf-button-link:not(.tmf-button-link_transparent),.tmf-button-link:visited:not(.tmf-button-link_transparent){--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.tailwind-article-body .portable-module .tmf-button-link:not(.tmf-button-link_transparent),.tailwind-article-body .portable-module .tmf-button-link:visited:not(.tmf-button-link_transparent){color:#fff}.tmf-button-link .tmf-icon{margin-right:0.5rem}.tmf-button-link_label{display:flex;justify-content:center;align-self:center;vertical-align:middle;font-weight:700}.tmf-button-link_primary{--tw-bg-opacity:1;background-color:rgba(0,149,200,var(--tw-bg-opacity))}.tmf-button-link_primary:hover{--tw-bg-opacity:1;background-color:rgba(53,178,214,var(--tw-bg-opacity))}.tmf-button-link_secondary{--tw-bg-opacity:1;background-color:rgba(72,92,199,var(--tw-bg-opacity))}.tmf-button-link_secondary:hover{--tw-bg-opacity:1;background-color:rgba(115,133,214,var(--tw-bg-opacity))}.tmf-button-link_tertiary{--tw-bg-opacity:1;background-color:rgba(117,59,189,var(--tw-bg-opacity))}.tmf-button-link_tertiary:hover{--tw-bg-opacity:1;background-color:rgba(144,104,204,var(--tw-bg-opacity))}.tmf-button-link_success{--tw-bg-opacity:1;background-color:rgba(67,176,42,var(--tw-bg-opacity))}.tmf-button-link_success:hover{--tw-bg-opacity:1;background-color:rgba(105,199,72,var(--tw-bg-opacity))}.tmf-button-link_danger{--tw-bg-opacity:1;background-color:rgba(249,66,58,var(--tw-bg-opacity))}.tmf-button-link_danger:hover{--tw-bg-opacity:1;background-color:rgba(251,104,110,var(--tw-bg-opacity))}.tmf-button-link_neutral{--tw-bg-opacity:1;background-color:rgba(167,168,169,var(--tw-bg-opacity))}.tmf-button-link_neutral:hover{--tw-bg-opacity:1;background-color:rgba(185,185,186,var(--tw-bg-opacity))}.tmf-button-link_transparent{background-color:transparent;--tw-text-opacity:1;color:rgba(83,86,90,1);color:rgba(83,86,90,var(--tw-text-opacity))}.tmf-button-link_transparent:visited{color:text-gray-900}tmf-button{pointer-events:none}.tmf-button{display:flex;align-self:center;border-radius:0.25rem;padding-left:1rem;padding-right:1rem;padding-top:0.75rem;padding-bottom:0.75rem;font-size:1rem;line-height:1.5rem;--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity));transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms;transition-duration:150ms;transition-timing-function:cubic-bezier(0.4,0,0.2,1)}.tailwind-article-body .portable-module .tmf-button{color:#fff}.tmf-button{text-decoration:none;pointer-events:all}.tmf-button:not([disabled]){cursor:pointer}.tmf-button_small{padding-left:0.75rem;padding-right:0.75rem;padding-top:0.5rem;padding-bottom:0.5rem}.tmf-button_primary{--tw-bg-opacity:1;background-color:rgba(0,149,200,var(--tw-bg-opacity))}.tmf-button_primary:hover{--tw-bg-opacity:1;background-color:rgba(53,178,214,var(--tw-bg-opacity))}.tmf-button_secondary{--tw-bg-opacity:1;background-color:rgba(72,92,199,var(--tw-bg-opacity))}.tmf-button_secondary:hover{--tw-bg-opacity:1;background-color:rgba(115,133,214,var(--tw-bg-opacity))}.tmf-button_tertiary{--tw-bg-opacity:1;background-color:rgba(117,59,189,var(--tw-bg-opacity))}.tmf-button_tertiary:hover{--tw-bg-opacity:1;background-color:rgba(144,104,204,var(--tw-bg-opacity))}.tmf-button_success{--tw-bg-opacity:1;background-color:rgba(67,176,42,var(--tw-bg-opacity))}.tmf-button_success:hover{--tw-bg-opacity:1;background-color:rgba(105,199,72,var(--tw-bg-opacity))}.tmf-button_danger{--tw-bg-opacity:1;background-color:rgba(249,66,58,var(--tw-bg-opacity))}.tmf-button_danger:hover{--tw-bg-opacity:1;background-color:rgba(251,104,110,var(--tw-bg-opacity))}.tmf-button_neutral,.tmf-button[disabled]{--tw-bg-opacity:1;background-color:rgba(167,168,169,var(--tw-bg-opacity))}.tmf-button_neutral:hover{--tw-bg-opacity:1;background-color:rgba(185,185,186,var(--tw-bg-opacity))}.tmf-button[disabled]{opacity:0.5;cursor:default}.tmf-chiclet{display:inline-flex;height:2.25rem;width:2.25rem;align-items:center;justify-content:center;white-space:nowrap;border-radius:0.25rem;font-size:0.75rem;line-height:1rem;text-transform:uppercase;--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity));text-decoration:none}.tailwind-article-body .portable-module .tmf-chiclet{color:#fff}.tmf-chiclet_large{height:3rem;width:3rem;--tw-border-opacity:1;border-color:rgba(255,255,255,var(--tw-border-opacity));font-size:0.875rem;line-height:1.125rem;font-weight:700;border-radius:11%;border-width:3px}.tmf-icon{display:inline-flex}.tmf-icon_small{height:1rem;width:1rem;font-size:1rem}.tmf-icon_large{height:1.5rem;width:1.5rem;font-size:1.375rem;line-height:1.625rem}.tmf-icon>[class*="fa"]{line-height:normal;line-height:initial}.tmf-service-card{display:grid;min-height:100%;width:100%;overflow:hidden;border-radius:0.5rem;border-width:1px;--tw-border-opacity:1;border-color:rgba(185,185,186,var(--tw-border-opacity));grid-template-rows:min-content}.tmf-service-card_banner{position:relative;display:block;text-decoration:none;height:50px}.tmf-service-card_banner:before{position:absolute;content:'';background:url("//g.foolcdn.com/static/ffe/images/product-list-hat.png");width:270px;height:120px;left:0;top:-33%;background-size:cover}.tmf-service-card_banner .tmf-chiclet{position:absolute;z-index:10;top:18px;right:32px}.tmf-service-card_title{margin-bottom:0.5rem;font-size:1.25rem;line-height:1.5rem;font-weight:700;line-height:1.3}.tmf-service-card_title a{--tw-text-opacity:1;color:rgba(0,107,166,1);color:rgba(0,107,166,var(--tw-text-opacity));text-decoration:none}.tmf-service-card_content{position:relative;--tw-bg-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity));padding-left:1rem;padding-right:1rem;padding-top:1.5rem;padding-bottom:1.5rem;font-size:0.875rem;line-height:1.125rem;--tw-text-opacity:1;color:rgba(83,86,90,1);color:rgba(83,86,90,var(--tw-text-opacity));line-height:1.5}.tmf-service-card_content a{--tw-text-opacity:1;color:rgba(0,107,166,1);color:rgba(0,107,166,var(--tw-text-opacity));text-decoration:none}.tmf-service-card_title a:hover,.tmf-service-card_content a:hover{text-decoration:underline}.tmf-stockperf{display:inline-flex;font-size:0.875rem;--tw-text-opacity:1;color:rgba(33,149,47,1);color:rgba(33,149,47,var(--tw-text-opacity))}.tmf-stockperf_large{font-size:1.25rem;line-height:1.5rem}.tmf-stockperf_negative{--tw-text-opacity:1;color:rgba(216,39,52,1);color:rgba(216,39,52,var(--tw-text-opacity))}[class*="tmf-h1"]{font-family:Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;font-size:2rem;line-height:2.5rem;font-weight:400}[class*="tmf-h2"]{font-family:Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;font-size:2.25rem;font-weight:400}[class*="tmf-h3"]{font-family:Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;font-size:1.75rem;line-height:2rem;font-weight:400}[class*="tmf-h4"]{font-family:Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;font-size:1.75rem;font-weight:400}[class*="tmf-h5"]{font-family:Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;font-size:1.375rem;line-height:1.625rem;font-weight:400}[class*="tmf-h6"]{font-family:Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;font-size:1.25rem;line-height:1.5rem;font-weight:400}.tmf-p,[class*="tmf-p_"],[class*="tmf-p-"]{font-family:Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;font-size:1rem}[class*="tmf-p-xl"]{font-size:1.125rem;line-height:2rem}[class*="tmf-p-md"]{font-size:0.875rem;line-height:1.125rem}[class*="tmf-p-sm"]{font-size:0.75rem;line-height:1rem}@media (min-width:48em){[class*="tmf-h1"]{font-size:3.75rem;line-height:4rem}[class*="tmf-h2"]{font-size:2.75rem;line-height:3rem}[class*="tmf-h3"]{font-size:2rem;line-height:2.5rem}[class*="tmf-h4"]{font-size:1.75rem;line-height:2rem}}[class*="_serif"]{font-family:Georgia,Cambria,Times New Roman,Times,serif}[class*="_block"]{font-family:Oswald,sans-serif}[class*="tmf-h1"],[class*="tmf-h2"],[class*="tmf-h3"],[class*="tmf-h6"]{line-height:1.3}.tmf-p,[class*="tmf-p-"],[class*="tmf-p_"],[class*="tmf-h5"]{line-height:1.5}[class*="tmf-h4"]{line-height:1.3125}[class*="tmf-p-sm"]{line-height:1.3333333333}[class*="tmf-p-xl"]{line-height:1.5555555556}.tmf-p[class*="_serif"],[class*="tmf-p-"][class*="_serif"],[class*="tmf-p_"][class*="_serif"]{line-height:2}[class*="_thin"]{font-weight:200}{font-weight:200}[class*="_bold"]{font-weight:700}[class*="_serif"][class*="_bold"]{font-weight:600}[class*="tmf-h1"][class*="_block"],[class*="tmf-h2"][class*="_block"],[class*="tmf-h3"][class*="_block"],[class*="tmf-h4"][class*="_block"]{text-transform:uppercase}a{--tw-text-opacity:1;color:rgba(0,107,166,1);color:rgba(0,107,166,var(--tw-text-opacity));text-decoration:none}a.hover{--tw-text-opacity:1;color:rgba(23,83,129,1);color:rgba(23,83,129,var(--tw-text-opacity))}.article .article-section{margin-top:1.25rem;padding-top:3.75rem}.article .article-section:first-child{margin-top:1.25rem;padding-top:3.75rem}.article h2{font-size:1.5rem;font-weight:700;--tw-text-opacity:1;color:rgba(138,140,142,1);color:rgba(138,140,142,var(--tw-text-opacity))}.article p,.article li,.article .article-section table tbody td{margin-top:1.5rem;font-size:1.125rem;line-height:1.625rem;--tw-text-opacity:1;color:rgba(138,140,142,1);color:rgba(138,140,142,var(--tw-text-opacity))}.article ul,.article ol{margin-top:1.5rem}.article .disclosure p{font-size:0.875rem;line-height:1.625rem;--tw-text-opacity:1;color:rgba(185,185,186,1);color:rgba(185,185,186,var(--tw-text-opacity))}.general-article .article-section:first-child h2{display:none}.general-article .article-section:first-child h2 + p{margin-top:0}.article :target::before,.rec-article:target::before{content:'';display:block;height:100px;margin-top:-80px}.recs-back-link{line-height:14px}.weekly-recs .footer{padding-bottom:15rem}@media (min-width:40em){.article :target::before{height:20px;margin-top:-20px}.article .article-section{margin-top:3.75rem;padding-top:0}.article .article-section:first-child{margin-top:1.25rem;padding-top:0}.weekly-recs .footer{padding-bottom:2rem}}.article .article-section table{margin-top:1.5rem;width:100%}.article .article-section table thead{text-align:left;font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;--tw-text-opacity:1;color:rgba(138,140,142,1);color:rgba(138,140,142,var(--tw-text-opacity))}.article .article-section table th,.article .article-section table td{padding-top:1rem;padding-right:0.5rem}.article .article-section .caption{font-size:0.75rem;letter-spacing:0.03em;color:rgba(0,0,0,0.38)}.article .article-section .image{float:right;width:50%;padding-top:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem}.article .article-section .image .caption{margin-top:0}.btn,.btn-transparent,.btn-transparent-dark,.btn-transparent-light{display:block}.btn,.btn-transparent,.btn-transparent-dark,.btn-transparent-light{border-color:transparent}.btn,.btn-transparent,.btn-transparent-dark,.btn-transparent-light{border-width:1px}.btn,.btn-transparent,.btn-transparent-dark,.btn-transparent-light{font-weight:700}.btn,.btn-transparent,.btn-transparent-dark,.btn-transparent-light{line-height:1}.btn,.btn-transparent,.btn-transparent-dark,.btn-transparent-light{padding:0.875rem}.btn,.btn-transparent,.btn-transparent-dark,.btn-transparent-light{border-radius:0.5rem}.btn-transparent,.btn-transparent-dark,.btn-transparent-light{transition-property:background-color,border-color,color,fill,stroke;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}a.btn,a.btn-transparent,a.btn-transparent-dark{text-decoration:none}.btn{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;--tw-bg-opacity:1;background-color:rgba(159,174,229,var(--tw-bg-opacity));--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.tailwind-article-body .portable-module .btn{color:#fff}.btn{transition-property:background-color,border-color,color,fill,stroke;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.btn:hover,.btn:focus{--tw-bg-opacity:1;background-color:rgba(72,92,199,var(--tw-bg-opacity))}.btn:hover,.btn:focus{border-color:rgba(255,255,255,0.2)}.btn:hover,.btn:focus{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.btn{.tailwind-article-body .portable-module &:hover,.tailwind-article-body .portable-module &:focus{color:#fff}}.btn-transparent{--tw-text-opacity:1;color:rgba(183,194,236,1);color:rgba(183,194,236,var(--tw-text-opacity))}.btn-transparent:hover,.btn-transparent:focus{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.btn-transparent{.tailwind-article-body .portable-module &:hover,.tailwind-article-body .portable-module &:focus{color:#fff}}.btn-transparent-dark{--tw-text-opacity:1;color:rgba(159,174,229,1);color:rgba(159,174,229,var(--tw-text-opacity))}.btn-transparent-dark:hover,.btn-transparent-dark:focus{--tw-text-opacity:1;color:rgba(72,92,199,1);color:rgba(72,92,199,var(--tw-text-opacity))}.btn-transparent-light{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.tailwind-article-body .portable-module .btn-transparent-light{color:#fff}.btn-transparent-light:hover,.btn-transparent-light:focus{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.btn-transparent-light{.tailwind-article-body .portable-module &:hover,.tailwind-article-body .portable-module &:focus{color:#fff}}.btn-rounded{border-radius:9999px;border-width:2px;--tw-border-opacity:1;border-color:rgba(255,255,255,var(--tw-border-opacity));padding-left:1.5rem;padding-right:1.5rem;padding-top:0.75rem;padding-bottom:0.75rem;font-size:0.875rem;font-weight:700;--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.tailwind-article-body .portable-module .btn-rounded{color:#fff}.btn-rounded{transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.color-hr::before,.color-hr-borderless::before{--tw-bg-opacity:1;background-color:rgba(159,174,229,var(--tw-bg-opacity))}.color-hr::after,.color-hr-borderless::after{}.color-hr hr,.color-hr-borderless hr{margin:0}.color-hr hr::before,.color-hr-borderless hr::before{--tw-bg-opacity:1;background-color:rgba(255,141,161,var(--tw-bg-opacity))}.color-hr hr::after,.color-hr-borderless hr::after{--tw-bg-opacity:1;background-color:rgba(227,246,216,var(--tw-bg-opacity))}.color-hr{border-bottom-width:1px;border-color:rgba(0,0,0,0.16);padding-left:2.5rem}.color-hr,.color-hr-borderless,.color-hr hr,.color-hr-borderless hr{display:flex}.color-hr,.color-hr-borderless,.color-hr hr,.color-hr-borderless hr{align-items:center}.color-hr::before,.color-hr::after,.color-hr-borderless::before,.color-hr-borderless::after,.color-hr hr::before,.color-hr hr::after,.color-hr-borderless hr::before,.color-hr-borderless hr::after{content:''}.color-hr::before,.color-hr::after,.color-hr-borderless::before,.color-hr-borderless::after,.color-hr hr::before,.color-hr hr::after,.color-hr-borderless hr::before,.color-hr-borderless hr::after{box-sizing:content-box}.color-hr::before,.color-hr::after,.color-hr-borderless::before,.color-hr-borderless::after,.color-hr hr::before,.color-hr hr::after,.color-hr-borderless hr::before,.color-hr-borderless hr::after{display:block}.color-hr::before,.color-hr::after,.color-hr-borderless::before,.color-hr-borderless::after,.color-hr hr::before,.color-hr hr::after,.color-hr-borderless hr::before,.color-hr-borderless hr::after{height:1px;width:2rem}.color-hr::before,.color-hr::after,.color-hr-borderless::before,.color-hr-borderless::after,.color-hr hr::before,.color-hr hr::after,.color-hr-borderless hr::before,.color-hr-borderless hr::after{margin-bottom:-1px}.color-hr::before,.color-hr::after,.color-hr-borderless::before,.color-hr-borderless::after,.color-hr hr::before,.color-hr hr::after,.color-hr-borderless hr::before,.color-hr-borderless hr::after{border-right-width:1px;border-left-width:1px;--tw-border-opacity:1;border-color:rgba(255,255,255,var(--tw-border-opacity))}.color-hr-logo{height:1px;margin-left:0.75rem;margin-right:0.75rem;position:relative}.color-hr-logo::before,.color-hr-logo::after{content:''}.color-hr-logo::before,.color-hr-logo::after{position:absolute}.color-hr-logo::before,.color-hr-logo::after{bottom:0}.color-hr-logo::before,.color-hr-logo::after{display:block}.color-hr-logo::before,.color-hr-logo::after{height:1px}.color-hr-logo::before,.color-hr-logo::after{border-right-width:1px;border-left-width:1px;--tw-border-opacity:1;border-color:rgba(255,255,255,var(--tw-border-opacity))}.color-hr-logo::before{left:0}.color-hr-logo::after{right:0}.color-hr-logo::before,.color-hr-logo::after{width:25%}.color-hr-logo::before{--tw-bg-opacity:1;background-color:rgba(159,174,229,var(--tw-bg-opacity))}.color-hr-logo::after{}.color-hr-logo hr{position:absolute;bottom:0;display:flex;height:1px;left:25%;margin:0;width:50%}.color-hr-logo hr::before,.color-hr-logo hr::after{content:''}.color-hr-logo hr::before,.color-hr-logo hr::after{display:block}.color-hr-logo hr::before,.color-hr-logo hr::after{height:1px}.color-hr-logo hr::before,.color-hr-logo hr::after{border-right-width:1px;border-left-width:1px;--tw-border-opacity:1;border-color:rgba(255,255,255,var(--tw-border-opacity))}.color-hr-logo hr::before,.color-hr-logo hr::after{width:50%}.color-hr-logo hr::before{--tw-bg-opacity:1;background-color:rgba(255,141,161,var(--tw-bg-opacity))}.color-hr-logo hr::after{--tw-bg-opacity:1;background-color:rgba(227,246,216,var(--tw-bg-opacity))}.report-body p{margin-top:1.5rem;margin-bottom:1.5rem}.report-body h2,.report-body h3{margin-top:2.5rem;margin-bottom:1.25rem;font-size:1.25rem;text-transform:uppercase}.report-body li{margin-top:1.5rem;margin-bottom:1.5rem}.report-body aside{display:none}small>p{font-size:.75rem;line-height:1.375rem}.multiselect{border-radius:0.5rem;position:relative;z-index:10}.multiselect__tags{--tw-bg-opacity:1;background-color:rgba(237,238,238,var(--tw-bg-opacity));border-width:1px;--tw-border-opacity:1;border-color:rgba(237,238,238,var(--tw-border-opacity));padding-top:1rem;padding-bottom:1rem;padding-right:3.5rem;padding-left:1.5rem;position:relative;border-radius:0.5rem;z-index:10}.multiselect__input{background-color:transparent;padding:0}.multiselect__input::-moz-placeholder{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.multiselect__input::placeholder{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.multiselect__placeholder{display:block;color:rgba(0,0,0,0.38);overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.multiselect__single{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.multiselect__search-icon{position:absolute;display:flex;align-items:center;top:0;bottom:0;margin-right:1.5rem;color:rgba(0,0,0,0.38);top:0;right:0;z-index:20}.multiselect__search-icon svg{display:block}.multiselect__content-wrapper{position:absolute;display:block;overflow:auto;left:0;right:0;top:100%}.multiselect--above .multiselect__content-wrapper{top:auto;bottom:100%}.multiselect__content{box-shadow:0px 2px 10px rgba(52,58,64,0.08);--tw-bg-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity));border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-color:rgba(0,0,0,0.16);list-style-type:none;overflow:hidden;padding:0;border-bottom-right-radius:0.5rem;border-bottom-left-radius:0.5rem;width:100%;display:block!important}.multiselect--above .multiselect__content{border-top-width:1px;border-bottom-width:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-top-left-radius:0.5rem;border-top-right-radius:0.5rem}.multiselect__option{cursor:pointer}.multiselect__option--highlight{display:block;--tw-bg-opacity:1;background-color:rgba(237,238,238,var(--tw-bg-opacity))}.multiselect--active.multiselect{box-shadow:0px 2px 10px rgba(52,58,64,0.08)}.multiselect--active .multiselect__search-icon{--tw-text-opacity:1;color:rgba(185,185,186,1);color:rgba(185,185,186,var(--tw-text-opacity))}.multiselect--active .multiselect__tags{--tw-bg-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity));border-color:rgba(0,0,0,0.16);border-bottom-right-radius:0;border-bottom-left-radius:0}.multiselect--active.multiselect--above .multiselect__tags{border-bottom-right-radius:0.5rem;border-bottom-left-radius:0.5rem;border-top-left-radius:0;border-top-right-radius:0}.multiselect-full{border-radius:0}.multiselect-full .multiselect__tags{background-color:rgba(0,0,0,0.08);border-style:none;border-radius:0}.multiselect-full .multiselect__content{border-style:none;border-radius:0}.multiselect-full .multiselect__option--highlight{background-color:rgba(0,0,0,0.08)}.multiselect-full.multiselect--active .multiselect__tags{--tw-bg-opacity:1;background-color:rgba(237,238,238,var(--tw-bg-opacity))}.add-stock-gizmo .multiselect__tags{background-color:rgba(0,0,0,0.16);border-color:transparent}.add-stock-gizmo .multiselect__placeholder{color:rgba(255,255,255,0.5)}.add-stock-gizmo .multiselect__input{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.add-stock-gizmo{.tailwind-article-body .portable-module & .multiselect__input{color:#fff}}.add-stock-gizmo .multiselect__clear-icon{position:absolute;top:0;right:0;padding-left:1.25rem;padding-right:1.25rem;z-index:20;padding-top:18px;padding-bottom:18px}.add-stock-gizmo .multiselect__content-wrapper{position:static;max-height:400px!important;overflow-y:auto;padding-right:15px;margin-top:14px;scrollbar-color:#80DBFF rgba(0,0,0,0.20);scrollbar-width:thin}.add-stock-gizmo .multiselect__content{border-style:none;border-radius:0;background-color:transparent;--tw-shadow:0 0 rgba(0,0,0,0);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow)}.add-stock-gizmo .multiselect__option{display:block}.add-stock-gizmo .multiselect__option--highlight{background-color:transparent}.add-stock-gizmo .multiselect__option--highlight .multiselect__option__heading,.add-stock-gizmo .multiselect__option--highlight svg{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.add-stock-gizmo .multiselect__option--highlight{.tailwind-article-body .portable-module & .multiselect__option__heading,.tailwind-article-body .portable-module & svg{color:#fff}}.add-stock-gizmo.multiselect--active{--tw-shadow:0 0 rgba(0,0,0,0);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow)}.add-stock-gizmo.multiselect--active .multiselect__tags{border-color:transparent;border-radius:0.5rem}.add-stock-gizmo ::-webkit-scrollbar{background:rgba(0,0,0,0.20);border-radius:5px;width:8px}.add-stock-gizmo ::-webkit-scrollbar-thumb{background:#80DBFF;height:60px;border-radius:5px}.self-end{justify-self:end}html{scroll-behavior:smooth;text-rendering:optimizelegibility;-webkit-font-smoothing:antialiased;line-height:1.5;color:#53565A}h1,h2,h3,h4,h5,h6{font-family:"Roboto",sans-serif}h1{letter-spacing:-1px}header h1{margin-bottom:0}b,strong{font-weight:bold}ul,ol{margin:0;padding:0;list-style-type:none}hr{border-bottom:1px solid #e8e8e8;margin:1.5em 0}blockquote{background-image:url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOTUiIGhlaWdodD0iOTAiIHZpZXdCb3g9IjAgMCA5NSA5MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMTcuOTIgMC43OTk4MDVDMjQuMzIgMC43OTk4MDUgMjkuMzMzMyAzLjE0NjQ3IDMyLjk2IDcuODM5ODFDMzYuNTg2NyAxMi41MzMxIDM4LjQgMTguNTA2NSAzOC40IDI1Ljc1OThDMzguNCAzMS4wOTMxIDM3LjQ0IDM3LjQ5MzIgMzUuNTIgNDQuOTU5OEMzMy42IDUyLjIxMzIgMzAuNzIgNTkuNzg2NSAyNi44OCA2Ny42Nzk4QzIzLjA0IDc1LjU3MzIgMTguMTMzMyA4Mi44MjY1IDEyLjE2IDg5LjQzOThMNC4xNiA4My4wMzk4QzcuNzg2NjcgNzguNzczMSAxMC44OCA3My43NTk4IDEzLjQ0IDY3Ljk5OThDMTYuMjEzMyA2Mi4yMzk4IDE4LjM0NjcgNTYuMjY2NSAxOS44NCA1MC4wNzk4QzIxLjMzMzMgNDMuNjc5OCAyMi4wOCAzNy43MDY1IDIyLjA4IDMyLjE1OThDMjEuMDEzMyAzMi4zNzMxIDE5Ljg0IDMyLjY5MzEgMTguNTYgMzMuMTE5OEMxNy4yOCAzMy4zMzMxIDE1Ljc4NjcgMzMuNDM5OCAxNC4wOCAzMy40Mzk4QzEwLjAyNjcgMzMuNDM5OCA2LjYxMzMzIDMxLjk0NjUgMy44NCAyOC45NTk4QzEuMjggMjUuOTczMSAwIDIyLjU1OTggMCAxOC43MTk4QzAgMTIuOTU5OCAxLjcwNjY3IDguNTg2NDggNS4xMiA1LjU5OThDOC43NDY2NyAyLjM5OTggMTMuMDEzMyAwLjc5OTgwNSAxNy45MiAwLjc5OTgwNVpNNzQuMjQgMC43OTk4MDVDODAuNjQgMC43OTk4MDUgODUuNjUzMyAzLjE0NjQ3IDg5LjI4IDcuODM5ODFDOTIuOTA2NyAxMi41MzMxIDk0LjcyIDE4LjUwNjUgOTQuNzIgMjUuNzU5OEM5NC43MiAzMS4wOTMxIDkzLjc2IDM3LjQ5MzIgOTEuODQgNDQuOTU5OEM4OS45MiA1Mi4yMTMyIDg3LjA0IDU5Ljc4NjUgODMuMiA2Ny42Nzk4Qzc5LjM2IDc1LjU3MzIgNzQuNDUzMyA4Mi44MjY1IDY4LjQ4IDg5LjQzOThMNjAuNDggODMuMDM5OEM2NC4xMDY3IDc4Ljc3MzEgNjcuMiA3My43NTk4IDY5Ljc2IDY3Ljk5OThDNzIuNTMzMyA2Mi4yMzk4IDc0LjY2NjcgNTYuMjY2NSA3Ni4xNiA1MC4wNzk4Qzc3LjY1MzMgNDMuNjc5OCA3OC40IDM3LjcwNjUgNzguNCAzMi4xNTk4Qzc3LjMzMzMgMzIuMzczMSA3Ni4xNiAzMi42OTMxIDc0Ljg4IDMzLjExOThDNzMuNiAzMy4zMzMxIDcyLjEwNjcgMzMuNDM5OCA3MC40IDMzLjQzOThDNjYuMzQ2NyAzMy40Mzk4IDYyLjkzMzMgMzEuOTQ2NSA2MC4xNiAyOC45NTk4QzU3LjYgMjUuOTczMSA1Ni4zMiAyMi41NTk4IDU2LjMyIDE4LjcxOThDNTYuMzIgMTIuOTU5OCA1OC4wMjY3IDguNTg2NDggNjEuNDQgNS41OTk4QzY1LjA2NjcgMi4zOTk4IDY5LjMzMzMgMC43OTk4MDUgNzQuMjQgMC43OTk4MDVaIiBmaWxsPSIjRjZGNkY2Ii8+PC9zdmc+');background-position:top right;background-repeat:no-repeat;margin-bottom:2rem;border-left-width:4px;--tw-border-opacity:1;border-color:rgba(255,184,28,var(--tw-border-opacity));padding-left:1.5rem;font-family:Georgia,Cambria,Times New Roman,Times,serif;font-size:1.125rem;line-height:2rem;font-style:italic;--tw-text-opacity:1;color:rgba(138,140,142,1);color:rgba(138,140,142,var(--tw-text-opacity))}.tailwind-article-body .portable-module p.text-10blockquote{font-size:10px;font-style:italic;line-height:1.5;margin-bottom:.25rem}cite{font-family:Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;font-size:0.875rem;line-height:1.125rem;font-style:normal;--tw-text-opacity:1;color:rgba(167,168,169,1);color:rgba(167,168,169,var(--tw-text-opacity))}.no-tw h2{margin-top:.83em;margin-bottom:.83em}.no-tw h3{margin-top:1em;margin-bottom:1em}.no-tw h4{margin-top:1.33em;margin-bottom:1.33em}p{font-size:1em;line-height:1.5;margin-bottom:1em}.font-custom-serif>p>p{font-family:"Merriweather",serif;font-size:17px;line-height:1.7}@media screen and (max-width:768px){.font-custom-serif>p>p{font-size:14px}}.font-custom-serif>p>p{margin-top:1.25rem;margin-bottom:1.25rem}.font-custom-serif>p>p:first-child{margin-top:0}.article-call-out-box>*{margin-top:1.25rem;margin-bottom:1.25rem}.bg-gradient-brand{background-image:linear-gradient(45deg,#fafafa,#f3f3f3)}.premium-container{background-clip:padding-box}.artificial-intelligence-color{color:#E31C79}.augmented-reality-color{color:#E31C79}.blast-off-2020-color{color:#753BBD}.blast-off-color{color:#753BBD}.boss-mode-color{color:#43B02A}.cloud-disruptors-2020-color{color:#43B02A}.everlasting-portfolio-color{color:#43B02A}.explorer-color{color:#753BBD}.fintech-fortunes-color{color:#E31C79}.future-of-entertainment-color{color:#E31C79}.global-partners-color{color:#43B02A}.ipo-trailblazers-color{color:#43B02A}.discovery-long-short-portfolio-color{color:#43B02A}.marijuana-masters{color:#E31C79}.market-pass-color{color:#FFB81C}.discovery-moneymakers-color{color:#43B02A}.one-color{color:#FFB81C}.options-color{color:#485CC7}.discovery-partnership-portfolio-color{color:#43B02A}.premier-pass-color{color:#FFB81C}.rule-breakers-color{color:#FF6900}.rising-stars-color{color:#43B02A}.rule-your-retirement-color{color:#485CC7}.starshot-color{color:#753BBD}.stock-advisor-color{color:#0095C8}.supernova-color{color:#753BBD}.total-income-color{color:#485CC7}.top-stock-color{color:#0095C8}.next-gen-supercycle-color{color:#E31C79}.trend-spotter-color{color:#E31C79}.ownership-portfolio-color{color:#43B02A}.extreme-opportunities-platinum-color{color:#E31C79}.real-estate-winners-color{color:#154734}.mogul-color{color:#154734}.everlasting-stocks-color{color:#43B02A}.stock-advisor-rule-breakers-bundle-color{color:#0095C8}.chiclet:after{color:#fff;display:flex;text-transform:uppercase;vertical-align:middle;height:100%;justify-content:center;align-items:center}.chiclet-1062{background-color:#485cc7}.chiclet-1062:after{content:"ryr"}.chiclet-1069{background-color:#cf4520}.chiclet-1069:after{content:"rb"}.chiclet-1081{background-color:#006ba6}.chiclet-1081:after{content:"sa"}.chiclet-1228{background-color:#485cc7}.chiclet-1228:after{content:"pro"}.chiclet-1255{background-color:#ffb81c}.chiclet-1255:after{content:"one"}.chiclet-1321{background-color:#485cc7}.chiclet-1321:after{content:"opt"}.chiclet-4003{background-color:#485cc7}.chiclet-4003:after{content:"ti"}.chiclet-4009{background-color:#007a33}.chiclet-4009:after{content:"nhrs"}.chiclet-4027{background-color:#ffb81c}.chiclet-4027:after{content:"mp"}.chiclet-4039{background-color:#007a33}.chiclet-4039:after{content:"rs"}.chiclet-4053{background-color:#007a33}.chiclet-4053:after{content:"ep"}.chiclet-4069{background-color:#cf4520}.chiclet-4069:after{content:"cry"}.chiclet-4076{background-color:#007a33}.chiclet-4076:after{content:"pp"}.chiclet-4087{background-color:#007a33}.chiclet-4087:after{content:"gp"}.chiclet-4092{background-color:#cf4520}.chiclet-4092:after{content:"mj"}.chiclet-4094{background-color:#007a33}.chiclet-4094:after{content:"mm"}.chiclet-4096{background-color:#007a33}.chiclet-4096:after{content:"ipo"}.chiclet-4099{background-color:#485cc7}.chiclet-4099:after{content:"up"}.chiclet-4100{background-color:#154734}.chiclet-4100:after{content:"mog"}.chiclet-4102{background-color:#cf4520}.chiclet-4102:after{content:"bl19"}.chiclet-4123{background-color:#cf4520}.chiclet-4123:after{content:"ai"}.chiclet-4126{background-color:#cf4520}.chiclet-4126:after{content:"ar"}.chiclet-4135{background-color:#007a33}.chiclet-4135:after{content:"rs20"}.chiclet-4143{background-color:#cf4520}.chiclet-4143:after{content:"bl20"}.chiclet-4151{background-color:#007a33}.chiclet-4151:after{content:"cd20"}.chiclet-4155{background-color:#007a33}.chiclet-4155:after{content:"boss"}.chiclet-4157{background-color:#cf4520}.chiclet-4157:after{content:"foe"}.chiclet-4176{background-color:#cf4520}.chiclet-4176:after{content:"ng"}.chiclet-4177{background-color:#cf4520}.chiclet-4177:after{content:"rbp"}.chiclet-4189{background-color:#006ba6}.chiclet-4189:after{content:"te"}.chiclet-4191{background-color:#154734}.chiclet-4191:after{content:"rew"}.chiclet-4192{background-color:#007a33}.chiclet-4192:after{content:"op"}.chiclet-4193{background-color:#cf4520}.chiclet-4193:after{content:"tr"}.chiclet-4198{background-color:#007a33}.chiclet-4198:after{content:"es"}.chiclet-4209{background-color:#cf4520}.chiclet-4209:after{content:"bl"}.chiclet-4211{background-color:#cf4520}.chiclet-4211:after{content:"ff"}.chiclet-4213{background-color:#007a33}.chiclet-4213:after{content:"rs"}.chiclet-4222{background-color:#cf4520}.chiclet-4222:after{content:"bl21"}.chiclet-4231{background-color:#007a33}.chiclet-4231:after{content:"ten"}.chiclet-4253{background-color:#007a33}.chiclet-4253:after{content:"rs21"}.chiclet-4264{background-color:#154734}.chiclet-4264:after{content:"ret"}.chiclet-4274{background-color:#ffb81c}.chiclet-4274:after{content:"bst"}.chiclet-4282{background-color:#cf4520}.chiclet-4282:after{content:"bb"}.chiclet-4290{background-color:#007a33}.chiclet-4290:after{content:"saas"}.chiclet-4299{background-color:#006ba6}.chiclet-4299:after{content:"eb"}.chiclet-4305{background-color:#cf4520}.chiclet-4305:after{content:"ei"}.chiclet-4311{background-color:#007a33}.chiclet-4311:after{content:"fc"}.chiclet-4324{background-color:#485cc7}.chiclet-4324:after{content:"de"}.chiclet-4343{background-color:#007a33}.chiclet-4343:after{content:"vr"}.chiclet-4344{background-color:#cf4520}.chiclet-4344:after{content:"bl22"}.chiclet-4346{background-color:#485cc7}.chiclet-4346:after{content:"sd22"}.chiclet-4426{background-color:#007a33}.chiclet-4426:after{content:"rs22"}.chiclet-4017{background-color:#0095c8}.chiclet-4017:after{content:"srb"}.tw.content-container{font-family:"Roboto",sans-serif;margin:0;max-width:none}.footer{font-family:"Roboto",sans-serif}.tailwind-article-body h2{font-size:2rem}.tailwind-article-body a{color:#2680B7}.tailwind-article-body a:hover{color:#35B2D6}.tailwind-article-body p.caption{font-size:.8rem;color:#6F7173}.article-disclosure a{color:#2680B7}.article-disclosure a:hover{color:#35B2D6}.contact-form input[type="text"],.contact-form [type="email"],.contact-form textarea,.contact-form select,.password-form input[type="password"]{width:100%;padding:12px;border:1px solid #DCDCDD;border-width:100%;border-radius:4px;background-color:#FAFAFA}.tailwind-article-body ul,.tailwind-article-body ol{margin-left:0;padding-left:0}.tailwind-article-body ul.errorlist{color:#BA032F}.tailwind-article-body{color:#1C1D20}.tailwind-article-body p,.tailwind-article-body ol,.tailwind-article-body ul{font-size:1.125rem;line-height:2rem;margin-bottom:1.5rem;color:#1C1D20}.tailwind-article-body h2,.tailwind-article-body h3{font-weight:500;color:#1C1D20;line-height:1.2}.tw .tailwind-article-body ol{list-style-type:decimal;padding-left:2.25rem}.tw .tailwind-article-body ul{list-style-type:disc;padding-left:1.75rem}.tw .tailwind-article-body .company-card-vue-component ul{list-style-type:none;margin-bottom:0}.tw .tailwind-article-body .company-card-vue-component li{margin-bottom:0}.tw .tailwind-article-body li{margin-bottom:1rem}.tailwind-article-body .interad{margin-bottom:2rem;text-align:center}.tailwind-article-body .interad:empty{margin:0}.interad{display:flex;justify-content:center}.ad{padding:3% 0;text-align:center}.tw .directory-nav-bar a.active{color:#1C1D20;background-color:#FFFFFF}.tw .fixed-definition-navbar-desktop{position:fixed;top:100px;left:0;right:0;padding-bottom:16px;z-index:30;animation-name:popout;animation-duration:0.4s;box-shadow:0 0 12px rgba(0,0,0,0.2);background:rgba(252,252,252,1)}.tw .fixed-definition-navbar-mobile{position:fixed;top:56px;left:0;right:0;padding:20px;z-index:30;animation-name:popout;animation-duration:0.4s;box-shadow:0 0 12px rgba(0,0,0,0.2);background:#fafafa}.tw .definition-list ul{-moz-column-count:1;column-count:1}@media screen and (min-width:768px){.tw .definition-list ul{-moz-column-count:3;column-count:3}}@media screen and (min-width:1025px){.tw .definition-list ul{-moz-column-count:4;column-count:4}}.generic-page-content p{margin-bottom:2rem}.generic-page-content h2{margin-top:3rem}.generic-page-content h2,.generic-page-content h3,.generic-page-content h4{margin-bottom:1.5rem}.tailwind-article-body .portable-module{margin-bottom:2rem}.tailwind-article-body .portable-module p{font-size:1rem;line-height:1.5;margin-bottom:1rem}.tailwind-article-body .portable-module ul{margin-bottom:1rem;padding-left:1.5rem}.tailwind-article-body .portable-module li{margin-bottom:0;font-size:1rem}.tailwind-article-body .portable-module .text-white{color:#fff}.tailwind-article-body .portable-module h2{font-size:0.875rem;font-weight:700}.tailwind-article-body .portable-module p.text-10.italic{font-size:10px;font-style:italic;line-height:1.5;margin-bottom:.25rem}.tailwind-article-body .image.imgR{float:right;padding-top:3rem;width:240px}.tailwind-article-body .new-ad-style:before{content:'Advertisement';font-size:10px;color:#53565A;position:absolute;top:6px;left:0;right:0;margin-left:auto;margin-right:auto;width:100%}@media screen and (max-width:768px){.tailwind-article-body .new-ad-style:before{position:static}}.tw .video-wrapper{position:relative;padding-bottom:56.25%;padding-top:25px;height:0}.tw .video-wrapper iframe,.tw .video-wrapper object,.tw .video-wrapper embed{position:absolute;top:0;left:0;width:100%;height:100%}.promobox-content p{margin:0 0 0.75em}.tw #article_sidebar_small-container{border-color:rgba(220,220,221);border-width:1px;box-shadow:rgba(0,0,0,0) 0px 0px 0px 0px,rgba(0,0,0,0) 0px 0px 0px 0px,rgba(0,0,0,0.1) 4px 4px 10px 0px;display:flex;padding:16px}.tw #article_sidebar_small-container img{height:60px!important;margin-right:16px;max-width:none;width:48px!important}.tw #article_sidebar_small-container .right{display:flex;flex-direction:column;position:relative}.tw #article_sidebar_small-container h3{font-size:16px;font-weight:700;line-height:1.25;margin-bottom:0}.tw #article_sidebar_small-container .cta{bottom:0;color:#006ab6;display:block;font-size:12px;font-weight:normal;margin-left:6.5rem;position:absolute}.tw #article_sidebar_small-container .return{bottom:0;color:rgb(0,122,51);font-size:12px;position:absolute}.hover-trigger:hover .hover-target-cyan-700{color:#0095C8}.wagtail-ecap .email{margin-bottom:0.5rem;width:100%;border-radius:0.25rem;padding:1rem;font-size:1.125rem;line-height:1.375rem;--tw-shadow:2px 2px 10px rgba(0,0,0,0.16);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow)}@media (min-width:48em){.wagtail-ecap .email{margin-bottom:0;width:50%}}.wagtail-ecap label{margin-right:1rem;width:100%}@media (min-width:48em){.wagtail-ecap label{width:50%}}.wagtail-ecap label .email{width:100%}.wagtail-ecap label .error{margin-bottom:0.75rem;--tw-bg-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity));padding:0.5rem;font-size:0.75rem;line-height:1rem;font-style:italic;--tw-text-opacity:1;color:rgba(186,3,47,1);color:rgba(186,3,47,var(--tw-text-opacity))}.tailwind-article-body .portable-module p.text-10.wagtail-ecap label .error{font-size:10px;font-style:italic;line-height:1.5;margin-bottom:.25rem}.wagtail-ecap .foolcom-btn{width:100%}@media (min-width:48em){.wagtail-ecap .foolcom-btn{width:auto}}.wagtail-ecap .disclosure{margin-top:1rem;font-size:0.625rem;line-height:0.75rem;font-style:italic}.tailwind-article-body .portable-module p.text-10.wagtail-ecap .disclosure{font-size:10px;font-style:italic;line-height:1.5;margin-bottom:.25rem}.wagtail-ecap.blue-background .disclosure{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.tailwind-article-body .portable-module .wagtail-ecap.blue-background .disclosure{color:#fff}.wagtail-ecap.blue-background .disclosure a{--tw-text-opacity:1;color:rgba(255,255,255,1);color:rgba(255,255,255,var(--tw-text-opacity))}.tailwind-article-body .portable-module .wagtail-ecap.blue-background .disclosure a{color:#fff}.wagtail-ecap.gray-background label{flex-grow:1}.wagtail-ecap.gray-background label .error{--tw-bg-opacity:1;background-color:rgba(250,250,250,var(--tw-bg-opacity))}@media (min-width:64em){.foolcom-grid-content-sidebar{display:grid;grid-template-columns:minmax(0,880px) minmax(300px,1fr);justify-content:space-between;grid-gap:2rem;gap:2rem}}@media (min-width:80em){.foolcom-grid-content-sidebar{grid-gap:5rem;gap:5rem}}@media (min-width:64em){.foolcom-grid-toc-content-sidebar{display:grid;grid-template-columns:148px minmax(0,768px) 300px;justify-content:space-between;grid-gap:2rem;gap:2rem}}.foolcom-grid-toc-content{margin-left:auto;margin-right:auto;max-width:66.25rem}@media (min-width:64em){.foolcom-grid-toc-content{display:grid;grid-template-columns:148px minmax(0,880px);justify-content:space-between;grid-gap:2rem;gap:2rem}}.foolcom-grid-content-only{margin-left:auto;margin-right:auto;max-width:55rem}@media (min-width:40em){.sm\:col-span-2{grid-column:span 2 / span 2}.sm\:col-span-3{grid-column:span 3 / span 3}.sm\:col-span-4{grid-column:span 4 / span 4}.sm\:mx-auto{margin-left:auto;margin-right:auto}.sm\:mb-0px{margin-bottom:0}.sm\:mb-36px{margin-bottom:2.25rem}.sm\:block{display:block}.sm\:flex{display:flex}.sm\:grid{display:grid}.sm\:w-auto{width:auto}.sm\:w-1\/2{width:50%}.sm\:w-full{width:100%}.sm\:flex-grow{flex-grow:1}.sm\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.sm\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.sm\:grid-cols-5{grid-template-columns:repeat(5,minmax(0,1fr))}.sm\:grid-cols-6{grid-template-columns:repeat(6,minmax(0,1fr))}.sm\:flex-wrap{flex-wrap:wrap}.sm\:items-start{align-items:flex-start}.sm\:gap-16px{grid-gap:1rem;gap:1rem}.sm\:self-end{align-self:flex-end}.sm\:p-16px{padding:1rem}.sm\:px-32px{padding-left:2rem;padding-right:2rem}.sm\:pt-16px{padding-top:1rem}.sm\:pt-48px{padding-top:3rem}.sm\:pr-32px{padding-right:2rem}.sm\:pb-48px{padding-bottom:3rem}.sm\:pl-0px{padding-left:0}.sm\:pl-32px{padding-left:2rem}.sm\:text-h2{font-size:2.75rem;line-height:3rem}.sm\:text-h4{font-size:1.75rem;line-height:2rem}.sm\:text-xl{font-size:1.125rem;line-height:2rem}.sm\:text-lg{font-size:1rem;line-height:1.5rem}.sm\:text-md{font-size:0.875rem;line-height:1.125rem}}@media (min-width:48em){.md\:sticky{position:sticky}.md\:bottom-160{bottom:10rem}.md\:col-span-3{grid-column:span 3 / span 3}.md\:col-span-4{grid-column:span 4 / span 4}.md\:col-span-5{grid-column:span 5 / span 5}.md\:col-span-7{grid-column:span 7 / span 7}.md\:col-span-8{grid-column:span 8 / span 8}.md\:col-span-9{grid-column:span 9 / span 9}.md\:col-span-12{grid-column:span 12 / span 12}.md\:col-start-1{grid-column-start:1}.md\:col-start-2{grid-column-start:2}.md\:col-end-3{grid-column-end:3}.md\:row-span-2{grid-row:span 2 / span 2}.md\:row-start-1{grid-row-start:1}.md\:row-end-2{grid-row-end:2}.md\:row-end-3{grid-row-end:3}.md\:float-none{float:none}.md\:m-0px{margin:0}.md\:mx-100{margin-left:6.25rem;margin-right:6.25rem}.md\:mx-0px{margin-left:0;margin-right:0}.md\:mx-4px{margin-left:0.25rem;margin-right:0.25rem}.md\:-mx-40px{margin-left:-2.5rem;margin-right:-2.5rem}.md\:my-0px{margin-top:0;margin-bottom:0}.md\:my-16px{margin-top:1rem;margin-bottom:1rem}.md\:my-24px{margin-top:1.5rem;margin-bottom:1.5rem}.md\:my-36px{margin-top:2.25rem;margin-bottom:2.25rem}.md\:mt-6{margin-top:0.375rem}.md\:mt-0px{margin-top:0}.md\:mt-16px{margin-top:1rem}.md\:mt-24px{margin-top:1.5rem}.md\:mt-28px{margin-top:1.75rem}.md\:mt-32px{margin-top:2rem}.md\:mt-36px{margin-top:2.25rem}.md\:mr-0px{margin-right:0}.md\:mr-16px{margin-right:1rem}.md\:mr-24px{margin-right:1.5rem}.md\:mr-28px{margin-right:1.75rem}.md\:mr-32px{margin-right:2rem}.md\:mb-16{margin-bottom:1rem}.md\:mb-48{margin-bottom:3rem}.md\:mb-60{margin-bottom:3.75rem}.md\:mb-64{margin-bottom:4rem}.md\:mb-80{margin-bottom:5rem}.md\:mb-0px{margin-bottom:0}.md\:mb-4px{margin-bottom:0.25rem}.md\:mb-8px{margin-bottom:0.5rem}.md\:mb-12px{margin-bottom:0.75rem}.md\:mb-24px{margin-bottom:1.5rem}.md\:mb-48px{margin-bottom:3rem}.md\:ml-16{margin-left:1rem}.md\:ml-auto{margin-left:auto}.md\:ml-0px{margin-left:0}.md\:ml-20px{margin-left:1.25rem}.md\:ml-24px{margin-left:1.5rem}.md\:block{display:block}.md\:inline-block{display:inline-block}.md\:inline{display:inline}.md\:flex{display:flex}.md\:table-cell{display:table-cell}.md\:grid{display:grid}.md\:hidden{display:none}.md\:h-16px{height:1rem}.md\:h-24px{height:1.5rem}.md\:h-48px{height:3rem}.md\:min-h-130{min-height:8.125rem}.md\:w-72{width:4.5rem}.md\:w-250{width:15.625rem}.md\:w-300{width:18.75rem}.md\:w-400{width:25rem}.md\:w-auto{width:auto}.md\:w-24px{width:1.5rem}.md\:w-48px{width:3rem}.md\:w-1\/2{width:50%}.md\:w-1\/3{width:33.333333%}.md\:w-2\/3{width:66.666667%}.md\:w-1\/4{width:25%}.md\:w-3\/4{width:75%}.md\:w-full{width:100%}.md\:min-w-170{min-width:10.625rem}.md\:max-w-300{max-width:18.75rem}.md\:max-w-880{max-width:55rem}.md\:flex-1{flex:1 1 0%}.md\:list-inside{list-style-position:inside}.md\:grid-flow-col{grid-auto-flow:column}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.md\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.md\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}.md\:grid-cols-12{grid-template-columns:repeat(12,minmax(0,1fr))}.md\:grid-rows-2{grid-template-rows:repeat(2,minmax(0,1fr))}.md\:grid-rows-6-min{grid-template-rows:repeat(6,minmax(0,min-content))}.md\:flex-row{flex-direction:row}.md\:flex-col{flex-direction:column}.md\:flex-nowrap{flex-wrap:nowrap}.md\:place-content-start{align-content:start;justify-content:start;place-content:start}.md\:place-content-between{align-content:space-between;justify-content:space-between;place-content:space-between}.md\:place-items-center{align-items:center;justify-items:center;place-items:center}.md\:items-end{align-items:flex-end}.md\:items-center{align-items:center}.md\:justify-between{justify-content:space-between}.md\:gap-16px{grid-gap:1rem;gap:1rem}.md\:gap-24px{grid-gap:1.5rem;gap:1.5rem}.md\:gap-32px{grid-gap:2rem;gap:2rem}.md\:gap-36px{grid-gap:2.25rem;gap:2.25rem}.md\:gap-x-24px{grid-column-gap:1.5rem;-moz-column-gap:1.5rem;column-gap:1.5rem}.md\:gap-x-32px{grid-column-gap:2rem;-moz-column-gap:2rem;column-gap:2rem}.md\:gap-y-16px{grid-row-gap:1rem;row-gap:1rem}.md\:self-end{align-self:flex-end}.md\:overflow-auto{overflow:auto}.md\:overflow-x-auto{overflow-x:auto}.md\:border-t-4px{border-top-width:4px}.md\:border-r{border-right-width:1px}.md\:border-r-1px{border-right-width:1px}.md\:border-b-0px{border-bottom-width:0}.md\:border-l-0px{border-left-width:0}.md\:border-l-1px{border-left-width:1px}.md\:border-dotted{border-style:dotted}.md\:border-white{--tw-border-opacity:1;border-color:rgba(255,255,255,var(--tw-border-opacity))}.md\:bg-transparent{background-color:transparent}.md\:bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.md\:p-16px{padding:1rem}.md\:p-24px{padding:1.5rem}.md\:p-28px{padding:1.75rem}.md\:px-40{padding-left:2.5rem;padding-right:2.5rem}.md\:px-0px{padding-left:0;padding-right:0}.md\:px-20px{padding-left:1.25rem;padding-right:1.25rem}.md\:px-28px{padding-left:1.75rem;padding-right:1.75rem}.md\:px-32px{padding-left:2rem;padding-right:2rem}.md\:px-40px{padding-left:2.5rem;padding-right:2.5rem}.md\:py-64{padding-top:4rem;padding-bottom:4rem}.md\:py-0px{padding-top:0;padding-bottom:0}.md\:py-2px{padding-top:0.125rem;padding-bottom:0.125rem}.md\:py-8px{padding-top:0.5rem;padding-bottom:0.5rem}.md\:py-12px{padding-top:0.75rem;padding-bottom:0.75rem}.md\:py-20px{padding-top:1.25rem;padding-bottom:1.25rem}.md\:py-24px{padding-top:1.5rem;padding-bottom:1.5rem}.md\:py-32px{padding-top:2rem;padding-bottom:2rem}.md\:pt-64{padding-top:4rem}.md\:pt-0px{padding-top:0}.md\:pt-4px{padding-top:0.25rem}.md\:pt-12px{padding-top:0.75rem}.md\:pt-16px{padding-top:1rem}.md\:pt-40px{padding-top:2.5rem}.md\:pt-48px{padding-top:3rem}.md\:pr-14{padding-right:0.875rem}.md\:pr-20{padding-right:1.25rem}.md\:pr-80{padding-right:5rem}.md\:pr-24px{padding-right:1.5rem}.md\:pr-32px{padding-right:2rem}.md\:pr-48px{padding-right:3rem}.md\:pb-8{padding-bottom:0.5rem}.md\:pb-10{padding-bottom:0.625rem}.md\:pb-48{padding-bottom:3rem}.md\:pb-0px{padding-bottom:0}.md\:pb-12px{padding-bottom:0.75rem}.md\:pb-24px{padding-bottom:1.5rem}.md\:pb-32px{padding-bottom:2rem}.md\:pl-0px{padding-left:0}.md\:pl-4px{padding-left:0.25rem}.md\:pl-8px{padding-left:0.5rem}.md\:pl-20px{padding-left:1.25rem}.md\:pl-24px{padding-left:1.5rem}.md\:pl-36px{padding-left:2.25rem}.md\:text-left{text-align:left}.md\:text-center{text-align:center}.md\:text-right{text-align:right}.md\:text-18{font-size:1.125rem}.md\:text-h1{font-size:3.75rem;line-height:4rem}.md\:text-h2{font-size:2.75rem;line-height:3rem}.md\:text-h3{font-size:2rem;line-height:2.5rem}.md\:text-h4{font-size:1.75rem;line-height:2rem}.md\:text-h5{font-size:1.375rem;line-height:1.625rem}.md\:text-h6{font-size:1.25rem;line-height:1.5rem}.md\:text-lg{font-size:1rem;line-height:1.5rem}.md\:text-md{font-size:0.875rem;line-height:1.125rem}.md\:text-4xl{font-size:2.25rem}.md\:text-h4-mobile{font-size:1.5rem;line-height:1.625rem}.md\:text-xl-tight{font-size:1.125rem;line-height:1.375rem}.md\:shadow-card{--tw-shadow:4px 4px 10px rgba(0,0,0,0.1);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow)}}@media (min-width:64em){.lg\:visible{visibility:visible}.lg\:relative{position:relative}.lg\:sticky{position:sticky}.lg\:top-152{top:9.5rem}.lg\:top-auto{top:auto}.lg\:col-span-2{grid-column:span 2 / span 2}.lg\:col-span-3{grid-column:span 3 / span 3}.lg\:col-span-4{grid-column:span 4 / span 4}.lg\:col-span-7{grid-column:span 7 / span 7}.lg\:col-span-8{grid-column:span 8 / span 8}.lg\:col-span-9{grid-column:span 9 / span 9}.lg\:col-start-1{grid-column-start:1}.lg\:col-start-4{grid-column-start:4}.lg\:col-end-4{grid-column-end:4}.lg\:col-end-11{grid-column-end:11}.lg\:row-start-1{grid-row-start:1}.lg\:mx-200{margin-left:12.5rem;margin-right:12.5rem}.lg\:mt-40{margin-top:2.5rem}.lg\:mt-0px{margin-top:0}.lg\:mt-16px{margin-top:1rem}.lg\:mt-32px{margin-top:2rem}.lg\:mr-8px{margin-right:0.5rem}.lg\:mr-16px{margin-right:1rem}.lg\:mr-28px{margin-right:1.75rem}.lg\:mb-60{margin-bottom:3.75rem}.lg\:mb-64{margin-bottom:4rem}.lg\:mb-0px{margin-bottom:0}.lg\:mb-8px{margin-bottom:0.5rem}.lg\:mb-12px{margin-bottom:0.75rem}.lg\:mb-20px{margin-bottom:1.25rem}.lg\:mb-24px{margin-bottom:1.5rem}.lg\:mb-48px{margin-bottom:3rem}.lg\:ml-8px{margin-left:0.5rem}.lg\:ml-24px{margin-left:1.5rem}.lg\:block{display:block}.lg\:inline{display:inline}.lg\:flex{display:flex}.lg\:grid{display:grid}.lg\:hidden{display:none}.lg\:h-auto{height:auto}.lg\:w-176{width:11rem}.lg\:w-1\/3{width:33.333333%}.lg\:w-2\/3{width:66.666667%}.lg\:w-1\/4{width:25%}.lg\:w-3\/4{width:75%}.lg\:w-1\/6{width:16.666667%}.lg\:w-5\/6{width:83.333333%}.lg\:w-7\/12{width:58.333333%}.lg\:w-11\/12{width:91.666667%}.lg\:w-full{width:100%}.lg\:max-w-880{max-width:55rem}.lg\:max-w-1060{max-width:66.25rem}.lg\:max-w-1280{max-width:80rem}.lg\:grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}.lg\:grid-cols-5{grid-template-columns:repeat(5,minmax(0,1fr))}.lg\:grid-cols-6{grid-template-columns:repeat(6,minmax(0,1fr))}.lg\:grid-cols-12{grid-template-columns:repeat(12,minmax(0,1fr))}.lg\:flex-row{flex-direction:row}.lg\:flex-col{flex-direction:column}.lg\:place-content-between{align-content:space-between;justify-content:space-between;place-content:space-between}.lg\:items-baseline{align-items:baseline}.lg\:gap-24px{grid-gap:1.5rem;gap:1.5rem}.lg\:gap-48px{grid-gap:3rem;gap:3rem}.lg\:self-start{align-self:flex-start}.lg\:self-center{align-self:center}.lg\:overflow-hidden{overflow:hidden}.lg\:whitespace-normal{white-space:normal}.lg\:border-t-0px{border-top-width:0}.lg\:border-l{border-left-width:1px}.lg\:border-l-1px{border-left-width:1px}.lg\:border-none{border-style:none}.lg\:p-24px{padding:1.5rem}.lg\:px-200{padding-left:12.5rem;padding-right:12.5rem}.lg\:px-24px{padding-left:1.5rem;padding-right:1.5rem}.lg\:px-48px{padding-left:3rem;padding-right:3rem}.lg\:py-28px{padding-top:1.75rem;padding-bottom:1.75rem}.lg\:pt-40{padding-top:2.5rem}.lg\:pt-80{padding-top:5rem}.lg\:pt-0px{padding-top:0}.lg\:pt-12px{padding-top:0.75rem}.lg\:pr-80{padding-right:5rem}.lg\:pr-8px{padding-right:0.5rem}.lg\:pr-16px{padding-right:1rem}.lg\:pr-24px{padding-right:1.5rem}.lg\:pr-28px{padding-right:1.75rem}.lg\:pr-36px{padding-right:2.25rem}.lg\:pr-48px{padding-right:3rem}.lg\:pb-0px{padding-bottom:0}.lg\:pb-12px{padding-bottom:0.75rem}.lg\:pb-32px{padding-bottom:2rem}.lg\:pb-48px{padding-bottom:3rem}.lg\:pl-24{padding-left:1.5rem}.lg\:pl-0px{padding-left:0}.lg\:pl-8px{padding-left:0.5rem}.lg\:pl-32px{padding-left:2rem}.lg\:pl-48px{padding-left:3rem}.lg\:text-left{text-align:left}.lg\:text-center{text-align:center}.lg\:text-right{text-align:right}.lg\:text-h3{font-size:2rem;line-height:2.5rem}.lg\:text-h4{font-size:1.75rem;line-height:2rem}.lg\:text-h5{font-size:1.375rem;line-height:1.625rem}.lg\:text-xl{font-size:1.125rem;line-height:2rem}.lg\:text-lg{font-size:1rem;line-height:1.5rem}.lg\:text-sm{font-size:0.75rem;line-height:1rem}.lg\:text-h1-tight{font-size:3.25rem;line-height:3.25rem}.lg\:font-light{font-weight:300}.lg\:shadow-none{--tw-shadow:0 0 rgba(0,0,0,0);box-shadow:0 0 rgba(0,0,0,0),0 0 rgba(0,0,0,0),var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 rgba(0,0,0,0)),var(--tw-ring-shadow,0 0 rgba(0,0,0,0)),var(--tw-shadow)}}@media (max-width:1023px){.touchonly\:flex{display:flex}.touchonly\:hidden{display:none}}@media (min-width:80em){.xl\:col-span-4{grid-column:span 4 / span 4}.xl\:col-span-8{grid-column:span 8 / span 8}.xl\:col-start-1{grid-column-start:1}.xl\:col-start-2{grid-column-start:2}.xl\:col-end-2{grid-column-end:2}.xl\:col-end-3{grid-column-end:3}.xl\:row-start-1{grid-row-start:1}.xl\:row-end-2{grid-row-end:2}.xl\:m-16px{margin:1rem}.xl\:mb-4px{margin-bottom:0.25rem}.xl\:block{display:block}.xl\:flex{display:flex}.xl\:grid{display:grid}.xl\:hidden{display:none}.xl\:w-1\/3{width:33.333333%}.xl\:w-2\/3{width:66.666667%}.xl\:w-3\/4{width:75%}.xl\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.xl\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}.xl\:grid-rows-9-min{grid-template-rows:repeat(9,minmax(0,min-content))}.xl\:items-center{align-items:center}.xl\:gap-80{grid-gap:5rem;gap:5rem}.xl\:self-auto{align-self:auto}.xl\:border-r-1px{border-right-width:1px}.xl\:border-b{border-bottom-width:1px}.xl\:border-b-0px{border-bottom-width:0}.xl\:border-gray-300{--tw-border-opacity:1;border-color:rgba(220,220,221,var(--tw-border-opacity))}.xl\:p-16px{padding:1rem}.xl\:px-0px{padding-left:0;padding-right:0}.xl\:pr-80{padding-right:5rem}.xl\:pr-0px{padding-right:0}.xl\:pb-0px{padding-bottom:0}.xl\:pb-16px{padding-bottom:1rem}.xl\:pl-16px{padding-left:1rem}.xl\:text-right{text-align:right}.xl\:text-16{font-size:1rem}.xl\:text-h1{font-size:3.75rem;line-height:4rem}}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://g.foolcdn.com/misc-assets/roboto300-ext.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://g.foolcdn.com/misc-assets/roboto300.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://g.foolcdn.com/misc-assets/roboto400-ext.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://g.foolcdn.com/misc-assets/roboto400.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://g.foolcdn.com/misc-assets/roboto500-ext.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://g.foolcdn.com/misc-assets/roboto500.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://g.foolcdn.com/misc-assets/roboto700-ext.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://g.foolcdn.com/misc-assets/roboto700.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}
      </style>
    <footer style="background-color: #060129;color:white;
    display: flex;justify-content: space-around;" class="text-gray-700  footer" id="usmf-footer">
      <div class="footer-main">
      <div class="footer-site-info">
      <a href="/"><h3 >DAST.TECH</h3></a>
      <p class="text-gray-700">Secured Asset <br> Recovery Technology . </p>
      <ul class="footer-social">
      <li class="mr-8px"><a target="_blank" class="block text-center text-white rounded-full w-32px h-32px hover:text-white pr-10px bg-magenta-700 hover:bg-purple-700" data-action="social-icons" href="https://lnkd.in/dRtGxc6y">
      <span class="sr-only">Facebook</span>
      <svg class="h-full w-16px" viewBox="0 0 512 512">
      <title>Facebook</title>
      <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
      </svg>
      </a></li>
      <li class="mr-8px"><a target="_blank" class="block text-center text-white rounded-full w-32px h-32px hover:text-white pr-10px bg-magenta-700 hover:bg-purple-700" data-action="social-icons" href="https://lnkd.in/dMZNbBvq">
      <span class="sr-only">Twitter</span>
      <svg class="h-full w-16px" viewBox="0 0 512 512">
      <title>Twitter</title>
      <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
      </svg>
      </a></li>
      <li class="mr-8px"><a target="_blank" class="block text-center text-white rounded-full w-32px h-32px hover:text-white pr-10px bg-magenta-700 hover:bg-purple-700" data-action="social-icons" href="https://lnkd.in/dbCgsr4d">
      <span class="sr-only">Linked In</span>
      <svg class="h-full w-16px" viewBox="0 0 448 512">
      <title>LinkedIn</title>
      <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path>
      </svg>
      </a></li>
      <li class="mr-8px"><a target="_blank" class="block text-center text-white rounded-full w-32px h-32px hover:text-white pr-10px bg-magenta-700 hover:bg-purple-700" data-action="social-icons" href="https://lnkd.in/dRjwuC-f">
        <span class="sr-only">Instagram</span>
        <svg class="h-full w-16px" viewBox="0 0 448 512">
        <title>Instagram</title>
        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
        </svg>
        </a></li>
     
      </ul>
     
      </div>
      <div class="footer-lists">
      <div class="footer-list">

      <ul>
      <li><a class="text-gray-700 hover:text-gray-1100" data-action="about" href="#">Home</a></li>
      
      <li><a class="text-gray-700 hover:text-gray-1100" data-action="about" href="#">Products</a></li>
      <li><a class="text-gray-700 hover:text-gray-1100" data-action="about" href="#">About</a></li>
      
      </ul>
      </div>
      <div class="footer-list">
      
      <ul>
      <li><a class="text-gray-700 hover:text-gray-1100" data-action="services" href="#">Account</a></li>
      <li><a class="text-gray-700 hover:text-gray-1100" data-action="services" href="#">Ideas</a></li>
      
      <li><a class="text-gray-700 hover:text-gray-1100" data-action="services" target="_blank" href="#">Prompt Strategies</a></li>
     
      </ul>
      </div>
      
     
      <div class="footer-list">
      <h2 class="uppercase">Contact</h2>
      <ul>
      <li><a class="text-gray-700 hover:text-gray-1100" data-action="tmf-affiliates" target="_blank" href="">Support@dast.tech</a></li>
      <li><a class="text-gray-700 hover:text-gray-1100" data-action="tmf-affiliates" target="_blank" 
      <li><a class="text-gray-700 hover:text-gray-1100" data-action="tmf-affiliates" target="_blank" href="">DAST.TECH</a></li>
      
     
      </ul>
      </div>
      </div>
      </div>
      

      
      <main class="py-4">
        @yield('content')
    </main>
      </footer>
      <script src="https://www.hubspot.com/wt-assets/static-files/2.2.1/core-nav/scripts.js" nonce="7urWKdsavOuOY1tEDAtGXQ=="></script></div>
      
          
      <!-- htmlmin:ignore -->
      
      <!-- HubSpot performance collection script -->
      <script defer src="https://static.hsappstatic.net/content-cwv-embed/static-1.194/embed.js" nonce="7urWKdsavOuOY1tEDAtGXQ=="></script>
      <script nonce="7urWKdsavOuOY1tEDAtGXQ==">
      var hsVars = hsVars || {}; hsVars['language'] = 'en';
      </script>
      
      <script src="/hs/hsstatic/cos-i18n/static-1.53/bundles/project.js" nonce="7urWKdsavOuOY1tEDAtGXQ=="></script>
      <script src="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/66945685888/1683744497507/module_66945685888_WTM_-_Homepage_-_Branding_Rollout_Hero.min.js" nonce="7urWKdsavOuOY1tEDAtGXQ=="></script>
      <script src="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/32625700689/1683744498442/module_32625700689_WTM_-_Homepage_-_Products.min.js" nonce="7urWKdsavOuOY1tEDAtGXQ=="></script>
      <script defer src="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/80992206946/1680686004240/module_80992206946_ctaContentBlock.min.js" nonce="7urWKdsavOuOY1tEDAtGXQ=="></script>
      
      
      <!-- Start of HubSpot Analytics Code -->
      <script type="text/javascript" nonce="7urWKdsavOuOY1tEDAtGXQ==">
      var _hsq = _hsq || [];
      _hsq.push(["setContentType", "landing-page"]);
      
      
      
      
      
      
      
      
      
      
      
      _hsq.push(["setCanonicalUrl", "https:\/\/www.hubspot.com"]);
      _hsq.push(["setPageId", "5787921598"]);
      _hsq.push(["setContentMetadata", {
          "contentPageId": 5787921598,
          "legacyPageId": "5787921598",
          "contentFolderId": null,
          "contentGroupId": null,
          "abTestId": 5787921594,
          "languageVariantId": 5787921598,
          "languageCode": "en",
          
      }]);
      </script>
      
      
      <!-- End of HubSpot Analytics Code -->
      
      
      <script src="https://www.hubspot.com/wt-assets/static-files/2.2.4/core-nav/scripts.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script></div>
      
          
      <!-- htmlmin:ignore -->
      
      <!-- HubSpot performance collection script -->
      <script defer src="https://static.hsappstatic.net/content-cwv-embed/static-1.240/embed.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
      <script nonce="baWixzo/oG9eiCpfxkKMzQ==">
      var hsVars = hsVars || {}; hsVars['language'] = 'en';
      </script>
      
      <script src="/hs/hsstatic/cos-i18n/static-1.53/bundles/project.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
      <script src="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/66945685888/1684330975991/module_66945685888_WTM_-_Homepage_-_Branding_Rollout_Hero.min.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
      <script src="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/32625700689/1683744498442/module_32625700689_WTM_-_Homepage_-_Products.min.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
      <script defer src="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/80992206946/1680686004240/module_80992206946_ctaContentBlock.min.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
      
      
      <!-- Start of HubSpot Analytics Code -->
      <script type="text/javascript" nonce="baWixzo/oG9eiCpfxkKMzQ==">
      var _hsq = _hsq || [];
      _hsq.push(["setContentType", "landing-page"]);
      _hsq.push(["setCanonicalUrl", "https:\/\/www.hubspot.com"]);
      _hsq.push(["setPageId", "5787921598"]);
      _hsq.push(["setContentMetadata", {
          "contentPageId": 5787921598,
          "legacyPageId": "5787921598",
          "contentFolderId": null,
          "contentGroupId": null,
          "abTestId": 5787921594,
          "languageVariantId": 5787921598,
          "languageCode": "en",
          
      }]);
      </script>
      
      
      <!-- End of HubSpot Analytics Code -->
      
      
      <script type="text/javascript" nonce="baWixzo/oG9eiCpfxkKMzQ==">
      var hsVars = {
          render_id: "9bb45bac-4120-4f72-a963-2ab1ca8aaea2",
          ticks: 1684905453400,
          page_id: 5787921598,
          
          content_group_id: 0,
          portal_id: 53,
          app_hs_base_url: "https://app.hubspot.com",
          cp_hs_base_url: "https://cp.hubspot.com",
          language: "en",
          analytics_page_type: "landing-page",
          analytics_page_id: "5787921598",
          category_id: 1,
          folder_id: 0,
          is_hubspot_user: false
      }
      </script>
      
      
      <script defer src="/hs/hsstatic/HubspotToolsMenu/static-1.191/js/index.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
      
      <!-- Begin Domain Settings Code -->
      
      
      
      <!-- htmlmin:ignore --><script type="text/javascript" src="https://static.hsappstatic.net/affiliates-landing-embed/ex/referral.js" async nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
      
      
      <!-- HREFLANG MACRO -->
      
      
      <!-- TODO compress / optimize GDPR script -->
      
      
      <!-- hubs_ params script -->
      
        
        <script type="text/javascript" src="https://www.hubspot.com/wt-assets/static-files/mktg-analytics/latest/bundle.min.js?1173" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
        
      
          <script defer id="gtm" src="https://www.hubspot.com/wt-assets/static-files/compliance/index.js" data-pid="53" data-gtm-id="GTM-N5LT88" data-skip-default-banner="true" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
      <script defer id="cookieBanner-53" src="https://js.hs-banner.com/v2/53/banner.js" data-wt-loaded="true" data-cookieconsent="ignore" data-hs-ignore="true" data-loader="hs-scriptloader" data-hsjs-portal="53" data-hsjs-env="prod" data-hsjs-hublet="na1" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
      <script defer id="hs-script-loader" src="/hs/scriptloader/53.js?businessUnitId=0" data-wt-loaded="true" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
      <script defer id="messaging-functions" src="//www.hubspot.com/wt-assets/static-files/2383/messaging-functions/scripts.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
      
      <script src="//cdn-3.convertexperiments.com/js/10031559-1003891.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
            
          <script nonce="baWixzo/oG9eiCpfxkKMzQ==">
            window.addEventListener("DOMContentLoaded", function () {
              document.querySelectorAll('link[rel="preload"]').forEach(function (e) {
                e.setAttribute("rel", "stylesheet");
              });
            });
        </script>
          
        <script src="//cdn2.hubspot.net/hub/53/hub_generated/template_assets/27335426394/1682000831311/_Web_Team_Assets/Website/assets/js/scripts.min.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="main.js"></script>
    <script>
        // Add the following JavaScript code to toggle the hamburger menu

document.querySelector('.hamburger').addEventListener('click', function() {
    document.querySelector('.dast-blog').classList.toggle('active');
});

    </script>

</body>
</html>