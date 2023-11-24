// console.log('Hello js');


const { createApp } = Vue;

createApp({
data() {
    return {
    message: 'Hello Vue!',


    }
},

methods: {

},

created () {

},

mounted() {
    // console.log('Hello Vue');
}


}).mount('#app')