<template>
  <div class="categories row col-12">
    <div class="col-2">
      <div class="categoriesComponent categoryAction">
        <p class="titleCategories">Ação</p>
      </div>
    </div>
    <div class="col-2">
      <div class="categoriesComponent categoryAventura">
        <p class="titleCategories">Aventura</p>
      </div>
    </div>
    <div class="col-2">
      <div class="categoriesComponent categoryTerror">
        <p class="titleCategories">Terror</p>
      </div>
    </div>
    <div class="col-2">
      <div class="categoriesComponent categoryRomance">
        <p class="titleCategories">Romance</p>
      </div>
    </div>
    <div class="col-2">
      <div class="categoriesComponent categoryComedy">
        <p class="titleCategories">Comédia</p>
      </div>
    </div>
    <div class="col-2">
      <div class="categoriesComponent categoryFiccao">
        <p class="titleCategories">Ficção</p>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "CategoriesComponent",
};
</script>
<style>
.categoryAction {
  background-image: linear-gradient(#00000094, #00000094), url("@/assets/Category/acao.webp");
}
.categoryAventura {
  background-image: linear-gradient(#00000094, #00000094), url("@/assets/Category/aventura.jpg");
}
.categoryTerror {
  background-image: linear-gradient(#00000094, #00000094), url("@/assets/Category/terror.webp");
}
.categoryRomance {
  background-image: linear-gradient(#00000094, #00000094), url("@/assets/Category/romance.jpg");
}
.categoryRomance {
  background-image: linear-gradient(#00000094, #00000094), url("@/assets/Category/romance.jpg");
}
.categoryComedy {
  background-image: linear-gradient(#00000094, #00000094), url("@/assets/Category/comedia.jpg");
}
.categoryFiccao {
  background-image: linear-gradient(#00000094, #00000094), url("@/assets/Category/fantasia.jpg");
}

.categories {
  background: transparent;
  width: 100%;
  margin: 0px;
  padding: 20px;

  margin-top: -160px;
}
.categoriesComponent {
  border-radius: 25px;
  padding: 40px;
  transition: 0.5s;
  background-position: center;
  background-size: cover;
  color: #fff;
}
.categoriesComponent:hover {
  margin-left: -10px;
  margin-right: -10px;
}
.titleCategories {
  margin: 0px;
}
</style>