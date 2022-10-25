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
  /* width */
  ::-webkit-scrollbar {
    width: 3px;
    height: 3px
  }

  /* Track */
  ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 3px white;
    border-radius: 3px;
  }

  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #a4a4a4;
    border-radius: 3px;
  }

  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #a4a4a4;
  }
</style>
