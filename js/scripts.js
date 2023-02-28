const { createApp } = Vue;

createApp({
    data(){
        return{
            todolist: []
        }
    },
    methods(){

    },
    created(){
        axios
            .get("./api.php")
            .then((response) => {
                console.log(response);

                this.todolist = response.data;
            });

    }
}).mount("#app");