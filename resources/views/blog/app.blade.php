
<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAST BLOG</title>
    <!-- Box-icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.tiny.cloud/1/t1z5rqxi98ch2jc0vuqycqv4aniu58hp58fty93l20n17ynx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
 
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
    /* background: url("https://images.unsplash.com/photo-1488998427799-e3362cec87c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGJsb2clMjBiYWNrZ3JvdW5kfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"); */
    background-position: center;
    background: rgb(1, 1, 39);
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
            <a href="/home" class="logo">DAST <span>BLOG</span></a>
            <ul class="dast-blog">
                <li><a href="">About</a></li>
                <li><a style="border-bottom: 4px solid rgb(2, 2, 159);" href="/dast-blog">Blog</a></li>
                <li><a href="">Account</a></li>
                <li><a href="/admin">Dashboard</a></li>
                <li><a href="">          <img style="width: 30px;"  src="{{ asset('/images/download__1_-removebg-preview.png') }}" alt="dast gpt">
                </a></li>



                <li><a href="">          <img style="width: 30px;"  src="{{ asset('/images/download-removebg-preview.png') }}" alt="dast gpt">
                </a></li>
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
=======
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
<script>window._wca = window._wca || [];</script>
<!-- Jetpack Site Verification Tags -->
<meta name="p:domain_verify" content="81d07f05bc55ed94fabf03a379761ff2" />

	<!-- This site is optimized with the Yoast SEO plugin v20.10 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Welcome to DAST Blog! 
		Home to all our latest articles, news and products.</title>
	<meta name="description" content="DAST is a technology company that provides software development solutions, blockchain solutions and digital services to individuals, businesses and organisations." />
	
	<!-- / Yoast SEO plugin. -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel='dns-prefetch' href='//stats.wp.com' />
<link rel='dns-prefetch' href='//use.typekit.net' />
<link rel='dns-prefetch' href='//fonts-api.wp.com' />
<link rel='dns-prefetch' href='//c0.wp.com' />

							<script src="//www.googletagmanager.com/gtag/js?id=UA-164782432-1"  data-cfasync="false" data-wpfc-render="false" type="text/javascript" async></script>
			<script data-cfasync="false" data-wpfc-render="false" type="text/javascript">
				var mi_version = '8.16';
				var mi_track_user = true;
				var mi_no_track_reason = '';
				
								var disableStrs = [
															'ga-disable-UA-164782432-1',
									];

				/* Function to detect opted out users */
				function __gtagTrackerIsOptedOut() {
					for (var index = 0; index < disableStrs.length; index++) {
						if (document.cookie.indexOf(disableStrs[index] + '=true') > -1) {
							return true;
						}
					}

					return false;
				}

				/* Disable tracking if the opt-out cookie exists. */
				if (__gtagTrackerIsOptedOut()) {
					for (var index = 0; index < disableStrs.length; index++) {
						window[disableStrs[index]] = true;
					}
				}

				/* Opt-out function */
				function __gtagTrackerOptout() {
					for (var index = 0; index < disableStrs.length; index++) {
						document.cookie = disableStrs[index] + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
						window[disableStrs[index]] = true;
					}
				}

				if ('undefined' === typeof gaOptout) {
					function gaOptout() {
						__gtagTrackerOptout();
					}
				}
								window.dataLayer = window.dataLayer || [];

				window.MonsterInsightsDualTracker = {
					helpers: {},
					trackers: {},
				};
				if (mi_track_user) {
					function __gtagDataLayer() {
						dataLayer.push(arguments);
					}

					function __gtagTracker(type, name, parameters) {
						if (!parameters) {
							parameters = {};
						}

						if (parameters.send_to) {
							__gtagDataLayer.apply(null, arguments);
							return;
						}

						if (type === 'event') {
							
														parameters.send_to = monsterinsights_frontend.ua;
							__gtagDataLayer(type, name, parameters);
													} else {
							__gtagDataLayer.apply(null, arguments);
						}
					}

					__gtagTracker('js', new Date());
					__gtagTracker('set', {
						'developer_id.dZGIzZG': true,
											});
															__gtagTracker('config', 'UA-164782432-1', {"forceSSL":"true"} );
										window.gtag = __gtagTracker;										(function () {
						/* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
						/* ga and __gaTracker compatibility shim. */
						var noopfn = function () {
							return null;
						};
						var newtracker = function () {
							return new Tracker();
						};
						var Tracker = function () {
							return null;
						};
						var p = Tracker.prototype;
						p.get = noopfn;
						p.set = noopfn;
						p.send = function () {
							var args = Array.prototype.slice.call(arguments);
							args.unshift('send');
							__gaTracker.apply(null, args);
						};
						var __gaTracker = function () {
							var len = arguments.length;
							if (len === 0) {
								return;
							}
							var f = arguments[len - 1];
							if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
								if ('send' === arguments[0]) {
									var hitConverted, hitObject = false, action;
									if ('event' === arguments[1]) {
										if ('undefined' !== typeof arguments[3]) {
											hitObject = {
												'eventAction': arguments[3],
												'eventCategory': arguments[2],
												'eventLabel': arguments[4],
												'value': arguments[5] ? arguments[5] : 1,
											}
										}
									}
									if ('pageview' === arguments[1]) {
										if ('undefined' !== typeof arguments[2]) {
											hitObject = {
												'eventAction': 'page_view',
												'page_path': arguments[2],
											}
										}
									}
									if (typeof arguments[2] === 'object') {
										hitObject = arguments[2];
									}
									if (typeof arguments[5] === 'object') {
										Object.assign(hitObject, arguments[5]);
									}
									if ('undefined' !== typeof arguments[1].hitType) {
										hitObject = arguments[1];
										if ('pageview' === hitObject.hitType) {
											hitObject.eventAction = 'page_view';
										}
									}
									if (hitObject) {
										action = 'timing' === arguments[1].hitType ? 'timing_complete' : hitObject.eventAction;
										hitConverted = mapArgs(hitObject);
										__gtagTracker('event', action, hitConverted);
									}
								}
								return;
							}

							function mapArgs(args) {
								var arg, hit = {};
								var gaMap = {
									'eventCategory': 'event_category',
									'eventAction': 'event_action',
									'eventLabel': 'event_label',
									'eventValue': 'event_value',
									'nonInteraction': 'non_interaction',
									'timingCategory': 'event_category',
									'timingVar': 'name',
									'timingValue': 'value',
									'timingLabel': 'event_label',
									'page': 'page_path',
									'location': 'page_location',
									'title': 'page_title',
								};
								for (arg in args) {
																		if (!(!args.hasOwnProperty(arg) || !gaMap.hasOwnProperty(arg))) {
										hit[gaMap[arg]] = args[arg];
									} else {
										hit[arg] = args[arg];
									}
								}
								return hit;
							}

							try {
								f.hitCallback();
							} catch (ex) {
							}
						};
						__gaTracker.create = newtracker;
						__gaTracker.getByName = newtracker;
						__gaTracker.getAll = function () {
							return [];
						};
						__gaTracker.remove = noopfn;
						__gaTracker.loaded = true;
						window['__gaTracker'] = __gaTracker;
					})();
									} else {
										console.log("");
					(function () {
						function __gtagTracker() {
							return null;
						}

						window['__gtagTracker'] = __gtagTracker;
						window['gtag'] = __gtagTracker;
					})();
									}
			</script>
				<!-- / Google Analytics by MonsterInsights -->
		<script type="text/javascript">
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/greenkitchenstories.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.2.2"}};
/*! This file is auto-generated */
!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){p.clearRect(0,0,i.width,i.height),p.fillText(e,0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(t,0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(p&&p.fillText)switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s("\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!s("\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!s("\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!s("\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff","\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='layerslider-css' href='https://greenkitchenstories.com/wp-content/plugins/LayerSlider/static/layerslider/css/layerslider.css?ver=6.7.6' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css' href='https://c0.wp.com/c/6.2.2/wp-includes/css/dist/block-library/style.min.css' type='text/css' media='all' />
<style id='wp-block-library-inline-css' type='text/css'>
.has-text-align-justify{text-align:justify;}
</style>
<link rel='stylesheet' id='jetpack-videopress-video-block-view-css' href='https://greenkitchenstories.com/wp-content/plugins/jetpack/jetpack_vendor/automattic/jetpack-videopress/build/block-editor/blocks/video/view.css?minify=false&#038;ver=34ae973733627b74a14e' type='text/css' media='all' />
<link rel='stylesheet' id='mediaelement-css' href='https://c0.wp.com/c/6.2.2/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css' href='https://c0.wp.com/c/6.2.2/wp-includes/js/mediaelement/wp-mediaelement.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-vendors-style-css' href='https://c0.wp.com/p/woocommerce/7.8.0/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css' type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-css' href='https://c0.wp.com/p/woocommerce/7.8.0/packages/woocommerce-blocks/build/wc-blocks-style.css' type='text/css' media='all' />
<link rel='stylesheet' id='classic-theme-styles-css' href='https://c0.wp.com/c/6.2.2/wp-includes/css/classic-themes.min.css' type='text/css' media='all' />
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='wpcom-text-widget-styles-css' href='https://greenkitchenstories.com/wp-content/mu-plugins/wpcomsh/vendor/automattic/text-media-widget-styles/css/widget-text.css?ver=20170607' type='text/css' media='all' />
<link rel='stylesheet' id='advanced-popups-css' href='https://greenkitchenstories.com/wp-content/plugins/advanced-popups/public/css/advanced-popups-public.css?ver=1.1.7' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css' href='https://greenkitchenstories.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.7.7' type='text/css' media='all' />
<link rel='stylesheet' id='printomatic-css-css' href='https://greenkitchenstories.com/wp-content/plugins/print-o-matic/css/style.css?ver=2.0' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css' href='https://c0.wp.com/p/woocommerce/7.8.0/assets/css/woocommerce-layout.css' type='text/css' media='all' />
<style id='woocommerce-layout-inline-css' type='text/css'>

	.infinite-scroll .woocommerce-pagination {
		display: none;
	}
</style>
<link rel='stylesheet' id='woocommerce-smallscreen-css' href='https://c0.wp.com/p/woocommerce/7.8.0/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css' href='https://c0.wp.com/p/woocommerce/7.8.0/assets/css/woocommerce.css' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='bateaux-css' href='https://greenkitchenstories.com/wp-content/themes/bateaux/dist/css/main.min.css?ver=1.2.6' type='text/css' media='all' />
<link rel='stylesheet' id='bateaux-custom-css' href='//greenkitchenstories.com/wp-content/uploads/style-custom.css?ver=5ad1925b' type='text/css' media='all' />
<link rel='stylesheet' id='wpdreams-asl-basic-css' href='https://greenkitchenstories.com/wp-content/plugins/ajax-search-lite/css/style.basic.css?ver=4.11.2' type='text/css' media='all' />
<link rel='stylesheet' id='wpdreams-ajaxsearchlite-css' href='https://greenkitchenstories.com/wp-content/plugins/ajax-search-lite/css/style-underline.css?ver=4.11.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-calypso-bridge-masterbar-css' href='https://greenkitchenstories.com/wp-content/mu-plugins/wpcomsh/vendor/automattic/wc-calypso-bridge/store-on-wpcom/assets/css/masterbar.css?ver=2.1.9' type='text/css' media='all' />
<link rel='stylesheet' id='bateaux-google-fonts-css' href='//fonts-api.wp.com/css?family=Karla%3A400%2C400italic%2C700%2C700italic&#038;subset=latin-ext%2Clatin&#038;ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css' href='https://greenkitchenstories.com/wp-content/plugins/jetpack/css/jetpack.css?ver=12.3-a.7' type='text/css' media='all' />
<script type='text/javascript' src='https://c0.wp.com/c/6.2.2/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js' id='wp-polyfill-inert-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/6.2.2/wp-includes/js/dist/vendor/regenerator-runtime.min.js' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/6.2.2/wp-includes/js/dist/vendor/wp-polyfill.min.js' id='wp-polyfill-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/6.2.2/wp-includes/js/dist/hooks.min.js' id='wp-hooks-js'></script>
<script type='text/javascript' src='https://stats.wp.com/w.js?ver=202326' id='woo-tracks-js'></script>
<script type='text/javascript' id='layerslider-greensock-js-extra'>
/* <![CDATA[ */
var LS_Meta = {"v":"6.7.6"};
/* ]]> */
</script>
<script type='text/javascript' src='https://greenkitchenstories.com/wp-content/plugins/LayerSlider/static/layerslider/js/greensock.js?ver=1.19.0' id='layerslider-greensock-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/6.2.2/wp-includes/js/jquery/jquery.min.js' id='jquery-core-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/6.2.2/wp-includes/js/jquery/jquery-migrate.min.js' id='jquery-migrate-js'></script>
<script type='text/javascript' src='https://greenkitchenstories.com/wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.kreaturamedia.jquery.js?ver=6.7.6' id='layerslider-js'></script>
<script type='text/javascript' src='https://greenkitchenstories.com/wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.transitions.js?ver=6.7.6' id='layerslider-transitions-js'></script>
<script type='text/javascript' src='https://greenkitchenstories.com/wp-content/plugins/google-analytics-for-wordpress/assets/js/frontend-gtag.min.js?ver=8.16' id='monsterinsights-frontend-script-js'></script>
<script data-cfasync="false" data-wpfc-render="false" type="text/javascript" id='monsterinsights-frontend-script-js-extra'>/* <![CDATA[ */
var monsterinsights_frontend = {"js_events_tracking":"true","download_extensions":"doc,pdf,ppt,zip,xls,docx,pptx,xlsx","inbound_paths":"[]","home_url":"https:\/\/greenkitchenstories.com","hash_tracking":"false","ua":"UA-164782432-1","v4_id":""};/* ]]> */
</script>
<script type='text/javascript' src='https://greenkitchenstories.com/wp-content/plugins/advanced-popups/public/js/advanced-popups-public.js?ver=1.1.7' id='advanced-popups-js'></script>
<script defer type='text/javascript' src='https://stats.wp.com/s-202326.js' id='woocommerce-analytics-js'></script>
<script type='text/javascript' src='//use.typekit.net/fbx0hre.js?ver=6.2.2' id='bateaux-typekit-js'></script>
<meta name="generator" content="Powered by LayerSlider 6.7.6 - Multi-Purpose, Responsive, Parallax, Mobile-Friendly Slider Plugin for WordPress." />
<!-- LayerSlider updates and docs at: https://layerslider.kreaturamedia.com -->
<link rel="https://api.w.org/" href="https://greenkitchenstories.com/wp-json/" /><link rel="alternate" type="application/json" href="https://greenkitchenstories.com/wp-json/wp/v2/pages/15826" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://greenkitchenstories.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://greenkitchenstories.com/wp-includes/wlwmanifest.xml" />



{{-- 
<link rel='shortlink' href='https://wp.me/PaCtAc-47g' />
<link rel="alternate" type="application/json+oembed" href="https://greenkitchenstories.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgreenkitchenstories.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://greenkitchenstories.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgreenkitchenstories.com%2F&#038;format=xml" />
		<link rel="preload" href="https://greenkitchenstories.com/wp-content/plugins/advanced-popups/fonts/advanced-popups-icons.woff" as="font" type="font/woff" crossorigin> --}}
			<style>img#wpstats{display:none}</style>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--[if lte IE 9]><style type="text/css">.btx-opacity1 { opacity: 1; }</style><![endif]-->	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
					<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
				<link rel="preload" as="style" href="//fonts.googleapis.com/css?family=Open+Sans&display=swap" />
				<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans&display=swap" media="all" />
						<style type="text/css">
			.recentcomments a {
				display: inline !important;
				padding: 0 !important;
				margin: 0 !important;
			}

			table.recentcommentsavatartop img.avatar, table.recentcommentsavatarend img.avatar {
				border: 0px;
				margin: 0;
			}

			table.recentcommentsavatartop a, table.recentcommentsavatarend a {
				border: 0px !important;
				background-color: transparent !important;
			}

			td.recentcommentsavatarend, td.recentcommentsavatartop {
				padding: 0px 0px 1px 0px;
				margin: 0px;
			}

			td.recentcommentstextend {
				border: none !important;
				padding: 0px 0px 2px 10px;
			}

			.rtl td.recentcommentstextend {
				padding: 0px 10px 2px 0px;
			}

			td.recentcommentstexttop {
				border: none;
				padding: 0px 0px 0px 10px;
			}

			.rtl td.recentcommentstexttop {
				padding: 0px 10px 0px 0px;
			}
		</style>
		<script type="text/javascript">try{Typekit.load({async:true});}catch(e){}</script>			<script  type="text/javascript">
				!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
					n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
					n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
					t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
					document,'script','https://connect.facebook.net/en_US/fbevents.js');
			</script>
			<!-- WooCommerce Facebook Integration Begin -->
			<script  type="text/javascript">

				fbq('init', '216287506677118', {}, {
    "agent": "woocommerce-7.8.0-3.0.25"
>>>>>>> versatile
});

				fbq( 'track', 'PageView', {
    "source": "woocommerce",
    "version": "7.8.0",
    "pluginVersion": "3.0.25"
} );

				document.addEventListener( 'DOMContentLoaded', function() {
					jQuery && jQuery( function( $ ) {
						// Insert placeholder for events injected when a product is added to the cart through AJAX.
						$( document.body ).append( '<div class=\"wc-facebook-pixel-event-placeholder\"></div>' );
					} );
				}, false );

			</script>
			<!-- WooCommerce Facebook Integration End -->
			<!-- There is no amphtml version available for this URL. -->                <style>
                    
					div[id*='ajaxsearchlitesettings'].searchsettings .asl_option_inner label {
						font-size: 0px !important;
						color: rgba(0, 0, 0, 0);
					}
					div[id*='ajaxsearchlitesettings'].searchsettings .asl_option_inner label:after {
						font-size: 11px !important;
						position: absolute;
						top: 0;
						left: 0;
						z-index: 1;
					}
					.asl_w_container {
						width: 350px;
						margin: 0px 0px 0px 0px;
						min-width: 200px;
					}
					div[id*='ajaxsearchlite'].asl_m {
						width: 100%;
					}
					div[id*='ajaxsearchliteres'].wpdreams_asl_results div.resdrg span.highlighted {
						font-weight: bold;
						color: rgb(0, 0, 0);
						background-color: rgba(238, 238, 238, 1);
					}
					div[id*='ajaxsearchliteres'].wpdreams_asl_results .results img.asl_image {
						width: 70px;
						height: 70px;
						object-fit: cover;
					}
					div.asl_r .results {
						max-height: none;
					}
				
							.asl_w, .asl_w * {font-family:"Karla" !important;}
							.asl_m input[type=search]::placeholder{font-family:"Karla" !important;}
							.asl_m input[type=search]::-webkit-input-placeholder{font-family:"Karla" !important;}
							.asl_m input[type=search]::-moz-placeholder{font-family:"Karla" !important;}
							.asl_m input[type=search]:-ms-input-placeholder{font-family:"Karla" !important;}
						
						div.asl_r.asl_w.vertical .results .item::after {
							display: block;
							position: absolute;
							bottom: 0;
							content: '';
							height: 1px;
							width: 100%;
							background: #D8D8D8;
						}
						div.asl_r.asl_w.vertical .results .item.asl_last_item::after {
							display: none;
						}
					 .asp_main_container {
display: block !important;
    margin: 0 auto !important;
}

div.asl_r .results .item .asl_content h3, div.asl_r .results .item .asl_content h3 a {
    margin: 0;
    padding: 0;
    line-height: inherit;
    font-weight: normal;
    font-family: Open Sans;
    color: #000 !important;
    font-size: 14px;
    line-height: 22px;
    text-shadow: 0 0 0 rgba(255,255,255,0);
}

.asl_w, .asl_w * {
    font-family: "Karla" !important;
    font-size: 11pt !important;
}

div.asl_m .probox .proclose svg {
    background: #333;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    width: 20px;
    height: 20px;
    margin-top: -10px;
    left: 50%;
    margin-left: -10px;
    fill: #fefefe;
    padding: 4px;
    box-sizing: border-box;
    box-shadow: 0 0 0 2px rgba(255,255,255,.9);
    display: none;
}

div.asl_w .probox .promagnifier {
    width: 28px;
    height: 28px;
    background-image: -o-linear-gradient(180deg,rgba(255,255,255,0),rgba(255,255,255,0));
    background-image: -ms-linear-gradient(180deg,rgba(255,255,255,0),rgba(255,255,255,0));
    background-image: -webkit-linear-gradient(180deg,rgba(255,255,255,0),rgba(255,255,255,0));
    background-image: linear-gradient(180deg,rgba(255,255,255,0),rgba(255,255,255,0));
    background-position: center center;
    background-repeat: no-repeat;
    border: 0 solid #fff;
    border-radius: 0 0 0 0;
    box-shadow: -1px 1px 0 0 rgba(255,255,255,.64) inset;
    cursor: pointer;
    background-size: 100% 100%;
    background-position: center center;
    background-repeat: no-repeat;
    cursor: default;
    pointer-events: none;
}



div.asl_m .probox div.asl_loader {
    box-sizing: border-box;
    display: flex;
    flex: 0 1 auto;
    flex-direction: column;
    flex-grow: 0;
    flex-shrink: 0;
    flex-basis: 28px;
    max-width: 100%;
    max-height: 100%;
    width: 100%;
    height: 100%;
    align-items: center;
    justify-content: center;
    display: none;
}

div.asl_r .results .item .asl_content h3, div.asl_r .results .item .asl_content h3 a {
    margin: 0;
    padding: 0;
    line-height: inherit;
    font-weight: normal;
    font-family: baskerville !important;
    color: #000;
    font-size: 18px !important;
    line-height: 21px;
    text-shadow: 0 0 0 rgba(255,255,255,0);
}


div.asl_w, div.asl_w *, div.asl_r, div.asl_r *, div.asl_s, div.asl_s * { 
    font-size: 10pt !important;
}
                </style>
                <link rel="icon" href="https://greenkitchenstories.com/wp-content/uploads/2019/03/cropped-gks-favicon-32x32.png" sizes="32x32" />
<link rel="icon" href="https://greenkitchenstories.com/wp-content/uploads/2019/03/cropped-gks-favicon-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://greenkitchenstories.com/wp-content/uploads/2019/03/cropped-gks-favicon-180x180.png" />
<meta name="msapplication-TileImage" content="https://greenkitchenstories.com/wp-content/uploads/2019/03/cropped-gks-favicon-270x270.png" />

<!-- BEGIN Typekit Fonts for WordPress -->
<link rel="stylesheet" href="https://use.typekit.net/fbx0hre.css">
<style type="text/css">
  @import url("https://use.typekit.net/fbx0hre.css");
</style>

<!-- END Typekit Fonts for WordPress -->

		<style type="text/css" id="wp-custom-css">
			/* Footer */

.widget a, .widget.widget_calendar a, .widget_calendar thead {
    color: #6d6d6d !important;
}

.btx-footer-column {
    padding-top: 40px;
    padding-bottom: 0px !important;
}

.btx-bottombar .widget {
    display: inline-block;
    position: relative;
    padding: 0 5px;
    vertical-align: middle;
    line-height: 15pt;
    text-align: left;
}

@media (max-width: 767px) {
.btx-bottombar .widget {
    padding-bottom: 40px !important;
}
	}
	
/* Two columns on mobile */

	
@media (max-width: 767px) {
    .my-recipes .btx-entry {
        width: 50% !important;
        margin-top: 0 !important;
			    padding: 0px 5px !important;

    }
}

@media (max-width: 767px) {
    .my-related .btx-relatedport {
     width: 50% !important;
    }
}

.asp_main_container {
    margin: 0 auto !important;
}

.btx-post .btx-post-title {
    font-size: 45px;
    line-height: 45pt;
    letter-spacing: -.01em;
    font-weight: 500;
    text-align: center !important;
	    padding-top: 5%;
		padding-bottom: 45px;

}

img.btx-fixed-nav-logo, .btx-navbar.btx-navbar--alternate img.btx-navbar-logo--image {
    max-width: 57px !important;
}

.btx-post-category {
    padding-right: 15px;
    opacity: 10;
}

.btx-quote-text {
    display: block;
    padding-left: 0%;
    margin: 0pt !important;
    font-size: 17px !important;
    letter-spacing: 0;
    text-align: left;
    line-height: 22pt;
		padding-right: 40%;
		padding-top: 20pt;
		padding-bottom: 40pt;
}

.btx-quote.btx-with-background {
    padding: 0px 0px;
	
}

a img.alignleft, a img.alignnone {
    margin: 5px 0px 0px 0;
}


.btx-post-headline {
	padding-top: 60px;
	padding-bottom: 0px;
}

.btx-quote.btx-item {
    margin-top: 0px;
    margin-bottom: 10px;
}

.show-pf-branding .pf-branding {
    display: none;
}

strong, b {
    font-weight: bold !important;
		font-family: Karla !important;
}


.btx-navbar .btx-menu > li > a,  .btx-menu > li > a, .btx-side-navbar .btx-menu > li > a {
    text-transform: capitalize;
    font-family: Karla;
    font-size: 10pt;
    letter-spacing: 0 !important;
}

.btx-dummy-title {
	display: inline-block;
	font-size: 16px;
	font-weight: 500;
}

.btx-dummy-title:after {
	content: '.';
	color: #000;
	font-size: 16px;
}

.btx-navbar .btx-navbar-search .btx-search-form input[type=text], .btx-navbar--mobile .btx-navbar-search .btx-search-form input[type=text], .btx-side-navbar .btx-navbar-search .btx-search-form input[type=text] {
    display: inline-block;
    position: relative;
    margin-left: -55px;
    width: 70%;
    max-width: inherit;
    height: auto;
    padding: 0 0 15px 55px;
    vertical-align: middle;
    border-top: none;
    border-right: none;
    border-left: none;
    border-radius: 0;
    border-width: 2px;
    background-color: transparent;
    font-size: inherit;
    letter-spacing: 0em;
}

label {
    display: block;
    max-width: 100%;
    margin-bottom: 10px;
    font-size: 13px !important;
    line-height: 20pt;
    text-transform: none !important;
    letter-spacing: 0 !important;
    font-family: karla !important;
}


h1 {
    line-height: 64pt;
}

.btx-feature--left .btx-feature-body {
    padding-left: 15px;
}

h4 {
    line-height: 24pt;
}

.comment-reply-title {
    display: block;
    margin: 40px 0 30px;
    font-size: 14px;
    text-transform: none;
    letter-spacing: 0;
    font-family: karla;
}

.btx-entry-title {
    line-height: 20pt;
}


.comment-nav-button a {
    display: block;
    font-size: 14px;
    text-transform: none;
    letter-spacing: 0;
    font-family: karla;
}

.btx-comment .btx-heading-text {
    display: block;
    font-size: 14px;
    text-transform: none;
    letter-spacing: 0;
    font-family: karla;
}

.comment-author a {
    font-size: 13px;
    text-transform: none;
    letter-spacing: 0;
    font-family: karla;
		font-weight: 900;
}

.comment-author {
    font-size: 13px;
    text-transform: none;
    letter-spacing: 0;
    font-family: karla;
		font-weight: 900;
}


.btx-relatedport .btx-heading-text, .btx-relatedpost .btx-heading-text {
    font-size: 13px;
    text-transform: none;
    letter-spacing: 0;
    font-family: karla;
}

label {
    display: block;
    max-width: 100%;
    margin-bottom: 10px;
    font-size: 13px !important;
    text-transform: none !important;
    letter-spacing: 0 !important;
    font-family: karla !important;
}

.btx-entry-excerpt {
    font-size: 13px;
		line-height: 15pt;
    text-transform: none;
    letter-spacing: 0;
    font-family: karla;
}


.btx-filter-bar {
    line-height: 1;
    margin-top: 40px;
    margin-bottom: 40px;
    margin-left: 0;
    font-size: 11pt !important;
    list-style: none;
    text-transform: capitalize;
    letter-spacing: 0;
    font-family: karla !important;
}


.btx-relatedport .btx-entry-title, .btx-relatedpost .btx-entry-title {
    font-size: 17px;
    margin-bottom: 5px;
    line-height: 17pt;
    word-break: break-word;
    -webkit-transition-property: color;
    -moz-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: .2s;
    -moz-transition-duration: .2s;
    transition-duration: .2s;
    -webkit-transition-timing-function: ease-in-out;
    -moz-transition-timing-function: ease-in-out;
    transition-timing-function: ease-in-out;
}

.btx-author h3, .btx-navigation-label, .btx-uppercase, .btx-widgets h3, .widget .btx-mega-menu .btx-mega-menu-title, .woocommerce table.shop_table th {
    text-transform: uppercase;
    font-family: karla !important;
    font-size: 8pt !important;
    letter-spacing: 0.1em !important;
    color: #6d6d6d;
}


/* MOBILE */
/* Change of size post titles */

@media (max-width: 1200px) 
{ h2 {
    font-size: 50px;
    line-height: 45pt;
	 }
	 
	 .comment-body {
    margin-left: 0px;
}
 }

@media (max-width: 1200px) 
{ h3 {
    font-size: 34px;
    line-height: 32pt;
	 }
	 
	 .comment-body {
    margin-left: 0px;
}
 }

@media (max-width: 1200px) 
{ h1 {
    font-size: 60px;
    line-height: 50pt;
	 }
	 
	 .comment-body {
    margin-left: 0px;
}
 }

@media (max-width: 1200px) 
{  
.btx-item {
    position: relative;
    padding-right: 0pt !important;
}
}




@media (max-width: 1000px) 
{ h1 {
    font-size: 47px;
    line-height: 43pt;
	 }
 }


/* Bottom post navigation */

.btx-navigation-title {
    display: inline-block;
    max-width: 300px;
    line-height: 1.2;
    margin-top: 8px;
    font-size: 18px;
    letter-spacing: .015em;
    font-family: baskerville-urw;
}

.btx-navigation-content {
    display: inline-block;
    vertical-align: middle;
    max-width: 150pt;
}

/* Categories entry */

.btx-entry-meta {
    text-transform: uppercase;
    letter-spacing: 0.09em;
    font-size: 8pt;
		color: #000 !important;

}


/* Basic blog post style */


.btx-post-meta {
    line-height: 1.2;
    font-size: 11px;
    text-transform: uppercase;
		font-weight: 200;
    letter-spacing: 0.1em;
    text-align: left !important;
    color: #000 !important;
}

#sharing_email .sharing_send, .sd-content ul li .option a.share-ustom, .sd-content ul li a.sd-button, .sd-content ul li.advanced a.share-more, .sd-content ul li.preview-item div.option.option-smart-off a, .sd-social-icon .sd-content ul li a.sd-button, .sd-social-icon-text .sd-content ul li a.sd-button, .sd-social-official .sd-content>ul>li .digg_button>a, .sd-social-official .sd-content>ul>li>a.sd-button, .sd-social-text .sd-content ul li a.sd-button {
    text-decoration: none!important;
    display: inline-block;
    font-size: 12px;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
    border-radius: 3px;
    color: #777!important;
    background: #f8f8f8;
    border: 1px solid #ccc;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,.08);
    box-shadow: 0 1px 0 rgba(0,0,0,.08);
    text-shadow: none;
    line-height: 23px;
    padding: 1px 8px 0 5px;
    display: none;
}


@media (max-width: 978px) {
    .container {
      padding:0;
      margin:0;
    }

    body {
      padding:0;
    }

    .navbar-fixed-top, .navbar-fixed-bottom, .navbar-static-top {
      margin-left: 0;
      margin-right: 0;
      margin-bottom:0;
    }
}


h5 {
    line-height: 23pt;
}


.widget.widget_text {
    word-wrap: break-word;
    font-size: 10pt !important;
    line-height: 16pt !important;
	color: #6d6d6d;
}


.btx-author h3, .btx-navigation-label, .btx-uppercase, .btx-widgets h3, .widget .btx-mega-menu .btx-mega-menu-title, .woocommerce table.shop_table th {
    text-transform: uppercase;
    font-family: karla !important;
    font-size: 9pt !important;
    letter-spacing: 0.2em !important;
	color: #6d6d6d;
}

.btx-footer-widgets-content .widget a {
    color: #6d6d6d !important;
}

.btx-dark-scheme strong, .btx-dark-scheme .btx-menu .btx-mega-menu .btx-mega-menu-title, .btx-dark-scheme .btx-menu .btx-mega-menu .btx-mega-menu-title:hover, .btx-dark-scheme .btx-menu .btx-cart-box a {
    color: #6d6d6d;
}

.btx-dark-scheme, .btx-entry-dark-scheme, .btx-slider-dark-scheme {
    color: #6d6d6d !important;
}

input, textarea, select {
    color: #6d6d6d !important;
    background-color: #ffffff;
    border-color: #d2d2d2;
}

.btx-post-headline {
	padding-top: 60px;
	padding-bottom: 0px;
}


@media screen and (min-width: 1500px) {
.widget.widget_text p {
    margin-bottom: 1em;
    max-width: 300pt;
}
}

@media (max-width: 767px)  {
.btx-button > .btnx {
    border-radius: 20px;
	    border-width: 0.10em !important;
    font-size: 8pt!important;
		font-weight: 400;	
}
}

.btx-button > .btnx {
    border-radius: 20px;
    border-width: 0.05em;
    font-size: 8pt!important;
		font-weight: 400;	
}

.btx-footer-column {
    padding-top: 40px;
	  padding-bottom: 40px;

}

@media (max-width: 767px)  {
.btx-post .btx-post-title {
    font-size: 35px;
    line-height: 45px;
    letter-spacing: -.01em;
    font-weight: 500;
    text-align: center !important;
		padding-right: 0;
    padding-bottom: 20pt;
}
}

	/* links */
	
.btx-post-content a {
font-weight: bold !important;
}

/*Related posts Classic*/

.btx-relatedport.btx-with-background, .btx-relatedpost.btx-with-background {
    padding: 0px 0px !important;
}

.btx-relatedport, .btx-relatedpost {
    margin: 0px !important;
}

/*404 page*/

.btx-404-page .btx-404-header {
	font-weight: 600;
	font-size: 96px;
	line-height: 1;
	letter-spacing: 4px;
	display: none;
}

.btx-404-page h2 {
    font-size: 35px;
}

.btx-post--magazine .btx-post-body, .btx-post--magazine .btx-post-media .btx-quote-author, .btx-post--magazine.btx-post-featured--fullwidth .btx-post-headline-inner, .btx-post--magazine:not(.btx-post-featured--fullwidth) .btx-post-headline, .btx-post-featured--overlap .btx-main {
    padding-right: 3%;
    padding-left: 0%;
}

.btx-author h3, .btx-navigation-label, .btx-uppercase, .btx-widgets h3, .widget .btx-mega-menu .btx-mega-menu-title, .woocommerce table.shop_table th {
    text-transform: uppercase;
    font-family: karla !important;
    font-size: 7pt !important;
    letter-spacing: 0.1em !important;
    color: #6d6d6d;
}

/* Footer Mobile */

@media (max-width: 767px)  { .btx-layout-responsive 
 .btx-footer-widgets-content {
	padding-top: 15px;
	padding-bottom: 30pt;
}

@media (max-width: 767px)  {
.btx-layout-responsive .btx-footer-column {
	padding-top: 20px;
	padding-bottom: 0px;
}

@media (max-width: 767px)  {
.btx-layout-responsive .btx-footer-column:last-child {
	padding-bottom: 0;
	display: none; 
	}
	
	.btx-navbar--mobile .btx-collapsed-menu--full a, .btx-collapsed-menu--classic a {
    font-size: 22px;
    text-transform: Capitalize !important;
} 
	}
	
/* Responsive Logo */
	
img.btx-fixed-nav-logo, .btx-navbar.btx-navbar--alternate img.btx-navbar-logo--image {
    max-width: 45px !important;
}
	
		</style>
			</head>

	

<body class="home page-template-default page page-id-15826 theme-bateaux woocommerce-no-js btx-layout btx-layout--wide btx-layout-responsive btx-layout--topnav btx-layout--topnav-inline btx-layout--fixednav" data-scheme="light" data-layout="wide" data-arrow_style="ln-chevron" data-arrow_background="circle">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>	
	<div class="btx-wrapper btx-p-bg-bg">

		
			
			<header class="btx-header" data-transparent="" data-height="107">
				
															
<nav class="btx-navbar btx-navbar--inline btx-light-scheme btx-highlight-fade btx-navbar-dropdown-dark-scheme btx-navbar--inline--outer btx-navbar--custom has-fixed-logo" data-height="107" data-style="inline" data-fixed="true" data-height_fixed="75" data-autohide="true" data-transition="custom-show" data-transition_point="">
	<div class="btx-container--fullwidth">
		<div class="btx-navbar-content-wrapper">
			<ul id="menu-home" class="btx-navbar-nav btx-menu btx-menu-inline-left"><li  id="menu-item-15812" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15812"><a href="/">DAST TECH</a></li>
                
                <li  id="menu-item-16694" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16694"><a href="#blogs">Blogs</a></li><li  id="menu-item-21928" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21928"><a href="/create">create blogs</a></li></ul><ul class="btx-navbar-nav btx-menu btx-menu-inline-right"><li  id="menu-item-17979" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17979"><a href="/register">Account</a></li><li  id="menu-item-15975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15975"><a href="https://lnkd.in/deZZhAMM">Telegram</a></li><li  id="menu-item-16531" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16531"><a href="https://lnkd.in/dMZNbBvq">Twitter</a></li>
                    
                   
                        
                        <div class="btx-cart-box btx-s-bg-bg"><div class="widget_shopping_cart"><div class="widget_shopping_cart_content">

	<p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>


</div></div></div></li></ul>
			
			<div class="btx-navbar-header">
				<a class="btx-navbar-brand" href="#blogs">

																	DAST BLOGS
									</a>
			</div>
		</div>
	</div>
</nav>
										<div class="btx-header-widgets btx-left-alignment btx-light-scheme">
						<div class="btx-header-widgets-content">
							<div class="btx-container--fullwidth">
								<div class="btx-row">

																			<div class="btx-header-widgets-column btx-p-border-border btx-col-3">
																					</div>
																			<div class="btx-header-widgets-column btx-p-border-border btx-col-3">
																					</div>
																			<div class="btx-header-widgets-column btx-p-border-border btx-col-3">
																					</div>
																			<div class="btx-header-widgets-column btx-p-border-border btx-col-3">
																					</div>
																	</div>
							</div>
						</div>
					</div>
													
<nav class="btx-navbar--mobile btx-navbar--mobile--full btx-navbar--minimal btx-navbar--minimal--full btx-light-scheme has-fixed-logo" data-height="60" data-fixed="true" data-autohide="true" data-transition="custom-show" data-transition_point="">
	<div class="btx-container--fullwidth">
		<div class="btx-navbar-content-wrapper">
			<div class="btx-navbar-header">
				<a class="btx-navbar-brand" href="#">
DAST TECH
									</a>
			</div>

			
							<a class="btx-collapsed-button" href="#" data-target=".btx-collapsed-menu">
					<span class="btx-lines"></span>
				</a>
									<div class="btx-collapsed-menu btx-collapsed-menu--full btx-p-bg-bg">
						<div class="btx-collapsed-menu-inner">
							<ul id="menu-home-1" class="btx-navbar-nav btx-menu"><li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15812"><a href="/dast-blog">DAST TECH</a></li>
                             
                                <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16694"><a href="">About</a></li><li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21928"><a href="">Our Blogs</a></li><li  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17979"><a href="">Account</a></li><li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15975"><a href="">Telegarm</a></li><li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16531"><a href="">Twitter</a></li><li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16229">
                                
                                    
                                    


</div></div></div></li></ul>						</div>
					</div>
									</div>
	</div>
</nav>
							</header>

		
	










							<main class="py-4">
        @yield('content')
    </main>













	


<style>
			.sd-social-icon .sd-content ul li a.sd-button>span {
				margin-left: 0;
			}




		</style>
		
		
			
		<footer class="btx-footer btx-dark-scheme type-footer-bottombar">

<div class="btx-footer-widgets btx-left-align">
<div class="btx-container--fullwidth">
<div class="btx-footer-widgets-content">
<div class="btx-row">

																					<div class="btx-footer-column btx-p-border-border btx-col-4">
			<div class="btx-widgets">
				<ul class="btx-widgets-list">
					<li id="text-5" class="widget widget_text">			<div class="textwidget"><p>DAST is a technology company that provides software development solutions,
blockchain solutions and digital services to individuals, businesses and organisations.</p>
</div>
</li>
				</ul>
			</div>
		</div>
																															<div class="btx-footer-column btx-p-border-border btx-col-4">
			<div class="btx-widgets">
				<ul class="btx-widgets-list">
					<li id="bateaux_widget_social-3" class="widget btx-widget btx-widget-social"><div class="btx-social"><div class="btx-social-inner"><a href="https://lnkd.in/dRtGxc6y" class="btx-social-item btx-social-facebook" target="_blank"><span class="btx-icon btx-icon--with-hover btx-icon--plain btx-icon--hover-plain btx-icon--small"><span class="btx-icon-normal btx-icon-plain btx-p-text-color" ><i class="twf twf-facebook"></i></span><span class="btx-icon-hover btx-icon-plain btx-p-brand-color" ><i class="twf twf-facebook"></i></span></span></a><a href="https://lnkd.in/deZZhAMM" class="btx-social-item btx-social-instagram" target="_blank"><span class="btx-icon btx-icon--with-hover btx-icon--plain btx-icon--hover-plain btx-icon--small"><span class="btx-icon-normal btx-icon-plain btx-p-text-color" ><i class="twf twf-instagram"></i></span><span class="btx-icon-hover btx-icon-plain btx-p-brand-color" ><i class="twf twf-instagram"></i></span></span></a><a href="https://lnkd.in/deZZhAMM" class="btx-social-item btx-social-youtube" target="_blank"><span class="btx-icon btx-icon--with-hover btx-icon--plain btx-icon--hover-plain btx-icon--small"><span class="btx-icon-normal btx-icon-plain btx-p-text-color" ><i class="twf twf-youtube"></i></span><span class="btx-icon-hover btx-icon-plain btx-p-brand-color" ><i class="twf twf-youtube"></i></span></span></a></div></div></li>
				</ul>
			</div>
		</div>
																															<div class="btx-footer-column btx-p-border-border btx-col-4">
			<div class="btx-widgets">
				<ul class="btx-widgets-list">
					<li id="search-3" class="widget widget_search"><form role="search" method="get" action="#">
<div class="btx-search-form">
<input type="text" value="" placeholder="Search" name="s" />
</div>
</form>
</li>
				</ul>
			</div>
		</div>
										
</div>
</div>
</div>
</div>

<div class="btx-bottombar btx-p-border-border">
<div class="btx-container--fullwidth">
<div class="btx-bottombar-content btx-p-border-border">

																		<div class="btx-widgets left">

														<div class="widget btx-widget-text">All content is © 2022 by DAST TEAM.
All rights reserved. Design by  <b><a>TECH TEAM</a></b>.</div>
		
		
		
	</div>
																																										
</div>
</div>
</div>

</footer>

</div>
<!--  -->
<style>
.sd-social-icon .sd-content ul li a.sd-button>span {
margin-left: 0;
}
</style><script defer id="bilmur" data-provider="wordpress.com" data-service="atomic"  src="https://s0.wp.com/wp-content/js/bilmur.min.js?m=202326"></script>
<!-- Facebook Pixel Code -->
<noscript>
<img
height="1"
width="1"
style="display:none"
alt="fbpx"
src="https://www.facebook.com/tr?id=216287506677118&ev=PageView&noscript=1"
/>
</noscript>
<!-- End Facebook Pixel Code -->
<script type="text/javascript">
(function () {
var c = document.body.className;
c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
document.body.className = c;
})();
</script>
<script type='text/javascript' src='https://c0.wp.com/c/6.2.2/wp-includes/js/comment-reply.min.js' id='comment-reply-js'></script>
<script type='text/javascript' id='mediaelement-core-js-before'>
var mejsL10n = {"language":"en","strings":{"mejs.download-file":"Download File","mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen":"Fullscreen","mejs.play":"Play","mejs.pause":"Pause","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.live-broadcast":"Live Broadcast","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
</script>
<script type='text/javascript' src='https://c0.wp.com/c/6.2.2/wp-includes/js/mediaelement/mediaelement-and-player.min.js' id='mediaelement-core-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/6.2.2/wp-includes/js/mediaelement/mediaelement-migrate.min.js' id='mediaelement-migrate-js'></script>
<script type='text/javascript' id='mediaelement-js-extra'>
/* <![CDATA[ */
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive","audioShortcodeLibrary":"mediaelement","videoShortcodeLibrary":"mediaelement"};
/* ]]> */
</script>
<script type='text/javascript' src='https://c0.wp.com/c/6.2.2/wp-includes/js/mediaelement/wp-mediaelement.min.js' id='wp-mediaelement-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/6.2.2/wp-includes/js/hoverIntent.min.js' id='hoverIntent-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/6.2.2/wp-includes/js/jquery/ui/core.min.js' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='https://greenkitchenstories.com/wp-content/themes/bateaux/dist/js/main-vendors.min.js?ver=1.2.6' id='bateaux-main-vendors-js'></script>
<script type='text/javascript' id='bateaux-js-extra'>
/* <![CDATA[ */
var BateauxOptions = {"ajax_url":"https:\/\/greenkitchenstories.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://greenkitchenstories.com/wp-content/themes/bateaux/dist/js/main.min.js?ver=1.2.6' id='bateaux-js'></script>
<script type='text/javascript' src='https://greenkitchenstories.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.7.7' id='swv-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/greenkitchenstories.com\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://greenkitchenstories.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.7.7' id='contact-form-7-js'></script>
<script type='text/javascript' id='printomatic-js-js-before'>
var print_data = {"pom_html_top":"","pom_html_bottom":"","pom_do_not_print":"","pom_pause_time":""}
</script>
<script type='text/javascript' src='https://greenkitchenstories.com/wp-content/plugins/print-o-matic/js/printomat.js?ver=2.0.11' id='printomatic-js-js'></script>
<script type='text/javascript' src='https://greenkitchenstories.com/wp-content/plugins/print-o-matic/js/print_elements.js?ver=1.1' id='pe-js-js'></script>
<script type='text/javascript' src='https://c0.wp.com/p/woocommerce/7.8.0/assets/js/jquery-blockui/jquery.blockUI.min.js' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/greenkitchenstories.com\/cart\/","is_cart":"","cart_redirect_after_add":"yes"};
/* ]]> */
</script>
<script type='text/javascript' src='https://c0.wp.com/p/woocommerce/7.8.0/assets/js/frontend/add-to-cart.min.js' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='https://c0.wp.com/p/woocommerce/7.8.0/assets/js/js-cookie/js.cookie.min.js' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='https://c0.wp.com/p/woocommerce/7.8.0/assets/js/frontend/woocommerce.min.js' id='woocommerce-js'></script>
<script type='text/javascript' id='wd-asl-ajaxsearchlite-js-before'>
window.ASL = typeof window.ASL !== 'undefined' ? window.ASL : {}; window.ASL.wp_rocket_exception = "DOMContentLoaded"; window.ASL.ajaxurl = "https:\/\/greenkitchenstories.com\/wp-admin\/admin-ajax.php"; window.ASL.backend_ajaxurl = "https:\/\/greenkitchenstories.com\/wp-admin\/admin-ajax.php"; window.ASL.js_scope = "jQuery"; window.ASL.asl_url = "https:\/\/greenkitchenstories.com\/wp-content\/plugins\/ajax-search-lite\/"; window.ASL.detect_ajax = 1; window.ASL.media_query = 4758; window.ASL.version = 4758; window.ASL.pageHTML = ""; window.ASL.additional_scripts = [{"handle":"wd-asl-ajaxsearchlite","src":"https:\/\/greenkitchenstories.com\/wp-content\/plugins\/ajax-search-lite\/js\/min\/plugin\/optimized\/asl-prereq.js","prereq":[]},{"handle":"wd-asl-ajaxsearchlite-core","src":"https:\/\/greenkitchenstories.com\/wp-content\/plugins\/ajax-search-lite\/js\/min\/plugin\/optimized\/asl-core.js","prereq":[]},{"handle":"wd-asl-ajaxsearchlite-vertical","src":"https:\/\/greenkitchenstories.com\/wp-content\/plugins\/ajax-search-lite\/js\/min\/plugin\/optimized\/asl-results-vertical.js","prereq":["wd-asl-ajaxsearchlite"]},{"handle":"wd-asl-ajaxsearchlite-load","src":"https:\/\/greenkitchenstories.com\/wp-content\/plugins\/ajax-search-lite\/js\/min\/plugin\/optimized\/asl-load.js","prereq":["wd-asl-ajaxsearchlite-vertical"]}]; window.ASL.script_async_load = false; window.ASL.init_only_in_viewport = true; window.ASL.font_url = "https:\/\/greenkitchenstories.com\/wp-content\/plugins\/ajax-search-lite\/css\/fonts\/icons2.woff2"; window.ASL.css_async = false; window.ASL.highlight = {"enabled":false,"data":[]}; window.ASL.analytics = {"method":0,"tracking_id":"","string":"?ajax_search={asl_term}","event":{"focus":{"active":1,"action":"focus","category":"ASL","label":"Input focus","value":"1"},"search_start":{"active":0,"action":"search_start","category":"ASL","label":"Phrase: {phrase}","value":"1"},"search_end":{"active":1,"action":"search_end","category":"ASL","label":"{phrase} | {results_count}","value":"1"},"magnifier":{"active":1,"action":"magnifier","category":"ASL","label":"Magnifier clicked","value":"1"},"return":{"active":1,"action":"return","category":"ASL","label":"Return button pressed","value":"1"},"facet_change":{"active":0,"action":"facet_change","category":"ASL","label":"{option_label} | {option_value}","value":"1"},"result_click":{"active":1,"action":"result_click","category":"ASL","label":"{result_title} | {result_url}","value":"1"}}};
</script>
<script type='text/javascript' src='https://greenkitchenstories.com/wp-content/plugins/ajax-search-lite/js/min/plugin/optimized/asl-prereq.js?ver=4758' id='wd-asl-ajaxsearchlite-js'></script>
<script type='text/javascript' src='https://greenkitchenstories.com/wp-content/plugins/ajax-search-lite/js/min/plugin/optimized/asl-core.js?ver=4758' id='wd-asl-ajaxsearchlite-core-js'></script>
<script type='text/javascript' src='https://greenkitchenstories.com/wp-content/plugins/ajax-search-lite/js/min/plugin/optimized/asl-results-vertical.js?ver=4758' id='wd-asl-ajaxsearchlite-vertical-js'></script>
<script type='text/javascript' src='https://greenkitchenstories.com/wp-content/plugins/ajax-search-lite/js/min/plugin/optimized/asl-load.js?ver=4758' id='wd-asl-ajaxsearchlite-load-js'></script>
<script type='text/javascript' src='https://greenkitchenstories.com/wp-content/plugins/ajax-search-lite/js/min/plugin/optimized/asl-wrapper.js?ver=4758' id='wd-asl-ajaxsearchlite-wrapper-js'></script>
<script defer type='text/javascript' src='https://stats.wp.com/e-202326.js' id='jetpack-stats-js'></script>
<script type='text/javascript' id='jetpack-stats-js-after'>
_stq = window._stq || [];
_stq.push([ "view", {v:'ext',blog:'156933544',post:'15826',tz:'2',srv:'greenkitchenstories.com',hp:'atomic',ac:'2',amp:'0',j:'1:12.3-a.7'} ]);
_stq.push([ "clickTrackerInit", "156933544", "15826" ]);
</script>


<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      setup: function(editor) {
        editor.on('change', function(e) {
          editor.save();
        });
      }
    });
  </script>
</body>
</html>