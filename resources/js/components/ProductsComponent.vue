<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">PRODUCTS</div>

                    <div class="card-body one" v-for='product in products' :key='product.id'>
                         <p class='property'>Title:</p>
                        <p> {{ product.title }} </p>
                        <p class='property'>Description:</p>
                        <p>{{ product.description }} </p>
                        <p class='property'>Price:</p>
                        <p>{{ product.price }} </p>
                        <p class='property'>Image:</p>
                        <p>{{ product.image }} </p>
                        <p class='property'>Category:</p>
                        <p>{{ product.category }} </p>

                    <button class="btn btns" @click.prevent="deleteItem(product.id)"> delete </button>
                     <a class="btn btns" v-bind:href="'products/'+product.id+'/edit'" > edit </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                'products' : []
            }

        },
        mounted() {
            console.log('Component mounted.')
            this.fetchProducts() 
        },
        methods: {
            fetchProducts() {
                axios.get('/api/products')
                    .then(response => {
                        this.products = response.data;
                        console.log(this.products);
                    })
                    .catch((err) => {
                        console.log(err)
                    })
            },
            deleteItem($id){
                axios.delete('/api/products/'+$id)
                .then(response=>{
                    this.products.splice(this.products.indexOf(this.products.id), 1)
                })
            }
        
        }

    }
</script>

<style>

.one {
    border: 2px solid gray;
}
.property {
    color: #3300ff;
    border: none;
}
p {
    border-bottom: 1px solid gray;
}

a {
    color: #3300ff;
}
.btns {
    color: #3300ff;
    font-size: 20px;
    
}
</style>