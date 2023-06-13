const {createApp} = Vue;

createApp({
    data(){
        return{
            api: "api.php",
            arrayLista: [],
            nuovaTask: "",
        }
    },
    methods:{
        generaNuovaTask(){
            console.log("ciao");
        }
    },
    mounted(){
        axios.get(this.api).then((response) => {
            this.arrayLista = response.data;
        });
    },
    
}).mount('#app')