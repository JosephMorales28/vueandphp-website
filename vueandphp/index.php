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
    <link rel="preload" href="img/jospeh2025.webp" as="image" type="image/webp">
    <link rel="preload" href="img/josephoct.webp" as="image" type="image/webp">
    <link rel="preconnect" href="http://localhost/vueandphp/">
    <!--<link rel="preload" href="js/vue.js" as="script">i copy the original link of vue.global.js because in devtool said need to minify javascript so i create another file vue.js and minify it,  you can use this <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> but this script is not minify-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/app.js" defer ></script>
    <title>Joseph Portfolio</title>
</head>
<body oncontextmenu= "return false;">
   <header>
      <div id="logo">
         <picture>
            <source v-bind:srcset="logoImage" type="image/webp">
               <a href="index.php"><img v-bind:src="logoImage" alt="logo" loading="lazy" fetchpriority="high" decoding="async"></a>
         </picture>
         <h1>{{logoTitle}}</h1>
      </div>
      <div id="right-header">
          <h1><a href="blog.php" aria-label="Visit Joseph's Blog">{{headerBlog}}</a></h1>
          <button aria-label="Hire Joseph Morales">{{headerButton}}</button>
      </div>
   </header>
   <nav role="navigation">
      <div id="profile">
         <div id="profile-info">
            <h1>{{name}}</h1>
            <code>{{skills}}</code>
            <p>{{message}}</p>
            <button aria-label="Hire Joseph Morales">Hire me</button>
         </div>
         <picture>
            <source v-bind:srcset="image" type="image/webp">
               <img src="img/jospeh2025.webp" alt="profile picture" loading="lazy" fetchpriority="high" decoding="async">
         </picture>
      </div>
   </nav>
   <main role="main">
   <section aria-labelledby="About-title">
      <div id="About-me">
         <div id="about-text">
            <h1 id="About-title">{{sectionTitle}}</h1>
            <p>{{paragraph}}</p>
            <p>{{paragraphtwo}}</p>
            <p>{{paragraphthree}}</p>
         </div>
         <div id="about-content">
            <picture>
               <source v-bind:srcset="imagepng" type="image/png">
                  <img v-bind:src="imagepng" alt="increase" loading="lazy" fetchpriority="high" decoding="async">
            </picture>
            <h1>50+</h1>
            <p>Project Completed in the past 6 months</p>
            <div id="content-image">
               <picture>
                  <source v-bind:srcset="imagewebp" type="image/webp">
                  <img v-bind:src="imagewebp" alt="joseph" loading="lazy" fetchpriority="high" decoding="async">
               </picture>
            </div>
         </div>
         <div id="about-education">
            <picture>
               <source v-bind:srcset="imagewebp" type="image/webp">
                  <img v-bind:src="imagewebp" alt="joseph" loading="lazy" fetchpriority="high" decoding="async">
            </picture>
            <h1>Educational Background</h1>
            <ul>
               <li>Holy child Catholic School - Primary</li>
               <li>University of the East Manila - Secondary</li>
               <li>University of the East Manila (CCSS) - Tertiary</li>
               <li>TESDA - Training</li>
               <li>MFI - Training</li>
            </ul>
         </div>
      </div>
   </section>
   </main>
   <aside>
      <div id="aside-projects">
         <h1>Recent Projects</h1>
         <ul>
            <li id="list-projects">
               <div id="list-project-image">
                  <picture>
                     <source srcset="img/sample.jpg" type="image/jpg">
                        <img src="img/sample.jpg" alt="project image" loading="lazy" fetchpriority="high" decoding="async">
                  </picture>
               </div>
               <div id="list-project-title">
                  <h1>Web Ecommerce</h1>
                  <code>HTML5</code> <code>SCSS</code> <code>PHP</code> <code>Javascript</code>
               </div>
               <div id="list-project-onfo">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam placeat impedit quaerat adipisci, maiores minus eius iusto voluptatum eveniet laboriosam blanditiis nemo tenetur nisi numquam excepturi. Voluptatem, temporibus. Vero, asperiores?</p>
               </div>
            </li>
         </ul>
      </div>
   </aside>
</body>
<footer role="contentinfo">
   <p>&copy; {{footerparagraph}}</p>
   <ul>
      <li><img v-for="(icon, index) in imagesocial" :key="index" v-bind:src="icon" :alt="list[index]" loading="lazy" fetchpriority="high" decoding="async"></li>
   </ul>
</footer>
</html>
