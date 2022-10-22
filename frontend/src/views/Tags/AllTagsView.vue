<template>
    <div>
        <BannerComponent />
        <div class="titleBanner">
            <h1 class="titleAllTags">Todos as Tags</h1>
        </div>
        <div class="pageContentTags">
            <div class="itemTags">
                <p>Ação</p>
            </div>
        </div>
    </div>
</template>
<script>
import BannerComponent from '@/components/Home/BannerComponent.vue';
export default {
    name: "TagsView",
    components: { BannerComponent }
}
</script>
<style>
.titleBanner{
    position: absolute;
    top: 0;
    text-align: center;
    margin-top: 12%;
    width: 100%;
    color: #fff;
}
.banner{
    background-image: linear-gradient(0deg, rgba(20,20,20,1) 9%, rgba(20,20,20,1) 17%, rgb(0 0 0 / 70%) 54%), url(http://localhost:8081/img/Banner01.bbd48cf2.jpg);
}
.titleAllTags{
    font-size: 50px;
    font-weight: 300;
}
</style>