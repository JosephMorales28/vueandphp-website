<!DOCTYPE html>
<html lang="en-PH">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Joseph Morales"/>
    <meta name="description" content= "Web Porftolio"/>
    <meta property="og:locale" content="en-PH"/>
    <meta name="keywords" content="My personal web portfolio and projects">
    <meta name="author" content="Joseph Morales">
    <link rel="icon" type="image/x-icon" href="img/logo.webp">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="preload" href="fonts/BitcountGridSingle_Roman-Light.woff" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="js/app.js" as="script">
    <linl rel="preconnect" href="http://localhost/vueandphp/">
    <!--<link rel="preload" href="js/vue.js" as="script">i copy the original link of vue.global.js because in devtool said need to minify javascript so i create another file vue.js and minify it,  you can use this <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> but this script is not minify-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/app.js" defer ></script>
    <title>Blog</title>
</head>
<body oncontextmenu= "return false;">
   <header>
      <div id="logo">
         <picture>
            <source srcset="img/logo.webp" type="image/webp">
               <img v-bind:src="image" alt="logo" loading="lazy" fetchpriority="high" decoding="async">
         </picture>
         <h1>{{message}}</h1>
      </div>
   </header>
   <nav>
        <div id="blog">
            <h1>{{blog}}</h1>
            <h2>{{headingtwo}}</h2>
        </div>
   </nav>
</body>
<footer>
   <p>&copy; {{paragraph}}</p>
   <ul>
      <li><img v-for="(socialmedia, index) in image" :key="index" v-bind:src="socialmedia" :alt="list[index]" loading="lazy" fetchpriority="high" decoding="async"></li>
   </ul>
</footer>
</html>