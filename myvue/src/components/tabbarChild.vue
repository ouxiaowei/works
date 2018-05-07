<template>
	<div @click="change">
		<span v-show="bool"><slot name="normal"></slot></span><br />
		<span v-show="!bool"><slot name="active"></slot></span><br />
		<span class="title" :class="{active:!bool}">{{title}}</span>
	</div>
</template>

<script>
	export default{
			data:function(){
				return {
				}
			},
			methods:{
				change:function(){
					this.$emit('send',this.mark);
					this.$router.push('/'+this.mark)
				}
			},
			props:['title','mark','sel'],
			computed:{
				bool:function(){
					if(this.mark==this.sel){
						return false
					}else{
						return true
					}
				}
			}
	}
</script>

<style>
	span{
		display: block;
		padding-top: 0;
	}
</style>