<html>

<head>
    <title>

    </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styleHome.css">

    <style>
        @font-face{
            font-family: Heading;
            src: url("font/BlackOpsOne-Regular.ttf");
        } 
        h1{
            font-family: Heading;
            font-size: 60px;
        }

    #tleft{
        border-radius:9px 0px 0px 0px;
    }
    #tright{
        border-radius:0px 9px 0px 0px;
    }
    table{
        
        border: 5px, inset black;
        text-align:center;
        border-radius:5px;
    }
    th{
        border: 2px solid black;
        background-color:#3A3A37  ;
        padding:20px;
        color:white;
        font-family: Courier New, Courier, monospace;
    }
    tr{
        border: 2px solid black;
    }
    td{
        background-color: #BDE59B  ;
        padding:0px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    button{
        height:74px;
        width:100px;
        margin:0;   
        background-color:#83957C;
        border-radius:2px;
        border: 1px solid black;
        border-bottom:2px;
        border-top:0px;

    }
    #total{
        color:#474A49;
        font-size:20px;
        background-color:#AFC4BD  ;
        margin-top:20px;
        padding:10px;
        width:max-content;
    }
    #finish{
        background-color:#AFC4BD ;
        width:max-content;
        font-size:20px;
        text-decoration:none;
    }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script>
    function remove(id) {
        if (confirm('Are you sure')) {
            $.post('cartcancel.php', { pid: id });
            location.reload();
            alert('item deleted from cart');
            
        }
    }
</script>

</head>
<!-- <body style="background-image:url(login.jpg)"> -->

<body style="background:url(Login.jpg);">
    <section class="a">
        <div class=Header1>
            <h1>GaMeX<small>heat zone</small></h1>
        </div>
    </section>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li>
                    <a href="Home.html">Home</a>
                </li>
                <li>
                    <a href="Shop.html">Shop</a>
                </li>
                <li>
                    <a href="Login.php">Logout</a>
                </li>
                <li>
                    <a href="#">Cart</a>
                </li>
                <li>
                    <a href="https://www.facebook.com/GameX-384127525371895/" class="fa fa-facebook"></a>
                </li>
                <li>
                    <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                </li>

            </ul>
        </div>
    </nav>
    <center>
    <?php 
        include "cartdisp.php";
    ?>
    </center>






    
    
    
    <footer style="position: relative; width:1400px;top:600px; left: 0px; height: 180px; bottom: auto;" class="fc1_footer fc1"
    data-state=" " id="SITE_FOOTER" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER">
       <div id="SITE_FOOTERscreenWidthBackground" class="fc1screenWidthBackground" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$screenWidthBackground"
        style="width: 758px; left: 0px;">
           <div class="fc1_bg" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$screenWidthBackground.0"></div>
       </div>
       <div id="SITE_FOOTERcenteredContent" class="fc1centeredContent" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent">
           <div id="SITE_FOOTERbg" class="fc1bg" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$bg"></div>
           <div id="SITE_FOOTERinlineContent" class="fc1inlineContent" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent">
               <div style="left: 681px; width: 1050px; position: absolute; top: 61px;" class="s_SmHkWRichTextNewSkin" id="comp-j9tym3fb"
                data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb">
                   <p class="font_9" style="text-align:center; line-height:1.55em;">
                       <span class="color_11">Bengaluru, Karnataka, India</span>
                   </p>
               </div>
               <div style="left: 400px; width: 500px; position: absolute; top: 49px;" class="s_SmHkWRichTextNewSkin" id="comp-j9tym3fb1"
                data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb1">
                   <p class="font_9" style="text-align:center; line-height:1.55em;">
                       <span class="color_11">mkumarpani@gmail.com</span>
                   </p>
               </div>
               <div style="left: 386px; width: 500px; position: absolute; top: 73px;" class="s_SmHkWRichTextNewSkin" id="comp-j9tym3fb2"
                data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb2">
                   <p class="font_9" style="text-align:center; line-height:1.55em;">
                       <span class="color_11">9108906821</span>
                   </p>
               </div>
               <div style="width: 80px; left: 20px; position: absolute; top: 63px; height: 20px;" class="lb1" id="comp-j9tym3fb3" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3">
                   <ul aria-label="Social bar" id="comp-j9tym3fb3itemsContainer" class="lb1itemsContainer" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer">
                       <li style="width:20px;height:20px;margin-bottom:0;margin-right:10px;display:inline-block;" class="lb1imageItem" id="comp-j9tym3fb30image"
                        data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.0">
                           <a href="https://www.facebook.com/wix" target="_blank" data-content="https://www.facebook.com/wix" data-type="external"
                            id="comp-j9tym3fb30imagelink" class="lb1imageItemlink" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.0.$link">
                               <div id="comp-j9tym3fb30imageimage" style="position: absolute; width: 20px; height: 20px;" data-style="position:absolute"
                                class="lb1imageItemimage" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.0.$link.0">
                                   <div class="lb1imageItemimagepreloader" id="comp-j9tym3fb30imageimagepreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.0.$link.0.$preloader"></div>
                                   <img id="comp-j9tym3fb30imageimageimage" alt="" data-type="image" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.0.$link.0.$image"
                                    src="https://static.wixstatic.com/media/23fd2a2be53141ed810f4d3dcdcd01fa.png/v1/fill/w_20,h_20,al_c,usm_0.66_1.00_0.01/23fd2a2be53141ed810f4d3dcdcd01fa.png"
                                    style="width: 20px; height: 20px; object-fit: cover;">
                               </div>
                           </a>
                       </li>
                       <li style="width:20px;height:20px;margin-bottom:0;margin-right:10px;display:inline-block;" class="lb1imageItem" id="comp-j9tym3fb31image"
                        data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.1">
                           <a href="https://twitter.com/Wix" target="_blank" data-content="https://twitter.com/Wix" data-type="external" id="comp-j9tym3fb31imagelink"
                            class="lb1imageItemlink" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.1.$link">
                               <div id="comp-j9tym3fb31imageimage" style="position: absolute; width: 20px; height: 20px;" data-style="position:absolute"
                                class="lb1imageItemimage" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.1.$link.0">
                                   <div class="lb1imageItemimagepreloader" id="comp-j9tym3fb31imageimagepreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.1.$link.0.$preloader"></div>
                                   <img id="comp-j9tym3fb31imageimageimage" alt="" data-type="image" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.1.$link.0.$image"
                                    src="https://static.wixstatic.com/media/01ab6619093f45388d66736ec22e5885.png/v1/fill/w_20,h_20,al_c,usm_0.66_1.00_0.01/01ab6619093f45388d66736ec22e5885.png"
                                    style="width: 20px; height: 20px; object-fit: cover;">
                               </div>
                           </a>
                       </li>
                       <li style="width:20px;height:20px;margin-bottom:0;margin-right:10px;display:inline-block;" class="lb1imageItem" id="comp-j9tym3fb32image"
                        data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.2">
                           <a href="https://www.linkedin.com/company/wix-com" target="_blank" data-content="https://www.linkedin.com/company/wix-com"
                            data-type="external" id="comp-j9tym3fb32imagelink" class="lb1imageItemlink" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.2.$link">
                               <div id="comp-j9tym3fb32imageimage" style="position: absolute; width: 20px; height: 20px;" data-style="position:absolute"
                                class="lb1imageItemimage" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.2.$link.0">
                                   <div class="lb1imageItemimagepreloader" id="comp-j9tym3fb32imageimagepreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.2.$link.0.$preloader"></div>
                                   <img id="comp-j9tym3fb32imageimageimage" alt="" data-type="image" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb3.$itemsContainer.2.$link.0.$image"
                                    src="https://static.wixstatic.com/media/7528824071724d12a3e6c31eee0b40d4.png/v1/fill/w_20,h_20,al_c,usm_0.66_1.00_0.01/7528824071724d12a3e6c31eee0b40d4.png"
                                    style="width: 20px; height: 20px; object-fit: cover;">
                               </div>
                           </a>
                       </li>
                   </ul>
               </div>
               <div style="left: 480px; width: 322px; position: absolute; top: 140px;" class="s_SmHkWRichTextNewSkin" id="comp-j9tym3fb4"
                data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.$centeredContent.$inlineContent.$comp-j9tym3fb4">
                   <p class="font_10" style="text-align:center; line-height:1.43em;">
                       <span class="color_11">©2017 by GameX. Created by Pinaki Pani</span>
                   </p>
               </div>
           </div>
       </div>
   </footer>


</body>

</html>