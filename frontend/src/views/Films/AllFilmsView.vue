<template>
  <div>
    <BannerComponent />
    <div class="titleBanner">
      <div class="row" style="padding-left: 19%; align-items: center">
        <h1 class="titleAllFilms col-8">Todos os filmes</h1>
        <div class="col-2">
          <select class="form-select" name="" id="" @change='oderFilms' v-model="orderFilms">
            <option value="asc" selected>ASC</option>
            <option value="desc">DESC</option>
          </select>
        </div>
      </div>
      <div>
        <div class="col-12 allFilms">
          <div class="containerFilms">
            <div class="">
              <div class="container row mt-3">
                <div
                  v-for="film in listFilms"
                  :key="film.id"
                  class="itemFilm col-2"
                  :style="`background-image:linear-gradient(0deg, rgb(20, 20, 20) 17%, rgba(0, 0, 0, 0.46) 54%), url(http://127.0.0.1:8000/storage/imgFilms/${film.imgFilm}`"
                >
                  <router-link
                    class="linkFilm"
                    :to="'/singlefilm/' + film.id"
                    >{{ film.nameFilm }}</router-link
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import BannerComponent from "@/components/BannerComponent.vue";
export default {
  name: "AllFilmsView",
  data() {
    return {
      listFilms: [],
      orderFilms: 'asc'
    };
  },
  components: { BannerComponent },
  methods: {
    async getFilmsAsc() {
      const reqFilms = await fetch(`http://127.0.0.1:8000/api/filmsasc`);
      const dataFilms = await reqFilms.json();
      console.log(dataFilms);
      this.listFilms = dataFilms.data;
    },
    async getFilmsDesc() {
      const reqFilms = await fetch(`http://127.0.0.1:8000/api/filmsdesc`);
      const dataFilms = await reqFilms.json();
      console.log(dataFilms);
      this.listFilms = dataFilms.data;
    },
    oderFilms(){
      console.log(this.orderFilms)
      if(this.orderFilms == 'asc'){
        this.getFilmsAsc()
      }else{
        this.getFilmsDesc()
      }
    }
  },
  created() {
    this.getFilmsAsc();
  },
  computed: {
    backgroundImage() {
      return `background-image:linear-gradient(0deg, rgb(20, 20, 20) 9%, rgb(20, 20, 20) 17%, rgb(0 0 0 / 46%) 54%), url(http://127.0.0.1:8000/storage/imgFilms/${this.imgFilm}`;
    },
  },
};
</script>
<style scoped>
.titleBanner {
  position: absolute;
  top: 0;
  text-align: center;
  margin-top: 12%;
  width: 100%;
  color: #141414;
}
.banner {
  background-image: linear-gradient(
      0deg,
      rgba(20, 20, 20, 1) 9%,
      rgba(20, 20, 20, 1) 17%,
      rgb(0 0 0 / 70%) 54%
    ),
    url(http://localhost:8081/img/Banner01.bbd48cf2.jpg);
}
.titleAllFilms {
  font-size: 50px;
  font-weight: 300;

  color: #fff !important;
}
.allFilms {
  height: 100%;
  display: flex;
  justify-content: center;
}
.containerFilms {
  justify-content: left;
  padding: 40px 40px;
}
.tittleFilms {
  color: #fff !important;
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
  border: 1px solid black;
}
.container {
  margin-right: 2px;
  height: 150px;
}
.linkFilm {
  text-decoration: none;
  color: #fff;
}
</style>