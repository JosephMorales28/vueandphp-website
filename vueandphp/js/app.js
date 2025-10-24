console.log(' Hello Vue 3');

const app = Vue.createApp({
    data (){
        return{
            message: 'Hello from Vue 3, Joseph!'
        }
    }
})
app.mount('#app');
