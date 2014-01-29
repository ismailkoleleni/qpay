<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Q-Pay</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
    {{ HTML::Style('css/bootstrap.css') }}
    {{ HTML::Style('css/bootstrap_responsive.css') }}
    
    {{ HTML::Style('css/font_awesome.css') }}
    
    {{ HTML::Style('css/styles.css') }}
    {{ HTML::Style('css/styles_responsive.css') }}
    @yield('page_css')

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
  </head>


<body>
    
    @yield('body')

                    </div> <!-- /span9 -->
                </div> <!-- /row -->
            </div> <!-- /container -->
            
        </div> <!-- /content -->
        
    <div id="footer">
        
        <div class="container">     
            <hr />      
            <div class="row">
                
                    <div id="rights" class="span6" style="text-align:center;">
                    © 2013-14 Q-Pay. All Rights Reserved.
                    </div> <!-- /grid-6 -->
                    
                </div> <!-- /.row -->
        </div> <!-- /container -->
        
    </div> <!-- /footer -->


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::Script('js/jquery-1.9.1.min.js') }}
    {{ HTML::Script('js/bootstrap.min.js') }}
    {{ HTML::Script('js/Application.js') }}
    @yield('page_scripts')
    
  </body>
</html>