<template>
  <div class="home">
    <BannerHomeComponent />
    <CategoriesComponent />
    <FilmsComponent />
  </div>
</template>

<script>
// @ is an alias to /src
import CategoriesComponent from "@/components/Home/CategoriesComponent.vue";
import FilmsComponent from "@/components/Home/FilmsComponent.vue";
import BannerHomeComponent from "@/components/Home/BannerHomeComponent.vue";

export default {
  name: "HomeView",
  components: {
    CategoriesComponent,
    FilmsComponent,
    BannerHomeComponent
},
};
</script>
