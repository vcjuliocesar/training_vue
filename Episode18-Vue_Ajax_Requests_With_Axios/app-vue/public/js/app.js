new Vue({
    el:"#root",
    data:{
        skills:[]
    },
    mounted() {
        axios.get('/skills')
        .then(response => this.skills = response.data)
        .catch(error => console.log(error))
        .then(()=> console.log("Run..."));
    },
});