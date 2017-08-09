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
$content .= 'N:淦'."\n";
$content .= 'FN:珺'."\n";
$content .= 'TEL:17327851102'."\n";
$content .= 'ORG:南京大学'."\n";
$content .= 'ADR:Ningbo Zhejiang'."\n";
$content .= 'EMAIL:junnor.gan@gmail.com'."\n";
$content .= 'URL:http://cfonheart.github.io'."\n";
$content .= 'END:VCARD'."\n";

QRcode::png($content);