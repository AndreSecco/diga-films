<template>
  <div class="panelFilm">
    <SideBarComponent />
    <div class="containerPanelFilms">
      <div class="headerFilms row">
        <div class="titleFilms col-7">
          <h1>Seus Filmes</h1>
        </div>
        <div class="col-5 divBtnNew">
          <router-link class="btn btnAccount btnNewFilm col-6" to="/account/newfilm">Novo Filme</router-link>
        </div>
      </div>
      <div class="contentAccount">
        <div class="col-12 allFilms">
          <div class="containerFilms">
            <div class="row">
              <div class="container row mt-3 col-3">
                <div class="itemFilm">
                  <p>O senhor dos anéis</p>
                </div>
              </div>
              <div class="container row mt-3 col-3">
                <div class="itemFilm">
                  <p>O senhor dos anéis</p>
                </div>
              </div>
              <div class="container row mt-3 col-3">
                <div class="itemFilm">
                  <p>O senhor dos anéis</p>
                </div>
              </div>
              <div class="container row mt-3 col-3">
                <div class="itemFilm">
                  <p>O senhor dos anéis</p>
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
};
</script >
<style scoped>
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
  display: flex;
  justify-content: center;
}
.container{
    margin-right: 2px;
    height: 150px;
}
</style>