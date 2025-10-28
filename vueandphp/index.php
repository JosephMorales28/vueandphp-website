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
<body>
   <div id="info">
      <div id="Aboutme">
         <h1>{{title}}</h1>
         <p>{{paragraph}}</br></br>{{paragraphtwo}}</br></br>{{paragraphthree}}</p>
      </div>
      <div id="clientsAverage">
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
         <ul>
            <li>Holy Child Catholic School - Primary School</li>
            <li>University of the East Manila- Secondary School</li>
            <li>University of the East Manila (CCSS) - Tertiary University</li>
            <li>TESDA</li>
            <li>MFI</li>
         </ul>
      </div>
   </div>
   <div id="projects">
        Projects
   </div>
</body>
</html>
