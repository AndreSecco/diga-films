<template>
  <div class="pageAccount">
    <SideBarComponent />
    <div class="containerAccount">
      <div class="row">
        <div class="titleAccount col-7">
          <h1>Sua Conta</h1>
        </div>
        <!-- <button class="btn btnAccount col-2">Alterar</button>
        <button class="btn btnAccount col-2">Cancelar</button> -->
      </div>
      <div class="contentAccount">
        <div class="form-floating">
          <input
            v-model="email"
            type="email"
            class="form-control inputAccount"
            id="floatingInput"
            placeholder="Seu E-mail"
          />
          <label for="floatingInput">E-mail</label>
        </div>
        <!-- <div class="form-floating">
          <input
            v-model="password"
            type="password"
            class="form-control inputAccount"
            id="floatingPassword"
            placeholder="Password"
          />
          <label for="floatingPassword">Senha</label>
        </div> -->
      </div>
      <div class="w-100 footerAccount">
        <button class="btn btnAccountExit col-2" @click="exitSystem()">Sair</button>
      </div>
    </div>
  </div>
</template>
<script>
import SideBarComponent from "@/components/SideBar/SideBarComponent.vue";
import Cookie from "js-cookie";
export default {
  name: "AccountView",
  data(){
    return{
      email: ''
    }
  },
  components: { SideBarComponent },
  methods:{
    exitSystem(){
      Cookie.remove('name')
      Cookie.remove('idUser')
      Cookie.remove('token')
      window.location = '/'
    },

    fillUserInf(){
      this.email = Cookie.get('email')
    }
  },
  created(){
    this.fillUserInf()
  }
};
</script>
<style>
.btnAccountExit {
  background: #ffffffdb;
  margin-right: 2px;
  padding: 11px 49px !important;
}
.footerAccount {
  display: flex;
  justify-content: right;
  padding-right: 7%;
}
.inputAccount:focus {
  background: #141414;
  color: #fff;
}
.inputAccount {
  padding: 1rem 0.75rem;
  background: #0000003b;
  margin: 16px 0px;
  color: #fff;
}

.contentAccount {
  width: 93%;
  padding-left: 20%;
}
.containerAccount {
  height: 100vh;
  padding: 10%;
  padding-left: 230px;
}
.pageAccount {
  background: #141414;
  color: #fff;
}

.btnAccount {
  background: #ffffffdb;
  margin-right: 2px;
  padding: 0px 27px;
}
</style>