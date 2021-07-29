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

    methods: {

        search() {

            this.album.forEach((element) => {
                
                if (element.genere.toLowerCase().includes(this.ricerca.toLowerCase())) {

                    element.visible = true;

                } else {

                    element.visible = false;

                }

                console.log(element);

            });
            
        }

    }

});
