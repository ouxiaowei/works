<template>
	<div class="screen">
		<div class="box">
			<img class="big_pic" src="/static/images/001.jpg"/>
			<span class="return"><</span>
			<div class="person_list">
				<div class="item_box top">
					<img src="/static/images/001.jpg"/>
				</div>
				<div class="item_box zhong">
					<span class="person_name">美惠子</span>
					<img class="sex_img" src="/static/images/005.jpg"/>
				</div>
				<div class="item_box">
					<p>关注 57 | 粉丝  86</p>
				</div>
				
			</div>
			<div class="nav_item">
				<div class="item_box">
					<img src="/static/images/002.jpg"/>
					<a href="#">足迹</a>
				</div>
				<div class="item_box">
					<img src="/static/images/003.jpg"/>
					<a href="#">我的帖子</a>
				</div>
				<div class="item_box">
					<img src="/static/images/004.jpg"/>
					<a href="#">收藏</a>
				</div>
			</div>
		</div>
		<ul class="person">
			<li class="one"><h6>我的消息：</h6><span><i>1</i>></span></li>
			<li class="two"><h6>评价/举报</h6><span>></span></li>
			<li class="three"><h6>实名认证</h6><span>></span></li>
			<li><h6>意见反馈</h6><span>></span></li>
			<li><h6>设 置</h6><span>></span></li>
		</ul>
	</div>
</template>

<script>
	import myHead from '../head'
	export default{
		data:function(){
			return {
				src1:'static/images/ic_group_search.png',
				src2:'static/images/ic_create_group_chat_blue.png'
			}
		},
		methods:{},
		components:{myHead}
	}
</script>

<style scoped="scoped">
	.screen{
		padding-bottom: 0.64rem;
	}
	.box{
		text-align: center;
		height: 4.5rem;
		position: relative;
	}
	.person_list{
		width:1.2rem;
		position: absolute;
		top:15%;
		left:36%;
	}
	.person_list .item_box{
		width:100%;
	}
	.person_list .top{
		height: 1.2rem;
	}
	.person_list .zhong{
		height: 0.3rem;
		padding-top: 0.1rem;
	}
	.return{
		position: absolute;
		top: 5%;
		left: 5%;
		font-size:0.23rem;
		color: #F6F6F6;
	}
	.box .big_pic{
		display: block;
		width: 100%;
		height:70%;
		filter:blur(5px);
		-webkit-filter:blur(6px);
		-moz-filter:blur(6px);
		-ms-filter:blur(6px);
		-o-filter:blur(6px);
	}
	.item_box img{
		width: 100%;
		border-radius:50%;
	}
	.item_box .person_name{
		
		height:0.3rem;
		line-height: 0.3rem;
		display: inline-block;
		font-size: 0.18rem;
		font-weight: normal;
		vertical-align: top;
	}
	.item_box .sex{
		display: inline-block;
		width: 0.3rem;
		height: 0.3rem;
		background-color: #f97ba0;
		border-radius: 50%;
	}
	.item_box .sex_img{
		margin-top: 0.05rem;
		width: 0.2rem;
		height: 0.2rem;
		vertical-align: top;
	}
	.item_box p{
		font-size: 0.15rem;
		padding-top: 0.1rem;
	}
	.nav_item{
		width: 100%;
		display: flex;
		flex-direction: row;
		justify-content: space-around;
	}
	.nav_item .item_box{
		display: flex;
		padding-top: 0.1rem;
		flex-direction: column;
	}
	.nav_item .item_box a{
		text-decoration: none;
		font-size: 0.15rem;
		color: #333333;
		font-size: 0.15rem;
		padding-top: 0.05rem;
	}
	.nav_item .item_box img{
		width:0.8rem;
	}
	.person{
		width: 100%;
		list-style: none;
		background-color: #f2f2f2;
		padding-top: 0.13rem;
	}
	.person li{
		width: 100%;
		height: 0.3rem;
		color: #B5B5B5;
		border-bottom: 1px solid #CCCCCC;
		line-height:30px;
		background-color: #fff;
		position: relative;
	}
	.person li h6{
		height: 0.3rem;
		line-height: 0.3rem;
		padding-left: 0.1rem;
		font-size: 0.16rem;
		font-weight: normal;
	}
	.person .two,.three{
		margin-top: 0.13rem;
	}
	.person .one,.person .two{
		border-bottom: none;
	}
	.person .top{
		border-bottom: none;
		padding:60px 10px 0 10px;
	}
	.person li span{
		font-size: 0.16rem;
		height: 0.2rem;
		line-height: 0.2rem;
		display: inline-block;
		position: absolute;
		right: 0.1rem;
		top: 0;
	}
	.person li span i{
		display: inline-block;
		margin-top: 0.05rem;
		width: 0.2rem;
		height: 0.2rem;
		border-radius: 50%;
		background-color: #da0000;
		font-size: 0.15rem;
		font-style: normal;
		text-align: center;
		color: #fff;
	}
	
	
</style>