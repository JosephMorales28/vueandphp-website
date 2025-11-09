<!DOCTYPE html>
<html lang="en-PH">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Joseph Morales"/>
    <meta name="description" content= "Web Portfolio"/>
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
            <source v-bind:srcset="logoImage" type="image/webp">
               <a href="index.php"><img v-bind:src="logoImage" alt="logo" loading="lazy" fetchpriority="high" decoding="async"></a>
         </picture>
         <h1>{{headerBlog}}</h1>
      </div>
   </header>
   <nav>
         <div id="blog">
            <h1>{{blog}}</h1>
            <h2>{{headingtwo}}</h2>
            
            <div id="blog-creator">
               <picture>
                     <source srcset="img/josephoct.webp" type="image/webp">   
                     <img v-bind:src="imagetwo" alt="joseph morales blog picture" loading="lazy" fetchpriority="high" decoding="async">
               </picture>
               <div id="blog-create">
                  <h1>by. Joseph Morales</h1>
                  <p>November 9,2025</p>
               </div>
            </div>
            <div id="blog-content">
               <figure>
                  <picture>
                     <source v-bind:srcset="imagefive" type="image/webp">
                        <img v-bind:src="imagefive" alt="blog image" loading="lazy" fetchpriority="high" decoding="async">
                  </picture>
                  <figcaption>Image Credit: Joseph Morales</figcaption>
               </figure>
               <p>This is first Project page</p>
            </div>

            <div id="blog-creator">
               <picture>
                     <source srcset="img/josephoct.webp" type="image/webp">   
                     <img v-bind:src="imagetwo" alt="joseph morales blog picture" loading="lazy" fetchpriority="high" decoding="async">
               </picture>
               <div id="blog-create">
                  <h1>by. Joseph Morales</h1>
                  <p>November 5,2025</p>
               </div>
            </div>
            <div id="blog-content">
               <figure>
                  <picture>
                     <source v-bind:srcset="imagethree" type="image/webp">
                        <img v-bind:src="imagethree" alt="blog image" loading="lazy" fetchpriority="high" decoding="async">
                  </picture>
                  <figcaption>Image Credit: Joseph Morales</figcaption>
               </figure>
               <p>This first image has no animation header menu.</p>  
               <figure>      
                  <picture>
                     <source v-bind:srcset="imagefour" type="image/webp">
                        <img v-bind:src="imagefour" alt="blog image" loading="lazy" fetchpriority="high" decoding="async">
                  </picture>
                  <figcaption>Image Credit: Joseph Morales</figcaption>
               </figure>
               <p>This second image has an animation header menu when you scroll down.</p>
            </div>
            
            <div id="blog-creator">
               <picture>
                     <source srcset="img/josephoct.webp" type="image/webp">   
                     <img v-bind:src="imagetwo" alt="joseph morales blog picture" loading="lazy" fetchpriority="high" decoding="async">
               </picture>
               <div id="blog-create">
                  <h1>by. Joseph Morales</h1>
                  <p>{{datecreate}}</p>
               </div>
            </div>
            <div id="blog-content">
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia voluptate nesciunt natus totam, laborum ratione rerum ab, tenetur autem doloremque magnam cumque. In modi dolores qui veritatis! Nobis, quia ipsum.</p>        
            </div>
         </div>
   </nav>
</body>
<footer>
   <p>&copy; {{footerparagraph}}</p>
   <ul>
      <li><img v-for="(icon, index) in imagesocial" :key="index" v-bind:src="icon" :alt="list[index]" loading="lazy" fetchpriority="high" decoding="async"></li>
   </ul>
</footer>
</html>
