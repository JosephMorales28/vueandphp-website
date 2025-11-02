console.log(' Hello Vue 3');
const logo=Vue.createApp({
    data (){
        return{
            image:"img/logo.webp",
            title: 'Joseph Morales'
        }
    }
})
logo.mount('#logo');

const app = Vue.createApp({
    data (){
        return{
            message: 'Hire Me',
            blog:'Blog'
        }
    }
})
app.mount('#app');

const profile=Vue.createApp({
    data (){
        return{
            name:" I'm Joseph Morales",
            size:"1rem",
            width:"500px",
            skills:" Web Developer | Graphic Designer",
            message:"A passionate Web Developer and Graphic Designer dedicated to crafting visually stunning and user-friendly digital experiences."
        }
    }
})
profile.mount('#profile-info');

const profilepic=Vue.createApp({
    data (){
        return{
            imagejpg:'img/jospeh2025.jpg',
            image:'img/jospeh2025.webp',
            width:"400px",
            height:"400px"
        }
    }
})
profilepic.mount('#profile-pic');

const about=Vue.createApp({
    data (){
        return{
            title:"About Me",
            paragraph:"Im a web developer with experience in creating dynamic and responsive websites. I specialize in front-end development using HTML, CSS, Vue.js, and Javascript.",
            paragraphtwo:"I have a strong understanding of user experience and design principles, and I am passionate about creating visually appealing and user-friendly websites.",
            paragraphthree:"I am also familiar with back-end development using PHP and MySQL, allowing me to create full stack web applications. I am constantly learning and staying up to date with the latest web development trends and technologies to ensure that my skills are always current."
        }
    }
})
about.mount('#Aboutme');

const educ=Vue.createApp({
    data(){
        return{
            image:'img/josephoct.webp',
            h1:'Educational background'
        }
    }
})
educ.mount('#experience');

const section=Vue.createApp({
    data(){
        return{
            heading:"Do you have a vision? lets bring it live on browser?",
            paragraph:"Im always excited to collaborate on new and innovative projects. Whether you're starting form scratch refining an existing idea."
        }
    }
})
section.mount("#sectionone");

const footer=Vue.createApp({
    data(){
        return{
            paragraph:" 2025 Joseph Morales. All rights reserved.",
            list:["facebook","Instagram","Github","Behance","Threads"],
            image:["img/icons/icons-facebook.png","img/icons/icons-facebook.png","img/icons/icons-facebook.png","img/icons/icons-facebook.png","img/icons/icons-facebook.png"]
        }
    }
})
footer.mount("footer");
