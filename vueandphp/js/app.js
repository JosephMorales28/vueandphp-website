console.log(' Hello Vue 3');
const logo=Vue.createApp({
    data (){
        return{
            image:"img/logo.webp",
            title: 'Joseph Morales',
            message:'Blog',
            button:'Hire Me'
        }
    }
})
logo.mount('header');

const profile=Vue.createApp({
    data (){
        return{
            name:" I'm Joseph Morales",
            skills:" Web Developer | Graphic Designer",
            message:"A passionate Web Developer and Graphic Designer dedicated to crafting visually stunning and user-friendly digital experiences.",
            blog:"Welcome to my Blog",
            headingtwo:"Whats new in my web portfolio?",
            image:'img/jospeh2025.webp'
        }
    }
})
profile.mount('nav');

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
about.mount("section");

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
            image:["img/icons/icons8-facebook-50.webp","img/icons/icons8-instagram-50.webp","img/icons/icons8-github-50.webp","img/icons/icons8-behance-50.webp","img/icons/icons8-threads-50.webp"]
        }
    }
})
footer.mount("footer");
