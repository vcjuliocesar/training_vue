Vue.component('task-list',{
  template:`

    <div>

      <task v-for="task in tasks">{{task.task}}</task>
    
    </div>
  
    `,

  data(){
    return {
      tasks : [
        
        {task:"Go to he Bank",completed:true},

        {task:"Go to he Email",completed:false},
        
        {task:"Go to he Farm",completed:false},
        
        {task:"Go to he School",completed:true},
      ]
    };
  }
});

Vue.component('task',{
    template:'<li><slot></slot></li>'
});

new Vue({
    el:'#root'
});