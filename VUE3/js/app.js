const app = {
    data(){
        return{
            name: 'Camila',
            lastName: 'Costa',
            films:{
                title: 'Persona',
                image: './assets/images/persona-bergman.jpg',
                stars: 4.5,
            },
            films2:{
                title: 'The Godfather',
                image: './assets/images/godfather.jpg',
                stars: 5,
            }
        }
    }
}

Vue.createApp(app).mount("#app");