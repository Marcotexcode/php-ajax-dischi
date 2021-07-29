const app = new Vue({

    el: '#app',

    data: {

        url: 'api/api-album.php',

        album: ''

    },

    mounted() {

        axios.get(this.url).then(response => {

            this.album = response.data;

            console.log(this.album);

        })

        .catch(error => {

            console.log(error);

        }); 

    },

});
