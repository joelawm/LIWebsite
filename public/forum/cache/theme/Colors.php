<?php return Vanilla\Addon::__set_state(array(
   'info' => 
  array (
    'key' => 'Colors',
    'name' => 'Colors',
    'description' => '<p>This theme is legacy Vanilla style. It is extremly clean and easy to use. It has 25 different theme styles and almost 200 background style. You can always find a style that fits your community. </p>',
    'version' => '1.1.2',
    'type' => 'theme',
    'license' => 'GNU GPL3',
    'authors' => 
    array (
      0 => 
      array (
        'name' => 'Cheng',
        'email' => '365800666@qq.com',
        'homepage' => 'http://derekrock.com',
      ),
    ),
    'layout' => 
    array (
      'categories' => 'Modern',
      'discussions' => 'Modern',
    ),
    'options' => 
    array (
      'styles' => 
      array (
        'Example_Do_Not_Use' => '%s',
        'Basic_Black_1_Alpha_0_100' => '%s_Basic_Black_1_Alpha_0_100',
        'Basic_Black_1_Alpha_35_100' => '%s_Basic_Black_1_Alpha_35_100',
        'Basic_Black_1_Alpha_100_100' => '%s_Basic_Black_1_Alpha_100_100',
        'Basic_Red_1_Alpha_0_100' => '%s_Basic_Red_1_Alpha_0_100',
        'Basic_Red_1_Alpha_35_100' => '%s_Basic_Red_1_Alpha_35_100',
        'Basic_Red_1_Alpha_100_100' => '%s_Basic_Red_1_Alpha_100_100',
        'Basic_Orange_1_Alpha_0_100' => '%s_Basic_Orange_1_Alpha_0_100',
        'Basic_Orange_1_Alpha_35_100' => '%s_Basic_Orange_1_Alpha_35_100',
        'Basic_Orange_1_Alpha_100_100' => '%s_Basic_Orange_1_Alpha_100_100',
        'Basic_Yellow_1_Alpha_0_100' => '%s_Basic_Yellow_1_Alpha_0_100',
        'Basic_Yellow_1_Alpha_35_100' => '%s_Basic_Yellow_1_Alpha_35_100',
        'Basic_Yellow_1_Alpha_100_100' => '%s_Basic_Yellow_1_Alpha_100_100',
        'Basic_Green_1_Alpha_0_100' => '%s_Basic_Green_1_Alpha_0_100',
        'Basic_Green_1_Alpha_35_100' => '%s_Basic_Green_1_Alpha_35_100',
        'Basic_Green_1_Alpha_100_100' => '%s_Basic_Green_1_Alpha_100_100',
        'Basic_Cyan_1_Alpha_0_100' => '%s_Basic_Cyan_1_Alpha_0_100',
        'Basic_Cyan_1_Alpha_35_100' => '%s_Basic_Cyan_1_Alpha_35_100',
        'Basic_Cyan_1_Alpha_100_100' => '%s_Basic_Cyan_1_Alpha_100_100',
        'Basic_Blue_1_Alpha_0_100' => '%s_Basic_Blue_1_Alpha_0_100',
        'Basic_Blue_1_Alpha_35_100' => '%s_Basic_Blue_1_Alpha_35_100',
        'Basic_Blue_1_Alpha_100_100' => '%s_Basic_Blue_1_Alpha_100_100',
        'Basic_Purple_1_Alpha_0_100' => '%s_Basic_Purple_1_Alpha_0_100',
        'Basic_Purple_1_Alpha_35_100' => '%s_Basic_Purple_1_Alpha_35_100',
        'Basic_Purple_1_Alpha_100_100' => '%s_Basic_Purple_1_Alpha_100_100',
        'Leaf_3' => '%s_Leaf_3',
      ),
      'description' => '<p style=margin-top:20px;color:white;background-color:#0291db;padding:14px 5.25px 14px 0px;font-size:26px;>Something you need to know.</p><p style=margin-top:40px;padding-left:15px;padding-right:15px;>The theme requires Vanilla application <span style=color:#5c87c7>2.6 +</span> and only works on specific view. Please make sure you select <span style=color:#5c87c7>modern layout</span> for Discussions and Categories and never use Categories as <span style=color:#5c87c7>Heading</span>.</p><p style=padding-left:15px;padding-right:15px;>It is a responsive theme and works on mobile Phones. But it might not working well on the mobile Phones that smalller than <span style=color:#5c87c7>4 inch</span>.</p><p style=padding-left:15px;padding-right:15px;>The theme was designed with a <span style=color:#5c87c7>200 px * 108 px</span> sized logo. So you don\'t have to do anything if your website logo fits the size or you will have to write your own css rules. </p></br><p style=color:white;background-color:#0291db;padding:14px 5.25px 14px 0px;>Steps for making mobile theme works:</p></br><ul><li>open <pre>/config/config.php</pre></li><li>press ctrl + F to search <pre>// Garden</pre></li><li>add  line<pre>$Configuration[\'Garden\'][\'MobileTheme\'] = \'Colors\'; </pre>to the below of<pre style=margin-bottom:30px;>// Garden</pre></li></ul><p style=color:white;background-color:#0291db;padding:14px 5.25px 14px 0px;>If you like this theme and would like to donate, any amount  will help and be very much appreciated!</p><p style=padding-left:15px;margin-top:20px;margin-bottom:20px;><a target=_blank href=https://www.paypal.me/bestfujianese>Click to donate</a></p><p style=color:white;background-color:#0291db;padding:14px 5.25px 14px 0px;>The default Basic Style is a frame, it has no color. Please don\'t use it.</p><p style=padding-left:15px;margin-top:20px;margin-bottom:20px;>Each title below includes a Alpha_*_*, it shows the degree of transparet of backgrounds. Leaf 3 is a free advanced style from previous theme i made.</p>',
      'text' => 
      array (
        'Background&nbsp;Selector' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write a number to select a background style.</br>Clear the textbox to select no style.</br> For example Write 1 to select style 1. </br>Background texture from 1 to 171.</div>',
          'Type' => 'textbox',
        ),
        'Copyright' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write Copyright of your website.</div>',
          'Type' => 'textbox',
        ),
        'Phone&nbsp;Number' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write your phone number.</div>',
          'Type' => 'textbox',
        ),
        'Phone&nbsp;Switch' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write on to turn on.</br>Write off or clear the textbox to turn off.</div>',
          'Type' => 'textbox',
        ),
        'Email&nbsp;Address' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write your email address.</div>',
          'Type' => 'textbox',
        ),
        'Email&nbsp;Switch' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write on to turn on.</br>Write off or clear the textbox to turn off.</div>',
          'Type' => 'textbox',
        ),
        'Facebook' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write the url of your Facebook page.</div>',
          'Type' => 'textbox',
        ),
        'Facebook&nbsp;Switch' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write on to turn on.</br>Write off or clear the textbox to turn off.</div>',
          'Type' => 'textbox',
        ),
        'Twitter' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write the url of your Twitter page.</div>',
          'Type' => 'textbox',
        ),
        'Twitter&nbsp;Switch' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write on to turn on.</br>Write off or clear the textbox to turn off.</div>',
          'Type' => 'textbox',
        ),
        'Google+' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write the url of your Google+ page.</div>',
          'Type' => 'textbox',
        ),
        'Google&#43;&nbsp;Switch' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write on to turn on.</br>Write off or clear the textbox to turn off.</div>',
          'Type' => 'textbox',
        ),
        'Head&nbsp;Custom&nbsp;Area' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write your <b>Script</b> or insert <b>External File</b></br>For example you can put your <b>Google AdSense</b> codes here.</div>',
          'Type' => 'textarea',
        ),
        'Body&nbsp;Head&nbsp;Custom&nbsp;Area' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write your <b>HTML</b> or <b>Script</b>.</div>',
          'Type' => 'textarea',
        ),
        'Body&nbsp;Top&nbsp;Custom&nbsp;Area' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write your <b>HTML</b> or <b>Script</b>.</div>',
          'Type' => 'textarea',
        ),
        'Body&nbsp;Pannel&nbsp;Custom&nbsp;Area' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write your <b>HTML</b> or <b>Script</b>.</div>',
          'Type' => 'textarea',
        ),
        'Body&nbsp;Bottom&nbsp;Custom&nbsp;Area' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write your <b>HTML</b> or <b>Script</b>.</div>',
          'Type' => 'textarea',
        ),
        'Body&nbsp;Foot&nbsp;Custom&nbsp;Area' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write your <b>HTML</b> or <b>Script</b>.</div>',
          'Type' => 'textarea',
        ),
        'Foot&nbsp;Custom&nbsp;Area' => 
        array (
          'Description' => '<div style=margin-top:10px;>Write your <b>Script</b>.</br>For example you can put your <b>Google Analytics</b> codes here.</div>',
          'Type' => 'textarea',
        ),
      ),
    ),
    'Issues' => 
    array (
    ),
    'priority' => 1000,
  ),
   'classes' => 
  array (
  ),
   'subdir' => '/themes/Colors',
   'translations' => 
  array (
  ),
   'special' => 
  array (
  ),
));
