<template>
    <div>
        <button class="btn btn-info" @click="togglebutton" v-text="buttontext">  </button>
    </div>
</template>

<script>
    export default {
        props: ['button', 'slider',],
        mounted() {
            console.log('Component mounted.')
        },
        data: function () {
            return {
                status: this.button,
            }
        },
        methods: {
            togglebutton(){
                if (this.status == 1) {
                    axios.get('/admin/slider/'+this.slider+'/hide')
                    .then(response =>{
                        this.status = 0
                    });
                } else {
                    axios.get('/admin/slider/'+this.slider+'/show')
                    .then(response =>{
                        this.status = 1
                    });
                }
            }
        },
        computed: {
            buttontext(){
                return (this.status == 1) ? 'Hide' : 'Show';
            }
        }
    }
</script>
