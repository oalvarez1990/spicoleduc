//importar componentes vue
const Home =()=> import('../src/Home.vue')
const Contact =()=> import('../src/Contact.vue')

//importar componentes para el crud
const Create =()=> import('../src/spicol/Create.vue')
const Edit =()=> import('../src/spicol/Edit.vue')
const Show =()=> import('../src/spicol/Show.vue')

export const routes=[
    {
        name:'home',
        path:'/',
        component:Home 
    },
    {
        name:'contact',
        path:'/contact',
        component:Contact
    },
    {
        name:'createStudent',
        path:'/create',
        component:Create
    },
    {
        name:'edit',
        path:'/edit/:id',
        component:Edit
    },
    {
        name:'show',
        path:'/show/:id',   
        component:Show
    }


]