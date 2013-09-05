<!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF-8">
        <title>Samphil Mobile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="assets/css/jquery.mobile-1.3.2.min.css" />
        <link rel="stylesheet" href="assets/css/custom.css" />
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/jquery.mobile.js"></script>
        <script src="assets/js/custom.js"></script>
    </head>
    <body>

        <!--Home Page-->
        <div id="home" data-role="page" data-title="Samphil Mobile: Home">

            <div data-role="header" data-position="fixed" >
                <h1>Home</h1>
                <a href="#info" data-icon="info"  data-iconpos="notext" data-rel="dialog" class="ui-btn-right">Info</a>
            </div><!-- End header-->

            <!--Home content-->
            <div data-role="content">
                <p>Welcome To Samphil Mobile: Choose a category </p>
            </div><!-- End Home content-->
            <div data-role="controlgroup">
                <a href="#blog" data-transition="flip" data-role="button" data-icon="arrow-r">Blog</a>
                <a href="#videos" data-transition="flip" data-role="button" data-icon="arrow-r">Videos</a>
                <a href="#photos" data-transition="flip" data-role="button" data-icon="arrow-r">Photos</a>
                <a href="#twitter" data-transition="flip" data-role="button" data-icon="arrow-r">Tweets</a>
            </div>

        </div><!-- End home page-->

        <!--Blog Page-->
        <div id="blog" data-role="page" data-title="Samphil Mobile: Blog">

            <div data-role="header" data-position="fixed" data-id="sp_header">
                <h1>Blog</h1>
                <a href="#home" data-icon="home" class="ui-btn-left">Home</a>
            </div><!-- End header-->

            <!--Blog content-->
            <div data-role="content">
                <div id="postlist">

                </div>
            </div><!-- End Blog content-->

            <div data-role="footer" data-position="fixed" data-id="sp_footer">
                <div data-role="navbar">
                    <ul>
                        <li>
                            <a href="#home" data-transition="flip" data-role="button" data-icon="home">Home</a>
                        </li>
                        <li>
                            <a href="#" data-transition="flip" data-role="button" data-icon="arrow-r">Blog</a>
                        </li>
                        <li>
                            <a href="#videos" data-transition="flip" data-role="button" data-icon="arrow-r">Videos</a>
                        </li>
                        <li>
                            <a href="#photos" data-transition="flip" data-role="button" data-icon="arrow-r">Photos</a>
                        </li>
                        <li>
                            <a href="#twitter" data-transition="flip" data-role="button" data-icon="arrow-r">Tweets</a>
                        </li>
                    </ul>
                </div><!-- End navbar -->
            </div><!-- End footer -->

        </div><!-- End blog page-->


        <!--Videos Page-->
        <div id="videos" data-role="page" data-title="Samphil Mobile: Videos">

            <div data-role="header" data-position="fixed" data-id="sp_header">
                <h1>Videos</h1>
                <a href="#home" data-icon="home"  data-iconpos="notext">Home</a>
                <a href="#info" data-icon="info"  data-iconpos="notext" data-rel="dialog">Info</a>
            </div><!-- End header-->

            <!--Videos content-->
            <div data-role="content">
                <ul data-role="listview" data-filter="true">
                    <li><h2>Week 01</h2>
                        <p>Custom URLs and breadcrumbs in WordPress</p>
                        <img src="images/viewsourcelogo.png" alt="View Source logo" />
                        <ul>
                            <li><a href="http://www.lynda.com/Web-Interactive-Projects-tutorials/View-Source/93388-2.html">Creating a custom URL in WordPress</a>
                            </li>
                            <li><a href="http://www.youtube.com/watch?v=SaQDnhatWZ8">Adding breadcrumb links to your WordPress sites</a></li>
                            <li data-icon="back"><a href="#videos">Back</a></li>
                        </ul>
                    </li>

                    <li><h2>Week 02</h2>
                        <p>Using a CDN and the jQuery Cycle plugin</p>
                        <img src="images/viewsourcelogo.png" alt="View Source logo" />
                        <ul>
                            <li><a href="http://www.lynda.com/Web-Interactive-Projects-tutorials/View-Source/93388-2.html">Using a CDN to speed up your sites</a></li>
                            <li><a href="http://www.youtube.com/watch?v=jaWnAYloOeE">Creating a photo rotator with jQuery Cycle</a></li>
                            <li data-icon="back"><a href="#videos">Back</a></li>
                        </ul>			
                    </li>

                    <li><h2>Week 03</h2>
                        <p>Google Analytics QR Codes and jQuery UI DatePickers</p>
                        <img src="images/viewsourcelogo.png" alt="View Source logo" />
                        <ul>
                            <li><a href="http://www.lynda.com/Web-Interactive-Projects-tutorials/View-Source/93388-2.html">Tracking any campaign with Google Analytics</a></li>
                            <li><a href="http://www.youtube.com/watch?v=Q7l3-d45nJ0">Creating a date picker for your forms with jQuery</a></li>
                            <li data-icon="back"><a href="#videos">Back</a></li>
                        </ul>
                    </li>

                    <li><h2>Week 04</h2>
                        <p>Domains names and the Google Maps API</p>
                        <img src="images/viewsourcelogo.png" alt="View Source logo" />
                        <ul>
                            <li><a href="http://www.lynda.com/Web-Interactive-Projects-tutorials/View-Source/93388-2.html">Searching for and finding a domain name</a></li>
                            <li><a href="http://www.youtube.com/watch?v=idw5ZjXeyLA">Working with the Google Maps API</a></li>
                            <li data-icon="back"><a href="#videos">Back</a></li>
                        </ul>
                    </li>

                    <li><h2>Week 05</h2>
                        <p>Twitter feeds and PayPal buttons</p>
                        <img src="images/viewsourcelogo.png" alt="View Source logo" />
                        <ul>
                            <li><a href="http://www.youtube.com/watch?v=nLHsA37Rq8c">Adding custom Twitter searches and feeds to your sites</a></li>
                            <li><a href="http://www.lynda.com/Web-Interactive-Projects-tutorials/View-Source/93388-2.html">Adding PayPal buttons to your pages</a></li>
                            <li data-icon="back"><a href="#videos">Back</a></li>
                        </ul>
                    </li>

                    <li><h2>Week 06</h2>
                        <p>YouTube Feeds and HTML5 video</p>
                        <img src="images/viewsourcelogo.png" alt="View Source logo" />
                        <ul>
                            <li><a href="http://www.youtube.com/watch?v=TDzavcAapEw">Parsing and placing a YouTube video feed on your site</a></li>
                            <li><a href="http://www.lynda.com/Web-Interactive-Projects-tutorials/View-Source/93388-2.html">Embedding videos for all browsers and devices</a></li>
                            <li data-icon="back"><a href="#videos">Back</a></li>
                        </ul>
                    </li>

                    <li><h2>Week 07</h2>
                        <p>Galleria plug-in and selling your photos</p>
                        <img src="images/viewsourcelogo.png" alt="View Source logo" />
                        <ul>
                            <li><a href="http://www.youtube.com/watch?v=WCiYANlTpos">Creating a photo gallery with the Galleria jQuery plug-in</a></li>
                            <li><a href="http://www.lynda.com/Web-Interactive-Projects-tutorials/View-Source/93388-2.html">Selling your photos with Fotomoto</a></li>
                            <li data-icon="back"><a href="#videos">Back</a></li>
                        </ul>
                    </li>

                    <li><h2>Week 08</h2>
                        <p>Listing directories with PHP and jQuery AJAX</p>
                        <img src="images/viewsourcelogo.png" alt="View Source logo" />
                        <ul>
                            <li><a href="http://www.youtube.com/watch?v=cZhyxnjQL8g">Listing files on a directory with PHP</a></li>
                            <li><a href="http://www.lynda.com/Web-Interactive-Projects-tutorials/View-Source/93388-2.html">Loading external pages dynamically with jQuery AJAX</a></li>
                            <li data-icon="back"><a href="#videos">Back</a></li>
                        </ul>
                    </li>

                    <li><h2>Week 09</h2>
                        <p>Uploading with PHP and CSS URL data</p>
                        <img src="images/viewsourcelogo.png" alt="View Source logo" />
                        <ul>
                            <li><a href="http://www.youtube.com/watch?v=PWuTMeH_eWE">How to build an image uploader using PHP</a></li>
                            <li><a href="http://www.lynda.com/Web-Interactive-Projects-tutorials/View-Source/93388-2.html">Embedding images into CSS with URL data</a></li>
                            <li data-icon="back"><a href="#videos">Back</a></li>
                        </ul>
                    </li>

                    <li><h2>Week 10</h2>
                        <p>Caching files and jQuery toggle buttons</p>
                        <img src="images/viewsourcelogo.png" alt="View Source logo" />
                        <ul>
                            <li><a href="http://www.lynda.com/Web-Interactive-Projects-tutorials/View-Source/93388-2.html">Controlling the caching of your files</a></li>
                            <li><a href="http://www.youtube.com/watch?v=mFGXeklJ-Bo">Creating a toggle button with jQuery</a></li>
                            <li data-icon="back"><a href="#videos">Back</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- content -->


            <div data-role="footer" data-position="fixed" data-id="sp_footer">
                <div data-role="navbar">
                    <ul>
                        <li>
                            <a href="#home" data-transition="flip" data-role="button" data-icon="home">Home</a>
                        </li>
                        <li>
                            <a href="#blog" data-transition="flip" data-role="button" data-icon="arrow-r">Blog</a>
                        </li>
                        <li>
                            <a href="#" data-transition="flip" data-role="button" data-icon="arrow-r">Videos</a>
                        </li>
                        <li>
                            <a href="#photos" data-transition="flip" data-role="button" data-icon="arrow-r">Photos</a>
                        </li>
                        <li>
                            <a href="#twitter" data-transition="flip" data-role="button" data-icon="arrow-r">Tweets</a>
                        </li>
                    </ul>
                </div><!-- End navbar -->
            </div><!-- End footer -->

        </div><!-- End Videos page-->


        <!--Photos Page-->
        <div id="photos" data-role="page" data-title="Samphil Mobile: Photos">

            <div data-role="header" data-position="fixed" data-id="sp_header">
                <h1>Photos</h1>
                <a href="#home" data-icon="home"  data-iconpos="notext">Home</a>
                <a href="#info" data-icon="info"  data-iconpos="notext" data-rel="dialog">Info</a>
            </div><!-- End header-->

            <!--Photos content-->
            <div data-role="content">
                <p>Welcome To Samphil Mobile: This is the Photos Page</p>
            </div><!-- End Photos content-->

            <div data-role="footer" data-position="fixed" data-id="sp_footer">
                <div data-role="navbar">
                    <ul>
                        <li>
                            <a href="#home" data-transition="flip" data-role="button" data-icon="home">Home</a>
                        </li>
                        <li>
                            <a href="#blog" data-transition="flip" data-role="button" data-icon="arrow-r">Blog</a>
                        </li>
                        <li>
                            <a href="#videos" data-transition="flip" data-role="button" data-icon="arrow-r">Videos</a>
                        </li>
                        <li>
                            <a href="#" data-transition="flip" data-role="button" data-icon="arrow-r">Photos</a>
                        </li>
                        <li>
                            <a href="#twitter" data-transition="flip" data-role="button" data-icon="arrow-r">Tweets</a>
                        </li>
                    </ul>
                </div><!-- End navbar -->
            </div><!-- End footer -->

        </div><!-- End photos page-->

        <!--Twitter Page-->
        <div id="twitter" data-role="page" data-title="Samphil Mobile: Twitter">

            <div data-role="header" data-position="fixed" data-id="sp_header">
                <h1>Twitter</h1>
                <a href="#home" data-icon="home"  data-iconpos="notext">Home</a>
                <a href="#info" data-icon="info"  data-iconpos="notext" data-rel="dialog">Info</a>
            </div><!-- End header-->

            <!--Twitter content-->
            <div data-role="content">
                <p>Welcome To Samphil Mobile: This is the Twitter Page</p>
            </div><!-- End twitter content-->

            <div data-role="footer" data-position="fixed" data-id="sp_footer">
                <div data-role="navbar">
                    <ul>
                        <li>
                            <a href="#home" data-transition="flip" data-role="button" data-icon="home">Home</a>
                        </li>
                        <li>
                            <a href="#blog" data-transition="flip" data-role="button" data-icon="arrow-r">Blog</a>
                        </li>
                        <li>
                            <a href="#videos" data-transition="flip" data-role="button" data-icon="arrow-r">Videos</a>
                        </li>
                        <li>
                            <a href="#photos" data-transition="flip" data-role="button" data-icon="arrow-r">Photos</a>
                        </li>
                        <li>
                            <a href="#twitter" data-transition="flip" data-role="button" data-icon="arrow-r">Tweets</a>
                        </li>
                    </ul>
                </div><!-- End navbar -->
            </div><!-- End footer -->

        </div><!-- End twitter page-->

        <!-- Page to hold each posts -->
        <div data-role="page" id="posts">
            <div data-role="header" data-position="fixed">
                <a href="#blog" data-icon="back" data-iconpos="notext">back to blog</a>
                <h1>Posts</h1>
            </div> <!-- End header -->
            <div data-role="content">
                <div id="mypost"></div>
            </div> <!-- End content -->
        </div> <!-- End page posts -->


        <!-- Info Dialog -->
        <div data-role="page" id="info">
            <div data-role="header">
                <h1>About Samphil Mobile</h1>
            </div><!-- End Header -->
            <div data-role="content">
                <p>Samphil Mobile is a Kenyan Based Mobile development firm in Nairobi. We Specialize in building mobile web applications</p>
                <a href="#home" data-role="button" data-inline="true">home</a>
                <a href="#" data-role="button" data-inline="true" data-rel="back">cancel</a>
            </div><!-- End Content -->
        </div> <!-- End Info Dialog -->
        <script src="http://www.samphiltech.com/?json=recentstories&callback=listPosts" type="text/javascript"></script>
    </body>
</html>
