<template>
  <div class="pageAccount">
    <SideBarComponent />
    <div class="containerAccount">
      <div class="headerAccount row">
        <div class="titleNewFilm col-7">
          <h1>Editar Filme</h1>
        </div>
        <button class="btn btnAccount col-2" @click="updateFilm()">
          Salvar
        </button>
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
              disabled
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
              disabled
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
            disabled
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
        <div class="tagsChk row col-12">           
            <label for="descriptionFilm" class="labelTag">Tags:</label> 
            <div
                v-for="tag in tagFilmsData"
                :key="tag.id"
                class="checkbox-container col-3 mb-1"
                style="text-align: left"
              >
              <input
                  type="checkbox"
                  name="opcionais"
                  v-model="tagsFilm"
                  :value="tag.nameTag"
                />
                <span>{{ tag.nameTag }}</span>
            </div>            
          </div>
      </div>
    </div>
  </div>
</template>
    <script>
import SideBarComponent from "@/components/SideBar/SideBarComponent.vue";
import router from "@/router";
export default {
  name: "UpdateFilmVue",
  components: { SideBarComponent },
  data() {
    return {
      nameFilm: "",
      fileFilm: "",
      sizeFilm: "",
      imgFilm: "",
      descriptionFilm: "",
      tagsFilm: [],
      tagFilmsData: []
    };
  },
  methods: {
    // Puxar informações do Film
    async getUpdateFilm() {
      const reqFilm = await fetch(
        `http://127.0.0.1:8000/api/editfilm/${this.$route.params.idFilm}`
      );
      const dataFilm = await reqFilm.json();
      this.nameFilm = dataFilm.nameFilm;
      this.fileFilm = dataFilm.fileFilm;
      this.sizeFilm = dataFilm.sizeFilm;
      this.imgFilm = dataFilm.imgFilm;
      this.descriptionFilm = dataFilm.description;

      const arrayTags = dataFilm.tagsFilm.split(",")
      this.tagsFilm = arrayTags
    },

    // Update Film
    async updateFilm() {
      let data = {
        nameFilm: this.nameFilm,
        description: this.descriptionFilm,
        tagsFilm: this.tagsFilm.toString(),
      };
      console.log(data)
      try {
        const req = await axios.put(
          `http://127.0.0.1:8000/api/updatefilm/${this.$route.params.idFilm}`,
          data
        );
        router.push("/account/films")
      } catch (e) {}
    },

    // Puxar Tags
    async getTags(){
      const getTags = await fetch("http://127.0.0.1:8000/api/tags");
      const data = await getTags.json();
      this.tagFilmsData = data
    },
  },
  created() {
    this.getTags()
    this.getUpdateFilm();
  },
};
</script>
    <style>
    .form-control:disabled {
    background-color: #3a3a3a;
    opacity: 1;
}
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