<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, Initial-scale = 1">
    <title> On Hover Drop Down Menu Tutorial </title>
 </head>
 <body>

    <script src="./assets/frontend/js/jquery-3.6.0.js"></script>

    <nav>
        <div id="wrapper">
            <ul id="menu">
                <li>
                    <a href="#">Home
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Categories</a></li>
                            <li><a href="#">Social</a></li>
                        </ul>
                    </a>
                </li>
                <li>
                    <a href="#">About
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Categories</a></li>
                            <li><a href="#">Social</a></li>
                        </ul>
                    </a>
                </li>
                <li>
                    <a href="#">Categories
                        <ul>
                            <li><a href="#">Home
                                    <ul class="expanded">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Categories</a></li>
                                        <li><a href="#">Social</a></li>
                                    </ul>
                                </a>
                            </li>
                            <li><a href="#">About
                                    <ul class="expanded">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Categories</a></li>
                                        <li><a href="#">Social</a></li>
                                    </ul>
                                </a>
                            </li>
                            <li><a href="#">Categories
                                    <ul class="expanded">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Categories</a></li>
                                        <li><a href="#">Social</a></li>
                                    </ul>
                                </a>
                            </li>
                            <li><a href="#">Social
                                    <ul class="expanded">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Categories</a></li>
                                        <li><a href="#">Social</a></li>
                                    </ul>
                                </a>
                            </li>
                        </ul>
                    </a>
                </li>
                <li><a href="#">Social
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Categories</a></li>
                            <li><a href="#">Social</a></li>
                        </ul>
                    </a>
                </li>
            </ul>
        </div>
    </nav>


    <style>
        nav {
            display: block;
            width: 100%;
            height: 70px;
            background: #384958;
        }
        #wrapper { 
            display: block;
            margin: 0 auto;
            width: 750px;
        }

        #menu {
            display: block;
            position: relative;
            z-index: 99;
        }

        #menu li {
            display: block;
            float: left;
        }

        #menu li a:hover, #menu li a.active {
            background: #fff;
            color: #2c343b;
        }

        #menu li ul {
            display: none;
            position: absolute;
            top: 70px;
            width: 200px;
            background: #fff;
            z-index: -1;
            -webkit-box-shadow: 0 2px 7px rgba(0,0,0,0.45);
            -moz-box-shadow: 0 2px 7px rgba(0,0,0,0.45);
            box-shadow: 0 2px 7px rgba(0,0,0,0.45);
        }
        #menu li ul li {
            display: block;
            width: 200px;
        }
        #menu li ul li a {
            display: block;
            float: none;
            color: #4e5b67;
            font-size: 1.35em;
            line-height: 50px;
            padding: 0 15px;
        }
        #menu li ul li a:hover {
            background: #384958;
            color: #fff;
        }

        #menu li ul.expanded {
            width: 400px;
            }
            #menu li ul.expanded li { margin-right: 200px; }



            #menu li ul li ul {
            display: none;
            position: absolute;
            left: 200px;
            top: 0;
            height: 100%;
            background: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            }
            
            #menu li ul li ul li a { color: #fff; }
            #menu li ul li ul li a:hover { text-decoration: underline; }

            #menu li ul li.purple a:hover, #menu li ul li.purple a.active { background: #4f4c83; color: #fff; }
            #menu li ul li.purple ul { background: #4f4c83; }

            #menu li ul li.green a:hover, #menu li ul li.green a.active { background: #65834c; color: #fff; }
            #menu li ul li.green ul { background: #65834c; }

            #menu li ul li.aqua a:hover, #menu li ul li.aqua a.active { background: #4c7983; color: #fff; }
            #menu li ul li.aqua ul { background: #4c7983; color: #fff; }

            #menu li ul li.red a:hover, #menu li ul li.red a.active { background: #834c4c; color: #fff; }
            #menu li ul li.red ul { background: #834c4c; }

            #menu li ul li.blue a:hover, #menu li ul li.blue a.active { background: #4d6899; color: #fff; }
            #menu li ul li.blue ul { background: #4d6899; }

            #menu li ul li.gold a:hover, #menu li ul li.gold a.active { background: #97944c; color: #fff; }
            #menu li ul li.gold ul { background: #97944c; }
    </style>




    <script>
        $('a[href="#"]').on('click', function(e){

            e.preventDefault();

        });

        $('#menu > li').on('mouseover', function(e){

            $(this).find("ul:first").show();
            $(this).find('> a').addClass('active');

        }).on('mouseout', function(e){

            $(this).find("ul:first").hide();
            $(this).find('> a').removeClass('active');

        });

        $('#menu li li').on('mouseover',function(e){

            if($(this).has('ul').length) {
                $(this).parent().addClass('expanded');
            }
            $('ul:first',this).parent().find('> a').addClass('active');
            $('ul:first',this).show();

        }).on('mouseout',function(e){

            $(this).parent().removeClass('expanded');
            $('ul:first',this).parent().find('> a').removeClass('active');
            $('ul:first', this).hide();

        });
    </script>







 </body>
</html>