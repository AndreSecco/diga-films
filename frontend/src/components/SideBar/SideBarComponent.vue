<template>
 <div class="sideBar">
    <div class="linkSidebar">
        <router-link class="itemSidebar" to="/account">Sua Conta</router-link>
        <router-link class="itemSidebar" to="/account/films">Filmes</router-link>
        <router-link class="itemSidebar" to="/account/tags">Tags</router-link>
    </div>
  </div>
</template>
<script>
export default {
    name: "SideBarComponent"
}
</script>
<style scoped>
.sideBar{
    position: absolute;
    width: 230px;
    background: #141414;
    height: 600px;
    border-right: 1px solid #878787;
    margin-top: 7%;
}
.itemSidebar{
    width: 100%;
    text-align: left;
    padding-left: 20%;
    font-size: 20px;
    padding-top: 13px;
    padding-bottom: 13px;
    text-decoration: none;
    color: #fff;
}
.router-link-active{
    background: #5151518a;
}
.itemSidebar:hover{
    color: rgb(177, 177, 177);
}
.linkSidebar{
    display: grid;
}
</style>