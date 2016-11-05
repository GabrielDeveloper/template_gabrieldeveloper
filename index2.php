<?php
defined('_JEXEC') or die;

JLoader::import('joomla.filesystem.file');

JHtml::_('behavior.framework', true);
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

    <head>

        <meta charset="utf-8"><!--  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
        <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->

        <meta name="description" content="Meu nome &eacute; Gabriel Gon&ccedil;alves, trabalho como Programador PHP na empresa AVG Brasil, desenvolvendo sites e sistemas nas linguagens: PHP, Javascript, HTML5, CSS3, nos CMS Joomla, Magento, Drupal e Open Cart">
        <meta name="author" content="Gabriel Gon&ccedil;alves Developer">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

        <link rel="shortcut icon" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>favicon.ico">
        <!--<link rel="apple-touch-icon" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/apple-touch-icon-114x114.png">-->

        <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template; ?>/css/reset.css" type="text/css" >
        <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/skeleton.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/zenite.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/media_queries.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/flexslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/jquery.onebyone.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/animate.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/responsiveexample2.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/component.css" type="text/css" media="screen" />

        <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

        <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/isotope/jquery.isotope.css" media="screen" />  
    <jdoc:include type="head" />


    <!--[if lte IE 6]>
                 <link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>///universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
    <![endif]-->

    <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/modernizr.custom.76532.js"></script>  

</head>


<body>
    <h1 style="display: none;">Gabriel Gon&ccedil;alves Developer</h1>

        <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    <div id="wrapper" class="page home">

        <div class="wrapper_header index">

            <div class="container cabecera">

                <header class="clearfix">

                    <!--<div class="light min"></div>-->

                    <div class="columns six logo">
                        <a href="<?php echo $this->baseurl; ?>">
                            <img src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/gabriel-developer.png" title="Gabriel Gon�alves Developer" alt="Gabriel Gon�alves Developer"/>
                        </a>
                    </div>

                    <!-- menu -->
                    <nav class="columns ten menu myMenu">
                        <jdoc:include type="modules" name="menu" style="none" />
                        <div class="item">
                            <jdoc:include type="modules" name="menu-responsive" style="none" />
                        </div>
                    </nav>    
                </header>


                <!-- end menus -->


                <!-- slider -->
                <div class="wrapper_slider columns sixteen"></div>

            </div>
            <!-- fin class cabecera -->
            <?php if ($this->countModules('slide') !== 0): ?>
                <div class="franja"></div>
            <?php endif; ?>
            <div class="wrape homeone">
                <jdoc:include type="modules" name="slide" style="none" />
                <jdoc:include type="modules" name="slide_resp" style="none" />
            </div>

            <?php if ($this->countModules('slide') !== 0): ?>
                <div class="franja"></div>
            <?php endif; ?>

        </div>
        <!-- wrapper_header -->

        <?php
        $ItemId = JRequest::GetInt('Itemid');
        if ($ItemId !== 101):
            ?>
            <div class="franja"></div>
            <div class="bg-menu">
                <nav class="primary clearfix container">
                    <div class="titol">
                        <span class="slim">
                            <?php echo $doc->getTitle(); ?>
                        </span>
                    </div>
                    <jdoc:include type="modules" name="titulo" style="none" />
                    <jdoc:include type="modules" name="menu-portfolio" style="none" />


                </nav>
            </div>
            <div class="franja"></div>
        <?php endif; ?>


        <div class="bg-white">
            <!-- content --> 
            <section class="container content">

                <jdoc:include type="message" />
                <jdoc:include type="component" />
                <?php
                if ($this->countModules('sidebar') !== 0):
                ?>
                    <aside class="sidebar four columns">
                        <jdoc:include type="modules" name="sidebar" style="xhtml"/>                         
                    </aside>

                <?php endif; 
                if ($this->countModules('cases') !== 0):
                    ?>
                    <div class="portfolio">
                        <jdoc:include type="modules" name="cases" style="none" />
                        <jdoc:include type="modules" name="case" style="none" />
                    </div>

                <?php endif; ?>
            </section>
        </div>
        <?php
        if ($this->countModules('main') !== 0):
        ?>
        <div class="bg-white parallax">
            <section class="container content">    
                <jdoc:include type="modules" name="main" style="none"/>
            </section>
        </div>
        <?php endif; 
        if ($this->countModules('main-footer') !== 0):
        ?>
        <div class="bg-white main-footer">
            <section class="container content">    
                <jdoc:include type="modules" name="main-footer" style="none"/>
            </section>
        </div>
        <?php endif; ?>

        <!--<div class="wrapper_call clearfix">

            <div class="separa_big"></div>

            <section class="container content added">
                <div class="titular" id="niml10">
                    <h2><span>Projetos</span></h2>
                    <div class="sp_doble otro"></div>
                    <div class="nav-left off botleft3"></div>
                    <div class="nav-right off botright3"></div>
                </div>

                <div class="clients clearfix">
                    <ul>
                        <li><img src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_1_bn.png" alt="img"/><img class="color" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_1.png" alt="img"/></li>
                        <li><img src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_2_bn.png" alt="img"/><img class="color" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_2.png" alt="img"/></li>
                        <li><img src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_3_bn.png" alt="img"/><img class="color" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_3.png" alt="img"/></li>
                        <li><img src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_4_bn.png" alt="img"/><img class="color" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_4.png" alt="img"/></li>
                        <li><img src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_5_bn.png" alt="img"/><img class="color" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_5.png" alt="img"/></li>
                        <li><img src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_1_bn.png" alt="img"/><img class="color" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_1.png" alt="img"/></li>
                        <li><img src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_2_bn.png" alt="img"/><img class="color" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_2.png" alt="img"/></li>
                        <li><img src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_3_bn.png" alt="img"/><img class="color" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_3.png" alt="img"/></li>
                        <li><img src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_4_bn.png" alt="img"/><img class="color" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/img/client_4.png" alt="img"/></li>
                    </ul>
                </div>  
            </section>

        </div>-->


        <div class="wrapper_footer">
            <div class="detall"></div>

            <footer class="container clearfix">

                <article class="column one-third article first">

                    <div class="title">&Uacute;ltimas do <span class="slim">Blog</span></div>
                    <div class="separador left"></div>
                    <jdoc:include type="modules" name="footer01" style="xthnl" />

                    <div class="separador2"></div>
                    <div class="undertitle">Ir para o <span class="slim"><a href="blog" title="blog">Blog</a></span></div>
                </article>

                <article class="column one-third article bg">
                    <jdoc:include type="modules" name="footer02" />

                    <div class="title">&Uacute;ltimas <span class="slim">Atividades</span></div>
                    <div class="separador mid"></div>
                    
                    <div class="bloc">
                        <div class="info2">
                            <h3><span class="grey">Certificado Zend Fundamentals</span></h3>
                            <a href="http://www.gabrieldeveloper.com.br/certificados/zend-fundamentals.pdf" target="blank">Gabriel Gonçalves Rodrigues <br> NetmIL-05545-14-11</a>
                            <!--<br><span class="blue">about 2 hours ago</span>-->
                        </div>
                    </div>

                    <div class="separa3"></div>
                    <div class="bloc">
                        <div class="info2">
                            <h3><span class="grey">Curso de Joomla na Acadtec</span></h3>
                            <a href="http://acadtec.com.br/curso/joomla" target="blank">http://acadtec.com.br/curso/joomla</a>
                            <!--<br><span class="blue">about 2 hours ago</span>-->
                        </div>
                    </div>

                    <div class="separa3"></div>

                    <div class="bloc">
                        <div class="info2">
                            <h3><span class="grey">Palestra Joomla - Virtuemart</span></h3>
                            <a href="http://www.youtube.com/watch?v=XD9V9okHX44" target="blank">http://www.youtube.com/</a>
                            <!--<br><span class="blue">about 2 hours ago</span>-->
                        </div>
                    </div>
                    <div class="separa3"></div>

<!--<div class="undertitle">Follow me on <span class="slim"><a href="https://twitter.com/" title="twitter" target="_blank">Twitter</a></span></div>-->
                </article>

                <article class="column one-third article flic last">
                    <jdoc:include type="modules" name="sobre" style="none" />

                </article>

            </footer>

            <div class="wrapper_copyright"> 
                <div class="container" id="nimtm5">
                    <p class="copy_left">© <?php echo date('Y'); ?> <span class="white"> Gabriel Developer</span>. Todos direitos reservados. </p>
                    <p class="copy_right"><span class="social">Contatos:</span></p>
                    <div class="icones">
                        <a href="https://twitter.com/gabrieldevelop" target="_blank"><div class="social twit"></div></a>
                        <a href="http://www.facebook.com/jhoselly.gabriel" target="_blank"><div class="social face"></div></a>
                        <a href="http://www.linkedin.com/profile/view?id=178965118&trk=tab_pro" target="_blank"><div class="social linkedin"></div></a>
                        <!--<div class="social yout"></div>
                        <div class="social skyp"></div>-->
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!--[if !lte IE 6]><!-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/jquery-1.7.2.min.js"><\/script>')</script>
    <!--[if lt IE 9]> <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/libs/selectivizr-and-extra-selectors.min.js"></script> <![endif]-->
    <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/respond.min.js"></script>
    <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/jquery.easing-1.3.min.js"></script>
    <!--<![endif]-->

    <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/jquery.onebyone.js"></script>
    <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/jquery.touchwipe.min.js"></script> 
<?php
$ItemId = JRequest::GetInt('Itemid');
if ($ItemId !== 101):
    ?>
        <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/jquery.isotope.min.js"></script>
        <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/isotope/jquery.isotope.js"></script>
    <?php endif; ?>
    <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/portfolio.js"></script> 


    <script type="text/javascript">
        $('#banner').oneByOne({
            className: 'oneByOne1',
            /* Please provide the width and height in the responsive 
             version, for the slider will keep the ratio when resize 
             depends on these size. */
            width: '100%',
            height: 470,
            easeType: 'fadeInLeft',
            slideShow: true,
            showButton: true,
            responsive: false,
            minWidth: 480
        });
    </script>

    <script type="text/javascript" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/selectnav.js"></script>        
    <script type="text/javascript" src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/scrollReveal.js"></script>        
    <script defer src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/jquery.flexslider-min.js"></script>

    <script>

      window.scrollReveal = new scrollReveal();

  </script>

    
    
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                directionNav: true,
                controlNav: true,
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });

            $('.flexslider2').flexslider({
                animation: "slide",
                directionNav: false,
                controlNav: true,
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });

            $('.flexslider3').flexslider({
                animation: "slide",
                directionNav: false,
                controlNav: true,
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>

    <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/plugins.js"></script>
    <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/script.js"></script>
    <script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/custom.js"></script>
    <!--<script src="<?php echo $this->baseurl . '/templates/' . $this->template ?>/js/tabs.js"></script> --> <!-- tabs skeleton-->
    <!--[if lt IE 7 ]>
       <script type="text/javascript" src="http://widgetfx.googlecode.com/svn-history/r122/widgetfx.org/iepngfix_tilebg.js"></script>
    <![endif]-->

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-41269743-1', 'gabrieldeveloper.com.br');
        ga('send', 'pageview');

    </script>

</body>

</html>
