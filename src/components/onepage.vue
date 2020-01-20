<template>
  <div class="onepage">
    <div v-for="proj in posts" v:key>
     <h1>{{ proj.title.rendered}}</h1>
    </div>
  </div>
</template>

<script>
export default {
  name: 'onepage',
  data () {
    return {
      posts: []
    }
  },
  created: function(){
    this.$http.get('wp/v2/posts').then(response => {
      for(let post in response.data){
        this.posts.push(response.data[post]);
      }
    }, error => {
        alert(error)
    });
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
