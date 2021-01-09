const mySpotify = new Vue({
  el: '#root',
  data: {
    albums: [],
    selectedGenre: 'all',
    search: '', //matched with text input in html file
  },
  methods:{
    //imports filtered Disks from json
    filteredDisks(){
      axios
      .get(`http://localhost:8080/database/disks.php?src=${this.search}`)
      .then(gotAlbums => {
        this.albums = gotAlbums.data.response;
        this.filteredAlbums = [...this.albums];
      });
    }
  },

  computed:{
    //Filters albums by genre at user's selection
    filteredAlbums(){
      if (this.selectedGenre === 'all'){
        return this.albums;
      }
      return this.albums.filter(album => album.genre.toLowerCase() === this.selectedGenre.toLowerCase())
    },
  },

  mounted(){
    //Sets all disks to be shown
    this.filteredDisks()
  }
});
