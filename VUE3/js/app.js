const app = {
    data(){
        return{
            name: 'Camila',
            lastName: 'Costa',
            films: [
                {
                    title: 'Persona',
                    image: './assets/images/persona-bergman.jpg',
                    stars: 4.5,
                },
                {            
                    title: 'The Godfather',
                    image: './assets/images/godfather.jpg',
                    stars: 5,
                }
            ],
            cart: [],
        }        
    },
    methods: {
        addCart(film){
            this.cart.push(film);
        },

        inCart(film){
            return this.cart.indexOf(film) != -1;
        },

        removeCart(film){
            this.cart = this.cart.filter((value, index) => film != value)
        },
    },
}

Vue.createApp(app).mount("#app");