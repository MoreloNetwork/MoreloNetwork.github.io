<?php
  $opts = [
             'http' => [
                     'method' => 'GET',
                    'header' => [
                         'User-Agent: PHP'
                       ]
             ]
  ];

  $context = stream_context_create($opts);
  $content = file_get_contents("https://api.github.com/repos/morelo-network/morelo/releases", false, $context);
  $releases = json_decode($content);
  //CLI
  $linux = False;
  $windows = False;
  $apple = False;
  
  foreach($releases as $release) {
    if($release->assets) {
      foreach($release->assets as $asset) {
        if(stripos($asset->browser_download_url, 'linux') !== false && $linux == false) {
          $linux = $asset->browser_download_url;
        } else if(stripos($asset->browser_download_url, 'window') !== false && $windows == false) {
          $windows = $asset->browser_download_url;
        } else if(stripos($asset->browser_download_url, 'apple') !== false && $apple == false) {
          $apple = $asset->browser_download_url;
        }
        if($linux && $windows && $apple) break;
      }
    }
  }
  
  $content = file_get_contents("https://api.github.com/repos/morelo-network/morelo-electron-wallet/releases", false, $context);
  $releases = json_decode($content);
  
  //Electron Wallet
  $app = False;
  $deb = False;
  $exe = False;
  
  foreach($releases as $release) {
    if($release->assets) {
      foreach($release->assets as $asset) {
        if(stripos($asset->browser_download_url, 'appimage') !== false && $app == false) {
          $app = $asset->browser_download_url;
        } else if(stripos($asset->browser_download_url, 'deb') !== false && $deb == false) {
          $deb = $asset->browser_download_url;
        } else if(stripos($asset->browser_download_url, 'exe') !== false && $exe == false) {
          $exe = $asset->browser_download_url;
        }
        if($app && $deb && $exe) break;
      }
    }
  }
?>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MORELO (MRL) - Decentralized, Untraceable and Anonymous</title>
    <meta name="author" content="Morelo Community">
    <meta name="keywords" content="Morelo, MORELO, mrl, Mrl, MRL, Morelo-Network, MORELO-NETWORK, morelomrl, MoreloMrl,Cryptocurrency, Blockchain, Bitcoin">
    <meta name="description" content="MORELO open-source, privacy-oriented cryptocurrency. MRL obfuscates every transactions on the blockchain by default, offering  Decentralized, Confidential and Fast Financial Transactions. Supported and operated only by global users without stabled and/or physical headquarters from which the platform runs its operations, MORELO network is entire independent from private and/or institutional organizations.">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300"
      rel="stylesheet" type="text/css">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://morelo.is-great.net">
    <meta property="og:title" content="MORELO (MRL)">
    <meta property="og:description" content="MORELO open-source, privacy-oriented cryptocurrency. MRL obfuscates every transactions on the blockchain by default, offering  Decentralized, Confidential and Fast Financial Transactions. Supported and operated only by global users without stabled and/or physical headquarters from which the platform runs its operations, MORELO network is entire independent from private and/or institutional organizations.">
    <meta property="og:image" content="http://morelo.is-great.net/images/logo.png">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://morelo.is-great.net">
    <meta property="twitter:title" content="MORELO (MRL)">
    <meta property="twitter:description" content="MORELO open-source, privacy-oriented cryptocurrency. MRL obfuscates every transactions on the blockchain by default, offering  Decentralized, Confidential and Fast Financial Transactions. Supported and operated only by global users without stabled and/or physical headquarters from which the platform runs its operations, MORELO network is entire independent from private and/or institutional organizations.">
    <meta property="twitter:image" content="http://morelo.is-great.net/images/logo.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="http://morelo.is-great.net/images/logo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header"> <button class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-collapse"> <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span> <span class="icon icon-bar"></span>
          </button> <a href="#" class="navbar-brand">MORELO</a> </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a id="nav_home" href="#top" class="smoothScroll">HOME</a></li>
            <li><a id="nav_features" href="#features" class="smoothScroll">FEATURES</a></li>
            <li><a id="nav_whitepaper" href="MRL-Whitepaper.pdf" class="smoothScroll">WHITEPAPER</a></li>
            <li><a id="nav_get" href="#download" class="smoothScroll">GET MORELO</a></li>
            <li><a id="nav_explorer" href="https://mrl.supportcryptonight.com/" class="smoothScroll">BLOCK
                EXPLORER</a></li>
            <li><a id="nav_contact" href="#contact" class="smoothScroll">CONTACT</a></li>
      <li>
              <a id="lang_selector" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a onclick="$.MultiLanguage('js/language.json', 'en');" href="#">English</a></li>
                <li><a onclick="$.MultiLanguage('js/language.json', 'pl');" href="#">Polski</a></li>
                <li><a onclick="$.MultiLanguage('js/language.json', 'es');" href="#">Español</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end templatemo navigation -->
    <section id="home" class="text-center">
      <div class="templatemo_headerimage">
        <div class="flexslider">
          <ul class="slides">
            <li> <img src="images/slider/1.jpg" alt="Slide 1">
              <div class="slider-caption">
                <div class="templatemo_homewrapper">
                  <h1 id="slide1_h1">Obfuscated Transactions</h1>
                  <h2 id="slide1_h2">Privacy & Opaque oriented blockchain</h2>
                  <a id="slide1_link" href="#features" class="btn btn-lg btn-warning">Learn
                    More</a> </div>
              </div>
            </li>
            <li> <img src="images/slider/2.jpg" alt="Slide 2">
              <div class="slider-caption">
                <div class="templatemo_homewrapper">
                  <h1 id="slide2_h1">Multi Cross-Plattform</h1>
                  <h2 id="slide2_h2">Full compatible software deployment</h2>
                  <a id="slide2_link" href="#download" class="btn btn-lg btn-warning">GET
                    MORELO</a> </div>
              </div>
            </li>
            <li> <img src="images/slider/3.jpg" alt="Slide 3">
              <div class="slider-caption">
                <div class="templatemo_homewrapper">
                  <h1 id="slide3_h1">Pure Decentralization</h1>
                  <h2 id="slide3_h2">Global network distribution</h2>
                  <a id="slide3_link" href="#about" class="btn btn-lg btn-warning">About
                    Us</a> </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section id="features" class="features text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-12"></div>
          <div class="col-sm-6 col-md-3"> <a href="#features"><i class="fa fa-laptop"></i></a>
            <h3 id="features1_h3">Private</h3>
            <p id="features1_p">Implementation of Ring Signatures and Ring Confidential transactions protocols obfuscate your financial data on the blockchain by default.</p>
          </div>
          <div class="col-sm-6 col-md-3"> <a href="#features"><i class="fa fa-user"></i></a>
            <h3 id="features2_h3">Decentralized</h3>
            <p id="features2_p">Morelos blockchain decentralization is supported globally by individuals, granting network operations independent from private and/or institutional organizations.</p>
          </div>
          <div class="col-sm-6 col-md-3"> <a href="#features"><i class="fa fa-cog"></i></a>
            <h3 id="features3_h3">Cross-Platform</h3>
            <p id="features3_p">Morelo provides a complete range of cross-platform software ready for deployment. Our software permits a simple and secured user experience.</p>
          </div>
          <div class="col-sm-6 col-md-3"> <a href="#features"><i class="fa fa-font"></i></a>
            <h3 id="features4_h3">Documented</h3>
            <p id="features4_p">With the contribution of our community members, Morelo offers easy, described documentation and technical support.</p>
          </div>
        </div>
         </div>
    </section>
    <!-- end templatemo features -->
    <!-- start templatemo about -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-12"></div>
          <div class="col-sm-6 col-md-6 info">
            <h3 id="about_h3">Untraceable and Anonymous</h3>
            <h4 id="about_h4">Opaque privacy-oriented blockchain</h4>
          </div>
          <div class="col-sm-6 col-md-6 skills"> <span id="supply">Supply</span> <span id="supply_amount" class="pull-right">75
              Million</span>
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar"
                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
            </div>
            <span id="blocktime">Block Time</span> <span id="blocktime_time" class="pull-right">120 Seconds</span>
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar"
                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
            </div>
            <span id="decimals">Decimals </span> <span class="pull-right">9</span>
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar"
                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"></div>
            </div>
            <span id="ticker">Ticker</span> <span class="pull-right">MRL</span>
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar"
                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
            </div>
            <span id="algorithm">Algorithm</span> <span class="pull-right">RandomARQ</span>
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar"
                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
            </div>
            <span id="consensus">Consensus</span> <span class="pull-right">POW</span>
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar"
                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    &nbsp;<!-- start templatemo download -->
    <section id="download" class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <h2 id="get_morelo">GET MORELO</h2>
            <p id="get_morelo_p1">On this section you can find and download the latest version
              available of the Morelo software, as well as hardware, light and
              mobile wallets.</p>
            <p id="get_morelo_p2"> The GUI wallet provides a nice user interface, adaptable to all
              kinds of users, but it is especially recommended for less
              technical people who want to quickly send and receive MRL. </p>
            <p></p>
          </div>
          <div class="col-md-18"></div>
          <div class="col-sm-5 col-md-3"> <a href="<?php echo($exe); ?>"><img
                src="images/member3.jpg" class="img-responsive" alt="download 3"></a>
            <h3>Win GUI Wallet</h3>
            <p>Windows GUI wallet Software</p>
          </div>
          <div class="col-sm-5 col-md-3"> <a href="<?php echo($deb); ?>"><img
                src="images/member4.jpg" class="img-responsive" alt="background"></a>
            <h3>Linux GUI Wallet</h3>
            <p>Compatible (deb)</p>
          </div>
          <div class="col-sm-5 col-md-3"> <a href="<?php echo($windows); ?>"><img
                src="images/member1.jpg" class="img-responsive" alt="download 1"></a>
            <h3>Win CLI</h3>
            <p>Windows 10 Client Software</p>
          </div>
          <div class="col-sm-5 col-md-3"> <a href="<?php echo($linux); ?>"><img
                src="images/member2.jpg" class="img-responsive" alt="download 2"></a>
            <h3>LINUX CLI</h3>
            <p>Linux 64Bit Client Software</p>
          </div>
        </div>
      </div>
    </section>
    <section id="download" class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8"> </div>

          <div class="col-sm-5 col-md-3"> <a href="<?php echo($apple); ?>"><img
                src="images/macoshero.jpg" class="img-responsive" alt="download 4"></a>
            <h3>MACOS Cli</h3>
            <p>MACos Client Software</p>
          </div>
          <div class="col-sm-5 col-md-3"> <a href="<?php echo($app); ?>"><img
                src="images/member4.jpg" class="img-responsive" alt="background"></a>
            <h3>Linux GUI Wallet</h3>
            <p>AppImage</p>
          </div>
          <div class="col-sm-5 col-md-3"> <a href="https://github.com/morelo-network/morelo"><img
                src="images/github.jpg" class="img-responsive" alt="background"></a>
            <h3>Morelo-Network</h3>
            <p>Github Source</p>
          </div>
        </div>
      </div>
    </section>
    <!-- end templatemo download -->
    <!-- start templatemo contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8 text-center">
            <h2 id="contactt">CONTACT</h2>
            <p id="contact_p">Below contact information to get in touch with the Morelo (MRL)
            community.</p>
            <table border="0" width="100%">
              <tbody>
                <tr>
                  <td style="text-align: center; vertical-align: middle; "><a href="mailto:morelomrl@tutanota.com"><i
                        class="fa fa-envelope-o"></i>E-Mail</a></td>
                  <td style="text-align: center; vertical-align: middle; "><a href="https://discord.gg/eRZUjdG"><i
                        class="fa fa-commenting-o"></i>Discord</a></td>
                  <td style="text-align: center; vertical-align: middle; "><a href="https://t.me/morelomrl"><i
                        class="fa fa-telegram"></i>Telegram</a></td>
                </tr>
                <tr>
                  <td style="text-align: center; vertical-align: middle; "><a href="https://twitter.com/MoreloMrl"><i
                        class="fa fa-twitter"></i>Twitter</a></td>
                  <td style="text-align: center; vertical-align: middle; "><a href="https://bitcointalk.org/index.php?topic=5233023"><i
                        class="fa fa-btc"></i>Bitcointalk</a></td>
                  <td style="text-align: center; vertical-align: middle; "><a href="https://github.com/morelo-network/"><i
                        class="fa fa-github"></i>GitHub</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!-- end templatemo contact -->
    <!-- start templatemo footer -->
    <footer class="text-center"><b> Copyright © 2020 MORELO NETWORK<br>
        <br>
      </b>
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8 text-center">
        <table border="0" width="100%">
          <tbody>
            <tr>
              <td style="text-align: center; vertical-align: middle; "><a href="https://www.bkex.com/trade/MRL_USDT"
                  target="_blank"><img src="images/partners/bkex.png" alt="BKEX.COM (MRL/USDT)"
                    title="BKEX.COM (MRL/USDT)" longdesc="https://www.bkex.com/trade/MRL_USDT"></a></td>
              <td style="text-align: center; vertical-align: middle; "><a href="https://www.coinbig.com/pl/trade/MRL_USDT"
                  target="_blank"><img src="images/partners/coinbig.png" alt="CoinBig.com (MRL/USDT)"
                    title="CoinBig.com (MRL/USDT)"></a></td>
              <td style="text-align: center; vertical-align: middle; "><a href="https://coinmarketcap.com/currencies/morelo"
                  target="_blank"><img src="images/partners/cmc.png" alt="CoinMarketCap"
                    title="CoinMarketCap"></a></td>
            </tr>
            <tr>
              <td style="text-align: center; vertical-align: middle; "><a href="https://cmc.io/coins/morelo/exchanges"
                  target="_blank"><img src="images/partners/cmcio.png" alt="cmc.io"
                    title="cmc.io"></a></td>
              <td style="text-align: center; vertical-align: middle; "><a href="https://www.cryptunit.com/coin/MRL"
                  target="_blank"><img src="images/partners/cryptunit.png" alt="Cryptunit"
                    title="Cryptunit"></a></td>
              <td style="text-align: center; vertical-align: middle; "><a href="https://www.coingecko.com/en/coins/morelo"
                  target="_blank"><img src="images/partners/coingecko.png" alt="CoinGecko"
                    title="CoinGecko"></a></td>
            </tr>
            <tr>
              <td style="text-align: center; vertical-align: middle; "><a href="http://niubiquan.com/article/2895"
                  target="_blank"><img src="images/partners/Niubiquan.png" alt="Niubiquan"
                    title="Niubiquan"></a></td>
              <td style="text-align: center; vertical-align: middle; "><a href="https://miningpoolstats.stream/morelo"
                  target="_blank"><img src="images/partners/pools.png" alt="MiningPoolStats"
                    title="MiningPoolStats"></a></td>
              <td style="text-align: center; vertical-align: middle; "><a href="https://coinstats.app/en/coins/morelo"><img
                    src="images/partners/coinstats.png" alt="coinstats.app" title="coinstats.app"></a><br>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </footer>
    <!-- end templatemo footer -->
    <!-- start back to top -->
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.MultiLanguage.min.js"></script>
    <!-- start templatemo back to top js -->
    <script>
    $(document).ready(function() {
      $.MultiLanguage('js/language.json');

      // FlexSlider 
        $('.flexslider').flexslider({
          animation: "fade",
          directionNav: false
        });

      // Show or hide the sticky footer button
      $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
          $('.go-top').fadeIn(200);
        } else {
          $('.go-top').fadeOut(200);
        }
      });    
      // Animate the scroll to top
      $('.go-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 300);
      })
    });
  </script>
    <!-- end templatemo back to top js -->
  </body>
</html>
