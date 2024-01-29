const { createApp} = Vue
createApp({
    data() {
        return {
            apiUrl : 'server.php',
            todo: '',
        }
    },
    mounted() {
        this.request()
    },
    methods: {
        reply(){
            const data ={
                todo: this.todo
            }
            axios.post(this.apiUrl, data,{
                headers: { 'Content-type': 'multipart/form-data'}
            }).then((response) => {
            })
        },
        request(){
            axios.get(this.apiUrl).then((response) => {
            })

        },
    },
}).mount('#app')