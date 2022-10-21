<template>
  <div>
    <Nav />
    <router-view />
    <Footer />
  </div>
</template>
<script>
import Nav from "@/components/NavBar/Nav.vue";
import Footer from "./components/Footer/Footer.vue";
export default {
  name: "AppVue",
  components: {
    Nav,
    Footer,
  },
};
</script>

<style>
#app {
  font-family: Poppins;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
