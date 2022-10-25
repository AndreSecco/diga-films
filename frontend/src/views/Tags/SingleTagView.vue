<template>
    <div>
      <BannerComponent />
      <div class="titleBanner">
        <h1 class="titleAllTags">Filmes de: {{nameTag}}</h1>
      </div>
      <div class="pageContentTags">
        <div v-for="tag in allTags" :key="tag.id" class="itemTags">
          <p>{{ tag.nameTag }}</p>
        </div>
      </div>
    </div>
  </template>
  <script>
  import BannerComponent from "@/components/BannerComponent.vue";
  export default {
    name: "TagsView",
    data(){
      return{
          allTags: [],
          nameTag: ''
      }
    },
    components: { BannerComponent },
    methods: {
      async getTags() {
        const reqTags = await fetch(`http://127.0.0.1:8000/api/singletag/${this.$route.params.id}`);
        const data = await reqTags.json();
        this.nameTag = data.nameTag
        console.log(data)
        this.getFilmsTags(this.nameTag)
      },
      async getFilmsTags(tag){
        const dataFilms = {
            'nameTag': this.nameTag
        }
        console.log(dataFilms)
        const req = await axios.get(`http://127.0.0.1:8000/api/filmcategory`, this.nameTag)
        console.log(req.data)
      }
    },
    created(){
      this.getTags()
    }
  };
  </script>
  <style>
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
  .titleAllTags {
    font-size: 50px;
    font-weight: 300;
  }
  .pageContentTags {
      height: 469px;
      width: 86%;
      overflow: auto;
    margin-top: -488px;
    z-index: 999;
    position: absolute;
    width: 80%;
    margin-left: 8%;
    font-size: 25px;
    color: #fff;
    text-align: left;
  }
  .itemTags {
    border: 1px solid #8e8e8e;
    margin-bottom: 4px;
    background-color: #141414;
    border-radius: 25px;
    padding: 2%;
    height: 18%;
  }
  </style>