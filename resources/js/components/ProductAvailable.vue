<template>
    <div>
        <button class="dropdown-item" @click="togglebutton" v-text="buttontext">  </button>
    </div>
</template>

<script>
    export default {
        props: ['available', 'product',],
        mounted() {
            console.log('Component mounted.')
        },
        data: function () {
            return {
                status: this.available,
            }
        },
        methods: {
            togglebutton(){
                axios.post('/admin/product/'+this.product+'/available')
                .then(response =>{
                    this.status = response.data;
                });
            }
        },
        computed: {
            buttontext(){
                return (this.status == 1) ? 'set "Out of Stock"' : 'set "Available"';
            }
        }
    }
</script>
