<template>
    <div>
        <button class="btn btn-primary" @click="likePost"> Follow </button>
    </div>
</template>

<script>
    export default {
        props: ['userId'],
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            likePost(){
                axios.post('/like/' + this.userId)
                    .then(response=>{
                        alert(response.data);
                    });
;            }
        }
    }
</script>
