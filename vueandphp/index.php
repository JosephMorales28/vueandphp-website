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
    <title>Joseph Portfolio</title>
</head>
<body oncontextmenu= "return false;">
   <header>
      <div id="logo">
         <picture>
            <source srcset="img/logo.webp" type="image/webp">
               <img v-bind:src="image" alt="logo" loading="lazy" fetchpriority="high" decoding="async">
         </picture>
         <h1>{{title}}</h1>
      </div>
      <div id="right-header">
          <h1><a href="blog.php">{{message}}</a></h1>
          <button>{{button}}</button>
      </div>
   </header>
   <nav>
      <div id="profile">
         <div id="profile-info">
            <h1>{{name}}</h1>
            <code>{{skills}}</code>
            <p>{{message}}</p>
            <button>Hire me</button>
         </div>
         <img v-bind:src="image" alt="profile picture" loading="lazy" fetchpriority="high" decoding="async">
      </div>
   </nav>
   <section>
      <div id="About-me">
         <div id="about-text">
            <h1>{{title}}</h1>
            <p>{{paragraph}}</p>
            <p>{{paragraphtwo}}</p>
            <p>{{paragraphthree}}</p>
         </div>
         <div id="about-content">
            <img src="img/increase calendar copy.png" alt="increase" loading="lazy" fetchpriority="high" decoding="async">
            <h1>50+</h1>
            <p>Project Completed in the past 6 months</p>
            <div id="content-image">
               <img src="img/josephoct.webp" alt="joseph" loading="lazy" fetchpriority="high" decoding="async">
            </div>
         </div>
         <div id="about-education">
            <img src="img/josephoct.webp" alt="joseph" oading="lazy" fetchpriority="high" decoding="async">
            <h1>Educationional Background</h1>
            <uL>
               <li>Holy child Catholic School - Primary</li>
               <li>University of the East Manila - Secondary</li>
               <li>University of the East Manila (CCSS) - Tertiary</li>
               <li>TESDA - Training</li>
               <li>MFI - Training</li>
            </ul>
         </div>
      </div>
   </section>
</body>
<footer>
   <p>&copy; {{paragraph}}</p>
   <ul>
      <li><img v-for="(socialmedia, index) in image" :key="index" v-bind:src="socialmedia" :alt="list[index]" loading="lazy" fetchpriority="high" decoding="async"></li>
   </ul>
</footer>
</html>
