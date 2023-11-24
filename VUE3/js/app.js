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
            styles:{
                backgroundColor: '#fff',
                color: '#000'
            },
            themeBlack: false            
        } 
    },

    computed: {
        fullName(){
            return this.name + ' ' +this.lastName;
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

        toogleTheme(){
            this.themeBlack = !this.themeBlack;
            if (this.themeBlack){
                this.styles.backgroundColor = '#000',
                this.styles.color = '#fff'
            }else{                            
                this.styles.backgroundColor = '#fff',
                this.styles.color = '#000'                
            }
        }
    },
}

Vue.createApp(app).mount("#app");