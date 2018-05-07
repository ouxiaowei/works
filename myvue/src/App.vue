<template>
  <div id="app">
    <router-view/>
    <tabbar></tabbar>
  </div>
</template>

<script>
		import tabbar from'./components/tabbar'
		export default {
	  	name: 'app',
			components:{tabbar},
			created:function(){
				this.$router.push('/home')
			}
		}
</script>

<style>
#app {
  
}
*{margin: 0;padding: 0;}
</style>
