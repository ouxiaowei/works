<template>
	<div>
		<ul class="book_main">
			<div><h3>温馨小间</h3><span>更多</span></div>
			<li v-for="(item,index) in USAfilm">
				<div class="m_pic" >
					<img :src="item.subject.images.large"/>
					<h5>{{item.subject.title}}</h5>
					<p>豆瓣评分：{{item.subject.rating.average}}</p>
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
				USAfilm:[]
			}
		},
		created:function(){
			this.axios.get('static/USA.movie.json').then(
				(res=>{
					//console.log(res.data.subjects);
					this.USAfilm=res.data.subjects;
				})
			);
		}
		
	}
</script>

<style scoped="scoped">
	.book_main>div{
		height: 0.5rem;
	}
	.book_main li{
		height: 1.9rem;
		float: left;
	}
	.book_main{overflow: hidden;padding-top: 0.2rem;}
	.book_main h3{vertical-align: top; display: inline-block;font-size: 0.18rem;line-height:0.35rem;padding-left: 0.1rem;}
	.book_main span{float: right;font-size: 0.16rem;padding-right: 0.1rem;line-height: 0.35rem;}
	.book_main .m_pic{height: 1.9rem;float: left;width:1.1rem;margin-left:0.1rem;}
	.book_main .m_pic h5{font-size: 0.16rem;display: block;width: 1rem;overflow: hidden;height:0.2rem;line-height:0.2rem;}
	.book_main .m_pic .auth{float: right;font-size: 0.14rem;color: #393939;height: 0.2rem;line-height: 0.2rem;}
	.book_main .m_pic p{
		font-size: 0.14rem;
		color: #393939;
		height: 0.2rem;
		line-height: 0.2rem;
	}
	.book_main .m_pic img{width:1.1rem;height:1.5rem;display:block;float: left;}
</style>