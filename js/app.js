const { createApp } = Vue

createApp({
    data() {
        return {
            discs: [],
            isOpen: null,
        }
    },
    methods: {
        fetch() {
            axios.get('./api.php').then((res) => {
                console.log(res.data)
                this.discs = res.data
                console.log(this.discs)
            })
        },
        toggleOpen(i) {
            this.isOpen = this.isOpen === i ? null : i;
        },
    },
    created() {
        this.fetch()
    }
}).mount('#app')