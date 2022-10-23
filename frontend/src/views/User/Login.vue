<template>
  <body class="text-center bodyLogin">
    <main class="form-signin w-50 mainLogin m-auto">
      <form @submit.stop.prevent="submit">
        <p class="subTitleLogin">ACESSE SUA CONTA</p>
        <h1 class="h3 mb-3 titleLogin">Faça o Login</h1>
        <p class="descriptionLogin">
          Insira seu e-mail e senha para ter acesso<br />ao todos os filmes e ao
          painel de cadsatros
        </p>
        <div class="form-floating">
          <input
            v-model="email"
            type="email"
            class="form-control inputLogin"
            id="floatingInput"
            placeholder="Seu E-mail"
          />
          <label for="floatingInput">E-mail</label>
        </div>
        <div class="form-floating">
          <input
            v-model="password"
            type="password"
            class="form-control inputLogin"
            id="floatingPassword"
            placeholder="Password"
          />
          <label for="floatingPassword">Senha</label>
        </div>

        <button class="btnLogin btn btn-lg" type="submit">Entrar</button>
      </form>
      <div class="w-100 d-flex mt-4" style="justify-content: left">
        <router-link class="linksLogin" to="/register"
          >Realizar Cadastro</router-link
        >
      </div>
    </main>
  </body>
</template>
<script>
import Cookie from "js-cookie";

export default {
  name: "LoginComponent",
  data() {
    return {
      email: "",
      password: "",
    };
  },

  methods: {
    async submit() {
      const payLoad = {
        email: this.email,
        password: this.password,
      };

      const req = await fetch("http://127.0.0.1:8000/api/login", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          Accept: "application/json",
        },
        body: JSON.stringify(payLoad),
      });
      const data = await req.json();
      if (data.error == "Unauthorized") {
        alert("Usuário ou/e senha inválida");
      } else {
        Cookie.set("token", data.access_token);
        this.logged = true
        const reqUser = await fetch(`http://127.0.0.1:8000/api/listUserLine/${this.email}`)
        const dataUser = await reqUser.json()
        console.log(dataUser)
        Cookie.set('name', dataUser.name)
        Cookie.set('idUser', dataUser.id)
        Cookie.set('email', dataUser.email)

        window.location = '/'
      }
    },
  },
};
</script>
<style>
.linksLogin {
  text-decoration: none;
  color: #141414;
}
.btnLogin {
  width: 40% !important;
  background: #ffffff96;
  border: 1px solid #141414;
  color: #141414;
}
.btnLogin:hover {
  color: #fff;
  background: #141414;
}
.inputLogin {
  padding: 1rem 0.75rem;
  background: #0000003b;
  margin: 16px 0px;
}
.titleLogin {
  font-weight: bold;
  font-size: 45px;
  margin-top: -10px;
}
.mainLogin {
  background: #ffffffcf;
  padding: 100px;
  border-radius: 25px;
}
.mainLogin {
  background: #ffffffcf;
  padding: 70px 70px;
  border-radius: 25px;
}
.bodyLogin {
  height: 120vh;
  align-items: center;
  background-image: linear-gradient(
      0deg,
      rgb(20 20 20 / 70%) 9%,
      rgb(0 0 0 / 70%) 54%
    ),
    url(@/assets/Films/Banner03.jpg);
  display: flex;
  background-position: center;
  background-size: cover;
}
.bd-placeholder-img {
  font-size: 1.125rem;
  text-anchor: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

@media (min-width: 768px) {
  .bd-placeholder-img-lg {
    font-size: 3.5rem;
  }
}

.b-example-divider {
  height: 3rem;
  background-color: rgba(0, 0, 0, 0.1);
  border: solid rgba(0, 0, 0, 0.15);
  border-width: 1px 0;
  box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
    inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
}

.b-example-vr {
  flex-shrink: 0;
  width: 1.5rem;
  height: 100vh;
}

.bi {
  vertical-align: -0.125em;
  fill: currentColor;
}

.nav-scroller {
  position: relative;
  z-index: 2;
  height: 2.75rem;
  overflow-y: hidden;
}

.nav-scroller .nav {
  display: flex;
  flex-wrap: nowrap;
  padding-bottom: 1rem;
  margin-top: -1px;
  overflow-x: auto;
  text-align: center;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
}
</style>