const { createApp } = Vue;

createApp({
    data(){
        return{
            todolist: [], 
            newTask: {
                task: "",
                completed: false
            }
        }
    },
    methods:{
        addTask(){
            axios
                .post("./create.php", {
                    task: this.newTask
                }, {
                    headers: {
                        "Content-type": "multipart/form-data"
                    }
                })
                .then((response) => {
                    console.log(response);

                    this.todolist = response.data.todos;
                    this.newTask.task = "";
                });
        }
    },
    created(){
        axios
            .get("./api.php", {
                params: {
                    task: this.newTask
                }
            })
            .then((response) => {
                console.log(response);

                this.todolist = response.data;
            });

    }
}).mount("#app");