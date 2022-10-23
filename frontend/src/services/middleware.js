import Cookie from 'js-cookie'

export default{
    auth(to, from, next){
        const token = Cookie.get('token', 'name')

        if(!token){
            next('/login')        
        }

        next()        

    }
}