const app = new Vue({
  el: "#app",
  data: {
    albums: [],
  },
  methods: {},
  mounted() {
    axios
      .get("http://localhost/php-ajax-dischi/milestone2/server.php")
      .then((resp) => {
        this.albums = resp.data;
        console.log(this.albums);
      });
  },
});
