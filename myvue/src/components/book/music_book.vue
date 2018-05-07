<template>
	<div>
		<ul class="book_main">
				<h3>热门音乐</h3><span>更多</span>
			<li v-for="(item,index) in musicBook">
				<div class="m_pic" >
					<img :src="item.album.artist.img1v1Url"/>
					<h5>{{item.name}}</h5>
					<p>访问量：{{item.ratio}}万</p>
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
				musicBook:[]
			}
		},
		created:function(){
			this.axios.get('static/easy_music.json').then(
				(res=>{
					console.log(res.data.result.tracks);
					this.musicBook=res.data.result.tracks;
				})
			);
		}
		
	}
</script>

<style scoped="scoped">
	ul{list-style: none;}
	.book_main{overflow: hidden;padding-top: 20px;}
	.book_main h3{display: inline-block;font-size: 18px;line-height:35px;padding-left: 10px;}
	.book_main span{float: right;font-size: 16px;padding-right: 10px;line-height: 35px;}
	.book_main .m_pic{height: 190px;float: left;width:110px;margin-left:10px;}
	.book_main .m_pic h5{font-size: 16px;display: block;width: 100px;overflow: hidden;height:20px;line-height:20px;}
	.book_main .m_pic .auth{float: right;font-size: 14px;color: #393939;height: 20px;line-height: 20px;}
	.book_main .m_pic img{width:110px;height:190px;display:block;float: left;width: 110px;height:150px;}
	
</style>