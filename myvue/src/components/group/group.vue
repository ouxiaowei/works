<template>
	<div id="box">
		
		<myHead>
			<p slot="title">我有空房</p>
			<img slot="one" class="im2" :src="src1"/>
			<img slot="two" class="im3" :src="src2"/>
		</myHead>
		<banner></banner>
	</div>
</template>

<script>
	import myHead from '../head'
	import Banner from './banner'
	export default{
		data:function(){
			return {
				src1:'static/images/ic_group_search.png',
				src2:'static/images/ic_create_group_chat_blue.png'
			}
		},
		methods:{},
		components:{myHead,Banner}
	}
</script>

<style>
</style>