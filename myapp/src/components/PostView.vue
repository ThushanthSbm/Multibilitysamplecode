<template>
    <div class="hello">
      <h1>{{ msg }}</h1>
      <h2>Post View List</h2>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">User ID</th>
            <th scope="col">ID</th>
            <th scope="col">TITLE</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="persons in result" :key="persons.id">
            <td>{{ persons.userId }}</td>
            <td>{{ persons.id }}</td>
            <td>{{ persons.title }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script>
  export default {
    name: 'PostView',
    data() {
      return {
        result: []
      };
    },
    created() {
      this.PostLoad();
    },
    methods: {
      PostLoad() {
        const page = "http://127.0.0.1:8000/api/posts/";
        fetch(page)
          .then(response => response.json())
          .then(data => {
            console.log(data);
            this.result = data;
          })
          .catch(error => {
            console.error('Error fetching data:', error);
          });
      }
    }
  }
  </script>
  