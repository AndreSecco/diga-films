<template>
  <div>
    <div class="navBar">
      <router-link to="/"
        ><img
          src="../../assets/Logos/logo-branca.png"
          alt="Logo"
          width="150"
          id="logo"
      /></router-link>
      <div class="linksMenu">
        <router-link class="linkNavbar" to="/">Início</router-link>
        <router-link class="linkNavbar" to="/alltags">Tags</router-link>
        <router-link class="linkNavbar" to="/allfilms"
          >Todos os Filmes</router-link
        >
        <router-link class="linkNavbar" to="/login" v-show="!logado">Entrar</router-link>
        <router-link class="linkNavbar" to="/register" v-show="!logado"
          >Registrar-se</router-link
        >
        <router-link v-show="logado" class="linkNavbar" to="/account"
          >Painel</router-link
        >
      </div>
    </div>
  </div>
</template>
<script>
import Cookie from 'js-cookie'
export default {
  name: "NavBarComponent",

  data() {
    return {
      logado: false
    };
  },
  methods: {
    // Validar se usuário está logado pelo cookie
    validatePanel() {
      if (Cookie.get("token")) {
        this.logado = true;
      }
    }
  },
  created(){
    this.validatePanel()
  }
};
</script>
<style>
.navBar {
  justify-content: space-between;
  padding: 0;
  background: linear-gradient(
    180deg,
    rgb(0 0 0 / 70%) 0%,
    rgb(0 0 0 / 70%) 90%,
    rgba(0, 0, 0, 0) 100%
  );
  height: 75px;
  display: flex;
  align-items: center;
  padding: 0px 50px 8px 50px;
  position: absolute;
  width: 100%;
  z-index: 999;
}
.linksMenu {
  padding-right: 30px;
}
.linkNavbar {
  text-decoration: none;
  padding: 0px 16px;
  font-size: 15px;
  color: #fff;
  font-weight: 200;
  transition: 0.5s;
}
.linkNavbar:hover {
  font-size: 16px;
  color: #fff;
}
</style>