<template>
<ul class="list-group">
    <li class="list-group-item">Cras Justo Odio <my-button :nilai='test'></my-button>  </li>
</ul>
</template>

<script>
export default {
    data(){
        return{
            test:'View'
        }
    },
    proops:['mydata'],
    mounted(){
        console.log('Component mounted.')
    }
}
</script>
