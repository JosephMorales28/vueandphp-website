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
