<template>
  <div class="home">
    <BannerComponent />
    <CategoriesComponent />
    <FilmsComponent />
  </div>
</template>

<script>
// @ is an alias to /src
import BannerComponent from "@/components/Home/BannerComponent.vue";
import CategoriesComponent from "@/components/Home/CategoriesComponent.vue";
import FilmsComponent from "@/components/Home/FilmsComponent.vue";

export default {
  name: "HomeView",
  components: {
    BannerComponent,
    CategoriesComponent,
    FilmsComponent
},
};
</script>
