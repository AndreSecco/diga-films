<template>
  <div class="pageAccount">
    <SideBarComponent />
    <div class="containerAccount">
      <div class="headerAccount row">
        <div class="titleNewFilm col-7">
          <h1>Inserir Novo Filme</h1>
        </div>
        <button class="btn btnAccount col-2" @click="addFilm()">Salvar</button>
        <router-link class="btn btnAccount btnNewFilm col-2" to="/account/films"
          >Cancelar</router-link
        >
      </div>
      <div class="contentAccount">
        <div class="form-floating">
          <input
            v-model="nameFilm"
            type="text"
            class="form-control inputAccount"
            id="nameFilm"
            placeholder="Insira o nome do filme"
          />
          <label for="nameFilm">Nome do Filme</label>
        </div>
        <div class="row">
          <div class="form-floating col-9">
            <input
              v-model="fileFilm"
              type="text"
              class="form-control inputAccount"
              id="fileFilm"
              placeholder="Selecione um arquivo"
            />
            <label for="fileFilm">Arquivo do Filme</label>
          </div>
          <div class="form-floating col-3">
            <input
              v-model="sizeFilm"
              type="text"
              class="form-control inputAccount"
              id="sizeFilm"
              placeholder="Selecione uma imagem"
            />
            <label for="sizeFilm">Tamanho </label>
          </div>
        </div>
        <div class="form-floating">
          <input
            v-model="imgFilm"
            type="text"
            class="form-control inputAccount"
            id="imgFilm"
            placeholder="Selecione uma imagem"
          />
          <label for="imgFilm">Capa do Filme</label>
        </div>
        <div class="form-floating">
          <input
            v-model="descriptionFilm"
            type="text"
            class="form-control inputAccount"
            id="descriptionFilm"
            placeholder="Selecione uma imagem"
          />
          <label for="descriptionFilm">Descrição do Filme</label>
        </div>
        <div class="form-floating">
          <input
            v-model="tagsFilm"
            type="text"
            class="form-control inputAccount"
            id="tagsFilm"
            placeholder="Selecione uma imagem"
          />
          <label for="tagsFilm">Tags</label>
        </div>
      </div>
    </div>
  </div>
</template>
  <script>
import SideBarComponent from "@/components/SideBar/SideBarComponent.vue";
import router from "@/router";
export default {
  name: "NewFilmView",
  components: { SideBarComponent },
  data() {
    return {
      nameFilm: "",
      fileFilm: "",
      sizeFilm: "",
      imgFilm: "",
      descriptionFilm: "",
      tagsFilm: [],
    };
  },
  methods:{
    validateFilm(){
      if(!this.nameFilm){
        alert("Insira o nome do Filme")
      }else if(!this.fileFilm){
        alert("Insira um arquivo")
      } else {
        return true
      }
    },

    async addFilm(){
      if(this.validateFilm()){
        let data = {
          nameFilm: this.nameFilm,
          fileFilm: this.fileFilm,
          sizeFilm: this.sizeFilm,
          imgFilm: this.imgFilm,
          description: this.descriptionFilm,
          tagsFilm: this.tagsFilm
        }
        try{
          const req = await axios.post(
          'http://127.0.0.1:8000/api/addfilm',
          data
          )
          router.push("films")
        }catch(e){

        }
      }
    }
  }
};
</script>
  <style>
.titleNewFilm {
  padding-left: 20%;
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
.btnNewFilm {
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>