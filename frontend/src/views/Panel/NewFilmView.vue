<template>
  <div class="pageAccount">
    <SideBarComponent />
    <div class="containerAccount">
      <form
        method="POST"
        enctype="multipart/form-data"
        @submit.prevent="addFilm"
      >
        <div class="headerAccount row">
          <div class="titleNewFilm col-7">
            <h1>Inserir Novo Filme</h1>
          </div>
          <button class="btn btnAccount col-2" type="submit">Salvar</button>
          <router-link
            class="btn btnAccount btnNewFilm col-2"
            to="/account/films"
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
                type="file"
                class="form-control inputAccount inputFile"
                id="fileFilm"
                required
                accept="video/*"
                @change="fileChange"
              />
              <label for="fileFilm" class="labelFileInput"
                >Arquivo do filme</label
              >
            </div>
            <div class="form-floating col-3">
              <input
                v-model="sizeFilm"
                type="text"
                class="form-control inputAccount inputFile"
                id="sizeFilm"
                placeholder="Selecione uma imagem"
              />
              <label for="sizeFilm" class="labelFileInput">Tamanho </label>
            </div>
          </div>
          <div class="form-floating">
            <input
              @change="changeImage"
              type="file"
              class="form-control inputAccount inputFile"
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
          <!-- <div class="form-floating">
            <input
              v-model="tagsFilm"
              type="text"
              class="form-control inputAccount"
              id="tagsFilm"
              placeholder="Selecione uma imagem"
            />
            <label for="tagsFilm">Tags</label>
          </div> -->
        </div>

      </form>
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
      fileFilm: null,
      sizeFilm: "",
      imgFilm: null,
      descriptionFilm: "",
      tagsFilm: [],
      tagFilmsData: []
    };
  },
  methods: {
    // Valida se o arquivo tem mais de 5Mb
    validateSizeFilm(size) {
      if (size > 5000000) {
        alert("Insira um filme até 5Mb");
        document.getElementById("fileFilm").value = "";
      } else {
        return true;
      }
    },
    validateTypeFilm(type) {
      if (type != "video/mp4") {
        alert("Insira um arquivo .mp4");
        document.getElementById("fileFilm").value = "";
      } else {
        return true;
      }
    },

    // Upload do arquivo
    fileChange(e) {
      if (this.validateSizeFilm(e.target.files[0].size)) {
        if (this.validateTypeFilm(e.target.files[0].type)) {
          this.fileFilm = e.target.files[0];
          this.sizeFilm = e.target.files[0].size;
        }
      }
    },

    // Capturar Capa do Filme
    changeImage(e) {
      this.imgFilm = e.target.files[0];
    },
    // Puxa todas as tags
    async getTags(){
      const getTags = await fetch("http://127.0.0.1:8000/api/tags");
      const data = await getTags.json();
      this.tagFilmsData = data
    },

    // Verifica se o nome foi inserido
    validateFilm() {
      if (!this.nameFilm) {
        alert("Insira o nome do Filme");
      } else {
        return true;
      }
    },
    // Envia para o backend as informações
    async addFilm() {
      if (this.validateFilm()) {
        
        let fd = new FormData();

        fd.append("nameFilm", this.nameFilm);
        fd.append("fileFilm", this.fileFilm);
        fd.append("sizeFilm", this.sizeFilm);
        fd.append("imgFilm", this.imgFilm);
        fd.append("description", this.descriptionFilm);
        fd.append("tagsFilm", Array.from(this.tagsFilm));
        try {
          console.log(fd);
          axios
            .post("http://127.0.0.1:8000/api/addfilm", fd, {
              headers: {
                "Content-Type": "multipart/form-data",
              },
            })
            .then((response) => {
              console.log(response);
            })
            .catch((e) => {
              console.log(e);
            });

          window.location = "/account/films";
        } catch (e) {}
      }
    },
  },
  created(){
    this.getTags()
  }
};
</script>
  <style>
  .labelTag{
    text-align: left;
    margin-bottom: 10px;
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
.inputFile {
  padding-top: 36px !important;
  padding-bottom: 36px !important;
}
.labelFileInput {
  top: 13px !important;
  left: 13px !important;
}

</style>