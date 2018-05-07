<template>
	<div class="g_box">
		<ul class="pic">
			<li><img src="/static/images/07.jpg"/></li>
			<li><img src="/static/images/11.jpg"/></li>
			<li><img src="/static/images/12.jpg"/></li>
			<li><img src="/static/images/11.jpg"/></li>
			<li><span>+</span></li>
		</ul>
		<ul class="person">
			<li class="one"><h6>标题</h6><span>标题不能多于20字</span></li>
			<li class="two"><h6>地址</h6><span>请输入真实地址</span></li>
			<li class="three"><h6>户型</h6><span>平方</span></li>
			<li><h6>楼层</h6><span>所在楼层/总楼层</span></li>
			<li><h6>租 金</h6><span>0元/月</span></li>
		</ul>
	</div>
</template>
<script>
	export default{
		data:function(){
			return {}
		},
		emthods:{},
	}
	
</script>

<style scoped="scoped">
	.g_box{
		margin-top: 0.5rem;
	}
	ul{
		width: 100%;
	}
	.g_box .pic{
		min-height:3rem ;
	}
	.g_box .pic li{
		float: left;
		padding: 0.12rem;
	}
	.g_box .pic li img{
		width: 1rem;
		height:1rem;
		display: block;
	}
	.g_box .pic li span{
		width: 1rem;
		height:1rem;
		display: block;
		background-color: #CCCCCC;
		color: #B5B5B5;
		line-height: 1rem;
		text-align: center;
		font-size: 0.5rem;
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
		height: 0.3rem;
		line-height: 0.3rem;
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