<?php

require_once 'bing.class.php';

if(isset($_GET['q'])) {

   $q = $_GET['q'];

} else { $q = 'MooTools'; }

$appid = '49EB4B94127F7C7836C96DEB3F2CD8A6D12BDB71';

$obj = new Bing($appid);

$obj->search( $q );

$out = $obj->getHTML();

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
   <title>Microsoft's Bing Search</title>
   <style type="text/css">
body {
      margin: 10px;
      font-family: Helvetica, Arial;
    }
    a {
      color: navy;
    }
    .outer {
      padding: 10px 10px 0 10px;
      background: #eee;
    }


input.gsc-input {
      border-color: #BCCDF0;
      font-size: 1.5em;
      background-image: none !important;
      padding: 0.5em !important;
      border-radius: 10px;
      -webkit-border-radius: 10px;
      -moz-border-radius: 10px;
      color: #555;
      box-sizing: border-box;
      width: 67%;
      border: 1px solid #fff
}

input.gsc-input:hover {
      color: black;
      border-color: black;
      border: 1px solid #000
}

input.gsc-search-button {
    border-color: #666666;
    background-color: #CECECE;
    font-size: 2em;
    height: auto;
}

.yui-g{
background: #eee;
padding: 10px;
}



   </style>
</head>
<body>
<div id="doc2" class="yui-t7">
   <div id="hd" role="banner"><h1>Bing Search</h1></div>
   <div id="bd" role="main">
	<div class="yui-g">
             <div>
                <form id="googleform">
                <label for="q">Bing</label>
                <input class="gsc-input" type="text" id="q" name="q" placeholder="" required autocomplete="off"/> 
                <input class="gsc-search-button" type="submit" id="send" value="Go!"/> 
               </form>
             </div> 
	</div>
           <div id="results"><?php echo$out; ?></div>
	</div>
   <div id="ft" role="contentinfo"><p>&copy; 2013 Some Rights Reserved | created by  @<a href="http://twitter.com/thinkphp">thinkphp</a> | Download on <a href="http://github.com/thinkphp/bing.php">GitHub </a></p></div>
</div>
</body>
</html>