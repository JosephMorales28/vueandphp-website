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
<header>
       <div id="logo">
          <img v-bind:src='url' alt="logo" loading="lazy" fetchpriority="high" decoding="async">
          <h1>{{title}}</h1>
       </div> 
       <div id="app">
          {{message}}
       </div>
</header>
<nav>
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
   my skills
</body>
</html>
