<template>
    <div class="banner">
        <img class="bannerImg" src="" alt="">
        <div class="cabecalhoHome">
            <p class="subTitleHome">SEJA BEM VINDO(A)</p>
            <h1 class="titleHome">Gerencie e Assista vídeos<br>De onde quiser!</h1>
            <p class="descHome">Nesta plataforma você poderá cadastrar filmes<br>e gerenciar suas tags de acordo com seu gosto!</p>
            <p class="descHome" v-show="logado">Bem vindo(a): {{userName}}</p>
        </div>
    </div>
</template>
<script>
import Cookie from 'js-cookie';

export default {
    name:'BannerComponent',
    data(){
        return{
            logado: false,
            userName: ''
        }
    },
    methods:{
        // Validar se usuário está logado pelo cookie 
        validateLog(){
            if(Cookie.get('token')){
                this.logado = true
                this.userName = Cookie.get('name')
            }
        }

    },
    created(){
        this.validateLog()
    }
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
.cabecalhoHome{
    margin-top: 10%;
    color: #fff;
    display: grid;
    padding-left: 6%;
    justify-content: left;
}
.subTitleHome{
    text-align: left;
    font-size: 18px;
}
.titleHome{
    text-align: left;
    font-size: 55px;
}
.descHome{
    text-align: left;
    font-size: 22px;
    margin-top: 20px;
    font-weight: 200;
}
</style>