<!DOCTYPE html>
<html lang="en">
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
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/app.js" defer ></script>
    <title>Joseph Portfolio</title>
</head>
<header oncontextmenu="return false;">
       <div id="logo">
          <img v-bind:src="image" alt="logo" loading="lazy" fetchpriority="high" decoding="async">
          <h1>{{title}}</h1>
       </div> 
       <div id="app">
          {{message}}
       </div>
</header>
<nav oncontextmenu="return false;">
   <div id="banner">
      <div id="profile-info">
         <p>{{name}}</p>
         <code> {{skills}}</code></br>
         <div id="bio">
            <p v-bind:style="{fontSize:size,width:width}">{{message}}</p>
         </div>
         <button>Hire Me</button>
      </div>
      <div id="profile-pic">
         <picture>
            <source v-bind:srcset='image' type="image/webp">
            <img v-bind:src='image' :style="{ width:width ,height:height}" alt="profile-picture" loading="lazy" fetchpriority="high" decoding="async">
         </picture>
      </div>
   </div>
</nav>
<body oncontextmenu="return false;" ondragstart="return false;" onselectstart="return false;">
   <div id="info">
      <div id="Aboutme">
         <h1>{{title}}</h1>
         <p>{{paragraph}}</br></br>{{paragraphtwo}}</br></br>{{paragraphthree}}</p>
      </div>
      <div id="clientsAverage" oncontextmenu="return false;">
         <img src="img/increase calendar copy.png" alt="clients-icon" loading ="lazy" fetchpriority="high" decoding="async">
         <h1>50+</h1>
         <p>Average increase in clients engagement in the first 6 months.</p></br></br>
         <div id="profile-pic-small">
            <img src="img/josephoct.webp" alt="profile-picture" loading="lazy" fetchpriority="high" decoding="async">
         </div>
      </div>
      <div id="experience">
         <img src="img/josephoct.webp" alt="profile-picture" loading="lazy" fetchpriority="high" decoding="async">
         </br></br>
         <h1>Educational Background</h1>
         <?php
              $Educational=array("Holy Child Catholic School-Primary", "University of the East Manila- Secondary", "University of the East Manila (CCSS)- Tertiary", "Tesda", "MFI");

              foreach ($Educational as $educ){
                 print "<ul>";
                 print "<li> $educ </li>";
                 print "</ul>";
              }
         ?>
      </div>
   </div>
   <div id="portfoliopage">
        <div id="portfolioheader">
           <h1>Projects</h1>
           <p>Here are some of my recent works</p>
        </div>
        <div id="portfoliolist">
            <ul>
               <li><div id="portfolioitem"><img src="img/sample.jpg" alt="mountains" loading="lazy" fetchpriority="high" decoding="async"><p>description:</br></br>mountains</p><p>programming language use </br></br><code>SCSS</code> <code>Vue</code> <code>php</code></p></div></li>
               <li><div id="portfolioitem"><img src="img/sample.jpg" alt="mountains" loading="lazy" fetchpriority="high" decoding="async"><p>description:</br></br>mountains Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quod eligendi atque sed dolores, tenetur dolorem mollitia blanditiis reiciendis velit iure excepturi at fugiat optio qui assumenda, iusto eveniet reprehenderit?</p><p>programming language use </br></br><code>SCSS</code> <code>Vue</code> <code>php</code></p></div></li>
               <li><div id="portfolioitem"><img src="img/sample.jpg" alt="mountains" loading="lazy" fetchpriority="high" decoding="async"><p>description:</br></br>mountains</p><p>programming language use </br></br><code>SCSS</code> <code>Vue</code> <code>php</code></p></div></li>
            </ul>
        </div>
   </div>
</body>
<section>
   <h1>Do you a vision? lets bring it live on browser?</h1>
   <p>Im always excited to collaborate on new and innovative projects. Whether you're starting form scratch refining an existing idea.</p>
</section>
<article>
   This is my article
</article>
<footer>
   &copy; 2025 Joseph Morales. All rights reserved.
</footer>
</html>
