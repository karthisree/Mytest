<html>
   <head>
      <title>VueJs Introduction</title>
      <script type = "text/javascript" src = "js/vue.js"></script>
   </head>
   <body>
      <div id = "intro" style = "text-align:center;">
         <h1>{{ message }}</h1>
         <button v-on:click="reverseMessage">Reverse Message</button>
         <ol>
      <!-- Create an instance of the todo-item component -->
      <todo-item
            v-for="item in groceryList"
            v-bind:todo="item"
            v-bind:key="item.id"
            ></todo-item>
      </ol>
      </div>

      

      <div id="app-7">
      <ol>
         <!--
            Now we provide each todo-item with the todo object
            it's representing, so that its content can be dynamic.
            We also need to provide each component with a "key",
            which will be explained later.
         -->
         <todo-item
            v-for="item in groceryList"
            v-bind:todo="item"
            v-bind:key="item.id"
         ></todo-item>
      </ol>
      </div>

      
      <script type = "text/javascript">

         Vue.component('todo-item', {
         props: ['todo'],
         template: '<li>{{ todo.text }}</li>'
         })

         var app7 = new Vue({
         el: '#app-7',
         data: {
            groceryList: [
               { id: 0, text: 'Vegetables' },
               { id: 1, text: 'Cheese' },
               { id: 2, text: 'Whatever else humans are supposed to eat' }
            ]
         }
         })


         var vue_det = new Vue({
            el: '#intro',
            data: {
               message: 'My first VueJS Task',
               groceryList: [
               { id: 0, text: 'Test' },
               ]
            },
            methods: {
               reverseMessage: function () {
               this.message = this.message.split('').reverse().join('')
               }
            }
         });

         

      </script>
   </body>
</html>
