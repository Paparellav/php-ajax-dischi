const app = new Vue({
  el: "#app",
  data: {
    albums: [],
    genre: "",
  },
  methods: {
    getGenre() {
      axios
        .get(
          `http://localhost/php-ajax-dischi/milestone2/server.php?genre=${this.genre}`
        )
        .then((resp) => {
          this.albums = resp.data;
        });
    },
  },
  mounted() {
    this.getGenre();
  }
});
