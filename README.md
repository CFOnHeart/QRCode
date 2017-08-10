# QRCode
php/jquery simple qrcode learning

title: php-QRCode学习
date: 2017-08-09 20:56:29
tags: [qrcode,php]
categories: [php,奇技淫巧]


1. php绘制简单QRCODE
   从站点下载最新的phpqrcode包https://sourceforge.net/projects/phpqrcode/files/releases/
   将这个模块包复制到对应的php目录下
   <!--more-->
       <?php
       
       /* 
        * To change this license header, choose License Headers in Project Properties.
        * To change this template file, choose Tools | Templates
        * and open the template in the editor.
        */
       include 'phpqrcode/qrlib.php';
       
       # public static function png($text, $outfile = false, $level = QR_ECLEVEL_L, $size = 3, $margin = 4, $saveandprint=false) 
       # outfile将qrcode输出到一个文件中， level是纠错级别， size是尺寸 ， margin是边距（类似CSS），否则默认是在中间显示
       QRcode::png('http://cfonheart.github.io', FALSE , QR_ECLEVEL_L , 10 , 0 , true);
       
       php?>
2. jquery绘制QRCODE
   将https://github.com/jeromeetienne/jquery-qrcode上的源码clone到自己的站点对应的目录下，主要使用其中的一个js文件
   当然http://www.bootcdn.cn/下提供了这个文件，可以直接链接到指定文件，代码中jquery.min.js就是从cdn站点链接过来的，这样就不用下载到本地了
       <!DOCTYPE html>
       <!--
       To change this license header, choose License Headers in Project Properties.
       To change this template file, choose Tools | Templates
       and open the template in the editor.
       -->
       <html>
           <head>
               <title>TODO supply a title</title>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
           </head>
           
           <body>
               <div id="qrcode"></div>
               <script src="//cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
               <script src="jquery-qrcode/jquery.qrcode.min.js"></script>
               <script>
                   <!-- 第一个是普通的文字，第二个是直接生成指引的链接 -->
                   $('#qrcode').qrcode("what a lovely pig you are");
                   $('#qrcode').qrcode({width: 64,height: 64,text: "http://cfonheart.github.io"});
               </script>
               
           </body>
       </html>
   
3. QRCODE生成微信名片，方便手机直接保存联系人
   文段主要以BEGIN:VCARD开头END:VCARD结尾，中间的信息根据需要可自行填写，更多的信息我在代码中列举了一部分，更多的可以参考http://phpqrcode.sourceforge.net/examples/index.php?example=026
       <?php
       
       /* 
        * To change this license header, choose License Headers in Project Properties.
        * To change this template file, choose Tools | Templates
        * and open the template in the editor.
        */
       
       include "./phpqrcode/qrlib.php";
       
       /*
        *
        * N //姓
        * FN //名
        * ORG //公司地址
        * TEL;WORK;VOICE //工作单位电话
        * TEL;HOME;VOICE //家里电话
        * TEL;TYPE=cell //移动电话
        * ADR;HOME //家庭住址
        * EMAIL //邮箱
        * URL //网址 
        *
        */
       
       $content = 'BEGIN:VCARD'."\n";
       $content .= 'VERSION:2.1'."\n";
       $content .= 'N:gan'."\n";
       $content .= 'FN:jun'."\n";
       $content .= 'TEL;TYPE=cell:17327851102'."\n";
       $content .= 'ORG:nanjing university'."\n";
       $content .= 'ADR:Ningbo Zhejiang'."\n";
       $content .= 'EMAIL:junnor.gan@gmail.com'."\n";
       $content .= 'URL:http://cfonheart.github.io'."\n";
       $content .= 'END:VCARD'."\n";
       
       QRcode::png($content);
   

Source：

慕课网教程

qrcode-php官网

jquery-qrcode源码的github站点
