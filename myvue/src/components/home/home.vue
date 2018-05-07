<template>
	<div id="box">
		<myHead>
			<input slot="tex" type="text" placeholder="搜索你想要的房源"/>
			<img slot="title" class="im1" :src="src1"/>
			<img slot="one" class="im2" :src="src2"/>
			<img slot="two" class="im3" :src="src3"/>
		</myHead>
		<banner></banner>
		<div class="flex-container">
			<div class="flex-item one">
				<div class="list_big">
					<h5>拎包入住</h5>
					<img src="/static/images/home/img01.jpg"/>
				</div>
				<div class="list_small">
					<h5>时尚套房</h5>
					<img src="/static/images/home/img02.jpg"/>
				</div>
				<div class="list_small">
					<h5>精装房</h5>
					<img src="/static/images/home/img03.jpg"/>
				</div>
			</div>
  			<div class="flex-item">
				<div class="list_small">
					<h5>单身公寓</h5>
					<img src="/static/images/home/img04.jpg"/>
				</div>
				<div class="list_small">
					<h5>地铁房</h5>
					<img src="/static/images/home/img05.jpg"/>
				</div>
				<div class="list_big">
					<h5>精品复式</h5>
					<img src="/static/images/home/img06.jpg"/>
				</div>
			</div>
		</div>
		<div class="s_box">
			<span class="shot">好房推荐</span>
			<span class="sbc"></span>
		</div>
		<homeList></homeList>
	</div>
</template>

<script>
	import myHead from '../head'
	import Banner from './h_banner'
	import homeList from './homeList'
	export default{
		data:function(){
			return {
				src1:'static/images/ic_search.png',
				src2:'static/images/ic_scan_gray.png',
				src3:'static/images/ic_chat_white.png'
			}
		},
		methods:{},
		components:{myHead,Banner,homeList}
	}
</script>

<style scoped="scoped">
	#box input{
		height:0.3rem;
		width: 85%;
		margin:0.1rem ;
		text-indent:5em;
		border-radius:0.08rem;
		border: none;
		vertical-align: top;
	}
	#box input::-webkit-input-placeholder{color: #CCCCCC;font-size: 0.15rem;padding-left: 0.1rem;line-height: 0.3rem;}
	.s_box .shot{color: coral;padding-left:0.2rem;font-size: 0.17rem;line-height:0.55rem;}
	.s_box .sbc{height:0.3rem;width: 0.1rem;background-color: coral;display: block;margin:-0.4rem 0 0 0;}
	.flex-container{
		height:1.8rem;
		display: -webkit-flex;
		display: flex;
		background-color: #f2f2f2;
		flex-direction: column;
		justify-content: space-around;
		width: 100%;
		border-top:1px solid #d7d7d7;
	}
	.flex-item{
		height:0.7rem;
		display: -webkit-flex;
		display: flex;
		background-color: #f2f2f2;
		flex-direction: row;
		justify-content: space-between;
		margin: 0 3%;
		width: 94%;
	}
	.flex-container .one{
		margin-bottom:0 ;
	}
	.flex-item >div{
		background-color: #fff;
		border-radius: 0.05rem;
		border: 1px solid #e6e6e6;
		color: #494949;
	}
	.flex-item .list_big{
		width: 48%;
		height: 100%;
	}
	.flex-item .list_small{
		width: 22%;
		height: 100%;
	}
	.flex-item h5{
		font-size: 0.16rem;
		font-weight: normal;
		padding-left: 0.1rem;
		height:0.3rem;
		line-height: 0.3rem;
	}
	.flex-item img{
		display: block;
		float: right;
		margin:0.14rem 0.1rem 0 0;
		width: 0.2rem;
	}
</style>