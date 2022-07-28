    {{-- @php
        
        $email  = "iyidaclem@gmail.com";
            $title  = "WELCOME MESSAGE";
            $banner  = "https://dast.tech/assets/images/key.png";
            $name  = "Clement";
            $body  = "Hi, Clement \n
                    consectetur adipiscing elit. At egestas et pulvinar odio nec ut enim elit quam. Tempus enim posuere vel 
                    donec aliquam, elit est. Amet diam tellus at fames feugiat id praesent.
                    consectetur adipiscing elit. At egestas et pulvinar odio nec ut enim elit quam. Tempus enim posuere vel 
                    donec aliquam, elit est. Amet diam tellus at fames feugiat id praesent.
                    consectetur adipiscing elit. At egestas et pulvinar odio nec ut enim elit quam. Tempus enim posuere vel 
                    donec aliquam, elit est. Amet diam tellus at fames feugiat id praesent.";

        @endphp --}}
    <!DOCTYPE html>
    <html style=" 
            background-image: linear-gradient(122.8deg, #1D3062 14.84%, #3D272B 100%); 
            height:fit-content;
            background-size:cover;
            background-repeat:no-repeat;
            margin:0; padding:0px; width:100%">
            <head>
                <title>{{$data->subject}}</title>
            </head>

    <body 
            style="width:100%; margin:0px;
            background-image: linear-gradient(122.8deg, #1D3062 14.84%, #3D272B 100%); 
            padding : 2% 5%;
            height:fit-content;
            background-size:cover;
            background-repeat:no-repeat">

    <img src="{{ asset('/images/logo.png') }}" alt="Logo"> <img src="{{ asset('/images/dast.png') }}" style="width: 61px;height: 32px;" alt="Logo">
    <br>
    {{-- <img src="{{$banner}}"  
    style="
        width: 406px;
        height: 356.41px;
        margin-top: 60px;"
        alt=""> --}}


    <h1 style="
   
    /* Light/text-6xl */

    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 60px;
    /* or 60px */

    letter-spacing: 1px;

    /* Base/white */

    color: white;


    /* Inside auto layout */

    flex: none;
    order: 1;
    flex-grow: 0;">{{$data->subject}}</h1>

    <p style="


    /* identical to box height, or 133% */


    /* Slate/500 */

    color: white;


    /* Inside auto layout */

    flex: none;
    order: 2;
    flex-grow: 0;


    /* DAST USA Inc, 4 World Trade Center, 150 Greenwich Street, 62nd Floor, New York, NY 10007, USA */



    /* Slate/500 */

    color: white;
    line-height: 3em;
    /* Inside auto layout */

    flex: none;
    order: 3;
    flex-grow: 0;"">
    {{$data->body}}

    <br><br>
    <img src="{{ asset('/images/logo.png') }}" alt="Logo"> <img src="{{ asset('/images/dast.png') }}" style="width: 61px;height: 32px;" alt="Logo">


    <hr style="color:white">
    {{-- Socials --}}
    <a href="https://mobile.twitter.com/DastCommunity?t=9hyFOcQGgx1gKi3c1blSNA&s=09"><img src="{{ asset('/images/twitter.png') }}" style="width:30px" alt="Logo"> </a>
    <a href="https://m.facebook.com/dastofficial1/"><img src="{{ asset('/images/fb.png') }}" style="width:30px"  alt="Logo"></a>
    <a href="https://www.linkedin.com/company/digital-access-security-token/"><img src="{{ asset('/images/in.png') }}" style="width:30px" alt="Logo"> </a>
    <a href=""><img src="{{ asset('/images/ytb.png') }}" style="width:30px"  alt="Logo"></a>
    <a href="https://t.me/dastofficial1"><img src="{{ asset('/images/tg.jfif') }}" style="width:30px"  alt="Logo"></a><br>
    <br>
    </p>

    <p
    style="/* If you have questions or need help, don't hesitate to contact our support team! */

    /* identical to box height, or 133% */


    /* Slate/500 */

    color: white;


    /* Inside auto layout */

    flex: none;
    order: 2;
    flex-grow: 0;


    /* DAST USA Inc, 4 World Trade Center, 150 Greenwich Street, 62nd Floor, New York, NY 10007, USA */



    /* Slate/500 */

    color: white;


    /* Inside auto layout */

    flex: none;
    order: 3;
    flex-grow: 0;">
        If you have questions or need help, don't hesitate to contact our support team! <br><br>
    DAST USA Inc, 4 World Trade Center, 150 Greenwich Street, 62nd Floor, New York, NY 10007, USA	<br><br>

    Terms & Condition  <span style="color:white">|</span>  Privacy Policy  <span style="color:white">|</span> Contact Us <br><br>

    <small style="color:#ABABAB;">
        This message was sent to admin@dast.tech. If you don't want to receive 
        these emails from dast.tech in the future, you can edit your profile or <a href="#" style="color:red; font-weight:50"><small>Unsubscribe</small></a>.	
    </small>
    </p>


    </body>
    </html>