const app = new Vue({
    el: '#app',
    data: {
        albums: [],
        genres: [],
        genre: "",

    },
    mounted() {
        axios
            .get('./database/albums.php')
            .then(response => {
                this.albums = response.data
                this.getGenres
            })
    },
    computed: {
        getGenres() {
            this.albums.forEach(album => {
                if (!this.genres.includes(album.genre)) {
                    this.genres.push(album.genre)
                }
            });
        }
    },
    methods: {
        filterAlbums() {
            return this.albums.filter((album) => {
                return album.genre.indexOf(this.genre) > -1;
            });
        },
    }
})