console.log(' Hello Vue 3');
const logo=Vue.createApp({
    data (){
        return{
            logoImage:"img/logo.webp",
            logoTitle: 'Joseph Morales',
            headerBlog:'Blog',
            headerButton:'Hire Me'
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
            image:'img/jospeh2025.webp',
            imagetwo:'img/josephoct.webp',
            imagethree:'img/blog.webp',
            imagefour:'img/blog2.webp',
            imagefive:'img/blog3.png',
            datecreate:"November 3, 2025"

        }
    }
})
profile.mount('nav');

const about=Vue.createApp({
    data (){
        return{
            imagepng:"img/increasecalendar.png",
            imagewebp:"img/josephoct.webp",
            sectionTitle:"About Me",
            paragraph:"Im a web developer with experience in creating dynamic and responsive websites. I specialize in front-end development using HTML, CSS, Vue.js, and Javascript.",
            paragraphtwo:"I have a strong understanding of user experience and design principles, and I am passionate about creating visually appealing and user-friendly websites.",
            paragraphthree:"I am also familiar with back-end development using PHP and MySQL, allowing me to create full stack web applications. I am constantly learning and staying up to date with the latest web development trends and technologies to ensure that my skills are always current."
        }
    }
})
about.mount("section");

const aside=Vue.createApp({
    data(){
        return{
            projects: [
            {
               title: 'Web Ecommerce',
               image: 'img/sample.jpg',
               technologies: ['HTML5', 'SCSS', 'PHP', 'Javascript'],
               description:
                  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam placeat impedit quaerat adipisci, maiores minus eius iusto voluptatum eveniet laboriosam blanditiis nemo tenetur nisi numquam excepturi. Voluptatem, temporibus. Vero, asperiores?',
            },
        // Add more project objects here as needed
            {
               title: 'Dashboard',
               image: 'img/sample.jpg',
               technologies: [' HTML5 ', ' SCSS ', ' PHP ', ' Javascript '],
               description:
                  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam placeat impedit quaerat adipisci, maiores minus eius iusto voluptatum eveniet laboriosam blanditiis nemo tenetur nisi numquam excepturi. Voluptatem, temporibus. Vero, asperiores?',
            },
            ],
        }
    }
})
aside.mount("aside");

const footer=Vue.createApp({
    data(){
        return{
            footerparagraph:" 2025 Joseph Morales. All rights reserved.",
            list:["facebook","Instagram","Github","Behance","Threads"],
            imagesocial:["img/icons/icons8-facebook-50.webp","img/icons/icons8-instagram-50.webp","img/icons/icons8-github-50.webp","img/icons/icons8-behance-50.webp","img/icons/icons8-threads-50.webp"]
        }
    }
})
footer.mount("footer");
