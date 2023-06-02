@extends('blog.app')

@section('content')



<section class="home" id="home" style="margin-top: 5rem;">
    <div class="home-text container" style="color: rgb(11, 1, 72);">
       

        
        <h2 style="font-size: x-larger;" >WEB3 POWERED!</h2>
        <h5 class="home-title" style="font-size: larger;" class="home-title">TECH INITIATED! DAST PROMPTED</h5>

        <input style="padding:15px;border-radius: 10px;width:300px; color:rgb(2, 2, 98);font-weight:bolder;" type="text" name="" id="" placeholder="youremail@domain.com">
        <span style="display: block; margin-top:1rem;color: rgb(1, 1, 73);" class="home-subtitle">Already waiting for the next blog post? <br> Let's get to inform you before anyone else </span>
        <p style="color: gold;">Dast Technologies</p>
    </div>
</section>

<section class="about container" id="about">
    <div class="contentBx">
        <h2 class="titleText">Catch up with the Latest Trends</h2>
        <p class="title-text">
            Never miss out again with where blockchain web3 and tech is going! DAST Blog got you covered!
        </p>
        <a href="#" class="btn2">Read more</a>
    </div>
    <div class="imgBx">
        <img src="https://media.istockphoto.com/id/1337408909/photo/shot-of-a-young-woman-working-on-her-laptop-on-the-couch-at-home.jpg?s=612x612&w=0&k=20&c=8QHqDt2-SyUOGaeUQ2krv3I55A_Zrp0ns5kbyg-OFVk=" alt="" class="fitBg">
    </div>
</section>

<div class="post-filter container">
    <span class="filter-item active-filter" data-filter="all">All</span>
    <span class="filter-item" data-filter="tech">Tech</span>
    <span class="filter-item" data-filter="food">Food</span>
    <span class="filter-item" data-filter="news">News</span>
</div>

<div class="post container">
    <!-- Post 1 -->
    <div class="post-box tech">
        <img src="https://media.istockphoto.com/id/1049277550/photo/retro-blog-bulb-sign-with-leather-armchair.jpg?s=612x612&w=0&k=20&c=EzRprmTVPOk5bONifiiBrq1S6j7VgqWY1sc8tKVbm4A=" alt="" class="post-img">
        <h2 class="category">Tech</h2>
        <a href="#" class="post-title">How to create the best UI with Figma</a>
        <span class="post-date">12 Feb 2022</span>
        <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
        <div class="profile">
            <img src="https://media.istockphoto.com/id/1198229233/photo/getting-close-enough-to-capture-the-details.jpg?s=612x612&w=0&k=20&c=8ssdkOODW1LIVQKvvUDB1UrNOeXtGHT0ey6oU2_WVhs=" alt="" class="profile-img">
            <span class="profile-name">MKHB</span>
        </div>
    </div>
    <!-- Post 2 -->
    <div class="post-box food">
        <img src="https://media.istockphoto.com/id/917852860/photo/blogging-concept-yellow-blog-text-over-blue-background.jpg?s=612x612&w=0&k=20&c=wNcIDBbLWgkAYDNI0EZhLOKQWFYUTeNfLQX93AebX1I=" alt="" class="post-img">
        <h2 class="category">Tech</h2>
        <a href="#" class="post-title">How to create the best UI with Figma</a>
        <span class="post-date">12 Feb 2022</span>
        <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
        <div class="profile">
            <img src="https://media.istockphoto.com/id/1206716363/photo/connect-and-relax-at-home.jpg?s=612x612&w=0&k=20&c=3XZrUUADETczwUngHLCKzWAGQIBRzpHaDHttVxG7TZY=" alt="" class="profile-img">
            <span class="profile-name">MKHB</span>
        </div>
    </div>
    <!-- Post 3 -->
    <div class="post-box food">
        <img src="https://media.istockphoto.com/id/1280349927/photo/lets-start-a-baby-hair-challenge.jpg?s=612x612&w=0&k=20&c=VR1GDgZ50__AD3mJMe1vICrR67O1NBTvjauSoPIvmOc=" alt="" class="post-img">
        <h2 class="category">Food</h2>
        <a href="#" class="post-title">How to create the best UI with Figma</a>
        <span class="post-date">12 Feb 2022</span>
        <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
        <div class="profile">
            <img src="https://media.istockphoto.com/id/1130150680/photo/blog-and-information-website-concept-workplace-background-with-text.jpg?s=612x612&w=0&k=20&c=BtknpmORYmgMHN5Qty7N0o5mvsk204BG-q4oR8gFl_g=" alt="" class="profile-img">
            <span class="profile-name">MKHB</span>
        </div>
    </div>
    <!-- Post 4 -->
    <div class="post-box news">
        <img src="https://media.istockphoto.com/id/1480653257/photo/happy-millennial-african-american-lady-in-apron-sitting-on-floor-with-cleaning-supplies.jpg?s=612x612&w=0&k=20&c=sgISkLTzxxDnzneOI7iNsceMfMed9_SuYtEDtPmM_Ok=" alt="" class="post-img">
        <h2 class="category">Tech</h2>
        <a href="#" class="post-title">How to create the best UI with Figma</a>
        <span class="post-date">12 Feb 2022</span>
        <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
        <div class="profile">
            <img src="https://media.istockphoto.com/id/1401286755/photo/blue-laptop-flying-on-pink-background.jpg?s=612x612&w=0&k=20&c=q5Dd8l-CxbsP5FRLA2w3W7eBAm-aB23OpoE8LjvopGo=" alt="" class="profile-img">
            <span class="profile-name">MKHB</span>
        </div>
    </div>
    <!-- Post 5 -->
    <div class="post-box tech">
        <img src="https://media.istockphoto.com/id/1164102275/photo/laptops-on-the-desk.jpg?s=612x612&w=0&k=20&c=s9pLoo5OdHQU6lT2-reIrs1TsKjbGNWZ-hPWl2_tPx8=" alt="" class="post-img">
        <h2 class="category">Tech</h2>
        <a href="#" class="post-title">How to create the best UI with Figma</a>
        <span class="post-date">12 Feb 2022</span>
        <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
        <div class="profile">
            <img src="https://media.istockphoto.com/id/1449034129/photo/blogging-for-beginners-how-to-start-blog-word-blog-and-laptop-mobile-phone-notebook-and.jpg?s=612x612&w=0&k=20&c=-NTl4B30g2wiXj8jaXRWIwD5rcUUsT_b0oltHmrvgKU=" alt="" class="profile-img">
            <span class="profile-name">MKHB</span>
        </div>
    </div>
    <!-- Post 6 -->
    <div class="post-box news">
        <img src="https://media.istockphoto.com/id/1323293883/photo/vaccination-young-woman-blogger-talking-with-followers-live-streaming-and-showing-adhesive.jpg?s=612x612&w=0&k=20&c=M3eL6SafEHV90lTSXyzjldrYpEUvszrZtF6B4RVz6cs=" alt="" class="post-img">
        <h2 class="category">News</h2>
        <a href="#" class="post-title">How to create the best UI with Figma</a>
        <span class="post-date">12 Feb 2022</span>
        <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
        <div class="profile">
            <img src="https://media.istockphoto.com/id/1441395512/photo/businesswoman-works-at-laptop-prepares-online-store-orders-for-sending-small-business.jpg?s=612x612&w=0&k=20&c=AX_LU8m4LodM_HDXXMwjUsq-B1mJ5p0Xxez1XdQt0Gs=" alt="" class="profile-img">
            <span class="profile-name">MKHB</span>
        </div>
    </div>
    <!-- Post 7 -->
    <div class="post-box tech">
        <img src="https://media.istockphoto.com/id/1094254386/photo/act-on-your-dreams.jpg?s=612x612&w=0&k=20&c=l23cCFc-G4gUCXX6S57LALWCW_7SUi_cz9yCqtYbSHc=" alt="" class="post-img">
        <h2 class="category">Tech</h2>
        <a href="#" class="post-title">How to create the best UI with Figma</a>
        <span class="post-date">12 Feb 2022</span>
        <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
        <div class="profile">
            <img src="https://media.istockphoto.com/id/641691488/photo/blog-writing-online-on-the-internet-blue-computer-keyboard.jpg?s=612x612&w=0&k=20&c=B_KvGiZ4J6ie-XVojXYafk8olShah84xw9g06gZFuJ0=" alt="" class="profile-img">
            <span class="profile-name">MKHB</span>
        </div>
    </div>
    <!-- Post 1 -->
    <div class="post-box news">
        <img src="https://media.istockphoto.com/id/1438621756/photo/laptop-women-and-digital-marketing-employees-on-a-blog-website-working-on-cool-trendy-online.jpg?s=612x612&w=0&k=20&c=kZdAk4YT950KibuQyYXNX14ZYdy_LXynB0jII0zCOq8=" alt="" class="post-img">
        <h2 class="category">News</h2>
        <a href="#" class="post-title">How to create the best UI with Figma</a>
        <span class="post-date">12 Feb 2022</span>
        <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
        <div class="profile">
            <img src="https://media.istockphoto.com/id/1173822709/photo/boy-making-vlog.jpg?s=612x612&w=0&k=20&c=PgwYficoTjdTh6rsHuK6EHNyUnA7-mqzRdNO-J7gY0I=" alt="" class="profile-img">
            <span class="profile-name">MKHB</span>
        </div>
    </div>
    <!-- Post 9 -->
    <div class="post-box food">
        <img src="https://media.istockphoto.com/id/1314027429/photo/green-3d-speech-bubble-on-blue-laptop-pc-and-portable-information-device-applications.jpg?s=612x612&w=0&k=20&c=7ZWIY4mFkplQtlmozLj-kWzVYDVwreVGmgIqebI-hNA=" alt="" class="post-img">
        <h2 class="category">Food</h2>
        <a href="#" class="post-title">How to create the best UI with Figma</a>
        <span class="post-date">12 Feb 2022</span>
        <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
        <div class="profile">
            <img src="https://media.istockphoto.com/id/1479143249/photo/whats-your-story.jpg?s=612x612&w=0&k=20&c=khSNon1iEAnaIQUhTa6QEBV2sx1OBmJqd1PIaq0rANo=" alt="" class="profile-img">
            <span class="profile-name">MKHB</span>
        </div>
    </div>
</div>





