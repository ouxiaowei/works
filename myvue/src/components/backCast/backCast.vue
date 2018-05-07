<template>
	<div>
		<myHead>
			<p slot="title">拼友说</p>
			<img slot="one" class="im2" :src="src1"/>
			<img slot="two" class="im3" :src="src2"/>
		</myHead>
		<myRadio></myRadio>
	</div>
</template>

<script>
	import myHead from '../head'
	import myRadio from './radio'
	export default{
		data:function(){
			return {
				src1:'static/images/ic_status_search_user.png',
				src2:'static/images/ic_create_group_chat_blue.png'
			}
		},
		methods:{},
		components:{myHead,myRadio}
	}
</script>

<style>
</style>