const { createApp} = Vue
createApp({
    data() {
        return {
            apiUrl : 'server.php',
            toDo: '',
            todoList:[],
        }
    },
    mounted() {
        this.getTodoList()
    },
    methods: {
        addTodo(){
            const data ={
                toDo: this.toDo
            }
            axios.post(this.apiUrl, data,{
                headers: { 'Content-type': 'multipart/form-data'}
            }).then((response) => {
                this.toDo = ''
                this.todoList = response.data
            })
        },
        getTodoList(){
            axios.get(this.apiUrl).then((response) => {
                console.log(response.data)
                this.todoList = response.data
            })

        },
    },
}).mount('#app')