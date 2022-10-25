<template>
  <div style="background: #141414;">
    <div class="banner" :style="backgroundImage">
      <p class="titleFilm">{{ nameFilm }}</p>
      <iframe
        :src="`http://127.0.0.1:8000/storage/videoFilms/` + fileFilm"
        frameborder="0"
      ></iframe>
      <p class="descriptionFilm">{{description}}</p>
    </div>
  </div>
</template>
<script>
export default {
  name: "SingleFilmView",
  data() {
    return {
      nameFilm: "",
      fileFilm: "",
      description: "",
      imgFilm: "",
    };
  },
  methods: {
    async getFilm() {
      const req = await fetch(
        `http://127.0.0.1:8000/api/singlefilm/${this.$route.params.id}`
      );
      const data = await req.json();
      this.nameFilm = data[0].nameFilm;
      this.description = data[0].description;
      this.fileFilm = data[0].fileFilm;
      this.imgFilm = data[0].imgFilm;
      console.log(data);
    },
  },
  created() {
    this.getFilm();
  },
  computed: {
    backgroundImage() {
      return `background-image:linear-gradient(0deg, rgb(20, 20, 20) 9%, rgb(20, 20, 20) 17%, rgb(0 0 0 / 46%) 54%), url(http://127.0.0.1:8000/storage/imgFilms/${this.imgFilm}`;
    },
  },
};
</script>
<style scoped>
.banner {
  /* background-image:linear-gradient(0deg, rgba(20,20,20,1) 9%, rgba(20,20,20,1) 17%, rgba(0,0,0,0) 54%), url(@/assets/Films/Banner01.jpg); */
  height: 100%;
  margin-bottom: -45px;
  background-position: center;
}
.bannerImg {
  width: 100%;
}
.titleFilm {
    height: 232px;
    padding-top: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 56px;
  color: #fff;
}
iframe{
    width: 1000px;
    height: 600px;
}
.descriptionFilm{
    margin: 45px 0px;
    color: #fff;
    padding-bottom: 100px;
    font-size: 19px;
}
</style>>