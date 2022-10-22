<template>
  <div>
    <BannerComponent />
    <div class="titleBanner">
      <h1 class="titleAllFilms">Todos os filmes</h1>
      <div>
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
import BannerComponent from "@/components/Home/BannerComponent.vue";
export default {
  name: "AllFilmsView",
  components: { BannerComponent },
};
</script>
<style scoped>
.titleBanner {
  position: absolute;
  top: 0;
  text-align: center;
  margin-top: 12%;
  width: 100%;
  color: #fff;
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
}
.allFilms {
  height: 100%;
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
.container{
    margin-right: 2px;
    height: 150px;
}
</style>