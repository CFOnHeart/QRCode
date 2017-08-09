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
