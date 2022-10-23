<template>
  <div>
    <div class="col-12 allFilms">
      <!-- Popular Films -->
      <div class="containerFilms">
        <h2 class="tittleFilms">Filmes Populares</h2>
        <div class="row">
          <div v-for="film in listFilms" :key="film.idFilm" class="container row mt-3">
            <div class="itemFilm">
              <p>{{ film.nameFilm }}</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Films Category Comédia -->
      <div class="containerFilms">
        <h2 class="tittleFilms">Comédia</h2>
        <div class="row">
          <div class="container row mt-3">
            <div class="itemFilm">
              <p>O senhor dos anéis</p>
            </div>
          </div>
          <div class="container row mt-3">
            <div class="itemFilm">
              <p>O senhor dos anéis</p>
            </div>
          </div>
          <div class="container row mt-3">
            <div class="itemFilm">
              <p>O senhor dos anéis</p>
            </div>
          </div>
          <div class="container row mt-3">
            <div class="itemFilm">
              <p>O senhor dos anéis</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Films Category Aventura -->
      <div class="containerFilms">
        <h2 class="tittleFilms">Aventura</h2>
        <div class="row">
          <div class="container row mt-3">
            <div class="itemFilm">
              <p>O senhor dos anéis</p>
            </div>
          </div>
          <div class="container row mt-3">
            <div class="itemFilm">
              <p>O senhor dos anéis</p>
            </div>
          </div>
          <div class="container row mt-3">
            <div class="itemFilm">
              <p>O senhor dos anéis</p>
            </div>
          </div>
          <div class="container row mt-3">
            <div class="itemFilm">
              <p>O senhor dos anéis</p>
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
      idFilm: '',
      nameFilm: "",
    };
  },
  methods: {
    async getFilms() {},
  },
  created() {
    this.listFilms = [
      {
        idFilm: 1,
        nameFilm: 'O Senhor dos anéis'
      },
      {
        idFilm: 2,
        nameFilm: 'O Hobbit 1' 
      },
      {
        idFilm: 3,
        nameFilm: 'Os Vingadores' 
      },
      {
        idFilm: 4,
        nameFilm: 'A Origem' 
      },
    ];
    this.getFilms();
  },
};
</script>
<style scoped>
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
  background-color: #fff;
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