<template>
	<div class="swiper-container">
	    <div class="swiper-wrapper">
	        <div class="swiper-slide slide1">
	        	<img @click="fn" src="static/images/banner/img_01.jpg"/>
	        	<div class="banner_info">
	        		<h4>灵魂画手租房记</h4>
	        		<p>给你带来不一样的租房体验</p>
	        		<span>查看详情>></span>
	        	</div>
	        </div>
	        <div class="swiper-slide slide2">
	        	<img @click="fn" src="static/images/banner/img_02.jpg"/>
	        	<div class="banner_info">
	        		<h4>灵魂歌手租房记</h4>
	        		<p>享受生活中的天籁之音</p>
	        		<span>查看详情>></span>
	        	</div>
	        </div>
	        <div class="swiper-slide slide3">
	        	<img @click="fn" src="static/images/banner/img_03.jpg"/>
	        	<div class="banner_info">
	        		<h4>灵魂舞者租房记</h4>
	        		<p>其实艺术就在你身边</p>
	        		<span>查看详情>></span>
	        	</div>
	        </div>
	    </div>
	    <div class="swiper-pagination"></div>
	</div>
</template>

<script>
	export default{
		mounted:function(){
			new Swiper ('.swiper-container', {
			    direction: 'horizontal',
			    loop: true,
			    autoplay:1000,
				pagination:'.swiper-pagination',
			})
		},
		methods:{
			fn(){
				this.$router.push({path: '/listRoom'});
			}
		}

		
	}
</script>

<style scoped="scoped">
	.swiper-container{width: 100%;margin-top:0.5rem;}
	.swiper-container img{width: 100%;}
	.banner_info{
		width: 100%;
		height: 1rem;
		padding: 0.1rem;
	}
	.banner_info h4{
		padding-left:1%;
		font-size: 0.18rem;
		font-weight: normal;
	}
	.banner_info p,span{
		vertical-align: top;
		display: inline-block;
		font-size: 0.14rem;
		font-weight: normal;
		padding-top: 0.3rem;
	}
	.banner_info span{
		color: #66c4d0;
	}
	.banner_info p{
		width: 60%;
		color: #676767;
	}
</style>