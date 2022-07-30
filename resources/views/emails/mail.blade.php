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

    <img src="https://app.dast.tech/images/logo.png" alt="Logo"> <img src="https://app.dast.tech/images/dast.png" style="width: 61px;height: 32px;" alt="Logo">
    <br>
    

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
    flex-grow: 0;">
    {{$data->body}}

    @include('inc.footer');

    </body>
    </html>