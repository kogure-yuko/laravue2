const { default: Axios } = require('axios');

require('./bootstrap');

const app = new Vue({
  el: '#app',
  data: {
    todos: []
  },
  methods: {
    fetchTodos: function(){
      Axios.get('/api/get').then((res)=>{
        this.todos = res.data
      });
    }
  },
  created(){
    this.fetchTodos();
  }
});