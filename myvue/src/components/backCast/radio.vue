<template>
	<div>
		<ul class="book_main">
			<img class="first" src="static/images/ic_status_anonymous_header.png"/>
			<h3>发现有趣的人</h3>
			<p class="note">关注他们，发现更大的世界</p>
			<li v-for="(item,index) in Radio">
					<img class="portrait" :src="item.pic"/>
					<div class="m_pic" >
						<div class="tit">
							<h5>{{item.title}}<br/><span>{{item.number}}人关注</span></h5>
							<button>关注</button>
						</div>
						<p class="auth">{{item.food}}</p>
					</div>
			</li>
		</ul>
	</div>
</template>

<script>
	export default{
		data:function(){
			return {
				Radio:[]
			}
		},
		created:function(){
			this.axios.get('static/comment.json').then(
				(res=>{
					this.Radio=res.data.subjects;
				})
			);
		}
	}
</script>

<style scoped="scoped">
	ul{list-style: none;position: relative;}
	.book_main{overflow: hidden;padding-top: 0.2rem;}
	.first{width: 1.2rem;height: 1rem;padding:0.5rem 0.1rem 0.1rem 0.4rem;}
	.book_main h3{display: inline;font-size: 0.18rem;line-height:0.35rem;padding-left: 0.1rem;position: absolute;top: 1rem;left:1.6rem;}
	.book_main p{
		font-size: 0.16rem;
	}
	.book_main .note{position: absolute;top: 1.4rem;left:1.7rem;color: #CCCCCC;}
	.book_main .portrait{font-size: 0.16rem;padding-left: 0.1rem;width: 0.6rem;height: 0.6rem;border-radius: 50%;display: block;float: left;margin-top: 0.2rem;}
	.book_main .m_pic{float: left;width:72%;margin-left:0.1rem;min-height: 0.6rem;background: #EEEEEE;margin-top: 0.2rem;border-radius: 0.1rem;}
	.book_main .m_pic .tit{
		height: 0.6rem;
	}
	.book_main .m_pic h5{vertical-align: top; font-size: 0.16rem;display: block;height:0.2rem;line-height:0.2rem;display: inline-block;padding:0.2rem 0 0 0.1rem;}
	.book_main .m_pic span{font-size: 0.12rem;color: #CCCCCC;}
	.book_main .m_pic button{height: 0.3rem;width: 0.6rem;line-height: 0.3rem;background: #42B983;border-radius: 0.08rem;border:none;float: right;margin: 0.2rem 0.1rem 0 0;font-size: 0.16rem}
	.book_main .m_pic .auth{vertical-align: top;font-size: 0.14rem;color: #393939;line-height: 0.2rem;padding: 0.15rem 0.1rem;}
	
</style>