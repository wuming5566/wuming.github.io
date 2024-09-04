<?php
$conf['qqjump']=1;
if(strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/')||strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')!==false && $conf['qqjump']==1)
    {$siteurl='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
echo '

<!DOCTYPE html>
<html lang="zh">
 <head> 
  <meta charset="UTF-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
  <title>请使用浏览器打开 - 勿埋我心</title> 
  <style type="text/css">
        .loader {
            width: 320px;
            margin: 50px auto 70px;
            position: relative;
             margin-top: 180px;
             /*text-align:center;*/
        }
        .loader .loading-1 {
            margin:0px auto;
            position: relative;
            width: 70%;
            height: 10px;
            border: 1px solid #69d2e7;
            border-radius: 10px;
            animation: turn 4s linear 1.75s infinite;
        }
        .loader .loading-1:before {
            content: "";
            display: block;
            position: absolute;
            width: 0%;
            height: 100%;
            background: #69d2e7;
            box-shadow: 10px 0px 15px 0px #69d2e7;
            animation: load 2s linear infinite;
        }
        .loader .loading-2 {
            width: 100%;
            position: absolute;
            top: 20px;
            color: #69d2e7;
            font-size: 22px;
            text-align: center;
            animation: bounce 2s  linear infinite;
        }
        @keyframes load {
            0% {
                width: 0%;
            }
            87.5%, 100% {
                width: 100%;
            }
        }
        @keyframes turn {
            0% {
                transform: rotateY(0deg);
            }
            6.25%, 50% {
                transform: rotateY(180deg);
            }
            56.25%, 100% {
                transform: rotateY(360deg);
            }
        }
        @keyframes bounce {
            0%,100% {
                top: 10px;
            }
            12.5% {
                top: 30px;
            }
        }

        .top-bar-guidance{font-size:15px;color:#fff;height:70%;line-height:1.8;padding-left:20px;padding-top:20px;background:url(https://img.alicdn.com/imgextra/i3/2200638895580/O1CN01awiCFw1r5gfyRJf65_!!2200638895580.png) center top/contain no-repeat}
        body,html{width:100%;height:100%;margin:0px;padding:0px}
        body{background-color:#fff}
        .app-download-btn{display:block;width:214px;height:40px;line-height:40px;margin:18px auto 0 auto;text-align:center;font-size:18px;color:#2466f4;border-radius:20px;border:.5px #2466f4 solid;text-decoration:none}

    </style> 
 </head> 
 <body> 
  <div class="top-bar-guidance"> 
   <div class="htmleaf-container"> 
    <header class="htmleaf-header"> 
     <!--h1>小姐姐正在请求你<span>使用其他浏览器打开本站</span></h1--> 
    </header> 
    <div class="demo"> 
     <div class="container"> 
      <div class="row"> 
       <div class="col-md-12"> 
        <div class="loader"> 
         <a style="display: none;" href="" id="vurl" rel="noreferrer"></a> 
         <div class="loading-1"></div> 
         <div class="loading-2">
          因QQ/微信自带浏览器不支持本网站
          <br />请点击右上角使用其他浏览器 
          <br /> 
          <a href="mttbrowser://'. $siteurl .'" class="app-download-btn">点击打开浏览器</a>
                          <a href="https://www.skyqian.com" class="app-download-btn">勿埋我心</a> 
         </div> 
         <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
         <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script> 
         <script>
function openu(u){
document.getElementById("vurl").href= u;
document.getElementById("vurl").click();
}
var url = window.location.href;
    if(navigator.userAgent.indexOf("QQ/")> -1){
        //openu("ucbrowser://"+url);
        openu("mttbrowser://url="+url);
        //openu("baiduboxapp://browse?url="+url);
        //openu("googlechrome://browse?url="+url);
        //openu("mibrowser:"+url);
        //openu("taobao://"+url.split("://")[1]);
        //openu("alipays://platformapi/startapp?appId=20000067&url="+url);
        $("html").on("click",function(){
            //openu("ucbrowser://"+url);
            openu("mttbrowser://url="+url);
            //openu("baiduboxapp://browse?url="+url);
            //openu("googlechrome://browse?url="+url);
            //openu("mibrowser:"+url);
            //openu("taobao://"+url.split("://")[1]);
            //openu("alipays://platformapi/startapp?appId=20000067&url="+url);

        });
    }else if(navigator.userAgent.indexOf("MicroMessenger") > -1){
        if(navigator.userAgent.indexOf("Android") > -1){
            var iframe = document.createElement("iframe");
            iframe.style.display = "none";
            document.body.appendChild(iframe);
        }else{
        }
    }                          
