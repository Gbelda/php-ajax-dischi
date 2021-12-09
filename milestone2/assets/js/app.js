const app = new Vue({
    el: '#app',
    data: {
        albums: []
    },
    mounted() {
        axios
            .get('./database/albums.php')
            .then(response => {
                this.albums = response.data
            })
    }
})