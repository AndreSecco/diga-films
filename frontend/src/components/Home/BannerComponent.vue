<template>
    <div class="banner">
        <img class="bannerImg" src="" alt="">
    </div>
</template>
<script>
export default {
    name:'BannerComponent'
}
</script>
<style>
.banner{
    background-image:linear-gradient(0deg, rgba(20,20,20,1) 9%, rgba(20,20,20,1) 17%, rgba(0,0,0,0) 54%), url(@/assets/Films/Banner01.jpg);
    height: 100vh;
    background-position: center;
}
.bannerImg{
    width: 100%;
}
</style>