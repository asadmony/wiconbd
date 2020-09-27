<template>
    <div>
        <button class="dropdown-item" @click="togglebutton" v-text="buttontext">  </button>
    </div>
</template>

<script>
    export default {
        props: ['visibility', 'product',],
        mounted() {
            console.log('Component mounted.')
        },
        data: function () {
            return {
                status: this.visibility,
            }
        },
        methods: {
            togglebutton(){
                axios.post('/admin/product/'+this.product+'/visibility')
                .then(response =>{
                    this.status = response.data;
                });
            }
        },
        computed: {
            buttontext(){
                return (this.status == 1) ? 'Hide from Store' : 'Show on Store';
            }
        }
    }
</script>
