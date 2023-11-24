// console.log('Hello js');


const { createApp } = Vue;

createApp({
data() {
    return {
    message: 'La mia lista',
    todos: [],
    newTodo: '',


    }
},

methods: {
    // funzione - chiamata axios
    fetchData() {
        axios.get('./server.php').then(res => {
            // console.log(res.data.results);
            this.todos = res.data.results;
        })
    },

    // funzione - per inviare richieste POST nello store.php 
    storeTodo() {
        // console.log(this.newTodo);

        const data = {
            text: this.newTodo,
            done: false

        }
        console.log(data);

        axios.post('store.php',data, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        })

    }
},

created () {
    this.fetchData()
},

mounted() {
    // console.log('Hello Vue');
}


}).mount('#app')