<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/app.js" defer ></script>
    <title>Joseph Portfolio</title>
</head>
<header oncontextmenu="return false;">
       <div id="logo">
          <img v-bind:src='url' alt="logo" loading="lazy" fetchpriority="high" decoding="async">
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
         <img v-bind:src='image' :style="{ width:width ,height:height}" alt="profile-picture" loading="lazy" fetchpriority="high" decoding="async">
      </div>
   </div>
</nav>
<body>
   <div id="info">
      <div id="Aboutme">
         <h1>About Me</h1>
         <p>Im  a web developer with experience in creating dynamic and responsive websites. I specialize in front-end development using HTML, CSS, Vue.js, and Javascript. </br></br>I have a strong understanding of user experience and design principles, and I am passionate about creating visually appealing and user-friendly websites.</br></br> I am also familiar with back-end development using PHP and MySQL, allowing me to create full stack web applications. I am constantly learning and staying up to date with the latest web development trends and technologies to ensure that my skills are always current. </p>
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
         </br></br></br>
         <ul>
            <li>Holy Child Catholic School - Primary School</li>
            <li>University of the East Manila- Secondary School</li>
            <li>University of the East Manila (CCSS) - Tertiary University</li>
            <li>TESDA</li>
            <li>MFI</li>
         </ul>
      </div>
   </div>
</body>
</html>
