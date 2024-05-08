const { createApp } = Vue

createApp({
    data() {
        return {
            discs: []
        }
    },
    methods: {
        fetch() {
            axios.get('./api.php').then((res) => {
                console.log(res.data)
                this.discs = res.data
                console.log(this.discs)
            })

        }
    },
    created() {
        this.fetch()
    }
 }).mount('#app')