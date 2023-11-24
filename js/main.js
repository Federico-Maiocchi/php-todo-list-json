// console.log('Hello js');


const { createApp } = Vue;

createApp({
data() {
    return {
    message: 'La mia lista',
    todos: ['PHP', 'JS', 'HTML', 'CSS']


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