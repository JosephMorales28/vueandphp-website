console.log(' Hello Vue 3');

const logo=Vue.createApp({
    data (){
        return{
            url: '#',
            title: 'Joseph Morales Portfolio'
        }
    }
})
logo.mount('#logo');

const app = Vue.createApp({
    data (){
        return{
            message: 'Hello from Vue 3, Joseph!'
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
            image:'img/jospeh2025.jpg',
            width:"400px",
            height:"400px"
        }
    }
})
profilepic.mount('#profile-pic');
