// console.log('Hello js');


const { createApp } = Vue;

createApp({
data() {
    return {
    message: 'La mia lista',
    todos: [],


    }
},

methods: {
    // chiamata axios
    fetchData() {
        axios.get('./server.php').then(res => {
            // console.log(res.data.results);
            this.todos = res.data.results;
        })
    },

},

created () {
    this.fetchData()
},

mounted() {
    // console.log('Hello Vue');
}


}).mount('#app')