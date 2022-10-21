<template>
  <div class="categories row col-12">
    <div class="col-2">
      <div class="categoriesComponent">
        <p class="titleCategories">Ação</p>
      </div>
    </div>
    <div class="col-2">
      <div class="categoriesComponent">
        <p class="titleCategories">Aventura</p>
      </div>
    </div>
    <div class="col-2">
      <div class="categoriesComponent">
        <p class="titleCategories">Terror</p>
      </div>
    </div>
    <div class="col-2">
      <div class="categoriesComponent">
        <p class="titleCategories">Romance</p>
      </div>
    </div>
    <div class="col-2">
      <div class="categoriesComponent">
        <p class="titleCategories">Comédia</p>
      </div>
    </div>
    <div class="col-2">
      <div class="categoriesComponent">
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
.categories {
  background: transparent;
  width: 100%;
  margin: 0px;
  padding: 20px;
  
  margin-top: -160px;
}
.categoriesComponent {
  background: #fff;
  border-radius: 25px;
  padding: 40px;
  transition: 0.5s;
}
.categoriesComponent:hover{
    margin-left: -10px;
    margin-right: -10px;
    
}
.titleCategories {
  margin: 0px;
}
</style>