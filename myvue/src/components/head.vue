<template>
	<div class="sbox">
		<slot name="tex"></slot>
		<slot name="title"></slot>
		<slot name="one"></slot>
		<slot name="two"></slot>
	</div>
</template>

<script>
	export default {
		data:function(){
			return {}
		},
		methods:{},
	}
</script>

<style>
	.sbox .im1{width: 0.2rem;height: 0.2rem;position: absolute;top:30%;left:6%;}
	.sbox{height:0.5rem;width:100% ;margin: 0 auto;position:fixed;top:0;background: #fede31;border-bottom: 1px solid #b6b6b6;z-index: 3;}
	.sbox p{height:0.5rem;width: 85%;text-align:center;line-height:0.5rem;font-size: 0.16rem;color: #393939;}
	.sbox .im2{width: 0.2rem;height: 0.2rem;position: absolute;top:30%;right:17%;}
	.sbox .im3{width: 0.2rem;height: 0.2rem;position: absolute;top:30%;right: 5%;}
	
</style>