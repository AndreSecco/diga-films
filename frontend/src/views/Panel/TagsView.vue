<template>
  <div class="pageTags">
    <SideBarComponent />
    <div class="containerTags">
      <h1>Página de Tags</h1>
      <div class="contentTags">
        <div class="form-floating">
          <input
            v-model="nameTag"
            type="text"
            class="form-control inputAccount"
            id="nameTag"
            placeholder="Insira o nome da Tag"
          />
          <label for="nameTag">Nome da Tag</label>
        </div>
        <div class="row">
          <button class="btn btnTags col-2" @click="saveTag(this.idTag)">
            {{ nameBtn }}
          </button>
          <button class="btn btnTags col-2" @click="cancelTag">Cancelar</button>
        </div>
        <div class="content">
          <table border="1" class="mt-5">
            <tbody id="tbody">
              <tr v-for="tag in allTags" :key="tag.id">
                <td>{{ tag.nameTag }}</td>
                <td class="right">
                  <img
                    src="@/assets/Buttons/btn-editar.png"
                    class="btnAcao"
                    alt=""
                    @click="editTag(tag.id)"
                  />
                  <img
                    src="@/assets/Buttons/btn-deletar.png"
                    class="btnAcao"
                    alt=""
                    @click="deleteTag(tag.id)"
                  />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import SideBarComponent from "@/components/SideBar/SideBarComponent.vue";
export default {
  name: "AccountView",
  components: { SideBarComponent },
  data() {
    return {
      idTag: null,
      nameTag: null,
      allTags: [],
      nameBtn: "Salvar",
    };
  },
  methods: {
    // Deletar a tag
    async deleteTag(id) {
      const reqTag = await axios.delete(
        `http://127.0.0.1:8000/api/deletetag/${id}`
      );
      this.getTags();
      this.idTag = null;
    },

    // Preparar a tag para edição
    async editTag(id) {
      const reqTag = await fetch(`http://127.0.0.1:8000/api/edittag/${id}`);
      const data = await reqTag.json();
      this.nameTag = data.nameTag;
      this.idTag = id;

      this.nameBtn = "Editar";
    },

    // Adicionar uma tag
    async addTag() {
      const data = {
        nameTag: this.nameTag,
      };

      const reqTag = await axios.post(`http://127.0.0.1:8000/api/addtag`, data);
      this.nameTag = "";
      this.idTag = null;
      this.getTags();
    },

    //  Realizar o update de uma tag
    async updateTag(id){
      let data = {
        'nameTag': this.nameTag
      }

      const req = await axios.put(`http://127.0.0.1:8000/api/updatetag/${id}`, data)
      this.getTags();
      this.cancelTag()
    },

    // Validar qual o tipo de ação
    async saveTag(id) {
      if (this.idTag == null) {
        this.addTag();
        // console.log('Save')
        // console.log(this.idTag)

      } else {
        this.updateTag(id);
        // console.log('Edit')
        // console.log(this.idTag)
      }
    },

    // Puxa todas as tags em uma lista
    async getTags() {
      const getTags = await fetch("http://127.0.0.1:8000/api/tags");
      const data = await getTags.json();
      this.allTags = data;
    },

    // Cancela a ação limpando os campos e variáveis
    cancelTag() {
      this.idTag = null;
      this.nameTag = "";
      this.nameBtn = "Salvar";
    },
  },
  created() {
    this.getTags();
  },
};
</script >
<style scoped>
.right {
  text-align: right;
}
table {
  border-collapse: collapse;
  border: 1px solid #ccc;
  width: 100%;
}
table th,
td {
  text-align: left;
  padding: 15px 15px;
}
table tr {
  border-bottom: 1px solid rgb(179, 179, 179);
}
table td img {
  width: 22px;
  margin-right: 10px;
}
tbody {
  background: #ccc;
  color: #141414;
}
.btnAcao {
  cursor: pointer;
}

.btnTags {
  background: #ffffffdb;
  margin-right: 2px;
  padding: 0px 27px;
  height: 40px;
  margin-left: 15px;
}
.contentTags {
  width: 93%;
  padding-left: 20%;
}
.containerTags {
  height: 100vh;
  padding: 10%;
  padding-left: 230px;
  overflow-y: auto;
}
.pageTags {
  background: #141414;
  color: #fff;
}
</style>