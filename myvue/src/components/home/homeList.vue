<template>
	<div>
		<ul>
			<li v-for="(item,index) in list">
					<div class="m_item">
						<span class="span1">{{item.title}}</span>
						<span class="span2">{{item.target.desc}}</span>
						<span class="span3">{{item.target.author.name}}</span>
					</div>
					<div class="m_item1">
						<img :src="item.target.author.avatar"/>
						<span class="span4">{{item.source_cn}}</span>
					</div>
			</li>
		</ul>
	</div>
	
</template>

<script>
	import Vue from 'vue'
	import Axios from 'axios'
	import VueAxios from 'vue-axios'
	Vue.use(VueAxios,Axios)
	export default{
		data:function(){
			return {
				list:[]
			}
		},
		created:function(){
			this.axios.get('static/homeData.json').then(
				(res=>{
					//console.log(res.data.recommend_feeds);
					this.list=res.data.recommend_feeds;
					//console.log(this.list[0].title);
				})
			)
		}
	}
</script>

<style scoped="scoped">
	li{
		border-bottom: 1px solid #eee;
		height:1.8rem;
		width: 90%;
		margin: 0 auto;
		margin-top: 0.2rem;
		display: flex;
		flex-direction: row;
	}
	li .m_item{
		width: 65%;
		padding-right: 0.1rem;
	}
	li img{width:1rem;height:1rem;}
	.span1{font-size: 0.17rem;height:0.6rem;overflow: hidden;line-height: 0.2rem;padding-top: 0.1rem;}
	.span2{font-size: 0.16rem;height:0.6rem;overflow: hidden;line-height: 0.15rem;color: #B5B5B5;}
	.span3{font-size:0.14rem;color: #ccc;}
	.span4{font-size:0.14rem;color: #ccc;text-align: center;}
</style>