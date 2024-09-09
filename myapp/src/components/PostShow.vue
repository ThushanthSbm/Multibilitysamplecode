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
          <tr>
            <td>{{ post.userId }}</td>
            <td>{{ post.id }}</td>
            <td>{{ post.title }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script>
export default {
  name: 'PostShow',
  data() {
    return {
      post: {}
    };
  },
  created() {
    this.loadPost();
  },
  methods: {
    loadPost() {
        const postId = this.$route.params.id;
      fetch(`http://127.0.0.1:8000/api/post/${postId}`)
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => {
          this.post = data;
        })
        .catch(error => {
          console.error('Error fetching post:', error);
        });
    }
  }
}
</script>
  