// console.log('Hello js');


const { createApp } = Vue;

createApp({
data() {
    return {
    message: 'La mia lista',
    todos: [],
    newTodo: '',
    index: '',


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
        if (this.newTodo !== '') {
            // console.log(this.newTodo);

            const data = {
                text: this.newTodo,
            }
            // console.log(data);

            axios.post('store.php',data, {
                headers: {'Content-Type': 'multipart/form-data'},
            }).then(res => {
                this.todos = res.data.todos;

                this.newTodo = '';
            })

        }
    },

    deleteTodo(index) {
        const data = {
            id: index
        }

        axios.post('delete.php', data, {
            headers: {'Content-Type': 'multipart/form-data'},
        }).then(res => {
            this.todos = res.data.todos;

        })
    },

    checkTodo(index) {
        const data = {
            id: index
        }

        axios.post('done.php', data, {
            headers: {'Content-Type': 'multipart/form-data'},
        }).then(res => {
            this.todos = res.data.todos;

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