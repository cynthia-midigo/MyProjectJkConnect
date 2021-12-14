<template>
    <div>
        <hr>
		<button class="btn btn-warning text-center" v-on:click.prevent="addProductToCart()">
			Add To cart
		</button>
    </div>
</template>

<script>
    export default {
        data(){
          return{
              
          }
        },
        props:['productId', 'userId'],
        methods:{
            async addProductToCart(){

                //Checking if user logged in
               if(this.userId==0){
                   this.$toastr.e('You need to login,To add this product in Cart');
                   return;
               }
               //if user logged in then add item to cart
               let response=await axios.post('/cart', {
                   'product_id' :this.productId
               });
              this.$root.$emit('changeInCart',response.data.items);
            }

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
