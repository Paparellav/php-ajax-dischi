const app = new Vue({
  el: "#app",
  data: {
    albums: [],
    userWord: "",
  },
  methods: {
    getGenre() {
      axios
        .get(
          `http://localhost/php-ajax-dischi/milestone2/server.php?genre=${this.userWord}`
        )
        .then((resp) => {
          console.log(resp.data);
          console.log(this.userWord);
        });
    },
  },
  mounted() {
    axios
      .get("http://localhost/php-ajax-dischi/milestone2/server.php")
      .then((resp) => {
        this.albums = resp.data;
      });
  },
});
