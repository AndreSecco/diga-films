<template>
  <div class="panelFilm">
    <SideBarComponent />
    <div class="containerPanelFilms">
      <div class="headerFilms row">
        <div class="titleFilms col-7">
          <h1>Todos os Filmes</h1>
        </div>
        <div class="col-5 divBtnNew">
          <router-link class="btn btnAccount btnNewFilm col-6" to="/account/newfilm">Novo Filme</router-link>
        </div>
      </div>
      
      <div class="contentAccount">
        <div class="col-12 allFilms">
          <div class="containerFilms">

            <div class="row">
              <div v-for="film in listFilms" :key="film.idFilm" class="container row mt-3 col-3">
                <div class="itemFilm">
                  <div class="col-12 btnActions">
                  <router-link :to="{name: 'updatefilm', params: {idFilm: film.id}}" class="btn btn-light m-1"><i class="fa-solid fa-pen-to-square"></i></router-link>
                  <button class="btn btn-light m-1" @click="deleteFilm(film.id)"><i class="fa-solid fa-trash"></i></button>
                  </div>
                  <div class="col-12">
                    <p>{{film.nameFilm}}</p>

                  </div>
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
import SideBarComponent from "@/components/SideBar/SideBarComponent.vue";
export default {
  name: "FilmView",
  components: { SideBarComponent },
  data(){
    return{
      idFilm: '',
      nameFilm: '',
      listFilms: [],
      nameFilm: ''
    }
  },
  methods:{
    async getFilms(){
      const reqFilms = await fetch(`http://127.0.0.1:8000/api/films`)
      const dataFilms = await reqFilms.json()
      console.log(dataFilms)
      this.listFilms = dataFilms
    },
    async deleteFilm(id){
      const req = await axios.delete(`http://127.0.0.1:8000/api/deletefilm/${id}`)
      this.getFilms()
    }
  },
  created(){
    this.getFilms()
  }
};
</script >
<style scoped>
.btnActions{
  display: flex;
    margin-top: -70px;
    padding-left: 50%;
}
.divBtnNew{
  display: flex;
  justify-content: right;
  padding-right: 6%;
}
.btnNewFilm{
  height: 55px;
}

.panelFilm {
  background: #141414;
  color: #fff;
}
.containerPanelFilms{
  height: 100vh;
  padding: 10%;
  
  overflow-y: auto;
}
.contentAccount{
  width: 100%;
}

.btnAccount{
  margin: 0px;
  align-items: center;
  display: flex;
  justify-content: center;
}

.itemFilm {
  background-color: rgba(255, 255, 255, 0.308);
  padding: 36px;
  height: 300px;
  border-radius: 25px;
  align-items: center;
  display: grid;
  justify-content: center;
}
.container{
    margin-right: 2px;
    height: 320px;
}
</style>