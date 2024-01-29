const { createApp} = Vue
createApp({
    data() {
        return {
            apiUrl : 'server.php',
        }
    },
    mounted() {
        this.request()
    },
    methods: {
        request(){
            axios.get(this.apiUrl).then((response) => {
            })

        },
    },
}).mount('#app')