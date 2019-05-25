<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <h2 v-if="msg2.length === 0">
      no text
    </h2>
    <h2>{{ msg2 }}</h2>
    <input type="text" v-model="msg2">
    <button @click="clear()">clear</button>
    <br>
    <input type="text" v-model="zipcode">
    <button @click="getZip()">getZip</button>
    <p>status: {{ code }}</p>
    <ul>
      <li v-for='(value, name) in results' v-bind:key='value.id' >
       {{ name }} | {{ value }}</li>
    </ul>
  </div>
</template>

<script>
const axios = require('axios');

export default {
  name: 'HelloWorld',
  props: {
    msg: String,
  },
  data() {
    return {
      msg2: '',
      zipcode: '',
      code: '',
      results: '',
    };
  },
  methods: {
    clear() {
      this.msg2 = '';
    },
    getZip() {
      axios.get(`https://api.zipaddress.net/?zipcode=${this.zipcode}`)
        .then((response) => {
          this.code = response.data.code;
          this.results = response.data.data;
          console.log(response);
        })
        .catch((error) => { console.log(error); });
    },
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
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
