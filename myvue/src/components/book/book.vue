<template>
	<div id="box">
		<myHead>
			<p slot="title">房源</p>
			<img slot="one" class="im2" :src="src1"/>
			<img slot="two" class="im3" :src="src2"/>
		</myHead>
		<div class="bookList">
			<ul class="b-ul1">
				<li :class="{ac:nowIndex==1}" @click="nowIndex=1"> <router-link class="li1" to="/book/video">单间</router-link></li>
				<li :class="{ac:nowIndex==2}" @click="nowIndex=2"> <router-link class="li1" to="/book/read">合租</router-link></li>
				<li :class="{ac:nowIndex==3}" @click="nowIndex=3"> <router-link class="li1" to="/book/tv">经济房</router-link></li>
				<li :class="{ac:nowIndex==4}" @click="nowIndex=4"> <router-link class="li1" to="/book/city">豪华间</router-link></li>
			</ul>
		</div>
		
		<router-view></router-view>
	</div>
</template>

<script>
	import myHead from '../head'
	export default{
		data:function(){
			return {
				src1:'static/images/ic_group_search.png',
				src2:'static/images/ic_create_group_chat_blue.png',
				nowIndex:1
			}
		},
		created:function(){
				this.$router.push('/book/video')
		},
		methods:{},
		components:{myHead}
	}
</script>

<style scoped="scoped">
	ul li{list-style: none;}
	.bookList .b-ul1{border-bottom: 1px solid #ccc;height: 0.42rem;}
	.li1{text-decoration: none;color: #B6B6B6;}
	.bookList{margin-top: 0.5rem;width: 100%;}
	.bookList li{
		width:25%;
		float: left;
		height:0.4rem;
		text-align: center;
		line-height: 0.4rem;
		border-bottom: 2px solid #fff;
		font-size: 0.17rem;
	}
	.bookList .ac{border-bottom: 2px solid #42BF55;}
</style>