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
          <button class="btn btnTags col-2">Salvar</button>
          <button class="btn btnTags col-2">Cancelar</button>
        </div>
        <div class="content">
            <table border="1" class="mt-5">
                <tbody id="tbody">
                    <tr>
                        <td>Comédia</td>
                        <td class="right">
                            <img src="@/assets/Buttons/btn-editar.png" alt="">
                            <img src="@/assets/Buttons/btn-deletar.png" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>Ação</td>
                        <td class="right">
                            <img src="@/assets/Buttons/btn-editar.png" alt="">
                            <img src="@/assets/Buttons/btn-deletar.png" alt="">
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
};
</script >
<style scoped>
.right{
  text-align: right;
}
table{
    border-collapse: collapse;
    border: 1px solid #ccc;
    width: 100%;
}
table th, td{
    text-align: left;
    padding: 15px 15px;
}
table tr{
  border-bottom: 1px solid rgb(179, 179, 179)
}
table td img{
    width: 22px;
    margin-right: 10px;
}
tbody{
  background: #ccc;
    color: #141414;
}

.btnTags{
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
}
.pageTags {
  background: #141414;
  color: #fff;
}
</style>