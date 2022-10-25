<template>
  <div>
    <div class="col-12 allFilms">
      <!-- Popular Films -->
      <div class="containerFilms">
        <h2 class="tittleFilms">Filmes Populares</h2>
        <div class="row">
          <div
            v-for="film in listFilms"
            :key="film.idFilm"
            class="container row mt-3"
            
          >
            <div class="itemFilm" :style="`background-image:linear-gradient(0deg, rgb(20 20 20 / 66%) 17%, rgb(0 0 0 / 64%) 54%), url(http://127.0.0.1:8000/storage/imgFilms/${film.imgFilm}`">
              <router-link class="linkFilm" :to="'/singlefilm/' + film.id">{{
                film.nameFilm
              }}</router-link>
            </div>
          </div>
        </div>
      </div>
      <!-- Films Category Comédia -->
      <div class="containerFilms">
        <h2 class="tittleFilms">Preferidos</h2>
        <div class="row">
          <div
            v-for="film in listFilmPrefer"
            :key="film.idFilm"
            class="container row mt-3"
          >
            <div
              class="itemFilm"
              :style="`background-image:linear-gradient(0deg, rgb(20 20 20 / 66%) 17%, rgb(0 0 0 / 64%) 54%), url(http://127.0.0.1:8000/storage/imgFilms/${film.imgFilm}`"
            >
              <router-link class="linkFilm" :to="'/singlefilm/' + film.id">{{
                film.nameFilm
              }}</router-link>
            </div>
          </div>
        </div>
      </div>
      <!-- btnAllFilms -->
      <div>
        <router-link to="/allfilms" class="btn btnAllFilms"
          >Todos os Filmes</router-link
        >
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "FilmsComponent",
  data() {
    return {
      listFilms: [],
      idFilm: "",
      nameFilm: "",
      listFilmPrefer: [],
    };
  },
  methods: {
    async getFilms() {
      const reqFilms = await fetch(`http://127.0.0.1:8000/api/films`);
      const dataFilms = await reqFilms.json();
      for (let i = 0; i < 4; i++) {
        this.listFilms.push(dataFilms[i]);
      }
      for (let index = 0; index <= 6; index++) {
        this.listFilmPrefer.push(dataFilms[index]);
      }
    },
  },
  created() {
    this.getFilms();
  },
};
</script>
<style scoped>
.linkFilm {
  color: #fff;
  text-decoration: none;
}
.btnAllFilms {
  color: #141414;
  font-weight: 300;
  border: 1px solid #141414;
  border-radius: 25px;
  padding: 21px;
  background: #fff;
  margin-bottom: 5%;
  margin-top: 5%;
  transition: 0.5s;
}
.btnAllFilms:hover {
  padding: 27px !important;
}
.allFilms {
  height: 100%;
  background: #141414;
}
.containerFilms {
  justify-content: left;
  padding: 40px 40px;
}
.tittleFilms {
  color: #fff;
  text-align: left;
}
.itemFilm {
  background-position: center;
  background-size: cover;
  padding: 36px;
  border-radius: 25px;
  align-items: center;
  display: flex;
  justify-content: center;
}
.container {
  margin-right: 2px;
  width: 350px;
  height: 150px;
}
</style>