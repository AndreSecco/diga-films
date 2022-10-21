<template>
  <div class="home">
    <BannerComponent />
    <CategoriesComponent />
    <FilmsComponent />
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from "@/components/HelloWorld.vue";
import BannerComponent from "@/components/Home/BannerComponent.vue";
import CategoriesComponent from "@/components/Home/CategoriesComponent.vue";
import FilmsComponent from "@/components/Home/FilmsComponent.vue";

export default {
  name: "HomeView",
  components: {
    HelloWorld,
    BannerComponent,
    CategoriesComponent,
    FilmsComponent
},
};
</script>
